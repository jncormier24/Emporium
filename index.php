<?php
	require( 'includes/autoload.php' );
	global $GLOBALS;
	
	respond( function($request, $resonse, $app){
		session_start();
		$app->tpl = new EMPSmarty();
		
		$GLOBALS['BASE_DIR'] = dirname(__FILE__);
		$GLOBALS['BASE_URL'] = '/~jncormier/git-checkout/emporium';
		
		$GLOBALS['TITLE'] = 'Emporium';
		$GLOBALS['TEMPLATES'] = $GLOBALS['BASE_DIR'].'/templates';
		
		$GLOBALS['JS'] = $GLOBALS['BASE_URL']."/includes/js";
		$GLOBALS['CSS'] = $GLOBALS['BASE_URL']."/includes/css";
		
		$GLOBALS['uploads'] = '/home/PLYMOUTH/jncormier/Home/git-checkout/emporium/users';
		$GLOBALS['messages'] = array();
		$GLOBALS['person'] = array();
		
		$app->tpl->assign( 'base_url', $GLOBALS['BASE_URL'] );
		$app->tpl->assign( 'js', $GLOBALS['JS'] );
		$app->tpl->assign( 'css', $GLOBALS['CSS'] );
	});

	respond( '/', function($request, $response, $app){
		$app->tpl->assign( 'issues', $_SESSION['messages']['login'] );
		$app->tpl->display( 'index.tpl' );
	});

	respond( '/home', function($request, $response, $app){
		if( $_SESSION['person'] ){
			$user_stuff = EMP::get_user_listings( $_SESSION['person'][0]['u_id'] );
			$user = explode( '@', $_SESSION['person'][0]['email'] );
			$app->tpl->assign( 'listings', $user_stuff );
			$app->tpl->assign( 'person', $_SESSION['person'] );
			$app->tpl->assign( 'errors', $_SESSION['messages']['upload'] );
			$app->tpl->display( 'home.tpl' );
		}
		else{
			$response->redirect( $GLOBALS['BASE_URL'] );
		}
	});
	
	respond( 'GET', '/classifieds/?', function($request, $response, $app){
		if( $_SESSION['person'] ){
			$listings = EMP::search_postings( $_GET['type'] , $_GET['search'] );
			$app->tpl->assign( 'listings', $listings );
			$app->tpl->display( 'classifieds.tpl' );
		}
		else{
			$response->redirect( $GLOBALS['BASE_URL'] );
		}	
	});
	
	respond( 'GET', '/classified/[:id]', function( $request, $response, $app ){
		if( $_SESSION['person'] ){
			$id = $request->param( 'id' );
			$item = EMP::get_posting( $id );
			$user = EMP::find_user( $item[0]['u_id'] );
			$pictures = json_decode( $item[0]['pics'] );
			$app->tpl->assign( 'person', $_SESSION['person'] );
			$app->tpl->assign( 'u_id', $item[0]['u_id'] );
			$app->tpl->assign( 'user', $user[0]['email'] );
			$app->tpl->assign( 'item', $item );
			$app->tpl->assign( 'pics', $pictures );
			$app->tpl->assign( 'list_id', $id );
			$app->tpl->display( 'classified.tpl' );
		}
		else{
			$response->redirect( $GLOBALS['BASE_URL'] );
		}
	});
	
	respond('POST', '/update/?', function( $request, $response, $app ){
		$list_id = $_POST['list_id'];
		$type_id = $_POST['type'];
		$text = $_POST['text'];
		$upload = EMP::update_posting( $list_id, $type, $text );
		if( $upload ){
			$response->redirect( $GLOBALS['BASE_URL'].'/home');
		}
		else{
			$_SESSION['messages']['upload'][] = "There was an error updating your post.";
			$response->redirect( $GLOBALS['BASE_URL'].'/home');
		}
	});
	
	respond( 'GET', '/delete/?', function( $request, $response, $app ){
		if( $_SESSION['person'] ){
			$item = $_GET['post_id'];
			EMP::delete_posting( $item );
			$response->redirect( 'home' );
		}
		else{
			$response->redirect( $GLOBALS['BASE_URL'] );
		}	
	});
	
	respond( 'GET', '/logout', function( $request, $response, $app ){
		session_destroy();
		unset( $_SESSION );
		$response->redirect( $GLOBALS['BASE_URL'] );
	});
	
	$routes = array(
		'registration',
		'login',
		'new_item',
		'recover',
		'admin'
		//'classifieds',
		//'posts',
		//'new_post'
	);
	
	foreach( $routes as $base ){
		with( "/{$base}", $GLOBALS['BASE_DIR']."routes/{$base}.php");
	} 
	dispatch( $_SERVER['PATH_INFO'] );	

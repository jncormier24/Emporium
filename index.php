<?php
	require( 'includes/autoload.php' );
	
	respond( function($request, $resonse, $app){
		session_start();
		$app->tpl = new EMPSmarty();
		
		$GLOBALS['BASE_DIR'] = dirname(__FILE__);
		$GLOBALS['BASE_URL'] = '/~jncormier/git-checkout/emporium';
		
		$GLOBALS['TITLE'] = 'Emporium';
		$GLOBALS['TEMPLATES'] = $GLOBALS['BASE_DIR'].'/templates';
		
		$GLOBALS['uploads'] = '/home/PLYMOUTH/jncormier/Home/git-checkout/emporium/users';
		
		$app->tpl->assign( 'base_url', $GLOBALS['BASE_URL'] );
	});

	respond( '/', function($request, $response, $app){
		$app->tpl->display( 'index.tpl' );
	});

	respond( '/home', function($request, $response, $app){
		if( $_SESSION['person'] ){
			$app->tpl->assign( 'person', $_SESSION['person'] );
			$app->tpl->display( 'home.tpl' );
		}
		else{
			$response->redirect( $GLOBALS['BASE_URL'] );
		}
	});
	
	respond( 'GET', '/classifieds/?', function($request, $response, $app){
		$listings = EMP::search_postings( $_GET['type'] , $_GET['search'] );
		$app->tpl->assign( 'listings', $listings );
		$app->tpl->display( 'classifieds.tpl' );	
	});
	
	respond( 'GET', '/classified/[:id]', function( $request, $resonse, $app ){
		$id = $request->param( 'id' );
		$item = EMP::get_posting( $id );
		$pictures = json_decode( $item[0]['pics'] );
		$app->tpl->assign( 'u_id', $_SESSION['person'][0]['u_id'] );
		$app->tpl->assign( 'item', $item );
		$app->tpl->assign( 'pics', $pictures );
		$app->tpl->display( 'classified.tpl' );
	});
	
	$routes = array(
		'registration',
		'login',
		'new_item'
		//'classifieds',
		//'posts',
		//'new_post'
	);
	
	foreach( $routes as $base ){
		with( "/{$base}", $GLOBALS['BASE_DIR']."routes/{$base}.php");
	} 
	dispatch( $_SERVER['PATH_INFO'] );	

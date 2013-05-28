<?php
	respond( '/', function( $request, $response, $app ){
		if( $_SESSION['person'] ){
			$user = explode( '@', $_SESSION['person'][0]['email'] );
			if( 'jncormier24' == $user[0] ){
				$users = EMP::find_all_users();
				$items = EMP::find_all_items();
				$app->tpl->assign( 'user', $user );
				$app->tpl->assign( 'users', $users );
				$app->tpl->assign( 'items', $items );
				$app->tpl->assign( 'person', $_SESSION['person'] );
				$app->tpl->assign( 'messages', $_SESSION['messages']['admin'] );
				unset( $_SESSION['messages']['admin'] );
				$app->tpl->display( 'admin.tpl' );
			}
			else{
				$app->tpl->display( 'home.tpl' );
			}
		}
		else{
			$app->tpl->display( $GLOBALS['BASE_URL'] );	
		}
	});
	
	respond( 'POST', '/admin_delete/', function( $request, $response, $app ){
		if( $_SESSION['person'] ){
			$user = explode( '@', $_SESSION['person'][0]['email'] );
			if( 'jncormier24' == $user[0] ){
				$item = $_POST['post_id'];
				if ( EMP::admin_delete( $item ) ){
					$response->redirect( $GLOBALS['BASE_URL'].'/admin/' );
				}
				else{
					$_SESSION['messages']['admin'] = "Could not delete item.";
					$response->redirect( $GLOBALS['BASE_URL'].'/admin/' );
				}
			}
		}
		else{
			$response->redirect( $GLOBALS['BASE_URL'] );
		}
	});

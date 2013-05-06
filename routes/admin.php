<?php
	respond( '/', function( $request, $response, $app ){
		if( $_SESSION['person'] ){
			$user = explode( '@', $_SESSION['person'][0]['email'] );
			if( 'jncormier' == $user[0] || 'jncormier24' == $user[0] ){
				$users = EMP::find_all_users();
				$items = EMP::find_all_items();
				$app->tpl->assign( 'users', $users );
				$app->tpl->assign( 'items', $items );
				$app->tpl->assign( 'person', $_SESSION['person'] );
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
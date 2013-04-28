<?php
	respond( '/', function($request, $response, $app){	
		$app->tpl->display( 'registration.tpl' );
	});

	respond( '/register', function( $request, $response, $app ){
		if( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword'] ) ){
			if( $_POST['password'] == $_POST['repassword']){
				$person = EMP::add_user( $_POST['email'], md5($_POST['password']) );
				if( $person ){
					$_SESSION[ 'person' ] = $person;
					$response->redirect( $GLOBALS['BASE_URL'].'/home');
				}
				else{
					$GLOBALS['messages']['registration'][] = 'There was an issue registering. Please Try again.';
					$response->redirect( $GLOBALS['BASE_URL'].'/registration/' );
				}
			}
			else{
				$GLOBALS['messages']['registration'][] = 'The passwords you entered did not match.';
			}
		}
		else{
			$GLOBALS['messages']['registration'][] = 'There was an error logging in.';
			$response->redirect( $GLOBALS['BASE_URL'].'/registration/' );
		}
	});

<?php
	respond( '/', function( $request, $response, $app ){
		$app->tpl->display( 'forgot.tpl' );
	});
	
	respond( 'POST', '/recovery', function( $request, $response, $app ){
		if( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword']) && isset($_POST['answer']) && isset($_POST['reanswer']) ){
			if( $_POST['password'] == $_POST['repassword'] && $_POST['answer'] == $_POST['reanswer'] ){
				$permission = EMP::verify_user( $_POST['email'], $_POST['question'], md5($_POST['answer'] ) );
				if( $permission ){
					$person = EMP::reset_password( $_POST['email'], md5($_POST['password']) );
					if( $person ){
						$person = EMP::login( $_POST['email'], md5($_POST['password']) );
						$_SESSION[ 'person' ] = $person;
						$response->redirect( $GLOBALS['BASE_URL'].'/home');
					}
					else{
						$GLOBALS['messages']['registration'][] = 'There was an issue registering. Please Try again.';
						$response->redirect( $GLOBALS['BASE_URL'].'/recover' );
					}
				}
			}
			else{
				$GLOBALS['messages']['registration'][] = 'The passwords you entered did not match.';
			}
		}
		else{
			$GLOBALS['messages']['registration'][] = 'There was an error logging in.';
			$response->redirect( $GLOBALS['BASE_URL'].'/recover' );
		}
	});
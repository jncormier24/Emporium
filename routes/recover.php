<?php
	respond( '/', function( $request, $response, $app ){
		$app->tpl->assign( 'error' , $_SESSION['message']['recovery'] );
		$app->tpl->display( 'forgot.tpl' );
	});
	
	respond( 'POST', '/recovery', function( $request, $response, $app ){
		if( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword']) && isset($_POST['answer']) && isset($_POST['reanswer']) && '' != $_POST['email'] ){
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
						$_SESSION['message']['recovery'] = 'There was an issue resetting your password. Try again..';
						$response->redirect( $GLOBALS['BASE_URL'].'/recover/' );
					}
				}
			}
			else{
				$_SESSION['message']['recovery'] = 'The passwords you entered did not match.';
				$response->redirect( $GLOBALS['BASE_URL'].'/recover/' );
			}
		}
		else{
			$_SESSION['message']['recovery'] = 'There was an error logging in.';
			$response->redirect( $GLOBALS['BASE_URL'].'/recover/' );
		}
	});
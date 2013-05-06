<?php
respond('/', function( $request, $response, $app){
	if( isset($_POST['email']) && isset($_POST['password']) ){
		$person = EMP::login( $_POST['email'], md5($_POST['password']) );
		if( $person ){
			$_SESSION['person'] = $person;
			$response->redirect( $GLOBALS['BASE_URL'].'/home');
		}
		else{
			$_SESSION['messages']['login'] = "There was an error logging in.";
			$response->redirect( $GLOBALS['BASE_URL'] );
		}
	}
	else{
		$_SESSION['messages']['login'] = "The email, password combination was not found.";
		$response->redirect( $GLOBALS['BASE_URL'] );
	}
});

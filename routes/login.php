<?php
respond('/', function( $request, $response, $app){
	$person = EMP::find_user( $_POST['email'], $_POST['password'] );
	if( $person ){
		$_SESSION['person'] = $person;
		$app->tpl->assign( 'person', $person );
		$response->redirect( $GLOBALS['BASE_URL'].'/home');
	}
	else{
		$app->tpl->assign( 'loginError', "There was an error logging in." );
		$response->redirect( $GLOBALS['BASE_URL'] );
	}
});

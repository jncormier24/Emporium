<?
	respond( 'GET', '/', function($request, $response, $app){
		$app->tpl->display( 'new_item.tpl' );
	});
	
	respond( 'POST', '/create_item/', function( $request, $response, $app ){
		//$u_id, $type_id, $text, $title
		$title = $_POST['title'];
		$text = nl2br($_POST['text']);
		$type = $_POST['type'];
		$type_id = 0;
		switch ($type){
			case 'furniture':
				$type_id = 1;
				break;
			case 'books':
				$type_id = 2;
				break;
			case 'appliances':
				$type_id = 3;
				break;
			case 'electronics':
				$type_id = 4;
				break;
			case 'wanted':
				$type_id = 5;
				break;
			case 'other':
				$cat = 6;
				break;
		}
		$u_id = $_SESSION['person'][0]['u_id'];
		$locals = array();
		foreach ($_FILES["pictures"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK
				|| $_FILES["file"]["type"] == "image/gif"
				|| $_FILES["file"]["type"] == "image/jpeg"
				|| $_FILES["file"]["type"] == "image/jpg"
				|| $_FILES["file"]["type"] == "image/pjpeg"
				|| $_FILES["file"]["type"] == "image/x-png"
				|| $_FILES["file"]["type"] == "image/png" ) {
				$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
				$name = $_FILES["pictures"]["name"][$key];
				$user_dir = $GLOBALS['uploads'].'/'.$_SESSION['person'][0]['u_id'];
				if( !file_exists( $user_dir ) ){
					exec( "mkdir $user_dir ");
				}
				if( move_uploaded_file($tmp_name, $user_dir."/".$name) ){
					$locals[count($locals)] = $name;
				}
			}
		}
		//new dbug( $locals );
		$locals = json_encode($locals);
		//die( var_dump($locals) );
		/*$locals = EMP::upload( $_FILES['pictures'] );*/
		if( $locals ){
			$URI = $locals;
			$upload = EMP::add_posting( $u_id, $type_id, $text, $title, $URI );
			if( $upload ){
				$response->redirect( $GLOBALS['BASE_URL'].'/home');
			}
			else{
				$_SESSION['messages']['upload'] = "There was a problem with the upload.";
				$response->redirect( $GLOBALS['BASE_URL'].'/home');
			}
		}
	});
	
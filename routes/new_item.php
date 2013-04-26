<?
	respond( 'GET', '/', function($request, $response, $app){
		$app->tpl->display( 'new_item.tpl' );
	});
	
	respond( 'POST', '/create_item/', function( $request, $resonse, $app ){
		//$u_id, $type_id, $text, $title
		echo $_POST['title'].", ".$_POST['text'].", ".$_POST['type'].", ";
		echo $_SESSION['person'][0]['u_id'];
		foreach ($_FILES["pictures"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
				$name = $_FILES["pictures"]["name"][$key];
				$user_dir = $GLOBALS['BASE_URL']."/users/".$_SESSION['person'][0]['u_id'];
				if( is_dir( $user_dir ) ){
					if( !move_uploaded_file($tmp_name, $user_dir."/".$name) ){
						die("upload failed.");
					}
					echo "Posted.";
				}
				else{
					if( !mkdir( $user_dir ) ){
						die("upload failed.");
					}
					move_uploaded_file($tmp_name, $user_dir."/".$name);
					echo "Posted.";
				}	
			}
		}
	});

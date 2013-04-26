<? include( 'includes/autoload.php' ); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>jQuery File Upload Example</title>
<style>
.bar {
    height: 18px;
    background: green;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<p>Pictures:
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="submit" value="Send" />
</p>
</form>
<?php
foreach ($_FILES["pictures"]["error"] as $key => $error) {
	if ($error == UPLOAD_ERR_OK) {
		$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
		$name = $_FILES["pictures"]["name"][$key];
		echo $name."</br>";	
	}
}
?>
</body> 
</html>

<!doctype html>
<html>
	<head>
		<meta name="siteHeader"/>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" type="text/css" />
		<link href="{$base_url}/externals/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="{$base_url}/includes/css/style.css" rel="stylesheet" type="text/css" media="screen">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script src="{$base_url}/externals/bootstrap/js/bootstrap.min.js"></script>
		<script src="{$base_url}/js/behavior.js"></script>
		<script src="externals/upload/js/vendor/jquery.ui.widget.js"></script>
		<script src="externals/upload/js/jquery.iframe-transport.js"></script>
		<script src="externals/upload/js/jquery.fileupload.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="{$base_url}/home">{$title}</a>
					<form class="navbar-search pull-right" method="get" action="classifieds.php">
						{*include file="search.tpl"*}
					</form>
				</div>
			</div>
		</div>

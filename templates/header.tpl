<!doctype html>
<html>
	<head>
		<meta name="siteHeader"/>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" type="text/css" />
		<link href="{$base_url}/externals/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="{$css}/style.css" rel="stylesheet" type="text/css" media="screen">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script src="{$base_url}/externals/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="{$base_url}/home">{$title}</a>
					<ul class="nav">
				    	<li><a href="logout">Logout</a></li>
					</ul>	
					<form method="get" action="classifieds/">
						<div class="input-prepend pull-right">
							<div class="btn-group">
								<select class="span2" name="type">
									<option value="books">Books</option>
									<option value="furniture">Furniture</option>
									<option value="appliances">Appliances</option>
									<option value="electronics">Electronics</option>
									<option value="wanted">Wanted</option>
								</select>
							</div>
							<input class="span3" id="appenededPrependedDropdownButton" type="text" name="search">
							<button class="btn" type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>

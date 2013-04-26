<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 14:05:14
         compiled from "./templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6350709255149f48fafa147-31939915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1363802709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6350709255149f48fafa147-31939915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5149f48fafc477_58863880',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5149f48fafc477_58863880')) {function content_5149f48fafc477_58863880($_smarty_tpl) {?><!doctype html>
<html>
	<head>
		<meta name="siteHeader"/>
		<link href="./externals/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		<script src="./externals/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script src="./externals/bootstrap/js/bootstrap.min.js"></script>
		<script src="./js/behavior.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
					<form class="navbar-search pull-right">
					  <input type="text" class="search-query" placeholder="Search">
					</form>
				</div>
			</div>
		</div>
<?php }} ?>
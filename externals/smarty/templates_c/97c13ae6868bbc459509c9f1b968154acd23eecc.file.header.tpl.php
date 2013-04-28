<?php /* Smarty version Smarty-3.1.13, created on 2013-04-28 16:56:40
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234029118517ab243d19c67-58564441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1367182592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234029118517ab243d19c67-58564441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517ab243d3ee21_47014415',
  'variables' => 
  array (
    'base_url' => 0,
    'css' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ab243d3ee21_47014415')) {function content_517ab243d3ee21_47014415($_smarty_tpl) {?><!doctype html>
<html>
	<head>
		<meta name="siteHeader"/>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" type="text/css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/externals/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css" rel="stylesheet" type="text/css" media="screen">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/externals/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
					<a href="logout">Logout</a>
					<div class="nav-search pull-right">
						<form method="get" action="classifieds/">
							<input type="text" class="span2" name="search">
							<button type="submit" class="btn">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php }} ?>
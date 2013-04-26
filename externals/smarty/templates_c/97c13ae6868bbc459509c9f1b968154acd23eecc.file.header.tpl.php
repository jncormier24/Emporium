<?php /* Smarty version Smarty-3.1.13, created on 2013-04-26 09:12:32
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2640057825109b76b5bf442-02779592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1366856129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2640057825109b76b5bf442-02779592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5109b76b5c12b2_19304097',
  'variables' => 
  array (
    'base_url' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5109b76b5c12b2_19304097')) {function content_5109b76b5c12b2_19304097($_smarty_tpl) {?><!doctype html>
<html>
	<head>
		<meta name="siteHeader"/>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/externals/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/css/style.css" rel="stylesheet" media="screen">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/externals/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/behavior.js"></script>
		<script src="externals/upload/js/vendor/jquery.ui.widget.js"></script>
		<script src="externals/upload/js/jquery.iframe-transport.js"></script>
		<script src="externals/upload/js/jquery.fileupload.js"></script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
					<form class="navbar-search pull-right" method="get" action="classifieds.php">
						
					</form>
				</div>
			</div>
		</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-02-19 13:55:11
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17598823575109639f8c42e0-34069180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1360695290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17598823575109639f8c42e0-34069180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5109639f8e12d8_25451745',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5109639f8e12d8_25451745')) {function content_5109639f8e12d8_25451745($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row container">
	<div class="span4 offset3 hero-unit">
		<form class="form-horizonal">
			<input type="text" class="input-small" placeholder="Username">
			<input type="password" class="input-small" placeholder="Password">
			<div class="control-group">
				<div class="control">
					<label class="checkbox">
						<input type="checkbox">Remember Me
					</label>
					<button type="submit" class="btn">Sign In</button>
				</div>
				<div class="control">
					<a href="#">Create Account</a>
				</div>
				<div class="control">
					<a href="#">Forgot Password</a>
				</div>
			</div>
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
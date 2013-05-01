<?php /* Smarty version Smarty-3.1.13, created on 2013-04-28 20:52:39
         compiled from "./templates/classifieds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262167960517accdc25c772-72567517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66284c1d765674c670dcb7258a7b67d4330ad1e' => 
    array (
      0 => './templates/classifieds.tpl',
      1 => 1367185566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262167960517accdc25c772-72567517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517accdc2d05a5_52110003',
  'variables' => 
  array (
    'listings' => 0,
    'base_url' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517accdc2d05a5_52110003')) {function content_517accdc2d05a5_52110003($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="conainer row-fluid">
	<div class="span9 offset2">
		<?php if ($_smarty_tpl->tpl_vars['listings']->value){?>
			<table id="listings" class="hero-unit table table-hover" style="background-color: #FFFFFF">
				<tbody id="listings_TB">
					<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
?>
						<tr>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/classified/<?php echo $_smarty_tpl->tpl_vars['listing']->value['list_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing']->value['title'];?>
</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		<?php }else{ ?>
			<div class="hero-unit">
				<h1>
					There are not items that match that search.
				</h1>
			</div>
		<?php }?>		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
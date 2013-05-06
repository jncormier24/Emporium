<?php /* Smarty version Smarty-3.1.13, created on 2013-05-06 09:33:33
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135417954351871bfcc6f621-62360342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1367847211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135417954351871bfcc6f621-62360342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51871bfcccf066_23202629',
  'variables' => 
  array (
    'person' => 0,
    'messages' => 0,
    'users' => 0,
    'user' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51871bfcccf066_23202629')) {function content_51871bfcccf066_23202629($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<legend>Hello, <?php echo $_smarty_tpl->tpl_vars['person']->value[0]['email'];?>
</legend>
	<div class="container">
		<?php if ($_smarty_tpl->tpl_vars['messages']->value){?>
			<div class="hero-unit">
				<p><?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
</p>
			</div>
		<?php }?>
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>Items</tr>
			</thead>
			<tbody id="listings_TB">
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
					<tr>
						<form method="GET" action="delete">
							<td>
								<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>

							</td>
							<td>
								<button class="btn btn-danger pull-right" type="submit">Delete</button>
							</td>
							<input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['u_id'];?>
" />
						</form>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<hr>
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>Items</tr>
			</thead>
			<tbody id="listings_TB">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr>
						<form method="GET" action="delete">
							<td>
								<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['item']->value['u_id'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['item']->value['type_id'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['item']->value['deleted'];?>

							</td>
							<td>
								<button class="btn btn-danger pull-right" type="submit">Delete</button>
							</td>
							<input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['list_id'];?>
" />
						</form>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
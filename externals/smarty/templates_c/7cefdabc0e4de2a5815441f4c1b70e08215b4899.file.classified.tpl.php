<?php /* Smarty version Smarty-3.1.13, created on 2013-05-01 09:54:07
         compiled from "./templates/classified.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1943472876517accdf1632d4-06018406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cefdabc0e4de2a5815441f4c1b70e08215b4899' => 
    array (
      0 => './templates/classified.tpl',
      1 => 1367416207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1943472876517accdf1632d4-06018406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517accdf19f644_65311408',
  'variables' => 
  array (
    'item' => 0,
    'v' => 0,
    'user' => 0,
    'person' => 0,
    'u_id' => 0,
    'base_url' => 0,
    'list_id' => 0,
    'pics' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517accdf19f644_65311408')) {function content_517accdf19f644_65311408($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="conainer row-fluid">
	<div class="span9 offset2">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<legend><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
, posted by <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
?Subject=Emporium - <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a></legend>
			<?php if ($_smarty_tpl->tpl_vars['person']->value[0]['u_id']==$_smarty_tpl->tpl_vars['u_id']->value){?>
				<form class="row span8 offset2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/new_item/update_posting/" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label" for="postType">Post Type</label>
			    		<select name="type">
							<option value="books">Books</option>
							<option value="furniture">Furniture</option>
							<option value="appliances">Appliances</option>
							<option value="electronics">Electronics</option>
							<option value="wanted">Wanted</option>
						</select>
					</div>
					<div class="control-group">
				    	<label class="control-label" for="postDesc">Description</label>
				    	<div class="controls">
					    	<textarea id="postDesc" class="span9" rows="11" name="text"><?php echo $_smarty_tpl->tpl_vars['v']->value['text'];?>
</textarea>
					    </div>
					</div>
					<div class="control-group">
			    	<div class="controls">
				        <button type="submit" class="btn">Post</button>
					</div>
					<input type="hidden" name="list_id" value="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
"/>
				</form>
			<?php }else{ ?>
				<p><?php echo $_smarty_tpl->tpl_vars['v']->value['text'];?>
</p>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value){
$_smarty_tpl->tpl_vars['pic']->_loop = true;
?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['u_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" >
			<?php } ?>
		<?php } ?>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
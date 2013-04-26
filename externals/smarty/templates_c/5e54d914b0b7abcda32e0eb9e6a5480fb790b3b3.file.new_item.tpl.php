<?php /* Smarty version Smarty-3.1.13, created on 2013-04-26 09:39:17
         compiled from "./templates/new_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:645616751732f88999fa7-83685792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e54d914b0b7abcda32e0eb9e6a5480fb790b3b3' => 
    array (
      0 => './templates/new_item.tpl',
      1 => 1366983540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645616751732f88999fa7-83685792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51732f889bd626_73322244',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51732f889bd626_73322244')) {function content_51732f889bd626_73322244($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row-fluid">
	<form class="row span8 offset2" method="post" action="create_item/"
	enctype="multipart/form-data">
		<fieldset>
			<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 New Post</legend>
			<div class="offset2">
			 	<div class="control-group">
			    	<label class="control-label" for="postTitle">Title</label>
			    	<div class="controls">
				    	<input class="span9" type="text" id="postTitle" placeholder="Title" name="title">
				    </div>
				</div>
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
				    	<textarea id="postDesc" class="span9" rows="11" name="text"></textarea>
				    </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="postPics">Pictures</label>
					<input type="file" name="pictures[]">
					<input type="file" name="pictures[]">
					<input type="file" name="pictures[]">
				</div>
				<div class="control-group">
			    	<div class="controls">
			        	<button type="submit" class="btn">Post</button>
						</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
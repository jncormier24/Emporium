<?php /* Smarty version Smarty-3.1.13, created on 2013-05-06 12:01:09
         compiled from "./templates/new_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:490644945517ab26631f692-03480218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e54d914b0b7abcda32e0eb9e6a5480fb790b3b3' => 
    array (
      0 => './templates/new_item.tpl',
      1 => 1367847497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '490644945517ab26631f692-03480218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517ab2663477e8_39129539',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ab2663477e8_39129539')) {function content_517ab2663477e8_39129539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						<option value="other">Other</option>
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
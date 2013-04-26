<?php /* Smarty version Smarty-3.1.13, created on 2013-04-16 19:44:19
         compiled from "./templates/new_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1926513502515db698b2d2e0-55471652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '921a7187925e6ec0e13c7cb9c0a15f35b61d5741' => 
    array (
      0 => './templates/new_post.tpl',
      1 => 1366155855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1926513502515db698b2d2e0-55471652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515db698c39622_99752699',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515db698c39622_99752699')) {function content_515db698c39622_99752699($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row-fluid">
	<form class="row span8 offset2">
		<fieldset>
			<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 New Post</legend>
			<div class="offset2">
			 	<div class="control-group"  >
			    	<label class="control-label" for="postTitle">Title</label>
			    	<div class="controls">
				    	<input class="span9" type="text" id="postTitle" placeholder="Title" name="title">
				    </div>
				</div>
				<div class="control-group">
			    	<label class="control-label" for="postDesc">Description</label>
			    	<div class="controls">
				    	<textarea id="postDesc" class="span9" rows="11" name="description"></textarea>
				    </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="postPics">Pictures</label>
					<div class="controls">
						
					</div>
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
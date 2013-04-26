<?php /* Smarty version Smarty-3.1.13, created on 2013-04-10 14:31:35
         compiled from "./templates/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98591205951645f644b3244-81399722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4d6eb125bc74eda2c937147d3bd5cd8710da1ce' => 
    array (
      0 => './templates/registration.tpl',
      1 => 1365618376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98591205951645f644b3244-81399722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51645f644d4017_04574089',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51645f644d4017_04574089')) {function content_51645f644d4017_04574089($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("indexHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row container">
		<div class="">
			<form class="form-horizontal" method="post" action="new_users.php" >
				<fieldset>
					<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 Registration</legend>
					<div class="span6 offset2">
					 	<div class="control-group"  >
					    	<label class="control-label" for="inputEmail">Email</label>
					    	<div class="controls">
						    	<input type="text" id="inputEmail" placeholder="Email" name="email">
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Password</label>
					    	<div class="controls">
						    	<input type="password" id="inputPassword" placeholder="Password" name="password">
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Re-type Password</label>
					    	<div class="controls">
						    	<input type="password" id="retypePassword" placeholder="Password">
						    </div>
						</div>
						<div class="control-group">
					    	<div class="controls">
					        	<button type="submit" class="btn">Sign Up</button>
					        </div>
					    </div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
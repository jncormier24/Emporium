<?php /* Smarty version Smarty-3.1.13, created on 2013-05-09 23:34:20
         compiled from "./templates/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870059316517ae2d1bb3979-52887742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4d6eb125bc74eda2c937147d3bd5cd8710da1ce' => 
    array (
      0 => './templates/registration.tpl',
      1 => 1368153068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870059316517ae2d1bb3979-52887742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517ae2d1bd8a15_53118154',
  'variables' => 
  array (
    'error' => 0,
    'base_url' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ae2d1bd8a15_53118154')) {function content_517ae2d1bd8a15_53118154($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("indexHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
	<div class="row container">
		<span class="span11 label label-important"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
	</div>
	<?php }?>
	<div class="row container">
		<div class="">
			<form id="register" class="form-horizontal" method="post" action="register" >
				<fieldset>
					<legend><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a> Registration</legend>
					<div class="span6 offset2">
					 	<div class="control-group"  >
					    	<label class="control-label" for="inputEmail">Email</label>
					    	<div class="controls">
						    	<input type="text" id="inputEmail" placeholder="Email" name="email" required="email">						    	
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Password</label>
					    	<div class="controls">
						    	<input type="password" id="inputPassword" placeholder="Password" name="password" required>					
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Re-type Password</label>
					    	<div class="controls">
						    	<input type="password" id="retypePassword" placeholder="Password" name="repassword" required>
						    </div>
						</div>
						<div class="control-group">
							<label class="control-label" for="question">Security Question</label>
							<div class="controls">
								<select name="question">
									<option value="1">What is your mother's maiden name?</option>
									<option value="2">What was the make of your first car?</option>
									<option value="3">What is the name of your favorite teacher?</option>
								</select>
							</div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputAnswer">Answer</label>
					    	<div class="controls">
						    	<input type="password" id="inputAnswer" placeholder="Answer" name="answer" required>					
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Re-type Answer</label>
					    	<div class="controls">
						    	<input type="password" id="retypeAnswer" placeholder="Answer" name="reanswer" required>
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
<?php /* Smarty version Smarty-3.1.13, created on 2013-05-05 23:31:16
         compiled from "./templates/forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629238865518146d446b310-23853549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577b2c95715fb41671eb65aa6989d69ea999fa6a' => 
    array (
      0 => './templates/forgot.tpl',
      1 => 1367811035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629238865518146d446b310-23853549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518146d448c229_99312286',
  'variables' => 
  array (
    'error' => 0,
    'base_url' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518146d448c229_99312286')) {function content_518146d448c229_99312286($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("indexHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row container">
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
			<span class="span11 label label-important"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
		<?php }?>
		<div class="">
			<form id="register" class="form-horizontal" method="post" action="recovery" >
				<fieldset>
					<legend><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a> Forgot Password</legend>
					<div class="span6 offset2">
						<div class="control-group"  >
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
						    	<input type="text" id="inputEmail" placeholder="Email" name="email">						    	
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
						    	<input type="password" id="inputAnswer" placeholder="Answer" name="answer">					
						    </div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Re-type Answer</label>
							<div class="controls">
						    	<input type="password" id="retypeAnswer" placeholder="Answer" name="reanswer">
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
						    	<input type="password" id="retypePassword" placeholder="Password" name="repassword">
						    </div>
						</div>
						<div class="control-group">
							<div class="controls">
						    	<button type="submit" class="btn">Reset</button>
						    </div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-04-22 15:52:32
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17598823575109639f8c42e0-34069180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1366660330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17598823575109639f8c42e0-34069180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5109639f8e12d8_25451745',
  'variables' => 
  array (
    'loginError' => 0,
    'base_url' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5109639f8e12d8_25451745')) {function content_5109639f8e12d8_25451745($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("indexHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="row container">
		<?php if ($_smarty_tpl->tpl_vars['loginError']->value){?>
			<div class="errors">
				<span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</span>
			</div>
		<?php }?>
			<div class="">
				<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/login/" >
					<fieldset>
						<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>
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
							<div class="controls">
						    	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/registration/">Register</a>
						    </div>
						    <div class="controls">
							    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/password">Forgot Password</a>
						    </div>
							<div class="control-group">
						    	<div class="controls">
						        	<button type="submit" class="btn">Sign In</button>
						        </div>
						    </div>				
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</body
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 11:43:55
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1074640096517ab243ceee11-69763101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1367941272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1074640096517ab243ceee11-69763101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517ab243d14d47_18907556',
  'variables' => 
  array (
    'user' => 0,
    'base_url' => 0,
    'messages' => 0,
    'listings' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ab243d14d47_18907556')) {function content_517ab243d14d47_18907556($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<legend>
		<div class="container">Hello, <?php echo $_smarty_tpl->tpl_vars['user']->value[0];?>

			<div class="pull-right">
				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/admin/" method="get">
					<button class="btn btn-help">Admin</button>
				</form>
			</div>
		</div>
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
				<tr><th>Items</th></tr>
			</thead>
			<tbody id="listings_TB">
				<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
?>
					<tr>
						<form method="GET" action="delete">
							<td>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/classified/<?php echo $_smarty_tpl->tpl_vars['listing']->value['list_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['listing']->value['title'];?>
</a>
							</td>
							<td>
								<button class="btn btn-danger pull-right" type="submit">Delete</button>
							</td>
							<input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['listing']->value['list_id'];?>
" />
						</form>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="container">
		<div class="hero-unit pull-left">
			<legend>Buy</legend>
			<div class="input-prepend">
				<form method="get" action="classifieds/">
					<div class="input-prepend">
						<div class="btn-group">
							<select name="type">
								<option value="books">Books</option>
								<option value="furniture">Furniture</option>
								<option value="appliances">Appliances</option>
								<option value="electronics">Electronics</option>
								<option value="other">Other</option>
								<option value="wanted">Wanted</option>
							</select>
						</div>
						<input class="span3" id="appenededPrependedDropdownButton" type="text" name="search">
						<button class="btn" type="submit">Search</button>
					</div>
				</form>
			</div>
		</div>
		<div class="hero-unit pull-right">	
			<legend>Sell</legend>	
			<div class="input-prepend">
				<div class="btn-group">
					<form method="get" action="new_item/">
						<button class="btn" type="submit" action="new_item">New Item</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
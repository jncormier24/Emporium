<?php /* Smarty version Smarty-3.1.13, created on 2013-04-27 22:39:24
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1074640096517ab243ceee11-69763101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1367116693,
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
    'person' => 0,
    'listings' => 0,
    'base_url' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ab243d14d47_18907556')) {function content_517ab243d14d47_18907556($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<legend>Hello, <?php echo $_smarty_tpl->tpl_vars['person']->value[0]['email'];?>
</legend>
	<div class="container">
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>Items</tr>
			</thead>
			<tbody id="listings_TB">
				<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
?>
					<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/classified/<?php echo $_smarty_tpl->tpl_vars['listing']->value['list_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing']->value['title'];?>
</a></td>
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
<?php /* Smarty version Smarty-3.1.13, created on 2013-04-28 17:01:28
         compiled from "./templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1383563993517d8e2838ae96-56974829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692c3bc93f5ce1085954c77c1d0c047332ab27c2' => 
    array (
      0 => './templates/search.tpl',
      1 => 1367182773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1383563993517d8e2838ae96-56974829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_517d8e2838cdd8_23767759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517d8e2838cdd8_23767759')) {function content_517d8e2838cdd8_23767759($_smarty_tpl) {?>	<div id="buy">
		<div class="input-prepend">
			<select class="span2" name="type">
				<option value="books">Books</option>
				<option value="furniture">Furniture</option>
				<option value="appliances">Appliances</option>
				<option value="electronics">Electronics</option>
				<option value="wanted">Wanted</option>
			</select>
			<input type="text" id="appendedInput" class="search-query" placeholder="Search" name="Search">
		</div>
	</div>
<?php }} ?>
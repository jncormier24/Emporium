<?php /* Smarty version Smarty-3.1.13, created on 2013-04-16 17:26:15
         compiled from "./templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1104277585516dc0ef2b91f3-87465051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692c3bc93f5ce1085954c77c1d0c047332ab27c2' => 
    array (
      0 => './templates/search.tpl',
      1 => 1366147573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1104277585516dc0ef2b91f3-87465051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516dc0ef2bb1d1_78783262',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516dc0ef2bb1d1_78783262')) {function content_516dc0ef2bb1d1_78783262($_smarty_tpl) {?>	<div id="buy">
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
<?php /* Smarty version Smarty-3.1.13, created on 2013-04-18 17:41:59
         compiled from "./templates/home_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1951062485516dabc04db206-05782297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce9da4308e367e2d07432fb61413f38dd3584ec7' => 
    array (
      0 => './templates/home_new.tpl',
      1 => 1366297713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1951062485516dabc04db206-05782297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516dabc05aec99_40502206',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516dabc05aec99_40502206')) {function content_516dabc05aec99_40502206($_smarty_tpl) {?><!-- change this to be more of a user dashboard. Should be customized to every
user. Show the users posts. Also show the most recent items posted from each
category.-->
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="">
		<ul class="nav nav-tabs" id="myTab">
			<li><a href="#buy" data-toggle="tab">Postings</a></li>
			<li><a href="#sell" data-toggle="tab">Post an Ad</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="buy">
				<div class="input-prepend">
					<form method="get" action="classifieds.php">
						<select class="span2" name="type">
							<option value="books">Books</option>
							<option value="furniture">Furniture</option>
							<option value="appliances">Appliances</option>
							<option value="electronics">Electronics</option>
							<option value="wanted">Wanted</option>
						</select>
						<input class="span6" id="appendedPrependedInput" type="text" name="Search">
						<div class="btn-group">
							<button class="btn" type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>			
			<div class="tab-pane" id="sell">
				<div class="input-prepend">
					<form method="get" action="">
						<select class="span2" name="type">
							<option value="books">Books</option>
							<option value="furniture">Furniture</option>
							<option value="appliances">Appliances</option>
							<option value="electronics">Electronics</option>
							<option value="wanted">Wanted</option>
						</select>
						<div class="btn-group">
							<button class="btn" type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
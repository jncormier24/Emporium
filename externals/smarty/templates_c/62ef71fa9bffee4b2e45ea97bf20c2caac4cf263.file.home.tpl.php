<?php /* Smarty version Smarty-3.1.13, created on 2013-04-11 19:42:06
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1531207758512595e46cb953-04797230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1365723723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531207758512595e46cb953-04797230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_512595e4866689_32851678',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512595e4866689_32851678')) {function content_512595e4866689_32851678($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="">
		<form class="" method="get" action="search.php">
			<ul class="nav nav-tabs" id="myTab">
				<li><a href="#posts" data-toggle="tab">Postings</a></li>
				<li><a href="#sell" data-toggle="tab">Post an Ad</a></li>
			</ul>
			<div class="tab-content" id="buy">
				<div class="tab-pane active" id="posts">
					<ul>
						<li><a href="classifieds/books" name="books">Books</a></li>
						<li><a href="classifieds/furniture" name="furniture">Furniture</a></li>
						<li><a href="classifieds/appliences" name="appliances">Appliances</a></li>
						<li><a href="classifieds/electronics" name="electronics">Electronics</a></li>
						<li><a href="classifieds/wanted" name="wanted">Wanted</a></li>
					</ul>
				</div>
				<div class="tab-pane" id="sell">
					<h2>What would you like to post?</h2>
					<div class="dropdown">
						<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#">
							Categories
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labeledby="dLabel">
							<li><a href="#books" name="books">Books</a></li>
							<li><a href="#furniture" name="furniture">Furniture</a></li>
							<li><a href="#appliences" name="appliances">Appliances</a></li>
							<li><a href="#electronics" name="electronics">Electronics</a></li>
							<li><a href="#wanted" name="wanted">Wanted</a></li>
						</ul>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
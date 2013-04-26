<?php /* Smarty version Smarty-3.1.13, created on 2013-04-16 17:39:03
         compiled from "./templates/home_old.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1520479741516dc4f7b25cb9-04314782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c74133623442f71d7a624c1c595c196d21803fe' => 
    array (
      0 => './templates/home_old.tpl',
      1 => 1366060145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1520479741516dc4f7b25cb9-04314782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516dc4f7b40149_11384158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516dc4f7b40149_11384158')) {function content_516dc4f7b40149_11384158($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
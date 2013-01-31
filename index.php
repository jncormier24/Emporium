<?php
	require( 'includes/autoload.php' );

	$smarty = new EMPSmarty();
	$smarty->assign( 'name', 'Joe' );
	$smarty->display('index.tpl');

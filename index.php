<?php
require( 'includes/autoload.php' );
startSession();

$GLOBALS['BASE_URL'] = '/emporium';
$GLOBALS['BASE_DIR'] = dirname(__FILE__);

$GLOBALS['TITLE'] = 'Emporium';
$GLOBALS['TEMPLATES'] = $GLOBALS['BASE_DIR'] . '/templates';

$smarty = new EMPSmarty();
$smarty->assign( 'name', 'Joe' );
$smarty->display('index.tpl');

/**
 * Routing provided by klein.php (https://github.com/chriso/klein.php)
respond( function( $request, $response, $app ){
	$app->tpl = new EMPSmarty();
});

respond( '/?', function( $request, $response, $app ){ 
	$app->tpl->display( 'index.tpl' );
});

$app_routes = array(
	'login'
);

foreach( $app_routes as $base ){
	with( "/{$base}", $GLOBALS['BASE_DIR'] . "/routes/{$base}.php" );
}
 **/
dispatch($_SERVER['PATH_INFO']);



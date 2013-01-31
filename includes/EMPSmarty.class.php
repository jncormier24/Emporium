<?php

/**
 * Emporium Smarty class
 * v 1.0 1/29/13 
 * **/

require( '/home/PLYMOUTH/jncormier/Home/git-checkout/emporium/externals/smarty/Smarty/Smarty.class.php' );
class EMPSmarty extends Smarty{

	function __construct(){
		parent::__construct();
		
		$this->setTemplateDir( './templates/' );	
		$this->setCompileDir( './externals/smarty/templates_c/' );	
		$this->setCacheDir( './externals/smarty/cache/' );	
		$this->setConfigDir( './externals/smarty/configs/' );	

		$this->assign( 'app_name' , 'emporium' );
	}
}

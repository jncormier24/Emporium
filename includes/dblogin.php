<?php
/**
 * dblogin class
 * for database access
 * **/
class dblogin{
	/**
	 * dbconnect
	 * parameters: none
	 * returns: a database connect
	 * **/
	function dbconnect(){
	  	$server = 'localhost';
		$user = 'jncormier';
		$password = 'sloglife';
		$database = 'jncormier';
		$dbdriver = 'mysql';
		
		$db = ADONewConnection($dbdriver); # eg 'mysql' or 'postgres'
		$db->Connect($server, $user, $password, $database);	
	
		return $db;
	}
}
	
	
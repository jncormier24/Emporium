<?php

/**
 * Emporium Class
 * v 1.0 1/29/13
 * db_connect [3/18/13]
 * add_user [3/18/13]
 * find_user [3/18/13]
 * add_posting [3/18/13]
 * list_postings [3/18/13]
 * search_postings [3/18/13]
 * **/
require_once( 'dblogin.php' );
require( '/home/PLYMOUTH/jncormier/Home/git-checkout/emporium/externals/adodb5/adodb.inc.php' );

class EMP{
	/**
	 * add_user
	 * parameters: email, password
	 * returns: u_id
	 * **/
	function add_user( $email, $password ){
		$sql = "INSERT INTO User (user, password)
						VALUES ($email, $password)";
		$return = mysqli_query($conn, $sql);
		$fetch = mysqli_fetch($return);

	}
	/**
	 * find_user
	 * parameters: email, password
	 * returns: u_id
	 * **/
	function find_user( $email, $password ){}
	/**
	 * add_posting
	 * parameters: u_id, URI, text
	 * returns: list_id
	 * **/
	function add_posting( $u_id, $URI, $text ){}
	/**
	 * list_postings
	 * parameters: type
	 * returns: array of postings
	 * **/
	function list_postings( $type ){}
	/**
	 * search_postings
	 * parameters: params
	 * returns: search results
	 * **/
	function search_postings( $params ){}
}

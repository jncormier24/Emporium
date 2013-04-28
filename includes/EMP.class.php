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

class EMP{
	/**
	 * login
	 * parameters: email, password
	 * returns: u_id
	 * **/
	function login( $email, $password ){
		$db = dblogin::dbconnect();
		$sql = "SELECT u_id, email
				FROM Users
				WHERE email = '$email'
				AND password = '$password'";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}
	/**
	 * add_user
	 * parameters: email, password
	 * returns: u_id
	 * **/
	function add_user( $email, $password ){
		$user = EMP::find_user( $email, $password );
		if( null == $user ){
			$db = dblogin::dbconnect();
			$sql = "INSERT INTO Users (email, password)
							VALUES ('$email','$password')";
			$rows = $db->Execute( $sql );
			return EMP::find_user( $email, $password );
		}
		else{
			return null;
		}
	}
	/**
	 * find_user
	 * parameters: u_id
	 * returns: email
	 * **/
	function find_user( $u_id ){
		$db = dblogin::dbconnect();
		$sql = "SELECT email
				FROM Users
				WHERE u_id = '$u_id'";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}
	/**
	 * add_posting
	 * parameters: u_id, URI, text
	 * returns: list_id
	 * **/
	function add_posting( $u_id, $type_id, $text, $title, $URI = null ){
		$db = dblogin::dbconnect();
		$sql = "INSERT INTO Listings (u_id, type_id, pics, text, title)
				VALUES ('$u_id', '$type_id', '$URI', '$text', '$title')";
		$rows = $db->Execute( $sql );
		if( $rows ){
			return true;
		}
		else{
			return false;
		}
	}
	/**
	 * list_postings
	 * parameters: type
	 * returns: array of postings
	 * **/
	function list_postings( $type ){
		$db = dblogin::dbconnect();
		
		switch ($type){
			case 'furniture':
				$cat = 1;
				break;
			case 'books':
				$cat = 2;
				break;
			case 'appliances':
				$cat = 3;
				break;
			case 'electronics':
				$cat = 4;
				break;
			case 'wanted':
				$cat = 5;
				break;
		}
		$sql = "SELECT * 
				FROM Listings
				WHERE type_id = '$cat'";
				
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		
		return $return;
	}
	/**
	 * get_user_listings
	 * parameters: u_id
	 * returns: array of postings
	 * **/
	function get_user_listings( $u_id ){
		$db = dblogin::dbconnect();
		
		$sql = "SELECT * 
				FROM Listings
				WHERE u_id = '$u_id'";
				
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		
		return $return;
	}
	/**
	 * get_posting
	 * parameters: $list_id
	 * returns: listing information for a specific listing
	 * **/
	function get_posting( $list_id ){
		$db = dblogin::dbconnect();
		$sql = "SELECT * 
				FROM Listings
				WHERE list_id = '$list_id'";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}
	/**
	 * search_postings
	 * parameters: type, params
	 * returns: search results
	 * **/
	function search_postings( $type, $params ){
		$db = dblogin::dbconnect();
		switch ($type){
			case 'furniture':
				$cat = 1;
				break;
			case 'books':
				$cat = 2;
				break;
			case 'appliances':
				$cat = 3;
				break;
			case 'electronics':
				$cat = 4;
				break;
			case 'wanted':
				$cat = 5;
				break;
		}
		
		$sql = "SELECT *
				FROM Listings
				WHERE type_id = '$cat'
				AND title LIKE '%$params%'
				OR text = '% $params %'";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}
	function upload( $files ){
		$locals = Array();
		foreach ($files["pictures"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$tmp_name = $files["pictures"]["tmp_name"][$key];
				$name = $files["pictures"]["name"][$key];
				$user_dir = $GLOBALS['uploads'].'/'.$_SESSION['person'][0]['u_id'];
				if( !file_exists( $user_dir ) ){
					mkdir( $user_dir );
				}
				if( move_uploaded_file($tmp_name, $user_dir."/".$name) ){
					$locals[$name] = $name;
				}
				else{
					return false;
				}
			}
		}
		return $locals;
	}
}

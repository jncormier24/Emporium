<?php

/**
 * Emporium Class
 * v 1.0 1/29/13
 * add_user [3/18/13]
 * find_user [3/18/13]
 * add_posting [3/18/13]
 * list_postings [3/18/13]
 * search_postings [3/18/13]
 * login 
 * verify_user
 * find_all_users
 * reset_password
 * find_all_items
 * update_posting
 * get_user_listings
 * get_postings
 * delele_posting
 * upload
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
	}//end login
	/**
	 * add_user
	 * parameters: email, password
	 * returns: u_id
	 * **/
	function add_user( $email, $password, $question, $answer ){
		$user = EMP::find_user( $email, $password );
		if( null == $user ){
			$db = dblogin::dbconnect();
			$sql = "INSERT INTO Users (email, password, question, answer)
							VALUES ('$email','$password', '$question', '$answer')";
			$rows = $db->Execute( $sql );
			return EMP::login( $email, $password );
		}
		else{
			return null;
		}
	}//end add_user
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
	}//end find_user
	/**
	 * verify_user
	 * parameters: question, answer
	 * returns: u_id
	 * **/
	 function verify_user( $email, $question, $answer ){
		 $db = dblogin::dbconnect();
		 $sql = "SELECT u_id
		 		 FROM Users
		 		 WHERE email = '$email'
		 		 AND question = '$question'
		 		 AND answer = '$answer'";
		 $rows = $db->Execute( $sql );
		 $return = $rows->GetRows();
		 return $return;
	 }//end verify user
	 /**
	 * find_all_users
	 * parameters:
	 * returns: emails
	 * **/
	function find_all_users(){
		$db = dblogin::dbconnect();
		$sql = "SELECT u_id, email
				FROM Users";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}//end find_all_users
	 /**
	 * reset_password
	 * parameters: email, password
	 * returns: true
	 * **/
	 function reset_password( $email, $password ){
		 $db = dblogin::dbconnect();
		 $sql = "UPDATE Users
		 		 SET password = '$password'
		 		 WHERE email = '$email'";
		 $rows = $db->Execute( $sql );
		 if( $rows ){
			 return true;
		 }
		 else{
			 return false;
		 }
	 }
	 /**
	 * find_all_items
	 * parameters:
	 * returns: items
	 * **/
	function find_all_items(){
		$db = dblogin::dbconnect();
		$sql = "SELECT *
				FROM Listings";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}//end find_all_items
	/**
	 * add_posting
	 * parameters: u_id, URI, text
	 * returns: list_id
	 * **/
	function add_posting( $u_id, $type_id, $text, $title, $URI = null ){
		$db = dblogin::dbconnect();
		$sql = "INSERT INTO Listings (u_id, type_id, pics, description, title)
				VALUES ('$u_id', '$type_id', '$URI', '$text', '$title')";
		$rows = $db->Execute( $sql );
		if( $rows ){
			return true;
		}
		else{
			return false;
		}
	}//end add_posting
	/**
	 * update_posting
	 * parameters: list_id title, text
	 * returns true 
	 * **/
	function update_posting( $list_id, $type, $text ){
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
			case 'other':
				$cat = 6;
				break;
		}
		$sql = "UPDATE Listings
				SET type_id = $cat, description = '$text'
				WHERE list_id = $list_id";
						
		if( $rows = $db->Execute( $sql ) ){
			return true;
		}
		else{
			return false;
		}
	}//update_posting
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
			case 'other':
				$cat = 6;
				break;
		}
		$sql = "SELECT * 
				FROM Listings
				WHERE type_id = '$cat'
				AND delete= 'null'";
				
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		
		return $return;
	}//end list_postings
	/**
	 * get_user_listings
	 * parameters: u_id
	 * returns: array of postings
	 * **/
	function get_user_listings( $u_id ){
		$db = dblogin::dbconnect();
		
		$sql = "SELECT * 
				FROM Listings
				WHERE u_id = '$u_id'
				AND deleted = 0";
				
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}//end get_user_listings
	/**
	 * get_posting
	 * parameters: $list_id
	 * returns: listing information for a specific listing
	 * **/
	function get_posting( $list_id ){
		$db = dblogin::dbconnect();
		$sql = "SELECT * 
				FROM Listings
				WHERE list_id = '$list_id'
				AND deleted = 0";
		$rows = $db->Execute( $sql );
		$return = $rows->GetRows();
		return $return;
	}//end get_postings
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
			case 'other':
				$cat = 6;
				break;
		}
		$return = array();
		$sql1 = "SELECT * 
				FROM Listings
				WHERE deleted = 0
				AND type_id = $cat";
		$rows1 = $db->Execute( $sql1 );
		$return[0] = $rows1->GetRows();
		
		if( '' != $params ){
			$sql2 = "SELECT * 
				 FROM Listings
				 WHERE deleted = 0
				 AND title LIKE '%$params%'
				 OR description LIKE '%$params%'";
			$rows2 = $db->Execute( $sql2 );
			$return[1] = $rows2->GetRows();
		}
		return $return;
	}//end search_postings
	/**
	 * delete_posting
	 * parameters: post_id
	 * returns: boolean
	 * **/
	function delete_posting( $post_id ){
		$db = dblogin::dbconnect();
		$sql = "UPDATE Listings
						SET deleted = 1
						WHERE list_id = '$post_id'";
		if( $rows = $db->Execute( $sql ) ){
			return true;
		}
		else{
			return false;
		}
	}//end delete_posting
	/**
	 * admin_delete
	 * paramters: type, item_id
	 * returns: boolean
	 * **/
	function admin_delete( $type, $item_id ){
		$db = dblogin::dbconnect();
		$sql = "DELETE FROM $type
						WHERE list_id = $item_id";
		
		if( $rows = $db->Execute( $sql ) ){
			return true;
		}
		else{
			return false;
		}
	}//end admin_delete

}

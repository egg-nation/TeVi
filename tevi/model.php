<?php

namespace App\Tevi;

use \App\Tevi\Config;

/**
* description
*
* @library	
* @author	
* @since	
*/
class Model{

	/**
	* description
	*
	* @var type
	*
	* @access type
	*/
	var $db;
	
	
	/**
	* description
	*
	* @param
	*
	* @return
	*
	* @access
	*/
	function __init() {


		$this->db = new Database(
			Config::$mysql_server,
			Config::$mysql_user,
			Config::$mysql_pass,
			Config::$mysql_database
		);

	}


	static function newInstance() {
		return new static();
	}

	
	/**
	* description
	*
	* @param
	*
	* @return
	*
	* @access
	*/
	function JSON($data , $headers = true) {

		if ($headers) {
			header('Content-Type: application/json');
		}
		
		echo json_encode($data , JSON_THROW_ON_ERROR);
		die();

	}
	
}

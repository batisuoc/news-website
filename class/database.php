<?php

require_once 'config.php';

class Database
{
	protected $db;

	function __construct()
	{
		$this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	   	$this->db->set_charset("utf8"); 
	}
}

?>
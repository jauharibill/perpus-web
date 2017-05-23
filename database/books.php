<?php

require_once "config.php";

/**
* 
*/
class Books extends config
{
	
	function __construct()
	{
		$this->connection();
	}
}
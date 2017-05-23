<?php

namespace database;

/**
* 
*/
class config
{
	private $host 	= "localhost";
	private $user 	= "root";
	private $pass 	= "root";
	private $db 	= "perpusweb";

	protected function connection()
	{
		return mysqli_connect($this->host, $this->user, $this->pass, $this->db);
	}
}


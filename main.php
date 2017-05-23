<?php

/**
* 
*/
class Main
{
	protected $db_config;

	function __construct()
	{
		$this->db_config = mysqli_connect('localhost', 'root', 'root', 'perpusweb');
	}

	public function index(){
		$query 		= mysqli_query($this->db_config, "SELECT * FROM data_buku");
		// $data_buku 	= mysqli_fetch_assoc($query);
		return $query;
	}

	public function show($q){
		$statement = "SELECT * FROM data_buku WHERE judul like '%$q%'";
		// return $statement;
		$query 		= mysqli_query($this->db_config, $statement);
		// $data_buku 	= mysqli_fetch_assoc($query);
		return $query;
	}

	public function detail($id)
	{
		$query 		= mysqli_query($this->db_config, "SELECT * FROM data_buku WHERE id=$id LIMIT 1");
		$data_buku 	= mysqli_fetch_assoc($query);
		return $data_buku;
 	}
}
<?php
// mysql_connect("localhost","root","");
// mysql_select_db("perpusweb");
$conn = mysqli_connect("localhost", "root", "root", "perpusweb");
//fungsi format rupiah 
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }**/
?>
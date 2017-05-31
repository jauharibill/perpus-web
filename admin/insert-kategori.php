<?php

require_once "../conn.php";
$name = $_POST['name'];
$query = mysqli_query($conn, "INSERT INTO kategori_buku (`name`) VALUES('$name')") or die(mysqli_error($conn));
header("Location: input-kategori.php");


?>
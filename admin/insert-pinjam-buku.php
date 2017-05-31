<?php

require_once "../conn.php";

$id_buku = $_POST['id_buku'];
$no_induk = $_POST['no_induk'];
$jumlah = $_POST['jumlah'];

$query = mysqli_query($conn, "INSERT INTO pinjam (`id_buku`, `no_induk_anggota`, `jumlah`) VALUES('$id_buku', '$no_induk', '$jumlah')") or die(mysqli_error($conn));

header("location: pinjam-buku.php");


?>
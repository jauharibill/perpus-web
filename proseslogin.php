<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

if (empty($username) && empty($password)) {
	header('location:login.html?error1');
} else if (empty($username)) {
	header('location:login.html?error=2');
} else if (empty($password)) {
	header('location:login.html?error=3');
}

$q = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];
    $_SESSION['gambar'] = $row['gambar'];	

	header('location:admin/index.php');
} else {
	header('location:login.html?error=4');
}
?>
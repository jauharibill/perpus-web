<?php
include "conn.php";
// $id          = $_POST['id'];
$nama        = $_POST['nama'];
$jk 		 = $_POST['jk'];
$status	     = $_POST['status'];
$perlu   	 = $_POST['perlu1'];
$cari 	     = $_POST['cari'];
$saran	     = $_POST['saran'];
$tgl_kunjung = $_POST['tgl_kunjung'];
$jam_kunjung = $_POST['jam_kunjung'];

//if( empty($nama) || empty($jk) || empty($kelas) || empty($perlu) || empty($cari) || empty($saran) ){
    //echo "<b>Data Harus Di isi.!!!</b>";
//}else{

$query = mysqli_query($conn, "INSERT INTO pengunjung (nama, jk, kelas, perlu1, cari, saran, tgl_kunjung, jam_kunjung) VALUES ('$nama', '$jk', '$status', '$perlu', '$cari', '$saran', '$tgl_kunjung', '$jam_kunjung')");
if ($query){
	echo "<script>alert('Data Karyawan Berhasil dimasukan!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Karyawan Gagal dimasukan!'); window.location = 'index.php'</script>";	
}
//}
?>
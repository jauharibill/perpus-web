<?php
$namafolder="gambar_admin/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $user_id = $_POST['user_id'];
		$username= $_POST['username'];
		$password=$_POST['password'];
        $fullname=$_POST['fullname'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO admin(user_id,username,password,fullname,gambar) VALUES
            ('$user_id','$username','$password','$fullname','$gambar')";
			$res=mysqli_query($conn, $sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<h3><a href='input-admin.php'> Input Lagi</a></h3>";
            echo "<h3><a href='admin.php'> Data Admin</a></h3>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}

?>
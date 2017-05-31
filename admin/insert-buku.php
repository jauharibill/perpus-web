<?php

        include "../conn.php";

        $judul = $_POST['judul'];
	$pengarang= $_POST['pengarang'];
	$th_terbit= $_POST['th_terbit'];
	$penerbit= $_POST['penerbit'];
	$kategori= $_POST['kategori'];
        $jumlah_buku = $_POST['jumlah_buku'];
        $jum_temp = $_POST['jump_temp'];
        $tgl_input = Date();

        $photo = $_FILES['photo'];
        $extension = explode('.', $photo['name']);
        $name  = md5($photo['name']).".".$extension[1];
        $destinasi = "gambar_buku/";
        if(move_uploaded_file($photo['tmp_name'], $destinasi.$name)){
                $string = "INSERT INTO data_buku (`judul`, `photo`, `pengarang`, `th_terbit`, `penerbit`,`kategori`, `jumlah_buku`) values('$judul', '$name', '$pengarang', '$th_terbit', '$penerbit', '$kategori', '$jumlah_buku')";
                $query = mysqli_query($conn, $string) or die(mysqli_error($conn));
                if ($query) {
                        echo "Data sudah Masuk";
                        header("Location: input-buku.php");
                }else{
                        echo "Data belum Masuk";
                }        
        }else{
                echo "Error";
        }

        
        

?>
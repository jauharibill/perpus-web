<?php

		$namafolder="gambar_anggota/"; //tempat menyimpan file
		include "../conn.php";

        $judul = $_POST['judul'];
		$pengarang= $_POST['pengarang'];
		$th_terbit= $_POST['th_terbit'];
		$penerbit= $_POST['penerbit'];
		$isbn= $_POST['isbn'];
		$kategori= $_POST['kategori'];
        $kode_klas = $_POST['kode_klas'];
        $jumlah_buku = $_POST['jumlah_buku'];
        $lokasi = $_POST['lokasi'];
        $asal = $_POST['asal'];
        $jum_temp = $_POST['jump_temp'];
        $tgl_input = Date();
        $query = mysqli_query($conn, "INSERT INTO data_buku (`judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `jum_temp`, `tgl_input`) values('$judul', '$pengarang', '$th_terbit', '$penerbit', '$isbn', '$kategori', '$kode_klas', '$jumlah_buku', '$lokasi', '$asal', '$jum_temp', '$tgl_input')") or die(mysqli_error($conn));
        if ($query) {
        	echo "Data sudah Masuk";
        	header("Location: input-buku.php");
        }else{
        	echo "Data belum Masuk";
        }
        

?>
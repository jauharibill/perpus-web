-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: perpusweb
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `user_id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'umar','umar','umar sjaiffudin','logo-BPS.jpg'),(2,'admin','admin','admin','logo-BPS.jpg');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_anggota`
--

DROP TABLE IF EXISTS `data_anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_anggota` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_induk` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_anggota`
--

LOCK TABLES `data_anggota` WRITE;
/*!40000 ALTER TABLE `data_anggota` DISABLE KEYS */;
INSERT INTO `data_anggota` VALUES (2,'15902','AHMAD MUCHTADIN','L','Bekasi, 27 Januari 1998','Cabang Lio, Cikarang Utara','gambar_anggota/Assy enggine.jpg','2017-05-23 02:45:33'),(3,'15903','HAMRI AJAH','L','Cikarang, 30 Januari 1997','Rawa Bangkong, Cikarang Timur','gambar_anggota/009.jpg','2017-05-23 02:45:33'),(4,'15904','ANI ANILAH','P','Cikarang, 20 Januari 1992','Sasak Bali, Sukatani','gambar_anggota/c.jpg','2017-05-23 02:45:33'),(5,'15905','RYAN SUPRIATNA','L','Cikarang, 9 Agustus 1995','Sukatani, Cikarang','gambar_anggota/ko caci.jpg','2017-05-23 02:45:33'),(6,'15906','LATHIFAH','P','Bekasi, 26 Juli 1997','Cikarang Baru','gambar_anggota/1098.jpg','2017-05-23 02:45:33'),(7,'15907','CANTIKA PUJIASTUTI','P','Karawang, 11 April 1998','Tambelang, Bekasi','gambar_anggota/user.jpg','2017-05-23 02:45:33'),(8,'15908','SEBASTIAN HADI PRASETYO','L','Bekasi, 17 Agustus 1990','Tambelang, Bekasi','gambar_anggota/26115.jpg','2017-05-23 02:45:33'),(9,'15909','RAMA AGUS SUPRIYADI','L','Bogor, 29 Juli 1994','Cikarang, Bekasi','gambar_anggota/l.jpg','2017-05-23 02:45:33'),(11,'15911','HAKKO BIO RICHARD','L','Bekasi, 27 September 1990','Bekasi, Jawa Barat, Indonesia','gambar_anggota/Image0205.jpg','2017-05-23 02:45:33'),(12,'20150','ANTON SUGIANTO','L','Indramayu, 28 Oktober 1988','cikarang barat bekasi','gambar_anggota/2.jpg','2017-05-23 02:45:33'),(13,'20150','DEDE RIZKI RAMADHAN','L','Bekasi, 30 November 1991','Pilar Barat, Cikarang, Bekasi','gambar_anggota/5.jpg','2017-05-23 02:45:33');
/*!40000 ALTER TABLE `data_anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_buku`
--

DROP TABLE IF EXISTS `data_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_buku`
--

LOCK TABLES `data_buku` WRITE;
/*!40000 ALTER TABLE `data_buku` DISABLE KEYS */;
INSERT INTO `data_buku` VALUES (2,'Membangun Toko Online Dengan PHP dan MySQL','','Rofiqo Fauzan Firdaus','2015','NiqoWeb Sukses Media','1300',10,'2015-10-10 00:47:40'),(3,'Aplikasi Penggajian Karyawan dengan PHP','','Hakko Bio Richard','2015','NiqoWeb Sukses media','1300',10,'2015-10-10 00:46:00'),(4,'Membangun Aplikasi Perpustakaan Berbasis Web','','Hakko Bio Richard','2015','NiqoWeb Sukses media','1300',10,'2015-10-10 00:44:54'),(5,'Membangun Aplikasi Nilai Dengan PHP','','Hakko Bio Richard','2009','NiqoWeb Sukses Media','1300',10,'2015-10-10 00:48:50'),(12,'react js','387c80f3d58e47a7cb8ac1d370a531bf.jpg','bill tanthowi jauhari','2000','andi','1',9,'2017-05-30 23:08:40');
/*!40000 ALTER TABLE `data_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_buku`
--

DROP TABLE IF EXISTS `item_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jumlah_buku` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_buku`
--

LOCK TABLES `item_buku` WRITE;
/*!40000 ALTER TABLE `item_buku` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jumlah_buku`
--

DROP TABLE IF EXISTS `jumlah_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jumlah_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `id_buku` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jumlah_buku`
--

LOCK TABLES `jumlah_buku` WRITE;
/*!40000 ALTER TABLE `jumlah_buku` DISABLE KEYS */;
/*!40000 ALTER TABLE `jumlah_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_buku`
--

DROP TABLE IF EXISTS `kategori_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_buku`
--

LOCK TABLES `kategori_buku` WRITE;
/*!40000 ALTER TABLE `kategori_buku` DISABLE KEYS */;
INSERT INTO `kategori_buku` VALUES (1,'komputer');
/*!40000 ALTER TABLE `kategori_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengunjung`
--

DROP TABLE IF EXISTS `pengunjung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengunjung`
--

LOCK TABLES `pengunjung` WRITE;
/*!40000 ALTER TABLE `pengunjung` DISABLE KEYS */;
INSERT INTO `pengunjung` VALUES (1,'Sebastian Hadi Prasetyo','L','9a','Membaca','Antropologi','Pelayanan di tingkatkan lagi','2015-10-11','07:23:40'),(2,'Hakko Bio Richard','L','XII4','Membaca','Buku Pemrograman','Perbanyak Buku Pemrograman','0000-00-00','04:21:50'),(3,'Niqo Bio Haqqul Yaqin','L','X2','Membaca','Buku Pemrograman','Tingkatkan Pelayanan','2015-10-18','04:23:04'),(4,'jum','P','XII2','pinjam buku','buku','bagus','2017-02-10','03:10:46'),(5,'anggi','P','-- Pilih Salah Sa','jjjj','ttt','hjyfkukgjh','2017-02-21','13:43:44'),(6,'sofi','L','X4','ggd','fjfdksafjs','fskfskal','2017-02-21','13:54:42'),(7,'Rofiqo Fauzan Firdaus','','','','Admin yang cantik','tolong berikan admin yangcantik','2017-03-02','17:15:20'),(8,'Fauzan','','','','Admin yang cantik','admin','2017-03-02','17:16:32'),(9,'Rofiqo','','','','buku','Apaa yaa','2017-03-02','17:26:32'),(10,'Firdaus','','','jalan jalan','terserah','terserah juga','2017-03-02','17:27:15'),(11,'Rofiqo Fauzan Firdaus','L','','cari cari','buku lah','terserah','2017-03-02','17:36:06'),(12,'Rofiqo Fauzan Firdaus','L','','jalan aja','apa aja','terserah aku','2017-03-02','17:46:56'),(13,'Rofiqo Fauzan Firdaus','L','Mahasiswa/i','Jalan Jalan Aja','cari buku aja','Enak sii','2017-03-02','17:48:46'),(14,'Bill Tanthowi Jauhari','L','Umum','meminjam buku','hello','baik','2017-04-27','08:04:03');
/*!40000 ALTER TABLE `pengunjung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pinjam`
--

DROP TABLE IF EXISTS `pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `no_induk_anggota` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinjam`
--

LOCK TABLES `pinjam` WRITE;
/*!40000 ALTER TABLE `pinjam` DISABLE KEYS */;
INSERT INTO `pinjam` VALUES (1,12,15902,4,'2017-05-30 23:23:02');
/*!40000 ALTER TABLE `pinjam` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-31  6:36:54

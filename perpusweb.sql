-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2015 pada 17.13
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpusweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'umar', 'umar', 'Umar Sjaiffudin', 'logo-BPS.jpg'),
(2, 'admin', 'admin', 'admin', 'logo-BPS.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggota`
--

CREATE TABLE IF NOT EXISTS `data_anggota` (
`id` int(4) NOT NULL,
  
  `nama` varchar(150) NOT NULL
  
) 

--
-- Dumping data untuk tabel `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `nama`, ) VALUES
(1, '1101', 'AGUNG SANTOSO', 'L', '9a', 'Cikarang, 4 Agustus 1997', 'Kp. Wangkal, Cikarang Barat', 'gambar_anggota/26115.jpg'),
(2, '1102', 'AHMAD MUCHTADIN', 'L', '9c', 'Bekasi, 27 Januari 1998', 'Cabang Lio, Cikarang Utara', 'gambar_anggota/Assy enggine.jpg'),
(3, '1103', 'HAMRI AJAH', 'L', '9b', 'Cikarang, 30 Januari 1997', 'Rawa Bangkong, Cikarang Timur', 'gambar_anggota/009.jpg'),
(4, '1104', 'ANI ANILAH', 'P', '9b', 'Cikarang, 20 Januari 1992', 'Sasak Bali, Sukatani', 'gambar_anggota/c.jpg'),
(5, '1105', 'RYAN SUPRIATNA', 'L', '9b', 'Cikarang, 9 Agustus 1995', 'Sukatani, Cikarang', 'gambar_anggota/ko caci.jpg'),

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE IF NOT EXISTS `data_buku` (
`id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jum_temp` int(4) NOT NULL,
  `tgl_input` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `jum_temp`, `tgl_input`) VALUES
(2, 'Membangun Toko Online Dengan PHP dan MySQL', 'Hakko Bio Richard', '2015', 'NiqoWeb Sukses Media', 'QWERT122345566', '1300', 'XII-Utama', 10, 'Rak A1', 'Pembelian', 1, '2015-10-10 07:47:40'),
(3, 'Aplikasi Penggajian Karyawan dengan PHP', 'Hakko Bio Richard', '2015', 'NiqoWeb Sukses media', 'QWERT1232446', '1300', 'XI-Utama', 10, 'Rak A2', 'Pembelian', 10, '2015-10-10 07:46:00'),
(4, 'Membangun Aplikasi Perpustakaan Berbasis Web', 'Hakko Bio Richard', '2015', 'NiqoWeb Sukses media', 'QWERT12234985', '1300', 'X-Utama', 10, 'Rak A2', 'Pembelian', 10, '2015-10-10 07:44:54'),
(5, 'Membangun Aplikasi Nilai Dengan PHP', 'Hakko Bio Richard', '2009', 'NiqoWeb Sukses Media', 'QWERT12232454', '1300', 'X-Tambahan', 10, 'Rak H1', 'Pemberian Siswa', 10, '2015-10-10 07:48:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
`id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `jk`, `kelas`, `perlu1`, `cari`, `saran`, `tgl_kunjung`, `jam_kunjung`) VALUES
(1, 'Sebastian Hadi Prasetyo', 'L', '9a', 'Membaca', 'Antropologi', 'Pelayanan di tingkatkan lagi', '2015-10-11', '07:23:40'),
(2, 'Hakko Bio Richard', 'L', 'XII4', 'Membaca', 'Buku Pemrograman', 'Perbanyak Buku Pemrograman', '0000-00-00', '04:21:50'),
(3, 'Niqo Bio Haqqul Yaqin', 'L', 'X2', 'Membaca', 'Buku Pemrograman', 'Tingkatkan Pelayanan', '2015-10-18', '04:23:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_pinjam`
--

CREATE TABLE IF NOT EXISTS `trans_pinjam` (
`id` int(5) NOT NULL,
  `judul_buku` varchar(250) NOT NULL,
  `id_peminjam` int(4) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

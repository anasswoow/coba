-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2014 at 04:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siait`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_barang`
--

CREATE TABLE IF NOT EXISTS `t_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(200) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `status` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `kondisi` varchar(80) NOT NULL,
  `ucrea` varchar(200) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `status` (`status`),
  KEY `kondisi` (`kondisi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `t_barang`
--

INSERT INTO `t_barang` (`id_barang`, `nama_barang`, `foto`, `status`, `deskripsi`, `kondisi`, `ucrea`) VALUES
(2, 'Meja Komputer', 'meja.jpg', 'Tersedia', 'Keperluan Karyawan IT', 'Rusak', 'admin'),
(3, 'Laptop Toshiba X112', 'laptop_toshiba_x112.jpg', 'Tersedia', 'RAM 3GB', 'Baik', 'admin'),
(6, 'Laptop Asus', 'laptop_asus.jpg', 'Tersedia', 'Warna Putih', 'Baik', 'Admin'),
(7, 'Kabel USB', NULL, 'Tersedia', 'Untuk penghubung USB dengan PC', 'Baik', 'Admin'),
(8, 'Printer Canon', 'printerx.jpg', 'Tersedia', 'Keperluan Finance', 'Baik', 'Admin'),
(9, 'Printer HP', 'printer_hp.jpg', 'Tersedia', 'Keperluan HRGA', 'Baik', 'Admin'),
(10, 'Scanner Canon LiDE 110', 'scanner_canon_LiDE110.jpg', 'Tersedia', 'Untuk Keperluan Purchasing Dept.', 'Baik', 'Admin'),
(15, 'Laptop Toshiba Sattelite', 'laptop_toshiba_s875.jpg', 'Tersedia', 'Keperluan Procurement', 'Baik', 'Marudut'),
(18, 'UPS 200 V', 'UPS.jpg', 'Tersedia', 'Keperluan HRGA', 'Baik', 'yohanes');

-- --------------------------------------------------------

--
-- Table structure for table `t_data`
--

CREATE TABLE IF NOT EXISTS `t_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `t_data`
--

INSERT INTO `t_data` (`id`, `judul`, `path`) VALUES
(7, 'Berita_Penyerahan_Rima_Gustana_2014-08-23', 'Berita_Penyerahan_Rima_Gustana_2014-08-23.pdf'),
(8, 'Berita_Penerimaan_Rima_Gustana_2014-08-23', 'Berita_Penerimaan_Rima_Gustana_2014-08-23.pdf'),
(9, 'test', 'Berita_Penerimaan_Rima_Gustana_2014-08-23.pdf'),
(10, 'Berita Serah Terima Poppy', 'Berita_Penyerahan_Rima_Gustana_2014-08-23.pdf'),
(11, 'Daftar Penyerahan', 'Berita_Penerimaan_Rima_Gustana_2014-08-23.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `t_jk`
--

CREATE TABLE IF NOT EXISTS `t_jk` (
  `id` varchar(10) NOT NULL,
  `ket` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jk`
--

INSERT INTO `t_jk` (`id`, `ket`) VALUES
('L', 'Pria'),
('P', 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `t_karyawan`
--

CREATE TABLE IF NOT EXISTS `t_karyawan` (
  `NIK` varchar(200) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `jk` varchar(10) NOT NULL,
  PRIMARY KEY (`NIK`),
  KEY `jk` (`jk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_karyawan`
--

INSERT INTO `t_karyawan` (`NIK`, `nama_karyawan`, `jk`) VALUES
('07.09.0003', 'Heldinor ', 'L'),
('07.09.0004', 'Dedy Suprianto', 'L'),
('07.09.0042', 'Syaiful Bachri', 'L'),
('07.09.0046', 'Wirmansyah', 'L'),
('07.09.0054', 'Rima Gustana', 'P'),
('07.09.0058', 'Yulius Bone Palanna', 'L'),
('07.09.0059', 'Abdur Rahman', 'L'),
('08.05.0082', 'Irwansyah', 'L'),
('08.08.0084', 'Herlina Ramlah', 'P'),
('08.08.0085', 'Abdul Arifin', 'L'),
('09.04.0096', 'Abner Trianto', 'L'),
('09.06.0098', 'E. Dwi Putranta. W', 'L'),
('09.06.0100', 'Imike Asriani Kila ', 'P'),
('10.02.0102', 'Yon Cahyadi', 'L'),
('10.03.0104', 'Rahmawati', 'P'),
('10.03.0106', 'Juari', 'L'),
('10.03.0107', 'Mashuri', 'L'),
('10.03.0108', 'Triyatno', 'L'),
('10.03.0109', 'Toni Benyamin', 'L'),
('10.03.0110', 'Erwin', 'L'),
('10.03.0111', 'M. Syarwani', 'L'),
('10.03.0113', 'Achmad  Yani', 'L'),
('10.03.0182', 'Yustina Sesah', 'P'),
('10.03.0183', 'Sensuryanto', 'L'),
('10.04.0184', 'Eko Suko Wibowo', 'L'),
('10.05.0186', 'Mujianto', 'L'),
('10.07.0188', 'Achmad Saleh', 'L'),
('10.08.0189', 'Mangaratua Manik', 'L'),
('10.08.0190', 'Wellem Wiyoko', 'L'),
('10.10.0196', 'Djoni Santoso', 'L'),
('10.11.0199', 'Horas Partogi Sibarani', 'L'),
('10.12.0200', 'Asmani', 'L'),
('11.06.0207', 'Muriansyah', 'L'),
('11.09.0224', 'Indriadi Saputra', 'L'),
('11.09.0226', 'Aris Rante Kole', 'L'),
('11.10.0231', 'Arofiq', 'L'),
('11.11.0233', 'Sempurna Gultom', 'L'),
('11.11.0235', 'Asmawati', 'P'),
('11110017', 'Marudut Try Putra Marpaung', 'L'),
('11111089', 'Yohanes Polin Bakara', 'L'),
('111111055', 'Poppy', 'P'),
('12.06.0246', 'Suryadi Wibowo', 'L'),
('12.07.0250', 'Arizal Marka', 'L'),
('12.08.0252', 'Boggi Sapto Pringadi', 'L'),
('12.09.0263', 'Stephane Tenisia E. Assa', 'P'),
('12.09.0265', 'S. Elyazar Nisah Pih', 'L'),
('12.10.0267', 'Ferdinan P.L. Hutasoit', 'L'),
('12.11.0269', 'Alfa Tangke', 'L'),
('13.01.0272', 'Machfudz. SJ', 'L'),
('13.05.0277', 'Novantoro Guntur Pamungkas', 'L'),
('13.06.0279', 'Sri Soegiharto', 'L'),
('13.06.0280', 'Tommy Zaqak Surang', 'L'),
('13.06.0281', 'Arminal', 'L'),
('13.07.0287', 'Teguh Alamsyah', 'L'),
('13.09.0291', 'Marudut Try Putra Marpaung', 'L'),
('14.01.0295', 'Yesmar Banu Kusmagi', 'L'),
('Christin Pandjaitan', '111112000', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `t_kondisi`
--

CREATE TABLE IF NOT EXISTS `t_kondisi` (
  `id` varchar(80) NOT NULL,
  `kondisi` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kondisi`
--

INSERT INTO `t_kondisi` (`id`, `kondisi`) VALUES
('Baik', 'Baik'),
('Rusak', 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `t_pemakaian`
--

CREATE TABLE IF NOT EXISTS `t_pemakaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang_pakai` int(11) NOT NULL,
  `id_karyawan_pakai` varchar(200) NOT NULL,
  `tgl_serah` datetime NOT NULL,
  `tgl_terima` datetime DEFAULT NULL,
  `status` varchar(80) NOT NULL,
  `kondisi_kembali` varchar(80) DEFAULT NULL,
  `kondisi` varchar(80) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_barang_pakai` (`id_barang_pakai`),
  KEY `id_karyawan_pakai` (`id_karyawan_pakai`),
  KEY `status` (`status`),
  KEY `kondisi` (`kondisi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `t_pemakaian`
--

INSERT INTO `t_pemakaian` (`id`, `id_barang_pakai`, `id_karyawan_pakai`, `tgl_serah`, `tgl_terima`, `status`, `kondisi_kembali`, `kondisi`, `deskripsi`) VALUES
(122, 18, '111111055', '2014-08-23 00:00:00', '2014-08-23 00:00:00', 'Tersedia', 'Baik', 'Baik', 'Fasilitas Kerja Praktek'),
(123, 2, '111111055', '2014-08-23 00:00:00', '2014-08-23 00:00:00', 'Tersedia', 'Baik', 'Baik', 'Fasilitas Kerja Praktek'),
(124, 2, '07.09.0003', '2014-08-23 00:00:00', '2014-08-23 00:00:00', 'Tersedia', 'Rusak', 'Baik', 'Pekerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE IF NOT EXISTS `t_status` (
  `id` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`id`, `status`) VALUES
('Digunakan', 'Digunakan'),
('Tersedia', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama`, `email`, `password`) VALUES
(3, 'Admin', 'adminadmin', 'administrator'),
(4, 'Marudut', 'marudut@indomining.co.id', 'marpaung'),
(5, 'yohanes', 'yohanes.polin@gmail.com', 'test');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD CONSTRAINT `t_barang_ibfk_1` FOREIGN KEY (`status`) REFERENCES `t_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_barang_ibfk_2` FOREIGN KEY (`kondisi`) REFERENCES `t_kondisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_karyawan`
--
ALTER TABLE `t_karyawan`
  ADD CONSTRAINT `t_karyawan_ibfk_1` FOREIGN KEY (`jk`) REFERENCES `t_jk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pemakaian`
--
ALTER TABLE `t_pemakaian`
  ADD CONSTRAINT `t_pemakaian_ibfk_2` FOREIGN KEY (`id_barang_pakai`) REFERENCES `t_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pemakaian_ibfk_5` FOREIGN KEY (`id_karyawan_pakai`) REFERENCES `t_karyawan` (`NIK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

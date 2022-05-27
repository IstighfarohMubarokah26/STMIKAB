-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 02:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIP` int(16) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `Nama_Panggilan` varchar(10) NOT NULL,
  `TTL` date NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `No_HP` int(14) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Sekolah` varchar(30) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Facebook` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIP`, `Nama_Lengkap`, `Nama_Panggilan`, `TTL`, `Alamat`, `No_HP`, `Agama`, `Sekolah`, `Jurusan`, `Facebook`) VALUES
(910901676, 'Istighfaroh Mubarokah', 'Isti', '2000-04-26', 'Jalan Srikaya SP 2 Timika Papua', 821673991, 'Islam', 'STMIK Antar Bangsa', 'Sistem Informasi', 'Istifaroh'),
(1197462, 'Sarah Isti', 'Sarah', '2000-04-06', 'Jalan. elang Timika No.32', 8123457, 'Islam', 'Universitas Indonesia', 'Dokter', 'Sarahti');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

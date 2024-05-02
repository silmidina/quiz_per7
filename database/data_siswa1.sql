-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2024 at 11:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa1`
--

CREATE TABLE `data_siswa1` (
  `nama_siswa` varchar(255) NOT NULL,
  `nis` int(12) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Budha','Hindu','Protestan','Khonghucu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa1`
--

INSERT INTO `data_siswa1` (`nama_siswa`, `nis`, `kelas`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `jenis_kelamin`, `agama`) VALUES
('silmi', 15220277, '15.4A.05', '2024-04-05', 'Jakarta', 'Jakarta', 'Perempuan', 'Islam'),
('Nadia', 17839926, '9', '2010-01-02', 'Bekasi', 'Bekasi', 'Perempuan', 'Islam'),
('Silmi Rahmadina', 15220277, '15.4A.05', '2003-11-08', 'Bekasi', 'Bekasi', 'Perempuan', 'Islam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

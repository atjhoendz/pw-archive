-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 09:43 PM
-- Server version: 10.1.37-MariaDB-1
-- PHP Version: 7.2.9-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lhr` varchar(100) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` char(1) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `warganegara` varchar(3) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`nim`, `nama`, `tmp_lhr`, `tgl_lhr`, `jk`, `agama`, `warganegara`, `hobby`, `alamat`, `email`) VALUES
('140810170020', 'Mohamad Achun Armando', 'Cirebon', '2000-05-19', 'L', 'Islam', 'WNA', 'Travelling,Membaca,Coding,', 'Cirebon', 'atjhoendz@mail.com'),
('140810170022', 'Muhammad Hafidz Alfarizi', 'Bandung', '1999-10-12', 'L', 'Islam', 'WNI', 'Bersepeda,Travelling,Main Game,', 'Bandung', 'hafidz@ewok.com'),
('140810170052', 'Muhammad Fahmi Alwan', 'Bandung', '1998-12-05', 'L', 'Islam', 'WNI', 'Main Game,Membaca,', 'Bandung', 'meone@gmail.com'),
('140810170064', 'Imron Madani', 'Depok', '1999-05-13', 'L', 'Islam', 'WNI', 'Travelling,Membaca,', 'Jalan Karya Bhakti VI No. 8', 'danimron@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

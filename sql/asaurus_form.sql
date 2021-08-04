-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2021 at 06:05 PM
-- Server version: 10.2.39-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asauruse_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_kelas`
--

CREATE TABLE `list_kelas` (
  `id_kelas` varchar(10) NOT NULL COMMENT 'ID Kelas',
  `nama_kelas` varchar(10) NOT NULL COMMENT 'Nama Kelas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Listing Kelas yang di dukung oleh platform AI AsaurusEdu';

--
-- Dumping data for table `list_kelas`
--

INSERT INTO `list_kelas` (`id_kelas`, `nama_kelas`) VALUES
('kelas-07', 'Kelas 7'),
('kelas-08', 'Kelas 8'),
('kelas-09', 'Kelas 9'),
('kelas-10', 'Kelas 10'),
('kelas-11', 'Kelas 11'),
('kelas-12', 'Kelas 12');

-- --------------------------------------------------------

--
-- Table structure for table `list_linkmateri`
--

CREATE TABLE `list_linkmateri` (
  `id_linkmateri` varchar(50) NOT NULL,
  `id_materi` varchar(50) NOT NULL,
  `jenis_media` varchar(100) NOT NULL,
  `link_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_matapelajaran`
--

CREATE TABLE `list_matapelajaran` (
  `id_matpel` varchar(10) NOT NULL,
  `nama_matpel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Listing Mata Pelajaran yang didukung oleh AI AsaurusEdu';

--
-- Dumping data for table `list_matapelajaran`
--

INSERT INTO `list_matapelajaran` (`id_matpel`, `nama_matpel`) VALUES
('bindo', 'Bahasa Indonesia'),
('bing', 'Bahasa Inggris'),
('ipa', 'Ilmu Pengetahuan Ala'),
('ips', 'Ilmu Pengetahuan Sos'),
('mat', 'Matematika'),
('pai', 'Pendidikan Agama Isl'),
('pjok', 'Pendidikan Jasmani'),
('pkn', 'Pendidikan Kewarga N');

-- --------------------------------------------------------

--
-- Table structure for table `list_materi`
--

CREATE TABLE `list_materi` (
  `id_materi` varchar(16) NOT NULL,
  `nama_materi` text NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_matpel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Listing Materi yang tersedia pada AsaurusEdu';

--
-- Dumping data for table `list_materi`
--

INSERT INTO `list_materi` (`id_materi`, `nama_materi`, `id_kelas`, `id_matpel`) VALUES
('07-bindo-05', 'Benda-Benda di dalam KBBI', 'kelas-07', 'bindo'),
('07-bing-06', 'Benda-Benda di dalam Kamus', 'kelas-07', 'bing'),
('07-ipa-01', 'Bentuk Bentuk Material di Bumi', 'kelas-07', 'ipa'),
('07-ips-02', 'Benda-Benda di dalam Kerajaan', 'kelas-07', 'ips'),
('07-mtk-03', 'Benda-Benda di dalam Matematika', 'kelas-07', 'mtk'),
('07-pai-04', 'Benda-Benda di dalam Kabah', 'kelas-07', 'pai'),
('07-pjok-07', 'Benda-Benda di dalam Gelora Bung Karno', 'kelas-07', 'pjok'),
('08-bindo-05', 'Benda-Benda di dalam KBBI untuk kelas 8', 'kelas-08', 'bindo'),
('08-bing-06', 'Benda-Benda di dalam Kamus untuk kelas 8', 'kelas-08', 'bing'),
('08-ipa-01', 'Bentuk Bentuk Material di Bumi untuk kelas 8', 'kelas-08', 'ipa'),
('08-ips-02', 'Benda-Benda di dalam Kerajaan untuk kelas 8', 'kelas-08', 'ips'),
('08-mtk-03', 'Benda-Benda di dalam Matematika untuk kelas 8', 'kelas-08', 'mtk'),
('08-pai-04', 'Benda-Benda di dalam Kabah untuk kelas 8', 'kelas-08', 'pai'),
('08-pjok-07', 'Benda-Benda di dalam Gelora Bung Karno untuk kelas 8', 'kelas-08', 'pjok'),
('09-bindo-05', 'Benda-Benda di dalam KBBI untuk kelas 9', 'kelas-09', 'bindo'),
('09-bing-06', 'Benda-Benda di dalam Kamus untuk kelas 9', 'kelas-09', 'bing'),
('09-ipa-01', 'Bentuk Bentuk Material di Bumi untuk kelas 9', 'kelas-09', 'ipa'),
('09-ips-02', 'Benda-Benda di dalam Kerajaan untuk kelas 9', 'kelas-09', 'ips'),
('09-mtk-03', 'Benda-Benda di dalam Matematika untuk kelas 9', 'kelas-09', 'mtk'),
('09-pai-04', 'Benda-Benda di dalam Kabah untuk kelas 9', 'kelas-09', 'pai'),
('09-pjok-07', 'Benda-Benda di dalam Gelora Bung Karno untuk kelas 9', 'kelas-09', 'pjok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_kelas`
--
ALTER TABLE `list_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `list_linkmateri`
--
ALTER TABLE `list_linkmateri`
  ADD PRIMARY KEY (`id_linkmateri`);

--
-- Indexes for table `list_matapelajaran`
--
ALTER TABLE `list_matapelajaran`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indexes for table `list_materi`
--
ALTER TABLE `list_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_matpel` (`id_matpel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

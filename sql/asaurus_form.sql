-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 07:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `akun_guru`
--

CREATE TABLE `akun_guru` (
  `id_guru` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `matpel_utama` varchar(100) NOT NULL,
  `tingkatan_ajar` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_guru`
--

INSERT INTO `akun_guru` (`id_guru`, `email`, `password`, `nama_lengkap`, `jabatan`, `matpel_utama`, `tingkatan_ajar`, `created_at`) VALUES
('cEsqIZUsAa', 'kepsek@gmail.com', 'kepsek23', 'kepsekya', 'Kepala Sekolah', 'mat', 'kelas-10', '2021-08-15 16:59:59.000000');

-- --------------------------------------------------------

--
-- Table structure for table `akun_sekolah`
--

CREATE TABLE `akun_sekolah` (
  `npsn_sekolah` int(50) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL,
  `jenis_sekolah` varchar(50) NOT NULL,
  `status_sekolah` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_sekolah`
--

INSERT INTO `akun_sekolah` (`npsn_sekolah`, `nama_sekolah`, `nama_kepsek`, `jenis_sekolah`, `status_sekolah`, `kabupaten`, `kecamatan`, `created_at`) VALUES
(456, 'SMP AJAIB', 'Pak Bapak', 'Negeri', 'Aktif', 'Kauman', 'Klojen', '2021-08-15 16:59:59.000000');

-- --------------------------------------------------------

--
-- Table structure for table `list_jabatan`
--

CREATE TABLE `list_jabatan` (
  `id_jabatan` int(50) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_jabatan`
--

INSERT INTO `list_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Tenaga Pendidik'),
(2, 'Kepala Sekolah');

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
  `link_media` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_linkmateri`
--

INSERT INTO `list_linkmateri` (`id_linkmateri`, `id_materi`, `jenis_media`, `link_media`) VALUES
('1', '07-bindo-05', 'PPT', '<iframe src=\"https://docs.google.com/presentation/d/e/2PACX-1vT4UNV-SVPh3-6kyyStZDFjIZuXV2W68r6xxTNXK7K4wGnXfcIFenTvhYEQQLJ8bw/embed?start=false&loop=false&delayms=6000000\" frameborder=\"0\" width=\"800\" height=\"300\" allowfullscreen=\"true\" mozallowfullscreen=\"true\" webkitallowfullscreen=\"true\"></iframe>'),
('2', '07-bindo-05', 'video', 'youtube');

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
-- Indexes for table `akun_guru`
--
ALTER TABLE `akun_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `akun_sekolah`
--
ALTER TABLE `akun_sekolah`
  ADD PRIMARY KEY (`npsn_sekolah`);

--
-- Indexes for table `list_jabatan`
--
ALTER TABLE `list_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_jabatan`
--
ALTER TABLE `list_jabatan`
  MODIFY `id_jabatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
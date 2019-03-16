-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 05:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `level` varchar(5) NOT NULL DEFAULT 'admin',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'mtsn5ngawi');

-- --------------------------------------------------------

--
-- Table structure for table `jk`
--

CREATE TABLE `jk` (
  `id` int(11) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jk`
--

INSERT INTO `jk` (`id`, `jk`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(1) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'dimatikan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `status`) VALUES
(2, 'dimatikan');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nopes` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'peserta',
  `status` varchar(50) NOT NULL DEFAULT 'telah diverifikasi',
  `nis` varchar(30) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `status_anak` varchar(255) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `paralel` varchar(2) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `ranking` varchar(5) NOT NULL,
  `status_siswa` varchar(5) NOT NULL,
  `asal_sek` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `cita` varchar(50) NOT NULL,
  `anak_nomer` varchar(12) NOT NULL,
  `jmlh_sau` varchar(5) NOT NULL,
  `sek_seb` varchar(5) NOT NULL,
  `nama_sekbel` varchar(100) NOT NULL,
  `status_sekbel` varchar(50) NOT NULL,
  `nama_kabsekbel` varchar(50) NOT NULL,
  `skhun` varchar(50) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `no_skhun` varchar(50) NOT NULL,
  `no_ijasah` varchar(50) NOT NULL,
  `totnilun` varchar(50) NOT NULL,
  `tnggl_lulus` varchar(50) NOT NULL,
  `status_kep_rumah` varchar(255) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL,
  `prop_ortu` varchar(50) NOT NULL,
  `kab_ortu` varchar(50) NOT NULL,
  `kec_ortu` varchar(50) NOT NULL,
  `desa_ortu` varchar(50) NOT NULL,
  `kodepos_ortu` varchar(10) NOT NULL,
  `jarak` varchar(50) NOT NULL,
  `alat_transport` varchar(50) NOT NULL,
  `tempat_tinggal_siswa` varchar(50) NOT NULL,
  `nama_kep_kel` varchar(255) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tempat_lahir_ayah` varchar(255) NOT NULL,
  `tanggal_lahir_ayah` varchar(255) NOT NULL,
  `pend_ayah` varchar(255) NOT NULL,
  `pekerj_ayah` varchar(255) NOT NULL,
  `status_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(255) NOT NULL,
  `tanggal_lahir_ibu` varchar(255) NOT NULL,
  `pend_ibu` varchar(255) NOT NULL,
  `pekerj_ibu` varchar(255) NOT NULL,
  `status_ibu` varchar(50) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `nik_wali` varchar(50) NOT NULL,
  `tempat_lahir_wali` varchar(255) NOT NULL,
  `tanggal_lahir_wali` varchar(255) NOT NULL,
  `pend_wali` varchar(255) NOT NULL,
  `pekerj_wali` varchar(255) NOT NULL,
  `rata_pengh` varchar(255) NOT NULL,
  `no_kks` varchar(50) NOT NULL,
  `no_pkh` varchar(50) NOT NULL,
  `no_kip` varchar(50) NOT NULL,
  `stat_pip` varchar(5) NOT NULL,
  `alas_pip` varchar(5) NOT NULL,
  `lam_pip` varchar(5) NOT NULL,
  `prest` varchar(5) NOT NULL,
  `tingkat_pres` varchar(5) NOT NULL,
  `peringkt_pres` varchar(5) NOT NULL,
  `thn_pres` varchar(20) NOT NULL,
  `status_bea` varchar(5) NOT NULL,
  `sumber_bea` varchar(5) NOT NULL,
  `jenis_bea` varchar(5) NOT NULL,
  `jangka_waktu` varchar(20) NOT NULL,
  `besar_bea` varchar(50) NOT NULL,
  `last_login` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jk`
--
ALTER TABLE `jk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2015 at 09:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalbisphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `Kode_Dosen` varchar(8) NOT NULL,
  `Nama_Dosen` varchar(30) NOT NULL,
  `No_Telp` varchar(13) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Kode_Dosen`, `Nama_Dosen`, `No_Telp`, `Alamat`) VALUES
('TI0101', 'Evawaty Tanuar', '089123456789', 'Jalan Kalbis'),
('TI0105', 'Bima Sakti', '1234567890', 'qwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `Kode_Matkul` varchar(8) NOT NULL,
  `Hari` varchar(6) NOT NULL,
  `Waktu` varchar(15) NOT NULL,
  `Kode_Dosen` varchar(8) NOT NULL,
  `Kode_Ruang` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`Kode_Matkul`, `Hari`, `Waktu`, `Kode_Dosen`, `Kode_Ruang`) VALUES
('10001', 'Senin', '08:00 - 11:50', 'TI0101', 'AR404'),
('10005', 'Selasa', '14:00 - 15:20', 'TI0105', 'AR304');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `Kode_Jur` varchar(8) NOT NULL,
  `Kode_Fak` varchar(8) NOT NULL,
  `Nama_Jur` varchar(30) NOT NULL,
  `Kode_Dosen` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jur`, `Kode_Fak`, `Nama_Jur`, `Kode_Dosen`) VALUES
('TI0001', '', 'Informatika', '');

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE IF NOT EXISTS `khs` (
  `Nim` int(10) NOT NULL,
  `Kode_Matkul` varchar(8) NOT NULL,
  `Semester` varchar(6) NOT NULL,
  `SKS` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`Nim`, `Kode_Matkul`, `Semester`, `SKS`) VALUES
(2012100108, '10001', '01PATI', 4),
(2012100110, '10001', '05PATI', 4),
(2012100110, '10005', '01PATI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `Nim` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `No_telp` int(13) NOT NULL,
  `Alamat` text NOT NULL,
  `Kota` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(30) NOT NULL,
  `Tgl_Lahir` varchar(20) NOT NULL,
  `Tahun` int(4) NOT NULL,
  `JK` varchar(10) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Kode_Jur` varchar(8) NOT NULL,
  `Semester` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `No_telp`, `Alamat`, `Kota`, `Email`, `Tempat_Lahir`, `Tgl_Lahir`, `Tahun`, `JK`, `Agama`, `Kode_Jur`, `Semester`) VALUES
(2012100108, 'Isna Oktaviani', 2147483647, 'Jalan Anggrek Raya', 'Bekasi', 'isnaoktavian@gmail.com', 'Jakarta', '9 Oktober 1994', 2012, 'Perempuan', 'Islam', 'TI0001', '01PATI'),
(2012100110, 'Dhanang Fabiannanda PA', 897897676, 'Bekasi Timur Regency', 'Bekasi', 'dhanilm1@gmail.com', 'Jember', '28 Februari 1994', 2012, 'Laki-Laki', 'Islam', 'TI0001', '01PATI'),
(2012100123, 'Kevin Halim', 21818181, 'Jln.Amsterdam Indah 12', 'Bekasi', 'kevinlim154@gmail,com', 'Amsterdam', '04 Desember', 1994, 'laki-laki', 'kristen', 'TI0001', '05PATI'),
(2012100157, 'VIcky Nurchmawati', 2147483647, 'Tambun Selatan', 'Bekasi', 'vickynurchmawati@gmail.com', 'Jakarta', '2 Maret 1995', 2012, 'Perempuan', 'Islam', 'TI0001', '01PATI'),
(2012100227, 'Dicken Endah Amelia', 21818181, 'Jln. Grand galaxy city 12', 'Bekasi', 'dickenputra@gmail.com', 'London', '30 Mei', 1993, 'laki-laki', 'islam', 'TI0001', '01PATI');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `Kode_Matkul` int(8) NOT NULL,
  `Nama_Matkul` varchar(30) NOT NULL,
  `Jenis_Matkul` varchar(10) NOT NULL,
  `Kode_Dosen` varchar(8) NOT NULL,
  `Semester` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`Kode_Matkul`, `Nama_Matkul`, `Jenis_Matkul`, `Kode_Dosen`, `Semester`) VALUES
(10001, 'Algoritma', 'Teori', 'TI0101', '01PATI'),
(10005, 'Interaksi Manusia dan Komputer', 'Teori', 'TI0105', '05PATI');

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE IF NOT EXISTS `msuser` (
  `NIM` varchar(10) NOT NULL DEFAULT '',
  `Nama` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`NIM`, `Nama`, `Password`) VALUES
('0000', 'Admin', '$2nNLZKVvzy8c'),
('2012100108', 'Isna', '$2LvWCyVaXrEI'),
('2012100110', 'Dhanang', '$2LvWCyVaXrEI'),
('2012100123', 'Kevin Halim', '$2LvWCyVaXrEI'),
('2012100157', 'Vicky', '$2LvWCyVaXrEI'),
('2012100227', 'Dicken Endah Amelia', '$2LvWCyVaXrEI');

-- --------------------------------------------------------

--
-- Table structure for table `private_msg`
--

CREATE TABLE IF NOT EXISTS `private_msg` (
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_msg`
--

INSERT INTO `private_msg` (`message`) VALUES
('Test Pesan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`Kode_Dosen`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`Kode_Jur`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`Nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
 ADD PRIMARY KEY (`Kode_Matkul`);

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
 ADD PRIMARY KEY (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 05:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_jadwal`
--

CREATE TABLE `tabel_data_jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `nama_pegawai` varchar(40) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tugas` varchar(200) NOT NULL,
  `awal` varchar(20) NOT NULL,
  `akhir` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_data_jadwal`
--

INSERT INTO `tabel_data_jadwal` (`id_jadwal`, `nama_pegawai`, `jabatan`, `tugas`, `awal`, `akhir`, `status`) VALUES
(3, 'Pgw', 'pegawai', 'Mendatangi transmart', '16 Januari 2017', '16 Februari 2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_pegawai`
--

CREATE TABLE `tabel_data_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(40) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `golongan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_data_pegawai`
--

INSERT INTO `tabel_data_pegawai` (`id_pegawai`, `nama_pegawai`, `NIP`, `jabatan`, `pangkat`, `golongan`) VALUES
(1, 'admBPS', '12345', 'admin', 'adm', 'adm'),
(2, 'KPL', '987654321', 'Kepala Kantor', 'Nothing', 'II a'),
(3, 'Pgw', '123450', 'pegawai', 'gatau', 'III a'),
(4, 'James Bond', '007', 'pegawai', 'Komando', 'III d'),
(5, 'DJ Butterffly', '06800', 'pegawai', 'Disk Jokey', 'III a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `jabatan`) VALUES
(1, '12345', 'admin'),
(2, '987654321', 'Kepala Kantor'),
(3, '123450', 'pegawai'),
(4, '007', 'pegawai'),
(5, '06800', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_data_jadwal`
--
ALTER TABLE `tabel_data_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tabel_data_pegawai`
--
ALTER TABLE `tabel_data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_data_jadwal`
--
ALTER TABLE `tabel_data_jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_data_pegawai`
--
ALTER TABLE `tabel_data_pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

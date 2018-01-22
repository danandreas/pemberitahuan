-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2018 pada 01.47
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquanotifdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perizinan`
--

CREATE TABLE `perizinan` (
  `idiz` varchar(10) NOT NULL,
  `nmdok` varchar(60) NOT NULL,
  `nodok` varchar(20) NOT NULL,
  `pengesah` varchar(100) NOT NULL,
  `tglsah` date NOT NULL,
  `lamanya` varchar(10) NOT NULL,
  `sampaitgl` date NOT NULL,
  `status` varchar(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perizinan`
--

INSERT INTO `perizinan` (`idiz`, `nmdok`, `nodok`, `pengesah`, `tglsah`, `lamanya`, `sampaitgl`, `status`, `keterangan`) VALUES
('IZ00000001', 'A', '145/114/1X/2005', '', '2017-12-23', '1 Bulan', '2018-02-21', 'Asli', 'Gedung SPS III'),
('IZ00000004', 'Dokumen Baru', '09324/MM/D', '', '2018-01-13', '1', '2018-02-13', 'Asli', 'Ket...'),
('IZ00000006', 'Dokumen  Baru AQUA', 'A/99/XTH', 'President', '2018-01-21', '2 Hari', '2018-01-14', 'Copy', 'Data'),
('IZ00000011', 'Data Client', '005/XXI', 'Bupati', '2018-01-14', '1', '2018-01-25', 'Copy', 'Ket...'),
('IZ00000012', 'Data Kegiatan 1', '9534/XII', 'Bupati', '2018-01-13', '1', '2018-01-17', 'Asli', 'DD'),
('IZ00000013', 'Data Kebersihan', '033/DCSR/032', '', '2018-01-16', '3', '2018-01-17', 'Copy', 'MUAS'),
('IZ00000014', 'A', 'A/99/XTH', 'Bupati', '2018-01-17', '', '2018-01-17', 'Copy', 'DA'),
('IZ00000015', 'B', '033/DCSR/032', 'Bupati', '2018-01-17', '1', '2018-01-17', 'Asli', 'CC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `idptg` varchar(5) NOT NULL,
  `nmptg` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(1) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`idptg`, `nmptg`, `email`, `username`, `password`, `level`, `foto`) VALUES
('P0001', 'Ardaniel', 'and@gmail.com', 'ardaniel', '202cb962ac59075b964b07152d234b70', '1', ''),
('P0002', 'Arga', 'tho@gmail.com', 'arga', '202cb962ac59075b964b07152d234b70', '2', ''),
('P0003', 'Dika', 'dik@gmail.com', 'dika', '202cb962ac59075b964b07152d234b70', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`idiz`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idptg`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 05:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omahternak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(20) NOT NULL,
  `password_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'wawan', 'wawan@gmail.com', '12345'),
(2, 'nurma', 'nurma@gmail.com', '12345'),
(3, 'hanif', 'hanif@gmail.com', '12345'),
(4, 'celvin', 'celvin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_user` int(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_user`, `nama`, `email`, `password`, `jenis_kelamin`, `foto`, `alamat`, `telepon`) VALUES
(1, 'Listyawan', 'Listyawan01@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'listyawan.jpg', 'Donotirto RT 07, Bangunjiwo, Kasihan Bantul, Yogyakarta', '08988741766'),
(2, 'Wawan', 'wawan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-Laki', 'wawan.jpg', 'Candibinangun, Pakem, Sleman, Yogyakarta', '085725813121'),
(3, 'Nurma', 'nurma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Perempuan', '', 'Kaloran, Temanggung, Jawa Tengah', '085725925625');

-- --------------------------------------------------------

--
-- Table structure for table `ternak`
--

CREATE TABLE `ternak` (
  `kd_ternak` int(25) NOT NULL,
  `nama_ternak` varchar(30) NOT NULL,
  `jenis_ternak` varchar(20) NOT NULL,
  `berat` varchar(25) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `minim_beli` varchar(50) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `foto2` varchar(25) NOT NULL,
  `foto3` varchar(25) NOT NULL,
  `foto4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`kd_ternak`, `nama_ternak`, `jenis_ternak`, `berat`, `umur`, `jumlah`, `deskripsi`, `harga`, `minim_beli`, `foto`, `foto2`, `foto3`, `foto4`) VALUES
(1, 'Sapi Metal Indukan', 'Non Unggas', '400', '2', '30', 'Sapi Metal', '15000000', '2', 'sapi1.jpg', '', '', ''),
(2, 'Sapi Metal Jantan', 'Non Unggas', '400', '2', '25', 'Sapi Metal Jantan', '16000000', '2', 'sapi2.jpg', '', '', ''),
(3, 'Sapi Metal Super', 'Non Unggas', '1000', '3', '15', 'Sapi Metal Super', '25000000', '1', 'sapi3.jpg', '', '', ''),
(4, 'Sapi  Jantan', 'Non Unggas', '600', '3', '15', 'Sapi Super', '20000000', '1', 'sapi4.jpg', '', '', ''),
(5, 'Sapi Metal Jantan', 'Non Unggas', '400', '2', '10', 'Sapi Metal', '16000000', '2', 'sapi5.jpg', '', '', ''),
(6, 'Kambing Jawa', 'Non Unggas', '100', '2', '20', 'Kambing Jawa', '2200000', '3', 'kambing4.jpg', '', '', ''),
(7, 'Kambing Jawa', 'Non Unggas', '100', '2', '30', 'Kambing Jawa', '2000000', '4', 'kambingjawa.jpg', '', '', ''),
(8, 'Domba Garut', 'Non Unggas', '100', '2', '25', 'Domba Garut', '3500000', '2', 'dombagarut.jpeg', '', '', ''),
(9, 'Ayam Jawa Jago', 'Unggas', '2', '1', '25', 'Ayam kampung Jago', '130000', '5', 'ayam.jpg', '', '', ''),
(10, 'Ayam Jawa Jantan', 'Unggas', '2', '1', '20', 'Ayam jantan petarung', '200000', '3', 'ayam3.jpg', '', '', ''),
(11, 'Ayam Kate Jantan', 'Unggas', '1', '1', '25', 'Ayam Kate Jantan', '120000', '5', 'ayamkate2.jpg', '', '', ''),
(12, 'Angsa', 'Unggas', '3', '1', '20', 'Angsa', '120000', '4', 'angsa1.jpg', '', '', ''),
(13, 'Bebek Mandarin', 'Unggas', '1', '1', '30', 'Bebek Mandarin', '150000', '4', 'bebekmandarin.jpg', '', '', ''),
(14, 'Entok Jantan', 'Unggas', '2', '1', '30', 'Entok Jantan', '120000', '4', 'entok2.jpg', '', '', ''),
(15, 'Bebek Betina', 'Unggas', '2', '1', '70', 'Bebek betina', '40000', '5', 'bebek3.jpg', '', '', ''),
(16, 'Kalkun Jantan', 'Unggas', '3', '1', '30', 'Kalkun Jantan', '150000', '5', 'kalkun3.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `ternak`
--
ALTER TABLE `ternak`
  ADD PRIMARY KEY (`kd_ternak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `kd_ternak` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

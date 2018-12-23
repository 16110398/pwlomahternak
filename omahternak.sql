-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 11:56 AM
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
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'wawan', 'wawan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'nurma', 'nurma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'hanif', 'hanif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'celvin', 'celvin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_user` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `img_profil` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_user`, `nama`, `email`, `password`, `jenis_kelamin`, `img_profil`, `alamat`, `telepon`) VALUES
(1, 'Listyawan', 'Listyawan01@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'listyawan.png', 'Donotirto RT 07, Bangunjiwo, Kasihan Bantul, Yogyakarta', '08988741766'),
(2, 'Wawan', 'wawan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-Laki', 'wawan.png', 'Candibinangun, Pakem, Sleman, Yogyakarta', '085725813121'),
(3, 'Nurma', 'nurma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'nurma.jpg', 'Kaloran, Temanggung, Jawa Tengah', '085725925625'),
(4, 'Celvin', 'celvin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'celvin.jpg', 'Wonosobo', '08788745612'),
(5, 'Hanif', 'hanif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'hanif.jpg', 'Palembang', '0857456123'),
(6, 'Budi', 'budi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Laki-laki', '', 'Gamping, Sleman', '08572546521'),
(7, 'Boby Hartanto', 'boby@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'IMG-20161114-WA0036.jpg', 'Ngaglik, Sleman', '08745624587');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(50) NOT NULL,
  `id_user` int(25) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_ternak`
--

CREATE TABLE `pembelian_ternak` (
  `id_pembelian_ternak` int(50) NOT NULL,
  `id_pembelian` int(50) NOT NULL,
  `kd_ternak` int(25) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ternak`
--

CREATE TABLE `ternak` (
  `kd_ternak` int(25) NOT NULL,
  `id_user` int(30) NOT NULL,
  `nama_ternak` varchar(30) NOT NULL,
  `jenis_ternak` varchar(20) NOT NULL,
  `berat` varchar(25) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `minim_beli` varchar(50) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`kd_ternak`, `id_user`, `nama_ternak`, `jenis_ternak`, `berat`, `umur`, `jumlah`, `deskripsi`, `harga`, `minim_beli`, `foto`) VALUES
(1, 1, 'Sapi Metal Indukan', 'Non Unggas', '400', '2', '30', 'Sapi Metal', '15000000', '2', 'sapi1.jpg'),
(2, 1, 'Sapi Metal Jantan', 'Non Unggas', '400', '2', '25', 'Sapi Metal Jantan', '16000000', '2', 'sapi2.jpg'),
(3, 1, 'Sapi Metal Super', 'Non Unggas', '1000', '3', '15', 'Sapi Metal Super', '25000000', '1', 'sapi3.jpg'),
(4, 1, 'Sapi  Jantan', 'Non Unggas', '600', '3', '15', 'Sapi Super', '20000000', '1', 'sapi4.jpg'),
(5, 2, 'Sapi Metal Jantan', 'Non Unggas', '400', '2', '10', 'Sapi Metal', '16000000', '2', 'sapi5.jpg'),
(6, 2, 'Kambing Jawa', 'Non Unggas', '100', '2', '20', 'Kambing Jawa', '2200000', '3', 'kambing4.jpg'),
(7, 2, 'Kambing Jawa', 'Non Unggas', '100', '2', '30', 'Kambing Jawa', '2000000', '4', 'kambingjawa.jpg'),
(8, 2, 'Domba Garut', 'Non Unggas', '100', '2', '25', 'Domba Garut', '3500000', '2', 'dombagarut.jpeg'),
(9, 3, 'Ayam Jawa Jago', 'Unggas', '2', '1', '25', 'Ayam kampung Jago', '130000', '5', 'ayam.jpg'),
(10, 3, 'Ayam Jawa Jantan', 'Unggas', '2', '1', '20', 'Ayam jantan petarung', '200000', '3', 'ayam3.jpg'),
(11, 3, 'Ayam Kate Jantan', 'Unggas', '1', '1', '25', 'Ayam Kate Jantan', '120000', '5', 'ayamkate2.jpg'),
(12, 3, 'Angsa', 'Unggas', '3', '1', '20', 'Angsa', '120000', '4', 'angsa1.jpg'),
(13, 4, 'Bebek Mandarin', 'Unggas', '1', '1', '30', 'Bebek Mandarin', '150000', '4', 'bebekmandarin.jpg'),
(14, 4, 'Entok Jantan', 'Unggas', '2', '1', '30', 'Entok Jantan', '120000', '4', 'entok2.jpg'),
(15, 4, 'Bebek Betina', 'Unggas', '2', '1', '70', 'Bebek betina', '40000', '5', 'bebek3.jpg'),
(16, 5, 'Kalkun Jantan', 'Unggas', '3', '1', '30', 'Kalkun Jantan', '150000', '5', 'kalkun3.jpg'),
(17, 7, 'Sidat', 'Ikan', '1', '1', '1000', '20', '10000', 'Jual ikan sidat', 'sidat.jpg'),
(18, 7, 'Ikan Gabus', 'Ikan', '1', '1', '1000', '20', '15000', 'Jual Ikan Gabus', 'gabus.jpg'),
(19, 7, 'Ikan Lele', 'Ikan', '1', '1', '1000', 'Jual Ikan Lele', '10000', '35', 'lele.jpg'),
(26, 0, 'Kambing Jawa', 'Non Unggas', '100', '2', '30', 'Kambing Jawa', '2000000', '4', 'kambingjawa.jpg'),
(27, 0, 'Domba Garut', 'Non Unggas', '100', '2', '25', 'Domba Garut', '3500000', '2', 'dombagarut.jpeg'),
(28, 0, 'Ayam Jawa Jago', 'Unggas', '2', '1', '25', 'Ayam kampung Jago', '130000', '5', 'ayam.jpg'),
(29, 0, 'Ayam Jawa Jantan', 'Unggas', '2', '1', '20', 'Ayam jantan petarung', '200000', '3', 'ayam3.jpg'),
(30, 0, 'Ayam Kate Jantan', 'Unggas', '1', '1', '25', 'Ayam Kate Jantan', '120000', '5', 'ayamkate2.jpg'),
(31, 0, 'Angsa', 'Unggas', '3', '1', '20', 'Angsa', '120000', '4', 'angsa1.jpg'),
(32, 0, 'Bebek Mandarin', 'Unggas', '1', '1', '30', 'Bebek Mandarin', '150000', '4', 'bebekmandarin.jpg'),
(33, 0, 'Entok Jantan', 'Unggas', '2', '1', '30', 'Entok Jantan', '120000', '4', 'entok2.jpg'),
(34, 0, 'Bebek Betina', 'Unggas', '2', '1', '70', 'Bebek betina', '40000', '5', 'bebek3.jpg'),
(35, 0, 'Kalkun Jantan', 'Unggas', '3', '1', '30', 'Kalkun Jantan', '150000', '5', 'kalkun3.jpg'),
(36, 0, 'Sidat', 'Ikan', '1', '1', '1000', '20', '10000', 'Jual ikan sidat', 'sidat.jpg'),
(37, 0, 'Ikan Gabus', 'Ikan', '1', '1', '1000', '20', '15000', 'Jual Ikan Gabus', 'gabus.jpg'),
(38, 0, 'Ikan Lele', 'Ikan', '1', '1', '1000', 'Jual Ikan Lele', '10000', '35', 'lele.jpg');

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
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_ternak`
--
ALTER TABLE `pembelian_ternak`
  ADD PRIMARY KEY (`id_pembelian_ternak`);

--
-- Indexes for table `ternak`
--
ALTER TABLE `ternak`
  ADD PRIMARY KEY (`kd_ternak`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian_ternak`
--
ALTER TABLE `pembelian_ternak`
  MODIFY `id_pembelian_ternak` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `kd_ternak` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

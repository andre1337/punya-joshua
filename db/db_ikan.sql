-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 05:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin01', 'adminsatu', 'Mila Rosiana', 'milarsn@gmail.com'),
(2, 'admin02', 'admindua', 'Jihan Fadilah', 'djfy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikan`
--

CREATE TABLE `tb_ikan` (
  `id_ikan` varchar(11) NOT NULL,
  `nama_ikan` varchar(40) DEFAULT NULL,
  `gambar` text,
  `harga` double DEFAULT NULL,
  `harga2` double NOT NULL,
  `harga3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ikan`
--

INSERT INTO `tb_ikan` (`id_ikan`, `nama_ikan`, `gambar`, `harga`, `harga2`, `harga3`) VALUES
('I001', 'Mas', 'ikan mas.gif', 250, 350, 450),
('I002', 'Gurame', 'gurame.png', 250, 350, 450),
('I003', 'Nila', 'ikin nila.png', 200, 300, 400),
('I004', 'Lele', 'lele.png', 200, 300, 400);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pakan`
--

CREATE TABLE `tb_pakan` (
  `kd_pakan` varchar(11) NOT NULL,
  `merk_pakan` varchar(40) DEFAULT NULL,
  `gambar` text,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pakan`
--

INSERT INTO `tb_pakan` (`kd_pakan`, `merk_pakan`, `gambar`, `harga`) VALUES
('P001', 'Safir', 'e1df67ca-cab8-4bd8-93c6-ddddd66a3fc5w.jpg', 8600),
('P002', 'Medali', 'dd35cbbb-df0d-43f4-b229-06431be847c9w.jpg', 8600),
('P003', 'Pakan Ikan Lele Safir', 'c061f99f-2ec2-4ebf-a251-7503a05d65a5w.jpg', 8600),
('P004', 'Nanolis', 'Nanolis-P0.png', 17500);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pembeli` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` char(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bibit_ikan` varchar(30) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pembeli`, `alamat`, `no_telepon`, `email`, `bibit_ikan`, `ukuran`, `harga`, `jumlah`, `total`) VALUES
(18, 'Salma Nuralisa', 'Cijambe no 43', '08914125156', 'salma@gmail.com', 'Gurame', '3 inchi', 450, 100, 45000),
(17, 'Andri', 'Ujung Berung Indah no 49', '08787192467', 'al@gmail.com', 'Mas', '2 inchi', 350, 200, 70000),
(16, 'Rudi Reynaldi', 'Gg Kujang no 5', '08787192467', 'rudirey@gmail.com', 'Gurame', '2 inchi', 300, 100, 30000),
(19, 'Firman Fauzi', 'A.H Nasution no 53', '085791214448', 'firmanF@hotmail.com', 'Lele', '3 inchi', 400, 100, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksip`
--

CREATE TABLE `transaksip` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pembeli` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` char(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pakan` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksip`
--

INSERT INTO `transaksip` (`id_transaksi`, `nama_pembeli`, `alamat`, `no_telepon`, `email`, `pakan`, `harga`, `jumlah`, `total`) VALUES
(2, 'Rudi Reynaldi', 'Cikajang', '08787192467', 'al@gmail.com', 'Pakan Ikan Lele Safir', 8600, 3, 25800),
(3, 'Anji ', 'Lebak Bulus 02', '081223991202', 'jie02@gmail.com', 'Medali', 8600, 10, 86000),
(4, 'Sutiono', 'Cipadung Permai 3 no 21', '082345123567', 'sutiono@gmail.com', 'Nanolis', 17500, 4, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `ukuranharga`
--

CREATE TABLE `ukuranharga` (
  `id_ukuran` varchar(40) NOT NULL,
  `id_ikan` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukuranharga`
--

INSERT INTO `ukuranharga` (`id_ukuran`, `id_ikan`, `harga`) VALUES
('U1', 'I001', 250),
('U2', 'I001', 350),
('U3', 'I001', 450),
('U4', 'I002', 250),
('U5', 'I002', 350),
('U6', 'I002', 450),
('U7', 'I003', 200),
('U8', 'I003', 300),
('U9', 'I003', 400),
('U10', 'I004', 200),
('U11', 'I004', 300),
('U12', 'I004', 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `tb_pakan`
--
ALTER TABLE `tb_pakan`
  ADD PRIMARY KEY (`kd_pakan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksip`
--
ALTER TABLE `transaksip`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `ukuranharga`
--
ALTER TABLE `ukuranharga`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transaksip`
--
ALTER TABLE `transaksip`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

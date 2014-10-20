-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2014 at 06:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `planet`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE IF NOT EXISTS `bulan` (
  `id_bulan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bulan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_bulan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'januari'),
(2, 'februari'),
(3, 'maret'),
(4, 'april'),
(5, 'mei'),
(6, 'juni'),
(7, 'juli'),
(8, 'agustus'),
(9, 'september'),
(10, 'oktober'),
(11, 'november'),
(12, 'desember'),
(13, 'januari'),
(14, 'februari'),
(15, 'maret'),
(16, 'april'),
(17, 'mei'),
(18, 'juni'),
(19, 'juli'),
(20, 'agustus'),
(21, 'september'),
(22, 'oktober'),
(23, 'november'),
(24, 'desember');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE IF NOT EXISTS `cabang` (
  `id_cabang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `regional` varchar(10) NOT NULL,
  `sub_regional` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat`, `telepon`, `regional`, `sub_regional`) VALUES
(1, 'Planet Kredit  HOLDING', 'Pusat Perkantoran Mitra Matraman Blok C No.1 Jl. Matraman Raya - Jakarta Timur', '02185918094', '', NULL),
(2, 'Planet Kredit  Gedong Tataan', 'Jl. Ahmad Yani Depan TPU Desa Bagelan Pesawaran Tataan', '', 'sumatera 2', NULL),
(3, 'Planet Kredit  NATAR', 'Jl. Raya Natar No. 18A Depan Bank Lampung Natar', '', 'sumatera 2', NULL),
(4, 'Planet Kredit  TANJUNG KARANG', 'Jl. Raden Intan Komplek Ramayana Blok B No. 3 Bandar Lampung', '', 'sumatera 2', NULL),
(5, 'Planet Kredit KRAMATJATI', 'Jalan blablabla no 23', '012871283', 'DKI', NULL),
(6, 'Planet Kredit Bekasi', 'jalan bekasi raya', '0979879', 'bekasi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_record`
--

CREATE TABLE IF NOT EXISTS `history_record` (
  `id_history_record` int(11) NOT NULL AUTO_INCREMENT,
  `No.` varchar(15) NOT NULL,
  `inventory` int(11) NOT NULL,
  `nilai_stock` varchar(15) NOT NULL,
  `unit_cost` varchar(15) NOT NULL,
  `tanggal_update` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_history_record`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `history_record`
--

INSERT INTO `history_record` (`id_history_record`, `No.`, `inventory`, `nilai_stock`, `unit_cost`, `tanggal_update`, `id_user`) VALUES
(1, 'BC010001', 13, '910000', '70000', '2014-10-17 10:18:07', 3),
(2, 'BC010001', 3, '210000', '70000', '2014-10-17 14:30:06', 2),
(3, 'BC010001', 1, '70000', '70000', '2014-08-05 10:11:27', 5);

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE IF NOT EXISTS `item_list` (
  `No.` varchar(15) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Tarikan` varchar(3) NOT NULL,
  `Sita` varchar(3) NOT NULL,
  `Inventory` int(11) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Nilai Stock` varchar(15) NOT NULL,
  `Stock Condition` varchar(20) NOT NULL,
  `Base Unit of Measure` varchar(5) NOT NULL,
  `Inventory Posting Group` varchar(5) NOT NULL,
  `Unit Cost` varchar(15) NOT NULL,
  `id cabang` int(11) NOT NULL,
  `regional` varchar(15) NOT NULL,
  PRIMARY KEY (`No.`),
  UNIQUE KEY `No.` (`No.`),
  KEY `No._2` (`No.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`No.`, `Description`, `Tarikan`, `Sita`, `Inventory`, `Brand`, `Nilai Stock`, `Stock Condition`, `Base Unit of Measure`, `Inventory Posting Group`, `Unit Cost`, `id cabang`, `regional`) VALUES
('BC010001', 'SANDARAN SERENA STANDARD 160', 'No', 'No', 16, 'Lain2', '1120000', 'Ready Stock', 'UNIT', 'SB', '70000', 2, 'sumatera 2'),
('BC010032', 'N.BOOK TOSHIBA M300 S1002', 'No', 'No', 0, 'Toshiba', '0', 'Ready Stock', 'UNIT', 'LP', '0.00', 3, 'sumatera 2'),
('BC010034', 'N.BOOK ACER ASPRE 2920-5A1G16M', 'No', 'No', 0, 'Acer', '0', 'Ready Stock', 'UNIT', 'LP', '0.00', 2, 'sumatera 2'),
('BC010035', 'N.BOK TOSHIBA L305D - S 5943', 'No', 'No', 0, 'Toshiba', '0', 'Ready Stock', 'UNIT', 'LP', '0.00', 3, 'sumatera 2'),
('BC010036', 'N.BOOK TOSIBA STLITE M205-7452', 'No', 'No', 0, 'Toshiba', '0', 'Ready Stock', 'UNIT', 'LP', '0.00', 4, 'sumatera 2'),
('BC010038', 'N.BOOK TOSHIBA 405 D S 2874', 'No', 'No', 25, 'Toshiba', '0', 'Ready Stock', 'UNIT', 'LP', '0.00', 5, 'DKI'),
('BC010054', 'N.BOOK AXIOO TVW 016 C', 'No', 'No', 0, 'Axioo', '0', 'Ready Stock', 'UNIT', 'LP', '0.00', 3, 'sumatera 2');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id_jenis` int(11) NOT NULL DEFAULT '0',
  `nama_jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `Username`, `Password`, `Email`, `jabatan`, `id_cabang`) VALUES
(1, 'yogamad', 'yogamad', 'yogamad@yahoo.com', 'admin', 1),
(2, 'admin', 'admin', 'admin@yahoo.com', 'admin', 3),
(3, 'hk', 'hk', 'hk@.com', 'admin', 2),
(4, 'yoga', 'yoga', 'yogavengeance@yahoo.co', 'non admin', 0),
(5, 'dzaki', 'dzaki', 'dzaki@yahoo.com', 'admin', 5),
(6, 'sd', 'sd', 'sdf@ghj.gh', 'admin', 0),
(7, 'SADAD', 'ASDSAD', 'asdas@yahoo.com', 'non admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `no_faktur_pembelian` varchar(18) NOT NULL,
  `tanggal_faktur` date NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `No.` varchar(15) NOT NULL,
  `tgl_terima_barang` date NOT NULL,
  `quantity` varchar(3) NOT NULL,
  `harga` varchar(9) NOT NULL,
  `total_biaya` varchar(12) NOT NULL,
  `id cabang` int(11) NOT NULL,
  PRIMARY KEY (`no_faktur_pembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`no_faktur_pembelian`, `tanggal_faktur`, `vendor_name`, `No.`, `tgl_terima_barang`, `quantity`, `harga`, `total_biaya`, `id cabang`) VALUES
('PIN-BLI-1408-0001', '2014-10-01', 'PT. BINTANG TIGA JAYA A', 'BC010001', '2014-10-03', '20', '700000', '3500000', 2),
('PIN-BLI-1408-0002', '2014-10-01', 'PT. ABADI JAYA', 'BC010001', '2014-10-06', '20', '700000', '70000', 3),
('PIN-BLI-1408-0004', '2014-10-13', 'johanna', 'BC010032', '2014-10-13', '20', '123', '432', 4),
('PIN-BLI-1408-0030', '2014-10-05', 'olympic', 'BC010032', '2014-10-06', '40', '100000', '200000', 6),
('PIN-BLI-1408-0220', '2014-10-02', 'sevel', 'BC010034', '2014-10-08', '30', '12000', '30000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `no_faktur` varchar(20) NOT NULL DEFAULT '',
  `No.` varchar(15) NOT NULL DEFAULT '',
  `tanggal_realisasi` date NOT NULL DEFAULT '0000-00-00',
  `quantity` varchar(5) NOT NULL DEFAULT '',
  `nama_customer` varchar(30) NOT NULL DEFAULT '',
  `tenor` char(2) NOT NULL DEFAULT '',
  `besar_angsuran` varchar(10) NOT NULL DEFAULT '',
  `discount` varchar(10) NOT NULL DEFAULT '',
  `dp` varchar(10) NOT NULL DEFAULT '',
  `total` varchar(12) NOT NULL DEFAULT '',
  `id cabang` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`no_faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_faktur`, `No.`, `tanggal_realisasi`, `quantity`, `nama_customer`, `tenor`, `besar_angsuran`, `discount`, `dp`, `total`, `id cabang`) VALUES
('1', 'BC010001', '2014-09-01', '5', 'rosmawati', '12', '', '', '', '500000', '2'),
('10', 'BC010034', '2014-06-04', '1', 'Hermansyah', '12', '', '', '', '1000000', '3'),
('2', 'BC010001', '2014-06-11', '1', 'Wendi Supriato', '8', '', '', '', '1000000', '3'),
('3', 'BC010001', '2014-07-13', '2', 'Suparti', '15', '', '', '', '2000000', '4'),
('4', 'BC010001', '2014-06-19', '3', 'Simin', '10', '', '', '', '3000000', '5'),
('5', 'BC010001', '2014-08-19', '4', 'Warmah', '8', '', '', '', '4000000', '6'),
('6', 'BC010032', '2014-06-16', '2', 'Diana', '6', '', '', '', '2000000', '4'),
('8', 'BC010032', '2014-01-02', '1', 'Edy Sumali', '10', '', '', '', '6000000', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

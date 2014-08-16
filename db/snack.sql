-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2014 at 08:23 AM
-- Server version: 5.5.35-0ubuntu0.12.04.2
-- PHP Version: 5.3.10-1ubuntu3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abby`
--

-- --------------------------------------------------------

--
-- Table structure for table `snack`
--

CREATE TABLE IF NOT EXISTS `snack` (
  `id_snack` int(11) NOT NULL AUTO_INCREMENT,
  `nama_snack` varchar(50) NOT NULL,
  `harga_snack` int(11) NOT NULL,
  PRIMARY KEY (`id_snack`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `snack`
--

INSERT INTO `snack` (`id_snack`, `nama_snack`, `harga_snack`) VALUES
(28, 'Citato', 15000),
(29, 'Aqua', 1000),
(30, 'AM', 13000),
(31, 'asdadada', 2000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2022 at 03:58 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dietplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

DROP TABLE IF EXISTS `diet`;
CREATE TABLE IF NOT EXISTS `diet` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `gen` varchar(255) DEFAULT NULL,
  `meat` varchar(255) DEFAULT NULL,
  `fish` varchar(255) DEFAULT NULL,
  `diary` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `tday` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `tweight` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `file_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`u_id`, `gen`, `meat`, `fish`, `diary`, `activity`, `tday`, `age`, `height`, `weight`, `tweight`, `mail`, `file_id`) VALUES
(2, 'male', 'veg', 'fish', 'diary', '3-5', 'at-office', '23', '173', '55', '50', 'dd@f.dv', '1'),
(3, 'male', 'veg', 'fish', 'diary', '3-5', 'at-office', '23', '173', '55', '50', 'dd@f.d', '1'),
(4, 'male', 'veg', 'fish', 'diary', 'almost-no', 'at-office', '23', '165', '60', '55', 'ss@gg.dd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_order_id` varchar(255) DEFAULT NULL,
  `c_amount` varchar(255) DEFAULT NULL,
  `c_pay` varchar(255) DEFAULT NULL,
  `c_msg` varchar(255) DEFAULT NULL,
  `c_code` varchar(3) DEFAULT NULL,
  `c_method` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `dfile` varchar(255) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`d_id`, `dfile`) VALUES
(1, 'file-1.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 10:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `report`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `r_no` int(255) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(500) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `billing_status` varchar(100) NOT NULL,
  `time_taken` time(1) NOT NULL,
  `comments` varchar(100) NOT NULL,
  PRIMARY KEY (`r_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`r_no`, `project_name`, `client_name`, `billing_status`, `time_taken`, `comments`) VALUES
(1, 'testing', 'Pfizer', 'Billing', '02:00:00.0', 'nill'),
(2, 'Test - 2', 'Cisco', 'Billing', '04:30:00.0', 'Nill'),
(3, 'sasa', 'sdsa', 'sdfsdf', '04:00:00.0', 'adad'),
(4, 'asdsad', 'sdfsdaf', 'sdfsdf', '02:00:00.0', 'adsad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(100) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(500) NOT NULL,
  `u_emailid` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

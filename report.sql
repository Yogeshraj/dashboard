-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 10:08 AM
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
  `date` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `project_name` varchar(500) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `billing_status` varchar(100) NOT NULL,
  `time_taken` time(1) NOT NULL,
  `comments` varchar(100) NOT NULL,
  PRIMARY KEY (`r_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`r_no`, `date`, `user_name`, `project_name`, `client_name`, `billing_status`, `time_taken`, `comments`) VALUES
(1, '', '', 'testing', 'Pfizer', 'Billing', '02:00:00.0', 'nill'),
(2, '', '', 'Test - 2', 'Cisco', 'Billing', '04:30:00.0', 'Nill'),
(3, '', '', 'sasa', 'sdsa', 'sdfsdf', '04:00:00.0', 'adad'),
(4, '', '', 'asdsad', 'sdfsdaf', 'sdfsdf', '02:00:00.0', 'adsad'),
(5, '2018-01-22', '', 'sadfadfgasdg', 'sdagadg', 'new-implementation', '01:00:00.0', 'dfgfdghd'),
(6, '2018-01-19', '', 'asfasf', 'sdfsadf', 'training', '00:13:00.0', '123456789'),
(7, '2018-01-19', '', 'asfasf', 'sdfsadf', 'training', '00:13:00.0', '123456789'),
(8, '2018-01-22', '', 'dsgadg', 'asdgadg', 'new-implementation', '01:00:00.0', 'sadasf'),
(9, '2018-01-22', '', 'sadfasdfg', 'sadgdsg', 'new-implementation', '03:00:00.0', 'sdfgdg'),
(10, '2018-01-22', '', 'dgdfg', 'fdhgfdh', 'non-Billing', '01:00:00.0', '1234'),
(11, '2018-01-22', '', 'dgdfg', 'fdhgfdh', 'non-Billing', '01:00:00.0', '1234'),
(12, '2018-01-22', '', 'dfhfdh', 'sfdhfdh', 'new-implementation', '00:00:00.0', 'dfhfdh'),
(13, '2018-01-22', '', 'sdfasdf', 'sdfsadf', 'new-implementation', '04:05:00.0', 'jghj'),
(14, '2018-01-22', '', 'sadgasdg', 'dagdg', 'non-Billing', '08:09:00.0', 'hkhjfkhk'),
(15, '2018-01-22', '', 'dgdag', 'dgadg', 'non-Billing', '09:08:00.0', 'dgdffd'),
(16, '2018-01-22', '', 'adgasgd', 'dgdsg', 'non-Billing', '09:10:00.0', '1234'),
(17, '2018-01-22', '', 'adgasgd', 'dgdsg', 'non-Billing', '09:10:00.0', '1234'),
(18, '2018-01-22', '', 'dfhsdfh', 'dfhsh', 'non-Billing', '00:21:00.0', '14879'),
(19, '2018-01-22', '', 'asdgsdg', 'asdgsdg', 'billing', '04:54:00.0', 'asdfsf'),
(20, '2018-01-22', '', 'asdgsdg', 'dsag', 'new-implementation', '04:54:00.0', 'fgfgj'),
(21, '2018-01-26', '', 'dfdsf', 'sdagsdg', 'non-Billing', '16:05:00.0', 'asdfghjk'),
(22, '2018-04-03', '', 'try', 'cisco', 'billing', '02:00:00.0', 'fsdfsd'),
(23, '', '', 'adsfasdf', 'sdfsdf', 'non-Billing', '00:00:00.0', 'sdada'),
(24, '2018-04-22', '', 'sdafsdaf', 'sdfsdf', 'new-implementation', '13:00:00.0', 'fdhfg'),
(25, '2018-04-23', '', 'sadsad', 'sadfasdf', 'non-Billing', '00:12:00.0', 'dsadd'),
(26, '2018-04-11', '', 'Jai lava kusa', 'tolly', 'billing', '03:15:00.0', '12545'),
(27, '', '', '', '', 'billing', '00:00:00.0', ''),
(28, '2018-04-04', '', 'asdasd', 'dasd', 'billing', '00:12:00.0', '12'),
(29, '2018-04-17', '', 'asfdasd', 'sdafsda', 'new-implementation', '11:11:00.0', 'dsad'),
(30, '2018-04-23', '', 'fsdaf', 'sdfsadf', 'non-Billing', '00:01:00.0', '123'),
(31, '2018-05-15', '', 'asdsad', 'afas', 'non-Billing', '01:00:00.0', 'fhfdh');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `u_name`, `u_emailid`, `u_password`) VALUES
(1, 'yogesh', 'yo@test.com', '123'),
(2, 'raj', 'raj@test.com', '123'),
(3, 'ponnu', 'ponnu@test.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

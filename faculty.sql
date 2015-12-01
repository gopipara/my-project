-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 08:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maristcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_id` int(11) NOT NULL,
  `f_firstName` varchar(20) NOT NULL,
  `f_lastName` text NOT NULL,
  `f_dob` date NOT NULL,
  `f_gender` varchar(1) NOT NULL,
  `f_phone` bigint(20) NOT NULL,
  `f_email` varchar(20) NOT NULL,
  `f_address` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `f_firstName`, `f_lastName`, `f_dob`, `f_gender`, `f_phone`, `f_email`, `f_address`) VALUES
(20001, 'PRAVEEN', 'TALLURI', '1993-06-17', 'M', 8155454494, 'praveentalluri99@gma', '209 Hudson Harbour D '),
(20002, 'venkata', 'uppala', '1992-09-19', 'M', 3097135334, 'rakeshuvsn@gmail.com', '209 Hudson Harbour d'),
(20003, 'vinay', 'kuchi', '1993-01-01', 'M', 3195284646, 'vinay@gmail.com', 'beacon'),
(20004, 'sreekar', 'mandava', '1992-02-02', 'M', 3192526488, 'sreekar@gmail.com', 'beacon'),
(20005, 'srinivas', 'dhareddy', '1995-01-02', 'M', 2148523696, 'srinivas@gmail.com', 'poughkeepsie'),
(20006, 'harish', 'uppala', '1983-01-10', 'M', 3093936963, 'harish.uppala@gmail.', 'beacon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

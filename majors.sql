-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 08:29 AM
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
-- Table structure for table `majors`
--

CREATE TABLE IF NOT EXISTS `majors` (
  `m_id` varchar(16) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_credits` int(11) NOT NULL,
  `m_amtperCredit` int(11) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`m_id`, `m_name`, `m_credits`, `m_amtperCredit`) VALUES
('M200', 'MS in Computer Science', 32, 750),
('M300', 'Masters in Business Administration', 32, 1000),
('M400', 'M.A.in Communication', 30, 650),
('M500', 'Masters in Museum Studies', 32, 550),
('M600', 'MS in Information Systems', 27, 950),
('M700', 'M.A.in Mental Health Counseling', 36, 1000),
('M800', 'MS in Accounting', 28, 750);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

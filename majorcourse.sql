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
-- Table structure for table `majorcourse`
--

CREATE TABLE IF NOT EXISTS `majorcourse` (
  `m_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`,`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majorcourse`
--

INSERT INTO `majorcourse` (`m_id`, `c_id`) VALUES
('M200', 'c101'),
('M200', 'c102'),
('M200', 'c103'),
('M200', 'c104'),
('M200', 'c105'),
('M200', 'c106'),
('M200', 'c107'),
('M200', 'c108'),
('M200', 'c109'),
('M200', 'c110'),
('M300', 'c201'),
('M300', 'c202'),
('M300', 'c203'),
('M300', 'c204'),
('M300', 'c205'),
('M300', 'c206'),
('M300', 'c207'),
('M300', 'c208'),
('M300', 'c209'),
('M300', 'c210'),
('m400', 'c521'),
('m400', 'c522'),
('m400', 'c523'),
('m400', 'c524'),
('m400', 'c525'),
('m400', 'c526'),
('m400', 'c527'),
('m400', 'c528'),
('m400', 'c529'),
('m400', 'c530'),
('M500', 'c561'),
('M500', 'c562'),
('M500', 'c563'),
('M500', 'c564'),
('M500', 'c565'),
('M500', 'c566'),
('M500', 'c567'),
('M500', 'c568'),
('M500', 'c569'),
('M500', 'c570'),
('M600', 'c151'),
('M600', 'c152'),
('M600', 'c153'),
('M600', 'c154'),
('M600', 'c155'),
('M600', 'c156'),
('M600', 'c157'),
('M600', 'c158'),
('M600', 'c159'),
('M600', 'c160'),
('M700', 'c444'),
('M700', 'c445'),
('M700', 'c446'),
('M700', 'c447'),
('M700', 'c448'),
('M700', 'c449'),
('M700', 'c450'),
('M700', 'c451'),
('M700', 'c452'),
('M700', 'c453'),
('M800', 'c380'),
('M800', 'c381'),
('M800', 'c382'),
('M800', 'c383'),
('M800', 'c384'),
('M800', 'c385'),
('M800', 'c386'),
('M800', 'c387'),
('M800', 'c388'),
('M800', 'c389');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 08:30 AM
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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` varchar(16) NOT NULL,
  `stu_Fname` varchar(20) DEFAULT NULL,
  `stu_Lname` varchar(20) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_gender` tinytext NOT NULL,
  `stu_phone` bigint(10) NOT NULL,
  `stu_email` varchar(20) NOT NULL,
  `stu_address` text NOT NULL,
  `stu_EmerName` varchar(20) NOT NULL,
  `stu_EmerPhone` bigint(10) NOT NULL,
  `stu_EmerAddress` text NOT NULL,
  `stu_LastSchool` text NOT NULL,
  `stu_degreeAchieved` varchar(20) NOT NULL,
  `stu_PreGrade` float NOT NULL,
  PRIMARY KEY (`stu_id`),
  UNIQUE KEY `stu_id` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Student profile table';

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_Fname`, `stu_Lname`, `stu_dob`, `stu_gender`, `stu_phone`, `stu_email`, `stu_address`, `stu_EmerName`, `stu_EmerPhone`, `stu_EmerAddress`, `stu_LastSchool`, `stu_degreeAchieved`, `stu_PreGrade`) VALUES
('10001', 'Rakesh', 'uppala', '1993-01-01', 'M', 3097135334, 'rakesh@gmail.com', 'poughkeepsie', 'sivaram', 3094722850, 'jersey', 'vvit', 'btech', 3.5),
('10002', 'gopichandu', 'para', '1993-02-01', 'F', 4145658998, 'gopi@yahoo.com', 'newyork', 'chandraiah', 6569897562, 'chicago', 'vvit', 'btech', 2.9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

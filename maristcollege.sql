-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2015 at 12:57 AM
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
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `c_id` varchar(16) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_credits` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_id` varchar(16) NOT NULL,
  `f_firstName` varchar(20) NOT NULL,
  `f_lastName` varchar(20) NOT NULL,
  `f_dob` date NOT NULL,
  `f_gender` text NOT NULL,
  `f_phone` bigint(20) NOT NULL,
  `f_email` varchar(20) NOT NULL,
  `f_address` varchar(20) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `f_firstName`, `f_lastName`, `f_dob`, `f_gender`, `f_phone`, `f_email`, `f_address`) VALUES
('20001', 'PRAVEEN', 'TALLURI', '1993-06-17', 'M', 8155454494, 'praveentalluri99@gma', '209 Hudson Harbour D'),
('20002', 'venkata', 'uppala', '1992-09-19', 'M', 3097135334, 'rakeshuvsn@gmail.com', '209 Hudson Harbour d'),
('20003', 'vinay', 'kuchi', '1993-01-01', 'M', 3195284646, 'vinay@gmail.com', 'beacon'),
('20004', 'sreekar', 'mandava', '1992-02-02', 'M', 3192526488, 'sreekar@gmail.com', 'beacon'),
('20005', 'srinivas', 'dhareddy', '1995-01-02', 'M', 2148523696, 'srinivas@gmail.com', 'poughkeepsie');

-- --------------------------------------------------------

--
-- Table structure for table `facultycourse`
--

CREATE TABLE IF NOT EXISTS `facultycourse` (
  `f_id` varchar(16) NOT NULL,
  `c_id` varchar(16) NOT NULL,
  `redgDate` date NOT NULL,
  `dropDate` date NOT NULL,
  PRIMARY KEY (`f_id`,`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `majorcourse`
--

CREATE TABLE IF NOT EXISTS `majorcourse` (
  `m_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`,`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE IF NOT EXISTS `majors` (
  `m_id` varchar(16) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_credits` int(11) NOT NULL,
  `m_amtperCredit` int(11) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stucourses`
--

CREATE TABLE IF NOT EXISTS `stucourses` (
  `stu_id` varchar(16) NOT NULL,
  `c_id` varchar(16) NOT NULL,
  `redgDate` date NOT NULL,
  `dropDate` date NOT NULL,
  PRIMARY KEY (`stu_id`,`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `stu_phone#` bigint(10) NOT NULL,
  `stu_email` varchar(20) NOT NULL,
  `stu_address` text NOT NULL,
  `stu_EmerName` varchar(20) NOT NULL,
  `stu_EmerPhone#` bigint(10) NOT NULL,
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

INSERT INTO `student` (`stu_id`, `stu_Fname`, `stu_Lname`, `stu_dob`, `stu_gender`, `stu_phone#`, `stu_email`, `stu_address`, `stu_EmerName`, `stu_EmerPhone#`, `stu_EmerAddress`, `stu_LastSchool`, `stu_degreeAchieved`, `stu_PreGrade`) VALUES
('1001', 'rakesh', 'uppala', '1992-09-19', 'male', 3097135334, 'rakeshuvsn@gmail.com', 'beacon', 'nagasivaram', 3094722850, 'newjersey', 'vvit', 'btech', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `stumajor`
--

CREATE TABLE IF NOT EXISTS `stumajor` (
  `stu_id` varchar(16) NOT NULL,
  `m_id` varchar(16) NOT NULL,
  `regdDate` date NOT NULL,
  `dropDate` date NOT NULL,
  PRIMARY KEY (`stu_id`,`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_id` (`u_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `u_name` (`u_name`),
  UNIQUE KEY `u_name_2` (`u_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `email`, `password`, `role`) VALUES
(7, 'rakesh', 'rakesh@gmail.com', '67a05e3822ce48a6386746388e6c81f5', '1'),
(8, 'gopipara', 'gopipara@gmail.com', '29d43616152a018e7b23b51104d25b0d', '1'),
(9, 'harish', 'harish@gmail.com', '698c9634246010398e8c427bdd12d374', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

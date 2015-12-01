-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 01:34 AM
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

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `c_credits`) VALUES
('c101', 'Software Design and ', 4),
('c102', 'Algorithms', 4),
('c103', 'Computer Networks I', 4),
('c104', 'Distributed Systems', 4),
('c105', 'Operating Systems', 4),
('c106', 'Compiler Design', 4),
('c107', 'Computer Architectur', 4),
('c108', 'Database Management', 4),
('c109', 'Computer Networks II', 4),
('c110', 'Project', 4),
('c201', 'Economics Foundation', 4),
('c202', 'Marketing Foundation', 4),
('c203', 'Analytical Tools for', 4),
('c204', 'Accounting Foundatio', 4),
('c205', 'Management Foundatio', 4),
('c206', 'Finance Foundations', 4),
('c207', 'Global Environment o', 4),
('c208', 'International Econom', 4),
('c209', 'Strategic Marketing ', 4),
('c210', 'Managing Organizatio', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

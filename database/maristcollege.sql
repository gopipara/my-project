-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 07:54 AM
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
('c151', 'Systems & Informatio', 3),
('c152', 'Data Management I', 3),
('c153', 'Data Communications', 3),
('c154', 'Information Analysis', 3),
('c155', 'Systems Design', 3),
('c156', 'Information Systems ', 3),
('c157', 'Marketing Foundation', 3),
('c158', 'Management Foundatio', 3),
('c159', 'Finance Foundations', 3),
('c160', 'Project', 3),
('c201', 'Economics Foundation', 4),
('c202', 'Marketing Foundation', 4),
('c203', 'Analytical Tools for', 4),
('c204', 'Accounting Foundatio', 4),
('c205', 'Management Foundatio', 4),
('c206', 'Finance Foundations', 4),
('c207', 'Global Environment o', 4),
('c208', 'International Econom', 4),
('c209', 'Strategic Marketing ', 4),
('c210', 'Managing Organizatio', 4),
('c380', 'Financial accounting', 4),
('c381', 'Managerial accountin', 4),
('c382', 'Intermediate Account', 4),
('c383', 'Intermediate Account', 4),
('c384', 'Cost Accounting', 4),
('c385', 'Financial Statement ', 4),
('c386', 'Advanced Accounting', 4),
('c387', 'Auditing', 4),
('c388', 'Tax I', 4),
('c389', 'Government and Not-F', 4),
('c444', 'Foundations & Ethics', 4),
('c445', 'Counseling Theory & ', 4),
('c446', ' Counseling Techniqu', 4),
('c447', 'Assessment in Counse', 4),
('c448', 'Group Counseling ', 4),
('c449', 'Psychopharmacology', 4),
('c450', 'Family & Couples Cou', 4),
('c451', 'Counseling Internshi', 4),
('c452', 'Research in Counseli', 4),
('c453', 'Counselor Supervisio', 4),
('c521', 'Communication Theory', 3),
('c522', 'Research Strategies ', 3),
('c523', 'Interpersonal Commun', 3),
('c524', 'Organizational Commu', 3),
('c525', 'Media Relations', 3),
('c526', 'Leadership Communica', 3),
('c527', 'Managing Organizatio', 3),
('c528', 'The Role of Communic', 3),
('c529', 'Seminar in Communica', 3),
('c530', 'Thesis', 3),
('c561', 'Museums and the Publ', 4),
('c562', 'Museums, Galleries, ', 4),
('c563', 'Museum Development, ', 4),
('c564', 'Art and Objects in M', 4),
('c565', 'Research Methods I: ', 4),
('c566', 'Museums and the Publ', 4),
('c567', 'Museum Ethics and th', 4),
('c568', 'Research Methods II:', 4),
('c569', 'Internship', 4),
('c570', 'Thesis', 4);

-- --------------------------------------------------------

--
-- Table structure for table `facmajor`
--

CREATE TABLE IF NOT EXISTS `facmajor` (
  `f_id` varchar(16) NOT NULL,
  `m_id` varchar(16) NOT NULL,
  PRIMARY KEY (`f_id`,`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facmajor`
--

INSERT INTO `facmajor` (`f_id`, `m_id`) VALUES
('20001', 'M200'),
('20002', 'M300'),
('20003', 'M400'),
('20004', 'M500'),
('20005', 'M600'),
('20006', 'M700'),
('20007', 'M800');

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
(20001, 'john', 'arias', '1985-01-02', 'M', 3095621478, 'john.arias@gmail.com', 'newyork'),
(20002, 'Donald', 'Schwartz', '1978-06-16', 'M', 8155454494, 'Donald.Schwartz@Mari', 'poughkeepsie'),
(20003, 'Abraham', 'Guerra', '1980-04-16', 'M', 8456392147, 'abraham.guerra@maris', 'beacon'),
(20004, 'Cenk', 'Erdil', '1980-02-12', 'M', 2035037360, 'cenk.erdil@marist.ed', 'poughkeepsie'),
(20005, 'Benjamin', ' Carle', '1982-12-12', 'M', 8455753074, 'benjamin.carle@maris', 'wappingers'),
(20006, 'Matthew', 'Johnson', '1975-02-23', 'M', 8454177656, 'matthew.johnson1@mar', 'reinbeck'),
(20007, 'Daniel ', 'Veith', '1979-06-18', 'M', 8456932147, 'Veith.daniel@marist.', 'wappingers');

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

--
-- Dumping data for table `facultycourse`
--

INSERT INTO `facultycourse` (`f_id`, `c_id`, `redgDate`, `dropDate`) VALUES
('20001', 'c101', '0000-00-00', '0000-00-00'),
('20001', 'c102', '0000-00-00', '0000-00-00'),
('20001', 'c103', '0000-00-00', '0000-00-00'),
('20002', 'c201', '0000-00-00', '0000-00-00'),
('20002', 'c202', '0000-00-00', '0000-00-00'),
('20002', 'c203', '0000-00-00', '0000-00-00'),
('20003', 'c521', '0000-00-00', '0000-00-00'),
('20003', 'c522', '0000-00-00', '0000-00-00'),
('20003', 'c523', '0000-00-00', '0000-00-00'),
('20004', 'c561', '0000-00-00', '0000-00-00'),
('20004', 'c562', '0000-00-00', '0000-00-00'),
('20004', 'c563', '0000-00-00', '0000-00-00'),
('20005', 'c151', '0000-00-00', '0000-00-00'),
('20005', 'c152', '0000-00-00', '0000-00-00'),
('20005', 'c153', '0000-00-00', '0000-00-00'),
('20006', 'c444', '0000-00-00', '0000-00-00'),
('20006', 'c445', '0000-00-00', '0000-00-00'),
('20006', 'c446', '0000-00-00', '0000-00-00'),
('20007', 'c380', '0000-00-00', '0000-00-00'),
('20007', 'c381', '0000-00-00', '0000-00-00'),
('20007', 'c382', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `stu_id` varchar(16) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`stu_id`)
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

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE IF NOT EXISTS `majors` (
  `m_id` varchar(16) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_credits` int(11) NOT NULL,
  `m_amtperCredit` int(11) NOT NULL,
  `m_head` varchar(16) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`m_id`, `m_name`, `m_credits`, `m_amtperCredit`, `m_head`) VALUES
('M200', 'MS in Computer Science', 32, 750, 'Ron coleman'),
('M300', 'Masters in Business Administration', 32, 1000, 'Eitel Lauria'),
('M400', 'M.A.in Communication', 30, 650, 'Deon Newman'),
('M500', 'Masters in Museum Studies', 32, 550, 'Robert cannistra'),
('M600', 'MS in Information Systems', 27, 950, 'Mathew Johnson'),
('M700', 'M.A.in Mental Health Counseling', 36, 1000, 'Ryan Owens'),
('M800', 'MS in Accounting', 28, 750, 'Onkar P. Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `stucourses`
--

CREATE TABLE IF NOT EXISTS `stucourses` (
  `stu_id` varchar(16) NOT NULL,
  `c_id` varchar(16) NOT NULL,
  `redgDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dropDate` datetime DEFAULT NULL,
  PRIMARY KEY (`stu_id`,`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stucourses`
--

INSERT INTO `stucourses` (`stu_id`, `c_id`, `redgDate`, `dropDate`) VALUES
('10001', 'c101', '2015-12-09 06:41:16', NULL),
('10001', 'c102', '2015-12-09 06:41:16', NULL),
('10001', 'c103', '2015-12-09 06:41:16', NULL),
('10002', 'c201', '2015-12-09 06:41:31', NULL),
('10002', 'c202', '2015-12-09 06:41:31', NULL),
('10002', 'c203', '2015-12-09 06:41:31', NULL),
('10003', 'c521', '2015-12-09 06:41:50', NULL),
('10003', 'c522', '2015-12-09 06:41:50', NULL),
('10003', 'c523', '2015-12-09 06:41:50', NULL),
('10004', 'c561', '2015-12-09 06:42:05', NULL),
('10004', 'c562', '2015-12-09 06:42:05', NULL),
('10004', 'c563', '2015-12-09 06:42:05', NULL),
('10005', 'c151', '2015-12-09 06:42:21', NULL),
('10005', 'c152', '2015-12-09 06:42:21', NULL),
('10005', 'c153', '2015-12-09 06:42:21', NULL),
('10006', 'c444', '2015-12-09 06:42:36', NULL),
('10006', 'c445', '2015-12-09 06:42:36', NULL),
('10006', 'c446', '2015-12-09 06:42:36', NULL),
('10007', 'c380', '2015-12-09 06:42:50', NULL),
('10007', 'c381', '2015-12-09 06:42:50', NULL),
('10007', 'c382', '2015-12-09 06:42:50', NULL);

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
('10001', 'harish', 'inampudi', '1992-01-28', 'M', 3095284623, 'harish@gmail.com', 'beacon', 'chandraiah', 3095264852, 'poughkeepsie', 'vignan school', 'btech', 3.5),
('10002', 'sreekar', 'kethineni', '1991-01-02', 'M', 2145236987, 'sreekar@gmail.com', 'beacon', 'susheel', 2145623698, 'jersey', 'dutches school', 'btech', 3.2),
('10003', 'vamshi', 'peddi', '1992-03-02', 'M', 3056523147, 'vamshi@gmail.com', 'beacon', 'ravi', 3054623147, 'whiteplains', 'beacon school', 'btech', 3.8),
('10004', 'PRAVEEN', 'TALLURI', '0000-00-00', 'M', 8155454494, 'praveentalluri99@gma', '209 Hudson Harbour Dr', 'srinivas', 8155454499, 'beacon', 'dutches school', 'btech', 3.3),
('10005', 'srinivas', 'dhareddy', '1990-02-26', 'M', 8452589631, 'srinivas@gmail.com', 'poughkeepsie', 'sateesh', 2563147896, 'beacon', 'dutches school', 'btech', 3.9),
('10006', 'harsha', 'yamazala', '1992-06-14', 'M', 6542319874, 'harsha@gmail.com', 'poughkeepsie', 'mama', 2586391478, 'newyork', 'marist school', 'btech', 2.9),
('10007', 'keerthi', 'kaza', '1993-11-06', 'F', 2583691478, 'keerthi@gmail.com', 'beacon', 'santosh', 2563214789, 'teaneck', 'marist school', 'btech', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stumajor`
--

CREATE TABLE IF NOT EXISTS `stumajor` (
  `stu_id` varchar(16) NOT NULL,
  `m_id` varchar(16) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dropDate` date DEFAULT NULL,
  PRIMARY KEY (`stu_id`,`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stumajor`
--

INSERT INTO `stumajor` (`stu_id`, `m_id`, `regDate`, `dropDate`) VALUES
('10001', 'M200', '2015-12-09 06:41:08', NULL),
('10002', 'M300', '2015-12-09 06:41:24', NULL),
('10003', 'M400', '2015-12-09 06:41:39', NULL),
('10004', 'M500', '2015-12-09 06:41:58', NULL),
('10005', 'M600', '2015-12-09 06:42:12', NULL),
('10006', 'M700', '2015-12-09 06:42:29', NULL),
('10007', 'M800', '2015-12-09 06:42:43', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `email`, `password`, `role`) VALUES
(14, 'rakesh', 'rakesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(15, 'gopipara', 'gopipara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(16, 'eddelopez', 'edde@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2020 at 02:54 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noidatut_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `fmail` varchar(255) DEFAULT NULL,
  `fmob` varchar(255) DEFAULT NULL,
  `fqual` varchar(255) DEFAULT NULL,
  `fexp` varchar(255) DEFAULT NULL,
  `frating` varchar(255) DEFAULT NULL,
  `sub1` varchar(255) DEFAULT NULL,
  `sub2` varchar(255) DEFAULT NULL,
  `sub3` varchar(255) DEFAULT NULL,
  `sub4` varchar(255) DEFAULT NULL,
  `sub5` varchar(255) DEFAULT NULL,
  `sub6` varchar(255) DEFAULT NULL,
  `sub7` varchar(255) DEFAULT NULL,
  `sub8` varchar(255) DEFAULT NULL,
  `sub9` varchar(255) DEFAULT NULL,
  `sub10` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `fmail`, `fmob`, `fqual`, `fexp`, `frating`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `specialization`, `pic`, `designation`, `status`, `date`) VALUES
(17, 'Shreya Malviya', 's.malviya@noidatut.com', '8767', 'Ph.D', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Head of the Department CSE', 'Active', '2020-04-06 20:18:57'),
(15, 'Sweta Rai', 'swetarai@test.com', '76567654567', 'M.Tech', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cse', '', 'Assistant Professor', 'Active', '2020-04-06 19:59:21'),
(16, 'Shrinav Malviya', 's@malviya.com', '8767876788', 'Pursuing Ph. D', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Assistant Professor', 'Active', '2020-04-06 20:00:03'),
(12, 'Mrs P. Sharma', 'psharma@gmail.com', '+987*****87', 'Masters of Technology', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Assistant Professor', 'Active', '2020-03-24 16:46:09'),
(9, 'Dr. Aadarsh Malviya ', 'aadarsh.malviya@niu.edu.in', '+917042055476', 'Doctor of Philosophy', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', 'aadarsh.jpg', 'Assistant Professor', 'Active', '2020-03-24 16:38:31'),
(14, 'Mr. S. Tiwari', 'st@gmail.com', '085****1788', 'Master of Computer Application', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Assistant Professor', 'Active', '2020-03-24 16:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fbid` int(11) NOT NULL AUTO_INCREMENT,
  `stnm` varchar(255) DEFAULT NULL,
  `stem` varchar(255) DEFAULT NULL,
  `fnm` varchar(255) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL,
  `pun` int(11) DEFAULT NULL,
  `con` int(11) DEFAULT NULL,
  `eleq` int(11) DEFAULT NULL,
  `syll` int(11) DEFAULT NULL,
  `approach` int(11) DEFAULT NULL,
  `grading` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fbid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fbid`, `stnm`, `stem`, `fnm`, `sub`, `pun`, `con`, `eleq`, `syll`, `approach`, `grading`, `comments`, `date`) VALUES
(8, NULL, NULL, 'Aadarsh Malviya', 'Operating system', 1, 1, 4, 3, 2, 2, 'test', '2020-03-24 15:05:25'),
(9, 'Aadarsh Malviya', 'aadarshmalviya@gmail.com', 'Mukhtar Yusuf', 'Object Oriented Programming using Java', 5, 5, 5, 5, 5, 5, 'perfect', '2020-03-25 06:32:53'),
(10, 'sweta rai', 'admin@gmail.com', 'Dr. Aadarsh Malviya', 'Software Engineering', 2, 2, 3, 2, 2, 1, 'test', '2020-03-25 06:42:55'),
(11, 'Dr Tutorial E Learning Platform ', 'noidatut@gmail.com', 'Dr. Aadarsh Malviya', 'Software Engineering', 5, 5, 5, 5, 5, 5, 'khkjh', '2020-03-25 06:49:56'),
(12, 'Aadarsh Malviya', 'noidatut@gmail.com', 'Mukhtar Yusuf', 'Java Programming Lab', 2, 2, 4, 3, 4, 2, 'One of the best faculties with proper and conceptual knowledge and best part is that  he is always available ', '2020-03-25 10:11:43'),
(13, 'Aadarsh Malviya', 'noidatut@gmail.com', 'Mukhtar Yusuf', 'Object Oriented Programming using Java', 2, 2, 3, 2, 2, 2, 'test ;lk;lk', '2020-03-25 13:30:15'),
(14, 'Aadarsh Malviya', 'noidatut@gmail.com', 'Mukhtar Yusuf', 'Object Oriented Programming using Java', 3, 2, 3, 3, 2, 3, 'great', '2020-04-06 19:48:14'),
(15, 'Aadarsh Malviya', 'noidatut@gmail.com', 'Shrinav Malviya', 'Object Oriented Programming using Java', 1, 1, 4, 3, 2, 1, 'asd', '2020-04-06 20:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `sfaculty` varchar(255) DEFAULT NULL,
  `ssem` varchar(255) DEFAULT NULL,
  `sy` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `fees` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `sname`, `scode`, `sfaculty`, `ssem`, `sy`, `sr`, `fees`, `duration`) VALUES
(12, 'Environmental Studies  Humanities', 'BCA-205', 'Shreya Malviya', '2', '1', NULL, NULL, '2020-03-24 16:56:31'),
(11, 'Object Oriented Programming using Java', 'BCA-204 ', 'Shrinav Malviya', '2', '1', NULL, NULL, '2020-03-24 16:55:34'),
(9, 'Discrete Mathematics    Core', 'BCA-202 ', 'Mrs P. Sharma', '2', '1', NULL, NULL, '2020-03-24 16:53:20'),
(10, 'Introduction to Operating System  ', 'BCA-203 ', 'Sweta Rai', '2', '1', NULL, NULL, '2020-03-24 16:55:04'),
(8, 'Computer Organization and Architecture   Allied ', 'BCA-201 ', 'Shrinav Malviya', '2', '1', NULL, NULL, '2020-03-24 16:52:53'),
(13, 'Java Programming Lab', 'BCA-251 ', 'Dr. Aadarsh Malviya', '2', '1', NULL, NULL, '2020-03-24 17:02:15'),
(14, 'Operating System Lab', 'BCA-252 ', 'Mr. S. Tiwari', '2', '1', NULL, NULL, '2020-03-24 17:04:09'),
(15, 'Financial Accounting ', 'BCA-401 ', 'Mr. S. Tiwari', '4', '2', NULL, NULL, '2020-03-24 17:04:44'),
(16, 'Business Statistics', 'BCA-402', 'Dr. Aadarsh Malviya', '4', '2', NULL, NULL, '2020-03-24 17:05:08'),
(17, 'Software Engineering ', 'BCA-403 ', 'Dr. Aadarsh Malviya', '4', '2', NULL, NULL, '2020-03-24 17:05:33'),
(18, 'Web Technology', 'BCA-404 ', 'Dr. Aadarsh Malviya', '4', '2', NULL, NULL, '2020-03-24 17:06:07'),
(19, 'Mobile Computing/Distributed System', 'BCA-405', 'Mrs P. Sharma', '1', '1', NULL, NULL, '2020-03-24 17:06:43'),
(20, 'Software Engineering Lab', 'BCA-451 ', 'Dr. Aadarsh Malviya', '1', '1', NULL, NULL, '2020-03-24 17:07:09'),
(21, 'Web Programming Lab', 'BCA-452 ', 'Dr. Aadarsh Malviya', '4', '2', NULL, NULL, '2020-03-24 17:07:32'),
(22, 'Industrial Communication  ', 'BCA-105 ', 'Dr. Aadarsh Malviya', '2', '1', NULL, NULL, '2020-03-24 17:11:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

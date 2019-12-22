-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2013 at 08:22 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignid` int(11) NOT NULL AUTO_INCREMENT,
  `assigntitle` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `assigndate` text COLLATE latin1_general_ci NOT NULL,
  `assigntext` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `staffloginid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `studsemester` varchar(10) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `assignid` (`assignid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `blogtext` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `loginid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `blogvisit` int(20) NOT NULL,
  `blogdate` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `blogsubject` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`blogid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blogreply`
--

CREATE TABLE IF NOT EXISTS `blogreply` (
  `blogid` int(11) NOT NULL,
  `blogreplier` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `blogreplytxt` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examresult`
--

CREATE TABLE IF NOT EXISTS `examresult` (
  `examid` int(11) NOT NULL AUTO_INCREMENT,
  `studid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `examdate` text COLLATE latin1_general_ci NOT NULL,
  `examtime` text COLLATE latin1_general_ci NOT NULL,
  `examsubject` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `examquetotal` int(11) NOT NULL,
  `examquetrue` int(11) NOT NULL,
  `examquefalse` int(11) NOT NULL,
  PRIMARY KEY (`examid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `examresult`
--

INSERT INTO `examresult` (`examid`, `studid`, `examdate`, `examtime`, `examsubject`, `examquetotal`, `examquetrue`, `examquefalse`) VALUES
(1, 'student', '24/05/2013', '12:43:08', 'JAVA', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logtable`
--

CREATE TABLE IF NOT EXISTS `logtable` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `logindate` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `logintime` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `logoutdate` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `logouttime` varchar(10) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `logtable`
--

INSERT INTO `logtable` (`logid`, `loginid`, `logindate`, `logintime`, `logoutdate`, `logouttime`) VALUES
(1, 'admin', '21/09/2009', '11:37:35', '21/09/2009', '11:37:40'),
(2, '', '24/05/2013', '10:51:51', '', ''),
(3, 'admin', '24/05/2013', '12:36:20', '24/05/2013', '12:37:52'),
(4, 'admin', '24/05/2013', '12:38:18', '24/05/2013', '12:42:12'),
(5, 'student', '24/05/2013', '12:42:21', '24/05/2013', '12:43:39'),
(6, 'admin', '24/05/2013', '12:43:47', '', ''),
(7, 'admin', '24/05/2013', '12:59:23', '', ''),
(8, 'admin', '27/05/2013', '09:33:19', '27/05/2013', '09:36:15'),
(9, 'student', '27/05/2013', '09:36:29', '', ''),
(10, 'admin', '25/06/2013', '09:39:38', '25/06/2013', '09:52:42'),
(11, 'student', '25/06/2013', '09:52:52', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `queryid` int(11) NOT NULL AUTO_INCREMENT,
  `querysubject` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `querydate` text COLLATE latin1_general_ci NOT NULL,
  `querytext` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `studid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `querystatus` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `queryreply` varchar(100) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `queryid` (`queryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE IF NOT EXISTS `questionbank` (
  `queid` int(11) NOT NULL AUTO_INCREMENT,
  `quesubject` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `quetext` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `queans1` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `queans2` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `queans3` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `queans4` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `queansfinal` int(11) NOT NULL,
  PRIMARY KEY (`queid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`queid`, `quesubject`, `quetext`, `queans1`, `queans2`, `queans3`, `queans4`, `queansfinal`) VALUES
(1, 'JAVA', 'testing here', '123', '123', '123', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int(11) NOT NULL AUTO_INCREMENT,
  `staffsurname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `stafffirstname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `stafflastname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffdesignation` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffloginid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffpassword` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffrole` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffimg` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `staffqualification` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `staffcertification` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `staffexperience` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `staffemail` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staffhobby` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`staffloginid`),
  UNIQUE KEY `staffid` (`staffid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffsurname`, `stafffirstname`, `stafflastname`, `staffdesignation`, `staffloginid`, `staffpassword`, `staffrole`, `staffimg`, `staffqualification`, `staffcertification`, `staffexperience`, `staffemail`, `staffhobby`) VALUES
(3, 'ADMIN', 'ADMIN', 'ADMIN', 'BCA-6', 'admin', 'admin', 'Admin', 'default.gif', 'admin                                 ', 'admin', 'admin', 'admin@yahoo.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studid` int(11) NOT NULL AUTO_INCREMENT,
  `studsurname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `studfirstname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `studlastname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `studsemester` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `studloginid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `studpassword` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`studloginid`),
  UNIQUE KEY `studid` (`studid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studid`, `studsurname`, `studfirstname`, `studlastname`, `studsemester`, `studloginid`, `studpassword`) VALUES
(13, 'student', 'student', 'student', '2', 'student', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

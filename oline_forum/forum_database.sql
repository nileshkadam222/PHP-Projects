-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2016 at 03:44 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum_database`
--
CREATE DATABASE IF NOT EXISTS `forum_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forum_database`;

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE IF NOT EXISTS `customerinfo` (
  `CustomerID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email_address` varchar(255) NOT NULL,
  `Contact_no` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Birthdate` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Active',
  `DateRegistered` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'New Customer',
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`CustomerID`, `Name`, `Gender`, `Email_address`, `Contact_no`, `Username`, `Password`, `Address`, `Birthdate`, `Occupation`, `Status`, `DateRegistered`, `Type`) VALUES
(21, 'Mascarenas, Matthew  Cruzado', 'Male', 'mjohnmatthews38@gmail.com', '09216912596', 'matteo', 'matteo', 'Roque St., N/A, N/A, Marinduque', '1995-09-21', 'N/A', 'Active', '2016-06-02', 'New Customer');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `ForumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Date_posted` date NOT NULL,
  `CustomerID` bigint(20) NOT NULL,
  `Contents` varchar(255) NOT NULL,
  `Files` varchar(255) NOT NULL DEFAULT 'No content',
  PRIMARY KEY (`ForumID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`ForumID`, `Date_posted`, `CustomerID`, `Contents`, `Files`) VALUES
(1, '2016-06-02', 21, 'Sample Flash animation. I am not the owner of this animation.', 'Animated Background by OmZool.swf'),
(2, '2016-06-02', 21, 'Screenshots of the system', 'LINKS OF SOURCE CODE AND PROGRAM.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

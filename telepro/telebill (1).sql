-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2014 at 03:37 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `telebill`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('nilesh', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_number` int(10) NOT NULL,
  `landline` int(10) NOT NULL,
  `bill_date` date DEFAULT NULL,
  `call_charge` double DEFAULT NULL,
  `plan` int(10) DEFAULT NULL,
  `service_tax` double DEFAULT NULL,
  `total_bill` double DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `ca_number`, `landline`, `bill_date`, `call_charge`, `plan`, `service_tax`, `total_bill`, `due_date`, `status`) VALUES
(1, 101, 272831, '2014-11-14', 60, 120, 10, 300, '2014-11-20', 'njjiii'),
(2, 102, 7662660, '2014-11-11', 60, 600, 79.2, 739.2, '2014-12-11', 'paid'),
(3, 103, 72832, '2014-11-12', 30, 350, 45.6, 425.6, '2014-12-12', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `name` varchar(20) NOT NULL,
  `ca_number` int(10) NOT NULL,
  `landline` int(10) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  PRIMARY KEY (`ca_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`name`, `ca_number`, `landline`, `mobile`, `email`, `address`, `reg_date`) VALUES
('nilesh kadam', 102, 7662660, 2147483647, 'nilesh.kadam222@yahoo.com', 'ghansoli', '2014-10-02'),
('ankita mondkar', 103, 72832, 2147483647, 'ankita@mail.com', 'vashi', '2014-11-11'),
('POOJA PARAB', 104, 123456, 2147483647, 'POOJA@MAL.COM', 'NERUL', '2014-11-12'),
('SURAJ DASAI', 105, 123457, 2147483647, 'suraj@mail.com', 'koparkharine', '2014-11-12'),
(' manikantan', 106, 123458, 2147483647, 'mani@mai.com', 'vashi,sec 9', '2014-11-12'),
('dinesh pal', 107, 123459, 2147483647, 'dinesh@mail.com', 'koparkharine sec-17', '2014-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE IF NOT EXISTS `customer_login` (
  `ca_number` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `question` varchar(150) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ca_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`ca_number`, `password`, `question`, `answer`) VALUES
(102, '7662660', NULL, NULL),
(103, '72832', NULL, NULL),
(104, '123456', NULL, NULL),
(105, '123457', NULL, NULL),
(106, '123458', NULL, NULL),
(107, '123459', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `ca_number` int(10) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `query` varchar(100) DEFAULT NULL,
  `f_date` date DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `ca_number`, `contact`, `email`, `query`, `f_date`) VALUES
(1, 'nilesh', 102, 2147483647, 'nilesh.kadam222@yahoo.com', 'hiii its workk', '2014-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE IF NOT EXISTS `payment_info` (
  `ca_number` int(10) NOT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `cardno` int(20) DEFAULT NULL,
  `cardname` varchar(50) DEFAULT NULL,
  `expire` varchar(20) DEFAULT NULL,
  `cvv` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`ca_number`, `bank`, `cardno`, `cardname`, `expire`, `cvv`) VALUES
(102, 'SBI', 9938, 'nilesh', '11/2021', 12);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_number` int(10) NOT NULL,
  `bill_id` int(10) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `card_no` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`t_id`, `ca_number`, `bill_id`, `amount`, `card_no`, `date`) VALUES
(1, 102, 2, 739.2, 9938, '2014-11-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

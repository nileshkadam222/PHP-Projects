-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 04:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookmyshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Email` varchar(36) DEFAULT NULL,
  `Date of Registration` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `UserName`, `Password`, `Name`, `Mobile`, `Email`, `Date of Registration`) VALUES
(1, 'admin', 'admin', 'prachi', '9898989898', 'admin@gmail.com', '2016-10-25 23:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `bms_cinematbl`
--

CREATE TABLE `bms_cinematbl` (
  `cinema_id` int(200) NOT NULL,
  `mov_id` varchar(30) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `theatre_name` varchar(100) NOT NULL,
  `price_bronze` int(10) NOT NULL,
  `total_bseat` int(10) NOT NULL,
  `remaining_bseat` int(10) NOT NULL,
  `price_silver` int(10) NOT NULL,
  `total_sseat` int(10) NOT NULL,
  `remaining_sseat` int(10) NOT NULL,
  `t1` varchar(100) DEFAULT NULL,
  `t2` varchar(100) DEFAULT NULL,
  `t3` varchar(100) DEFAULT NULL,
  `t4` varchar(100) DEFAULT NULL,
  `t5` varchar(100) DEFAULT NULL,
  `t6` varchar(100) DEFAULT NULL,
  `t7` varchar(100) DEFAULT NULL,
  `t8` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_cinematbl`
--

INSERT INTO `bms_cinematbl` (`cinema_id`, `mov_id`, `city`, `venue`, `theatre_name`, `price_bronze`, `total_bseat`, `remaining_bseat`, `price_silver`, `total_sseat`, `remaining_sseat`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`) VALUES
(1, '1', 'Mumbai', 'Oberoi Mall, Goregaon(E)', 'PVR', 70, 300, 29, 100, 100, 60, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(2, '1', 'Mumbai', 'Infiniti Mall, Malad (W)', 'CineMAX', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(3, '1', 'Mumbai', 'DreamsMall Bhandup(w)', 'Brodway', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(4, '1', 'Mumbai', 'Dadar(E)', 'Chitra Cinemas', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(5, '1', 'Mumbai', 'Andheri(E)', 'Fun Cinemas', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(6, '1', 'Mumbai', 'Thakur Movie Knadiwali(E)', 'Inox', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(7, '1', 'Mumbai', 'Kurla', 'K Sera Sera Miniplex:', 70, 300, 35, 100, 100, 65, '10:45 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(8, '2', 'Mumbai', 'Wonder Mall Thane(E)', 'Cinemax', 70, 300, 33, 100, 100, 64, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(9, '2', 'Mumbai', 'jai hind,lalBhaug', 'Mukata A2 Cinemas', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(10, '2', 'Mumbai', 'Matunga (W)', 'Movietime Star City:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(11, '2', 'Mumbai', ' Vasai (W)', 'Dattani Digiplex:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(12, '2', 'Mumbai', 'Neptune Magnet Mall, Bhandup(W)', 'Cinepolis: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(13, '2', 'Mumbai', 'Borivali(E)', 'Parvati Cinema', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(14, '2', 'Mumbai', 'Kandivali(E)', 'Thakur Cinema', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(15, '3', 'Mumbai', 'Juhu', 'Chandan Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(16, '3', 'Mumbai', 'Kurla', 'Miniplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(17, '3', 'Mumbai', 'Vasai (W)', 'Dattani Digiplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(18, '3', 'Mumbai', 'Borivali (E)', 'HDIL Broadway: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(19, '3', 'Mumbai', 'Vasai (W)', 'Dattani Digiplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(20, '3', 'Mumbai', 'Vasai (W)', 'K.T. Vision Multiplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(21, '3', 'Mumbai', 'Andheri(E)', 'Rocking Cinema', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(22, '3', 'Mumbai', 'Ghatkopar', 'BIG Cinemas: R-City', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(23, '4', 'Mumbai', 'Girgaon, Mumbai', 'Central Plaza: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(24, '4', 'Mumbai', 'Regal Cinema: ', 'Colaba', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(25, '4', 'Mumbai', 'Raghuleela Mall, Vashi', 'INOX: ', 70, 300, 33, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(26, '4', 'Mumbai', 'Saki Naka', 'Maxus Cinemas:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(27, '4', 'Mumbai', 'Vasai (W)', 'K.T. Vision Multiplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(28, '4', 'Mumbai', 'Oberoi Mall, Goregaon(E)', 'PVR:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(29, '4', 'Mumbai', 'Chembur', 'Natraj Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(30, '4', 'Mumbai', 'Saki Naka', 'Maxus Cinemas: ', 70, 300, 31, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(31, '5', 'Mumbai', 'Metro - Ebony Lounge', 'BIG Cinemas:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(32, '5', 'Mumbai', 'Kandivali (W)', 'CineMAX: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(33, '5', 'Mumbai', ' Khandeshwar', 'Apna Cinema:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(34, '5', 'Mumbai', 'Shivaji Road Thane (W)', 'Gold Digital Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(35, '5', 'Mumbai', 'Saki Naka', 'Maxus Cinemas: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(36, '5', 'Mumbai', 'Oberoi Mall, Goregaon(E)', 'PVR:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(37, '6', 'Mumbai', ' Kurla', 'K Sera Sera Miniplex', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(38, '6', 'Mumbai', 'Raghuleela Mall, Kandivali(W)', 'INOX: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(39, '6', 'Mumbai', 'Vasai (W)', 'K.T. Vision Multiplex:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(40, '6', 'Mumbai', 'Purna, Bhiwandi', 'Broadway Cinema:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(41, '6', 'Mumbai', 'Bandra(W)', 'Globus Cinema:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(42, '6', 'Mumbai', 'Mira Road', 'CineMAX:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(43, '7', 'Mumbai', 'Sona Borivali (E)', 'Gold Digital Cinema:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(44, '7', 'Mumbai', 'Charni Road', 'Roxy Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(45, '7', 'Mumbai', ' Colaba', 'Regal Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(46, '7', 'Mumbai', 'Charni Road', 'Roxy Cinema:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(47, '7', 'Mumbai', 'CR2, Nariman Point', 'INOX:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(48, '7', 'Mumbai', 'R Odeon Mall, Ghatkopar', 'CineMAX:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(49, '8', 'Mumbai', 'Borivali (E)', 'HDIL Broadway:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(50, '8', 'Mumbai', ' Vasai (W)', 'Dattani Digiplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(51, '8', 'Mumbai', 'Dadar(E)', 'Premiere Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(52, '8', 'Mumbai', 'Byculla', 'Palace Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(53, '8', 'Mumbai', 'Metro Mall Junction, Kalyan(E)', 'INOX: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(54, '8', 'Mumbai', 'Nirmal Lifestyle Mall, Mulund', 'PVR: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(55, '9', 'Mumbai', ' Andheri(W)', 'Fun Cinemas', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(56, '9', 'Mumbai', 'kanjur(E)', 'Chitra Cinemas ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(57, '9', 'Mumbai', 'Kurla (E)', 'PVR: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(58, '9', 'Mumbai', 'Thane (w)', 'CineMAX:  ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(59, '9', 'Mumbai', 'Matunga (W)', 'Movietime Star City:', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(60, '9', 'Mumbai', ' Vasai (W)', 'Dattani Digiplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(61, '10', 'Mumbai', 'Bhandup(W)', 'Cinepolis: ', 70, 300, 33, 100, 100, 63, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(62, '10', 'Mumbai', 'Juhu(E)', 'Chandan Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(63, '10', 'Mumbai', 'Kurla(W)', 'Miniplex: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(64, '10', 'Mumbai', 'Girgaon(E)', 'Central Plaza: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(65, '10', 'Mumbai', 'Colaba', 'Regal Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM'),
(66, '10', 'Mumbai', 'Mira road', 'Regal Cinema: ', 70, 300, 35, 100, 100, 65, '10:30 AM', '11:30 AM', '2:30 PM', '3:30 PM', '4:30 PM', '5:30 PM', '9:30 PM', '10:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `bms_customertbl`
--

CREATE TABLE `bms_customertbl` (
  `custid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mob` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(35) DEFAULT NULL,
  `cpass` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_customertbl`
--

INSERT INTO `bms_customertbl` (`custid`, `fname`, `lname`, `mob`, `email`, `pass`, `cpass`) VALUES
(12, 'prachi', 'bhopi', '8989898989', 'prachi@gmail.com', 'nilesh', 'nilesh'),
(13, 'Anjalika', 'Gupta', '8787878787', 'anjalika@gmail.com', 'anjalika', 'anjalika');

-- --------------------------------------------------------

--
-- Table structure for table `bms_eventbooktbl`
--

CREATE TABLE `bms_eventbooktbl` (
  `eventb_id` int(100) NOT NULL,
  `custid` int(30) DEFAULT NULL,
  `event_id` int(10) NOT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `event_name` varchar(50) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  `dateFeed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_eventbooktbl`
--

INSERT INTO `bms_eventbooktbl` (`eventb_id`, `custid`, `event_id`, `cust_name`, `event_name`, `quantity`, `total_price`, `dateFeed`) VALUES
(3, 12, 9, 'prachi', 'Back Benchers', '3', '2100', '2016-10-04 19:13:58'),
(4, 13, 3, 'Anjalika', 'Back Benchers', '4', '2800', '2016-10-05 15:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `bms_eventtbl`
--

CREATE TABLE `bms_eventtbl` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(300) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `lang` varchar(30) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `start_date` varchar(200) NOT NULL,
  `finish_date` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `total_seat` int(10) NOT NULL,
  `remaining_seat` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `img1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_eventtbl`
--

INSERT INTO `bms_eventtbl` (`event_id`, `event_name`, `duration`, `lang`, `description`, `start_date`, `finish_date`, `city`, `venue`, `total_seat`, `remaining_seat`, `price`, `img1`) VALUES
(1, 'Double bill', '2 hrs', 'English', 'International Music Formed in March 2012, Unohu is a three-piece alternative rock band based in Mumbai.\r\n The band initially began with brothers, Sarthak Karkare (Vocals and guitar) and Shashwat Karkare (Drums),\r\n jamming in their room. The third member,\r\n Yohann Coutinho (Bass), joined the duo after meeting Sarthak Karake in college.', 'Wed 01 oct 2016', 'Wed 01 oct 2016 ', 'mumbai', 'Mumbai Mathuradas Mills Compound, Senapati Bapat Marg, Lower Parel', 100, 10, 500, '../images/event/e11.jpg'),
(2, 'Great Golden Circus', '2 hrs', 'English', 'Expect an unforgettable experience of flying trapeze with hilarious jokers amazing feats circus treats dare-defying feats and just about everything that makes our circus the best circus ever. \r\nGreat Golden circus is a truly wonderful experience for the complete family.', 'Wed 02 oct 2016 ', 'Fri 25 oct 2016', 'mumbai', 'Mumbai Mathuradas Mills Compound, Senapati Bapat Marg, Lower Parel', 100, 10, 500, '../images/event/e12.jpg'),
(3, 'Back Benchers', '2 hrs', 'English', 'East India Comedy presents `Back Benchers` Come join Lords Sapan Verma, \r\nSahil Shah and Azeem Banatwalla as they take you down the memory lane with their take on college and campus life.\r\n They will give you their take on education, ragging, hostel life, exams, cheating and hot professors. \r\n You must come for the last one! This is a unique show as it`s doesn`t feature just\r\n standup, but also several sketches, songs, improv games and videos!', 'Wed 06 oct 2016 ', 'Fri 9 oct 2016 ', 'mumbai', '3rd Floor, Palladium Mall, High Street Phoenix, Tulsi Pipe Road, Lower Parel, Mumbai', 100, 10, 700, '../images/event/e13.jpg'),
(4, 'Moving Platform`s SALESMAN RAMLAL', '2 hrs', 'English', 'Ramlal, caught in a web of installment payments, technological obsolescence and retrenchment, \r\nfinds reality unbearable. He keeps slipping into illusions and nostalgia to make some sense of his present life and\r\nreaffirm his dignity - a play about an ordinary man with extraordinary dreams.', 'Wed 12 oct 2016 ', 'Wed 12 oct 2016 ', 'mumbai', 'Mathuradas Mills Compound, Senapati Bapat Marg, Lower Parel', 100, 10, 500, '../images/event/e14.jpg'),
(5, 'Kenneth Sebastian, Neville Shah, Aditi Mittal (A)', '2 hrs', 'English', 'The small window I have with the audience while doing stand up is what I always crave for.\r\n To be purely in the present moment. Music has the same effect on me hence the amalgamation of music and humour\r\n in my stand up routine makes natural sense to me. Improvisation is a key part of my act', 'Mon 16 oct 2016 ', 'Tues 17 oct 2016 ', 'mumbai', 'Opp Lilavati Hospital, Bandra Reclamation, Bandra(W)', 100, 10, 500, '../images/event/e15.jpg'),
(6, 'Mental Martians Live Set + AlgoRhythm + Mnkyslt', '2 hrs', 'English', 'Mental Martians \r\nThey are taking the Indian bass scene by storm and bringing a fresh new sound. Using Indian percussion with drum & bass music to fuse together a rich, melodic and aggressive sound that rips through sound systems. \r\nProviding the live element to the band is Tarang Singhal,\r\n who began his musical journey at the age of 8 and plays the tabla, darbuka, djembe, \r\n bongo, drums and other home made percussions that allow him to create a churning mayhem with the\r\n electronic deliciousness of the badman Sarvesh Shrivastava.', 'Fri 20 oct 2016 ', 'Wed 25  oct 2016 ', 'mumbai', 'Mathuradas Mills Compound, Senapati Bapat Marg, Lower Parel', 100, 10, 500, '../images/event/e16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bms_feedbacktbl`
--

CREATE TABLE `bms_feedbacktbl` (
  `feed_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `dateFeed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_feedbacktbl`
--

INSERT INTO `bms_feedbacktbl` (`feed_id`, `email`, `name`, `feedback`, `dateFeed`) VALUES
(1, 'abc@gmail.com', 'mmm', 'adasfsdsddc', '2016-09-28 03:16:36'),
(2, 'prachi@gmail.com', 'prachi', 'good website..', '2016-10-04 19:00:21'),
(3, 'anjalika@gmail.com', 'Anjalika', 'easy to book tickets..\r\nthank you ', '2016-10-05 16:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `bms_moviebooktbl`
--

CREATE TABLE `bms_moviebooktbl` (
  `mbook_id` int(100) NOT NULL,
  `cust_id` int(100) DEFAULT NULL,
  `movie_id` int(100) DEFAULT NULL,
  `theater_id` int(100) DEFAULT NULL,
  `cust_email` varchar(50) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `theatre_name` varchar(100) NOT NULL,
  `showtime` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `totalprice` varchar(100) DEFAULT NULL,
  `venue` varchar(100) NOT NULL,
  `dateFeed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_moviebooktbl`
--

INSERT INTO `bms_moviebooktbl` (`mbook_id`, `cust_id`, `movie_id`, `theater_id`, `cust_email`, `movie_name`, `theatre_name`, `showtime`, `price`, `quantity`, `totalprice`, `venue`, `dateFeed`) VALUES
(4, 12, 10, 61, 'prachi@gmail.com', 'SULTAN', 'Cinepolis: ', '3:30 PM', '70', '2', '140', 'Bhandup(W)', '2016-10-04 19:09:09'),
(5, 12, 10, 61, 'prachi@gmail.com', 'SULTAN', 'Cinepolis: ', '11:30 AM', '100', '2', '140', 'Bhandup(W)', '2016-10-04 19:09:24'),
(6, 12, 4, 30, 'prachi@gmail.com', 'BANJO', 'Maxus Cinemas: ', '10:30 PM', '70', '4', '280', 'Saki Naka', '2016-10-04 19:10:02'),
(7, 12, 2, 8, 'prachi@gmail.com', 'MS DHONI', 'Cinemax', '2:30 PM', '100', '1', '100', 'Wonder Mall Thane(E)', '2016-10-05 12:08:39'),
(8, 12, 2, 8, 'prachi@gmail.com', 'MS DHONI', 'Cinemax', '4:30 PM', '70', '2', '140', 'Wonder Mall Thane(E)', '2016-10-05 12:15:47'),
(9, 13, 4, 25, 'anjalika@gmail.com', 'BANJO', 'INOX: ', '3:30 PM', '70', '2', '140', 'Raghuleela Mall, Vashi', '2016-10-05 15:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `bms_movietbl`
--

CREATE TABLE `bms_movietbl` (
  `movie_id` int(200) NOT NULL,
  `movie_type` varchar(100) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `cast_crew` varchar(1000) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `overall_rating` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_movietbl`
--

INSERT INTO `bms_movietbl` (`movie_id`, `movie_type`, `movie_name`, `release_date`, `duration`, `director`, `genre`, `cast_crew`, `description`, `overall_rating`, `rating`, `img1`) VALUES
(1, 'hindi', 'AKIRA', 'sep 1, 2016', '2hrs 30mins', 'AR Murugadoss', 'Action', 'Sonakshi Sinha, Shatrughan Sinha, Anurag Kashyap', 'Akira is an action thriller Bollywood film directed by AR Murugadoss. It is produced by AR Murugadoss and Fox Star Studios featured Sonakshi Sinha, Anurag Kashyap and Konkona Sen Sharma in lead roles. The movie was an official remake of Tamil sleeper hit ''Mounaguru''. The music is composed by Vishal-Shekhar.', '66%', '3', '../images/hindi/h11.jpg'),
(2, 'hindi', 'MS DHONI', 'sep 8, 2016', '2hrs 33mins', 'Neeraj Pandey', 'biopic film', 'Sushant Singh Rajput, Kiara Advani, Disha Patani', 'The movie is about the journey of Mahendra Singh Dhoni, a budding cricketer from Ranchi becoming the most successful captain of Indian Cricket Team.\n', '70%', '4', '../images/hindi/h12.jpg'),
(3, 'hindi', 'TAFREE', 'sep 15, 2016', '2hrs 18mins', 'Krishnadev Yagnik', 'Drama, Comedy', 'Yash Soni\nAnsh Bagri\nSanchay Goswami\nSarabjit Bindra\nNimisha Mehta\nKinjal Rajpriya\nAnuradha Mukherjee', 'Days of Tafree revolves around the lives of seven friends and their relationship, love and compassion. Days of Tafree movie is a remake of Chhello Divas Gujarati movie.', '45%', '2', '../images/hindi/h13.jpg'),
(4, 'hindi', 'BANJO', 'sep 20, 2016', '2hrs 58mins', ' Ravi Jadhav', 'Drama, Romance', 'Riteish Deshmukh and Nargis Fakhri ', 'The film Banjo was based on the lives of young banjo players in Maharashtra and how this art has been neglected despite numerous youngsters getting involved in it. It revolved around a local orchestra band and their journey to how they gained fame. \n', '65%', '4', '../images/hindi/h14.jpg'),
(5, 'hindi', 'PARCHED', 'sep 26, 2016', '2hrs 15mins', 'Leena Yadav', 'Drama', '	Tannishtha Chatterjee\nRadhika Apte\nSurveen Chawla\nAdil Hussain\nLehar Khan\nSayani Gupta', 'The film revolves around four women living an unwanted life in a village of Rajasthan in the north-western region of India, which still suffers from old, age-ridiculed traditions like forced child marriages and other social issues like financial difficulties, spousal and familial rape, and physically and emotionally abusive alcoholic husbands.', '50%', '2', '../images/hindi/h15.jpg'),
(6, 'hindi', 'DISHOOM', 'Oct 1, 2016', '2hrs 10mins', 'Rohit Dhawan', 'Indian action-comedy', 'John Abraham, Jacqueline Fernandez, Varun Dhawan, Akshay Khanna', 'The story is based in the Middle East and is a completely cop film. When India''s top batsman goes missing in the Middle East, two cops from either side of the Arabian Sea team for a 36-hour man hunt. \n', '77%', '4', '../images/hindi/h16.jpg'),
(7, 'hindi', 'PINK(U/A)', 'Oct 6, 2016', '2 hr 15 mins', 'Shekhar Ghosh', ' Drama', 'Mr. Bachchan along with Taapsee Pannu, Kirti Kulhari and Andrea Tariang', 'Pink movie (earlier titled as "Eve") stars Amitabh Bachchan which is a Shoojit Sircar’s production directed by Aniruddha Roy Chowdhury.\nMovie stars Mr. Bachchan along with Taapsee Pannu, Kirti Kulhari and Andrea Tariang.\nTaapsee Pannu and her friends has been molested by a gang of hard-core criminals, which leads to an accident and landed them in court. Things becomes more complicated to them when Deepak(Amitabh Bachchan) joins to help them to get away from the court. \n', '89%', '4', '../images/hindi/h17.jpg'),
(8, 'hindi', 'RAAZ REBOOT', 'Oct 14, 2016', '1 hr 36 mins', ' Vikram Bhatt', 'scary and thrilling aspects', 'Emraan Hashmi, Kriti Kharbanda and Gaurav Arora', 'Raaz Reboot is a remake of the 1976 Hollywood hit, The Omen. There is a married couple living in a beautiful mansion in Romania. The couple is played by Kriti (Shaina) and Gaurav Arora (Rehaan). Emraan Hashmi (Aditya) played a dark character again in the series. The latest installment was all about a married couple with a secret haunting their lives. \n', '53%', '0', '../images/hindi/h18.jpg'),
(9, 'hindi', 'FLYING JATT', 'Oct 21, 2016', '2 hrs 9 mins', 'Remo D''souza', 'comady,Drama', 'Chirag Patil, Sai Tamhankar, Manoj Joshi, Anjan Srivastava, Mohan Joshi, Mukesh Tiwari', 'A flying jatt is a 2016 bollywood superhero film directed by remo d''souza starring tiger shroff, jacqueline fernandez and professional wrestler nathan jones in lead roles. tiger shroff is playing the role of a super hero and jacqueline fernandez will be playing his love interest in the film', '60%', '0', '../images/hindi/h19.jpg'),
(10, 'hindi', 'SULTAN', 'Oct 27, 2016', '2 hr 20 mins', 'Ali Abbas Zafar', 'Drama,Romance', 'Salman Khan and Anushka Sharma ', 'The film centers around Sultan Ali Khan (Salman Khan), a local wrestling champion with the world at his feet as he dreams of representing India at the Olympics.\nIt''s a story of Aafra (Anushka Sharma) - a feisty young girl from the same small town as Sultan with her own set of dreams.\nWhen the 2 local wrestling legends lock horns, romance blossoms and their dreams.', '89%', '4', '../images/hindi/h110.jpg'),
(11, 'hindi', 'abc', 'oct 10,2016', '1 hr', 'asdvja', 'asf', 'sadsa', 'sadas', '87', '4', '../images/hindi/h13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bms_sportbooktbl`
--

CREATE TABLE `bms_sportbooktbl` (
  `sportb_id` int(100) NOT NULL,
  `custid` int(30) DEFAULT NULL,
  `sport_id` int(10) NOT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `sport_name` varchar(50) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  `dateFeed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_sportbooktbl`
--

INSERT INTO `bms_sportbooktbl` (`sportb_id`, `custid`, `sport_id`, `cust_name`, `sport_name`, `quantity`, `total_price`, `dateFeed`) VALUES
(2, 12, 4, 'prachi', 'FOOT BALL BOLE TOH', '1', '500', '2016-10-04 18:51:56'),
(3, 12, 3, 'prachi', 'PISTOL SHOOTNG', '2', '600', '2016-10-05 07:26:29'),
(4, 13, 2, 'Anjalika', 'EVEREST BASE CAMP', '5', '5000', '2016-10-05 16:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `bms_sporttbl`
--

CREATE TABLE `bms_sporttbl` (
  `sport_id` int(100) NOT NULL,
  `sport_name` varchar(300) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `finish_date` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `age_limit` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `img1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bms_sporttbl`
--

INSERT INTO `bms_sporttbl` (`sport_id`, `sport_name`, `venue`, `start_date`, `finish_date`, `price`, `age_limit`, `description`, `img1`) VALUES
(1, 'BOWLING AT PRIME TIME', 'Mumbai Mathuradas Mills Compound, Senapati Bapat Marg, Lower Parel', 'Wed 6 Dec 2016', 'Thru 7 Dec 2016', 500, 'No', 'If you love bowling, the PrimeTime is the place for you! PrimeTime offers an awesome 24 lane state-of-the-art bowling facility, with automatic scoring, and automatic bumper rails. Come find a league that''s right for you! Are you the competive type, or just like to bowl for fun with 40 of your closest friends?\n \nOur 24 lanes are split into two bowling areas. Our 16 lane traditional area is ready to go for open play and leagues, but if you are interested in a more relaxed, VIP area, the Back Stage Pass is for you. BSP is our 8 lane boutique bowling area. In BSP, we''ve thrown out the tables and chairs and brought in plush couches. The lights are low and the 192" HD screens are bright!', '../images/sport/s11.jpg'),
(2, 'EVEREST BASE CAMP', 'Mumbai  Senapati Bapat Marg, Churchgate', 'Wed 22 Nov 2016', 'Wed 30 Nov 2016', 1000, 'Age must have greater 18 (min 1 & max 5 participants)', 'Take on the adventure of a lifetime trekking in Nepal to reach Everest Base Camp. First conquered by Tenzing Norgay and Sir Edmund Hillary in 1953, Everest has traditionally been the ultimate goal for mountaineers. Today hard-core trekkers seek the challenge of reaching the mountaineer''s Base Camp. Flying in to Lukla, explore the mountains and valleys around the towering peak, rest in Nepalese teahouses, learn about the traditions and cultures of the famous Sherpa and spend time in exotic Kathmandu.\n View dates\n View itinerary\n View trip notes\n', '../images/sport/s12.jpg'),
(3, 'PISTOL SHOOTNG', 'Goregaon Sports Club,\nLink Road, Malad (W), Near Lakozy Toyota, Mumbai, Maharashtra 400064, India', 'Wed 28 Nov 2016', 'Wed 29 Nov 2016', 300, 'Age must have greater 18 (min 1 & max 5 participants)', 'One of the lesser pursued sports in India; Pistol Shooting is a calm yet competitive sport, involving tests of proficiency such as accuracy and speed. This Olympic sport is performed indoors in an air conditioned shooting range with world class imported equipment. The Olympic level air pistols ensure that participants learn the skill of sharp shooting. Along with the adrenaline rush, shooting de-stresses the shooter. It also enhances your strength, stamina, hand-eye coordination and motor skill', '../images/sport/s13.jpg'),
(4, 'FOOT BALL BOLE TOH', 'Mumbai Football Arena, Shahaji Raje Bhosale Kreeda Sankul - BKLP', 'Wed 29 Nov 2016', 'Thru 30 Nov 2016', 500, 'NO', 'The Andheri Sports Complex also known as Shahaji Raje Krida Sankul is a multi-purpose facility located on Veera Desai Road in Andheri West, Mumbai, India.The complex is used for both national level sports tournaments.In 2016, it was redeveloped to include a modern football stadium in accordance with FIFA guidelines', '../images/sport/s14.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bms_cinematbl`
--
ALTER TABLE `bms_cinematbl`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `bms_customertbl`
--
ALTER TABLE `bms_customertbl`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `bms_eventbooktbl`
--
ALTER TABLE `bms_eventbooktbl`
  ADD PRIMARY KEY (`eventb_id`);

--
-- Indexes for table `bms_eventtbl`
--
ALTER TABLE `bms_eventtbl`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `bms_feedbacktbl`
--
ALTER TABLE `bms_feedbacktbl`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `bms_moviebooktbl`
--
ALTER TABLE `bms_moviebooktbl`
  ADD PRIMARY KEY (`mbook_id`);

--
-- Indexes for table `bms_movietbl`
--
ALTER TABLE `bms_movietbl`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `bms_sportbooktbl`
--
ALTER TABLE `bms_sportbooktbl`
  ADD PRIMARY KEY (`sportb_id`);

--
-- Indexes for table `bms_sporttbl`
--
ALTER TABLE `bms_sporttbl`
  ADD PRIMARY KEY (`sport_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bms_cinematbl`
--
ALTER TABLE `bms_cinematbl`
  MODIFY `cinema_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `bms_customertbl`
--
ALTER TABLE `bms_customertbl`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bms_eventbooktbl`
--
ALTER TABLE `bms_eventbooktbl`
  MODIFY `eventb_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bms_eventtbl`
--
ALTER TABLE `bms_eventtbl`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bms_feedbacktbl`
--
ALTER TABLE `bms_feedbacktbl`
  MODIFY `feed_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bms_moviebooktbl`
--
ALTER TABLE `bms_moviebooktbl`
  MODIFY `mbook_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bms_movietbl`
--
ALTER TABLE `bms_movietbl`
  MODIFY `movie_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bms_sportbooktbl`
--
ALTER TABLE `bms_sportbooktbl`
  MODIFY `sportb_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bms_sporttbl`
--
ALTER TABLE `bms_sporttbl`
  MODIFY `sport_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

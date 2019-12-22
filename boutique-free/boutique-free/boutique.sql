-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2010 at 04:36 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET FOREIGN_KEY_CHECKS=0;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT=0;
START TRANSACTION;

--
-- Database: `boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Jan 27, 2009 at 03:05 PM
-- Last update: Mar 07, 2010 at 09:25 PM
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `sr_no` int(5) NOT NULL default '0',
  `adminid` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`sr_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT DELAYED IGNORE INTO `admin` (`sr_no`, `adminid`, `password`) VALUES
(1, 'admin', 'fairy'),
(2, 'birju', 'maa');

-- --------------------------------------------------------

--
-- Table structure for table `item_detail`
--
-- Creation: Jan 01, 2009 at 12:40 PM
-- Last update: Mar 08, 2010 at 11:52 AM
--

DROP TABLE IF EXISTS `item_detail`;
CREATE TABLE IF NOT EXISTS `item_detail` (
  `sr_no` int(5) NOT NULL default '0',
  `item_name` varchar(50) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `picture` varchar(60) NOT NULL default '',
  `item_category` varchar(50) NOT NULL default '',
  `price` int(10) NOT NULL default '0',
  PRIMARY KEY  (`sr_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_detail`
--

INSERT DELAYED IGNORE INTO `item_detail` (`sr_no`, `item_name`, `description`, `picture`, `item_category`, `price`) VALUES
(2, 'BW-02', 'Bollywood Sari', 'photo/bollywoodsari/BW-02.jpg', 'SARI', 4500),
(1, 'BW-01', 'Bollywood Sari', 'photo/bollywoodsari/BW-01.jpg', 'SARI', 5000),
(3, 'BW-03', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-03.jpg', 'SARI', 5000),
(4, 'BW-04', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-04.jpg', 'SARI', 5500),
(5, 'BW-05', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-05.jpg', 'SARI', 4000),
(6, 'BW-06', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-06.jpg', 'SARI', 4500),
(7, 'BW-07', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-07.jpg', 'SARI', 4000),
(8, 'BW-08', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-08.jpg', 'SARI', 5000),
(9, 'BW-09', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-09.jpg', 'SARI', 5000),
(10, 'BW-10', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-10.jpg', 'SARI', 5500),
(11, 'BW-11', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-11.jpg', 'SARI', 6000),
(12, 'BW-12', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-12.jpg', 'SARI', 5500),
(13, 'BW-13', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-13.jpg', 'SARI', 5000),
(14, 'BW-14', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-14.jpg', 'SARI', 3000),
(15, 'BW-15', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-15.jpg', 'SARI', 2500),
(16, 'BW-16', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-16.jpg', 'SARI', 3000),
(17, 'BW-17', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-17.jpg', 'SARI', 1500),
(18, 'BW-18', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-18.jpg', 'SARI', 1000),
(19, 'BW-19', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-19.jpg', 'SARI', 2000),
(20, 'BW-20', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-20.jpg', 'SARI', 2000),
(21, 'BW-21', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-21.jpg', 'SARI', 3500),
(22, 'BW-22', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-22.jpg', 'SARI', 2500),
(23, 'BW-23', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-23.jpg', 'SARI', 1500),
(24, 'BW-24', 'Bollywood Sari', 'photo\\bollywoodsari\\BW-24.jpg', 'SARI', 2000),
(25, 'WE-01', 'Wedding Sari', 'photo\\weddingsari/WE-01.jpg', 'SARI', 35000),
(26, 'WE-02', 'Wedding Sari', 'photo\\weddingsari/WE-02.jpg', 'SARI', 26000),
(27, 'WE-03', 'Wedding Sari', 'photo\\weddingsari/WE-03.jpg', 'SARI', 30000),
(28, 'WE-04', 'Wedding Sari', 'photo\\weddingsari/WE-04.jpg', 'SARI', 28000),
(29, 'WE-05', 'Wedding Sari', 'photo\\weddingsari/WE-05.jpg', 'SARI', 25000),
(30, 'WE-06', 'Wedding Sari', 'photo\\weddingsari/WE-06.jpg', 'SARI', 27000),
(31, 'WE-07', 'Wedding Sari', 'photo\\weddingsari/WE-07.jpg', 'SARI', 30000),
(32, 'WE-08', 'Wedding Sari', 'photo\\weddingsari/WE-08.jpg', 'SARI', 26000),
(33, 'WE-09', 'Wedding Sari', 'photo\\weddingsari/WE-09.jpg', 'SARI', 23000),
(34, 'WE-10', 'Wedding Sari', 'photo\\weddingsari/WE-10.jpg', 'SARI', 32000),
(35, 'WE-11', 'Wedding Sari', 'photo\\weddingsari/WE-11.jpg', 'SARI', 20000),
(36, 'WE-12', 'Wedding Sari', 'photo\\weddingsari/WE-12.jpg', 'SARI', 25000),
(37, 'FN-01', 'Fancy sari', 'photo\\fancysari/FN-01.jpg', 'SARI', 20500),
(38, 'FN-02', 'Fancy sari', 'photo\\fancysari/FN-02.jpg', 'SARI', 22000),
(39, 'FN-03', 'Fancy sari', 'photo\\fancysari/FN-03.jpg', 'SARI', 25000),
(40, 'FN-04', 'Fancy sari', 'photo\\fancysari/FN-04.jpg', 'SARI', 27000),
(41, 'FN-05', 'Fancy sari', 'photo\\fancysari/FN-05.jpg', 'SARI', 18000),
(42, 'FN-06', 'Fancy sari', 'photo\\fancysari/FN-06.jpg', 'SARI', 19000),
(43, 'FN-07', 'Fancy sari', 'photo\\fancysari/FN-07.jpg', 'SARI', 17000),
(44, 'FN-08', 'Fancy sari', 'photo\\fancysari/FN-08.jpg', 'SARI', 16000),
(45, 'FN-09', 'Fancy sari', 'photo\\fancysari/FN-09.jpg', 'SARI', 18500),
(46, 'FN-10', 'Fancy sari', 'photo\\fancysari/FN-10.jpg', 'SARI', 16500),
(47, 'FN-11', 'Fancy sari', 'photo\\fancysari/FN-11.jpg', 'SARI', 15500),
(48, 'FN-12', 'Fancy sari', 'photo\\fancysari/FN-12.jpg', 'SARI', 18700),
(49, 'FN-13', 'Fancy sari', 'photo\\fancysari/FN-13.jpg', 'SARI', 19500),
(50, 'FN-14', 'Fancy sari', 'photo\\fancysari/FN-14.jpg', 'SARI', 14000),
(51, 'FN-15', 'Fancy sari', 'photo\\fancysari/FN-15.jpg', 'SARI', 17500),
(52, 'FN-16', 'Fancy sari', 'photo\\fancysari/FN-16.jpg', 'SARI', 16700),
(53, 'FN-17', 'Fancy sari', 'photo\\fancysari/FN-17.jpg', 'SARI', 21000),
(54, 'FN-18', 'Fancy sari', 'photo\\fancysari/FN-18.jpg', 'SARI', 18000),
(55, 'FN-19', 'Fancy sari', 'photo\\fancysari/FN-19.jpg', 'SARI', 19000),
(56, 'FN-20', 'Fancy sari', 'photo\\fancysari/FN-20.jpg', 'SARI', 17000),
(57, 'DE-01', 'Designer Sari', 'photo\\designer/DE-01.jpg', 'SARI', 9000),
(58, 'DE-02', 'Designer Sari', 'photo\\designer/DE-02.jpg', 'SARI', 9500),
(59, 'DE-03', 'Designer Sari', 'photo\\designer/DE-03.jpg', 'SARI', 10000),
(60, 'DE-04', 'Designer Sari', 'photo\\designer/DE-04.jpg', 'SARI', 12000),
(61, 'DE-05', 'Designer Sari', 'photo\\designer/DE-05.jpg', 'SARI', 7500),
(62, 'DE-06', 'Designer Sari', 'photo\\designer/DE-06.jpg', 'SARI', 8500),
(63, 'DE-07', 'Designer Sari', 'photo\\designer/DE-07.jpg', 'SARI', 6500),
(64, 'DE-08', 'Designer Sari', 'photo\\designer/DE-08.jpg', 'SARI', 10500),
(65, 'DE-09', 'Designer Sari', 'photo\\designer/DE-09.jpg', 'SARI', 9000),
(66, 'DE-10', 'Designer Sari', 'photo\\designer/DE-10.jpg', 'SARI', 9000),
(67, 'DE-11', 'Designer Sari', 'photo\\designer/DE-11.jpg', 'SARI', 8500),
(68, 'DE-12', 'Designer Sari', 'photo\\designer/DE-12.jpg', 'SARI', 8500),
(69, 'DE-13', 'Designer Sari', 'photo\\designer/DE-13.jpg', 'SARI', 9700),
(70, 'DE-14', 'Designer Sari', 'photo\\designer/DE-14.jpg', 'SARI', 7700),
(71, 'DE-15', 'Designer Sari', 'photo\\designer/DE-15.jpg', 'SARI', 8700),
(72, 'DE-16', 'Designer Sari', 'photo\\designer/DE-16.jpg', 'SARI', 6500),
(73, 'DE-17', 'Designer Sari', 'photo\\designer/DE-17.jpg', 'SARI', 5000),
(74, 'DE-18', 'Designer Sari', 'photo\\designer/DE-18.jpg', 'SARI', 5000),
(75, 'DE-19', 'Designer Sari', 'photo\\designer/DE-19.jpg', 'SARI', 4500),
(76, 'DE-20', 'Designer Sari', 'photo\\designer/DE-20.jpg', 'SARI', 5000),
(77, 'TR-01', 'Traditional Sari', 'photo\\traditionalsari\\TR-01.jpg', 'SARI', 5700),
(78, 'TR-02', 'Traditional Sari', 'photo\\traditionalsari/TR-02.jpg', 'SARI', 5900),
(79, 'TR-03', 'Traditional Sari', 'photo\\traditionalsari/TR-03.jpg', 'SARI', 5500),
(80, 'TR-04', 'Traditional Sari', 'photo\\traditionalsari/TR-04.jpg', 'SARI', 4200),
(81, 'TR-05', 'Traditional Sari', 'photo\\traditionalsari/TR-05.jpg', 'SARI', 5100),
(82, 'TR-06', 'Traditional Sari', 'photo\\traditionalsari/TR-06.jpg', 'SARI', 3900),
(83, 'TR-07', 'Traditional Sari', 'photo\\traditionalsari/TR-07.jpg', 'SARI', 3200),
(84, 'TR-08', 'Traditional Sari', 'photo\\traditionalsari/TR-08.jpg', 'SARI', 2800),
(85, 'TR-09', 'Traditional Sari', 'photo\\traditionalsari/TR-09.jpg', 'SARI', 3200),
(86, 'TR-10', 'Traditional Sari', 'photo\\traditionalsari/TR-10.jpg', 'SARI', 2500),
(87, 'TR-11', 'Traditional Sari', 'photo\\traditionalsari/TR-11.jpg', 'SARI', 2600),
(88, 'TR-12', 'Traditional Sari', 'photo\\traditionalsari/TR-12.jpg', 'SARI', 2925),
(89, 'TR-13', 'Traditional Sari', 'photo\\traditionalsari/TR-13.jpg', 'SARI', 2999),
(90, 'TR-14', 'Traditional Sari', 'photo\\traditionalsari/TR-14.jpg', 'SARI', 1800),
(91, 'TR-05', 'Traditional Sari', 'photo\\traditionalsari/TR-15.jpg', 'SARI', 1800),
(92, 'TR-16', 'Traditional Sari', 'photo\\traditionalsari/TR-16.jpg', 'SARI', 1750),
(93, 'SL-01', 'Silk Sari', 'photo\\silksari/SL-01.jpg', 'SARI', 2850),
(94, 'SL-02', 'Silk Sari', 'photo\\silksari/SL-02.jpg', 'SARI', 2700),
(95, 'SL-03', 'Silk Sari', 'photo\\silksari/SL-03.jpg', 'SARI', 2300),
(96, 'SL-04', 'Silk Sari', 'photo\\silksari/SL-04.jpg', 'SARI', 2200),
(97, 'SL-05', 'Silk Sari', 'photo\\silksari/SL-05.jpg', 'SARI', 2150),
(98, 'SL-06', 'Silk Sari', 'photo\\silksari/SL-06.jpg', 'SARI', 1999),
(99, 'SL-07', 'Silk Sari', 'photo\\silksari/SL-07.jpg', 'SARI', 2450),
(100, 'SL-08', 'Silk Sari', 'photo\\silksari/SL-08.jpg', 'SARI', 2350),
(101, 'SL-09', 'Silk Sari', 'photo\\silksari/SL-09.jpg', 'SARI', 2100),
(102, 'SL-10', 'Silk Sari', 'photo\\silksari/SL-10.jpg', 'SARI', 2050),
(103, 'SL-11', 'Silk Sari', 'photo\\silksari/SL-11.jpg', 'SARI', 1950),
(104, 'SL-12', 'Silk Sari', 'photo\\silksari/SL-12.jpg', 'SARI', 2000),
(105, 'DR-01', 'Dress', 'photo\\dress/DR-01.jpg', 'Dress', 2500),
(106, 'DR-02', 'Dress', 'photo\\dress/DR-02.jpg', 'Dress', 2000),
(107, 'DR-03', 'Dress', 'photo\\dress/DR-03.jpg', 'Dress', 1000),
(108, 'DR-04', 'Dress', 'photo\\dress/DR-04.jpg', 'Dress', 700),
(109, 'DR-05', 'Dress', 'photo\\dress/DR-05.jpg', 'Dress', 850),
(110, 'DR-06', 'Dress', 'photo\\dress/DR-06.jpg', 'Dress', 1500),
(111, 'DR-07', 'Dress', 'photo\\dress/DR-07.jpg', 'Dress', 1200),
(112, 'DR-08', 'Dress', 'photo\\dress/DR-08.jpg', 'Dress', 1750),
(113, 'DR-09', 'Dress', 'photo\\dress/DR-09.jpg', 'Dress', 450),
(114, 'DR-10', 'Dress', 'photo\\dress/DR-10.jpg', 'Dress', 400),
(115, 'DR-11', 'Dress', 'photo\\dress/DR-11.jpg', 'Dress', 380),
(116, 'DR-12', 'Dress', 'photo\\dress/DR-12.jpg', 'Dress', 300),
(117, 'CH-01', 'Choli', 'photo\\cholis/CH-01.jpg', 'Choli', 2100),
(118, 'CH-02', 'Choli', 'photo\\cholis/CH-02.jpg', 'Choli', 2500),
(119, 'CH-03', 'Choli', 'photo\\cholis/CH-03.jpg', 'Choli', 1800),
(120, 'CH-04', 'Choli', 'photo\\cholis/CH-04.jpg', 'Choli', 1700),
(121, 'CH-05', 'Choli', 'photo\\cholis/CH-05.jpg', 'Choli', 1900),
(122, 'CH-06', 'Choli', 'photo\\cholis/CH-06.jpg', 'Choli', 2050),
(123, 'CH-07', 'Choli', 'photo\\cholis/CH-07.jpg', 'Choli', 1700),
(124, 'CH-08', 'Choli', 'photo\\cholis/CH-08.jpg', 'Choli', 1950),
(125, 'CH-09', 'Choli', 'photo\\cholis/CH-09.jpg', 'Choli', 1600),
(126, 'CH-10', 'Choli', 'photo\\cholis/CH-10.jpg', 'Choli', 1550),
(127, 'CH-11', 'Choli', 'photo\\cholis/CH-11.jpg', 'Choli', 1750),
(128, 'CH-12', 'Choli', 'photo\\cholis/CH-12.jpg', 'Choli', 1600),
(129, 'CH-13', 'Choli', 'photo\\cholis/CH-13.jpg', 'Choli', 2100),
(130, 'CH-14', 'Choli', 'photo\\cholis/CH-14.jpg', 'Choli', 1600),
(131, 'CH-15', 'Choli', 'photo\\cholis/CH-15.jpg', 'Choli', 1450),
(132, 'CH-16', 'Choli', 'photo\\cholis/CH-16.jpg', 'Choli', 1525),
(133, 'JW-01', 'Jewelry', 'photo\\jewelry/JW-01.jpg', 'Jewelry', 800),
(134, 'JW-02', 'Jewelry', 'photo\\jewelry/JW-02.jpg', 'Jewelry', 700),
(135, 'JW-03', 'Jewelry', 'photo\\jewelry/JW-03.jpg', 'Jewelry', 650),
(136, 'JW-04', 'Jewelry', 'photo\\jewelry/JW-04.jpg', 'Jewelry', 670),
(137, 'JW-05', 'Jewelry', 'photo\\jewelry/JW-05.jpg', 'Jewelry', 250),
(138, 'JW-06', 'Jewelry', 'photo\\jewelry/JW-06.jpg', 'Jewelry', 300),
(139, 'JW-07', 'Jewelry', 'photo\\jewelry/JW-07.jpg', 'Jewelry', 250),
(140, 'JW-08', 'Jewelry', 'photo\\jewelry/JW-08.jpg', 'Jewelry', 200),
(141, 'JW-09', 'Jewelry', 'photo\\jewelry/JW-09.jpg', 'Jewelry', 210),
(142, 'JW-10', 'Jewelry', 'photo\\jewelry/JW-10.jpg', 'Jewelry', 190),
(143, 'JW-11', 'Jewelry', 'photo\\jewelry/JW-11.jpg', 'Jewelry', 200),
(144, 'JW-12', 'Jewelry', 'photo\\jewelry/JW-12.jpg', 'Jewelry', 200),
(145, 'JW-13', 'Jewelry', 'photo\\jewelry/JW-13.jpg', 'Jewelry', 250),
(146, 'JW-14', 'Jewelry', 'photo\\jewelry/JW-14.jpg', 'Jewelry', 350),
(147, 'JW-15', 'Jewelry', 'photo\\jewelry/JW-15.jpg', 'Jewelry', 180),
(148, 'JW-16', 'Jewelry', 'photo\\jewelry/JW-16.jpg', 'Jewelry', 175),
(149, 'JW-17', 'Jewelry', 'photo\\jewelry/JW-17.jpg', 'Jewelry', 125),
(150, 'JW-18', 'Jewelry', 'photo\\jewelry/JW-18.jpg', 'Jewelry', 140),
(151, 'JW-19', 'Jewelry', 'photo\\jewelry/JW-19.jpg', 'Jewelry', 150),
(152, 'JW-20', 'Jewelry', 'photo\\jewelry/JW-20.jpg', 'Jewelry', 120),
(153, 'JW-21', 'Jewelry', 'photo\\jewelry/JW-21.jpg', 'Jewelry', 130),
(154, 'JW-22', 'Jewelry', 'photo\\jewelry/JW-22.jpg', 'Jewelry', 145),
(155, 'JW-23', 'Jewelry', 'photo\\jewelry/JW-23.jpg', 'Jewelry', 110),
(156, 'JW-24', 'Jewelry', 'photo\\jewelry/JW-24.jpg', 'Jewelry', 155),
(157, 'JW-25', 'Jewelry', 'photo\\jewelry/JW-25.jpg', 'Jewelry', 165),
(158, 'JW-26', 'Jewelry', 'photo\\jewelry/JW-26.jpg', 'Jewelry', 125),
(159, 'JW-27', 'Jewelry', 'photo\\jewelry/JW-27.jpg', 'Jewelry', 80),
(160, 'JW-28', 'Jewelry', 'photo\\jewelry/JW-28.jpg', 'Jewelry', 95),
(161, 'TR-17', 'Traditional Sari', 'photo\\traditionalsari/TR-17.jpg', 'SARI', 17000),
(162, 'TR-18', 'Traditional Sari', 'photo\\traditionalsari/TR-18.jpg', 'SARI', 18050),
(163, 'TR-19', 'Traditional Sari', 'photo\\traditionalsari/TR-19.jpg', 'SARI', 19000),
(164, 'TR-20', 'Traditional Sari', 'photo\\traditionalsari/TR-20.jpg', 'SARI', 17050),
(165, 'WE-13', 'Wedding Sari', 'photo\\weddingsari\\WE-13.jpg', 'SARI', 12000),
(166, 'WE-14', 'Wedding Sari', 'photo\\weddingsari\\WE-14.jpg', 'SARI', 10000),
(167, 'WE-15', 'Wedding Sari', 'photo\\weddingsari\\WE-15.jpg', 'SARI', 9000),
(168, 'WE-16', 'Wedding Sari', 'photo\\weddingsari\\WE-16.jpg', 'SARI', 8500);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--
-- Creation: Feb 05, 2009 at 02:55 AM
-- Last update: Mar 07, 2010 at 09:06 PM
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `sr_no` int(9) NOT NULL default '0',
  `userid` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `firstname` varchar(20) NOT NULL default '',
  `lastname` varchar(20) NOT NULL default '',
  `bdate` varchar(30) NOT NULL default '',
  `gen` varchar(10) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `phone` int(30) NOT NULL default '0',
  `city` varchar(30) NOT NULL default '',
  `state` varchar(30) NOT NULL default '',
  `country` varchar(30) NOT NULL default '',
  `zipcode` varchar(30) NOT NULL default '',
  `email` varchar(50) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales_mast`
--
-- Creation: Feb 05, 2009 at 03:31 AM
-- Last update: Mar 09, 2010 at 10:51 AM
--

DROP TABLE IF EXISTS `sales_mast`;
CREATE TABLE IF NOT EXISTS `sales_mast` (
  `bill_no` varchar(10) NOT NULL default '',
  `userid` varchar(50) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `city` varchar(30) NOT NULL default '',
  `state` varchar(30) NOT NULL default '',
  `country` varchar(30) NOT NULL default '',
  `date` varchar(20) NOT NULL default '',
  `total_amt` int(10) NOT NULL default '0',
  `cr_no` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`bill_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_mast`
--

INSERT DELAYED IGNORE INTO `sales_mast` (`bill_no`, `userid`, `address`, `city`, `state`, `country`, `date`, `total_amt`, `cr_no`) VALUES
('10', 'pini', 'rajkot', 'rajkot', 'gujrat', 'india', '09-March-2010', 38200, '5636586925'),
('9', 'birju', 'rajkot', 'rajkot', 'gujrat', 'india', '08-March-2010', 9500, '54876532487965'),
('8', 'birju', 'rajkot', 'rajkot', 'gujrat', 'india', '08-March-2010', 66000, '54546586'),
('7', 'birju', 'rajkot', 'rajkot', 'gujrat', 'india', '08-March-2010', 48600, '69876536984'),
('6', 'birju', 'rajkot', 'rajkot', 'gujrat', 'india', '07-March-2010', 91000, '465701254');

-- --------------------------------------------------------

--
-- Table structure for table `sales_trans`
--
-- Creation: Feb 05, 2009 at 03:30 AM
-- Last update: Mar 10, 2010 at 02:01 PM
--

DROP TABLE IF EXISTS `sales_trans`;
CREATE TABLE IF NOT EXISTS `sales_trans` (
  `sr_no` int(10) NOT NULL default '0',
  `bill_no` varchar(10) NOT NULL default '',
  `item_name` varchar(50) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `qty` int(10) NOT NULL default '0',
  `amt` int(10) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_trans`
--

INSERT DELAYED IGNORE INTO `sales_trans` (`sr_no`, `bill_no`, `item_name`, `description`, `qty`, `amt`) VALUES
(2, '10', 'TR-02', 'Traditional Sari', 1, 5900),
(3, '10', 'SL-03', 'Silk Sari', 2, 2300),
(2, '9', 'BW-01', 'Bollywood Sari', 1, 5000),
(1, '10', 'FN-04', 'Fancy sari', 1, 27000),
(4, '10', 'JW-02', 'Jewelry', 1, 700),
(1, '9', 'BW-02', 'Bollywood Sari', 1, 4500),
(1, '8', 'FN-02', 'Fancy sari', 3, 22000),
(3, '10', 'SL-03', 'Silk Sari', 2, 2300),
(4, '7', 'TR-01', 'Traditional Sari', 3, 5700),
(3, '7', 'BW-02', 'Bollywood Sari', 1, 4500),
(2, '7', 'CH-02', 'Choli', 2, 2500),
(1, '7', 'FN-02', 'Fancy sari', 1, 22000),
(2, '6', 'FN-04', 'Fancy sari', 3, 27000),
(1, '6', 'BW-01', 'Bollywood Sari', 2, 5000),
(2, '10', 'TR-02', 'Traditional Sari', 1, 5900),
(1, '10', 'FN-04', 'Fancy sari', 1, 27000),
(4, '10', 'JW-02', 'Jewelry', 1, 700),
(5, '10', 'SL-02', 'Silk Sari', 1, 2700),
(6, '10', 'BW-01', 'Bollywood Sari', 1, 5000),
(7, '10', 'FN-02', 'Fancy sari', 2, 22000),
(1, '10', 'BW-03', 'Bollywood Sari', 1, 5000),
(1, '10', 'BW-03', 'Bollywood Sari', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_table`
--
-- Creation: Mar 09, 2009 at 05:22 PM
-- Last update: Mar 10, 2010 at 09:42 AM
--

DROP TABLE IF EXISTS `tmp_table`;
CREATE TABLE IF NOT EXISTS `tmp_table` (
  `sr_no` int(10) NOT NULL default '0',
  `userid` varchar(50) NOT NULL default '',
  `item_name` varchar(50) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `qty` int(10) NOT NULL default '0',
  `amt` int(10) NOT NULL default '0',
  PRIMARY KEY  (`sr_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_table`
--

INSERT DELAYED IGNORE INTO `tmp_table` (`sr_no`, `userid`, `item_name`, `description`, `qty`, `amt`) VALUES
(1, 'pini', 'BW-03', 'Bollywood Sari', 1, 5000);

SET FOREIGN_KEY_CHECKS=1;

COMMIT;

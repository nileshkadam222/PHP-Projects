-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2013 at 07:42 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `24hoursbooks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE IF NOT EXISTS `book_details` (
  `product_no` bigint(10) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `year_of_publication` int(4) NOT NULL,
  `no_of_pages` int(5) NOT NULL,
  `language` varchar(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `no_of_books` int(10) NOT NULL,
  `discount` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`product_no`, `isbn`, `title`, `publisher`, `category`, `year_of_publication`, `no_of_pages`, `language`, `author`, `price`, `no_of_books`, `discount`, `image`) VALUES
(8800000001, '8121924987', 'Quantitative Aptitude For Competitive Examinations', 'S.Chand Publishin', 'Entrance Exams', 2012, 726, 'English', 'R. S. Aggarwal', 500, 20, 15, 'BookStore/8800000001.jpg'),
(8800000002, '8121900093', 'High School English Grammar & Composition', 'S. Chand Publisher', 'Entrance Exams', 2011, 376, 'English', 'P.C. Wren , H. Martin', 215, 50, 10, 'BookStore/8800000002.jpg'),
(8800000003, '8121905516', 'A Modern Approach To Verbal & Non-Verbal Reasoning', 'S. Chand Publisher', 'Entrance Exams', 2012, 1568, 'English', 'R. S. Aggarwal', 695, 100, 35, 'BookStore/8800000003.jpg'),
(8800000004, '9350945983', 'General Knowledge 2014', 'Arihant Publication', 'Entrance Exams', 2013, 621, 'English', 'Manohar Pandey', 150, 50, 15, 'BookStore/8800000004.jpg'),
(8800000005, '9381069522', 'Reasoning & Aptitude 2013: Theory And Problems With Explanations', 'Made Easy Publications', 'Entrance Exams', 2012, 375, 'English', 'Nem Singh', 325, 2, 35, 'BookStore/8800000005.jpg'),
(8800000006, '1259003841', 'Indian Economy, 4th Edition', 'Tata Mcgrawhill Publications', 'Entrance Exams', 2012, 332, 'English', 'Ramesh Singh', 350, 5, 30, 'BookStore/8800000006.jpg'),
(8800000007, '1259027163', 'CSAT General Studies for Civil Services Preliminary Examination 2013 (Paper - 2)', 'Tata McGraw Hill Education', 'Entrance Exams', 2012, 1396, 'English', 'TMH', 1250, 40, 40, 'BookStore/8800000007.jpg'),
(8800000008, '8183480004', 'Objective General English', 'Arihant Publication', 'Entrance Exams', 2012, 735, 'English', 'SP Bakshi', 225, 4, 0, 'BookStore/8800000008.jpg'),
(9900000001, '8184044976', 'Head First Servlets & Jsp, 2/Ed (Covers J2ee 1.5)', 'Shroff - O''Reilly', 'Computer', 2008, 928, 'English', 'Basham', 750, 100, 20, 'BookStore/9900000001.jpg'),
(9900000002, '813091168X', 'Viva Startup Computer Science - 8', 'Viva Education - A Unit Of Viv', 'Computer', 2009, 172, 'English', 'Sharadha Prathap', 145, 0, 0, 'BookStore/9900000002.jpg'),
(9900000003, '8189757903', 'Software Testing', 'S.K. Kataria & Sons', 'Computer', 2010, 470, 'English', 'Rajiv Chopra', 300, 100, 10, 'BookStore/9900000003.jpg'),
(9900000004, '8132209613', 'Android Apps With Eclipse', 'Dreamtech Press', 'Computer', 2012, 372, 'English', 'Onur Cinar', 499, 100, 10, 'BookStore/9900000004.jpg'),
(9900000005, '8126538244', 'Professional Mobile Application Development', 'Wiley India Pvt Ltd', 'Computer', 2012, 432, 'English', 'Jeff Mcwherter , Scott Gowell', 499, 100, 5, 'BookStore/9900000005.jpg'),
(9900000006, '8178123282', 'UGC NET Computer Science Guide (Paper 2 and 3)', 'Ramesh Publishing House', 'Computer', 2011, 708, 'English', 'Shamshur Rabb Khan', 480, 50, 40, 'BookStore/9900000006.jpg'),
(9900000007, '813220963X', 'Illustrated C# 2012, 4th Edition', 'Dreamtech Press', 'Computer', 2012, 764, 'English', 'Daniel Solis', 599, 10, 8, 'BookStore/9900000007.jpg'),
(9900000008, '8126538287', 'Professional Html5 Mobile Game Development', 'Wiley India Pvt Ltd', 'Computer', 2012, 552, 'English', 'Pascal Rettig', 599, 6, 8, 'BookStore/9900000008.jpg'),
(9900000009, '8126538309', 'Professional ASP.NET MVC 4', 'Wiley India Pvt Ltd', 'Computer', 2012, 504, 'English', ' Jon Galloway , Phil Haack , Brad Wilson', 599, 0, 5, 'BookStore/9900000009.jpg'),
(9900000010, '8131505197', 'Operating Systems: Principles, Design And Applications, 1st Edition', 'Cengage Learning India', 'Computer', 2008, 504, 'English', 'Brian Stuart Brian Stuart', 285, 0, 10, 'BookStore/9900000010.jpg'),
(9900000011, '8126520515', 'Operating System Concepts, 8th Edition', 'Wiley India Pvt Ltd', 'Computer', 2009, 992, 'English', 'Abraham Silberschatz , Greg Gagne ', 549, 45, 10, 'BookStore/9900000011.jpg'),
(9900000012, '9381068720', 'Operating Systems', 'Khanna Publications', 'Computer', 2012, 680, 'English', 'Ikvinderpal Singh', 360, 2, 0, 'BookStore/9900000012.jpg'),
(9900000013, '0070667586', 'Operating System - Sie, 1st Edition', 'Tata McGraHill', 'Computer', 2008, 308, 'English', 'J Archer Harris jyoti Singh', 399, 4, 9, 'BookStore/9900000013.jpg'),
(9900000014, '0070702039', 'Operating System, 3rd Edition', 'Tata McGraHill', 'Computer', 2012, 456, 'English', 'Godbole', 435, 23, 7, 'BookStore/9900000014.jpg'),
(9900000015, '8131501760', 'Operating Systems , 1st Edition', 'Cengage Learning India', 'Computer', 2007, 565, 'English', 'Ida M Flynnuniversity Of Pittsburgh Ida M Flynn', 321, 34, 10, 'BookStore/9900000015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_name` varchar(30) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `login_pwd` varchar(30) NOT NULL,
  `login_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_name`, `login_id`, `login_pwd`, `login_level`) VALUES
('Ranjan kumar', 'ranjankumar1231@gmail.com', 'ranjan', 1),
('Sunil kumar', 'sunil1231@gmail.com', 'sunil', 0),
('Sujeet kumar', 'sujeet1231@gmail.com', 'sujeet', 0),
('Ankit kumar', 'ankit@gmail.com', 'ankit', 0),
('Arun kumar', 'arun@gmail.com', 'arunkumar', 0),
('Ajit kumar', 'ajit@gmail.com', 'ajitkumar', 0),
('Bishunjay kumar', 'bishunjay@gmail.com', 'bishunjay', 0),
('chandan kumar', 'chandan20189@rediffmail.com', 'chandan', 0),
('suraj kumar', 'suraj1231@gmail.com', 'surajkumar', 0),
('sss', 'ssss', 'ssssss', 0),
('abc', 'abc@gmail.com', 'ranjan', 0),
('Anil kumar', 'anil@gmail.com', 'anilkumar', 0),
('Rakesh kumar', 'rakesh@gmail.com', 'rakesh', 0),
('Rakesh kumar', 'rakesh1231@gmail.com', 'rakesh', 0),
('Rakesh kumar', 'rakesh123@gmail.com', 'rakesh', 0),
('Ranjan kumar', 'ranjan@gmail.com', 'ranjan', 0),
('sunil kumar', 'sunilkumar@gmail.com', 'sunilkumar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_item_info`
--

CREATE TABLE IF NOT EXISTS `ordered_item_info` (
  `order_no` int(6) NOT NULL,
  `order_date` date NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `less` int(5) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `email_id` varchar(50) NOT NULL,
  `order_no` int(6) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recently_sold`
--

CREATE TABLE IF NOT EXISTS `recently_sold` (
  `product_no` bigint(10) NOT NULL,
  `sold_position` int(2) NOT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recently_sold`
--

INSERT INTO `recently_sold` (`product_no`, `sold_position`) VALUES
(8800000001, 1),
(8800000002, 2),
(8800000003, 3),
(8800000004, 10),
(8800000005, 20),
(8800000006, 5),
(8800000007, 4),
(8800000008, 14),
(8800000009, 18),
(8800000010, 17),
(9900000001, 12),
(9900000002, 11),
(9900000003, 19),
(9900000004, 13),
(9900000005, 9),
(9900000006, 16),
(9900000007, 7),
(9900000008, 6),
(9900000009, 8),
(9900000010, 15);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `email` varchar(50) NOT NULL,
  `product_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`email`, `product_no`) VALUES
('sunil1231@gmail.com', 9900000002),
('sunil1231@gmail.com', 8800000003),
('sujit1231@gmail.com', 9900000006),
('sunil1231@gmail.com', 8800000005);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `email_id` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `add_line1` varchar(50) DEFAULT NULL,
  `add_line2` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pin_code` int(6) NOT NULL DEFAULT '0',
  `mob_no` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`email_id`, `user_name`, `add_line1`, `add_line2`, `city`, `state`, `pin_code`, `mob_no`) VALUES
('ranjankumar1231@gmail.com', 'Ranjan kumar', 'ROOM NO-16,TAGORE HOSTEL', 'PONDICHERRY UNIVERSITY,R.V.NAG', 'PONDICHERRY', 'PONDICHERRY', 0, 9031203635),
('sunil1231@gmail.com', 'sunil kumar', 'ROOM NO-16, TAGORE HOSTEL, PONDICHERRY UNIVERSITY', 'R.V.NAGAR KALAPET', 'PONDICHERRY', 'PONDICHERRY', 605014, 2147483647),
('rajesh@gmail.com', 'Rajesh kumar', 'ROOM NO-10 KALIDAS HOSTEL', 'PONDICHERRY UNIVERSITY', 'PONDICHERRY', 'PONDICHERRY', 605014, 2147483647),
('raj@gmail.com', 'Raj kumar', 'ROOM NO-10 KALIDAS HOSTEL', 'PONDICHERRY UNIVERSITY', 'PONDICHERRY', 'PONDICHERRY', 605014, 2147483647),
('sujit1231@gmail.com', 'Sujit kumar', '', '', '', '', 0, 0),
('sujeet1231@gmail.com', 'Sujeet kumar', '', '', '', '', 0, 0),
('qqq@gmail.com', 'vvv', '', '', '', '', 0, 0),
('qqqq@gmail.com', 'qqqqq', '', '', '', '', 0, 0),
('ajit@gmail.com', 'Ajit kumar', '', '', '', '', 0, 0),
('bishunjay@gmail.com', 'Bishunjay kumar', '', '', '', '', 0, 0),
('chandan20189@rediffmail.com', 'chandan kumar', '', '', '', '', 0, 0),
('kjhjh', 'kjhjjh', '', '', '', '', 0, 0),
('dsfg', 'dsafg', '', '', '', '', 0, 0),
('suraj1231@gmail.com', 'suraj kumar', '', '', '', '', 0, 0),
('a', 'aaaa', '', '', '', '', 0, 0),
('qqqq', 'qqqqqqqq', '', '', '', '', 0, 0),
('qqqqqq', 'qqq', '', '', '', '', 0, 0),
('s', 'dsf', '', '', '', '', 0, 0),
('ssss', 'sss', '', '', '', '', 0, 0),
('abc@gmail.com', 'abc', '', '', '', '', 0, 0),
('anil@gmail.com', 'Anil kumar', '', '', '', '', 0, 0),
('rakesh@gmail.com', 'Rakesh kumar', '', '', '', '', 0, 0),
('rakesh1231@gmail.com', 'Rakesh kumar', '', '', '', '', 0, 0),
('rakesh123@gmail.com', 'Rakesh kumar', '', '', '', '', 0, 0),
('ranjan@gmail.com', 'Ranjan kumar', '', '', '', '', 0, 0),
('sunilkumar@gmail.com', 'sunil kumar', '', '', '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

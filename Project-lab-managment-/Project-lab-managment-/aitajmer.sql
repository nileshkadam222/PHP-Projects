-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 04:27 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aitajmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `ainfo`
--

CREATE TABLE IF NOT EXISTS `ainfo` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `uname` (`uname`,`upass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ainfo`
--

INSERT INTO `ainfo` (`aid`, `uname`, `upass`) VALUES
(1, 'sumit', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `atimetable`
--

CREATE TABLE IF NOT EXISTS `atimetable` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `aid` (`aid`),
  UNIQUE KEY `uname` (`uname`,`time`,`semester`),
  KEY `uname_2` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `atimetable`
--

INSERT INTO `atimetable` (`aid`, `uname`, `day`, `time`, `semester`, `subject`) VALUES
(1, '', '', '', '', ''),
(2, 'Sumit', 'MONDAY', '10 to 12', '6th', 'DAA LAB'),
(4, 'Ashok', 'MONDAY', '12 to 2', '5th', 'VLSI'),
(6, 'Kd', 'THURSDAY', '3 to 5', '7th', 'Cd');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `usernme` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `tempadd` text NOT NULL,
  `padd` text NOT NULL,
  `post` text NOT NULL,
  `jdate` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `mno` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`usernme`,`password`,`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fname`, `usernme`, `password`, `email`, `sex`, `tempadd`, `padd`, `post`, `jdate`, `image`, `mno`) VALUES
(1, 'sumit', 's.k.Ubana', 'sumit', 'sumit', 'sumitubana@gmail.com', 'm', 'sjdfgshdggj', 'jkdsasnhyg', 'shdbgdcng', '2013-11-11', 'C:\\Users\\SUMIT\\Downloads\\1016583_563071390432343_1437609992_n.jpg', 2147483647),
(2, 'asd', 'asdasdas', 'asd', 'mmm', 'asdlkas', 'M', 'sdkj', 'kjhsjdf', 'hjsud', '2013-11-11', 'upload/', 8787),
(3, 'meenakshi', 'h. mahawar', 'meenu', 'mm', 'akjdsn', 'M', 'asndkj', 'knsdkj', 'dknk', '2013-11-11', '', 2147483647),
(4, 'nnn', 'nnnn', 'nn', 'nn', 'nn', 'M', 'nn', 'n', 'n', '2013-11-11', '', 0),
(5, 'Ashok', 'k.l. Sharma', 'ashok', 'kk', 'ashok@ymail.com', 'M', 'jdhufudufnhdfh', 'dfkvnjdfh', 'a,sdfnhm', '2013-11-22', 'upload/', 2147483647),
(6, 'hey', 'as', 'hey', 'mother', 'asjdb', 'M', 'sdhskdb', 'jncdsbh', 'hbhjhj', '2013-11-14', 'upload/', 97897),
(8, 'Kuldeep', 'D.s Chauhan', 'kd', 'shiva', 'kdchauhan@ymail.com', 'M', 'asjdbhf', 'jjbsf', 'Student', '2013-11-22', 'upload/', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uname`, `comment`) VALUES
(1, ' dasd ', 'sdas'),
(2, ' sasas ', 'sdasdasd'),
(3, ' dasdas ', 'asdas'),
(4, '  ', ''),
(5, ' amit ubana ', 'hello i am enjoy very well'),
(6, ' ankit ', 'this is good'),
(7, ' Kd ', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `finfo`
--

CREATE TABLE IF NOT EXISTS `finfo` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobno` int(13) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `emailid` (`emailid`,`mobno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `finfo`
--

INSERT INTO `finfo` (`fid`, `uname`, `upass`, `gender`, `dob`, `city`, `address`, `emailid`, `mobno`) VALUES
(1, ' sumit ', 'sumit', 'm', '28may 2011', 'Delhi', 'smdsj', 'kjd@ymaillcom', 2147483647),
(2, 'sa', 'sa', 'm', '', '', '', '', 0),
(3, ' hi ', 'hi', 'm', '23232', 'Jaipur', 'dfd', 'jdf@ymail.vom', 2147483647),
(4, 'meenuu', 'meenu', 'f', '28 amay ', 'Delhi', 'sjdh', 'dfkjh', 2147483647),
(8, ' monday ', 'monday', 'm', '28 may 1990', 'Delhi', 'jsandjas', 'jncfcud@ymail.com', 989383393),
(10, 'sumit', 'sumit', 'm', '28 may 1992', 'Delhi', 'gulab bari ajmer', 'sumit.ubana77@gmail.com', 2147483647),
(11, 'pawan', 'pawan', 'm', '25-05-1992', 'Delhi', 'akdsjh', 'pawan@gmail.com', 2147483647),
(12, 'xyyz', 'xyyz', 'm', '5676', 'Jaipur', 'mgh', 'jyjgh', 76898);

-- --------------------------------------------------------

--
-- Table structure for table `flabitems`
--

CREATE TABLE IF NOT EXISTS `flabitems` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `roomno` int(200) NOT NULL,
  `desktop` int(200) NOT NULL,
  `keyboard` int(200) NOT NULL,
  `mouse` int(200) NOT NULL,
  `headphone` int(200) NOT NULL,
  `lancable` enum('y','n') NOT NULL,
  `os` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `fid` (`fid`),
  UNIQUE KEY `roomno` (`roomno`),
  UNIQUE KEY `roomno_2` (`roomno`,`desktop`,`keyboard`,`mouse`,`headphone`,`lancable`,`os`,`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `flabitems`
--

INSERT INTO `flabitems` (`fid`, `fname`, `roomno`, `desktop`, `keyboard`, `mouse`, `headphone`, `lancable`, `os`, `date`) VALUES
(1, ' Manish ', 200, 23, 24, 25, 26, 'y', 'Window 8', '2013-03-09'),
(2, '  ', 0, 0, 0, 0, 0, '', '--Select O.S.--', '0000-00-00'),
(3, ' Amit ubana ', 301, 23, 23, 23, 20, 'y', 'Window 7', '0000-00-00'),
(4, ' ankit ', 333, 23, 23, 23, 20, 'n', 'Window 7', '2013-11-07'),
(5, ' rr ', 34, 4, 5, 67, 87, 'y', 'Window 7', '0000-00-00'),
(9, ' 333 ', 22, 22, 22, 22, 323, 'y', 'Window 7', '0000-00-00'),
(12, ' 1223 ', 7, 87, 87, 87, 9, 'y', 'Linux', '0000-00-00'),
(13, ' 12 ', 78, 87, 87, 87, 8, 'y', 'Window 7', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `uptest`
--

CREATE TABLE IF NOT EXISTS `uptest` (
  `upid` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `newsname` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `opentype` enum('_parent','_blank') NOT NULL,
  `status` enum('A','I') NOT NULL,
  PRIMARY KEY (`upid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `uptest`
--

INSERT INTO `uptest` (`upid`, `filename`, `path`, `newsname`, `location`, `opentype`, `status`) VALUES
(1, 'My_CV.pdf', 'data/', 'CV', '1', '_parent', 'A'),
(2, 'dota2wallpaper_Lina_by_2befine.jpg', 'data/', 'Today Is SUNDAY', '1', '_parent', 'A'),
(3, 'LUMIERES_no3-1600.jpg', 'data/', 'Result', '1', '_parent', 'A'),
(4, '994346_581702148554652_1321595243_n.jpg', 'data/', 'Today India WIn', '1', '_blank', 'A'),
(5, 'time_table_and_instructions_24-9-13.pdf', 'data/', 'News Update', '1', '_blank', 'A'),
(6, 'first page.pdf', 'data/', 'Documents', '1', '_blank', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

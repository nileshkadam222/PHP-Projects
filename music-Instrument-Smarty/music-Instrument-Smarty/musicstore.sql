-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2010 at 09:46 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `ss_categories`
--

CREATE TABLE IF NOT EXISTS `ss_categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `products_count` int(11) DEFAULT NULL,
  `description` text,
  `picture` varchar(30) DEFAULT NULL,
  `products_count_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `ss_categories`
--

INSERT INTO `ss_categories` (`categoryID`, `name`, `parent`, `products_count`, `description`, `picture`, `products_count_admin`) VALUES
(79, 'Drums', 0, 2, 'Electronic drums, congo drums', 'DRUAKUTOM.jpg', 2),
(80, 'Pianos', 0, 3, 'All types of pianos', 'PIAAKU.jpg', 3),
(81, 'Synthesizers', 0, 2, 'Digital synthesizers, analog synthesizer.', 'SYNDIGI.jpg', 2),
(82, 'DJ Lights', 0, 4, 'DJ Lights.', 'LIGMOVING.jpg', 4),
(83, 'Keyboards', 0, 2, 'Music Keyboards', 'KEYORIENTS.jpg', 2),
(84, 'DJ Kits', 0, 3, 'All types of DJ mixing kits', 'DJEMULTI.jpg', 3),
(85, 'Electronics', 0, 3, '', 'PCMHD.jpg', 3),
(78, 'Guitars', 0, 4, 'All types of guitars avaible..\r\nElectric guitars, concert guitars, western guitars..', 'GITEGIT.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ss_ordered_carts`
--

CREATE TABLE IF NOT EXISTS `ss_ordered_carts` (
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `name` char(255) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`productID`,`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ss_ordered_carts`
--


-- --------------------------------------------------------

--
-- Table structure for table `ss_orders`
--

CREATE TABLE IF NOT EXISTS `ss_orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `order_time` datetime DEFAULT NULL,
  `cust_firstname` varchar(30) DEFAULT NULL,
  `cust_lastname` varchar(30) DEFAULT NULL,
  `cust_email` varchar(30) DEFAULT NULL,
  `cust_country` varchar(30) DEFAULT NULL,
  `cust_zip` varchar(30) DEFAULT NULL,
  `cust_state` varchar(30) DEFAULT NULL,
  `cust_city` varchar(30) DEFAULT NULL,
  `cust_address` varchar(30) DEFAULT NULL,
  `cust_phone` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ss_orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `ss_products`
--

CREATE TABLE IF NOT EXISTS `ss_products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `customers_rating` float NOT NULL,
  `Price` float DEFAULT NULL,
  `picture` varchar(30) DEFAULT NULL,
  `in_stock` int(11) DEFAULT NULL,
  `thumbnail` varchar(30) DEFAULT NULL,
  `customer_votes` int(11) NOT NULL,
  `items_sold` int(11) NOT NULL,
  `big_picture` varchar(30) DEFAULT NULL,
  `enabled` int(11) NOT NULL,
  `brief_description` text,
  `list_price` float DEFAULT NULL,
  `product_code` char(25) DEFAULT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=138 ;

--
-- Dumping data for table `ss_products`
--

INSERT INTO `ss_products` (`productID`, `categoryID`, `name`, `description`, `customers_rating`, `Price`, `picture`, `in_stock`, `thumbnail`, `customer_votes`, `items_sold`, `big_picture`, `enabled`, `brief_description`, `list_price`, `product_code`) VALUES
(115, 78, 'Yamaha CG 111 C Natural solid Cedar Top', 'Features:\r\n\r\n* Top: Solid Cedar  \r\n* Back & Sides: Nato  \r\n* Neck: Nato  \r\n* Fretboard: Rosewood  \r\n* Bridge: Rosewood', 0, 550, 'imagesCA0X3IAM.jpg', 1, 'imagesCA0X3IAM.jpg', 0, 0, 'GALLERY_GIT0000642-000_1_image', 1, 'Features:\r\n\r\n* Top: Solid Cedar  \r\n* Back & Sides: Nato  \r\n* Neck: Nato  \r\n* Fretboard: Rosewood  \r\n* Bridge: Rosewood', 550, ''),
(116, 78, 'Fame Modell 1a Cedro mass. Zederndecke/Palisander ', 'Features:\r\n\r\n* Solid Cedar Top  \r\n* Rosewood Body  \r\n* Scale: 25,6"  \r\n* Gold Tuners  \r\n* Finish: Natural ', 0, 460, '', 1, 'imagesCAYXAWNZ.jpg', 0, 0, '', 1, 'Features:\r\n\r\n* Solid Cedar Top  \r\n* Rosewood Body  \r\n* Scale: 25,6"  \r\n* Gold Tuners  \r\n* Finish: Natural ', 460, ''),
(117, 78, 'Jack & Danny CC-500 Case f. Concert Guitars 9mm Wood ', 'Features:\r\n*(L/B/H): ca. 100 x 38 x 11 cm  \r\n* Finish: Black  \r\n', 0, 100, '', 1, 'imagesCAUEUDYS.jpg', 0, 0, '', 1, 'Features:\r\n*(L/B/H): ca. 100 x 38 x 11 cm  \r\n* Finish: Black  \r\n', 100, ''),
(118, 78, 'Ibanez GRG250DX BKF Black Flat', 'Ibanez GRG250DX BKF GIO Series Ibanez GRG250DX BKF Features: Basswood body GRG2 maple neck Rosewood fingerboard 24 Medium frets Shark Tooth Inlays Red pickguard Edge III Tremolo 1x PSND1(H) neck pickup 1x PSNDS(S) middle pickup 1x PSND2(H) bridge pickup Black Hardware Scale: 648mm Finish: Light Purple Metallic Incl. bag and strap !!! 3 years Music Store warranty ', 0, 450, 'imagesCAIWUBHL.jpg', 1, 'imagesCAIWUBHL.jpg', 0, 0, '', 1, 'Ibanez GRG250DX BKF GIO Series Ibanez GRG250DX BKF Features: Basswood body GRG2 maple neck Rosewood fingerboard 24 Medium frets Shark Tooth Inlays Red pickguard Edge III Tremolo 1x PSND1(H) neck pickup 1x PSNDS(S) middle pickup 1x PSND2(H) bridge pickup Black Hardware Scale: 648mm Finish: Light Purple Metallic Incl. bag and strap !!! 3 years Music Store warranty ', 450, ''),
(119, 79, 'Full Drum Set', 'Full Drum Set iincluding all the small drums and plates', 0, 1500, 'imagesCA81WUMA.jpg', 1, 'imagesCA81WUMA.jpg', 0, 0, 'GALLERY_DRU034_1_images390.jpg', 1, 'Full Drum Set iincluding all the small drums and plates', 1500, ''),
(120, 79, 'Fame Maple Standard Set 5221 Black ', 'Beginnerset with a very good price/performance ratio and big sound! \r\n\r\nComponents: 22"x16" Bass Drum, 12"x9" Tom, 13"x10" Tom, 16"x16" Floor Tom, 14"x5,5" Snare Drum', 0, 570, 'imagesCAZFTJ5S.jpg', 1, 'imagesCAZFTJ5S.jpg', 0, 0, '', 1, 'Beginnerset with a very good price/performance ratio and big sound! \r\n\r\nComponents: 22"x16" Bass Drum, 12"x9" Tom, 13"x10" Tom, 16"x16" Floor Tom, 14"x5,5" Snare Drum', 570, ''),
(121, 80, 'Casio AP-80R Ensemble', 'Ensemble d-piano with \r\naccompany computer.\r\nFantastic price-\r\nperformance ratio.', 0, 1200, 'msprod376-free-EPI0000428-001.', 1, 'PIAAKU.jpg', 0, 0, 'msprod376-free-EPI0000428-001.', 1, 'Ensemble d-piano with \r\naccompany computer.\r\nFantastic price-\r\nperformance ratio.', 1200, ''),
(122, 80, 'Yamaha MODUS H01 VR Red', 'Unique designer piano with high\r\nquality sound generation\r\n', 0, 880, 'PIAEPIANO.jpg', 1, 'PIAEPIANO.jpg', 0, 0, '', 1, 'Unique designer piano with high\r\nquality sound generation\r\n', 880, ''),
(123, 80, 'Roland EP-880 Stage Piano ', 'The EP-880 is a simple and stylish 88-key Digital Piano in a portable Stage Piano with onboard speakers configuration which is today most demanded from the market.', 0, 750, 'GALLERY_EPI0000515-000_1_image', 1, 'imagesCAHVTI23.jpg', 0, 0, '', 1, 'The EP-880 is a simple and stylish 88-key Digital Piano in a portable Stage Piano with onboard speakers configuration which is today most demanded from the market.', 750, ''),
(124, 81, 'Akai synthesizer', 'Akai digital synthesizer. Used to synthesize the music samples.', 0, 790, 'SYNANAL.jpg', 1, 'SYNANAL.jpg', 0, 0, '', 1, 'Akai digital synthesizer. Used to synthesize the music samples.', 790, ''),
(125, 81, 'Electron- Analog synthesizer', 'Electron branded analog synthesizer synthesizer. Used to synthesize the music quality.', 0, 900, 'SYNSAM.jpg', 1, 'SYNSAM.jpg', 0, 0, '', 1, 'Electron branded analog synthesizer synthesizer. Used to synthesize the music quality.', 900, ''),
(126, 82, 'Lightmaxx', '', 0, 210, 'LIGLIGHT.jpg', 1, 'LIGLIGHT.jpg', 0, 0, '', 1, '', 210, ''),
(127, 82, 'Light Effects', '', 0, 260, 'LIGEFFEKTE.jpg', 1, 'LIGEFFEKTE.jpg', 0, 0, '', 1, '', 260, ''),
(128, 82, 'Lighting Sets', 'DJ scrolling lighting sets', 0, 460, 'LIGSETS.jpg', 1, 'LIGSETS.jpg', 0, 0, '', 1, 'DJ scrolling lighting sets', 460, ''),
(129, 82, 'Laser Projector', '', 0, 700, 'LIGLASER.jpg', 1, 'LIGLASER.jpg', 0, 0, '', 1, '', 700, ''),
(130, 83, 'Yamaha Keyboard', 'Yamaha top seller keyboard.', 0, 1050, 'KEYSTAGE.jpg', 1, 'KEYSTAGE.jpg', 0, 0, '', 1, 'Yamaha top seller keyboard.', 1050, ''),
(131, 84, 'DJ mixer', '', 0, 600, 'DJEMIXER.jpg', 1, 'DJEMIXER.jpg', 0, 0, '', 1, '', 600, ''),
(132, 84, 'DJ Turntable', '', 0, 550, 'DJETURNT.jpg', 1, 'DJETURNT.jpg', 0, 0, '', 1, '', 550, ''),
(133, 84, 'DJ flanger', '', 0, 910, 'DJETOOLS.jpg', 1, 'DJETOOLS.jpg', 0, 0, '', 1, '', 910, ''),
(134, 83, 'Accord keyboard', '', 0, 470, 'KEYAKK.jpg', 1, 'KEYAKK.jpg', 0, 0, '', 1, '', 470, ''),
(135, 85, 'Multimedia controller', '', 0, 1240, 'PCMAUDIOI.jpg', 1, 'PCMAUDIOI.jpg', 0, 0, '', 1, '', 1240, ''),
(136, 85, 'Midi controlling system', '', 0, 400, 'PCMCONTROL.jpg', 1, 'PCMCONTROL.jpg', 0, 0, '', 1, '', 400, ''),
(137, 85, 'Audio Kits', '', 0, 300, 'PCMAUDIOG.jpg', 1, 'PCMAUDIOG.jpg', 0, 0, '', 1, '', 300, 'Audio Kits');

-- --------------------------------------------------------

--
-- Table structure for table `ss_special_offers`
--

CREATE TABLE IF NOT EXISTS `ss_special_offers` (
  `offerID` int(11) NOT NULL AUTO_INCREMENT,
  `productID` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`offerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `ss_special_offers`
--

INSERT INTO `ss_special_offers` (`offerID`, `productID`, `sort_order`) VALUES
(53, 119, 0),
(54, 120, 0),
(55, 115, 0),
(56, 122, 0),
(57, 126, 0),
(58, 129, 0);

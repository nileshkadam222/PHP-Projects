-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 17, 2010 at 05:38 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.2
-- 
-- Database: `jwellery`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cart`
-- 

CREATE TABLE `cart` (
  `id` int(11) NOT NULL auto_increment,
  `jewel_id` int(11) NOT NULL default '0',
  `qty` int(11) NOT NULL default '0',
  `cust_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `cart`
-- 

INSERT INTO `cart` VALUES (13, 156, 1, 1);
INSERT INTO `cart` VALUES (17, 215, 1, 1);
INSERT INTO `cart` VALUES (15, 215, 1, 1);
INSERT INTO `cart` VALUES (14, 43, 1, 1);
INSERT INTO `cart` VALUES (16, 215, 1, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `category`
-- 

CREATE TABLE `category` (
  `id` int(11) NOT NULL auto_increment,
  `cate_name` varchar(50) collate latin1_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `category`
-- 

INSERT INTO `category` VALUES (1, 'Silver');
INSERT INTO `category` VALUES (3, 'Gold');
INSERT INTO `category` VALUES (4, 'Diamond');

-- --------------------------------------------------------

-- 
-- Table structure for table `jewellery`
-- 

CREATE TABLE `jewellery` (
  `id` int(3) NOT NULL auto_increment,
  `name` varchar(30) collate latin1_general_ci NOT NULL,
  `path` varchar(100) collate latin1_general_ci NOT NULL default '',
  `category` int(33) NOT NULL default '0',
  `price` varchar(5) collate latin1_general_ci NOT NULL default '',
  `desc` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci PACK_KEYS=0 AUTO_INCREMENT=325 ;

-- 
-- Dumping data for table `jewellery`
-- 

INSERT INTO `jewellery` VALUES (1, 'Diamond/Bangles/1.jpg', 'Diamond/Bangles/1.jpg', 1, '$100', 'Diamond Carte:20\r\n\r\n');
INSERT INTO `jewellery` VALUES (2, 'Diamond/Bangles/2.jpg', 'Diamond/Bangles/2.jpg', 1, '$115', 'Diamond Carte:20\r\n\r\n');
INSERT INTO `jewellery` VALUES (3, 'Diamond/Bangles/3.jpg', 'Diamond/Bangles/3.jpg', 1, '$120', 'Diamond Carte:15\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (4, 'Diamond/Bangles/4.jpg', 'Diamond/Bangles/4.jpg', 1, '$125', 'Diamond Carte:15\r\n');
INSERT INTO `jewellery` VALUES (5, 'Diamond/Bangles/5.jpg', 'Diamond/Bangles/5.jpg', 1, '$130', 'Diamond Carte:20\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (6, 'Diamond/Bangles/6.jpg', 'Diamond/Bangles/6.jpg', 1, '$125', 'Diamond carte:10\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (7, 'Diamond/Bangles/7.jpg', 'Diamond/Bangles/7.jpg', 1, '$125', 'Diamond Carte:10\r\n');
INSERT INTO `jewellery` VALUES (8, 'Diamond/Bangles/8.jpg', 'Diamond/Bangles/8.jpg', 1, '$130', 'Diamond Carte:20\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (9, 'Diamond/Bangles/9.jpg', 'Diamond/Bangles/9.jpg', 1, '$135', 'Diamond Carte:25\r\n');
INSERT INTO `jewellery` VALUES (10, 'Diamond/Bangles/10.jpg', 'Diamond/Bangles/10.jpg', 1, '$135', 'Diamond Carte:25\r\n');
INSERT INTO `jewellery` VALUES (11, 'Diamond/Bangles/11.jpg', 'Diamond/Bangles/11.jpg', 1, '$126', 'Diamond Carte:20');
INSERT INTO `jewellery` VALUES (15, 'Diamond/EarRings/1.jpg', 'Diamond/EarRings/1.jpg', 2, '$10', 'Diamond Carte:10\r\ngold Carte:24');
INSERT INTO `jewellery` VALUES (16, 'Diamond/EarRings/2.jpg', 'Diamond/EarRings/2.jpg', 2, '$12', 'Diamond Carte:12\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (17, 'Diamond/EarRings/3.jpg', 'Diamond/EarRings/3.jpg', 2, '$14', 'Diamond Carte:14\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (18, 'Diamond/EarRings/4.jpg', 'Diamond/EarRings/4.jpg', 2, '$16', 'Diamond Carte:16\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (19, 'Diamond/EarRings/5.jpg', 'Diamond/EarRings/5.jpg', 2, '$18', 'Diamond Carte:18\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (20, 'Diamond/EarRings/6.jpg', 'Diamond/EarRings/6.jpg', 2, '$20', 'Diamond Carte:20\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (21, 'Diamond/EarRings/7.jpg', 'Diamond/EarRings/7.jpg', 2, '$22', 'Diamond carte:5\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (22, 'Diamond/EarRings/8.jpg', 'Diamond/EarRings/8.jpg', 2, '$24', 'Diamond Carte:10\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (23, 'Diamond/EarRings/9.jpg', 'Diamond/EarRings/9.jpg', 2, '$12', 'Diamond Carte:16\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (77, 'Gold/Bangles/2.jpg', 'Gold/Bangles/2.jpg', 9, '$115', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (76, 'Gold/Bangles/1.jpg', 'Gold/Bangles/1.jpg', 9, '$100', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (26, 'Diamond/Lady Ring/1.jpg', 'Diamond/Lady Ring/1.jpg', 8, '$10', 'Diamond Carte:20');
INSERT INTO `jewellery` VALUES (27, 'Diamond/Lady Ring/2.jpg', 'Diamond/Lady Ring/2.jpg', 8, '$15', 'Diamond Carte:10\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (28, 'Diamond/Lady Ring/3.jpg', 'Diamond/Lady Ring/3.jpg', 8, '$12', 'Diamond Carte:12\r\nGold Carte: 24');
INSERT INTO `jewellery` VALUES (29, 'Diamond/Lady Ring/4.jpg', 'Diamond/Lady Ring/4.jpg', 8, '$14', 'Diamond Carte:14\r\nGold  Carte:24');
INSERT INTO `jewellery` VALUES (30, 'Diamond/Lady Ring/5.jpg', 'Diamond/Lady Ring/5.jpg', 8, '$18', 'Diamond Carte:18\r\nGold Carte: 24');
INSERT INTO `jewellery` VALUES (31, 'Diamond/Lady Ring/6.jpg', 'Diamond/Lady Ring/6.jpg', 8, '$20', 'Diamond Carte:20\r\nGold Carte: 24');
INSERT INTO `jewellery` VALUES (32, 'Diamond/Lady Ring/7.jpg', 'Diamond/Lady Ring/7.jpg', 8, '$22', 'Diamond Carte:20\r\nGold Carte: 24');
INSERT INTO `jewellery` VALUES (33, 'Diamond/Lady Ring/8.jpg', 'Diamond/Lady Ring/8.jpg', 8, '$24', 'Diamond Carte: 10\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (34, 'Diamond/Lady Ring/9.jpg', 'Diamond/Lady Ring/9.jpg', 8, '$25', 'Diamond Carte:19\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (35, 'Diamond/Lady Ring/10.jpg', 'Diamond/Lady Ring/10.jpg', 8, '$30', 'Diamond Carte:14\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (36, 'Diamond/Necklaces/1.jpg', 'Diamond/Necklaces/1.jpg', 3, '$100', 'Diamond Carte:10');
INSERT INTO `jewellery` VALUES (37, 'Diamond/Necklaces/2.jpg', 'Diamond/Necklaces/2.jpg', 3, '$115', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (38, 'Diamond/Necklaces/3.jpg', 'Diamond/Necklaces/3.jpg', 3, '$120', 'Diamond Carte:12');
INSERT INTO `jewellery` VALUES (39, 'Diamond/Necklaces/4.jpg', 'Diamond/Necklaces/4.jpg', 3, '$125', 'Diamond Carte:14');
INSERT INTO `jewellery` VALUES (40, 'Diamond/Necklaces/5.jpg', 'Diamond/Necklaces/5.jpg', 3, '$130', 'Diamond Carte:13');
INSERT INTO `jewellery` VALUES (41, 'Diamond/Necklaces/6.jpg', 'Diamond/Necklaces/6.jpg', 3, '$135', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (42, 'Diamond/Necklaces/7.jpg', 'Diamond/Necklaces/7.jpg', 3, '$140', 'Diamond Carte:16');
INSERT INTO `jewellery` VALUES (43, 'Diamond/Nose Pin/1.jpg', 'Diamond/Nose Pin/1.jpg', 4, '$1', 'Diamond Carte:1\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (44, 'Diamond/Nose Pin/2.jpg', 'Diamond/Nose Pin/2.jpg', 4, '$2', 'Diamond Carte:2\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (45, 'Diamond/Nose Pin/3.jpg', 'Diamond/Nose Pin/3.jpg', 4, '$3', 'Diamond Carte:3\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (46, 'Diamond/Nose Pin/4.jpg', 'Diamond/Nose Pin/4.jpg', 4, '$4', 'Diamond carte:4\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (47, 'Diamond/Nose Pin/5.jpg', 'Diamond/Nose Pin/5.jpg', 4, '$5', 'Diamond Carte:5\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (48, 'Diamond/Nose Pin/6.jpg', 'Diamond/Nose Pin/6.jpg', 4, '$6', 'Diamond Carte:6\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (49, 'Diamond/Nose Pin/7.jpg', 'Diamond/Nose Pin/7.jpg', 4, '$7', 'Diamond Carte:7\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (50, 'Diamond/Nose Pin/8.jpg', 'Diamond/Nose Pin/8.jpg', 4, '$8', 'Diamond Carte:8\r\nGold  Carte:24');
INSERT INTO `jewellery` VALUES (51, 'Diamond/Nose Pin/9.jpg', 'Diamond/Nose Pin/9.jpg', 4, '$9', 'Diamond Carte:9\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (52, 'Diamond/Nose Pin/10.jpg', 'Diamond/Nose Pin/10.jpg', 4, '$10', 'Diamond Carte:10\r\nGold Carte:24');
INSERT INTO `jewellery` VALUES (53, 'Diamond/Pendant Set/1.jpg', 'Diamond/Pendant Set/1.jpg', 6, '$30', 'Diamond Carte:25');
INSERT INTO `jewellery` VALUES (54, 'Diamond/Pendant Set/2.jpg', 'Diamond/Pendant Set/2.jpg', 6, '$25', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (55, 'Diamond/Pendant Set/3.jpg', 'Diamond/Pendant Set/3.jpg', 6, '$20', 'Diamond Carte:10');
INSERT INTO `jewellery` VALUES (56, 'Diamond/Pendant Set/4.jpg', 'Diamond/Pendant Set/4.jpg', 6, '$30', 'Diamond Carte: 25');
INSERT INTO `jewellery` VALUES (57, 'Diamond/Pendant Set/5.jpg', 'Diamond/Pendant Set/5.jpg', 6, '$20', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (72, 'Diamond/Pendants/1.jpg', 'Diamond/Pendants/1.jpg', 7, '$20', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (59, 'Diamond/Pendant Set/6.jpg', 'Diamond/Pendant Set/6.jpg', 6, '$35', 'Diamond Carte:30');
INSERT INTO `jewellery` VALUES (60, 'Diamond/Pendant Set/7.jpg', 'Diamond/Pendant Set/7.jpg', 6, '$22', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (61, 'Diamond/Pendant Set/8.jpg', 'Diamond/Pendant Set/8.jpg', 6, '$25', 'Diamond Carte:17');
INSERT INTO `jewellery` VALUES (62, 'Diamond/Pendant Set/9.jpg', 'Diamond/Pendant Set/9.jpg', 6, '$29', 'Diamond Carte:20');
INSERT INTO `jewellery` VALUES (63, 'Diamond/Pendant Set/10.jpg', 'Diamond/Pendant Set/10.jpg', 6, '$19', 'Diamond Carte:20\r\n');
INSERT INTO `jewellery` VALUES (65, 'Diamond/Pendants/2.jpg', 'Diamond/Pendants/2.jpg', 7, '$6', 'Diamond Carte:20');
INSERT INTO `jewellery` VALUES (66, 'Diamond/Pendants/3.jpg', 'Diamond/Pendants/3.jpg', 7, '$7', 'Diamond Carte:10\r\n');
INSERT INTO `jewellery` VALUES (67, 'Diamond/Pendants/4.jpg', 'Diamond/Pendants/4.jpg', 7, '$8', 'Diamond Carte: 12');
INSERT INTO `jewellery` VALUES (68, 'Diamond/Pendants/5.jpg', 'Diamond/Pendants/5.jpg', 7, '$9', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (69, 'Diamond/Pendants/6.jpg', 'Diamond/Pendants/6.jpg', 7, '$10', 'Diamond Carte:20\r\n');
INSERT INTO `jewellery` VALUES (70, 'Diamond/Pendants/9.jpg', 'Diamond/Pendants/9.jpg', 7, '$13', 'Diamond Carte:15\r\n');
INSERT INTO `jewellery` VALUES (71, 'Diamond/Pendants/10.jpg', 'Diamond/Pendants/10.jpg', 7, '$20', 'Diamond Carte:25');
INSERT INTO `jewellery` VALUES (73, 'Diamond/Pendants/7.jpg', 'Diamond/Pendants/7.jpg', 7, '$30', 'Diamond Carte:15\r\n');
INSERT INTO `jewellery` VALUES (74, 'Diamond/Pendants/8.jpg', 'Diamond/Pendants/8.jpg', 7, '$35', 'Diamond Carte:15');
INSERT INTO `jewellery` VALUES (75, 'Diamond/Pendants/11.jpg', 'Diamond/Pendants/11.jpg', 7, '$40', 'Diamond Carte:20');
INSERT INTO `jewellery` VALUES (84, 'Gold/Bangles/5.jpg', 'Gold/Bangles/5.jpg', 9, '$130', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (85, 'Gold/Bangles/6.jpg', 'Gold/Bangles/6.jpg', 9, '$135', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (83, 'Gold/Bangles/4.jpg', 'Gold/Bangles/4.jpg', 9, '$125', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (82, 'Gold/Bangles/3.jpg', 'Gold/Bangles/3.jpg', 9, '$120', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (86, 'Gold/Bangles/7.jpg', 'Gold/Bangles/7.jpg', 9, '$140', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (87, 'Gold/Bangles/8.jpg', 'Gold/Bangles/8.jpg', 9, '$145', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (88, 'Gold/Bangles/9.jpg', 'Gold/Bangles/9.jpg', 9, '$150', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (89, 'Gold/Bangles/10.jpg', 'Gold/Bangles/10.jpg', 9, '$112', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (90, 'Gold/Ear Rings/1.jpg', 'Gold/Ear Rings/1.jpg', 10, '$5', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (91, 'Gold/Ear Rings/2.jpg', 'Gold/Ear Rings/2.jpg', 10, '$6', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (92, 'Gold/Ear Rings/3.jpg', 'Gold/Ear Rings/3.jpg', 10, '$6', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (93, 'Gold/Ear Rings/4.jpg', 'Gold/Ear Rings/4.jpg', 10, '$7', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (94, 'Gold/Ear Rings/5.jpg', 'Gold/Ear Rings/5.jpg', 10, '$9', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (95, 'Gold/Ear Rings/6.jpg', 'Gold/Ear Rings/6.jpg', 10, '$11', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (96, 'Gold/Ear Rings/7.jpg', 'Gold/Ear Rings/7.jpg', 10, '$12', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (97, 'Gold/Ear Rings/8.jpg', 'Gold/Ear Rings/8.jpg', 10, '$13', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (98, 'Gold/Ear Rings/9.jpg', 'Gold/Ear Rings/9.jpg', 10, '$13', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (99, 'Gold/Ear Rings/10.jpg', 'Gold/Ear Rings/10.jpg', 10, '$14', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (100, 'Gold/Lady Rings/1.jpg', 'Gold/Lady Rings/1.jpg', 35, '$5', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (101, 'Gold/Lady Rings/2.jpg', 'Gold/Lady Rings/2.jpg', 35, '$6', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (102, 'Gold/Lady Rings/3.jpg', 'Gold/Lady Rings/3.jpg', 35, '$7', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (103, 'Gold/Lady Rings/4.jpg', 'Gold/Lady Rings/4.jpg', 35, '$8', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (104, 'Gold/Lady Rings/5.jpg', 'Gold/Lady Rings/5.jpg', 35, '$9', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (105, 'Gold/Lady Rings/6.jpg', 'Gold/Lady Rings/6.jpg', 35, '$10', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (106, 'Gold/Lady Rings/7.jpg', 'Gold/Lady Rings/7.jpg', 35, '$11', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (107, 'Gold/Lady Rings/8.jpg', 'Gold/Lady Rings/8.jpg', 35, '$12', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (108, 'Gold/Lady Rings/9.jpg', 'Gold/Lady Rings/9.jpg', 35, '$14', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (109, 'Gold/Lady Rings/10.jpg', 'Gold/Lady Rings/10.jpg', 35, '$15', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (110, 'Gold/Man Rings/1.jpg', 'Gold/Man Rings/1.jpg', 36, '$5', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (111, 'Gold/Man Rings/2.jpg', 'Gold/Man Rings/2.jpg', 36, '$6', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (112, 'Gold/Man Rings/3.jpg', 'Gold/Man Rings/3.jpg', 36, '$7', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (113, 'Gold/Man Rings/4.jpg', 'Gold/Man Rings/4.jpg', 36, '$8', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (114, 'Gold/Man Rings/5.jpg', 'Gold/Man Rings/5.jpg', 36, '$8', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (115, 'Gold/Man Rings/6.jpg', 'Gold/Man Rings/6.jpg', 36, '$9', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (116, 'Gold/Man Rings/7.jpg', 'Gold/Man Rings/7.jpg', 36, '$10', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (117, 'Gold/Man Rings/8.jpg', 'Gold/Man Rings/8.jpg', 36, '$11', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (118, 'Gold/Mang Tika/1.jpg', 'Gold/Mang Tika/1.jpg', 11, '$1', '1 Gram');
INSERT INTO `jewellery` VALUES (119, 'Gold/Mang Tika/2.jpg', 'Gold/Mang Tika/2.jpg', 11, '$2', '1 Gram');
INSERT INTO `jewellery` VALUES (120, 'Gold/Mang Tika/3.jpg', 'Gold/Mang Tika/3.jpg', 11, '$3', '1 Gram');
INSERT INTO `jewellery` VALUES (121, 'Gold/Mang Tika/4.jpg', 'Gold/Mang Tika/4.jpg', 11, '$4', '1 Gram');
INSERT INTO `jewellery` VALUES (122, 'Gold/Mang Tika/5.jpg', 'Gold/Mang Tika/5.jpg', 11, '$5', '1 Gram');
INSERT INTO `jewellery` VALUES (123, 'Gold/Mang Tika/6.jpg', 'Gold/Mang Tika/6.jpg', 11, '$6', '1 Gram');
INSERT INTO `jewellery` VALUES (124, 'Gold/Mang Tika/7.jpg', 'Gold/Mang Tika/7.jpg', 11, '$7', '1 Gram');
INSERT INTO `jewellery` VALUES (125, 'Gold/Mang Tika/8.jpg', 'Gold/Mang Tika/8.jpg', 11, '$8', '1 Gram');
INSERT INTO `jewellery` VALUES (126, 'Gold/Mang Tika/9.jpg', 'Gold/Mang Tika/9.jpg', 11, '$9', '1 Gram');
INSERT INTO `jewellery` VALUES (127, 'Gold/Mang Tika/10.jpg', 'Gold/Mang Tika/10.jpg', 11, '$10', '1 Gram');
INSERT INTO `jewellery` VALUES (128, 'Gold/Mangalsutra/1.jpg', 'Gold/Mangalsutra/1.jpg', 12, '$10', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (129, 'Gold/Mangalsutra/2.jpg', 'Gold/Mangalsutra/2.jpg', 12, '$12', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (130, 'Gold/Mangalsutra/3.jpg', 'Gold/Mangalsutra/3.jpg', 12, '$14', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (131, 'Gold/Mangalsutra/4.jpg', 'Gold/Mangalsutra/4.jpg', 12, '$16', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (132, 'Gold/Mangalsutra/5.jpg', 'Gold/Mangalsutra/5.jpg', 12, '$18', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (133, 'Gold/Mangalsutra/6.jpg', 'Gold/Mangalsutra/6.jpg', 12, '$20', 'Gold Carte:');
INSERT INTO `jewellery` VALUES (134, 'Gold/Mangalsutra/7.jpg', 'Gold/Mangalsutra/7.jpg', 12, '$22', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (135, 'Gold/Mangalsutra/8.jpg', 'Gold/Mangalsutra/8.jpg', 12, '$24', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (136, 'Gold/Mangalsutra/9.jpg', 'Gold/Mangalsutra/9.jpg', 12, '$26', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (137, 'Gold/Mangalsutra/10.jpg', 'Gold/Mangalsutra/10.jpg', 12, '$28', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (138, 'Gold/Necklaces/1.jpg', 'Gold/Necklaces/1.jpg', 13, '$20', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (139, 'Gold/Necklaces/2.jpg', 'Gold/Necklaces/2.jpg', 13, '$22', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (140, 'Gold/Necklaces/3.jpg', 'Gold/Necklaces/3.jpg', 13, '$24', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (141, 'Gold/Necklaces/4.jpg', 'Gold/Necklaces/4.jpg', 13, '$24', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (142, 'Gold/Necklaces/5.jpg', 'Gold/Necklaces/5.jpg', 13, '$24', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (143, 'Gold/Necklaces/6.jpg', 'Gold/Necklaces/6.jpg', 13, '$26', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (144, 'Gold/Necklaces/7.jpg', 'Gold/Necklaces/7.jpg', 13, '$30', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (145, 'Gold/Necklaces/8.jpg', 'Gold/Necklaces/8.jpg', 13, '$32', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (146, 'Gold/Necklaces/9.jpg', 'Gold/Necklaces/9.jpg', 13, '$34', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (147, 'Gold/Necklaces/10.jpg', 'Gold/Necklaces/10.jpg', 13, '$36', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (148, 'Gold/Nose Rings/1.jpg', 'Gold/Nose Rings/1.jpg', 14, '$1', '1 Gram');
INSERT INTO `jewellery` VALUES (149, 'Gold/Nose Rings/2.jpg', 'Gold/Nose Rings/2.jpg', 14, '$2', '1 Gram');
INSERT INTO `jewellery` VALUES (150, 'Gold/Nose Rings/3.jpg', 'Gold/Nose Rings/3.jpg', 14, '$3', '1 Gram');
INSERT INTO `jewellery` VALUES (151, 'Gold/Nose Rings/4.jpg', 'Gold/Nose Rings/4.jpg', 14, '$4', '1 Gram');
INSERT INTO `jewellery` VALUES (152, 'Gold/Nose Rings/5.jpg', 'Gold/Nose Rings/5.jpg', 14, '$5', '1 Gram');
INSERT INTO `jewellery` VALUES (153, 'Gold/Nose Rings/6.jpg', 'Gold/Nose Rings/6.jpg', 14, '$6', '1 Gram');
INSERT INTO `jewellery` VALUES (154, 'Gold/Nose Rings/7.jpg', 'Gold/Nose Rings/7.jpg', 14, '$7', '1 Gram');
INSERT INTO `jewellery` VALUES (155, 'Gold/Nose Rings/8.jpg', 'Gold/Nose Rings/8.jpg', 14, '$8', '1 Gram');
INSERT INTO `jewellery` VALUES (156, 'Gold/Pendant Set/1.jpg', 'Gold/Pendant Set/1.jpg', 15, '$20', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (157, 'Gold/Pendant Set/2.jpg', 'Gold/Pendant Set/2.jpg', 15, '$22', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (158, 'Gold/Pendant Set/3.jpg', 'Gold/Pendant Set/3.jpg', 15, '$24', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (159, 'Gold/Pendant Set/4.jpg', 'Gold/Pendant Set/4.jpg', 15, '$26', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (160, 'Gold/Pendant Set/5.jpg', 'Gold/Pendant Set/5.jpg', 15, '$28', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (161, 'Gold/Pendant Set/6.jpg', 'Gold/Pendant Set/6.jpg', 15, '$30', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (162, 'Gold/Pendant Set/7.jpg', 'Gold/Pendant Set/7.jpg', 15, '$32', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (163, 'Gold/Pendant Set/8.jpg', 'Gold/Pendant Set/8.jpg', 15, '$34', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (164, 'Gold/Pendant Set/9.jpg', 'Gold/Pendant Set/9.jpg', 15, '$ 36', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (165, 'Gold/Pendant Set/10.jpg', 'Gold/Pendant Set/10.jpg', 15, '$38', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (166, 'Gold/Pendants/1.jpg', 'Gold/Pendants/1.jpg', 16, '$10', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (167, 'Gold/Pendants/2.jpg', 'Gold/Pendants/2.jpg', 16, '$12', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (168, 'Gold/Pendants/3.jpg', 'Gold/Pendants/3.jpg', 16, '$14', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (169, 'Gold/Pendants/4.jpg', 'Gold/Pendants/4.jpg', 16, '$16', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (170, 'Gold/Pendants/5.jpg', 'Gold/Pendants/5.jpg', 16, '$16', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (171, 'Gold/Pendants/6.jpg', 'Gold/Pendants/6.jpg', 16, '$18', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (172, 'Gold/Pendants/7.jpg', 'Gold/Pendants/7.jpg', 16, '$18', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (173, 'Gold/Pendants/8.jpg', 'Gold/Pendants/8.jpg', 16, '$20', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (174, 'Gold/Pendants/9.jpg', 'Gold/Pendants/9.jpg', 16, '$22', 'Gold Carte:24');
INSERT INTO `jewellery` VALUES (175, 'Gold/Pendants/10.jpg', 'Gold/Pendants/10.jpg', 16, '$24', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (176, 'Gold/Lady Rings/1.jpg', 'Gold/Lady Rings/1.jpg', 35, '$12', 'White Gold Carte: 24 ');
INSERT INTO `jewellery` VALUES (177, 'Gold/Lady Rings/2.jpg', 'Gold/Lady Rings/2.jpg', 35, '$14', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (178, 'Gold/Lady Rings/3.jpg', 'Gold/Lady Rings/3.jpg', 35, '$20', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (179, 'Gold/Lady Rings/4.jpg', 'Gold/Lady Rings/4.jpg', 35, '$22', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (180, 'Gold/Lady Rings/5.jpg', 'Gold/Lady Rings/5.jpg', 35, '$24', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (181, 'Gold/Lady Rings/6.jpg', 'Gold/Lady Rings/6.jpg', 35, '$26', 'Whit Gold Carte:24');
INSERT INTO `jewellery` VALUES (182, 'Gold/Lady Rings/7.jpg', 'Gold/Lady Rings/7.jpg', 35, '$24', 'Whit Gold Carte: 24');
INSERT INTO `jewellery` VALUES (183, 'Gold/Lady Rings/8.jpg', 'Gold/Lady Rings/8.jpg', 35, '$26', 'White Gold Carte:24');
INSERT INTO `jewellery` VALUES (184, 'Gold/Lady Rings/9.jpg', 'Gold/Lady Rings/9.jpg', 35, '$28', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (185, 'Gold/Lady Rings/10.jpg', 'Gold/Lady Rings/10.jpg', 35, '$30', 'White Gold Carte:24');
INSERT INTO `jewellery` VALUES (201, 'Silver/Anklets/7.jpg', 'Silver/Anklets/7.jpg', 21, '$12', 'PureSilver');
INSERT INTO `jewellery` VALUES (199, 'Silver/Anklets/5.jpg', 'Silver/Anklets/5.jpg', 21, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (200, 'Silver/Anklets/6.jpg', 'Silver/Anklets/6.jpg', 21, '$12', 'Pure Silver');
INSERT INTO `jewellery` VALUES (198, 'Silver/Anklets/4.jpg', 'Silver/Anklets/4.jpg', 21, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (197, 'Silver/Anklets/3.jpg', 'Silver/Anklets/3.jpg', 21, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (196, 'Silver/Anklets/2.jpg', 'Silver/Anklets/2.jpg', 21, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (195, 'Silver/Anklets/1.jpg', 'Silver/Anklets/1.jpg', 21, '$5', 'Pure Silver');
INSERT INTO `jewellery` VALUES (194, 'Gold/Man Rings/9.jpg', 'Gold/Man Rings/9.jpg', 36, '$16', 'Gold Carte: 24');
INSERT INTO `jewellery` VALUES (202, 'Silver/Anklets/8.jpg', 'Silver/Anklets/8.jpg', 21, '$14', 'Pure Silver');
INSERT INTO `jewellery` VALUES (203, 'Silver/Anklets/9.jpg', 'Silver/Anklets/9.jpg', 21, '$20', 'PurSilver');
INSERT INTO `jewellery` VALUES (204, 'Silver/Anklets/10.jpg', 'Silver/Anklets/10.jpg', 21, '$18', 'Pure Silver');
INSERT INTO `jewellery` VALUES (205, 'Silver/Armlets/1.jpg', 'Silver/Armlets/1.jpg', 22, '$4', 'Pure Silver');
INSERT INTO `jewellery` VALUES (206, 'Silver/Armlets/2.jpg', 'Silver/Armlets/2.jpg', 22, '$6', 'Pure Silver');
INSERT INTO `jewellery` VALUES (207, 'Silver/Armlets/3.jpg', 'Silver/Armlets/3.jpg', 22, '$8', 'Pure silver');
INSERT INTO `jewellery` VALUES (208, 'Silver/Armlets/4.jpg', 'Silver/Armlets/4.jpg', 22, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (209, 'Silver/Armlets/5.jpg', 'Silver/Armlets/5.jpg', 22, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (210, 'Silver/Armlets/6.jpg', 'Silver/Armlets/6.jpg', 22, '$12', 'Pure Silver');
INSERT INTO `jewellery` VALUES (211, 'Silver/Armlets/7.jpg', 'Silver/Armlets/7.jpg', 22, '$12', 'Pure silver');
INSERT INTO `jewellery` VALUES (212, 'Silver/Armlets/8.jpg', 'Silver/Armlets/8.jpg', 22, '$14', 'Pure Silver');
INSERT INTO `jewellery` VALUES (213, 'Silver/Armlets/9.jpg', 'Silver/Armlets/9.jpg', 22, '$12', 'Pure Silver');
INSERT INTO `jewellery` VALUES (214, 'Silver/Armlets/10.jpg', 'Silver/Armlets/10.jpg', 22, '$16', 'Pure Silver');
INSERT INTO `jewellery` VALUES (215, 'Silver/Bracelet/1.jpg', 'Silver/Bracelet/1.jpg', 23, '$2', 'Pure Silver');
INSERT INTO `jewellery` VALUES (216, 'Silver/Bracelet/2.jpg', 'Silver/Bracelet/2.jpg', 23, '$4', 'Pure Silver');
INSERT INTO `jewellery` VALUES (217, 'Silver/Bracelet/3.jpg', 'Silver/Bracelet/3.jpg', 23, '$6', 'Pure Silver');
INSERT INTO `jewellery` VALUES (218, 'Silver/Bracelet/4.jpg', 'Silver/Bracelet/4.jpg', 23, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (219, 'Silver/Bracelet/5.jpg', 'Silver/Bracelet/5.jpg', 23, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (220, 'Silver/Bracelet/6.jpg', 'Silver/Bracelet/6.jpg', 23, '$12', 'Pure  Silver');
INSERT INTO `jewellery` VALUES (221, 'Silver/Bracelet/7.jpg', 'Silver/Bracelet/7.jpg', 23, '$14', 'Pure silver');
INSERT INTO `jewellery` VALUES (222, 'Silver/Bracelet/8.jpg', 'Silver/Bracelet/8.jpg', 23, '$16', 'Pure Silver');
INSERT INTO `jewellery` VALUES (223, 'Silver/Bracelet/9.jpg', 'Silver/Bracelet/9.jpg', 23, '$6', 'Pure Silver');
INSERT INTO `jewellery` VALUES (224, 'Silver/Bracelet/10.jpg', 'Silver/Bracelet/10.jpg', 23, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (225, 'Silver/Chain/1.jpg', 'Silver/Chain/1.jpg', 28, '$2', 'Pure Silver');
INSERT INTO `jewellery` VALUES (226, 'Silver/Chain/2.jpg', 'Silver/Chain/2.jpg', 28, '$4', 'Pure silver');
INSERT INTO `jewellery` VALUES (227, 'Silver/Chain/3.jpg', 'Silver/Chain/3.jpg', 28, '$6', 'Pure Silverq');
INSERT INTO `jewellery` VALUES (228, 'Silver/Chain/4.jpg', 'Silver/Chain/4.jpg', 28, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (229, 'Silver/Chain/5.jpg', 'Silver/Chain/5.jpg', 28, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (230, 'Silver/Chain/6.jpg', 'Silver/Chain/6.jpg', 28, '$10', 'Pure silver');
INSERT INTO `jewellery` VALUES (231, 'Silver/Chain/7.jpg', 'Silver/Chain/7.jpg', 28, '$12', 'Pure Silver');
INSERT INTO `jewellery` VALUES (232, 'Silver/Chain/8.jpg', 'Silver/Chain/8.jpg', 28, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (233, 'Silver/Chain/9.jpg', 'Silver/Chain/9.jpg', 28, '$14', 'Pure Silver');
INSERT INTO `jewellery` VALUES (234, 'Silver/Chain/10.jpg', 'Silver/Chain/10.jpg', 28, '$10', 'Pure silver');
INSERT INTO `jewellery` VALUES (235, 'Silver/Cuffilinks/1.jpg', 'Silver/Cuffilinks/1.jpg', 27, '$2', 'Pure Silver');
INSERT INTO `jewellery` VALUES (236, 'Silver/Cuffilinks/2.jpg', 'Silver/Cuffilinks/2.jpg', 27, '$4', 'Pure Silver');
INSERT INTO `jewellery` VALUES (237, 'Silver/Cuffilinks/3.jpg', 'Silver/Cuffilinks/3.jpg', 27, '$6', 'Pure Silver');
INSERT INTO `jewellery` VALUES (238, 'Silver/Cuffilinks/4.jpg', 'Silver/Cuffilinks/4.jpg', 27, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (239, 'Silver/Cuffilinks/5.jpg', 'Silver/Cuffilinks/5.jpg', 28, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (240, 'Silver/Cuffilinks/6.jpg', 'Silver/Cuffilinks/6.jpg', 28, '$12', 'Pure Silver');
INSERT INTO `jewellery` VALUES (241, 'Silver/Cuffilinks/7.jpg', 'Silver/Cuffilinks/7.jpg', 28, '$14', 'Pure Silver');
INSERT INTO `jewellery` VALUES (242, 'Silver/Cuffilinks/8.jpg', 'Silver/Cuffilinks/8.jpg', 28, '$16', 'Pure Silver');
INSERT INTO `jewellery` VALUES (243, 'Silver/Cuffilinks/9.jpg', 'Silver/Cuffilinks/9.jpg', 28, '$6', 'Pure Silver');
INSERT INTO `jewellery` VALUES (244, 'Silver/Cuffilinks/10.jpg', 'Silver/Cuffilinks/10.jpg', 28, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (245, 'Silver/EarRings/1.jpg', 'Silver/EarRings/1.jpg', 26, '$5', 'Pure Silver');
INSERT INTO `jewellery` VALUES (246, 'Silver/EarRings/2.jpg', 'Silver/EarRings/2.jpg', 26, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (247, 'Silver/EarRings/3.jpg', 'Silver/EarRings/3.jpg', 26, '$15', 'Pure Silver');
INSERT INTO `jewellery` VALUES (248, 'Silver/EarRings/4.jpg', 'Silver/EarRings/4.jpg', 26, '$20', 'Pure Silver');
INSERT INTO `jewellery` VALUES (249, 'Silver/EarRings/5.jpg', 'Silver/EarRings/5.jpg', 26, '$20', 'Pure Silver');
INSERT INTO `jewellery` VALUES (250, 'Silver/EarRings/6.jpg', 'Silver/EarRings/6.jpg', 26, '$25', 'Pure Silver');
INSERT INTO `jewellery` VALUES (251, 'Silver/EarRings/7.jpg', 'Silver/EarRings/7.jpg', 26, '$30', 'Pure Silver');
INSERT INTO `jewellery` VALUES (252, 'Silver/EarRings/8.jpg', 'Silver/EarRings/8.jpg', 26, '$35', 'Pure Silver');
INSERT INTO `jewellery` VALUES (253, 'Silver/EarRings/9.jpg', 'Silver/EarRings/9.jpg', 26, '$40', 'Pure Silver');
INSERT INTO `jewellery` VALUES (254, 'Silver/EarRings/10.jpg', 'Silver/EarRings/10.jpg', 26, '$45', 'Pure Silver');
INSERT INTO `jewellery` VALUES (255, 'Silver/Hair Pin/1.jpg', 'Silver/Hair Pin/1.jpg', 25, '$1', 'Silver');
INSERT INTO `jewellery` VALUES (256, 'Silver/Hair Pin/2.jpg', 'Silver/Hair Pin/2.jpg', 25, '$2', 'Silver');
INSERT INTO `jewellery` VALUES (257, 'Silver/Hair Pin/3.jpg', 'Silver/Hair Pin/3.jpg', 25, '$3', 'Silver');
INSERT INTO `jewellery` VALUES (258, 'Silver/Hair Pin/4.jpg', 'Silver/Hair Pin/4.jpg', 25, '$4', 'Silver');
INSERT INTO `jewellery` VALUES (259, 'Silver/Hair Pin/5.jpg', 'Silver/Hair Pin/5.jpg', 25, '$5', 'Silver');
INSERT INTO `jewellery` VALUES (260, 'Silver/Hair Pin/6.jpg', 'Silver/Hair Pin/6.jpg', 25, '$6', 'Silver');
INSERT INTO `jewellery` VALUES (261, 'Silver/Hair Pin/7.jpg', 'Silver/Hair Pin/7.jpg', 25, '$7', 'Silver');
INSERT INTO `jewellery` VALUES (262, 'Silver/Hair Pin/8.jpg', 'Silver/Hair Pin/8.jpg', 25, '$8', 'Silver');
INSERT INTO `jewellery` VALUES (263, 'Silver/Hair Pin/9.jpg', 'Silver/Hair Pin/9.jpg', 25, '$9', 'Silver');
INSERT INTO `jewellery` VALUES (264, 'Silver/Hair Pin/10.jpg', 'Silver/Hair Pin/10.jpg', 25, '$10', 'Silver');
INSERT INTO `jewellery` VALUES (265, 'Silver/Lady Rings/1.jpg', 'Silver/Lady Rings/1.jpg', 32, '$5', 'Pure Silver');
INSERT INTO `jewellery` VALUES (266, 'Silver/Lady Rings/2.jpg', 'Silver/Lady Rings/2.jpg', 32, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (267, 'Silver/Lady Rings/3.jpg', 'Silver/Lady Rings/3.jpg', 32, '$15', 'Pure Silver');
INSERT INTO `jewellery` VALUES (268, 'Silver/Lady Rings/4.jpg', 'Silver/Lady Rings/4.jpg', 32, '$20', 'Pure Silver');
INSERT INTO `jewellery` VALUES (269, 'Silver/Lady Rings/5.jpg', 'Silver/Lady Rings/5.jpg', 32, '$25', 'Pure Silver');
INSERT INTO `jewellery` VALUES (270, 'Silver/Lady Rings/6.jpg', 'Silver/Lady Rings/6.jpg', 32, '$30', 'Pure silver');
INSERT INTO `jewellery` VALUES (271, 'Silver/Lady Rings/7.jpg', 'Silver/Lady Rings/7.jpg', 32, '$35', 'Pure Silver');
INSERT INTO `jewellery` VALUES (272, 'Silver/Lady Rings/8.jpg', 'Silver/Lady Rings/8.jpg', 32, '$40', 'Pure Silver');
INSERT INTO `jewellery` VALUES (273, 'Silver/Lady Rings/9.jpg', 'Silver/Lady Rings/9.jpg', 32, '$45', 'Pure silver');
INSERT INTO `jewellery` VALUES (274, 'Silver/Lady Rings/10.jpg', 'Silver/Lady Rings/10.jpg', 32, '$50', 'Pure Silver');
INSERT INTO `jewellery` VALUES (275, 'Silver/Man Ring/1.jpg', 'Silver/Man Ring/1.jpg', 39, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (276, 'Silver/Man Ring/2.jpg', 'Silver/Man Ring/2.jpg', 39, '$15', 'Pure Silver');
INSERT INTO `jewellery` VALUES (277, 'Silver/Man Ring/3.jpg', 'Silver/Man Ring/3.jpg', 39, '$20', 'Pure Silver');
INSERT INTO `jewellery` VALUES (278, 'Silver/Man Ring/4.jpg', 'Silver/Man Ring/4.jpg', 39, '$25', 'Pure Silver');
INSERT INTO `jewellery` VALUES (279, 'Silver/Man Ring/5.jpg', 'Silver/Man Ring/5.jpg', 39, '$30', 'Pure Silver');
INSERT INTO `jewellery` VALUES (280, 'Silver/Man Ring/6.jpg', 'Silver/Man Ring/6.jpg', 39, '$25', 'Pure Silver');
INSERT INTO `jewellery` VALUES (281, 'Silver/Man Ring/7.jpg', 'Silver/Man Ring/7.jpg', 39, '$40', 'Pure Silver');
INSERT INTO `jewellery` VALUES (282, 'Silver/Man Ring/8.jpg', 'Silver/Man Ring/8.jpg', 39, '$45', 'Pure Silver');
INSERT INTO `jewellery` VALUES (283, 'Silver/Man Ring/9.jpg', 'Silver/Man Ring/9.jpg', 39, '$20', 'Pure Silver');
INSERT INTO `jewellery` VALUES (284, 'Silver/Man Ring/10.jpg', 'Silver/Man Ring/10.jpg', 39, '$50', 'Pure Silver');
INSERT INTO `jewellery` VALUES (285, 'Silver/Pendants/1.jpg', 'Silver/Pendants/1.jpg', 30, '$5', 'Pure Silver');
INSERT INTO `jewellery` VALUES (286, 'Silver/Pendants/2.jpg', 'Silver/Pendants/2.jpg', 30, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (287, 'Silver/Pendants/3.jpg', 'Silver/Pendants/3.jpg', 30, '$15', 'Pure Silver');
INSERT INTO `jewellery` VALUES (288, 'Silver/Pendants/4.jpg', 'Silver/Pendants/4.jpg', 30, '$20', 'Pure Silver');
INSERT INTO `jewellery` VALUES (289, 'Silver/Pendants/5.jpg', 'Silver/Pendants/5.jpg', 30, '$25', 'Pure Silver');
INSERT INTO `jewellery` VALUES (290, 'Silver/Pendants/6.jpg', 'Silver/Pendants/6.jpg', 30, '$30', 'Pure Silver');
INSERT INTO `jewellery` VALUES (291, 'Silver/Pendants/7.jpg', 'Silver/Pendants/7.jpg', 30, '$35', 'Pure Silver');
INSERT INTO `jewellery` VALUES (292, 'Silver/Pendants/8.jpg', 'Silver/Pendants/8.jpg', 30, '$40', 'Pure Silver');
INSERT INTO `jewellery` VALUES (293, 'Silver/Pendants/9.jpg', 'Silver/Pendants/9.jpg', 30, '$40', 'Pure Silver');
INSERT INTO `jewellery` VALUES (294, 'Silver/Pendants/10.jpg', 'Silver/Pendants/10.jpg', 30, '$50', 'Pure Silver');
INSERT INTO `jewellery` VALUES (295, 'Silver/Pendants Sets/1.jpg', 'Silver/Pendants Sets/1.jpg', 31, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (296, 'Silver/Pendants Sets/2.jpg', 'Silver/Pendants Sets/2.jpg', 31, '$15', 'Pure Solver');
INSERT INTO `jewellery` VALUES (297, 'Silver/Pendants Sets/3.jpg', 'Silver/Pendants Sets/3.jpg', 31, '$20', 'Pure silver');
INSERT INTO `jewellery` VALUES (298, 'Silver/Pendants Sets/4.jpg', 'Silver/Pendants Sets/4.jpg', 31, '$25', 'Pure silver');
INSERT INTO `jewellery` VALUES (299, 'Silver/Pendants Sets/5.jpg', 'Silver/Pendants Sets/5.jpg', 30, '$25', 'Pure silver');
INSERT INTO `jewellery` VALUES (300, 'Silver/Pendants Sets/6.jpg', 'Silver/Pendants Sets/6.jpg', 31, '$30', 'Pure Silver');
INSERT INTO `jewellery` VALUES (301, 'Silver/Pendants Sets/7.jpg', 'Silver/Pendants Sets/7.jpg', 31, '$35', 'Pure Silver');
INSERT INTO `jewellery` VALUES (302, 'Silver/Pendants Sets/8.jpg', 'Silver/Pendants Sets/8.jpg', 31, '$40', 'Pure Silver');
INSERT INTO `jewellery` VALUES (303, 'Silver/Pendants Sets/9.jpg', 'Silver/Pendants Sets/9.jpg', 31, '$45', 'Pure Silver');
INSERT INTO `jewellery` VALUES (304, 'Silver/Pendants Sets/10.jpg', 'Silver/Pendants Sets/10.jpg', 31, '$50', 'Pure Silver');
INSERT INTO `jewellery` VALUES (305, 'Silver/Toe Ring/1.jpg', 'Silver/Toe Ring/1.jpg', 40, '$1', 'Pure Silver');
INSERT INTO `jewellery` VALUES (306, 'Silver/Toe Ring/2.jpg', 'Silver/Toe Ring/2.jpg', 40, '$2', 'Pure Silver');
INSERT INTO `jewellery` VALUES (307, 'Silver/Toe Ring/3.jpg', 'Silver/Toe Ring/3.jpg', 40, '$3', 'Pure Silver');
INSERT INTO `jewellery` VALUES (308, 'Silver/Toe Ring/4.jpg', 'Silver/Toe Ring/4.jpg', 40, '$4', 'Pure Silver');
INSERT INTO `jewellery` VALUES (309, 'Silver/Toe Ring/5.jpg', 'Silver/Toe Ring/5.jpg', 40, '$5', 'Pure Silver');
INSERT INTO `jewellery` VALUES (310, 'Silver/Toe Ring/6.jpg', 'Silver/Toe Ring/6.jpg', 40, '$6', 'Pure Silver');
INSERT INTO `jewellery` VALUES (311, 'Silver/Toe Ring/7.jpg', 'Silver/Toe Ring/7.jpg', 40, '$7', 'Pure Silver');
INSERT INTO `jewellery` VALUES (312, 'Silver/Toe Ring/8.jpg', 'Silver/Toe Ring/8.jpg', 40, '$8', 'Pure Silver');
INSERT INTO `jewellery` VALUES (313, 'Silver/Toe Ring/9.jpg', 'Silver/Toe Ring/9.jpg', 40, '$9', 'Pure Silver');
INSERT INTO `jewellery` VALUES (314, 'Silver/Toe Ring/10.jpg', 'Silver/Toe Ring/10.jpg', 40, '$10', 'Pure Silver');
INSERT INTO `jewellery` VALUES (315, 'Silver/Brooches/1.jpg', 'Silver/Brooches/1.jpg', 24, '$1', 'Silver');
INSERT INTO `jewellery` VALUES (316, 'Silver/Brooches/2.jpg', 'Silver/Brooches/2.jpg', 24, '$2', 'Silver');
INSERT INTO `jewellery` VALUES (317, 'Silver/Brooches/3.jpg', 'Silver/Brooches/3.jpg', 24, '$3', 'Silver');
INSERT INTO `jewellery` VALUES (318, 'Silver/Brooches/4.jpg', 'Silver/Brooches/4.jpg', 24, '$4', 'Silver');
INSERT INTO `jewellery` VALUES (319, 'Silver/Brooches/5.jpg', 'Silver/Brooches/5.jpg', 24, '$5', 'Silver');
INSERT INTO `jewellery` VALUES (320, 'Silver/Brooches/6.jpg', 'Silver/Brooches/6.jpg', 24, '$6', 'Silver');
INSERT INTO `jewellery` VALUES (321, 'Silver/Brooches/7.jpg', 'Silver/Brooches/7.jpg', 24, '$7', 'Silver');
INSERT INTO `jewellery` VALUES (322, 'Silver/Brooches/8.jpg', 'Silver/Brooches/8.jpg', 24, '$8', 'Silver');
INSERT INTO `jewellery` VALUES (323, 'Silver/Brooches/9.jpg', 'Silver/Brooches/9.jpg', 24, '$9', 'Silver');
INSERT INTO `jewellery` VALUES (324, 'Silver/Brooches/10.jpg', 'Silver/Brooches/10.jpg', 24, '$10', 'Silver');

-- --------------------------------------------------------

-- 
-- Table structure for table `sub_category`
-- 

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL auto_increment,
  `scate_name` varchar(50) collate latin1_general_ci NOT NULL default '',
  `parent_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `sub_category`
-- 

INSERT INTO `sub_category` VALUES (1, 'Bangles', 4);
INSERT INTO `sub_category` VALUES (2, 'EarRings', 4);
INSERT INTO `sub_category` VALUES (3, 'Necklaces', 4);
INSERT INTO `sub_category` VALUES (4, 'Nose Pin', 4);
INSERT INTO `sub_category` VALUES (6, 'Pendant Set', 4);
INSERT INTO `sub_category` VALUES (7, 'Pendants', 4);
INSERT INTO `sub_category` VALUES (8, 'LadyRings', 4);
INSERT INTO `sub_category` VALUES (9, 'Bangles', 3);
INSERT INTO `sub_category` VALUES (10, 'Ear Rings', 3);
INSERT INTO `sub_category` VALUES (11, 'Mang Tika', 3);
INSERT INTO `sub_category` VALUES (12, 'Mangalsutra', 3);
INSERT INTO `sub_category` VALUES (13, 'Necklaces', 3);
INSERT INTO `sub_category` VALUES (14, 'Nose Rings', 3);
INSERT INTO `sub_category` VALUES (15, 'Pendant Set', 3);
INSERT INTO `sub_category` VALUES (16, 'Pendants', 3);
INSERT INTO `sub_category` VALUES (21, 'Anklets', 1);
INSERT INTO `sub_category` VALUES (22, 'Armlets', 1);
INSERT INTO `sub_category` VALUES (23, 'Bracelet', 1);
INSERT INTO `sub_category` VALUES (24, 'Brooches', 1);
INSERT INTO `sub_category` VALUES (25, 'Hair Pin', 1);
INSERT INTO `sub_category` VALUES (26, 'EarRings', 1);
INSERT INTO `sub_category` VALUES (27, 'Cuffilinks', 1);
INSERT INTO `sub_category` VALUES (28, 'Chain', 1);
INSERT INTO `sub_category` VALUES (39, 'ManRings', 1);
INSERT INTO `sub_category` VALUES (30, 'Pendants', 1);
INSERT INTO `sub_category` VALUES (31, 'Pendants Sets', 1);
INSERT INTO `sub_category` VALUES (32, 'Lady Rings', 1);
INSERT INTO `sub_category` VALUES (35, 'LadyRings', 3);
INSERT INTO `sub_category` VALUES (36, 'ManRings', 3);
INSERT INTO `sub_category` VALUES (40, 'ToeRings', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) collate latin1_general_ci NOT NULL,
  `UserId` varchar(30) collate latin1_general_ci NOT NULL,
  `Password` varchar(30) collate latin1_general_ci NOT NULL,
  `active` binary(1) NOT NULL default 'Y',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'Jigar Kachhia', 'jigar', '12345', 0x59);

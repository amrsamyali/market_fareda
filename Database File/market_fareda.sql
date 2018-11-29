-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 12, 2017 at 02:37 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `market_fareda`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `day`
-- 

CREATE TABLE `day` (
  `id` int(100) NOT NULL auto_increment,
  `casherr` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `time` time NOT NULL,
  `sale_pro` text NOT NULL,
  `total` int(100) NOT NULL,
  `maksb` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

-- 
-- Dumping data for table `day`
-- 

INSERT INTO `day` VALUES (1, 'amr', '2017-08-06', '18:37:22', 'hhhhhhhhhh', 6, '');
INSERT INTO `day` VALUES (3, 'amr samy', '2017-08-06', '18:42:45', ' فلامنكو سوداني2', 3, '');
INSERT INTO `day` VALUES (4, 'amr samy', '2017-08-06', '18:47:32', ' فلامنكو سوداني2 ملتو ميني10', 23, '');
INSERT INTO `day` VALUES (5, 'amr samy', '2017-08-06', '18:47:48', ' فلامنكو سوداني2 ملتو ميني10 كنز كبير 3 عصير بيتي 10', 73, '');
INSERT INTO `day` VALUES (6, 'amr samy', '2017-08-06', '18:51:44', '', 0, '');
INSERT INTO `day` VALUES (7, 'amr samy', '2017-08-07', '11:08:33', ' عصير بيتي 4 فلامنكو سوداني 4 اريل ب2ج1 كنز كبير 1 ملتو ميني4', 35, '');
INSERT INTO `day` VALUES (8, 'amr samy', '2017-08-07', '13:24:24', ' فلامنكو سوداني2', 3, '');
INSERT INTO `day` VALUES (9, 'amr samy', '2017-08-07', '13:24:44', ' فلامنكو سوداني2', 3, '');
INSERT INTO `day` VALUES (10, 'amr samy', '2017-08-07', '13:25:11', ' فلامنكو سوداني2', 3, '');
INSERT INTO `day` VALUES (11, 'amr samy', '2017-08-07', '13:56:07', '', 0, '');
INSERT INTO `day` VALUES (12, 'amr samy', '2017-08-09', '14:36:09', '', 0, '');
INSERT INTO `day` VALUES (13, 'amr samy', '2017-08-09', '14:40:49', '', 0, '');
INSERT INTO `day` VALUES (14, 'amr samy', '2017-08-09', '14:42:53', ' فلامنكو سوداني3', 5, '');
INSERT INTO `day` VALUES (15, 'amr samy', '2017-08-09', '15:32:57', ' فلامنكو سوداني 4 كنز كبير 5', 31, '');
INSERT INTO `day` VALUES (16, 'amr samy', '2017-08-09', '15:37:18', ' ملتو ميني2', 4, '');
INSERT INTO `day` VALUES (17, 'amr samy', '2017-08-09', '15:39:14', ' ملتو ميني2', 4, '');
INSERT INTO `day` VALUES (18, 'amr samy', '2017-08-09', '15:51:27', ' ملتو ميني2', 4, '0.4');
INSERT INTO `day` VALUES (19, 'amr samy', '2017-08-09', '15:52:31', ' ملتو ميني2 كنز كبير 2', 14, '0.5');
INSERT INTO `day` VALUES (20, 'amr samy', '2017-08-09', '15:54:26', ' ملتو ميني2', 4, '0.4');
INSERT INTO `day` VALUES (21, 'amr samy', '2017-08-09', '15:55:43', ' ملتو ميني2 كنز كبير 2', 14, '0.9');
INSERT INTO `day` VALUES (22, 'amr samy', '2017-08-09', '16:03:16', ' فلامنكو سوداني 4', 6, '0.72');
INSERT INTO `day` VALUES (23, 'amr samy', '2017-08-10', '16:15:58', ' كنز كبير2', 10, '0.5');
INSERT INTO `day` VALUES (24, 'amr samy', '2017-08-10', '16:32:18', ' كرانش2', 4, '0.32');
INSERT INTO `day` VALUES (25, 'amr samy', '2017-08-10', '16:37:34', ' كنز كبير3 اريل ب2ج3', 21, '1.35');
INSERT INTO `day` VALUES (26, 'amr samy', '2017-08-10', '16:40:16', '', 0, '0');
INSERT INTO `day` VALUES (27, 'amr samy', '2017-08-10', '16:40:29', ' ملتو ميني8', 16, '1.6');
INSERT INTO `day` VALUES (28, 'amr samy', '2017-08-10', '22:12:29', '', 0, '0');
INSERT INTO `day` VALUES (29, 'amr samy', '2017-08-10', '22:13:03', ' ملتو ميني4', 8, '0.8');
INSERT INTO `day` VALUES (30, 'amr samy', '2017-08-10', '22:13:19', ' ملتو ميني2', 4, '0.4');
INSERT INTO `day` VALUES (31, 'amr samy', '2017-08-11', '23:37:20', '', 0, '0');
INSERT INTO `day` VALUES (32, 'amr samy', '2017-08-11', '23:38:22', ' ملتو ميني5 كنز كبير 10', 60, '3.5');
INSERT INTO `day` VALUES (33, 'amr samy', '2017-08-11', '23:39:18', ' ملتو ميني5 كنز كبير 10', 60, '3.5');
INSERT INTO `day` VALUES (34, 'amr samy', '2017-08-11', '23:39:42', ' ملتو ميني5 كنز كبير 10 عصير بيتي 3', 60, '3.5');
INSERT INTO `day` VALUES (35, 'amr samy', '2017-08-11', '23:41:20', ' ملتو ميني2', 4, '0.4');
INSERT INTO `day` VALUES (36, 'amr samy', '2017-08-11', '23:41:38', ' ملتو ميني5 كنز كبير 10', 60, '3.5');
INSERT INTO `day` VALUES (37, 'amr samy', '2017-08-11', '23:42:07', ' ملتو ميني2 كنز كبير 10 لبن جهينه3', 93, '7.4');
INSERT INTO `day` VALUES (38, 'amr samy', '2017-08-11', '23:44:17', '', 0, '0');
INSERT INTO `day` VALUES (39, 'amr samy', '2017-08-11', '23:44:40', ' ملتو ميني5 كنز كبير 10', 60, '3.5');
INSERT INTO `day` VALUES (40, 'amr samy', '2017-08-11', '23:44:57', ' ملتو ميني2 كنز كبير 10', 54, '2.9');
INSERT INTO `day` VALUES (41, 'amr samy', '2017-08-11', '23:46:52', ' ملتو ميني2', 4, '0.4');
INSERT INTO `day` VALUES (42, 'amr samy', '2017-08-11', '02:50:48', ' ملتو ميني2', 4, '0.4');
INSERT INTO `day` VALUES (43, 'amr samy', '2017-08-12', '01:31:19', ' لبن جهينه3 لبن بخيره3', 72, '7.5');

-- --------------------------------------------------------

-- 
-- Table structure for table `goods`
-- 

CREATE TABLE `goods` (
  `id` int(100) NOT NULL auto_increment,
  `goods_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `sale` varchar(100) NOT NULL,
  `Wholesale` varchar(100) NOT NULL,
  `maksb` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `goods`
-- 

INSERT INTO `goods` VALUES (1, 'فلامنكو سوداني ', 6061, '1.5', '15.5', '.19');
INSERT INTO `goods` VALUES (2, 'ملتو ميني ', 1662, '2', '30', '.20');
INSERT INTO `goods` VALUES (3, 'تيجر', 7000, '2', '20', '.16');
INSERT INTO `goods` VALUES (5, 'كنز كبير', 7883, '5', '105', '.25');
INSERT INTO `goods` VALUES (8, 'اريل ب2ج', 27, '2', '29', '.20');
INSERT INTO `goods` VALUES (9, 'كرانش', 998, '2', '20', '.16');
INSERT INTO `goods` VALUES (10, 'بريل كنز', 1000, '6', '120', '.5');
INSERT INTO `goods` VALUES (11, 'لبن جهينه', 2006, '13', '120', '1.5');
INSERT INTO `goods` VALUES (12, 'لبن بخيره', 197, '11', '120', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `masaref`
-- 

CREATE TABLE `masaref` (
  `id` int(100) NOT NULL auto_increment,
  `date` date NOT NULL,
  `sarf` varchar(100) NOT NULL,
  `money` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `masaref`
-- 

INSERT INTO `masaref` VALUES (2, '2017-08-10', 'مرتبات', '200');
INSERT INTO `masaref` VALUES (3, '2017-08-10', 'كهربا', '100');
INSERT INTO `masaref` VALUES (4, '2017-08-10', 'أمان', '500');
INSERT INTO `masaref` VALUES (10, '2017-08-10', 'مرتبات', '200');
INSERT INTO `masaref` VALUES (9, '2017-08-10', 'أمان', '100');
INSERT INTO `masaref` VALUES (7, '2017-08-10', 'كهربا', '200');
INSERT INTO `masaref` VALUES (8, '2017-08-10', 'مرتبات', '100');
INSERT INTO `masaref` VALUES (11, '2017-08-10', 'كهربا', '200');
INSERT INTO `masaref` VALUES (12, '2017-08-10', 'كهربا', '300');
INSERT INTO `masaref` VALUES (13, '2017-08-10', 'كهربا', '100');
INSERT INTO `masaref` VALUES (14, '2017-08-10', 'كهربا', '300');
INSERT INTO `masaref` VALUES (15, '2017-08-10', 'أمان', '200');
INSERT INTO `masaref` VALUES (16, '2017-08-10', 'مرتبات', '500');

-- --------------------------------------------------------

-- 
-- Table structure for table `person`
-- 

CREATE TABLE `person` (
  `id` int(100) NOT NULL auto_increment,
  `user_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type_id` int(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `person`
-- 

INSERT INTO `person` VALUES (1, 'market fareda', '01140203428', 'market fareda', 1);
INSERT INTO `person` VALUES (2, 'amr samy', '01140203428', '3456780', 2);
INSERT INTO `person` VALUES (3, 'mohamed samy', '8809090909', '123', 2);
INSERT INTO `person` VALUES (4, 'amr', '44', '3', 1);
INSERT INTO `person` VALUES (5, 'liza', '01140203428', '4343', 2);
INSERT INTO `person` VALUES (6, 'ahmed', '4556677', 'ssammafssammaf', 2);
INSERT INTO `person` VALUES (7, 'amr', '44', '7', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `type`
-- 

CREATE TABLE `type` (
  `id` int(100) NOT NULL auto_increment,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `type`
-- 

INSERT INTO `type` VALUES (1, 'admin');
INSERT INTO `type` VALUES (2, 'casher');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `person`
-- 
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

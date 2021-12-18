
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2017 at 06:57 AM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u644468346_bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `username`, `password`) VALUES
(1, 'vd1359@gmail.com', '7799037833'),
(3, 'bhanu@admin.com', 'bhanukeerthibumchik');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `dest` varchar(100) NOT NULL,
  `dir` varchar(20) NOT NULL,
  `sdir` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `filename`, `dname`, `cost`, `dest`, `dir`, `sdir`, `date`) VALUES
(15, '134a2613ed0856519262a08ef0445990_store_thumb.jpg', 'bh', '40', 'dresses/anarkalis/134a2613ed0856519262a08ef0445990_store_thumb.jpg', 'dresses', 'anarkalis', '2017-03-01 13:15:54'),
(14, '134a2613ed0856519262a08ef0445990_store_thumb.jpg', 'keertih', '5000', 'fabric/blouses/134a2613ed0856519262a08ef0445990_store_thumb.jpg', 'fabric', 'blouses', '2017-02-27 14:09:07'),
(12, '5c0030b1f0bc9bb066dd3e77c9b19469_store_image.jpg', 'vinith', '400', 'lehengas/crop_top_lehengas/5c0030b1f0bc9bb066dd3e77c9b19469_store_image.jpg', 'lehengas', 'crop_top_lehengas', '2017-02-26 17:03:20'),
(19, '6D5DAE8E-5434-4584-B801-830E8302D3FF.jpg', '1', '1', 'dresses/dress_materials/6D5DAE8E-5434-4584-B801-830E8302D3FF.jpg', 'dresses', 'dress_materials', '2017-04-16 14:27:29'),
(20, '9D892599-3B1A-4D00-ABC7-A7430FE94DEC.jpg', '2', '1', 'dresses/dress_materials/9D892599-3B1A-4D00-ABC7-A7430FE94DEC.jpg', 'dresses', 'dress_materials', '2017-04-16 14:28:08'),
(21, '60774717-6679-436F-A0D1-EA4AF291D470.jpg', '3', '1', 'dresses/dress_materials/60774717-6679-436F-A0D1-EA4AF291D470.jpg', 'dresses', 'dress_materials', '2017-04-16 14:30:09'),
(22, '919542486684.jpg', '4', '1', 'dresses/dress_materials/919542486684.jpg', 'dresses', 'dress_materials', '2017-04-16 14:31:01'),
(23, '635563038568267055.jpg', '5', '1', 'dresses/dress_materials/635563038568267055.jpg', 'dresses', 'dress_materials', '2017-04-16 14:31:55'),
(24, 'IMG_20151111_162818883_HDR.jpg', '6', '1', 'dresses/dress_materials/IMG_20151111_162818883_HDR.jpg', 'dresses', 'dress_materials', '2017-04-16 14:33:17'),
(25, 'Capture.JPG', 'yhfkjvkhk', '100', 'dresses/anarkalis/Capture.JPG', 'dresses', 'anarkalis', '2017-04-16 14:39:05'),
(26, 'WhatsApp_Image_2017-04-12_at_10.06.03_PM.jpeg', 'yfawaf', '100', 'dresses/anarkalis/WhatsApp_Image_2017-04-12_at_10.06.03_PM.jpeg', 'dresses', 'anarkalis', '2017-04-16 14:40:16'),
(27, 'steeve.jpg', '9', '10', 'dresses/dress_materials/steeve.jpg', 'dresses', 'dress_materials', '2017-04-16 14:40:27'),
(28, 'WP_20150306_14_21_14_Pro.jpg', '9', '10', 'dresses/dress_materials/WP_20150306_14_21_14_Pro.jpg', 'dresses', 'dress_materials', '2017-04-16 14:41:21'),
(29, '3359aab7589d815d069a43810794c66a_store_image.jpg', '22', '1111', 'dresses/dress_materials/3359aab7589d815d069a43810794c66a_store_image.jpg', 'dresses', 'dress_materials', '2017-04-16 14:45:50'),
(30, 'pp.jpg', 'hfku', '65', 'dresses/dress_materials/pp.jpg', 'dresses', 'dress_materials', '2017-05-07 07:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fileid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userver`
--

CREATE TABLE IF NOT EXISTS `userver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `line1` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `line2` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `city` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `state` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `userver`
--

INSERT INTO `userver` (`id`, `username`, `password`, `name`, `line1`, `line2`, `city`, `state`, `pincode`, `country`, `mobile`) VALUES
(10, 'vinith@gmail.com', 'vinithreddy', 'vinith', '', '', '', '', '', '', ''),
(11, 'vd1359@gmail.com', 'vfQ3Y/PeA533xLGbgCOoplcoTXtaWPdcgLDyxUYnH/4=', 'vinith', '', '', '', '', '', '91', '7674827422'),
(13, 'dcd@sdyuc.comsf', 'cygGLqlfhk6J7w7XuMGWgpQOJWizlAUFi2Yt5/Q68xM=', 'vew', '', '', '', '', '', '', '7674827422'),
(14, 'vd1359@icloud.com', 'hJ/0NvxDkr630oYR9Y77GMjPFivhvf+rI/0ka4mRDJo=', 'vinith', '', '', '', '', '', '91', '7674827422'),
(16, 'ankojubhanuprakash@gmail.com', 'phfCYbHwOEuxBJVwdTIB/lGmAIF86ESjprp3BlMHRf0=', '', '', '', '', '', '', '91', '8125912099');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

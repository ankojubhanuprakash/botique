-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 02:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botique`
--
CREATE DATABASE IF NOT EXISTS `botique` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `botique`;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `dest` varchar(100) NOT NULL,
  `dir` varchar(20) NOT NULL,
  `sdir` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `filename`, `dname`, `cost`, `dest`, `dir`, `sdir`, `date`) VALUES
(1, 'pp.jpg', 'test', '90', 'dresses/dress_materials/pp.jpg', 'dresses', 'dress_materials', '2017-02-13 14:06:20'),
(2, '3359aab7589d815d069a43810794c66a_store_image.jpg', 'test', '90', 'dresses/dress_materials/3359aab7589d815d069a43810794c66a_store_image.jpg', 'dresses', 'dress_materials', '2017-02-13 14:07:08'),
(3, '134a2613ed0856519262a08ef0445990_store_thumb.jpg', 'llg', '225', 'dresses/long_frocks/134a2613ed0856519262a08ef0445990_store_thumb.jpg', 'dresses', 'long_frocks', '2017-02-16 15:36:13'),
(4, 'fea35e0abfdd1e52864840283e9cdfe9_store_thumb.jpg', 'new', '5000', 'dresses/dress_materials/fea35e0abfdd1e52864840283e9cdfe9_store_thumb.jpg', 'dresses', 'dress_materials', '2017-02-23 13:27:15'),
(5, 'c5a8d57181fd7606076fccf1c78f57b7_store_image.jpg', 'new', '5000', 'dresses/dress_materials/c5a8d57181fd7606076fccf1c78f57b7_store_image.jpg', 'dresses', 'dress_materials', '2017-02-23 13:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2014 at 11:25 PM
-- Server version: 5.5.37-35.1
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nws990_InventoryFast`
--

-- --------------------------------------------------------

--
-- Table structure for table `APIKeys`
--

CREATE TABLE IF NOT EXISTS `APIKeys` (
  `Owner` int(11) NOT NULL,
  `Key` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Owner`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE IF NOT EXISTS `Inventory` (
  `UIN` int(8) unsigned NOT NULL,
  `UPC` varchar(12) NOT NULL DEFAULT '100000000001',
  `Name` tinytext NOT NULL,
  `Count` smallint(6) NOT NULL,
  `Price` decimal(8,2) DEFAULT NULL,
  `Cost` decimal(10,4) DEFAULT NULL,
  `Category` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `Owner` text NOT NULL,
  PRIMARY KEY (`UIN`),
  KEY `UPC` (`UPC`,`Category`),
  KEY `part_of_name` (`Owner`(20))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `InventoryFast_Table`
--

CREATE TABLE IF NOT EXISTS `InventoryFast_Table` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `ItemMovement`
--

CREATE TABLE IF NOT EXISTS `ItemMovement` (
  `UIN` int(8) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Amount` int(11) NOT NULL,
  `Price` decimal(6,2) NOT NULL DEFAULT '0.00' COMMENT 'Average price for each'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserAccounts`
--

CREATE TABLE IF NOT EXISTS `UserAccounts` (
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` tinytext NOT NULL,
  `Email` tinytext NOT NULL,
  `Account` varchar(20) NOT NULL,
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2019 at 07:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `administrator` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `administrator`, `password`, `name`) VALUES
(1, 'admin', 'caf1a3dfb505ffed0d024130f58c5cfa', 'ადმინისტრატორი');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

DROP TABLE IF EXISTS `main_menu`;
CREATE TABLE IF NOT EXISTS `main_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `title_ge` varchar(30) NOT NULL,
  `title_en` varchar(30) NOT NULL,
  `has_child` int(1) NOT NULL,
  `rank` int(3) NOT NULL,
  `is_published` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `name`, `title_ge`, `title_en`, `has_child`, `rank`, `is_published`) VALUES
(1, 'home', 'მთავარი', 'Home', 0, 10, 1),
(2, 'products', 'პროდუქცია', 'Products', 1, 8, 1),
(3, 'contact', 'კონტაქტი', 'Contact', 0, 7, 1),
(4, 'news', 'სიახლეები', 'News', 0, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `rank` int(5) NOT NULL,
  `is_published` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ge`, `title_en`, `rank`, `is_published`, `created_at`) VALUES
(1, 'სათაური 1', 'title 1', 5, 1, '2019-04-25 14:28:49'),
(2, 'სათაური 2', 'title 2', 10, 1, '2019-04-25 14:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `page_title_ge` varchar(60) NOT NULL,
  `page_title_en` varchar(60) NOT NULL,
  `meta_desc_ge` varchar(160) NOT NULL,
  `meta_desc_en` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `page_title_ge`, `page_title_en`, `meta_desc_ge`, `meta_desc_en`) VALUES
(1, 'home', 'მთავარი გვერდი', 'Main Page', 'მეტა აღწერა მთავარი გვერდისთვის', 'meta description for main page'),
(2, 'contact', 'კონტაქტი', 'Contact Page', 'მეტა აღწერა საკონტაქტო გვერდისთვის', 'meta description for contact page'),
(3, 'news', 'სიახლეები', 'News', 'მეტა აღწერა სიახლეების გვერდისთვის', 'meta description for news page');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `parent` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title_ge` varchar(30) NOT NULL,
  `title_en` varchar(30) NOT NULL,
  `rank` int(3) NOT NULL,
  `is_published` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `parent`, `name`, `title_ge`, `title_en`, `rank`, `is_published`) VALUES
(1, 'products', 'laptops', 'ლეპტოპები', 'Laptops', 0, 1),
(2, 'products', 'mobiles', 'მობილურები', 'Mobiles', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

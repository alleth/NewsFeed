-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2013 at 05:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dazo_System`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(35) NOT NULL,
  `Message` varchar(10000) NOT NULL,
  `Post_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `Username`, `Message`, `Post_id`) VALUES
(1, 'alleth_17s', 'fsdfsdfsd', '1'),
(2, 'alleth_17s', 'fdssdf', '1'),
(3, 'alleth_17s', 'gfdg', '1'),
(4, 'alleth_17s', 'fsdfsdf', '2'),
(5, 'alleth_17s', 'fdsfsd', '2'),
(6, 'alleth_17s', 'bhgjjhkjh', '2');

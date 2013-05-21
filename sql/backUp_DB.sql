-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2002 at 07:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myphonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `alleth_17s`
--

CREATE TABLE IF NOT EXISTS `alleth_17s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email_Address` varchar(30) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Contact_Number` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alleth_17s`
--

INSERT INTO `alleth_17s` (`id`, `Firstname`, `Lastname`, `Email_Address`, `Address`, `Contact_Number`) VALUES
(1, 'Alleth Rey', 'Dazo', 'alleth_17s@yahoo.com', 'Guinaona', '63461234567'),
(2, 'Pedro', 'Penduko', 'penPenDako', 'Barangay', '5458855');

-- --------------------------------------------------------

--
-- Table structure for table `list_of_account`
--

CREATE TABLE IF NOT EXISTS `list_of_account` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email_Address` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `Contact_Number` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_account`
--

INSERT INTO `list_of_account` (`id`, `Firstname`, `Lastname`, `Email_Address`, `Username`, `Address`, `Contact_Number`, `Password`) VALUES
(0, 'Alleth Rey', 'Dazo', 'alleth_17s@yahoo.com', 'alleth_17s', 'Guinarona', '63461234567', 'areymoralD'),
(0, 'Pedro', 'Penduko', 'penPenDako@yaho.com', 'penPen', 'Guinarona', '5458855', 'pen');

-- --------------------------------------------------------

--
-- Table structure for table `penpen`
--

CREATE TABLE IF NOT EXISTS `penpen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email_Address` varchar(30) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Contact_Number` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `penpen`
--

INSERT INTO `penpen` (`id`, `Firstname`, `Lastname`, `Email_Address`, `Address`, `Contact_Number`) VALUES
(1, 'Dina', 'karigo', 'dinKar@yahoo.com', 'dinkar', '1234567');

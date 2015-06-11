-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2015 at 10:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donateme`
--

-- --------------------------------------------------------

--
-- Table structure for table `appdata`
--

CREATE TABLE IF NOT EXISTS `appdata` (
  `taskid` int(11) NOT NULL AUTO_INCREMENT,
  `devid` int(11) NOT NULL,
  `appkey` varchar(255) NOT NULL,
  PRIMARY KEY (`taskid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `appdata`
--

INSERT INTO `appdata` (`taskid`, `devid`, `appkey`) VALUES
(1, 525, 'appkey'),
(25, 525, 'appkey2'),
(103, 4, '80ff570ae39b61ff2445a8db15815691');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banid` int(11) NOT NULL AUTO_INCREMENT,
  `userno` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `typeid` int(11) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  PRIMARY KEY (`banid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banid`, `userno`, `startdate`, `enddate`, `typeid`, `contactno`) VALUES
(1, 0, '0000-00-00', '2016-06-11', 0, 'contact'),
(81, 0, '2016-06-05', '2016-06-15', 0, 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `fetchdata`
--

CREATE TABLE IF NOT EXISTS `fetchdata` (
  `banid` int(11) NOT NULL,
  `fetchescount` int(11) NOT NULL,
  `taskid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`taskid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `fetchdata`
--

INSERT INTO `fetchdata` (`banid`, `fetchescount`, `taskid`) VALUES
(1, 30, 1),
(0, 5, 92),
(0, 1, 93),
(0, 1, 94),
(0, 1, 95),
(0, 1, 96),
(0, 1, 97),
(81, 20, 103);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeid`, `type`) VALUES
(1, 'eye'),
(2, 'ear');

-- --------------------------------------------------------

--
-- Table structure for table `typetasklink`
--

CREATE TABLE IF NOT EXISTS `typetasklink` (
  `typeid` int(11) NOT NULL,
  `tasid` int(11) NOT NULL,
  PRIMARY KEY (`typeid`,`tasid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typetasklink`
--

INSERT INTO `typetasklink` (`typeid`, `tasid`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `userno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `isuser` tinyint(1) NOT NULL,
  PRIMARY KEY (`userno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`userno`, `username`, `contactno`, `pwd`, `isuser`) VALUES
(4, 'svvsvd', 'sdvdbsd', 'sfg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

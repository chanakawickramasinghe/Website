-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2020 at 02:31 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partyplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `event_name` char(50) NOT NULL,
  `event_type` char(50) NOT NULL,
  `package` char(50) NOT NULL,
  `venue` char(50) NOT NULL,
  `date` date NOT NULL,
  `start_time` time(3) NOT NULL,
  `end_time` time(3) NOT NULL,
  `num` int(10) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `username`, `event_name`, `event_type`, `package`, `venue`, `date`, `start_time`, `end_time`, `num`) VALUES
(7, '', 'my b day', 'Wedding Ceremonies', 'The Dream Planning Package', 'Devon,Kandy', '0020-02-02', '20:00:00.000', '17:01:00.000', 10),
(9, 'cmw', 'Wedding of Batman', 'Birthday Parties', 'The Birthday Bash Package', 'Devon,Kandy', '2020-01-22', '08:02:00.000', '14:52:00.000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yname` char(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `yname`, `subject`, `message`) VALUES
(16, 'cmw', 'wfkfh', 'fuwihfu'),
(17, 'cmw', 'fwkwj', 'wfuhwuif');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `name` char(100) NOT NULL,
  `username` char(50) NOT NULL,
  `email` char(100) NOT NULL,
  `password` char(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tp` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `username`, `email`, `password`, `address`, `tp`) VALUES
('UCSC', 'ucsc', 'ucsc@cmb.ac.lk', 'd32934b31349d77e70957e057b1bcd28', 'Colombo 07', 112525250),
('cmw', 'cmw', '123@xbn.com', '202cb962ac59075b964b07152d234b70', 'address', 122);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

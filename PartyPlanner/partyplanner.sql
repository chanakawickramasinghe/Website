-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2020 at 10:11 AM
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
  `event_name` char(50) NOT NULL,
  `event_type` char(50) NOT NULL,
  `package` char(50) NOT NULL,
  `venue` char(50) NOT NULL,
  `date` date NOT NULL,
  `start_time` time(3) NOT NULL,
  `end_time` time(3) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_name`, `event_type`, `package`, `venue`, `date`, `start_time`, `end_time`, `num`) VALUES
('my b day', 'Wedding Ceremonies', 'The Wish Planning Package', 'home', '2020-05-05', '08:00:00.000', '16:00:00.000', 100),
('my b day', 'Birthday Parties', 'The Booming Joy Package', 'Devon,Kandy', '2020-02-02', '08:00:00.000', '16:00:00.000', 100),
('my b day', 'Wedding Ceremonies', 'The Birthday Bash Package', 'jvjh', '0019-01-02', '08:59:00.000', '14:00:00.000', 2),
('my b day', 'Wedding Ceremonies', 'The Wish Planning Package', 'home', '2020-05-05', '08:00:00.000', '16:00:00.000', 100),
('Wedding of Batman', 'Birthday Parties', 'The Birthday Bash Package', 'home', '2020-05-05', '05:00:00.000', '18:00:00.000', 123),
('my b day', 'Graduation Parties', 'The Dream Planning Package', 'Devon,Kandy', '0001-02-18', '14:20:00.000', '14:20:00.000', 245),
('my b day', 'Wedding Ceremonies', 'The Dream Planning Package', 'Devon,Kandy', '0020-02-02', '20:00:00.000', '17:01:00.000', 10),
('my b day', 'Birthday Parties', 'The Birthday Bash Package', 'home', '2018-06-06', '08:00:00.000', '16:00:00.000', 200);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `yname`, `subject`, `message`) VALUES
(1, 'admin', 'wjnd', 'wfjfhjjf'),
(2, 'bla', 'wjnd', 'this is a message');

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
('yt', 'yt', 's2@dfs.vd', '202cb962ac59075b964b07152d234b70', 'address', 119000),
('chan', 'bla', '123@bla.com', '202cb962ac59075b964b07152d234b70', 'address', 119);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

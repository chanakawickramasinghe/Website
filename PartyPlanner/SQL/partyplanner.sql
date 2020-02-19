-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2020 at 05:18 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `username`, `event_name`, `event_type`, `package`, `venue`, `date`, `start_time`, `end_time`, `num`) VALUES
(10, 'l', 'my b day', 'Wedding Ceremonies', 'The Dream Planning Package', 'home', '2202-02-02', '02:50:00.000', '14:05:00.000', 53),
(11, 'lah', 'my b day', 'Birthday Parties', 'The Wish Planning Package', 'Devon,Kandy', '2020-02-22', '03:22:00.000', '18:00:00.000', 5),
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `yname`, `subject`, `message`) VALUES
(18, 'admin', 'e2jkhfjk', 'y'),
(20, 'l', 'hello', 'this is a message'),
(21, 'cmw', 'hello', 'this is a message');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tp` int(10) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `username`, `email`, `password`, `address`, `tp`, `user_type`) VALUES
('ucsc', 'ucsc', 'ucsc@cmb.ac.lk', 'd32934b31349d77e70957e057b1bcd28', 'colombo 07', 112525250, 1),
('chanaka', 'cmw', '123@bla.com', '202cb962ac59075b964b07152d234b70', 'address', 119, 0),
('admin', 'admin', 'admin@ucsc.com', '202cb962ac59075b964b07152d234b70', 'address', 1001001001, 1),
('maheshi', 'maheshi', 'maheshi@123.com', '202cb962ac59075b964b07152d234b70', 'address', 1234, 0),
('lahiru', 'l', 's2@dfs.vc', '202cb962ac59075b964b07152d234b70', 'address', 111, 0),
('admin2', 'a2', 's2@dfs.vc', '202cb962ac59075b964b07152d234b70', 'address', 122, 1),
('lahiru', 'lah', 'rl.udayanga96@gmail.com', '202cb962ac59075b964b07152d234b70', 'address', 1234, 0),
('Admin', 'mm', '123@bla.com', 'ed265bc903a5a097f61d3ec064d96d2e', 'fdf', 1234, 0),
('lat', 'abc', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 'address', 222, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

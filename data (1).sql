-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 07:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` varchar(30) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `services` text,
  `service1` text NOT NULL,
  `service2` text NOT NULL,
  `service3` text NOT NULL,
  `service4` text NOT NULL,
  `recentproject1` varchar(40) DEFAULT NULL,
  `recentproject2` varchar(40) NOT NULL,
  `recentproject3` varchar(40) NOT NULL,
  `recentproject4` varchar(40) NOT NULL,
  `recentproject5` varchar(40) NOT NULL,
  `aboutme` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fname`, `lname`, `services`, `service1`, `service2`, `service3`, `service4`, `recentproject1`, `recentproject2`, `recentproject3`, `recentproject4`, `recentproject5`, `aboutme`, `img`, `phone`, `email`, `address`) VALUES
('mohit_398926', 'Mohit', 'Sharma', '	Financial Consult\r\n       Loan Advice\r\n      Banking Expert\r\n					\r\n					', '		Financial Problem regarding house loan				\r\n					', '						\r\n		Financial Problem regarding house loan			', '						\r\n			Financial Problem regarding house loan		', '		Financial Problem regarding house loan				\r\n					', '							Enter Project 1 details..\r\n					', '						Enter Project 2 details..\r\n					', '						Enter Project 3 details..\r\n					', '						Enter Project 4 details..\r\n					', '						Enter Project 5 details..\r\n					', '						Enter Your introduction here..\r\n					', '7.png', 2147483647, 'mohit78@gmail.com', 'Dilshad Garden , New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

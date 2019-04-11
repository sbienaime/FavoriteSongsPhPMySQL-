-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 07:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `favorite_songs`
--
DROP DATABASE IF EXISTS `favorite_songs`;
CREATE DATABASE IF NOT EXISTS `favorite_songs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `favorite_songs`;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_songs`
--

CREATE TABLE `favorite_songs` (
  `id` int(2) NOT NULL,
  `author` varchar(20) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `release_year` year(4) DEFAULT NULL,
  `artist` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite_songs`
--

INSERT INTO `favorite_songs` (`id`, `author`, `title`, `release_year`, `artist`) VALUES
(8, 'Testing ', 'Steve', 2016, '698'),
(9, 'Testing ', 'Steve', 2016, '1994'),
(10, 'Michael', 'Miami', 2001, '1994'),
(11, 'Eriel Garcia', 'Xampp', 2001, 'Clint Laborde'),
(13, 'Steve', 'Love Boat ', 2001, 'Pit Bull'),
(14, 'Sanilia', 'Testing', 2018, 'hjljl');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'MrMoneyMustache', '$2y$10$RHTw9Scb79iG4J3f6xXWH.YIMSonz/bK0SYaZO3ZdkJkAQ2NeWosy', '2019-04-10 12:34:09'),
(2, 'delgado', '$2y$10$heAvuEV6WWmZYZJmNh77yuwmxshiBDI1N3XMdFizdtaXWgaktMLTq', '2019-04-10 21:45:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite_songs`
--
ALTER TABLE `favorite_songs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite_songs`
--
ALTER TABLE `favorite_songs`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

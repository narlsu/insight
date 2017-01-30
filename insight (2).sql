-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2017 at 03:37 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insight`
--

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `title`, `description`, `poster`) VALUES
(1, 'cdfhcfntncfhfn', 'cfhfgjftjfjkftjftjhvgjftjtj', NULL),
(2, 'fgjfgmghm', 'fgmghmfgmfgm', NULL),
(3, 'gjghjghkgh', 'kghkghkghkghkghkghk', NULL),
(4, 'gffgjmfgmfgmfgm', 'fgmfgmfgmfgmfgmfgm', NULL),
(5, 'asdfasdfasdfasdfasdf', 'adfasdfasdfasdfasdfasdfa', NULL),
(6, 'asdfasdfasdfasdfasdf', 'adfasdfasdfasdfasdfasdfa', NULL),
(7, 'asdfasdfasdfasdf', 'asdfasdfasdfasdfasdf', NULL),
(8, 'asdfasdfasdfasdf', 'asdfasdfasdfasdfasdf', NULL),
(9, 'fgjfgkghkghkghk', 'ghkghkghkghkgh,ghlgh,ghm', NULL),
(10, 'fgjfgkghkghkghk', 'ghkghkghkghkgh,ghlgh,ghm', NULL),
(11, 'fgjfgkghkghkghk', 'ghkghkghkghkgh,ghlgh,ghm', NULL),
(12, 'fgjfgjfgjm', 'fgmfgmfgmfgm', NULL),
(13, 'fgjfgjfgjm', 'fgmfgmfgmfgm', NULL),
(14, 'fgjfgjfgjm', 'fgmfgmfgmfgm', NULL),
(15, 'fgjfgjfgjm', 'fgmfgmfgmfgm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(254) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(60) NOT NULL,
  `profile_name` varchar(40) NOT NULL,
  `privilege` enum('user','admin','banned') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `profile_name`, `privilege`) VALUES
(1, 'test@test.com', '0', '0', 'user'),
(2, 'test1@test.com', '0', '0', 'user'),
(3, 'test2@gmail.com', '$2y$10$rnORJT8ULiVkBAk2Pnh2wuQCe.sFSAaj2DeHwBzYm.Tep5IfdbVp.', '', 'user'),
(4, 'test3@gmail.com', '$2y$10$JnkAgbWYanbMT2XPN17DM.jKTWudXbEBeBs6/IrgYOIYb5RWjILru', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

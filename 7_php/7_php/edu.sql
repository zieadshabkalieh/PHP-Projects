-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mark` int(100) NOT NULL,
  `max_mark` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`id`, `name`, `mark`, `max_mark`) VALUES
(1, '7hgfdse', 7, 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mark` int(3) UNSIGNED NOT NULL,
  `max_mark` int(3) UNSIGNED NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `mark`, `max_mark`) VALUES
(1, 'sam', 9, 100),
(2, 'jan', 44, 100),
(3, 'memo', 45, 100),
(4, '7hgfdse', 7, 100),
(5, 'bader Maaz', 8, 100),
(6, 'bader Maaz', 8, 100),
(7, 'bader Maaz', 8, 100),
(8, 'jj', 2, 100),
(9, 'jj', 2, 100),
(10, 'heba', 9, 100),
(11, 'heba', 9, 100),
(12, 'bader1', 55, 100),
(13, 'bader1', 55, 100),
(14, 'bader1', 55, 100),
(15, 'bader1', 55, 100),
(16, 'bader1', 55, 100),
(17, 'bader1', 55, 100),
(18, 'bader1', 55, 100),
(19, 'bader1', 55, 100),
(20, 'bader1', 55, 100),
(21, 'kbhvjfgc', 8, 100),
(22, 'kbhvjfgc', 8, 100),
(23, 'ddd', 44, 100),
(24, 'heba', 7, 100),
(25, 'bbb', 88, 100),
(26, 'update', 8, 100),
(27, 'jamal', 77, 100),
(28, 'jamal', 66, 100),
(29, 'soso', 22, 100),
(33, 'jojo', 7, 100),
(34, 'gogo', 78, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

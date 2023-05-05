-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 11:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `shared`
--

CREATE TABLE `shared` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `notification_status` tinyint(1) NOT NULL,
  `sharing_hours` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shared`
--

INSERT INTO `shared` (`id`, `filename`, `uid`, `sid`, `username`, `notification_status`, `sharing_hours`) VALUES
(21, 'mycollection (1).zip', 54, 53, 'jay', 1, '2023/05/05 08:59:00'),
(22, 'tempCodeRunnerFile', 53, 53, 'darshit', 1, '2023/05/05 09:01:00'),
(23, 'tempCodeRunnerFile', 53, 54, 'darshit', 1, '2023/05/05 09:02:00'),
(24, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:02:00'),
(25, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:04:00'),
(26, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:05:00'),
(27, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:12:00'),
(28, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:17:00'),
(29, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:17:00'),
(30, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:19:00'),
(31, 'Untitled 1.odt', 54, 53, 'jay', 1, '2023/05/05 09:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(53, 'darshit', 'darshitdudhiya201@gmail.com', '$2y$10$lik4QnGauSCGdlqfnkadzugbJfrZ5mArKIg8h5SfN5kfSy82iQh22'),
(54, 'jay', 'jay@123', '$2y$10$kcyxXBbNaioiyZDebockseESHApvzMn9Y2dRkFkosGkgEXT65qaKy'),
(55, 'bhavya', 'bhavya@123', '$2y$10$isoJTTUMQ83Oqe6YG9u0/.xRbhBPrxmwvQehhQ7ObJpx67Wp8N2w.'),
(56, 'harsh', 'harsh@123', '$2y$10$iD7/PArZI1gcPh.V3/4jxO2a3Id0HOQ5rWL6KFyJrOZ3DOg9wCPs2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shared`
--
ALTER TABLE `shared`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shared`
--
ALTER TABLE `shared`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

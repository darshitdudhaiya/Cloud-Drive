-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 01:54 PM
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
-- Table structure for table `sharing`
--

CREATE TABLE `sharing` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `opposite_userid` int(11) DEFAULT NULL,
  `notification_status` tinyint(1) NOT NULL,
  `sharing_hours` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sharing`
--

INSERT INTO `sharing` (`id`, `filename`, `userid`, `opposite_userid`, `notification_status`, `sharing_hours`) VALUES
(1, '339704407_755771349527200_7554270536535755578_n (1).jpg', 54, 53, 1, '2023/05/07 19:24:00'),
(2, 'drive.sql', 53, 54, 1, '2023/05/07 19:24:00'),
(3, 'chef-bg.png', 53, 54, 1, '2023/05/08 13:41:00'),
(4, 'double_fun_bg.png', 53, 54, 1, '2023/05/08 13:42:00'),
(5, 'double_fun_bg.png', 53, 54, 1, '2023/05/08 13:47:00');

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
-- Indexes for table `sharing`
--
ALTER TABLE `sharing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opposite_userid` (`opposite_userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sharing`
--
ALTER TABLE `sharing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sharing`
--
ALTER TABLE `sharing`
  ADD CONSTRAINT `sharing_ibfk_1` FOREIGN KEY (`opposite_userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

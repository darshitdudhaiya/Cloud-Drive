-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 08:06 PM
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
(15, 'Cash on Delivery 2017 .mp4', 57, 54, 0, '1970/01/01 01:00:00'),
(16, '20230421_180355.jpg', 57, 54, 1, '1970/01/01 01:00:00'),
(17, 'Cash on Delivery 2017 .mp4', 57, 54, 1, '1970/01/01 01:00:00'),
(18, 'LICENSE', 57, 54, 1, '1970/01/01 01:00:00'),
(19, 'Readme.txt', 61, 57, 0, '1970/01/01 01:00:00'),
(20, 'darshit.html', 61, 57, 0, '1970/01/01 01:00:00'),
(21, 'inner-page.html', 61, 57, 0, '1970/01/01 01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`) VALUES
(54, 'jay', 'jay@123', '$2y$10$AtdOvcz5Ipjm6Ftt07iIzOjelNssog7CedTPLB8wLjfxPtGm0lJ9m', '../images/download.jfif'),
(55, 'bhavya', 'bhavya@123', '$2y$10$kOB0V5BZ8xmAxZWhpT.5IO40nNwuUGn7Ss3/6M3rh/bk6itCobQcW', '../images/download.jfif'),
(56, 'harsh', 'harsh@123', '$2y$10$iD7/PArZI1gcPh.V3/4jxO2a3Id0HOQ5rWL6KFyJrOZ3DOg9wCPs2', '../images/download.jfif'),
(57, 'Darshit Dudhaiya', 'darshitdudhaiya201@gmail.com', '$2y$10$FWLsGF4FlL3z/A67senwKO7kmiAw1ji2OWtFbeoFoR1Igc.REQBPm', 'https://lh3.googleusercontent.com/a/AGNmyxaOaTgGnttPE8M8BZHy3DsYnLIAyWFwyMHqhJqU=s96-c'),
(58, 'abhijt', 'abhijit@gmail.com', '$2y$10$QGHsmkQWB9EfQX394osK5e8STdu1Y2Ria/VUng2DGL.yN08wpYhse', ''),
(59, 'nirmal', 'nirmal@gmail.com', '$2y$10$0/yzdnpPhpih5DEZGB8tdOE5Hs19ZUMGTgN055zO1BAP5PI1gh4TW', '../images/download.jfif'),
(61, 'Jaydip', 'jaydip@gmail.com', '$2y$10$hCXVTbvJRY73nHiiQEK7hOnXZXOOShMedPNPSYNrPnhfjDee9W8gu', '../images/download.jfif');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 05:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(8, 'Michael Jordan', 'jordan@gmail.com', 'topnet', 'daadadadadadada');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(255) DEFAULT NULL,
  `course_owner` varchar(255) DEFAULT NULL,
  `course_duration` varchar(255) DEFAULT NULL,
  `course_category` varchar(255) DEFAULT NULL,
  `course_description` varchar(255) DEFAULT NULL,
  `image` longtext NOT NULL,
  `video` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_owner`, `course_duration`, `course_category`, `course_description`, `image`, `video`) VALUES
(19, 'PHP', 'Ghaith Zghidi', '120', 'Develepment', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'daf39584bf35399655986b8c58195f8a.png', 'daf39584bf35399655986b8c58195f8a.mp4'),
(22, 'NodeJS', 'Farid Belgaid', '60', 'Develepment', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '67f9d7c24be59bf591ff4b1387dccb74.png', '67f9d7c24be59bf591ff4b1387dccb74.mp4'),
(23, 'RHCP', 'Mohamed Ali Ben Slimen', '420', 'Security', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '31a4583073cefdccefac1c70c69ae4a1.jpeg', '31a4583073cefdccefac1c70c69ae4a1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` longtext NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `phone`, `email`, `password`, `image`, `role`) VALUES
(29, 'ghaith', 'zghidi', '27456520', 'admin@sesame.com', '$2y$10$uaHdIDQZAZQnCql6POJcU.MciovPxqFVLaXW5CxF0/2Ke6HRFc4g6', '1853ba02e4bc060fb2844d5c452ce927.jpeg', '1'),
(30, 'Michael', 'Jordan', '6164336313', 'gmail@sesame.com', '$2y$10$jVq4c97LIdREwE0EpL3p7.TZms9H6tlxYdixDNPIEkr4Z2t.7/Kpm', '210684aab2d3a3e6f664208d512ce219.jpeg', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 03:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `images or videos`
--

CREATE TABLE `images or videos` (
  `image_id` int(11) NOT NULL,
  `path_to_fail` varchar(500) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` tinytext COLLATE utf8_latvian_ci NOT NULL,
  `question` text COLLATE utf8_latvian_ci NOT NULL,
  `correct_answer` tinytext COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_image`
--

CREATE TABLE `question_image` (
  `question_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_wrong_answer_conntection`
--

CREATE TABLE `question_wrong_answer_conntection` (
  `question_id` int(11) NOT NULL,
  `wrong_answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wrong_answer`
--

CREATE TABLE `wrong_answer` (
  `wrong_answer_id` int(11) NOT NULL,
  `wrong_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images or videos`
--
ALTER TABLE `images or videos`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `wrong_answer`
--
ALTER TABLE `wrong_answer`
  ADD PRIMARY KEY (`wrong_answer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images or videos`
--
ALTER TABLE `images or videos`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wrong_answer`
--
ALTER TABLE `wrong_answer`
  MODIFY `wrong_answer_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

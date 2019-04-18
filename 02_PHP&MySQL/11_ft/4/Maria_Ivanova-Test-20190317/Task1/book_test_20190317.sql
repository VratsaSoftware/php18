-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 март 2019 в 15:19
-- Версия на сървъра: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_test_20190317`
--

-- --------------------------------------------------------

--
-- Структура на таблица `alltogether_table`
--

CREATE TABLE `alltogether_table` (
  `all_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `edition` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `alltogether_table`
--

INSERT INTO `alltogether_table` (`all_id`, `page_id`, `edition`, `company_id`) VALUES
(1, 1, 30, 1),
(2, 2, 20, 1),
(3, 3, 60, 2),
(4, 4, 20, 2),
(5, 5, 10, 3);

-- --------------------------------------------------------

--
-- Структура на таблица `company_table`
--

CREATE TABLE `company_table` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `company_table`
--

INSERT INTO `company_table` (`company_id`, `company_name`, `page_id`) VALUES
(1, 'Konkurent', 1),
(2, 'Konkurent', 3),
(3, 'Egmont', 3),
(4, 'Egmont', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `page_table`
--

CREATE TABLE `page_table` (
  `page_id` int(11) NOT NULL,
  `page_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `week_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `page_table`
--

INSERT INTO `page_table` (`page_id`, `page_type`, `name`, `week_id`, `company_id`) VALUES
(1, 'newspaper', '24hours', 1, 1),
(2, 'newspaper', '24hours', 2, 1),
(3, 'magazine', 'Bravo', 3, 2),
(4, 'crossword', 'Think twice', 4, 2),
(5, 'crossword', 'Think twice', 5, 3);

-- --------------------------------------------------------

--
-- Структура на таблица `week_table`
--

CREATE TABLE `week_table` (
  `week_id` int(11) NOT NULL,
  `day_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `week_table`
--

INSERT INTO `week_table` (`week_id`, `day_name`, `page_id`) VALUES
(1, 'Monday', 1),
(2, 'Friday', 1),
(3, 'Sunday', 2),
(4, 'Monday', 3),
(5, 'Saturday', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alltogether_table`
--
ALTER TABLE `alltogether_table`
  ADD PRIMARY KEY (`all_id`),
  ADD KEY `page_id` (`page_id`,`company_id`);

--
-- Indexes for table `company_table`
--
ALTER TABLE `company_table`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `page_table`
--
ALTER TABLE `page_table`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `week_id` (`week_id`,`company_id`);

--
-- Indexes for table `week_table`
--
ALTER TABLE `week_table`
  ADD PRIMARY KEY (`week_id`),
  ADD KEY `page_id` (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_table`
--
ALTER TABLE `company_table`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_table`
--
ALTER TABLE `page_table`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `week_table`
--
ALTER TABLE `week_table`
  MODIFY `week_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 март 2019 в 12:41
-- Версия на сървъра: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Структура на таблица `doctor_info`
--

CREATE TABLE `doctor_info` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(150) NOT NULL,
  `doctor_last_name` varchar(150) NOT NULL,
  `doctor_UIN` varchar(150) NOT NULL,
  `doctor_ specialty` text NOT NULL,
  `doctor_workplace` text NOT NULL,
  `workplace_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `doctor_info`
--

INSERT INTO `doctor_info` (`doctor_id`, `doctor_name`, `doctor_last_name`, `doctor_UIN`, `doctor_ specialty`, `doctor_workplace`, `workplace_id`) VALUES
(1, 'Ивайло', 'Иванов', '0017032019', 'Хирург, невролог, педиатър, ортопед.', 'МБАЛ \"Света Анна\"', 0),
(2, 'Николай', 'Николов', '00172839', 'Психология.', 'СБАЛ\" Пирогов\"', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `workplaces`
--

CREATE TABLE `workplaces` (
  `workplace_id` int(11) NOT NULL,
  `workplace_name` varchar(200) NOT NULL,
  `workplace_rzc` varchar(150) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `workplaces`
--

INSERT INTO `workplaces` (`workplace_id`, `workplace_name`, `workplace_rzc`, `doctor_id`) VALUES
(1, 'МБАЛ \"Света Анна\"', '00123456', 0),
(2, 'СБАЛ\"Пирогов\"', '85641631', NULL),
(3, 'СБАЛ\"Пирогов\"', '85641631', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `workplace_id` (`workplace_id`);

--
-- Indexes for table `workplaces`
--
ALTER TABLE `workplaces`
  ADD PRIMARY KEY (`workplace_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workplaces`
--
ALTER TABLE `workplaces`
  MODIFY `workplace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

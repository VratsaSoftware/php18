-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 март 2019 в 16:04
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
-- Database: `printer_ware`
--

-- --------------------------------------------------------

--
-- Структура на таблица `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `companies`
--

INSERT INTO `companies` (`id`, `company_name`) VALUES
(1, 'Manager'),
(2, 'Meredith');

-- --------------------------------------------------------

--
-- Структура на таблица `days_and_circulation`
--

CREATE TABLE `days_and_circulation` (
  `id` int(11) NOT NULL,
  `day_of_week` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `days_and_circulation`
--

INSERT INTO `days_and_circulation` (`id`, `day_of_week`) VALUES
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday'),
(8, 'Saturday'),
(9, 'Sunday');

-- --------------------------------------------------------

--
-- Структура на таблица `kinds`
--

CREATE TABLE `kinds` (
  `id` int(11) NOT NULL,
  `kind_name` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `kinds`
--

INSERT INTO `kinds` (`id`, `kind_name`) VALUES
(1, 'newspaper'),
(2, 'magazine');

-- --------------------------------------------------------

--
-- Структура на таблица `printer_ware`
--

CREATE TABLE `printer_ware` (
  `id` int(11) NOT NULL,
  `tittles` int(11) DEFAULT NULL,
  `kinds` int(11) DEFAULT NULL,
  `days_of_week` int(11) DEFAULT NULL,
  `companies` int(11) DEFAULT NULL,
  `circulation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `tittles`
--

CREATE TABLE `tittles` (
  `id` int(11) NOT NULL,
  `tittle_name` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `tittles`
--

INSERT INTO `tittles` (`id`, `tittle_name`) VALUES
(1, 'Playboy'),
(2, 'Cosmopolitan'),
(3, 'Time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days_and_circulation`
--
ALTER TABLE `days_and_circulation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kinds`
--
ALTER TABLE `kinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer_ware`
--
ALTER TABLE `printer_ware`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tittles` (`tittles`),
  ADD KEY `kinds` (`kinds`),
  ADD KEY `days_and_circulation` (`days_of_week`),
  ADD KEY `companies` (`companies`);

--
-- Indexes for table `tittles`
--
ALTER TABLE `tittles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `days_and_circulation`
--
ALTER TABLE `days_and_circulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kinds`
--
ALTER TABLE `kinds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `printer_ware`
--
ALTER TABLE `printer_ware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tittles`
--
ALTER TABLE `tittles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `printer_ware`
--
ALTER TABLE `printer_ware`
  ADD CONSTRAINT `printer_ware_ibfk_1` FOREIGN KEY (`companies`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `printer_ware_ibfk_2` FOREIGN KEY (`days_of_week`) REFERENCES `printer_ware` (`id`),
  ADD CONSTRAINT `printer_ware_ibfk_3` FOREIGN KEY (`kinds`) REFERENCES `kinds` (`id`),
  ADD CONSTRAINT `printer_ware_ibfk_4` FOREIGN KEY (`tittles`) REFERENCES `kinds` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

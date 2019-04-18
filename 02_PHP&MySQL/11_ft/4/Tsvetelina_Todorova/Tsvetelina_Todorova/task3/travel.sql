-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 март 2019 в 15:25
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Структура на таблица `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `countries`
--

INSERT INTO `countries` (`country_id`, `name`, `date_deleted`) VALUES
(1, 'Turkey', NULL),
(2, '123', NULL),
(3, 'Bulgaria', NULL),
(4, 'Test', NULL),
(5, 'test', NULL),
(6, 'TEST', NULL),
(7, 'ÐœÐ°Ñ€Ð³Ð°Ñ€Ð¸Ñ‚Ð°', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` int(11) NOT NULL,
  `destination_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `destinations`
--

INSERT INTO `destinations` (`destination_id`, `destination_name`, `country_id`, `date_deleted`) VALUES
(1, 'Alania', 1, '2019-03-20'),
(2, 'Antalia', 1, NULL),
(3, 'Lara', 1, NULL),
(4, 'Belek', 1, NULL),
(5, 'Marmaris', 3, NULL),
(6, 'Bodrum', 1, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `durations`
--

CREATE TABLE `durations` (
  `duration_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `durations`
--

INSERT INTO `durations` (`duration_id`, `duration`, `date_deleted`) VALUES
(1, 7, NULL),
(2, 9, NULL),
(3, 3, NULL),
(4, 5, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(150) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `date_deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `destination_id`, `rooms`, `date_deleted`) VALUES
(1, 'Hotel 1', 6, 350, NULL),
(2, 'Hotel No Name', 6, 500, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `duration_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `packages`
--

INSERT INTO `packages` (`package_id`, `duration_id`, `destination_id`, `price`, `date_deleted`) VALUES
(1, 1, 1, 400, NULL),
(2, 2, 1, 350, NULL),
(3, 3, 1, 250, NULL),
(4, 4, 1, 200, NULL),
(5, 1, 2, 800, NULL),
(6, 2, 2, 700, NULL),
(7, 3, 2, 500, NULL),
(8, 4, 2, 400, NULL),
(9, 1, 3, 700, NULL),
(10, 2, 4, 600, NULL),
(11, 3, 5, 500, NULL),
(12, 4, 6, 350, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `durations`
--
ALTER TABLE `durations`
  ADD PRIMARY KEY (`duration_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `duration_id` (`duration_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `durations`
--
ALTER TABLE `durations`
  MODIFY `duration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Ограничения за таблица `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`);

--
-- Ограничения за таблица `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`duration_id`) REFERENCES `durations` (`duration_id`),
  ADD CONSTRAINT `packages_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 март 2019 в 14:34
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
-- Структура на таблица `doctor_name`
--

CREATE TABLE `doctor_name` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `doctor_name_hospitals_hospital_unicode_speciality_uin`
--

CREATE TABLE `doctor_name_hospitals_hospital_unicode_speciality_uin` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `hospital_unicode_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `hospital_workers` int(11) NOT NULL,
  `doctors_in_speciality` int(11) NOT NULL,
  `uin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `hospital_unicode`
--

CREATE TABLE `hospital_unicode` (
  `hospital_unicode_id` int(11) NOT NULL,
  `hospital_unicode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `specialty`
--

CREATE TABLE `specialty` (
  `specialty_id` int(11) NOT NULL,
  `speciality_name` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `uin`
--

CREATE TABLE `uin` (
  `uin_id` int(11) NOT NULL,
  `uin_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_name`
--
ALTER TABLE `doctor_name`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctor_name_hospitals_hospital_unicode_speciality_uin`
--
ALTER TABLE `doctor_name_hospitals_hospital_unicode_speciality_uin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `speciality_id` (`speciality_id`),
  ADD UNIQUE KEY `doctor_id` (`doctor_id`),
  ADD UNIQUE KEY `hospital_id` (`hospital_id`),
  ADD UNIQUE KEY `hospital_unicode_id` (`hospital_unicode_id`),
  ADD UNIQUE KEY `uin_id` (`uin_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `hospital_unicode`
--
ALTER TABLE `hospital_unicode`
  ADD PRIMARY KEY (`hospital_unicode_id`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`specialty_id`);

--
-- Indexes for table `uin`
--
ALTER TABLE `uin`
  ADD PRIMARY KEY (`uin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_name`
--
ALTER TABLE `doctor_name`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialty`
--
ALTER TABLE `specialty`
  MODIFY `specialty_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uin`
--
ALTER TABLE `uin`
  MODIFY `uin_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

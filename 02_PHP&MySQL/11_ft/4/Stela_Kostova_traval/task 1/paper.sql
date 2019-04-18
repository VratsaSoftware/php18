-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 март 2019 в 16:16
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
-- Database: `paper`
--

-- --------------------------------------------------------

--
-- Структура на таблица `companies`
--

CREATE TABLE `companies` (
  `compani_id` int(11) NOT NULL,
  `compani_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `editions`
--

CREATE TABLE `editions` (
  `edition_id` int(11) NOT NULL,
  `edition_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `paper`
--

CREATE TABLE `paper` (
  `paper_id` int(11) NOT NULL,
  `paper_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `paper_edition_companies_title`
--

CREATE TABLE `paper_edition_companies_title` (
  `id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `edition_id` int(11) NOT NULL,
  `companiy_id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  `tirage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `titles`
--

CREATE TABLE `titles` (
  `title_id` int(11) NOT NULL,
  `title_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`compani_id`);

--
-- Indexes for table `editions`
--
ALTER TABLE `editions`
  ADD PRIMARY KEY (`edition_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `paper_edition_companies_title`
--
ALTER TABLE `paper_edition_companies_title`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companiy_id` (`companiy_id`),
  ADD KEY `edition_id` (`edition_id`),
  ADD KEY `paper_id` (`paper_id`),
  ADD KEY `title_id` (`title_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `compani_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editions`
--
ALTER TABLE `editions`
  MODIFY `edition_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paper_edition_companies_title`
--
ALTER TABLE `paper_edition_companies_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `paper_edition_companies_title`
--
ALTER TABLE `paper_edition_companies_title`
  ADD CONSTRAINT `paper_edition_companies_title_ibfk_1` FOREIGN KEY (`companiy_id`) REFERENCES `companies` (`compani_id`),
  ADD CONSTRAINT `paper_edition_companies_title_ibfk_2` FOREIGN KEY (`edition_id`) REFERENCES `editions` (`edition_id`),
  ADD CONSTRAINT `paper_edition_companies_title_ibfk_3` FOREIGN KEY (`paper_id`) REFERENCES `paper` (`paper_id`),
  ADD CONSTRAINT `paper_edition_companies_title_ibfk_4` FOREIGN KEY (`title_id`) REFERENCES `titles` (`title_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

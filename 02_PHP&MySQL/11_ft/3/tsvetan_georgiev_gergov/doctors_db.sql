-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 01:12 PM
-- Server version: 10.1.38-MariaDB
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
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(8) NOT NULL,
  `doctor_name` varchar(120) NOT NULL,
  `doctor_uin` int(11) NOT NULL,
  `speciality_id` int(8) NOT NULL,
  `speciality_id_2(optinal)` int(8) DEFAULT NULL,
  `work_place_id` int(8) NOT NULL,
  `work_place_id2(optinal)` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_name`, `doctor_uin`, `speciality_id`, `speciality_id_2(optinal)`, `work_place_id`, `work_place_id2(optinal)`) VALUES
(1, 'Smith Anderson Lewis', 601288577, 2, 1, 1, 0),
(2, 'James Christopher Ronald', 722007284, 1, NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `final_info_table`
--

CREATE TABLE `final_info_table` (
  `final_info_id` int(8) NOT NULL,
  `work_place_id` int(8) NOT NULL,
  `work_place_id_2(optional)` int(8) DEFAULT NULL,
  `doctor_id` int(8) NOT NULL,
  `speciality_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `final_info_table`
--

INSERT INTO `final_info_table` (`final_info_id`, `work_place_id`, `work_place_id_2(optional)`, `doctor_id`, `speciality_id`) VALUES
(1, 1, 0, 2, 1),
(2, 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `speciality_table`
--

CREATE TABLE `speciality_table` (
  `speciality_id` int(8) NOT NULL,
  `speciality_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `speciality_table`
--

INSERT INTO `speciality_table` (`speciality_id`, `speciality_name`) VALUES
(1, 'Family Medicine'),
(2, 'Cardiothoracic Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `work_places`
--

CREATE TABLE `work_places` (
  `work_place_id` int(8) NOT NULL,
  `work_place_name` varchar(128) NOT NULL,
  `rcz_code` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_places`
--

INSERT INTO `work_places` (`work_place_id`, `work_place_name`, `rcz_code`) VALUES
(1, 'Hilo Medical Center', 1245636384),
(2, 'Lanai Community Hospital', 841374661);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `speciality_id` (`speciality_id`),
  ADD KEY `speciality_id_2(optinal)` (`speciality_id_2(optinal)`),
  ADD KEY `work_place_id` (`work_place_id`),
  ADD KEY `work_place_id2(optinal)` (`work_place_id2(optinal)`);

--
-- Indexes for table `final_info_table`
--
ALTER TABLE `final_info_table`
  ADD PRIMARY KEY (`final_info_id`),
  ADD KEY `work_place_id` (`work_place_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `speciality_id` (`speciality_id`),
  ADD KEY `work_place_id_2` (`work_place_id_2(optional)`);

--
-- Indexes for table `speciality_table`
--
ALTER TABLE `speciality_table`
  ADD PRIMARY KEY (`speciality_id`);

--
-- Indexes for table `work_places`
--
ALTER TABLE `work_places`
  ADD PRIMARY KEY (`work_place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `final_info_table`
--
ALTER TABLE `final_info_table`
  MODIFY `final_info_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `speciality_table`
--
ALTER TABLE `speciality_table`
  MODIFY `speciality_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_places`
--
ALTER TABLE `work_places`
  MODIFY `work_place_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

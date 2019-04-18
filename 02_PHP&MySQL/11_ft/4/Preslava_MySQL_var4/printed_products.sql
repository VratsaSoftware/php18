-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 01:59 PM
-- Server version: 10.1.37-MariaDB
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
-- Database: `printed_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL,
  `day_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `editions`
--

CREATE TABLE `editions` (
  `edition_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `tiraj_daily` varchar(150) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `printed_products_table`
--

CREATE TABLE `printed_products_table` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `edition_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `editions`
--
ALTER TABLE `editions`
  ADD PRIMARY KEY (`edition_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `printed_products_table`
--
ALTER TABLE `printed_products_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`product_id`),
  ADD KEY `day_id` (`day_id`),
  ADD KEY `edition_id` (`edition_id`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editions`
--
ALTER TABLE `editions`
  MODIFY `edition_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printed_products_table`
--
ALTER TABLE `printed_products_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `editions`
--
ALTER TABLE `editions`
  ADD CONSTRAINT `comrany_id` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `printed_products_table`
--
ALTER TABLE `printed_products_table`
  ADD CONSTRAINT `day_id` FOREIGN KEY (`day_id`) REFERENCES `days` (`day_id`),
  ADD CONSTRAINT `edition_id` FOREIGN KEY (`edition_id`) REFERENCES `editions` (`edition_id`),
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `type_product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

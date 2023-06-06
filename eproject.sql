-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2023 at 05:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent`
--

CREATE TABLE `tbl_agent` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `branch` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'not working'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `name`, `city`, `address`, `contact_no`) VALUES
(1, 'abc', 'karachi', 'northkarachi', '03131234567'),
(10, 'example', 'Krachi', 'Baldia', '03132134567'),
(15, 'aaa', 'lahore', 'bbbb', '123124555');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `id` int(11) NOT NULL,
  `shipment_date` date NOT NULL,
  `sender_name` varchar(25) NOT NULL,
  `sender_city` varchar(15) NOT NULL,
  `sender_address` varchar(255) NOT NULL,
  `sender_phone_no` varchar(13) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `receiver_name` varchar(25) NOT NULL,
  `receiver_city` varchar(15) NOT NULL,
  `receiver_address` varchar(255) NOT NULL,
  `receiver_phone_no` varchar(13) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `shipment_status` varchar(50) NOT NULL,
  `no_of_parcel` varchar(15) NOT NULL,
  `parcel_length` varchar(50) NOT NULL,
  `parcel_width` varchar(50) NOT NULL,
  `parcel_height` varchar(50) NOT NULL,
  `parcel_weight` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `delivery_charges` varchar(50) NOT NULL,
  `total_charges` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking`
--

CREATE TABLE `tbl_tracking` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'shipped'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tracking`
--
ALTER TABLE `tbl_tracking`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  ADD CONSTRAINT `tbl_agent_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `tbl_branch` (`id`);

--
-- Constraints for table `tbl_tracking`
--
ALTER TABLE `tbl_tracking`
  ADD CONSTRAINT `tbl_tracking_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_courier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

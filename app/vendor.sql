-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 01:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seller_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `Name` int(100) NOT NULL,
  `Email` int(100) NOT NULL,
  `Mobile_Number` int(50) NOT NULL,
  `country` int(100) NOT NULL,
  `State` int(100) NOT NULL,
  `city` int(100) NOT NULL,
  `GSTIN_NUMBER` int(100) NOT NULL,
  `Company_Pancard` int(100) NOT NULL,
  `FIRM_NAME` int(100) NOT NULL,
  `Personal_PANCARD` int(100) NOT NULL,
  `AdharCard` int(100) NOT NULL,
  `BUSINESS_TYPE` int(100) NOT NULL,
  `PINCODE` int(100) NOT NULL,
  `Address` int(250) NOT NULL,
  `Bank_Account_Number` int(100) NOT NULL,
  `IFSC_CODE` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

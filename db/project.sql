-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 11:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) NOT NULL,
  `cus_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone_number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_total_spending` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cus_name`, `cus_phone_number`, `cus_password`, `cus_email`, `cus_address`, `cus_total_spending`) VALUES
(1, 'fahim', '123123', '123', 'mfshahriarx@protonmail.com', 'alexa blexa', NULL),
(2, '123', '123', '123', '123@gmail.com', '123', NULL),
(3, 'bing', '0321321', '$2y$10$nbifCRk4wib5hrkbN9OfPeSPdeC4ukEtU/4tzA73FAs6uKDNew9EW', 'bing@wing.com', 'akashe', NULL),
(4, 'zxc', '1234', '$2y$10$n7cu82.DCTbYRDTEGvks8utgQ5kz3w0aPvt4wIk/sM8BEv5LoCE7a', 'zxc@zxc.com', 'zxcvb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_phone_number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `emp_username`, `emp_password`, `emp_phone_number`, `emp_email`, `emp_address`, `emp_type`) VALUES
(2, 'asdf', 'asdf', '$2y$10$i//4xOzL3BuvTHmMYD1vcum8iyAFq7c3edodvkbaGLmOp367LMQGy', '0123', 'asdf@asdf.com', 'aassddff', 'admin'),
(3, 'qqwweerr', 'qwer', '$2y$10$xVmcliPPH7apVehZGnB8w.votFLx/K6GueZu1joU2gkN8SsrGto1K', '1234', 'qwer@qwer.com', 'qwerty', 'cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

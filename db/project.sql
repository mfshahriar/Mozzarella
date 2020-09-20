-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 11:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(1) NOT NULL,
  `addon_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `addon_name`, `price`) VALUES
(1, 'Garlic Sauce', 60),
(2, 'BBQ Sauce', 80),
(3, 'Extra Cheese', 100);

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

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(3) NOT NULL,
  `f_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_type` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(4) NOT NULL,
  `review` float NOT NULL,
  `no_of_reviews` int(4) NOT NULL,
  `delivery_time` int(3) NOT NULL,
  `image` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `f_name`, `f_type`, `price`, `review`, `no_of_reviews`, `delivery_time`, `image`) VALUES
(1, 'Chicken Burger', '1', 200, 5, 1, 10, '1'),
(2, 'Beef Burger', '1', 220, 5, 1, 10, '2'),
(3, 'Chicken Cheese Burger', '1', 250, 5, 1, 10, '3'),
(4, 'Beef Cheese Burger', '1', 280, 5, 1, 10, '4'),
(5, 'Chicken Pizza', '2', 600, 5, 1, 12, '5'),
(6, 'Mushroom Pizza', '2', 650, 5, 1, 12, '6'),
(7, 'Beef Pizza', '2', 680, 5, 1, 12, '7'),
(8, 'Tuna Pizza', '2', 650, 5, 1, 12, '8'),
(9, 'VeggiePizza', '2', 580, 5, 1, 12, '9'),
(10, 'Chicken Sub', '3', 140, 5, 1, 10, '10'),
(11, 'Beef Sub', '3', 160, 5, 1, 10, '11'),
(12, 'Vegan Sub', '3', 120, 5, 1, 10, '12'),
(13, 'Oreo Milkshake', '4', 150, 5, 1, 10, '13'),
(14, 'Cold Coffee', '4', 140, 5, 1, 10, '14'),
(15, 'Chocolate Shake', '4', 160, 5, 1, 10, '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

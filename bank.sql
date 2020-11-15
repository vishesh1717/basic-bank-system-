-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2020 at 08:17 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`c_id`, `c_name`, `c_email`, `c_balance`) VALUES
(1, 'Vishesh Hasoriya', 'vishesh@gmail.com', 3300),
(2, 'Sagar Verma', 'Sagar1@gmail.com', -164050),
(3, 'Ranjit Sharma', 'ranjits@gmail.com', 241000),
(4, 'Aditya Verma', 'Averma@gmail.com', 9488),
(5, 'Raju Rastogi', 'Rajurastogi@gmail.com', 15620),
(6, 'Sandhu Pari', 'Pariss@gmail.com', 21580),
(7, 'Vaish wakhre', 'Vasih23.com', 14000),
(8, 'Ayush Dalal', 'ayush@gmail.com', 15000),
(9, 'Abhi Kohli', 'abhis.com', 19990),
(10, 'Ria singh', 'Ria123.com', 19000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `t_id` int(11) NOT NULL,
  `t_sender` varchar(255) NOT NULL,
  `t_receiver` varchar(255) NOT NULL,
  `t_amount` int(11) NOT NULL,
  `t_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transfer_history`
--

INSERT INTO `transfer_history` (`t_id`, `t_sender`, `t_receiver`, `t_amount`, `t_time`) VALUES
(23, 'Ranjit Sharma', 'Sagar Verma', 300, '2020-11-13 14:50:30'),
(33, 'Vishesh Hasoriya', 'Sagar Verma', 10, '2020-11-13 16:06:53'),
(35, 'Vaish wakhre', 'Raju Rastogi', 4000, '2020-11-14 00:56:48'),
(36, 'Raju Rastogi', 'Ranjit Sharma', 500, '2020-11-14 01:16:46'),
(37, 'Raju Rastogi', 'Sandhu Pari', 600, '2020-11-14 01:21:12'),
(38, 'Vishesh Hasoriya', 'Aditya Verma', 300, '2020-11-15 13:19:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Indexes for table `transfer_history`
--
ALTER TABLE `transfer_history`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transfer_history`
--
ALTER TABLE `transfer_history`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;



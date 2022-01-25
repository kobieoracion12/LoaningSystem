-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 04:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loaning_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_no` bigint(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_add` varchar(69) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(3) NOT NULL,
  `address` longtext NOT NULL,
  `valid_id` mediumblob NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `user_type` enum('new','repeat','loyal','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_no`, `first_name`, `last_name`, `email_add`, `mobile_no`, `birth_date`, `age`, `address`, `valid_id`, `username`, `password`, `user_type`) VALUES
(1, 'Kobie', 'Oracion', 'kobie.oracion12@gmail.com', 9976616289, '2000-07-12', 21, 'Luisiana, Laguna', '', 'admin', 'admin', 'new'),
(2, 'John Llyod', 'Araza', 'arazaako@gmail.com', 915221994, '2022-01-25', 21, 'Magdalena, Laguna', '', 'araza', 'araza', 'new'),
(3, 'Neil Arthur', 'Pornela', 'neilarthurpornela@gmail.com', 915221994, '2022-01-24', 21, 'Sta.Cruz, Laguna', '', 'neil', 'neil', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `loan_information`
--

CREATE TABLE `loan_information` (
  `loan_no` bigint(11) NOT NULL,
  `acc_no` bigint(11) NOT NULL,
  `loan_type` enum('Ecommerce','Ewallet','Counter','Bank') NOT NULL,
  `loan_status` enum('Active','Closed','Due','Terminated') NOT NULL,
  `loan_amount` int(69) NOT NULL,
  `loan_duration` int(2) NOT NULL,
  `loan_balance` int(6) NOT NULL,
  `loan_due` date NOT NULL,
  `payment_method` enum('Bank','Ewallet','Counter','Any') NOT NULL,
  `loan_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_information`
--

INSERT INTO `loan_information` (`loan_no`, `acc_no`, `loan_type`, `loan_status`, `loan_amount`, `loan_duration`, `loan_balance`, `loan_due`, `payment_method`, `loan_date`) VALUES
(1, 1, 'Bank', 'Active', 2000, 2, 2000, '2022-01-31', 'Bank', '2022-01-25'),
(2, 2, 'Ecommerce', 'Closed', 5000, 6, 4500, '2022-02-28', 'Any', '2022-01-01'),
(3, 3, 'Counter', 'Due', 10000, 12, 1000, '2021-12-31', 'Ewallet', '2021-10-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `loan_information`
--
ALTER TABLE `loan_information`
  ADD PRIMARY KEY (`loan_no`),
  ADD KEY `acc_no` (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_information`
--
ALTER TABLE `loan_information`
  MODIFY `loan_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_information`
--
ALTER TABLE `loan_information`
  ADD CONSTRAINT `loan_information_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `accounts` (`acc_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

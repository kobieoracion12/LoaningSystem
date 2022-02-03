-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 09:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
(1, 'Kobie', 'Oracion', 'kobie.oracion12@gmail.com', 9976616289, '2000-07-12', 21, 'Barangay Zone IV Luisiana, Laguna', '', 'admin', 'admin', 'new'),
(2, 'John Llyod', 'Araza', 'arazaako@gmail.com', 915221994, '2022-01-25', 21, 'Magdalena, Laguna', '', 'araza', 'araza', 'new'),
(3, 'Neil Arthur', 'Pornela', 'neilarthurpornela@gmail.com', 915221994, '2022-01-24', 21, 'Sta.Cruz, Laguna', '', 'neil', 'neil', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `loan_destination`
--

CREATE TABLE `loan_destination` (
  `acc_no` bigint(11) NOT NULL,
  `ref_no` bigint(11) NOT NULL,
  `loan_amount` int(6) NOT NULL,
  `loan_period` varchar(10) NOT NULL,
  `loan_dest` enum('bank','gcash','palawan','paymaya') NOT NULL,
  `bank_name` enum('aub','boc','bdo','bpi','citi','csb','landbank','metro','pnb','rcbc') DEFAULT NULL,
  `interest_rate` enum('3%','4%','5%','') NOT NULL,
  `overdue_penalty` varchar(4) NOT NULL,
  `recv_name` varchar(99) NOT NULL,
  `recv_no` int(10) NOT NULL,
  `loan_status` enum('Pending','Approved','Released','Closed','Terminated') NOT NULL,
  `date_req` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_destination`
--

INSERT INTO `loan_destination` (`acc_no`, `ref_no`, `loan_amount`, `loan_period`, `loan_dest`, `bank_name`, `interest_rate`, `overdue_penalty`, `recv_name`, `recv_no`, `loan_status`, `date_req`) VALUES
(2, 20223300000, 2000, '', 'gcash', NULL, '3%', '5%', '', 915221994, 'Pending', '2022-01-30 07:44:32'),
(0, 20223300030, 1500, '', 'gcash', '', '3%', '5%', 'Array', 2147483647, 'Pending', '2022-02-01 16:39:43'),
(0, 20223300033, 2000, '', 'gcash', '', '3%', '5%', 'Array', 2147483647, 'Pending', '2022-02-02 10:37:30'),
(0, 20223300034, 50000, '', 'bank', 'metro', '3%', '5%', 'Array', 0, 'Pending', '2022-02-02 10:39:08'),
(0, 20223300035, 12000, '24m', 'bank', 'boc', '3%', '5%', 'Array', 0, 'Pending', '2022-02-03 08:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `loan_information`
--

CREATE TABLE `loan_information` (
  `loan_no` bigint(11) NOT NULL,
  `acc_no` bigint(11) NOT NULL,
  `loan_amount` int(69) NOT NULL,
  `loan_duration` enum('2','6','12','24','36') DEFAULT NULL,
  `loan_balance` int(6) NOT NULL,
  `loan_due` date NOT NULL,
  `loan_type` enum('Student Loans','Mortgages','Personal Loans','Small Business','Home Equity','Credit Card') NOT NULL,
  `loan_date` date NOT NULL,
  `loan_status` enum('Active','Closed','Due','Terminated') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_information`
--

INSERT INTO `loan_information` (`loan_no`, `acc_no`, `loan_amount`, `loan_duration`, `loan_balance`, `loan_due`, `loan_type`, `loan_date`, `loan_status`) VALUES
(1, 1, 2000, '6', 2000, '2022-01-31', 'Personal Loans', '2022-01-25', 'Active'),
(2, 2, 0, NULL, 0, '2022-02-28', 'Student Loans', '2022-01-01', 'Closed'),
(3, 3, 10000, NULL, 1000, '2021-12-31', 'Small Business', '2021-10-14', 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `loan_sched`
--

CREATE TABLE `loan_sched` (
  `loan_no` bigint(11) NOT NULL,
  `date_1` date NOT NULL,
  `amount_1` bigint(20) NOT NULL,
  `status_1` int(11) NOT NULL,
  `date_2` date NOT NULL,
  `amount_2` bigint(12) NOT NULL,
  `status_2` int(11) NOT NULL,
  `date_3` date NOT NULL,
  `amount_3` bigint(12) NOT NULL,
  `status_3` int(11) NOT NULL,
  `date_4` date NOT NULL,
  `amount_4` bigint(12) NOT NULL,
  `status_4` int(11) NOT NULL,
  `date_5` date NOT NULL,
  `amount_5` bigint(12) NOT NULL,
  `status_5` int(11) NOT NULL,
  `date_6` date NOT NULL,
  `amount_6` bigint(12) NOT NULL,
  `status_6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trans_record`
--

CREATE TABLE `trans_record` (
  `trans_no` bigint(11) NOT NULL,
  `acc_no` bigint(11) NOT NULL,
  `trans_type` varchar(99) NOT NULL,
  `trans_amount` bigint(99) NOT NULL,
  `trans_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_record`
--

INSERT INTO `trans_record` (`trans_no`, `acc_no`, `trans_type`, `trans_amount`, `trans_date`) VALUES
(1, 1, 'CM INTER-BANK FUND TRANSFER', 200, '2022-01-25'),
(2, 1, 'POS LOCAL', -109, '2022-01-12'),
(3, 1, 'DM INTER-BANK FUND TRANSFER', 20300, '2022-01-07'),
(4, 1, 'DM INTER-BANK FUND TRANSFER', 20000, '2022-01-07');

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
-- Indexes for table `loan_destination`
--
ALTER TABLE `loan_destination`
  ADD PRIMARY KEY (`ref_no`),
  ADD KEY `loan_destination_ibfk_2` (`acc_no`);

--
-- Indexes for table `loan_information`
--
ALTER TABLE `loan_information`
  ADD PRIMARY KEY (`loan_no`),
  ADD KEY `acc_no` (`acc_no`),
  ADD KEY `loan_no` (`loan_no`);

--
-- Indexes for table `loan_sched`
--
ALTER TABLE `loan_sched`
  ADD KEY `loan_no` (`loan_no`);

--
-- Indexes for table `trans_record`
--
ALTER TABLE `trans_record`
  ADD PRIMARY KEY (`trans_no`),
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
-- AUTO_INCREMENT for table `loan_destination`
--
ALTER TABLE `loan_destination`
  MODIFY `ref_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20223300036;

--
-- AUTO_INCREMENT for table `trans_record`
--
ALTER TABLE `trans_record`
  MODIFY `trans_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_information`
--
ALTER TABLE `loan_information`
  ADD CONSTRAINT `loan_information_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `accounts` (`acc_no`);

--
-- Constraints for table `loan_sched`
--
ALTER TABLE `loan_sched`
  ADD CONSTRAINT `loan_no` FOREIGN KEY (`loan_no`) REFERENCES `loan_information` (`loan_no`);

--
-- Constraints for table `trans_record`
--
ALTER TABLE `trans_record`
  ADD CONSTRAINT `trans_record_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `accounts` (`acc_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 02:33 PM
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
  `acc_priv` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_no`, `first_name`, `last_name`, `email_add`, `mobile_no`, `birth_date`, `age`, `address`, `valid_id`, `username`, `password`, `acc_priv`) VALUES
(1, 'Kobie', 'Oracion', 'kobie.oracion12@gmail.com', 9976616289, '2000-07-12', 21, 'Barangay Zone IV Luisiana, Laguna', '', 'admin', 'admin', 'Admin'),
(2, 'John Llyod', 'Araza', 'arazaako@gmail.com', 915221994, '2022-01-25', 21, 'Magdalena, Laguna', '', 'araza', 'araza', 'User'),
(3, 'Neil Pogi', 'Pornela', 'neilarthurpornela@gmail.com', 915221994, '2022-01-24', 21, 'Sta.Cruz, Laguna', '', 'neil', 'neil', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `loan_destination`
--

CREATE TABLE `loan_destination` (
  `acc_no` bigint(11) NOT NULL,
  `ref_no` bigint(11) NOT NULL,
  `loan_amount` int(6) NOT NULL,
  `loan_period` enum('2','6','12','24','36') NOT NULL,
  `loan_type` enum('Credit Card','Home Equity','Mortgages','Personal Loans','Small Business','Student Loans') NOT NULL,
  `loan_dest` enum('Bank Transfer','GCash','Palawan Pera Padala','PayMaya') NOT NULL,
  `bank_name` enum('Asia United Bank','Bank of China','BDO','BPI','CitiBank','City Savings Bank','Landbank','MetroBank','Philippine National Bank','RCBC') DEFAULT NULL,
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

INSERT INTO `loan_destination` (`acc_no`, `ref_no`, `loan_amount`, `loan_period`, `loan_type`, `loan_dest`, `bank_name`, `interest_rate`, `overdue_penalty`, `recv_name`, `recv_no`, `loan_status`, `date_req`) VALUES
(2, 20223300000, 2000, '6', 'Credit Card', 'GCash', NULL, '3%', '5%', '', 915221994, 'Pending', '2022-02-04 09:49:21'),
(2, 20223300040, 3000, '36', 'Credit Card', 'Bank Transfer', 'Philippine National Bank', '3%', '5%', '', 0, 'Pending', '2022-02-04 09:33:18'),
(2, 20223300041, 4000, '12', 'Credit Card', 'GCash', '', '4%', '5%', '', 915221994, 'Pending', '2022-02-04 09:33:53'),
(2, 20223300042, 4000, '12', 'Credit Card', 'GCash', '', '4%', '5%', '', 915221994, 'Pending', '2022-02-04 09:35:26'),
(2, 20223300043, 5000, '6', 'Credit Card', 'PayMaya', '', '4%', '5%', 'Kobie Oracion', 0, 'Pending', '2022-02-04 09:36:10'),
(2, 20223300044, 5000, '36', 'Credit Card', 'GCash', NULL, '4%', '5%', '0915221994', 0, 'Pending', '2022-02-04 09:40:06'),
(2, 20223300045, 3000, '6', 'Credit Card', 'GCash', NULL, '3%', '5%', 'Kobie Oracion', 915221994, 'Pending', '2022-02-04 09:40:56'),
(2, 20223300046, 5000, '6', 'Mortgages', 'PayMaya', NULL, '4%', '5%', 'Kobie Oracion', 915221994, 'Pending', '2022-02-04 09:47:41'),
(2, 20223300047, 10000, '36', 'Student Loans', 'GCash', NULL, '5%', '5%', 'Neil Pornela', 2147483647, 'Pending', '2022-02-04 10:24:38'),
(2, 20223300048, 10000, '24', 'Student Loans', 'GCash', NULL, '5%', '5%', 'John Llyod Araza', 912312312, 'Pending', '2022-02-04 10:44:45');

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
  MODIFY `ref_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20223300049;

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

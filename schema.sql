-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 01:41 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphahelm_payroll_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjustment_tb`
--

CREATE TABLE `adjustment_tb` (
  `rec_id` bigint(10) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `network_id` bigint(10) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `debit` float(12,2) NOT NULL DEFAULT '0.00',
  `credit` float(12,2) NOT NULL DEFAULT '0.00',
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjustment_tb`
--

INSERT INTO `adjustment_tb` (`rec_id`, `account_id`, `network_id`, `notes`, `debit`, `credit`, `status_flag`, `date_created`, `date_updated`) VALUES
(1, 1, 1, 'reload 09-11', 2000.00, 0.00, 2, '2016-08-11 09:24:29', '2016-08-11 01:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tb`
--

CREATE TABLE `branch_tb` (
  `rec_id` bigint(10) NOT NULL,
  `branch_id` bigint(10) NOT NULL,
  `branch_name` varchar(200) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_tb`
--

INSERT INTO `branch_tb` (`rec_id`, `branch_id`, `branch_name`, `status_flag`, `date_created`, `date_updated`) VALUES
(1, 0, 'All', 1, '0000-00-00 00:00:00', '2018-03-13 08:40:46'),
(2, 1, 'Iloilo', 1, '0000-00-00 00:00:00', '2018-03-13 08:40:46'),
(3, 2, 'Boracay', 1, '0000-00-00 00:00:00', '2018-03-13 08:41:58'),
(4, 3, 'Manila', 1, '0000-00-00 00:00:00', '2018-03-13 08:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `company_info_tb`
--

CREATE TABLE `company_info_tb` (
  `company_id` bigint(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dtr_info_tb`
--

CREATE TABLE `dtr_info_tb` (
  `dtr_id` bigint(10) NOT NULL,
  `user_id` bigint(10) NOT NULL,
  `company_id` bigint(10) NOT NULL,
  `dtr_date` date NOT NULL DEFAULT '0000-00-00',
  `original_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `original_out` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time_out` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notes` text NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `check_flag` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dtr_info_tb`
--

INSERT INTO `dtr_info_tb` (`dtr_id`, `user_id`, `company_id`, `dtr_date`, `original_in`, `original_out`, `time_in`, `time_out`, `notes`, `status_flag`, `check_flag`, `date_created`, `date_updated`) VALUES
(1, 1, 0, '2018-07-05', '2018-07-05 19:31:28', '2018-07-05 19:40:08', '2018-07-05 19:31:28', '2018-07-05 19:40:08', '', 1, 2, '2018-07-05 19:31:28', '2018-07-05 11:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_info_tb`
--

CREATE TABLE `user_info_tb` (
  `user_id` bigint(10) NOT NULL,
  `company_id` bigint(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `admin_flag` tinyint(1) NOT NULL DEFAULT '0',
  `access_flag` varchar(10) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info_tb`
--

INSERT INTO `user_info_tb` (`user_id`, `company_id`, `username`, `lastname`, `firstname`, `password`, `status_flag`, `admin_flag`, `access_flag`, `email_address`, `date_created`, `date_updated`) VALUES
(1, 0, 'toto', 'Admin', 'Administrator', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1, '111111111', 'torvits29@gmail.com', '2016-07-12 00:00:00', '2018-07-04 08:13:39'),
(8, 3, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 1, 0, '110100010', 'v2r_x@yahoo.com', '2018-03-13 21:01:52', '2018-07-04 08:13:44'),
(9, 3, 'test1', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 1, 0, '111111001', 'test@test.com', '2018-03-13 21:06:11', '2018-07-04 08:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjustment_tb`
--
ALTER TABLE `adjustment_tb`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `branch_tb`
--
ALTER TABLE `branch_tb`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `company_info_tb`
--
ALTER TABLE `company_info_tb`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `dtr_info_tb`
--
ALTER TABLE `dtr_info_tb`
  ADD PRIMARY KEY (`dtr_id`);

--
-- Indexes for table `user_info_tb`
--
ALTER TABLE `user_info_tb`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjustment_tb`
--
ALTER TABLE `adjustment_tb`
  MODIFY `rec_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_tb`
--
ALTER TABLE `branch_tb`
  MODIFY `rec_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_info_tb`
--
ALTER TABLE `company_info_tb`
  MODIFY `company_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dtr_info_tb`
--
ALTER TABLE `dtr_info_tb`
  MODIFY `dtr_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info_tb`
--
ALTER TABLE `user_info_tb`
  MODIFY `user_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

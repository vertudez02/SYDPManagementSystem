-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 11:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sydp`
--

-- --------------------------------------------------------

--
-- Table structure for table `r_university`
--

CREATE TABLE `r_university` (
  `univ_id` int(11) NOT NULL,
  `univ_name` varchar(255) NOT NULL,
  `univ_description` varchar(255) NOT NULL,
  `univ_location` varchar(255) NOT NULL,
  `univ_type` varchar(255) NOT NULL,
  `univ_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `univ_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_university`
--

INSERT INTO `r_university` (`univ_id`, `univ_name`, `univ_description`, `univ_location`, `univ_type`, `univ_dateregistered`, `univ_status`) VALUES
(1, 'Polytechnic University of the Philippines - Main', 'The Polytechnic University of the Philippines (PUP) is a government educational institution governed by Republic Act Number 8292 known as the Higher Education Modernization Act of 1997, and its Implementing Rules and Regulations contained in the Commissio', 'Anonas, Sta. Mesa, Maynila, Kalakhang Maynila', 'LUCs', '2020-01-23 23:56:36', 'Active'),
(2, 'Polytechnic University of the Philippines - Quezon City', 'The Polytechnic University of the Philippines (PUP) is a government educational institution governed by Republic Act Number 8292 known as the Higher Education Modernization Act of 1997, and its Implementing Rules and Regulations contained in the Commissio', 'Don Fabian St. Barangay Commonwealth, Quezon City', 'LUCs', '2020-01-23 23:56:36', 'Active'),
(3, 'Quezon City University', 'Quezon City University, formerly known as Quezon City Polytechnic University, is a municipal government-funded university in Quezon City, Philippines.', 'No. 673 Quirino Hwy, Novaliches, Quezon City, Metro Manila', 'LUCs', '2020-01-23 23:56:36', 'Active'),
(4, 'New Era University', 'New Era University is a private educational institution in the Philippines, run by the Iglesia ni Cristo. Although it is linked with the INC, it is a non-sectarian university.', '9 Central Ave, New Era, Quezon City, 1107 Metro Manila', 'Private', '2020-01-23 23:56:36', 'Active'),
(5, 'Our Lady of Fatima University ', 'Our Lady of Fatima University is a Higher Education Institution in the Philippines known for its allied medical sciences programs and also offers Basic Education units, Senior High School, Undergraduate, Graduate, and Post Graduate degrees.', '1118, 1 Esperanza, Novaliches, Lungsod Quezon, 1118 Kalakhang Maynila', 'Private', '2020-01-23 23:56:36', 'Active'),
(6, 'Bestlink College of the Philippines', 'Bestlink College of the Philippines (BCP) is a private, non-stock, non-profit and non-sectarian educational institution.', 'Sta Monica Quirino Highway, Brgy, Metro Manila', 'Private', '2020-01-23 23:56:36', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_userrole`
--

CREATE TABLE `r_userrole` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(255) NOT NULL,
  `roledateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `rolestatus` enum('active','inactive',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_userrole`
--

INSERT INTO `r_userrole` (`roleid`, `rolename`, `roledateregistered`, `rolestatus`) VALUES
(1, 'Admin', '2020-01-23 01:10:48', 'active'),
(2, 'Councilor', '2020-01-23 01:10:48', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `t_accounts`
--

CREATE TABLE `t_accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_username` varchar(255) NOT NULL,
  `acc_password` varchar(255) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `roleid` int(11) NOT NULL,
  `acc_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `acc_status` enum('active','inactive',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_accounts`
--

INSERT INTO `t_accounts` (`acc_id`, `acc_username`, `acc_password`, `acc_name`, `roleid`, `acc_dateregistered`, `acc_status`) VALUES
(1, 'admin', 'admin', 'Arvin Jhon I. Vertudez', 1, '2020-01-23 01:11:04', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `t_userlog`
--

CREATE TABLE `t_userlog` (
  `log_NO` int(255) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `log_datestamp` date NOT NULL,
  `log_timestamp` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_userlog`
--

INSERT INTO `t_userlog` (`log_NO`, `acc_id`, `roleid`, `log_datestamp`, `log_timestamp`) VALUES
(1, 1, 1, '2020-01-23', '18:02:10'),
(2, 1, 1, '2020-01-24', '15:35:14'),
(3, 1, 1, '2020-01-24', '16:46:13'),
(4, 1, 1, '2020-01-24', '16:46:23'),
(5, 1, 1, '2020-01-24', '16:48:39'),
(6, 1, 1, '2020-01-24', '16:50:46'),
(7, 1, 1, '2020-01-24', '16:53:42'),
(8, 1, 1, '2020-01-24', '16:53:56'),
(9, 1, 1, '2020-01-24', '16:54:09'),
(10, 1, 1, '2020-01-24', '16:54:21'),
(11, 1, 1, '2020-01-24', '16:57:26'),
(12, 1, 1, '2020-01-24', '16:57:38'),
(13, 1, 1, '2020-01-24', '17:07:50'),
(14, 1, 1, '2020-01-26', '04:14:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r_university`
--
ALTER TABLE `r_university`
  ADD PRIMARY KEY (`univ_id`);

--
-- Indexes for table `r_userrole`
--
ALTER TABLE `r_userrole`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `t_accounts`
--
ALTER TABLE `t_accounts`
  ADD PRIMARY KEY (`acc_id`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `t_userlog`
--
ALTER TABLE `t_userlog`
  ADD PRIMARY KEY (`log_NO`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `roleid` (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_university`
--
ALTER TABLE `r_university`
  MODIFY `univ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `r_userrole`
--
ALTER TABLE `r_userrole`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_accounts`
--
ALTER TABLE `t_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_userlog`
--
ALTER TABLE `t_userlog`
  MODIFY `log_NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_accounts`
--
ALTER TABLE `t_accounts`
  ADD CONSTRAINT `t_accounts_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `r_userrole` (`roleid`);

--
-- Constraints for table `t_userlog`
--
ALTER TABLE `t_userlog`
  ADD CONSTRAINT `t_userlog_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `r_userrole` (`roleid`),
  ADD CONSTRAINT `t_userlog_ibfk_2` FOREIGN KEY (`acc_id`) REFERENCES `t_accounts` (`acc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

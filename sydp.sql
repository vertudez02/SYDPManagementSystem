-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 04:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `r_academic_year`
--

CREATE TABLE `r_academic_year` (
  `acadyr_id` int(11) NOT NULL,
  `acadyr_startyear` year(4) NOT NULL,
  `acadyr_endyear` year(4) NOT NULL,
  `acadyr_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `acadyr_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_academic_year`
--

INSERT INTO `r_academic_year` (`acadyr_id`, `acadyr_startyear`, `acadyr_endyear`, `acadyr_dateregistered`, `acadyr_status`) VALUES
(1, 2019, 2020, '2020-02-29 01:54:35', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_beneficiary`
--

CREATE TABLE `r_beneficiary` (
  `beneficiary_id` int(11) NOT NULL,
  `beneficiary_name` varchar(255) NOT NULL,
  `beneficiary_description` varchar(255) NOT NULL,
  `beneficiary_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `beneficiary_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_beneficiary`
--

INSERT INTO `r_beneficiary` (`beneficiary_id`, `beneficiary_name`, `beneficiary_description`, `beneficiary_dateregistered`, `beneficiary_status`) VALUES
(1, 'Valedictorian and Salutatorian', 'They shall be awarded a maximum of Php 80,000.00 for tuition and other fees and stipend of Php 20,000.00 a year.', '2020-02-26 22:35:03', 'Active'),
(2, 'First to Third Honorable Mention', 'They shall be awarded a maximum of Php 30,000.00 for tuition and other fees and stipend of Php 10,000.00 a year', '2020-02-26 22:35:03', 'Active'),
(3, 'Quezon City Polytechnic University Scholars', 'Provided, however that they will enroll in QCPU and other State Universities. They have to renew their scholarship every semester and must have a general weighted average of 2.5 or equivalent to that grade with no failing grades.', '2020-02-26 22:35:03', 'Active'),
(4, 'Economic Scholarship', 'Economic Scholarship for all student are guarantee to avail this scholarship', '2020-02-26 22:35:03', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_course`
--

CREATE TABLE `r_course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `course_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_course`
--

INSERT INTO `r_course` (`course_id`, `course_code`, `course_description`, `course_dateregistered`, `course_status`) VALUES
(1, 'BSIT', 'Bachelor of Science in Information Technology', '2020-02-26 18:00:51', 'Active'),
(2, 'BBTE', 'Bachelor in Business Teacher Education', '2020-02-26 18:00:51', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_requirement`
--

CREATE TABLE `r_requirement` (
  `req_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `req_name` varchar(255) NOT NULL,
  `req_remarks` varchar(255) NOT NULL,
  `req_dateregistered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_requirement`
--

INSERT INTO `r_requirement` (`req_id`, `app_profile_no`, `req_name`, `req_remarks`, `req_dateregistered`) VALUES
(71, '20200302001', 'Birth Certificate', 'Present', '2020-03-03 23:16:18'),
(72, '20200302001', 'Regisration Card', 'Present', '2020-03-03 23:16:18'),
(73, '20200302001', 'Grades', 'Present', '2020-03-03 23:16:18'),
(74, '20200302001', 'Barangay Indigency', 'Present', '2020-03-03 23:16:18'),
(75, '20200302001', 'Income Tax Return', 'Present', '2020-03-03 23:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `r_scholar`
--

CREATE TABLE `r_scholar` (
  `scholar_id` int(11) NOT NULL,
  `scholar_type` varchar(255) NOT NULL,
  `scholar_description` varchar(255) NOT NULL,
  `scholar_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `scholar_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_scholar`
--

INSERT INTO `r_scholar` (`scholar_id`, `scholar_type`, `scholar_description`, `scholar_dateregistered`, `scholar_status`) VALUES
(1, 'Academic Scholarship Gold', 'Valedictorian/Salutatorian (Rank 1 to 2) graduates of Quezon City Public High Schools offering Senior High School Tuition Fee – 80,000.00/year Stipend/Allowance- 20,000.00/year', '2020-03-03 01:39:46', 'Active'),
(2, 'Academic Scholarship Silver', '1st-8th Honorable Mention (Rank 3 to 10) graduates of Quezon City Public High Schools offering Senior High School Tuition Fee – 30,000.00/year Stipend/Allowance – 10,000.00/year', '2020-03-03 01:39:46', 'Active'),
(3, 'Economic Scholarship', 'Quezon City Public Senior High School graduate with atleast 80% general weighted average Tuition Fee – 8,000.00/year Stipend/Allowance – 3,000.00/year', '2020-03-03 01:39:46', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_semester`
--

CREATE TABLE `r_semester` (
  `semester_id` int(11) NOT NULL,
  `semester_description` varchar(255) NOT NULL,
  `semester_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `semester_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_semester`
--

INSERT INTO `r_semester` (`semester_id`, `semester_description`, `semester_dateregistered`, `semester_status`) VALUES
(1, 'First Semester', '2020-02-26 17:54:53', 'Disabled'),
(2, 'Second Semester', '2020-02-26 17:54:53', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_university`
--

CREATE TABLE `r_university` (
  `univ_id` int(11) NOT NULL,
  `univ_code` varchar(255) NOT NULL,
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

INSERT INTO `r_university` (`univ_id`, `univ_code`, `univ_name`, `univ_description`, `univ_location`, `univ_type`, `univ_dateregistered`, `univ_status`) VALUES
(1, 'PUP Main', 'Polytechnic University of the Philippines - Main', 'The Polytechnic University of the Philippines (PUP) is a government educational institution governed by Republic Act Number 8292 known as the Higher Education Modernization Act of 1997, and its Implementing Rules and Regulations contained in the Commissio', 'Anonas, Sta. Mesa, Maynila, Kalakhang Maynila', 'LUCs', '2020-01-23 23:56:36', 'Active'),
(2, 'PUP QC', 'Polytechnic University of the Philippines - Quezon City', 'The Polytechnic University of the Philippines (PUP) is a government educational institution governed by Republic Act Number 8292 known as the Higher Education Modernization Act of 1997, and its Implementing Rules and Regulations contained in the Commissio', 'Don Fabian St. Barangay Commonwealth, Quezon City', 'LUCs', '2020-01-23 23:56:36', 'Active'),
(3, 'QCU', 'Quezon City University', 'Quezon City University, formerly known as Quezon City Polytechnic University, is a municipal government-funded university in Quezon City, Philippines.', 'No. 673 Quirino Hwy, Novaliches, Quezon City, Metro Manila', 'LUCs', '2020-01-23 23:56:36', 'Active'),
(4, 'NEU', 'New Era University', 'New Era University is a private educational institution in the Philippines, run by the Iglesia ni Cristo. Although it is linked with the INC, it is a non-sectarian university.', '9 Central Ave, New Era, Quezon City, 1107 Metro Manila', 'Private', '2020-01-23 23:56:36', 'Active'),
(5, 'OLFU', 'Our Lady of Fatima University ', 'Our Lady of Fatima University is a Higher Education Institution in the Philippines known for its allied medical sciences programs and also offers Basic Education units, Senior High School, Undergraduate, Graduate, and Post Graduate degrees.', '1118, 1 Esperanza, Novaliches, Lungsod Quezon, 1118 Kalakhang Maynila', 'Private', '2020-01-23 23:56:36', 'Active'),
(6, 'BLP', 'Bestlink College of the Philippines', 'Bestlink College of the Philippines (BCP) is a private, non-stock, non-profit and non-sectarian educational institution.', 'Sta Monica Quirino Highway, Brgy, Metro Manila', 'Private', '2020-01-23 23:56:36', 'Active');

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
(1, 'Super Admin', '2020-01-23 01:10:48', 'active'),
(2, 'Admin', '2020-01-23 01:10:48', 'active'),
(3, 'SYDP Staff', '2020-02-26 16:10:25', 'active');

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
(1, 'Super Admin', 'Super Admin', 'Arvin Jhon I. Vertudez', 1, '2020-01-23 01:11:04', 'active'),
(2, 'Admin', 'Admin', 'Marianne S. Sayson', 2, '2020-03-01 21:21:30', 'active'),
(3, 'SYDP Staff', 'SYDP Staff', 'Leslie Sabuga', 3, '2020-03-01 21:21:50', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `t_application_batchyear`
--

CREATE TABLE `t_application_batchyear` (
  `app_batch_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_batch_year` varchar(255) NOT NULL,
  `app_batch_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `app_batch_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_application_batchyear`
--

INSERT INTO `t_application_batchyear` (`app_batch_id`, `app_profile_no`, `app_batch_year`, `app_batch_dateregistered`, `app_batch_status`) VALUES
(37, '20200302001', '2019 - 2020', '2020-03-03 23:16:01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_application_educationalbg`
--

CREATE TABLE `t_application_educationalbg` (
  `app_educ_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_educ_level` varchar(255) NOT NULL,
  `app_educ_schoolname` varchar(255) NOT NULL,
  `app_educ_type` varchar(255) NOT NULL,
  `app_educ_yeargraduated` varchar(255) NOT NULL,
  `app_educ_awards` varchar(255) NOT NULL,
  `app_educ_gwa` varchar(255) NOT NULL,
  `app_educ_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `app_educ_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_application_educationalbg`
--

INSERT INTO `t_application_educationalbg` (`app_educ_id`, `app_profile_no`, `app_educ_level`, `app_educ_schoolname`, `app_educ_type`, `app_educ_yeargraduated`, `app_educ_awards`, `app_educ_gwa`, `app_educ_dateregistered`, `app_educ_status`) VALUES
(186, '20200302001', 'Primary', 'Commonwealth Elementary School', '', '2011', 'Top 8', '82', '2020-03-03 23:16:01', 'Active'),
(187, '20200302001', 'Junior', 'Commonwealth High School', '', '2015', 'Top 2', '92', '2020-03-03 23:16:01', 'Active'),
(188, '20200302001', 'Senior', 'N/A', '', 'N/A', 'N/A', 'N/A', '2020-03-03 23:16:01', 'Active'),
(189, '20200302001', 'Tertiary', 'Polytechnic University of the Philippines - Quezon City', '', 'Continue', 'N/A', 'N/A', '2020-03-03 23:16:01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_application_student_familybg`
--

CREATE TABLE `t_application_student_familybg` (
  `app_familiy_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_family_relationship` varchar(255) NOT NULL,
  `app_family_firstname` varchar(255) NOT NULL,
  `app_family_middlename` varchar(255) NOT NULL,
  `app_family_lastname` varchar(255) NOT NULL,
  `app_family_age` varchar(255) NOT NULL,
  `app_family_civilstatus` varchar(255) NOT NULL,
  `app_family_educational` varchar(255) NOT NULL,
  `app_family_occupation` varchar(255) NOT NULL,
  `app_family_income` varchar(255) NOT NULL,
  `app_family_location` varchar(255) NOT NULL,
  `app_familiy_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `app_family_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_application_student_familybg`
--

INSERT INTO `t_application_student_familybg` (`app_familiy_id`, `app_profile_no`, `app_family_relationship`, `app_family_firstname`, `app_family_middlename`, `app_family_lastname`, `app_family_age`, `app_family_civilstatus`, `app_family_educational`, `app_family_occupation`, `app_family_income`, `app_family_location`, `app_familiy_dateregistered`, `app_family_status`) VALUES
(94, '20200302001', 'Father', 'Oscar', 'Broso', 'Vertudez', '69', 'Married', 'High School Graduate', 'Jeepney Driver', '7000', 'Quezon City', '2020-03-03 23:16:01', 'Active'),
(95, '20200302001', 'Mother', 'Marilou', 'Agapito', 'Israel', '65', 'Married', 'High School Graduate', 'N/A', 'N/A', 'Quezon City', '2020-03-03 23:16:01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_application_student_personalinfo`
--

CREATE TABLE `t_application_student_personalinfo` (
  `app_personal_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_personal_address` varchar(255) NOT NULL,
  `app_personal_barangay` varchar(255) NOT NULL,
  `app_personal_district` varchar(255) NOT NULL,
  `app_personal_birthdate` varchar(255) NOT NULL,
  `app_personal_age` varchar(255) NOT NULL,
  `app_personal_weight` varchar(255) NOT NULL,
  `app_personal_height` varchar(255) NOT NULL,
  `app_personal_civilstatus` varchar(255) NOT NULL,
  `app_personal_citizenship` varchar(255) NOT NULL,
  `app_personal_religion` varchar(255) NOT NULL,
  `app_personal_gender` varchar(255) NOT NULL,
  `app_personal_noofbrothers` varchar(255) NOT NULL,
  `app_personal_noofsisters` varchar(255) NOT NULL,
  `app_personal_ordinalposition` varchar(255) NOT NULL,
  `app_personal_teleno` varchar(255) NOT NULL,
  `app_personal_mobileno` varchar(255) NOT NULL,
  `app_personal_email` varchar(255) NOT NULL,
  `app_personal_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `app_personal_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_application_student_personalinfo`
--

INSERT INTO `t_application_student_personalinfo` (`app_personal_id`, `app_profile_no`, `app_personal_address`, `app_personal_barangay`, `app_personal_district`, `app_personal_birthdate`, `app_personal_age`, `app_personal_weight`, `app_personal_height`, `app_personal_civilstatus`, `app_personal_citizenship`, `app_personal_religion`, `app_personal_gender`, `app_personal_noofbrothers`, `app_personal_noofsisters`, `app_personal_ordinalposition`, `app_personal_teleno`, `app_personal_mobileno`, `app_personal_email`, `app_personal_dateregistered`, `app_personal_status`) VALUES
(38, '20200302001', 'Quezon City', 'Commonwealth', '2', '1997-10-13', '22', '53 kg ', '168 cm', 'Single', 'Filipino', 'Christian', 'Male', '4', '2', '7', 'N/A', '+639218629540', 'vertudez.arvinjhon@gmail.com', '2020-03-03 23:16:01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_application_student_profile`
--

CREATE TABLE `t_application_student_profile` (
  `app_profile_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_profile_firstname` varchar(255) NOT NULL,
  `app_profile_middlename` varchar(255) NOT NULL,
  `app_profile_lastname` varchar(255) NOT NULL,
  `app_profile_extensionname` varchar(255) NOT NULL,
  `univ_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `app_profile_studyear` varchar(255) NOT NULL,
  `app_profile_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `app_profile_status` enum('Pending','Approved','Scholar',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_application_student_profile`
--

INSERT INTO `t_application_student_profile` (`app_profile_id`, `app_profile_no`, `app_profile_firstname`, `app_profile_middlename`, `app_profile_lastname`, `app_profile_extensionname`, `univ_id`, `course_id`, `app_profile_studyear`, `app_profile_dateregistered`, `app_profile_status`) VALUES
(34, '20200302001', 'Arvin Jhon', 'Israel', 'Vertudez', 'N/A', 1, 1, '3', '2020-03-03 23:16:01', 'Scholar');

-- --------------------------------------------------------

--
-- Table structure for table `t_renewal`
--

CREATE TABLE `t_renewal` (
  `renewal_id` int(11) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `renewal_status` enum('Pending','Approved',',') NOT NULL,
  `renewal_dateregistered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_renewal`
--

INSERT INTO `t_renewal` (`renewal_id`, `scholar_profile_no`, `renewal_status`, `renewal_dateregistered`) VALUES
(7, '2020-ECON-03001', 'Pending', '2020-03-03 23:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `t_scholar_student`
--

CREATE TABLE `t_scholar_student` (
  `scholar_student_id` int(11) NOT NULL,
  `scholar_student_no` varchar(255) NOT NULL,
  `scholar_id` int(11) NOT NULL,
  `scholar_status` enum('Continue','Stop','Graduate',',') NOT NULL,
  `scholar_dateregistered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_scholar_student1_profile`
--

CREATE TABLE `t_scholar_student1_profile` (
  `scholar_profile_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `scholar_profile_firstname` varchar(255) NOT NULL,
  `scholar_profile_middlename` varchar(255) NOT NULL,
  `scholar_profile_lastname` varchar(255) NOT NULL,
  `scholar_profile_extensionname` varchar(255) NOT NULL,
  `scholar_id` int(11) NOT NULL,
  `univ_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `scholar_profile_studyear` varchar(255) NOT NULL,
  `scholar_profile_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `scholar_profile_status` enum('Continue','Stop','Graduate','Not Renew',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_scholar_student1_profile`
--

INSERT INTO `t_scholar_student1_profile` (`scholar_profile_id`, `app_profile_no`, `scholar_profile_no`, `scholar_profile_firstname`, `scholar_profile_middlename`, `scholar_profile_lastname`, `scholar_profile_extensionname`, `scholar_id`, `univ_id`, `course_id`, `scholar_profile_studyear`, `scholar_profile_dateregistered`, `scholar_profile_status`) VALUES
(39, '20200302001', '2020-ECON-03001', 'Arvin Jhon,', 'Israel', 'Vertudez', 'N/A', 3, 1, 1, '3', '2020-03-03 23:18:30', 'Continue');

-- --------------------------------------------------------

--
-- Table structure for table `t_scholar_student2_personalinfo`
--

CREATE TABLE `t_scholar_student2_personalinfo` (
  `scholar_personal_id` int(11) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `scholar_personal_address` varchar(255) NOT NULL,
  `scholar_personal_barangay` varchar(255) NOT NULL,
  `scholar_personal_district` varchar(255) NOT NULL,
  `scholar_personal_birthdate` varchar(255) NOT NULL,
  `scholar_personal_age` varchar(255) NOT NULL,
  `scholar_personal_weight` varchar(255) NOT NULL,
  `scholar_personal_height` varchar(255) NOT NULL,
  `scholar_personal_civilstatus` varchar(255) NOT NULL,
  `scholar_personal_citizenship` varchar(255) NOT NULL,
  `scholar_personal_religion` varchar(255) NOT NULL,
  `scholar_personal_gender` varchar(255) NOT NULL,
  `scholar_personal_noofbrothers` varchar(255) NOT NULL,
  `scholar_personal_noofsisters` varchar(255) NOT NULL,
  `scholar_personal_ordinalposition` varchar(255) NOT NULL,
  `scholar_personal_teleno` varchar(255) NOT NULL,
  `scholar_personal_mobileno` varchar(255) NOT NULL,
  `scholar_personal_email` varchar(255) NOT NULL,
  `scholar_personal_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `scholar_personal_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_scholar_student2_personalinfo`
--

INSERT INTO `t_scholar_student2_personalinfo` (`scholar_personal_id`, `scholar_profile_no`, `scholar_personal_address`, `scholar_personal_barangay`, `scholar_personal_district`, `scholar_personal_birthdate`, `scholar_personal_age`, `scholar_personal_weight`, `scholar_personal_height`, `scholar_personal_civilstatus`, `scholar_personal_citizenship`, `scholar_personal_religion`, `scholar_personal_gender`, `scholar_personal_noofbrothers`, `scholar_personal_noofsisters`, `scholar_personal_ordinalposition`, `scholar_personal_teleno`, `scholar_personal_mobileno`, `scholar_personal_email`, `scholar_personal_dateregistered`, `scholar_personal_status`) VALUES
(20, '2020-ECON-03001', 'Quezon City', 'Commonwealth', '2', '1997-10-13', '22', '53 kg ', '168 cm', 'Single', 'Filipino', 'Christian', 'Male', '4', '2', '7', 'N/A', '+639218629540', 'vertudez.arvinjhon@gmail.com', '2020-03-03 23:18:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_scholar_student3_familybg`
--

CREATE TABLE `t_scholar_student3_familybg` (
  `scholar_family_id` int(11) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `scholar_family_relationship` varchar(255) NOT NULL,
  `scholar_family_firstname` varchar(255) NOT NULL,
  `scholar_family_middlename` varchar(255) NOT NULL,
  `scholar_family_lastname` varchar(255) NOT NULL,
  `scholar_family_age` varchar(255) NOT NULL,
  `scholar_family_civilstatus` varchar(255) NOT NULL,
  `scholar_family_educational` varchar(255) NOT NULL,
  `scholar_family_occupation` varchar(255) NOT NULL,
  `scholar_family_income` varchar(255) NOT NULL,
  `scholar_family_location` varchar(255) NOT NULL,
  `scholar_family_contact` varchar(255) NOT NULL,
  `scholar_family_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `scholar_family_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_scholar_student3_familybg`
--

INSERT INTO `t_scholar_student3_familybg` (`scholar_family_id`, `scholar_profile_no`, `scholar_family_relationship`, `scholar_family_firstname`, `scholar_family_middlename`, `scholar_family_lastname`, `scholar_family_age`, `scholar_family_civilstatus`, `scholar_family_educational`, `scholar_family_occupation`, `scholar_family_income`, `scholar_family_location`, `scholar_family_contact`, `scholar_family_dateregistered`, `scholar_family_status`) VALUES
(10, '2020-ECON-03001', 'Mother', 'Marilou', 'Agapito', 'Israel', '64', 'Single', 'N/A', 'N/A', 'N/A', '', '+639214586234', '2020-03-03 23:18:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_scholar_student4_educationalbg`
--

CREATE TABLE `t_scholar_student4_educationalbg` (
  `scholar_educ_id` int(11) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `scholar_educ_level` varchar(255) NOT NULL,
  `scholar_educ_schoolname` varchar(255) NOT NULL,
  `scholar_educ_address` varchar(255) NOT NULL,
  `scholar_educ_type` varchar(255) NOT NULL,
  `scholar_educ_yeargraduated` varchar(255) NOT NULL,
  `scholar_educ_awards` varchar(255) NOT NULL,
  `scholar_educ_gwa` varchar(255) NOT NULL,
  `scholar_educ_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `scholar_educ_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_scholar_student4_educationalbg`
--

INSERT INTO `t_scholar_student4_educationalbg` (`scholar_educ_id`, `scholar_profile_no`, `scholar_educ_level`, `scholar_educ_schoolname`, `scholar_educ_address`, `scholar_educ_type`, `scholar_educ_yeargraduated`, `scholar_educ_awards`, `scholar_educ_gwa`, `scholar_educ_dateregistered`, `scholar_educ_status`) VALUES
(61, '2020-ECON-03001', 'Priamry', 'Commonwealth Elementary School', ' Quezon City', 'Public', '2015', 'Top 8', '85', '2020-03-03 23:18:30', 'Active'),
(62, '2020-ECON-03001', 'Secondary', 'Commonwealth High School', 'Quezon City', 'Public', '2015', 'Top 2', '92', '2020-03-03 23:18:30', 'Active'),
(63, '2020-ECON-03001', 'Senior', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2020-03-03 23:18:30', 'Active'),
(64, '2020-ECON-03001', 'Tertiary', 'Polytechnic University of the Philippines - Quezon City', 'Quezon City', 'Public', 'N/A', 'N/A', 'N/A', '2020-03-03 23:18:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_scholar_student5_batchyear`
--

CREATE TABLE `t_scholar_student5_batchyear` (
  `scholar_batch_id` int(11) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `scholar_batch_year` varchar(255) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `scholar_batch_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `scholar_batch_status` enum('Active','Disabled',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_scholar_student5_batchyear`
--

INSERT INTO `t_scholar_student5_batchyear` (`scholar_batch_id`, `scholar_profile_no`, `scholar_batch_year`, `semester_id`, `scholar_batch_dateregistered`, `scholar_batch_status`) VALUES
(14, '2020-ECON-03001', '2019 - 2020', 2, '2020-03-03 23:18:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_step2_appreq`
--

CREATE TABLE `t_step2_appreq` (
  `app_step2_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_step2_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `app_step2_status` enum('Completed','Incomplete',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_step2_appreq`
--

INSERT INTO `t_step2_appreq` (`app_step2_id`, `app_profile_no`, `app_step2_dateregistered`, `app_step2_status`) VALUES
(10, '20200302001', '2020-03-03 23:16:18', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `t_step3_appinterview`
--

CREATE TABLE `t_step3_appinterview` (
  `app_step3_id` int(11) NOT NULL,
  `app_profile_no` varchar(255) NOT NULL,
  `app_step3_scheduledate` varchar(255) NOT NULL,
  `app_step3_scheduletime` varchar(255) NOT NULL,
  `app_step3_remarks` enum('For Interview','Passed','Failed',',') NOT NULL,
  `app_step3_datergistered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_step3_appinterview`
--

INSERT INTO `t_step3_appinterview` (`app_step3_id`, `app_profile_no`, `app_step3_scheduledate`, `app_step3_scheduletime`, `app_step3_remarks`, `app_step3_datergistered`) VALUES
(13, '20200302001', '2020-03-04', '4:00 PM', 'Passed', '2020-03-03 23:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `t_stipen`
--

CREATE TABLE `t_stipen` (
  `stipen_id` int(11) NOT NULL,
  `scholar_profile_no` varchar(255) NOT NULL,
  `stipen_scheduledate` varchar(255) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `stipen_dateregistered` datetime NOT NULL DEFAULT current_timestamp(),
  `stipen_status` enum('Pending','For Release','Claimed','Unclaimed',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_stipen`
--

INSERT INTO `t_stipen` (`stipen_id`, `scholar_profile_no`, `stipen_scheduledate`, `semester_id`, `stipen_dateregistered`, `stipen_status`) VALUES
(3, '2020-ECON-03001', '2020-03-17', 2, '2020-03-03 23:18:30', 'Claimed');

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
(14, 1, 1, '2020-01-26', '04:14:36'),
(15, 1, 1, '2020-02-26', '15:40:17'),
(16, 1, 1, '2020-02-26', '16:10:53'),
(17, 1, 1, '2020-02-26', '16:11:56'),
(18, 1, 1, '2020-02-26', '18:03:13'),
(19, 1, 1, '2020-02-26', '21:37:08'),
(20, 1, 1, '2020-02-27', '00:31:28'),
(21, 1, 1, '2020-02-28', '13:10:10'),
(22, 1, 1, '2020-02-28', '13:14:43'),
(23, 1, 1, '2020-02-28', '13:31:36'),
(24, 1, 1, '2020-02-28', '21:31:06'),
(25, 1, 1, '2020-02-28', '21:43:50'),
(26, 1, 1, '2020-02-29', '00:15:20'),
(27, 1, 1, '2020-02-29', '00:16:52'),
(28, 1, 1, '2020-02-29', '01:24:24'),
(29, 1, 1, '2020-02-29', '02:04:01'),
(30, 1, 1, '2020-02-29', '19:48:27'),
(31, 1, 1, '2020-02-29', '19:48:33'),
(32, 1, 1, '2020-02-29', '19:48:55'),
(33, 1, 1, '2020-02-29', '20:17:02'),
(34, 1, 1, '2020-02-29', '22:14:53'),
(35, 1, 1, '2020-02-29', '22:31:03'),
(36, 1, 1, '2020-02-29', '22:57:46'),
(37, 1, 1, '2020-02-29', '23:00:29'),
(38, 1, 1, '2020-02-29', '23:05:16'),
(39, 1, 1, '2020-02-29', '23:08:04'),
(40, 1, 1, '2020-02-29', '23:09:03'),
(41, 1, 1, '2020-03-01', '10:39:42'),
(42, 1, 1, '2020-03-01', '21:24:35'),
(43, 1, 1, '2020-03-01', '22:53:55'),
(44, 1, 1, '2020-03-02', '02:17:52'),
(45, 1, 1, '2020-03-02', '02:18:52'),
(46, 1, 1, '2020-03-02', '04:14:28'),
(47, 1, 1, '2020-03-02', '04:19:04'),
(48, 1, 1, '2020-03-02', '18:30:03'),
(49, 3, 3, '2020-03-02', '19:00:03'),
(50, 3, 3, '2020-03-02', '19:00:34'),
(51, 2, 2, '2020-03-02', '19:00:39'),
(52, 3, 3, '2020-03-02', '19:00:51'),
(53, 3, 3, '2020-03-02', '19:01:36'),
(54, 2, 2, '2020-03-02', '19:12:27'),
(55, 2, 2, '2020-03-02', '19:12:43'),
(56, 3, 3, '2020-03-02', '19:13:07'),
(57, 2, 2, '2020-03-02', '19:13:29'),
(58, 3, 3, '2020-03-02', '19:20:00'),
(59, 2, 2, '2020-03-02', '19:27:44'),
(60, 3, 3, '2020-03-03', '01:29:17'),
(61, 3, 3, '2020-03-03', '10:05:15'),
(62, 3, 3, '2020-03-03', '10:20:51'),
(63, 3, 3, '2020-03-03', '15:41:09'),
(64, 2, 2, '2020-03-03', '15:45:32'),
(65, 3, 3, '2020-03-03', '15:45:54'),
(66, 2, 2, '2020-03-03', '15:57:35'),
(67, 3, 3, '2020-03-03', '15:57:59'),
(68, 3, 3, '2020-03-03', '16:37:29'),
(69, 3, 3, '2020-03-03', '22:22:38'),
(70, 2, 2, '2020-03-03', '23:03:53'),
(71, 3, 3, '2020-03-03', '23:04:15'),
(72, 2, 2, '2020-03-03', '23:09:54'),
(73, 3, 3, '2020-03-03', '23:10:26'),
(74, 2, 2, '2020-03-03', '23:16:30'),
(75, 3, 3, '2020-03-03', '23:16:53'),
(76, 2, 2, '2020-03-03', '23:17:31'),
(77, 3, 3, '2020-03-03', '23:17:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r_academic_year`
--
ALTER TABLE `r_academic_year`
  ADD PRIMARY KEY (`acadyr_id`);

--
-- Indexes for table `r_beneficiary`
--
ALTER TABLE `r_beneficiary`
  ADD PRIMARY KEY (`beneficiary_id`);

--
-- Indexes for table `r_course`
--
ALTER TABLE `r_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `r_requirement`
--
ALTER TABLE `r_requirement`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `r_scholar`
--
ALTER TABLE `r_scholar`
  ADD PRIMARY KEY (`scholar_id`);

--
-- Indexes for table `r_semester`
--
ALTER TABLE `r_semester`
  ADD PRIMARY KEY (`semester_id`);

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
-- Indexes for table `t_application_batchyear`
--
ALTER TABLE `t_application_batchyear`
  ADD PRIMARY KEY (`app_batch_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_application_educationalbg`
--
ALTER TABLE `t_application_educationalbg`
  ADD PRIMARY KEY (`app_educ_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_application_student_familybg`
--
ALTER TABLE `t_application_student_familybg`
  ADD PRIMARY KEY (`app_familiy_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_application_student_personalinfo`
--
ALTER TABLE `t_application_student_personalinfo`
  ADD PRIMARY KEY (`app_personal_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_application_student_profile`
--
ALTER TABLE `t_application_student_profile`
  ADD PRIMARY KEY (`app_profile_id`),
  ADD KEY `univ_id` (`univ_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_renewal`
--
ALTER TABLE `t_renewal`
  ADD PRIMARY KEY (`renewal_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`);

--
-- Indexes for table `t_scholar_student`
--
ALTER TABLE `t_scholar_student`
  ADD PRIMARY KEY (`scholar_student_id`),
  ADD KEY `scholar_id` (`scholar_id`);

--
-- Indexes for table `t_scholar_student1_profile`
--
ALTER TABLE `t_scholar_student1_profile`
  ADD PRIMARY KEY (`scholar_profile_id`),
  ADD KEY `univ_id` (`univ_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`),
  ADD KEY `scholar_id` (`scholar_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_scholar_student2_personalinfo`
--
ALTER TABLE `t_scholar_student2_personalinfo`
  ADD PRIMARY KEY (`scholar_personal_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`),
  ADD KEY `scholar_profile_no_2` (`scholar_profile_no`);

--
-- Indexes for table `t_scholar_student3_familybg`
--
ALTER TABLE `t_scholar_student3_familybg`
  ADD PRIMARY KEY (`scholar_family_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`);

--
-- Indexes for table `t_scholar_student4_educationalbg`
--
ALTER TABLE `t_scholar_student4_educationalbg`
  ADD PRIMARY KEY (`scholar_educ_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`);

--
-- Indexes for table `t_scholar_student5_batchyear`
--
ALTER TABLE `t_scholar_student5_batchyear`
  ADD PRIMARY KEY (`scholar_batch_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `t_step2_appreq`
--
ALTER TABLE `t_step2_appreq`
  ADD PRIMARY KEY (`app_step2_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_step3_appinterview`
--
ALTER TABLE `t_step3_appinterview`
  ADD PRIMARY KEY (`app_step3_id`),
  ADD KEY `app_profile_no` (`app_profile_no`);

--
-- Indexes for table `t_stipen`
--
ALTER TABLE `t_stipen`
  ADD PRIMARY KEY (`stipen_id`),
  ADD KEY `scholar_profile_no` (`scholar_profile_no`),
  ADD KEY `semester_id` (`semester_id`);

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
-- AUTO_INCREMENT for table `r_academic_year`
--
ALTER TABLE `r_academic_year`
  MODIFY `acadyr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `r_beneficiary`
--
ALTER TABLE `r_beneficiary`
  MODIFY `beneficiary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_course`
--
ALTER TABLE `r_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_requirement`
--
ALTER TABLE `r_requirement`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `r_scholar`
--
ALTER TABLE `r_scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r_semester`
--
ALTER TABLE `r_semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_university`
--
ALTER TABLE `r_university`
  MODIFY `univ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `r_userrole`
--
ALTER TABLE `r_userrole`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_accounts`
--
ALTER TABLE `t_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_application_batchyear`
--
ALTER TABLE `t_application_batchyear`
  MODIFY `app_batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `t_application_educationalbg`
--
ALTER TABLE `t_application_educationalbg`
  MODIFY `app_educ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `t_application_student_familybg`
--
ALTER TABLE `t_application_student_familybg`
  MODIFY `app_familiy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `t_application_student_personalinfo`
--
ALTER TABLE `t_application_student_personalinfo`
  MODIFY `app_personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `t_application_student_profile`
--
ALTER TABLE `t_application_student_profile`
  MODIFY `app_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `t_renewal`
--
ALTER TABLE `t_renewal`
  MODIFY `renewal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_scholar_student`
--
ALTER TABLE `t_scholar_student`
  MODIFY `scholar_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_scholar_student1_profile`
--
ALTER TABLE `t_scholar_student1_profile`
  MODIFY `scholar_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `t_scholar_student2_personalinfo`
--
ALTER TABLE `t_scholar_student2_personalinfo`
  MODIFY `scholar_personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_scholar_student3_familybg`
--
ALTER TABLE `t_scholar_student3_familybg`
  MODIFY `scholar_family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_scholar_student4_educationalbg`
--
ALTER TABLE `t_scholar_student4_educationalbg`
  MODIFY `scholar_educ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `t_scholar_student5_batchyear`
--
ALTER TABLE `t_scholar_student5_batchyear`
  MODIFY `scholar_batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_step2_appreq`
--
ALTER TABLE `t_step2_appreq`
  MODIFY `app_step2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_step3_appinterview`
--
ALTER TABLE `t_step3_appinterview`
  MODIFY `app_step3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_stipen`
--
ALTER TABLE `t_stipen`
  MODIFY `stipen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_userlog`
--
ALTER TABLE `t_userlog`
  MODIFY `log_NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `r_requirement`
--
ALTER TABLE `r_requirement`
  ADD CONSTRAINT `r_requirement_ibfk_1` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_accounts`
--
ALTER TABLE `t_accounts`
  ADD CONSTRAINT `t_accounts_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `r_userrole` (`roleid`);

--
-- Constraints for table `t_application_batchyear`
--
ALTER TABLE `t_application_batchyear`
  ADD CONSTRAINT `t_application_batchyear_ibfk_1` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_application_educationalbg`
--
ALTER TABLE `t_application_educationalbg`
  ADD CONSTRAINT `t_application_educationalbg_ibfk_1` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_application_student_familybg`
--
ALTER TABLE `t_application_student_familybg`
  ADD CONSTRAINT `t_application_student_familybg_ibfk_1` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_application_student_personalinfo`
--
ALTER TABLE `t_application_student_personalinfo`
  ADD CONSTRAINT `t_application_student_personalinfo_ibfk_1` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_application_student_profile`
--
ALTER TABLE `t_application_student_profile`
  ADD CONSTRAINT `t_application_student_profile_ibfk_1` FOREIGN KEY (`univ_id`) REFERENCES `r_university` (`univ_id`),
  ADD CONSTRAINT `t_application_student_profile_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `r_course` (`course_id`);

--
-- Constraints for table `t_renewal`
--
ALTER TABLE `t_renewal`
  ADD CONSTRAINT `t_renewal_ibfk_1` FOREIGN KEY (`scholar_profile_no`) REFERENCES `t_scholar_student1_profile` (`scholar_profile_no`);

--
-- Constraints for table `t_scholar_student`
--
ALTER TABLE `t_scholar_student`
  ADD CONSTRAINT `t_scholar_student_ibfk_2` FOREIGN KEY (`scholar_id`) REFERENCES `r_scholar` (`scholar_id`);

--
-- Constraints for table `t_scholar_student1_profile`
--
ALTER TABLE `t_scholar_student1_profile`
  ADD CONSTRAINT `t_scholar_student1_profile_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `r_course` (`course_id`),
  ADD CONSTRAINT `t_scholar_student1_profile_ibfk_2` FOREIGN KEY (`univ_id`) REFERENCES `r_university` (`univ_id`),
  ADD CONSTRAINT `t_scholar_student1_profile_ibfk_3` FOREIGN KEY (`scholar_id`) REFERENCES `r_scholar` (`scholar_id`),
  ADD CONSTRAINT `t_scholar_student1_profile_ibfk_4` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_scholar_student2_personalinfo`
--
ALTER TABLE `t_scholar_student2_personalinfo`
  ADD CONSTRAINT `t_scholar_student2_personalinfo_ibfk_1` FOREIGN KEY (`scholar_profile_no`) REFERENCES `t_scholar_student1_profile` (`scholar_profile_no`);

--
-- Constraints for table `t_scholar_student3_familybg`
--
ALTER TABLE `t_scholar_student3_familybg`
  ADD CONSTRAINT `t_scholar_student3_familybg_ibfk_1` FOREIGN KEY (`scholar_profile_no`) REFERENCES `t_scholar_student1_profile` (`scholar_profile_no`);

--
-- Constraints for table `t_scholar_student4_educationalbg`
--
ALTER TABLE `t_scholar_student4_educationalbg`
  ADD CONSTRAINT `t_scholar_student4_educationalbg_ibfk_1` FOREIGN KEY (`scholar_profile_no`) REFERENCES `t_scholar_student1_profile` (`scholar_profile_no`);

--
-- Constraints for table `t_scholar_student5_batchyear`
--
ALTER TABLE `t_scholar_student5_batchyear`
  ADD CONSTRAINT `t_scholar_student5_batchyear_ibfk_1` FOREIGN KEY (`scholar_profile_no`) REFERENCES `t_scholar_student1_profile` (`scholar_profile_no`),
  ADD CONSTRAINT `t_scholar_student5_batchyear_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `r_semester` (`semester_id`);

--
-- Constraints for table `t_step2_appreq`
--
ALTER TABLE `t_step2_appreq`
  ADD CONSTRAINT `t_step2_appreq_ibfk_2` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_step3_appinterview`
--
ALTER TABLE `t_step3_appinterview`
  ADD CONSTRAINT `t_step3_appinterview_ibfk_2` FOREIGN KEY (`app_profile_no`) REFERENCES `t_application_student_profile` (`app_profile_no`);

--
-- Constraints for table `t_stipen`
--
ALTER TABLE `t_stipen`
  ADD CONSTRAINT `t_stipen_ibfk_1` FOREIGN KEY (`scholar_profile_no`) REFERENCES `t_scholar_student1_profile` (`scholar_profile_no`),
  ADD CONSTRAINT `t_stipen_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `r_semester` (`semester_id`);

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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclebookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `tms_admin`
--

CREATE TABLE `tms_admin` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_admin`
--

INSERT INTO `tms_admin` (`a_id`, `a_name`, `a_email`, `a_pwd`) VALUES
(1, 'System Admin', 'admin@mail.com', 'codeastro.com');

-- --------------------------------------------------------

--
-- Table structure for table `tms_feedback`
--

CREATE TABLE `tms_feedback` (
  `f_id` int(20) NOT NULL,
  `f_uname` varchar(200) NOT NULL,
  `f_content` longtext NOT NULL,
  `f_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_feedback`
--

INSERT INTO `tms_feedback` (`f_id`, `f_uname`, `f_content`, `f_status`) VALUES
(1, 'Elliot Gape', 'This is a demo feedback text. This is a demo feedback text. This is a demo feedback text.', 'Published'),
(2, 'Mark L. Anderson', 'Sample Feedback Text for testing! Sample Feedback Text for testing! Sample Feedback Text for testing!', 'Published'),
(3, 'Liam Moore ', 'test number 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tms_pwd_resets`
--

CREATE TABLE `tms_pwd_resets` (
  `r_id` int(20) NOT NULL,
  `r_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_pwd_resets`
--

INSERT INTO `tms_pwd_resets` (`r_id`, `r_email`) VALUES
(2, 'admin@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tms_syslogs`
--

CREATE TABLE `tms_syslogs` (
  `l_id` int(20) NOT NULL,
  `u_id` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_ip` varbinary(200) NOT NULL,
  `u_city` varchar(200) NOT NULL,
  `u_country` varchar(200) NOT NULL,
  `u_logintime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tms_user`
--

CREATE TABLE `tms_user` (
  `u_id` int(20) NOT NULL,
  `u_fname` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_phone` varchar(200) NOT NULL,
  `u_addr` varchar(200) NOT NULL,
  `u_category` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_loan_type` varchar(200) NOT NULL,
  `u_car_regno` varchar(200) NOT NULL,
  `u_car_bookdate` varchar(200) NOT NULL,
  `u_car_book_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_user`
--

INSERT INTO `tms_user` (`u_id`, `u_fname`, `u_lname`, `u_phone`, `u_addr`, `u_category`, `u_email`, `u_pwd`, `u_loan_type`, `u_car_regno`, `u_car_bookdate`, `u_car_book_status`) VALUES
(3, 'Demo', 'User', '070678909', '90100 Machakos ', 'Driver', 'demouser@tms.com', 'demo123', '', '', '', ''),
(4, 'John', 'Settles', '7145698540', '45 Clearview Drive', 'Driver', 'johns@mail.com', 'password', '', '', '', ''),
(5, 'Joseph', 'Yung', '7896587777', '72 Doe Meadow Drive', 'Driver', 'joseph@mail.com', 'password', '', '', '', ''),
(6, 'Vincent', 'Pelletier', '4580001456', '58 Farland Avenue', 'Driver', 'vincentp@mail.com', 'password', '', '', '', ''),
(7, 'Jesse', 'Robinson', '1458887855', '73 Fleming Way', 'Driver', 'jesser@mail.com', 'password', '', '', '', ''),
(8, 'Nelson', 'Ford', '7458965874', '58 West Side Avenue', 'User', 'nelford@mail.com', 'password', '', '', '', ''),
(9, 'Paul', 'Mills', '7412563258', '12 Red Maple Drive', 'User', 'paul@mail.com', 'password', 'Personal Loan', '0%', '2022-09-14', 'Approved'),
(10, 'Liam', 'Moore', '7410001212', '114 Bleck Street', 'User', 'liamoore@mail.com', 'password', 'Business Loan', '0%', '2022-09-14', 'Approved'),
(11, 'Jeff', 'Lewis', '7854545454', '114 Test Adr', 'User', 'jeff@mail.com', 'password', 'Business Loan', '0%', '2022-09-14', 'Approved'),
(12, 'Kenya', 'Norman', '7896547855', '114 Test Addr', 'User', 'normank@mail.com', 'password', 'Mortrage Loan', '0%', '2022-09-15', 'Pending'),
(14, 'James', 'Cruz', '0956824621', 'Blk 2 Lot 25', 'User', 'jamescruz@gmail.com', 'james', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tms_vehicle`
--

CREATE TABLE `tms_vehicle` (
  `v_id` int(20) NOT NULL,
  `v_name` varchar(200) NOT NULL,
  `v_reg_no` varchar(200) NOT NULL,
  `v_range` varchar(200) NOT NULL,
  `v_pass_no` varchar(200) NOT NULL,
  `v_driver` varchar(200) NOT NULL,
  `v_category` varchar(200) NOT NULL,
  `v_dpic` varchar(200) NOT NULL,
  `v_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_vehicle`
--

INSERT INTO `tms_vehicle` (`v_id`, `v_name`, `v_reg_no`, `v_range`, `v_pass_no`, `v_driver`, `v_category`, `v_dpic`, `v_status`) VALUES
(3, 'Marriage', '10%', '2 years', '50', 'Vincent Pelletier', 'Personal Loan', 'buscch.jpg', 'Available'),
(4, 'Car Loan', '10%', '5 years', '5', 'Joseph Yung', 'Business Loan', '2019_honda_accord_angularfront.jpg', 'Available'),
(5, 'Enrollment/Tuition', '10%', '3 years', '5', 'Jesse Robinson', 'Personal Loan', 'volkswagen-passat-500.jpg', 'Available'),
(6, 'House/Property', '10%', '4 years', '7', 'Demo User', 'Personal Loan', 'Nissan_Rogue_SV_2021.jpg', 'Available'),
(7, 'Financial Loan', '10%', '5 years', '5', 'John Settles', 'Mortgage Loan', 'Subaru_Legacy_Premium_2022_2.jpg', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tms_admin`
--
ALTER TABLE `tms_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tms_feedback`
--
ALTER TABLE `tms_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tms_pwd_resets`
--
ALTER TABLE `tms_pwd_resets`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tms_syslogs`
--
ALTER TABLE `tms_syslogs`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tms_user`
--
ALTER TABLE `tms_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tms_vehicle`
--
ALTER TABLE `tms_vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tms_admin`
--
ALTER TABLE `tms_admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tms_feedback`
--
ALTER TABLE `tms_feedback`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tms_pwd_resets`
--
ALTER TABLE `tms_pwd_resets`
  MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tms_syslogs`
--
ALTER TABLE `tms_syslogs`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tms_user`
--
ALTER TABLE `tms_user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tms_vehicle`
--
ALTER TABLE `tms_vehicle`
  MODIFY `v_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

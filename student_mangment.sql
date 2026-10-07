-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2026 at 05:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_mangment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(55) NOT NULL,
  `usersname` varchar(55) NOT NULL,
  `password` varchar(450) NOT NULL,
  `profile_picture` varchar(355) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `usersname`, `password`, `profile_picture`, `status`) VALUES
(5, 'amir hilal khan', 'amir555', '$2y$10$4dpnEKDoCm2zJlI57f3Xue8vg57Ipr/s.n3l4TvxWD3LJC25Ririi', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `program_id`, `start_time`, `teacher_id`, `status`) VALUES
(1, 4, 15, 1, 'Active'),
(5, 5, 3, 2, 'Active'),
(6, 2, 3, 2, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fee_transactions`
--

CREATE TABLE `fee_transactions` (
  `transactions_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `amount_recieved` float NOT NULL,
  `add_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee_transactions`
--

INSERT INTO `fee_transactions` (`transactions_id`, `student_id`, `amount_recieved`, `add_date_time`) VALUES
(46, 52, 2000, '2026-10-07 01:49:14'),
(47, 52, 18000, '2026-10-07 01:49:20'),
(48, 54, 5000, '2026-10-07 01:49:31'),
(49, 54, 5000, '2026-10-07 01:49:40'),
(50, 54, 20000, '2026-10-07 02:37:57'),
(51, 55, 20000, '2026-10-07 02:38:11'),
(52, 55, 10000, '2026-10-07 02:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'Day',
  `program_fee` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = active 0 = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `title`, `duration`, `program_fee`, `status`) VALUES
(2, 'web class', 3, 30000, 1),
(4, 'English Dpel', 8, 20000, 1),
(5, 'DIT', 8, 15000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `father_name` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(119) NOT NULL,
  `phone` int(25) NOT NULL,
  `address` varchar(220) NOT NULL,
  `gender` text NOT NULL,
  `program_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `add_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `full_name`, `father_name`, `dob`, `email`, `phone`, `address`, `gender`, `program_id`, `status`, `add_date`) VALUES
(54, 'amir hilal', 'sher ali ', '2026-09-29', 'amirhilal908@gmail.com', 983092313, 'osme of gthe ', 'Male', 2, 'active', '2026-10-05 11:35:01'),
(55, 'amir hilal', 'shdsa', '2026-09-30', 'amirhilal908@gmail.com', 2147483647, 'some of teh utaey', 'Male', 2, 'active', '2026-10-07 00:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `student_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` varchar(33) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`student_class_id`, `student_id`, `class_id`, `status`) VALUES
(8, 54, 5, 'active'),
(9, 55, 6, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `student_fee_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `fee_amount` float NOT NULL,
  `amount_paid` double NOT NULL,
  `remainning_amount` int(11) NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(33) NOT NULL DEFAULT 'unpaid',
  `add_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`student_fee_id`, `student_id`, `fee_amount`, `amount_paid`, `remainning_amount`, `payment_status`, `add_date_time`) VALUES
(1, 47, 30000, 0, 15000, 'paid', '2026-09-30 09:29:38'),
(2, 49, 30000, 5000, 15000, 'partical', '2026-09-30 18:39:20'),
(21, 50, 30000, 0, 30000, 'unpaid', '2026-10-01 10:18:28'),
(22, 51, 30000, 0, 30000, 'unpaid', '2026-10-03 17:14:32'),
(23, 52, 20000, 20000, 0, 'paid', '2026-10-03 18:02:25'),
(24, 53, 30000, 0, 30000, 'unpaid', '2026-10-03 18:41:55'),
(25, 54, 30000, 30000, 0, 'paid', '2026-10-05 18:35:01'),
(26, 55, 30000, 30000, 0, 'paid', '2026-10-07 07:30:15'),
(27, 56, 30000, 0, 30000, 'unpaid', '2026-10-07 09:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `father_name` text NOT NULL,
  `email` varchar(110) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(130) NOT NULL,
  `status` text NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `full_name`, `father_name`, `email`, `phone`, `address`, `status`) VALUES
(1, 'amir hilal', 'sher ali', 'amirhilal908@gmail.com', '983092313', 'city collage ', 'active'),
(2, 'abuzar ', 'jan khan', 'amirhilal908@gmail.com', '0983092313', 'zaryab colony ', 'active'),
(8, 'khan', 'jan', 'amirhilal908@gmail.com', '8667676655645', 'some addrss', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `fee_transactions`
--
ALTER TABLE `fee_transactions`
  ADD PRIMARY KEY (`transactions_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`student_class_id`);

--
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`student_fee_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee_transactions`
--
ALTER TABLE `fee_transactions`
  MODIFY `transactions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `student_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_fee`
--
ALTER TABLE `student_fee`
  MODIFY `student_fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

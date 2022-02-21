-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 07:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marksheet_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'manish@gmail.com', '123'),
(2, 'ayush@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fees_plan`
--

CREATE TABLE `fees_plan` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_fees_details`
--

CREATE TABLE `student_fees_details` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `month` date NOT NULL,
  `fess_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fees_details`
--

INSERT INTO `student_fees_details` (`id`, `student_id`, `class_id`, `month`, `fess_amount`) VALUES
(1, 1, 9, '2021-07-01', 1000),
(2, 1, 9, '2021-08-01', 1000),
(3, 1, 9, '2021-09-01', 1000),
(4, 1, 9, '2021-10-01', 1000),
(5, 1, 9, '2021-11-01', 1000),
(6, 1, 9, '2021-12-01', 1000),
(7, 1, 9, '2022-01-01', 1000),
(9, 2, 9, '2021-07-01', 1000),
(10, 2, 9, '2021-08-01', 1000),
(11, 2, 9, '2021-09-01', 1000),
(12, 2, 9, '2021-10-01', 1000),
(13, 3, 9, '2021-07-01', 1000),
(14, 3, 9, '2021-08-01', 1000),
(15, 3, 9, '2021-09-01', 500),
(16, 3, 9, '2021-10-01', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `student_id`, `subject_id`, `marks`) VALUES
(1, 1, 1, 30),
(2, 1, 2, 32),
(3, 1, 3, 20),
(4, 1, 4, 25),
(5, 1, 5, 50),
(6, 1, 6, 10),
(7, 2, 1, 77),
(8, 2, 2, 59),
(9, 2, 3, 68),
(10, 2, 4, 88),
(11, 2, 5, 76),
(12, 2, 6, 80),
(13, 3, 1, 88),
(14, 3, 2, 58),
(15, 3, 3, 85),
(16, 3, 4, 67),
(17, 3, 5, 55),
(18, 3, 6, 82),
(19, 4, 1, 80),
(20, 4, 2, 89),
(21, 4, 3, 92),
(22, 4, 4, 75),
(23, 4, 5, 77),
(24, 4, 6, 60);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `class` varchar(100) NOT NULL,
  `forwarded` varchar(1) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `enrollment`, `pass`, `fullname`, `age`, `email`, `city`, `class`, `forwarded`, `status`) VALUES
(1, 'en0001', '123', 'sonam', 20, 'sonam@gmail.com', 'raipur', '9', '1', '1'),
(2, 'en0002', '123', 'shiva', 24, 'shiva@gmail.com', 'jabalpur', '9', '0', '0'),
(3, 'en0003', '123', 'puneet', 22, 'puneet@gmail.com', 'bhopal', '9', '0', '1'),
(4, 'en0004', '123', 'aryan', 23, 'aryan@gmail.com', 'lucknow', '9', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject_details`
--

CREATE TABLE `subject_details` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_class` varchar(100) NOT NULL,
  `total_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_details`
--

INSERT INTO `subject_details` (`id`, `subject_name`, `subject_code`, `subject_class`, `total_marks`) VALUES
(1, 'hindi', 'hin01', '9', 100),
(2, 'english', 'eng02', '9', 100),
(3, 'maths', 'mat03', '9', 100),
(4, 'science', 'sci04', '9', 100),
(5, 'g.k', 'gk005', '9', 100),
(6, 'practical', 'sub06', '9', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_plan`
--
ALTER TABLE `fees_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees_details`
--
ALTER TABLE `student_fees_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_details`
--
ALTER TABLE `subject_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fees_plan`
--
ALTER TABLE `fees_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_fees_details`
--
ALTER TABLE `student_fees_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject_details`
--
ALTER TABLE `subject_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

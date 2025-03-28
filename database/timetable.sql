-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 06:19 AM
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
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(30) NOT NULL,
  `user_id` int(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_full_name` varchar(60) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `faculty_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `user_id`, `course_name`, `course_full_name`, `semester`, `section`, `subject_id`, `faculty_id`) VALUES
(49, 24, 'BBA', 'Bachelor of Business Application', 'one', 'a', '24', '24'),
(50, 28, 'BSC', 'Computer Science', 'one', 'a', '26', '25'),
(51, 28, 'BSC', 'Computer Science', 'one', 'a', '27', '25'),
(52, 28, 'BSC', 'Computer Science', 'one', 'a', '28', '25');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(30) NOT NULL,
  `user_id` int(50) NOT NULL,
  `faculty_code` varchar(30) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `user_id`, `faculty_code`, `faculty_name`, `designation`, `qualification`) VALUES
(24, 24, '435', 'bbbbb', 'bbbbbb', 'bbbbb'),
(25, 28, 'CS', 'Science', 'Dean', 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(30) NOT NULL,
  `user_id` int(50) NOT NULL,
  `subject_code` varchar(30) NOT NULL,
  `subject_name` varchar(60) NOT NULL,
  `l` varchar(15) NOT NULL,
  `t` varchar(15) NOT NULL,
  `p` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `user_id`, `subject_code`, `subject_name`, `l`, `t`, `p`) VALUES
(24, 24, '123', 'aaaaa', '2', '1', '4'),
(25, 25, 'MAT 100', 'BASIC MATH', '20', '400', '50'),
(26, 28, 'Mat 100', 'Basic Mathematics', '20', '40', '20'),
(27, 28, 'CMT 101', 'Introduction to Computer', '20', '45', '30'),
(28, 28, 'GS 102', 'Environmental Studies', '25', '40', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tablesheet`
--

CREATE TABLE `tablesheet` (
  `id` int(10) NOT NULL,
  `cell` varchar(4) NOT NULL,
  `data` varchar(10) NOT NULL,
  `faculty_name` varchar(20) NOT NULL,
  `timetable_id` varchar(20) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tablesheet`
--

INSERT INTO `tablesheet` (`id`, `cell`, `data`, `faculty_name`, `timetable_id`, `user_id`) VALUES
(85, '10', '123', 'bbbbb', '18', 24),
(86, '19', '123', 'bbbbb', '18', 24),
(87, '27', '123', 'bbbbb', '18', 24),
(89, '37', '123', 'bbbbb', '18', 24),
(90, '8', '123', 'bbbbb', '18', 24),
(91, '40', '123', 'bbbbb', '18', 24),
(92, '9', '123', 'bbbbb', '18', 24);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(20) NOT NULL,
  `user_id` int(50) NOT NULL,
  `course_full_name` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `user_id`, `course_full_name`, `year`, `semester`, `course`) VALUES
(18, 24, 'Bachelor of Business Application', '2014-2015', 'one', 'BBA'),
(19, 28, 'Computer Science', '2023-2024', 'one', 'BSC');

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE `timing` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `first` varchar(20) NOT NULL,
  `second` varchar(20) NOT NULL,
  `third` varchar(20) NOT NULL,
  `fourth` varchar(20) NOT NULL,
  `fifth` varchar(20) NOT NULL,
  `sixth` varchar(20) NOT NULL,
  `seventh` varchar(20) NOT NULL,
  `eight` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`id`, `user_id`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `seventh`, `eight`) VALUES
(3, '24', '8 -9', '9-10', '10-11', '11-12', '12-13', '13-14', '14-15', '15-16'),
(4, '28', '8:30 - 10:30', '10:30 - 12:30', '13:00 -15:00', '15:00 - 17: 00', '9:00 - 11:00', '11:00 - 12:00', '12:00 - 13:00', '14:00 - 15:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Department`, `School`, `Password`) VALUES
(1, 'Kelvin', 'kelvo@shi.sa', 'Science', 'Shule', '$2y$10$bY2vcRNlUXUPfmoxP0eG6.P.H7Om5WKd/AJZhUveRlBeuxMLliISu'),
(2, 'Kelvin', 'kelvoshisanya@gmail.com', 'Science', 'Shule', '$2y$10$5Vhh9Mue8RiZMZVEkpHfPOHEbfcUQsCfFAxHVbBDpltPQCiw4ial2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `uname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `ip_address`, `date`, `time`, `username`, `email`, `uname`) VALUES
(24, '123', '::1', '2015-05-25', '12:49:04', 'anurag', 'anuragambraham@gmail.com', 'Sharda University'),
(25, 'Shule@1234', '::1', '2025-03-12', '14:12:02', 'Shule', 'shule@shule.com', 'Shule'),
(26, 'M@tanui17', '::1', '2025-03-12', '14:48:36', '2511', 'maurinetanui10@gmail.com', 'maurine tanui'),
(27, 'hkjk', '::1', '2025-03-21', '13:26:43', 'jkjk', 'jkk', 'kljk'),
(28, '1234', '::1', '2025-03-27', '15:51:47', 'Kelvoshisanya', 'admin@shule.com', 'Shule');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tablesheet`
--
ALTER TABLE `tablesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tablesheet`
--
ALTER TABLE `tablesheet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `timing`
--
ALTER TABLE `timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

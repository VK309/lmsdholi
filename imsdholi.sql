-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 12:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imsdholi`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_student`
--

CREATE TABLE `assign_student` (
  `id` int(255) NOT NULL,
  `lesson_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_student`
--

INSERT INTO `assign_student` (`id`, `lesson_id`, `student_id`, `status`) VALUES
(1, '4', '3', 'assign');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `created_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `coursename`, `created_date`) VALUES
(3, 'test', '2023-05-22'),
(4, 'new', '2023-05-22'),
(5, 'dhol', '2023-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(255) NOT NULL,
  `lesson_number` varchar(255) NOT NULL,
  `lessonname` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `lesson_number`, `lessonname`, `course_id`, `date_created`) VALUES
(1, '1', 'lesson', '4', '2023-05-22 19:22:28'),
(3, '1', 'test one', '3', '2023-05-23 12:18:26'),
(4, '1', 'Dhol lesson one', '5', '2023-05-26 19:28:37'),
(5, '2', 'test lesson ', '5', '2023-06-09 12:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `lessons_data`
--

CREATE TABLE `lessons_data` (
  `id` int(255) NOT NULL,
  `lesson_id` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons_data`
--

INSERT INTO `lessons_data` (`id`, `lesson_id`, `course_id`, `video_url`, `description`, `date_created`) VALUES
(1, '3', '3', 'demo_video.mp4', 'ddweew', '2023-05-23'),
(5, '1', '4', 'demo_video.mp4', 'test', '2023-05-24'),
(6, '4', '5', 'demo_video.mp4', 'test', '2023-05-26'),
(7, '5', '5', 'demo_video.mp4', '', '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `lesson_id` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_form` varchar(255) NOT NULL,
  `seen_status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `student_id`, `lesson_id`, `course_id`, `message`, `message_form`, `seen_status`) VALUES
(21, '3', '4', '5', 't', 'student', '1'),
(22, '3', '4', '5', 'rre', 'student', '1'),
(23, '3', '4', '5', 'rreew', 'student', '1'),
(24, '3', '4', '5', 'hello', 'student', '1'),
(25, '3', '4', '5', 'okay', 'super_admin', '1'),
(26, '3', '4', '5', 'hello', 'super_admin', '1'),
(27, '3', '4', '5', 'hrlo', 'super_admin', '1'),
(28, '3', '4', '5', 'er', 'super_admin', '1'),
(29, '3', '4', '5', 'h', 'super_admin', '1'),
(30, '3', '4', '5', 'yes', 'student', '1'),
(31, '3', '4', '5', 'ge;', 'student', '1'),
(32, '3', '4', '5', 'hello sir bund fat gayi', 'student', '1'),
(33, '3', '4', '5', 'hn v mitra ki hoya', 'super_admin', '1'),
(34, '3', '4', '5', 'hn v mitra ki hoya', 'super_admin', '1'),
(35, '3', '4', '5', 'f', 'student', '1'),
(36, '3', '4', '5', 'd', 'super_admin', '1'),
(37, '3', '4', '5', 'yes', 'student', '1'),
(38, '3', '4', '5', 'bonf', 'super_admin', '1'),
(39, '3', '4', '5', 'chup chutiya', 'super_admin', '1'),
(40, '3', '4', '5', 'eet', 'super_admin', '1'),
(41, '3', '4', '5', 'he;p', 'student', '1'),
(42, '3', '4', '5', 'ok', 'super_admin', '1'),
(43, '3', '4', '5', 'tet', 'student', '1'),
(44, '3', '4', '5', 'hello', 'super_admin', '1'),
(45, '3', '4', '5', 'testingh', 'student', '1'),
(46, '3', '4', '5', 'helo', 'student', '1'),
(47, '3', '4', '5', 'test', 'student', '1'),
(48, '3', '4', '5', 'helo', 'super_admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `firstname`, `lastname`, `email`, `password`, `user_type`, `course_name`, `course_id`, `country`, `created_date`) VALUES
(2, 'super ', 'admin', 'superadmin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, '', '', '', '2023-05-26'),
(3, 'Vikrant', 'singh', '1vikrant@gmail.com', '9485f1760d746bdf4eb04f38607948fc', 0, 'dhol', '5', 'USA', '2023-05-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_student`
--
ALTER TABLE `assign_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons_data`
--
ALTER TABLE `lessons_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_student`
--
ALTER TABLE `assign_student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lessons_data`
--
ALTER TABLE `lessons_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

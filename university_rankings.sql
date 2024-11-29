-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 08:29 PM
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
-- Database: `university_rankings`
--

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE `rankings` (
  `id` int(11) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `curriculum_score` decimal(5,2) DEFAULT NULL,
  `research_score` decimal(5,2) DEFAULT NULL,
  `qs_ranking` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `subject_area` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `curriculum_strength` decimal(5,2) DEFAULT NULL,
  `student_satisfaction` decimal(5,2) DEFAULT NULL,
  `research_output` decimal(5,2) DEFAULT NULL,
  `faculty_student_ratio` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rankings`
--

INSERT INTO `rankings` (`id`, `university_name`, `curriculum_score`, `research_score`, `qs_ranking`, `location`, `subject_area`, `year`, `curriculum_strength`, `student_satisfaction`, `research_output`, `faculty_student_ratio`, `created_at`) VALUES
(1, 'Harvard University', 95.50, 98.00, 1, 'USA', 'Computer Science', 2024, 92.50, 91.00, 98.00, 15.00, '2024-11-25 14:16:43'),
(2, 'Stanford University', 93.00, 96.50, 2, 'USA', 'Engineering', 2024, 91.00, 90.50, 97.00, 16.00, '2024-11-25 14:16:43'),
(3, 'MIT', 94.00, 97.00, 3, 'USA', 'Physics', 2024, 93.00, 89.50, 99.00, 12.00, '2024-11-25 14:16:43'),
(4, 'Oxford University', 92.50, 93.00, 4, 'UK', 'Mathematics', 2024, 89.00, 92.00, 95.50, 18.00, '2024-11-25 14:16:43'),
(5, 'Cambridge University', 91.00, 92.50, 5, 'UK', 'Engineering', 2024, 90.00, 90.00, 96.00, 17.00, '2024-11-25 14:16:43'),
(6, 'University of California, Berkeley', 94.50, 95.00, 6, 'USA', 'Biology', 2024, 94.00, 88.00, 97.50, 14.00, '2024-11-25 14:16:43'),
(7, 'California Institute of Technology (Caltech)', 96.00, 98.50, 7, 'USA', 'Engineering', 2024, 95.00, 92.50, 98.50, 13.00, '2024-11-25 14:16:43'),
(8, 'Princeton University', 90.00, 91.50, 8, 'USA', 'Economics', 2024, 88.50, 93.00, 94.50, 20.00, '2024-11-25 14:16:43'),
(9, 'Yale University', 91.50, 92.00, 9, 'USA', 'Law', 2024, 90.00, 91.00, 96.50, 17.00, '2024-11-25 14:16:43'),
(10, 'Imperial College London', 88.50, 90.00, 10, 'UK', 'Medicine', 2024, 89.50, 88.50, 92.00, 16.00, '2024-11-25 14:16:43'),
(11, 'University of Tokyo', 85.50, 90.50, 11, 'Japan', 'Physics', 2024, 87.00, 90.50, 93.50, 19.00, '2024-11-25 14:16:43'),
(12, 'ETH Zurich', 89.00, 91.00, 12, 'Switzerland', 'Engineering', 2024, 88.00, 92.00, 95.00, 14.00, '2024-11-25 14:16:43'),
(13, 'University of Melbourne', 87.50, 88.00, 13, 'Australia', 'Medical Sciences', 2024, 86.00, 89.50, 91.00, 15.00, '2024-11-25 14:16:43'),
(14, 'Peking University', 84.00, 89.50, 14, 'China', 'Chemistry', 2024, 85.50, 87.50, 90.00, 20.00, '2024-11-25 14:16:43'),
(15, 'Tsinghua University', 85.00, 90.00, 15, 'China', 'Engineering', 2024, 87.00, 89.00, 91.50, 18.00, '2024-11-25 14:16:43'),
(16, 'University of Oxford', 91.00, 92.50, 16, 'UK', 'Computer Science', 2024, 89.50, 90.50, 93.00, 19.00, '2024-11-25 14:16:43'),
(17, 'University of California, Los Angeles (UCLA)', 90.50, 91.50, 17, 'USA', 'Economics', 2024, 88.50, 89.50, 94.00, 16.00, '2024-11-25 14:16:43'),
(18, 'Columbia University', 88.00, 89.00, 18, 'USA', 'Law', 2024, 87.50, 90.00, 92.50, 15.00, '2024-11-25 14:16:43'),
(19, 'University of Chicago', 87.00, 88.00, 19, 'USA', 'Sociology', 2024, 85.50, 90.50, 91.00, 14.00, '2024-11-25 14:16:43'),
(20, 'University of Edinburgh', 85.00, 87.50, 20, 'UK', 'Biology', 2024, 83.50, 88.50, 90.50, 20.00, '2024-11-25 14:16:43'),
(21, 'Bangladesh University of Engineering and Technology', 83.00, 85.50, 21, 'Bangladesh', 'Engineering', 2024, 85.50, 80.00, 86.00, 22.00, '2024-11-25 14:16:43'),
(22, 'Indian Institute of Technology, Bombay', 92.00, 94.00, 22, 'India', 'Computer Science', 2024, 90.50, 88.00, 91.50, 14.00, '2024-11-25 14:16:43'),
(23, 'University of Toronto', 89.50, 90.00, 23, 'Canada', 'Biology', 2024, 88.50, 91.00, 93.00, 16.00, '2024-11-25 14:16:43'),
(24, 'National University of Singapore', 88.00, 89.00, 24, 'Singapore', 'Engineering', 2024, 85.00, 90.50, 92.00, 17.00, '2024-11-25 14:16:43'),
(25, 'University of Sydney', 86.50, 88.50, 25, 'Australia', 'Medical Sciences', 2024, 87.00, 88.00, 91.00, 18.00, '2024-11-25 14:16:43'),
(26, 'King Saud University', 83.50, 85.00, 26, 'Saudi Arabia', 'Engineering', 2024, 85.50, 86.00, 87.50, 25.00, '2024-11-25 14:16:43'),
(27, 'Heidelberg University', 87.00, 88.50, 27, 'Germany', 'Physics', 2024, 89.00, 90.00, 93.00, 15.00, '2024-11-25 14:16:43'),
(28, 'University of Cape Town', 84.50, 86.00, 28, 'South Africa', 'Medical Sciences', 2024, 82.50, 84.00, 88.00, 20.00, '2024-11-25 14:16:43'),
(29, 'University of Auckland', 85.00, 87.00, 29, 'New Zealand', 'Engineering', 2024, 83.50, 88.50, 90.00, 19.00, '2024-11-25 14:16:43'),
(30, 'Seoul National University', 86.50, 89.00, 30, 'South Korea', 'Law', 2024, 87.50, 86.00, 90.50, 22.00, '2024-11-25 14:16:43'),
(31, 'Technische Universität München', 88.50, 90.50, 31, 'Germany', 'Engineering', 2024, 89.50, 91.00, 92.00, 16.00, '2024-11-25 14:16:43'),
(32, 'University of Malaya', 85.00, 86.50, 32, 'Malaysia', 'Physics', 2024, 83.50, 89.00, 88.50, 18.00, '2024-11-25 14:16:43'),
(33, 'Australian National University', 90.00, 92.00, 33, 'Australia', 'Social Sciences', 2024, 87.00, 90.00, 93.00, 15.00, '2024-11-25 14:16:43'),
(34, 'McGill University', 91.50, 92.50, 34, 'Canada', 'Engineering', 2024, 89.00, 88.00, 94.00, 17.00, '2024-11-25 14:16:43'),
(35, 'University of Hong Kong', 84.00, 85.50, 35, 'Hong Kong', 'Medicine', 2024, 83.50, 87.50, 91.00, 20.00, '2024-11-25 14:16:43'),
(36, 'University of Buenos Aires', 82.50, 84.00, 36, 'Argentina', 'Law', 2024, 81.50, 84.00, 89.50, 21.00, '2024-11-25 14:16:43'),
(37, 'Fudan University', 89.00, 90.00, 37, 'China', 'Chemistry', 2024, 87.00, 89.50, 91.00, 18.00, '2024-11-25 14:16:43'),
(38, 'University of Delhi', 84.50, 86.00, 38, 'India', 'Engineering', 2024, 83.00, 85.50, 88.00, 22.00, '2024-11-25 14:16:43'),
(39, 'Lund University', 85.50, 87.00, 39, 'Sweden', 'Law', 2024, 86.00, 88.00, 90.50, 19.00, '2024-11-25 14:16:43'),
(40, 'University of Copenhagen', 86.00, 87.50, 40, 'Denmark', 'Social Sciences', 2024, 85.00, 88.50, 91.50, 17.00, '2024-11-25 14:16:43'),
(41, 'ETH Zurich', 91.00, 92.00, 41, 'Switzerland', 'Engineering', 2024, 89.50, 90.50, 92.00, 16.00, '2024-11-25 14:16:43'),
(42, 'University of California, San Diego', 92.50, 93.50, 42, 'USA', 'Oceanography', 2024, 90.00, 92.00, 95.50, 14.00, '2024-11-25 14:16:43'),
(43, 'University of California, San Francisco', 90.00, 91.00, 43, 'USA', 'Medicine', 2024, 88.50, 89.00, 91.50, 13.00, '2024-11-25 14:16:43'),
(44, 'Zhejiang University', 85.50, 87.00, 44, 'China', 'Engineering', 2024, 84.50, 86.50, 89.00, 19.00, '2024-11-25 14:16:43'),
(45, 'University of Edinburgh', 90.00, 91.50, 45, 'UK', 'Engineering', 2024, 88.50, 90.00, 92.50, 17.00, '2024-11-25 14:16:43'),
(46, 'University of São Paulo', 83.00, 85.00, 46, 'Brazil', 'Biology', 2024, 81.50, 84.50, 88.50, 23.00, '2024-11-25 14:16:43'),
(47, 'Sao Paulo University', 84.50, 86.50, 47, 'Brazil', 'Mathematics', 2024, 82.00, 86.50, 89.00, 20.00, '2024-11-25 14:16:43'),
(48, 'University of Vienna', 86.00, 87.50, 48, 'Austria', 'Physics', 2024, 85.50, 87.50, 90.00, 18.00, '2024-11-25 14:16:43'),
(49, 'University of Moscow', 85.50, 87.00, 49, 'Russia', 'Chemistry', 2024, 84.50, 86.00, 89.50, 19.00, '2024-11-25 14:16:43'),
(50, 'University of Warsaw', 82.00, 84.00, 50, 'Poland', 'Social Sciences', 2024, 80.50, 83.00, 87.00, 22.00, '2024-11-25 14:16:43'),
(51, 'North South University', 70.00, 75.00, 51, 'Bangladesh', 'Business', 2024, 80.00, 75.50, 76.50, 20.00, '2024-11-25 14:16:43'),
(52, 'Independent University, Bangladesh', 72.00, 78.00, 52, 'Bangladesh', 'Computer Science', 2024, 81.50, 79.00, 78.50, 21.00, '2024-11-25 14:16:43'),
(53, 'American International University, Bangladesh', 71.50, 77.50, 53, 'Bangladesh', 'Law', 2024, 79.00, 76.50, 75.00, 23.00, '2024-11-25 14:16:43'),
(54, 'Dhaka University', 85.00, 80.50, 54, 'Bangladesh', 'Engineering', 2024, 83.50, 81.00, 85.50, 25.00, '2024-11-25 14:16:43'),
(55, 'Jahangirnagar University', 80.00, 76.50, 55, 'Bangladesh', 'Social Sciences', 2024, 78.00, 75.50, 80.00, 27.00, '2024-11-25 14:16:43'),
(56, 'Chittagong University', 78.50, 74.50, 56, 'Bangladesh', 'Biology', 2024, 77.50, 73.00, 78.50, 28.00, '2024-11-25 14:16:43'),
(57, 'Khulna University', 77.00, 72.00, 57, 'Bangladesh', 'Physics', 2024, 76.00, 70.50, 77.00, 30.00, '2024-11-25 14:16:43'),
(58, 'Rajshahi University', 79.50, 75.00, 58, 'Bangladesh', 'Mathematics', 2024, 78.00, 74.50, 79.50, 26.00, '2024-11-25 14:16:43'),
(59, 'Bangladesh Agricultural University', 80.50, 78.50, 59, 'Bangladesh', 'Agriculture', 2024, 79.00, 76.00, 80.00, 29.00, '2024-11-25 14:16:43'),
(60, 'Bangladesh University of Professionals', 82.00, 80.00, 60, 'Bangladesh', 'Defense Studies', 2024, 81.00, 77.00, 82.00, 31.00, '2024-11-25 14:16:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rankings`
--
ALTER TABLE `rankings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rankings`
--
ALTER TABLE `rankings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

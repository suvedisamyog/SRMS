-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 05:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `registration` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `enrollyear` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`registration`, `name`, `email`, `phone`, `course`, `address`, `dob`, `enrollyear`, `gender`, `image`, `org`, `password`) VALUES
('1299', 'student1', 'student1@gmail.com', '9842658971', 'BCA', 'Tokha-4, Dhapasi, Kathmandu', '2008-01-25', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', '$2y$10$hif19Wf9qs15JKeAsigruu25alImrIiO1DBS6GNtP4hWOuCXhRRpW'),
('1300', 'student2', 'student2@gmail.com', '9845687125', 'Bsc.CSIT', 'Tokha-4, Dhapasi, Kathmandu', '2002-02-25', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1301', 'student3', 'student3@gmail.com', '9841234567', 'BCA', 'Random Address 1', '2000-03-15', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1302', 'student4', 'student4@gmail.com', '9842345678', 'BIT', 'Random Address 2', '2001-05-20', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1303', 'student5', 'student5@gmail.com', '9843456789', 'BIM', 'Random Address 3', '2003-08-10', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1304', 'student6', 'student6@gmail.com', '9845678901', 'BCA', 'Random Address 4', '2004-12-05', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1305', 'student7', 'student7@gmail.com', '9846789012', 'BIT', 'Random Address 5', '2005-04-18', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1306', 'student8', 'student8@gmail.com', '9847890123', 'BIM', 'Random Address 6', '2006-07-21', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1307', 'student9', 'student9@gmail.com', '9848901234', 'Bsc.CSIT', 'Random Address 7', '2007-09-30', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1308', 'student10', 'student10@gmail.com', '9849012345', 'BCA', 'Random Address 8', '2008-02-14', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1309', 'student11', 'student11@gmail.com', '9840123456', 'BIT', 'Random Address 9', '2009-06-27', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1310', 'student12', 'student12@gmail.com', '9841234567', 'BIM', 'Random Address 10', '2010-10-12', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1311', 'student13', 'student13@gmail.com', '9842345678', 'Bsc.CSIT', 'Random Address 11', '2011-03-08', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1312', 'student14', 'student14@gmail.com', '9843456789', 'BCA', 'Random Address 12', '2012-08-24', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1313', 'student15', 'student15@gmail.com', '9844567890', 'BIT', 'Random Address 13', '2013-11-17', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1314', 'student16', 'student16@gmail.com', '9845678901', 'BIM', 'Random Address 14', '2014-04-05', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1315', 'student17', 'student17@gmail.com', '9846789012', 'Bsc.CSIT', 'Random Address 15', '2015-09-29', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1316', 'student18', 'student18@gmail.com', '9847890123', 'BCA', 'Random Address 16', '2016-01-08', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1317', 'student19', 'student19@gmail.com', '9848901234', 'BIT', 'Random Address 17', '2017-05-22', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1318', 'student20', 'student20@gmail.com', '9849012345', 'BIM', 'Random Address 18', '2018-09-07', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1319', 'student21', 'student21@gmail.com', '9840123456', 'Bsc.CSIT', 'Random Address 19', '2019-12-19', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1320', 'student22', 'student22@gmail.com', '9841234567', 'BCA', 'Random Address 20', '2020-06-04', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1321', 'student23', 'student23@gmail.com', '9842345678', 'BIT', 'Random Address 21', '2021-08-30', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1322', 'student24', 'student24@gmail.com', '9843456789', 'BIM', 'Random Address 22', '2022-11-14', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1323', 'student25', 'student25@gmail.com', '9844567890', 'Bsc.CSIT', 'Random Address 23', '1998-07-01', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1324', 'student26', 'student26@gmail.com', '9845678901', 'BCA', 'Random Address 24', '1997-04-23', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1325', 'student27', 'student27@gmail.com', '9846789012', 'BIT', 'Random Address 25', '1996-10-31', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1326', 'student28', 'student28@gmail.com', '9847890123', 'BIM', 'Random Address 26', '1995-03-09', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', ''),
('1327', 'student29', 'student29@gmail.com', '9848901234', 'Bsc.CSIT', 'Random Address 27', '1994-09-26', '2023-09-25', 'Female', '../img/6511a0a1c6d001.42683584.jpg', 'admintest@gmail.com', ''),
('1328', 'student30', 'student30@gmail.com', '9849012345', 'BCA', 'Random Address 28', '1993-05-06', '2023-09-25', 'Male', '../img/6511a0ed3928e6.29297702.jpg', 'admintest@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`registration`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

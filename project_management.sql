-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 01:32 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `project_assign`
--

CREATE TABLE `project_assign` (
  `project_id` int(11) NOT NULL,
  `project` varchar(50) NOT NULL,
  `project_head` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active/Not completed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_assign`
--

INSERT INTO `project_assign` (`project_id`, `project`, `project_head`, `time`, `description`, `status`) VALUES
(1, 'Attendence management System', 'abraham', '90', 'complete as soon as possible', 'Active/Not completed'),
(2, 'Library Management System', 'Riya Joseph', '80', 'complete within time', 'Active/Not completed');

-- --------------------------------------------------------

--
-- Table structure for table `project_team`
--

CREATE TABLE `project_team` (
  `team_id` int(11) NOT NULL,
  `project_head` varchar(50) NOT NULL,
  `front_end` varchar(50) NOT NULL,
  `back_end` varchar(50) NOT NULL,
  `tester` varchar(50) NOT NULL,
  `Quality_tester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `name`, `email`, `mobile`, `designation`, `username`, `password`, `status`) VALUES
(1, 'abraham', 'abraham@gmail.com', '9876541235', 'project_head', 'abraham@gmail.com', 'abraham', 'approved'),
(2, 'Riya Joseph', 'riyajoseph@gmail.com', '9876541235', 'project_head', 'riya@gmail.com', 'riya', 'approved'),
(3, 'elsa', 'elsa@gmail.com', '9874563215', 'quality_tester', 'elsa@gmail.com', 'elsa', 'approved'),
(4, 'mujeeb', 'mujeeb@gmail.com', '9874563215', 'back_end', 'mujeeb@gmail.com', 'mujeeb', 'approved'),
(5, 'sudhin', 'sudhin@gmail.com', '9874563215', 'ui_developer', 'sudhin@gmail.com', 'sudhin', 'approved'),
(6, 'abhirami', 'abhirami@gmail.com', '9874563215', 'tester', 'abhirami@gmail.com', 'abhirami', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_assign`
--
ALTER TABLE `project_assign`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_team`
--
ALTER TABLE `project_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_assign`
--
ALTER TABLE `project_assign`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_team`
--
ALTER TABLE `project_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

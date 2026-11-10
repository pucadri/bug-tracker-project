-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 04:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `bugs`
--

CREATE TABLE `bugs` (
  `bugID` int(11) NOT NULL,
  `bugCreator` varchar(255) NOT NULL,
  `err_type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `asign_to` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `msg` varchar(255) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `projects_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bugs`
--

INSERT INTO `bugs` (`bugID`, `bugCreator`, `err_type`, `project_name`, `asign_to`, `start_date`, `due_date`, `msg`, `users_id`, `projects_id`) VALUES
(6, '  Robiul', ' ut of Bound Bugs ', ' bug ', ' kamal', '2023-09-22', '2023-09-06', 'gnfcgvc', 35, 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pro_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `frontend` varchar(255) NOT NULL,
  `backend` varchar(255) NOT NULL,
  `clint_name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pro_id`, `title`, `type`, `manager`, `frontend`, `backend`, `clint_name`, `msg`, `user_id`) VALUES
(3, 'bug', 'error', 'sojib', 'html', 'php', 'robiul', 'this is simple page ', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `phone`, `dob`, `role`, `address`) VALUES
(35, 'kamal', 'kamal@gmail.com', '202cb962ac59075b964b07152d234b70', ' 1617703090', '2023-09-30', ' Manager', 'dhaka'),
(41, 'sojib', 'sojib@gmail.com', 'b59c67bf196a4758191e42f76670ceba', ' 1617703090', '2023-09-21', ' Developer', 'A108 Adam Street, New York, NY 535022'),
(46, 'emon', 'emon@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', ' 9437694389', '2023-10-06', ' Tester', 'dhaka'),
(47, 'sojib', 'sojib@gmail.com', '74b87337454200d4d33f80c4663dc5e5', ' 9437694389', '2023-09-29', ' Developer', 'dh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`bugID`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `projects_id` (`projects_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugs`
--
ALTER TABLE `bugs`
  MODIFY `bugID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bugs`
--
ALTER TABLE `bugs`
  ADD CONSTRAINT `bugs_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bugs_ibfk_2` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`pro_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

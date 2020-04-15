-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 11:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

--
-- author: frankline bwire
-- @knightlypro
-- @notchcom solutions kenya
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irelocate`
--
CREATE DATABASE IF NOT EXISTS `irelocate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `irelocate`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `message_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feedback` varchar(10) NOT NULL,
  `message_reply` varchar(300) NOT NULL,
  `reply_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `email`, `subject`, `message`, `date_received`, `feedback`, `message_reply`, `reply_date`) VALUES
('M-30404', 'Knightlypro', 'knight@email.com', 'STORAGE UNITS', 'What time do you open?', '2020-04-13 21:31:02', 'YES', 'We open from 8am - 5pm', '2020-04-14 00:31:02'),
('M-96424', 'Knightlypro', 'knight@email.com', 'STORAGE UNITS', 'Are there limits to what i can store?', '2020-04-13 21:29:45', 'YES', 'No there are no limits.', '2020-04-14 00:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

DROP TABLE IF EXISTS `quotations`;
CREATE TABLE `quotations` (
  `quote_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `moving_from` varchar(30) NOT NULL,
  `moving_to` varchar(30) NOT NULL,
  `house_size` varchar(30) NOT NULL,
  `moving_date` varchar(30) NOT NULL,
  `current_floor` varchar(30) NOT NULL,
  `destination_floor` varchar(30) NOT NULL,
  `extra_service` varchar(30) NOT NULL,
  `move_type` varchar(30) NOT NULL,
  `details` varchar(300) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feedback` varchar(10) NOT NULL,
  `quote_reply` varchar(300) NOT NULL,
  `qreply_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`quote_id`, `name`, `email`, `phone`, `moving_from`, `moving_to`, `house_size`, `moving_date`, `current_floor`, `destination_floor`, `extra_service`, `move_type`, `details`, `request_date`, `feedback`, `quote_reply`, `qreply_date`) VALUES
('Q-17363', 'Knightlypro', 'knight@email.com', '711466391', 'NYAHURURU', 'NAIVASHA', '1bd', '2020-04-20', 'frmgroundfloor', 'to3rd', 'dstvinstall', 'office', 'Office moving should be convenient.', '2020-04-13 21:30:31', 'YES', 'The total amount for your requested quote is Kshs.7800 From: NYAHURURU location To: NAIVASHA location. Relocation will be available on 2020-04-22. More: Very convenient. did you mean nyahururu?', '2020-04-14 00:30:31'),
('Q-80124', 'Knightlypro', 'knight@email.com', '711466391', 'NAKURU', 'NAIROBI', '1bd', '2020-04-20', 'frm1st', 'to6th', 'bothtvmount/dstvinstall', 'residential', 'Does residential moving work?', '2020-04-13 21:26:20', 'NO', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `type`, `password`, `reg_date`) VALUES
('admin', 'admin@email.com', 'administrator', 'admin', '2020-04-13 21:20:47'),
('Knightlypro', 'knight@email.com', 'client', 'secret', '2020-04-13 13:25:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`quote_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `quotations`
--
ALTER TABLE `quotations`
  ADD CONSTRAINT `quotations_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

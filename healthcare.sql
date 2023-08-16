-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 05:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `date`, `time`, `reason`) VALUES
(2, 'mahesh', 'maheswarreddhy6164@ngmail.com', '6302781260', '2023-05-03', '19:16:00', 'fever'),
(3, 'umesh', 'umesh@gmail.com', '08106558713', '2023-06-17', '05:30:00', 'check up for backpain due to accident'),
(4, 'madhu', 'madhu@gmail.com', '9347051535', '2023-06-09', '14:45:00', 'cold'),
(5, 'pavan', 'pavan@gmail.com', '8008345487', '2023-05-13', '10:00:00', 'pysocholigacally not good ,over thinking,bad boy'),
(6, 'G Siva Kumar', 'siva@gmail.com', '9390293937', '2023-05-10', '10:30:00', 'tooth problem'),
(9, 'v Siva', 'siva8952@gmail.com', '9856423255', '2023-06-10', '03:00:00', 'back pain'),
(10, 'ramesh', 'ramesh@gmail.com', '6305994299', '2023-05-27', '12:25:00', 'Heart appointment'),
(11, 'Venkata Ramesh', 'venkat@ngmail.com', '6302175986', '2023-07-03', '14:10:00', 'fever'),
(12, 'suhas', 'suhas@gmail.com', '8956421345', '2023-06-10', '02:00:00', 'fever'),
(13, 'Ramesh', 'ramesh6164b@ngmail.com', '06302175986', '2023-07-22', '12:10:00', 'fevernjal');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`username`, `password`) VALUES
('ramesh', 'ramesh@123'),
('ramu', 'ramu@123'),
('raghav', 'raghav@123'),
('kiran', 'kiran@123'),
('ashish', 'ashish@123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('ramesh', 'ramesh@9343'),
('madhu', 'madhu@8951'),
('mahesh', 'mahesh@27009'),
('siva', 'siva@8951');









--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

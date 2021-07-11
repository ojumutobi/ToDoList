-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 09:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--
CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `todolist`;

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

CREATE TABLE `tasklist` (
  `Id` int(11) NOT NULL,
  `TaskName` varchar(100) NOT NULL,
  `LocationOfTask` varchar(50) NOT NULL,
  `Action` varchar(50) NOT NULL,
  `TaskStatus` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasklist`
--

INSERT INTO `tasklist` (`Id`, `TaskName`, `LocationOfTask`, `Action`, `TaskStatus`, `Timestamp`) VALUES
(2, 'Vandura', 'Vandam', '2', 0, '2021-07-10 23:53:09'),
(3, 'Fly The Jet', 'Miami Airport', 'Test run EM302 Jet Ahead of President Biden Inaugu', 0, '2021-07-11 08:39:10'),
(4, 'Power Outage in National Stadium (Abuja)', 'PHCN Office Maitama', 'Discuss plans to forestall Power cuts National Sta', 0, '2021-07-11 08:41:20'),
(5, '2022 World Cup Preparation', 'Africa', 'Play 5 Pre-Friendly Games with African Teams', 0, '2021-07-11 09:06:50'),
(6, '2020 Olympics Preparation & Goals', 'Abuja, Nigeria/Tokyo, Japan', 'Set Olympic Target for the Sports Minister & his C', 0, '2021-07-11 19:18:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

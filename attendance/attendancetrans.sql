-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 05:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendancetrans`
--

CREATE TABLE `attendancetrans` (
  `Sysid` int(50) NOT NULL,
  `AttStudentName` varchar(150) NOT NULL,
  `AttStudentRollNo` varchar(30) NOT NULL,
  `AttStandard` bigint(10) NOT NULL,
  `AttDiv` varchar(10) NOT NULL,
  `AttDate` date NOT NULL,
  `AttSendSMS` varchar(5) NOT NULL DEFAULT 'No',
  `AttPresentAbsent` varchar(15) NOT NULL DEFAULT 'Present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendancetrans`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancetrans`
--
ALTER TABLE `attendancetrans`
  ADD PRIMARY KEY (`Sysid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancetrans`
--
ALTER TABLE `attendancetrans`
  MODIFY `Sysid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 06:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgp`
--

-- --------------------------------------------------------

--
-- Table structure for table `resultmaster`
--

CREATE TABLE `resultmaster` (
  `ResAcademicYear` varchar(10) NOT NULL,
  `ResStandard` bigint(10) NOT NULL,
  `ResDivision` varchar(1) NOT NULL,
  `ResRollNo` varchar(10) NOT NULL,
  `ResGRNO` varchar(30) NOT NULL,
  `ResSubName` varchar(30) NOT NULL,
  `ResStudentName` varchar(30) NOT NULL,
  `ResExamName` varchar(25) NOT NULL,
  `ResTotalMarks` tinyint(4) NOT NULL,
  `ResPassingMarks` tinyint(4) NOT NULL,
  `ResMarksObtained` tinyint(4) NOT NULL,
  `ResStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resultmaster`
--
ALTER TABLE `resultmaster`
  ADD PRIMARY KEY (`ResAcademicYear`,`ResStandard`,`ResDivision`,`ResRollNo`,`ResGRNO`,`ResSubName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

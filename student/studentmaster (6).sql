-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 02:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test4`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `date` datetime NOT NULL,
  `StuUIDNo` varchar(13) NOT NULL,
  `StuGRNo` varchar(30) NOT NULL,
  `StuRollNo` int(20) NOT NULL,
  `StuStudentName` varchar(150) NOT NULL,
  `StuAcdemicyear` varchar(10) NOT NULL,
  `StuStandard` bigint(10) NOT NULL,
  `StuDiv` varchar(10) NOT NULL,
  `StuGender` varchar(10) NOT NULL,
  `StuDOB` date NOT NULL,
  `StuDateOfAdmission` date NOT NULL,
  `StuParentMobileNumber1` decimal(10,0) NOT NULL,
  `StuParentMobileNumber2` decimal(10,0) NOT NULL,
  `StuHouseNo` varchar(20) NOT NULL,
  `StuStreetName` varchar(20) NOT NULL,
  `StuLocation` varchar(50) NOT NULL,
  `StuCity` varchar(20) NOT NULL,
  `StuDist` varchar(20) NOT NULL,
  `StuBirthPlace` varchar(150) NOT NULL,
  `StuAadharNo` decimal(12,0) NOT NULL,
  `StuCategory` varchar(50) NOT NULL,
  `StuCaste` varchar(50) NOT NULL,
  `StuLastschoolname` varchar(50) NOT NULL,
  `StuBankname` varchar(20) NOT NULL,
  `StuBankACno` varchar(20) NOT NULL,
  `StuBankIFSCcode` varchar(20) NOT NULL,
  `StuStatus` varchar(15) NOT NULL,
  `StuStatusChangedDate` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `uploadfile` varchar(255) NOT NULL,
  `uploadfilename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`StuGRNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

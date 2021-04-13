-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 08:19 AM
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
-- Database: `schoolmanage`
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
  `AttPresentAbsent` varchar(15) NOT NULL DEFAULT 'Present',
  `AcadmicYear` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `EmpNo` char(5) NOT NULL,
  `EmpNamePrefix` varchar(5) NOT NULL,
  `EmpFirstName` varchar(20) NOT NULL,
  `EmpMidName` varchar(20) NOT NULL,
  `EmpLastName` varchar(20) NOT NULL,
  `EmpDesignation` varchar(20) NOT NULL,
  `EmpGender` varchar(200) NOT NULL,
  `EmpDOB` varchar(50) NOT NULL,
  `EmpAddress1` varchar(150) NOT NULL,
  `EmpAddress2` varchar(150) NOT NULL,
  `EmpState` varchar(15) NOT NULL,
  `EmpCity` varchar(15) NOT NULL,
  `EmpPinCode` decimal(8,0) NOT NULL,
  `EmpContactNo` decimal(10,0) NOT NULL,
  `EmpEmailID` varchar(25) NOT NULL,
  `EmpDateofjoining` varchar(20) NOT NULL,
  `EmpDateofLeaving` varchar(20) NOT NULL,
  `EmpCategory` varchar(10) NOT NULL,
  `EmpAadharNo` decimal(12,0) NOT NULL,
  `EmpPan` varchar(10) NOT NULL,
  `EmpPFno` varchar(10) NOT NULL,
  `EmpStatus` varchar(10) NOT NULL,
  `EmpLastStatusChangeDate` varchar(20) NOT NULL,
  `EmpBankName` varchar(15) NOT NULL,
  `EmpBankAccount` decimal(15,0) NOT NULL,
  `EmpBankIFSC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exammaster`
--

CREATE TABLE `exammaster` (
  `ExamId` int(10) NOT NULL,
  `ExamAcademicYear` varchar(10) NOT NULL,
  `ExamStandard` bigint(10) NOT NULL,
  `ExamSubjectName` varchar(30) NOT NULL,
  `ExamName` varchar(30) NOT NULL,
  `ExamTotalMarks` tinyint(4) NOT NULL,
  `ExamPassingMarks` tinyint(4) NOT NULL,
  `IsResultEntered` tinyint(1) NOT NULL,
  `IsResultVisible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `listmaster`
--

CREATE TABLE `listmaster` (
  `Sysid` int(5) NOT NULL,
  `CreateDate` date NOT NULL DEFAULT current_timestamp(),
  `SyStatus` varchar(5) NOT NULL,
  `Parameter` varchar(100) NOT NULL,
  `Value` varchar(100) NOT NULL,
  `infomation` varchar(150) NOT NULL,
  `Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listmaster`
--

INSERT INTO `listmaster` (`Sysid`, `CreateDate`, `SyStatus`, `Parameter`, `Value`, `infomation`, `Description`) VALUES
(1, '2021-02-26', 'A', 'EmpStatus', 'Active', '', ''),
(2, '2021-02-26', 'D', 'EmpStatus', 'Resingned', '', ''),
(3, '2021-02-26', 'D', 'EmpStatus', 'Retired', '', ''),
(4, '2021-02-26', '', 'Category', 'Open', '', ''),
(5, '2021-02-26', '', 'Category', 'OBC', '', ''),
(6, '2021-02-26', '', 'Category', 'SC', '', ''),
(7, '2021-02-26', '', 'Category', 'SC', '', ''),
(8, '2021-02-26', '', 'Category', 'ST', '', ''),
(9, '2021-02-26', '', 'Gender', 'Male', '', ''),
(10, '2021-02-26', '', 'Gender', 'Female', '', ''),
(11, '2021-02-26', '', 'Gender', 'Other', '', ''),
(12, '2021-02-26', '', 'AcadmicYear', '2020-21', '', ''),
(13, '2021-02-26', '', 'AcadmicYear', '2021-22', '', ''),
(14, '2021-02-26', '', 'AcadmicYear', '2022-23', '', ''),
(15, '2021-02-26', '', 'Division', 'A', '', ''),
(16, '2021-02-26', '', 'Division', 'B', '', ''),
(17, '2021-02-26', '', 'Division', 'C', '', ''),
(18, '2021-02-26', '', 'Division', 'D', '', ''),
(19, '2021-02-26', '', 'Division', 'E', '', ''),
(20, '2021-02-26', '', 'Standard', '8', '', ''),
(21, '2021-02-26', '', 'Standard', '9', '', ''),
(22, '2021-02-26', '', 'Standard', '10', '', ''),
(27, '2021-02-26', '', 'SubjectName', 'Maths', '', ''),
(28, '2021-02-26', '', 'SubjectName', 'English', '', ''),
(29, '2021-02-26', '', 'SubjectName', 'Gujrati', '', ''),
(31, '0000-00-00', '', 'SubjectName', 'Science', '', ''),
(33, '0000-00-00', '', 'SubjectName', 'Social Science', '', ''),
(34, '0000-00-00', '', 'AcdemicYear', '2021-22,2022-23', '', ''),
(36, '0000-00-00', '', 'ShowResult', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resultmaster`
--

CREATE TABLE `resultmaster` (
  `Resid` int(10) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `standardmaster`
--

CREATE TABLE `standardmaster` (
  `StdId` int(10) NOT NULL,
  `StdStandard` int(5) NOT NULL,
  `StdStandardDIV` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `date` datetime NOT NULL,
  `StuUIDNo` varchar(13) NOT NULL,
  `StuGRNo` varchar(30) NOT NULL,
  `StuRollNo` int(20) NOT NULL,
  `Stuprefix` varchar(50) NOT NULL,
  `StuStudentName` varchar(150) NOT NULL,
  `Stumiddle` varchar(100) NOT NULL,
  `StuLastname` varchar(100) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `submaster`
--

CREATE TABLE `submaster` (
  `Subid` int(10) NOT NULL,
  `SubStandard` int(5) NOT NULL,
  `SubName` varchar(30) NOT NULL,
  `SubType` varchar(10) NOT NULL,
  `SubAcademicYear` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbfeesmaster`
--

CREATE TABLE `tbfeesmaster` (
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `Systatus` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `FeesStudentName` varchar(150) NOT NULL,
  `FeesStudentRollNo` varchar(30) NOT NULL,
  `FeesStudentGRNo` bigint(10) NOT NULL,
  `FeesStuDateOfAdmission` datetime NOT NULL,
  `FeesStuParentMoNo` bigint(10) NOT NULL,
  `FeesAcademicYear` varchar(8) NOT NULL,
  `FeesStandard` varchar(3) NOT NULL,
  `FeesDivison` varchar(3) NOT NULL,
  `FeesJanuary` tinyint(1) DEFAULT 0,
  `FeesFebruary` tinyint(1) DEFAULT 0,
  `FeesMarch` tinyint(1) DEFAULT 0,
  `FeesApril` tinyint(1) DEFAULT 0,
  `FeesMay` tinyint(1) DEFAULT 0,
  `FeesJune` tinyint(1) DEFAULT 0,
  `FeesJuly` tinyint(1) DEFAULT 0,
  `FeesAugust` tinyint(1) DEFAULT 0,
  `FeesSeptember` tinyint(1) DEFAULT 0,
  `FeesOctomber` tinyint(1) DEFAULT 0,
  `FeesNovember` tinyint(1) DEFAULT 0,
  `FeesDecember` tinyint(1) DEFAULT 0,
  `FeesAnnual` bigint(10) NOT NULL,
  `FeesPaid` bigint(10) DEFAULT 0,
  `FeesDue` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbfeessetmaster`
--

CREATE TABLE `tbfeessetmaster` (
  `AcademicYear` varchar(8) NOT NULL,
  `standard` int(11) NOT NULL,
  `AnnualFees` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Ttid` int(10) NOT NULL,
  `TtAcademicYear` varchar(30) NOT NULL,
  `TtStandard` bigint(10) NOT NULL,
  `TtDiv` varchar(10) NOT NULL,
  `TtUpload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ttbsalarymaster`
--

CREATE TABLE `ttbsalarymaster` (
  `year` year(4) NOT NULL DEFAULT current_timestamp(),
  `SalEmpNo` varchar(15) NOT NULL,
  `SalFullName` varchar(50) NOT NULL,
  `SalDesignation` varchar(25) NOT NULL,
  `SalPAN` varchar(10) NOT NULL,
  `SalPFNo` varchar(20) NOT NULL,
  `SalEmpBankAccount` bigint(15) NOT NULL,
  `SalMonthname` varchar(10) NOT NULL,
  `SalMonthdays` bigint(10) NOT NULL,
  `SalPresentdays` bigint(10) NOT NULL,
  `Salleavedays` bigint(10) NOT NULL,
  `SalLWP` bigint(10) NOT NULL,
  `SalBasic` bigint(20) NOT NULL,
  `SalDA` bigint(20) NOT NULL,
  `SalCLA` bigint(20) NOT NULL,
  `SalHRA` bigint(20) NOT NULL,
  `SalTA` bigint(20) NOT NULL,
  `SalSPPay` bigint(20) NOT NULL,
  `SalDGPay` bigint(20) NOT NULL,
  `SalMA` bigint(20) NOT NULL,
  `SalArreas1` bigint(20) NOT NULL,
  `SalArreas2` bigint(20) NOT NULL,
  `SalPTax` bigint(20) NOT NULL,
  `SalPF` bigint(20) NOT NULL,
  `SalIncomTax` bigint(20) NOT NULL,
  `Salother` bigint(20) NOT NULL,
  `SalTotalEarning` bigint(10) NOT NULL,
  `SalTotalDeduction` bigint(10) NOT NULL,
  `SalNetPayable` bigint(10) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT current_timestamp(),
  `SalEmpName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancetrans`
--
ALTER TABLE `attendancetrans`
  ADD PRIMARY KEY (`Sysid`);

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmpNo`);

--
-- Indexes for table `exammaster`
--
ALTER TABLE `exammaster`
  ADD PRIMARY KEY (`ExamId`),
  ADD UNIQUE KEY `ExamAcademicYear` (`ExamAcademicYear`,`ExamStandard`,`ExamSubjectName`,`ExamName`);

--
-- Indexes for table `listmaster`
--
ALTER TABLE `listmaster`
  ADD PRIMARY KEY (`Sysid`);

--
-- Indexes for table `resultmaster`
--
ALTER TABLE `resultmaster`
  ADD PRIMARY KEY (`Resid`),
  ADD UNIQUE KEY `ResAcademicYear` (`ResAcademicYear`,`ResStandard`,`ResDivision`,`ResRollNo`,`ResGRNO`,`ResSubName`,`ResExamName`);

--
-- Indexes for table `standardmaster`
--
ALTER TABLE `standardmaster`
  ADD PRIMARY KEY (`StdId`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`StuGRNo`),
  ADD UNIQUE KEY `StuRollNo` (`StuRollNo`,`StuAcdemicyear`,`StuStandard`,`StuDiv`);

--
-- Indexes for table `submaster`
--
ALTER TABLE `submaster`
  ADD PRIMARY KEY (`Subid`),
  ADD UNIQUE KEY `SubStandard` (`SubStandard`,`SubName`,`SubType`,`SubAcademicYear`);

--
-- Indexes for table `tbfeesmaster`
--
ALTER TABLE `tbfeesmaster`
  ADD PRIMARY KEY (`FeesStudentRollNo`,`FeesStudentGRNo`,`FeesAcademicYear`,`FeesStandard`,`FeesDivison`);

--
-- Indexes for table `tbfeessetmaster`
--
ALTER TABLE `tbfeessetmaster`
  ADD PRIMARY KEY (`AcademicYear`,`standard`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Ttid`);

--
-- Indexes for table `ttbsalarymaster`
--
ALTER TABLE `ttbsalarymaster`
  ADD PRIMARY KEY (`SalEmpNo`,`SalMonthname`,`year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancetrans`
--
ALTER TABLE `attendancetrans`
  MODIFY `Sysid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exammaster`
--
ALTER TABLE `exammaster`
  MODIFY `ExamId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listmaster`
--
ALTER TABLE `listmaster`
  MODIFY `Sysid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `resultmaster`
--
ALTER TABLE `resultmaster`
  MODIFY `Resid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `standardmaster`
--
ALTER TABLE `standardmaster`
  MODIFY `StdId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submaster`
--
ALTER TABLE `submaster`
  MODIFY `Subid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Ttid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

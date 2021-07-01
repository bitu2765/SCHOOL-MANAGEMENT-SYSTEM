-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 08:17 AM
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

--
-- Dumping data for table `attendancetrans`
--

INSERT INTO `attendancetrans` (`Sysid`, `AttStudentName`, `AttStudentRollNo`, `AttStandard`, `AttDiv`, `AttDate`, `AttSendSMS`, `AttPresentAbsent`, `AcadmicYear`) VALUES
(1, 'JITESH', '5', 8, 'A', '2021-07-01', 'No', 'Absent', '2020-21'),
(2, 'BHAUTIK', '1', 8, 'A', '2021-07-01', 'No', 'Absent', '2019-20'),
(3, 'UDDHAV', '2', 8, 'A', '2021-07-01', 'No', 'Present', '2019-20'),
(4, 'UDDHAV', '2', 8, 'A', '2021-06-30', 'No', 'Absent', '2019-20'),
(5, 'BHAUTIK', '1', 8, 'A', '2021-06-30', 'No', 'Present', '2019-20');

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

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`EmpNo`, `EmpNamePrefix`, `EmpFirstName`, `EmpMidName`, `EmpLastName`, `EmpDesignation`, `EmpGender`, `EmpDOB`, `EmpAddress1`, `EmpAddress2`, `EmpState`, `EmpCity`, `EmpPinCode`, `EmpContactNo`, `EmpEmailID`, `EmpDateofjoining`, `EmpDateofLeaving`, `EmpCategory`, `EmpAadharNo`, `EmpPan`, `EmpPFno`, `EmpStatus`, `EmpLastStatusChangeDate`, `EmpBankName`, `EmpBankAccount`, `EmpBankIFSC`) VALUES
('1', 'MR.', 'BHAUTIK', 'DHANJIBHAI', 'SUDANI', 'PRINCIPAL', 'MALE', '2002-05-29', '89-LALAN KRUPA SOCIETY , LASKANA', 'VALAK GAM , VARACHHA MAIN ROAD', 'GUJARAT', 'SURAT', '395006', '6454201149', 'bhautik123@gmail.com', '2017-06-01', '2021-08-08', 'OPEN', '123456789123', 'ABHSKD1456', '1234455566', 'ACTIVE', '2021-07-01', 'BANK OF BARODA', '12345678', 'BOBSAR1233'),
('2', 'MS.', 'HEMANSHI', 'VINODBHAI', 'SHAH', 'TEACHER', 'MALE', '1995-01-12', '205 - RIVER VILLA RESIDENCY , AMRUT CHOWK', 'VADTAL , KHEDA', 'GUJARAT', 'ANAND', '488326', '1257898877', 'hemishah987@gmail.com', '2016-09-07', '2021-07-01', 'OBC', '987654321987', '1223bhagy1', '1232233323', 'ACTIVE', '2021-07-01', 'KOTAK', '5332222121', 'axssar4546');

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

--
-- Dumping data for table `exammaster`
--

INSERT INTO `exammaster` (`ExamId`, `ExamAcademicYear`, `ExamStandard`, `ExamSubjectName`, `ExamName`, `ExamTotalMarks`, `ExamPassingMarks`, `IsResultEntered`, `IsResultVisible`) VALUES
(1, '2020-21', 9, 'english', 'Unit Test', 40, 14, 1, 1),
(2, '2020-21', 9, 'maths', 'Unit Test', 40, 14, 1, 1),
(3, '2020-21', 9, 'physics', 'Unit Test', 40, 14, 1, 1),
(4, '2020-21', 9, 'sanskrit', 'Unit Test', 40, 14, 1, 1),
(5, '2020-21', 9, 'soial science', 'Unit Test', 40, 14, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `listmaster`
--

CREATE TABLE `listmaster` (
  `Sysid` int(5) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT current_timestamp(),
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
(1, '2021-02-26 00:00:00', 'A', 'EmpStatus', 'Active', '', ''),
(2, '2021-02-26 00:00:00', 'D', 'EmpStatus', 'Resingned', '', ''),
(3, '2021-02-26 00:00:00', 'D', 'EmpStatus', 'Retired', '', ''),
(4, '2021-02-26 00:00:00', '', 'Category', 'Open', '', ''),
(5, '2021-02-26 00:00:00', '', 'Category', 'OBC', '', ''),
(7, '2021-02-26 00:00:00', '', 'Category', 'SC', '', ''),
(8, '2021-02-26 00:00:00', '', 'Category', 'ST', '', ''),
(9, '2021-02-26 00:00:00', '', 'Gender', 'Male', '', ''),
(10, '2021-02-26 00:00:00', '', 'Gender', 'Female', '', ''),
(11, '2021-02-26 00:00:00', '', 'Gender', 'Other', '', ''),
(12, '2021-02-26 00:00:00', '', 'AcadmicYear', '2020-21', '', ''),
(13, '2021-02-26 00:00:00', '', 'AcadmicYear', '2021-22', '', ''),
(14, '2021-02-26 00:00:00', '', 'AcadmicYear', '2022-23', '', ''),
(15, '2021-02-26 00:00:00', '', 'Division', 'A', '', ''),
(16, '2021-02-26 00:00:00', '', 'Division', 'B', '', ''),
(17, '2021-02-26 00:00:00', '', 'Division', 'C', '', ''),
(18, '2021-02-26 00:00:00', '', 'Division', 'D', '', ''),
(19, '2021-02-26 00:00:00', '', 'Division', 'E', '', ''),
(20, '2021-02-26 00:00:00', '', 'Standard', '8', '', ''),
(21, '2021-02-26 00:00:00', '', 'Standard', '9', '', ''),
(22, '2021-02-26 00:00:00', '', 'Standard', '10', '', ''),
(27, '2021-02-26 00:00:00', '', 'SubjectName', 'Maths', '', ''),
(28, '2021-02-26 00:00:00', '', 'SubjectName', 'English', '', ''),
(29, '2021-02-26 00:00:00', '', 'SubjectName', 'Gujrati', '', ''),
(31, '0000-00-00 00:00:00', '', 'SubjectName', 'Science', '', ''),
(33, '0000-00-00 00:00:00', '', 'SubjectName', 'Social Science', '', ''),
(36, '0000-00-00 00:00:00', '', 'ShowResult', '0', '', ''),
(38, '2021-06-26 00:00:00', '', 'AcadmicYear', '2019-20', '', ''),
(50, '2021-06-30 22:23:45', '', 'Standard', '11', '', ''),
(51, '2021-06-30 22:23:45', '', 'Standard', '12', '', ''),
(52, '2021-07-01 11:14:17', '', 'AcadmicYear', '2023-24', '', '');

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

--
-- Dumping data for table `resultmaster`
--

INSERT INTO `resultmaster` (`Resid`, `ResAcademicYear`, `ResStandard`, `ResDivision`, `ResRollNo`, `ResGRNO`, `ResSubName`, `ResStudentName`, `ResExamName`, `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus`) VALUES
(1, '2020-21', 9, 'A', '1', '1', '  english', 'BHAUTIK D SUDANI', 'Unit Test', 40, 14, 25, 'PASS'),
(2, '2020-21', 9, 'A', '2', '2', '  english', 'UDDHAV KAMLESHBHAI JASANI', 'Unit Test', 40, 14, 29, 'PASS'),
(5, '2020-21', 9, 'A', '1', '1', '  maths', 'BHAUTIK D SUDANI', 'Unit Test', 40, 14, 14, 'PASS'),
(6, '2020-21', 9, 'A', '2', '2', '  maths', 'UDDHAV KAMLESHBHAI JASANI', 'Unit Test', 40, 14, 40, 'PASS'),
(9, '2020-21', 9, 'A', '1', '1', '  physics', 'BHAUTIK D SUDANI', 'Unit Test', 40, 14, 38, 'PASS'),
(10, '2020-21', 9, 'A', '2', '2', '  physics', 'UDDHAV KAMLESHBHAI JASANI', 'Unit Test', 40, 14, 39, 'PASS'),
(13, '2020-21', 9, 'A', '1', '1', '  sanskrit', 'BHAUTIK D SUDANI', 'Unit Test', 40, 14, 34, 'PASS'),
(14, '2020-21', 9, 'A', '2', '2', '  sanskrit', 'UDDHAV KAMLESHBHAI JASANI', 'Unit Test', 40, 14, 32, 'PASS'),
(17, '2020-21', 9, 'A', '1', '1', '  soial science', 'BHAUTIK D SUDANI', 'Unit Test', 40, 14, 35, 'PASS'),
(18, '2020-21', 9, 'A', '2', '2', '  soial science', 'UDDHAV KAMLESHBHAI JASANI', 'Unit Test', 40, 14, 36, 'PASS');

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
  `file` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `uploadfile` varchar(255) DEFAULT NULL,
  `uploadfilename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`date`, `StuUIDNo`, `StuGRNo`, `StuRollNo`, `Stuprefix`, `StuStudentName`, `Stumiddle`, `StuLastname`, `StuAcdemicyear`, `StuStandard`, `StuDiv`, `StuGender`, `StuDOB`, `StuDateOfAdmission`, `StuParentMobileNumber1`, `StuParentMobileNumber2`, `StuHouseNo`, `StuStreetName`, `StuLocation`, `StuCity`, `StuDist`, `StuBirthPlace`, `StuAadharNo`, `StuCategory`, `StuCaste`, `StuLastschoolname`, `StuBankname`, `StuBankACno`, `StuBankIFSCcode`, `StuStatus`, `StuStatusChangedDate`, `file`, `filename`, `uploadfile`, `uploadfilename`) VALUES
('2021-07-01 10:53:11', '1', '1', 1, 'MR.', 'BHAUTIK', 'D', 'SUDANI', '2020-21', 9, 'A', 'MALE', '2021-07-14', '2021-07-06', '9873476546', '8687677575', '102', '583 - YOGESHWAR ROW ', 'SURAT', 'SURAT', 'SURAT', 'VADAR', '342343244323', 'General', 'HINDU', 'ASHADEEP HIGH SCHOOL', '', '', '', 'LEFT', '2021-07-01', '1_.1.', '2_.1.', '3_.1.', '4_.1.'),
('2021-07-01 10:54:51', '1222', '2', 2, 'MR.', 'UDDHAV', 'KAMLESHBHAI', 'JASANI', '2020-21', 9, 'A', 'MALE', '2017-01-02', '2021-06-28', '2322333233', '2322333233', '102', 'CSDSFDFDS', '', 'VDD', '', '', '123333333333', 'General', 'HINDU', 'AKS', '', '', '45555555555', 'ACTIVE', '2021-06-29', '1_.2.', '2_.2.', '3_.2.', '4_.2.');

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

--
-- Dumping data for table `submaster`
--

INSERT INTO `submaster` (`Subid`, `SubStandard`, `SubName`, `SubType`, `SubAcademicYear`) VALUES
(5, 9, 'english', 'Compulsory', '2020-21'),
(1, 9, 'maths', 'Compulsory', '2020-21'),
(3, 9, 'physics', 'Compulsory', '2020-21'),
(6, 9, 'sanskrit', 'Compulsory', '2020-21'),
(4, 9, 'soial science', 'Compulsory', '2020-21');

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

--
-- Dumping data for table `tbfeesmaster`
--

INSERT INTO `tbfeesmaster` (`cdate`, `Systatus`, `FeesStudentName`, `FeesStudentRollNo`, `FeesStudentGRNo`, `FeesStuDateOfAdmission`, `FeesStuParentMoNo`, `FeesAcademicYear`, `FeesStandard`, `FeesDivison`, `FeesJanuary`, `FeesFebruary`, `FeesMarch`, `FeesApril`, `FeesMay`, `FeesJune`, `FeesJuly`, `FeesAugust`, `FeesSeptember`, `FeesOctomber`, `FeesNovember`, `FeesDecember`, `FeesAnnual`, `FeesPaid`, `FeesDue`) VALUES
('2021-07-01 10:53:11', 'ACTIVE', 'BHAUTIK', '1', 1, '2021-07-06 00:00:00', 9873476546, '2019-20', '8', 'A', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 72000, 30000, 42000),
('2021-07-01 11:13:14', 'ACTIVE', 'BHAUTIK', '1', 1, '2021-07-06 00:00:00', 9873476546, '2020-21', '9', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30000, 30000, 0),
('2021-07-01 10:54:51', 'ACTIVE', 'UDDHAV', '2', 2, '2021-06-28 00:00:00', 2322333233, '2019-20', '8', 'A', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 72000, 12000, 60000),
('2021-07-01 11:13:14', 'ACTIVE', 'UDDHAV', '2', 2, '2021-06-28 00:00:00', 2322333233, '2020-21', '9', 'A', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30000, 5000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tbfeessetmaster`
--

CREATE TABLE `tbfeessetmaster` (
  `AcademicYear` varchar(8) NOT NULL,
  `standard` int(11) NOT NULL,
  `AnnualFees` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbfeessetmaster`
--

INSERT INTO `tbfeessetmaster` (`AcademicYear`, `standard`, `AnnualFees`, `date`) VALUES
('2019-20', 8, 72000, '2021-07-01'),
('2019-20', 9, 80000, '2021-07-01'),
('2020-21', 8, 60000, '2021-07-01'),
('2020-21', 9, 30000, '2021-07-01');

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
  `year` year(4) NOT NULL,
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
-- Dumping data for table `ttbsalarymaster`
--

INSERT INTO `ttbsalarymaster` (`year`, `SalEmpNo`, `SalFullName`, `SalDesignation`, `SalPAN`, `SalPFNo`, `SalEmpBankAccount`, `SalMonthname`, `SalMonthdays`, `SalPresentdays`, `Salleavedays`, `SalLWP`, `SalBasic`, `SalDA`, `SalCLA`, `SalHRA`, `SalTA`, `SalSPPay`, `SalDGPay`, `SalMA`, `SalArreas1`, `SalArreas2`, `SalPTax`, `SalPF`, `SalIncomTax`, `Salother`, `SalTotalEarning`, `SalTotalDeduction`, `SalNetPayable`, `CreateDate`, `SalEmpName`) VALUES
(2021, '1', 'MR. BHAUTIK DHANJIBHAI SUDANI', 'PRINCIPAL', 'ABHSKD1456', '1234455566', 12345678, 'February', 25, 25, 0, 0, 53000, 0, 0, 0, 2200, 0, 0, 5000, 3000, 0, 0, 1000, 1000, 2000, 63200, 4000, 59200, '2021-07-01 10:19:51', 'BHAUTIK SUDANI'),
(2021, '1', 'MR. BHAUTIK DHANJIBHAI SUDANI', 'PRINCIPAL', 'ABHSKD1456', '1234455566', 12345678, 'January', 28, 25, 2, 1, 52000, 2000, 0, 1000, 0, 5000, 0, 500, 0, 0, 500, 6000, 7000, 4000, 60500, 17500, 43000, '2021-07-01 10:10:00', 'BHAUTIK SUDANI'),
(2021, '2', 'MS. HEMANSHI VINODBHAI SHAH', 'TEACHER', '1223bhagy1', '1232233323', 5332222121, 'January', 28, 25, 3, 0, 60000, 6000, 0, 1000, 0, 5000, 0, 500, 0, 0, 500, 6000, 10000, 4000, 72500, 20500, 52000, '2021-07-01 10:12:48', 'HEMANSHI SHAH');

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
  ADD PRIMARY KEY (`Sysid`),
  ADD UNIQUE KEY `acadmicyear` (`Value`);

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
  MODIFY `Sysid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exammaster`
--
ALTER TABLE `exammaster`
  MODIFY `ExamId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listmaster`
--
ALTER TABLE `listmaster`
  MODIFY `Sysid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `resultmaster`
--
ALTER TABLE `resultmaster`
  MODIFY `Resid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `standardmaster`
--
ALTER TABLE `standardmaster`
  MODIFY `StdId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submaster`
--
ALTER TABLE `submaster`
  MODIFY `Subid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Ttid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

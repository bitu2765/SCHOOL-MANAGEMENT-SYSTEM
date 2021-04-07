-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 07:41 PM
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
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-02-17 12:45:36', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `schoolmanage`
--
CREATE DATABASE IF NOT EXISTS `schoolmanage` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `schoolmanage`;

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
  `EmpDesignation` varchar(27) NOT NULL,
  `EmpGender` varchar(200) NOT NULL,
  `EmpDOB` varchar(50) NOT NULL,
  `EmpAddress1` varchar(150) NOT NULL,
  `EmpAddress2` varchar(150) NOT NULL,
  `EmpState` varchar(15) NOT NULL,
  `EmpCity` varchar(15) NOT NULL,
  `EmpPinCode` decimal(8,0) NOT NULL,
  `EmpContactNo` decimal(10,0) NOT NULL,
  `EmpEmailID` varchar(25) NOT NULL,
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

INSERT INTO `employeemaster` (`EmpNo`, `EmpNamePrefix`, `EmpFirstName`, `EmpMidName`, `EmpLastName`, `EmpDesignation`, `EmpGender`, `EmpDOB`, `EmpAddress1`, `EmpAddress2`, `EmpState`, `EmpCity`, `EmpPinCode`, `EmpContactNo`, `EmpEmailID`, `EmpDateofLeaving`, `EmpCategory`, `EmpAadharNo`, `EmpPan`, `EmpPFno`, `EmpStatus`, `EmpLastStatusChangeDate`, `EmpBankName`, `EmpBankAccount`, `EmpBankIFSC`) VALUES
('1', 'MR.', 'MAVANI', 'MOHITBHAI', 'HIMMATBHAI', 'ASSISTANT TEACHER', 'MALE', '1999-02-11', 'LASKANA', 'SURAT', 'GUJARAT', 'SURAT', '395010', '9872778784', 'mmh16962765@gmail.com', '2024-10-16', 'OPEN', '123456789101', 'KNG89099', '9872778784', 'ACTIVE', '2021-03-26', 'SBI', '17987998787', 'BOB09876'),
('2', 'MR.', 'BHAVANI', 'BHAVIN', 'MAHESHBHAI', 'PRINCIPAL', 'MALE', '2000-10-18', '37-HARI KRUSHNA RESIDENCY,MAHAVIR CHOWK', 'SURAT', 'GUJARAT', 'SURAT', '390388', '9896534875', 'mmh16962765@gmail.com', '', 'OBC', '789654321789', 'NJK65487', '9872778784', 'ACTIVE', '2021-03-11', 'SBI', '124567788977', 'sarsbi9866'),
('3', 'MRS.', 'JASANI', 'DHRUTI', 'RAMESHBHAI', 'ASS. TEACHER ON PROBAT', 'FEMALE', '1992-01-15', '28- MARIN FLATES , VANIYA VAD , UTTARSANDA , NADIAD ,KHEDA .', '', 'GUJARAT', 'NADIAD', '348765', '9845690234', 'dhrutijasani6577@gmail.co', '2008-06-11', 'OPEN', '789345298768', 'HSK89345', '9278463928', 'ACTIVE', '2021-03-11', 'HDFC', '1002003897', 'surhdfc097'),
('4', 'MISS.', 'MULANI', 'RAJVI', 'JIGNESHBHAI', 'ASSISTANT TEACHER', 'FEMALE', '1989-01-27', '583 - YOGESHWAR ROW HOUSE , NEAR KALYAN JEWELLERS , VADTAL', 'SURAT', 'GUJARAT', 'ANAND', '378928', '7890765643', 'mulaniravi897@gmail.com', '', 'OPEN', '672657875648', 'bhj87654', '9873476546', 'RESIGNED', '', 'KOTAK', '63876489468974', 'sukt87987');

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
(1, '2020-21', 8, 'physics', 'Test', 30, 12, 0, 0),
(2, '2020-21', 8, 'maths', 'First Exam', 30, 12, 0, 0),
(3, '2020-21', 8, 'maths', 'Test', 30, 12, 1, 0),
(4, '2020-21', 9, 'maths', 'Test', 30, 12, 1, 0),
(5, '2020-21', 9, 'maths', 'First Exam', 100, 35, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `listmaster`
--

CREATE TABLE `listmaster` (
  `Sysid` int(9) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT current_timestamp(),
  `SyStatus` varchar(5) DEFAULT NULL,
  `Parameter` varchar(100) NOT NULL,
  `Value` varchar(100) NOT NULL,
  `infomation` varchar(150) DEFAULT NULL,
  `Description` varchar(150) DEFAULT NULL
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
(6, '2021-02-26 00:00:00', '', 'Category', 'SC', '', ''),
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
(45, '2021-03-30 21:41:38', NULL, 'AcadmicYear', '2019-20', NULL, NULL);

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
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`date`, `StuUIDNo`, `StuGRNo`, `StuRollNo`, `StuStudentName`, `StuAcdemicyear`, `StuStandard`, `StuDiv`, `StuGender`, `StuDOB`, `StuDateOfAdmission`, `StuParentMobileNumber1`, `StuParentMobileNumber2`, `StuHouseNo`, `StuStreetName`, `StuLocation`, `StuCity`, `StuDist`, `StuBirthPlace`, `StuAadharNo`, `StuCategory`, `StuCaste`, `StuLastschoolname`, `StuBankname`, `StuBankACno`, `StuBankIFSCcode`, `StuStatus`, `StuStatusChangedDate`, `file`, `filename`, `uploadfile`, `uploadfilename`) VALUES
('2021-03-10 19:51:40', '1000', '10002', 1, 'BHAUTIK', '2020-21', 9, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10003', 2, 'UDDHAV', '2020-21', 9, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10004', 1, 'KEYUR', '2021-22', 10, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10005', 1, 'MAYUR', '2021-22', 12, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-04-01 06:52:16', '8908', '80007', 1, 'SUDANI BHAUTIK DHANJIBHAI', '2019-20', 9, 'A', 'MALE', '2021-04-01', '2021-04-01', '9873476546', '9872778784', '102', '703 - YOGINATH ROW H', 'SURAT', 'ANAND', '', 'SASAN', '7890654321', 'GENERAL', 'HINDU', 'AKS', 'SBI', '97889698', 'bnvy7657', 'ACTIVE', '2021-04-01', 'bg-sky.jpg', 'bg-sky.jpg', 'bg-sky.jpg', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `submaster`
--

CREATE TABLE `submaster` (
  `SubId` int(10) NOT NULL,
  `SubStandard` int(5) NOT NULL,
  `SubName` varchar(30) NOT NULL,
  `SubTotalMarks` tinyint(4) NOT NULL,
  `SubType` varchar(10) NOT NULL,
  `SubAcademicYear` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submaster`
--

INSERT INTO `submaster` (`SubId`, `SubStandard`, `SubName`, `SubTotalMarks`, `SubType`, `SubAcademicYear`) VALUES
(1, 8, 'chemisrty', 100, 'Compulsory', '2020-21'),
(3, 8, 'physics', 100, 'Compulsory', '2020-21'),
(4, 8, 'maths', 100, 'Compulsory', '2020-21'),
(5, 9, 'maths', 100, 'Compulsory', '2020-21');

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
('2021-03-19 15:33:24', 'ACTIVE', 'bhautik', '1', 1, '2021-03-02 15:31:54', 879867, '2020-21', '8', 'A', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 12000, 12000, 0),
('2021-04-01 06:52:17', 'ACTIVE', 'SUDANI BHAUTIK DHANJIBHAI', '1', 80007, '2021-04-01 00:00:00', 9873476546, '2019-20', '9', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12000, 12000, 0),
('2021-03-19 15:33:24', 'ACTIVE', 'uddhav', '2', 2, '2021-03-02 15:31:54', 879867, '2020-21', '8', 'A', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 12000, 8000, 4000),
('2021-04-01 05:57:10', 'ACTIVE', 'UDDHAV', '2', 10003, '2021-03-16 00:00:00', 1234567890, '2021-22', '10', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20000, 20000, 0),
('2021-03-19 15:33:24', 'ACTIVE', 'Mayur', '3', 3, '2021-03-02 15:31:54', 879867, '2020-21', '8', 'A', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12000, 2000, 10000);

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

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Ttid`, `TtAcademicYear`, `TtStandard`, `TtDiv`, `TtUpload`) VALUES
(1, '2022-23', 10, 'E', 0xffd8ffe000104a46494600010101004800480000ffdb004300110c0c0f0e0f171010171f1612161f211916161921282020202020282923252525252329292d2e2f2e2d29353538383535414141414141414141414141414141ffdb0043011212121615161a14141a1e1718171e261e1c1c1e262f26262326262f362d292929292d3632342f2f2f34323a3a36363a3a414140414141414141414141414141ffc00011080212032003011100021101031101ffc4001b00010100030101010000000000000000000001020304050706ffc4005310000103020203070f09060504020203000100020304110512132131224151617192d1061415323334425253728191a1b1b2235462738293b3c1d224354383a2f0164463c2e125a3d3e274f1648494c3f2ffc400160101010100000000000000000000000000000102ffc4001d110101010002030101000000000000000000110151712161814131ffda000c03010002110311003f00fde20202020202020202020202020f90e21dfb3fd6c9f115965cf640b20202020cac82a020c501010101010105415042822020a10540082d90628050440415054150101044040b20590440b206a4110102c816412c81640b20cac81640b2084209640b2059050105b205904b20208504416c81640b205902c82202020db4ddde3f39bef41f625a6840404040404040404040404040404040404040404040404040404041f21c43bf27fad7fc4565968404040b20202020b74110105b205904415044041420205904404150105404137904404041420b740415010101042831415044040404040404041420a80808259044040404150540418a020202020202020881641b29fbbc7e7b7de107d8969a101010101010101010101010101010101010101010101010101010107c8710efc9feb5ff00115965a102c82a0a83bf079a48e591911b3e489ed6eabeb6eec0b1e1cb6e3ba06486b867a68c09b6be985c5f8e2e1f3768deb841c07477b6e9bc475f420ba0bf6af63b8af63ea759047432c7dbb081c36d5eb412e81741502c82140b20a02020882202020a020141106482a8312150404040404150541102e8220202020202088080808082a0c9044040283140416c822020202020b6410a0202020a82202020ce0eed1f9edf7841f625a6840404040404040404040404040404040404040404040404040404041f22afb75e4ff5aff88acb2d17412e82a0a83653cc69e664cddb1b83fd450655b0f5bd5c8d8cd835d78c8f14ee9bec283b3ae21c4acdacb32ab60a91ab3fd66f5fe96fefdb6a2b86a68a6a6243c6a072df8f80f01446a63df1f68e2de43641bfae5ceee8d6c9e7375fadb628330689fdbb6488f0b0878f53ac7fa9067d6713fb8d446efa2fbc67fa865fea4184b415513733a2764f1dbba6f39b70839420a828402a08a8205902c101062808284192821544404040416c8164150441501044040b205904b2020202059054150106281741101001416e81740ba020b640404189404040404040416c83641dda3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e455e3f6c9feb5ff115965cf6416c82a02020e8a9ddc70cbc2cd19e58f57c395073a0eea7c435086a0ee40cac96d98b478ae1e1b38b68f05027a16b9e1acb472bb5b599af1c8386290fc2ee4bdf520e27b1d1b8b1e0b5c35169d44208808338a592139a27161e16923dc83a7b233c843656b2727609180bb9c2cef6a0e996969844e7d433ad24cb78d824cc5c77be4c82e0395c10796822020a8163c05065a37f8a7d48218a4f15dea28268a4f14fa8a0ba197c47734a09a293c477a8a0cf432f88ee69e840d149e23bd4503412788ee69e8418e865f11dea2802293c53ea282e8dfe29f5140c8ff14fa904c8ee03ea40caee028195dc07d48195dc07d48195dc07d48195dc07d48163c0502c78105ca781416c78106363c082653c055172bb80fa9032bb80fa9032bb80a065770140caee03ea418e57701f52064770140caee04181078102c5035a020a8082841504410a097081740b840419590105419d3f768fcf6fbc20fb02d3420202020202020202020202020202020202020202020202020202020f91d7f7e4ff005aff0088acb2e741501010107447bba6919bf19128e43b977bda839d0441d1054e46e8651a4a726e59be0f8cc3bc7d877d075ca406374dfb4d21dcc538d5247f479478aed5e2941cd35196334d13b4b07946ef713dbb5a7d9c04a0c20a49a7d71b6ed1b5e753472b8d820da22a387babcccef121d4df4c847c23d280ec424032d3b5b4ed3e4bb6f4bcddc7d6839104ba035c41b8362106f6d7d533b595e3d282f646b3cb3c721b2075fd6796939c7a5066311acb5b4d2738a0c0d755f97939eee9418f5ed5796939eee941b1b89d733b5a8947f31dd2833ecd627f3a9b9eee941afafeafcbc9cf774a0c86235add95128fb6ee940ec856fce25e7bba5063d91adf9c4b6fac774a0bd92aef9c4bf78ee9419764ebbe712fde3ba503b275df38979eee94190c5b101b2a65e79e9419766f13f9d4bce42af67314f9d4bce42af67b15f9d49ce42b1ecde27f3a979c50a766f14f9d4bce2855ecee29f3a93d6853b3b8a7cea4f5a157b3d8a7cea4f5a52a767314f9d4bce42a766f13f9d4bce42af67714f9d49ce429d9dc53e7527390a767714f9d4bce42b038ce2476d4cbcf281d98c4be732f3ca0766f13f9d4bcf282f67b15f9d4bce429d9dc57e752f39063d9ac4fe752f38a0766b13f9d4bce28071ac4cedaa939c8546e338934656d4c80705d0ac4e2b885efd7125fce4198c6713f9cc9eb42af66b131fe61fece842b2ece6276b1a87fb3a10a9d9ac47cbbbd9d0855ecde25f3877b3a10a7673121fe61dece842b0ece6237eee6fc8de8413b35881fe3bbd9d0832ece625e5ddfd3d083641572d71741527480b1ee6b88199858d2e04102fbdac22bcd44541106ca7eed1f9edf7841f605a6840404040404040404040404040404040404040404040404040404041f23afefc9feb5ff00115965a10101010106fa27344ed0fed1ff0026ee476af66d41a2c41b1da36a02020eda0150dcd232c20ed6632f722381dc27935f020b2b4413b24a271d14daa327972b9a46f8bf0ed16ba0d7884ef96a1e0b89635ce0c6f82003bc36041ca8080831c8ee03ea41908a4f11dea2832d04de4dfcd3d0832eb5a8f24fe63ba105eb5a9f252731dd08275ad4f929398ee840eb4a9f232731dd082759d57919398ee840eb3aaf232731dd082f5a557919398ee84190a4a9f232731dd082f5a54f929398ee8413ad2a7c949cc7742075a547929398ee8413ada6f26fe69e840eb79fc9bf9a7a103ade6f26fe69e8503ade6f26fe69e8543ade6f26fe69e840eb79bc9bf9a7a103412f88ee69e840d04be23b9a7a104d0cbe23b9a7a103432f88ee69e8503432f88ee69e8543432f88ee69e8413433788ee69e840d04fe4dfcd3d081d6f3f937f34f4206825bdb23afc194f420bd6d3f937f34f42075b4de4dfcd3d081a097c47734f4206826f11dcd3d08218a5f11dcd3d0831d0c9e23bd47a103432788ef5140d1bfc53ea281a293c53ea282647f8a7d48191de29f520b94f0140caee0282657701416c46d082e53c082653c05062420964041db848bd4ff002e6fc3720e217b20a80836407e5a3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e475fdf93fd6bfe22b2cb4202020cdf6b32dc1afd650608083754d8bf48364803fd27b6f6a0c2389f29cac173bfff003c0837da9e9f6da793807731e9daef45871941056bcbef30d2476ca63d832fd1b76be841ead053b77163a48227f5cc2f3e2b47ca30fd2166dc7a46a457837bebdf28820850563decd6c7169e23641b7afaaad6d33ede7140ebdaa235cd2738f4a075dd4f957f38f4a01aca93a8cafe71418f5c4fe51fce3d28275ccfe51fce3d28368c42b5bdad44a3f98ee9411f8856c82cfa895c380c8ee941afae67f28fe71e9417af2abcb49cf774a0cbaeea7cac9cf774a0cbaf2a7cb49cf774a075e55796939eee9417af6abcb49cf774a0bd7f59e5e5e7bba5066313af6eca9987f31dd2832ecbe23f3a9bef1dd281d98c4be7537de3ba50a766312f9d4df78ee9413b2d88fcea6fbc774a0765b10f9ccbcf774a0bd98c4be7537de3ba503b33897cea6e7bba504ecce25f3a9b9eee9413b31897cea6fbc774a0766712f9d4df78ee940ecce25f3a9bef1dd281d99c4be7537de3ba50438b622edb5331fe63ba504ec9d77ce25fbc774a0bd93aef9ccbf78ee9419765f11f9d4df78ee9417b2f897cea6fbc774a158bb16c47e7537de3ba5061d95c43e7337de3ba5065d97c47e7537de3ba504ecad7e6cdd732df8739bfbd05762d883b6d4ca7edbba5062dc4f1002c2a6503eb1dd2832ecb623f399757d33d2856cecce27f3a979e50a9d97c46f7eb996fc398a157b3389fcea5e7142a766712f9ccbce429d9bc4fe752f390438c622477cc9ce282b718c45bb2a64e7142b1763188efd4c9ce4106315a0ddd2ba46efb24ddb48e020a0d788c2c82ae58e3d4c0edc8e0075dbda833c2bbe8713253ff006dc83906c4150106707768fcf6fbc20fb02d3420202020202020202020202020202020202020202020202020202020f90e21df93fd6bfe22b2cb42020b7419137b7120880836670630d76d6936f4d906198d88de3b46f20882141b61ab9e06bd91bf2b641678e1def71e541a803aec366d41504d680831404040404041779044040415064d4192808080808082208a8aa08a8882a0202020590441420aa0a020a831720c550404008324192822a0a02a31404040410a0c4ec41d98a8b56ca382df084170bb75c1fab97f0dc8392e8010106701f968fcf6fbc20fb0ad3420202020202020202020202020202020202020202020202020202020f90e21df93fd6c9f115965a1010106c9633116dfc26b5e3ed0418b4eb080f76e8f2a0202020c50106ea6a8eb794496cc363987639a76b4f2a0db554ec8ed2c24ba9e4ed09da0efb1df487b46b41cf740da83594041500a088082840404041420a8082dd415010101062a82020c941895410101050a0a808082a0202085062a888082d905416ea0a8375235c666d9a5cdbd9d617d4751418cf4e6025ae7373036b0373ec41adcd0d6b4efbb5fa151820202020c4a0ecc57bfa5e51ee086ae13df27eaa6fc2720e14150106707768fcf6fbc20fb12d3420202020202020202020202020202020202020202020202020202020f90e23dfb51f5aff88acb2e7ba020883af11be78870410db981072a020a0a0b7418dd02e8220c90331b65beae041d34f486a1bf20ecd28db0ec71f335eeb936f120d44104822c46d05060e083141920c50101050808080808080808330a05d044054105b282a0208504541010140baa082a82a020a808302a820a82205d02e82b7746d7b719d883649a76372bc9c9bd63b93c9bc82f7ccdaf55fb63c406b2819df24d9d80937dc81c03620db57486291c490d69dd3413bab1deb6d41ce18346e79deb01ca506bb840ba0c4ec41dd8c907109fcefc820c70cef83c51cc7fedb9071a02020d94fdda3f3dbef083ec4b4d080808080808080808080808080808080808080808080808080808083e4388f7ed47d6bfe22b2cb9905b20b95076e29dd22e2821f8020d587b04959031db0c8d07d68398dae6db37904404040404195d06282a0df255cb386894e62dd8e3db5b80bb69f4a0ce16d33c5a57ba3778c1b99bef0505968d8d697c73c7201bdba6bb9ae010688e2d23ad99ade379b041d1d8fb7f98a7fbcff841ca5b6765b8e51b10748a4a723bea31c45b27e828354d08888b48c901df8c93ef010650d14f502f100f3e2870cdcdbdd06b92192276495a58ef15c2c7da831b20a80808080a02a25902c82d90105ba81740416c81608314040541050a0a8220a80822a31412e82dd0101010651cf243da1d476b7683ca1075de1d0f91926e52dca0fadb98f2ec41a5eda881b6b9119df69dc9f4841a9f217860b6b68cb7e1d66c83ade453c3a802f69c973aece22ee3ca3b50834b2a5d2911ce7331daaeedade30507320c4ec41dd8bf7fcdca3e10835d0bcb2536d65d1c8df5b1c8399010106da6eef1f9cdf7a0fb12d3420202020202020202020202020202020202020202020202020202020f90e23dfb51f5aff88acb2e741920a83ab133f2b1fd4c3f861063855bb214f7d9a46dfd683937d02c81640b20590102c808080833082a0c4a088082d9010541bbaee731685cf2e8f79aed76e4becf42053d39a8768d84690f68c3e11e00787de8351b8363a88da1045015150141105404040404041102e502ea820209740415405462505082a020c4a0880832415ad2f366eb3c010441945199a4118dfda7806f9f520e9a8958d224c80b9e2ec0ed61918d4d16e1d4811d412d718fe4de05c86f68f1bf769d4833a77c0ebd43dba27335023b42f3b373c5b7520d2018d8e64c3342f3712335d9dc23f308358d0c7ba0ed21de16b0f4a0d08083a2ba4d2d549278c6e832c345ea98389df0941c83620a80836d37778fce6fbd07d8969a101010101010101010101010101010101010101010101010101010107c8711efda8fad7fc456597320c901076627dd63e2820f8020984f7fd3fd6350722020202020a80822088082a0cae808220882a0a8080a02a3aaaa76d4b592bbbe3b597e9dbb57f2ef3b876a0e650101010104ba05d5110105b20aa020c55040404041420202821544416e825d0102c82a0200d4837f5c07ea9db9c78db1febdff004dd06e14d684ba9ce774a2c1a753c337f56fdcf020d4724b1b58e39258f73bad40b7f22106b746d634ee839e7606ebb729419d4fc98653f89adfe7bb6fab620c8c72b1e1d4e0da46876e758d7b41f4a0e791e1de080785bd0835a0a8083af0a6e6ac6045710d888a80836d37778fce6fbd07d8969a101010101010101010101010101010101010101010101010101010107c8710efda8fad7fc456597320a10541dd8ab72cb17ff1e0fc30831c27f7853fd635071a0202020a80808083140404190415044110648080a0aa8280808080825d045410101064a020208a8880808284154040405462822020b641501044040419c6c323c306feff00bca0d85cd9a76ed0cb863789bb020c8d41b9654b4496d449d4f16fa5d3741b69e9e371d34273066b11bf53b3782380ff007a9072b64731c4b9a1cfdfce2faf9106c96adf2c2d639c6ed2750d4db1b6f0d4839901051b50652b0c6f2d3a8841d38477f45ca10708404041b69bbbc7e737de83ec4b4d080808080808080808080808080808080808080808080808080808083e455fdf93fd6bfe22b2cb950648083bb16eed1fd441f86104c1866c4a9870c8d41c682202004150101010628082a0a10540404050540541404040412e822a080808082a82a0a8082208822a082a00505404115110441420a808080822020c9ae2d06dbe2c7910671be268dd30bdde7587b35a0db595465376d835ed05c1a00d7bf7dfda8327c6d6c21b212d630eeadb5d21de1e68406cb14cdcb62e701a9b26b3f65e2c6fc46e10723f47b632791c830ba020a36841d98a802b1f6fa3b3cd082e0f735f0346fbbfe7f241c436202020ce9fbb47e7b7de107d8969a101010101010101010101010101010101010101010101010101010107c8abfbf27fad7fc4565973a02020efc5c5a68bff008f07e18418e0dfbc69feb020e3411062832082a02020208808082a0a808082a0280808220202a220282a020202020a10540b20b6442c8ac6c80816412c822a0808080828405015040404110102e80d76521dc1ac20e86dea20c80de56b8bedbee0eb5edc62c835c714acf9437606ec711bfc0834202020a36a0ebc4ce6a80ee18e23eb635067823f26254eedbbab7ac11f9a0e04041506ca6eef1f9cdf7841f625a6840404040404040404040404040404040404040404040404040404041f22afefc9feb5ff00115965ce808083bf17eef1ff00f1e0fc3082609fbce9afe50218e23b4a0c50441904040ba05d04414a0202020a105505404040b20a822020880808080808080832b20222dd010104404045104412c816412ca8590550554440404041104411010105739ceed893ca831415044150756237d2b2fe461fc36a0cb0700e234f7d99c20e2404041b69bbbc7e7b7de107d8969a101010101010101010101010101010101010101010101010101010107c8abfbf27fad7fc4565973a020850776317d3c77f9bc1f86d40c0cffd4e9beb020e228220882a020202020c904b20b641501054050541504ba020c75a05902c81640b202020a80822020a82dd010110404040404510440404040405445015040418a059010440404192096412c83bb17735f52d733b530c16fba6a0c7081ff50a7f3c20e3b6a4040b20db4fdda3f3dbef083ec2b4d080808080808080808080808080808080808080808080808080808083e455fdf93fd6bfe22b2cb9d0104283bf18d750cfa883f0da82e091876254e0efc810712088080816410a0882a0a0a05d065ab8507b7837531262b4cea864a23b3cb035cdbec035ede34847a07a829b55aa5bc7b83d2ac58e3c67a96ec5d30a874f9c17061192db6fc6781448d385f5315389c06786463597ca33df5dbd0908d18b60d2e152b639de0e76e605a0d907a74dd45d454c11ce276012343c0ca7611748b1bbfc0551f396734f4a423cfadea6a4a4ac828dd335cfa83b921a756bdf4891d92f50f511ff009865b6dcb5dff291631ff071f9e45ab6d813f9a423437a996bcbb2d647b8d4fbb1e2d617d77e248916bba95928e8dd566a18f6b6d701a77c81b7d3c0908cf0eea466aea56d4b666b43fb50413abd6908e9ff0003ce1c01a966bfa27a522c70635d4ef6298c7bea1aece6c065236725d123c8c8cf1c7a8f428264678e3d47a1075d060f5388b8b6977797b676b0d1e92151ead3f52f4aecda5acbbd86d236265f293bd73d09163397a91a72fd0d3d6b4cde4e46f41fc9211e362384cd874da1a8201dad759d95c388d911ca2369360fb93b059dd0a0f7693a8dad98679dc208ed7d6097f355847a5fe05832eba9793c4c1ee562c72d4750d52dbba099920e0702d3f9a908fcec94fa27963dd95edd4e690e041f5288f5f09ea5e5c4e033b266b5b9b28d44ecf48548edff00024c36d532dbfb83d29163c6c5b06930b984523c38386663c5ec47a911c19078c3dbd0a0f7b0eea3ea6b699b51a51107eb602d26ede1de5611d5fe029fe72de61e9562c78d5d839a4aeeb2d2b5ef25a2f623b7b5bdea23d697a86a866ca865b6eb6bb7b92e916301d4693abaf22bf0007a5211a0752ed73dd1b2b232e6db36e1e36ecf71422d4f526f828e4ab152c91ac6e6b341d6396e908f02c88882d940410aa220202020205907662766cccb6cd0c3f86d40c1ff007853f9e83846c4150106c83bb47e7b7de83ec2b4d080808080808080808080808080808080808080808080808080808083e458877ed47d6bfe22b2cb9d010441df8b9bd50e28a01ff69a833c1356254e781ff91431e7dee80808082a0c4a0205905b20205907ea3a99ea929f0f8451ccc76ee5be905ac03ac35f222d7ed24958d78df3c0b4afcaf5678b35cd386e8dc1ed7324cfbc45afa94de135ec61fa3c370f82949b4a181c40d66ee3acdb94a2bcaeaa7256d0692e3ae295dbb683e0bacd75fd3644d7a1d4b62c2ba9440222ceb663185fb5a755b57a930c7b3533b29e17cd21b318d2e7720555f83c43aa48aaf10a5ad6c4e6f5bf6cd246bd7bcb2cd7ecb09c4e2c569bae18c2d198b6ceb6f2d34e5c5ea6830e63259c3ace7599a203511ea5079987625855556b61874e5d21d5a40db0b0248bdef62a23d0eaa065c1aa06f0c96e7355d5d79dd4b75410e8e9f0c31bb49ba19f565df772a67098fd0f5c135622dec99c9b5c1da2c0dfd28afc4754b8f438b089b146e6688bae5f6dfb701e253759782a0eac3285d5f59153375673ba3c0d1ac9f52a3f7cc8190834744c6885966bc1beb277b66dcbaef7db657d34f26b6bf0fc3eadc27799a4f0a1898db375ec2e275dbd6a23bb0caca1c69e5f135ec92021dbbb6f82dda151cdd59b72e170870d62503697782edf3ad34d61d46e13147076466033bcda1bf82365c719299c98fd157d65350c5a7aa76560d5c37bef5b7d557e7bfc75460e56d3bf47c3b91ec52a57e830eafa6af8bae298dc1d4ef181e0215578bd5860eda8a7ebe887cb45dd2de133ff005dbc8a6a6bcfea571d8a9591e1e63717cb2ea78b5b7560a66fe19c3f46fae6b650350cf9ac1eeb03636b81ca7d37555e7550a6c6a0eb399c23a81dc86d731f6d8e4f43c4c07a9a9aa2b0f5e465b0407760f86e1e08e10a663398fdcbdf901b5b736dc8e05a69cd88e251e194aeaa9439c2e37236dddcbb107cf6bf15ebac4fafdadca33b1e1a76ee2dd0b3ed9f6fdf60d8cc58c42f918c2cc8eca43adc1755a618b4d4341075c4e0e4cc05a302f9b6f17020f169b17c26a2b18c8f4e5f33834670db0713b6f7bebf5288f6f1c688f0aab6f83a22aabe69759652e822a083128081740ba05d01010766262d333ea60fc36a0b838ffa841e77e450710404041b20eed1f9edf7a0fb0ad3420202020202020202020202020202020202020202020202020202020f91621dfb3fd6bfe22b2cb45d044041dd8b868a9197668a1fc36a0b83dce21001b49ff69431c03620a808080808082a0202028083f6b0e21d75414735b349deef206c2db5eeee368bf1aad25761e7119f0ca8736c5e724c06f066eec6fc40a709c3d47523e7ae323da5d1482c7b5bb325f29b8d763ec555cf088e574d4552323a50f8bb4201bdc821de11dfe5419f523486930fb49aa47c8f2479a727e49898d7d5ad608b0f14e0eee770d5f45bacfe49a6bf04b2cbf7bd48bb260f7ff51eb58d63baab0b8317a38455176adddda6dac8e4d88afcee3dd4fd2e134adaba47cad943c3412ee1bf000a6e26e3f3f357d64ecd1cd3c92336e573890a23d1ea49b7c621e20ff84ab863f5f03ad579f55b751c6375ca41bd803ab8eeab4f9b9da7956582c83f4bd44401d573bb7db1587da3ff000ae2e3f5588cbd61874d2c60031b0e40378ef2ad3e6362759d64ed2b2c3d3c1b1b9f09326898d7892d983afe0df839555adb8cf549518a5388248d8c68767bb6fb45fa5295fb8a50ca7a28211e0b19abd0ab4fc875675064ac8e117d1c71873471bf7fd4a6b3afce59447e8ba8a9df1e24621da4ac39871b7582ae2e3f773c62489f19d8e6969f485a69f32c18118952db7a567bd63197ec602d9abe485e1999920701975d8588398edd6b4d376195edae925cb9593c3216491f1071dd8e5083d8bd85cea54799876330620fa9d177281cd6e90f877dff0066a5079dd534ba4c22a1af20b9af61b01b0170b0277cd934d7e05465fb9ea1ce4c3e777fabfed6ab8b8f566a08b16a111d51362ecd761b58b491aae3622bc0c6fa98a2c3685f574ef944b116e525dc2e03802447e69f89d74ac31495123d8edad73c907daa239940541010441104416c82a020883b714eeedfaa87f09a836603fbca1fb7f0390c79a3620a8083641dda3f3dbef41f615a6840404040404040404040404040404040404040404040404040404041f22afefc9feb5ff115965a2c82d90379077e3000aa1f550fe1350d3046e6c46017b6e8ebfb250c7065412c8080808082a0205905b2822020fd3f51d50d73a6a17db7634b15fc76edf67b95c5c7eb30c71305ddaee49cc6da9dbe0dadaefc4b58ae4ea86bbb1b86bcc1b891e72479779ced64faae54d4d74e1d3f5ec30d637f88dddf9c35586f6dba7b57534b8b8dc65de0e16e1d8a8fc1755d5dd7389b983b58068c72ed77b7dcb3acebc3ba88fd9f53cf70c01f95b9be55c2dbd6b8bdf8969ac746258d55e1987c32e85a1f23cb72c9bcdd6476a528f06a31cadc744740f11b73c82ce171af8f59e1513d3655f51f57494f2543e58c88db98817def424234752bab1786df4fe129863f474b870756894c85d690c9a4633ba3b757cc75d80161bdc5b5557e19e4663cab2cbf7341d4ae19252c3248c717b98d738e776d2013beb51a8e3c1db0e1dd50cf471ea8dedcacb9bebb07f4a9fa3f4d534eda9a7969de753da584f2ad2be6759453d14a62a8616b870ec3c60efac32d7041254482285a5ef3b1add688ceb28a7a394c350dc8f1bdc5c20a2bf64fac0fc3e8eafe806075f5e7d4dca05f5dec7d4b5c2bcbea868a4ae89988c4dbe8f3433b46b232388cdabd2a6f26f2fccea5197eb7a8cc2e4121af9059997245c77da7915ce5ac7e9f109fade8e695c6d918e20fa352d2be7381fef3a5bf956fbd63197d13ad5afa8cf23736439e37bac6c4f8bc165a69f3e757c9418b4b530f6cd9a4b8e1198dc15197add507556caba46d3d1ddba51f2e4ea20789fdef255dd5ea3d8c968ab62737382e65dbfdf02618cb1612c78455c6e2f31b258c3349bc356ae41b10d7e4111fb1ea49ef184d6646e639f72d1be4b47f7c8ae2e3b6af17a9c3b0a3522268f940c8dafed7211b751bfaf5a0fced675515b8a43d62f6c404ce68bb6e37c5b692a52ba65ea22b6189f2ba68b70d2eb0cdbc2fc0908fcda208220a80822088220b7415043b107a18d372d616f04708ff00b4d4359753ff00bca1fb7f0390c79610541506c83bb47e7b7de83ec2b4d080808080808080808080808080808080808080808080808080808083e495fdf93fd6bfe22b2cb9d0100ec41e86303f6bfe5c3f84d435704fde30f29f84a18e01b140210636545b20b94281950105b20882a0c4a0883ab0cabeb4ad86a2fa98f05de6ec3ec547d429e10c06db092e26c05c9d77d4b4d3f15d5b57192bdb4a3b485b7fb4fd7eeb2cea6bbfa85aeccc9689c7b5f946721d4ef6fbd5c31fa4ad9db454d3551d791b9adc8350555f2b7b9d23dd23cddee25ce3c676ac32ecc12264d895346f01cd2f1769d85531f449a9e3a681cd8630231ba1146ddfdba86faad38e9279277649221a166e407b2d99e75df58d56f6941e9c50c26cf11069da2ed008547275422f8554fd59f629a38fa94a58061b0cfa36e94e7f94b0cddb11b76a6263dad08cc1c355bfbb2aa9d6b05ee2365f872841981bdc1be83e7bd5048f831b9a461b3dae6b9a7ecb6cb2cebf5b8363906290dae195206ee3e3e16f17b95cd5cd7a2e8992b7473303dbf48037f42aa430410ee628db1f135a07b907e77ab1a8c3cc1a290e6ac1dcf2ed6f0e6e253535e260b8a411b7acabb5d2b8e663f7e27f0f215338d4cde5fac8d92c36929ecf8480098836c76eeb6ebb6a0ab4ce2a7c3a7767753303c6b3a46373729e541e91cac17360d6efecb0547e1faa8c7e3ab028a94de069bbde3c223601c43dab3bbf8ceebd3ea3e8a9a4a013be2699448ecb210336ad9ad5c5c7e978b7f6aaafcbf567454f1d13668e36b64328ccf68009b875eea6a6bf2148d6baa620fd6d323011c5982ca3ea2da4862639b4ec6479b6e56e5f5dacb6d363a9e27b0b1ec6b9876b48b841f3ec6292167543d6f1b03623242320161bacb7d4b2cbf72ea48a9e273608dad8ceb746c6dae78752ad3cda5a9966708dd15a06d9cfd247db39fda8d9bdbe507ab1410bc07185ad3c05a2fa9513146e6a1a81c313fe1283e4eb2c883141420a822020c505b20590523520f4b1eb75fbbcc8bf09a86980fef287edfc0e431e6ef20883241b20eed1f9edf7841f5f5a6840404040404040404040404040404040404040404040404040404041f24afefc9feb5ff115965ce80807620f4b1befb1f5507e1350d5c07f79c1ca7e12863ce505410a0205d01050e23ffa419691dc5ea081a577f6020695fc3ec082691fc282695ffd81d082199e7ffa1d083b23c77148c65654c800d82fd2a8e696aa799e6491f99eedae3b4a83382b2a2076785e58fd999ba8a0df262f884cc31493bdec3b5ae370839f4aefec0e84464ca9963707b1d95e3587002e3d88aecff1162df397fb3a152b2ff1162a7fccbfd9d0a529fe21c57e72ff00674252b1931dc4a5618e49dce63b539a6dafd8946306315f4ecc90cce633c56dadee41b3b3f8a7ce5e944ecee29f3993d6945ecfe29f397fad295cd2d6cf33f492bb3bced738027dc83013c80dc5811b0803a1447743d50e2b0f6b50ee4759def0ad5ab275478ac9b6a1c3cd0d1ee094ae033bef73624ed361d0a231d3bb8b9a3a151b60c4eb29bb84a63f33522bb875578b7946df65f46dbab4ae4aac66beac5a794bdbe29b65f55aca15cba47717a874223aa0c56ba99b92199d1b7c56ea08adbfe20c57675cbd295aea318aea9668ea253232f7b3803afd483934ee1bc39a3a1076ff0088715d9d72f54a7f88f16f9cbfd9d085734b5f5334ba791d9a6d473d85f56cde5074ff0088f16f9cbfd9d0a94ff1162c7fccbfd9d085075458bfce5fece842a3faa0c55ec2c7d438b5c2ce1ab61f4215e7e90f00f505062e75f8151820b7e240ba0974110106482a08ed883d1c735573beae1fc26a1a603af118b924fc37218f346c404041b20eed1f9edf7841f615a6840404040404040404040404040404040404040404040404040404041f23afefc9feb5ff00115965a2c80807620f4b1b3fb6ff002a1fc26a1a605fbca13c05df0b90c79e0ea502e822a0a0a8080808082a020ce23083f2ac2f1c0d765fc8a0eb654e14ddb44f77ff00b07f4aa3d5828b08961d34914308f14d5b8bf9a1a515a4d3f5337d72cc2fe212e1fd51841d3160fd4d49dad7387139cd1ef6a7d1d70f5318148ecacab2f76db36467e415fa4747f82b0e78f93964e5bb4ffb5211aa4ea330e8fba553dbca583f24846127511486da3ab70bf8c1a7a12114750b11ff00344f23074a908a7a858fe72ee60e9484733fa8b941dc38b87196b7a52118b7a8baa7f8419c6e766f6068f7a448d83a869f7ea196e269e948b1b9bd428f0aa8fa19ff00b24232ff0002c56d552ebf983a521180ea185f7555fd1afe248447750edbeaabf5b3ff0064845ff030237355fd1ffb24221ea218c1792af28e1c807bdc908e177539401f946270db7ef6bfc693da7d7643d4750cdae3add201b72653f9949ed637ff0081e92ddf0ffe9561197f82b0e0cdd4f266f1aedb7aac908f1a5c0285b26466250df81dabda090a4f69f5ddfe1dc1636874b5e08e273074a4f6bf57b09d4d9d95bff719fa53c11aa4c17a9f69b7642df69a7f249ecfac23c33a9a69f94ae73b8bb5ff006a78e53c378c1fa987ecac3f78dfcda9e17c1d85ea63e7a7ef1bfa53c1183b0bea599b6b1de8783ee6a783c341a4ea541efa98f203ff008d3c2786d8e97a93b81a691d7d5bacc07a77213c2f875be8fa958c6a22437b59b2927e20af83c344d0f5354e733e17907fd407d9a4ba9e072d59ea6276fc89969dfbc5ad7387a4127f24f09e1f9f75ae6c6e378a8312831544411010104404192087620f4b1eeff7f9917e13504c07f7847c927e1b90c79c36202020d907768fcf6fbc20fb0ad3420202020202020202020202020202020202020202020202020202020f9257f7e4ff005aff0088acb2e7ba0664189283d1c60deb09ff004e1fc26a1a60a7fea117daf81c863806c4150140404040082a020a808088c51441511420ba9050e2361b20137d675f2a05efb5050f70d8e2390a0ba47f8c7d6506426946c7b87da3d2832ebaa8f2afe7bba500d4ceed6e91e4f1b8f4a075d4fe55fce3d28269a4df7bb9c5418979bdcb893ca8312e277d003dc36123d2805c5db4df950440d88173c280a88832d4808220209641104404040455d4882088a8822096542c825902c81641501043b0a0f4b1efde0ff362fc26a0980fef18f924fc37218f386c404041b20eed1f9edf7a0fb0ad3420202020202020202020202020202020202020202020202020202020f9157f7e4ff5aff88acb2e7415009d483d0c6f7359fcb87f09a86ae0367625083bf9be17218f3c20a80a0205d045450a0a817415065a470ffe907ec3a99a0c2eba89ba66324a919b38b9cd6cc6d700ad62bb2b30ec0e95d91e2163ed7cb248e07e241c15780c350d79a76685d6cd03d8e2e649aaf6d64ede10a423f2b0cced23339dc6619b92fad447d0db8360b2b1b2322639aeed4b1c6c792c56a34f0faabc219471c75348dc918392568d7b7b53bea6a6bf3f450d4d6ceca784eedfb2fb07092a23f54cc2a968d8d395b35b54b34fdafa2e4340bf2dd558e8384d15783a36c593609a98eb6bb8c0b82ac1e6f5354d452c9514f5992491b2648b36a2eb5ef61e8530c76754787e1f4587bdf0b191cfab47af59d62f60789370d76d361b83c8c8be4985f230386dd7c6a8fcf754e28a09226d0166c769032ced7aad7dbc6a6a6bc2d3c9c3ec1d0b28fd7f53186d1d661fa6a88c4926770b9e2e45ac69ea3705c25edccc898e69d84127f3562a1c170a3139f1c4c22c6c41beb1e94847e5ba9fc1e6c5099247e4a761b38802ee3c0352998ce3f4cfa4c1286cc9840c3bda520b8f395569afea7292ae1d2515a2936b1ccd6c772ffc2423f0f23e68dee63f53da72b8586a23d0b0cb1d33f87d83a107ebf0bea7e38e9995154049239ba421f66c6c1b75f095a8d6672df4d4387573dec6b69ded1e475380f420f2a0a1a2a3c6df4756e6ba9832ed32d86b758817d49da3f47360d83c0c324b0c6c60dae76a0158af13a9da5c32acceda811bdfa57085b7d79070708530c76e378761549432b991c51cc5a7457da48e0baba6bcdea7fa9debd8c55d5f723da460005dc64db62908f6cd3e010bf40f6d3364d994e5bfb551e763bd4c4620754508caf60cce8b68701b72df7fde9b9c11f9dc1b0e9f15a8d0b086b00cd23f28d43d5b4a988fd8f61f05c3983ae1b179f3dae7f2562a498061188c39a9831b7ed6582db7936241f9cc36829e9f16928f15d1e46b4e52edcb5c756520eada14ed3b7e924c07018493242c6b582ee2e71b0bea17bb956a3e7f53904f268eda3ceec9be32dcd96596a41101504040404110101043b107a58f77fbbcc8bf09a869807ef28b924fc37218f346c40416c83641dda3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e455fdf93fd6bfe22b2cb9d0100ec41e9e3ddfbfca83f09a86a753ff00bd29f95df0b90c79a82a0a825d04ba0b7414140ba825d516e8220fd57507df73fd58f893171ee62f8560d5553a5ad94326ca05b4a19b9ded4aabaa4675b6165b87b438b63229db9af7e43aeff9a1d3e6d494efaa9e3a7676d210d1d3e85965fb875a4a2961a67e8346c1044e9058341d57b8dfca3d175a69e9b2115f868a79dc1ce7c41af70e1b76d63c7ad07e5fa8ea7cb8854c736a9226161e759dee531313ab69a4157153ec85b18735bbd7248bfb13535c184f5435585c4e8a16b1cd73b39ce0def603788e04a56cea76474b8dc523ad77b9ee3ca5ae2863f68ea182bcb64a819b44f73a369d9af842ad3cdeaa7aea1a5cd4c757f1ddfc4ca6db381bc364d4d7e19619441ea61dd50d6e1f0e820c992e5dba6dcdcfa55ab5fa5ea7a76b30fa36b8db339e40e3cc47e6ae7e358fcf41d5056d0b1f4d09668f3bf6b6e7744f1a959afd47534638b0ba668db26677a7310b58b8fc355cb24f5124b2eb91ce39bd6b2cbf5bd43cd23a9e689c7e4d8e1938b30d616b1ac787d54b5adc5e6cbbf949e52d0a6a6bc75947eff0bc668312a214f50f6893268e58de6d7d5636e55bad558ba9ca4883a4a19a481ce162e89f9bdf749c1387e431aa4aaa5ae2daa7995eeb39b29f09bb07b967535fb9ac6b6b44f493b7e4ac37f2dc6e4def6e15af4d3cea1c1e928eab4d4d1fca358ec84cc1c2e4116b224793d563a434f4864b66f95d9afc5534d7e8aa2a3adb0c7369f53e2a7bb39bb42aaf9c937f4ed5961f46ea566926c26132eb2333413bed69202d6358f3fa99d053b6b5c3675c160e41dafbd30c7e77aa79a497159b49b1966307036c3dea26bbfa879a46d74910ee6e8f3386f5c1163edb262e37756ac6764290f84459dc81c2def29a6bb7aa2aa8dd4b5b1075df66eae26bdb7f895d5d7e2a2a79a6be8a373edb7234bbdc14658105a4822c46d05412c8164115040415410aa2202011a907a58ed8d7123c9c3f84d435301d58945f6fe07218f340d483240419c3dda3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e455fdf93fd6bfe22b2cb45902c829d883d1c735d67f2a0fc26a1a980dbb274fca7e12863ccba0a82a0880808082a059010107eefa8bc35b1d375f6625d382d2cde195c55c5c74637d4bc789d4f5cba5730e50dcad683b2fc3ca9b846b8ad85518666d1d353bbb7936c841bbac356d3dadb8115a3a94c221747d94b9324ba4019ab2b6ee2357a13394ce5b7aa7eb9c3e8d92d2cd9181d95d1e569cc5daef7703b2c8baeaea566aaa9a2353532e933b8e51940cb96e37adb53131a714861c1ab3b320bad2b8453c63610e1adc38f5029ecf6ecaec36831c858f273003e4e68ceb174571c3d48e174b1bccee2fd5adf21ca1bc62d6f5a448f37a96c2a092b65a864a5eda57da320583c381175330c77e3d85e8b0d7bd923a3d09d259a4d9c75017e4486bab009fb25442a276de4378a4df0f0355eca98fccf54781438568df13c96ca5d66bbc1b5b7fd2a6e26e3c35946c818259591936cee0dbf29b20fa1d2d0b68594f4ad6be4115ce92dc249d6b6dbf178f61ccc3aaf42c717e66e92ee16ed89d4b3acebbb02ad8e589b412c9a2735c5d138ea043b6b2fbc6fac70ab9c19c3d6aaea6e92ba63238be9e576b7068dcb8f0ecb6b48b1e9c6ca1c068ad7cb18d649ed9eefccabfc57cfabeadd5955254bf5190dedc03787a9658731d8a0fa30a4a2c5f0c6c4d23239adbba3b5c16d96da7352753dd8a123e91ef7c8f6db7560d02faf835fb9270479f570c18de2eca46cbb9a788de56d8ddd986ae0d5753d0fd262140caea69299ce2d12dae471107f25a57e6fa95c1e3153355071cd4f2490b5bbc45ad72b39898ecea9f0864b87e9dcf21d4ac71006c75edb7d4ac35c782d6b6b9b10ce05440cc861361a503611c371b921431bbfc2187cf3666be4886d30fe4091d2ac23d2c4b11a5c0e88471d839adcb04236dfa38507e3f04c45b13a5a799f91b5043b4be2bc1da788dec78144c7e8aaf01a5af0c331731ed01ada866e83dbbd736b6ae1562c77e1b8550e0903de1db75c93496dedee2083f385d1f54b8ddb316411b3e4c8da4348e1e1254fe8fd5d6e13155c52c2f24366b662dd4751046f712aac708c1a0c258f8e02e76739897db93780547cf718fde5557dba67fc45659d71a8312822a080808220a82a087620efc63beff00970fe1350305d788443cef85c863806c4150441b20eed1f9edf7841f5f5a6840404040404040404040404040404040404040404040404040404041f24afefc9feb5ff115965ce8174109d483d0c6fbf3f9507e1350d301fde94de77fb4a18f35054150104ba02020a82dec822020df1d7554632b267b5a3600e207bd06e189d6ef5449cf774a83549515129bc9239c7e91bfbd064cadaa8c6564cf681bcd710101f5b5520b3e57b87039c4fbd056d6d53059933da380388407d6d5482cf95ee1c0e71282c55d5509bc52bd87e89b7b9059710ac9bbaccf78e073894123ada98efa395cdbedca6dee4193b11ac7b72be77b9a7682e24208cada98c5992b9a381a6c80faca992da491ceb6ccc6fef4461a69387dca0a27941b8758fa106f389d71db3c9ce2aab53eaa790de47971e176bf7a889a57f0fb07420e98f15af89b9639e46b7801d4a95aa5ada895d9a490bddc2ed7ef506bd3c9c3ee4134f270fb9067156d4c273452398785ba906c9315af95b95f51239bc05d70aab547553c47346f2d3c2dd5ee446dec9d7797939c5158b6bead97cb2b9b7373636b9418bebeadc0874af20ed04dd069d2bf87d83a111d431bc49a328a99001bd9915c8ea891eeccf399c7693aca009ddc5ea1d0837c18a55d30b412ba30779ba82093e255551dde5749c19f5a0d4caa9633998ecaee16ea2833388559fe2bfd6505ec855f967f38a0d466909b9373c28312e276a0c4a0c501504040b20aa02a21d883d2c785abdc3e845f84d435302fde3171673fd0e431e70d8808083641dda3f3dbef083ebeb4d080808080808080808080808080808080808080808080808080808083e458877e4ff5b27c45659735d0540b6a41e9e39df63ea60fc26a1a9807ef4a7e53f09431e620a10541431ce048d76da106f9647404471ee40009236b8900dd06a73468dafd84920f1dadafda830208363b505411010105b2832082a22a0880808082a0b6416c8165054041505404041506282205902c8080808083054104210628a20880808324041510451062822a2ea5010541101510ec41e8635dfaee1c917e1350d5c08db118b91ff0390c79c3620a8220d907768fcf6fbc20fafad3420202020202020202020202020202020202020202020202020202020f90e23dfb3fd6bfe22b2cb990508323b107a38ef7d8fa983f09a86a605fbca0e577c2e431e76f20a105d6750d683664731ad905c1bd87a2dd283a7389a3be8daf2c1adbac1038458ece2dee45060fbb7596fca0ed1806a8c74ff6506a9232d6b5c7c317f690835d905b040b2088080832088a80822020a106480a0a808082a0205d04ba0a808081641504404110104418aa08220c514b205902c828088a80825d1550104410a08a8c9ad73b60ba83a3aca5eb6355b91187066dd649e0e1b6faa399405443b10776344f5f3c9d472c7f86d434c13f7845c8ff0081c863846c0808083641dda3f3dbef083ebeb4d080808080808080808080808080808080808080808080808080808083e4388f7ed47d6bfe22b2cb990105de41e9639dfbfca87f09a86af53e3fea7072bbe17218f380416c83a03735cc7b8946d68d57e4e850646ae53135ba475eeebeb3b35590671b5f4dba6026a3885f47cbc7ee4189dd833424b5fb6460f88717b9049aa647b18dce4ee6ced7bf72831740e6b7b525e3b6b6c6f11e3f720d48083140404151192020a83141420c9010550101054041352020a8082206640cc826640ba06b4041504418aa220202022a2232404110628a20db1412ce6d131cf3f4413ee41b9d87c91f7674717139e0bb9accc551a88a66784e90fd11947acdcfb10651e6702e898d63076cf76bb7a5d7d7c82e83a445046c13551739847c9b0ea74be68f019f48eb3e0841315a974aca68880dc91e7c8dd4d6690dc340e2686f1f0a0f3d405443b1076e33df8ee1cb1dfeeda8182dfaf996363693f0dc86385bb020a825d06707768fcf6fbd07d8569a101010101010101010101010101010101010101010101010101010107c8abfbf27fad7fc4565973941105b6a41e9e3a3f6dfe541f84d434c035627072bbe17218f3820dd1686e03dae26fbceb7e4833aa2cd338c7983b39f7ef5941bcb4341918075d017733c5fa4078dc237b6f2068aa7b9a5ac07719439bc77172ee5ba002e6b6391baa4b9ca46f8d4837bd8d8c17b00130ee8d1fc2e31fdee5068aa7bf4ae6dec1a6cd1bd6fefd6831946a61d84b6e7d66dec41ad0625056b4b8d9a093c035a0f43b0d3369df34ae11c8c6e9340eedf25c0b9f1759d57d65523cf51192020a82590541501014150105404110104ba05d044040b205905ca82a02085062a8880808082d901044150441942f63256be46e918082e66ccc382e8af463aca176a8a2652c9e3bc19dbfd572de69546aacec8e4cd2486583c68dd9a2fe9d43d2020e08d8f91c191b4b9ced8d6eb250756821a6d537cb4fbd0467503f4dc3e16fac20dd2ca29c87546592a1bdce9c01a287ce03513f479dc0838c692b2a4691c5cf95c039c7fbde412a66d34cf9379c773c9bdec41a9010471d4507a18e7ef197ec7c0d435860e2f5d1ebb6a7fc0e41c23620b741106c83bb47e7b7de107d8569a101010101010101010101010101010101010101010101010101010107c8ebc7ed93fd6bfe22b2cb4590100ec41e963bdfbfca83f09a86b1c10e5c42277067f81c863cf1b1051a8a0dad9046330d729dff17fe7dca0d61e58439a6ce1ac15475699d2b3700178d6e8cb41fb4cfcc20cbe55a4db77536d647f0c700e3f7283074134019206b81b124db8c8407553b56502c379cd0ecbc84ef7b9068738bc9738dc9da50771c1aaa3234b958cfe2bef9b45a83b7606b06c766fec548df0b7567a511d3d3b4e5ebba8b17b8fd1041e6b1bab7ca0c6ab16a968cb0d7cb27237442deb43eb54a7ade872bf5d4559123c9da226f6b7f39daf90041e7a88c9010540404150101415010105412e82205904404110101065740ba05d01062a88808082a020208808050628a20ca29a581d9e17163b85a6ca8eceba9e4a6796598f2e6b24d13430c81e0daf61c23d28374f13b0c8af4dbb776b255b7c03bec68dacf38eb3bda90793741be95d934929d591872f9cedc8f7a0e7414202087620f431b197109479bf0350d5c0c5eb9be64df84e431e70d8808083641dda3f3dbef083ec2b4d080808080808080808080808080808080808080808080808080808083e495fdf93fd6bfe22b2cb9d0100ec41e86346f5a78a3847fda6a1ac309efc67249f86e41c43620a82200049b0d64ec083a03fadbb43f2fbeef138871f1a03c36505ec1670d6f60f887f7a9418be4ccd634782db1f592835a0a0e520f06b41eed6483feacd17b192392ff6f83d2af2bcbc9651554b6c913cf06e4dbd7b1446f6d3d3516eea9cd9a51dad3466edbffa8f1aadf45b7278951c73cf2544ae965377bb69506082dd1150441420a825d05ba0aa0a8220206b416c81640b205904418a020882854550151101044135a020a8a888b740ba05d158a02020069776a2fbfe80a8f470aad828e399f26ea50637c11db517b6f624f00bfa50711aba8d319f39d2bb6bbf2b6cb716c409648656e6cba3977c37b477a3c1f77220877105b7deef6347fec83420a82a08507a18dfef19b95bf0b50d4c1efd782de4e6fc2720f3c6c4150106c83bb47e7b7de83ec2b4d080808080808080808080808080808080808080808080808080808083e495fdf93fd6bfe22b2cb9d0100ec41db8bf7e3fcd8ff0da826127f6b6f9b2fe1b907103a9064831415af2dd6d363c28220c9ae2358d4541d54f47a563a791e21a769b179d64bbc5637c23ec1be550eb9a78fb9401df4a625c7d4d2d68f6a0366a594da58f47f4a2bdbd2d24fb1065535ba4d301af4efd23cf25ec0716b41198955359933e7678b200f1fd40a0cc4b4d55b8958d824f0668c6565fe9b3f36ece041cb34124123a29059edd442830b20b6441010642c8324041105ba09740ba81740ba05d02e817404040412c82208a85d05ba020209740412e825d15101054040ba09741931b9dc1b70dbf84ed8151d334f1c71f5bd2f6a7bacc459d2717d16716fed283910440415044040410ec41dd8d5bb2136ff6bf0b50d678277e7f2e6fc27218f386c40ba09741b29bbbc7e737de83ec4b4d080808080808080808080808080808080808080808080808080808083e4b5e3f6b9feb5ff115965cc808213a90766307f6e93919f03504c289eba1e64bf86e41c62e832d68258205902c836c10ba79590b76bdc1a3d2836d6ced9a5b47aa08f710b7e88dfe576d3c6839ca822a2a83201075d0c71cee34ce1bb93b93f7c49bc391db1066fb54503653dd69dc22771c6eb9673482392c83851040411155119028324189411010105405010101010101010101512c82590440455665cc33921bbe46b3ef083a4d5c0c1960a76f9f37ca3bf268f520e66c8f63f48d395fb41083a4e2750e16932483e9c6d3edb5fdaa8e60e6e7cce6ddb7d6d1abd5b541d1a2a2907c9cae89de24cdb8e7b3f4aa39c464bf20b137b0b6c2a0e8ec5d70ff002f25b84349f72a39df1b98ec8f195c3683bca0e911d1442ef91d33b79910cadf4bde3dcd547348e0f712d6860de68def5a0c101010550104b2a1640b20846a41d98ab7f6e97947c2106583eaabfe5cdf84e41e7ef20880836d37778fce6fbd07d8969a101010101010101010101010101010101010101010101010101010107c8ebcfed93fd6bfe22b2cb4208823b620edc5edd7d27d8f81a81841cb560fd097f09c8393790105ca82d9411076615dfb1f0eeadcb91d654c718d8a08a8b6501050837534860a88e51b58f6b87a0841e9cd108a4c5631dab767df36def5793978f7504404410545111420a8082202020a80a0b64150104b205902c8164040544b20590563599867b86785976db89065532b6592ec608d835318378719df3c2515a6c8896452c8194a0590105048d8504418aa2a0202020b7504baa17415405443b107662bdfb2f28f8421acf07b75debd9a39bf09c863ceb6a418a0b641b69fbb47e7b7de107d8569a101010101010101010101010101010101010101010101010101010107c92bfbf27fad7fc4565968411060e06c507762fdfd27d9f81a832c1581f5cc61d8e6c80fa63720e21b104df419dd40ba0c6ea8e8a1a810554329d8d7b4bb92fafd8815f4e696aa580ff0dc5a39378fa90738416ea05d050506fa38b4d53147e33da3d6420ee9e5cf056d4ef54ce18de404c87fdaa9cbcbb28088a83140415144464808082202020c941501010101044040541010440404110101042831451010428165455044054101044041420a821d8a0edc5cdebe63c7f905430aef9fe5cbf86e41c5bc82108220db4fdda3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e495fdf93fd6bfe22b2cb9d01043b107662ddfb2fd9f84206164b2a8386f365fc3720e3de4041420aa096542c83d2abfdb28e3ac6f7584360a91c9dc9fe91b9e5083cd40416ca0a832666cc032f9cea6db6dcf020ecc45c23d1d137b5a7043cf0caeee87d1dafa153d38944114440a0882a2888a1054041506250106480a0202020202a08080822020202088080825d02e8a6a44104454b20880a8202088080832404114194b2ba57991db5dacaa3ab0bef9bf0472fe1b9071a0208420ce0eed1f9edf7a0fb0ad3420202020202020202020202020202020202020202020202020202020f9257f7e4ff5aff88acb2e740410ec41e8e396ebf7dbc58bf0da86b4e1baea9addf707b472b98e03da50721b8d475140415054050679729ddeae2df41d3495a2964b866689c324ac71edd8768e2e2e02a8b5987e8dbd714e4cb46eed64df6fd190782e1ea3bc838c6bd43593b028364b4f3416d2c6e8efb33b4b7de106b6ddce0d68b93a801b507a6d68c28677ebae3da47e47e93ade1f00deda75a0e468a69369744784eedbf93bde832eb0988bc56947fa66e79bb7d8834e8a4f14eadba9042d73768b203637bf531a5c7885d05eb69ef6d1befc194f420bd6d3f927f34f42082098ff000ddcd3d082e826bf7375f8329e841975bcde4dfcd3d088bd6d3f937f34f42075b4fe4dfcd3d08ac7ada7f26fe69e8417ada6f26fe69e844431bdbb5ae1e8281a3936e536e4281a37f8a7d450323fc53ea417452788ef51418e47701f520657701f520ba293c577a8a068dfe29f5140d1c9e29f5140d0cbe23b9a7a104d149e23bd4504caff0015dea28a68e5f11dea28268e4f15dea2831b1e044628a20ba9035222d8a2a5c2097bec40b140caee0283a6f0b59135d1662e6ddceb96baf988e4dee054652501cd68c90e3b239772e3e69ed5c838dcd731c5ae04386d0751411054150101047f6cee5283af0ab75c9bf939bf0dc8391010106507768fcf6fbc20fb0ad3420202020202020202020202020202020202020202020202020202020f9257f7e4ff005aff0088acb2e740410ec41d98992eac909fa3f0841ca83a8e2533f5c82391de33d8d2ef49df41057ca0583631fcb6f420c6f3d5bb2b581ceda7231a3d760106a7b43356604efdb58f5a0c412362836d3d34b50ecb136f6da76347293a82a37f632777702da8b6dd0bb31e6ea77b106a82a6a28e42e89ee8dfb1c3f2237fd283a7b3554db98c4513ced96289ac7f380d5e8b215a598a56b364ce703b5af39da7943ae106deccd53411168e1276ba18dac77380bfa90ae25010012358d483a5b5d2dad2da56f0482feddbed4197ec528f0a07f17ca33f277bd063345352d9cd7ee1d7caf612358da0ec20a23015b55e5a4e7bba514ebdaaf2d273ddd281d7d57e5e4e7bba50515b55e5e4e7bba5067d91adf9c4bcf774a0a310acf2f2fde3ba505ec8d6fce25fbc774a09d91adf9c4bcf774a0cbb295ff3997ef1dd281d94aff9c4bcf774a07652bed6eb896dc19cf4a0bd96c43e732f3ddd281d97c47e732f3cf4a0bd99c4be752f3cf4a50ecc623f39979e504ecb621b7ae65e79417b33897cea5e794a1d99c4be752f3ca0c4e3188fce65e79e940ecce25f3a9b9eee9413b33897cea5e79e942af66712f9d4bcf2a94ecd627f3a9b9e7a50a9d99c4be752f3ca150e31889db532f38a153b2f887ce24f5a0cbb2d5f6eeeff005a853b2d5fe5dffdfa100e2d5eedb3bcf2ff00f4a8a31ac49a2c2a640380142b6c3363357ae3748e04db39b06f38ea41b5fd7501b54d708dde236f21f6003da8bf5abae9aed5d7f37ddffee89f50999fdcebf31fa65ece91ed43eb44f4d5766baa23748d3b96cad39c6b3b0386608322ca8a3b8369600ec8e69dd465c002e16e2bed6ece141b43a2aa8f2b5a5f947723dd5a3fd27786078aed7ef41c3341a301ed39e2776920f71e03c4834a020a821418a0eac3ded64c5cef272db94b1c020e6ba05d02c836403e5a3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e495fdf93fd6bfe22b2cb9d010107a1574d35549d73034c91c81a6edd7621a0169e0208f4a0e6eb2aaf232734f420bd6355e45fcd283ae3c31b1343ea0832b807b69b3061ca7617b9db3906be441aaae4ad6c7a37c66183c5636ccf49f0bd24a0e1419c6e6b5c0b9b986fb767b941d37a3905af24373b3548cf56e4fbd519763a6367533d936fb744eddf30d9e8327627551fc956344c078150dbb8723b53c7ad0607b1b51da97d2bf7f37cac7eb1678f6a07626a5c33538152de180e73e96f6c3d48471e5702416905bdb023672a05d40ba05d0768a2110cf58ed10de886b95df67c1e575bd2a8e59266e7bc432376004dcfaf52837d2bb4914f09d85ba56f9ccffd6ea8e4ba836451994d839adf3ce541bfaccefcb08fb7ff00082f5a35bb6a211e977e941b1942c7ecaaa71e73dc3ded40146cbe5eb98356fe675be1417ac9a7fccc1ce77e840eb06fce60e73bf4a0adc3336ca9a7fbdb7bc22467d8871ff314df7c11627629df38a6fbe1d0845ec43fe714df7cd413b12ff9c537df3505ec43be734df7c108c1d86106dd734df7bff08456e165dfe669bef8742107614e6ff98a6fbe089181c2df6be9e9cf24cd4587631d7b69e9fef9a845ec4cbe569fefd9d2a90184cc7f8907dfb3a542276267f2907dfc7d2a910e173017d243f7d1f4a118763a5b5f3c3f7ccfd4a0bd8c9cf8517df47fa908d72d14b137338c647d1918ef73951a9a0b86a0a039a5a6ce16282c71be5786305dc77907a2ca58a9d824bb5d7fe349dcff0096cdb25b8762a35cb5b067125e69e46f6af91da368e46b6e4738208314639e5d534b0c80f88dd1bbd63f3ba0ecc4218321820862864dcbe4cfb435cd0771238d8869db6f422bc9929668a4d1e525d7ca0b2e413ab6144665d5f4326726489fb2e6faf8b80a0cccf15686b25229e46ea611dc75ebd6df02e77c6ae20839cc33c151a33764cd376f0df78b4fbb8507a0d9055b5f2060eb802f534fb04cd1b6468f0646effac6f841e7d4d3e88b4b4e68a419a37f08e91b0a0d564041102c82d8ef2088164150670f768fcf6fbc20fb02d3420202020202020202020202020202020202020202020202020202020f91579fdb27fad7fc4565968ba020a82b5ee676a48e43641969a53e1bbd65042f77093e941df14cdaa84b5f1b4cf4f15e379bee98d3adae6ecd40ea3b7520ca95e5fba8a39a3b6a269de48e69ba0cdd3d3ce431c2191e36e91a69a53f69a727ad0615186b23d6f12d2df6199ba48cf24b1fe941ccec3aac3748c6e9a21fc484e907a72eb1e9b20e441d2cc4aa58321769231fc394091bfd57b7a106e1361938f9581f03fc6a77666f324fd48326c386c074dd70f9bc48e26189ff0069e6e1bf66e833acea86b6a637426cd81e034b2d98d86cbbdd7713e942bcbba0eb830e9248f4f2b8414fbd2c9bfe6376bbd1eb4199ad8a9f7342c2d77ce64eea7cd1b19e8d7c68385ce249713727592507b1515270f9a3a4858c3186c665ccc6bb4c646871b922f6d7616d8839a2688e4ab7b416c71b5ec01db467391a0f1ebf620e140b2808080833445cc832ba09640404040418a020202022882221640b202088a59010106c8a374cf6c718bbdc6c020f4a2741045286012471001e77a691c6c070e8db626dbf6d6a8f3a79e49dfa490dddb38000360006a014182020e98b1096363632d8e5630ddad9581f6bedb6f80a8f60e2b4f567bb56c571791b13b3319c3c796fc1bc8af3a7c4747318b4f255d19696b9afd5b782fbed3ac3ac88f25076d34b1cec149526cdfe0cc7f86780fd03bfc1b420d8f33dcbf5b2ba93b73e116b7c2e56eff08d7c283abe46aa2d40322a83b91bd0d501b0703241fdee515e49dc9208b11a88288c6e81740419b3c2f37a1060808083387bb47e7b7de107d8169a101010101010101010101010101010101010101010101010101010107c8b10b75ed47d6c9f115965a5010101054041d78603a771b6e4452e7e4d1bb6a0e587b6d65c00d6e2cdb641e9c554ca8cb13a7d26c6319570e7dbfea3097045631cd46c716e79a866692d3a33a58ae36eab877bd075451d4b9fa5874156e1fc4a67e827f50c87fa4a0ca5ac8e4768eb5a33f8b5b1e57fdfc41aee7350612e094ef66959a485be377c43f7916b1f69a8385f8455b59a48da27887f1202241e9b6b1e9088e141d14d4335482f680d89bdbcaf39583ed1f76d41bb4f49447e41a2a251fc7946e07991eff2bbd4839669e5a8934933cbde77dc835d902c83be3c425b33336373e219639de2ee6377b7eceb6f5c1b20e83d613533208aa0c4fbe96533b0da4908f19b7b5b5db56fa0e47e1f3805cc02560f0a239c7b358f4a8399ac7bbb5693c82e83314950764321fb0ee8419f5855f909398ee8417b1d5bf3797eeddd081d8facf212f31dd081d8fadf9bcbcc77420bd6357e424e63ba105eb3aaf232731dd081d6555e464e63ba104eb3aaf232731dd0831eb4aaf232731dd081d6755e464e63ba105eb2abf212731dd081d6357e464e63ba103ac6abc8c9cc7742075954f919398ee8413ad67f24fe69e840eb69fc9bf9a7a106261947f0ddcd3d088c7452f88ee69e8454d149e23bd45034720f04fa8a0b91de29f52064778a7d4831411074b3f6783383f2b302d1f463d8e3f6b6725f8551b29237cd4b3c518cd25e390306d2d6e606c37ed990733a1958333e37347096903dca0c6e8220883d1c10b4cf2427b69e2922611e311b3d36b2a63ca41be6a37c70c73dc3a393611bc46f1fef79068b20f4a399cf85b56cd7514995b20f1e13b96df93b43c4420ca38dad9e5a26f70a968305f87b684ffb7d250689e37543e19076d51669fac072bbf277a50672e14459d04b1cad37bddcd8c82091dabdd741a7ac1e3b77c4de59587e1250655946da76b1ec7e9237e601d972f6b6d6359d46fa90725d044192020d907768fcf6fbc20fafad3420202020202020202020202020202020202020202020202020202020f945554ba1aea839237de47ea9181de1159646e2797fcb531fe57fca0bd936efd253f31c3dce41976521d5fb153eae27feb40ecac5f32a6e6bff005a075f453b835b430e63a8363d2827d01e83a5cea1a716a9a78cca3643139f707e9bf3903905cf220e49b1096501a1a2185a3731442cdbef13c278ca051c6e34d50e6f6cfd1d3b396475fdcc41bb0da17d3e2659503754a1f2bc3775ae36dc6cfa56456c868282a5df27308e41ace67078bf9b208ddeaba0df3e1523753e9e19cef181c6193d0c7000f34a0824731ba0156596ff002b88c7b91c41c4387b90514ef87e5c4124046da8c3e4d247e96dcdb9c1023ad7bdf9daf86adc37cfecd53ce196e7d2506d82ae8b1095ac7b749338ee63aa6dcb8f009e3ca75fd30507978b3e77bd8e91d9a170cd00032b5a3616e41a9a5a751447080a05906c860927788e2697bcec0107565a5a51bab544fe28ee4ce53e19e4d5c6551c8f797b8b8ed3e85067053cb50ecb13735b593bc07093b020db2b62a72d314ba49476c5970c1c41da89f6041d0f9e4a8a63501e44f11cb358db331ddab8f183b93e8547175c4de3bbd65410c8f3b5c7d6802a6760b364781c01c7a506225906c7b87a4a0ba697c777aca0a2a261fc47738f4a0dadafab6f6b3c83edbba5065d92aeb5bae25b7d63ba504ec856fce25fbc774a0764abc7f9997ef1dd282764ab7e712fde3ba506d82b3129de228a699ef76a6b43dd7f7a0ec7c90c07254d65449378629cddad3c19dcedd7a352a29d3c91ba5c3eb669320cd242f7399286f8d60e21c3913a3a79c710ac3af4f2f3ddd2a07642b7cbcbcf774a00afac06fa7941f3ddd2833389d77ce65fbc774a09d95aff009ccdf78ee942b138ad79ff00332f3ddd2a88713ae76da894fdb774a0bd92adf9c49cf774a81d94aeb5bae25b79e7a506a9aaa69fbac8e7dbc624a0c048e1b10473cb8dca00241b8362361083be86aaae49b47a4ccc20e944e4ba3d18d6e2e17def5df62a396a9d0ba779a7696c37dc03b6ca0d28083a30fa914b551ceebd9875db6eb045c725d50c5626c7592069bb1d691a46ad5200efcd05c3eab27ecb35dd493102460da0ef3d9f487b7620d1594aea5a8929ddb63716df86db0fa506ec2ded655358fee72de193cd9373ec3afd082cc5f1c50bff008b4ef7447ec10f6fbca0f4a2607563daded6399b56cf31ed2e3fed456ba6a289d50f6d8102a618466d7b3339febca8308e9d9d6ed7d802618df7f3aa72fb020cf186feca3fd3a899bc9ba7eafe9083c44410106483641dda3f3dbef083ebeb4d080808080808080808080808080808080808080808080808080808083e458877ecff005aff0088acb2e740404041eb4533692822918cd5317c73cad3692ed3a9a1dbc0b4fa507264a37f692ba3e291b71eb6f420f41b51888608c08aae0000d1d9b20b0fa3a9e395148b10a58d8f819a5c3dcf37765f95683b3566b48cd5c04a0eb23494f2cb4ceeb8ae92310b9f0386e9a0b4e72c76578759b63606fb507906bea18ed1d6304e06a31d43775ced4f1eb4476536234cc1921927a407f866d530dfcd758fbd0754ee9aa99a3960655b01bfeccf74720e3d0bf6732c8af319053365fd96a5f4b28f02a018cf3d97f68088e89bb2196f554f1d5c7e5800f3f7b09bf3915e74b247983e00e8f2d8869766b11c06c111ebe311b1f04b2816f968e66f254c599c39cd41e1a83b9b87889a25ae7685875b63db33c71377871bade954ed84f5c5ccd0c0c1041bed6f6cef3ddb5deee241cf14524cf11c4d2f79d8d68b9507675ad352f7e3f3c83fcbc27e39360fb373c8a8867a9af7369a168647b5b047a99ab7dd7db6f19ca09261ce6b1cf8e58a6c9ae46c4eb968e1d605c725d5130f3774ccde7c32dfec8ce3dad41c8a208051510101050882020141d147412d5e670b321677499fa98ce53c3c5b4aaae896ba2823753d05dac76a96a1daa4978be8b78b7f7d0e9c0a236d354494b332788d9f19cc3fbe3456dc4e2645572066a8dd69231f46401e07b50725d11732099915104404040411064cdbc8095461740d683b70bbe99f9bb968a4d31e0665e9b5b8d071a020aa020f6e82a995e23a6a9a71268da1bd70356460df7ecd407d20a8f37af3467f678d91bb7a4199c7946726def411f23a6a419ce6313c35a4edc8e0755f8016fa1072dedac6d083d4afb3baf0ff00a914c3f980dfe241d984ddf56cd57cf481a79c23ba2b8e1c4a26cc49f2d34e4f1961118f59408eb21d0865fb58618fd226d23bd888f520a68712a19dee7d9aeaa90b48debee813ab66b4578edc3585b98d4c41ba85ed21dbb3c044633513638890ecfa9dbab16d9cc23336c788f020e041420db07768fcf6fbd07d7d69a101010101010101010101010101010101010101010101010101010107c8b11efda8fad7fc4565973a0202020eaa2c426a376e1df244832c7b5af03847220caba231d64906ad4fb34bb83c1d7c88336614f2d2e71cb6d8e033b39d1975bd4837b3b25133636ae0e0dcd437f3737d88ae633d0caedd40603c30baf6fb327ea088ed65454380645551d5337a1aa1affeeeae6bd0599941fe72966a27ef4909ccce6bff002722b6c30ccfb759564556d1b29ea372ee6cbf93904addd01d92a29e02350958e7380e41266f890edc6ca4171250d534bb79a4e864f69cbea72274e370924932daf238db8cb89507e8f14a3775b066611c4e31874cfd4ccb4f1e416df25ce2eb5b782aaf2056c14a2d44cbc9f399402efb0cd61bed288e22e7cafb925ef71dbb492a0ef186b29c07e22f316f881bae677a3633ed7a953b6b97127e8cc14cd14f01dad676eef3dfb4fb07120e1507a345b9a1ad7b3b7b44c3e63ddbaf705468a0320a9668ad9cdda01d9ba046b50674a3474d3d41df1a08fce7f6dea60f6841c8882014562808082841922083d08f0e8e9d827c449634eb8e9dbdd64fd0de33e857b5edcf595f254d99611c0cee70b3531bd278ceb41cb7502e836d3534b573360885defd43a4f1041bb159a396ade623789b96363b85b1b432fe9b2a38d4040404040411035aa1641b69a3d24a19e35c7b0a0d48083b1c04142d1e1d51cdc91c6481eb77b9072282a0ce085f3cad8a3177bcd805474bbac29f86a9e37fb48bf5bbd88344f5d34edd19b3211b228c6567a86df4dca0ba16c749a57f6f29cb10fa2dedddebdc8f4f020c61ee13f230fa738e941b69608dcc6e91b7333f2375dac00d6e1e9283ab106d9d563c56d334f2e56f4229864f235b50e0eb3a3a5b465bb47ca348f6944590e2b13f24b4e1eee3a763fda1bad06a655d69d4ca78c11c14ccfd283bf0c9ab24a878a93611c1239accad68dd59b7b340d68ab494ec9a91ac3aef4ec77a734ff9d905a80d7e900d86a3fa6aa1d5ed083f368820db4e7e5a3f3dbef083ec0b4d080808080808080808080808080808080808080808080808080808083e455fdf93fd6bfe22b2cb9d010101043b1077e33dfafbedcb15f9746d41aa95e212262646106cc7c46c6fbe83d164fa6ddb646d43dad2f2d958629acdb9369633af50df722b31574552d01f258f8b571e907a268ed27ad057e11148dcec8de06fc94ee15517a85a46fa6e834c14b5d1dc504e261bf1c6edd7a6192c7d8511a5f3459b475d4b91fbee8be45fcd20b3d810edd94b2c91feedc44b7fd0a8f93f7e68cfb13a3ad6555512c7fbcf0e8dc0ff001580c79bedc7b929d9de2d1e278350bbae60a795d516391b2b8398c3c47fb283c8aaac9eb24d24ee2e76f0de1c4d1bc106d143a319eadfa1076336ca7ec6f7dab20d9d9314edc9431e82fb662734c7ed783f66dca874e02492493727695062a820eaa3ab752bcbb287b1e32491bb639a77bfbd85075d33a27978a38cc6483a49e676610c676dacd1c97da76041cf5750c90b63845a9e2168c1da785eee377b350de50732088220880808320836d3d34b52fc9136e46b27600385c760083ba3a9a6c38de002a6a47f19e3e4dbe637c2f38fa02a3135d4d5521756c5673b6cd0939efc25ae241f620d35742606b658de26a779b3256f0f8ae1b5aee250725911b6968e5aa934710d9adce3a9ad6f8ce3bc115d53d6474f13a9288ee5daa7a8d8e978878ace2da77d53a79ca020205c20ba904ba020202a2283641268a5649e290550a88f4533d9c075726f7b106b41d98876b4bc54ecf89c83954041db401ed82aa760370c1135c38647006dc79732a354947a260ce48988cfa2cbdab7e91dee44129a95ae1a6a83a3a6075bbc27dbc160df3ec1be835d5d49a994c96caded6360d8d60d8d1fdeb419d33e011c8c98b867ca6ed17d4dbeada83653bcd55742d02cd2e6c6d60f058757b8fad06eac9db2455130ff003153b9f32307f5041aa89a7ad6b9e3636100fda919d0832c4dcf86b646b1c5b6c837248f01a8391d5133bb691e795c4fe683d4c1f2c05ee7b80d253bb2dc81b5f6dff351718c188b69432edbe58a38ec08dad7b9c7613c28395d89bac401b44173f4a06d81f4a239eb1a1b53201b3312390eb0834a0d907768fcf6fbc20fb0ad3420202020202020202020202020202020202020202020202020202020f9157f7e4ff5b27c4565973a0202020f529de70ea6654b2dd7739f91245f471b4d8bac77dced5c80a0e6af98d655c9335a6ef37ca2eee541db3e1d3bdbd6d1dbf6288cb504ea01efdd385f840b0f420d7411c4da3a99e471666cb4ed2066edeee76ab8de6dbd28306616e9cfecb2c73fd10ec8fe6c997d9741b1d44295f773e6a3906c3346e03d0f67420e8cd8948cbbe38f1188787dd5c3ed36d237d2811e270bbe4dcf921b7f0aa075cc5c9ba19dbed4164a186769736107fd4a17e91be985e738f620d54d154c26d87d5824ed849d13b90c726e4fb50e92a258c3b262545a293cac2344ee69dc1f621da54e5a16472516b64c2eda93dd2e3b667d0238b5f1a0f35ce73dc5ce24b8eb24eb25062a08a820d90c324f208e2697bcec6841be28e08aa325592e60edb4241dede76cda83aab06920fd8b5d13374e8c76ed3e34c37fceed46f590e9e682a0a831412e825d50ba8083b63a311b44b58e314675b183ba49e68de1f49dab82ea8dc71589d10a7eb568806bc81ef049e17107747947220ada3a4abef493473fcde7b6bf324d40fdab20e09237c6f2c782d7b4d9cd3a882a0ebc3276b6434f31fd9ea3712711f05fcad3ec54610d048f99f1c8446d84913c8eed596d5ebe01bea0caa6b1a63eb5a60594c0dcdfb794f8d27e43605471a882088ac15040404040ba05d02e81741d53da685938ed9b68a5f47687d2357a1072a0eeafdd414928ed4c5a2fb51b9d71ea20fa5073d3c12d43f4713733b838b84f0041d71d3d340f0e9e46cc46c822bbb31de05fa9a05f6dae8376255b531cfd6f0bcc6220186387e4dba4b0d258376ee90734d6a66be3712ea97ea94ef306abb6fbeee1de1b10721739d6b9bd85871041b1f008a06c8fd4f93b467d0f1fd7b3d283182032e6d7958c6e67b8ef0ff93a820e9a2f918a6add9946861fac9058f35973cb6418578d168a97c8b777f58fdd3bd5a9be841d54df25855436dae7667fb31bd8d1ed2ef520d18d5fb2136feb6fc2d41c19907e9a8e364982ce1e4372c51bb3117b6791c37b5f828af145253fcf211e897f42237370d84db219a7fab84b1bcf79fc9073e223e5efc2d61db7f040dbbfb10735906c83bb47e7b7de107d8169a101010101010101010101010101010101010101010101010101010107c8f101fb64ff005aff0088acb2e6d482a0a8083dbaca5124f0068d288a189ae81aecb27681db904709beaba2b8c451c528d1c92534cdd604cd235f28fd288ef762b8d07190b9b50cdf0d6b2466c20ea68b8b83af622b5c95b84cf4eda6d14b4c33195fa321e03ec1bb1c41b7a752211c39c35b4f3d354b46c8a7688dfc9bb03d8e41b74d51442d3433d34676ba176922e64999879c8ac1e20a8dd52cf0366de70cd4b27aafa34099f8cc6dfdaa11531f8d231b30fbc6ebfea4471e9b0d94dcc7252bfc685d9dbcd7d9c39c837cada8a88cc71d44558dde0fb09472696cef512839e3afadc3a411bf388c58ba9e5d6d237c6570b6b41d6616e9eab0d66b8a41d7149e706e91bce66e7d48be9e2072206e80020f41b87b6019ebdfa21bd0b75ccefb3e0f2bbd48354f5f999a181a20837daded9de7bb6bbddc482c38755cacce232d8fca49f26ce73ac105b0a32258aa419c1d910245b7f746c0f26b050658ac71b658dec6e8ccb13257c636073efb06f5c6bb6f5d0715d41504418d951b69a966aa934703733b7f800e12760083a9ce8281d688b6a2a06d97b68987e803db1fa475700df41c524b24af3248e2e7bb5b9ced64a080a82a0f45f275fd2191e6f554d6ccedf921d9af8d87d878906aa2a2d30334ced15347dbc9c7e2b06fb8fb369545adaf351b88dba3a769bb23dbafc679f09c787d4839140412e8212825d5110104404040404041ba9e411b8e7178de32c8de2e2e31b471a04f4e60758eb691998ede734ec23fbd47520ce9eb65a7696372ba371b98e4687b6fc363be83296bea25618c90c8ced8e268634f2e502fe941cf75077f65dd9b4da360aaf9c6bcd7f1ad7cb9be95b8f6aa38d8c7ccf0c8c17bcf82dd650756821a3dd54da4946ca769b81f5ae1f08d7c3641a6d5188d413db4875b8ec6b5a37cef35a07a906ec827736868f5c637524a750711b6477031a36716bda50740921169da2f4749b8803bf8d31d7988e5dd3b81a0041e7c31c959386039a495db4f09da4fbd077c92c72f5ee8bb8c7008e2f3592305fd3db7a5068c67f784dca3e108382c83f454b23a3a095ac7e471a385c1fb2c44eed7ed4572b65c53c1ad8cf1e9d9f9d8a0d3511be43fb557364fa2d7be63e80065f6a235624ccae8b511f26059fdb6e5ce1ad071a0d907768fcf6fbd07d7d69a101010101010101010101010101010101010101010101010101010107c8ebfbf27fad7fc4565973d90440416e83b71225e29ea3ca42d1f6a2f933f084183313a96b7239da48c78128d237d19b67a106c64d42e398b1f03f79f0bb301f65daffa9077b5d2d43328753d6f0093713fac9638f38a0e49a0a56ee6764d4927039b9d9edcaef7a0ca9e2ae875d04d9c1da207ebf4c66c7d8874c993ba7718eb2084bc78ff00b3c9eb161ce083234a298e9617d451fd33f291fdec3d08ad2fc466cc45488ab183567737dcf6e57fad11a9c70d97c09203f44895bea395ded2839e61624364d2306a6bb67b1dac20f5e9038e23853f7dcc881e40e737e108bc3c7730073adb2e6c88eba5c3249dba57910c1e55fb0f1306d79e441e8b29e7a665e92314ad3fe76ac86487cc69ed7ec8278d15c0e661d112e92592ae5df11fc9b3d2f7ddc79a88adc425cd9286064277b46dcf273dd99deab20c2a2199cecf5f3d9dc0f7191fcdd76f4d90edbe8d944239ea344646c0c16d29d4e7bdd66ee5be93b779079f5553254cce9a5377bb6f0720e2083520aa0883b1b4618c1355131c67b568ee8fe41bc3e91f45d51aa6ac7bdba260d141e49bbfc6e3b5c797d1641cc82a020b6283d1c3a9b2b5d573bcc54a03a32476d2dc58c6cfccec08345655baa9c3508e266a8a16f6ac1d3c276941a1412e822a2280a8280a82020205904b1412c505d68083ae9eaa3d175b5482e876b1cdede371df6f11df6eff002a0d5353be201f7cd13bb591bda9e83c475a0d28328dec63aef6878e0248f71083775e463b5a78472e677bdc8370acafaa1a1801c876c74ecca3d3907bd063d62c835d6c823ff463b3e5f55f2b7ed1f420c8196b1a61a6688291bae4738eae595fbe7807a820dadd13a2743038c744db75cd5386ea53bcd6b7e167a5dc457155d569cb5ac6e486319628f80709e171df3f9223a07fd3e9b31d55552db306fc709daee57ec1f46fc2830a13f2157f523f163417b2f33bbb32298f0cb1b4bb9c2c504ec8f053c00f0e8efef25075d1d54d52dab73ad76d2d806b43400c9187601641cbd9297c28e0771ba167e40203b16ab22cd708c7044c6c7ed680506b94975342e3ac8748d3fd2eff00720e7ba0d901f968fcf6fbc20fb02d3420202020202020202020202020202020202020202020202020202020f91d7f7e4ff5aff88acb2e740418eb41107a3483af28e4a3db2c64d4538e1d5f2acf4819bd08af391190416e83aa0c4eae0195921c9e4ddbb6735d7083a22c428dcebd4d1b0f0ba1259fd3adbeab20f4211d7643282a0480eca4af009e4638dc1f410514bf5892e7c13d093a8cb48fcd11e56b8969e72085d1556c7d2d55f6095bd6b2f38656fb4a0e7aac2e18c667b27a5befc8dd2c5e89196f714479d4f4b254ccd822dd3dc6c38394f1041eed3da5ab92aa0b75bd0c5a181ee395a5c1b95aeb9e325e8af3e192828b7593aee61b0bf7308fb3db3bd36e44459b18c4abe4b4770eb583206db57a2eef6d906a1874af7fed1206c9e26b965e63331f5d907632820a517998c0779d58eb7aa0889773906bebc889d153b64a827f8718d0467ec4577bbd2507255d3d445f29244d89aedcd996b0e2da483cbad06c1b8c1dc7ca54807ec464ff00b9079c80836d352cf57268e06e676d3bc00e124ea0107a90d2e1d4adf94ac8dd53c4c7491b392c2ce3ec41cf5187cf287544520ab68d6f7c77cde963ace41e7206540405077d2d23347d755576d30360076d2bbc567fb9dbdcaa8d35756faa7873acd6b4658e36f6ac6f0347f7741a14040418a02a0a0b640b20205906560816411063640b2a1641b29e9a5a9934710b9da4ec006f971de083d2a4a7834ba3a6ac682486ca266da378dfcb7b877dab1e041aebe8e181cd13b1d4cf78cc00dd340b9b5c13a89fa2e283169a8b01154c4f0360759bec95a1065ff52da0c7ca0c01024ebe95b6a9ad6319e299affd116641853c1479b242c92ba5f15a0c71fa76bcff004a0cea6460b0ac787e4ed28e9b546cf39c357aae4f0841c15357254119ecd63753236ea630710fec9df41d3140ca368a8ab6e679d70531dfe07c9c0de2daee441c534d24f23a595d99ee37738a0e9a2ee157f543f16341c682a0f67a9d8f48eac670d24bf920f250441d16bd1f9b2fc4dffd507320ce0eed1f9edf7841f625a6840404040404040404040404040404040404040404040404040404041f22c43bf27fad7fc4565973a0202020ca391f0bdb24672bda7335c378841de638713dd440435a7b68b64729e18fc577d1d877b81079e5858e2d7021c35107510505b20a83a29a8aa2a6e6161735bdb3b5068e571b04126a69a9ada661683da9de3c846a41dd4b8adf71532491bb636a62edc7d60f0c7b420e87455723819a9e1ab89c37352cf93691c2646e500f9fad15937ac691f6a7af929de46e991de58da780bc06823ec943ebaa8e9eaab3387490cb091f292d286e778f15f9435faf82c2fc21069ae84543d90c92329e18f5454908d2cbe71647ab31e33a906b761f4f4dadec6c63c6ad7eebd1045baf5a235c9895381a28849507c4b6821fba8b74ef4b9073555657b018add6ac22fa289ba2163c3e11f4a0e08b2671a41986f80a0df256d400e89bf22cd8e899b81ab877cfa551b291a25a0aa8fc38f47381c4d258ef8d01873e112b77e1a863cf23da5bef6a0f3ee8220f4aa5c69f0da7859abae734d31f1b2b8b18d3c42d7e528365250d25335b3e26fb6601d1d3375bdc0ec2fb76adf690876c6b66ac6ba2a9648342d36a7753ee6367d10dd45a7ced678d05984788c4ea989a195518cd51137b57b7cab07c43d283ce5062a8eba5a760675cd4dc4235358353a5778ade21e13b7b950615355254bf3c9aac32b18ded58dde6b4702834a020202020964041501010101010440ba097542e83ae9aaa3103e966bb6391c1da48f68236661e1378b7b684191867a6617b5ac9e9ced7819d9e9f09be9b20d90e20c0dcac749037c5d5345cc7ff00ca0dfa38a4f068e5f35eea777a8968410e1ed36fd95bff00f2d9afda83130319b23a58b8e49b4a7d5988f620d73d4479724b52e99be4a01a28fd640f810686d0cb51791918829fca486cc1f69dacfa3d482e9e968fbd869e7f2f20dc37ead87e277a90713dee91c5ef25cf76b738eb24a0c5075529b4155c71b7f11883950541ef75287f6b9070c5979cf637f34c5c7896b6ae0441074c43350cff0046488faf3841ca833a7eed1f9edf7841f615a6840404040404040404040404040404040404040404040404040404041f22afefc9feb5ff00115965ce8082d90541102c83b855c752032b6e48d4da86eb781c0ff1c7b470ef20d755432d300f367c2fee73335b1dd0788eb41cc83bf12716b29a9c6a89b0b240385d26b738f1ef72041c8c94b5ba3249889b965f55f87950655508864b30e68dc03e377d13fddb9507a7434e4d10a7cd94d692f7df5b63820d65f6e1247a871a0c60ec730668999c0db2d5bb57a218f59f49b20dbd7f2d58d153c72d4ffa6d1a2807f2e1ff00739150f5dc02d51551d137c8c16cfcd8bfdce41cf1f5897da089f50fdae92a5e23671921a7def44750a81ae3eb96c43668682225c7edee6fce28a1a7d16ec51860f2b8849acf1e4bb7dc5071575439f9586763dbb7242cc8c6f26a6dd112b075c471561fe27c94e479465b5fda6ebe33741e8c185f596225b1cb1cd4fae29af2318fc8f16782d711ac5fd88af368dd153cf514f23b3d33daf89ef66bd4d376bc0e222e88d15740fa76b656b9b2c0f3664d1ec27808dad3c4507320f4deceb8c29876cb46f21edff4a53707d0fd5e941a7120e754baa3b68e7f948ddc477becf6bc5641d946c8c9a7a663486d634b2669d64bef66bc7058eb1e941ada23c2646bdcfd25631c334719f9360f09af778448d561a870a0e6c4206d3d5cb133b98378efe23b74df6141952d2c423ebaa9ee20d98cf0a5778a388784edee541aaa6a5f532677eade6b46a6b1bbcd68de0a0d4808080808080825c20d91c12ca6d1b1cf3f4412812432c7dd18e6ef6e810830412e825d512e8080808080836452490bb3c4e2c78f09a6c83abb201fdf10452fd2b68dfeb8f2fb906c84619512b23732683390dcc1ed7b45f95a0a0d92d260cc711d712ead4406028399efc363366c7349c19a46b7e161410623a3ef682284f8d6d23fd7266f659072d44f2d43b3ccf323b85c6e835202020eca3ee157f543f15883910541eae00fd1cd2bfc5630ff00de89070d5b34753333c591e3d4e283520eaa320d3563386363c7d891bf9141c6836d3f768fcf6fbc20fb02d3420202020202020202020202020202020202020202020202020202020f91e21df73fd6bfe22b2cb99010105415010106fa7ac969f3061bc6fee91bb5b1dca3fb283a7ace1ad19a84da6dfa579d7fca7785c9b795067186d740da491c23aba7bb61cfb90f6937d19276381ed6fc88398e195c24d175bc99f8321e8419621db450348718636c448d6335c9201e22eb7a107a75ae1132b5cdd42310e1f1f20d727af27b515e58ab862d54f035cede7cdf28ef437b5f61446f733179d9f2ae7b223e55c218fd44b47b10602828a23f2f56d27c4a66990f38e56fbd076454c3575b50177fab5afb0f55e36fbd064f9df18b4d5ec84792a16dfd17606b7d6e28ae275461ed75d90493bbc6a892dec8edf1220dc42a9eec94ac6c44ec6d3c7baf5eb77b5075d05a8b30c40b0464b641138e67e78ef9770dbf0eb06d708bdb5c987ba7699b218c3c973aaab1c2306fe2b7ff00b4469cd86d28b6eab1fc1ae286ff001bbd88ae6abaf9aa835afb36367691460358de403dfb511852c4d9a66c4e765cfb96bb783b7afe94195354cb4139765d62ec9237ec703a9cc7041e8c62278270eaa6c2d76b752d55b51e2738163b975143a671564987e79a59a37d4bb53744e123b65802e1b96b06db0dbb3622bc3de447a589d9958d128cc5b1c21e365c88dba9072d454c950fcf27235a3535a381a3782835202020e8a3a19ab1e1910da402f76a68bf09fecaa3a461b15ddf28f9329cae31c766dc7d291cd419f5a52336b7ef2a631ec8c12817a267cdc7dfca7fda10054d2b8d98337d4d3463dae2e283212cd7b470ce78b731fc31841b2296a3254364bb0981f96f2173f336c46d7717022b562f3669677e6b895b0b80bdf7595b7d5c5ad11e3a05d04ba08832404040415054041d3870fdae271176b1da4779acdd1f6041cae25c4bb7cebf5a0ca58cb32926f9da1e0f16cf65906b40411010541d7480e82ab8a36dfef1a83910107761aecb1d61ff00f1cfb248d04c605b12a8e0321773b5fe6838d06fa2eddedf1a2907f493f920e7419d3f768fcf6fbc20fb12d3420202020202020202020202020202020202020202020202020202020f91621df93fd6bfe22b2cb9d0105082a02020202020ef15d15500cc40171d8da96f741e778e3975f1a1d952cad8211699d251bb535f1bdc63e422fb93f44a0e1610d70276020941ece2d711563382b7497fa3231c5a8af323af9e36864074478631679fb5b511b598562353f2a627d8ed965dc0e748420e88638e8810ead635c76f5bb4c8fe7ee47a9c835c869aa1c5b0c73d4ccef0e476bbf0e4683f120870b922d754f8e9878b23aefe63333bd7641d34d45139b9e0a792a1a3f8f39d0423dbfee41649e08da639aa6ed3b69e85a1ace432102ffd48397b2da1ef18594ffea774979eed9f64041c724d24cf2f95e6479f09c6e7da8302822020f40c8cc45a048e0cac680d0f76a6cc06ccc779e384ea3bfad071cf4f2d3bf24cc2c7703906bba0f4a828da075e5602da58f581b0ccede633f33bc107254d43ea667cf276f212e3e941ad404110541e89c469e78a086789cd6c1bf0bad7d97dc91b4db6dd50965c35f349349a490c8f2e003725afafc6417af70d60dc52dfce3fff00a413b32c6f72a58dbc7a8fb9a104763d58ed8437885ff3250ae7762758efe211c961ee08399f2bde6ef7171e126e831ba0c5010101064808080801054041d8f1d6713a33df128b3c79366dca7e93b7f806adf41c883aa1b54c5d6ae2048d3781c750d7b584f1ef71f2a0e47b1cc716bc6570d45a7682831404110107761e33415838626ebfe6b1041864afee2f8a5e2648dbf35c5a505ec357dae62b0e37347fb906c8299d043559dcdb98482c6b8388bb99b72dc0f7a2b5629baaacfe3b2277ae36a238d075e16dcf591b76df303e9691f9a0e31b106c83bb47e7b7de107d8969a101010101010101010101010101010101010101010101010101010107c8b10efc9feb5ff115965ce808284040b841b1b0caeed58e3c80940920962b6918e65f666691ef41ad044041d147593d238ba17581d4f69d6c70e0734ea283b343478877bda9aa4ff01e7e49fe63cf6be6bb571a0ed86333b24a7aa062944621a8cfb5b90fc8cdc83b477158a2b8e2a6c5e02ea7862746e6ea7b98db7ae4e0e0d7b111ae4a4683fb755b411e0b499dfec397fa9074d2d1b5cdd253d13a46f97ab7e48bd4320fea28ad92d5471b724f59abe6f87b035bc85f668f7a0e3ec9c50f79534719f2b2fcb49fd5b91cd447254d5d4553b35448e90ef6637f520d28080829411010107553e23574edc91c872788eb3d9cd702106d18c54b75b1b0b4f08863bfc28396a2aa7a97e79dee91dc2e37f520d482dd055010102e82661c281b762a22020974194514b33b2c4d2f770345fdc83a9f83620c36309befb7513ea06e834c945551f7486468e12c77420d080808324041102e836451ba5cd97c16e63ece941dd4b454af89cfaa99f13c1d51b6273c9f6841bdb518540d029dd3325df99f1b5cff00b1bb01befe341a63a6c3e5bda696e3592e646df7ca836b70ba471b69cdf961ff00cc829c1a0d7f2a6dcb07fe741d1d6904834552e32868dc48d30890715f4c6e389d7e2b22b9a7c1608e2d2b672e37d71e568781af5f7423d48479b510b63c8e6125af19866163b48e13c088d28220edc3c5e1aa1afb9b366deeac41daf7548dcbea6193e8d64795dff759fee456274c01fddcdfb93d282b34aea6a92e95af6884d9b0b6d18dd377c35adbfad0734f56e8b42ecac707431ea9181e37376ef8e2418764c0d94d4f7e1d1fe45d6446fa3aaab9e761680d89af6ba411b5b1b2c08edb281ed41e74adc923d9e2b88f514160eed1f9edf7841f625a6840404040404040404040404040404040404040404040404040404041f22af3fb64ff005aff0088acb2d082a0df48c8dcf73a5178e36991cd1ab35ad617e327d483a20ae9a59991c6238839c1a32c4cd57e504fb5065363536b6c778edb0e621de9b651ec42b99f5f5528b196477db71fcd06fa574fa39b4c5dd6d91d9b3ded9edf276bf859bd97de41e72020a1054041dd4f8b3dad1154832c4d1661bda48c1d5b87f07d1370506c99f4195ad7d4d44f1347c9c16cb947012e240fb20a0d2312109fd9208e1e0711a57f39f71ea0107354554f52ecd3c8e90f0bcdd06b41504df4192088220a82202020202020ad69738346d26c3d283d2a6c2e39b4767939ea05313b368bdc20d319c3a2dccc5d23878babd1b420dcd9f0cbeaa779f59ff7a0e864909ee58748ff00b3ff00a3917e36692a5a3738706f1b8347fb5a87c3af2bd83b9411f2c8d1ff00f6041ce710ab2f8c3a5606e717103eefdbc4e283aeab4515454f65a2886b3a26c7aa53bad56ca46ab6fbfda9d9dbf3a889641eab2be2aaa7868e571a50c3ae48fb476c177b06bbeadbaf5ef22b74d4951515134ec6c3207bb5079125f8c11ff08208ab20ff002c471d3cce69f56677b9062fae737bb9a86fd7471cc3fadad283032d0cbe1404f0ba29213ff68b87b106b3474ce3b8d7f55331dfd32063904ec4b9ce0d6b9c09206ee376ff001b33844615384d4c03382d9584b9a1d1bafae3edb56a76ae441c082a0df4951d6ee71b121cd2c395d94ebb6c363c083ad98a868b5ea40e2a93fa1149abe0a81698543adb334e1def8d11a83f0edf8a6fbc6ffe34144986efc737de33ff001a09a4c37c94df78cffc6821761b6d51cc38f48cff00c6831fd83826f5b3a106355344f11b21696b236e5dd1bb892e2e24d80e141cf74041d5432c2d1345338b1b330343c0cd948735dac5c6ad483b616624d16a4ab64acde68987c12dbdc8ad9ff5cb6e9ec8c6f92e81883449368a39b4f542a25923d1359192f6b6ee69be6366ef78374184333cc5168276c72b1a637b24d41c3339c3b60587b6df41b83f13dad6417f1c369fde8354cf91ee0eafaacf97588a37673ab9370dfef520e19a4d2caf92d6cee2eb705cdd1169fbb47e7b7de107d8569a101010101010101010101010101010101010101010101010101010107c8710efc9feb5ff00115965a1010670ca627e6001da1cd3b083b4141b81a3db9651c59dbefca83ace2baf72d772b9cd27d24460a1584b8b553859af2ce30f75fde8570cb3cb37747b9f6d99893ef4182020a105418a020202020a81741106482a0c4a020202020202020ac716383c6d6907d483d6a3c528e16d9cc9755436a5b62d3adbe0ec1a915a7b251b492c6c8359d8e6376f246889d95703ab4df7eefc80410e26d776d097f9f34a7fdc106b35b1f834b00e50f77bde81d91907691c2de4859f98281d96aef0662df32ccf84041cae71712e71b93ac93b50440411038d07432baa99a9b2bedc17b8f5141d2cc76b99e10238db6f86c856671ccfdda08dfc3b3fde1c8359a8c325d7240e8cff00a7b3e203d8832a5970ea6ab8a6667b31d9ec7788d601d5c28ac9f3c622a5dd8bc0c91ee1be6591ce3abd883cbb2208080808080817411054041102c81640b0400d1c0832b208825820a8083653f768fce6fbc20fb0ad3420202020202020202020202020202020202020202020202020202020f90e21df93fd6c9f115965cf70819870a0b76a0660819c206708217041330417304173040cc1063982066081982066082e60819870a05c70a0b71c28171c282e608171c2825c70a099820b7081708170817081708266082dc205c205c205c205c205d02e104cc103320971c281708171c282e6e3412e38502e102e102e105cc105b84173041094133205d054040417520a8220202096415010104404040419c1dda3f3dbef083ec4b4d080808080808080808080808080808080808080808080808080808083e4f5d552b2b270d22da57f82d3e11e10b2cb5764aa385bcc6f420a713ab3e18e6b7a100627576edfd8de84190c56b47f13d83a103b2b5de59dece8413b275be59dfdfa105ecad779677f7e84198c6f111fc63cd69ff6a0cbb3f89796fe867e941abb2d5fe5de828c5ebc6c9ddece8417b318879777b3a104ecb57defa677b3a103b2f5fe58fb3a103b2f887973ece8417b318879777a9bd082765abbcaff004b7a103b335fe57fa19fa506431dc447f107a638ff004a2af67f10f1dbf751fe94197f88311f1dbf751fe9417fc41881f0d9f751fe944a767f10f1dbf751fe942a767711f28dfba8ff004a1506395fe3b7eea3fd2855ecf57f8ccfba8bf4a14ecf57f8ccfba8bf4a14ecf56f0c7f7317e942a7676bbc68fee62fd2820c72bfc667dd45fa50acfb3b5fe333eea2fd2855ecf57f8ecfba8bf4a157b3f8878edfba8ff4214ecf621e3b7eea3fd2856271baf3e18fbb8ff4a1580c62b5bac3c0fe5c7fa50abd9cc43ca0e633f4a157b3b887946fddc7fa503b3b5fe333eea2fd0853b3b5fe333eea2fd2856271baf3e1b7eea3fd2854ecd5778edfba8ff4a07672bbc667dd45fa10476355ae162e65beaa3fd2828c6ab40b5e3b7d4c7fa5062716ac7784df4451fe94190c62b7c667dd45fa5065d98ac36be8f57fa317e942b2ecdd5ffa3f7117e94183b19aa76d117dc45fa504ecc54b46a10fdc45fa50063555e2c3f7117e9417b3355c10fdc47fa503b33527c187ee22fd2827662a7c587ee22fd282765aa7822fb98ff4a0d9d9aa9f161fb88bf4a0c3b2d39f062fb88bf4a09d949fc58bee63fd282f65a7b76b0fdcc7fa5063d94a8e088f2c317e940ecacf6b6587ee63fd2803149c0b6487ee63fd2821c4e73e0c239218ff004a00c4a5df8e13cb0c7fa506892a1cf3adac1e6b1a3dc10694141b6f0282e7e2083753c834d1ee1bdbb7878471a0fafad3420202020202020202020202020202020202020202020202020202020f90e21df93fd6bfe22b2cb9d0441420a80808080808080808080808080821411010541420c90102c82209640b2020a83240404040418a02088080808080808082a0880808082141420b641101010104ba0882841501010101044110105d483653f768fcf6fbc20fb12d3420202020202020202020202020202020202020202020202020202020f90e21df93fd6bfe22b2cb9d02c82a0202020202059010441420c90441101010428220a82a020c90101010101010101010101010101010101010628080808080808080822020a80825d010440404150540411010540404110441b69bbbc7e7b7de107d8969a101010101010101010101010101010101010101010101010101010107c8710efc9feb5ff115965a101010101010105082a088220a1052831404040402831404041420cd010101010101010101010101010101010101042822020208504404192020201418a0202020202020c9010106280832404040418a0db4ddde3f39bef41f625a68404040404040404040404040404041ffd9);
INSERT INTO `timetable` (`Ttid`, `TtAcademicYear`, `TtStandard`, `TtDiv`, `TtUpload`) VALUES
(2, '2021-22', 8, 'B', 0x89504e470d0a1a0a0000000d494844520000004c0000004c080200000048f5c67c000000206348524d00007a26000080840000fa00000080e8000075300000ea6000003a98000017709cba513c00000006624b474400ff00ff00ffa0bda7930000000774494d4507e20a060d1710e86f50f500000046744558745261772070726f66696c652074797065206170703132000a61707031320a20202020202031350a3434373536333662373930303031303030343030303030303363303030300accc8759b00000052744558745261772070726f66696c6520747970652065786966000a657869660a20202020202032320a34353738363936363030303034393439326130303038303030303030303030303030303030303030303030300af9a041ba000002377a5458745261772070726f66696c65207479706520786d700000388d95555dd2db200c7cd7297a04ac5f7c1c2798b7cef4b1c7ef0abe244e9c7e4dcd8c4d90d0ae5682d0ef9fbfe8473e510bc9557ad428beb8f8c52d948bb39b87afbe4b63defbe572e9cc585f5d73c5424c9b146d5154e05b7d25adb105369ac4a6bba9e38b8022d8c42c5d762e728d2a5b54c7466f09e60b97fced57df43d246890036ea3d79c8360d77f7c1e411066b97dca1f71d5cac6ab3429ce47a8c2531de45b8814f9145802ac8176b8ba858ceb176c52a0f3b73c777be9db80db76d386e70092e2f83bfd263b0808fb1aafa4b6a4cc398e9d5508c221bd2e9311ede035ebc0fc601e445d61c77268c779b00601412a84f2a1215690121edcf2c4001a54221d8d7a1d40a85e071b3fb4210ac07844d5653d8632d52e033df01b63f4a84b910a60da954f029491ed2965bad5e436a43f7fc252c3dc77d1f1601db9be0126ad9ba4363fa37e9f7c1b3b9037ac1a767380a191a3136d88c9f524fec0caf29b0218866ed2c01ba5f4f4d59c0080ee9246356b2414dd08685ab8df396eee805e1f50130d4da34ab2d596f874660a2ab8eaa4d27a4b38ee399ed3987a27bd0018a13888c96ec7a35a95295313cdf2421eb30290c19301bee15395390b03c81d9712760f4159d900dd7c337c8ef8165a779493ca1dbe85f073a7e609e552b87626f7ed0e6260d7da08d7ec2904eda1c913fd0e6064c0764fb7f6df8eb06e54edf9fef9bdbf35d745f3d5cc034afd4697af33760d990231d9e3738fd01b9a26c698faff9ef0000162d4944415478dad59b69935dc7919edf37abea9c73d7ee46375602244152a24889b2a5098ab23c1ec528629618db1f1ce11847f8bff89ff837d8a188b147d658e199d168b346b26451143710fbd2001ae8ed2ee79caa7cfd0120872440a00191909571a33fdc3eb7aa9e9b9995559979f96ffee37fc2a34b74142fa862818a7b30a3838f31d0638900002184520aa500cae5e113e7b7c79bc60d30a3cb8a2a58743e31420024ddd0f62d8d8ab6a02fd3839e8f8f374d01cc482114911005024f8c540a4260a0e0128c0fb6a2c7d52424c200030bd407c21e73a8c710031a195c0aa4b1720e0a1ffcfce38a2041c1ba44ad0cd9a4bbbef2d98b4b33e4c5a4aa9f3b1e8eaeb92195877c290717e27db3301280080fcc55b0f5b135153e6b4a411200a4189fda987ee9349f3bba3789b3e0f981531fd4271338cf551caa747b41b142e8a862acfa5ca5d4af8fb8ecc34d44b325bd182aa7dc650ff152de5d3c481ac022977b2441492e1100610e023de5a3ba3ebc5a1d5e5faeaf7543a57e5175ad3b3b061368a5a8a705a02999d1ba47803455bdf5759c2dfbb04eaf47fbdbb3b13b82599198421ad661322c762b482004b974906d481249332b5027676490a5ec30b8c43b7a234ba426837074351e5bcdabc33ec5e0e6d6a3c80a282302414077ffd24334f8236892a6d8723e669fc5578edeea92ff6c36950a8162501dd3a009abbea80317c5041305f100942421a8782040160942a0f5f28ef23ac461c3e9c08f4eabb5a9c6750b1790549cbd0312e066081126820862948ad00204c22368922c8e2ef7c3d541ffdae95fbfbd79a49467199c606fc0a846157dd2e4691396fb952c800884eeace241e200a99891683066a843d98bc2b0d6cac0d6273c34b5c920d76141008ad99a8c20df4f050c704371e4cec4e270d2cc1c9067a11076c7210e022931270f4bda33d5fef3d30b9bd72d84ec34081e2d8e1a19f320551b2bd89a875e6e2846def1a8070f4d085460e7de13a5493e1ddaa171bd3a092ba33c48cb04b89aae380023cdba2489b0ca2c426dc939f9322513957b03ea60c969807f30ff8134e9a6268f76ebf95ab3bfa67878a56d9a76b6a801c12c0c1a1973b06675d2c74df4052e192485031cf59ce8226c38081b533bb2a295864d62088590abea2522478b0e13b27b6f90d13c8049ded1bda97c656c73713673cf92026462c6fb4e7920c8c2cc90065d18d45dc1fe8b1be5a5d1fce78b20c52aa4325ea78aabc4e9a09f0eda6eef4ea8a19924b88c2470e75452bcc048a35ce62a4d95d7c7d5b1356c4cf2a8523283504a8643347a9243ca08000b49324a05cab48172cd6b2f0caefdf1daafd6d666fff99d3f020c8a90811dd8438fe2932e398a2908266210dad74efee2cded7fb9839262c8ab8bc0baf2986bd9d1d5fef6de28b3077b2f26184d80bb1ba84005587639f320dac6b43abedeacafa2497d845442762015d415da80dea1852589495e189d0628208fb43cd55f7d16ef7c6efcd3175fde7caabefaf662b85c765e1a914689fee1a07db038e914e5667d31a03296af1c79efe7c737fee1ea57f30a3d2ab14e5edacaedc4aa2eddb09b8b1042a6453300a514114ec058048f561d9aa4931b7e7ca51bd54e3377cb9ea0408a3019111c5ea80292229d2863cc4ef9e517ca996774f6799c3d84ddbadf6f7cd07bbad9afb61d5c24e52c02f4a193f4c17657dd855ce6e04a11fd6ad09f9c7efdc2cee98bd31786fd4a0e8db89f094e9b746cadbd350f82515e8a4b346308224adfa389e1c43a9f39a2b5716b9e550240c80205b470d36eb03ce7b8f76112c7a51d603e0d9bcf97b3af94379ed3f943da4e584618c839428e25f4956e9e000616924b501145da07ba3c2824e4995874cc1ea3bc337e71b4f7add33ffa4ef5c21cb6f42e06a214054bc7d797d76e6bb78d6291934460efc5219b34cda9c3d533471793d47949e25026f702f5140983a8461e2758acf2bda774fe295c78daaf7c215f1e6a3ec43ca0f40c1d421112fb60219bcdacbe9807400d1a540481e61f3ab21eecc4032b2c456a334a31c8bb9457f3ec0f4fbc7bc9cf7d9fc7432d2e633288d07480636b79ef6a8d20c849175c3e9a8cc30bc7f3c9d51c02ba524146420ed2a3891e8beacc23bafe82bd71c2af9ed6f9137e6d8abd08779190e099041121165289b0c21d0f5a74a99420c2251a40b8cbf028216458bcb5f639cdbfba28bb178f8fd66c3cdad91bd5aba97cabfcf76b79e38df84aaef6504675a96783ad78acb633032c4b8870882e1bd4f6d2c9e5e16108d9e8e0b06333f07db25f5a5dfbf2a86fbe5cde7d25bffd342f8cb1592b572a063a42469415c000bb6380024244c7de7c50958092b716ab0e074482225ce14341fae190021695fe043bdfec6e1fd3dccf8c97b95e0e2d1cdfd2f19dd3ab57ffb4fa6f3bfdc665db08a1f4cc8376ca4928877774715f0e187c9846a78ff1d84aa92a952265a21ba2cd66635fbed2bffe32de7e096f1cc5d5901674544e810556880f62dd9dddf2fd854b0218e8913050bb4aa27f10a8a08f04e80369f21077bfd5df3e9c7525351538b5fdb2984ede9cec5fd9aa9f1abc7afcbd9b2b7ff35faaffd04b9e4b29136b60871bbf312b9d23104757ecb923b90ecceea88c94ba5afbff5c6fbde63f39cd7757359bfa2c489d5241943dfcca46ddb9cf669839aab6bb139befffc1874312d8287edbc77f1b565eaffdd5b5abfffab9f7b435d1c549da89edad7f16aedefac6f317af9efcf1ff1abf9abdb138eb43df4c26ede0b64a1f5646d5d387674363e95d7554bbc2ed63dc7c35ffe4d5fc8f877cd760843b6b279c3c603a8c00e18244cb25757d84f0499f3d90262fe4e9b7353c57852df84649fdcafecafa5e3934495786da1c6def4da6afefffc5adb72f7ef9c499f1609cdbbd62793cce7544db85136b5c1f95dc5742607b9837fe3c7fef0ffb1f4cb14f0a448f64bab3815b602c7459ff304212109ca622743964af3f9911e1f3af7cf3a1908b54dd6225ed0b4db6e6e5439bc7479bfd4aeed73b5bbd1c157c6f32bd3d3bb6d8bf3d1e5e1e1ca2924a099b3b96ac7ae9649bd0c8828797f89b7f57feebd7cbcf56b00fa943d3c688b0709348dd5939053ec45c0904a15826aae265d6377f7ff9cbb33ef1e09a8c9e96d1dd4ae31ebc74210bc3123af791d7f5fe3eae6c8f5e5e9795ae84c48d9dc9e4bdbd95671667ea672f6ffda9bfb9f9e58dadc948b1cd1c4fd7fbbe691cde85e5bfe04ffefdfc7b47d265902d82c7e8a079111b83d31cc805900e94112b103cb97546e6622e7f8099df67c06c8c8e51afba37f9b0d71195bace0cb96169731fcfcc4fddca874ad704050babb92ea367cfd52fee86667efcdac53f3afbce003984d00cda9d93d3defa64f65af7fa5f2ebf7f225e08f280229228017da0473801c924e3c108dfbfa74647beab7d3d289375bf31d5556ea6b44fcdcccd31d1de6175a7383b8c4dd4b35fed1cb9d98dc2b0cb719edd72490c8be6e9ebd5e7afadd537bff1de6f4e5cdff2d634c5a08a6d652fe5f7fe72f9bda778b98fcb03211c540e9a37bb8fb956f40ea90daa6de7f3e5f68b3d8fa35d73ab64bbf1e696667bd76bbb163190c56da90d612c55252ecaa9c5686b18ceedfdab33172f7e61b43fda18727424b77fde7ef744787b69e8c0f499a7f40e06d9197be58db27c35dffc66b9f55cb13e298b722177e02df7413e77ac2d697cfc06c7bb99fbf0607b53f469199b10c3cbb7afbc762efef2d8c99dc1e1afe51f7f35ff5875a8bd1063213f71c67b200574e01a965ff75b7f51b657507e15c717d4ecc5b0441c221ccb379f8d58bf3d2d8b6a6f7b5c3d756db0d12e167d7e7b65b1752ab61958c6f6ea9f9ddf39dcb73f3c9c5fe50f06a16d392eec4c9f52965d7c2483f8382481d46323cd5ee3e690e13b61f5efecd04d1fb4c66231b94d305c337f89fdd7d3c5a33b57c3ada3fd91415b6ef2ea6a6cc711cb9272d39789f6be71e5ece1c1852f9ebeb5df982b0791d6e3d3e014ef06c50a09c29dbcd903e2e47dcc95c054f3a365ef1d1cfedf38720d352d4428ba80b21f867bc025e67a30fdb7473d5dd6ce150336420eb47901502c000e0cf3fe972eed0f8eaa0c4587b99917ff346a428e3b97624599a3c400d21ff0fcbddf2bbbc8955cea3efe1f1b5ec7b4123e744a0621839631fea25dd95c19f8972e63d47239d0bd43b9f5d9f76ef7f0682c90490f5aca23e9129268d905a20a8ae81e01524009ac6586fa5268b66d4091f7a44fa9ea523b7a73a7e937b607d57294a3e9e34611a458629e2796ca3d93e4a754f9e29dc2a10507058fd6272cf9c95e6af77c5ec13947da4f55822bf4f9eeb01f91e41d7cfce6d6c6edfe481adf107adea3258392aa0ae38a836001d46f5544fb2864a001e634d123fb412a0f38d9df67d626630bf196e1443f4fdce90cbce7b1ca1c5abcbdfbf4955ba7c291b237da29f77c8f01f0ceba79592e5a896079583efd5144280ed1204f56867578c0b376bfb7fc3a9bef72e33cc6b1c8eeb75b772103b6dbaefedf5beb7b2b259cdcf40a500c48918908a0391d45beb5d69edf088b006ba510bcb192cc0d90e3317d5440468eba531461c7c1c9fa5604853e169890890fd79beeb3bbbaf92eaa1f611d862045c0efb916642f8da6c5e6bfd95abdf64cfcc233edcef2467f7b54baa179f0d486d1d2fb68b3d4cca7b8144bb38ccfb84c2a8204f2ce8d1e101e5e4cb80fa6aca4227a29013de3d3c3eb8417a2160015937922ca2742beaf4fe193236e950716e70c766367f0d6d5679e7bf6372b5fbcd2ee35ed9ee4a169bc5e2df9e674ffcc0af7c83dcccf1e1dd6311ebfd1c75d88441d1023b23f9605df49c817774304da14672bab33a2eb31ec53818ac1580c7637c57cfffb241ff646c88dc276ef4df190cae0e9136f0d4659c39cd6f6eb8d1957975ddd5beacbacf6ed49ed963b664f619ce36889e045805290083f501df39ee5108292592896c9be87fdfceab33b658da187bb11215778bfedc6ee3b843efaba8f9e630e719ce8e0e09ddd95b76ebdd85641958ad59dea4cf394b9ba9d8eec69e4885681f9fab0bb78c476d6a357bc5379f087d7f63e81d1880093828880e2e3b8787a7aab7217498fbc7bf9fec02aef11ddf3ba577aecf77d1d3343586c61f8faa517b7b765653fb20bec03b3a92f54da9885c3b797d185507555beb4da5d5c0d8b3a02e46339e3dd25121ec192d501c14a3da23dbfb2dd949eba939775e73fdd30ef63aec4c7b349f7c92e991c6632842e7b359fa95f8c9a3aae348b841e08d220bb5255429fbadb4de88615823ae5420d8b4d5aa7ac98d9c1caeef751449f40f3e088a425cbbb25bdbbf9d42cc4e0911243fae0a0f6493ec90fbfee374d2024131423d4a23eb77be8f2fe518f8bd5c1f62424d702d6c12cc40a7b0d76262265b3dc36f35cc795651cce2190510fcbe8dc1791445da2cbdae02514538e363cbf33bdb033b59022956d49dd6d57395022eba142a0e7f0fa325ed83a3a5bae4d07bb6b4d3bc8a9559f472565955bea7cc543302ffdb2a63058db2dcda2f7101e63df214566a8af542a0131e67a647927e9bdcd670b1bc459516f4a9f2624005141cd324fceed1eb9b4bb96aa7e65bc97626bc52bab7267becb4a4332871cb4187a5c7275a6e041e1d1e7ca0a33b136a454ba3a77354a49cb2bed91b35bc7667d127bead00771f253831c7580f6bbc1b2e7f0f6eef8bdedb5bd3c5a1d705aeda6017399da75c56ed8210f42d172bc68635a6de3b0e3a3ef3f04e50d7c1ab257da33cbbb5efff4f22bfff8d62b57f687ad2a1aad8cc1ee4171f2713489e45521babab4554cb7fb4367b70e6fed1d0a553f5cb9344a73ec3ed5cd87400e3022747dad90ebc992558f03a6cd3f809485d2c040db574ce7e7cffefdf997fffa9d2f5fd83dd68584d0194260ef9fba26e795e436ca468fad9452eb955fd91d5ebb79aaedc3d1433b23a2bbe986013c81d9292c684d092b0521439d951a34b7ee63f701ca28885da0052548b262c8957539f8dbbbc7ffe73b5ff9bb332fdfb071a95bb1803d3d81adf0a96e3c0092230085e66634422433c97d9f9cbdb5b23b5f5b1bcda75d29fb439a673a59067db3c8c649b1d1bea9ab7c94e925f4f6512f25242a4783d7a964a1b80d833c33bf79e3b9efbcf9073fbd7672665592d38d221541e9fd269e4f13f2fe76551ad8b28b3c7ff3c8d55c0d06e1f85e88a5eda30625f6645f8c9a55d3a5555509f3c26c18121fb99c887d8e68b1eac8c9b2443375d20f6f3cfd576f7eedadebcf678bb847ff1f96c76cea3d18a205ebd58dd4a4e578eb573b1b613e3cc5cda748796f259688ba0c716ddd57159ede9e63a78a43e48f275202134b2c5c56718f6d63566f73f683cb2ffdcddb5f3b373b3ea861aeece101bd8a9f21641183bc8677dda2aa1701e3f30bbcaee13abbe0b9a791a467cd26dd25c6b5659a4e3d2bb1fb18253dd4a58498ad1d3ae7dbac7f74f60fbe7de66b5b5d8ac12db7456da8133eb9aff7336d37b6a2e0b6cf38b7bc16b3ed58fc05277b390e54b5319824b5a2f537478b8b6ba11f06e47b57eaf0cce28560dce1eaf7cf9ffeebb7be7273b9d2781a0a25f65e67f30735a17f8690a442b26ca15728a433308ccf87d115af6921871c1d1e82c7c262edd5497fa34a165caebbc5bb0c3a0099e79010380bed8fcfbdfcddb75ebb5a562aec842e172d5bd67d9ec21f5465f90c21cd554a2934c2a2b25b69f27c8fd5ebd5daede45559440f1da34331789aa772e970de5d53046564201cae0033a7951e286f5cfbdc77cf7ee95277247a0b545d8562acdd6b16f177a4c97bc509032e06de52332dc959129000932c87f616db6b75d5adc93c83f06928838864420cf6dece337ff5eee7af2f1623b5fdc31aa27fc79004cec5ea1246b527b10f85c11504f360f3617775526e8cc89cd9ba900cb9cc45bbbe1cff8f332fff7ae7f4d28e28ee073eda71f789428aa06307c38b9acc83893d9c1441915671c2ddc9e2721ddb714a1497c25eb17607d31f5efcdc4faf1f1706c4a8a5a5521e69de270a7937c9edc3eb185e8f0e66303942a1177322c432e836a7b30bebded500c4e271f8d6ed537f7be9e5658ec95bcbfbd107fe8867fa27ac49835479b889b4c500c2cc1d2880e8453dc1d04edb4b6b7967644c44dc9a4d7ff0dec90b8bc33540b4095de3704b8f34ef13852c48a022e697826dfa21b00a7997ca70930476ee7d426eb6932ead117d5fc2eb379efbd9ed672af53d07422aac5b3a1fb192fb442183bb0b85007931187ce0f7948032b3bc2a5726ed2c9d6d8fffe2dcd1beef1e6bb6df1da4c8620078c6d29e468e8fef936e411ad6b36affea895f6f9f7a73fbb895e6f709f2ceaf594452d8c4f0bc35f716d8e515a858cafed5e36f5fd9d8e63060f8fb049983440341a12dc33743087e6fe91660ceae76afdab9b95a824bbf57e62ade49761a4178bc18628b4a44a1ee248c8112d903f45ae68afd2491e6bf6df7cf1385acb35592c83690586c95951fd51b60a0bc5136f6c5b28199cb124be5c9d87a09b5ff5ef9a4430e9914804cdc767f0bda2ee9c83239b18c755d0e178c15bd69ebbd9216068fdd2ccd7fcb793fcbccc0bd9024005301e4c1f6a15f5ab386b51166436bb3e69d55261fb56de5872e36a32da4a8a0f0d0b6c9ff9f2045034439205a90c56dafffc1864d0a7f9cf380db5dd8ae14d80dce62f44b0eb654d7fd00e8dd7eabb691270a09014651f262b2aa2479b8417c3b0caf9a7dc527cf75cba5f1a74dfd461ebc854688847a147bc4c4ecef1652106570caa45850d44d820b877ea2f2aefa513377eb175e6f364d6633c8f2b8e8589a52fdde40928284620195802e74001c048a13372cdec0e4ee2fea9d158a53f050ffd6bbe393d5e4fd4400fea91e7bb758691ffce7bed5d14794271a427e57f2ff00440f17356338a1810000002574455874646174653a63726561746500323031382d31302d30365431333a32333a31362b30323a3030632159380000002574455874646174653a6d6f6469667900323031382d31302d30365431333a32333a31362b30323a3030127ce184000000577a5458745261772070726f66696c65207479706520697074630000789ce3f20c0871562828ca4fcbcc49e5520003230b2e630b1323134b9314031320448034c3640323b35420cbd8d4c8c4ccc41cc407cb8048a04a2e00ea171174f24235950000000049454e44ae426082);

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
-- Dumping data for table `ttbsalarymaster`
--

INSERT INTO `ttbsalarymaster` (`year`, `SalEmpNo`, `SalFullName`, `SalDesignation`, `SalPAN`, `SalPFNo`, `SalEmpBankAccount`, `SalMonthname`, `SalMonthdays`, `SalPresentdays`, `Salleavedays`, `SalLWP`, `SalBasic`, `SalDA`, `SalCLA`, `SalHRA`, `SalTA`, `SalSPPay`, `SalDGPay`, `SalMA`, `SalArreas1`, `SalArreas2`, `SalPTax`, `SalPF`, `SalIncomTax`, `Salother`, `SalTotalEarning`, `SalTotalDeduction`, `SalNetPayable`, `CreateDate`, `SalEmpName`) VALUES
(2021, '1', 'MR. MAVANI MOHITBHAI HIMMATBHAI', 'ASSISTANT TEACHER', 'KNG89099', '9872778784', 17987998787, 'December', 2, 2, 0, 0, 1000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000, 0, 1000, '2021-03-26 14:27:41', 'MAVANI MOHITBHAI'),
(2021, '1', 'MR. MAVANI MOHITBHAI HIMMATBHAI', 'ASSISTANT TEACHER', 'KNG89099', '9872778784', 17987998787, 'January', 31, 31, 0, 0, 10000, 1000, 0, 0, 0, 0, 0, 0, 0, 0, 200, 1000, 200, 0, 12000, 400, 11600, '2021-03-21 19:49:59', 'MAVANI MOHITBHAI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmpNo`);

--
-- Indexes for table `exammaster`
--
ALTER TABLE `exammaster`
  ADD PRIMARY KEY (`ExamId`);

--
-- Indexes for table `listmaster`
--
ALTER TABLE `listmaster`
  ADD PRIMARY KEY (`Sysid`);

--
-- Indexes for table `resultmaster`
--
ALTER TABLE `resultmaster`
  ADD PRIMARY KEY (`ResAcademicYear`,`ResStandard`,`ResDivision`,`ResRollNo`,`ResGRNO`,`ResSubName`);

--
-- Indexes for table `standardmaster`
--
ALTER TABLE `standardmaster`
  ADD PRIMARY KEY (`StdId`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`StuGRNo`);

--
-- Indexes for table `submaster`
--
ALTER TABLE `submaster`
  ADD PRIMARY KEY (`SubId`);

--
-- Indexes for table `tbfeesmaster`
--
ALTER TABLE `tbfeesmaster`
  ADD PRIMARY KEY (`FeesStudentRollNo`,`FeesStudentGRNo`,`FeesAcademicYear`,`FeesStandard`,`FeesDivison`);

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
-- AUTO_INCREMENT for table `exammaster`
--
ALTER TABLE `exammaster`
  MODIFY `ExamId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listmaster`
--
ALTER TABLE `listmaster`
  MODIFY `Sysid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `standardmaster`
--
ALTER TABLE `standardmaster`
  MODIFY `StdId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submaster`
--
ALTER TABLE `submaster`
  MODIFY `SubId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Ttid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ttbsalarymaster`
--
ALTER TABLE `ttbsalarymaster`
  ADD CONSTRAINT `ttbsalarymaster_ibfk_1` FOREIGN KEY (`SalEmpNo`) REFERENCES `employeemaster` (`EmpNo`);
--
-- Database: `sgp`
--
CREATE DATABASE IF NOT EXISTS `sgp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sgp`;

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
(1, '2020-21', 9, 'English', 'First', 100, 33, 1, 1),
(2, '2020-21', 9, 'Gujrati  ', 'First', 100, 33, 1, 1),
(3, '2020-21', 9, 'English', 'test', 100, 12, 1, 1),
(4, '2020-21', 9, 'Gujrati  ', 'test', 100, 33, 1, 1);

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

--
-- Dumping data for table `resultmaster`
--

INSERT INTO `resultmaster` (`Resid`, `ResAcademicYear`, `ResStandard`, `ResDivision`, `ResRollNo`, `ResGRNO`, `ResSubName`, `ResStudentName`, `ResExamName`, `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus`) VALUES
(1, '2020-21', 9, 'A', '1', '80007', '  English', 'SUDANI BHAUTIK DHANJIBHAI', 'First', 100, 33, 100, 'PASS'),
(2, '2020-21', 9, 'A', '2', '10003', '  English', 'UDDHAV', 'First', 100, 33, 22, 'FAIL'),
(5, '2020-21', 9, 'A', '1', '80007', '  Gujrati  ', 'SUDANI BHAUTIK DHANJIBHAI', 'First', 100, 33, 50, 'PASS'),
(6, '2020-21', 9, 'A', '2', '10003', '  Gujrati  ', 'UDDHAV', 'First', 100, 33, 40, 'PASS'),
(9, '2020-21', 9, 'A', '1', '80007', '  English', 'SUDANI BHAUTIK DHANJIBHAI', 'test', 100, 12, 1, 'FAIL'),
(10, '2020-21', 9, 'A', '2', '10003', '  English', 'UDDHAV', 'test', 100, 12, 2, 'FAIL'),
(13, '2020-21', 9, 'A', '1', '80007', '  Gujrati  ', 'SUDANI BHAUTIK DHANJIBHAI', 'test', 100, 33, 3, 'FAIL'),
(14, '2020-21', 9, 'A', '2', '10003', '  Gujrati  ', 'UDDHAV', 'test', 100, 33, 4, 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `standardmaster`
--

CREATE TABLE `standardmaster` (
  `StdId` int(10) NOT NULL,
  `StdStandard` int(5) NOT NULL,
  `StdStandardDIV` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standardmaster`
--

INSERT INTO `standardmaster` (`StdId`, `StdStandard`, `StdStandardDIV`) VALUES
(1, 8, 'A'),
(2, 9, 'A'),
(3, 10, 'A');

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
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`date`, `StuUIDNo`, `StuGRNo`, `StuRollNo`, `StuStudentName`, `StuAcdemicyear`, `StuStandard`, `StuDiv`, `StuGender`, `StuDOB`, `StuDateOfAdmission`, `StuParentMobileNumber1`, `StuParentMobileNumber2`, `StuHouseNo`, `StuStreetName`, `StuLocation`, `StuCity`, `StuDist`, `StuBirthPlace`, `StuAadharNo`, `StuCategory`, `StuCaste`, `StuLastschoolname`, `StuBankname`, `StuBankACno`, `StuBankIFSCcode`, `StuStatus`, `StuStatusChangedDate`, `file`, `filename`, `uploadfile`, `uploadfilename`) VALUES
('2021-03-10 19:51:40', '1000', '10003', 2, 'UDDHAV', '2020-21', 9, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10004', 1, 'KEYUR', '2021-22', 10, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10005', 1, 'MAYUR', '2021-22', 12, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-04-01 06:52:16', '8908', '80007', 1, 'SUDANI BHAUTIK DHANJIBHAI', '2019-20', 9, 'A', 'MALE', '2021-04-01', '2021-04-01', '9873476546', '9872778784', '102', '703 - YOGINATH ROW H', 'SURAT', 'ANAND', '', 'SASAN', '7890654321', 'GENERAL', 'HINDU', 'AKS', 'SBI', '97889698', 'bnvy7657', 'ACTIVE', '2021-04-01', 'bg-sky.jpg', 'bg-sky.jpg', 'bg-sky.jpg', 'logo.png');

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
(6, 9, 'English', 'Compulsory', '2020-21'),
(25, 9, 'guj', 'Compulsory', '2020-21'),
(14, 9, 'Gujrati  ', 'Compulsory', '2020-21'),
(12, 9, 'Hindi', 'Compulsory', '2020-21'),
(11, 9, 'Maths', 'Compulsory', '2020-21'),
(13, 9, 'Science', 'Compulsory', '2020-21'),
(23, 10, 'Maths', 'Compulsory', '2020-21');

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

--
-- Indexes for dumped tables
--

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
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Ttid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exammaster`
--
ALTER TABLE `exammaster`
  MODIFY `ExamId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listmaster`
--
ALTER TABLE `listmaster`
  MODIFY `Sysid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `resultmaster`
--
ALTER TABLE `resultmaster`
  MODIFY `Resid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `standardmaster`
--
ALTER TABLE `standardmaster`
  MODIFY `StdId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submaster`
--
ALTER TABLE `submaster`
  MODIFY `Subid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Ttid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `acadmaster`
--

CREATE TABLE `acadmaster` (
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `AcademicYear` varchar(8) NOT NULL,
  `Standard` int(2) NOT NULL,
  `Divison` varchar(2) NOT NULL,
  `StuGRNo` int(10) NOT NULL,
  `StuStatus` varchar(10) NOT NULL,
  `StuRollNo` bigint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acadmaster`
--

INSERT INTO `acadmaster` (`date`, `AcademicYear`, `Standard`, `Divison`, `StuGRNo`, `StuStatus`, `StuRollNo`) VALUES
('2021-03-29 10:27:59', '2020-21', 8, 'A', 1000, 'ACTIVE', 1),
('2021-03-29 10:27:59', '2020-21', 9, 'A', 1001, 'ACTIVE', 2);

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
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rn` int(10) NOT NULL,
  `marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`date`, `StuUIDNo`, `StuGRNo`, `StuRollNo`, `StuStudentName`, `StuAcdemicyear`, `StuStandard`, `StuDiv`, `StuGender`, `StuDOB`, `StuDateOfAdmission`, `StuParentMobileNumber1`, `StuParentMobileNumber2`, `StuHouseNo`, `StuStreetName`, `StuLocation`, `StuCity`, `StuDist`, `StuBirthPlace`, `StuAadharNo`, `StuCategory`, `StuCaste`, `StuLastschoolname`, `StuBankname`, `StuBankACno`, `StuBankIFSCcode`, `StuStatus`, `StuStatusChangedDate`, `file`, `filename`, `uploadfile`, `uploadfilename`) VALUES
('2021-03-10 19:51:40', '1000', '10002', 1, 'BHAUTIK', '2020-21', 9, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10003', 2, 'UDDHAV', '2020-21', 9, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10004', 1, 'KEYUR', '2021-22', 10, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-03-10 19:51:40', '1000', '10005', 1, 'MAYUR', '2021-22', 12, 'A', 'male', '2021-03-16', '2021-03-16', '1234567890', '987654321', '44', '25425dgsg', 'gdrggrg', 'dgdtgtd', 'gergreg', 'fdfdge', '123456789098', 'OPEN', 'OPEN', 'nmsbn', 'sbi', ',.n,kwn', 'bah8276', 'ACTIVE', '2021-03-16', 'gdffgdgdfgggggggggggggggggggggggggggggggfgddgf', 'gdffbdfgd', 'dfgfgfdgfdfgd', 'dfgfgdgfgg'),
('2021-04-01 06:52:16', '8908', '80007', 1, 'SUDANI BHAUTIK DHANJIBHAI', '2019-20', 9, 'A', 'MALE', '2021-04-01', '2021-04-01', '9873476546', '9872778784', '102', '703 - YOGINATH ROW H', 'SURAT', 'ANAND', '', 'SASAN', '7890654321', 'GENERAL', 'HINDU', 'AKS', 'SBI', '97889698', 'bnvy7657', 'ACTIVE', '2021-04-01', 'bg-sky.jpg', 'bg-sky.jpg', 'bg-sky.jpg', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acadmaster`
--
ALTER TABLE `acadmaster`
  ADD PRIMARY KEY (`AcademicYear`,`Standard`,`Divison`,`StuGRNo`);

--
-- Indexes for table `listmaster`
--
ALTER TABLE `listmaster`
  ADD PRIMARY KEY (`Sysid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD UNIQUE KEY `rn` (`rn`,`marks`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`StuGRNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listmaster`
--
ALTER TABLE `listmaster`
  MODIFY `Sysid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Database: `test1`
--
CREATE DATABASE IF NOT EXISTS `test1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'ndbhalerao91@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'Nikhil', 'Bhalerao', 'Male', '1988-05-29', '9423979339', 'Nashik', '20141025_004121_918_Developer.png', '2018-04-30', 1),
(6, 'user', 'raj@gmail.com', 'bbcff4db4d8057800d59a68224efd87e545fa1512dfc3ef68298283fbb3b6358', 'raj', 'sharma', 'Male', '2019-01-13', '7412589636', 'pune', '', '2019-01-26', 2),
(10, 'user', 'pritam@gmail.com', '3b8c917583735a4f4e89613a88155205a64168447532fe3cec0ea21fbe639d21', 'pritam', 'kadam', 'Female', '1996-06-15', '8605812147', 'ozar (mig)', '', '2019-06-29', 4),
(11, 'user', 'pritam@gmail.com', '3b8c917583735a4f4e89613a88155205a64168447532fe3cec0ea21fbe639d21', 'pritam', 'kadam', 'Female', '2014-07-15', '7758412369', 'ozar Mig', '', '2019-07-01', 5),
(12, 'user', 'apurva@gmail.com', '05b358e1e7d06838d7da30d5dc5a0c4e7fd1522eaf974ffc7dd0f4332ab6b271', 'apurva', 'Bari', 'Female', '2011-11-24', '7758412369', 'nashik', 'par.jpg', '2019-07-01', 7),
(13, 'user', 'priya@gmail.com', '57cb0ae2533339741fd652a66fe0edea7c3733d8e210934174e05a0792e99677', 'priya', 'khade', 'Female', '2016-08-10', '5446799664', 'niphad', 'Jellyfish.jpg', '2019-07-01', 4),
(14, 'user', '', '241992a37c6a7a7044edca190836547108001676d2f586efa0f1923da5372454', 'pritam', '', '', '', '', '', '', '2019-07-01', 0),
(15, 'user', '', '241992a37c6a7a7044edca190836547108001676d2f586efa0f1923da5372454', 'maths', '', '', '', '', '', '', '2019-07-01', 0),
(16, 'user', 'kadampritam17@gmail.com', '3b8c917583735a4f4e89613a88155205a64168447532fe3cec0ea21fbe639d21', 'pritam', 'kadam', 'Female', '1996-06-15', '8605812147', 'ozar mig', 'apple.jpg', '2019-09-20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `allot`
--

CREATE TABLE `allot` (
  `id` int(60) NOT NULL,
  `class_id` int(50) NOT NULL,
  `room_type_id` int(60) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `exam_id` int(50) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `allot_student`
--

CREATE TABLE `allot_student` (
  `id` int(100) NOT NULL,
  `allot_id` int(60) NOT NULL,
  `exam_id` int(50) NOT NULL,
  `exam_date` date NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `room_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(60) NOT NULL,
  `class_id` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `exam_date` date NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'Exam Hall Management', 'EHM', 'images.jpg', 'Upturn India Technology', 'INR', 'â‚¹', 'images.jpg', '', 'background-form-login-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(30) NOT NULL,
  `type_id` int(60) NOT NULL,
  `name` varchar(30) NOT NULL,
  `strenght` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(30) NOT NULL,
  `roomname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `date` datetime NOT NULL,
  `StuUIDNo` varchar(13) NOT NULL,
  `StuGRNo` varchar(30) NOT NULL,
  `StuStudentRollno` int(10) NOT NULL,
  `StuStudentName` varchar(150) NOT NULL,
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
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`date`, `StuUIDNo`, `StuGRNo`, `StuStudentRollno`, `StuStudentName`, `StuStandard`, `StuDiv`, `StuGender`, `StuDOB`, `StuDateOfAdmission`, `StuParentMobileNumber1`, `StuParentMobileNumber2`, `StuHouseNo`, `StuStreetName`, `StuLocation`, `StuCity`, `StuDist`, `StuBirthPlace`, `StuAadharNo`, `StuCategory`, `StuCaste`, `StuLastschoolname`, `StuBankname`, `StuBankACno`, `StuBankIFSCcode`, `StuStatus`, `StuStatusChangedDate`, `file`, `filename`, `uploadfile`, `uploadfilename`) VALUES
('2021-03-02 11:34:08', 'u01', '', 3, 'sdffsda', 10, 'A', 'male', '2021-03-10', '2021-03-31', '454545', '565656', '001', 'dftgr', 'gdf', 'sfdsd', 'dcdf', 'fsdfs', '100101', 'SC', 'sc', 'fgtert', 'ggfdg', 'dgegt', 'dfdef', 'a', '2021-03-10', '', '', '', ''),
('2021-03-18 12:57:06', '001', '010', 2, 'AQSDAS', 9, 'A', 'MALE', '2021-03-18', '2021-03-18', '7575812530', '7575757575', '0001', 'anand', 'fdgfdg', 'ban', 'fgvfdg', 'GFH', '112212121212', 'GENERAL', 'SC', 'SRD', 'DSFDS', '1122112', '245', 'ACTIVE', '2021-03-18', 'module_table_bottom.png', 'module_table_top.png', 'module_table_bottom.png', 'module_table_top.png'),
('2021-03-18 13:07:27', '011', '012', 2, 'SAG', 9, 'D', 'MALE', '2021-04-10', '2021-03-18', '7575757575', '7575812530', '0001', 'sssssssssssssssss', 'fdgfdg', 'sssssssssssss', 'fgvfdg', 'GFH', '11', 'GENERAL', 'SC', 'SRD', 'DSFDS', '011', '245', 'ACTIVE', '2021-03-18', 'module_table_bottom.png', 'module_table_top.png', 'module_table_bottom.png', 'module_table_top.png'),
('2021-03-18 13:10:47', '0021', '0012', 0, 'AQSDAS', 12, 'A', 'MALE', '2021-03-18', '2021-03-18', '7575757575', '7575757575', '0001', 'sssssssssssssssss', 'fdgfdg', 'sssssssssssss', 'fgvfdg', 'GFH', '100', 'GENERAL', 'SC', 'SRD', 'DSFDS', '000', '245', 'ACTIVE', '2021-03-18', 'module_table_bottom.png', 'module_table_bottom.png', 'module_table_top.png', 'module_table_bottom.png'),
('2021-03-18 13:13:03', '001', '001', 0, 'AQSDAS', 11, 'A', 'MALE', '2021-03-18', '2021-03-18', '7575757575', '7575757575', '0001', 'vryg', 'fdgfdg', 'Bombsay', 'fgvfdg', 'GFH', '11111', 'GENERAL', 'SC', 'SRD', 'DSFDS', '12212121', '245', 'ACTIVE', '2021-03-18', 'module_table_bottom.png', 'module_table_top.png', 'module_table_top.png', 'module_table_bottom.png'),
('2021-03-18 13:15:27', '011', '003', 0, 'AQSDAS', 11, 'C', 'MALE', '2021-03-18', '2021-03-18', '7575757575', '7575757575', '0001', 'sssssssssssssssss', 'fdgfdg', 'sssssssssssss', 'fgvfdg', 'GFH', '1111', 'GENERAL', 'SC', 'SRD', 'DSFDS', '01111', '245', 'ACTIVE', '2021-03-18', 'module_table_top.png', 'module_table_bottom.png', 'module_table_bottom.png', 'module_table_bottom.png'),
('2021-03-18 13:17:30', '0111', '1000', 0, 'AQSDAS', 11, 'B', 'MALE', '2021-03-18', '2021-03-18', '7575757575', '7575757575', '0001', 'sssssssssssssssss', 'fdgfdg', 'sssssssssssss', 'fgvfdg', 'GFH', '12121', 'GENERAL', 'SC', 'SRD', 'DSFDS', '01545', '245', 'ACTIVE', '2021-03-18', 'module_table_bottom.png', 'module_table_top.png', 'module_table_bottom.png', 'module_table_top.png'),
('2021-03-18 13:23:46', '001', '002', 2, 'AQSDAS', 9, 'A', 'MALE', '2021-03-18', '2021-03-18', '7575812530', '7575757575', '0001', 'anand', 'fdgfdg', 'ban', 'fgvfdg', 'GFH', '111', 'GENERAL', 'SC', 'SRD', 'DSFDS', '0001', '245', 'ACTIVE', '2021-03-18', 'module_table_bottom.png', 'module_table_top.png', 'module_table_bottom.png', 'module_table_top.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(30) NOT NULL,
  `classname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_config`
--

CREATE TABLE `tbl_email_config` (
  `e_id` int(21) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_config`
--

INSERT INTO `tbl_email_config` (`e_id`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, '<student register> ', 'mail.gmail.com', 587, 'ndbhalerao91@gmail.com', 'abc@123', 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(4, 'user1', 'user1'),
(5, 'user2', 'user2'),
(6, 'user3', 'class nd sub adding'),
(7, 'user4', 'user permissin'),
(8, 'liu', 'liu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `operation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`id`, `name`, `display_name`, `operation`) VALUES
(1, 'manage_student', 'Manage Student', 'manage_student'),
(2, 'add_student', 'Add Student', 'add_student'),
(3, 'edit_student', 'Edit Student', 'edit_student'),
(4, 'delete_student', 'Delete Student', 'delete_student'),
(5, 'manage_teacher', 'Manage Teacher', 'manage_teacher'),
(6, 'add_teacher', 'Add Teacher', 'add_teacher'),
(7, 'edit_teacher', 'Edit Teacher', 'edit_teacher'),
(8, 'delete_teacher', 'Delete Teacher', 'delete_teacher'),
(9, 'manage_subject', 'Manage Subject', 'manage_subject'),
(10, 'add_subject', 'Add Subject', 'add_subject'),
(11, 'edit_subject', 'Edit Subject', 'edit_subject'),
(12, 'delete_subject', 'Delete Subject', 'delete_subject'),
(13, 'manage_class', 'Manage Class', 'manage_class'),
(14, 'add_class', 'Add Class', 'add_class'),
(15, 'edit_class', 'Edit Class', 'edit_class'),
(16, 'delete_class', 'Delete Class', 'delete_class'),
(21, 'manage_user', 'Manage User', 'manage_user'),
(22, 'add_user', 'Add User', 'add_user'),
(23, 'edit_user', 'Edit User', 'edit_user'),
(24, 'delete_user', 'Delete User', 'delete_user'),
(25, 'manage_exam', 'Manage Exam', 'manage_exam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_role`
--

CREATE TABLE `tbl_permission_role` (
  `id` int(30) NOT NULL,
  `permission_id` int(30) NOT NULL,
  `role_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_role`
--

INSERT INTO `tbl_permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(27, 25, 1),
(28, 21, 7),
(29, 22, 7),
(30, 23, 7),
(31, 24, 7),
(32, 1, 5),
(33, 2, 5),
(34, 10, 5),
(35, 14, 5),
(36, 1, 4),
(37, 5, 4),
(38, 6, 4),
(39, 9, 4),
(40, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_config`
--

CREATE TABLE `tbl_sms_config` (
  `smsid` int(20) NOT NULL,
  `senderid` int(20) NOT NULL,
  `sms_username` varchar(30) NOT NULL,
  `sms_password` varchar(20) NOT NULL,
  `auth_key` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms_config`
--

INSERT INTO `tbl_sms_config` (`smsid`, `senderid`, `sms_username`, `sms_password`, `auth_key`) VALUES
(1, 101, 'username', 'password', 'authkey');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `sfname` varchar(30) NOT NULL,
  `slname` varchar(30) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `sgender` varchar(30) NOT NULL,
  `sdob` date NOT NULL,
  `scontact` int(50) NOT NULL,
  `saddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(30) NOT NULL,
  `class_id` int(60) NOT NULL,
  `subjectname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `id` int(50) NOT NULL,
  `tfname` varchar(50) NOT NULL,
  `tlname` varchar(50) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tgender` varchar(50) NOT NULL,
  `tdob` date NOT NULL,
  `tcontact` int(50) NOT NULL,
  `taddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allot`
--
ALTER TABLE `allot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allot_student`
--
ALTER TABLE `allot_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_website`
--
ALTER TABLE `manage_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_config`
--
ALTER TABLE `tbl_email_config`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sms_config`
--
ALTER TABLE `tbl_sms_config`
  ADD PRIMARY KEY (`smsid`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `allot`
--
ALTER TABLE `allot`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allot_student`
--
ALTER TABLE `allot_student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_website`
--
ALTER TABLE `manage_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_email_config`
--
ALTER TABLE `tbl_email_config`
  MODIFY `e_id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_sms_config`
--
ALTER TABLE `tbl_sms_config`
  MODIFY `smsid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- Database: `test3`
--
CREATE DATABASE IF NOT EXISTS `test3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test3`;

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `Sysid` int(3) NOT NULL,
  `Createdate` date NOT NULL DEFAULT current_timestamp(),
  `SyStatus` varchar(5) NOT NULL,
  `EmpNo` varchar(15) NOT NULL,
  `EmpNamePrefix` varchar(5) DEFAULT NULL,
  `EmpFirstName` varchar(20) NOT NULL,
  `EmpMidName` varchar(20) NOT NULL,
  `EmpLastName` varchar(20) NOT NULL,
  `EmpFullName` varchar(20) NOT NULL,
  `EmpDesignation` varchar(20) NOT NULL,
  `EmpDOB` date NOT NULL,
  `EmpGender` varchar(5) NOT NULL,
  `EmpAddress1` varchar(150) NOT NULL,
  `EmpAddress2` varchar(150) NOT NULL,
  `EmpState` varchar(15) NOT NULL,
  `EmpCity` varchar(15) NOT NULL,
  `EmpPinCode` bigint(8) NOT NULL,
  `EmpContactNo` bigint(10) NOT NULL,
  `EmpEmailID` varchar(25) NOT NULL,
  `EmpDoj` date NOT NULL,
  `EmpDateofLeaving` date NOT NULL,
  `EmpCategory` varchar(10) NOT NULL,
  `EmpPan` varchar(10) NOT NULL,
  `EmpStatus` varchar(10) NOT NULL,
  `EmpLastStatusChangeDate` date NOT NULL DEFAULT current_timestamp(),
  `EmpBankName` varchar(15) NOT NULL,
  `EmpBankIFSC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`Sysid`, `Createdate`, `SyStatus`, `EmpNo`, `EmpNamePrefix`, `EmpFirstName`, `EmpMidName`, `EmpLastName`, `EmpFullName`, `EmpDesignation`, `EmpDOB`, `EmpGender`, `EmpAddress1`, `EmpAddress2`, `EmpState`, `EmpCity`, `EmpPinCode`, `EmpContactNo`, `EmpEmailID`, `EmpDoj`, `EmpDateofLeaving`, `EmpCategory`, `EmpPan`, `EmpStatus`, `EmpLastStatusChangeDate`, `EmpBankName`, `EmpBankIFSC`) VALUES
(0, '0000-00-00', '', '101', 'mr', 'Akash', 'aja', 'Rana', 'Rana Akash', 'manger', '0000-00-00', 'male', 'edxcvrtvb', 'sfghretyhu', 'gujk', 'ands', 33333, 45154552485, 'kjajasjhsdjh@hjsdh', '2021-02-08', '2021-02-02', 'asxc', 'dcwr', 'A', '0000-00-00', 'uvo', 'hdjkjed689');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmpNo`);
--
-- Database: `test4`
--
CREATE DATABASE IF NOT EXISTS `test4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test4`;

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
  `EmpDOB` varchar(20) NOT NULL,
  `EmpAddress1` varchar(150) NOT NULL,
  `EmpAddress2` varchar(150) NOT NULL,
  `EmpState` varchar(15) NOT NULL,
  `EmpCity` varchar(15) NOT NULL,
  `EmpPinCode` decimal(8,0) NOT NULL,
  `EmpContactNo` decimal(10,0) NOT NULL,
  `EmpEmailID` varchar(25) NOT NULL,
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
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmpNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

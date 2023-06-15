-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 10:55 PM
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
-- Database: `omrs_db_context`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `Admin_Id` varchar(20) NOT NULL,
  `UserAcc_Id` varchar(20) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminGender` varchar(10) NOT NULL,
  `adminDepartmentName` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPhoneNo` varchar(20) NOT NULL,
  `adminAge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`Admin_Id`, `UserAcc_Id`, `adminName`, `adminGender`, `adminDepartmentName`, `adminEmail`, `adminPhoneNo`, `adminAge`) VALUES
('020720060541', '001', 'DANIAL WAFI BIN RAMLI', 'Lelaki', 'Jabatan Agama Islam Negeri Pahang', 'wafiy@gmail.com', '019-89014575', 21);

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `Advisor_Id` int(11) NOT NULL,
  `Staff_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`Advisor_Id`, `Staff_Id`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `applicantinfo`
--

CREATE TABLE `applicantinfo` (
  `Applicant_IC` varchar(14) NOT NULL,
  `UserAcc_Id` varchar(20) NOT NULL,
  `appName` varchar(50) NOT NULL,
  `appGender` varchar(10) NOT NULL,
  `appPhoneNo` varchar(20) NOT NULL,
  `appAddress` varchar(100) NOT NULL,
  `appEmail` varchar(50) NOT NULL,
  `appAge` int(11) NOT NULL,
  `appRace` varchar(30) NOT NULL,
  `appNationality` varchar(30) NOT NULL,
  `appEduLevel` varchar(30) NOT NULL,
  `appOKUStatus` varchar(20) NOT NULL,
  `appStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultationapplication`
--

CREATE TABLE `consultationapplication` (
  `CA_Id` int(11) NOT NULL,
  `Request_Id` varchar(11) NOT NULL,
  `CAdetails` text DEFAULT NULL,
  `CAdate` datetime DEFAULT NULL,
  `CAstatus` varchar(30) DEFAULT NULL,
  `Staff_Id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultationapplication`
--

INSERT INTO `consultationapplication` (`CA_Id`, `Request_Id`, `CAdetails`, `CAdate`, `CAstatus`, `Staff_Id`) VALUES
(45, '1', 'bjdnmskcdsfvdbg', '2023-06-11 01:57:04', 'Dihantar', NULL),
(46, '1', 'new', '2023-06-11 05:24:32', 'Belum Hantar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consultationsession`
--

CREATE TABLE `consultationsession` (
  `CS_Id` int(11) NOT NULL,
  `Advisor_Id` int(11) DEFAULT NULL,
  `CA_Id` int(11) DEFAULT NULL,
  `CSdate` date DEFAULT NULL,
  `CStime` time DEFAULT NULL,
  `CSplace` text DEFAULT NULL,
  `CSstatus` varchar(30) DEFAULT NULL,
  `CSdetails` text DEFAULT NULL,
  `CScreated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultationsession`
--

INSERT INTO `consultationsession` (`CS_Id`, `Advisor_Id`, `CA_Id`, `CSdate`, `CStime`, `CSplace`, `CSstatus`, `CSdetails`, `CScreated_date`) VALUES
(5, NULL, 45, NULL, NULL, NULL, 'Diterima', NULL, '2023-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `Staff_Id` varchar(20) NOT NULL,
  `UserAcc_Id` varchar(20) NOT NULL,
  `staffName` varchar(50) NOT NULL,
  `staffGender` varchar(10) NOT NULL,
  `staffDepartmentName` varchar(50) NOT NULL,
  `staffEmail` varchar(50) NOT NULL,
  `staffPhoneNo` varchar(20) NOT NULL,
  `staffAge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `UserAcc_Id` varchar(20) NOT NULL,
  `userIC` varchar(14) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserAcc_Id`, `userIC`, `userPassword`, `userType`) VALUES
('001', '020720060541', '12345', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD KEY `UserAcc_Id` (`UserAcc_Id`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`Advisor_Id`);

--
-- Indexes for table `applicantinfo`
--
ALTER TABLE `applicantinfo`
  ADD PRIMARY KEY (`Applicant_IC`),
  ADD KEY `UserAcc_Id` (`UserAcc_Id`);

--
-- Indexes for table `consultationapplication`
--
ALTER TABLE `consultationapplication`
  ADD PRIMARY KEY (`CA_Id`),
  ADD KEY `Request_Id` (`Request_Id`);

--
-- Indexes for table `consultationsession`
--
ALTER TABLE `consultationsession`
  ADD PRIMARY KEY (`CS_Id`),
  ADD KEY `consultationsession_ibfk_1` (`Advisor_Id`),
  ADD KEY `consultationsession_ibfk_2` (`CA_Id`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`Staff_Id`),
  ADD KEY `UserAcc_Id` (`UserAcc_Id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`UserAcc_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `Advisor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consultationapplication`
--
ALTER TABLE `consultationapplication`
  MODIFY `CA_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `consultationsession`
--
ALTER TABLE `consultationsession`
  MODIFY `CS_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD CONSTRAINT `admininfo_ibfk_1` FOREIGN KEY (`UserAcc_Id`) REFERENCES `useraccount` (`UserAcc_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicantinfo`
--
ALTER TABLE `applicantinfo`
  ADD CONSTRAINT `applicantinfo_ibfk_1` FOREIGN KEY (`UserAcc_Id`) REFERENCES `useraccount` (`UserAcc_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consultationsession`
--
ALTER TABLE `consultationsession`
  ADD CONSTRAINT `consultationsession_ibfk_1` FOREIGN KEY (`Advisor_Id`) REFERENCES `advisor` (`Advisor_Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `consultationsession_ibfk_2` FOREIGN KEY (`CA_Id`) REFERENCES `consultationapplication` (`CA_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD CONSTRAINT `staffinfo_ibfk_1` FOREIGN KEY (`UserAcc_Id`) REFERENCES `useraccount` (`UserAcc_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicantinfo`
--

CREATE TABLE `applicantinfo` (
  `Applicant_IC` varchar(20) NOT NULL,
  `UserAcc_Id` varchar(20) DEFAULT NULL,
  `appName` varchar(50) NOT NULL,
  `appGender` varchar(10) NOT NULL,
  `appPhoneNo` varchar(20) NOT NULL,
  `appAddress` varchar(50) NOT NULL,
  `appEmail` varchar(50) NOT NULL,
  `appAge` int(11) NOT NULL,
  `appRace` varchar(30) NOT NULL,
  `appNationality` varchar(30) NOT NULL,
  `appEduLevel` varchar(50) NOT NULL,
  `appOKUStatus` varchar(20) NOT NULL,
  `appStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `UserAcc_Id` varchar(20) NOT NULL,
  `userIC` varchar(14) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserAcc_Id`, `userIC`, `userPassword`, `userType`) VALUES
('001', '020715060540', '12345', 'Admin');

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
-- Indexes for table `applicantinfo`
--
  ALTER TABLE `applicantinfo`
  ADD PRIMARY KEY (`Applicant_IC`),
  ADD KEY `UserAcc_Id` (`UserAcc_Id`);

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
-- Constraints for table `staffinfo`
--
  ALTER TABLE `staffinfo`
  ADD CONSTRAINT `staffinfo_ibfk_1` FOREIGN KEY (`UserAcc_Id`) REFERENCES `useraccount` (`UserAcc_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
  COMMIT;


CREATE TABLE `trying` (
  `Fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trying`
--

INSERT INTO `trying` (`Fullname`) VALUES
('iman'),
('kiki'),
('haloo'),
('haloo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

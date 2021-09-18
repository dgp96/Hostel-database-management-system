-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 08:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_hostel_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `authoritydet`
--

CREATE TABLE `authoritydet` (
  `ContactNo` varchar(15) NOT NULL,
  `AuthorityID` varchar(15) NOT NULL,
  `Department` varchar(7) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Designation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `StudentID` varchar(50) NOT NULL,
  `Comment` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `StudentID` varchar(50) NOT NULL,
  `Complaint` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `ScoreCard` tinyint(1) NOT NULL,
  `CasteCertificate` tinyint(1) NOT NULL,
  `HostelFeeReceipt` tinyint(1) NOT NULL,
  `MessFeeReceipt` tinyint(1) NOT NULL,
  `AddressProof` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostelroom`
--

CREATE TABLE `hostelroom` (
  `Block` varchar(7) NOT NULL,
  `RoomNo` varchar(7) NOT NULL,
  `AuthorityID` varchar(15) NOT NULL,
  `Floor` int(11) NOT NULL,
  `NoOfOccupants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplications`
--

CREATE TABLE `leaveapplications` (
  `StudentID` varchar(15) NOT NULL,
  `LeaveDuration` int(11) NOT NULL,
  `ReasonForLeave` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `missingitems`
--

CREATE TABLE `missingitems` (
  `Description` varchar(127) NOT NULL,
  `StudentID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdet`
--

CREATE TABLE `studentdet` (
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `RegistrationID` varchar(20) NOT NULL,
  `Caste` varchar(20) NOT NULL,
  `Branch` varchar(8) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `AcademicYear` int(11) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Residence` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `MessLog` varchar(255) NOT NULL,
  `Student_psswd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdet`
--

INSERT INTO `studentdet` (`FirstName`, `MiddleName`, `LastName`, `DOB`, `RegistrationID`, `Caste`, `Branch`, `EmailID`, `AcademicYear`, `PhoneNumber`, `Fees`, `Residence`, `Area`, `City`, `MessLog`, `Student_psswd`) VALUES
('Parth', 'Nirav', 'Panchmia', '0000-00-00', '141080037', 'Hindu', 'IT', 'parthpanchmia@gmail.com', 2013, '8976240878', 65536, 'Springqueen', 'Santacruz', 'Mumbai', '', 'dc40991ef20d60d97ebc5b1edafcddb8');

-- --------------------------------------------------------

--
-- Table structure for table `visitorslog`
--

CREATE TABLE `visitorslog` (
  `RoomNo` varchar(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `PersonToVisit` varchar(50) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `StudentYear` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authoritydet`
--
ALTER TABLE `authoritydet`
  ADD PRIMARY KEY (`AuthorityID`);

--
-- Indexes for table `hostelroom`
--
ALTER TABLE `hostelroom`
  ADD PRIMARY KEY (`RoomNo`);

--
-- Indexes for table `studentdet`
--
ALTER TABLE `studentdet`
  ADD PRIMARY KEY (`RegistrationID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hostelroom`
--
ALTER TABLE `hostelroom`
  ADD CONSTRAINT `hostelroom_ibfk_1` FOREIGN KEY (`RoomNo`) REFERENCES `studentdet` (`RegistrationID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

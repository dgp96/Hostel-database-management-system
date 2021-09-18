SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------



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



CREATE TABLE `comments` (
  `RegID` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `NameOfSubmitter` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Comment` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



CREATE TABLE `complaints` (
  `RegID` varchar(15) NOT NULL,
  `RoomNo` int(11) NOT NULL,
  `BlockNo` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ResolvedBy` varchar(50) NOT NULL,
  `Complaint` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



CREATE TABLE `documents` (
  `ScoreCard` tinyint(1) NOT NULL,
  `CasteCertificate` tinyint(1) NOT NULL,
  `HostelFeeReceipt` tinyint(1) NOT NULL,
  `MessFeeReceipt` tinyint(1) NOT NULL,
  `AddressProof` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



CREATE TABLE `hostelroom` (
  `Block` varchar(7) NOT NULL,
  `RoomNo` varchar(7) NOT NULL,
  `AuthorityID` varchar(15) NOT NULL,
  `Floor` int(11) NOT NULL,
  `NoOfOccupants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



CREATE TABLE `leaveapplications` (
  `ApplicationID` varchar(15) NOT NULL,
  `LeaveDuration` int(11) NOT NULL,
  `ReasonForLeave` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



CREATE TABLE `missingitems` (
  `Description` varchar(127) NOT NULL,
  `FoundBy` varchar(50) NOT NULL,
  `FoundWhere` varchar(127) NOT NULL,
  `ReturnedTo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



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
  `Address` varchar(127) NOT NULL,
  `MessLog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



CREATE TABLE `visitorslog` (
  `RoomNo` int(11) NOT NULL,
  `RegistrationID` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `PersonToVisit` varchar(50) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Purpose` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




ALTER TABLE `authoritydet`
  ADD PRIMARY KEY (`AuthorityID`);


ALTER TABLE `hostelroom`
  ADD PRIMARY KEY (`RoomNo`);


ALTER TABLE `studentdet`
  ADD PRIMARY KEY (`RegistrationID`);


ALTER TABLE `visitorslog`
  ADD PRIMARY KEY (`RegistrationID`);




ALTER TABLE `hostelroom`
  ADD CONSTRAINT `hostelroom_ibfk_1` FOREIGN KEY (`RoomNo`) REFERENCES `studentdet` (`RegistrationID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

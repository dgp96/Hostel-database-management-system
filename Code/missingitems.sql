-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2016 at 08:04 PM
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
-- Table structure for table `missingitems`
--

CREATE TABLE `missingitems` (
  `primkey` int(11) NOT NULL,
  `Description` varchar(127) NOT NULL,
  `StudentID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missingitems`
--

INSERT INTO `missingitems` (`primkey`, `Description`, `StudentID`) VALUES
(5, 'wdsxe', '141080015'),
(6, 'gtruy', '141080016'),
(7, 'ewdwe', '141080017'),
(8, '4trfe', '141080018'),
(9, 'erf', '141080019'),
(10, 'derfd', '141080020'),
(11, 'wefdc', '141080021'),
(12, 'rd', '141080022'),
(13, 'ref', '141080023'),
(14, '4e', '141080024'),
(15, '5hygtrfd', '141080025'),
(16, '4ref', '141080026'),
(17, 'erwd', '141080027'),
(18, 'yrhg', '141080028'),
(19, 'erfrd', '141080029'),
(20, 'wet', '141080030'),
(21, '45t', '141080031'),
(22, '64yer', '141080033'),
(23, '34trfe', '141080034'),
(24, 'erf', '141080035'),
(25, '56jutr', '141080036'),
(26, 'erfde', '141080037'),
(27, '6ytdr', '141080038'),
(28, '43th56y', '141080039'),
(29, '4trfe', '141080040'),
(30, '45y', '141080041'),
(31, 'thf', '141080042'),
(32, 'tyrfgrtc', '141080043');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `missingitems`
--
ALTER TABLE `missingitems`
  ADD PRIMARY KEY (`primkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `missingitems`
--
ALTER TABLE `missingitems`
  MODIFY `primkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

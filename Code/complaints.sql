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
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `primkey` int(11) NOT NULL,
  `StudentID` varchar(15) NOT NULL,
  `Complaint` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`primkey`, `StudentID`, `Complaint`) VALUES
(1, '141080009', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, '141080010', 'Nulla bibendum nibh non eros faucibus, vitae placerat libero eleifend.'),
(3, '141080011', 'Phasellus at nulla orci.'),
(4, '141080012', 'Vivamus faucibus ex quis leo mollis, id blandit nunc auctor.'),
(6, '141080014', 'Proin enim neque, iaculis faucibus nisi sit amet, scelerisque faucibus odio.'),
(7, '141080015', 'Praesent id dapibus diam.'),
(8, '141080016', 'Suspendisse scelerisque risus vel efficitur tincidunt.'),
(9, '141080017', 'Maecenas posuere malesuada faucibus.'),
(10, '141080018', 'Nunc lacinia semper ligula vel placerat.'),
(11, '141080019', 'Mauris luctus ligula id nisi molestie, nec bibendum augue placerat.'),
(12, '141080020', 'Fusce nisi neque, placerat in consequat non, suscipit et est.'),
(13, '141080021', 'Quisque commodo tellus eu ipsum ornare maximus.'),
(14, '141080022', 'Suspendisse pharetra vel est nec tempus.'),
(15, '141080023', 'Sed nec lacus odio.'),
(16, '141080024', 'Phasellus volutpat lobortis metus, vitae rhoncus nibh ultricies et.'),
(17, '141080025', 'Donec quam nunc, dignissim eget enim ut, rutrum placerat ligula.'),
(18, '141080026', 'Quisque faucibus arcu vitae rhoncus elementum.'),
(19, '141080027', 'Nulla facilisi.'),
(20, '141080028', 'Suspendisse malesuada nisi et fermentum sagittis.'),
(21, '141080029', 'Vestibulum sodales viverra nisi.'),
(22, '141080030', 'Etiam libero velit, blandit at mauris nec, lacinia tristique erat.'),
(23, '141080031', 'Vestibulum efficitur pellentesque mi ac dapibus.'),
(24, '141080032', 'Integer pulvinar pharetra fringilla.'),
(25, '141080033', 'Mauris porta euismod tellus non lacinia.'),
(26, '141080034', 'In ultricies tempor vulputate.'),
(27, '141080035', 'In in elit elementum, viverra arcu sit amet, rhoncus justo.'),
(28, '141080036', 'Aenean pellentesque feugiat consequat.'),
(29, '141080037', 'Sed sed feugiat felis, nec interdum nulla.'),
(30, '141080038', 'Sed pharetra lorem nibh, a rutrum eros commodo id.'),
(31, '141080039', 'Donec mattis et diam eget euismod.'),
(32, '141080040', 'Aenean risus tellus, efficitur id dolor eu, tincidunt volutpat tortor.'),
(33, '141080041', 'Vivamus nec nisi et sem hendrerit pretium sed a lacus.'),
(34, '141080042', 'Sed tempus vel nunc vel imperdiet.'),
(35, '141080043', 'Nulla ut elementum urna, sit amet iaculis tortor.'),
(36, '141080044', 'Etiam sodales vitae risus sit amet vehicula.'),
(37, '141080045', 'Donec lacinia sed neque id mollis.'),
(38, '141080046', 'Pellentesque ex ligula, pharetra sit amet cursus at, aliquam vel ante.'),
(39, '141080047', 'Pellentesque nec nisi arcu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`primkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `primkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

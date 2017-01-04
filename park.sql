-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 06:35 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `continue`
--

CREATE TABLE `continue` (
  `id_cont` int(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infraction`
--

CREATE TABLE `infraction` (
  `id_infr` int(50) NOT NULL,
  `name_infr` varchar(255) NOT NULL,
  `type_infr` varchar(255) NOT NULL,
  `Date_infr` date NOT NULL,
  `picture` varchar(255) NOT NULL,
  `plaque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id_par` int(50) NOT NULL,
  `range` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date_par` date NOT NULL,
  `Today` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_stud` int(50) NOT NULL,
  `name_stud` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `plaque` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_stud`, `name_stud`, `picture`, `password`, `plaque`, `id`) VALUES
(1, 'jhagsf', '', '5215', '', '12'),
(2, 'jkafku', 'upload/??.jpg', '355', '25hdh', '15'),
(3, 'jkafku', 'upload/????? (1).jpg', '3555', '25hdh', '152'),
(4, 'jkafkulahsi', 'upload/fascyj.jpg', '3555', '25hdh', '1522'),
(5, 'eid', 'upload/tudyl.jpg', '1417', '1294eid', '12347754'),
(6, 'sofian', 'upload/sofi.jpg', '1535', 'hgd245', '23577'),
(7, 'hgdyu', '', 'uthydrtu', 'sy', 'dy5w'),
(8, '', '', '', 'yyyy3', ''),
(9, '', '', '', 'yyyy36', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', 'eryey', ''),
(13, '', '', '', '', ''),
(14, '', '', '', 'eryery', ''),
(15, '', '', '', 'eryery', ''),
(16, '', '', '', 'eryery', ''),
(17, 'trhr', 'upload/uydut.jpg', '345646', 'thrth', 'erhye'),
(18, '', '', '', '', ''),
(19, 'trhr', 'upload/uydut.jpg', '345646', 'thrth', 'erhye'),
(20, 'trhr', 'upload/uydut.jpg', '345646', 'thrth', 'erhye'),
(21, '', '', '', '', ''),
(22, 'wrr', '', 'erhe5', 'erhyh', '5y3yh'),
(23, '', '', '', 'eryhey', ''),
(24, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `continue`
--
ALTER TABLE `continue`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indexes for table `infraction`
--
ALTER TABLE `infraction`
  ADD PRIMARY KEY (`id_infr`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id_par`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_stud`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `continue`
--
ALTER TABLE `continue`
  MODIFY `id_cont` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `infraction`
--
ALTER TABLE `infraction`
  MODIFY `id_infr` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `id_par` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_stud` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 11:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `continue`
--

CREATE TABLE IF NOT EXISTS `continue` (
  `id_cont` int(50) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cont`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `infraction`
--

CREATE TABLE IF NOT EXISTS `infraction` (
  `id_infr` int(50) NOT NULL AUTO_INCREMENT,
  `name_infr` varchar(255) NOT NULL,
  `type_infr` varchar(255) NOT NULL,
  `Date_infr` date NOT NULL,
  `picture` varchar(255) NOT NULL,
  `plaque` varchar(255) NOT NULL,
  PRIMARY KEY (`id_infr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `infraction`
--

INSERT INTO `infraction` (`id_infr`, `name_infr`, `type_infr`, `Date_infr`, `picture`, `plaque`) VALUES
(1, 'thyt', 'type_infr', '0000-00-00', '', '5442'),
(2, 'thytebe', 'type_infr', '0000-00-00', '', '5442346');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE IF NOT EXISTS `parking` (
  `id_par` int(50) NOT NULL AUTO_INCREMENT,
  `range` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date_par` date NOT NULL,
  `Today` varchar(255) NOT NULL,
  PRIMARY KEY (`id_par`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id_par`, `range`, `picture`, `date_par`, `Today`) VALUES
(1, 'd', '', '0000-00-00', 'deere'),
(2, 'dt', '', '0000-00-00', 'deerefrt'),
(3, 'dtrtjrj', '', '0000-00-00', 'deerefrt');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id_stud` int(50) NOT NULL AUTO_INCREMENT,
  `name_stud` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `plaque` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  PRIMARY KEY (`id_stud`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

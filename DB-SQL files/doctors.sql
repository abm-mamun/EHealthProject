-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 05:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_info`
--

CREATE TABLE IF NOT EXISTS `doc_info` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Speciality` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_info`
--

INSERT INTO `doc_info` (`id`, `Name`, `Email`, `PhoneNumber`, `Speciality`, `Address`) VALUES
(1, 'Md Abdullah Al Mamun', 'mamun.offcl@gmail.com', 1981961103, 'Medicine', 'House-44,Road-06,sector-09'),
(2, 'asd', 'asd@gmail.com', 1684631819, 'Surgery', 'assdsadasdsa'),
(3, 'Dr Niaz', 'niaz@gmail.com', 1787878789, 'Medicine', 'Mymensingh'),
(4, 'ifti', 'ifti@gmail.com', 1672791818, 'Medicine', 'Uttara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_info`
--
ALTER TABLE `doc_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_info`
--
ALTER TABLE `doc_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

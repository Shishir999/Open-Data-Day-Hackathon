-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 12:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `motherreg`
--

CREATE TABLE `motherreg` (
  `motherID` int(100) NOT NULL,
  `mName` text NOT NULL,
  `mdob` date NOT NULL,
  `address` text NOT NULL,
  `mobilenumber` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `deliveryDate` date NOT NULL,
  `vaccine` text NOT NULL,
  `district` text NOT NULL,
  `deliveryPlace` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherreg`
--

INSERT INTO `motherreg` (`motherID`, `mName`, `mdob`, `address`, `mobilenumber`, `email`, `deliveryDate`, `vaccine`, `district`, `deliveryPlace`) VALUES
(1, '', '2017-02-06', 'aa', 0, 'aryan@icomdroid.com', '2017-02-07', 'aaa', 'Lalitpur', 'aa'),
(2, 'Shishir', '2017-02-02', 'Chabel', 98499, 'shishir@sochware.com', '2017-02-24', 'HIV AIDS', 'Kathmandu', 'Thapathali'),
(7, 'abc', '0012-12-12', 'abc', 0, 'abc@xyz.com', '0121-12-12', 'mn', 'Lalitpur', 'abc'),
(8, 'sas', '0121-12-12', 'adsa', 0, 'ana@ass.com', '0012-12-12', 'adm,smd', 'Lalitpur', 'dsa'),
(11, 'check1', '0012-12-12', 'check1', 98489985905, 'aa@aa.com', '0121-12-12', 'asas', 'Lalitpur', 'as'),
(12, 'hd', '0121-12-12', 'kk', 9849985905, 'apple@icomdroid.com', '0121-12-12', 'KKK', 'Lalitpur', 'sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motherreg`
--
ALTER TABLE `motherreg`
  ADD PRIMARY KEY (`motherID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motherreg`
--
ALTER TABLE `motherreg`
  MODIFY `motherID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

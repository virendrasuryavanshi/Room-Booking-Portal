-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2017 at 08:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bookings`
--

CREATE TABLE `Bookings` (
  `Room_id` varchar(150) NOT NULL,
  `Booking_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Booking_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `User_id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Bug_Report`
--

CREATE TABLE `Bug_Report` (
  `Token_no` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Bug` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `Contact_Us`
--

CREATE TABLE `Contact_Us` (
  `Token_no` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Description` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `Room_id` varchar(150) DEFAULT NULL,
  `Review` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `Room_id` int(11) NOT NULL,
  `Room_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`Room_id`, `Room_name`) VALUES
(1, 'SH1');

-- --------------------------------------------------------

--
-- Table structure for table `Room_features`
--

CREATE TABLE `Room_features` (
  `Room_id` int(11) DEFAULT NULL,
  `Features` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(30) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `Status` varchar(150) NOT NULL,
  `Verified` tinyint(4) DEFAULT '0',
  `Email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bug_Report`
--
ALTER TABLE `Bug_Report`
  ADD PRIMARY KEY (`Token_no`);

--
-- Indexes for table `Contact_Us`
--
ALTER TABLE `Contact_Us`
  ADD PRIMARY KEY (`Token_no`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`Room_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bug_Report`
--
ALTER TABLE `Bug_Report`
  MODIFY `Token_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Contact_Us`
--
ALTER TABLE `Contact_Us`
  MODIFY `Token_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `Room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

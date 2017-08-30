-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 01:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bookings`
--

CREATE TABLE `Bookings` (
  `Room_id` varchar(150) NOT NULL,
  `Booking_start_date` date DEFAULT NULL,
  `Booking_end_date` date DEFAULT NULL,
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

--
-- Dumping data for table `Bug_Report`
--

INSERT INTO `Bug_Report` (`Token_no`, `Name`, `Email`, `Bug`) VALUES
(1, 'dsjlg', 'xd', 'c'),
(2, 'abc', 'abc', 'abc'),
(3, 'abc', 'abc', 'abc'),
(4, 'jh', 'jh', 'jh'),
(5, 'jhvkyuf', 'yfiyfyifi', 'yfiyti'),
(6, 'nh', 'bj', 'jb'),
(7, 'a', 'asas', 'sadas saksham chutiya');

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

--
-- Dumping data for table `Contact_Us`
--

INSERT INTO `Contact_Us` (`Token_no`, `Name`, `Email`, `Description`) VALUES
(1, 'cbfbb', 'ncggn', 'dfghjukdvg'),
(2, 'cbfbb', 'ncggn', 'dfghjukdvg'),
(3, 'aklhdkblg', 'kglgugiulgvuf', 'oylyuftckuf'),
(4, 'oi;ahshiu', 'partani', 'partahai'),
(5, 'ytryurytrt', 'durdutsytd', 'trdurdydruydryy'),
(6, '', '', ''),
(7, '', '', ''),
(8, 'kjhkgjf', 'ftfty', 'tyru'),
(9, 'test', 'test', 'test'),
(10, 'test', 'test', 'test'),
(11, 'test', 'test', 'test'),
(12, 'test', 'test', 'test'),
(13, '', '', ''),
(14, '', '', ''),
(15, 'jhiugu', 'guguig', 'giug'),
(16, 'abc', 'abc', 'abc');

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
(1, 'SH1'),
(2, 'SH2'),
(3, 'CR1'),
(4, 'CR2'),
(5, 'H105'),
(6, 'H205'),
(7, 'SARANGA');

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
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `Username`, `Password`, `Status`, `Verified`, `Email`) VALUES
(1, 'sparsh', 'ecfedd61b9abc8d3e9a9453158ae9c7f', '', 0, 'lkjpj'),
(2, 'a', '0cc175b9c0f1b6a831c399e269772661', 'admin', 0, 'a'),
(3, 'Yudhik', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', 0, 'yudhik100@gmail.com'),
(4, 'asdfghhj', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(5, 'ewarse', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(6, 'cd', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(7, 'asdfg', '25d55ad283aa400af464c76d713c07ad', '', 0, 'qwe@r.c'),
(8, 'qwer', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(9, 'cvb', '25d55ad283aa400af464c76d713c07ad', '', 0, 'qwertyu@k.q'),
(10, 'q1', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(11, 'tst', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(12, 'mk', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(13, 'qaz', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@g.c'),
(14, '123', '25d55ad283aa400af464c76d713c07ad', '', 0, 'qwe@r.c'),
(15, 'qazw', '25d55ad283aa400af464c76d713c07ad', '', 0, 'aq@q.b'),
(16, 'abc', '25d55ad283aa400af464c76d713c07ad', '', 0, 'a@a.com'),
(17, 'qqq', '25d55ad283aa400af464c76d713c07ad', '', 0, 'assa@sad.com'),
(18, 'mohit', '40bbc0c6f525708d21630fd32dcdccd1', '', 0, 'mohit@gmail.com'),
(19, 'qwqqq', '25d55ad283aa400af464c76d713c07ad', '', 0, 'q@w.c'),
(20, 'qwertyqwerty', '25f9e794323b453885f5181f1b624d0b', '', 0, 'q@s.c');

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
  MODIFY `Token_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Contact_Us`
--
ALTER TABLE `Contact_Us`
  MODIFY `Token_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `Room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

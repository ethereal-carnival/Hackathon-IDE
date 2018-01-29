-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 01:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucode`
--

-- --------------------------------------------------------

--
-- Table structure for table `billboard`
--

CREATE TABLE `billboard` (
  `username` text NOT NULL,
  `marks` int(11) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billboard`
--

INSERT INTO `billboard` (`username`, `marks`, `rank`) VALUES
('crimson_carnival', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `uID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`description`, `status`, `uID`) VALUES
('Write a code to say hello', 0, 'NdTs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mname` text,
  `sap` int(11) NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `branch` text,
  `yr` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `mname`, `sap`, `username`, `pass`, `email`, `phone`, `branch`, `yr`) VALUES
('Vyom', 'Maitreya', '', 500045350, 'crimson_carnival', 'ceb6c970658f31504a901b89dcd3e461', 'vyommaitreya@stu.upes.ac.in', 9756180936, '', ''),
('Test', 'Test', '', 400056765, 'test_teacher', 'ceb6c970658f31504a901b89dcd3e461', 'test@ddn.upes.ac.in', 7654123456, '', ''),
('mitali', 'saravgi', '', 500056651, 'mitali', 'f3609badce37435ec0fed38895890c58', '50005edr@ddn.upes.ac.in', 1234534567, 'bao', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billboard`
--
ALTER TABLE `billboard`
  ADD PRIMARY KEY (`username`(20));

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`uID`(4));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`(40));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

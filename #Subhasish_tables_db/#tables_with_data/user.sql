-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `uname` varchar(60) DEFAULT NULL,
  `uadd` varchar(255) DEFAULT NULL,
  `umail` varchar(50) DEFAULT NULL,
  `uphno` bigint(10) DEFAULT NULL,
  `ugen` varchar(20) NOT NULL,
  `uprfsn` varchar(30) DEFAULT NULL,
  `uage` int(11) NOT NULL,
  `uidt` varchar(50) NOT NULL,
  `uidno` varchar(12) NOT NULL,
  `uqa1qa2` varchar(100) NOT NULL,
  `upwd` varchar(50) DEFAULT NULL,
  `uaccess` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uadd`, `umail`, `uphno`, `ugen`, `uprfsn`, `uage`, `uidt`, `uidno`, `uqa1qa2`, `upwd`, `uaccess`) VALUES
(1, 'Suman Dey', 'Kolkata', 'suman@gmail.com', 8765432341, 'Male', 'Private Job', 28, 'PAN Card', 'PCFCX7098U', '3ABC10XYZ', 'c92a660802b464a8f569669bef3a50e8', 'Active'),
(2, 'Chayan Dey', 'Kalyanpur', 'chayan11@gmail.com', 8765679854, 'Male', 'Student', 18, 'Aadhar Card', '567912659078', '4ABC11XYZ', '12ca28e8051cd89bd9b352a4be86af61', 'Blocked'),
(3, 'Debasish Sarkar', 'Shyambazar', 'deba76@gmail.com', 6580088890, 'Male', 'Bussiness', 36, 'Voter Card', 'ICX8970972', '6ABC14XYZ', '710822a298dff89b479239b1cefa7a5a', 'Active'),
(4, 'Sayantika Dutta', 'Ballygunge', 'sdutta45@gmail.com', 9865340900, 'Female', 'Govt Job', 32, 'Voter Card', 'IER9084587', '5ABC9XYZ', '220dc43ef9e74af6fc7f2271e4c2a91e', 'Active'),
(5, 'Naina Mondal', 'Rishra', 'naina95@ymail.com', 8973541211, 'Female', 'Student', 24, 'PAN Card', 'UIJPM7128Y', '2ABC12XYZ', '436f5d56df8f24930a7536580a1631e8', 'Blocked'),
(6, 'Sayan Sarkar', 'Birati', 'sayan@ymail.com', 8973541309, 'Male', 'Lecturer', 26, 'Aadhar Card', '780285092385', '7ABC13XYZ', '571150399fd33aeac37be67b6c9e6a97', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

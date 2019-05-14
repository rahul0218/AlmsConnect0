-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:13 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(5) NOT NULL,
  `aname` varchar(60) NOT NULL,
  `amail` varchar(50) NOT NULL,
  `aphno` bigint(10) NOT NULL,
  `aage` int(3) NOT NULL,
  `aidt` varchar(50) NOT NULL,
  `aidno` varchar(12) NOT NULL,
  `apwd` varchar(50) NOT NULL,
  `aadd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `amail`, `aphno`, `aage`, `aidt`, `aidno`, `apwd`, `aadd`) VALUES
(1, 'Subhasish Bagchi', 'subha1200@gmail.com', 8436042450, 23, 'Voter Card', 'ITG1819432', '2d747a218c6f9d46f0f05eb88a517790', 'Dumdum'),
(2, 'Rahul Kumar', 'kumar.rahul0218@gmail.com', 9330233447, 26, 'Aadhar Card', '887834230987', '28f60af190d606aa396626494f56d472', 'Bansdroni'),
(3, 'Pabitra Dinda', 'pabitradinda2016@gmail.com', 9932301861, 22, 'PAN Card', 'CCCWE7809K', 'c6d1b48bc1585befb6376c03b2144ebc', 'Barasat'),
(4, 'Tanmoy Pal', 'tanmoypal25011994@gmail.com', 8981624012, 24, 'Aadhar Card', '856790873421', '6aef6e0212dbcb9297978622947a5961', 'Subhasgram'),
(5, 'Admin ', 'support.helptogethera@gmail.com', 1234567890, 20, 'Voter Card', 'ICF2569780', '0f43cd13b7665a4fd34bab463f97d24d', 'Kolkata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

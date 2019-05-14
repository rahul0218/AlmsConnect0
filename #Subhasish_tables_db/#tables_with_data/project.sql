-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 10:01 AM
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
-- Table structure for table `acontact`
--

CREATE TABLE `acontact` (
  `qid` int(5) NOT NULL,
  `qtype` varchar(20) NOT NULL,
  `qname` varchar(30) NOT NULL,
  `qmail` varchar(50) NOT NULL,
  `qphno` bigint(10) NOT NULL,
  `query` varchar(255) NOT NULL,
  `qatime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qstime` datetime DEFAULT NULL,
  `qstatus` varchar(20) NOT NULL,
  `qsbaname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acontact`
--

INSERT INTO `acontact` (`qid`, `qtype`, `qname`, `qmail`, `qphno`, `query`, `qatime`, `qstime`, `qstatus`, `qsbaname`) VALUES
(1, 'Guest', 'Ayan Dey', 'ayan11@ymail.com', 8976543421, 'How can I donate ?', '2019-04-12 15:19:49', '2019-04-16 12:22:36', 'Solved', 'Subhasish Bagchi'),
(2, 'User', 'Suman Dey', 'suman@gmail.com', 8765432341, 'How can I donate without logging in ?', '2019-04-19 10:02:49', '0000-00-00 00:00:00', 'Unsolved', ''),
(3, 'Guest', 'Pritam Kundu', 'pritamk98@ymail.com', 7623120987, 'How long time it take to donate on a org ? ', '2019-04-25 13:32:49', '0000-00-00 00:00:00', 'Unsolved', ''),
(4, 'User', 'Sayantika Dutta', 'sdutta45@gmail.com', 9865340900, 'How can I find a org in my area ?', '2019-05-01 08:44:49', '2019-05-02 18:21:17', 'Solved', 'Rahul Kumar'),
(5, 'Org', 'Ramkrishna Charity', 'rkcharity@gmail.com', 8734664767, 'What are the advantage of a registered donor ?', '2019-05-03 07:46:49', '2019-05-05 21:13:40', 'Solved', 'Subhasish Bagchi'),
(6, 'Guest', 'Partha Mukherjee', 'partha76@hotmail.com', 6098760124, 'How can I register my organization ?', '2019-05-05 23:41:57', '2019-05-07 17:42:49', 'Solved', 'Rahul Kumar');

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

-- --------------------------------------------------------

--
-- Table structure for table `ditem`
--

CREATE TABLE `ditem` (
  `iid` int(5) NOT NULL,
  `ditem` varchar(30) NOT NULL,
  `istatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ditem`
--

INSERT INTO `ditem` (`iid`, `ditem`, `istatus`) VALUES
(1, 'Food', 'Active'),
(2, 'Medicine', 'Active'),
(3, 'Clothes', 'Active'),
(4, 'Foods', 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `gdonate`
--

CREATE TABLE `gdonate` (
  `gdid` int(5) NOT NULL,
  `gdtype` varchar(100) NOT NULL,
  `gphno` bigint(10) NOT NULL,
  `gidt` varchar(50) NOT NULL,
  `gidno` varchar(12) NOT NULL,
  `gadd` varchar(255) NOT NULL,
  `oid` int(5) NOT NULL,
  `gdstatus` varchar(20) NOT NULL,
  `gdcstatus` varchar(20) NOT NULL,
  `gdtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gdctime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdonate`
--

INSERT INTO `gdonate` (`gdid`, `gdtype`, `gphno`, `gidt`, `gidno`, `gadd`, `oid`, `gdstatus`, `gdcstatus`, `gdtime`, `gdctime`) VALUES
(1, 'Food,Medicine', 9776243123, 'Aadhar Card', '789012540989', 'Mallikpur', 1, 'Pending', 'Waiting', '2019-01-22 08:11:02', '0000-00-00 00:00:00'),
(2, 'Medicine', 9878652431, 'PAN Card', 'CNBUI7569I', 'Uluberia', 2, 'Processed', 'Donated', '2019-01-23 13:19:16', '2019-01-24 08:15:34'),
(3, 'Medicine,Clothes', 8711237654, 'Aadhar Card', '908767543209', 'Bagnan', 2, 'Processed', 'Waiting', '2019-01-25 16:49:21', '0000-00-00 00:00:00'),
(4, 'Medicine,Clothes', 8761230956, 'PAN Card', 'REDCV7987J', 'Sonarpur', 1, 'Processed', 'Donated', '2019-01-25 11:02:54', '2019-01-27 09:03:16'),
(5, 'Clothes', 9612763452, 'Voter Card', 'JHU9801209', 'Tikiapara', 3, 'Pending', 'Waiting', '2019-01-25 11:02:54', '0000-00-00 00:00:00'),
(6, 'Food,Clothes', 9087124389, 'Aadhar Card', '870945670989', 'Hooghly', 3, 'Processed', 'Donated', '2019-01-26 22:22:34', '2019-01-27 19:20:44'),
(7, 'Food,Medicine,Clothes', 7867295530, 'Voter Card', 'ITI0957842', 'Dhakuria', 1, 'Processed', 'Waiting', '2019-01-29 10:40:59', '0000-00-00 00:00:00'),
(8, 'Food,Medicine', 9087651232, 'Voter Card', 'UIO0784508', 'Dakshineswar', 4, 'Pending', 'Waiting', '2019-01-30 23:12:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `oid` int(5) NOT NULL,
  `oname` varchar(40) DEFAULT NULL,
  `ono` varchar(25) DEFAULT NULL,
  `odate` date DEFAULT NULL,
  `omail` varchar(50) DEFAULT NULL,
  `ophno` bigint(10) DEFAULT NULL,
  `opwd` varchar(50) DEFAULT NULL,
  `oadd` varchar(255) DEFAULT NULL,
  `ositem` varchar(200) NOT NULL,
  `oreqitem` varchar(200) NOT NULL,
  `orj` varchar(255) DEFAULT NULL,
  `oaccess` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`oid`, `oname`, `ono`, `odate`, `omail`, `ophno`, `opwd`, `oadd`, `ositem`, `oreqitem`, `orj`, `oaccess`) VALUES
(1, 'Ramkrishna Charity', 'REG1234C', '2014-07-15', 'rkcharity@gmail.com', 8734664767, '3e67383c061cad8193456e20d5cd2aa9', 'Baruipur', 'Food,Medicine,Clothes', 'Food,Medicine', 'To help poor people', 'Active'),
(2, 'Netaji Trustee', 'REG8976V', '2009-10-29', 'Ntrust@gmail.com', 9848889030, '94f99570b700e6ed07358e233a59499e', 'Santragachi', 'Medicine,Clothes', 'Food', 'To serve society in a better way', 'Active'),
(3, 'Jagnnath Private Limited', 'REG7654P', '2017-08-26', 'jaga56@hotmail.com', 7690772083, '6bd3fb3d05b2496676e96ea94433d8a6', 'Howrah', 'Food,Clothes', 'Medicine', 'To donate', 'Blocked'),
(4, 'Sharma Health Organization', 'REG9852W', '2018-09-26', 'sharma54@ymail.com', 9241309867, '8d6a9af64cac557f07897baf1f2f83ec', 'Dankuni', 'Food,Medicine', '', 'To do social work', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `udonate`
--

CREATE TABLE `udonate` (
  `did` int(5) NOT NULL,
  `dtype` varchar(100) NOT NULL,
  `uid` int(5) NOT NULL,
  `oid` int(5) NOT NULL,
  `dstatus` varchar(20) NOT NULL,
  `dcstatus` varchar(20) NOT NULL,
  `udtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `udctime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udonate`
--

INSERT INTO `udonate` (`did`, `dtype`, `uid`, `oid`, `dstatus`, `dcstatus`, `udtime`, `udctime`) VALUES
(1, 'Food', 1, 3, 'Pending', 'Waiting', '2019-01-23 13:08:15', '0000-00-00 00:00:00'),
(2, 'Medicine', 1, 2, 'Pending', 'Waiting', '2019-01-25 19:25:10', '0000-00-00 00:00:00'),
(3, 'Food,Medicine,Clothes', 2, 1, 'Processed', 'Donated', '2019-01-26 10:32:34', '2019-01-27 11:56:14'),
(4, 'Food,Medicine', 4, 1, 'Pending', 'Waiting', '2019-02-28 20:48:25', '0000-00-00 00:00:00'),
(5, 'Medicine,Clothes', 3, 2, 'Processed', 'Waiting', '2019-01-30 06:56:55', '0000-00-00 00:00:00'),
(6, 'Clothes', 5, 3, 'Processed', 'Donated', '2019-01-31 09:48:45', '2019-01-31 20:12:10'),
(7, 'Food,Clothes', 4, 3, 'Processed', 'Waiting', '2019-01-31 11:52:25', '0000-00-00 00:00:00'),
(8, 'Food,Medicine', 3, 4, 'Pending', 'Waiting', '2019-01-31 14:41:56', '0000-00-00 00:00:00');

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
-- Indexes for table `acontact`
--
ALTER TABLE `acontact`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `ditem`
--
ALTER TABLE `ditem`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `gdonate`
--
ALTER TABLE `gdonate`
  ADD PRIMARY KEY (`gdid`),
  ADD KEY `F_K` (`oid`);

--
-- Indexes for table `org`
--
ALTER TABLE `org`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `udonate`
--
ALTER TABLE `udonate`
  ADD PRIMARY KEY (`did`),
  ADD KEY `udonate_ibfk_1` (`uid`),
  ADD KEY `udonate_ibfk_2` (`oid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acontact`
--
ALTER TABLE `acontact`
  MODIFY `qid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ditem`
--
ALTER TABLE `ditem`
  MODIFY `iid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gdonate`
--
ALTER TABLE `gdonate`
  MODIFY `gdid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `org`
--
ALTER TABLE `org`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `udonate`
--
ALTER TABLE `udonate`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

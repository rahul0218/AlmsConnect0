-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 11:58 AM
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
  `qsbaname` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `ditem`
--

CREATE TABLE `ditem` (
  `iid` int(5) NOT NULL,
  `ditem` varchar(30) NOT NULL,
  `istatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `qid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ditem`
--
ALTER TABLE `ditem`
  MODIFY `iid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gdonate`
--
ALTER TABLE `gdonate`
  MODIFY `gdid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `org`
--
ALTER TABLE `org`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `udonate`
--
ALTER TABLE `udonate`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

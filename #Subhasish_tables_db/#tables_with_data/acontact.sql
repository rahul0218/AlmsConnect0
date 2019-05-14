-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:12 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acontact`
--
ALTER TABLE `acontact`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acontact`
--
ALTER TABLE `acontact`
  MODIFY `qid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

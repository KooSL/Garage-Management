-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 12:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garagemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cphone` varchar(50) NOT NULL,
  `caddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cname`, `cemail`, `cphone`, `caddress`) VALUES
(3, 'santosh', 's@gmail.com', '353543', 'fsdfs'),
(4, 'rahul don', 'rahuldon@123.com', '938401931', 'bharatpur10chitwan'),
(7, 'ghgh', 'ka@gmail.com', 'ghghghg', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `cntid` int(11) NOT NULL,
  `cntname` varchar(50) NOT NULL,
  `cntemail` varchar(50) NOT NULL,
  `cntphone` varchar(20) NOT NULL,
  `cntmessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cntid`, `cntname`, `cntemail`, `cntphone`, `cntmessage`) VALUES
(7, 'santosh pudasainin', 'santosh@gmail.com', '54654645', 'fghghf'),
(8, 'santosh pudasainin', 'santosh@gmail.com', '5434545', 'fgdfgd'),
(9, 'santosh pudasainin', 'santosh@gmail.com', '5434545', 'fgdfgd');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `sdescription` varchar(500) NOT NULL,
  `sstatus` varchar(10) NOT NULL,
  `supdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `vid`, `sdescription`, `sstatus`, `supdate`) VALUES
(2, 3, 'tttttttt\r\ntyujfghfgh', 'Done', '2024-03-02 14:24:28'),
(3, 3, 'rrrrrrrsfdsftyrty\r\njhfgfhfhg\r\nfghfghf\r\n', '', '2024-05-03 17:53:16'),
(4, 4, 'tjerjt \r\n;erkt;ker\r\n;rket;er\r\nerkt;ret\r\nert;ekrt\r\n\r\nertert\r\n', '', '2024-03-18 12:10:25'),
(5, 4, 'ytjty\r\ntyhytr\r\ntyjty\r\n', '', '2024-03-18 17:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 'user'),
(2, 'super admin', 'sadmin@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vid` int(11) NOT NULL,
  `cid` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `vbrand` varchar(50) NOT NULL,
  `vnumber` varchar(50) NOT NULL,
  `vservice` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vid`, `cid`, `cname`, `vname`, `vbrand`, `vnumber`, `vservice`) VALUES
(3, 3, 'santosh - s@gmail.com', 'tesla model 3', 'tesla', 'sdfsd4', ''),
(4, 4, 'rahul don - rahuldon@123.com', ' yoddha ', 'tata', 'ba22cha4848', ''),
(6, 4, 'rahul don - rahuldon@123.com', 'fgfg', 'rtyr', 'dfdsf43', ''),
(11, 4, 'rahul don - rahuldon@123.com', 'fgfg', 'mahindra', 'dfg555', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`cntid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `fk_v_id` (`vid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `fk_c_id` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `cntid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `fk_v_id` FOREIGN KEY (`vid`) REFERENCES `vehicles` (`vid`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `fk_c_id` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 07:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milkcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `cpasswd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `name`, `address`, `phno`, `email`, `passwd`, `cpasswd`) VALUES
('prakash1', 'prakash', 'pollachi', '9578085756', 'prakash@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `username` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `cpasswd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`username`, `name`, `address`, `phno`, `email`, `passwd`, `cpasswd`) VALUES
('prakash1', 'prakash', 'pollachi', '9578085756', 'prakash@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay` varchar(20) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `ptype` varchar(10) NOT NULL,
  `pmethod` varchar(10) NOT NULL,
  `amtlit` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `payd` date NOT NULL,
  `payf` date NOT NULL,
  `payt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay`, `Username`, `ptype`, `pmethod`, `amtlit`, `amt`, `payd`, `payf`, `payt`) VALUES
('supplier', 'prakash1', 'paid', 'cash', 12, 100, '2021-06-08', '2021-06-08', '2021-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `username` varchar(15) NOT NULL,
  `litre` int(10) NOT NULL,
  `degree` int(10) NOT NULL,
  `advance` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`username`, `litre`, `degree`, `advance`, `date`) VALUES
('prakash1', 88, 25, 100, '2021-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `username` varchar(15) NOT NULL,
  `litre` int(10) NOT NULL,
  `advance` int(10) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`username`, `litre`, `advance`, `date`) VALUES
('prakash1', 99, 500, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `username` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `cpasswd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`username`, `name`, `address`, `phno`, `email`, `passwd`, `cpasswd`) VALUES
('prakash1', 'prakash', 'pollachi', '9578085756', 'prakash@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `totalact`
--

CREATE TABLE `totalact` (
  `pur` int(15) NOT NULL,
  `sale` int(15) NOT NULL,
  `stock` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalact`
--

INSERT INTO `totalact` (`pur`, `sale`, `stock`, `date`) VALUES
(120, 80, 40, '2021-06-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Username`,`payd`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`username`,`date`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`username`,`date`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `usern` FOREIGN KEY (`Username`) REFERENCES `supplier` (`username`),
  ADD CONSTRAINT `userna` FOREIGN KEY (`Username`) REFERENCES `customer` (`username`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `username` FOREIGN KEY (`Username`) REFERENCES `supplier` (`username`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `usernam` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

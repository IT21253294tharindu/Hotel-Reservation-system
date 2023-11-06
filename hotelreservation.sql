-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Hotel_Id` int(11) NOT NULL,
  `Hotelname` varchar(30) NOT NULL,
  `Roomtype` varchar(30) NOT NULL,
  `No_of_rooms` int(11) NOT NULL,
  `No_of_adults` int(11) NOT NULL,
  `No_of_kids` int(11) NOT NULL,
  `arrivingdate` varchar(50) NOT NULL,
  `closingdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Hotel_Id`, `Hotelname`, `Roomtype`, `No_of_rooms`, `No_of_adults`, `No_of_kids`, `arrivingdate`, `closingdate`) VALUES
(7, 'ABC', 'Normal Room', 1, 1, 1, '2022-10-05', '2022-10-25'),
(8, 'EF', 'Sea view Room', 3, 2, 3, '2022-08-15', '2022-08-16'),
(9, 'ABC', 'Normal Room', 3, 3, 3, '2022-08-18', '2022-10-16'),
(10, 'ZZ', 'Normal Room', 3, 1, 3, '2022-12-10', '2022-12-15'),
(11, 'ABC', 'Normal Room', 1, 1, 1, '2022-12-08', '2022-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `name`, `email`, `massage`) VALUES
(1, 'Charith', 'charithp@gmail.com', 'good'),
(2, 'Charith Lakshan Perera', 'Charithp2001@gmail.com', ''),
(5, 'Keshara polgolla', 'keshara@gmail.com', 'hello'),
(6, 'masaj janith', 'masajanith@gmail.com', 'message=masaj'),
(9, 'yugantha', 'yugantha@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(10) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `Firstname`, `Lastname`, `Feedback`) VALUES
(4, 'dulanga', 'dulanga', 'asafassfd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Paymentid` int(10) NOT NULL,
  `cname` char(30) NOT NULL,
  `cardno` int(20) NOT NULL,
  `cardType` char(10) NOT NULL,
  `expiredate` varchar(50) NOT NULL,
  `fee` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Paymentid`, `cname`, `cardno`, `cardType`, `expiredate`, `fee`) VALUES
(1, 'yugantha', 2147483647, 'visa', '2023-12-08', 89000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `rid` int(10) NOT NULL,
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `passportno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`rid`, `firstname`, `lastname`, `gender`, `mobileno`, `passportno`, `email`, `addres`, `DOB`, `username`, `passwod`) VALUES
(1, 'tharindu', 'naveen', 'male', 760457872, '200089800669', 'zxc@gmail.com', 'kurunegala', '2000-08-24', 'Tharindu00', 'Za12345*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Hotel_Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Paymentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Hotel_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Paymentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

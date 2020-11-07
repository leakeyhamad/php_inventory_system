-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 03:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttuitinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(3, 'otienoleakey', '15a3379b31172db955e20faaea8abd0b', 'Leakey', 'Otieno'),
(4, 'mohamed', '6927bc544c40ecd78d902ac8936d1956', 'Abdinasir', 'Abdiaziz');

-- --------------------------------------------------------

--
-- Table structure for table `allocated_items`
--

CREATE TABLE `allocated_items` (
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `allocated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocated_items`
--

INSERT INTO `allocated_items` (`item_id`, `date`, `fullname`, `jobnumber`, `department`, `branch`, `item`, `model`, `serialnumber`, `allocated_by`) VALUES
(2, '2020-10-29', 'Vale', '6789', 'Facilities Management', 'Ngerenyi Campus', 'Keyboard', 'Dell', '2019', 'Dullah');

-- --------------------------------------------------------

--
-- Table structure for table `fullset_allocation`
--

CREATE TABLE `fullset_allocation` (
  `item_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `monitor` varchar(255) NOT NULL,
  `keyboard` varchar(255) NOT NULL,
  `mouse` varchar(255) NOT NULL,
  `issued_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issued_items`
--

CREATE TABLE `issued_items` (
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `issued_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_items`
--

INSERT INTO `issued_items` (`item_id`, `date`, `fullname`, `jobnumber`, `item`, `model`, `serialnumber`, `issued_by`) VALUES
(4, '2020-10-29', 'Leakey Otieno', '2030', 'Monitor', 'Apple', '2040', 'Leakey');

-- --------------------------------------------------------

--
-- Table structure for table `lend_items`
--

CREATE TABLE `lend_items` (
  `item_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `lend_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lend_items`
--

INSERT INTO `lend_items` (`item_id`, `date`, `fullname`, `jobnumber`, `department`, `branch`, `item`, `model`, `serialnumber`, `lend_by`) VALUES
(3, '2020-10-29', 'Naz', '2050', 'Internal Audit', 'Main Campus', 'Projector', 'Accer', '10020', 'Orao Collins'),
(4, '2020-10-29', 'Leakey Otieno', '1234', 'Health Unit', 'Ngerenyi Campus', 'CPU', 'Lenovo', '1965', 'Naz Val');

-- --------------------------------------------------------

--
-- Table structure for table `lend_returned`
--

CREATE TABLE `lend_returned` (
  `item_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `returned_by` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lend_returned`
--

INSERT INTO `lend_returned` (`item_id`, `date`, `returned_by`, `jobnumber`, `department`, `branch`, `item`, `model`, `serialnumber`, `received_by`) VALUES
(5, '2020-10-29', 'Leakey Otieno', '1234', 'Finance', 'Ngerenyi Campus', 'CPU', 'Hp', '1965', 'Naz Val'),
(6, '2020-11-02', 'Leakey Otieno', '2050', 'Public Relations Office', 'Main Campus', 'CPU', 'Lenovo', '10020', 'Naz Val');

-- --------------------------------------------------------

--
-- Table structure for table `ready_items`
--

CREATE TABLE `ready_items` (
  `item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_model` varchar(255) NOT NULL,
  `item_serial` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_jobnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ready_items`
--

INSERT INTO `ready_items` (`item_id`, `item_name`, `item_model`, `item_serial`, `user_name`, `user_jobnum`) VALUES
(2, 'Monitor', 'Apple', '00975', 'Mercy Trey', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `received_items`
--

CREATE TABLE `received_items` (
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `received_items`
--

INSERT INTO `received_items` (`item_id`, `date`, `fullname`, `jobnumber`, `department`, `branch`, `item`, `model`, `serialnumber`, `problem`, `received_by`) VALUES
(3, '2020-10-29', 'Leakey Otieno', '1234', 'Finance', 'Main Campus', 'laptop', 'Hp', '2848', 'Keys are broken', 'Naz Val');

-- --------------------------------------------------------

--
-- Table structure for table `retrieved_items`
--

CREATE TABLE `retrieved_items` (
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `monitor` varchar(255) NOT NULL,
  `keyboard` varchar(255) NOT NULL,
  `mouse` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retrieved_items`
--

INSERT INTO `retrieved_items` (`item_id`, `date`, `fullname`, `jobnumber`, `department`, `branch`, `cpu`, `monitor`, `keyboard`, `mouse`, `received_by`) VALUES
(8, '2020-10-29', 'Leakey Otieno', '1234', 'Procurement', 'Main Campus', '098765', '56789', '23412', '2345634', 'Naz Val');

-- --------------------------------------------------------

--
-- Table structure for table `ttutech_issued`
--

CREATE TABLE `ttutech_issued` (
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `issued_to` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `issued_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttutech_issued`
--

INSERT INTO `ttutech_issued` (`item_id`, `date`, `issued_to`, `jobnumber`, `item`, `model`, `serialnumber`, `issued_by`) VALUES
(2, '2020-10-29', 'Amir', '2345', 'printer', 'KONICA', '9876', 'Naz Val');

-- --------------------------------------------------------

--
-- Table structure for table `ttutech_received_items`
--

CREATE TABLE `ttutech_received_items` (
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `received_from` varchar(255) NOT NULL,
  `jobnumber` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttutech_received_items`
--

INSERT INTO `ttutech_received_items` (`item_id`, `date`, `received_from`, `jobnumber`, `item`, `model`, `serialnumber`, `received_by`) VALUES
(2, '2020-10-29', 'Ken Bran', '3020', 'CPU', 'ASUS', '2030', 'Orao Collins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `allocated_items`
--
ALTER TABLE `allocated_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `fullset_allocation`
--
ALTER TABLE `fullset_allocation`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `issued_items`
--
ALTER TABLE `issued_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `lend_items`
--
ALTER TABLE `lend_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `lend_returned`
--
ALTER TABLE `lend_returned`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `ready_items`
--
ALTER TABLE `ready_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `received_items`
--
ALTER TABLE `received_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `retrieved_items`
--
ALTER TABLE `retrieved_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `ttutech_issued`
--
ALTER TABLE `ttutech_issued`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `ttutech_received_items`
--
ALTER TABLE `ttutech_received_items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `allocated_items`
--
ALTER TABLE `allocated_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fullset_allocation`
--
ALTER TABLE `fullset_allocation`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issued_items`
--
ALTER TABLE `issued_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lend_items`
--
ALTER TABLE `lend_items`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lend_returned`
--
ALTER TABLE `lend_returned`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ready_items`
--
ALTER TABLE `ready_items`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `received_items`
--
ALTER TABLE `received_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `retrieved_items`
--
ALTER TABLE `retrieved_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ttutech_issued`
--
ALTER TABLE `ttutech_issued`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ttutech_received_items`
--
ALTER TABLE `ttutech_received_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

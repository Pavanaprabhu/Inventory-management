-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 11:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phn_no` int(12) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `doj` date NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `ename`, `address`, `phn_no`, `email_id`, `dob`, `gender`, `doj`, `salary`) VALUES
(1, 'ravi', 'door no. 42, krishna reddy layout,electronic city,banglore', 749765893, 'ravi@gmail.com', '0000-00-00', 'm', '0000-00-00', 10000.7),
(4, 'sade', 'gothilla', 6, 'fsffdsdf', '2019-10-26', 'm', '2019-10-26', 0),
(6, 'nag', 'sfsdf', 5484, 'dsfds', '2019-10-26', 'm', '2019-10-26', 0),
(15, 'mary', 'goa', 8917268, 'mary@gmail.com', '1995-11-01', 'f', '2015-11-28', 0),
(18, 'pav', 'udupi', 2147483647, 'drekhk@gmail.com', '2019-11-04', 'f', '2019-11-06', 10000),
(50, 'pav', 'udupi', 2147483647, 'drekhk@gmail.com', '2019-11-06', 'f', '1999-01-11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

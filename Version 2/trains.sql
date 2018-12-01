-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2018 at 10:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trains`
--

-- --------------------------------------------------------

--
-- Table structure for table `17208`
--

CREATE TABLE `17208` (
  `id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `Arr` varchar(10) NOT NULL,
  `Dep` varchar(10) NOT NULL,
  `fare` int(11) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `17208`
--

INSERT INTO `17208` (`id`, `code`, `station_name`, `Arr`, `Dep`, `fare`, `seats`) VALUES
(1, 'tpty', 'Tirupati', '1', '1', 10, 10),
(2, 'bza', 'Vijayawada', '2', '2', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `17209`
--

CREATE TABLE `17209` (
  `id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `Arr` varchar(10) NOT NULL,
  `Dep` varchar(10) NOT NULL,
  `fare` int(11) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `17209`
--

INSERT INTO `17209` (`id`, `code`, `station_name`, `Arr`, `Dep`, `fare`, `seats`) VALUES
(1, 'tpty', 'Tirupati', '1', '1', 10, 10),
(2, 'bza', 'Vijayawada', '2', '2', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `17488`
--

CREATE TABLE `17488` (
  `id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `Arr` varchar(10) NOT NULL,
  `Dep` varchar(10) NOT NULL,
  `fare` int(11) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `17488`
--

INSERT INTO `17488` (`id`, `code`, `station_name`, `Arr`, `Dep`, `fare`, `seats`) VALUES
(1, 'tpty', 'Tirupati', '1', '3', 0, 100),
(2, 'ru', 'Renigunta', '2', '4', 20, 100),
(3, 'gdr', 'Gudur', '3', '5', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `passkey` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `passkey`) VALUES
('admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `bza`
--

CREATE TABLE `bza` (
  `train_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bza`
--

INSERT INTO `bza` (`train_no`) VALUES
(17208),
(17209);

-- --------------------------------------------------------

--
-- Table structure for table `gdr`
--

CREATE TABLE `gdr` (
  `train_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdr`
--

INSERT INTO `gdr` (`train_no`) VALUES
(17488);

-- --------------------------------------------------------

--
-- Table structure for table `nani`
--

CREATE TABLE `nani` (
  `id` int(11) NOT NULL,
  `passenger` varchar(500) NOT NULL,
  `age` varchar(12) NOT NULL,
  `date` varchar(10) NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nani`
--

INSERT INTO `nani` (`id`, `passenger`, `age`, `date`, `fare`) VALUES
(1, 'nani,', '20,', '2018-11-30', 20);

-- --------------------------------------------------------

--
-- Table structure for table `nlr`
--

CREATE TABLE `nlr` (
  `train_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nlr`
--

INSERT INTO `nlr` (`train_no`) VALUES
(17488);

-- --------------------------------------------------------

--
-- Table structure for table `ru`
--

CREATE TABLE `ru` (
  `train_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ru`
--

INSERT INTO `ru` (`train_no`) VALUES
(17488);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(11) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station_name`, `code`) VALUES
(50, 'Tirupati', 'tpty'),
(51, 'Renigunta', 'ru'),
(52, 'Gudur', 'gdr'),
(53, 'Nellore', 'nlr'),
(55, 'Vijayawada', 'bza');

-- --------------------------------------------------------

--
-- Table structure for table `tpty`
--

CREATE TABLE `tpty` (
  `train_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tpty`
--

INSERT INTO `tpty` (`train_no`) VALUES
(17208),
(17209),
(17488);

-- --------------------------------------------------------

--
-- Table structure for table `train_list`
--

CREATE TABLE `train_list` (
  `id` int(11) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  `train_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `train_list`
--

INSERT INTO `train_list` (`id`, `train_name`, `train_no`) VALUES
(31, 'Tirumala Express', 17488),
(32, 'Shesadri Express', 17209),
(33, 'Dwaraka Express', 17208);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `passkey` varchar(50) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `bankaact` bigint(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `passkey`, `aadhar`, `bankaact`, `amount`) VALUES
('nani', 'nani', 151545155451, 54815181777, 9980);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `17208`
--
ALTER TABLE `17208`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `17209`
--
ALTER TABLE `17209`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `17488`
--
ALTER TABLE `17488`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bza`
--
ALTER TABLE `bza`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `gdr`
--
ALTER TABLE `gdr`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `nani`
--
ALTER TABLE `nani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nlr`
--
ALTER TABLE `nlr`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `ru`
--
ALTER TABLE `ru`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tpty`
--
ALTER TABLE `tpty`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `train_list`
--
ALTER TABLE `train_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `train_no` (`train_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `17208`
--
ALTER TABLE `17208`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `17209`
--
ALTER TABLE `17209`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `17488`
--
ALTER TABLE `17488`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nani`
--
ALTER TABLE `nani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `train_list`
--
ALTER TABLE `train_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

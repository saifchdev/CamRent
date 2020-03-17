-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 10:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `useremail` varchar(255) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `username`, `useremail`, `pwd`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('saifch', 'saifch', 'sajidachogle@gmail.com', 'snc123'),
('saifch', 'saifch', 'sajidachogle@gmail.com', 'snc123'),
('saifch', 'saifch', 'karangoyal862@gmail.com', 'iuytg'),
('sajjadbhai', 'sajjadbhai', 'sajju@gmail.com', 'Sajjad@gmail'),
('saifchogle', 'saifchogle', 'saifchogle@gmail.com', 'snc123'),
('12co29', 'salman', 'sallu@gmial.com', 'password'),
('18co16', 'adils', 'adilsk123@gmail.com', '123'),
('12co12', 'Abdul SaLAM', 'SALAMSHAIKH9@GMAIL.COM', '123456'),
('12co27', 'admin', 'admin@gmail.com', 'P@ssword'),
('', '', '', ''),
('xcc', '', '', ''),
('12co65', 'arshiya', 'arshiyakhan@gmail.com', 'ashu123'),
('12co27', 'saif', 'saifch@gmail.com', 'snc1234'),
('snc123', 'saifchogle', 'saif@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `order_place`
--

CREATE TABLE `order_place` (
  `order_id` int(11) NOT NULL,
  `camera` varchar(255) COLLATE utf8_bin NOT NULL,
  `lens` varchar(255) COLLATE utf8_bin NOT NULL,
  `fromdate` varchar(255) COLLATE utf8_bin NOT NULL,
  `todate` varchar(255) COLLATE utf8_bin NOT NULL,
  `user` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `order_place`
--

INSERT INTO `order_place` (`order_id`, `camera`, `lens`, `fromdate`, `todate`, `user`) VALUES
(8, '1', '2', '2019-10-10', '2019-10-18', ''),
(18, '2', '4', '2019-10-17', '2019-10-24', 'adils'),
(19, '2', '1', '2019-10-08', '2019-10-18', 'adils'),
(20, '2', '1', '2019-10-16', '2019-10-04', 'arshiya'),
(21, '2', '3', '2020-03-25', '2020-03-26', 'saifchogle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_place`
--
ALTER TABLE `order_place`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_place`
--
ALTER TABLE `order_place`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

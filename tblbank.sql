-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 03:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbank`
--

CREATE TABLE `tblbank` (
  `id` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `balance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbank`
--

INSERT INTO `tblbank` (`id`, `name`, `email`, `balance`) VALUES
('088', 'omin', 'omin@gmail', '100'),
('123', 't6angila', 'tanglialop', '300'),
('322', 'rima', 'tanglia@gm', '1233'),
('423', 'tan', 'rbyt@gmail', '1500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbank`
--
ALTER TABLE `tblbank`
  ADD PRIMARY KEY (`id`,`name`,`email`,`balance`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

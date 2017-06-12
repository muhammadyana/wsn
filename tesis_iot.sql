-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 05:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesis_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_root1`
--

CREATE TABLE `data_root1` (
  `id` int(10) NOT NULL,
  `id_primary` int(2) NOT NULL,
  `logdata` datetime NOT NULL,
  `pir` int(10) NOT NULL,
  `gas` int(10) NOT NULL,
  `temp` int(10) NOT NULL,
  `hum` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_root1`
--

INSERT INTO `data_root1` (`id`, `id_primary`, `logdata`, `pir`, `gas`, `temp`, `hum`) VALUES
(1, 1, '2017-04-03 09:38:29', 0, 1, 23, 78),
(1, 2, '2017-04-03 09:38:23', 0, 1, 23, 78),
(1, 3, '2017-04-03 09:18:57', 1, 1, 28, 78),
(1, 4, '2017-04-03 09:18:39', 0, 0, 28, 78);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Anton Prafanto', 'admin', 'admin@admin.com', 'admin123'),
(3, 'muhammad yana mulyana', 'yana', 'yanatamfan@gmail.com', '21091993');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_root1`
--
ALTER TABLE `data_root1`
  ADD PRIMARY KEY (`id_primary`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_root1`
--
ALTER TABLE `data_root1`
  MODIFY `id_primary` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

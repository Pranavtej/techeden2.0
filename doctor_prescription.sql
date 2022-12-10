-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 07:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_prescription`
--

CREATE TABLE `doctor_prescription` (
  `pid` varchar(15) NOT NULL,
  `did` varchar(50) NOT NULL,
  `prescription` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_prescription`
--

INSERT INTO `doctor_prescription` (`pid`, `did`, `prescription`, `time`) VALUES
('579923980899   ', 'D0001', 'A', '2022-12-01 18:04:07'),
('579923980899   ', 'D0002', 'B', '2022-12-02 18:02:24'),
('579923980899   ', 'D0003', 'C', '2022-12-03 18:00:23'),
('579923980899   ', 'D0004', 'A', '2022-12-04 18:00:23'),
('579923980900   ', 'D0001', 'A', '2022-12-05 18:00:23'),
('579923980900   ', 'D0002', 'B', '2022-12-01 18:00:23'),
('579923980900   ', 'D0005', 'B', '2022-12-02 18:00:23'),
('579923980900   ', 'D0006', 'C', '2022-12-03 18:00:23'),
('579923980901   ', 'D0003', 'C', '2022-12-04 18:00:23'),
('579923980901   ', 'D0004', 'A', '2022-12-05 18:00:23'),
('579923980901   ', 'D0005', 'B', '2022-12-01 18:00:23'),
('579923980901   ', 'D0006', 'C', '2022-12-02 18:00:23'),
('579923980902   ', 'D0001', 'A', '2022-12-03 18:00:23'),
('579923980902   ', 'D0002', 'B', '2022-12-04 18:00:23'),
('579923980902   ', 'D0003', 'C', '2022-12-05 18:00:23'),
('579923980902   ', 'D0004', 'A', '2022-12-01 18:00:23'),
('579923980903   ', 'D0001', 'A', '2022-12-02 18:00:23'),
('579923980903   ', 'D0002', 'B', '2022-12-03 18:00:23'),
('579923980903   ', 'D0005', 'B', '2022-12-04 18:00:23'),
('579923980903   ', 'D0006', 'C', '2022-12-05 18:00:23'),
('579923980904   ', 'D0003', 'C', '2022-12-01 18:00:23'),
('579923980904   ', 'D0004', 'A', '2022-12-02 18:00:23'),
('579923980904   ', 'D0005', 'B', '2022-12-03 18:00:23'),
('579923980904   ', 'D0006', 'C', '2022-12-04 18:00:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_prescription`
--
ALTER TABLE `doctor_prescription`
  ADD PRIMARY KEY (`pid`,`did`,`time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

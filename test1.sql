-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 04:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `basic_id` varchar(20) NOT NULL,
  `basic_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`basic_id`, `basic_name`) VALUES
('B0001', 'BP'),
('B0002', 'SUGAR'),
('B0003', 'PULSE RATE'),
('B0004', 'HEART RATE');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `did` varchar(20) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `spec_id` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`did`, `dname`, `hid`, `spec_id`, `designation`) VALUES
('D0001', 'DR SRINIVAS', 'H0001', 'MBBS', 'S0001'),
('D0002', 'DR LOKESH', 'H0002', 'MBBS,FRCS', 'S0002'),
('D0003', 'DR MURALI', 'H0003', 'MBBS,MPHILL', 'S0003'),
('D0004', 'DR SATISH', 'H0001', 'MBBS', 'S0004'),
('D0005', 'DR VIGNESH', 'H0002', 'MBBS,FRCS', 'S0005'),
('D0006', 'DR SURESH', 'H0003', 'MBBS,FRCS', 'S0001');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

CREATE TABLE `hospital_details` (
  `hid` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `h_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`hid`, `hname`, `h_address`) VALUES
('H0001', 'VADLAMUDI HOSPITALS', 'JANGAREDDY GUDM'),
('H0002', 'SAI SPURTHY HOSPITALS', 'BHIMAVARAM'),
('H0003', 'VAMSI MULTY SPECIALITY HOSPITALS', 'ELURU');

-- --------------------------------------------------------

--
-- Table structure for table `patient_basic_details`
--

CREATE TABLE `patient_basic_details` (
  `patient_id` varchar(20) NOT NULL,
  `basic_id` varchar(20) NOT NULL,
  `value` varchar(50) NOT NULL,
  `did` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_basic_details`
--

INSERT INTO `patient_basic_details` (`patient_id`, `basic_id`, `value`, `did`, `date`) VALUES
('P0001', 'B0001', '100/60', 'D0001', '2022-12-10 14:46:02'),
('P0002', 'B0002', '100', 'D0002', '2022-12-10 14:46:02'),
('P0003', 'B0003', '50', 'D0003', '2022-12-10 14:46:02'),
('P0004', 'B0004', '50', 'D0004', '2022-12-10 14:46:02'),
('P0005', 'B0001', '100/60', 'D0005', '2022-12-10 14:46:02'),
('P0006', 'B0003', '55', 'D0006', '2022-12-10 14:46:02'),
('PID', 'BID', 'VAL', 'DID', '2022-12-10 14:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_id` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `patient_age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `patient_phone_number` varchar(10) NOT NULL,
  `present_address` varchar(150) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `patient_qualification` varchar(30) NOT NULL,
  `patient_occupation` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_id`, `password`, `patient_name`, `dob`, `patient_age`, `gender`, `patient_phone_number`, `present_address`, `permanent_address`, `patient_qualification`, `patient_occupation`, `date`) VALUES
('579923980899    ', '579923980899    ', 'VAMSI', '2002-01-09', 17, 'MALE', '9390910334', 'BORRAMPALEM', 'BORRAMPALEM', 'INTER', 'STUDENT', '2022-12-10 14:30:15'),
('579923980900    ', '579923980900    ', 'NARESH', '2003-01-12', 16, 'MALE', '8790194233', 'JANGAREDDYGUDEM', 'JANGAREDDYGUDEM', 'INTER', 'STUDENT', '2022-12-10 14:30:15'),
('579923980901    ', '579923980901    ', 'GANESH', '2004-06-14', 15, 'MALE', '9652279379', 'ELURU', 'ELURU', 'DEGREE', 'STUDENT', '2022-12-10 14:30:15'),
('579923980902    ', '579923980902    ', 'MAHESH', '1998-12-14', 21, 'MALE', '8978594059', 'BHIMAVARAM', 'BHIMAVARAM', 'MSC', 'STUDENT', '2022-12-10 14:30:15'),
('579923980903    ', '579923980903    ', 'RAVI', '2000-12-15', 20, 'MALE', '8790939249', 'VIJAYAWADA', 'ELURU', 'BTECH', 'STUDENT', '2022-12-10 14:30:15'),
('579923980904    ', '579923980904    ', 'SHANKAR', '1999-05-14', 21, 'MALE', '9652279379', 'AMARAVATHI', 'VIJAYAWADA', 'BTECH', 'STUDENT', '2022-12-10 14:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

CREATE TABLE `patient_records` (
  `patient_id` varchar(20) NOT NULL,
  `record_id` varchar(50) NOT NULL,
  `did` varchar(20) NOT NULL,
  `source` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_records`
--

INSERT INTO `patient_records` (`patient_id`, `record_id`, `did`, `source`, `date`) VALUES
('P0001', 'R0001', 'D0001', 'EX1', '2022-12-10 14:55:21'),
('P0002', 'R0002', 'D0002', 'EX2', '2022-12-10 14:55:21'),
('P0003', 'R0002', 'D0003', 'EX3', '2022-12-10 14:55:21'),
('P0004', 'R0004', 'D0004', 'EX4', '2022-12-10 14:55:21'),
('P0005', 'R0005', 'D0005', 'EX5', '2022-12-10 14:55:21'),
('P0006', 'R0006', 'D0006', 'EX6', '2022-12-10 14:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `record_id` varchar(50) NOT NULL,
  `record_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`record_id`, `record_name`) VALUES
('R0001', 'BLOOD REPORTS'),
('R0002', 'X-RAY REPORTS'),
('R0003', 'SUGAR REPORTS'),
('R0004', 'SCANNING REPORTS'),
('R0005', 'THYROID REPORTS');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `spec_id` varchar(100) NOT NULL,
  `spec_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`spec_id`, `spec_name`) VALUES
('S0001', 'ORTHOPEDIC'),
('S0002', 'INTERNAL MEDICINE'),
('S0003', 'OBESTETRICS AND GYNECOLOGY'),
('S0004', 'DERMATOLOGY'),
('S0005', 'PEDIATRICS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `hospital_details`
--
ALTER TABLE `hospital_details`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `patient_basic_details`
--
ALTER TABLE `patient_basic_details`
  ADD PRIMARY KEY (`patient_id`,`basic_id`,`date`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD PRIMARY KEY (`patient_id`,`record_id`,`source`,`date`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`spec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

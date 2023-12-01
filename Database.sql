-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 11:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `faculty`, `name`) VALUES
(1, '1', 'COMPUTER'),
(2, '1', 'CIVIL'),
(3, '1', 'ELECTRICAL'),
(4, '1', 'MECHANICAL'),
(5, '1', 'MECHATRONICS'),
(6, '2', 'ARCHITECTURE'),
(7, '2', 'BUILDING TECHNOLOGY '),
(8, '2', 'GRAPHICS DESIGN AND PRINTING TECHNOLOGY'),
(9, '2', 'ESTATE MANAGEMENT'),
(10, '2', 'CERAMIC TECHNOLOGY'),
(11, '2', 'TEXTILE TECHNOLOGY'),
(12, '2', 'PAINTING TECHNOLOGY'),
(13, '2', 'TSCULPTURE TECHNOLOGY'),
(14, '2', 'TURBAN AND REGIONAL PLANNING'),
(15, '2', 'PROFESSIONAL DIPLOMA (POST HND) IN URBAN AND REGIONAL PLANNING'),
(16, '2', 'SURVEYING AND GEOINFORMATICS'),
(17, '2', 'QUANTITY SURVEYING'),
(18, '3', 'COMPUTER SCIENCE'),
(19, '3', 'GEOLOGICAL TECHNOLOGY'),
(20, '3', 'APPLIED CHEMISTRY '),
(21, '3', 'BIOCHEMISTRY'),
(22, '3', 'BIOLOGY/MICROBIOLOGY'),
(23, '3', 'MICROBIOLOGY'),
(24, '3', 'PHYSICS WITH ELECTRONICS'),
(25, '3', 'STATISTICS'),
(26, '4', 'BUSINESS ADMINISTRATION'),
(27, '4', 'MARKETING'),
(28, '4', 'LOCAL GOVERNMENT AND DEVELOPMENT STUDIES'),
(29, '4', 'MUSIC TECHNOLOGY'),
(30, '4', 'MASS COMMUNICATION'),
(31, '4', 'OFFICE TECHNOLOGY AND MANAGEMENT'),
(32, '4', 'PUBLIC ADMINISTRATION'),
(33, '4', 'PURCHASING & SUPPLY'),
(34, '5', 'ACCOUNTANCY'),
(35, '5', 'BANKING AND FINANCE'),
(36, '5', 'INSURANCE');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(1, 'ENGINEERING'),
(2, 'ENVIRONMENTAL STUDIES '),
(3, 'SCIENCE'),
(4, 'BUSINESS AND COMMUNICATION STUDIES'),
(5, 'FINANCIAL MANAGEMENT STUDIES');

-- --------------------------------------------------------

--
-- Table structure for table `other_fees`
--

CREATE TABLE `other_fees` (
  `id` int(11) NOT NULL,
  `acceptance` int(11) NOT NULL,
  `course add and delete` int(11) NOT NULL,
  `student id card` int(11) NOT NULL,
  `hostel refusal` int(11) NOT NULL,
  `late registration` int(11) NOT NULL,
  `hostel accommodation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_fees`
--

INSERT INTO `other_fees` (`id`, `acceptance`, `course add and delete`, `student id card`, `hostel refusal`, `late registration`, `hostel accommodation`) VALUES
(1, 32000, 5000, 3000, 5000, 5000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `s_id`, `type`, `amount`, `date`, `status`) VALUES
(6, 5, 'school', 69104, '2023-07-25 01:41:08', 1),
(7, 5, 'acceptance', 32000, '2023-07-25 01:41:22', 1),
(8, 5, 'hostel accommodation', 30000, '2023-07-25 04:31:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `programme_type`
--

CREATE TABLE `programme_type` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme_type`
--

INSERT INTO `programme_type` (`id`, `name`) VALUES
(1, 'FLLTIME'),
(2, 'DAILY PART TIME'),
(3, 'PART TIME');

-- --------------------------------------------------------

--
-- Table structure for table `school_fees`
--

CREATE TABLE `school_fees` (
  `id` int(11) NOT NULL,
  `programme_type` varchar(10) NOT NULL,
  `school` int(11) NOT NULL,
  `medical` int(11) NOT NULL,
  `entrepreneurship` int(11) NOT NULL,
  `faculty` int(11) NOT NULL,
  `departmental` int(11) NOT NULL,
  `gns` int(11) NOT NULL,
  `id_card` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_fees`
--

INSERT INTO `school_fees` (`id`, `programme_type`, `school`, `medical`, `entrepreneurship`, `faculty`, `departmental`, `gns`, `id_card`) VALUES
(1, '1', 20000, 4500, 3200, 1000, 1000, 500, 1000),
(2, '2', 57900, 4500, 3200, 1000, 1000, 500, 1000),
(3, '3', 57000, 4500, 3200, 1000, 1000, 500, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `matric_no` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `othername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `lga` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `programme_type` varchar(10) NOT NULL,
  `programme` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `kname` varchar(200) NOT NULL,
  `kaddress` varchar(200) NOT NULL,
  `kphone` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `genotype` varchar(200) NOT NULL,
  `challenges` varchar(200) NOT NULL,
  `date` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `matric_no`, `firstname`, `lastname`, `othername`, `email`, `pwd`, `address`, `phone`, `gender`, `dob`, `lga`, `state`, `programme_type`, `programme`, `course`, `kname`, `kaddress`, `kphone`, `blood_group`, `genotype`, `challenges`, `date`) VALUES
(4, '6722355', 'hyjnu', 'fdthb', 'hyjn', 'energy@gmail.com', '123', 'y', 'y', 'male', '2023-07-26', 'y', 'Oyo', '2', 'NATIONAL DIPLOMA', '8', 'y', 'y', 'y', 'y', 'y', 'y', 2023),
(5, '8492784', 'Mike', 'Oluoba', 'Sammy', 'mike@gmail.com', '123', '0908783634', 'No 19 mike street, Opp business road', 'male', '2000-09-07', 'Oyo west LGA', 'Oyo', '2', 'NATIONAL DIPLOMA', '18', 'Adeolu', 'No 19 mike street, Opp business road', '080723713521', 'O+', 'AA', 'None', 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_fees`
--
ALTER TABLE `other_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme_type`
--
ALTER TABLE `programme_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_fees`
--
ALTER TABLE `school_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other_fees`
--
ALTER TABLE `other_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programme_type`
--
ALTER TABLE `programme_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_fees`
--
ALTER TABLE `school_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

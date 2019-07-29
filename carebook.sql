-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 05:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `bmdc` int(11) NOT NULL,
  `degree` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `specialized` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `consulting` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `contact` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `email`, `bmdc`, `degree`, `specialized`, `consulting`, `location`, `contact`, `updated_at`, `created_at`) VALUES
(1, 'shaheb@mail.com', 51464186, 'MBBS(DU), FCPS(UK), MD(USA)', 'Neuro Medicine', '3pm-8pm', 'Lab Aid Hospital, Panthpath, Dhaka.', '01454511511', '2019-07-19 18:52:19', '2019-07-19 18:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `medical_test`
--

CREATE TABLE `medical_test` (
  `prescription_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_report_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_brand`
--

CREATE TABLE `medicine_brand` (
  `medicine_id` int(11) NOT NULL,
  `generic_id` int(11) NOT NULL,
  `brand_name` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `dosage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_symptomps`
--

CREATE TABLE `patient_symptomps` (
  `symptomp_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescribed_medicine`
--

CREATE TABLE `prescribed_medicine` (
  `prescription_id` int(11) NOT NULL,
  `medicine_brand_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `disease_name` varchar(50) NOT NULL,
  `patient_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `center` int(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `email`, `center`, `updated_at`, `created_at`) VALUES
(1, 'sdfvsdfv1@gmail.com', 165165, '2019-07-19 19:03:23', '2019-07-19 19:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `nid` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `phone`, `firstname`, `lastname`, `address`, `gender`, `password`, `image`, `nid`, `updated_at`, `created_at`) VALUES
('123@gmail.com', 'fdvgdf', 'efwrfw', 'sfgdrfg', 'gergv', 'Male', 'adca', NULL, '48949', '2019-07-19 18:51:10', '2019-07-19 18:51:10'),
('bhuiyanmahmudul@gmail.com', 'sdfsd', 'sdfsdcfs', 'sdvsd', 'sdfsd', 'Male', 'dscfsdcs', NULL, '156165', '2019-07-19 18:59:05', '2019-07-19 18:59:05'),
('hbjh@gmail.com', 'asdfc', 'dfgdrf', 'sfdgsd', 'ascsdc', 'Male', 'sdfvs', NULL, '1561858', '2019-07-19 18:58:03', '2019-07-19 18:58:03'),
('mahmudulhasan661@gmail.com', 'fdvgdf', 'efwrfw', 'sfgdrfg', 'gergv', 'Male', 'dgdt', NULL, '48949', '2019-07-19 18:42:15', '2019-07-19 18:42:15'),
('sdfvsdfv1@gmail.com', 'sdfs', 'sfs', 'sfsdf', 'sdcsd', 'Male', 'sdfsd', NULL, '41861896', '2019-07-19 19:03:23', '2019-07-19 19:03:23'),
('sdfvsdfv@gmail.com', 'sdfs', 'sfs', 'sfsdf', 'sdcsd', 'Male', 'dsfsd', NULL, '41861896', '2019-07-19 19:00:23', '2019-07-19 19:00:23'),
('shaheb@mail.com', 'fdvgdf', 'efwrfw', 'sfgdrfg', 'gergv', 'Male', '5aas', '3.jpg', '48949', '2019-07-19 18:52:19', '2019-07-19 18:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `medical_test`
--
ALTER TABLE `medical_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `medicine_brand`
--
ALTER TABLE `medicine_brand`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patient_symptomps`
--
ALTER TABLE `patient_symptomps`
  ADD PRIMARY KEY (`symptomp_id`);

--
-- Indexes for table `prescribed_medicine`
--
ALTER TABLE `prescribed_medicine`
  ADD PRIMARY KEY (`medicine_brand_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

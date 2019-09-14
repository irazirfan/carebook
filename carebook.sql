-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 02:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'admin@gmail.com', '123', '2019-09-13 08:17:08', '2019-09-13 09:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `origin` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `effects` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `symptom` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `diagnosis` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `name`, `origin`, `effects`, `symptom`, `diagnosis`, `image`) VALUES
(1, 'Sars', 'Europe', 'Contagious and potentially fatal respiratory illness.', 'Aches, chills, diarrhea, dry coughing, and shortness of breath', ' SARS-CoV/ RT-PCR', 'sars.jpg'),
(2, 'Ebola', 'Africa', 'Contagious and potentially fatal respiratory illness.', 'Aches, chills, diarrhea, dry coughing, and shortness of breath', 'SARS-CoV/ RT-PCR', 'ebola.jpg'),
(3, 'Avian Flu', 'America', 'Contagious and potentially fatal respiratory illness.', 'Aches, chills, diarrhea, dry coughing, and shortness of breath', ' SARS-CoV/ RT-PCR', 'avian_flu.jpg');

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
  `status` int(1) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `email`, `bmdc`, `degree`, `specialized`, `consulting`, `location`, `contact`, `status`, `updated_at`, `created_at`) VALUES
(1, 'shaheb@mail.com', 51464186, 'MBBS(DU), FCPS(UK), MD(USA)', 'Neuro Medicine', '3pm-8pm', 'Lab Aid Hospital, Panthpath, Dhaka.', '01454511511', NULL, '2019-07-19 18:52:19', '2019-07-19 18:52:19'),
(2, 'shahidul@gmail.com', 4552486, 'MBBS, FCPS, FRCPS', 'Eye Specialist', '5pm-10pm', 'Fulbari Busstand, Dinajpur', '01779452668', NULL, '2019-09-14 11:37:11', '2019-09-14 11:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `medical_test`
--

CREATE TABLE `medical_test` (
  `id` int(11) NOT NULL,
  `test_name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `patient_email` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `doctor_email` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `pdf` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `medical_test`
--

INSERT INTO `medical_test` (`id`, `test_name`, `patient_email`, `doctor_email`, `pdf`, `updated_at`, `created_at`) VALUES
(1, 'dasdaadfascasdsa', 'shaheb@mail.com', 'shaheb@mail.com', NULL, '2019-09-10 21:00:04', '2019-09-10 21:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'aefae', '2019-09-10 20:40:23', '2019-09-10 20:40:23'),
(2, 'Napa Extra', '2019-09-13 10:55:52', '2019-09-13 10:55:52');

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
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `patient_email` varchar(150) NOT NULL,
  `doctor_email` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `pdf`, `patient_email`, `doctor_email`, `date`, `updated_at`, `created_at`) VALUES
(1, 'efwrfw09-10-2019_0810pm.pdf', 'shaheb@mail.com', 'shaheb@mail.com', '2019-09-10', '2019-09-10 20:10:26', '2019-09-10 20:10:26'),
(2, 'efwrfw09-13-2019_1056am.pdf', 'shaheb@mail.com', 'shaheb@mail.com', '2019-09-13', '2019-09-13 10:56:15', '2019-09-13 10:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE `symptom` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'eafea', '2019-09-10 20:35:41', '2019-09-10 20:35:41'),
(2, 'Headache', '2019-09-13 10:54:58', '2019-09-13 10:54:58');

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
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'efeaf', '2019-09-10 20:34:20', '2019-09-10 20:34:20'),
(2, 'dasda', '2019-09-10 20:58:12', '2019-09-10 20:58:12'),
(3, 'dasdaadfasca', '2019-09-10 20:58:46', '2019-09-10 20:58:46'),
(4, 'dasdaadfascasdsa', '2019-09-10 21:00:04', '2019-09-10 21:00:04');

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
('shaheb@mail.com', 'fdvgdf', 'efwrfw', 'sfgdrfg', 'gergv', 'Male', '5aas', '1568373902.jpg', '48949', '2019-07-19 18:52:19', '2019-07-19 18:52:19'),
('shahidul@gmail.com', '01779452668', 'Dr. Shahidul', 'Islam Khan', 'Fulbari, Dinajpur', 'Male', '123', NULL, '7355392403', '2019-09-14 11:37:11', '2019-09-14 11:37:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_brand`
--
ALTER TABLE `medicine_brand`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_test`
--
ALTER TABLE `medical_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

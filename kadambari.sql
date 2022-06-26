-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 01:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kadambari`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `mobile`, `subject`, `date`) VALUES
(55, 'Shubha', 'Mandal', 'shubhamandal70@gmail.com', '01822823912', 'xsdfsdfdfsdf', '2021-09-27 21:21:31'),
(57, 'Shubha', 'Mandal', 'shubhamandal70@gmail.com', '01822823912', 'ddddddddddddddddddddddddddddffffffffffffffffffffffffffssssssssssssssssssssssssssssss', '2021-09-28 11:21:57'),
(58, 'Shubha', 'Mandal', 'shubhamandal70@gmail.com', '01822823912', 'sfsdfsdsdfsfsd', '2021-09-28 11:24:06'),
(59, 'Shubha', 'Mandal', 'shubhamandal70@gmail.com', '01822823912', 'ddzdsfdsfdfcxccvvxvxv', '2021-10-04 16:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `countdowns`
--

CREATE TABLE `countdowns` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `end_date` datetime NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countdowns`
--

INSERT INTO `countdowns` (`id`, `title`, `end_date`, `date`) VALUES
(15, 'কদমবাড়ী উচ্চবিদ্যালয় প্রাক্তন শিক্ষার্থী সম্মিলন আর মাত্র ', '2022-12-25 01:23:00', '2022-06-27 01:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `news_description` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news_description`, `date`) VALUES
(28, 'welcome', 'কদমবাড়ী উচ্চবিদ্যালয় প্রাক্তন শিক্ষার্থী সম্মিলন ২০২০ এ আপনাকে স্বাগতম ***  আপনি  একবারই রেজিস্ট্রেশন করতে পারবেন। যদি কোন প্রকার ভুল করে থাকেন তবে আপনার তথ্য আপডেড করার জন্য ইমেইল করুন: shubhamandal70@gmail.com', '2021-09-27 21:24:41'),
(34, 'dgdfgfdgdfgdfddf', 'ghghghgghgghghghggghghhghhhgghg', '2022-06-27 01:20:02'),
(35, 'dadasa', 'bgbgbgbgg', '2022-06-27 01:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pdf` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `pdf`, `date`) VALUES
(5, 'SHUBHA MANDAL', '5.pdf', '2022-06-19 22:38:34'),
(6, 'SHUBHA MANDAL', '6.pdf', '2022-06-20 21:31:06'),
(7, 'test', '7.pdf', '2022-06-20 23:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` datetime NOT NULL DEFAULT current_timestamp(),
  `exam` varchar(20) NOT NULL,
  `last_edu` varchar(25) NOT NULL,
  `village` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `bkash` varchar(20) NOT NULL,
  `taka` int(30) NOT NULL,
  `trxid` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qr_image` varchar(50) NOT NULL,
  `string` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `father_name`, `mother_name`, `email`, `dob`, `exam`, `last_edu`, `village`, `mobile`, `blood`, `bkash`, `taka`, `trxid`, `gender`, `image`, `qr_image`, `string`, `date`, `status`) VALUES
(141, 'Shubha Mandal', 'dfgdggd', 'dfgfdgdfgdfg', 'shubhamandal70@gmail.com', '1998-02-17 00:00:00', '2021', 'sfdsfs', 'village', '01923451794', 'AB+', '01923453099', 50, 'AAAAAAA2', 'Male', '141.jpg', '141.png', 'Q1ICZAO4\n', '2022-01-17 11:36:04', 'pending'),
(142, 'Shubha Mandal', 'dfgdggd', 'dfgfdgdfgdfg', 'shubhamandal70@gmail.com', '2006-02-17 00:00:00', '2021', 'sfdsfs', 'village', '01323451945', 'A+', '01923453099', 50, 'AAAAAAA2', 'Male', '142.jpg', '142.png', 'HU3SMNCY', '2022-01-17 13:07:24', 'pending'),
(143, 'Shubha Mandal', 'dfgdggd', 'dfgfdgdfgdfg', 'shubhamandal70@gmail.com', '1997-02-17 00:00:00', '2021', 'Honours ', 'village', '01384459758', 'A+', '01923453099', 50, 'AAAAAAA2', 'Female', '143.jpg', '143.png', 'OCD09LUG\n', '2022-01-17 13:35:04', 'approved'),
(154, 'Shubha Mandal', 'dfgdggd', 'dfgfdgdfgdfg', 'shubhamandal70@gmail.com', '1994-02-25 00:00:00', '2021', 'sfdsfs', 'village', '018228239125', 'AB+', '01923453099', 50, 'AAAAAAA2', 'Male', '154.jpg', '154.png', 'AP5T6S2O', '2022-01-25 11:55:11', ''),
(156, 'Shubha Mandal', 'SHAMVU MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '1993-09-18 00:00:00', '2011', 'bsc in cse', 'test village', '01822823912', 'B+', '+8801822823912', 5000, 'ASDFGJHV14', 'Male', '156.jpg', '156.png', '6VDMWO35', '2022-06-18 23:25:18', 'pending'),
(157, 'Shubha Mandal', 'SHAMVU MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '1978-01-19 00:00:00', '2011', 'bsc in cse', 'test village', '01822823913', 'A+', '01822823912', 5000, 'ASDFGJHV14', 'Male', '157.jpg', '157.png', '14CPXIQW', '2022-06-19 21:06:53', 'pending'),
(159, 'Shubha Mandal', 'SHAMVU MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '1982-01-19 00:00:00', '2011', 'bsc in cse', 'village test', '01822823915', 'AB+', '01822823912', 500000, 'ASDFGJHV14', 'Female', '159.jpg', '159.png', '2XGDENM1', '2022-06-19 21:20:52', 'pending'),
(160, 'Shubha Mandal', 'SHAMVU MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '1990-01-20 00:00:00', '2011', 'bsc in cse', 'test village', '01822823911', 'A+', '01822823912', 5000, 'AS1254NJSD', 'Male', '160.jpg', '160.png', 'FMO7158E', '2022-06-20 20:45:30', 'pending'),
(161, 'Shubha Mandal', 'sddsfdsfd', 'nnnnnnn', 'shubhamandal70@gmail.com', '1980-01-20 00:00:00', '2012', 'bsc in cse', 'test village', '01822823922', 'AB+', '01822823912', 5000, 'ASDFGJHV14', 'Male', '161.jpg', '161.png', 'AKUV4309', '2022-06-20 21:49:10', 'pending'),
(162, 'Shubha Mandal', 'SHAMVU MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '1990-02-22 00:00:00', '2011', 'bsc in cse', 'test village', '01822823988', 'O+', '01822823912', 1000, 'AS1254NJSD', 'Male', '162.jpg', '162.png', 'VSZF7W03', '2022-06-22 00:29:43', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `total_entry_counts`
--

CREATE TABLE `total_entry_counts` (
  `id` int(10) NOT NULL,
  `security_code` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` datetime NOT NULL DEFAULT current_timestamp(),
  `exam` varchar(20) NOT NULL,
  `last_edu` varchar(25) NOT NULL,
  `village` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `extra_person` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_entry_counts`
--

INSERT INTO `total_entry_counts` (`id`, `security_code`, `name`, `father_name`, `mother_name`, `email`, `dob`, `exam`, `last_edu`, `village`, `mobile`, `blood`, `gender`, `extra_person`, `date`) VALUES
(59, 'Q1ICZAO4', 'Shubha Mandal', 'SHAMVU MANDAL', 'FULMALA MANDAL', 'shubhamandal70@gmail.com', '1990-10-23 00:00:00', '2019', 'honours', 'UTTAR JATRABARI', '+8801822823912', 'A+', 'Male', '0', '2022-02-02 03:18:42'),
(60, 'OCD09LUG', 'Shubha Mandal', 'KASHINATH MANDAL', 'FULMALA MANDAL', 'shubhamandal70@gmail.com', '1987-02-23 00:00:00', '2019', 'honours', 'UTTAR JATRABARI', '+8801822823914', 'AB+', 'Male', '0', '2022-02-02 03:20:28'),
(61, 'HU3SMNCY', 'BARNA MANDAL', 'KASHINATH MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '2004-02-23 00:00:00', '2019', 'honours', 'UTTAR JATRABARI', '+8801822823913', 'A+', 'Male', '0', '2022-05-17 09:19:30'),
(62, '2XGDENM1', 'Shubha Mandal', 'SHAMVU MANDAL', 'nnnnnnn', 'shubhamandal70@gmail.com', '1982-01-19 00:00:00', '2011', 'bsc in cse', 'village test', '01822823915', 'AB+', 'Female', '0', '2022-06-20 14:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expire_link` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `password`, `token`, `expire_link`, `status`, `create_at`, `update_at`) VALUES
(34, 'Shubha Mandal', 'shubhamandal70@gmail.com', 'admin', '$2y$10$qccLiF3sG0KA3ffeL/hRyuzWc1E3mSjI3iM0wmKMiLm2DADBsSLem', 'd62ddc9bb275910a58b546670d09af', NULL, 'active', '2022-02-01 07:06:01', NULL),
(35, 'Shubha Mandal', 'test@gmail.com', 'moderatore', '$2y$10$9qt2X1JB.UumqMzrQfspBePcUbu2n5cI8oGpiIPJwWRu149QNlsNC', '887c9b89f3ec8a799b5f50b4ab70b7', NULL, 'active', NULL, NULL),
(36, 'Shubha Mandal', 'abc@gmail.com', 'gen_user', '$2y$10$ESMc1X9y6FuKoD8oK8lco.UHJqHuNxNPgBG38L1/lCYCAk/f8ZRWC', '652f7e7f078f8f20160d0592b850a7', NULL, 'active', NULL, NULL),
(37, 'Shubha Mandal', 'shubha@ergov.com', 'super_admin', '$2y$10$oiwdGSSIFdnN.IqU4Z2x7O5dxZlj/.wlMFiU6q0KCEPqfgoUZ.LT6', '213bf1b76450c6ea6d299489bb995e', NULL, 'active', '2022-05-18 07:59:37', '2022-06-19 16:37:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdowns`
--
ALTER TABLE `countdowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_entry_counts`
--
ALTER TABLE `total_entry_counts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `countdowns`
--
ALTER TABLE `countdowns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `total_entry_counts`
--
ALTER TABLE `total_entry_counts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

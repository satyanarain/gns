-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 02:49 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '2018-07-10 18:30:00', '2018-07-10 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `country`, `state`, `city`, `country_code`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 'Satya', '8510074970', 'undefined', 'India', 'Uttar Pradesh', 'Varanasi', '', NULL, '2018-07-12 04:43:41', '2018-07-12 04:43:41'),
(2, 'w23232', '32322', '32322', 'Gibraltar', '', '223232', '91', NULL, '2018-07-12 04:45:34', '2018-07-12 04:45:34'),
(3, 'w23232', '32322', '32322', 'Gibraltar', '', '223232', '91', NULL, '2018-07-12 04:54:38', '2018-07-12 04:54:38'),
(4, 'Name', '5345345435', 'satya2000chauhan@gmail.com', 'Gibraltar', 'Andhra Pradesh', 'test', '91', '127.0.0.1', '2018-07-12 05:18:57', '2018-07-12 05:18:57'),
(5, 'Satya', '8510074970', 'undefined', 'India', 'Uttar Pradesh', 'Varanasi', '', '127.0.0.1', '2018-07-12 05:19:39', '2018-07-12 05:19:39'),
(6, '', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 05:19:46', '2018-07-12 05:19:46'),
(7, '', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 05:29:53', '2018-07-12 05:29:53'),
(8, '', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 05:49:16', '2018-07-12 05:49:16'),
(9, '', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 05:50:38', '2018-07-12 05:50:38'),
(10, '', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 05:51:10', '2018-07-12 05:51:10'),
(11, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:36:51', '2018-07-12 08:36:51'),
(12, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:37:48', '2018-07-12 08:37:48'),
(13, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:42:01', '2018-07-12 08:42:01'),
(14, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:42:07', '2018-07-12 08:42:07'),
(15, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:42:18', '2018-07-12 08:42:18'),
(16, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:43:45', '2018-07-12 08:43:45'),
(17, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:43:47', '2018-07-12 08:43:47'),
(18, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:44:11', '2018-07-12 08:44:11'),
(19, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:44:13', '2018-07-12 08:44:13'),
(20, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:44:15', '2018-07-12 08:44:15'),
(21, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:44:16', '2018-07-12 08:44:16'),
(22, 'undefined', '', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 08:44:21', '2018-07-12 08:44:21'),
(23, 'wq', '3442342343', '', 'India', '', '', '91', '127.0.0.1', '2018-07-12 09:03:14', '2018-07-12 09:03:14'),
(24, '34', '3434343434', '', 'India', 'Arunachal Pradesh', 'test123', '91', '127.0.0.1', '2018-07-12 09:06:47', '2018-07-12 09:06:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

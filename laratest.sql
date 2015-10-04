-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2015 at 08:27 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laratest`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Creative Tech', 'team of web developers and programmers', '2015-09-30 17:46:28', '2015-09-30 17:46:28'),
(2, 'Creative Design', 'team of artist and designers', '2015-09-30 17:47:04', '2015-09-30 17:47:04'),
(3, 'Business Department', 'team for business and client relations', '2015-09-30 17:48:05', '2015-09-30 17:48:05'),
(4, 'Content Writers', 'team of creative writers', '2015-09-30 17:48:44', '2015-09-30 17:48:44'),
(5, 'Sprnklr', 'team of analyst dedicated for a UK client', '2015-09-30 17:54:08', '2015-09-30 17:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `department_id`, `fname`, `lname`, `email`, `created_at`, `updated_at`) VALUES
(1, '1', 'Roy', 'Niepes', 'rlniepes@straightarrow.com.ph', '2015-09-30 17:42:20', '2015-09-30 17:42:20'),
(2, '4', 'Ivy', 'Polea', 'ivpolea@straightarrow.com.ph', '2015-09-30 17:49:46', '2015-09-30 17:49:46'),
(3, '2', 'Ivan', 'Denosta', 'ibdenosta@straightarrow.com.ph', '2015-09-30 17:53:01', '2015-09-30 17:53:01'),
(4, '5', 'Cezar', 'Camba', 'cccamba@sprnklr.com.ph', '2015-09-30 17:55:07', '2015-09-30 17:55:07'),
(5, '3', 'Nico', 'Sagun', 'ncsagun@straightarrow.com.ph', '2015-09-30 18:32:34', '2015-09-30 18:32:34'),
(6, '1', 'Lloyd', 'Chua', 'llchua@straightarrow.com.ph', '2015-10-03 03:39:00', '2015-10-03 03:39:00'),
(7, '5', 'Allan', 'Belen', 'anbelen@sprnklr.com.ph', '2015-10-03 04:09:03', '2015-10-03 04:09:03'),
(8, '2', 'Ian', 'Sumagaysay', 'igsumagaysay@straightarrow.com.ph', '2015-10-03 04:13:07', '2015-10-03 04:13:07'),
(9, '1', 'Andrew', 'Llorera', 'abllorera@straightarrow.com.ph', '2015-10-03 04:16:07', '2015-10-03 04:16:07'),
(10, '4', 'Fenelle', 'Macarayan', 'fnmacarayan@straightarrow.com.ph', '2015-10-03 04:21:24', '2015-10-03 04:21:24'),
(11, '2', 'Happy', 'Navarro', 'hjnavarro@straightarrow.com.ph', '2015-10-03 04:22:55', '2015-10-03 04:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_17_114059_create_table_employees', 1),
('2015_09_18_064956_create_table_departments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 01:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reality`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id_location` int(10) UNSIGNED NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id_location`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Banskobystrický kraj', NULL, NULL),
(2, 'Banskobystrický kraj', NULL, NULL),
(3, 'Košice', '2018-11-05 11:30:15', '2018-11-05 11:30:15'),
(4, 'Nitra', '2018-11-05 11:30:15', '2018-11-05 11:30:15'),
(5, 'Bratislava', '2018-11-05 11:30:15', '2018-11-05 11:30:15'),
(6, 'Trnava', '2018-11-05 11:30:15', '2018-11-05 11:30:15'),
(7, 'Banská Bystrica', '2018-11-05 11:30:15', '2018-11-05 11:30:15'),
(8, 'Bratislava', '2018-11-05 11:30:15', '2018-11-05 11:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_22_093044_create_users_table', 1),
(3, '2018_11_05_104958_create_user_group_table', 3),
(4, '2018_11_05_105723_create_user_group_table', 4),
(6, '2018_11_05_110205_create_users_table', 6),
(11, '2018_11_05_100914_create_location_table', 7),
(12, '2018_11_05_110017_create_user_group_table', 7),
(13, '2018_11_05_110329_create_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_user` int(10) UNSIGNED NOT NULL,
  `First_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_usergroup` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_user`, `First_name`, `Last_name`, `Email`, `Password`, `ID_usergroup`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Wick', 'johndoe@gmail.com', '$2y$10$W3cFGUZbfHZ6mEBPYXaf8.eLGqZ4aPxTOy.XaQV6WzjM0eN62zbOG', NULL, NULL, '2018-11-05 11:40:47'),
(2, 'John', 'Doe', 'johndoe@gmail.com', '$2y$10$t36pnswMkZaLOaXq9.zLBuhkUAr7.YnCLnVoudv6wLKOx4M/Y97gu', NULL, NULL, NULL),
(3, 'John', 'Wick', 'John.Wick@gmail.com', 'e1apcfG1', NULL, '2018-11-05 10:27:01', '2018-11-05 10:27:01'),
(4, 'Adrienne', 'Doe', 'Adrienne.Doe@gmail.com', 'cX6UChla', NULL, '2018-11-05 10:27:01', '2018-11-05 10:27:01'),
(5, 'Adrienne', 'Strowman', 'Adrienne.Strowman@gmail.com', '8BCI1C7r', NULL, '2018-11-05 10:27:01', '2018-11-05 10:27:01'),
(6, 'Thomas', 'Strowman', 'Thomas.Strowman@gmail.com', 'hLcJowIY', NULL, '2018-11-05 10:27:01', '2018-11-05 10:27:01'),
(7, 'Thomas', 'Orton', 'Thomas.Orton@gmail.com', '4k4prQc9', NULL, '2018-11-05 10:27:01', '2018-11-05 10:27:01'),
(8, 'Adrienne', 'Doe', 'Adrienne.Doe@gmail.com', 'spVQDszJ', NULL, '2018-11-05 10:27:01', '2018-11-05 10:27:01'),
(9, 'Juliette', 'Orton', 'Juliette.Orton@gmail.com', '8yTrIJn5', NULL, '2018-11-05 10:27:02', '2018-11-05 10:27:02'),
(10, 'Adrienne', 'Strowman', 'Adrienne.Strowman@gmail.com', '21SDlmol', NULL, '2018-11-05 10:27:02', '2018-11-05 10:27:02'),
(11, 'Adrienne', 'Orton', 'Adrienne.Orton@gmail.com', 'jhBpHfzt', NULL, '2018-11-05 10:27:02', '2018-11-05 10:27:02'),
(12, 'Juliette', 'Strowman', 'Juliette.Strowman@gmail.com', 'KEHWfzFE', NULL, '2018-11-05 10:27:02', '2018-11-05 10:27:02'),
(14, 'Michael', 'Strowman', 'Michael.Strowman@gmail.com', 'o4UE9KRx', NULL, '2018-11-05 11:29:57', '2018-11-05 11:29:57'),
(15, 'Juliette', 'Doe', 'Juliette.Doe@gmail.com', 'eUCi6HqJ', NULL, '2018-11-05 11:29:57', '2018-11-05 11:29:57'),
(16, 'Juliette', 'Strowman', 'Juliette.Strowman@gmail.com', '6g3MZOVc', NULL, '2018-11-05 11:29:57', '2018-11-05 11:29:57'),
(17, 'Juliette', 'Doe', 'Juliette.Doe@gmail.com', 'nwVhlnnP', NULL, '2018-11-05 11:29:57', '2018-11-05 11:29:57'),
(18, 'John', 'Orton', 'John.Orton@gmail.com', 'KZwk3zYp', NULL, '2018-11-05 11:29:57', '2018-11-05 11:29:57'),
(19, 'Juliette', 'Strowman', 'Juliette.Strowman@gmail.com', 'HUtxV8UP', NULL, '2018-11-05 11:29:58', '2018-11-05 11:29:58'),
(20, 'John', 'Wick', 'John.Wick@gmail.com', '7L5sQquS', NULL, '2018-11-05 11:29:58', '2018-11-05 11:29:58'),
(21, 'Juliette', 'Wayne', 'Juliette.Wayne@gmail.com', 'gDIfA6Gu', NULL, '2018-11-05 11:29:58', '2018-11-05 11:29:58'),
(22, 'Thomas', 'Orton', 'Thomas.Orton@gmail.com', 'wIJ5sh3f', NULL, '2018-11-05 11:29:58', '2018-11-05 11:29:58'),
(23, 'Adrienne', 'Strowman', 'Adrienne.Strowman@gmail.com', 'um7cxpK9', NULL, '2018-11-05 11:29:58', '2018-11-05 11:29:58'),
(24, 'Adrienne', 'Wayne', 'Adrienne.Wayne@gmail.com', 'qMQIohx7', NULL, '2018-11-05 11:29:58', '2018-11-05 11:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `ID_usergroup` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`ID_usergroup`, `title`, `created_at`, `updated_at`) VALUES
(2, 'registered', NULL, NULL),
(3, 'unregistered', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`),
  ADD KEY `users_id_usergroup_foreign` (`ID_usergroup`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`ID_usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `ID_usergroup` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_usergroup_foreign` FOREIGN KEY (`ID_usergroup`) REFERENCES `user_group` (`ID_usergroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 04:08 PM
-- Server version: 5.7.12-log
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
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Sukhrob', 'Kurbonov', 'suxrob.ielts@mail.ru', '$2y$10$tm1EXlAMXv3cl.P8C.qrUuCNMpfMQ6IbSlPLSu9B4pOf44Jk37H7m', NULL, NULL, '2018-05-11 15:30:30'),
(8, 'AbuBakr', 'Jabborov', 'Abubakr@mail.ru', '@bubakr1997A', NULL, '2018-05-11 15:22:45', '2018-05-12 02:28:05'),
(9, 'Navruzbek', 'Noraliev', 'Noraliev@mail.ru', '12345', NULL, '2018-05-11 15:23:22', '2018-05-11 15:23:22'),
(10, 'Sarvar', 'Khujaev', 'sarvar@mail.ru', 'qwerty', NULL, '2018-05-11 15:23:44', '2018-05-11 15:23:44'),
(11, 'Shokhjakhon', 'Nishonov', 'shokh@mail.ru', 'nishonov', NULL, '2018-05-11 15:24:06', '2018-05-11 15:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `browsing_history`
--

CREATE TABLE `browsing_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cat_id`
--

CREATE TABLE `cat_id` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_id`
--

INSERT INTO `cat_id` (`id`, `name`) VALUES
(1, 'Trade & Commerce'),
(4, 'Transport & logistics'),
(5, 'Construction'),
(6, 'Bars & Restaurants'),
(7, 'Accountancy & Finance'),
(8, 'Security & Protection'),
(9, 'Beauty & Fitness'),
(10, 'Tourism & Entertainment'),
(11, 'Education'),
(12, 'Art & Culture'),
(13, 'Medicine & Pharmacy'),
(14, 'It & Telecommuncation'),
(16, 'Marketing & Design'),
(17, 'Production'),
(18, 'Internship'),
(19, 'Others');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_04_24_152628_create_admin_table', 2),
(6, '2018_05_11_073743_create_posts_table', 3),
(7, '2018_05_11_073935_add_user_id_to_posts', 3),
(8, '2018_05_11_074153_add_cover_image_to_posts', 3),
(9, '2018_05_11_074236_add_carousel_news_id_to_posts', 3),
(10, '2018_05_11_074327_add_description_to_posts', 4),
(11, '2018_05_11_174132_create_page_views_table', 5),
(12, '2018_05_11_174327_create_page_visits', 5),
(13, '2018_05_11_175656_update_page_visits', 6),
(14, '2018_05_12_103024_add_to_posts_cat_id', 6),
(15, '2018_05_12_103352_create_cat_id_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `page-views`
--

CREATE TABLE `page-views` (
  `id` int(10) UNSIGNED NOT NULL,
  `visitable_id` bigint(20) UNSIGNED NOT NULL,
  `visitable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('navrozbek97@mail.ru', '$2y$10$vG4CWmGE2nUxMO0IlTi9wuVJmkDecsPb2K7lZRaSZo5HHpyFHCzom', '2018-04-25 01:22:43'),
('suxrob@mail.ru', '$2y$10$XHAghnjAnQ6QUe355J96geskMFRDsKOL/4QGmr0BRaQufnqvBznUe', '2018-04-27 10:11:52'),
('suxrob.ielts@mail.ru', '$2y$10$NnfHMUGPDeFbGdMQ0jQEiOT75pkqWQVbtgjuNfSezOZKFP.sIC.pa', '2018-04-27 10:36:06'),
('alisherkarimov123@gmail.com', '$2y$10$dPme/6o546pRvNbHRYluseskEk4jhJieQUvCoullo7T9MYnpSL/Pq', '2018-05-11 00:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_news_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '14'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`, `carousel_news_id`, `description`, `cat_id`) VALUES
(1596, 'Marketolog', 'Experienced Marketolog needed\r\nExperienced Marketolog needed\r\nExperienced Marketolog needed', '2018-05-12 14:40:14', '2018-05-12 14:40:33', 93, 'trader_1526154033.jpg', NULL, 'Experienced Marketolog needed', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(93, 'Abubakr', 'Jabbarov', 'abubakr0609@gmail.com', 'Zhab_03#', NULL, '2018-05-12 12:34:27', '2018-05-12 12:34:27'),
(94, 'Sarvar', 'Karimov', 'sarvar@gmail.com', 'Hunter&06', NULL, '2018-05-13 03:19:27', '2018-05-13 03:19:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `browsing_history`
--
ALTER TABLE `browsing_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_id`
--
ALTER TABLE `cat_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page-views`
--
ALTER TABLE `page-views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `browsing_history`
--
ALTER TABLE `browsing_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cat_id`
--
ALTER TABLE `cat_id`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `page-views`
--
ALTER TABLE `page-views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1597;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

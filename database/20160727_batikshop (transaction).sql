-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 12:52 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batikshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_histories`
--

CREATE TABLE `asset_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transactions`
--

CREATE TABLE `detail_transactions` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` int(11) NOT NULL,
  `unit_profit` int(11) NOT NULL,
  `sum_price` int(11) NOT NULL,
  `sum_profit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `material_id` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `vendor_id`, `type_id`, `material_id`, `note`, `purchase_price`, `sell_price`, `quantity`, `created_at`, `updated_at`) VALUES
(4, '11-3-5-mataram', 11, 3, 5, 'mataram', 27000, 45000, -73, '2016-06-13 13:11:39', '2016-07-27 08:46:51'),
(5, '11-10-5-mataram', 11, 10, 5, 'mataram', 30000, 60000, 1, '2016-06-13 13:13:02', '2016-07-27 08:42:40'),
(6, '11-4-5-mataram', 11, 4, 5, 'mataram', 30000, 60000, -96, '2016-06-13 13:15:05', '2016-07-27 08:46:51'),
(7, '11-3-5-tb', 11, 3, 5, 'tb', 24000, 40000, 30, '2016-06-13 13:18:33', '2016-07-27 08:42:40'),
(8, '11-3-5-s', 11, 3, 5, 's', 21000, 35000, 30, '2016-06-13 13:22:21', '2016-06-30 19:00:58'),
(9, '11-3-6-klasik', 11, 3, 6, 'klasik', 28000, 45000, 12, '2016-06-13 13:28:49', '2016-06-13 13:28:49'),
(10, '11-4-6-klasik', 11, 4, 6, 'klasik', 32000, 45000, 2, '2016-06-13 13:37:21', '2016-06-13 13:37:21'),
(11, '11-4-8-klasik', 11, 4, 8, 'klasik', 33000, 45000, 12, '2016-06-13 13:38:08', '2016-06-13 13:38:08'),
(12, '11-35-5-bobal', 11, 35, 5, 'bobal', 37000, 70000, 38, '2016-06-13 13:43:13', '2016-06-27 15:09:45'),
(13, '11-34-5-bolero', 11, 34, 5, 'bolero', 36000, 70000, 1, '2016-06-13 13:44:23', '2016-06-13 13:44:23'),
(14, '11-15-8-srb', 11, 15, 8, 'srb', 70000, 100000, 13, '2016-06-13 13:48:13', '2016-06-13 13:48:13'),
(15, '11-32-5-rok', 11, 32, 5, 'rok', 24000, 40000, 9, '2016-06-13 13:57:26', '2016-06-13 13:57:26'),
(16, '11-32-5-rok pd', 11, 32, 5, 'rok pd', 20000, 35000, 25, '2016-06-13 13:59:52', '2016-06-30 18:57:35'),
(17, '22-36-5-Payung', 22, 36, 5, 'Payung', 26000, 45000, 6, '2016-07-09 15:15:36', '2016-07-09 15:15:36'),
(18, '10-13-5-KD Prodo', 10, 13, 5, 'KD Prodo', 180000, 270000, 6, '2016-07-09 15:17:19', '2016-07-09 15:17:19'),
(19, '10-3-5-KD Prodo 0', 10, 3, 5, 'KD Prodo 0', 25000, 45000, 6, '2016-07-09 15:19:26', '2016-07-09 15:19:26'),
(20, '10-3-5-KD Prodo 2', 10, 3, 5, 'KD Prodo 2', 30000, 45000, 3, '2016-07-09 15:20:35', '2016-07-09 15:20:35'),
(21, '10-3-5-KD Prodo 3', 10, 3, 5, 'KD Prodo 3', 32000, 45000, 7, '2016-07-09 15:21:36', '2016-07-09 15:25:36'),
(22, '10-3-5-KD Prodo 4', 10, 3, 5, 'KD Prodo 4', 30000, 45000, 4, '2016-07-09 15:22:22', '2016-07-09 15:22:22'),
(23, '10-3-5-KD Prodo 1', 10, 3, 5, 'KD Prodo 1', 28000, 45000, 5, '2016-07-09 15:23:10', '2016-07-09 15:23:10'),
(24, '10-3-5-KD Prodo tg s', 10, 3, 5, 'KD Prodo tg s', 35000, 55000, 1, '2016-07-09 15:24:03', '2016-07-27 08:46:51'),
(25, '10-3-5-KD Prodo tg m', 10, 3, 5, 'KD Prodo tg m', 35000, 55000, 3, '2016-07-09 15:24:48', '2016-07-09 15:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `item_histories`
--

CREATE TABLE `item_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_histories`
--

INSERT INTO `item_histories` (`id`, `item_id`, `purchase_price`, `sell_price`, `created_at`, `updated_at`) VALUES
(4, 4, 27000, 45000, '2016-06-13 13:11:39', '2016-06-13 13:11:39'),
(5, 5, 30000, 60000, '2016-06-13 13:13:02', '2016-06-13 13:13:02'),
(6, 6, 30000, 60000, '2016-06-13 13:15:05', '2016-06-13 13:15:05'),
(7, 7, 24000, 40000, '2016-06-13 13:18:33', '2016-06-13 13:18:33'),
(8, 8, 21000, 35000, '2016-06-13 13:22:21', '2016-06-13 13:22:21'),
(9, 9, 28000, 45000, '2016-06-13 13:28:49', '2016-06-13 13:28:49'),
(10, 10, 32000, 45000, '2016-06-13 13:37:21', '2016-06-13 13:37:21'),
(11, 11, 33000, 45000, '2016-06-13 13:38:08', '2016-06-13 13:38:08'),
(12, 12, 37000, 70000, '2016-06-13 13:43:13', '2016-06-13 13:43:13'),
(13, 13, 36000, 70000, '2016-06-13 13:44:23', '2016-06-13 13:44:23'),
(14, 14, 70000, 100000, '2016-06-13 13:48:13', '2016-06-13 13:48:13'),
(15, 15, 24000, 40000, '2016-06-13 13:57:26', '2016-06-13 13:57:26'),
(16, 16, 20000, 35000, '2016-06-13 13:59:52', '2016-06-13 13:59:52'),
(17, 4, 27000, 45000, '2016-06-26 13:28:10', '2016-06-26 13:28:10'),
(18, 4, 27000, 45000, '2016-06-26 13:28:30', '2016-06-26 13:28:30'),
(19, 4, 27000, 45000, '2016-06-26 13:33:26', '2016-06-26 13:33:26'),
(20, 7, 24000, 40000, '2016-06-26 13:34:03', '2016-06-26 13:34:03'),
(21, 8, 21000, 35000, '2016-06-26 13:40:08', '2016-06-26 13:40:08'),
(22, 7, 24000, 40000, '2016-06-27 15:02:23', '2016-06-27 15:02:23'),
(23, 12, 37000, 70000, '2016-06-27 15:03:18', '2016-06-27 15:03:18'),
(24, 12, 37000, 70000, '2016-06-27 15:05:08', '2016-06-27 15:05:08'),
(25, 12, 37000, 70000, '2016-06-27 15:09:45', '2016-06-27 15:09:45'),
(26, 16, 20000, 35000, '2016-06-30 18:57:35', '2016-06-30 18:57:35'),
(27, 8, 21000, 35000, '2016-06-30 18:58:12', '2016-06-30 18:58:12'),
(28, 8, 21000, 35000, '2016-06-30 19:00:58', '2016-06-30 19:00:58'),
(29, 4, 27000, 45000, '2016-06-30 20:44:46', '2016-06-30 20:44:46'),
(30, 17, 26000, 45000, '2016-07-09 15:15:36', '2016-07-09 15:15:36'),
(31, 6, 30000, 60000, '2016-07-09 15:16:13', '2016-07-09 15:16:13'),
(32, 18, 180000, 270000, '2016-07-09 15:17:19', '2016-07-09 15:17:19'),
(33, 19, 25000, 45000, '2016-07-09 15:19:26', '2016-07-09 15:19:26'),
(34, 20, 30000, 45000, '2016-07-09 15:20:35', '2016-07-09 15:20:35'),
(35, 21, 30000, 45000, '2016-07-09 15:21:36', '2016-07-09 15:21:36'),
(36, 22, 30000, 45000, '2016-07-09 15:22:22', '2016-07-09 15:22:22'),
(37, 23, 28000, 45000, '2016-07-09 15:23:10', '2016-07-09 15:23:10'),
(38, 24, 35000, 55000, '2016-07-09 15:24:03', '2016-07-09 15:24:03'),
(39, 25, 35000, 55000, '2016-07-09 15:24:48', '2016-07-09 15:24:48'),
(40, 21, 32000, 45000, '2016-07-09 15:25:36', '2016-07-09 15:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Katun', '2016-06-05 18:58:25', '2016-06-05 18:58:25'),
(6, 'Sunwosh', '2016-06-05 18:58:37', '2016-06-05 18:58:37'),
(7, 'Semi Sutra', '2016-06-05 18:58:55', '2016-06-05 18:58:55'),
(8, 'Prodo', '2016-06-13 13:22:52', '2016-06-13 13:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trans_date` date NOT NULL,
  `total` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Hem', '2016-06-05 18:52:29', '2016-06-05 18:52:29'),
(4, 'Kemeja', '2016-06-05 18:52:38', '2016-06-05 18:52:38'),
(5, 'Blus Pendek', '2016-06-05 18:53:01', '2016-06-05 18:53:01'),
(8, 'Blus Pd', '2016-06-05 18:56:46', '2016-06-05 18:56:46'),
(9, 'Blus 3/4', '2016-06-05 18:57:12', '2016-06-05 18:57:12'),
(10, 'Blus Pj', '2016-06-05 18:57:22', '2016-06-05 18:57:22'),
(11, 'Gamis', '2016-06-05 18:57:58', '2016-06-05 18:57:58'),
(12, 'Sorjan', '2016-06-05 18:58:09', '2016-06-05 18:58:09'),
(13, 'Sarimbit Gamis SRG', '2016-06-13 12:52:29', '2016-06-13 12:52:29'),
(14, 'Sarimbit Dreess SRD', '2016-06-13 12:52:54', '2016-06-13 12:52:54'),
(15, 'Sarimbit Blus SRB', '2016-06-13 12:53:19', '2016-06-13 12:53:19'),
(16, 'Dress', '2016-06-13 12:54:04', '2016-06-13 12:54:04'),
(17, 'JumpSuit JS', '2016-06-13 12:54:32', '2016-06-13 12:54:32'),
(18, 'Setelan Kaos STK', '2016-06-13 12:55:21', '2016-06-13 12:55:21'),
(19, 'Setelan Kebaya STB', '2016-06-13 12:56:02', '2016-06-13 12:56:02'),
(20, 'Kebaya Atasan', '2016-06-13 12:56:35', '2016-06-13 12:56:35'),
(21, 'Blangkon Jogja', '2016-06-13 12:56:59', '2016-06-13 12:56:59'),
(22, 'Blangkon Solo', '2016-06-13 12:57:17', '2016-06-13 12:57:17'),
(23, 'Iket', '2016-06-13 12:57:30', '2016-06-13 12:57:30'),
(24, 'Topi', '2016-06-13 12:57:40', '2016-06-13 12:57:40'),
(25, 'Krudung Paris', '2016-06-13 12:58:07', '2016-06-13 12:58:07'),
(26, 'Krudung Kolong', '2016-06-13 12:58:26', '2016-06-13 12:58:26'),
(27, 'Krudung Pasmina', '2016-06-13 12:58:47', '2016-06-13 12:58:47'),
(28, 'Krudung Dalaman', '2016-06-13 12:59:01', '2016-06-13 12:59:01'),
(29, 'Tas Batik', '2016-06-13 12:59:39', '2016-06-13 12:59:39'),
(30, 'Mukena Batik', '2016-06-13 12:59:52', '2016-06-13 12:59:52'),
(31, 'Kaos Wayang', '2016-06-13 13:00:25', '2016-06-13 13:00:25'),
(32, 'Rok Batik', '2016-06-13 13:00:52', '2016-06-13 13:00:52'),
(33, 'Celana Batik', '2016-06-13 13:01:11', '2016-06-13 13:01:11'),
(34, 'Bolero', '2016-06-13 13:38:42', '2016-06-13 13:38:42'),
(35, 'Bobal Bolero Bolak-balik', '2016-06-13 13:39:08', '2016-06-13 13:39:08'),
(36, 'Daster', '2016-07-09 15:14:28', '2016-07-09 15:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Guyub Hana Haq', 'guyubhana@gmail.com', '$2y$10$3hWeEbMjwggNs32euHEr..kLdyQbM0k4SSZVPcke1.z76uvIIej3u', 'UU7y3rcvSa9ofTIQzQB9Wq8EpIVdMyxLNOlvAZWo04YqCuqNPfldVyua3NTU', NULL, '2016-07-25 18:24:57'),
(2, 'Whilda Chaq', 'whildachaq@gmail.com', '$2y$10$d4Y2wNF6gwW8SEL3eP6vueLxRkjy0e1Riehcf40is/vCNDcfzW2yO', 'nzuebJs6ViM8wE4PIZMUlwvY7sxYCmbe5pDL8lRnVq0ICG44UeEdMwF3hJqB', NULL, '2016-07-09 15:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(10, 'Putri Lestari', '2016-06-05 18:49:09', '2016-06-05 18:49:09'),
(11, 'Arta Klewer', '2016-06-05 18:49:50', '2016-06-05 18:49:50'),
(12, 'Ria Batik', '2016-06-05 18:50:05', '2016-06-05 18:50:05'),
(13, 'Sri Lestari Pantai', '2016-06-05 19:11:41', '2016-06-05 19:11:41'),
(14, 'Yuliani Klewer', '2016-06-13 12:46:27', '2016-06-13 12:46:27'),
(15, 'Mardiyah Klewer', '2016-06-13 12:47:23', '2016-06-13 12:47:23'),
(16, 'H n F Kaos', '2016-06-13 12:47:52', '2016-06-13 12:47:52'),
(17, 'Yuniarti Bringharjo', '2016-06-13 12:48:33', '2016-06-13 12:48:33'),
(18, 'Blangkon Jogja', '2016-06-13 12:48:55', '2016-06-13 12:48:55'),
(19, 'Aini Blangkon Solo', '2016-06-13 12:49:22', '2016-06-13 12:49:22'),
(20, 'Atik Kebaya', '2016-06-13 12:49:42', '2016-06-13 12:49:42'),
(21, 'Benang Raja', '2016-06-13 12:49:54', '2016-06-13 12:49:54'),
(22, 'Asih Klewer', '2016-06-13 12:50:24', '2016-06-13 12:50:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_histories`
--
ALTER TABLE `asset_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD PRIMARY KEY (`trans_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_code_unique` (`code`),
  ADD KEY `vendor_id` (`vendor_id`,`type_id`,`material_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexes for table `item_histories`
--
ALTER TABLE `item_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `materials_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_histories`
--
ALTER TABLE `asset_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `item_histories`
--
ALTER TABLE `item_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD CONSTRAINT `detail_transactions_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transactions_ibfk_2` FOREIGN KEY (`trans_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_ibfk_3` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_histories`
--
ALTER TABLE `item_histories`
  ADD CONSTRAINT `item_histories_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

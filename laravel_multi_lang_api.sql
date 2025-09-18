-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2025 at 06:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_multi_lang_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$M1oxTxvp3bAv0J0YQghdGepl0q690UmCeRMw6f0SKlf9TbR5P6wT6', '2025-09-03 04:00:53', '2025-09-03 04:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_zh` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `featured_in_home` tinyint(1) NOT NULL DEFAULT 0,
  `description_en` text NOT NULL,
  `description_zh` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_en`, `title_zh`, `author`, `category`, `image`, `featured_in_home`, `description_en`, `description_zh`, `created_at`, `updated_at`) VALUES
(13, 'Death Of An Ancient Tree', '古树之死', 'Dr. Joseph Brakus PhD', 'love', '/uploads/blogs/1757756909.jpg', 0, '<p><strong>Mirror\'s Edge Catalyst has more varied gameplay for Faith and Runners, where they serve a greater purpose than in the first game</strong>. In January 2014, writer Rhianna Pratchett announced on Twitter that she would not be involved with the new game and neither would most of the original team.</p>', '<p><strong>《镜之边缘催化剂》为信仰和跑步者提供了更多样化的游戏玩法，它们比第一款游戏有更大的用途</strong>。2014年1月，作家Rhianna Pratchett在Twitter上宣布，她不会参与新游戏，原始团队的大多数人也不会参与。</p>', '2025-09-03 06:07:12', '2025-09-13 03:59:16'),
(14, 'Death Of An Ancient Tree', '古树之死', 'Jocelyn Gutmann', 'love', '/uploads/blogs/1757756753.jpg', 1, '<p><strong>Mirror\'s Edge Catalyst has more varied gameplay for Faith and Runners, where they serve a greater purpose than in the first game</strong>. In January 2014, writer Rhianna Pratchett announced on Twitter that she would not be involved with the new game and neither would most of the original team.</p>\r\n<ul>\r\n<li>Rhianna Pratchett</li>\r\n<li>announced on Twitter</li>\r\n</ul>', '<p><strong>《镜之边缘催化剂》为信仰和跑步者提供了更多样化的游戏玩法，它们比第一款游戏有更大的用途</strong>。 2014年1月，作家Rhianna Pratchett在Twitter上宣布，她不会参与新游戏，原始团队的大多数人也不会参与。</p>\r\n<ul>\r\n<li>Rhianna Pratchett</li>\r\n<li>在Twitter上宣布</li>\r\n</ul>', '2025-09-03 06:17:26', '2025-09-13 04:19:57'),
(15, 'Death Of An Ancient Tree', '古树之死', 'Dr. Joseph Brakus PhD', 'jungle', '/uploads/blogs/1757852389.jpg', 0, '<p><strong>Mirror\'s Edge Catalyst has more varied gameplay for Faith and Runners, where they serve a greater purpose than in the first game</strong>. In January 2014, writer Rhianna Pratchett announced on Twitter that she would not be involved with the new game and neither would most of the original team.<br>Explore the latest technological advances and market trends shaping the metal recycling industry</p>', '<p><strong>《镜之边缘催化剂》为信仰和跑步者提供了更多样化的游戏玩法，它们比第一款游戏有更大的用途</strong>。2014年1月，作家Rhianna Pratchett在Twitter上宣布，她不会参与新游戏，原始团队的大多数人也不会参与。<br>探索塑造金属回收行业的最新技术进步和市场趋势</p>', '2025-09-14 06:19:52', '2025-09-14 06:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_zh` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_zh`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Ferrous-Metal', '黑色金属', 'ferrous-metal', '2025-09-09 03:57:56', '2025-09-13 23:27:45'),
(2, 'Non-Ferrous-Metal', '有色金属', 'non-ferrous-metal', '2025-09-09 03:58:36', '2025-09-14 02:39:43'),
(4, 'Plastics', '塑料', 'plastics', '2025-09-15 08:49:31', '2025-09-15 08:49:31'),
(5, 'Paper', '纸', 'paper', '2025-09-15 09:03:12', '2025-09-15 09:03:12'),
(6, 'Catalytic-Converters', '催化转化器', 'catalytic-converters', '2025-09-15 09:32:14', '2025-09-15 09:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_04_22_064512_create_case_studies_table', 1),
(6, '2025_04_25_173620_create_admins_table', 1),
(7, '2025_09_03_055929_create_blogs_table', 1),
(8, '2025_09_09_062742_create_categories_table', 2),
(9, '2025_09_09_062756_create_products_table', 2),
(10, '2025_09_13_144749_add_multilang_to_categories_table', 3),
(11, '2025_09_13_151448_add_multilang_to_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_zh` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description_en` text DEFAULT NULL,
  `description_zh` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name_en`, `name_zh`, `slug`, `description_en`, `description_zh`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'ferro', '费罗铎', 'ferro', NULL, '', 'uploads/products/1757413678.jpg', '2025-09-09 04:27:47', '2025-09-13 09:27:18'),
(2, 2, 'no ferro', '无铁', 'no-ferro', NULL, NULL, 'uploads/products/1757413798.jpg', '2025-09-09 04:29:58', '2025-09-14 00:37:29'),
(4, 1, 'ferroo 1', '费鲁一号', 'ferroo-1', NULL, NULL, 'uploads/products/1757777335.png', '2025-09-13 09:28:57', '2025-09-14 00:36:37'),
(5, 1, 'ferro two', '铁二', 'ferro-two', NULL, NULL, 'uploads/products/1757832220.png', '2025-09-14 00:43:40', '2025-09-14 00:43:40'),
(6, 1, 'ferroo une', '催化转化器', 'ferroo-une', NULL, NULL, 'uploads/products/1757860460.png', '2025-09-14 08:34:20', '2025-09-14 08:34:20'),
(7, 1, 'ferro pos', '有色金属', 'ferro-pos', NULL, NULL, 'uploads/products/1757860485.jpg', '2025-09-14 08:34:45', '2025-09-14 08:34:45'),
(8, 1, 'ferro so', '有色金属', 'ferro-so', NULL, NULL, 'uploads/products/1757860508.jpg', '2025-09-14 08:35:08', '2025-09-14 08:35:08'),
(9, 1, 'freeo eto', '无铁', 'freeo-eto', NULL, NULL, 'uploads/products/1757860550.jpg', '2025-09-14 08:35:50', '2025-09-14 08:35:50'),
(10, 1, 'ferro seto', '费鲁一号', 'ferro-seto', NULL, NULL, 'uploads/products/1757860578.jpg', '2025-09-14 08:36:18', '2025-09-14 08:36:18'),
(11, 2, 'no ferro to', '黑色金属', 'no-ferro-to', NULL, NULL, 'uploads/products/1757860608.png', '2025-09-14 08:36:48', '2025-09-14 08:36:48'),
(12, 2, 'ferro tein', '催化转化器', 'ferro-tein', NULL, NULL, 'uploads/products/1757860630.jpg', '2025-09-14 08:37:10', '2025-09-14 08:37:10'),
(13, 2, 'no ferro cher', '催化转化器', 'no-ferro-cher', NULL, NULL, 'uploads/products/1757860648.jpg', '2025-09-14 08:37:28', '2025-09-14 08:37:28'),
(14, 2, 'no ferro pei', '无铁', 'no-ferro-pei', NULL, NULL, 'uploads/products/1757860670.jpg', '2025-09-14 08:37:50', '2025-09-14 08:37:50'),
(15, 2, 'no ferro sie', '无铁', 'no-ferro-sie', NULL, NULL, 'uploads/products/1757860692.jpg', '2025-09-14 08:38:12', '2025-09-14 08:38:12'),
(16, 2, 'ono ferroo sev', '费鲁一号', 'ono-ferroo-sev', NULL, NULL, 'uploads/products/1757860712.jpg', '2025-09-14 08:38:32', '2025-09-14 08:38:32'),
(18, 2, 'ono ferroo  eito', '无铁', 'ono-ferroo-eito', NULL, NULL, 'uploads/products/1757860901.jpg', '2025-09-14 08:41:41', '2025-09-14 08:41:41'),
(19, 2, 'no ferro neino', '费鲁一号', 'no-ferro-neino', NULL, NULL, 'uploads/products/1757860928.jpg', '2025-09-14 08:42:08', '2025-09-14 08:42:08'),
(20, 4, 'Plastics uno', '有色金属', 'plastics-uno', NULL, NULL, 'uploads/products/1757948780.jpg', '2025-09-15 09:06:20', '2025-09-15 09:06:20'),
(21, 4, 'plas to', '无铁', 'plas-to', NULL, NULL, 'uploads/products/1757948875.jpg', '2025-09-15 09:07:55', '2025-09-15 09:07:55'),
(22, 4, 'Plastics tre', '费鲁一号', 'plastics-tre', NULL, NULL, 'uploads/products/1757948954.png', '2025-09-15 09:09:14', '2025-09-15 09:09:14'),
(23, 4, 'plas fo', '无铁', 'plas-fo', NULL, NULL, 'uploads/products/1757948990.png', '2025-09-15 09:09:50', '2025-09-15 09:09:50'),
(24, 5, 'paper uno', '无铁', 'paper-uno', NULL, NULL, 'uploads/products/1757949488.jpg', '2025-09-15 09:18:08', '2025-09-15 09:18:08'),
(25, 5, 'Paper to', '无铁', 'paper-to', NULL, NULL, 'uploads/products/1757949545.jpg', '2025-09-15 09:19:05', '2025-09-15 09:19:05'),
(26, 5, 'paper tre', '催化剂', 'paper-tre', NULL, NULL, 'uploads/products/1757949960.jpg', '2025-09-15 09:26:00', '2025-09-15 09:26:00'),
(27, 5, 'Paper fro', '催化剂', 'paper-fro', NULL, NULL, 'uploads/products/1757950013.jpg', '2025-09-15 09:26:53', '2025-09-15 09:26:53'),
(28, 6, 'Catalytic-Converters', '催化转化器', 'catalytic-converters', NULL, NULL, 'uploads/products/1757950406.png', '2025-09-15 09:33:26', '2025-09-15 09:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

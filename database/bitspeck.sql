-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 03:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitspeck`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Men', 1, NULL, NULL),
(2, 'Women', 1, NULL, NULL),
(3, 'Sports & Wear', 1, NULL, NULL),
(4, 'Jewellery', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_tin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_sales` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_tin`, `company_title`, `company_phone`, `company_sales`, `company_status`, `created_at`, `updated_at`) VALUES
(1, 'Puma', '56564545', 'Puma the Sports', '+8801533938105', NULL, 1, '2021-04-16 04:08:20', NULL),
(2, 'Nike', '56564545', 'Sports Company', '015563512323', NULL, 1, '2021-04-16 05:27:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoive_id` bigint(20) UNSIGNED NOT NULL,
  `invoive_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2021_04_13_041631_create_sessions_table', 1),
(15, '2021_04_13_052640_create_user_roles_table', 1),
(16, '2021_04_14_080600_create_categories_table', 2),
(17, '2021_04_14_080736_create_products_table', 3),
(18, '2021_04_14_095934_create_products_table', 4),
(19, '2021_04_14_101130_create_companies_table', 5),
(20, '2021_04_14_101343_create_outlets_table', 6),
(21, '2021_04_14_101738_create_sales_table', 7),
(22, '2021_04_14_101906_create_purchases_table', 8),
(23, '2021_04_14_102105_create_invoices_table', 9),
(24, '2021_04_14_102339_create_payments_table', 10),
(25, '2021_04_14_102606_create_return_products_table', 11),
(26, '2021_04_14_102655_create_settings_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `outlet_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_address` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `outlet_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_company` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_invoice` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image02` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_desc` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(10) DEFAULT NULL,
  `product_dprice` int(10) DEFAULT NULL,
  `product_quantity` int(5) NOT NULL DEFAULT 1,
  `product_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category` int(11) DEFAULT NULL,
  `product_purchase` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_sales` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_title`, `product_image`, `product_image02`, `product_desc`, `product_price`, `product_dprice`, `product_quantity`, `product_code`, `product_slug`, `product_category`, `product_purchase`, `product_sales`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'Denim Jeans', 'blue denim jeans xl ', 'Product_1618397940.jpg', NULL, 'lorem ipsum dolor sit amet consectetur a', 700, NULL, 1, NULL, NULL, 1, NULL, NULL, 1, '2021-04-14 04:59:00', NULL),
(2, 'full Shirt', 'Silk Cotton T shirt', 'Product_1618478443.jpg', NULL, NULL, 500, NULL, 1, NULL, NULL, 1, NULL, NULL, 1, '2021-04-15 03:20:44', NULL),
(3, 'Bat', 'Sg Cricket Bat', 'Product_1618478657.jpg', NULL, NULL, 4000, NULL, 5, NULL, NULL, 3, NULL, NULL, 1, '2021-04-15 03:24:17', NULL),
(4, 'Ball', '4 part Ball', 'Product_1618478872.jpg', NULL, 'lorem ipsum dolor sit amet consectetur a', 500, NULL, 5, NULL, NULL, 3, NULL, NULL, 1, '2021-04-15 03:27:52', NULL),
(5, 'Helmet', 'NB Helmet', 'Product_1618479053.jpg', NULL, NULL, 2000, NULL, 5, NULL, NULL, 3, NULL, NULL, 1, '2021-04-15 03:30:53', NULL),
(6, 'Saare', 'Silk Saare', 'Product_1618485342.jpg', NULL, 'Red , Black Saare', 2000, NULL, 5, '441319', NULL, 2, NULL, NULL, 1, '2021-04-15 05:15:42', NULL),
(7, 'Neckless', 'Diamond Neckless', 'Product_1618500344.jpg', NULL, '120 carate', 200000, NULL, 2, '215968', NULL, 4, NULL, NULL, 1, '2021-04-15 09:25:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `purchase_amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_products`
--

CREATE TABLE `return_products` (
  `returnproduct_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` bigint(20) UNSIGNED NOT NULL,
  `sales_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `sales_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4UCjojKExrlC9bOKInPyaX9wT6hgjWF6RpdsnPcc', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTnhJU2t3YmZiMUJxajhyYmZteEthRFoxYWV6cXk3Y1BycDhzTUhqbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9vdXRsZXQvYWRkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFdzQTFVOG9CNTVRZk04NFZQY2VjZy5HWTVWdllPTlVDS2NqRDRYQndPaXJXSDFJeXpHU0hhIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRXc0ExVThvQjU1UWZNODRWUGNlY2cuR1k1VnZZT05VQ0tjakQ0WEJ3T2lyV0gxSXl6R1NIYSI7fQ==', 1618572960);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `user_image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` int(11) NOT NULL DEFAULT 1,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_status`, `user_image`, `user_role`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Bitspeck It', 'bitspeck@gmail.com', NULL, '$2y$10$WsA1U8oB55QfM84VPcecg.GY5VvYONUCKcjD4XBwOirWH1IyzGSHa', 1, 'User_1_1618511326.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-15 12:29:59'),
(2, 'Shahriar Sharar', 'shahriarhossainsharar@gmail.com', NULL, '$2y$10$WsA1U8oB55QfM84VPcecg.GY5VvYONUCKcjD4XBwOirWH1IyzGSHa', 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14 02:20:07', '2021-04-15 12:50:38'),
(3, 'Shakib Al Hasan', 'Shakib@gmail.com', NULL, '$2y$10$RTPzsmPEbK1mjDG.mF.81u238Ucc0hZ31PD91zLuvCK.U3Ba2Jg6O', 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14 02:25:17', '2021-04-15 12:50:44'),
(4, 'Sales Manager', 'sales@gmail.com', NULL, '$2y$10$1FVSIogaQfHM4Jr0GExLpOn.z21NFbAuG59kqgCdKNXSlZigi6tL.', 1, 'User__1618390237.jpg', 3, NULL, NULL, NULL, NULL, NULL, '2021-04-14 02:50:37', NULL),
(5, 'Subscribe1', 'subscriber@gmail.com', NULL, '$2y$10$uB3NYEwl2gCUFnKQsz0YW.oT0Z7K9dp94iCVWbl4x4QUwxF2Yfk7m', 0, 'User__1618391950.jpg', 4, NULL, NULL, NULL, NULL, NULL, '2021-04-14 03:19:10', '2021-04-14 03:42:11'),
(6, 'Subscribe111', 'subscriber1@gmail.com', NULL, '$2y$10$PI836mJ02NUxTapt9o8fZOlYsx39U2ruMaNFQNV9xCa6tMejWJSO6', 1, 'User_6_1618493765.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2021-04-14 03:42:43', '2021-04-15 07:36:05'),
(7, 'Nahiyyan Hossain', 'nahiyyan@gmail.com', NULL, '$2y$10$IAFicQ5aQwUlImjSXfWo3u1dNeUE3jjtjr7JlqS.7KpZfPhD65SW2', 1, 'User__1618568298.jpg', 4, NULL, NULL, NULL, NULL, NULL, '2021-04-16 04:18:19', NULL),
(8, 'Hasib Ahmed', 'hasib@gmail.com', NULL, '$2y$10$re5ZLi0P/pwNjr8jCYU7zu3OXrdK3z7R7NwRrFAHlp/Zqtt6aITta', 1, 'User__1618568540.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2021-04-16 04:22:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, NULL, NULL),
(2, 'Subscriber', 1, NULL, NULL),
(3, 'sales', 1, NULL, NULL),
(4, 'Accounts', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoive_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`outlet_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

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
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `return_products`
--
ALTER TABLE `return_products`
  ADD PRIMARY KEY (`returnproduct_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `user_roles_role_name_unique` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoive_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `outlet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_products`
--
ALTER TABLE `return_products`
  MODIFY `returnproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

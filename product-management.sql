-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 04:05 PM
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
-- Database: `product-management`
--

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
(5, '2024_11_07_104117_create_products_table', 2);

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
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(32, 'radhuni-chotpoti-masala-50-gm-399', 'Radhuni Chotpoti Masala 50 gm', 'Radhuni Chotpoti Masala 50 gm   Radhuni Chotpoti Masala 50 gm', 45.00, 20, 'images/BUUeScfQrRlqom4SAfKF2eZKIQqCANSyopfMkJeD.png', '2024-11-09 08:34:50', '2024-11-09 08:34:50'),
(33, 'foster-clarks-culinary-essence-vanilla-321', 'Foster Clark\'s Culinary Essence Vanilla', 'Foster Clark\'s Culinary Essence Vanilla  Foster Clark\'s Culinary Essence Vanilla  Foster Clark\'s Culinary Essence Vanilla', 90.00, 50, 'images/calVOaCN8zqZjiNYUstj1SwdNDBDZKgIwYPpNLow.png', '2024-11-09 08:36:11', '2024-11-09 08:36:11'),
(34, 'ahmed-white-vinegar-500-ml-921', 'Ahmed White Vinegar-500 ml', 'Ahmed White Vinegar-500 ml Ahmed White Vinegar-500 ml', 70.00, 100, 'images/fknBHvuw0NhfgZPMe4HIRJJXZYeIciIlbrBTI9M8.png', '2024-11-09 08:37:29', '2024-11-09 08:37:29'),
(35, 'radhuni-kasundi-285-ml-898', 'Radhuni Kasundi-285 ml', 'Radhuni Kasundi-285 ml Radhuni Kasundi-285 ml', 50.00, 20, 'images/qZSBmENjvcYunI4chnE3FpyoCD0HmFbyDyKeYkJx.png', '2024-11-09 08:38:34', '2024-11-09 08:38:34'),
(36, 'pran-synthetic-vinegar-650-ml-424', 'Pran Synthetic Vinegar-650 ml', 'Pran Synthetic Vinegar-650 ml Pran Synthetic Vinegar-650 ml Pran Synthetic Vinegar-650 ml', 55.00, 20, 'images/jzbnKZNbk8YnCDadAYlGW0c5huHufKL87Aj2ug3M.png', '2024-11-09 08:40:54', '2024-11-09 08:40:54'),
(37, 'ahmed-white-vinegar-325-ml-ahmed-white-vinegar-325-ml-449', 'Ahmed White Vinegar 325 ml Ahmed White Vinegar 325 ml', 'Ahmed White Vinegar 325 ml Ahmed White Vinegar 325 ml', 50.00, 20, 'images/AGEA8xmOkO5Ke3Hhv0WE3Z24j1UPAojmnizvbDj1.png', '2024-11-09 08:41:58', '2024-11-09 08:41:58'),
(38, 'bragg-organic-apple-cider-vinegar-473-ml-309', 'Bragg Organic Apple Cider Vinegar 473 ml', 'Bragg Organic Apple Cider Vinegar 473 ml Bragg Organic Apple Cider Vinegar 473 ml', 873.00, 20, 'images/4qZJCURYy9ASUXtGSEGIVGDhjzYQh5whwmJjgaAg.png', '2024-11-09 08:43:17', '2024-11-09 08:43:17'),
(39, 'bd-vinegar-650-ml-456', 'BD Vinegar 650 ml', 'BD Vinegar 650 ml BD Vinegar 650 ml BD Vinegar 650 ml', 70.00, 50, 'images/J1AktN3hjePIPxuNnLgjiFW4qlwXUIYyGwLVbf5e.png', '2024-11-09 08:44:25', '2024-11-09 08:44:25'),
(41, 'fay-air-freshenerjasmine-3-in-1-300-ml-782', 'Fay Air Freshener(Jasmine) 3 in 1 300 ml', 'Fay Air Freshener(Jasmine) 3 in 1 300 mlFay Air Freshener(Jasmine) 3 in 1 300 mlFay Air Freshener(Jasmine) 3 in 1 300 ml', 50.00, 20, 'images/2MorfveOA7LHq7clFunzOYn895z9zk2lQzeIuN4d.png', '2024-11-09 08:47:13', '2024-11-09 08:47:13'),
(42, 'odonil-air-freshener-mix-fragrance-50-gm-913', 'Odonil Air Freshener Mix Fragrance 50 gm', 'Odonil Air Freshener Mix Fragrance 50 gmOdonil Air Freshener Mix Fragrance 50 gmOdonil Air Freshener Mix Fragrance 50 gmOdonil Air Freshener Mix Fragrance 50 gm', 45.00, 20, 'images/6QEMxUcipIvVfHHtUNRmGSYMufzJWT0E8uNOBimJ.png', '2024-11-09 08:48:41', '2024-11-09 08:48:41'),
(43, 'odonil-air-freshener-block-orchid-dew-50-gm-136', 'Odonil Air Freshener Block Orchid Dew 50 gm', 'Odonil Air Freshener Block Orchid Dew 50 gm Odonil Air Freshener Block Orchid Dew 50 gm Odonil Air Freshener Block Orchid Dew 50 gm', 55.00, 20, 'images/lBABBgb0Y86BwN6I7I6JFouOwSw2jJA8VVdicER8.png', '2024-11-09 08:49:37', '2024-11-09 08:49:37'),
(44, 'godrej-aer-pocket-bundle-3-pcs-643', 'Godrej Aer Pocket Bundle 3 pcs', 'Godrej Aer Pocket Bundle 3 pcs Godrej Aer Pocket Bundle 3 pcs', 175.00, 20, 'images/pSxviGuLfTi0aO5DZIKbqkCMmEPVqNtc83WnoYfE.png', '2024-11-09 08:51:13', '2024-11-09 08:51:13');

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
  ADD UNIQUE KEY `products_product_id_unique` (`product_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

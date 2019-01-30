-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 02:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movierec`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `addressLine1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressLine2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameOnCard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cardNumber` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiryDate` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `addressLine1`, `addressLine2`, `town`, `county`, `nameOnCard`, `cardNumber`, `expiryDate`, `cvv`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1 Main Street', 'Roseland', 'Bray', 'Wicklow', 'Grace Cautley', '0123456789012345', '12/20', '146', 2, '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
(2, '2 Main Street', 'Roseland', 'Bray', 'Wicklow', 'Hosh Hoo', '1123456789012345', '11/22', '001', 3, '2019-01-23 14:34:56', '2019-01-23 14:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(2, 'Adventure', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(3, 'Animation', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(4, 'Comedy', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(5, 'Drama', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(6, 'Documentary', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(7, 'Fantasy', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(8, 'Family', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(9, 'Fiction', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(10, 'Historical', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(11, 'Horror', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(12, 'Indie', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(13, 'Musical', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(14, 'Romance', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(15, 'Romantic-Comedy', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(16, 'Sci-Fi', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(17, 'Thriller', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(18, 'War', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(19, 'Western', '2019-01-23 14:34:55', '2019-01-23 14:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, 'covers/default.png', '2019-01-23 14:34:55', '2019-01-23 14:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_19_162939_create_roles_table', 1),
(4, '2018_11_19_163051_create_role_user_table', 1),
(5, '2018_11_19_163311_create_genres_table', 1),
(6, '2018_11_19_163312_create_movies_table', 1),
(7, '2018_11_19_163356_create_customers_table', 1),
(8, '2018_11_19_163357_create_orders_table', 1),
(9, '2018_11_19_163438_create_movie_order_table', 1),
(10, '2018_11_19_163727_create_reviews_table', 1),
(11, '2019_01_17_162923_create_images_table', 1),
(12, '2019_01_17_163127_add_image_id_to_movies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `releaseDate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainCast` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `directors` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `runTime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producers` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writers` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `price`, `summary`, `releaseDate`, `mainCast`, `directors`, `region`, `runTime`, `type`, `language`, `producers`, `writers`, `genre_id`, `created_at`, `updated_at`, `image_id`) VALUES
(1, 'Fantastic Beast', '12.99', ' movie summary', '2001-01-01', 'cast 1, cast 2, cast 3', 'director 1, director 2', 'Ireland', '02:50', 'DVD', 'English', 'producers 1, producers 2', 'writers', 7, '2019-01-23 14:34:56', '2019-01-23 14:34:56', 1),
(2, 'Avengers Infinity War', '12.99', ' movie summary', '2002-02-02', 'cast 1, cast 2, cast 3', 'director 1, director 2', 'Ireland', '02:50', 'DVD', 'English', 'producers 1, producers 2', 'writers', 1, '2019-01-23 14:34:56', '2019-01-23 14:34:56', 1),
(3, 'Deadpool 2', '12.99', ' movie summary', '2003-03-03', 'cast 1, cast 2, cast 3', 'director 1, director 2', 'Ireland', '02:50', 'DVD', 'English', 'producers 1, producers 2', 'writers', 4, '2019-01-23 14:34:56', '2019-01-23 14:34:56', 1),
(4, 'Coco', '12.99', ' movie summary', '2001-01-01', 'cast 1, cast 2, cast 3', 'director 1, director 2', 'Ireland', '02:50', 'DVD', 'English', 'producers 1, producers 2', 'writers', 3, '2019-01-23 14:34:56', '2019-01-23 14:34:56', 1),
(5, 'The Greatest Showman', '12.99', ' movie summary', '2002-02-02', 'cast 1, cast 2, cast 3', 'director 1, director 2', 'Ireland', '02:50', 'DVD', 'English', 'producers 1, producers 2', 'writers', 13, '2019-01-23 14:34:56', '2019-01-23 14:34:56', 1),
(6, 'Ocean\'s 8', '12.99', ' movie summary', '2003-03-03', 'cast 1, cast 2, cast 3', 'director 1, director 2', 'Ireland', '02:50', 'DVD', 'English', 'producers 1, producers 2', 'writers', 4, '2019-01-23 14:34:56', '2019-01-23 14:34:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_order`
--

CREATE TABLE `movie_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_order`
--

INSERT INTO `movie_order` (`id`, `quantity`, `movie_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL),
(2, 1, 3, 1, NULL, NULL),
(3, 1, 5, 2, NULL, NULL),
(4, 2, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '2018-11-12', 2, '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
(2, '2018-11-12', 1, '2019-01-23 14:34:57', '2019-01-23 14:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starRating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `text`, `starRating`, `date`, `customer_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(1, 'This was SHIT.', 'This movie was not really good. It really wasnt, No.', '1', '2018-11-25', 1, 4, '2019-01-23 14:34:57', '2019-01-23 14:34:57'),
(2, 'This was FANTASTIC.', 'This movie was really good. It really was. YAAASSS.', '5', '2016-11-25', 2, 3, '2019-01-23 14:34:57', '2019-01-23 14:34:57'),
(3, 'This was OK.', 'This movie was ok. It really was. YAAASSS.', '3', '2016-11-25', 1, 1, '2019-01-23 14:34:57', '2019-01-23 14:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'An administrator', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(2, 'customer', 'A customer', '2019-01-23 14:34:54', '2019-01-23 14:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jacea', 'Jacea@gmail.com', NULL, '$2y$10$zFABV70drYky1tPUUUdjnuHv1tLNuFlF7IXQbZBAK4Jwr.968Y9Bq', 'Uenu3eVilkyB37VGil6SmCFpkHVtoJAAfMr5CkRScwAH4J44i0tus6Odvyml', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(2, 'Grace Cautley', 'grace@gmail.com', NULL, '$2y$10$HKPg8Z0JXkUOQExIqv8dH.PASFOP6lv92eLOElV2tskuQXUxu.gkW', 'Wgm6XjYqbNsppkW0QLaCEcyCTsSxzINGtGRlbPFTJYqp1SVjcXehjCG17IDE', '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
(3, 'Hosh Hoo', 'hosh@gmail.com', NULL, '$2y$10$u2h8KSwz9bxnJmN8mOOWFub9NVZoweIS0SVDjMLpJcbAya6/t/HCe', NULL, '2019-01-23 14:34:56', '2019-01-23 14:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_cardnumber_unique` (`cardNumber`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `images_path_unique` (`path`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`),
  ADD KEY `movies_image_id_foreign` (`image_id`);

--
-- Indexes for table `movie_order`
--
ALTER TABLE `movie_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_order_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_order_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_customer_id_foreign` (`customer_id`),
  ADD KEY `reviews_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie_order`
--
ALTER TABLE `movie_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `movies_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `movie_order`
--
ALTER TABLE `movie_order`
  ADD CONSTRAINT `movie_order_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `reviews_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

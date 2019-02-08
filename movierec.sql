-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 10:24 AM
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
(2, '2 Main Street', 'Roseland', 'Bray', 'Wicklow', 'Hosh Hoo', '1123456789012345', '11/22', '001', 3, '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
(3, '10 main street', 'main street', 'bray', 'dublin', 'JudyAnn Engracio', '4444888822226666', '10/20', '123', 4, '2019-01-30 11:47:23', '2019-01-30 11:47:23');

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
(11, 'Horror', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(13, 'Musical', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(14, 'Romance', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(16, 'Sci-Fi', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(17, 'Thriller', '2019-01-23 14:34:55', '2019-01-23 14:34:55');

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
(1, 'cover/default.png', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(2, 'cover/avengers-infinity-war.jpg', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(3, 'cover/coco.jpg', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(4, 'cover/deadpool-2 1.jpg', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(5, 'cover/fantastic-beast.jpg', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(6, 'cover/oceans-8.jpg', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(7, 'cover/the-greatest-showman.jpg', '2019-01-23 14:34:55', '2019-01-23 14:34:55'),
(8, 'cover/A Quiet Place-2019-02-05-143747.jpg', '2019-02-05 14:37:48', '2019-02-05 14:37:48'),
(9, 'cover/Kung Fu Panda-2019-02-07-192523.jpg', '2019-02-07 19:25:23', '2019-02-07 19:25:23'),
(10, 'cover/Kung Fu Panda-2019-02-07-192636.jpg', '2019-02-07 19:26:36', '2019-02-07 19:26:36'),
(11, 'cover/Coraline-2019-02-07-202856.png', '2019-02-07 20:28:56', '2019-02-07 20:28:56'),
(12, 'cover/Hot Fuzz-2019-02-07-203652.jpg', '2019-02-07 20:36:52', '2019-02-07 20:36:52'),
(13, 'cover/Chicken Little-2019-02-07-210141.jpg', '2019-02-07 21:01:41', '2019-02-07 21:01:41'),
(14, 'cover/How to Train your Dragon-2019-02-07-210949.jpg', '2019-02-07 21:09:49', '2019-02-07 21:09:49'),
(15, 'cover/The Emperor\'s New Groove-2019-02-07-211422.jpg', '2019-02-07 21:14:22', '2019-02-07 21:14:22');

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
(1, 'Fantastic Beasts and Where to Find Them', '12.00', 'Newt Scamander arrives in New York city searching for beasts from around the world but, he gets caught up in a conflict when some of the magical creatures in his care escape.', '18-11-2016', 'Eddie Redmayne, Katherine Waterston, Dan Fogler, Alison Sudol, Ezra Miller', 'David Yates', '2 (European Region)', '133 Minutes', 'DVD', 'English', 'David Heyman, J.K. Rowling, Steve Kloves, Lional Wigram', 'J.K. Rowling', 7, '2019-01-23 14:34:56', '2019-02-05 15:10:12', 1),
(2, 'Avengers: Infinity War', '14.00', 'The Avengers and their allies must be willing to sacrifice everything in an attempt to defeat the all powerful Thanos before his blitz of destruction and utter devastation.', '23-04-2018', 'Robert Downey Jr., Chris Hemsworth, Elizabeth Olsen, Chris Evens, Zoe Saldana, Josh Brolin', 'Anthony Russo, Joe Russo', '2 (European Region)', '149 Minutes', 'DVD', 'English', 'Kevin Feige', 'Christopher Markus, Stephen McFeely', 7, '2019-01-23 14:34:56', '2019-02-05 14:53:07', 1),
(3, 'Deadpool 2', '14.00', 'Foul-mouthed mutant mercenary Deadpool, brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg, Cable.', '18-05-2018', 'Ryan Reynolds, Josh Brolin, Zazie Beetz, Julian Dennison', 'David Leitch', '2 (European Region)', '119 Minutes', 'DVD', 'English', 'Simon Kinberg, Lauren Shuler Donner, Ryan Reynolds', 'Rhett Reese, Paul Wernick, Ryan Reynolds', 7, '2019-01-23 14:34:56', '2019-02-07 19:13:11', 1),
(4, 'Coco', '10.00', 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.', '22-11-2017', 'Anthony Gonzalez, Gael Garcia, Benjamin Bratt, Alanna Ubach, Renee Victor', 'Lee Unkrich', '2 (European Region)', '105 Minutes', 'DVD', 'English', 'Darla K. Anderson', 'Adrian Molina, Matthew Aldrich', 3, '2019-01-23 14:34:56', '2019-02-07 19:32:56', 1),
(5, 'The Greatest Showman', '12.00', 'Celebrates the birth of show business and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.', '20-12-2017', 'Hugh Jackman, Zac Efron, Zendaya, Michelle Williams, Rebecca Ferguson', 'Michael Gracey', '2 (European Region)', '105 Minutes', 'DVD', 'English', 'Laurence Mark, Peter Chernin, Jenno Topping', 'Jenny Bicks, Bill Condon', 1, '2019-01-23 14:34:56', '2019-02-07 20:23:50', 1),
(6, 'Ocean\'s 8', '14.00', 'Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City\'s yearly Met Gala.', '08-06-2018', 'Sandra Bullock, Cate Blanchett, Anne Hathaway, Helena Bonham Carter, Rihanna, Mindy Kaling, Sarah Paulson, Awkwafina', 'Gary Ross', '2 (European Region)', '110 Minutes', 'DVD', 'English', 'Steven Soderbergh, Susan Ekins', 'Gary Ross, Olivia Milch', 1, '2019-01-23 14:34:56', '2019-02-07 20:23:20', 1),
(7, 'A Quiet Place', '12.00', 'A family of four must navigate their lives in silence after mysterious creatures that hunt by sound threaten their survival. If they hear you, they hunt you.', '06-04-2018', 'Emily Blunt, John Krasinski, Millicent Simmonds, Noah Jupe', 'John Krasinski', '2 (European Region)', '90 Minutes', 'DVD', 'English', 'Michael Bay, Andrew Form, Brad Fuller', 'Bryan Woods, Scott Beck, John Krasinski', 17, '2019-02-05 14:37:48', '2019-02-05 14:43:38', 8),
(8, 'Kung Fu Panda', '8.00', 'China\'s fate hangs in the balance as a savage tries to take over. The Dragon Warrior mantle is supposedly bestowed upon a panda who is a novice in martial arts.', '06-06-2008', 'Jack Black, Dustin Hoffman, Angelina Jolie, James Hong, Ian McShane', 'John Stevenson, Mark Osborne', '2 (European Region)', '92 Minutes', 'DVD', 'English', 'Melissa Cobb', 'Jonathan Aibel, Glenn Berger', 3, '2019-02-07 19:26:36', '2019-02-07 19:26:36', 10),
(9, 'Coraline', '8.00', 'An adventurous 11-year-old girl finds another world that is a strangely idealized version of her frustrating home, but it has sinister secrets.', '06-02-2009', 'Dakota Fanning, Teri Hatcher, Jennifer Saunders, Dawn French, Ian McShane', 'Henry Selick', '2 (European Region)', '100 Minutes', 'DVD', 'English', 'Bill Mechanic, Claire Jennings, Mary Sandell, Henry Selick', 'Henry Selick', 3, '2019-02-07 20:28:56', '2019-02-07 20:28:56', 11),
(10, 'Hot Fuzz', '8.00', 'A skilled London police officer is transferred to a small town with a dark secret.', '16-02-2018', 'Simon Pegg, Nick Frost, Jim Broadbent, Timothy Dalton', 'Edgar Wright', '2 (European Region)', '121 Minutes', 'DVD', 'English', 'Nira Park, Tim Bevan, Eric Fellner', 'Edgar Wright, Simon Pegg', 4, '2019-02-07 20:36:52', '2019-02-07 20:36:52', 12),
(11, 'Chicken Little', '8.00', 'After ruining his reputation with the town, a courageous chicken must come to the rescue of his fellow citizens when aliens start an invasion.', '04-11-2005', 'Zach Braff, Joan Cusack, Steve Zahn, Garry Marshall', 'Mark Dindal', '2 (European Region)', '81 Minutes', 'DVD', 'English', 'Randy Fullmer', 'Steve Bencich, Ron J. Friedman, Ron Anderson', 3, '2019-02-07 21:01:41', '2019-02-07 21:01:41', 13),
(12, 'How to Train your Dragon', '8.00', 'A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.', '26-03-2010', 'Jay Baruchel, Gerard Butler, Craig Ferguson, America Ferrera', 'Chris Sanders, Dean DeBlois', '2 (European Region)', '98 Minutes', 'DVD', 'English', 'Bonnie Arnold', 'Will Davies, Dean DeBlois, Chris Sanders', 3, '2019-02-07 21:09:49', '2019-02-07 21:09:49', 14),
(13, 'The Emperor\'s New Groove', '8.00', 'Emperor Kuzco is turned into a llama by his ex-administrator Yzma, and must now regain his throne with the help of Pacha, the gentle llama herder.', '15-12-2000', 'David Spade, John Goodman, Eartha Kitt, Patrick Warburton, Wendie Malick', 'Mark Dindal', '2 (European Region)', '77 Minutes', 'DVD', 'English', 'Randy Fullmer', 'Chris Williams, Mark Dindal', 3, '2019-02-07 21:14:22', '2019-02-07 21:19:31', 15);

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
(3, 2, 3, NULL, NULL),
(4, 2, 4, NULL, NULL);

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
(1, 'Jacea', 'Jacea@gmail.com', NULL, '$2y$10$zFABV70drYky1tPUUUdjnuHv1tLNuFlF7IXQbZBAK4Jwr.968Y9Bq', '7bLUIdyMvWMVjd3sW5PJuG5OELoouj46z3DVUgQWEX9XkeO1sS2ycx13dMfP', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(2, 'Grace Cautley', 'grace@gmail.com', NULL, '$2y$10$HKPg8Z0JXkUOQExIqv8dH.PASFOP6lv92eLOElV2tskuQXUxu.gkW', 'MR77u0SLHrPPiQTgykQoiZKTY7kHLIp17JrcA6DD0bwYKKq0vQP4hzDRqU6A', '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
(3, 'Hosh Hoo', 'hosh@gmail.com', NULL, '$2y$10$u2h8KSwz9bxnJmN8mOOWFub9NVZoweIS0SVDjMLpJcbAya6/t/HCe', NULL, '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
(4, 'JudyAnn Engracio', 'Jae@gmail.com', NULL, '$2y$10$P8tGZUq530l5KCa9t0bfQ.lS0xlzMlFeoXnrDAVzLw0Y6zX23jSxG', '0NUp0DHCKFyfXh1SwoDCnh6ZPJwG9D2KYmmpa78nULcm6ezXhauVx1YFEbMM', '2019-01-30 11:47:23', '2019-01-30 11:47:23');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

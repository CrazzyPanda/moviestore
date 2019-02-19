-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 07:24 PM
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
(15, 'cover/The Emperor\'s New Groove-2019-02-07-211422.jpg', '2019-02-07 21:14:22', '2019-02-07 21:14:22'),
(16, 'cover/Isle of Dogs-2019-02-10-154413.jpg', '2019-02-10 15:44:13', '2019-02-10 15:44:13'),
(17, 'cover/Isle of Dogs-2019-02-10-154522.jpg', '2019-02-10 15:45:22', '2019-02-10 15:45:22'),
(18, 'cover/Megamind-2019-02-10-155412.jpg', '2019-02-10 15:54:12', '2019-02-10 15:54:12'),
(19, 'cover/Cloudy with a Chance of Meatballs-2019-02-10-160033.png', '2019-02-10 16:00:33', '2019-02-10 16:00:33'),
(20, 'cover/Paranorman-2019-02-10-165723.jpg', '2019-02-10 16:57:23', '2019-02-10 16:57:23'),
(21, 'cover/Paranorman-2019-02-10-165832.jpg', '2019-02-10 16:58:32', '2019-02-10 16:58:32'),
(22, 'cover/Fantastic Mr. Fox-2019-02-10-172339.jpg', '2019-02-10 17:23:40', '2019-02-10 17:23:40'),
(23, 'cover/Fantastic Mr. Fox-2019-02-10-172416.jpg', '2019-02-10 17:24:16', '2019-02-10 17:24:16'),
(24, 'cover/Wreck-It Ralph-2019-02-11-180751.jpg', '2019-02-11 18:07:52', '2019-02-11 18:07:52'),
(25, 'cover/Shrek-2019-02-11-181220.jpg', '2019-02-11 18:12:20', '2019-02-11 18:12:20'),
(27, 'cover/Fantastic Beasts and Where to Find Them-2019-02-12-121101.png', '2019-02-12 12:11:01', '2019-02-12 12:11:01'),
(28, 'cover/Deadpool 2-2019-02-12-121635.jpg', '2019-02-12 12:16:35', '2019-02-12 12:16:35'),
(29, 'cover/Coco-2019-02-12-121747.jpg', '2019-02-12 12:17:47', '2019-02-12 12:17:47'),
(30, 'cover/The Greatest Showman-2019-02-12-121857.jpg', '2019-02-12 12:18:57', '2019-02-12 12:18:57'),
(31, 'cover/Ocean\'s 8-2019-02-12-122020.jpg', '2019-02-12 12:20:20', '2019-02-12 12:20:20'),
(32, 'cover/Spy-2019-02-12-141823.jpg', '2019-02-12 14:18:23', '2019-02-12 14:18:23'),
(33, 'cover/Game Night-2019-02-12-143057.png', '2019-02-12 14:30:57', '2019-02-12 14:30:57'),
(34, 'cover/Blockers-2019-02-12-143652.jpg', '2019-02-12 14:36:52', '2019-02-12 14:36:52'),
(35, 'cover/The Other Woman-2019-02-12-150236.jpg', '2019-02-12 15:02:36', '2019-02-12 15:02:36'),
(36, 'cover/The Other Woman-2019-02-12-150440.jpg', '2019-02-12 15:04:40', '2019-02-12 15:04:40'),
(37, 'cover/Get Smart-2019-02-12-151214.png', '2019-02-12 15:12:14', '2019-02-12 15:12:14'),
(38, 'cover/Last Vegas-2019-02-12-151749.jpg', '2019-02-12 15:17:49', '2019-02-12 15:17:49'),
(39, 'cover/We\'re the Millers-2019-02-12-152816.jpg', '2019-02-12 15:28:16', '2019-02-12 15:28:16'),
(40, 'cover/Just Go with It-2019-02-12-153724.png', '2019-02-12 15:37:24', '2019-02-12 15:37:24'),
(41, 'cover/How to Be Single-2019-02-12-161245.jpg', '2019-02-12 16:12:45', '2019-02-12 16:12:45'),
(42, 'cover/The Hitman\'s Bodyguard-2019-02-12-161737.jpg', '2019-02-12 16:17:37', '2019-02-12 16:17:37'),
(43, 'cover/The Hitman\'s Bodyguard-2019-02-12-161839.jpg', '2019-02-12 16:18:39', '2019-02-12 16:18:39'),
(44, 'cover/Killers-2019-02-12-163050.jpg', '2019-02-12 16:30:50', '2019-02-12 16:30:50'),
(45, 'cover/Bad Neighbours-2019-02-12-163749.jpg', '2019-02-12 16:37:49', '2019-02-12 16:37:49'),
(46, 'cover/John Wick-2019-02-12-184402.jpg', '2019-02-12 18:44:02', '2019-02-12 18:44:02'),
(47, 'cover/Crazy, Stupid, Love-2019-02-12-185002.bTsxMTE2MzY2NjtqOzE4MDM5OzEyMDA7NjQwOzk2MA', '2019-02-12 18:50:02', '2019-02-12 18:50:02'),
(48, 'cover/Crazy, Stupid, Love-2019-02-12-185122.bTsxMTE2MzY2NjtqOzE4MDM5OzEyMDA7NjQwOzk2MA', '2019-02-12 18:51:22', '2019-02-12 18:51:22'),
(49, 'cover/The Best of Me-2019-02-12-190331.jpg', '2019-02-12 19:03:31', '2019-02-12 19:03:31'),
(50, 'cover/Safe Haven-2019-02-12-190807.jpg', '2019-02-12 19:08:07', '2019-02-12 19:08:07'),
(51, 'cover/P.S. I Love You-2019-02-12-192051.png', '2019-02-12 19:20:51', '2019-02-12 19:20:51'),
(52, 'cover/Carol-2019-02-12-192459.jpg', '2019-02-12 19:24:59', '2019-02-12 19:24:59'),
(53, 'cover/My Best Friend\'s Wedding-2019-02-12-193604.jpg', '2019-02-12 19:36:04', '2019-02-12 19:36:04'),
(54, 'cover/Imagine Me and You-2019-02-12-194416.PNG', '2019-02-12 19:44:16', '2019-02-12 19:44:16'),
(55, 'cover/The Vow-2019-02-12-195257.jpg', '2019-02-12 19:52:57', '2019-02-12 19:52:57'),
(56, 'cover/Ghost-2019-02-12-195912.jpg', '2019-02-12 19:59:12', '2019-02-12 19:59:12'),
(57, 'cover/Me Before You-2019-02-12-200222.png', '2019-02-12 20:02:22', '2019-02-12 20:02:22'),
(58, 'cover/Love, Rosie-2019-02-12-200544.jpg', '2019-02-12 20:05:44', '2019-02-12 20:05:44'),
(59, 'cover/Dear John-2019-02-12-200902.jpg', '2019-02-12 20:09:02', '2019-02-12 20:09:02'),
(60, 'cover/Tomb Raider-2019-02-12-204723.jpg', '2019-02-12 20:47:23', '2019-02-12 20:47:23');

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
(1, 'Fantastic Beasts and Where to Find Them', '12.00', 'Newt Scamander arrives in New York city searching for beasts from around the world but, he gets caught up in a conflict when some of the magical creatures in his care escape.', '18-11-2016', 'Eddie Redmayne, Katherine Waterston, Dan Fogler, Alison Sudol, Ezra Miller', 'David Yates', '2 (European Region)', '133 Minutes', 'DVD', 'English', 'David Heyman, J.K. Rowling, Steve Kloves, Lional Wigram', 'J.K. Rowling', 7, '2019-01-23 10:34:56', '2019-02-12 12:11:21', 27),
(2, 'Avengers: Infinity War', '14.00', 'The Avengers and their allies must be willing to sacrifice everything in an attempt to defeat the all powerful Thanos before his blitz of destruction and utter devastation.', '23-04-2018', 'Robert Downey Jr., Chris Hemsworth, Elizabeth Olsen, Chris Evens, Zoe Saldana, Josh Brolin', 'Anthony Russo, Joe Russo', '2 (European Region)', '149 Minutes', 'DVD', 'English', 'Kevin Feige', 'Christopher Markus, Stephen McFeely', 7, '2019-01-23 11:34:56', '2019-02-05 14:53:07', 1),
(3, 'Deadpool 2', '14.00', 'Foul-mouthed mutant mercenary Deadpool, brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg, Cable.', '18-05-2018', 'Ryan Reynolds, Josh Brolin, Zazie Beetz, Julian Dennison', 'David Leitch', '2 (European Region)', '119 Minutes', 'DVD', 'English', 'Simon Kinberg, Lauren Shuler Donner, Ryan Reynolds', 'Rhett Reese, Paul Wernick, Ryan Reynolds', 7, '2019-01-23 12:34:56', '2019-02-12 12:16:36', 28),
(4, 'Coco', '10.00', 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.', '22-11-2017', 'Anthony Gonzalez, Gael Garcia, Benjamin Bratt, Alanna Ubach, Renee Victor', 'Lee Unkrich', '2 (European Region)', '105 Minutes', 'DVD', 'English', 'Darla K. Anderson', 'Adrian Molina, Matthew Aldrich', 3, '2019-01-23 13:34:56', '2019-02-12 12:21:38', 29),
(5, 'The Greatest Showman', '12.00', 'Celebrates the birth of show business and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.', '20-12-2017', 'Hugh Jackman, Zac Efron, Zendaya, Michelle Williams, Rebecca Ferguson', 'Michael Gracey', '2 (European Region)', '105 Minutes', 'DVD', 'English', 'Laurence Mark, Peter Chernin, Jenno Topping', 'Jenny Bicks, Bill Condon', 13, '2019-01-23 14:34:56', '2019-02-12 12:18:58', 30),
(6, 'Ocean\'s 8', '14.00', 'Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City\'s yearly Met Gala.', '08-06-2018', 'Sandra Bullock, Cate Blanchett, Anne Hathaway, Helena Bonham Carter, Rihanna, Mindy Kaling, Sarah Paulson, Awkwafina', 'Gary Ross', '2 (European Region)', '110 Minutes', 'DVD', 'English', 'Steven Soderbergh, Susan Ekins', 'Gary Ross, Olivia Milch', 1, '2019-01-23 15:34:56', '2019-02-12 12:20:20', 31),
(7, 'A Quiet Place', '12.00', 'A family of four must navigate their lives in silence after mysterious creatures that hunt by sound threaten their survival. If they hear you, they hunt you.', '06-04-2018', 'Emily Blunt, John Krasinski, Millicent Simmonds, Noah Jupe', 'John Krasinski', '2 (European Region)', '90 Minutes', 'DVD', 'English', 'Michael Bay, Andrew Form, Brad Fuller', 'Bryan Woods, Scott Beck, John Krasinski', 17, '2019-02-05 14:37:48', '2019-02-05 14:43:38', 8),
(8, 'Kung Fu Panda', '8.00', 'China\'s fate hangs in the balance as a savage tries to take over. The Dragon Warrior mantle is supposedly bestowed upon a panda who is a novice in martial arts.', '06-06-2008', 'Jack Black, Dustin Hoffman, Angelina Jolie, James Hong, Ian McShane', 'John Stevenson, Mark Osborne', '2 (European Region)', '92 Minutes', 'DVD', 'English', 'Melissa Cobb', 'Jonathan Aibel, Glenn Berger', 3, '2019-02-07 19:26:36', '2019-02-07 19:26:36', 10),
(9, 'Coraline', '8.00', 'An adventurous 11-year-old girl finds another world that is a strangely idealized version of her frustrating home, but it has sinister secrets.', '06-02-2009', 'Dakota Fanning, Teri Hatcher, Jennifer Saunders, Dawn French, Ian McShane', 'Henry Selick', '2 (European Region)', '100 Minutes', 'DVD', 'English', 'Bill Mechanic, Claire Jennings, Mary Sandell, Henry Selick', 'Henry Selick', 3, '2019-02-07 20:28:56', '2019-02-07 20:28:56', 11),
(10, 'Hot Fuzz', '8.00', 'A skilled London police officer is transferred to a small town with a dark secret.', '16-02-2018', 'Simon Pegg, Nick Frost, Jim Broadbent, Timothy Dalton', 'Edgar Wright', '2 (European Region)', '121 Minutes', 'DVD', 'English', 'Nira Park, Tim Bevan, Eric Fellner', 'Edgar Wright, Simon Pegg', 4, '2019-02-07 20:36:52', '2019-02-07 20:36:52', 12),
(11, 'Chicken Little', '8.00', 'After ruining his reputation with the town, a courageous chicken must come to the rescue of his fellow citizens when aliens start an invasion.', '04-11-2005', 'Zach Braff, Joan Cusack, Steve Zahn, Garry Marshall', 'Mark Dindal', '2 (European Region)', '81 Minutes', 'DVD', 'English', 'Randy Fullmer', 'Steve Bencich, Ron J. Friedman, Ron Anderson', 3, '2019-02-07 21:01:41', '2019-02-07 21:01:41', 13),
(12, 'How to Train your Dragon', '8.00', 'A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.', '26-03-2010', 'Jay Baruchel, Gerard Butler, Craig Ferguson, America Ferrera', 'Chris Sanders, Dean DeBlois', '2 (European Region)', '98 Minutes', 'DVD', 'English', 'Bonnie Arnold', 'Will Davies, Dean DeBlois, Chris Sanders', 3, '2019-02-07 21:09:49', '2019-02-07 21:09:49', 14),
(13, 'The Emperor\'s New Groove', '8.00', 'Emperor Kuzco is turned into a llama by his ex-administrator Yzma, and must now regain his throne with the help of Pacha, the gentle llama herder.', '15-12-2000', 'David Spade, John Goodman, Eartha Kitt, Patrick Warburton, Wendie Malick', 'Mark Dindal', '2 (European Region)', '77 Minutes', 'DVD', 'English', 'Randy Fullmer', 'Chris Williams, Mark Dindal', 3, '2019-02-07 21:14:22', '2019-02-07 21:19:31', 15),
(14, 'Isle of Dogs', '14.00', 'An outbreak of canine flu in Japan leads all dogs to be quarantined on an island. A boy goes there to rescue his dog and gets help from a pack of dogs who have also been exiled.', '23-03-2018', 'Koyu Rankin, Bryan Cranston, Edward Norton, Bob Balaban, Bill Murray, Jeff Goldblum, Greta Gerwig, Frances McDormand, Kunichi Nomura', 'Wes Andersan', '2 (European Region)', '101 Minutes', 'DVD', 'English, Japanese', 'Wes Anderson, Scott Rudin, Steven Rales, Jeremy Dawson', 'Wes Anderson', 3, '2019-02-10 15:45:22', '2019-02-10 15:45:22', 17),
(15, 'Megamind', '8.00', 'Notorious villian Megamind becomes an unlikely savior to a troubled city after defeating beloved hero Metro Man and accidentally creating a new villian.', '05-11-2010', 'Will Ferrell, Tina Fey, Jonah Hill, David Cross, Brad Pitt', 'Tom McGrath', '2 (European Region)', '96 Minutes', 'DVD', 'English', 'Lara Breay, Denise Nolan Cascino', 'Alan J. Schoolcraft, Brent Simons', 3, '2019-02-10 15:54:12', '2019-02-11 13:54:53', 18),
(16, 'Cloudy with a Chance of Meatballs', '8.00', 'Inventor Flint Lockwood and a brainy weathergirl as they attempt to discover why the rain in their small town has stopped and food is falling in its place.', '12-09-2009', 'Bill Hader, Anna Faris, James Caan, Andy Samberg, Bruce Campbell, Mr. T, Benjamin Bratt', 'Phil Lord, Christopher Miller', '2 (European Region)', '90 Minutes', 'DVD', 'English', 'Pam Marsden', 'Phil Lord, Christopher Miller', 3, '2019-02-10 16:00:34', '2019-02-10 16:00:34', 19),
(17, 'Paranorman', '10.00', 'A small town gets attacked by zombies. Only Norman who can see ghosts can help, he\'ll have to take on ghosts, witches and zombies to save his town from a centuries-old curse.', '17-07-2018', 'Kodi Smit-McPhee, Tucker Albrizzi, Anna Kendrick, Casey Affleck, Christopher Mintz-Plasse, Leslie Mann, Jeff Garlin', 'Sam Fell, Chris Butler', '2 (European Region)', '93 Minutes', 'DVD', 'English', 'Arianne Sutner, Travis Knight', 'Chris Butler', 3, '2019-02-10 16:58:32', '2019-02-10 16:58:32', 21),
(18, 'Fantastic Mr. Fox', '8.00', 'Mr. and Mrs. Fox live an idyllic home life with their son and visiting young nephew. But after 12 years, Mr Fox slips back into his old ways as a thief, endangering his family and friends.', '13-11-2009', 'George Clooney, Meryl Streep, Jason Schwartzman, Eric Anderson, Michael Gambon, Bill Murray', 'Wes Andersan', '2 (European Region)', '88 Minutes', 'DVD', 'English', 'Allison Abbate, Scott Rudin, Wes Anderson, Jeremy Dawson', 'Wes Anderson, Noah Baumbach', 3, '2019-02-10 17:24:16', '2019-02-10 17:24:16', 23),
(19, 'Wreck-It Ralph', '10.00', 'A video game villain wants to be a hero and sets out to fulfill his dream but his quest brings havoc to the whole arcade community.', '02-11-2012', 'John C. Reilly, Sarah Silverman, Jack McBrayer, Jane Lynch, Alan Tudyk', 'Rich Moore', '2 (European Region)', '101 Minutes', 'DVD', 'English', 'Clark Spencer', 'Rich Moore, Phil Johnston, Jim Reardon', 3, '2019-02-11 18:07:52', '2019-02-11 18:07:52', 24),
(20, 'Shrek', '8.00', 'A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back.', '18-05-2001', 'Mike Myers, Eddie Murphy, Cameron Diaz, John Lithgow', 'Andrew Adamson, Vicky Jenson', '2 (European Region)', '90 Minutes', 'DVD', 'English', 'Aron Warner, John H. Williams, Jeffrey Katzenberg', 'Ted Elliott, Terry Rossio, Joe Stillman, Roger S. H. Schulman', 3, '2019-02-11 18:12:20', '2019-02-11 18:12:20', 25),
(21, 'Spy', '10.00', 'A desk-bound CIA analyst volunteers to go undercover to infiltrate the world of a deadly arms dealer, and prevent diabolical global disaster.', '05-06-2015', 'Melissa McCarthy, Rose Byrne, Jason Statham, Miranda Hart, Bobby Cannavale, Allison Janney, Jude Law', 'Paul Feig', '2 (European Region)', '120 Minutes', 'DVD', 'English', 'Peter Chernin, Paul Feig, Jessie Henderson, Jenno Topping', 'Paul Feig', 4, '2019-02-12 14:18:23', '2019-02-12 14:18:23', 32),
(22, 'Game Night', '14.00', 'A group of friends who meet regularly for game nights find themselves entangled in a real-life mystery when the shady brother of one of them is kidnapped by dangerous gangsters.', '23-02-2018', 'Jason Bateman, Rachel McAdams, Billy Magnussen, Sharon Horgan, Lamorne Morris, Kylie Bunbury, Kyle Chandler', 'John Francis Daley, Jonathan Goldstein', '2 (European Region)', '100 Minutes', 'DVD', 'English', 'John Davis, John Fox, Jason Bateman, James Garavente', 'Mark Perez', 4, '2019-02-12 14:30:57', '2019-02-12 14:30:57', 33),
(23, 'Blockers', '14.00', 'Three parents try to stop their daughters from losing their virginity on prom night.', '06-04-2018', 'Leslie Mann, Ike Barinholtz, John Cena, Kathryn Newton, Geraldine Viswanathan, Gideon Adlon', 'Kay Cannon', '2 (European Region)', '102 Minutes', 'DVD', 'English', 'Evan Goldberg, Seth Rogen, James Weaver, Jon Hurwitz, Hayden Schlossberg, Chris Fenton', 'Brian Kehoe, Jim Kehoe', 4, '2019-02-12 14:36:53', '2019-02-12 14:36:53', 34),
(24, 'The Other Woman', '10.00', 'When Carly discovers her boyfriend is married, after meeting his wife and meeting yet another love affair, all three women team up to plot revenge on the three-timing S.O.B.', '25-04-2018', 'Cameron Diaz, Leslie Mann, Kate Upton, Nikolaj Coster-Waldau', 'Nick Cassavetes', '2 (European Region)', '109 Minutes', 'DVD', 'English', 'Julie Yorn', 'Melissa Stack', 4, '2019-02-12 15:04:40', '2019-02-12 15:04:40', 36),
(25, 'Get Smart', '8.00', 'Maxwell Smart, a highly intellectual but bumbling spy working for the CONTROL agency, is tasked with preventing a terrorist attack from rival spy agency KAOS.', '20-06-2008', 'Steve Carell, Anne Hathaway, Dwayne Johnson, Alan Arkin, Terence Stamp', 'Peter Segal', '2 (European Region)', '110 Minutes', 'DVD', 'English', 'Leonard B. Stern, Alex Gartner, Charles Roven, Andrew Lazar, Michael Ewing', 'Tom J. Astle, Matt Ember', 4, '2019-02-12 15:12:14', '2019-02-12 15:12:14', 37),
(26, 'Last Vegas', '10.00', 'Four friends take a break from their day-to-day lives to throw a bachelor party in Las Vegas for their last remaining single pal.', '30-10-2013', 'Michael Douglas, Robert De Niro, Morgan Freeman, Kevin Kline, Mary Steenburgen', 'Jon Turteltaub', '2 (European Region)', '105 Minutes', 'DVD', 'English', 'Laurence Mark, Nathan Kahane, Amy Baer, Matt Leonetti', 'Dan Fogelman', 4, '2019-02-12 15:17:49', '2019-02-12 15:17:49', 38),
(27, 'We\'re the Millers', '10.00', 'A pot dealer creates a fake family as part of his plan to move a huge shipment of weed into the U.S. from Mexico.', '07-08-2013', 'Jennifer Aniston, Jason Sudeikis, Emma Roberts, Will Poulter, Nick Offerman, Kathryn Hahn', 'Rawson Marshall Thurber', '2 (European Region)', '110 Minutes', 'DVD', 'English', 'Chris Bender, Vincent Newman, Tucker Tooley, Happy Walters', 'Bob Fisher, Steve Faber, Sean Anders, John Morris', 4, '2019-02-12 15:28:16', '2019-02-12 15:28:16', 39),
(28, 'Just Go with It', '10.00', 'On a weekend trip to Hawaii, a plastic surgeon convinces his loyal assistant to pose as his soon-to-be-divorced wife in order to cover up a lie he told to his much-younger girlfriend.', '11-02-2018', 'Adam Sandler, Jennifer Aniston, Nick Swardson, Brooklyn Decker, Bailee Madison, Griffin Gluck, Nicole Kidman', 'Dennis Dugan', '2 (European Region)', '117 Minutes', 'DVD', 'English', 'Adam Sandler, Jack Giarraputo, Heather Parry', 'Allan Loeb, Timothy Dowling', 4, '2019-02-12 15:37:24', '2019-02-12 15:37:24', 40),
(29, 'How to Be Single', '12.00', 'A group of young adults navigate love and relationships in New York City.', '12-02-2016', 'Dakota Johnson, Rebel Wilson, Alison Brie, Leslie Mann, Anders Holm, Jake Lacy', 'Christian Ditter', '2 (European Region)', '110 Minutes', 'DVD', 'English', 'John Rickard, Dana Fox', 'Abby Kohn, Marc Silverstein, Dana Fox', 4, '2019-02-12 16:12:45', '2019-02-12 16:12:45', 41),
(30, 'The Hitman\'s Bodyguard', '13.00', 'The world\'s top bodyguard gets a new client, a hitman who must testify at the International Criminal Court. They must work together to make it to the trial on time.', '18-08-2017', 'Ryan Reynolds, Samuel L. Jackson, Gary Oldman, Salma Hayek, Élodie Yung', 'Patrick Hughes', '2 (European Region)', '118 Minutes', 'DVD', 'English', 'Mark Gill, Dana Goldberg, Matthew O\'Toole, John Thompson, Les Weldon', 'Tom O\'Connor', 4, '2019-02-12 16:18:39', '2019-02-12 16:18:39', 43),
(31, 'Killers', '10.00', 'Jen meets her ideal man while vacationing in France. A few years on, their idyllic life is upset when they discover their neighbors are assassins who have been contracted to kill the couple.', '04-06-2010', 'Katherine Heigl, Ashton Kutcher, Tom Selleck, Catherine O\'Hara', 'Robert Luketic', '2 (European Region)', '100 Minutes', 'DVD', 'English', 'Scott Aversano, Jason Goldberg, Mike Karz, Chad Marting, Christopher S. Pratt, Josie Rosen', 'Bob DeRosa, Ted Griffin', 4, '2019-02-12 16:30:50', '2019-02-12 16:30:50', 44),
(32, 'Bad Neighbours', '10.00', 'After they are forced to live next to a fraternity house, a couple with a newborn baby do whatever they can to take them down.', '08-03-2014', 'Seth Rogen, Zac Efron, Rose Byrne, Dave Franco', 'Nicholas Stoller', '2 (European Region)', '97 Minutes', 'DVD', 'English', 'Evan Goldberg, Seth Rogen, James Weaver', 'Andrew J. Cohen, Brendan O\'Brien', 4, '2019-02-12 16:37:49', '2019-02-12 16:37:49', 45),
(33, 'John Wick', '10.00', 'An ex-hit-man comes out of retirement to track down the gangsters that broke into his house, beat him and killed his dog.', '24-10-2014', 'Keanu Reeves, Michael Nyqvist, Alfie Allen, Willem Dafoe', 'Chad Stahelski', '2 (European Region)', '101 Minutes', 'DVD', 'English', 'Basil Iwanyk, David Leitch, Eva Longoria, Michael Witherill', 'Derek Kolstad', 1, '2019-02-12 18:44:02', '2019-02-12 18:44:02', 46),
(34, 'Crazy, Stupid, Love', '10.00', 'Cal\'s life changes dramatically when his wife asks him for a divorce. He wants to change his life and with the help of a newfound friend and learning to pick up girls at bars.', '29-07-2011', 'Steve Carell, Ryan Gosling, Julianne Moore, Emma Stone, Analeigh Tipton, Jonah Bobo', 'Glenn Ficarra, John Requa', '2 (European Region)', '118 Minutes', 'DVD', 'English', 'Steve Carell, Denise Di Novi', 'Dan Fogelman', 14, '2019-02-12 18:51:22', '2019-02-12 18:51:22', 48),
(35, 'The Best of Me', '10.00', 'A pair of former high school sweethearts reunite after many years when they return to visit their small hometown.', '17-10-2014', 'James Marsden, Michelle Monaghan, Luke Bracey, Liana Liberato', 'Michael Hoffman', '2 (European Region)', '118 Minutes', 'DVD', 'English', 'Justin Burns, Denise Di Novi, Alison Greenspan, Ryan Kavanaugh, Nicholas Sparks', 'Will Fetters, J. Mills Goodloe', 14, '2019-02-12 19:03:31', '2019-02-12 19:03:31', 49),
(36, 'Safe Haven', '10.00', 'A young woman with a mysterious past lands in Southport, North Carolina where her bond with a widower forces her to confront the dark secret that haunts her.', '14-02-2013', 'Josh Duhamel, Julianne Hough, Cobie Smulders, David Lyons', 'Lasse Hallström', '2 (European Region)', '115 Minutes', 'DVD', 'English', 'Marty Bowen, Chad Freet, Wyck Godfrey, Ryan Kavanaugh', 'Gage Lansky, Dana Stevens', 14, '2019-02-12 19:08:07', '2019-02-12 19:08:07', 50),
(37, 'P.S. I Love You', '8.00', 'young widow discovers that her late husband has left her 10 letters intended to help ease her pain and start a new life.', '21-12-2007', 'Hilary Swank, Gerard Butler, Lisa Kudrow, Gina Gershon, Jeffrey Dean Morgan, Kathy Bates, Harry Connick Jr.', 'Richard LaGravenese', '2 (European Region)', '125 Minutes', 'DVD', 'English', 'Wendy Finerman, Broderick Johnson, Andrew Kosove, Molly Smith', 'Richard LaGravenese, Steven Rogers', 14, '2019-02-12 19:20:51', '2019-02-12 19:20:51', 51),
(38, 'Carol', '12.00', 'An aspiring photographer develops an intimate relationship with an older woman in 1950\'s New York.', '20-11-2015', 'Cate Blanchett, Rooney Mara, Sarah Paulson, Jake Lacy, Kyle Chandler', 'Todd Haynes', '2 (European Region)', '118 Minutes', 'DVD', 'English', 'Elizabeth Karlsen, Stephen Woolley, Christine Vachon', 'Phyllis Nagy', 14, '2019-02-12 19:24:59', '2019-02-12 19:24:59', 52),
(39, 'My Best Friend\'s Wedding', '8.00', 'When a woman\'s long-time friend reveals he\'s engaged, she realizes she loves him herself and sets out to get him, with only days before the wedding.', '20-06-1997', 'Julia Roberts, Dermot Mulroney, Cameron Diaz, Rupert Everett, Philip Bosco', '.J. Hogan', '2 (European Region)', '104 Minutes', 'DVD', 'English', 'Jerry Zucker, Ronald Bass, Gil Netter, Patricia Whitcher, Nikhilesh Mehra', 'Ronald Bass', 14, '2019-02-12 19:36:04', '2019-02-12 19:36:04', 53),
(40, 'Imagine Me and You', '8.00', 'A newlywed bride becomes infatuated with another woman, who questions her sexual orientation, promoting a stir among the bride\'s family and friends.', '16-06-2006', 'Piper Perabo, Lena Headey, Matthew Goode, Celia Imrie, Anthony Head', 'Ol Parker', '2 (European Region)', '94 Minutes', 'DVD', 'English', 'Barnaby Thompson', 'Ol Parker', 14, '2019-02-12 19:44:16', '2019-02-12 19:44:16', 54),
(41, 'The Vow', '10.00', 'A car accident puts Paige in a coma, and when she wakes up with severe memory loss, her husband Leo works to win her heart again.', '10-02-2012', 'Rachel McAdams, Channing Tatum, Sam Neill, Scott Speedman, Jessica Lange', 'Michael Sucsy', '2 (European Region)', '104 Minutes', 'DVD', 'English', 'Roger Birnbaum, Gary Barber, Jonathan Glickman, Paul Taublieb', 'Abby Kohn, Marc Silverstein, Jason Katims', 14, '2019-02-12 19:52:57', '2019-02-12 19:52:57', 55),
(42, 'Ghost', '8.00', 'After a young man is murdered, his spirit stays behind to warn his lover of impending danger, with the help of a reluctant psychic.', '13-07-1990', 'Patrick Swayze, Demi Moore, Whoopi Goldberg, Tony Goldwyn', 'Jerry Zucker', '2 (European Region)', '128 Minutes', 'DVD', 'English', 'Lisa Weinstein', 'Bruce Joel Rubin', 14, '2019-02-12 19:59:12', '2019-02-12 19:59:12', 56),
(43, 'Me Before You', '12.00', 'A girl in a small town forms an unlikely bond with a recently-paralyzed man she\'s taking care of.', '23-03-2016', 'Emilia Clarke, Sam Claflin, Jenna Coleman, Charles Dance, Janet McTeer, Matthew Lewis', 'Thea Sharrock', '2 (European Region)', '110 Minutes', 'DVD', 'English', 'Karen Rosenfelt, Alison Owen', 'Jojo Moyes', 14, '2019-02-12 20:02:22', '2019-02-12 20:02:22', 57),
(44, 'Love, Rosie', '10.00', 'Rosie and Alex have been best friends since they were 5, so they couldn\'t possibly be right for one another...or could they?', '22-10-2014', 'Lily Collins, Sam Claflin, Christian Cooke, Tamsin Egerton, Suki Waterhouse', 'Christian Ditter', '2 (European Region)', '102 Minutes', 'DVD', 'English', 'Robert Kulzer, Simon Brooks', 'Juliette Towhidi', 14, '2019-02-12 20:05:44', '2019-02-12 20:05:44', 58),
(45, 'Dear John', '10.00', 'A romantic drama about a soldier who falls for a conservative college student while he\'s home on leave.', '05-02-2010', 'Channing Tatum, Amanda Seyfried, Henry Thomas, Richard Jenkins', 'Lasse Hallström', '2 (European Region)', '107 Minutes', 'DVD', 'English', 'Marty Bowen, Wyck Godfrey, Ryan Kavanaugh', 'Jamie Linden', 14, '2019-02-12 20:09:02', '2019-02-12 20:09:02', 59),
(46, 'Tomb Raider', '14.00', 'Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she discovers the island where her father disappeared.', '16-03-2018', 'Alicia Vikander, Dominic West, Walton Goggins, Daniel Wu', 'Roar Uthaug', '2 (European Region)', '118 Minutes', 'DVD', 'English', 'Graham King', 'Geneva Robertson-Dworet, Alastair Siddons', 1, '2019-02-12 20:47:23', '2019-02-12 20:47:23', 60);

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
(1, 'Jacea', 'Jacea@gmail.com', NULL, '$2y$10$zFABV70drYky1tPUUUdjnuHv1tLNuFlF7IXQbZBAK4Jwr.968Y9Bq', 'RYoqnOU3hzf1VsI36WoOoAczFW6aiKDvLeEUF5S3R13NMGz1EOVmxB6T2atv', '2019-01-23 14:34:54', '2019-01-23 14:34:54'),
(2, 'Grace Cautley', 'grace@gmail.com', NULL, '$2y$10$HKPg8Z0JXkUOQExIqv8dH.PASFOP6lv92eLOElV2tskuQXUxu.gkW', 'ntgvuYTFwshuZrxNSsqZHKOM12UInSb14w5eww5yHTUCZmoGqShQJvetxlD3', '2019-01-23 14:34:56', '2019-01-23 14:34:56'),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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

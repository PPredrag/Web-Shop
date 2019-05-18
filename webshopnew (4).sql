-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2019 at 12:44 PM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshopnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `footwears`
--

DROP TABLE IF EXISTS `footwears`;
CREATE TABLE IF NOT EXISTS `footwears` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `barcode` double NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusSale` int(11) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL,
  `newPrice` double(10,2) NOT NULL DEFAULT '0.00',
  `statusPicture` int(11) NOT NULL DEFAULT '0',
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footwears`
--

INSERT INTO `footwears` (`id`, `barcode`, `name`, `brand`, `description`, `color`, `color2`, `material`, `category`, `type`, `statusSale`, `price`, `newPrice`, `statusPicture`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(57, 658932323223, 'Harachi', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'black', 'black', 'platno', 'muska', 'patike', 2, 22000.00, 2000.00, 2, 'p2d.jpg', 'p2l.jpg', 'p2o.jpg', '2019-05-07 07:56:25', '2019-05-13 06:52:03'),
(58, 56565323232565, 'Air Jordan', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'white', 'blue', 'platno', 'muska', 'patike', 1, 15500.00, 0.00, 2, 'p3l.jpg', 'p3d.jpg', 'p3o.jpg', '2019-05-07 07:58:06', '2019-05-07 07:58:06'),
(56, 56565123132, 'Nike Run for Kids', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'white', 'blue', 'platno', 'muska', 'patike', 1, 9500.00, 0.00, 3, 'p1l.jpg', 'p1d.jpg', 'p1o.jpg', '2019-05-07 07:55:04', '2019-05-07 07:55:04'),
(55, 54546545465465, 'Mercular Black', 'Nike', 'Kopačke za sve vrste podloga', 'black', 'black', 'koza', 'muska', 'kopacke', 1, 26000.00, 0.00, 6, 'k7l.jpg', 'k7d.jpg', 'k70.jpg', '2019-05-07 07:47:46', '2019-05-07 07:47:46'),
(54, 5454654513215, 'Mercular', 'Nike', 'Kopačke namenjene za travnate terene', 'black', '#f4b609', 'platno', 'muska', 'kopacke', 2, 35000.00, 15000.00, 3, 'k6l.jpg', 'k6d.jpg', 'k60.jpg', '2019-05-07 07:46:21', '2019-05-13 06:42:00'),
(53, 645565213226, 'Messi Kids', 'Adidas', 'Kopačke za travnate terene', 'black', '#f4b609', 'koza', 'decija', 'kopacke', 2, 18000.00, 5000.00, 3, 'k5l.jpg', 'k5d.jpg', 'k5o.jpg', '2019-05-07 07:45:02', '2019-05-18 10:26:47'),
(52, 9455133115645, 'Messi Black', 'Adidas', 'Kopačke pogodne za veštačke i travnate podloge', 'black', 'black', 'koza', 'muska', 'kopacke', 1, 26000.00, 0.00, 6, 'k4l.jpg', 'k4d.jpg', 'k4o.jpg', '2019-05-07 07:42:49', '2019-05-07 07:42:49'),
(51, 953124656513, 'A Klass', 'Nike', 'Kopačke namenjene za travnate podloge', 'grey', 'grey', 'koza', 'muska', 'kopacke', 1, 32000.00, 0.00, 3, 'k3l.jpg', 'k3d.jpg', 'k3o.jpg', '2019-05-07 07:41:46', '2019-05-07 07:41:46'),
(50, 988545113132, 'Messi', 'Adidas', 'Kopačke namenjene za travnate terene', 'yellow', 'black', 'koza', 'muska', 'kopacke', 1, 9500.00, 0.00, 6, 'k2l.jpg', 'k2d.jpg', 'k2o.jpg', '2019-05-07 07:40:17', '2019-05-07 07:40:17'),
(48, 65545645655, 'Women Training', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'pink', 'grey', 'platno', 'zenska', 'patike', 1, 12500.00, 0.00, 7, 'd4l.jpg', 'd4d.jpg', 'd4o.jpg', '2019-05-07 07:36:46', '2019-05-07 07:36:46'),
(49, 9785445645, 'Raptor', 'Adidas', 'Kopačke namenje za travnate i veštačke podloge', 'white', 'black', 'koza', 'muska', 'kopacke', 1, 25000.00, 0.00, 6, 'k1l.jpg', 'k1d.jpg', 'k1o.jpg', '2019-05-07 07:38:36', '2019-05-07 07:38:36'),
(47, 984565422233, 'Women Run', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'white', 'white', 'platno', 'zenska', 'patike', 1, 8500.00, 0.00, 7, 'd3l.jpg', 'd3d.jpg', 'd3o.jpg', '2019-05-07 07:35:39', '2019-05-07 07:35:39'),
(46, 9785623546454, 'Kids Run', 'Nike', 'Patike pogodne za trcanje po svim terenima', 'grey', 'white', 'koza', 'decija', 'patike', 2, 9500.00, 3750.00, 4, 'd2d.jpg', 'd2l.jpg', 'd2o.jpg', '2019-05-07 07:32:54', '2019-05-18 10:35:40'),
(45, 9781565446555, 'Nike For Run', 'Nike', 'Patike pogodne za trcanje po svim terenima', 'grey', 'blue', 'platno', 'decija', 'patike', 1, 12000.00, 0.00, 4, 'd1l.jpg', 'd1d.jpg', 'd1o.jpg', '2019-05-07 07:31:51', '2019-05-07 07:31:51'),
(59, 5656322232, 'Nike F.C.', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'black', 'white', 'platno', 'muska', 'patike', 1, 25000.00, 0.00, 5, 'p4l.jpg', 'p4d.jpg', 'p4o.jpg', '2019-05-07 07:59:02', '2019-05-07 07:59:02'),
(60, 663215896656, 'Nike Home Run', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'green', 'grey', 'platno', 'muska', 'patike', 1, 12000.00, 0.00, 5, 'p5l.jpg', 'p5d.jpg', 'p5o.jpg', '2019-05-07 08:00:14', '2019-05-07 08:00:14'),
(61, 563326565656, 'Nike Run', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'blue', 'black', 'platno', 'muska', 'patike', 1, 12500.00, 0.00, 2, 'p6l.jpg', 'p6d.JPG', 'p6o.JPG', '2019-05-07 08:01:46', '2019-05-07 08:01:46'),
(62, 65652332236565, 'Nike Run', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'blue', 'black', 'platno', 'muska', 'patike', 1, 14000.00, 0.00, 5, 'p7l.jpg', 'p7d.jpg', 'p7o.jpg', '2019-05-07 08:02:41', '2019-05-07 08:02:41'),
(63, 6565623233, 'Women Run', 'Adidas', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'grey', 'blue', 'platno', 'muska', 'patike', 1, 15000.00, 0.00, 6, 'z1l.jpg', 'z1d.jpg', 'z1o.jpg', '2019-05-07 08:30:20', '2019-05-07 08:30:20'),
(64, 6532256899, 'Women Run Nike', 'Nike', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'pink', 'grey', 'platno', 'zenska', 'patike', 1, 15000.00, 0.00, 7, 'z2l.jpg', 'z2d.jpg', 'z2o.jpg', '2019-05-07 08:31:24', '2019-05-07 08:31:24'),
(65, 65978631200, 'Asics Run', 'Asics', 'Patike pogodne za teretanu i za trcanje po svim terenima', 'grey', 'pink', 'platno', 'zenska', 'patike', 2, 17500.00, 1500.00, 7, 'z3l.jpg', 'z3d.jpg', 'z3o.jpg', '2019-05-07 08:32:24', '2019-05-13 06:44:28'),
(66, 12035546456, 'Asics Womem Orange', 'Asics', 'Patike pogodne za teretanu i za trcanje po svim terenima', '#f4b609', '#f4b609', 'platno', 'zenska', 'patike', 2, 12500.00, 1500.00, 7, 'z4l.jpg', 'z4d.jpg', 'z4o.jpg', '2019-05-07 08:33:21', '2019-05-13 07:19:10'),
(67, 978465465464, 'Nike Force', 'Nike', 'Patike za sve prilike', '#f4b609', '#f4b609', 'koza', 'muska', 'patike', 2, 15000.00, 2000.00, 0, 'p10d.jpg', 'p10l.jpg', 'p10o.jpg', '2019-05-18 06:36:24', '2019-05-18 06:39:14'),
(68, 6454654654, 'Nike Run', 'Nike', 'Patike za sve prilike', 'white', 'blue', 'koza', 'muska', 'patike', 1, 15000.00, 0.00, 0, 'p11l.jpg', 'p11d.jpg', 'p11o.jpg', '2019-05-18 07:41:20', '2019-05-18 07:41:20'),
(69, 56546546546, 'Superstar', 'Adidas', 'Patike za sve prilike', 'blue', 'red', 'koza', 'muska', 'patike', 1, 12000.00, 0.00, 0, 'p12l.jpg', 'p12d.jpg', 'p12o.jpg', '2019-05-18 07:44:25', '2019-05-18 07:44:25'),
(70, 455465465, 'Reebok Run', 'Reebok', 'Patiker za sve prilike', 'grey', 'blue', 'platno', 'muska', 'patike', 2, 9800.00, 7500.00, 0, 'p13l.jpg', 'p13d.jpg', 'p13o.jpg', '2019-05-18 07:45:52', '2019-05-18 07:46:54'),
(71, 66565465465, 'Nike Forse', 'Nike', 'Patike za sve prilike', 'pink', 'pink', 'koza', 'zenska', 'patike', 1, 15000.00, 0.00, 0, 'z5d.jpg', 'z5l.jpg', 'z5o.jpg', '2019-05-18 07:49:33', '2019-05-18 07:49:33'),
(72, 65988798798, 'Balance Women', 'New Balance', 'Patike za trcanje', 'grey', 'white', 'platno', 'zenska', 'patike', 2, 15000.00, 8000.00, 0, 'z6d.jpg', 'z6l.jpg', 'z6o.jpg', '2019-05-18 07:50:51', '2019-05-18 07:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `footwear_number`
--

DROP TABLE IF EXISTS `footwear_number`;
CREATE TABLE IF NOT EXISTS `footwear_number` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `footwear_id` int(10) UNSIGNED NOT NULL,
  `number_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `footwear_number_footwear_id_foreign` (`footwear_id`),
  KEY `footwear_number_number_id_foreign` (`number_id`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footwear_number`
--

INSERT INTO `footwear_number` (`id`, `footwear_id`, `number_id`, `qty`) VALUES
(181, 51, 15, 1),
(180, 51, 18, 20),
(179, 51, 16, 15),
(172, 57, 17, 1),
(178, 57, 19, 6),
(176, 57, 20, 6),
(171, 57, 25, 1),
(177, 57, 23, 1),
(175, 57, 15, 2),
(182, 52, 15, 15),
(184, 67, 15, 50),
(185, 67, 18, 15),
(187, 67, 21, 25),
(188, 72, 21, 15),
(190, 72, 15, 55),
(191, 72, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_03_18_102449_create_pictures_table', 1),
(10, '2019_03_25_122535_create_footwears_table', 1),
(11, '2019_03_25_122556_create_numbers_table', 1),
(12, '2019_03_25_122721_create_footwear_number_table', 1),
(13, '2019_04_12_082327_create_slikes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

DROP TABLE IF EXISTS `numbers`;
CREATE TABLE IF NOT EXISTS `numbers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `footweareNumber` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `footweareNumber`, `created_at`, `updated_at`) VALUES
(1, 15.00, NULL, NULL),
(2, 15.50, NULL, NULL),
(3, 16.00, NULL, NULL),
(4, 16.50, NULL, NULL),
(5, 17.00, NULL, NULL),
(6, 17.50, NULL, NULL),
(7, 18.00, NULL, NULL),
(8, 18.50, NULL, NULL),
(9, 19.00, NULL, NULL),
(10, 19.50, NULL, NULL),
(11, 20.00, NULL, NULL),
(12, 20.50, NULL, NULL),
(13, 21.00, NULL, NULL),
(14, 21.50, NULL, NULL),
(15, 22.00, NULL, NULL),
(16, 22.50, NULL, NULL),
(17, 23.00, NULL, NULL),
(18, 23.50, NULL, NULL),
(19, 24.00, NULL, NULL),
(20, 24.50, NULL, NULL),
(21, 25.00, NULL, NULL),
(22, 25.50, NULL, NULL),
(23, 26.00, NULL, NULL),
(24, 26.50, NULL, NULL),
(25, 27.00, NULL, NULL),
(26, 27.50, NULL, NULL),
(27, 28.00, NULL, NULL),
(28, 28.50, NULL, NULL),
(29, 29.00, NULL, NULL),
(30, 29.50, NULL, NULL),
(31, 30.00, NULL, NULL),
(32, 30.50, NULL, NULL),
(33, 31.00, NULL, NULL),
(34, 31.50, NULL, NULL),
(35, 32.00, NULL, NULL),
(36, 32.50, NULL, NULL),
(37, 33.00, NULL, NULL),
(38, 33.50, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider4.jpg', 1, '2019-04-03 07:37:01', '2019-04-03 07:37:01'),
(4, 'k60.jpg', 1, '2019-04-09 10:42:59', '2019-04-09 10:42:59'),
(7, 'k4l.jpg', 1, '2019-04-11 11:24:29', '2019-04-11 11:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `slikes`
--

DROP TABLE IF EXISTS `slikes`;
CREATE TABLE IF NOT EXISTS `slikes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Predrag', 'pandza@pandza.com', '$2y$10$r/QugDI5O8toB8ROOfUZn.JlKQ2RR407tuz9HUsv6ogzuASWf3l2O', 1, 'XqdNCECTyXTDoPP66r956BJlMNU7drxVf03pvJ3EEKIdfyLfHFbPFOzvddW1', '2019-04-03 06:57:52', '2019-04-03 06:57:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2019 at 01:31 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footwears`
--

INSERT INTO `footwears` (`id`, `barcode`, `name`, `brand`, `description`, `color`, `color2`, `material`, `category`, `type`, `statusSale`, `price`, `newPrice`, `statusPicture`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(3, 97887985464, 'Adidas  Raptor', 'Adidas', 'Patike pogodne za sve vrste podloga', 'white', 'green', 'koza', 'muska', 'kopacke', 1, 9500.00, 0.00, 0, 'k1l.jpg', 'k1d.jpg', 'k1o.jpg', '2019-04-04 09:02:23', '2019-04-04 09:02:23'),
(4, 9887156654, 'Nike Mercular', 'Nike', 'Pogodne za sve vrste terena i za sve vremenske prilike', 'black', '#f4b609', 'vestacka', 'muska', 'kopacke', 1, 15000.00, 0.00, 0, 'k6l.jpg', 'k6d.jpg', 'k60.jpg', '2019-04-04 09:04:00', '2019-04-04 09:04:00'),
(5, 454654546456, 'Jordan', 'Nike', 'Patike za trcanje po svim podlogama', 'white', 'blue', 'platno', 'muska', 'patike', 1, 15000.00, 0.00, 0, 'p3l.jpg', 'p3d.jpg', 'p3o.jpg', '2019-04-04 09:05:32', '2019-04-04 09:05:32'),
(6, 54554545646, 'Nike Run for Fun', 'Nike', 'Patike pogodne za treniranju u zatvorenim prostorijama', 'white', 'blue', 'platno', 'muska', 'patike', 1, 15000.00, 0.00, 0, 'p1l.jpg', 'p1d.jpg', 'p1o.jpg', '2019-04-04 09:06:58', '2019-04-04 09:06:58'),
(7, 54649898, 'Women Nike Run', 'Nike', 'Patike za trcanje u svakoj prilici i svakoj podlozi', '#f4b609', '#f4b609', 'platno', 'zenska', 'patike', 1, 9500.00, 0.00, 0, 'z4l.jpg', 'z4d.jpg', 'z4o.jpg', '2019-04-04 09:58:56', '2019-04-04 09:58:56'),
(8, 5546544465465, 'Training Shoes', 'Nike', 'Patike za treniranje pogodne za sve uslove', 'purple', '#f4b609', 'platno', 'zenska', 'patike', 1, 15000.00, 0.00, 0, 'z3l.jpg', 'z3d.jpg', 'z3o.jpg', '2019-04-04 10:00:23', '2019-04-04 10:00:23'),
(9, 566124646, 'Kids Run Air Max', 'Nike', 'Decije patike za svaki dan za trcanje i za hodanje', 'grey', '#f4b609', 'vestacka', 'decija', 'patike', 1, 6500.00, 0.00, 0, 'd2d.jpg', 'd2l.jpg', 'd2o.jpg', '2019-04-04 10:01:43', '2019-04-04 10:01:43'),
(10, 568913165545, 'Kids Run Shoes', 'Nike', 'Decije patike za razonodu i boravak na sportskim terenima', 'green', 'blue', 'platno', 'decija', 'patike', 1, 4500.00, 0.00, 0, 'd3l.jpg', 'd3d.jpg', 'd3o.jpg', '2019-04-04 10:03:13', '2019-04-04 10:03:13');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footwear_number`
--

INSERT INTO `footwear_number` (`id`, `footwear_id`, `number_id`, `qty`) VALUES
(3, 4, 16, 50),
(4, 5, 15, 5),
(5, 6, 15, 56),
(6, 7, 28, 15),
(7, 8, 31, 56),
(8, 9, 17, 56),
(9, 10, 18, 15);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_03_18_102449_create_pictures_table', 1),
(10, '2019_03_25_122535_create_footwears_table', 1),
(11, '2019_03_25_122556_create_numbers_table', 1),
(12, '2019_03_25_122721_create_footwear_number_table', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider4.jpg', 1, '2019-04-03 07:37:01', '2019-04-03 07:37:01'),
(2, 'slider6.jpg', 1, '2019-04-03 07:37:11', '2019-04-03 07:37:11');

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
(1, 'Predrag', 'pandza@pandza.com', '$2y$10$r/QugDI5O8toB8ROOfUZn.JlKQ2RR407tuz9HUsv6ogzuASWf3l2O', 1, 'uvwiJagsgCILpzuDRCK8udSBiuwkFRR3C34QxADEjV8s1NK9aRDy5W37rabY', '2019-04-03 06:57:52', '2019-04-03 06:57:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

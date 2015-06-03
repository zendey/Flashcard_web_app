-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 05:11 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flashcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `app_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_id` int(10) unsigned NOT NULL,
  `app_order` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`app_id`),
  UNIQUE KEY `app_id` (`app_id`),
  KEY `app_id_2` (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`app_id`, `app_name`, `app_short_description`, `app_long_description`, `app_directory`, `app_image`, `site_id`, `app_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'My app', '', '', '', '', 0, 0, '0000-00-00 00:00:00', '2015-03-21 19:10:46', '0000-00-00 00:00:00'),
(2, 'Sample app', '', '', '', '', 0, 0, '0000-00-00 00:00:00', '2015-03-21 19:10:46', '0000-00-00 00:00:00'),
(3, 'First Words', '', '', 'first_words', 'icon/Icon-xxhdpi.png', 1, 2, '0000-00-00 00:00:00', '2015-04-07 17:35:55', '0000-00-00 00:00:00'),
(4, 'Baby Flashcards', '', '', 'baby_flashcards', 'icon/Icon-xxhdpi.png', 1, 1, '0000-00-00 00:00:00', '2015-04-07 17:35:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `app_deck`
--

CREATE TABLE IF NOT EXISTS `app_deck` (
  `app_deck_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` int(10) unsigned NOT NULL,
  `deck_id` int(10) unsigned NOT NULL,
  `app_deck_order` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`app_deck_id`),
  UNIQUE KEY `app_deck_id` (`app_deck_id`),
  KEY `app_deck_id_2` (`app_deck_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `app_deck`
--

INSERT INTO `app_deck` (`app_deck_id`, `app_id`, `deck_id`, `app_deck_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 1, '0000-00-00 00:00:00', '2015-04-07 16:43:12', '0000-00-00 00:00:00'),
(2, 3, 2, 2, '0000-00-00 00:00:00', '2015-04-07 16:43:27', '0000-00-00 00:00:00'),
(3, 3, 3, 3, '0000-00-00 00:00:00', '2015-04-07 16:43:43', '0000-00-00 00:00:00'),
(4, 3, 4, 4, '0000-00-00 00:00:00', '2015-04-07 16:43:50', '0000-00-00 00:00:00'),
(5, 3, 5, 5, '0000-00-00 00:00:00', '2015-04-07 16:43:57', '0000-00-00 00:00:00'),
(6, 3, 6, 6, '0000-00-00 00:00:00', '2015-04-07 16:44:04', '0000-00-00 00:00:00'),
(7, 4, 7, 1, '0000-00-00 00:00:00', '2015-04-07 16:44:10', '0000-00-00 00:00:00'),
(8, 4, 8, 2, '0000-00-00 00:00:00', '2015-04-07 16:44:18', '0000-00-00 00:00:00'),
(9, 4, 9, 3, '0000-00-00 00:00:00', '2015-04-07 16:44:25', '0000-00-00 00:00:00'),
(10, 4, 10, 4, '0000-00-00 00:00:00', '2015-04-07 16:44:31', '0000-00-00 00:00:00'),
(11, 4, 11, 5, '0000-00-00 00:00:00', '2015-04-07 16:44:40', '0000-00-00 00:00:00'),
(12, 4, 12, 6, '0000-00-00 00:00:00', '2015-04-07 16:44:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deck`
--

CREATE TABLE IF NOT EXISTS `deck` (
  `deck_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deck_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deck_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deck_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deck_directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deck_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deck_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deck_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deck_date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`deck_id`),
  UNIQUE KEY `deck_id` (`deck_id`),
  KEY `deck_id_2` (`deck_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `deck`
--

INSERT INTO `deck` (`deck_id`, `deck_name`, `deck_short_description`, `deck_long_description`, `deck_directory`, `deck_file`, `deck_image`, `deck_date_created`, `deck_date_modified`, `deleted_at`) VALUES
(1, 'first words', '', '', 'first-words', 'first-words-en.txt', 'first-words.jpg', '0000-00-00 00:00:00', '2015-03-22 01:52:05', '0000-00-00 00:00:00'),
(2, 'first animals', '', '', 'first-animals', 'first-animals-en.txt', 'first-animals.jpg', '0000-00-00 00:00:00', '2015-03-22 01:55:45', '0000-00-00 00:00:00'),
(3, 'b sounds', '', '', 'b-sounds', 'b-sounds-en.txt', 'b-sounds.jpg', '0000-00-00 00:00:00', '2015-03-22 02:05:35', '0000-00-00 00:00:00'),
(4, 'p sounds', '', '', 'p-sounds', 'p-sounds-en.txt', 'p-sounds.jpg', '0000-00-00 00:00:00', '2015-03-22 02:05:35', '0000-00-00 00:00:00'),
(5, 'm sounds', '', '', 'm-sounds', 'm-sounds-en.txt', 'm-sounds.jpg', '0000-00-00 00:00:00', '2015-03-22 02:05:35', '0000-00-00 00:00:00'),
(6, 'd sounds', '', '', 'd-sounds', 'd-sounds-en.txt', 'd-sounds.jpg', '0000-00-00 00:00:00', '2015-03-22 02:05:35', '0000-00-00 00:00:00'),
(7, 'first words', '', '', 'first-words', 'first-words-en.txt', 'first-words.jpg', '0000-00-00 00:00:00', '2015-03-22 02:12:59', '0000-00-00 00:00:00'),
(8, 'animals', 'Animals', 'Animals', 'animals', 'animals-en.txt', 'animals.jpg', '0000-00-00 00:00:00', '2015-04-06 13:53:27', '0000-00-00 00:00:00'),
(9, 'shapes', 'shapes', 'shapes', 'shapes', 'shapes-en.txt', 'shapes.jpg', '0000-00-00 00:00:00', '2015-04-06 13:53:44', '0000-00-00 00:00:00'),
(10, 'colors', 'colors', 'colors', 'colors', 'colors-en.txt', 'colors.jpg', '0000-00-00 00:00:00', '2015-04-06 13:54:35', '0000-00-00 00:00:00'),
(11, 'food and drinks', 'food and drinks', 'food and drinks', 'food-and-drinks', 'food-and-drinks-en.txt', 'food-and-drinks.jpg', '0000-00-00 00:00:00', '2015-04-06 13:54:35', '0000-00-00 00:00:00'),
(12, 'transportation', 'transportation', 'transportation', 'transportation', 'transportation-en.txt', 'transportation.jpg', '0000-00-00 00:00:00', '2015-04-06 13:55:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_order` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`site_id`),
  UNIQUE KEY `site_id` (`site_id`),
  KEY `site_id_2` (`site_id`),
  KEY `site_id_3` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `site_name`, `site_short_description`, `site_long_description`, `site_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Zendey Baby', 'Flashcards for babies and toddlers!', 'Flashcards for babies and toddlers!', 1, '0000-00-00 00:00:00', '2015-04-07 16:47:20', '0000-00-00 00:00:00'),
(2, 'Zendey Kids', 'Flashcards for kids!', 'Flashcards for kids!', 2, '0000-00-00 00:00:00', '2015-04-07 16:47:33', '0000-00-00 00:00:00'),
(3, 'Zendey', 'Zendey flashcards!', 'Zendey flashcards!', 3, '0000-00-00 00:00:00', '2015-04-07 16:47:43', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2023 at 08:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `page_id`, `name`, `slug`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 9, 'রাজধানী', 'rajdhanee', NULL, '2023-03-20 00:19:18', '2023-03-20 00:16:12', '2023-03-20 00:19:18'),
(3, 9, 'বাংলাদেশ', 'jela', NULL, NULL, '2023-03-20 00:16:24', '2023-03-20 01:03:54'),
(4, 9, 'করোনাভাইরাস', 'kronavairas', NULL, '2023-03-20 00:32:51', '2023-03-20 00:16:38', '2023-03-20 00:32:51'),
(5, 11, 'আন্তর্জাতিক', 'esiya', NULL, NULL, '2023-03-20 00:17:15', '2023-03-20 01:04:26'),
(6, 11, 'ইউরোপ', 'iurop', NULL, '2023-03-20 00:32:44', '2023-03-20 00:17:33', '2023-03-20 00:32:44'),
(7, 11, 'আফ্রিকা', 'afrika', NULL, '2023-03-20 00:32:38', '2023-03-20 00:17:44', '2023-03-20 00:32:38'),
(8, 12, 'খেলা', 'khela', NULL, NULL, '2023-03-20 01:08:57', '2023-03-20 01:08:57'),
(9, 13, 'নিনোদন', 'ninodn', NULL, NULL, '2023-03-20 01:09:21', '2023-03-20 01:09:21'),
(10, 14, 'বিদেশ', 'বিদেশ', NULL, NULL, '2023-03-27 23:36:35', '2023-03-27 23:36:35'),
(11, 18, 'স্বাস্থ্য', 'স্বাস্থ্য', NULL, NULL, '2023-03-28 02:55:56', '2023-03-28 02:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(9, 'bangladesh', 'zahojutefu@mailinator.com', 'Cupidatat non blandi', 1, '2023-03-13 22:02:49', '2023-03-13 22:22:59'),
(10, 'Scott Sears', 'xipox@mailinator.com', 'Quaerat amet accusa', 1, '2023-03-14 22:33:02', '2023-03-23 00:49:04'),
(11, 'Malcolm Hutchinson', 'cevedep@mailinator.com', 'Esse veniam atque', 0, '2023-03-15 00:39:40', '2023-03-15 00:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'Modules\\Reporter\\Entities\\Reporter', 3, 'f62861e3-9282-4524-bc9a-46a1fe9a0592', 'reporter_media_collection_avatar', 'owl-50267__340', 'owl-50267__340.jpg', 'image/jpeg', 'public', 'public', 45171, '[]', '[]', '{\"thumbnail\": true}', '[]', 1, '2023-03-20 23:08:03', '2023-03-20 23:08:03'),
(9, 'Modules\\Reporter\\Entities\\Reporter', 5, '2e39d5da-e79b-4920-ac31-fdcf0108513a', 'reporter_media_collection_avatar', 'Flag_of_Bangladesh.svg', 'Flag_of_Bangladesh.svg.png', 'image/png', 'public', 'public', 1077, '[]', '[]', '{\"thumbnail\": true}', '[]', 4, '2023-03-20 23:23:20', '2023-03-20 23:23:20'),
(44, 'Modules\\Posts\\Entities\\Post', 19, '4de53c92-b142-4363-a1be-ea804de5081e', 'thumbnail', 'd861303f9072dae2aab37fbd79ac27f8e37e6214764463c0', 'd861303f9072dae2aab37fbd79ac27f8e37e6214764463c0.png', 'image/png', 'public', 'public', 339498, '[]', '[]', '[]', '[]', 10, '2023-03-28 02:59:42', '2023-03-28 02:59:42'),
(46, 'Modules\\Posts\\Entities\\Post', 20, '0bac1bb7-2933-428b-823d-eaec52c68a77', 'thumbnail', '5', '5.jpg', 'image/jpeg', 'public', 'public', 15554, '[]', '[]', '[]', '[]', 12, '2023-03-28 03:03:36', '2023-03-28 03:03:36'),
(48, 'Modules\\Posts\\Entities\\Post', 20, '56096990-60fc-4271-95b7-a0a44feb544a', 'thumbnail', 'animals-wildlife-shutterstock_1066200380', 'animals-wildlife-shutterstock_1066200380.jpg', 'image/jpeg', 'public', 'public', 60036, '[]', '[]', '[]', '[]', 14, '2023-03-29 01:43:53', '2023-03-29 01:43:53'),
(49, 'Modules\\Posts\\Entities\\Post', 20, '2cf398e0-a8f4-4d6d-a516-c6d5165f1487', 'thumbnail', '2', '2.jpg', 'image/jpeg', 'public', 'public', 8247, '[]', '[]', '[]', '[]', 15, '2023-03-29 01:44:54', '2023-03-29 01:44:54'),
(50, 'Modules\\Posts\\Entities\\Post', 20, '1d6af1d4-5554-4a10-bf9e-0464e7ce8894', 'thumbnail', '1', '1.jpg', 'image/jpeg', 'public', 'public', 7898, '[]', '[]', '[]', '[]', 16, '2023-03-29 01:45:23', '2023-03-29 01:45:23'),
(51, 'Modules\\Posts\\Entities\\Post', 20, 'ae479bc5-2264-4433-96f9-bbf8eb4cb204', 'thumbnail', 'images (1)', 'images-(1).png', 'image/png', 'public', 'public', 3748, '[]', '[]', '[]', '[]', 17, '2023-03-29 01:46:25', '2023-03-29 01:46:25'),
(52, 'Modules\\Posts\\Entities\\Post', 20, '9ce4c62a-982b-4c31-8faa-f7ce45d27d68', 'post_media_collection_avatar', 'images (2)', 'images-(2).png', 'image/png', 'public', 'public', 5724, '[]', '[]', '{\"thumbnail\": true}', '[]', 18, '2023-03-29 01:46:35', '2023-03-29 01:46:38'),
(53, 'Modules\\Posts\\Entities\\Post', 20, 'e6bb3807-bce9-4acc-89b8-7f46738af101', 'thumbnail', 'images (2)', 'images-(2).jpg', 'image/jpeg', 'public', 'public', 9840, '[]', '[]', '[]', '[]', 19, '2023-03-29 01:48:18', '2023-03-29 01:48:18'),
(58, 'Modules\\Posts\\Entities\\Post', 19, '9081638e-ff97-466e-8d0a-18a644ee1827', 'post_media_collection_avatar', 'download', 'download.jpg', 'image/jpeg', 'public', 'public', 4065, '[]', '[]', '{\"thumbnail\": true}', '[]', 20, '2023-03-29 01:56:37', '2023-03-29 01:56:38'),
(59, 'Modules\\Posts\\Entities\\Post', 21, 'bfba3938-056c-4234-9f57-c44037b3227b', 'thumbnail', '2', '2.jpg', 'image/jpeg', 'public', 'public', 8247, '[]', '[]', '[]', '[]', 21, '2023-03-29 04:08:55', '2023-03-29 04:08:55'),
(61, 'Modules\\Posts\\Entities\\Post', 21, 'f817eb21-baa4-464a-b5bd-db20c0c1dc02', 'thumbnail', 'images (2)', 'images-(2).jpg', 'image/jpeg', 'public', 'public', 9840, '[]', '[]', '[]', '[]', 23, '2023-03-29 04:09:13', '2023-03-29 04:09:13'),
(62, 'Modules\\Posts\\Entities\\Post', 21, '30da8b2a-7d38-494d-ad99-6c8ede9b166a', 'thumbnail', 'shutterstock_563430904', 'shutterstock_563430904.webp', 'image/webp', 'public', 'public', 1248384, '[]', '[]', '[]', '[]', 24, '2023-03-29 04:09:23', '2023-03-29 04:09:23'),
(66, 'Modules\\Posts\\Entities\\Post', 21, '2849f182-b915-4b19-aa06-a89748cafd24', 'post_media_collection_avatar', 'images (3)', 'images-(3).jpg', 'image/jpeg', 'public', 'public', 5955, '[]', '[]', '{\"thumbnail\": true}', '[]', 28, '2023-03-29 04:15:15', '2023-03-29 04:15:15'),
(67, 'Modules\\Posts\\Entities\\Post', 22, 'ef24fb08-2b20-45e0-adbf-cb31680c9e41', 'post_media_collection_avatar', 'e7ceeebbed23ee796e72865de7449bf0b00366a1251f5722', 'e7ceeebbed23ee796e72865de7449bf0b00366a1251f5722.jpg', 'image/jpeg', 'public', 'public', 59452, '[]', '[]', '{\"thumbnail\": true}', '[]', 29, '2023-03-29 04:24:36', '2023-03-29 04:24:37'),
(71, 'Modules\\Reporter\\Entities\\Reporter', 6, '6a7fc215-ab0e-4dfd-80c8-6f5602b28a28', 'reporter_media_collection_avatar', 'images (1)', 'images-(1).png', 'image/png', 'public', 'public', 3748, '[]', '[]', '{\"thumbnail\": true}', '[]', 33, '2023-03-30 00:07:19', '2023-03-30 00:07:20'),
(72, 'Modules\\Posts\\Entities\\Post', 1, '85fbf16d-50e9-4a4c-8aeb-09dbc3fef052', 'post_media_collection_avatar', '4', '4.jpg', 'image/jpeg', 'public', 'public', 10341, '[]', '[]', '{\"thumbnail\": true}', '[]', 34, '2023-03-30 07:07:23', '2023-03-30 07:07:25'),
(73, 'Modules\\Posts\\Entities\\Post', 2, '6615fa53-f8a4-4caf-a1ed-540185df848d', 'post_media_collection_avatar', 'Flag_of_Bangladesh.svg', 'Flag_of_Bangladesh.svg.png', 'image/png', 'public', 'public', 1077, '[]', '[]', '{\"thumbnail\": true}', '[]', 35, '2023-03-30 07:26:26', '2023-03-30 07:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_29_072643_create_permission_tables', 1),
(6, '2022_06_02_041935_create_profiles_table', 1),
(11, '2023_02_20_095725_create_tags_table', 2),
(12, '2023_02_22_044632_create_pages_table', 3),
(16, '2023_02_28_071910_create_media_table', 6),
(17, '2023_03_02_102338_create_taggable_table', 7),
(23, '2023_03_13_043614_create_contacts_table', 9),
(25, '2023_02_06_062254_create_sub_categories_table', 11),
(26, '2023_02_07_045604_create_reporters_table', 12),
(27, '2023_03_20_034127_create_media_table', 13),
(32, '2023_02_06_084033_create_categories_table', 15),
(37, '2023_02_08_071610_create_posts_table', 16),
(38, '2023_02_23_091436_create_comments_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Modules\\Users\\Entities\\User', 1),
(1, 'Modules\\Users\\Entities\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(9, 'বাংলাদেশ', 'বাংলাদেশ', NULL, '2023-03-20 00:14:10', '2023-03-28 00:04:38'),
(10, 'রাজনীতি', 'রাজনীতি', NULL, '2023-03-20 00:14:25', '2023-03-28 00:05:00'),
(11, 'আন্তর্জাতিক', 'আন্তর্জাতিক', NULL, '2023-03-20 00:14:37', '2023-03-28 00:05:12'),
(12, 'খেলা', 'খেলা', NULL, '2023-03-20 00:14:49', '2023-03-28 00:05:40'),
(13, 'বিনোদন', 'বিনোদন', NULL, '2023-03-20 00:15:01', '2023-03-28 00:05:50'),
(14, 'বিদেশ', 'বিদেশ', NULL, '2023-03-22 00:28:20', '2023-03-28 00:06:19'),
(18, 'স্বাস্থ্য', 'স্বাস্থ্য', NULL, '2023-03-27 23:32:45', '2023-03-27 23:32:45'),
(20, 'বাণিজ্য', 'বাণিজ্য', NULL, '2023-03-27 23:32:53', '2023-03-27 23:32:53'),
(21, 'রংধনু স্পেশাল', 'রংধনু-স্পেশাল', NULL, '2023-03-27 23:33:11', '2023-03-27 23:33:11'),
(22, 'শিক্ষা', 'শিক্ষা', NULL, '2023-03-27 23:33:20', '2023-03-27 23:33:20'),
(23, 'মুক্তকথা', 'মুক্তকথা', NULL, '2023-03-27 23:33:25', '2023-03-27 23:33:25'),
(24, 'ধর্ম', 'ধর্ম', NULL, '2023-03-27 23:33:32', '2023-03-27 23:33:32'),
(25, 'চাকরি', 'চাকরি', NULL, '2023-03-27 23:33:39', '2023-03-27 23:33:39'),
(26, 'বিজ্ঞান ও প্রযুক্তি', 'বিজ্ঞান-ও-প্রযুক্তি', NULL, '2023-03-27 23:33:51', '2023-03-27 23:33:51'),
(27, 'সময় প্রবাস', 'সময়-প্রবাস', NULL, '2023-03-27 23:34:03', '2023-03-27 23:34:03'),
(28, 'সাহিত্য ও সংস্কৃতি', 'সাহিত্য-ও-সংস্কৃতি', NULL, '2023-03-27 23:34:10', '2023-03-27 23:34:10'),
(29, 'লাইফস্টাইল', 'লাইফস্টাইল', NULL, '2023-03-27 23:34:18', '2023-03-27 23:34:18'),
(30, 'অন্যান্য', 'অন্যান্য', NULL, '2023-03-27 23:34:24', '2023-03-27 23:34:24');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_category_id` bigint UNSIGNED DEFAULT NULL,
  `reporter_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `published_at` timestamp NULL DEFAULT NULL,
  `can_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_count` int UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `sub_category_id`, `reporter_id`, `title`, `image_title`, `slug`, `content`, `short_description`, `published_at`, `can_comment`, `post_count`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, 6, 'প্রকল্পের ‘চুরি’ ধরতে আসছে ড্রোন', 'চলতি মার্চ মাসের প্রথম সপ্তাহে কক্সবাজারে নির্মাণাধীন মাতারবাড়ী', 'প্রকল্পের-‘চুরি’-ধরতে-আসছে-ড্রোন-2', '<p>চলতি মার্চ মাসের প্রথম সপ্তাহে কক্সবাজারে নির্মাণাধীন মাতারবাড়ী কয়লাবিদ্যুৎকেন্দ্র দেখতে যান পরিকল্পনা মন্ত্রণালয়ের বাস্তবায়ন, পরিবীক্ষণ ও মূল্যায়ন বিভাগের (আইএমইডি) কর্মকর্তারা। যাওয়ার সময় তাঁরা নিয়ে গেছেন ড্রোন। এগুলো উড়িয়ে তাঁরা প্রকল্পের খুঁটিনাটি পর্যবেক্ষণ করেছেন।</p><p>মাতারবাড়ী বিদ্যুৎকেন্দ্রের জন্য ৭৫ ফুট উঁচু চিমনি বানানো হয়েছে। আইএমইডির কর্মকর্তাদের পক্ষে এই চিমনির ওপরে উঠে কাজ ঠিকমতো হয়েছে কি না, তা দেখা সম্ভব নয়। সে জন্য তাঁরা প্রকল্প এলাকায় ড্রোন ওড়ান। চিমনির মুখে ড্রোন স্থির করে যাবতীয় নির্মাণকাজ দেখেন। এ ছাড়া চিমনির চারপাশ ঘুরে ঘুরে ড্রোনটি ছবিও তোলে।</p><p>&nbsp;</p><blockquote><p>ঠিকাদারের কথা শুনে আইএমইডির কর্মকর্তারা থেমে না গিয়ে একটি ড্রোন ওড়ানোর সিদ্ধান্ত নেন। ড্রোনটি দেড় কিলোমিটার যাওয়ার পর দেখা গেল, বাঁধ আর নির্মাণই করা হয়নি।</p></blockquote><p>মাতারবাড়ী বিদ্যুৎকেন্দ্রের কাঁচামাল রাখা হবে তিনটি শেডে। এর মধ্যে দুটি শেডের নির্মাণকাজ শেষ হয়েছে। অন্যটি এখন নির্মাণাধীন আছে। আকাশে ড্রোন উড়িয়ে কাঁচামাল রাখার তিনটি শেডের নির্মাণকাজের অগ্রগতিও দেখেন আইএমইডির কর্মকর্তারা। এ ছাড়া মাতারবাড়ী প্রকল্প এলাকায় কতটুকু জমি অধিগ্রহণ করা হয়েছে, তার প্রকল্প দলিলের হিসাবের সঙ্গে মিল আছে কি না, সেটিও ড্রোন দিয়ে মাপজোখ করা হয়। এভাবে ড্রোনের সাহায্যে পুরো মাতারবাড়ী প্রকল্প পর্যবেক্ষণ করা হয়।</p><p>কয়েক মাস আগে দেশের পশ্চিমাঞ্চলের একটি জেলায় নদীভাঙন রোধে বাঁধ দেওয়ার আরেকটি প্রকল্পে যান আইএমইডির কর্মকর্তারা। সেখানে বাঁধের ওপর রাস্তা নির্মাণের কাজ চলছে। ১৩ কিলোমিটার বাঁধের মধ্যে চার কিলোমিটারের কাজ শেষ হয়েছে বলে জানান ঠিকাদার। তিনি আইএমইডির কর্মকর্তাদের বলেন, সামনে কাদাপানি আছে, গাড়িতে চড়ে কিংবা পায়ে হেঁটে যাওয়া যাবে না।</p><p>ঠিকাদারের কথা শুনে আইএমইডির কর্মকর্তারা থেমে না গিয়ে একটি ড্রোন ওড়ানোর সিদ্ধান্ত নেন। ড্রোনটি দেড় কিলোমিটার যাওয়ার পর দেখা গেল, বাঁধ আর নির্মাণই করা হয়নি। অর্থাৎ চার কিলোমিটার নয়, মাত্র দেড় কিলোমিটার রাস্তা তৈরি হয়েছে। ড্রোনে প্রকল্পের কাজ নিয়ে ঠিকাদারের ‘মিথ্যা কথা’ ও ‘চুরি’ ধরা পড়লেও তিনি অবশ্য বলেন, আশপাশের বাসিন্দারা মাটি উঠিয়ে নিয়ে গেছেন। কিন্তু তাঁর জবাবে সন্তুষ্ট হতে পারেননি আইএমইডি কর্মকর্তারা। তাঁরা প্রকল্প পরিচালককে ওই ঠিকাদারের বিরুদ্ধে ব্যবস্থা নিতে সুপারিশ করেন।</p><blockquote><p>প্রকল্প পরিদর্শন নিয়ে আইএমইডির কার্যক্রম সব সময় প্রশ্নবিদ্ধ ছিল। তারা ঠিকমতো প্রকল্প পরিদর্শন ও মূল্যায়ন করে না। প্রযুক্তি নিজে প্রকল্প পরিদর্শন করে দেবে না। প্রযুক্তি পরিচালনা করবেন কর্মকর্তারা। ড্রোন ব্যবহার করে চাপ ও প্রভাবমুক্ত থেকে তাঁরা প্রকল্প পরিদর্শন ও মূল্যায়নের কাজ কতটা করতে পারবেন, তা এখন দেখার বিষয়।</p></blockquote><p>সেলিম রায়হান, নির্বাহী পরিচালক, সাউথ এশিয়ান নেটওয়ার্ক অন ইকোনমিক মডেলিংয়ের (সানেম)</p><p>পরিকল্পনা মন্ত্রণালয় সূত্রে জানা গেছে, রাস্তা নির্মাণে ‘মিথ্যা কথা’ ও ‘চুরি’ ধরার পরে আইএমইডির কর্মকর্তারা প্রকল্পের কাজ নজরদারিতে নিয়মিত ড্রোন ব্যবহারে আরও বেশি আগ্রহী হয়ে উঠেছেন। তাঁরা বিভিন্ন প্রকল্প পরিদর্শনে পরীক্ষামূলকভাবে ড্রোন ব্যবহার করছেন। এ জন্য ইতিমধ্যে তিনটি ড্রোন কেনা হয়েছে। এখন কর্মকর্তাদের প্রশিক্ষণ পর্ব চলছে।</p><p>প্রকল্প পরিদর্শনে প্রযুক্তির ব্যবহারকে স্বাগত জানিয়েছেন বেসরকারি গবেষণাপ্রতিষ্ঠান সাউথ এশিয়ান নেটওয়ার্ক অন ইকোনমিক মডেলিংয়ের (সানেম) নির্বাহী পরিচালক সেলিম রায়হান। তিনি প্রথম আলোকে বলেন, প্রকল্প পরিদর্শন নিয়ে আইএমইডির কার্যক্রম সব সময় প্রশ্নবিদ্ধ ছিল। তারা ঠিকমতো প্রকল্প পরিদর্শন ও মূল্যায়ন করে না। প্রযুক্তি নিজে প্রকল্প পরিদর্শন করে দেবে না। প্রযুক্তি পরিচালনা করবেন কর্মকর্তারা। ড্রোন ব্যবহার করে চাপ ও প্রভাবমুক্ত থেকে তাঁরা প্রকল্প পরিদর্শন ও মূল্যায়নের কাজ কতটা করতে পারবেন, তা এখন দেখার বিষয়।</p><p>আরও পড়ুন</p><h2><a href=\"https://www.prothomalo.com/business/business/industry/0x1w9zd4gw\">যাচাই-বাছাই করে উন্নয়ন প্রকল্প নেওয়ার পরামর্শ ব্যবসায়ীদের</a></h2><p><a href=\"https://www.prothomalo.com/business/business/industry/0x1w9zd4gw\"><img src=\"https://images.prothomalo.com/prothomalo-bangla%2F2023-03%2F9c9e17d3-5043-4577-b17a-669a9716a8b0%2F221807ef-e58f-4dfc-baac-93876e7a7183.jpg?rect=0%2C0%2C1200%2C800&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=100&amp;dpr=1.0\" alt=\"যাচাই-বাছাই করে উন্নয়ন প্রকল্প নেওয়ার পরামর্শ ব্যবসায়ীদের  \"></a></p><h2>অনুমতির জন্য অপেক্ষা</h2><p>২০২২ সালের মে মাসে ডিজেআই ব্র্যান্ডের ফ্যান্টম ও মেভিক মডেলের তিনটি ড্রোন কেনে আইএমইডি। প্রতিটির দাম পড়ে প্রায় তিন লাখ টাকা। এ ব্যাপারে গত সেপ্টেম্বর মাসে শুরু হয় সংশ্লিষ্ট কর্মকর্তাদের প্রশিক্ষণ। এখন পর্যন্ত দফায় দফায় ২৫-২৬ জন কর্মকর্তা প্রশিক্ষণ পেয়েছেন।</p><p>জানা গেছে, পরিকল্পনা মন্ত্রণালয়ের আশপাশে প্রশিক্ষণ দেওয়া যাচ্ছে না। কারণ, ওই এলাকার আশপাশে পুরোনো বিমানবন্দর, জাতীয় সংসদ, প্রধানমন্ত্রীর বাসভবনসহ বেশ কিছু অতিগুরুত্বপূর্ণ স্থাপনা রয়েছে। তাই পূর্বাচল কিংবা মুন্সিগঞ্জ গিয়ে প্রশিক্ষণ দেওয়া হয়।</p><p>দামি ড্রোন ওড়াতে বেসামরিক বিমান চলাচল কর্তৃপক্ষ (বেবিচক), বাংলাদেশ টেলিযোগাযোগ নিয়ন্ত্রণ কমিশনসহ (বিটিআরসি) সরকারের কয়েকটি দপ্তরের অনুমতি লাগে। আইএমইডির পক্ষ থেকে এসব দপ্তরের অনুমতি নেওয়ার কাজ শুরু হয়েছে। ড্রোনের ওজন পাঁচ কেজির বেশি হলে সে ক্ষেত্রে অনুমতি নিতে হয়। ভবিষ্যতে উচ্চ প্রযুক্তির এমন ড্রোনই ব্যবহার করার পরিকল্পনা করছে আইএমইডি।</p><p>আইএমইডি সূত্রে জানা গেছে, লেইডার প্রযুক্তির ড্রোন কিনবে তারা। কারণ, এই প্রযুক্তির ড্রোন দিয়ে আকাশ থেকে পানির নিচের গভীরতাও মাপা যায়। এই ড্রোন নদী খনন প্রকল্প পরিদর্শনের সময় ব্যবহার করা যাবে। কারণ, ঠিকাদারেরা নদীর তলদেশ যতটা গভীর করে খনন করার কথা, তা করেন না বলে অভিযোগ আছে। আবার পানির নিচে গিয়ে গভীরতাও মাপা যায় না। তাই লেইডার প্রযুক্তির ড্রোন ব্যবহার করবে আইএমইডি। এ ছাড়া প্রকল্প এলাকার জমি অধিগ্রহণ ঠিকমতো হয়েছে কি না, সেটি দেখার জন্য জিও ম্যাপিং প্রযুক্তির ড্রোন কেনার পরিকল্পনা আছে আইএমইডির।</p>', NULL, '2023-03-30 07:07:23', '1', 25, '2023-03-29 23:01:11', '2023-03-30 07:07:23'),
(2, 1, 8, NULL, 6, 'Deserunt rerum sequi', 'Esse hic unde itertusto', 'deserunt-rerum-sequi', '<p>fdsfsdf</p>', 'Facere officiis auytyt', NULL, '0', 0, '2023-03-30 07:26:25', '2023-03-30 07:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reporters`
--

CREATE TABLE `reporters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reporters`
--

INSERT INTO `reporters` (`id`, `name`, `mobile`, `email`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Jaquelyn English', NULL, 'bujoj@mailinator.com', 'Magna aliquip quia u', '2023-03-20 23:08:02', '2023-03-20 23:08:02'),
(5, 'Benjamin Heath', NULL, 'gody@mailinator.com', 'Non quasi eos susci', '2023-03-20 23:13:40', '2023-03-20 23:13:40'),
(6, 'রবীন্দ্রনাথ ঠাকুর', NULL, 'riqyn@mailinator.com', 'Ea non aut sapiente', '2023-03-20 23:21:36', '2023-03-30 00:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_permanent` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `is_permanent`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', 1, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(2, 'Manager', 'web', 1, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(3, 'Operator', 'web', 1, '2023-02-19 01:10:01', '2023-02-19 01:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'রাজধানী', 'rajdhanee', NULL, NULL, '2023-03-15 05:14:48', '2023-03-21 21:41:01'),
(2, 3, 'জেলা', 'jela-2', NULL, NULL, '2023-03-15 05:17:01', '2023-03-21 21:40:33'),
(3, 7, 'রাশিয়া–ইউক্রেন সংঘাত', 'rasiya-iukren-sngghat-2', NULL, '2023-03-20 01:27:59', '2023-03-15 05:17:27', '2023-03-20 01:27:59'),
(4, 7, 'রাশিয়া', 'rasiya', NULL, '2023-03-20 01:28:05', '2023-03-15 05:19:06', '2023-03-20 01:28:05'),
(5, 7, 'ভারত', 'vart', NULL, '2023-03-20 01:28:19', '2023-03-15 05:19:14', '2023-03-20 01:28:19'),
(6, 7, 'পাকিস্তান', 'pakistan', NULL, '2023-03-20 01:28:14', '2023-03-15 05:19:27', '2023-03-20 01:28:14'),
(15, 8, 'ক্রিকেট', 'kriket', NULL, '2023-03-20 01:28:09', '2023-03-16 02:21:16', '2023-03-20 01:28:09'),
(16, 8, 'ফুটবল', 'futbl', NULL, NULL, '2023-03-16 02:21:30', '2023-03-16 02:21:30'),
(17, 8, 'টেনিস', 'tenis', NULL, NULL, '2023-03-16 02:21:42', '2023-03-21 21:41:22'),
(18, 11, 'শেয়ারবাজার', 'seyarbajar', NULL, '2023-03-20 01:28:25', '2023-03-16 02:22:39', '2023-03-20 01:28:25'),
(19, 11, 'ব্যাংক', 'bzangk', NULL, '2023-03-20 01:28:32', '2023-03-16 02:22:54', '2023-03-20 01:28:32'),
(20, 11, 'শিল্প', 'silp', NULL, '2023-03-20 01:28:39', '2023-03-16 02:23:13', '2023-03-20 01:28:39'),
(21, 11, 'অর্থনীতি', 'orthneeti', NULL, '2023-03-20 01:28:44', '2023-03-16 02:23:29', '2023-03-20 01:28:44'),
(23, 3, 'ঢাকা', 'dhaka', NULL, NULL, '2023-03-20 01:05:07', '2023-03-20 01:05:07'),
(24, 3, 'ময়মনসিংহ', 'mymnsingh', NULL, NULL, '2023-03-20 01:05:34', '2023-03-20 01:05:34'),
(25, 3, 'খুলনা', 'khulna', NULL, NULL, '2023-03-20 01:05:50', '2023-03-20 01:05:50'),
(26, 3, 'বারিশাল', 'barisal', NULL, NULL, '2023-03-20 01:06:00', '2023-03-20 01:06:00'),
(27, 5, 'এশিয়া', 'esiya', NULL, NULL, '2023-03-20 01:06:23', '2023-03-20 01:06:23'),
(28, 5, 'ইউরোপ', 'iurop', NULL, NULL, '2023-03-20 01:06:37', '2023-03-20 01:06:37'),
(29, 5, 'আফ্রিকা', 'afrika', NULL, NULL, '2023-03-20 01:07:05', '2023-03-20 01:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`id`, `tag_id`, `taggable_type`, `taggable_id`, `created_at`, `updated_at`) VALUES
(171, 157, 'Modules\\Posts\\Entities\\Post', 1, NULL, NULL),
(172, 158, 'Modules\\Posts\\Entities\\Post', 1, NULL, NULL),
(173, 159, 'Modules\\Posts\\Entities\\Post', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(157, 'হার্টের রোগীর', 'হার্টের-রোগীর-2', '2023-03-30 07:07:25', '2023-03-30 07:07:25'),
(158, 'বাংলাদেশ', 'বাংলাদেশ-2', '2023-03-30 07:07:25', '2023-03-30 07:07:25'),
(159, 'Doloribus tempore f', 'doloribus-tempore-f', '2023-03-30 07:26:27', '2023-03-30 07:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `phone_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator@maxsop.com', '01234567890', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'icqV3p53eAPTw5hSwyLvXWJYPglxlYN84PqQ0RS4ljm0RM8mbZF0AxssYRrm', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(2, 'Elnora Littel', 'jasen05@example.com', '+12407270355', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gpMCOnJbkV', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(3, 'Devonte Fisher', 'augustine99@example.org', '+17206688582', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NWjlCmnsM4', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(4, 'Dr. Else Kovacek II', 'rau.eunice@example.com', '+18638918266', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qevLZE7J2G', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(5, 'Mr. Bret Stanton Jr.', 'raquel.johnson@example.com', '+12628171558', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MNuHilj8vX', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(6, 'Prof. Katlynn Zulauf I', 'veronica17@example.org', '+12295040773', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8HoKuO73Xs', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(7, 'Prof. Kaley Kozey', 'hoppe.marty@example.net', '+12769330328', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DIf8y1DbfE', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(8, 'Prof. June Olson', 'idell48@example.org', '+18307821610', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6HawLiMG0P', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(9, 'Ambrose Smitham', 'zsmitham@example.com', '+17578568122', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7veN8IRR75', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(10, 'Paige Sporer', 'reyes.shanahan@example.com', '+18203157412', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nAikgxQe8R', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(11, 'Consuelo Bauch', 'mokuneva@example.com', '+17657777093', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Gjee92VDb4', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01'),
(13, 'iqbal', 'iqbal@maxsop.com', '01234567891', '2023-02-19 01:10:01', '2023-02-19 01:10:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hexNfTrUcwqkH9u4ZmSYoxGUqr9Uuj0ImcLKipth4zLsGhYLsQnB2DIWoYUQ', NULL, '2023-02-19 01:10:01', '2023-02-19 01:10:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_page_id_foreign` (`page_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_name_index` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `posts_reporter_id_foreign` (`reporter_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reporters`
--
ALTER TABLE `reporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taggable_tag_id_foreign` (`tag_id`),
  ADD KEY `taggable_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reporters`
--
ALTER TABLE `reporters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_reporter_id_foreign` FOREIGN KEY (`reporter_id`) REFERENCES `reporters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggable_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

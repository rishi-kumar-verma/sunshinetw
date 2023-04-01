-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2023 at 07:55 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunshinetw`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutbannersections`
--

DROP TABLE IF EXISTS `aboutbannersections`;
CREATE TABLE IF NOT EXISTS `aboutbannersections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutexpertisesections`
--

DROP TABLE IF EXISTS `aboutexpertisesections`;
CREATE TABLE IF NOT EXISTS `aboutexpertisesections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutsecondsections`
--

DROP TABLE IF EXISTS `aboutsecondsections`;
CREATE TABLE IF NOT EXISTS `aboutsecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutskills`
--

DROP TABLE IF EXISTS `aboutskills`;
CREATE TABLE IF NOT EXISTS `aboutskills` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutthirdsections`
--

DROP TABLE IF EXISTS `aboutthirdsections`;
CREATE TABLE IF NOT EXISTS `aboutthirdsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rishianand001@gmail.com', '$2y$10$FlklWRlWxCrGOTju25ei4uwMeIcRCLikf29wgYc/ePGtA2iUrBSEe', '2023-03-22 16:54:48', '2023-03-21 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogbanners`
--

DROP TABLE IF EXISTS `blogbanners`;
CREATE TABLE IF NOT EXISTS `blogbanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloglistbanners`
--

DROP TABLE IF EXISTS `bloglistbanners`;
CREATE TABLE IF NOT EXISTS `bloglistbanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `two` longtext COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three` longtext COLLATE utf8mb4_unicode_ci,
  `quote` longtext COLLATE utf8mb4_unicode_ci,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogsecondsections`
--

DROP TABLE IF EXISTS `blogsecondsections`;
CREATE TABLE IF NOT EXISTS `blogsecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catagorys`
--

DROP TABLE IF EXISTS `catagorys`;
CREATE TABLE IF NOT EXISTS `catagorys` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactbanners`
--

DROP TABLE IF EXISTS `contactbanners`;
CREATE TABLE IF NOT EXISTS `contactbanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

DROP TABLE IF EXISTS `contactdetails`;
CREATE TABLE IF NOT EXISTS `contactdetails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeeightsections`
--

DROP TABLE IF EXISTS `homeeightsections`;
CREATE TABLE IF NOT EXISTS `homeeightsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homefifthsections`
--

DROP TABLE IF EXISTS `homefifthsections`;
CREATE TABLE IF NOT EXISTS `homefifthsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homefourthsections`
--

DROP TABLE IF EXISTS `homefourthsections`;
CREATE TABLE IF NOT EXISTS `homefourthsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homesecondsections`
--

DROP TABLE IF EXISTS `homesecondsections`;
CREATE TABLE IF NOT EXISTS `homesecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homesecondsectionsb`
--

DROP TABLE IF EXISTS `homesecondsectionsb`;
CREATE TABLE IF NOT EXISTS `homesecondsectionsb` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homesevensections`
--

DROP TABLE IF EXISTS `homesevensections`;
CREATE TABLE IF NOT EXISTS `homesevensections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homesixthsections`
--

DROP TABLE IF EXISTS `homesixthsections`;
CREATE TABLE IF NOT EXISTS `homesixthsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homethirdsections`
--

DROP TABLE IF EXISTS `homethirdsections`;
CREATE TABLE IF NOT EXISTS `homethirdsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_06_28_131818_create_homesecondsections_table', 1),
(5, '2022_06_28_150317_create_aboutbannersections_table', 1),
(6, '2022_06_28_151822_create_aboutsecondsections_table', 1),
(7, '2022_06_30_153416_create_aboutthirdsections_table', 1),
(8, '2022_07_01_093840_create_teambanners_table', 1),
(9, '2022_07_01_113745_create_teamthirdsections_table', 1),
(10, '2022_07_01_141225_create_testimonialbanners_table', 1),
(11, '2022_07_04_071632_create_servicebanners_table', 1),
(12, '2022_07_04_073109_create_servicesecondsections_table', 1),
(13, '2022_07_04_080402_create_servicethirdsections_table', 1),
(14, '2022_07_04_084455_create_servicefourthsections_table', 1),
(15, '2022_07_04_101237_create_portfoliothreebanners_table', 1),
(16, '2022_07_04_110846_create_portfoliobanners_table', 1),
(17, '2022_07_04_131043_create_banners_table', 1),
(18, '2022_07_06_075313_create_homesecondsections_table', 1),
(19, '2022_07_06_111822_create_homefourthsections_table', 1),
(20, '2022_07_06_130217_create_homefifthsections_table', 1),
(21, '2022_07_06_141432_create_homesixthsections_table', 1),
(22, '2022_07_06_175111_create_homeeightsections_table', 1),
(23, '2022_07_07_120916_create_homesevensections_table', 1),
(24, '2022_07_13_091349_create_homethirdsections_table', 1),
(25, '2022_07_13_120417_create_teamsecondsections_table', 1),
(26, '2022_07_13_132358_create_testimonialsecondsections_table', 1),
(27, '2022_07_13_153225_create_portfoliosecondsections_table', 1),
(28, '2022_07_14_090731_create_portfoliothirdsections_table', 1),
(29, '2022_07_14_101123_creat_blogsecondsections_table', 1),
(30, '2022_07_15_072137_creat_aboutexpertisesections_table', 1),
(31, '2022_07_15_125541_create_servicesplans_table', 1),
(32, '2022_07_15_150550_create_portfoliogallerys_table', 1),
(33, '2022_07_17_110737_create_aboutskills_table', 1),
(34, '2022_07_17_141453_create_bloglistbanners_table', 1),
(35, '2022_07_17_152821_create_contactbanners_table', 1),
(36, '2022_07_17_155540_create_contactdetails_table', 1),
(37, '2022_07_18_082524_create_blogs_table', 1),
(38, '2022_07_18_165613_create_catagorys_table', 1),
(39, '2022_07_19_100744_create_tags_table', 1),
(40, '2022_07_19_131428_create_comments_table', 1),
(41, '2022_07_19_133459_create_blogbanners_table', 1),
(42, '2022_07_19_155113_create_admins_table', 1),
(43, '2022_07_20_135731_create_users_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfoliobanners`
--

DROP TABLE IF EXISTS `portfoliobanners`;
CREATE TABLE IF NOT EXISTS `portfoliobanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfoliogallerys`
--

DROP TABLE IF EXISTS `portfoliogallerys`;
CREATE TABLE IF NOT EXISTS `portfoliogallerys` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfoliosecondsections`
--

DROP TABLE IF EXISTS `portfoliosecondsections`;
CREATE TABLE IF NOT EXISTS `portfoliosecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfoliothirdsections`
--

DROP TABLE IF EXISTS `portfoliothirdsections`;
CREATE TABLE IF NOT EXISTS `portfoliothirdsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfoliothreebanners`
--

DROP TABLE IF EXISTS `portfoliothreebanners`;
CREATE TABLE IF NOT EXISTS `portfoliothreebanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicebanners`
--

DROP TABLE IF EXISTS `servicebanners`;
CREATE TABLE IF NOT EXISTS `servicebanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicefourthsections`
--

DROP TABLE IF EXISTS `servicefourthsections`;
CREATE TABLE IF NOT EXISTS `servicefourthsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tab_two_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_one_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_one_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_two_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_two_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_thr_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_thr_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicesecondsections`
--

DROP TABLE IF EXISTS `servicesecondsections`;
CREATE TABLE IF NOT EXISTS `servicesecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicesplans`
--

DROP TABLE IF EXISTS `servicesplans`;
CREATE TABLE IF NOT EXISTS `servicesplans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicethirdsections`
--

DROP TABLE IF EXISTS `servicethirdsections`;
CREATE TABLE IF NOT EXISTS `servicethirdsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_one_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_one_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_one_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_two_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_two_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_feature_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_thr_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_thr_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_thr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pt_feature_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teambanners`
--

DROP TABLE IF EXISTS `teambanners`;
CREATE TABLE IF NOT EXISTS `teambanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamsecondsections`
--

DROP TABLE IF EXISTS `teamsecondsections`;
CREATE TABLE IF NOT EXISTS `teamsecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamthirdsections`
--

DROP TABLE IF EXISTS `teamthirdsections`;
CREATE TABLE IF NOT EXISTS `teamthirdsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonialbanners`
--

DROP TABLE IF EXISTS `testimonialbanners`;
CREATE TABLE IF NOT EXISTS `testimonialbanners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonialsecondsections`
--

DROP TABLE IF EXISTS `testimonialsecondsections`;
CREATE TABLE IF NOT EXISTS `testimonialsecondsections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `subject`, `phone`, `message`, `email`, `created_at`, `updated_at`) VALUES
(1, 'rishi', 'test', '+917827305102', 'somthing', 'rishianand001@gmail.com', '2023-03-22 11:46:08', '2023-03-22 11:46:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

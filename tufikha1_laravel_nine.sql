-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2023 at 11:20 AM
-- Server version: 5.7.42
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tufikha1_laravel_nine`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` text COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_info`, `title`, `short_title`, `short_desc`, `long_desc`, `about_image`, `created_at`, `updated_at`) VALUES
(1, '01 - ABOUT ME', 'I have transform your ideas into remarkable digital products', '20+ Years Experience In this game, MeansProduct Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', '<p class=\"desc\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<ul class=\"about__exp__list\">\r\n<li>\r\n<h5 class=\"title\">User experience design - (Product Design)</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Web and user interface design - Development</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Interaction design - Animation</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>\r\n</li>\r\n</ul>', '1769220812881178.png', '2023-04-30 19:25:31', '2023-06-20 05:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `logo`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, '1769392735045481.png', 'Dsigning award 2021', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', '2023-06-22 09:00:08', '2023-06-22 09:00:08'),
(5, '1769392806224249.png', 'User research award 2020', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', '2023-06-22 09:01:16', '2023-06-22 09:01:16'),
(6, '1769392838209513.png', 'BBA final examination 2001', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', '2023-06-22 09:01:47', '2023-06-22 09:01:47'),
(7, '1769392863980713.png', 'Best ux designer award in 2002', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', '2023-06-22 09:02:11', '2023-06-22 09:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(7, '3', 'imac Mockup design', NULL, 'vue', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.</p>', '2023-06-20 10:34:29', '2023-06-22 23:01:26'),
(10, '4', 'Mobile Mockup Design', '1769468419589035.png', 'laravel,vue', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.</div>\r\n</div>', '2023-06-23 05:02:39', '2023-06-22 23:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(3, 'apps', '2023-06-18 09:49:46', '2023-06-18 09:49:46'),
(4, 'laravel', '2023-06-18 13:53:24', '2023-06-18 13:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `date`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Pro product design with udemey', '2016 - 2020', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have', '2023-06-22 09:03:20', '2023-06-22 09:03:20'),
(4, 'Computer Science - england', '2008 – 2012', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have', '2023-06-22 09:03:35', '2023-06-22 09:03:35'),
(5, 'Product Designer at google', '2021 – Present', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have', '2023-06-22 09:03:53', '2023-06-22 09:03:53'),
(6, 'DPR Engineering Dhaka University', '2004 – 2016', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have', '2023-06-22 09:04:06', '2023-06-22 09:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_description` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `short_description`, `country`, `address`, `email`, `social_title`, `social_description`, `facebook`, `twitter`, `linkedIn`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '01521489753', 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.', 'Bangladesh', '123 Example Street', 'tufikhasan05@gmail.com', 'Follow us on social media', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'https://www.facebook.com/example', 'https://twitter.com/example', 'https://www.linkedin.com/company/example', 'Copyright @ tufikhasan.com 2023 All right Reserved', '2023-06-19 10:52:44', '2023-06-22 04:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_slide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time. updated', 'I\'m a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences', '1769208982287977.png', 'https://www.youtube.com/watch?v=XHOmBV4js_E', '2023-05-24 03:02:00', '2023-06-20 02:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_064408_create_home_slides_table', 2),
(6, '2023_05_24_172216_create_abouts_table', 3),
(7, '2023_05_24_193113_create_multi_images_table', 4),
(8, '2023_05_24_200131_create_multi_images_table', 5),
(12, '2023_06_17_092945_create_portfolios_table', 6),
(13, '2023_06_18_085649_create_blog_categories_table', 7),
(14, '2023_06_18_095503_create_blogs_table', 8),
(16, '2023_06_19_101658_create_footers_table', 9),
(17, '2023_06_19_114250_create_contacts_table', 10),
(18, '2023_06_21_043006_create_testimonials_table', 11),
(19, '2023_06_21_094058_create_partners_table', 12),
(20, '2023_06_21_115020_create_services_table', 13),
(21, '2023_06_21_135213_create_skills_table', 14),
(22, '2023_06_21_135539_create_awards_table', 14),
(23, '2023_06_21_135726_create_education_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `image_type`, `image`, `created_at`, `updated_at`) VALUES
(18, 'about', '1766854418105014.png', '2023-05-25 02:34:39', '2023-06-20 06:30:44'),
(19, 'about', '1766854418162908.png', '2023-05-25 02:34:39', '2023-06-20 06:24:29'),
(20, 'about', '1766854418187824.png', '2023-05-25 02:34:39', '2023-06-20 06:24:38'),
(21, 'about', '1766854418250100.png', '2023-05-25 02:34:39', '2023-06-20 06:24:46'),
(22, 'about', '1766854418279481.png', '2023-05-25 02:34:39', '2023-06-20 06:24:53'),
(23, 'about', '1766854418320465.png', '2023-05-25 02:34:39', '2023-06-20 06:25:00'),
(24, 'about', '1766854418379147.png', '2023-05-25 02:34:39', '2023-06-20 06:25:07'),
(40, 'testimonial', '1769304294405228.png', '2023-06-21 03:34:23', NULL),
(41, 'testimonial', '1769304294435565.png', '2023-06-21 03:34:23', NULL),
(42, 'testimonial', '1769304294445521.png', '2023-06-21 03:34:23', NULL),
(43, 'testimonial', '1769304294455528.png', '2023-06-21 03:34:23', NULL),
(44, 'testimonial', '1769304294466085.png', '2023-06-21 03:34:23', NULL),
(45, 'testimonial', '1769304294475689.png', '2023-06-21 03:34:23', NULL),
(46, 'testimonial', '1769304294485367.png', '2023-06-21 03:34:23', NULL),
(47, 'partners', '1769306993028410.png', '2023-06-21 04:17:17', NULL),
(48, 'partners', '1769306993040437.png', '2023-06-21 04:17:17', NULL),
(49, 'partners', '1769306993050919.png', '2023-06-21 04:17:17', NULL),
(50, 'partners', '1769306993061206.png', '2023-06-21 04:17:17', NULL),
(51, 'partners', '1769306993088325.png', '2023-06-21 04:17:17', NULL),
(52, 'partners', '1769306993100010.png', '2023-06-21 04:17:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title_info`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '05 - PARTNERS', 'I proud to have collaborated with some awesome companies', 'I\'m a bit of a digital product junky. Over the years, I\'ve used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.', '2023-06-21 09:53:10', '2023-06-21 04:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci,
  `portfolio_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_description`, `portfolio_image`, `portfolio_link`, `created_at`, `updated_at`) VALUES
(4, 'Web Design', 'Crytop Trading page', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', NULL, 'http://127.0.0.1:8000/add/portfolio', '2023-06-18 06:16:34', '2023-06-22 23:06:26'),
(5, 'Apps', 'Momma Fashion Mobile', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.</p>', NULL, 'https://www.tufikhasan.com/', '2023-06-23 05:05:49', '2023-06-23 05:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `service_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `service_list`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(6, 'Product Design', 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.', 'User Research & Testing,UX Design,Visual Design,Information Architecture', NULL, '1769318982376929.png', '2023-06-21 13:27:50', '2023-06-21 13:27:50'),
(7, 'Business Strategy', 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.', 'User Research & Testing,UX Design,Visual Design,Information Architecture', NULL, '1769319031230905.png', '2023-06-21 13:28:37', '2023-06-21 13:28:37'),
(9, 'Brand Strategy', 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.', 'User Research & Testing,UX Design,Visual Design,Information Architecture', NULL, '1769319159427046.png', '2023-06-21 13:30:39', '2023-06-21 13:30:39'),
(10, 'Web Development', 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.', 'User Research & Testing,UX Design,Visual Design,Information Architecture', NULL, '1769320147054417.png', '2023-06-21 13:46:21', '2023-06-21 13:46:21'),
(11, 'Visual Design', 'Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.', 'User Research & Testing,UX Design,Visual Design,Information Architecture', NULL, '1769468752687775.png', '2023-06-23 05:08:25', '2023-06-23 05:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `percentage`, `created_at`, `updated_at`) VALUES
(3, 'ADOBE TOOLS', '85', '2023-06-22 08:54:24', '2023-06-22 02:55:07'),
(4, 'USER RESEARCH', '55', '2023-06-22 08:55:23', '2023-06-22 02:55:49'),
(5, 'SKEATCH', '45', '2023-06-22 08:56:25', '2023-06-22 08:56:25'),
(6, 'ANALYTICAL ABILITIES', '80', '2023-06-22 08:56:39', '2023-06-22 08:56:39'),
(7, 'FIGMA', '65', '2023-06-22 08:57:06', '2023-06-22 08:57:06'),
(8, 'RESOURCEFULNESS', '50', '2023-06-22 08:57:25', '2023-06-22 08:57:25'),
(9, 'BRAIN STORMING', '90', '2023-06-22 08:57:45', '2023-06-22 08:57:45'),
(10, 'COMMUNICATION', '70', '2023-06-22 08:57:59', '2023-06-22 08:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `feedback`, `user`, `created_at`, `updated_at`) VALUES
(1, 'We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and', 'Rasalina De Wiliamson', '2023-06-21 08:19:53', '2023-06-21 02:32:03'),
(2, 'We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and', 'Rasalina De Wiliamson', '2023-06-21 08:32:34', '2023-06-21 08:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Towfik', 'admin@gmail.com', 'admin', '2023-05-18 15:20:03', '$2y$10$7490jw8L4nKAKuFajCH/kOMKmxDz2hIgKjKafA8TEBHT6MaeqkXIq', '202305290556_hotjar.png', 'oqAGqm4cAWW0pYg75rXCo2AvIvTlQkh4jqGWFPJQYxPxyrU3hNRGkBJ5w4Gc', '2023-05-18 15:17:24', '2023-06-22 22:30:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

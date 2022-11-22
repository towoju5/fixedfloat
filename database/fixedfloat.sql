-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 01:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixedfloat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `referral_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_profits`
--

CREATE TABLE `affiliate_profits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `profit` decimal(15,8) NOT NULL,
  `paid_status` enum('4','6','8') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '8' COMMENT '4: Completed\r\n6: Cancelled\r\n8: Pending',
  `created_at` timestamp NOT NULL DEFAULT '2022-11-13 19:41:55',
  `updated_at` timestamp NOT NULL DEFAULT '2022-11-13 19:41:55',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affiliate_profits`
--

INSERT INTO `affiliate_profits` (`id`, `user_id`, `order_id`, `profit`, `paid_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 2, '90.00000000', '8', '2022-11-13 19:41:55', '2022-11-13 19:41:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binshops_categories`
--

CREATE TABLE `binshops_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'user id',
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binshops_category_translations`
--

CREATE TABLE `binshops_category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binshops_comments`
--

CREATE TABLE `binshops_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'if user was logged in',
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if enabled in the config file',
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if not logged in',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'the comment body',
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binshops_configurations`
--

CREATE TABLE `binshops_configurations` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binshops_configurations`
--

INSERT INTO `binshops_configurations` (`key`, `value`, `created_at`, `updated_at`) VALUES
('DEFAULT_LANGUAGE_LOCALE', 'en', '2022-11-21 17:15:00', '2022-11-21 17:15:00'),
('INITIAL_SETUP', '1', '2022-11-21 17:15:00', '2022-11-21 17:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `binshops_languages`
--

CREATE TABLE `binshops_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `rtl` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binshops_languages`
--

INSERT INTO `binshops_languages` (`id`, `name`, `locale`, `iso_code`, `date_format`, `active`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'en', 'YYYY/MM/DD', 0, 0, '2022-11-21 17:15:00', '2022-11-21 17:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `binshops_posts`
--

CREATE TABLE `binshops_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `posted_at` datetime DEFAULT NULL COMMENT 'Public posted at time, if this is in future then it wont appear yet',
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binshops_posts`
--

INSERT INTO `binshops_posts` (`id`, `user_id`, `posted_at`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-11-21 18:15:20', 1, '2022-11-21 17:15:20', '2022-11-21 17:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `binshops_post_categories`
--

CREATE TABLE `binshops_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binshops_post_translations`
--

CREATE TABLE `binshops_post_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'New blog post',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_view_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'should refer to a blade file in /views/',
  `image_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binshops_post_translations`
--

INSERT INTO `binshops_post_translations` (`id`, `post_id`, `slug`, `title`, `subtitle`, `meta_desc`, `seo_title`, `post_body`, `short_description`, `use_view_file`, `image_large`, `image_medium`, `image_thumbnail`, `lang_id`, `created_at`, `updated_at`) VALUES
(1, 1, '-the-title-of-the-blog-post', 'The title of the blog post', 'Porro veniam ut ad', NULL, NULL, '<p><small>The subtitle of the blog post (optional)</small></p>\r\n\r\n<p>Blog Post Slug<input name=\"slug\" type=\"text\" value=\"\" /><small>The slug (leave blank to auto generate) - i.e.http://127.0.0.1:8000/en/blog/your-slug</small></p>\r\n\r\n<p>Published?<select name=\"is_published\">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option selected=\"selected\" value=\"1\">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Published&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value=\"0\">Not&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Published&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</select><small>Should this be published? If not, then it won&#39;t be publicly viewable.</small></p>\r\n\r\n<p>Posted at<input name=\"posted_at\" type=\"text\" value=\"2022-11-21 18:15:20\" /><small>When this should be published. If this value is greater than now (2022-11-21 18:15:20) then it will not (yet) appear on your blog. Should be in the&nbsp;<code>YYYY-MM-DD HH:MM:SS</code>&nbsp;format.</small></p>', NULL, NULL, 'the-title-of-the-blog-post-1000x700.png', 'the-title-of-the-blog-post-600x400.png', 'the-title-of-the-blog-post-150x150.png', 1, '2022-11-21 17:15:20', '2022-11-21 17:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `binshops_uploaded_photos`
--

CREATE TABLE `binshops_uploaded_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `uploaded_images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `uploader_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binshops_uploaded_photos`
--

INSERT INTO `binshops_uploaded_photos` (`id`, `uploaded_images`, `image_title`, `source`, `uploader_id`, `created_at`, `updated_at`) VALUES
(1, '{\"image_large\":{\"filename\":\"the-title-of-the-blog-post-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"the-title-of-the-blog-post-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"the-title-of-the-blog-post-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-11-21 17:16:41', '2022-11-21 17:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laravel_fulltext`
--

CREATE TABLE `laravel_fulltext` (
  `id` int(10) UNSIGNED NOT NULL,
  `indexable_id` int(11) NOT NULL,
  `indexable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexed_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexed_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_fulltext`
--

INSERT INTO `laravel_fulltext` (`id`, `indexable_id`, `indexable_type`, `indexed_title`, `indexed_content`, `created_at`, `updated_at`) VALUES
(1, 1, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'The title of the blog post Porro veniam ut ad', '<p><small>The subtitle of the blog post (optional)</small></p>\r\n\r\n<p>Blog Post Slug<input name=\"slug\" type=\"text\" value=\"\" /><small>The slug (leave blank to auto generate) - i.e.http://127.0.0.1:8000/en/blog/your-slug</small></p>\r\n\r\n<p>Published?<select name=\"is_published\">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option selected=\"selected\" value=\"1\">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Published&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value=\"0\">Not&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Published&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</select><small>Should this be published? If not, then it won&#39;t be publicly viewable.</small></p>\r\n\r\n<p>Posted at<input name=\"posted_at\" type=\"text\" value=\"2022-11-21 18:15:20\" /><small>When this should be published. If this value is greater than now (2022-11-21 18:15:20) then it will not (yet) appear on your blog. Should be in the&nbsp;<code>YYYY-MM-DD HH:MM:SS</code>&nbsp;format.</small></p>', '2022-11-21 17:15:20', '2022-11-21 17:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `locale` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `key` text COLLATE utf8mb4_bin NOT NULL,
  `value` text COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `ltm_translations`
--

INSERT INTO `ltm_translations` (`id`, `status`, `locale`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 0, 'en', '_json', 'Withdrawal Requests', 'Withdrawal Requests', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(2, 0, 'en', '_json', 'User List', 'User List', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(3, 0, 'en', '_json', 'S/N', 'S/N', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(4, 0, 'en', '_json', 'Customer Name', 'Customer Name', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(5, 0, 'en', '_json', 'Customer Email', 'Customer Email', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(6, 0, 'en', '_json', 'Wallet Balance', 'Wallet Balance', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(7, 0, 'en', '_json', 'affiliate ID', 'affiliate ID', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(8, 0, 'en', '_json', 'Joined', 'Joined', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(9, 0, 'en', '_json', 'Welcome to', 'Welcome to', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(10, 0, 'en', '_json', 'Please sign-in to your account and start the adventure', 'Please sign-in to your account and start the adventure', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(11, 0, 'en', '_json', 'Email', 'Email', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(12, 0, 'en', '_json', 'Password', 'Password', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(13, 0, 'en', '_json', 'Forgot Password', 'Forgot Password', '2022-11-14 03:27:48', '2022-11-21 13:52:44'),
(14, 0, 'en', '_json', 'Remember Me', 'Remember Me', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(15, 0, 'en', '_json', 'Sign in', 'Sign in', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(16, 0, 'en', '_json', 'New on our platform', 'New on our platform', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(17, 0, 'en', '_json', 'Create an account', 'Create an account', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(18, 0, 'en', '_json', 'Confirm Password', 'Confirm Password', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(19, 0, 'en', '_json', 'Please confirm your password before continuing.', 'Please confirm your password before continuing.', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(20, 0, 'en', '_json', 'Forgot Your Password?', 'Forgot Your Password?', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(21, 0, 'en', '_json', 'Reset Password', 'Reset Password', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(22, 0, 'en', '_json', 'Email Address', 'Email Address', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(23, 0, 'en', '_json', 'Send Password Reset Link', 'Send Password Reset Link', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(24, 0, 'en', '_json', 'Name', 'Name', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(25, 0, 'en', '_json', 'Register', 'Register', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(26, 0, 'en', '_json', 'Verify Your Email Address', 'Verify Your Email Address', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(27, 0, 'en', '_json', 'A fresh verification link has been sent to your email address.', 'A fresh verification link has been sent to your email address.', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(28, 0, 'en', '_json', 'Before proceeding, please check your email for a verification link.', 'Before proceeding, please check your email for a verification link.', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(29, 0, 'en', '_json', 'If you did not receive the email', 'If you did not receive the email', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(30, 0, 'en', '_json', 'click here to request another', 'click here to request another', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(31, 0, 'en', '_json', 'Dashboard', 'Dashboard', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(32, 0, 'en', '_json', 'You are logged in!', 'You are logged in!', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(33, 0, 'en', '_json', 'Users', 'Users', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(34, 0, 'en', '_json', 'Orders', 'Orders', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(35, 0, 'en', '_json', 'Withdraw Request', 'Withdraw Request', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(36, 0, 'en', '_json', 'Logout', 'Logout', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(37, 0, 'en', '_json', 'Payouts', 'Payouts', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(38, 0, 'en', '_json', 'Affiliate Program', 'Affiliate Program', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(39, 0, 'en', '_json', 'Orders history', 'Orders history', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(40, 0, 'en', '_json', 'Profile', 'Profile', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(41, 0, 'en', '_json', 'Admin', 'Admin', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(42, 0, 'en', '_json', 'My Profile', 'My Profile', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(43, 0, 'en', '_json', 'Settings', 'Settings', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(44, 0, 'en', '_json', 'Billing', 'Billing', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(45, 0, 'en', '_json', 'Log Out', 'Log Out', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(46, 0, 'en', '_json', 'Affiliate statistics', 'Affiliate statistics', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(47, 0, 'en', '_json', 'Estimated Balance', 'Estimated Balance', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(48, 0, 'en', '_json', 'Pending withdrawal', 'Pending withdrawal', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(49, 0, 'en', '_json', 'Minimum withdrawal amount', 'Minimum withdrawal amount', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(50, 0, 'en', '_json', 'Affiliate token and links', 'Affiliate token and links', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(51, 0, 'en', '_json', 'Your token', 'Your token', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(52, 0, 'en', '_json', 'Simple link', 'Simple link', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(53, 0, 'en', '_json', 'Affiliate orders', 'Affiliate orders', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(54, 0, 'en', '_json', 'Date', 'Date', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(55, 0, 'en', '_json', 'Order ID', 'Order ID', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(56, 0, 'en', '_json', 'Profit', 'Profit', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(57, 0, 'en', '_json', 'Paid', 'Paid', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(58, 0, 'en', '_json', 'Personal Information', 'Personal Information', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(59, 0, 'en', '_json', 'Investor', 'Investor', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(60, 0, 'en', '_json', 'Full Name', 'Full Name', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(61, 0, 'en', '_json', 'Mobile', 'Mobile', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(62, 0, 'en', '_json', 'E-mail', 'E-mail', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(63, 0, 'en', '_json', 'Location', 'Location', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(64, 0, 'en', '_json', 'Country', 'Country', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(65, 0, 'en', '_json', 'Change Password', 'Change Password', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(66, 0, 'en', '_json', 'New Password', 'New Password', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(67, 0, 'en', '_json', 'Passwords do not match', 'Passwords do not match', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(68, 0, 'en', '_json', 'Active orders', 'Active orders', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(69, 0, 'en', '_json', 'Time', 'Time', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(70, 0, 'en', '_json', 'Send', 'Send', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(71, 0, 'en', '_json', 'Receive', 'Receive', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(72, 0, 'en', '_json', 'Status', 'Status', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(73, 0, 'en', '_json', 'Сompleted orders', 'Сompleted orders', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(74, 0, 'en', '_json', 'Received', 'Received', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(75, 0, 'en', '_json', 'Received Address', 'Received Address', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(76, 0, 'en', '_json', 'Payout', 'Payout', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(77, 0, 'en', '_json', 'Bitcoin address', 'Bitcoin address', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(78, 0, 'en', '_json', 'Amount', 'Amount', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(79, 0, 'en', '_json', 'Ready to payout', 'Ready to payout', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(80, 0, 'en', '_json', 'less than the minimum', 'less than the minimum', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(81, 0, 'en', '_json', 'Last payouts', 'Last payouts', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(82, 0, 'en', '_json', 'No Transaction Found', 'No Transaction Found', '2022-11-14 03:27:49', '2022-11-21 13:52:44'),
(83, 0, 'es', '_json', 'Withdrawal Requests', 'Solicitudes de retiro', '2022-11-14 04:01:19', '2022-11-21 13:52:44'),
(84, 0, 'es', '_json', 'User List', 'Lista de usuarios', '2022-11-14 04:01:20', '2022-11-21 13:52:44'),
(85, 0, 'es', '_json', 'S/N', 'S/N', '2022-11-14 04:01:20', '2022-11-21 13:52:44'),
(86, 0, 'es', '_json', 'Customer Name', 'Nombre del cliente', '2022-11-14 04:01:20', '2022-11-21 13:52:44'),
(87, 0, 'es', '_json', 'Customer Email', 'Correo electrónico del cliente', '2022-11-14 04:01:20', '2022-11-21 13:52:44'),
(88, 0, 'es', '_json', 'Wallet Balance', 'Saldo de la cartera', '2022-11-14 04:01:22', '2022-11-21 13:52:44'),
(89, 0, 'es', '_json', 'affiliate ID', 'identificación del afiliado', '2022-11-14 04:01:22', '2022-11-21 13:52:44'),
(90, 0, 'es', '_json', 'Joined', 'Unido', '2022-11-14 04:01:22', '2022-11-21 13:52:44'),
(91, 0, 'es', '_json', 'Welcome to', 'Bienvenido a', '2022-11-14 04:01:22', '2022-11-21 13:52:44'),
(92, 0, 'es', '_json', 'Please sign-in to your account and start the adventure', 'Inicia sesión en tu cuenta y comienza la aventura.', '2022-11-14 04:01:23', '2022-11-21 13:52:44'),
(93, 0, 'es', '_json', 'Email', 'Correo electrónico', '2022-11-14 04:01:24', '2022-11-21 13:52:44'),
(94, 0, 'es', '_json', 'Password', 'Clave', '2022-11-14 04:01:24', '2022-11-21 13:52:44'),
(95, 0, 'es', '_json', 'Forgot Password', 'Has olvidado tu contraseña', '2022-11-14 04:01:24', '2022-11-21 13:52:44'),
(96, 0, 'es', '_json', 'Remember Me', 'Recuérdame', '2022-11-14 04:01:25', '2022-11-21 13:52:44'),
(97, 0, 'es', '_json', 'Sign in', 'Iniciar sesión', '2022-11-14 04:01:25', '2022-11-21 13:52:44'),
(98, 0, 'es', '_json', 'New on our platform', 'Nuevo en nuestra plataforma', '2022-11-14 04:01:26', '2022-11-21 13:52:44'),
(99, 0, 'es', '_json', 'Create an account', 'Crea una cuenta', '2022-11-14 04:01:26', '2022-11-21 13:52:44'),
(100, 0, 'es', '_json', 'Confirm Password', 'Confirmar contraseña', '2022-11-14 04:01:27', '2022-11-21 13:52:44'),
(101, 0, 'es', '_json', 'Please confirm your password before continuing.', 'Por favor, confirme su contraseña antes de continuar.', '2022-11-14 04:01:27', '2022-11-21 13:52:44'),
(102, 0, 'es', '_json', 'Forgot Your Password?', '¿Olvidaste tu contraseña?', '2022-11-14 04:01:27', '2022-11-21 13:52:44'),
(103, 0, 'es', '_json', 'Reset Password', 'Restablecer la contraseña', '2022-11-14 04:01:28', '2022-11-21 13:52:44'),
(104, 0, 'es', '_json', 'Email Address', 'Dirección de correo electrónico', '2022-11-14 04:01:29', '2022-11-21 13:52:44'),
(105, 0, 'es', '_json', 'Send Password Reset Link', 'Enviar enlace de restablecimiento de contraseña', '2022-11-14 04:01:29', '2022-11-21 13:52:44'),
(106, 0, 'es', '_json', 'Name', 'Nombre', '2022-11-14 04:01:29', '2022-11-21 13:52:44'),
(107, 0, 'es', '_json', 'Register', 'Registro', '2022-11-14 04:01:30', '2022-11-21 13:52:44'),
(108, 0, 'es', '_json', 'Verify Your Email Address', 'Verifique su dirección de correo electrónico', '2022-11-14 04:01:31', '2022-11-21 13:52:44'),
(109, 0, 'es', '_json', 'A fresh verification link has been sent to your email address.', 'Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.', '2022-11-14 04:01:31', '2022-11-21 13:52:44'),
(110, 0, 'es', '_json', 'Before proceeding, please check your email for a verification link.', 'Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación.', '2022-11-14 04:01:31', '2022-11-21 13:52:44'),
(111, 0, 'es', '_json', 'If you did not receive the email', 'Si no recibiste el correo electrónico', '2022-11-14 04:01:32', '2022-11-21 13:52:44'),
(112, 0, 'es', '_json', 'click here to request another', 'haga clic aquí para solicitar otro', '2022-11-14 04:01:32', '2022-11-21 13:52:44'),
(113, 0, 'es', '_json', 'Dashboard', 'Tablero', '2022-11-14 04:01:33', '2022-11-21 13:52:44'),
(114, 0, 'es', '_json', 'You are logged in!', '¡Estás conectado!', '2022-11-14 04:01:33', '2022-11-21 13:52:44'),
(115, 0, 'es', '_json', 'Users', 'Usuarios', '2022-11-14 04:01:34', '2022-11-21 13:52:44'),
(116, 0, 'es', '_json', 'Orders', 'Pedidos', '2022-11-14 04:01:34', '2022-11-21 13:52:44'),
(117, 0, 'es', '_json', 'Withdraw Request', 'Petición de retiro', '2022-11-14 04:01:34', '2022-11-21 13:52:44'),
(118, 0, 'es', '_json', 'Logout', 'Cerrar sesión', '2022-11-14 04:01:35', '2022-11-21 13:52:44'),
(119, 0, 'es', '_json', 'Payouts', 'Pagos', '2022-11-14 04:01:36', '2022-11-21 13:52:44'),
(120, 0, 'es', '_json', 'Affiliate Program', 'programa de afiliación', '2022-11-14 04:01:36', '2022-11-21 13:52:44'),
(121, 0, 'es', '_json', 'Orders history', 'historial de pedidos', '2022-11-14 04:01:36', '2022-11-21 13:52:44'),
(122, 0, 'es', '_json', 'Profile', 'Perfil', '2022-11-14 04:01:36', '2022-11-21 13:52:44'),
(123, 0, 'es', '_json', 'Admin', 'Administración', '2022-11-14 04:01:38', '2022-11-21 13:52:44'),
(124, 0, 'es', '_json', 'My Profile', 'Mi perfil', '2022-11-14 04:01:38', '2022-11-21 13:52:44'),
(125, 0, 'es', '_json', 'Settings', 'Ajustes', '2022-11-14 04:01:38', '2022-11-21 13:52:44'),
(126, 0, 'es', '_json', 'Billing', 'Facturación', '2022-11-14 04:01:38', '2022-11-21 13:52:44'),
(127, 0, 'es', '_json', 'Log Out', 'Cerrar sesión', '2022-11-14 04:01:38', '2022-11-21 13:52:44'),
(128, 0, 'es', '_json', 'Affiliate statistics', 'Estadísticas de afiliados', '2022-11-14 04:01:40', '2022-11-21 13:52:44'),
(129, 0, 'es', '_json', 'Estimated Balance', 'Balance estimado', '2022-11-14 04:01:40', '2022-11-21 13:52:44'),
(130, 0, 'es', '_json', 'Pending withdrawal', 'Retiro Pendiente', '2022-11-14 04:01:40', '2022-11-21 13:52:44'),
(131, 0, 'es', '_json', 'Minimum withdrawal amount', 'Cantidad mínima de retiro', '2022-11-14 04:01:40', '2022-11-21 13:52:44'),
(132, 0, 'es', '_json', 'Affiliate token and links', 'Token de afiliado y enlaces', '2022-11-14 04:01:41', '2022-11-21 13:52:44'),
(133, 0, 'es', '_json', 'Your token', 'tu token', '2022-11-14 04:01:42', '2022-11-21 13:52:44'),
(134, 0, 'es', '_json', 'Simple link', 'enlace sencillo', '2022-11-14 04:01:42', '2022-11-21 13:52:44'),
(135, 0, 'es', '_json', 'Affiliate orders', 'pedidos de afiliados', '2022-11-14 04:01:42', '2022-11-21 13:52:44'),
(136, 0, 'es', '_json', 'Date', 'Fecha', '2022-11-14 04:01:42', '2022-11-21 13:52:44'),
(137, 0, 'es', '_json', 'Order ID', 'Solicitar ID', '2022-11-14 04:01:43', '2022-11-21 13:52:44'),
(138, 0, 'es', '_json', 'Profit', 'Lucro', '2022-11-14 04:01:44', '2022-11-21 13:52:44'),
(139, 0, 'es', '_json', 'Paid', 'Pagado', '2022-11-14 04:01:44', '2022-11-21 13:52:44'),
(140, 0, 'es', '_json', 'Personal Information', 'Informacion personal', '2022-11-14 04:01:44', '2022-11-21 13:52:44'),
(141, 0, 'es', '_json', 'Investor', 'Inversor', '2022-11-14 04:01:45', '2022-11-21 13:52:44'),
(142, 0, 'es', '_json', 'Full Name', 'Nombre completo', '2022-11-14 04:01:45', '2022-11-21 13:52:44'),
(143, 0, 'es', '_json', 'Mobile', 'Móvil', '2022-11-14 04:01:46', '2022-11-21 13:52:44'),
(144, 0, 'es', '_json', 'E-mail', 'Correo electrónico', '2022-11-14 04:01:46', '2022-11-21 13:52:44'),
(145, 0, 'es', '_json', 'Location', 'Ubicación', '2022-11-14 04:01:46', '2022-11-21 13:52:44'),
(146, 0, 'es', '_json', 'Country', 'País', '2022-11-14 04:01:47', '2022-11-21 13:52:44'),
(147, 0, 'es', '_json', 'Change Password', 'Cambia la contraseña', '2022-11-14 04:01:47', '2022-11-21 13:52:44'),
(148, 0, 'es', '_json', 'New Password', 'Nueva contraseña', '2022-11-14 04:01:48', '2022-11-21 13:52:44'),
(149, 0, 'es', '_json', 'Passwords do not match', 'Las contraseñas no coinciden', '2022-11-14 04:01:48', '2022-11-21 13:52:44'),
(150, 0, 'es', '_json', 'Active orders', 'Pedidos activos', '2022-11-14 04:01:49', '2022-11-21 13:52:44'),
(151, 0, 'es', '_json', 'Time', 'Tiempo', '2022-11-14 04:01:49', '2022-11-21 13:52:44'),
(152, 0, 'es', '_json', 'Send', 'Enviar', '2022-11-14 04:01:49', '2022-11-21 13:52:44'),
(153, 0, 'es', '_json', 'Receive', 'Recibir', '2022-11-14 04:01:50', '2022-11-21 13:52:44'),
(154, 0, 'es', '_json', 'Status', 'Estado', '2022-11-14 04:01:50', '2022-11-21 13:52:44'),
(155, 0, 'es', '_json', 'Сompleted orders', 'pedidos completados', '2022-11-14 04:01:51', '2022-11-21 13:52:44'),
(156, 0, 'es', '_json', 'Received', 'Recibió', '2022-11-14 04:01:51', '2022-11-21 13:52:44'),
(157, 0, 'es', '_json', 'Received Address', 'Dirección recibida', '2022-11-14 04:01:51', '2022-11-21 13:52:44'),
(158, 0, 'es', '_json', 'Payout', 'Pagar', '2022-11-14 04:01:53', '2022-11-21 13:52:44'),
(159, 0, 'es', '_json', 'Bitcoin address', 'Dirección de Bitcoin', '2022-11-14 04:01:53', '2022-11-21 13:52:44'),
(160, 0, 'es', '_json', 'Amount', 'Monto', '2022-11-14 04:01:53', '2022-11-21 13:52:44'),
(161, 0, 'es', '_json', 'Ready to payout', 'Listo para pagar', '2022-11-14 04:01:53', '2022-11-21 13:52:44'),
(162, 0, 'es', '_json', 'less than the minimum', 'menos que el mínimo', '2022-11-14 04:01:54', '2022-11-21 13:52:44'),
(163, 0, 'es', '_json', 'Last payouts', 'Últimos pagos', '2022-11-14 04:01:55', '2022-11-21 13:52:44'),
(164, 0, 'es', '_json', 'No Transaction Found', 'No se encontró ninguna transacción', '2022-11-14 04:01:55', '2022-11-21 13:52:44'),
(165, 0, 'fr', '_json', 'Withdrawal Requests', 'Demandes de retrait', '2022-11-14 04:02:21', '2022-11-21 13:52:44'),
(166, 0, 'fr', '_json', 'User List', 'liste d\'utilisateur', '2022-11-14 04:02:21', '2022-11-21 13:52:44'),
(167, 0, 'fr', '_json', 'S/N', 'S/N', '2022-11-14 04:02:21', '2022-11-21 13:52:44'),
(168, 0, 'fr', '_json', 'Customer Name', 'Nom du client', '2022-11-14 04:02:22', '2022-11-21 13:52:44'),
(169, 0, 'fr', '_json', 'Customer Email', 'Email client', '2022-11-14 04:02:22', '2022-11-21 13:52:44'),
(170, 0, 'fr', '_json', 'Wallet Balance', 'Solde du portefeuille', '2022-11-14 04:02:23', '2022-11-21 13:52:44'),
(171, 0, 'fr', '_json', 'affiliate ID', 'ID d\'affilié', '2022-11-14 04:02:23', '2022-11-21 13:52:44'),
(172, 0, 'fr', '_json', 'Joined', 'Rejoint', '2022-11-14 04:02:24', '2022-11-21 13:52:44'),
(173, 0, 'fr', '_json', 'Welcome to', 'Bienvenue à', '2022-11-14 04:02:24', '2022-11-21 13:52:44'),
(174, 0, 'fr', '_json', 'Please sign-in to your account and start the adventure', 'Veuillez vous connecter à votre compte et commencer l\'aventure', '2022-11-14 04:02:24', '2022-11-21 13:52:44'),
(175, 0, 'fr', '_json', 'Email', 'E-mail', '2022-11-14 04:02:25', '2022-11-21 13:52:44'),
(176, 0, 'fr', '_json', 'Password', 'Mot de passe', '2022-11-14 04:02:26', '2022-11-21 13:52:44'),
(177, 0, 'fr', '_json', 'Forgot Password', 'Mot de passe oublié', '2022-11-14 04:02:26', '2022-11-21 13:52:44'),
(178, 0, 'fr', '_json', 'Remember Me', 'Souviens-toi de moi', '2022-11-14 04:02:26', '2022-11-21 13:52:44'),
(179, 0, 'fr', '_json', 'Sign in', 'S\'identifier', '2022-11-14 04:02:26', '2022-11-21 13:52:44'),
(180, 0, 'fr', '_json', 'New on our platform', 'Nouveau sur notre plateforme', '2022-11-14 04:02:27', '2022-11-21 13:52:44'),
(181, 0, 'fr', '_json', 'Create an account', 'Créer un compte', '2022-11-14 04:02:28', '2022-11-21 13:52:44'),
(182, 0, 'fr', '_json', 'Confirm Password', 'Confirmez le mot de passe', '2022-11-14 04:02:28', '2022-11-21 13:52:44'),
(183, 0, 'fr', '_json', 'Please confirm your password before continuing.', 'Veuillez confirmer votre mot de passe avant de continuer.', '2022-11-14 04:02:28', '2022-11-21 13:52:44'),
(184, 0, 'fr', '_json', 'Forgot Your Password?', 'Mot de passe oublié?', '2022-11-14 04:02:28', '2022-11-21 13:52:44'),
(185, 0, 'fr', '_json', 'Reset Password', 'réinitialiser le mot de passe', '2022-11-14 04:02:30', '2022-11-21 13:52:44'),
(186, 0, 'fr', '_json', 'Email Address', 'Adresse e-mail', '2022-11-14 04:02:30', '2022-11-21 13:52:44'),
(187, 0, 'fr', '_json', 'Send Password Reset Link', 'Envoyer le lien de réinitialisation du mot de passe', '2022-11-14 04:02:30', '2022-11-21 13:52:44'),
(188, 0, 'fr', '_json', 'Name', 'Nom', '2022-11-14 04:02:30', '2022-11-21 13:52:44'),
(189, 0, 'fr', '_json', 'Register', 'S\'inscrire', '2022-11-14 04:02:30', '2022-11-21 13:52:44'),
(190, 0, 'fr', '_json', 'Verify Your Email Address', 'Vérifiez votre adresse e-mail', '2022-11-14 04:02:31', '2022-11-21 13:52:44'),
(191, 0, 'fr', '_json', 'A fresh verification link has been sent to your email address.', 'Un nouveau lien de vérification a été envoyé à votre adresse e-mail.', '2022-11-14 04:02:32', '2022-11-21 13:52:44'),
(192, 0, 'fr', '_json', 'Before proceeding, please check your email for a verification link.', 'Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.', '2022-11-14 04:02:32', '2022-11-21 13:52:44'),
(193, 0, 'fr', '_json', 'If you did not receive the email', 'Si vous n\'avez pas reçu l\'e-mail', '2022-11-14 04:02:32', '2022-11-21 13:52:44'),
(194, 0, 'fr', '_json', 'click here to request another', 'cliquez ici pour en demander un autre', '2022-11-14 04:02:33', '2022-11-21 13:52:44'),
(195, 0, 'fr', '_json', 'Dashboard', 'Tableau de bord', '2022-11-14 04:02:34', '2022-11-21 13:52:44'),
(196, 0, 'fr', '_json', 'You are logged in!', 'Vous êtes connecté!', '2022-11-14 04:02:34', '2022-11-21 13:52:44'),
(197, 0, 'fr', '_json', 'Users', 'Utilisateurs', '2022-11-14 04:02:34', '2022-11-21 13:52:44'),
(198, 0, 'fr', '_json', 'Orders', 'Ordres', '2022-11-14 04:02:34', '2022-11-21 13:52:44'),
(199, 0, 'fr', '_json', 'Withdraw Request', 'Demande de retrait', '2022-11-14 04:02:35', '2022-11-21 13:52:44'),
(200, 0, 'fr', '_json', 'Logout', 'Se déconnecter', '2022-11-14 04:02:36', '2022-11-21 13:52:44'),
(201, 0, 'fr', '_json', 'Payouts', 'Paiements', '2022-11-14 04:02:36', '2022-11-21 13:52:44'),
(202, 0, 'fr', '_json', 'Affiliate Program', 'Programme d\'affiliation', '2022-11-14 04:02:36', '2022-11-21 13:52:44'),
(203, 0, 'fr', '_json', 'Orders history', 'Historique des commandes', '2022-11-14 04:02:36', '2022-11-21 13:52:44'),
(204, 0, 'fr', '_json', 'Profile', 'Profil', '2022-11-14 04:02:37', '2022-11-21 13:52:44'),
(205, 0, 'fr', '_json', 'Admin', 'Administrateur', '2022-11-14 04:02:38', '2022-11-21 13:52:44'),
(206, 0, 'fr', '_json', 'My Profile', 'Mon profil', '2022-11-14 04:02:38', '2022-11-21 13:52:44'),
(207, 0, 'fr', '_json', 'Settings', 'Réglages', '2022-11-14 04:02:38', '2022-11-21 13:52:44'),
(208, 0, 'fr', '_json', 'Billing', 'Facturation', '2022-11-14 04:02:38', '2022-11-21 13:52:44'),
(209, 0, 'fr', '_json', 'Log Out', 'Se déconnecter', '2022-11-14 04:02:39', '2022-11-21 13:52:44'),
(210, 0, 'fr', '_json', 'Affiliate statistics', 'Statistiques d\'affiliation', '2022-11-14 04:02:40', '2022-11-21 13:52:44'),
(211, 0, 'fr', '_json', 'Estimated Balance', 'Solde estimé', '2022-11-14 04:02:40', '2022-11-21 13:52:44'),
(212, 0, 'fr', '_json', 'Pending withdrawal', 'En attente de retrait', '2022-11-14 04:02:41', '2022-11-21 13:52:44'),
(213, 0, 'fr', '_json', 'Minimum withdrawal amount', 'Montant minimum de retrait', '2022-11-14 04:02:41', '2022-11-21 13:52:44'),
(214, 0, 'fr', '_json', 'Affiliate token and links', 'Jeton d\'affiliation et liens', '2022-11-14 04:02:41', '2022-11-21 13:52:44'),
(215, 0, 'fr', '_json', 'Your token', 'Votre jeton', '2022-11-14 04:02:42', '2022-11-21 13:52:44'),
(216, 0, 'fr', '_json', 'Simple link', 'Lien simplifié', '2022-11-14 04:02:42', '2022-11-21 13:52:44'),
(217, 0, 'fr', '_json', 'Affiliate orders', 'Commandes d\'affiliation', '2022-11-14 04:02:43', '2022-11-21 13:52:44'),
(218, 0, 'fr', '_json', 'Date', 'Date', '2022-11-14 04:02:43', '2022-11-21 13:52:44'),
(219, 0, 'fr', '_json', 'Order ID', 'numéro de commande', '2022-11-14 04:02:43', '2022-11-21 13:52:44'),
(220, 0, 'fr', '_json', 'Profit', 'Profit', '2022-11-14 04:02:45', '2022-11-21 13:52:44'),
(221, 0, 'fr', '_json', 'Paid', 'Payé', '2022-11-14 04:02:45', '2022-11-21 13:52:44'),
(222, 0, 'fr', '_json', 'Personal Information', 'Renseignements personnels', '2022-11-14 04:02:45', '2022-11-21 13:52:44'),
(223, 0, 'fr', '_json', 'Investor', 'Investisseur', '2022-11-14 04:02:45', '2022-11-21 13:52:44'),
(224, 0, 'fr', '_json', 'Full Name', 'Nom et prénom', '2022-11-14 04:02:45', '2022-11-21 13:52:44'),
(225, 0, 'fr', '_json', 'Mobile', 'Mobile', '2022-11-14 04:02:47', '2022-11-21 13:52:44'),
(226, 0, 'fr', '_json', 'E-mail', 'E-mail', '2022-11-14 04:02:47', '2022-11-21 13:52:44'),
(227, 0, 'fr', '_json', 'Location', 'Emplacement', '2022-11-14 04:02:47', '2022-11-21 13:52:44'),
(228, 0, 'fr', '_json', 'Country', 'Pays', '2022-11-14 04:02:47', '2022-11-21 13:52:44'),
(229, 0, 'fr', '_json', 'Change Password', 'Changer le mot de passe', '2022-11-14 04:02:47', '2022-11-21 13:52:44'),
(230, 0, 'fr', '_json', 'New Password', 'nouveau mot de passe', '2022-11-14 04:02:48', '2022-11-21 13:52:44'),
(231, 0, 'fr', '_json', 'Passwords do not match', 'Les mots de passe ne correspondent pas', '2022-11-14 04:02:49', '2022-11-21 13:52:44'),
(232, 0, 'fr', '_json', 'Active orders', 'Commandes actives', '2022-11-14 04:02:49', '2022-11-21 13:52:44'),
(233, 0, 'fr', '_json', 'Time', 'Temps', '2022-11-14 04:02:49', '2022-11-21 13:52:44'),
(234, 0, 'fr', '_json', 'Send', 'Envoyer', '2022-11-14 04:02:49', '2022-11-21 13:52:44'),
(235, 0, 'fr', '_json', 'Receive', 'Recevoir', '2022-11-14 04:02:51', '2022-11-21 13:52:44'),
(236, 0, 'fr', '_json', 'Status', 'Statut', '2022-11-14 04:02:51', '2022-11-21 13:52:44'),
(237, 0, 'fr', '_json', 'Сompleted orders', 'Commandes terminées', '2022-11-14 04:02:51', '2022-11-21 13:52:44'),
(238, 0, 'fr', '_json', 'Received', 'Reçu', '2022-11-14 04:02:51', '2022-11-21 13:52:44'),
(239, 0, 'fr', '_json', 'Received Address', 'Adresse reçue', '2022-11-14 04:02:51', '2022-11-21 13:52:44'),
(240, 0, 'fr', '_json', 'Payout', 'Paiement', '2022-11-14 04:02:53', '2022-11-21 13:52:44'),
(241, 0, 'fr', '_json', 'Bitcoin address', 'Adresse bitcoin', '2022-11-14 04:02:53', '2022-11-21 13:52:44'),
(242, 0, 'fr', '_json', 'Amount', 'Montant', '2022-11-14 04:02:53', '2022-11-21 13:52:44'),
(243, 0, 'fr', '_json', 'Ready to payout', 'Prêt à payer', '2022-11-14 04:02:53', '2022-11-21 13:52:44'),
(244, 0, 'fr', '_json', 'less than the minimum', 'moins que le minimum', '2022-11-14 04:02:54', '2022-11-21 13:52:44'),
(245, 0, 'fr', '_json', 'Last payouts', 'Derniers versements', '2022-11-14 04:02:55', '2022-11-21 13:52:44'),
(246, 0, 'fr', '_json', 'No Transaction Found', 'Aucune transaction trouvée', '2022-11-14 04:02:55', '2022-11-21 13:52:44'),
(247, 0, 'de', '_json', 'Withdrawal Requests', 'Auszahlungsanträge', '2022-11-14 04:04:31', '2022-11-21 13:52:44'),
(248, 0, 'de', '_json', 'User List', 'Benutzerliste', '2022-11-14 04:04:31', '2022-11-21 13:52:44'),
(249, 0, 'de', '_json', 'S/N', 'S/N', '2022-11-14 04:04:32', '2022-11-21 13:52:44'),
(250, 0, 'de', '_json', 'Customer Name', 'Kundenname', '2022-11-14 04:04:32', '2022-11-21 13:52:44'),
(251, 0, 'de', '_json', 'Customer Email', 'Kunden-eMail', '2022-11-14 04:04:32', '2022-11-21 13:52:44'),
(252, 0, 'de', '_json', 'Wallet Balance', 'Wallet-Guthaben', '2022-11-14 04:04:33', '2022-11-21 13:52:44'),
(253, 0, 'de', '_json', 'affiliate ID', 'Partner-ID', '2022-11-14 04:04:34', '2022-11-21 13:52:44'),
(254, 0, 'de', '_json', 'Joined', 'Trat bei', '2022-11-14 04:04:34', '2022-11-21 13:52:44'),
(255, 0, 'de', '_json', 'Welcome to', 'Willkommen zu', '2022-11-14 04:04:34', '2022-11-21 13:52:44'),
(256, 0, 'de', '_json', 'Please sign-in to your account and start the adventure', 'Bitte melden Sie sich bei Ihrem Konto an und starten Sie das Abenteuer', '2022-11-14 04:04:35', '2022-11-21 13:52:44'),
(257, 0, 'de', '_json', 'Email', 'Email', '2022-11-14 04:04:36', '2022-11-21 13:52:44'),
(258, 0, 'de', '_json', 'Password', 'Passwort', '2022-11-14 04:04:36', '2022-11-21 13:52:44'),
(259, 0, 'de', '_json', 'Forgot Password', 'Passwort vergessen', '2022-11-14 04:04:36', '2022-11-21 13:52:44'),
(260, 0, 'de', '_json', 'Remember Me', 'Erinnere dich an mich', '2022-11-14 04:04:37', '2022-11-21 13:52:44'),
(261, 0, 'de', '_json', 'Sign in', 'Einloggen', '2022-11-14 04:04:37', '2022-11-21 13:52:44'),
(262, 0, 'de', '_json', 'New on our platform', 'Neu auf unserer Plattform', '2022-11-14 04:04:38', '2022-11-21 13:52:44'),
(263, 0, 'de', '_json', 'Create an account', 'Ein Konto erstellen', '2022-11-14 04:04:38', '2022-11-21 13:52:44'),
(264, 0, 'de', '_json', 'Confirm Password', 'Passwort bestätigen', '2022-11-14 04:04:39', '2022-11-21 13:52:44'),
(265, 0, 'de', '_json', 'Please confirm your password before continuing.', 'Bitte bestätigen Sie Ihr Passwort, bevor Sie fortfahren.', '2022-11-14 04:04:39', '2022-11-21 13:52:44'),
(266, 0, 'de', '_json', 'Forgot Your Password?', 'Haben Sie Ihr Passwort vergessen?', '2022-11-14 04:04:39', '2022-11-21 13:52:44'),
(267, 0, 'de', '_json', 'Reset Password', 'Passwort zurücksetzen', '2022-11-14 04:04:40', '2022-11-21 13:52:44'),
(268, 0, 'de', '_json', 'Email Address', 'E-Mail-Addresse', '2022-11-14 04:04:41', '2022-11-21 13:52:44'),
(269, 0, 'de', '_json', 'Send Password Reset Link', 'Link zum Zurücksetzen des Passworts senden', '2022-11-14 04:04:41', '2022-11-21 13:52:44'),
(270, 0, 'de', '_json', 'Name', 'Name', '2022-11-14 04:04:41', '2022-11-21 13:52:44'),
(271, 0, 'de', '_json', 'Register', 'Registrieren', '2022-11-14 04:04:41', '2022-11-21 13:52:44'),
(272, 0, 'de', '_json', 'Verify Your Email Address', 'Bestätige deine Email-Adresse', '2022-11-14 04:04:42', '2022-11-21 13:52:44'),
(273, 0, 'de', '_json', 'A fresh verification link has been sent to your email address.', 'Ein neuer Bestätigungslink wurde an Ihre E-Mail-Adresse gesendet.', '2022-11-14 04:04:43', '2022-11-21 13:52:44'),
(274, 0, 'de', '_json', 'Before proceeding, please check your email for a verification link.', 'Bevor Sie fortfahren, überprüfen Sie bitte Ihre E-Mail auf einen Bestätigungslink.', '2022-11-14 04:04:43', '2022-11-21 13:52:44'),
(275, 0, 'de', '_json', 'If you did not receive the email', 'Wenn Sie die E-Mail nicht erhalten haben', '2022-11-14 04:04:43', '2022-11-21 13:52:44'),
(276, 0, 'de', '_json', 'click here to request another', 'Klicken Sie hier, um eine weitere anzufordern', '2022-11-14 04:04:44', '2022-11-21 13:52:44'),
(277, 0, 'de', '_json', 'Dashboard', 'Armaturenbrett', '2022-11-14 04:04:45', '2022-11-21 13:52:44'),
(278, 0, 'de', '_json', 'You are logged in!', 'Du bist eingeloggt!', '2022-11-14 04:04:45', '2022-11-21 13:52:44'),
(279, 0, 'de', '_json', 'Users', 'Benutzer', '2022-11-14 04:04:45', '2022-11-21 13:52:44'),
(280, 0, 'de', '_json', 'Orders', 'Aufträge', '2022-11-14 04:04:46', '2022-11-21 13:52:44'),
(281, 0, 'de', '_json', 'Withdraw Request', 'Anfrage zurückziehen', '2022-11-14 04:04:46', '2022-11-21 13:52:44'),
(282, 0, 'de', '_json', 'Logout', 'Ausloggen', '2022-11-14 04:04:47', '2022-11-21 13:52:44'),
(283, 0, 'de', '_json', 'Payouts', 'Auszahlungen', '2022-11-14 04:04:47', '2022-11-21 13:52:44'),
(284, 0, 'de', '_json', 'Affiliate Program', 'Partnerprogramm', '2022-11-14 04:04:48', '2022-11-21 13:52:44'),
(285, 0, 'de', '_json', 'Orders history', 'Bestellhistorie', '2022-11-14 04:04:48', '2022-11-21 13:52:44'),
(286, 0, 'de', '_json', 'Profile', 'Profil', '2022-11-14 04:04:48', '2022-11-21 13:52:44'),
(287, 0, 'de', '_json', 'Admin', 'Administrator', '2022-11-14 04:04:49', '2022-11-21 13:52:44'),
(288, 0, 'de', '_json', 'My Profile', 'Mein Profil', '2022-11-14 04:04:50', '2022-11-21 13:52:44'),
(289, 0, 'de', '_json', 'Settings', 'Einstellungen', '2022-11-14 04:04:50', '2022-11-21 13:52:44'),
(290, 0, 'de', '_json', 'Billing', 'Abrechnung', '2022-11-14 04:04:50', '2022-11-21 13:52:44'),
(291, 0, 'de', '_json', 'Log Out', 'Ausloggen', '2022-11-14 04:04:50', '2022-11-21 13:52:44'),
(292, 0, 'de', '_json', 'Affiliate statistics', 'Affiliate-Statistiken', '2022-11-14 04:04:52', '2022-11-21 13:52:44'),
(293, 0, 'de', '_json', 'Estimated Balance', 'Geschätzter Saldo', '2022-11-14 04:04:52', '2022-11-21 13:52:44'),
(294, 0, 'de', '_json', 'Pending withdrawal', 'Ausstehende Auszahlung', '2022-11-14 04:04:52', '2022-11-21 13:52:44'),
(295, 0, 'de', '_json', 'Minimum withdrawal amount', 'Mindestauszahlungsbetrag', '2022-11-14 04:04:52', '2022-11-21 13:52:44'),
(296, 0, 'de', '_json', 'Affiliate token and links', 'Affiliate-Token und Links', '2022-11-14 04:04:53', '2022-11-21 13:52:44'),
(297, 0, 'de', '_json', 'Your token', 'Ihr Token', '2022-11-14 04:04:54', '2022-11-21 13:52:44'),
(298, 0, 'de', '_json', 'Simple link', 'Einfache Verlinkung', '2022-11-14 04:04:54', '2022-11-21 13:52:44'),
(299, 0, 'de', '_json', 'Affiliate orders', 'Affiliate-Bestellungen', '2022-11-14 04:04:54', '2022-11-21 13:52:44'),
(300, 0, 'de', '_json', 'Date', 'Datum', '2022-11-14 04:04:55', '2022-11-21 13:52:44'),
(301, 0, 'de', '_json', 'Order ID', 'Auftragsnummer', '2022-11-14 04:04:55', '2022-11-21 13:52:44'),
(302, 0, 'de', '_json', 'Profit', 'Profitieren', '2022-11-14 04:04:56', '2022-11-21 13:52:44'),
(303, 0, 'de', '_json', 'Paid', 'Bezahlt', '2022-11-14 04:04:56', '2022-11-21 13:52:44'),
(304, 0, 'de', '_json', 'Personal Information', 'Persönliche Informationen', '2022-11-14 04:04:57', '2022-11-21 13:52:44'),
(305, 0, 'de', '_json', 'Investor', 'Investor', '2022-11-14 04:04:57', '2022-11-21 13:52:44'),
(306, 0, 'de', '_json', 'Full Name', 'Vollständiger Name', '2022-11-14 04:04:57', '2022-11-21 13:52:44'),
(307, 0, 'de', '_json', 'Mobile', 'Handy, Mobiltelefon', '2022-11-14 04:04:59', '2022-11-21 13:52:44'),
(308, 0, 'de', '_json', 'E-mail', 'Email', '2022-11-14 04:04:59', '2022-11-21 13:52:44'),
(309, 0, 'de', '_json', 'Location', 'Ort', '2022-11-14 04:04:59', '2022-11-21 13:52:44'),
(310, 0, 'de', '_json', 'Country', 'Land', '2022-11-14 04:04:59', '2022-11-21 13:52:44'),
(311, 0, 'de', '_json', 'Change Password', 'Passwort ändern', '2022-11-14 04:05:00', '2022-11-21 13:52:44'),
(312, 0, 'de', '_json', 'New Password', 'Neues Passwort', '2022-11-14 04:05:01', '2022-11-21 13:52:44'),
(313, 0, 'de', '_json', 'Passwords do not match', 'Passwörter stimmen nicht überein', '2022-11-14 04:05:01', '2022-11-21 13:52:44'),
(314, 0, 'de', '_json', 'Active orders', 'Aktive Bestellungen', '2022-11-14 04:05:01', '2022-11-21 13:52:44'),
(315, 0, 'de', '_json', 'Time', 'Zeit', '2022-11-14 04:05:02', '2022-11-21 13:52:44'),
(316, 0, 'de', '_json', 'Send', 'Senden', '2022-11-14 04:05:02', '2022-11-21 13:52:44'),
(317, 0, 'de', '_json', 'Receive', 'Erhalten', '2022-11-14 04:05:03', '2022-11-21 13:52:44'),
(318, 0, 'de', '_json', 'Status', 'Status', '2022-11-14 04:05:03', '2022-11-21 13:52:44'),
(319, 0, 'de', '_json', 'Сompleted orders', 'Abgeschlossene Bestellungen', '2022-11-14 04:05:03', '2022-11-21 13:52:44'),
(320, 0, 'de', '_json', 'Received', 'Erhalten', '2022-11-14 04:05:04', '2022-11-21 13:52:44'),
(321, 0, 'de', '_json', 'Received Address', 'Erhaltene Adresse', '2022-11-14 04:05:04', '2022-11-21 13:52:44'),
(322, 0, 'de', '_json', 'Payout', 'Auszahlung', '2022-11-14 04:05:05', '2022-11-21 13:52:44'),
(323, 0, 'de', '_json', 'Bitcoin address', 'Bitcoin Adresse', '2022-11-14 04:05:05', '2022-11-21 13:52:44'),
(324, 0, 'de', '_json', 'Amount', 'Menge', '2022-11-14 04:05:06', '2022-11-21 13:52:44'),
(325, 0, 'de', '_json', 'Ready to payout', 'Bereit zur Auszahlung', '2022-11-14 04:05:06', '2022-11-21 13:52:44'),
(326, 0, 'de', '_json', 'less than the minimum', 'weniger als das Minimum', '2022-11-14 04:05:06', '2022-11-21 13:52:44'),
(327, 0, 'de', '_json', 'Last payouts', 'Letzte Auszahlungen', '2022-11-14 04:05:07', '2022-11-21 13:52:44'),
(328, 0, 'de', '_json', 'No Transaction Found', 'Keine Transaktion gefunden', '2022-11-14 04:05:08', '2022-11-21 13:52:44'),
(329, 0, 'pt', '_json', 'Withdrawal Requests', 'Solicitações de Retirada', '2022-11-14 04:10:42', '2022-11-21 13:52:44'),
(330, 0, 'pt', '_json', 'User List', 'Lista de usuários', '2022-11-14 04:10:42', '2022-11-21 13:52:44'),
(331, 0, 'pt', '_json', 'S/N', 'S/N', '2022-11-14 04:10:42', '2022-11-21 13:52:44'),
(332, 0, 'pt', '_json', 'Customer Name', 'nome do cliente', '2022-11-14 04:10:44', '2022-11-21 13:52:44'),
(333, 0, 'pt', '_json', 'Customer Email', 'Email do cliente', '2022-11-14 04:10:44', '2022-11-21 13:52:44'),
(334, 0, 'pt', '_json', 'Wallet Balance', 'Saldo da carteira', '2022-11-14 04:10:46', '2022-11-21 13:52:44'),
(335, 0, 'pt', '_json', 'affiliate ID', 'ID de afiliado', '2022-11-14 04:10:46', '2022-11-21 13:52:44'),
(336, 0, 'pt', '_json', 'Joined', 'Ingressou', '2022-11-14 04:10:46', '2022-11-21 13:52:44'),
(337, 0, 'pt', '_json', 'Welcome to', 'Bem-vindo ao', '2022-11-14 04:10:46', '2022-11-21 13:52:44'),
(338, 0, 'pt', '_json', 'Please sign-in to your account and start the adventure', 'Faça login na sua conta e comece a aventura', '2022-11-14 04:10:47', '2022-11-21 13:52:44'),
(339, 0, 'pt', '_json', 'Email', 'E-mail', '2022-11-14 04:10:48', '2022-11-21 13:52:44'),
(340, 0, 'pt', '_json', 'Password', 'Senha', '2022-11-14 04:10:48', '2022-11-21 13:52:44'),
(341, 0, 'pt', '_json', 'Forgot Password', 'Esqueceu a senha', '2022-11-14 04:10:48', '2022-11-21 13:52:44'),
(342, 0, 'pt', '_json', 'Remember Me', 'Lembre de mim', '2022-11-14 04:10:49', '2022-11-21 13:52:44'),
(343, 0, 'pt', '_json', 'Sign in', 'Entrar', '2022-11-14 04:10:49', '2022-11-21 13:52:44'),
(344, 0, 'pt', '_json', 'New on our platform', 'Novidade em nossa plataforma', '2022-11-14 04:10:50', '2022-11-21 13:52:44'),
(345, 0, 'pt', '_json', 'Create an account', 'Crie a sua conta aqui', '2022-11-14 04:10:50', '2022-11-21 13:52:44'),
(346, 0, 'pt', '_json', 'Confirm Password', 'Confirme a Senha', '2022-11-14 04:10:50', '2022-11-21 13:52:44'),
(347, 0, 'pt', '_json', 'Please confirm your password before continuing.', 'Por favor, confirme sua senha antes de continuar.', '2022-11-14 04:10:51', '2022-11-21 13:52:44'),
(348, 0, 'pt', '_json', 'Forgot Your Password?', 'Esqueceu sua senha?', '2022-11-14 04:10:51', '2022-11-21 13:52:44'),
(349, 0, 'pt', '_json', 'Reset Password', 'Redefinir senha', '2022-11-14 04:10:52', '2022-11-21 13:52:44'),
(350, 0, 'pt', '_json', 'Email Address', 'Endereço de email', '2022-11-14 04:10:52', '2022-11-21 13:52:44'),
(351, 0, 'pt', '_json', 'Send Password Reset Link', 'Enviar link de redefinição de senha', '2022-11-14 04:10:53', '2022-11-21 13:52:44'),
(352, 0, 'pt', '_json', 'Name', 'Nome', '2022-11-14 04:10:53', '2022-11-21 13:52:44'),
(353, 0, 'pt', '_json', 'Register', 'Registro', '2022-11-14 04:10:54', '2022-11-21 13:52:44'),
(354, 0, 'pt', '_json', 'Verify Your Email Address', 'Verifique seu endereço de e-mail', '2022-11-14 04:10:55', '2022-11-21 13:52:44'),
(355, 0, 'pt', '_json', 'A fresh verification link has been sent to your email address.', 'Um novo link de verificação foi enviado para seu endereço de e-mail.', '2022-11-14 04:10:55', '2022-11-21 13:52:44'),
(356, 0, 'pt', '_json', 'Before proceeding, please check your email for a verification link.', 'Antes de continuar, verifique seu e-mail para obter um link de verificação.', '2022-11-14 04:10:55', '2022-11-21 13:52:44'),
(357, 0, 'pt', '_json', 'If you did not receive the email', 'Se você não recebeu o e-mail', '2022-11-14 04:10:56', '2022-11-21 13:52:44'),
(358, 0, 'pt', '_json', 'click here to request another', 'clique aqui para solicitar outro', '2022-11-14 04:10:56', '2022-11-21 13:52:44'),
(359, 0, 'pt', '_json', 'Dashboard', 'Painel', '2022-11-14 04:10:57', '2022-11-21 13:52:44'),
(360, 0, 'pt', '_json', 'You are logged in!', 'Você está logado!', '2022-11-14 04:10:57', '2022-11-21 13:52:44'),
(361, 0, 'pt', '_json', 'Users', 'Usuários', '2022-11-14 04:10:57', '2022-11-21 13:52:44'),
(362, 0, 'pt', '_json', 'Orders', 'Pedidos', '2022-11-14 04:10:58', '2022-11-21 13:52:44'),
(363, 0, 'pt', '_json', 'Withdraw Request', 'Solicitação de Retirada', '2022-11-14 04:10:58', '2022-11-21 13:52:44'),
(364, 0, 'pt', '_json', 'Logout', 'Sair', '2022-11-14 04:10:59', '2022-11-21 13:52:44'),
(365, 0, 'pt', '_json', 'Payouts', 'Pagamentos', '2022-11-14 04:10:59', '2022-11-21 13:52:44'),
(366, 0, 'pt', '_json', 'Affiliate Program', 'Programa de Afiliados', '2022-11-14 04:11:00', '2022-11-21 13:52:44'),
(367, 0, 'pt', '_json', 'Orders history', 'Histórico de pedidos', '2022-11-14 04:11:00', '2022-11-21 13:52:44'),
(368, 0, 'pt', '_json', 'Profile', 'Perfil', '2022-11-14 04:11:00', '2022-11-21 13:52:44'),
(369, 0, 'pt', '_json', 'Admin', 'Administrador', '2022-11-14 04:11:01', '2022-11-21 13:52:44'),
(370, 0, 'pt', '_json', 'My Profile', 'Meu perfil', '2022-11-14 04:11:01', '2022-11-21 13:52:44'),
(371, 0, 'pt', '_json', 'Settings', 'Definições', '2022-11-14 04:11:02', '2022-11-21 13:52:44'),
(372, 0, 'pt', '_json', 'Billing', 'Cobrança', '2022-11-14 04:11:02', '2022-11-21 13:52:44'),
(373, 0, 'pt', '_json', 'Log Out', 'Sair', '2022-11-14 04:11:03', '2022-11-21 13:52:44'),
(374, 0, 'pt', '_json', 'Affiliate statistics', 'Estatísticas de afiliados', '2022-11-14 04:11:04', '2022-11-21 13:52:44'),
(375, 0, 'pt', '_json', 'Estimated Balance', 'Saldo estimado', '2022-11-14 04:11:04', '2022-11-21 13:52:44'),
(376, 0, 'pt', '_json', 'Pending withdrawal', 'Retirada pendente', '2022-11-14 04:11:04', '2022-11-21 13:52:44'),
(377, 0, 'pt', '_json', 'Minimum withdrawal amount', 'Valor mínimo de saque', '2022-11-14 04:11:04', '2022-11-21 13:52:44'),
(378, 0, 'pt', '_json', 'Affiliate token and links', 'Token de afiliado e links', '2022-11-14 04:11:05', '2022-11-21 13:52:44'),
(379, 0, 'pt', '_json', 'Your token', 'Seu token', '2022-11-14 04:11:06', '2022-11-21 13:52:44'),
(380, 0, 'pt', '_json', 'Simple link', 'Link simples', '2022-11-14 04:11:06', '2022-11-21 13:52:44'),
(381, 0, 'pt', '_json', 'Affiliate orders', 'Pedidos de afiliados', '2022-11-14 04:11:06', '2022-11-21 13:52:44'),
(382, 0, 'pt', '_json', 'Date', 'Encontro', '2022-11-14 04:11:06', '2022-11-21 13:52:44'),
(383, 0, 'pt', '_json', 'Order ID', 'Código do pedido', '2022-11-14 04:11:07', '2022-11-21 13:52:44'),
(384, 0, 'pt', '_json', 'Profit', 'Lucro', '2022-11-14 04:11:08', '2022-11-21 13:52:44'),
(385, 0, 'pt', '_json', 'Paid', 'Pago', '2022-11-14 04:11:08', '2022-11-21 13:52:44'),
(386, 0, 'pt', '_json', 'Personal Information', 'Informação pessoal', '2022-11-14 04:11:08', '2022-11-21 13:52:44'),
(387, 0, 'pt', '_json', 'Investor', 'Investidor', '2022-11-14 04:11:09', '2022-11-21 13:52:44'),
(388, 0, 'pt', '_json', 'Full Name', 'Nome completo', '2022-11-14 04:11:09', '2022-11-21 13:52:44'),
(389, 0, 'pt', '_json', 'Mobile', 'Móvel', '2022-11-14 04:11:10', '2022-11-21 13:52:44'),
(390, 0, 'pt', '_json', 'E-mail', 'E-mail', '2022-11-14 04:11:10', '2022-11-21 13:52:44'),
(391, 0, 'pt', '_json', 'Location', 'Localização', '2022-11-14 04:11:10', '2022-11-21 13:52:44'),
(392, 0, 'pt', '_json', 'Country', 'País', '2022-11-14 04:11:11', '2022-11-21 13:52:44'),
(393, 0, 'pt', '_json', 'Change Password', 'Mudar senha', '2022-11-14 04:11:11', '2022-11-21 13:52:44'),
(394, 0, 'pt', '_json', 'New Password', 'Nova Senha', '2022-11-14 04:11:12', '2022-11-21 13:52:44'),
(395, 0, 'pt', '_json', 'Passwords do not match', 'As senhas não coincidem', '2022-11-14 04:11:13', '2022-11-21 13:52:44'),
(396, 0, 'pt', '_json', 'Active orders', 'Pedidos ativos', '2022-11-14 04:11:13', '2022-11-21 13:52:44'),
(397, 0, 'pt', '_json', 'Time', 'Tempo', '2022-11-14 04:11:13', '2022-11-21 13:52:44'),
(398, 0, 'pt', '_json', 'Send', 'Mandar', '2022-11-14 04:11:13', '2022-11-21 13:52:44'),
(399, 0, 'pt', '_json', 'Receive', 'Receber', '2022-11-14 04:11:15', '2022-11-21 13:52:44'),
(400, 0, 'pt', '_json', 'Status', 'Status', '2022-11-14 04:11:15', '2022-11-21 13:52:44'),
(401, 0, 'pt', '_json', 'Сompleted orders', 'Pedidos concluídos', '2022-11-14 04:11:15', '2022-11-21 13:52:44'),
(402, 0, 'pt', '_json', 'Received', 'Recebido', '2022-11-14 04:11:16', '2022-11-21 13:52:44'),
(403, 0, 'pt', '_json', 'Received Address', 'Endereço recebido', '2022-11-14 04:11:16', '2022-11-21 13:52:44'),
(404, 0, 'pt', '_json', 'Payout', 'Pagamento', '2022-11-14 04:11:17', '2022-11-21 13:52:44'),
(405, 0, 'pt', '_json', 'Bitcoin address', 'Endereço Bitcoin', '2022-11-14 04:11:17', '2022-11-21 13:52:44'),
(406, 0, 'pt', '_json', 'Amount', 'Quantia', '2022-11-14 04:11:18', '2022-11-21 13:52:44'),
(407, 0, 'pt', '_json', 'Ready to payout', 'Pronto para pagar', '2022-11-14 04:11:18', '2022-11-21 13:52:44'),
(408, 0, 'pt', '_json', 'less than the minimum', 'menor que o mínimo', '2022-11-14 04:11:18', '2022-11-21 13:52:44'),
(409, 0, 'pt', '_json', 'Last payouts', 'Últimos pagamentos', '2022-11-14 04:11:19', '2022-11-21 13:52:44'),
(410, 0, 'pt', '_json', 'No Transaction Found', 'Nenhuma transação encontrada', '2022-11-14 04:11:20', '2022-11-21 13:52:44'),
(411, 0, 'ru', '_json', 'Withdrawal Requests', 'Запросы на вывод средств', '2022-11-14 04:23:21', '2022-11-21 13:52:44'),
(412, 0, 'ru', '_json', 'User List', 'Список пользователей', '2022-11-14 04:23:21', '2022-11-21 13:52:44'),
(413, 0, 'ru', '_json', 'S/N', 'Серийный номер', '2022-11-14 04:23:21', '2022-11-21 13:52:44'),
(414, 0, 'ru', '_json', 'Customer Name', 'Имя Клиента', '2022-11-14 04:23:22', '2022-11-21 13:52:44'),
(415, 0, 'ru', '_json', 'Customer Email', 'Электронная почта клиента', '2022-11-14 04:23:22', '2022-11-21 13:52:44'),
(416, 0, 'ru', '_json', 'Wallet Balance', 'Баланс кошелька', '2022-11-14 04:23:23', '2022-11-21 13:52:44'),
(417, 0, 'ru', '_json', 'affiliate ID', 'партнерский идентификатор', '2022-11-14 04:23:24', '2022-11-21 13:52:44'),
(418, 0, 'ru', '_json', 'Joined', 'Присоединился', '2022-11-14 04:23:24', '2022-11-21 13:52:44'),
(419, 0, 'ru', '_json', 'Welcome to', 'Добро пожаловать в', '2022-11-14 04:23:24', '2022-11-21 13:52:44'),
(420, 0, 'ru', '_json', 'Please sign-in to your account and start the adventure', 'Пожалуйста, войдите в свою учетную запись и начните приключение', '2022-11-14 04:23:24', '2022-11-21 13:52:44'),
(421, 0, 'ru', '_json', 'Email', 'Эл. адрес', '2022-11-14 04:23:26', '2022-11-21 13:52:44'),
(422, 0, 'ru', '_json', 'Password', 'Пароль', '2022-11-14 04:23:26', '2022-11-21 13:52:44'),
(423, 0, 'ru', '_json', 'Forgot Password', 'Забыл пароль', '2022-11-14 04:23:26', '2022-11-21 13:52:44'),
(424, 0, 'ru', '_json', 'Remember Me', 'Запомните меня', '2022-11-14 04:23:26', '2022-11-21 13:52:44'),
(425, 0, 'ru', '_json', 'Sign in', 'Войти', '2022-11-14 04:23:26', '2022-11-21 13:52:44'),
(426, 0, 'ru', '_json', 'New on our platform', 'Новое на нашей платформе', '2022-11-14 04:23:28', '2022-11-21 13:52:44'),
(427, 0, 'ru', '_json', 'Create an account', 'Завести аккаунт', '2022-11-14 04:23:28', '2022-11-21 13:52:44'),
(428, 0, 'ru', '_json', 'Confirm Password', 'Подтвердить Пароль', '2022-11-14 04:23:28', '2022-11-21 13:52:44'),
(429, 0, 'ru', '_json', 'Please confirm your password before continuing.', 'Пожалуйста, подтвердите свой пароль, прежде чем продолжить.', '2022-11-14 04:23:28', '2022-11-21 13:52:44'),
(430, 0, 'ru', '_json', 'Forgot Your Password?', 'Забыли свой пароль?', '2022-11-14 04:23:29', '2022-11-21 13:52:44'),
(431, 0, 'ru', '_json', 'Reset Password', 'Сброс пароля', '2022-11-14 04:23:30', '2022-11-21 13:52:44'),
(432, 0, 'ru', '_json', 'Email Address', 'Адрес электронной почты', '2022-11-14 04:23:30', '2022-11-21 13:52:44'),
(433, 0, 'ru', '_json', 'Send Password Reset Link', 'Отправить ссылку для сброса пароля', '2022-11-14 04:23:30', '2022-11-21 13:52:44'),
(434, 0, 'ru', '_json', 'Name', 'Имя', '2022-11-14 04:23:30', '2022-11-21 13:52:44'),
(435, 0, 'ru', '_json', 'Register', 'регистр', '2022-11-14 04:23:31', '2022-11-21 13:52:44'),
(436, 0, 'ru', '_json', 'Verify Your Email Address', 'Проверьте свой адрес электронной почты', '2022-11-14 04:23:33', '2022-11-21 13:52:44'),
(437, 0, 'ru', '_json', 'A fresh verification link has been sent to your email address.', 'На ваш адрес электронной почты отправлена ​​новая ссылка для подтверждения.', '2022-11-14 04:23:33', '2022-11-21 13:52:44'),
(438, 0, 'ru', '_json', 'Before proceeding, please check your email for a verification link.', 'Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения.', '2022-11-14 04:23:33', '2022-11-21 13:52:44'),
(439, 0, 'ru', '_json', 'If you did not receive the email', 'Если вы не получили письмо', '2022-11-14 04:23:33', '2022-11-21 13:52:44'),
(440, 0, 'ru', '_json', 'click here to request another', 'нажмите здесь, чтобы запросить другой', '2022-11-14 04:23:34', '2022-11-21 13:52:44'),
(441, 0, 'ru', '_json', 'Dashboard', 'Приборная доска', '2022-11-14 04:23:36', '2022-11-21 13:52:44'),
(442, 0, 'ru', '_json', 'You are logged in!', 'Вы вошли в систему!', '2022-11-14 04:23:36', '2022-11-21 13:52:44'),
(443, 0, 'ru', '_json', 'Users', 'Пользователи', '2022-11-14 04:23:36', '2022-11-21 13:52:44'),
(444, 0, 'ru', '_json', 'Orders', 'Заказы', '2022-11-14 04:23:36', '2022-11-21 13:52:44'),
(445, 0, 'ru', '_json', 'Withdraw Request', 'Запрос на вывод средств', '2022-11-14 04:23:37', '2022-11-21 13:52:44'),
(446, 0, 'ru', '_json', 'Logout', 'Выйти', '2022-11-14 04:23:38', '2022-11-21 13:52:44'),
(447, 0, 'ru', '_json', 'Payouts', 'Выплаты', '2022-11-14 04:23:38', '2022-11-21 13:52:44'),
(448, 0, 'ru', '_json', 'Affiliate Program', 'Партнерская программа', '2022-11-14 04:23:38', '2022-11-21 13:52:44'),
(449, 0, 'ru', '_json', 'Orders history', 'История заказов', '2022-11-14 04:23:38', '2022-11-21 13:52:44'),
(450, 0, 'ru', '_json', 'Profile', 'Профиль', '2022-11-14 04:23:39', '2022-11-21 13:52:44'),
(451, 0, 'ru', '_json', 'Admin', 'Администратор', '2022-11-14 04:23:40', '2022-11-21 13:52:44'),
(452, 0, 'ru', '_json', 'My Profile', 'Мой профиль', '2022-11-14 04:23:40', '2022-11-21 13:52:44'),
(453, 0, 'ru', '_json', 'Settings', 'Настройки', '2022-11-14 04:23:40', '2022-11-21 13:52:44'),
(454, 0, 'ru', '_json', 'Billing', 'Выставление счетов', '2022-11-14 04:23:41', '2022-11-21 13:52:44'),
(455, 0, 'ru', '_json', 'Log Out', 'Выйти', '2022-11-14 04:23:41', '2022-11-21 13:52:44'),
(456, 0, 'ru', '_json', 'Affiliate statistics', 'Партнерская статистика', '2022-11-14 04:23:42', '2022-11-21 13:52:44'),
(457, 0, 'ru', '_json', 'Estimated Balance', 'Расчетный баланс', '2022-11-14 04:23:43', '2022-11-21 13:52:44'),
(458, 0, 'ru', '_json', 'Pending withdrawal', 'В ожидании вывода', '2022-11-14 04:23:43', '2022-11-21 13:52:44');
INSERT INTO `ltm_translations` (`id`, `status`, `locale`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(459, 0, 'ru', '_json', 'Minimum withdrawal amount', 'Минимальная сумма вывода', '2022-11-14 04:23:43', '2022-11-21 13:52:44'),
(460, 0, 'ru', '_json', 'Affiliate token and links', 'Партнерский токен и ссылки', '2022-11-14 04:23:44', '2022-11-21 13:52:44'),
(461, 0, 'ru', '_json', 'Your token', 'Ваш токен', '2022-11-14 04:23:45', '2022-11-21 13:52:44'),
(462, 0, 'ru', '_json', 'Simple link', 'Простая ссылка', '2022-11-14 04:23:45', '2022-11-21 13:52:44'),
(463, 0, 'ru', '_json', 'Affiliate orders', 'Партнерские заказы', '2022-11-14 04:23:46', '2022-11-21 13:52:44'),
(464, 0, 'ru', '_json', 'Date', 'Свидание', '2022-11-14 04:23:46', '2022-11-21 13:52:44'),
(465, 0, 'ru', '_json', 'Order ID', 'номер заказа', '2022-11-14 04:23:46', '2022-11-21 13:52:44'),
(466, 0, 'ru', '_json', 'Profit', 'Выгода', '2022-11-14 04:23:47', '2022-11-21 13:52:44'),
(467, 0, 'ru', '_json', 'Paid', 'Оплаченный', '2022-11-14 04:23:47', '2022-11-21 13:52:44'),
(468, 0, 'ru', '_json', 'Personal Information', 'Персональные данные', '2022-11-14 04:23:48', '2022-11-21 13:52:44'),
(469, 0, 'ru', '_json', 'Investor', 'Инвестор', '2022-11-14 04:23:48', '2022-11-21 13:52:44'),
(470, 0, 'ru', '_json', 'Full Name', 'ФИО', '2022-11-14 04:23:48', '2022-11-21 13:52:44'),
(471, 0, 'ru', '_json', 'Mobile', 'Мобильный', '2022-11-14 04:23:49', '2022-11-21 13:52:44'),
(472, 0, 'ru', '_json', 'E-mail', 'Эл. почта', '2022-11-14 04:23:49', '2022-11-21 13:52:44'),
(473, 0, 'ru', '_json', 'Location', 'Расположение', '2022-11-14 04:23:50', '2022-11-21 13:52:44'),
(474, 0, 'ru', '_json', 'Country', 'Страна', '2022-11-14 04:23:50', '2022-11-21 13:52:44'),
(475, 0, 'ru', '_json', 'Change Password', 'Изменить пароль', '2022-11-14 04:23:50', '2022-11-21 13:52:44'),
(476, 0, 'ru', '_json', 'New Password', 'Новый пароль', '2022-11-14 04:23:52', '2022-11-21 13:52:44'),
(477, 0, 'ru', '_json', 'Passwords do not match', 'Пароли не совпадают', '2022-11-14 04:23:52', '2022-11-21 13:52:44'),
(478, 0, 'ru', '_json', 'Active orders', 'Активные заказы', '2022-11-14 04:23:52', '2022-11-21 13:52:44'),
(479, 0, 'ru', '_json', 'Time', 'Время', '2022-11-14 04:23:53', '2022-11-21 13:52:44'),
(480, 0, 'ru', '_json', 'Send', 'Отправлять', '2022-11-14 04:23:53', '2022-11-21 13:52:44'),
(481, 0, 'ru', '_json', 'Receive', 'Получать', '2022-11-14 04:23:54', '2022-11-21 13:52:44'),
(482, 0, 'ru', '_json', 'Status', 'Статус', '2022-11-14 04:23:54', '2022-11-21 13:52:44'),
(483, 0, 'ru', '_json', 'Сompleted orders', 'Выполненные заказы', '2022-11-14 04:23:55', '2022-11-21 13:52:44'),
(484, 0, 'ru', '_json', 'Received', 'Полученный', '2022-11-14 04:23:55', '2022-11-21 13:52:44'),
(485, 0, 'ru', '_json', 'Received Address', 'Полученный адрес', '2022-11-14 04:23:55', '2022-11-21 13:52:44'),
(486, 0, 'ru', '_json', 'Payout', 'Выплата', '2022-11-14 04:23:56', '2022-11-21 13:52:44'),
(487, 0, 'ru', '_json', 'Bitcoin address', 'Биткойн-адрес', '2022-11-14 04:23:56', '2022-11-21 13:52:44'),
(488, 0, 'ru', '_json', 'Amount', 'Количество', '2022-11-14 04:23:57', '2022-11-21 13:52:44'),
(489, 0, 'ru', '_json', 'Ready to payout', 'Готов к выплате', '2022-11-14 04:23:57', '2022-11-21 13:52:44'),
(490, 0, 'ru', '_json', 'less than the minimum', 'меньше минимума', '2022-11-14 04:23:57', '2022-11-21 13:52:44'),
(491, 0, 'ru', '_json', 'Last payouts', 'Последние выплаты', '2022-11-14 04:23:58', '2022-11-21 13:52:44'),
(492, 0, 'ru', '_json', 'No Transaction Found', 'Транзакция не найдена', '2022-11-14 04:23:59', '2022-11-21 13:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_04_02_193005_create_translations_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2022_10_31_112739_create_transactions_table', 3),
(7, '2022_10_31_115257_create_affiliates_table', 3),
(8, '2022_10_31_115446_create_dashboards_table', 3),
(9, '2022_10_31_115534_create_payouts_table', 3),
(10, '2022_11_12_034016_create_settings_table', 4),
(11, '2022_11_12_004900_order', 5),
(12, '2022_11_13_002527_add_referral_to_users_table', 6),
(13, '2022_11_13_015453_create_affiliate_profits_table', 7),
(14, '2022_11_13_165134_create_admins_table', 8),
(15, '2016_11_04_152913_create_laravel_fulltext_table', 9),
(16, '2020_10_16_004241_create_binshops_languages_table', 9),
(17, '2020_10_16_005400_create_binshops_categories_table', 9),
(18, '2020_10_16_005425_create_binshops_category_translations_table', 9),
(19, '2020_10_16_010039_create_binshops_posts_table', 9),
(20, '2020_10_16_010049_create_binshops_post_translations_table', 9),
(21, '2020_10_16_121230_create_binshops_comments_table', 9),
(22, '2020_10_16_121728_create_binshops_uploaded_photos_table', 9),
(23, '2020_10_22_132005_create_binshops_configurations_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_rateRev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Currenct status of the order',
  `order_left` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Amount left to complete the transaction deposit',
  `order_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'Json encode of the raw response from the API server' CHECK (json_valid(`raw_data`)),
  `order_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fixed or float',
  `order_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Time Order was initiated',
  `order_expiration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Order expires by',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `from_currency`, `to_currency`, `send_amount`, `receive_amount`, `receive_address`, `order_rate`, `order_rateRev`, `order_status`, `order_left`, `order_token`, `raw_data`, `order_type`, `order_reg`, `order_expiration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(2, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(3, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(4, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(5, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(6, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(7, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(8, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(9, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(10, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(11, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(12, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(13, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(14, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(15, 1, '58ZP4R', 'BTC', 'BTC', '1.00000000', '0.98995104', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98995104', '1.01015097', '0', '600', 'HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9', '{\"id\":\"58ZP4R\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qec03sxchyjdeurdfz0ml6u8f3qjzcc2sgf803l\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98995104\",\"amount\":\"0.98995104\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98995104,\"rateRev\":1.01015097,\"status\":\"0\",\"reg\":1668304020,\"start\":false,\"finish\":false,\"update\":1668304020,\"expiration\":1668304620,\"left\":600,\"step\":\"new\",\"token\":\"HlhqF4ocJuvdG8ISEw6mK4EasG2oXOq9WnNS95w9\"}', 'fixed', '2022-11-13 01:47', '2022-11-13 01:57', '2022-11-13 09:46:59', '2022-11-13 09:46:59', NULL),
(16, 1, '3B8SDS', 'BTC', 'BTC', '1.00000000', '0.98999136', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98999136', '1.01010983', '4', '600', 'Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo', '{\"id\":\"3B8SDS\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qadewz92pfy6ac2qz9kzyglyedh6vc3g6k3z6ec\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98999136\",\"amount\":\"0.98999136\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98999136,\"rateRev\":1.01010983,\"status\":\"0\",\"reg\":1668336199,\"start\":false,\"finish\":false,\"update\":1668336199,\"expiration\":1668336799,\"left\":600,\"step\":\"new\",\"token\":\"Nz3P2vNGe6R4v2JSDIxUyUILowHKaDJodAKZCTVo\"}', 'fixed', '2022-11-13 10:43', '2022-11-13 10:53', '2022-11-13 18:43:19', '2022-11-13 18:43:19', NULL),
(17, 1, 'FH7AGN', 'BTC', 'BTC', '1.00000000', '0.98988768', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98988768', '1.01021562', '0', '600', '9zZr2WXzGppU0ArSDRfYkPkVTTSfW60vse7exW4E', '{\"id\":\"FH7AGN\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1q0m3kqjndx6m2vnft48jks9hy2suz6lj6w2gyqq\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98988768\",\"amount\":\"0.98988768\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98988768,\"rateRev\":1.01021562,\"status\":\"0\",\"reg\":1669048432,\"start\":false,\"finish\":false,\"update\":1669048432,\"expiration\":1669049032,\"left\":600,\"step\":\"new\",\"token\":\"9zZr2WXzGppU0ArSDRfYkPkVTTSfW60vse7exW4E\"}', 'fixed', '2022-11-21 16:33', '2022-11-21 16:43', '2022-11-21 15:33:52', '2022-11-21 15:33:52', NULL),
(18, 1, 'MC4YGT', 'BTC', 'BTC', '1.00000000', '0.98991072', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98991072', '1.01019211', '0', '600', 'gucSHC9ddFLQbxIas4c5W0HstrOFKAhv5cc0ZNv5', '{\"id\":\"MC4YGT\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qfvujcaqvtd58v3s8e6xdrjxrx6h6kpd476h2fl\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98991072\",\"amount\":\"0.98991072\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98991072,\"rateRev\":1.01019211,\"status\":\"0\",\"reg\":1669048481,\"start\":false,\"finish\":false,\"update\":1669048481,\"expiration\":1669049081,\"left\":600,\"step\":\"new\",\"token\":\"gucSHC9ddFLQbxIas4c5W0HstrOFKAhv5cc0ZNv5\"}', 'fixed', '2022-11-21 16:34', '2022-11-21 16:44', '2022-11-21 15:34:41', '2022-11-21 15:34:41', NULL),
(19, 1, 'VVZE4W', 'BTC', 'BTC', '1.00000000', '0.98991072', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98991072', '1.01019211', '0', '600', 'ieCoaL7RJaD1TrT68CXm4rvIAo2tj8rr0V19PKFy', '{\"id\":\"VVZE4W\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qfcxm9ejrlxf2v8ve9w68l2pfknwald95tql8a9\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98991072\",\"amount\":\"0.98991072\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98991072,\"rateRev\":1.01019211,\"status\":\"0\",\"reg\":1669048769,\"start\":false,\"finish\":false,\"update\":1669048769,\"expiration\":1669049369,\"left\":600,\"step\":\"new\",\"token\":\"ieCoaL7RJaD1TrT68CXm4rvIAo2tj8rr0V19PKFy\"}', 'fixed', '2022-11-21 16:39', '2022-11-21 16:49', '2022-11-21 15:39:29', '2022-11-21 15:39:29', NULL),
(20, 1, '643V11', 'BTC', 'BTC', '1.00000000', '0.98991072', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98991072', '1.01019211', '0', '600', 'sAgAO7XZyvY0g6Z2GzhGHjGQ8QYoTOuM1q5tF2Pg', '{\"id\":\"643V11\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qk2jn3fgrs3d5psgnkwjxsuyrqcl3m4zs8jvyn7\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98991072\",\"amount\":\"0.98991072\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98991072,\"rateRev\":1.01019211,\"status\":\"0\",\"reg\":1669048801,\"start\":false,\"finish\":false,\"update\":1669048801,\"expiration\":1669049401,\"left\":600,\"step\":\"new\",\"token\":\"sAgAO7XZyvY0g6Z2GzhGHjGQ8QYoTOuM1q5tF2Pg\"}', 'fixed', '2022-11-21 16:40', '2022-11-21 16:50', '2022-11-21 15:40:01', '2022-11-21 15:40:01', NULL),
(21, 1, '698ERE', 'BTC', 'BTC', '1.00000000', '0.98991072', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98991072', '1.01019211', '0', '600', 'TfyTRHKbYvlkEvoB3vHhL1gyldNFAzdSchPEGnXz', '{\"id\":\"698ERE\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qk873nur0jrnlf9t27xekv5ufpfzqe6tn0rc5rj\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98991072\",\"amount\":\"0.98991072\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98991072,\"rateRev\":1.01019211,\"status\":\"0\",\"reg\":1669048936,\"start\":false,\"finish\":false,\"update\":1669048936,\"expiration\":1669049536,\"left\":600,\"step\":\"new\",\"token\":\"TfyTRHKbYvlkEvoB3vHhL1gyldNFAzdSchPEGnXz\"}', 'fixed', '2022-11-21 16:42', '2022-11-21 16:52', '2022-11-21 15:42:16', '2022-11-21 15:42:16', NULL),
(22, 1, 'RN5PHK', 'BTC', 'BTC', '1.00000000', '0.98990784', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98990784', '1.01019505', '0', '600', 'ilmzZ21AZFor1bs26pQ3lEEL7PjPbCXunE7pvgDZ', '{\"id\":\"RN5PHK\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1qt7dxlhkhgta0ll6rr7f3jx77m79pr9cwj3a0ws\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98990784\",\"amount\":\"0.98990784\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98990784,\"rateRev\":1.01019505,\"status\":\"0\",\"reg\":1669048969,\"start\":false,\"finish\":false,\"update\":1669048969,\"expiration\":1669049569,\"left\":600,\"step\":\"new\",\"token\":\"ilmzZ21AZFor1bs26pQ3lEEL7PjPbCXunE7pvgDZ\"}', 'fixed', '2022-11-21 16:42', '2022-11-21 16:52', '2022-11-21 15:42:49', '2022-11-21 15:42:49', NULL),
(23, 1, 'QMK5Y2', 'BTC', 'BTC', '1.00000000', '0.98990784', 'bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt', '0.98990784', '1.01019505', '0', '600', 'On50uLFhaSzo5UH8QhHETPk62BKyEOUUw8JNmAoF', '{\"id\":\"QMK5Y2\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"1.00000000\",\"amount\":\"1.00000000\",\"address\":\"bc1q0gtxw2j67k2wfrh8tcud39csvhk60l9fp67u36\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.98990784\",\"amount\":\"0.98990784\",\"address\":\"bc1q7t2qjqcahc535jdwpx8hvygsav0rcrfkyky6xt\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":0.98990784,\"rateRev\":1.01019505,\"status\":\"0\",\"reg\":1669048974,\"start\":false,\"finish\":false,\"update\":1669048974,\"expiration\":1669049574,\"left\":600,\"step\":\"new\",\"token\":\"On50uLFhaSzo5UH8QhHETPk62BKyEOUUw8JNmAoF\"}', 'fixed', '2022-11-21 16:42', '2022-11-21 16:52', '2022-11-21 15:42:55', '2022-11-21 15:42:55', NULL),
(24, 1, '2DDFR5', 'BTC', 'ETH', '0.01036317', '0.14651490', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.13803884', '0.07073117', '0', '600', 'FPpngOBlvKwCumxrzxPU6FWKTlMNlbBY1P6pcwj6', '{\"id\":\"2DDFR5\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01036317\",\"amount\":\"0.01036317\",\"address\":\"bc1qrgy3p24u3kyeg0029v4pn34302rtv2mr95xeds\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.14651490\",\"amount\":\"0.14651490\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":14.13803884,\"rateRev\":0.07073117,\"status\":\"0\",\"reg\":1669049210,\"start\":false,\"finish\":false,\"update\":1669049210,\"expiration\":1669049810,\"left\":600,\"step\":\"new\",\"token\":\"FPpngOBlvKwCumxrzxPU6FWKTlMNlbBY1P6pcwj6\"}', 'fixed', '2022-11-21 16:46', '2022-11-21 16:56', '2022-11-21 15:46:50', '2022-11-21 15:46:50', NULL),
(25, 1, 'KZG3XH', 'BTC', 'ETH', '0.01036317', '0.14651490', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.13803884', '0.07073117', '0', '600', 'T59Ogd2JmA60Fn0KS50q9xRfdxAjwjmVAfahY9hk', '{\"id\":\"KZG3XH\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01036317\",\"amount\":\"0.01036317\",\"address\":\"bc1qz070czg6hx2qdlj5jdlu7rxl408tx9drka2uyr\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.14651490\",\"amount\":\"0.14651490\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":14.13803884,\"rateRev\":0.07073117,\"status\":\"0\",\"reg\":1669049237,\"start\":false,\"finish\":false,\"update\":1669049237,\"expiration\":1669049837,\"left\":600,\"step\":\"new\",\"token\":\"T59Ogd2JmA60Fn0KS50q9xRfdxAjwjmVAfahY9hk\"}', 'fixed', '2022-11-21 16:47', '2022-11-21 16:57', '2022-11-21 15:47:17', '2022-11-21 15:47:17', NULL),
(26, 1, 'SRRNRK', 'BTC', 'ETH', '0.01036317', '0.14625110', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.11258331', '0.07085875', '0', '600', 'gEX6nogY3icizwZGvkAHOlAOlW4Zq8JHPrlgzNDx', '{\"id\":\"SRRNRK\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01036317\",\"amount\":\"0.01036317\",\"address\":\"bc1q58nkyv9m8nq33sav79akdnpqcxq9vcglk9kn7p\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.14625110\",\"amount\":\"0.14625110\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":14.11258331,\"rateRev\":0.07085875,\"status\":\"0\",\"reg\":1669049325,\"start\":false,\"finish\":false,\"update\":1669049325,\"expiration\":1669049925,\"left\":600,\"step\":\"new\",\"token\":\"gEX6nogY3icizwZGvkAHOlAOlW4Zq8JHPrlgzNDx\"}', 'fixed', '2022-11-21 16:48', '2022-11-21 16:58', '2022-11-21 15:48:45', '2022-11-21 15:48:45', NULL),
(27, 1, '4R5QZC', 'BTC', 'ETH', '0.01036317', '0.14625110', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.11258331', '0.07085875', '0', '600', 'v1grKrDgdV3BCCN2Z5pV5BM9VqAVMtuNOp5D2WIz', '{\"id\":\"4R5QZC\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01036317\",\"amount\":\"0.01036317\",\"address\":\"bc1q32x533wxtramklvzv895jmxvpqvah7nvglxw4u\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.14625110\",\"amount\":\"0.14625110\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":14.11258331,\"rateRev\":0.07085875,\"status\":\"0\",\"reg\":1669049353,\"start\":false,\"finish\":false,\"update\":1669049353,\"expiration\":1669049953,\"left\":600,\"step\":\"new\",\"token\":\"v1grKrDgdV3BCCN2Z5pV5BM9VqAVMtuNOp5D2WIz\"}', 'fixed', '2022-11-21 16:49', '2022-11-21 16:59', '2022-11-21 15:49:13', '2022-11-21 15:49:13', NULL),
(28, 1, 'Q4SQMX', 'BTC', 'ETH', '0.01135409', '0.16140160', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21528277', '0.07034682', '0', '1800', '3PEZUujt6ck4ATbIyccyAFE2Q27jGOZEkbOaxRMW', '{\"id\":\"Q4SQMX\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1q80w38d0vz0fwcuc5n8yzcnppud76whfy073p0f\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16140160\",\"amount\":\"0.16140160\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21528277,\"rateRev\":0.07034682,\"status\":\"0\",\"reg\":1669049766,\"start\":false,\"finish\":false,\"update\":1669049766,\"expiration\":1669051566,\"left\":1800,\"step\":\"new\",\"token\":\"3PEZUujt6ck4ATbIyccyAFE2Q27jGOZEkbOaxRMW\"}', 'float', '2022-11-21 16:56', '2022-11-21 17:26', '2022-11-21 15:56:06', '2022-11-21 15:56:06', NULL);
INSERT INTO `orders` (`id`, `user_id`, `order_id`, `from_currency`, `to_currency`, `send_amount`, `receive_amount`, `receive_address`, `order_rate`, `order_rateRev`, `order_status`, `order_left`, `order_token`, `raw_data`, `order_type`, `order_reg`, `order_expiration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(29, 1, '5APUNT', 'BTC', 'ETH', '0.01135409', '0.16140160', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21528277', '0.07034682', '0', '1799', 'EJeBQsQSnQ3AnTJP5I16z8I6nn6lZWF2Q3goMetF', '{\"id\":\"5APUNT\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1q8zns4j5hyksn2anp8yvlwrkr7ahysdnlhuh2hg\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16140160\",\"amount\":\"0.16140160\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21528277,\"rateRev\":0.07034682,\"status\":\"0\",\"reg\":1669049769,\"start\":false,\"finish\":false,\"update\":1669049769,\"expiration\":1669051569,\"left\":1799,\"step\":\"new\",\"token\":\"EJeBQsQSnQ3AnTJP5I16z8I6nn6lZWF2Q3goMetF\"}', 'float', '2022-11-21 16:56', '2022-11-21 17:26', '2022-11-21 15:56:10', '2022-11-21 15:56:10', NULL),
(30, 1, 'Z6D3G1', 'BTC', 'ETH', '0.01135409', '0.16132960', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.20894145', '0.07037822', '0', '1800', 'JuAYCKpBxQnyXnw6cvYl62W9UxCaZlZQH1LSi4Yj', '{\"id\":\"Z6D3G1\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1qsznc0vn3jrvq48drjg6dd5l9ln5j7jfkz50rgg\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16132960\",\"amount\":\"0.16132960\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.20894145,\"rateRev\":0.07037822,\"status\":\"0\",\"reg\":1669049825,\"start\":false,\"finish\":false,\"update\":1669049825,\"expiration\":1669051625,\"left\":1800,\"step\":\"new\",\"token\":\"JuAYCKpBxQnyXnw6cvYl62W9UxCaZlZQH1LSi4Yj\"}', 'float', '2022-11-21 16:57', '2022-11-21 17:27', '2022-11-21 15:57:05', '2022-11-21 15:57:05', NULL),
(31, 1, 'ZXHVJR', 'BTC', 'ETH', '0.01135409', '0.16140860', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21589929', '0.07034377', '0', '1800', 'OXyDo6qyMQK6lUwSuYIGJmdox7cVdJuOIcSNMK09', '{\"id\":\"ZXHVJR\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1qscgy4x9fnkh5xadfntnvxku90k2rg8uz9fwh2f\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16140860\",\"amount\":\"0.16140860\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21589929,\"rateRev\":0.07034377,\"status\":\"0\",\"reg\":1669049879,\"start\":false,\"finish\":false,\"update\":1669049879,\"expiration\":1669051679,\"left\":1800,\"step\":\"new\",\"token\":\"OXyDo6qyMQK6lUwSuYIGJmdox7cVdJuOIcSNMK09\"}', 'float', '2022-11-21 16:57', '2022-11-21 17:27', '2022-11-21 15:57:59', '2022-11-21 15:57:59', NULL),
(32, 1, 'ED7DQU', 'BTC', 'ETH', '0.01135409', '0.16140860', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21589929', '0.07034377', '0', '1800', '1qm7YkSocL5jwwhK2IsmN2sfVafgdBC1UyYSftzq', '{\"id\":\"ED7DQU\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1qm8g5ruphqluky0dr7a8h7zusgfd3c72u9c5sc4\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16140860\",\"amount\":\"0.16140860\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21589929,\"rateRev\":0.07034377,\"status\":\"0\",\"reg\":1669049887,\"start\":false,\"finish\":false,\"update\":1669049887,\"expiration\":1669051687,\"left\":1800,\"step\":\"new\",\"token\":\"1qm7YkSocL5jwwhK2IsmN2sfVafgdBC1UyYSftzq\"}', 'float', '2022-11-21 16:58', '2022-11-21 17:28', '2022-11-21 15:58:07', '2022-11-21 15:58:07', NULL),
(33, 1, 'B9BNBJ', 'BTC', 'ETH', '0.01135409', '0.16140860', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21589929', '0.07034377', '0', '1800', 'CXY2sZZeChNro1ddVEaB1QY8oomvIrYwlz3GRRN3', '{\"id\":\"B9BNBJ\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1qp2z7rppe3ctanaf8gsy6mhxpy2jsqn3v9nk47y\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16140860\",\"amount\":\"0.16140860\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21589929,\"rateRev\":0.07034377,\"status\":\"0\",\"reg\":1669049891,\"start\":false,\"finish\":false,\"update\":1669049891,\"expiration\":1669051691,\"left\":1800,\"step\":\"new\",\"token\":\"CXY2sZZeChNro1ddVEaB1QY8oomvIrYwlz3GRRN3\"}', 'float', '2022-11-21 16:58', '2022-11-21 17:28', '2022-11-21 15:58:11', '2022-11-21 15:58:11', NULL),
(34, 1, '5T6DVE', 'BTC', 'ETH', '0.01135409', '0.16138540', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21385598', '0.07035389', '0', '1800', 'ctPUzTgmw9bywFQ4nmVHvYqpF2eHnqiJjoG2kjIi', '{\"id\":\"5T6DVE\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1qcrnjy82j0qtsvs0ertg92v9r52eld7hpz8srpa\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16138540\",\"amount\":\"0.16138540\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21385598,\"rateRev\":0.07035389,\"status\":\"0\",\"reg\":1669049968,\"start\":false,\"finish\":false,\"update\":1669049968,\"expiration\":1669051768,\"left\":1800,\"step\":\"new\",\"token\":\"ctPUzTgmw9bywFQ4nmVHvYqpF2eHnqiJjoG2kjIi\"}', 'float', '2022-11-21 16:59', '2022-11-21 17:29', '2022-11-21 15:59:28', '2022-11-21 15:59:28', NULL),
(35, 1, '2JHC85', 'BTC', 'ETH', '0.01135409', '0.16138540', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21385598', '0.07035389', '0', '1800', 'K2TDtHoPZ07XkQ2FnSZvp71CKqjMqW0fCq2XH3fN', '{\"id\":\"2JHC85\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1q0n0qw5g0ej94gclgttnnsyljkzwzgqv6sd5wsg\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16138540\",\"amount\":\"0.16138540\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21385598,\"rateRev\":0.07035389,\"status\":\"0\",\"reg\":1669049981,\"start\":false,\"finish\":false,\"update\":1669049981,\"expiration\":1669051781,\"left\":1800,\"step\":\"new\",\"token\":\"K2TDtHoPZ07XkQ2FnSZvp71CKqjMqW0fCq2XH3fN\"}', 'float', '2022-11-21 16:59', '2022-11-21 17:29', '2022-11-21 15:59:41', '2022-11-21 15:59:41', NULL),
(36, 1, '8YAVRB', 'BTC', 'ETH', '0.01135409', '0.16138540', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21385598', '0.07035389', '0', '1800', 'Dsi3kSWW0SFRvTZjMCPlXWHhS03eaLm9hXTMBl4t', '{\"id\":\"8YAVRB\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135409\",\"amount\":\"0.01135409\",\"address\":\"bc1q7uwplmcp7lneel5hqq85vn375q554kkgzja4sp\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16138540\",\"amount\":\"0.16138540\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21385598,\"rateRev\":0.07035389,\"status\":\"0\",\"reg\":1669050007,\"start\":false,\"finish\":false,\"update\":1669050007,\"expiration\":1669051807,\"left\":1800,\"step\":\"new\",\"token\":\"Dsi3kSWW0SFRvTZjMCPlXWHhS03eaLm9hXTMBl4t\"}', 'float', '2022-11-21 17:00', '2022-11-21 17:30', '2022-11-21 16:00:07', '2022-11-21 16:00:07', NULL),
(37, 1, '27X7CY', 'BTC', 'ETH', '0.01036317', '0.14724090', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.20809463', '0.07038241', '0', '1800', 'B6EWg1hkccnCzupPRuAUDxkE8JnbuC9hsBZhC5gW', '{\"id\":\"27X7CY\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01036317\",\"amount\":\"0.01036317\",\"address\":\"bc1qqd3qcha8lzgs39jvx7y8jpf9652myke6a7nzvk\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.14724090\",\"amount\":\"0.14724090\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.20809463,\"rateRev\":0.07038241,\"status\":\"0\",\"reg\":1669050094,\"start\":false,\"finish\":false,\"update\":1669050094,\"expiration\":1669051894,\"left\":1800,\"step\":\"new\",\"token\":\"B6EWg1hkccnCzupPRuAUDxkE8JnbuC9hsBZhC5gW\"}', 'float', '2022-11-21 17:01', '2022-11-21 17:31', '2022-11-21 16:01:34', '2022-11-21 16:01:34', NULL),
(38, 1, 'PRDEP7', 'BTC', 'ETH', '0.01135400', '0.16133530', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.2095561', '0.07037518', '0', '1800', 'gPitrDXzrl7P8PG0kalSDOt4V7U6lCXCCik7PWoz', '{\"id\":\"PRDEP7\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1qwspgkc3pl8f9t3xjrezla766a6vkw049ap0mf9\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16133530\",\"amount\":\"0.16133530\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.2095561,\"rateRev\":0.07037518,\"status\":\"0\",\"reg\":1669050147,\"start\":false,\"finish\":false,\"update\":1669050147,\"expiration\":1669051947,\"left\":1800,\"step\":\"new\",\"token\":\"gPitrDXzrl7P8PG0kalSDOt4V7U6lCXCCik7PWoz\"}', 'float', '2022-11-21 17:02', '2022-11-21 17:32', '2022-11-21 16:02:27', '2022-11-21 16:02:27', NULL),
(39, 1, 'JG8H6B', 'BTC', 'ETH', '0.01135400', '0.16121000', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.19852035', '0.07042987', '0', '1800', 'I5Cgo7aGwwie2d0tKUvXv5beees5cMqQnN1Fq6ic', '{\"id\":\"JG8H6B\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1q9u4anrunv2hr9rtlusjf3l8p2vr5z3e2fdl495\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16121000\",\"amount\":\"0.16121000\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.19852035,\"rateRev\":0.07042987,\"status\":\"0\",\"reg\":1669050175,\"start\":false,\"finish\":false,\"update\":1669050175,\"expiration\":1669051975,\"left\":1800,\"step\":\"new\",\"token\":\"I5Cgo7aGwwie2d0tKUvXv5beees5cMqQnN1Fq6ic\"}', 'float', '2022-11-21 17:02', '2022-11-21 17:32', '2022-11-21 16:02:55', '2022-11-21 16:02:55', NULL),
(40, 1, 'AMYT7X', 'BTC', 'ETH', '0.01135400', '0.16140630', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.21580941', '0.07034422', '0', '1800', 'VRHD2DssHCm7tQYm71NpzKAFOieH9PrhYzPGf7Vr', '{\"id\":\"AMYT7X\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1qqvhq75t5tmdnyx9ha3lax8q5slptrzlu85zm6g\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16140630\",\"amount\":\"0.16140630\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.21580941,\"rateRev\":0.07034422,\"status\":\"0\",\"reg\":1669050448,\"start\":false,\"finish\":false,\"update\":1669050448,\"expiration\":1669052248,\"left\":1800,\"step\":\"new\",\"token\":\"VRHD2DssHCm7tQYm71NpzKAFOieH9PrhYzPGf7Vr\"}', 'float', '2022-11-21 17:07', '2022-11-21 17:37', '2022-11-21 16:07:29', '2022-11-21 16:07:29', NULL),
(41, 1, 'CD7WS6', 'BTC', 'ETH', '0.01135400', '0.15980140', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.07445834', '0.07105069', '0', '1800', 'j4AGKpHNwjYZa7bJsCLeVbjq6La1eiD7X4FVU1HN', '{\"id\":\"CD7WS6\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1q4ay9x6h03vs9l06yqe53w49p60t8hyglqxdfsc\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.15980140\",\"amount\":\"0.15980140\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.07445834,\"rateRev\":0.07105069,\"status\":\"0\",\"reg\":1669050685,\"start\":false,\"finish\":false,\"update\":1669050685,\"expiration\":1669052485,\"left\":1800,\"step\":\"new\",\"token\":\"j4AGKpHNwjYZa7bJsCLeVbjq6La1eiD7X4FVU1HN\"}', 'float', '2022-11-21 17:11', '2022-11-21 17:41', '2022-11-21 16:11:25', '2022-11-21 16:11:25', NULL),
(42, 1, 'RFNU5M', 'BTC', 'ETH', '0.01135400', '0.15992970', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.08575832', '0.07099369', '0', '1800', 'IJS7BfUUu59RzRMQYd0jJXGsCiFgC8ocrspFrxws', '{\"id\":\"RFNU5M\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1qk4vxqslzkdmxe52tfz2arxep8ject9yuckc8e5\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.15992970\",\"amount\":\"0.15992970\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.08575832,\"rateRev\":0.07099369,\"status\":\"0\",\"reg\":1669050730,\"start\":false,\"finish\":false,\"update\":1669050730,\"expiration\":1669052530,\"left\":1800,\"step\":\"new\",\"token\":\"IJS7BfUUu59RzRMQYd0jJXGsCiFgC8ocrspFrxws\"}', 'float', '2022-11-21 17:12', '2022-11-21 17:42', '2022-11-21 16:12:10', '2022-11-21 16:12:10', NULL),
(43, 1, 'MUR4WD', 'BTC', 'ETH', '0.01135000', '0.16052610', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.14326872', '0.07070501', '0', '1800', 'GKysssDl9rhIE0XPdWBW7MuNnFVqLbn97ntjuzYv', '{\"id\":\"MUR4WD\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135000\",\"amount\":\"0.01135000\",\"address\":\"bc1qwyup80lgv4asm70wrqglsvnpdyy6zthh5yefd4\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16052610\",\"amount\":\"0.16052610\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.14326872,\"rateRev\":0.07070501,\"status\":\"0\",\"reg\":1669050831,\"start\":false,\"finish\":false,\"update\":1669050831,\"expiration\":1669052631,\"left\":1800,\"step\":\"new\",\"token\":\"GKysssDl9rhIE0XPdWBW7MuNnFVqLbn97ntjuzYv\"}', 'float', '2022-11-21 17:13', '2022-11-21 17:43', '2022-11-21 16:13:51', '2022-11-21 16:13:51', NULL),
(44, 1, 'V8U2D4', 'BTC', 'ETH', '0.01135000', '0.16064980', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.1541674', '0.07065057', '0', '1800', 'Per7sha2qDgc7lForjYzvLvyHOibqGr8i84Ybhye', '{\"id\":\"V8U2D4\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135000\",\"amount\":\"0.01135000\",\"address\":\"bc1qce59fy877wvu4x4hkr70g2ld3y7zjdl3q4tgws\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16064980\",\"amount\":\"0.16064980\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.1541674,\"rateRev\":0.07065057,\"status\":\"0\",\"reg\":1669050868,\"start\":false,\"finish\":false,\"update\":1669050868,\"expiration\":1669052668,\"left\":1800,\"step\":\"new\",\"token\":\"Per7sha2qDgc7lForjYzvLvyHOibqGr8i84Ybhye\"}', 'float', '2022-11-21 17:14', '2022-11-21 17:44', '2022-11-21 16:14:28', '2022-11-21 16:14:28', NULL),
(45, 1, 'H735PP', 'BTC', 'ETH', '0.01135000', '0.16100230', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.18522467', '0.07049589', '0', '600', 'RgpOZRFrggQ7qm0tWpBXkB366pldTJoyfqa3dZ2p', '{\"id\":\"H735PP\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135000\",\"amount\":\"0.01135000\",\"address\":\"bc1q62j8scgvac7dawmrgzun8jyvpdh32py4uh2jyd\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16100230\",\"amount\":\"0.16100230\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"fixed\",\"email\":\"\",\"rate\":14.18522467,\"rateRev\":0.07049589,\"status\":\"0\",\"reg\":1669051416,\"start\":false,\"finish\":false,\"update\":1669051416,\"expiration\":1669052016,\"left\":600,\"step\":\"new\",\"token\":\"RgpOZRFrggQ7qm0tWpBXkB366pldTJoyfqa3dZ2p\"}', 'fixed', '2022-11-21 17:23', '2022-11-21 17:33', '2022-11-21 16:23:36', '2022-11-21 16:23:36', NULL),
(46, 1, 'HZ9P34', 'BTC', 'ETH', '0.01135000', '0.16182130', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.25738326', '0.0701391', '0', '1800', 'hqYAhWNxGeDNwJIz92RNxqasLmBZgBB7xZGZqVsH', '{\"id\":\"HZ9P34\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135000\",\"amount\":\"0.01135000\",\"address\":\"bc1q4ayj62kd2m0ee8qh2vkt5t6ensq2ql4k7dzk3d\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16182130\",\"amount\":\"0.16182130\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.25738326,\"rateRev\":0.0701391,\"status\":\"0\",\"reg\":1669051427,\"start\":false,\"finish\":false,\"update\":1669051427,\"expiration\":1669053227,\"left\":1800,\"step\":\"new\",\"token\":\"hqYAhWNxGeDNwJIz92RNxqasLmBZgBB7xZGZqVsH\"}', 'float', '2022-11-21 17:23', '2022-11-21 17:53', '2022-11-21 16:23:47', '2022-11-21 16:23:47', NULL),
(47, 1, '37XEZ7', 'BTC', 'ETH', '0.01135400', '0.16187870', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.25741589', '0.07013894', '0', '1800', 'XCMJz5w7rRnRzmLwzw8Ns4ezZ9KZKzCAUpMj7c7z', '{\"id\":\"37XEZ7\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1qdrhccpe2jxytqqeawfh5sf6pn9weykq4m8xtnc\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16187870\",\"amount\":\"0.16187870\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.25741589,\"rateRev\":0.07013894,\"status\":\"0\",\"reg\":1669051475,\"start\":false,\"finish\":false,\"update\":1669051475,\"expiration\":1669053275,\"left\":1800,\"step\":\"new\",\"token\":\"XCMJz5w7rRnRzmLwzw8Ns4ezZ9KZKzCAUpMj7c7z\"}', 'float', '2022-11-21 17:24', '2022-11-21 17:54', '2022-11-21 16:24:35', '2022-11-21 16:24:35', NULL),
(48, 1, '63VC82', 'BTC', 'ETH', '0.01135400', '0.16170570', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.24217897', '0.07021398', '0', '1800', 'U0MBb3zQeYufEmP8a4oMtIgn3qL8PM4lPHVB54JK', '{\"id\":\"63VC82\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1qzqehcs803v7fpljpu7yj8664efd9nwphfw0d0k\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16170570\",\"amount\":\"0.16170570\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.24217897,\"rateRev\":0.07021398,\"status\":\"0\",\"reg\":1669051521,\"start\":false,\"finish\":false,\"update\":1669051521,\"expiration\":1669053321,\"left\":1800,\"step\":\"new\",\"token\":\"U0MBb3zQeYufEmP8a4oMtIgn3qL8PM4lPHVB54JK\"}', 'float', '2022-11-21 17:25', '2022-11-21 17:55', '2022-11-21 16:25:21', '2022-11-21 16:25:21', NULL),
(49, 1, 'UBZ4EF', 'BTC', 'ETH', '0.01135400', '0.16185080', '0xb794f5ea0ba39494ce839613fffba74279579268', '14.2549586', '0.07015103', '0', '1800', 'zL14M0NFFgKVSfqiDKKjGKHts3oP8hoxPmiqpJYh', '{\"id\":\"UBZ4EF\",\"from\":{\"currency\":\"BTC\",\"symbol\":\"BTC\",\"subSymbol\":\"\",\"network\":\"BTC\",\"name\":\"Bitcoin\",\"alias\":\"bitcoin\",\"qty\":\"0.01135400\",\"amount\":\"0.01135400\",\"address\":\"bc1qjcqq8l7ef83ac0uh4hz6r7nzjaax9x057chtyy\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"to\":{\"currency\":\"ETH\",\"symbol\":\"ETH\",\"subSymbol\":\"\",\"network\":\"ETH\",\"name\":\"Ethereum\",\"alias\":\"ethereum\",\"qty\":\"0.16185080\",\"amount\":\"0.16185080\",\"address\":\"0xb794f5ea0ba39494ce839613fffba74279579268\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"back\":{\"currency\":\"\",\"symbol\":null,\"subSymbol\":null,\"network\":null,\"name\":null,\"alias\":null,\"qty\":\"0.00000000\",\"amount\":\"0.00000000\",\"address\":\"\",\"extra\":\"\",\"tx\":{\"id\":null,\"amount\":null,\"fee\":null,\"ccyfee\":null,\"time\":false,\"timeBlock\":false,\"confirmations\":null}},\"emergency\":{\"status\":[],\"choice\":\"NONE\",\"repeat\":\"0\"},\"type\":\"float\",\"email\":\"\",\"rate\":14.2549586,\"rateRev\":0.07015103,\"status\":\"0\",\"reg\":1669051587,\"start\":false,\"finish\":false,\"update\":1669051587,\"expiration\":1669053387,\"left\":1800,\"step\":\"new\",\"token\":\"zL14M0NFFgKVSfqiDKKjGKHts3oP8hoxPmiqpJYh\"}', 'float', '2022-11-21 17:26', '2022-11-21 17:56', '2022-11-21 16:26:27', '2022-11-21 16:26:27', NULL);

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
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(15,8) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 : pending, 1 : processing, 2 : pending_payout, 3 : completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'order_charges', '10', '2022-11-07 03:43:59', '2022-11-08 03:43:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trans_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,8) NOT NULL,
  `send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0 : pending, 1 : processing, 2 : pending_payout, 3 : completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btc_balance` decimal(15,8) NOT NULL DEFAULT 0.00000000,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `btc_balance`, `role`, `email_verified_at`, `password`, `remember_token`, `referred_by`, `affiliate_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EMMANUEL TOWOJU', 'towojuads@gmail.com', '0.00000000', 'admin', NULL, '$2y$10$EL92amnv9UA1FLTUYatAF.VUW55qk.N4jIzK81tt/3d2XfTGrFa8m', NULL, '2', 'afkSU', '2022-11-13 08:38:06', '2022-11-13 08:38:06', NULL),
(2, 'Jacob', 'Janet@doe.com', '0.00000000', 'user', NULL, '$2y$10$pd2hfxRDJZ3O.QLAQ9myl.U1AeCZZbdMHtR46.I1pHr02xlEkaq96', NULL, '1', 'OLFdd', '2022-11-13 19:12:11', '2022-11-13 19:12:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliates_user_id_foreign` (`user_id`),
  ADD KEY `affiliates_referral_id_foreign` (`referral_id`);

--
-- Indexes for table `affiliate_profits`
--
ALTER TABLE `affiliate_profits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_profits_order_id_foreign` (`order_id`),
  ADD KEY `affiliate_profits_user_id_foreign` (`user_id`);

--
-- Indexes for table `binshops_categories`
--
ALTER TABLE `binshops_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binshops_categories_created_by_index` (`created_by`);

--
-- Indexes for table `binshops_category_translations`
--
ALTER TABLE `binshops_category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `binshops_category_translations_slug_unique` (`slug`),
  ADD KEY `binshops_category_translations_lang_id_index` (`lang_id`);

--
-- Indexes for table `binshops_comments`
--
ALTER TABLE `binshops_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binshops_comments_post_id_index` (`post_id`),
  ADD KEY `binshops_comments_user_id_index` (`user_id`);

--
-- Indexes for table `binshops_configurations`
--
ALTER TABLE `binshops_configurations`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `binshops_languages`
--
ALTER TABLE `binshops_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `binshops_languages_name_unique` (`name`),
  ADD UNIQUE KEY `binshops_languages_locale_unique` (`locale`),
  ADD UNIQUE KEY `binshops_languages_iso_code_unique` (`iso_code`);

--
-- Indexes for table `binshops_posts`
--
ALTER TABLE `binshops_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binshops_posts_user_id_index` (`user_id`),
  ADD KEY `binshops_posts_posted_at_index` (`posted_at`);

--
-- Indexes for table `binshops_post_categories`
--
ALTER TABLE `binshops_post_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binshops_post_categories_post_id_index` (`post_id`),
  ADD KEY `binshops_post_categories_category_id_index` (`category_id`);

--
-- Indexes for table `binshops_post_translations`
--
ALTER TABLE `binshops_post_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binshops_post_translations_lang_id_index` (`lang_id`);

--
-- Indexes for table `binshops_uploaded_photos`
--
ALTER TABLE `binshops_uploaded_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binshops_uploaded_photos_uploader_id_index` (`uploader_id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laravel_fulltext`
--
ALTER TABLE `laravel_fulltext`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laravel_fulltext_indexable_type_indexable_id_unique` (`indexable_type`,`indexable_id`);
ALTER TABLE `laravel_fulltext` ADD FULLTEXT KEY `fulltext_title` (`indexed_title`);
ALTER TABLE `laravel_fulltext` ADD FULLTEXT KEY `fulltext_title_content` (`indexed_title`,`indexed_content`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payouts_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_affiliate_id_unique` (`affiliate_id`),
  ADD KEY `users_referred_by_index` (`referred_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `affiliate_profits`
--
ALTER TABLE `affiliate_profits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `binshops_categories`
--
ALTER TABLE `binshops_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binshops_category_translations`
--
ALTER TABLE `binshops_category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binshops_comments`
--
ALTER TABLE `binshops_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binshops_languages`
--
ALTER TABLE `binshops_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `binshops_posts`
--
ALTER TABLE `binshops_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `binshops_post_categories`
--
ALTER TABLE `binshops_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binshops_post_translations`
--
ALTER TABLE `binshops_post_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `binshops_uploaded_photos`
--
ALTER TABLE `binshops_uploaded_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laravel_fulltext`
--
ALTER TABLE `laravel_fulltext`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD CONSTRAINT `affiliates_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `affiliates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `affiliate_profits`
--
ALTER TABLE `affiliate_profits`
  ADD CONSTRAINT `affiliate_profits_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `affiliate_profits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `binshops_category_translations`
--
ALTER TABLE `binshops_category_translations`
  ADD CONSTRAINT `binshops_category_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `binshops_languages` (`id`);

--
-- Constraints for table `binshops_post_categories`
--
ALTER TABLE `binshops_post_categories`
  ADD CONSTRAINT `binshops_post_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `binshops_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `binshops_post_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `binshops_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `binshops_post_translations`
--
ALTER TABLE `binshops_post_translations`
  ADD CONSTRAINT `binshops_post_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `binshops_languages` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payouts`
--
ALTER TABLE `payouts`
  ADD CONSTRAINT `payouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

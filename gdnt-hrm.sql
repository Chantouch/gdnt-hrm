-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 11:27 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdnt-hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_on_current_positions`
--

DROP TABLE IF EXISTS `add_on_current_positions`;
CREATE TABLE IF NOT EXISTS `add_on_current_positions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acp_emp_id` int(10) UNSIGNED NOT NULL,
  `acp_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acp_equal_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acp_start_date` datetime DEFAULT NULL,
  `acp_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acp_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acp_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acp_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `add_on_current_positions_acp_emp_id_foreign` (`acp_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_on_current_positions`
--

INSERT INTO `add_on_current_positions` (`id`, `acp_emp_id`, `acp_position`, `acp_equal_position`, `acp_start_date`, `acp_department`, `acp_others`, `acp_custom1`, `acp_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'Technical', 'Admin', '2014-02-05 00:00:00', 'IT', NULL, NULL, NULL, '2016-12-02 01:26:23', '2016-12-02 04:41:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `att_emp_id` int(10) UNSIGNED NOT NULL,
  `att_type` enum('A','B','C','E','F','G') COLLATE utf8_unicode_ci NOT NULL,
  `att_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `att_description` longtext COLLATE utf8_unicode_ci,
  `att_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `att_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `att_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attachments_att_emp_id_foreign` (`att_emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `award_punishments`
--

DROP TABLE IF EXISTS `award_punishments`;
CREATE TABLE IF NOT EXISTS `award_punishments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ap_emp_id` int(10) UNSIGNED NOT NULL,
  `ap_doc_number` int(11) DEFAULT NULL,
  `ap_published_date` datetime DEFAULT NULL,
  `ap_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ap_description` longtext COLLATE utf8_unicode_ci,
  `ap_type` enum('A','B','C','E','F','G') COLLATE utf8_unicode_ci NOT NULL,
  `ap_punish_type` enum('A','B','C','E','F','G') COLLATE utf8_unicode_ci NOT NULL,
  `ap_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ap_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ap_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `award_punishments_ap_emp_id_foreign` (`ap_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `award_punishments`
--

INSERT INTO `award_punishments` (`id`, `ap_emp_id`, `ap_doc_number`, `ap_published_date`, `ap_department`, `ap_description`, `ap_type`, `ap_punish_type`, `ap_others`, `ap_custom1`, `ap_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 39924, '2015-12-27 00:00:00', 'IT', 'Thanks for award.', 'G', 'A', NULL, NULL, NULL, '2016-12-02 07:11:22', '2016-12-02 07:17:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `current_job_status`
--

DROP TABLE IF EXISTS `current_job_status`;
CREATE TABLE IF NOT EXISTS `current_job_status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cjs_emp_id` int(10) UNSIGNED NOT NULL,
  `cjs_frame_id` int(10) UNSIGNED NOT NULL,
  `cjs_occupation_id` int(10) UNSIGNED NOT NULL,
  `cjs_department_id` int(10) UNSIGNED NOT NULL,
  `cjs_department_unit_id` int(10) UNSIGNED NOT NULL,
  `cjs_office_id` int(10) UNSIGNED NOT NULL,
  `cjs_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cjs_last_date_promoted` datetime DEFAULT NULL,
  `cjs_last_date_got_promoted` datetime DEFAULT NULL,
  `cjs_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cjs_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `current_job_status_cjs_emp_id_foreign` (`cjs_emp_id`),
  KEY `current_job_status_cjs_frame_id_foreign` (`cjs_frame_id`),
  KEY `current_job_status_cjs_occupation_id_foreign` (`cjs_occupation_id`),
  KEY `current_job_status_cjs_department_id_foreign` (`cjs_department_id`),
  KEY `current_job_status_cjs_department_unit_id_foreign` (`cjs_department_unit_id`),
  KEY `current_job_status_cjs_office_id_foreign` (`cjs_office_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `current_job_status`
--

INSERT INTO `current_job_status` (`id`, `cjs_emp_id`, `cjs_frame_id`, `cjs_occupation_id`, `cjs_department_id`, `cjs_department_unit_id`, `cjs_office_id`, `cjs_others`, `cjs_last_date_promoted`, `cjs_last_date_got_promoted`, `cjs_custom1`, `cjs_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 2, 1, 1, 3, 1, NULL, '2012-02-13 00:00:00', '2014-03-05 00:00:00', NULL, NULL, '2016-12-01 12:19:44', '2016-12-01 12:19:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `ministry_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `departments_ministry_id_foreign` (`ministry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `status`, `ministry_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'អគ្គនាយកដ្ឋានរតនាគារជាតិ', 'អគ្គនាយកដ្ឋានរតនាគារជាតិ', 1, 1, '2016-11-25 02:26:10', '2016-11-30 02:43:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_units`
--

DROP TABLE IF EXISTS `department_units`;
CREATE TABLE IF NOT EXISTS `department_units` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `department_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_units_department_id_foreign` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department_units`
--

INSERT INTO `department_units` (`id`, `name`, `description`, `status`, `department_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'នាយកដ្ឋានព័ត៏មានវិទ្យា', 'នាយកដ្ឋានព័ត៏មានវិទ្យា', 0, 1, '2016-11-24 10:29:55', '2016-11-30 02:42:43', NULL),
(2, 'នាយកដ្ឋានព័ត៏មានវិទ្យា', 'នាយកដ្ឋានព័ត៏មានវិទ្យា', 1, 1, '2016-11-24 10:30:13', '2016-11-24 10:30:13', NULL),
(3, 'នាយកដ្ឋានព័ត៏មានវិទ្យា', 'នាយកដ្ឋានព័ត៏មានវិទ្យា', 1, 1, '2016-11-24 10:30:24', '2016-11-24 10:30:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_levels`
--

DROP TABLE IF EXISTS `education_levels`;
CREATE TABLE IF NOT EXISTS `education_levels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `el_emp_id` int(10) UNSIGNED NOT NULL,
  `el_level_edu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `el_school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `el_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `el_degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `el_start_date` datetime DEFAULT NULL,
  `el_end_date` datetime DEFAULT NULL,
  `el_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `el_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `el_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `education_levels_el_emp_id_foreign` (`el_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education_levels`
--

INSERT INTO `education_levels` (`id`, `el_emp_id`, `el_level_edu`, `el_school`, `el_country`, `el_degree`, `el_start_date`, `el_end_date`, `el_others`, `el_custom1`, `el_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, '1', 'វិទ្យាល័យព្រះស៊ីសុវត្តិ', 'កម្ពុជា', 'មធ្យមសិក្សាទុតិយភូមិ', '1999-01-01 00:00:00', '2002-07-22 00:00:00', NULL, NULL, NULL, '2016-12-02 10:30:40', '2016-12-02 11:21:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE IF NOT EXISTS `employers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `department_code` int(11) DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('MALE','FEMALE','OTHER') COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` enum('Single','Married','Divorcee','Window') COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hand_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_card` int(11) DEFAULT NULL,
  `id_card_expired` datetime DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport_expired_date` datetime DEFAULT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employers_emp_id_unique` (`emp_id`),
  UNIQUE KEY `employers_email_unique` (`email`),
  UNIQUE KEY `employers_cover_photo_unique` (`cover_photo`),
  UNIQUE KEY `employers_email1_unique` (`email1`),
  UNIQUE KEY `employers_email2_unique` (`email2`),
  UNIQUE KEY `employers_hand_phone_unique` (`hand_phone`),
  UNIQUE KEY `employers_id_card_unique` (`id_card`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `first_state_jobs`
--

DROP TABLE IF EXISTS `first_state_jobs`;
CREATE TABLE IF NOT EXISTS `first_state_jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fsj_emp_id` int(10) UNSIGNED NOT NULL,
  `fsj_office_id` int(10) UNSIGNED NOT NULL,
  `fsj_department_unit_id` int(10) UNSIGNED NOT NULL,
  `fsj_department_id` int(10) UNSIGNED NOT NULL,
  `fsj_ministry_id` int(10) UNSIGNED NOT NULL,
  `fsj_occupation_id` int(10) UNSIGNED NOT NULL,
  `fsj_frame_id` int(10) UNSIGNED NOT NULL,
  `fsj_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fsj_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fsj_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fsj_permanent_staff_date` datetime DEFAULT NULL,
  `fsj_start_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `first_state_jobs_fsj_emp_id_foreign` (`fsj_emp_id`),
  KEY `first_state_jobs_fsj_office_id_foreign` (`fsj_office_id`),
  KEY `first_state_jobs_fsj_department_unit_id_foreign` (`fsj_department_unit_id`),
  KEY `first_state_jobs_fsj_department_id_foreign` (`fsj_department_id`),
  KEY `first_state_jobs_fsj_ministry_id_foreign` (`fsj_ministry_id`),
  KEY `first_state_jobs_fsj_occupation_id_foreign` (`fsj_occupation_id`),
  KEY `first_state_jobs_fsj_frame_id_foreign` (`fsj_frame_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `first_state_jobs`
--

INSERT INTO `first_state_jobs` (`id`, `fsj_emp_id`, `fsj_office_id`, `fsj_department_unit_id`, `fsj_department_id`, `fsj_ministry_id`, `fsj_occupation_id`, `fsj_frame_id`, `fsj_others`, `fsj_custom1`, `fsj_custom2`, `fsj_permanent_staff_date`, `fsj_start_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 1, 3, 1, 1, 1, 1, NULL, NULL, NULL, '2016-12-01 00:00:00', '2016-12-11 00:00:00', '2016-12-01 06:36:00', '2016-12-02 04:38:48', NULL),
(2, 6, 1, 3, 1, 1, 1, 1, NULL, NULL, NULL, '2010-03-10 00:00:00', '2009-03-04 00:00:00', '2016-12-01 11:17:30', '2016-12-02 11:23:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

DROP TABLE IF EXISTS `frames`;
CREATE TABLE IF NOT EXISTS `frames` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ក៣១៤', 'This is the highest frame', 1, '2016-11-25 03:46:05', '2016-12-01 11:37:04', NULL),
(2, 'Full Staff', 'Ok. thanks.', 1, '2016-12-01 11:16:50', '2016-12-01 11:16:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ខ្មែរ', 'ភាសាខ្មែរ', 1, '2016-11-25 04:13:19', '2016-11-30 02:39:26', NULL),
(2, 'អង់គ្លេស', 'ភាសាអង់គ្លេស', 1, '2016-11-25 04:17:32', '2016-11-25 04:18:04', '2016-11-25 04:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `language_levels`
--

DROP TABLE IF EXISTS `language_levels`;
CREATE TABLE IF NOT EXISTS `language_levels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ll_emp_id` int(10) UNSIGNED NOT NULL,
  `ll_lang_id` int(10) UNSIGNED NOT NULL,
  `ll_read` enum('Beginner','Conversation','Business','Fluent','Mother Tongue') COLLATE utf8_unicode_ci NOT NULL,
  `ll_write` enum('Beginner','Conversation','Business','Fluent','Mother Tongue') COLLATE utf8_unicode_ci NOT NULL,
  `ll_listen` enum('Beginner','Conversation','Business','Fluent','Mother Tongue') COLLATE utf8_unicode_ci NOT NULL,
  `ll_speak` enum('Beginner','Conversation','Business','Fluent','Mother Tongue') COLLATE utf8_unicode_ci NOT NULL,
  `ll_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ll_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ll_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `language_levels_ll_emp_id_foreign` (`ll_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_levels`
--

INSERT INTO `language_levels` (`id`, `ll_emp_id`, `ll_lang_id`, `ll_read`, `ll_write`, `ll_listen`, `ll_speak`, `ll_others`, `ll_custom1`, `ll_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 1, 'Beginner', 'Conversation', 'Business', 'Fluent', NULL, NULL, NULL, '2016-12-02 11:22:40', '2016-12-02 11:23:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_11_18_084836_entrust_setup_tables', 1),
(4, '2016_11_23_165806_create_ministries_table', 1),
(5, '2016_11_23_165845_create_departments_table', 1),
(6, '2016_11_23_165904_create_department_units_table', 1),
(7, '2016_11_23_165923_create_offices_table', 1),
(8, '2016_11_23_165953_create_frames_table', 1),
(9, '2016_11_23_170004_create_occupations_table', 1),
(10, '2016_11_23_170024_create_languages_table', 1),
(11, '2016_11_25_155530_create_employers_table', 1),
(12, '2016_11_25_161804_create_first_state_jobs_table', 1),
(13, '2016_11_25_161855_create_add_on_current_positions_table', 1),
(14, '2016_11_25_162018_create_out_of_frame_no_salary_status_table', 1),
(15, '2016_11_25_162225_create_public_private_history_jobs_table', 1),
(16, '2016_11_25_162324_create_award_punishedment_table', 1),
(17, '2016_11_25_162452_create_education_levels_table', 1),
(18, '2016_11_25_162536_create_language_levels_table', 1),
(19, '2016_11_25_162722_create_wife_husband_parents_table', 1),
(20, '2016_11_25_162852_create_sibling_children_table', 1),
(21, '2016_11_25_162913_create_attachments_table', 1),
(22, '2016_11_25_163104_create_current_job_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

DROP TABLE IF EXISTS `ministries`;
CREATE TABLE IF NOT EXISTS `ministries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ក្រសួងសេដ្ឋកិច្ចនិងហិរញ្្ញវត្ថុ', 'ក្រសួងសេដ្ឋកិច្ចនិងហិរញ្្ញវត្ថុ', 1, '2016-11-25 02:14:06', '2016-11-30 02:43:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

DROP TABLE IF EXISTS `occupations`;
CREATE TABLE IF NOT EXISTS `occupations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `occupations`
--

INSERT INTO `occupations` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'អនុប្រធាននាយកដ្ឋាន', 'អនុប្រធាននាយកដ្ឋាន​ ព័ត៏មានវិទ្យា', 1, '2016-11-25 04:02:46', '2016-11-30 02:39:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `department_unit_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offices_department_unit_id_foreign` (`department_unit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `description`, `status`, `department_unit_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ព័ត័មានវិទ្យា', 'ព័ត័មានវិទ្យា ការិយាល័យ', 1, 2, '2016-11-25 03:20:33', '2016-11-30 02:40:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `out_of_frame_no_salary_status`
--

DROP TABLE IF EXISTS `out_of_frame_no_salary_status`;
CREATE TABLE IF NOT EXISTS `out_of_frame_no_salary_status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fn_emp_id` int(10) UNSIGNED NOT NULL,
  `fn_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fn_start_date` datetime DEFAULT NULL,
  `fn_end_date` datetime DEFAULT NULL,
  `fn_type` enum('Out Of Frame','Freedom No Salary') COLLATE utf8_unicode_ci NOT NULL,
  `fn_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fn_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fn_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `out_of_frame_no_salary_status_fn_emp_id_foreign` (`fn_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `out_of_frame_no_salary_status`
--

INSERT INTO `out_of_frame_no_salary_status` (`id`, `fn_emp_id`, `fn_department`, `fn_start_date`, `fn_end_date`, `fn_type`, `fn_others`, `fn_custom1`, `fn_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'Accountant', '2016-12-02 00:00:00', '2016-12-13 00:00:00', 'Out Of Frame', NULL, NULL, NULL, '2016-12-02 04:50:40', '2016-12-02 04:50:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(2, 'role-create', 'Create Role', 'Create New Role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(5, 'list-staff', 'Display staff Listing', 'See only Listing Of Staff', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(6, 'create-staff', 'Create Staff', 'Create New Staff', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(7, 'edit-staff', 'Edit Staff', 'Edit Staff', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(8, 'delete-staff', 'Delete Staff', 'Delete Staff', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(9, 'edit-own-self', 'Edit Own self', 'This permission allow use to edit their own information', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(10, 'show-single-staff', 'Show Single Staff', 'Allowed user to view a single staff for more information', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(11, 'show-single-role', 'Show Single Role', 'Allowed user to view a single role, only allowed for Admin role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(12, 'list-permission', 'View all permission available', 'Allowed user to view all permission, only allowed for Admin role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(13, 'show-single-permission', 'View specific permission', 'Allowed user to view a specific permission, only allowed for Admin role', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(14, 'show-own-self', 'View his/her information completely', 'Allowed user to view their information completely', '2016-11-23 09:00:59', '2016-11-23 09:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(14, 3),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `public_private_history_jobs`
--

DROP TABLE IF EXISTS `public_private_history_jobs`;
CREATE TABLE IF NOT EXISTS `public_private_history_jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phj_emp_id` int(10) UNSIGNED NOT NULL,
  `phj_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phj_ministry_institute` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phj_occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phj_start_date` datetime DEFAULT NULL,
  `phj_end_date` datetime DEFAULT NULL,
  `phj_type` enum('Private','Public') COLLATE utf8_unicode_ci NOT NULL,
  `phj_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phj_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phj_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `public_private_history_jobs_phj_emp_id_foreign` (`phj_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `public_private_history_jobs`
--

INSERT INTO `public_private_history_jobs` (`id`, `phj_emp_id`, `phj_department`, `phj_ministry_institute`, `phj_occupation`, `phj_start_date`, `phj_end_date`, `phj_type`, `phj_others`, `phj_custom1`, `phj_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'B', 'A', 'C', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 'Private', 'D', NULL, NULL, '2016-12-02 04:40:39', '2016-12-02 05:08:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'system-admin', 'System Administrator', 'This role is allowed to use all features in system.', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(2, 'management', 'Management', 'This role is allowed for only to view and and see the dashboard', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(3, 'admin-officer', 'Administrator officer', 'User is allowed to manage all module in system (CRUD)', '2016-11-23 09:00:59', '2016-11-23 09:00:59'),
(4, 'officer', 'Officer', 'This role is allowed to view their information only', '2016-11-23 09:00:59', '2016-11-23 09:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sibling_children`
--

DROP TABLE IF EXISTS `sibling_children`;
CREATE TABLE IF NOT EXISTS `sibling_children` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sc_emp_id` int(10) UNSIGNED NOT NULL,
  `sc_job_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_type` enum('CHILD','SIBLING') COLLATE utf8_unicode_ci NOT NULL,
  `sc_gender` enum('MALE','FEMALE','OTHERS') COLLATE utf8_unicode_ci NOT NULL,
  `sc_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_dob` datetime DEFAULT NULL,
  `sc_place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_subsidy` tinyint(4) NOT NULL,
  `sc_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sibling_children_sc_emp_id_foreign` (`sc_emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `department_code` int(11) DEFAULT NULL,
  `id_notice_emp` int(11) DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('m','f','o') COLLATE utf8_unicode_ci NOT NULL COMMENT 'm=>male, f->female, o=>others',
  `marital_status` enum('s','m','d','w') COLLATE utf8_unicode_ci NOT NULL COMMENT 's=>single, m=>married, d->divorcee, w=>widow',
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Place where employer born',
  `current_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Place where employer live',
  `dob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Date of birth of employer born',
  `email1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'use in front of the page to show their face',
  `hand_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mobile phone that they carry on everyday',
  `work_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Phone at office',
  `home_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Phone at home that can contact to their relative',
  `id_card` int(11) DEFAULT NULL COMMENT 'The Khmer Identity card holder',
  `id_card_expired` datetime DEFAULT NULL COMMENT 'The date of expiration card',
  `passport` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'A book that use to go abroad',
  `passport_expired_date` datetime DEFAULT NULL COMMENT 'Date of expiration passport',
  `others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Others comment for this fields',
  `custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_emp_id_unique` (`emp_id`),
  UNIQUE KEY `users_cover_photo_unique` (`cover_photo`),
  UNIQUE KEY `users_email1_unique` (`email1`),
  UNIQUE KEY `users_email2_unique` (`email2`),
  UNIQUE KEY `users_hand_phone_unique` (`hand_phone`),
  UNIQUE KEY `users_id_card_unique` (`id_card`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `emp_id`, `department_code`, `id_notice_emp`, `full_name`, `fn_en`, `gender`, `marital_status`, `nationality`, `ethnic`, `place_of_birth`, `current_address`, `dob`, `email1`, `email2`, `cover_photo`, `hand_phone`, `work_phone`, `home_phone`, `id_card`, `id_card_expired`, `passport`, `passport_expired_date`, `others`, `custom1`, `custom2`, `active`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'System Admin', 'system@admin.com', '$2y$10$li.35UsVs2nG2Bbh3cU0Suos1x63Z/rXStufT9H99UVFDWstiBLe2', 1, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default1.png', '070375780', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1NIYXShoM9V3o3bGQgwOxYTXqSfrKdKa8py9snoNVwkbVKrDajJ5ZO5YKG3B', '2016-11-23 02:01:09', '2016-11-30 11:07:17', NULL),
(2, 'Management', 'management@treasury.gov.kh', '$2y$10$ssWuiL6PG3eRrVgh4dkBYerTnBkndJKCe6GEOkToHuM83Z8yuA7Ly', 2, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default2.png', '070375781', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2016-11-23 02:15:11', '2016-11-23 02:15:11', NULL),
(3, 'Admin Officer', 'admin.officer@treasury.gov.kh', '$2y$10$Z8SPhzUi4VmKm/NBDD8ZEupfXRtklvidIgH6Utc7/jEz6otLdwV4K', 3, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default3.png', '070375782', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ZZVxH8suC3fgBQcPQNoeQfSjcrDEhlzyZeQUd1VN9qTtNzgtzu9UjW2zc3Qv', '2016-11-23 02:16:10', '2016-11-23 20:16:39', NULL),
(4, 'Officer', 'officer@treasury.gov.kh', '$2y$10$OyfBXCws2dFRpUTMmjIqJ.9XE0M7OTbkA0l7vZPgCc/ZePqq/UAz6', 4, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default4.png', '070375783', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2016-11-23 02:16:37', '2016-11-23 02:16:37', NULL),
(5, 'Chen SambatVoha', 'sambatvoha.chen@gmail.com', '$2y$10$2pxdid.lz1hR./InTiwPiOSFwyGPHbRLa99Dcchnk9E.C7WHGJkRm', 5, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default5.png', '070375784', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'LHHVlB2gWVgnqWuQrVIxV5oUysdbN2nYVxsac9WtdIozpZb170Tou6IwrRXx', '2016-11-23 20:16:35', '2016-12-01 01:58:27', NULL),
(6, NULL, 'chen_sambatvoha@treasury.gov.kh', NULL, 1851200058, 3, 12545552, 'ជិន សម្បត្តិវោហា', 'Chen Sambatvoha', 'm', 's', 'Khmer', 'Khmer', 'Phnom Penh', 'Phnom Penh', '1993-01-31 00:00:00', NULL, NULL, NULL, '090987773', '', '', 101214242, '2026-02-01 00:00:00', '', '1969-12-28 00:00:00', '', NULL, NULL, 0, NULL, '2016-11-28 11:02:24', '2016-12-02 07:22:18', NULL),
(7, NULL, 'chantouch@email.com', NULL, 14, 12, 23, 'សេក ចាន់ទូច', 'Chantouch', 'm', 'm', 'ខ្មែរ', 'ខ្មែរ', 'Kampong Chnang', 'Phnom Penh', '1994-04-25 00:00:00', NULL, NULL, NULL, '', '', '', 3345, '2016-11-30 00:00:00', '2343556', '2016-11-30 00:00:00', '', NULL, NULL, 0, NULL, '2016-11-30 04:28:52', '2016-12-01 09:19:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wife_husband_parents`
--

DROP TABLE IF EXISTS `wife_husband_parents`;
CREATE TABLE IF NOT EXISTS `wife_husband_parents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `whp_emp_id` int(10) UNSIGNED NOT NULL,
  `whp_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_type` enum('WIFE','HUSBAND','FATHER','MOTHER') COLLATE utf8_unicode_ci NOT NULL,
  `whp_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_dob` datetime DEFAULT NULL,
  `whp_place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_subsidy` tinyint(4) NOT NULL,
  `whp_status` tinyint(4) NOT NULL,
  `whp_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wife_husband_parents_whp_emp_id_foreign` (`whp_emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

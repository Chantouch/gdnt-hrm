-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 06:19 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_on_current_positions`
--

INSERT INTO `add_on_current_positions` (`id`, `acp_emp_id`, `acp_position`, `acp_equal_position`, `acp_start_date`, `acp_department`, `acp_others`, `acp_custom1`, `acp_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Technical', 'Admin', '2014-02-05 00:00:00', 'IT', NULL, NULL, NULL, '2016-12-02 01:26:23', '2016-12-02 04:41:57', NULL),
(2, 27, 'Helper', 'E', '2015-12-21 00:00:00', 'D', NULL, NULL, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL);

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
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aw_emp_id` int(10) UNSIGNED NOT NULL,
  `aw_doc_number` int(11) DEFAULT NULL,
  `aw_published_date` datetime DEFAULT NULL,
  `aw_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aw_description` longtext COLLATE utf8_unicode_ci,
  `aw_type` enum('A','B','C','E','F','G') COLLATE utf8_unicode_ci NOT NULL,
  `aw_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aw_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aw_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `awards_aw_emp_id_foreign` (`aw_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `aw_emp_id`, `aw_doc_number`, `aw_published_date`, `aw_department`, `aw_description`, `aw_type`, `aw_others`, `aw_custom1`, `aw_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 215455, '2016-11-23 00:00:00', 'Zic', 'NO', 'B', NULL, NULL, NULL, '2016-12-08 08:43:54', '2016-12-08 08:50:27', NULL),
(2, 6, 6855455, '2016-11-07 00:00:00', 'Mic', 'YES', 'C', NULL, NULL, NULL, '2016-12-08 08:43:54', '2016-12-08 08:50:27', NULL);

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
(1, 6, 2215254, '2015-12-27 00:00:00', 'អគ្គនាយកដ្ឋានរតនាគារជាតិ', 'សូមតែងតាំង អ្នកទាំងអស់គ្នា។', 'E', 'A', NULL, NULL, NULL, '2016-12-08 07:15:36', '2016-12-08 07:15:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `child_emp_id` int(10) UNSIGNED NOT NULL,
  `child_job_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_gender` enum('MALE','FEMALE','OTHERS') COLLATE utf8_unicode_ci NOT NULL,
  `child_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_dob` datetime DEFAULT NULL COMMENT 'Date of birth',
  `child_pob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Place of birth',
  `child_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_subsidy` tinyint(4) NOT NULL DEFAULT '1',
  `child_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `children_child_emp_id_foreign` (`child_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `child_emp_id`, `child_job_department`, `child_full_name`, `child_fn_en`, `child_gender`, `child_nationality`, `child_ethnic`, `child_dob`, `child_pob`, `child_address`, `child_job`, `child_subsidy`, `child_others`, `child_custom1`, `child_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, NULL, 'ចិន​ កែវបូរមី', 'CHEN KEOBORAMY', 'FEMALE', NULL, NULL, '2014-03-18 15:54:51', NULL, NULL, '', 1, NULL, NULL, NULL, '2016-12-09 04:29:32', '2016-12-14 08:54:51', NULL),
(2, 6, NULL, 'ចិន​ កែវបូម៉ានា', 'CHEN KEOBOMANA', 'FEMALE', NULL, NULL, '2015-08-08 15:54:51', NULL, NULL, '', 1, NULL, NULL, NULL, '2016-12-09 04:29:32', '2016-12-14 08:54:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `current_job_status`
--

DROP TABLE IF EXISTS `current_job_status`;
CREATE TABLE IF NOT EXISTS `current_job_status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cjs_emp_id` int(10) UNSIGNED NOT NULL,
  `cjs_frame_id` int(10) UNSIGNED DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `current_job_status`
--

INSERT INTO `current_job_status` (`id`, `cjs_emp_id`, `cjs_frame_id`, `cjs_occupation_id`, `cjs_department_id`, `cjs_department_unit_id`, `cjs_office_id`, `cjs_others`, `cjs_last_date_promoted`, `cjs_last_date_got_promoted`, `cjs_custom1`, `cjs_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 2, 1, 1, 3, 1, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', NULL, NULL, '2016-12-01 12:19:44', '2016-12-06 11:01:51', NULL),
(2, 25, 2, 1, 1, 2, 1, NULL, '2016-11-29 00:00:00', '2016-11-30 00:00:00', NULL, NULL, '2016-12-12 09:32:58', '2016-12-12 09:32:58', NULL),
(3, 26, 1, 1, 1, 2, 1, NULL, '2016-11-28 00:00:00', '2016-12-01 00:00:00', NULL, NULL, '2016-12-13 05:25:18', '2016-12-13 05:25:18', NULL),
(4, 27, 2, 1, 1, 2, 1, NULL, '2013-08-21 00:00:00', '2013-09-09 00:00:00', NULL, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degree_specializes`
--

DROP TABLE IF EXISTS `degree_specializes`;
CREATE TABLE IF NOT EXISTS `degree_specializes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ds_emp_id` int(10) UNSIGNED NOT NULL,
  `ds_level_edu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_start_date` datetime DEFAULT NULL,
  `ds_end_date` datetime DEFAULT NULL,
  `ds_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `degree_specializes_ds_emp_id_foreign` (`ds_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `degree_specializes`
--

INSERT INTO `degree_specializes` (`id`, `ds_emp_id`, `ds_level_edu`, `ds_school`, `ds_country`, `ds_degree`, `ds_start_date`, `ds_end_date`, `ds_others`, `ds_custom1`, `ds_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'A', 'B', 'C', 'D', '2016-09-02 15:54:51', '2016-09-16 15:54:51', NULL, NULL, NULL, '2016-12-09 08:54:01', '2016-12-14 08:54:51', NULL),
(2, 6, 'E', 'F', 'G', 'H', '2016-09-23 15:54:51', '2016-12-07 15:54:51', NULL, NULL, NULL, '2016-12-09 08:54:01', '2016-12-14 08:54:51', NULL);

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
  `type` enum('general','degree','short_course','') COLLATE utf8_unicode_ci DEFAULT NULL,
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

INSERT INTO `education_levels` (`id`, `el_emp_id`, `el_level_edu`, `el_school`, `el_country`, `el_degree`, `type`, `el_start_date`, `el_end_date`, `el_others`, `el_custom1`, `el_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'ទុតិយភូមិ', 'វិទ្យាល័យព្រះស៊ីសុវត្តិ', 'កម្ពុជា', 'មធ្យមសិក្សាទុតិយភូមិ', NULL, '1999-01-13 00:00:00', '2002-07-22 00:00:00', NULL, NULL, NULL, '2016-12-02 10:30:40', '2016-12-08 10:19:17', NULL);

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
-- Table structure for table `fathers`
--

DROP TABLE IF EXISTS `fathers`;
CREATE TABLE IF NOT EXISTS `fathers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_emp_id` int(10) UNSIGNED NOT NULL,
  `f_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_dob` datetime DEFAULT NULL COMMENT 'Date of birth',
  `f_pob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Place of birth',
  `f_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_status` enum('l','d') COLLATE utf8_unicode_ci NOT NULL,
  `f_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fathers_f_emp_id_foreign` (`f_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fathers`
--

INSERT INTO `fathers` (`id`, `f_emp_id`, `f_department`, `f_full_name`, `f_fn_en`, `f_nationality`, `f_ethnic`, `f_dob`, `f_pob`, `f_address`, `f_job`, `f_status`, `f_others`, `f_custom1`, `f_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'ក្រសួងរៀបចំដែនដី នគរូបនិយកម្ម និង សណង់', 'ចិន សាផន', 'CHEN SAPHAN', 'ខ្មែរ', 'ខ្មែរ', '1989-09-01 00:00:00', NULL, 'ផ្ទះលេខ៥៦អឹ០ ផ្លួវលេខ៩៥ សង្កាត់បឹងកេងកងទី៣ ខណ្ឌចំការមន រាជធានីភ្នំពេញ។', 'មន្ត្រីរាជការចូលនិវត្តន៏', 'l', NULL, NULL, NULL, '2016-12-05 03:57:12', '2016-12-06 01:23:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `first_state_jobs`
--

DROP TABLE IF EXISTS `first_state_jobs`;
CREATE TABLE IF NOT EXISTS `first_state_jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fsj_emp_id` int(10) UNSIGNED NOT NULL,
  `fsj_office_id` int(10) UNSIGNED DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `first_state_jobs`
--

INSERT INTO `first_state_jobs` (`id`, `fsj_emp_id`, `fsj_office_id`, `fsj_department_unit_id`, `fsj_department_id`, `fsj_ministry_id`, `fsj_occupation_id`, `fsj_frame_id`, `fsj_others`, `fsj_custom1`, `fsj_custom2`, `fsj_permanent_staff_date`, `fsj_start_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 1, 3, 1, 1, 1, 1, NULL, NULL, NULL, '2016-12-01 00:00:00', '2016-12-11 00:00:00', '2016-12-01 06:36:00', '2016-12-14 08:33:17', NULL),
(2, 6, 1, 3, 1, 1, 1, 1, NULL, NULL, NULL, '2010-03-10 00:00:00', '1970-01-01 00:00:00', '2016-12-01 11:17:30', '2016-12-14 08:54:51', NULL),
(4, 25, 1, 2, 1, 1, 1, 2, NULL, NULL, NULL, '2016-12-01 00:00:00', '2016-12-06 00:00:00', '2016-12-12 09:32:58', '2016-12-12 09:32:58', NULL),
(5, 27, 1, 2, 1, 1, 1, 1, NULL, NULL, NULL, '2011-08-05 00:00:00', '2010-02-28 00:00:00', '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL);

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
-- Table structure for table `general_educations`
--

DROP TABLE IF EXISTS `general_educations`;
CREATE TABLE IF NOT EXISTS `general_educations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ge_emp_id` int(10) UNSIGNED NOT NULL,
  `ge_level_edu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ge_school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ge_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ge_degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ge_start_date` datetime DEFAULT NULL,
  `ge_end_date` datetime DEFAULT NULL,
  `ge_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ge_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ge_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `general_educations_ge_emp_id_foreign` (`ge_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_educations`
--

INSERT INTO `general_educations` (`id`, `ge_emp_id`, `ge_level_edu`, `ge_school`, `ge_country`, `ge_degree`, `ge_start_date`, `ge_end_date`, `ge_others`, `ge_custom1`, `ge_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 6, 'A', 'B', 'C', 'D', '2016-10-29 15:54:51', '2016-12-23 15:54:51', NULL, NULL, NULL, '2016-12-09 08:21:39', '2016-12-14 08:54:51', NULL),
(6, 6, 'E', 'F', 'G', 'H', '2016-10-01 15:54:51', '2017-01-13 15:54:51', NULL, NULL, NULL, '2016-12-09 08:21:39', '2016-12-14 08:54:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_private_jobs`
--

DROP TABLE IF EXISTS `history_private_jobs`;
CREATE TABLE IF NOT EXISTS `history_private_jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hpj_emp_id` int(10) UNSIGNED NOT NULL,
  `hpj_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hpj_ministry_institute` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hpj_occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hpj_start_date` datetime DEFAULT NULL,
  `hpj_end_date` datetime DEFAULT NULL,
  `hpj_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hpj_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hpj_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `history_private_jobs_hpj_emp_id_foreign` (`hpj_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history_private_jobs`
--

INSERT INTO `history_private_jobs` (`id`, `hpj_emp_id`, `hpj_department`, `hpj_ministry_institute`, `hpj_occupation`, `hpj_start_date`, `hpj_end_date`, `hpj_others`, `hpj_custom1`, `hpj_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, NULL, 'AppSaraDev', 'Software Developer', '2014-04-01 00:00:00', '2016-09-30 00:00:00', 'Develop System and Website', NULL, NULL, '2016-12-07 11:34:35', '2016-12-07 11:41:01', NULL),
(2, 6, NULL, 'GDNT', 'Web Developer', '2016-09-14 00:00:00', '2016-11-30 00:00:00', 'Develop System and Website and others more', NULL, NULL, '2016-12-07 11:34:35', '2016-12-07 11:41:01', NULL),
(3, 27, NULL, 'G', 'H', '2016-08-02 00:00:00', '2016-09-13 00:00:00', 'I', NULL, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL),
(4, 27, NULL, 'G', 'H', '2016-08-02 00:00:00', '2016-09-13 00:00:00', 'I', NULL, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ខ្មែរ', 'ភាសាខ្មែរ', 1, '2016-11-25 04:13:19', '2016-11-30 02:39:26', NULL),
(2, 'អង់គ្លេស', 'ភាសាអង់គ្លេស', 1, '2016-11-25 04:17:32', '2016-11-25 04:18:04', NULL),
(3, 'ភាសាជប៉ុន', 'នេះគឺភាសាជប៉ុន', 1, '2016-12-03 03:32:35', '2016-12-03 03:34:25', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_levels`
--

INSERT INTO `language_levels` (`id`, `ll_emp_id`, `ll_lang_id`, `ll_read`, `ll_write`, `ll_listen`, `ll_speak`, `ll_others`, `ll_custom1`, `ll_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 1, 'Beginner', 'Mother Tongue', 'Mother Tongue', 'Mother Tongue', NULL, NULL, NULL, '2016-12-03 06:01:31', '2016-12-09 10:35:19', NULL),
(2, 6, 2, 'Conversation', 'Conversation', 'Conversation', 'Conversation', NULL, NULL, NULL, '2016-12-03 06:01:31', '2016-12-09 01:12:53', NULL),
(3, 6, 3, 'Beginner', 'Business', 'Business', 'Business', NULL, NULL, NULL, '2016-12-03 06:01:31', '2016-12-09 01:12:53', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(22, '2016_11_25_163104_create_current_job_status_table', 1),
(23, '2016_12_05_101539_create_father_table', 2),
(24, '2016_12_05_101555_create_mother_table', 2),
(29, '2016_12_05_102037_create_spouse_table', 3),
(26, '2016_12_05_102555_create_child_table', 2),
(27, '2016_12_05_102852_create_sibling_table', 2),
(30, '2016_12_06_153255_create_no_salary_status_table', 4),
(31, '2016_12_07_170151_create_history_private_job_table', 5),
(32, '2016_12_08_142533_create_punishment_table', 6),
(33, '2016_12_08_152318_create_award_table', 7),
(34, '2016_12_09_135208_create_general_education_table', 8),
(36, '2016_12_09_152534_create_degree_specialize_table', 9),
(37, '2016_12_09_155520_create_short_course_table', 10);

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
-- Table structure for table `mothers`
--

DROP TABLE IF EXISTS `mothers`;
CREATE TABLE IF NOT EXISTS `mothers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `m_emp_id` int(10) UNSIGNED NOT NULL,
  `m_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_dob` datetime DEFAULT NULL,
  `m_pob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Place of birth',
  `m_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_status` enum('l','d') COLLATE utf8_unicode_ci NOT NULL,
  `m_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mothers_m_emp_id_foreign` (`m_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mothers`
--

INSERT INTO `mothers` (`id`, `m_emp_id`, `m_department`, `m_full_name`, `m_fn_en`, `m_nationality`, `m_ethnic`, `m_dob`, `m_pob`, `m_address`, `m_job`, `m_status`, `m_others`, `m_custom1`, `m_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'ផ្ទះ សម្បែង', 'ពុធ សម្បត្តិ', 'PUTH SAMBATH', 'ខ្មែរ', 'ខ្មែរ', '1980-05-12 00:00:00', NULL, 'ផ្ទះលេខ៥៦អឹ០ ផ្លួវលេខ៩៥ សង្កាត់បឹងកេងកងទី៣ ខណ្ឌចំការមន រាជធានីភ្នំពេញ។', 'មេផ្ទ្ះ', 'l', NULL, NULL, NULL, '2016-12-05 04:05:00', '2016-12-14 08:54:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `no_salary_status`
--

DROP TABLE IF EXISTS `no_salary_status`;
CREATE TABLE IF NOT EXISTS `no_salary_status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nss_emp_id` int(10) UNSIGNED NOT NULL,
  `nss_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nss_start_date` datetime DEFAULT NULL,
  `nss_end_date` datetime DEFAULT NULL,
  `nss_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nss_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nss_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_salary_status_nss_emp_id_foreign` (`nss_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `no_salary_status`
--

INSERT INTO `no_salary_status` (`id`, `nss_emp_id`, `nss_department`, `nss_start_date`, `nss_end_date`, `nss_others`, `nss_custom1`, `nss_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ZA  (Updated)', '2007-07-07 00:00:00', '2016-12-10 00:00:00', NULL, NULL, NULL, '2016-12-07 10:24:46', '2016-12-07 10:27:43', NULL),
(2, 1, 'ZA', '2016-11-29 00:00:00', '2016-12-31 00:00:00', NULL, NULL, NULL, '2016-12-07 10:24:46', '2016-12-07 10:26:53', NULL),
(3, 27, 'B', '2016-11-22 00:00:00', '2016-12-07 00:00:00', NULL, NULL, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `out_of_frame_no_salary_status`
--

INSERT INTO `out_of_frame_no_salary_status` (`id`, `fn_emp_id`, `fn_department`, `fn_start_date`, `fn_end_date`, `fn_type`, `fn_others`, `fn_custom1`, `fn_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'AB', '2016-11-28 15:54:51', '2017-08-10 15:54:51', 'Out Of Frame', NULL, NULL, NULL, '2016-12-07 08:43:50', '2016-12-14 08:54:51', NULL),
(2, 6, 'BC', '2016-11-29 15:54:51', '2016-11-29 15:54:51', 'Out Of Frame', NULL, NULL, NULL, '2016-12-07 08:43:50', '2016-12-14 08:54:51', NULL),
(3, 6, 'CD', '2016-10-31 15:54:51', '2016-12-14 15:54:51', 'Out Of Frame', NULL, NULL, NULL, '2016-12-07 08:43:50', '2016-12-14 08:54:51', NULL),
(6, 27, 'A', '2016-10-04 17:23:28', '2016-11-08 17:23:28', 'Out Of Frame', NULL, NULL, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `public_private_history_jobs`
--

INSERT INTO `public_private_history_jobs` (`id`, `phj_emp_id`, `phj_department`, `phj_ministry_institute`, `phj_occupation`, `phj_start_date`, `phj_end_date`, `phj_type`, `phj_others`, `phj_custom1`, `phj_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'អគ្គនាយកដ្ឋានតរាគារជាតិ', 'ក្រសូងសេដ្ឋកិច្ចនិងហិរញ្ញវត្ថុ', 'ប្រធានការិយាល័យ', '2014-02-03 00:00:00', '2014-06-06 00:00:00', 'Public', 'ក.៣.១៣', NULL, NULL, '2016-12-08 01:54:59', '2016-12-09 04:26:53', NULL),
(2, 6, 'អគ្គនាយកដ្ឋានតរាគារជាតិ', 'ក្រសូងសេដ្ឋកិច្ចនិងហិរញ្ញវត្ថុ', 'ប្រធានការិយាល័យ', '2014-02-03 00:00:00', '2014-06-06 00:00:00', 'Public', 'ក.៣.១៣', NULL, NULL, '2016-12-08 01:54:59', '2016-12-08 02:39:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `punishments`
--

DROP TABLE IF EXISTS `punishments`;
CREATE TABLE IF NOT EXISTS `punishments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pun_emp_id` int(10) UNSIGNED NOT NULL,
  `pun_doc_number` int(11) DEFAULT NULL,
  `pun_published_date` datetime DEFAULT NULL,
  `pun_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pun_description` longtext COLLATE utf8_unicode_ci,
  `pun_punish_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pun_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pun_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pun_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `punishments_pun_emp_id_foreign` (`pun_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `punishments`
--

INSERT INTO `punishments` (`id`, `pun_emp_id`, `pun_doc_number`, `pun_published_date`, `pun_department`, `pun_description`, `pun_punish_type`, `pun_others`, `pun_custom1`, `pun_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 21254, '2013-02-02 00:00:00', 'Good', 'Thanks.', 'បានកែប្រែ', NULL, NULL, NULL, '2016-12-08 08:02:01', '2016-12-08 08:19:55', NULL),
(2, 6, 215455, '2016-12-07 00:00:00', 'Fine', 'Yeah', 'កែប្រែ', NULL, NULL, NULL, '2016-12-08 08:02:01', '2016-12-08 08:19:55', NULL);

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
-- Table structure for table `short_courses`
--

DROP TABLE IF EXISTS `short_courses`;
CREATE TABLE IF NOT EXISTS `short_courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `courses_emp_id` int(10) UNSIGNED NOT NULL,
  `courses_level_edu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses_school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses_degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses_start_date` datetime DEFAULT NULL,
  `courses_end_date` datetime DEFAULT NULL,
  `courses_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `short_courses_courses_emp_id_foreign` (`courses_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `short_courses`
--

INSERT INTO `short_courses` (`id`, `courses_emp_id`, `courses_level_edu`, `courses_school`, `courses_country`, `courses_degree`, `courses_start_date`, `courses_end_date`, `courses_others`, `courses_custom1`, `courses_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'A', 'B', 'C', 'D', '2016-10-07 15:54:51', '2017-01-06 15:54:51', NULL, NULL, NULL, '2016-12-09 09:09:44', '2016-12-14 08:54:51', NULL),
(2, 6, 'E', 'F', 'G', 'H', '2016-11-18 15:54:51', '2016-12-21 15:54:51', NULL, NULL, NULL, '2016-12-09 09:09:44', '2016-12-14 08:54:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

DROP TABLE IF EXISTS `siblings`;
CREATE TABLE IF NOT EXISTS `siblings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sib_emp_id` int(10) UNSIGNED NOT NULL,
  `sib_job_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_gender` enum('MALE','FEMALE','OTHERS') COLLATE utf8_unicode_ci NOT NULL,
  `sib_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_dob` datetime DEFAULT NULL,
  `sib_place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sib_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `siblings_sib_emp_id_foreign` (`sib_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siblings`
--

INSERT INTO `siblings` (`id`, `sib_emp_id`, `sib_job_department`, `sib_full_name`, `sib_fn_en`, `sib_gender`, `sib_nationality`, `sib_ethnic`, `sib_dob`, `sib_place_of_birth`, `sib_address`, `sib_job`, `sib_others`, `sib_custom1`, `sib_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, NULL, 'ចិន ហូលីសិលា', 'CHEN HOLYSELA', 'FEMALE', NULL, NULL, '1977-08-18 00:00:00', NULL, NULL, 'បុគ្គលិកក្រុនហ៊ុនឯកជន', NULL, NULL, NULL, '2016-12-09 05:00:20', '2016-12-09 05:01:35', NULL),
(2, 6, NULL, 'ចិន វិរៈបូរ៉ា', 'CHEN VIRAKBORA', 'MALE', NULL, NULL, '1979-08-18 00:00:00', NULL, NULL, 'មន្រ្តីរាជការ​ (អគ្គនាយកដ្ឋានគយ និង រដ្ឋាករ)', NULL, NULL, NULL, '2016-12-09 05:00:20', '2016-12-09 05:00:20', NULL),
(3, 6, NULL, 'ចិន វិរៈបុត្ថា', 'CHEN VIRAKBOTHA', 'MALE', NULL, NULL, '1981-03-18 00:00:00', NULL, NULL, 'មន្ត្រីរាជការ (ស្លាប់)', NULL, NULL, NULL, '2016-12-09 05:00:20', '2016-12-09 05:00:20', NULL),
(4, 6, NULL, 'ចិន ហូលីធីតា', 'CHEN HOLYTHYDA', 'FEMALE', NULL, NULL, '1983-01-11 00:00:00', NULL, NULL, 'មេផ្ទះ', NULL, NULL, NULL, '2016-12-09 05:00:20', '2016-12-09 05:00:20', NULL),
(5, 6, NULL, 'ចិន ចន្ទក្ខណា', 'CHEN CHANLAKNA', 'FEMALE', NULL, NULL, '1987-07-27 00:00:00', NULL, NULL, 'មន្ត្រីរាជការ (មន្ទីរពេទ្យព្រះអង្គឌួង)', NULL, NULL, NULL, '2016-12-09 05:00:20', '2016-12-09 05:00:20', NULL);

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
-- Table structure for table `spouses`
--

DROP TABLE IF EXISTS `spouses`;
CREATE TABLE IF NOT EXISTS `spouses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sp_emp_id` int(10) UNSIGNED NOT NULL,
  `sp_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_ethnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_dob` datetime DEFAULT NULL COMMENT 'Date of birth',
  `sp_pob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Place of birth',
  `sp_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_hand_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mobile phone that they carry on everyday',
  `sp_work_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Phone at office',
  `sp_home_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Phone at home that can contact to their relative',
  `sp_subsidy` tinyint(4) DEFAULT NULL,
  `sp_status` enum('l','d') COLLATE utf8_unicode_ci NOT NULL,
  `sp_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `spouses_sp_emp_id_foreign` (`sp_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spouses`
--

INSERT INTO `spouses` (`id`, `sp_emp_id`, `sp_department`, `sp_full_name`, `sp_fn_en`, `sp_nationality`, `sp_ethnic`, `sp_dob`, `sp_pob`, `sp_address`, `sp_job`, `sp_hand_phone`, `sp_work_phone`, `sp_home_phone`, `sp_subsidy`, `sp_status`, `sp_others`, `sp_custom1`, `sp_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'ផ្ទះ', 'នួន កែរកនិកា', 'NOUN KEOKAKNIKA', 'ខ្មែរ', 'ខ្មែរ', '2016-11-27 00:00:00', 'ផ្ទះលេខ៥៦អឹ០ ផ្លួវលេខ៩៥ សង្កាត់បឹងកេងកងទី៣ ខណ្ឌចំការមន រាជធានីភ្នំពេញ។', NULL, 'មេផ្ទះ', '010212353', '012425411', '032502515', 1, 'l', NULL, NULL, NULL, '2016-12-05 11:00:13', '2016-12-06 03:25:04', NULL);

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
  `id_notice_emp` int(11) UNSIGNED DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fn_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('m','f','o') COLLATE utf8_unicode_ci NOT NULL COMMENT 'm=>male, f->female, o=>others',
  `marital_status` enum('s','m','d','w') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 's=>single, m=>married, d->divorcee, w=>widow',
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `emp_id`, `department_code`, `id_notice_emp`, `full_name`, `fn_en`, `gender`, `marital_status`, `nationality`, `ethnic`, `place_of_birth`, `current_address`, `dob`, `email1`, `email2`, `cover_photo`, `hand_phone`, `work_phone`, `home_phone`, `id_card`, `id_card_expired`, `passport`, `passport_expired_date`, `others`, `custom1`, `custom2`, `active`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'System Admin', 'system@admin.com', '$2y$10$li.35UsVs2nG2Bbh3cU0Suos1x63Z/rXStufT9H99UVFDWstiBLe2', 1, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default1.png', '070375780', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YZd8QdrpAR67d8E4QrZK4fJX2fg6MqOWOefDIi28y928KGMUobqhi7tpWVG2', '2016-11-23 02:01:09', '2016-12-12 01:14:31', NULL),
(2, 'Management', 'management@treasury.gov.kh', '$2y$10$ssWuiL6PG3eRrVgh4dkBYerTnBkndJKCe6GEOkToHuM83Z8yuA7Ly', 2, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default2.png', '070375781', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2016-11-23 02:15:11', '2016-11-23 02:15:11', NULL),
(3, 'Admin Officer', 'admin.officer@treasury.gov.kh', '$2y$10$Z8SPhzUi4VmKm/NBDD8ZEupfXRtklvidIgH6Utc7/jEz6otLdwV4K', 3, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default3.png', '070375782', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ZZVxH8suC3fgBQcPQNoeQfSjcrDEhlzyZeQUd1VN9qTtNzgtzu9UjW2zc3Qv', '2016-11-23 02:16:10', '2016-11-23 20:16:39', NULL),
(4, 'Officer', 'officer@treasury.gov.kh', '$2y$10$OyfBXCws2dFRpUTMmjIqJ.9XE0M7OTbkA0l7vZPgCc/ZePqq/UAz6', 4, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default4.png', '070375783', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2016-11-23 02:16:37', '2016-11-23 02:16:37', NULL),
(5, 'Chen SambatVoha', 'sambatvoha.chen@gmail.com', '$2y$10$2pxdid.lz1hR./InTiwPiOSFwyGPHbRLa99Dcchnk9E.C7WHGJkRm', 5, NULL, NULL, NULL, NULL, 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', NULL, '2016-11-23', NULL, NULL, 'default5.png', '070375784', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'LHHVlB2gWVgnqWuQrVIxV5oUysdbN2nYVxsac9WtdIozpZb170Tou6IwrRXx', '2016-11-23 20:16:35', '2016-12-01 01:58:27', NULL),
(6, NULL, 'chen_sambatvoha@treasury.gov.kh', NULL, 1851200058, 3, 12545552, 'ចិន សម្បត្តិវោហា', 'Chen Sambatvoha', 'm', 'm', 'ខ្មែរ', 'ខ្មែរ', 'សង្កាតផ្សារចាស់​ ខណ្ឌដូនពេញ រាជធានីភ្នំពេញ។', 'ផ្ទះលេខ៥៦អឹ០ ផ្លួវលេខ៩៥ សង្កាត់បឹងកេងកងទី៣ ខណ្ឌចំការមន រាជធានីភ្នំពេញ។', '1998-12-14 00:00:00', NULL, NULL, NULL, '090987773', '010215445', '023565844', 10479635, '2026-12-01 00:00:00', '', '1970-12-01 00:00:00', '', NULL, NULL, 0, NULL, '2016-11-28 11:02:24', '2016-12-14 08:54:51', NULL),
(7, NULL, 'chantouch@email.com', NULL, 14, 12, 23, 'សេក ចាន់ទូច', 'Chantouch', 'm', 'm', 'ខ្មែរ', 'ខ្មែរ', 'Kampong Chnang', 'Phnom Penh', '1994-04-25 00:00:00', NULL, NULL, NULL, '34543543', '', '', 3345, '2016-11-30 00:00:00', '2343556', '2016-11-30 00:00:00', '', NULL, NULL, 0, NULL, '2016-11-30 04:28:52', '2016-12-13 10:11:11', NULL),
(25, NULL, 'sokhak@gmail.com', NULL, 34534534, 56, 57556, 'Heng Sokhak', 'ere', 'f', 'm', 'khmer', 'khmer', 'sf', 'sdf', '2016-12-07 00:00:00', NULL, NULL, NULL, '345435', '3453', '3453', 3453, '2016-12-06 00:00:00', '', '1970-01-01 00:00:00', NULL, NULL, NULL, 0, NULL, '2016-12-12 09:32:58', '2016-12-12 09:32:58', NULL),
(26, NULL, 'siv.savoern@gmail.com', NULL, 215555588, 25, 365585, 'ស៊ីវ សាវឿន', 'Siv Savoern', 'm', 's', 'ខ្មែរ', 'ខ្មែរ', 'ភ្នំពេញ', 'ភ្នំពេញ', '1995-02-25 00:00:00', NULL, NULL, NULL, '010254654', '', '', 20125254, '2020-02-12 00:00:00', '', '1970-01-01 00:00:00', NULL, NULL, NULL, 0, NULL, '2016-12-13 05:01:41', '2016-12-13 05:01:41', NULL),
(27, NULL, 'kimheng@gmail.com', NULL, 20211541, 2, 2541, 'គីម ខេង', 'Kim Keng', 'f', 's', 'ខ្មែរ', 'ខ្មែរ', 'សថសថ', 'សដថស', '1990-06-30 00:00:00', NULL, NULL, NULL, '2012525556', '25215552', '54255', 232565656, '2020-06-23 00:00:00', '', '1970-01-01 00:00:00', NULL, NULL, NULL, 0, NULL, '2016-12-13 10:23:28', '2016-12-13 10:23:28', NULL),
(28, NULL, 'ab@gmail.com', NULL, 343, 25254, 34, 'A B', 'VB ', 'f', 'w', 'ខ្មែរ', 'ខ្មែរ', 'sdfs', 'sdfs', '2001-06-09 00:00:00', NULL, NULL, NULL, '021255548', '', '', 254585525, '2020-09-06 00:00:00', '', '1970-01-01 00:00:00', NULL, NULL, NULL, 0, NULL, '2016-12-14 02:06:59', '2016-12-14 07:58:26', NULL);

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
  `whp_subsidy` tinyint(4) DEFAULT NULL,
  `whp_status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `whp_others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_custom1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whp_custom2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wife_husband_parents_whp_emp_id_foreign` (`whp_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wife_husband_parents`
--

INSERT INTO `wife_husband_parents` (`id`, `whp_emp_id`, `whp_department`, `whp_full_name`, `whp_fn_en`, `whp_type`, `whp_nationality`, `whp_ethnic`, `whp_dob`, `whp_place_of_birth`, `whp_address`, `whp_job`, `whp_subsidy`, `whp_status`, `whp_others`, `whp_custom1`, `whp_custom2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'Mother', 'Mother', 'sldk', 'FATHER', 'Khmer', 'Khmer', '2016-11-28 00:00:00', NULL, 'Phnom Pwnh', 'sdk', NULL, '1', NULL, NULL, NULL, '2016-12-03 03:20:45', '2016-12-05 02:24:51', NULL),
(2, 6, 'Mother', 'Mother', 'sldk', 'MOTHER', 'Khmer', 'Khmer', '2016-11-28 00:00:00', NULL, 'Phnom Pwnh', 'sdk', NULL, '1', NULL, NULL, NULL, '2016-12-03 03:20:45', '2016-12-05 02:14:19', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

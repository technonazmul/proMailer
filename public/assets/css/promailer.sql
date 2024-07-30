-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2024 at 02:19 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promailer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_sender_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `company_id`, `phone`, `email`, `domain`, `address`, `mail_sender_name`, `smtp_username`, `smtp_port`, `smtp_host`, `smtp_password`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Surrey DJ', 'surrey_dj', '+44 1483 362031', 'office@surreydj.co.uk', 'surreydj.co.uk', NULL, 'Sandy Walton', 'office@surreydj.co.uk', '465', 'mail.surreydj.co.uk', 'Opm8akZ2hyjV2$gsL4!wYae3Gdgov9xt', '1', NULL, '2024-06-28 12:05:02', '2024-06-29 07:55:56'),
(3, 'Bespoke Wedding DJs - Gloucestershire', 'bespoke_wedding_djs_gloucestershire', '+44 1452 687520', 'office@bespokeweddingdjs.co.uk', 'www.bespokeweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@bespokeweddingdjs.co.uk', '25', 'mail.bespokeweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-06 23:08:24', '2024-07-06 23:08:24'),
(4, 'Buckinghamshire Wedding DJs', 'buckinghamshire_wedding_djs', '+441296847044', 'office@buckinghamshireweddingdjs.co.uk', 'buckinghamshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@buckinghamshireweddingdjs.co.uk', '25', 'mail.buckinghamshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:45:34', '2024-07-07 00:45:34'),
(5, 'Buckinghamshire DJs', 'buckinghamshire_djs', '+441296847044', 'office@buckinghamshiredjs.uk', 'buckinghamshiredjs.uk', NULL, 'Sandy Walton', 'office@buckinghamshiredjs.uk', '25', 'mail.buckinghamshiredjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:47:16', '2024-07-07 00:47:16'),
(6, 'Bedfordshire DJs', 'bedfordshire_djs', '+441234943061', 'office@bedfordshiredjs.uk', 'bedfordshiredjs.uk', NULL, 'Sandy Walton', 'office@bedfordshiredjs.uk', '25', 'mail.bedfordshiredjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:49:30', '2024-07-07 00:49:30'),
(7, 'Bedfordshire Wedding DJs', 'bedfordshire_wedding_djs', '+441234943061', 'office@bedfordshireweddingdjs.co.uk', 'bedfordshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@bedfordshireweddingdjs.co.uk', '25', 'mail.bedfordshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:50:21', '2024-07-07 00:50:21'),
(8, 'Blush Wedding DJs', 'blush_wedding_djs', '+44 1245 921079', 'office@blushweddingdjs.co.uk', 'blushweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@blushweddingdjs.co.uk', '25', 'mail.blushweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:51:11', '2024-07-07 00:51:11'),
(9, 'Berkshire Wedding DJs', 'berkshire_wedding_djs', '+441183701900', 'office@berkshireweddingdjs.co.uk', 'berkshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@berkshireweddingdjs.co.uk', '25', 'mail.berkshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:51:59', '2024-07-07 00:51:59'),
(10, 'Berkshire DJs', 'berkshire_djs', '0118 3701 900', 'office@berkshire-djs.co.uk', 'berkshire-djs.co.uk', NULL, 'Sandy Walton', 'office@berkshire-djs.co.uk', '25', 'mail.berkshire-djs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:52:52', '2024-07-07 00:52:52'),
(11, 'Cornwall DJs', 'cornwall_djs', '+44 1637 808492', 'office@cornwalldjs.uk', 'cornwalldjs.uk', NULL, 'Sandy Walton', 'office@cornwalldjs.uk', '25', 'mail.cornwalldjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:54:16', '2024-07-07 00:54:16'),
(12, 'Cumbria Wedding DJs', 'cumbria_wedding_djs', '+44 1228 585045', 'office@cumbriaweddingdjs.uk', 'cumbriaweddingdjs.uk', NULL, 'Sandy Walton', 'office@cumbriaweddingdjs.uk', '25', 'mail.cumbriaweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:55:36', '2024-07-07 00:55:36'),
(13, 'Cambridgeshire DJs', 'cambridgeshire_djs', '+44 1223 608091', 'office@cambridgeshiredjs.uk', 'cambridgeshiredjs.uk', NULL, 'Sandy Walton', 'office@cambridgeshiredjs.uk', '25', 'mail.cambridgeshiredjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 00:56:17', '2024-07-07 00:56:17'),
(14, 'Cambridgeshire Wedding DJs', 'cambridgeshire_wedding_djs', '+44 1223 608091', 'office@cambridgeshireweddingdjs.uk', 'cambridgeshireweddingdjs.uk', NULL, 'Sandy Walton', 'office@cambridgeshireweddingdjs.uk', '25', 'mail.cambridgeshireweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 03:40:45', '2024-07-07 03:40:45'),
(15, 'DA DJs | Lancashire', 'da_djs_lancashire', '+44 1253 335029', 'office@dadjs.co.uk', 'dadjs.co.uk', NULL, 'Sandy Walton', 'office@dadjs.co.uk', '25', 'mail.dadjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 03:42:50', '2024-07-07 03:42:50'),
(16, 'Devon Wedding DJs', 'devon_wedding_djs', '+44 1392 537381', 'office@devonweddingdjs.uk', 'devonweddingdjs.uk', NULL, 'Sandy Walton', 'office@devonweddingdjs.uk', '25', 'mail.devonweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 03:43:45', '2024-07-07 03:43:45'),
(17, 'Dorset Wedding DJs', 'dorset_wedding_djs', '+44 1305 234671', 'office@dorsetweddingdjs.uk', 'dorsetweddingdjs.uk', NULL, 'Sandy Walton', 'office@dorsetweddingdjs.uk', '25', 'mail.dorsetweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 03:45:02', '2024-07-07 03:45:02'),
(18, 'Exclusive Wedding DJs Warwickshire', 'exclusive_wedding_djs_warwickshire', '+44 1788 487079', 'office@exclusiveweddingdjs.co.uk', 'exclusiveweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@exclusiveweddingdjs.co.uk', '25', 'mail.exclusiveweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 03:46:12', '2024-07-07 03:46:12'),
(19, 'Essential Wedding DJs | Lancashire', 'essential_wedding_djs_lancashire', '+44 1253 335029', 'office@essentialweddingdjs.co.uk', 'essentialweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@essentialweddingdjs.co.uk', '25', 'mail.essentialweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 03:47:30', '2024-07-07 03:47:30'),
(20, 'Herefordshire Wedding DJs', 'herefordshire_wedding_djs', '+44 1432 804846', 'office@herefordshireweddingdjs.uk', 'herefordshireweddingdjs.uk', NULL, 'Sandy Walton', 'office@herefordshireweddingdjs.uk', '25', 'mail.herefordshireweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:09:08', '2024-07-07 04:09:08'),
(21, 'Herefordshire DJs', 'herefordshire_djs', '01432 804846', 'office@herefordshiredjs.uk', 'herefordshiredjs.uk', NULL, 'Sandy Walton', 'office@herefordshiredjs.uk', '25', 'mail.herefordshiredjs.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:10:23', '2024-07-07 04:10:23'),
(22, 'Hampshire DJs', 'hampshire_djs', '+44 23 8235 7671', 'office@hampshire-djs.co.uk', 'hampshire-djs.co.uk', NULL, 'Sandy Walton', 'office@hampshire-djs.co.uk', '25', 'mail.hampshire-djs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:11:35', '2024-07-07 04:11:35'),
(23, 'Hampshire Wedding DJs', 'hampshire_wedding_djs', '+44 23 8235 7671', 'office@hampshireweddingdjs.com', 'hampshireweddingdjs.com', NULL, 'Sandy Walton', 'office@hampshireweddingdjs.com', '25', 'mail.hampshireweddingdjs.com', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:12:15', '2024-07-07 04:12:15'),
(24, 'Kent Wedding DJ', 'kent_wedding_dj', '+44 1634 959130', 'office@kentweddingdj.uk', 'kentweddingdj.uk', NULL, 'Sandy Walton', 'office@kentweddingdj.uk', '25', 'mail.kentweddingdj.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:15:59', '2024-07-07 04:15:59'),
(25, 'Lavish Wedding DJs - Hertfordshire', 'lavish_wedding_djs_hertfordshire', '+44 1707 682116', 'office@lavishweddingdjs.co.uk', 'lavishweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@lavishweddingdjs.co.uk', '25', 'mail.lavishweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:17:06', '2024-07-07 04:18:02'),
(26, 'Leicestershire Wedding DJs', 'leicestershire_wedding_djs', '+44 116 406 2144', 'office@leicestershireweddingdjs.co.uk', 'leicestershireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@leicestershireweddingdjs.co.uk', '25', 'mail.leicestershireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:18:59', '2024-07-07 04:18:59'),
(27, 'Leicestershire DJs', 'leicestershire_djs', '+44 116 406 2144', 'office@leicestershiredjs.co.uk', 'leicestershiredjs.co.uk', NULL, 'Sandy Walton', 'office@leicestershiredjs.co.uk', '25', 'mail.leicestershiredjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:19:43', '2024-07-07 04:19:43'),
(28, 'Lincolnshire Wedding DJs', 'lincolnshire_wedding_djs', '+44 1522 440351', 'office@lincolnshireweddingdjs.uk', 'lincolnshireweddingdjs.uk', NULL, 'Sandy Walton', 'office@lincolnshireweddingdjs.uk', '25', 'mail.lincolnshireweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:20:39', '2024-07-07 04:20:39'),
(29, 'Lincolnshire DJs', 'lincolnshire_djs', '+44 1522 440351', 'office@lincolnshire-djs.co.uk', 'lincolnshire-djs.co.uk', NULL, 'Sandy Walton', 'office@lincolnshire-djs.co.uk', '25', 'mail.lincolnshire-djs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:23:12', '2024-07-07 04:23:12'),
(30, 'London DJ', 'london_dj', '+44 20 3473 3316', 'office@london-dj.co.uk', 'london-dj.co.uk', NULL, 'Sandy Walton', 'office@london-dj.co.uk', '25', 'mail.london-dj.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:36:16', '2024-07-07 04:36:16'),
(31, 'London Wedding DJs', 'london_wedding_djs', '+44 20 3473 3316', 'office@londonweddingdjs.co.uk', 'londonweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@londonweddingdjs.co.uk', '25', 'mail.londonweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:37:08', '2024-07-07 04:37:08'),
(32, 'Lush Wedding DJs - Surrey', 'lush_wedding_djs_surrey', '01483 362031', 'office@lushweddingdjs.co.uk', 'lushweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@lushweddingdjs.co.uk', '25', 'mail.lushweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:38:13', '2024-07-07 04:38:13'),
(33, 'Modern Wedding DJs - Cornwall', 'modern_wedding_djs_cornwall', '+44 1637 808492', 'office@modernweddingdjs.co.uk', 'modernweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@modernweddingdjs.co.uk', '25', 'mail.modernweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:41:07', '2024-07-07 04:41:07'),
(34, 'Nottinghamshire Wedding DJs', 'nottinghamshire_wedding_djs', '+44 115 697 5713', 'office@nottinghamshireweddingdjs.co.uk', 'nottinghamshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@nottinghamshireweddingdjs.co.uk', '25', 'mail.nottinghamshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:41:56', '2024-07-07 04:42:23'),
(35, 'Northumberland DJs', 'northumberland_djs', '+44 1434 303658', 'office@northumberland-djs.co.uk', 'northumberland-djs.co.uk', NULL, 'Sandy Walton', 'office@northumberland-djs.co.uk', '25', 'mail.northumberland-djs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:43:34', '2024-07-07 04:43:34'),
(36, 'Northumberland Wedding DJs', 'northumberland_wedding_djs', '+44 1434 303658', 'office@northumberlandweddingdjs.uk', 'northumberlandweddingdjs.uk', NULL, 'Sandy Walton', 'office@northumberlandweddingdjs.uk', '25', 'mail.northumberlandweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:44:20', '2024-07-07 04:44:20'),
(37, 'Northamptonshire Wedding DJs', 'northamptonshire_wedding_djs', '+44 1604 386025', 'office@northamptonshireweddingdjs.co.uk', 'northamptonshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@northamptonshireweddingdjs.co.uk', '25', 'mail.northamptonshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:45:11', '2024-07-07 04:45:11'),
(38, 'Northamptonshire DJs', 'northamptonshire_djs', '+44 1604 386025', 'office@northamptonshire-djs.co.uk', 'northamptonshire-djs.co.uk', NULL, 'Sandy Walton', 'office@northamptonshire-djs.co.uk', '25', 'mail.northamptonshire-djs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:46:02', '2024-07-07 04:46:02'),
(39, 'Norfolk Wedding DJs', 'norfolk_wedding_djs', '+44 1603 380112', 'office@norfolkweddingdjs.com', 'norfolkweddingdjs.com', NULL, 'Sandy Walton', 'office@norfolkweddingdjs.com', '25', 'mail.norfolkweddingdjs.com', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:46:39', '2024-07-07 04:46:39'),
(40, 'Norfolk DJ', 'norfolk_dj', '+44 1603 380112', 'office@norfolk-dj.uk', 'norfolk-dj.uk', NULL, 'Sandy Walton', 'office@norfolk-dj.uk', '25', 'mail.norfolk-dj.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:47:19', '2024-07-07 04:47:19'),
(41, 'Oxfordshire DJs', 'oxfordshire_djs', '+44 1865 950706', 'office@oxfordshiredjs.co.uk', 'oxfordshiredjs.co.uk', NULL, 'Sandy Walton', 'office@oxfordshiredjs.co.uk', '25', 'mail.oxfordshiredjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:47:59', '2024-07-07 04:47:59'),
(42, 'Oxfordshire Wedding DJs', 'oxfordshire_wedding_djs', '+44 1865 950706', 'office@oxfordshireweddingdjs.co.uk', 'oxfordshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@oxfordshireweddingdjs.co.uk', '25', 'mail.oxfordshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:48:34', '2024-07-07 04:48:34'),
(43, 'Point DJs | Devon', 'point_djs_devon', '+44 1392 537381', 'office@pointdjs.co.uk', 'pointdjs.co.uk', NULL, 'Sandy Walton', 'office@pointdjs.co.uk', '25', 'mail.pointdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:50:11', '2024-07-07 04:50:11'),
(44, 'Que DJs | Dorset', 'que_djs_dorset', '+44 1305 234671', 'office@quedjs.co.uk', 'quedjs.co.uk', NULL, 'Sandy Walton', 'office@quedjs.co.uk', '25', 'mail.quedjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:51:54', '2024-07-07 04:51:54'),
(45, 'Rwd DJs Wiltshire', 'rwd_djs_wiltshire', '+44 1249 474490', 'office@rwddjs.co.uk', 'rwddjs.co.uk', NULL, 'Sandy Walton', 'office@rwddjs.co.uk', '25', 'mail.rwddjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:52:46', '2024-07-07 04:52:46'),
(46, 'Staffordshire Wedding DJs', 'staffordshire_wedding_djs', '+44 1543 227910', 'office@staffordshireweddingdjs.co.uk', 'staffordshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@staffordshireweddingdjs.co.uk', '25', 'mail.staffordshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:53:27', '2024-07-07 04:53:27'),
(47, 'Staffordshire DJs', 'staffordshire_djs', '+44 1543 227910', 'office@staffordshiredjs.co.uk', 'staffordshiredjs.co.uk', NULL, 'Sandy Walton', 'office@staffordshiredjs.co.uk', '25', 'mail.staffordshiredjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 04:54:09', '2024-07-07 04:54:09'),
(48, 'Somerset DJs', 'somerset_djs', '+44 1823 219030', 'office@somersetdjs.uk', 'somersetdjs.uk', NULL, 'Sandy Walton', 'office@somersetdjs.uk', '25', 'mail.somersetdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:55:45', '2024-07-07 04:55:45'),
(49, 'Somerset Wedding DJs', 'somerset_wedding_djs', '+44 1823 219030', 'office@somersetweddingdjs.uk', 'somersetweddingdjs.uk', NULL, 'Sandy Walton', 'office@somersetweddingdjs.uk', '25', 'mail.somersetweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:56:52', '2024-07-07 04:56:52'),
(50, 'Source DJs - Hertfordshire', 'source_djs_hertfordshire', '+44 1707 682116', 'office@sourcedjs.co.uk', 'sourcedjs.co.uk', NULL, 'Sandy Walton', 'office@sourcedjs.co.uk', '25', 'mail.sourcedjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:57:58', '2024-07-07 04:57:58'),
(51, 'Suffolk DJs', 'suffolk_djs', '+44 1473 927151', 'office@suffolkdjs.co.uk', 'suffolkdjs.co.uk', NULL, 'Sandy Walton', 'office@suffolkdjs.co.uk', '25', 'mail.suffolkdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:58:39', '2024-07-07 04:58:39'),
(52, 'Suffolk Wedding DJs', 'suffolk_wedding_djs', '+44 1473 927151', 'office@suffolkweddingdjs.uk', 'suffolkweddingdjs.uk', NULL, 'Sandy Walton', 'office@suffolkweddingdjs.uk', '25', 'mail.suffolkweddingdjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 04:59:17', '2024-07-07 04:59:17'),
(53, 'Shropshire DJs', 'shropshire_djs', '+44 1743 295721', 'office@shropshiredjs.uk', 'shropshiredjs.uk', NULL, 'Sandy Walton', 'office@shropshiredjs.uk', '25', 'mail.shropshiredjs.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 05:00:16', '2024-07-07 05:00:16'),
(54, 'Shropshire Wedding DJs', 'shropshire_wedding_djs', '+44 1743 295721', 'office@shropshireweddingdjs.co.uk', 'shropshireweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@shropshireweddingdjs.co.uk', '25', 'mail.shropshireweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 05:00:51', '2024-07-07 05:00:51'),
(55, 'Sussex DJs', 'sussex_djs', '01273 007219', 'office@sussexdjs.co.uk', 'sussexdjs.co.uk', NULL, 'Sandy Walton', 'office@sussexdjs.co.uk', '25', 'mail.sussexdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 05:03:36', '2024-07-07 05:03:36'),
(56, 'True DJs - Nottinghamshire', 'true_djs_nottinghamshire', '+44 115 697 5713', 'office@truedjs.co.uk', 'truedjs.co.uk', NULL, 'Sandy Walton', 'office@truedjs.co.uk', '25', 'mail.truedjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 05:04:23', '2024-07-07 05:04:30'),
(57, 'Union DJs | Kent', 'union_djs_kent', '+44 1634 959130', 'office@uniondjs.co.uk', 'uniondjs.co.uk', NULL, 'Sandy Walton', 'office@uniondjs.co.uk', '25', 'mail.uniondjs.co.uk', 'Surr3y%ShuvoShuvo1%', '1', NULL, '2024-07-07 05:05:17', '2024-07-07 05:05:17'),
(58, 'Unique Wedding DJs | Cheshire', 'unique_wedding_djs_cheshire', '+44 1244 506097', 'office@uniqueweddingdjs.co.uk', 'uniqueweddingdjs.co.uk', NULL, 'Sandy Walton', 'office@uniqueweddingdjs.co.uk', '25', 'mail.uniqueweddingdjs.co.uk', 'Surr3y%ShuvoShuvo1%', '3', NULL, '2024-07-07 05:06:08', '2024-07-07 05:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `company_categories`
--

DROP TABLE IF EXISTS `company_categories`;
CREATE TABLE IF NOT EXISTS `company_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_categories`
--

INSERT INTO `company_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'White Area', '2024-06-26 07:39:59', '2024-06-30 13:06:56'),
(3, 'Blue Area', '2024-06-29 07:53:18', '2024-06-29 07:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes_deslikes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_ids` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `company_id`, `first_name`, `last_name`, `email`, `phone`, `event_type`, `event_type_id`, `event_date`, `venue_address`, `likes_deslikes`, `notes`, `campaign_ids`, `status`, `created_at`, `updated_at`) VALUES
(20, '32', 'Abbey', NULL, 'abbeysanders002@gmail.com', '07377145236', 'Wedding', '1', '16/08/2025', 'Somersbury Barn Cranleigh', 'I like R&B,I don\'t like R&B,I like Dance music,I don\'t like Rock classics,I don\'t like Latest Rock,I like Motown,I don\'t like 60s,I like 70s,I like 80s,I like 90s,I don\'t like 2000s,I don\'t like Garage,I like Cheesy hits,', 'We are looking at having background music from 2:30pm and then a main DJ set to start at 7:30 pm We would also like our DJ to work alongside a band who will do a maximum of a 2-hour slot after dinner about 5:30 pm. We would like some light up letters and any optional extras like a photobooth if you have one :)', NULL, 1, '2024-07-10 10:20:38', '2024-07-10 10:20:38'),
(21, '32', 'Emma', NULL, 'Emmatyrrell2022@hotmail.com', '07403285651', 'Wedding', '1', '09/08/25', 'Tyrrells wood', 'I like R&B, I like R&B,I like Dance music,I like Rock classics,I like Latest Rock,I like Motown,I like 60s,I like 70s,I like 80s,I like 90s,I like 2000s,I like Garage,I like Cheesy hits, ( no super cheese )  FAVE: pop ( no michael jasckson ) 100 people, majority family ', '', NULL, 1, '2024-07-10 10:20:38', '2024-07-10 10:20:38'),
(22, '2', 'Charli Espley', NULL, 'charlotteespley@live.co.uk', '07712443372', '', '16', '13/07/2023', 'Ewhurst, Surrey', 'I like R&B,I like R&B,I like Dance music,I don\'t like Rock classics,I don\'t like Latest Rock,I don\'t like Motown,I don\'t like 60s,I don\'t like 70s,I don\'t like 80s,I don\'t like 90s,I don\'t like 2000s,I don\'t like Garage,I don\'t like Cheesy hits,', '', NULL, 1, '2024-07-10 10:20:38', '2024-07-10 10:20:38'),
(23, '27', 'Layla Grant', NULL, 'laylaxanadu@hotmail.co.uk', '07891745107', 'Children Discos (Years 2-9', '3', '14/07/24', '120a Hartopp Rd, Leicester, LE2 1WR', '', '', NULL, 1, '2024-07-10 10:20:38', '2024-07-10 10:20:38'),
(24, '14', 'Kelly Wolfe', NULL, 'kellywolfe1995@gmail.com', '07375709044', 'Wedding', '1', '16/11/2024', 'Arbury community centre', '', '', NULL, 1, '2024-07-10 10:20:38', '2024-07-11 01:02:11'),
(25, '32', 'Lauren', 'Whiteside', 'lauren@laurenportiaevents.com', '07873134298', 'Corporate Event', '2', '21/08/2024', 'Hampton Court House', 'I like Chart music,I like Dance music,I like Motown,I like 60s,I like 70s,I like 80s,I like 90s,I like 2000s,Maybe like Lots of cheesy hits', 'Hi there I am looking for a DJ with Karaoke services for a wedding reception. It will be from 8pm-12am. They don\'t want to have karaoke the entire time but have short intervals and regular party DJ music. Please can you let me know how it works and how many songs etc,', NULL, 1, '2024-07-10 10:20:38', '2024-07-11 01:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

DROP TABLE IF EXISTS `event_types`;
CREATE TABLE IF NOT EXISTS `event_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `event_types_event_type_id_unique` (`event_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `created_at`, `updated_at`, `name`, `event_type_id`) VALUES
(1, '2024-06-30 12:55:51', '2024-07-11 00:56:14', 'Wedding', 'wedding'),
(2, '2024-06-30 12:56:04', '2024-06-30 13:08:16', 'Corporate Event', 'corporate_event'),
(3, '2024-06-30 13:06:18', '2024-06-30 13:06:18', 'Children Discos (Years 2-9)', 'children_discos_years_2_9'),
(4, '2024-06-30 13:08:40', '2024-06-30 13:08:40', 'Bar Mitzvah', 'bar_mitzvah'),
(5, '2024-06-30 13:09:21', '2024-06-30 13:09:21', '13th Birthday', '13th_birthday'),
(6, '2024-06-30 13:09:25', '2024-06-30 13:09:25', '16th Birthday', '16th_birthday'),
(7, '2024-06-30 13:09:30', '2024-06-30 13:09:30', '18th Birthday', '18th_birthday'),
(8, '2024-06-30 13:09:34', '2024-06-30 13:09:34', '21st Birthday', '21st_birthday'),
(9, '2024-06-30 13:09:39', '2024-06-30 13:09:39', '30th Birthday', '30th_birthday'),
(10, '2024-06-30 13:09:42', '2024-06-30 13:09:42', '40th Birthday', '40th_birthday'),
(11, '2024-06-30 13:09:47', '2024-06-30 13:09:47', '50th Birthday', '50th_birthday'),
(12, '2024-06-30 13:09:51', '2024-06-30 13:09:51', '60th Birthday', '60th_birthday'),
(13, '2024-06-30 13:09:56', '2024-06-30 13:09:56', '70th Birthday', '70th_birthday'),
(14, '2024-06-30 13:10:02', '2024-06-30 13:10:02', '80th Birthday', '80th_birthday'),
(16, '2024-06-30 13:12:55', '2024-06-30 13:12:55', 'Other', 'other'),
(17, '2024-07-25 23:08:47', '2024-07-25 23:08:47', '10 + Year', '10_year');

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
-- Table structure for table `follow_up_mails`
--

DROP TABLE IF EXISTS `follow_up_mails`;
CREATE TABLE IF NOT EXISTS `follow_up_mails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_gap` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_template_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_up_mails`
--

INSERT INTO `follow_up_mails` (`id`, `title`, `time_gap`, `event_type`, `mail_template_id`, `created_at`, `updated_at`) VALUES
(1, '2 weeks after enquiry for wedding event', '14', 'wedding', '6', '2024-07-30 07:40:03', '2024-07-30 08:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_campaigns`
--

DROP TABLE IF EXISTS `mail_campaigns`;
CREATE TABLE IF NOT EXISTS `mail_campaigns` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_gap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_template_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

DROP TABLE IF EXISTS `mail_templates`;
CREATE TABLE IF NOT EXISTS `mail_templates` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `name`, `subject`, `template`, `created_at`, `updated_at`) VALUES
(1, 'PreQuote', '[customer_first_name]\'s DJ Quote', 'Hi [customer_first_name], \r\nIt\'s great to hear from you, I am sure you are very excited about your party.\r\nAs a privately owned company that deeply care about your event we have taken the time to source the absolute best DJs, Mark and Adam have seen hundreds of DJs perform over the last 12 years we have been in business only choosing the best to represent us.  Our DJs know how to create an amazing atmosphere, read the crowd and how to keep all ages completely happy. They also use state of the art equipment as it all adds to the atmosphere on the night. \r\nFor us its all about creating the best night possible for you, your friends and family and can also assure you our DJs are reliable as all our DJs have worked with us for years.\r\nYou will also be very surprised at our rates not only have we choose the best DJs but the DJs that are very reasonably priced as well and also different price options to cater to different budgets.\r\nAdam will try and call to discuss as every DJ does a different style it is important to ensure the DJ is best suited to what you are looking for, we can also then send you the videos or audios of the particular DJs that best suit your event, we do also have a number of price ranges for the different levels of DJs and equipment so they can explain the differences over a quick 5 minute telephone call.\r\nDid you also see the videos of our DJs on our website by the way?\r\nWe have a great deal of videos which are not on our website as well where you can hear the audios of the DJs sets, we can also send these videos after determining the style you are looking for. \r\n\r\n[admin_name]\r\n[company_name]\r\n[company_phone]\r\n[company_mail]', '2024-07-22 04:08:19', '2024-07-25 18:19:37'),
(2, 'PreQuoteWedding', '[customer_first_name]\'s Wedding DJ', 'Hi [customer_first_name],\r\nCongratulation for you forthcoming wedding,\r\nWe\'ll get back to you asap.\r\nThanks and Regards\r\n[admin_name]\r\n[company_name]\r\n[company_phone]\r\n[company_mail]', '2024-07-22 04:11:18', '2024-07-25 18:45:56'),
(3, '18th Birthday White Area', '[customer_first_name]\'s DJ Quote - 18th Birthday', 'Hi [customer_first_name], \r\nWe totally understand how important your 18th Birthday is and I can assure you that our top quality service will match your expectations.\r\nOver the last 12 years we have been in business we have built a team of the absolute best DJs and take strict measures to ensure they are the best. Mark and Adam will always see DJs perform live before they bring them on board with us so we can 100% guarantee outstanding quality along with 100% reliability as all our DJs have worked for us for years.\r\nWe will provide a young and energetic DJ that can provide a club like experience with all your favourites. If its a mixture of both our DJs get the balance just right for both the 18 year olds and family members.\r\nYou will also be very surprised at our rates not only have we managed to source the best DJs but at very reasonable rates (based on 4.5 hours):\r\nOur gold level DJs are: £340 (Possible 10 to 20% off for a limited period only) These DJs are the absolute best in the industury and are the top 10% of DJs (on average 1 in 10 DJs we see get though to meet these high standards) they also use the highest standard of equipment. \r\nSilver level DJs: £270  Even at this lower cost, as mentioned our DJs have worked with us for years and tested on performance you can always be assured your DJ will be to a high standard, experienced, well equipped, friendly and professional which is a list of the few attributes we make sure all our DJs have. These DJs are in the top 20% in the industury (on average 1 in 5 DJs get through to meet these standards) \r\nBronze level DJs: £200 These DJ’s are still fantastic for the rate and are still great at getting a crowd on the dance floor, they tend to use slightly less equipment so are best suited for small venues and house parties. (We only have limited DJs at this rate)', '2024-07-25 18:21:33', '2024-07-25 18:21:33'),
(4, '18th Birthday Blue Area', '[customer_first_name]\'s DJ Quote - 18th Birthday', 'Hi [customer_first_name], \r\nWe totally understand how important your 18th Birthday is and I can assure you that our top quality service will match your expectations.\r\nOver the last 12 years we have been in business we have built a team of the absolute best DJs and take strict measures to ensure they are the best. Mark and Adam  always see DJs perform live before we bring them on board with us so we can 100% guarantee outstanding quality along with 100% reliability as all our DJs have worked for us for years.\r\nCan I ask if your party is more for friends or a mixture of both friends and family?\r\nIf its more for friends we will provide a young and energetic DJ that can provide a club like experience with all your favourites. If its a mixture of both our DJs get the balance just right for both the 18 year olds and family members.\r\nYou will also be very surprised at our rates (based on 4.5 hours):\r\nOur gold level DJs are: £320 (£256 with 20% discount for a limited period only) These DJs are the absolute best in the industury and are the top 10% of DJs (on average 1 in 10 DJs we see get though to meet these high standards) they also use the highest standard of equipment. \r\nSilver level DJs:£240  Even at this lower cost, as mentioned our DJs have worked with us for years and tested on performance you can always be assured your DJ will be to a high standard, experienced, well equipped, friendly and professional which is a list of the few attributes we make sure all our DJs have. These DJs are in the top 20% in the industury (on average 1 in 5 DJs get through to meet these standards) \r\nBronze level DJs: £160 These DJ’s are still fantastic for the rate and are still great at getting a crowd on the dance floor, they tend to use slightly less equipment so are best suited for small venues and house parties. (We only have limited DJs at this rate)', '2024-07-25 18:22:13', '2024-07-25 18:22:13'),
(5, 'white10 +', '[customer_first_name]\'s DJ Quote', 'Hi [customer_first_name], \r\nThank you showing an interest in our service, \r\nJust to let you know we go the extra mile to make sure our parties are the best around. Our DJs are fun, friendly and full of energy! They provide a 100% cool disco, they can simply play music, provide interaction and encouragement or can even include a combination of games and competitions that best suit the age of the kids. \r\nOver the last 12 years we have been in business we have built a team of the absolute best DJs and take strict measures to ensure they are the best. Mark and Adam will always see DJs perform live before they bring them on board with us so we can 100% guarantee outstanding quality along with reliability as all our DJs have worked for us for years.\r\nWhat also makes our DJs different from the rest is that they aren’t just DJs that play music alone they are entertainers and some are professional dancers too, the DJs that are professional dancers can demonstrate their awesome dance moves with the kids and play party games for non-stop fun! They also have all the latest music that all the kids like and you can also provide your child’s favourite songs for them to play on the day.\r\nFor a DJ booking (2 hours):\r\nOur silver level DJs are: £250 (£200 with 20% off for a limited period only) These DJs are the absolute best in the industury and are the top 10% of DJs (on average 1 in 10 DJs we see get though to meet these high standards) \r\nBronze level DJs: £180 These DJ’s are still great for the rate and will still provide party games and interaction. (We only have limited DJs at this rate) \r\nFridays and Saturdays after 5pm are peak times:\r\nGold level DJs: £300  (£240 with 20% off for a limited period only)\r\nDJs that aren’t part of our main team: £220', '2024-07-25 18:23:02', '2024-07-25 18:23:02'),
(6, '2 weeks after followup wedding', '[customer_first_name]’s Wedding', 'Hi [customer_first_name],\r\n\r\nI hope you\'re doing well.\r\n\r\nI just wanted to see your thoughts on everything so far?\r\n\r\nWe are very excited to bring your evening to life!\r\n\r\nIf you have any questions or need further details, feel free to get in touch. \r\n\r\nI am here to help.', '2024-07-30 05:35:18', '2024-07-30 05:35:18'),
(7, '4 weeks after enquiry wedding', 'Stunning lighting for your wedding.', 'Hi [customer_first_name],\r\n\r\nI hope you are having a nice day so far,\r\n\r\nJust to let you know we have some options to make your event truly spectacular.\r\n\r\nWe have a special offer on our effects lighting for the next two days so if you would like to include these let us know?', '2024-07-30 05:36:01', '2024-07-30 05:36:01'),
(8, '360 photobooths 40% discount wedding', '360 photobooths 40% discount', 'Hi [customer_first_name], \r\n\r\nI hope you are having a fantastic day and party planning is going well,\r\n\r\nJust to let you know we are offering 40% discount for a limited time for our 360 photobooths.\r\n\r\nIf you are interested feel free to get in touch.\r\n\r\nYou can find a video here to see what a 360 photobooth is:\r\nhttps://drive.google.com/file/d/1BiSML1xQNDpYZyHMCnRO1uk6_gZg06kd/view?usp=sharing', '2024-07-30 05:41:20', '2024-07-30 05:41:20'),
(9, '50% off Up Lighting Wedding', '50% off Up Lighting', 'Hi [customer_first_name],\r\n\r\nHow is wedding planning going?\r\n\r\nWe are currently offering 50% discount on our up lighting for the next two days, if you would like up lighting for your wedding feel free to let me know?\r\n\r\nYou can find a up lighting demo video it takes a little bit of time on this video to see the before and after to see the effect but its well worth the wait.\r\n\r\nhttps://streamable.com/g9d3s\r\n\r\nOur up lighting is subject to availability.', '2024-07-30 05:42:02', '2024-07-30 05:42:02'),
(10, '2 weeks after follow up other events', '[customer_first_name]’s Party', 'Hi [customer_first_name],\r\n\r\nI hope you\'re doing well.\r\n\r\nI just wanted to see your thoughts on everything so far?\r\n\r\nWe are very excited to bring your evening to life!\r\n\r\nIf you have any questions or need further details, feel free to get in touch. \r\n\r\nI am here to help.', '2024-07-30 07:35:46', '2024-07-30 07:39:20'),
(11, '4 weeks after enquiry other events', 'Transform your venue with out effects lighting', 'Hi [customer_first_name],\r\n\r\nI hope you are having a nice day so far,\r\n\r\nJust to let you know we have some options to make your event truly spectacular.\r\n\r\nWe have a special offer on our effects lighting for the next two days so if you would like to include these let us know?', '2024-07-30 07:36:23', '2024-07-30 07:36:23'),
(12, '360 photobooths 40% discount other events', '360 photobooths 40% discount', 'Hi [customer_first_name], \r\n\r\nI hope you are having a fantastic day and party planning is going well,\r\n\r\nJust to let you know we are offering 40% discount for a limited time for our 360 photobooths.\r\n\r\nIf you are interested feel free to get in touch.\r\n\r\nYou can find a video here to see what a 360 photobooth is:\r\nhttps://drive.google.com/file/d/1BiSML1xQNDpYZyHMCnRO1uk6_gZg06kd/view?usp=sharing', '2024-07-30 07:37:24', '2024-07-30 07:37:24'),
(13, '50% off Up Lighting Other Events', '50% off Up Lighting', 'Hi [customer_first_name],\r\n\r\nHow is party planning going?\r\n\r\nWe are currently offering 50% discount on our up lighting for the next two days, if you would like up lighting for your wedding feel free to let me know?\r\n\r\nYou can find a up lighting demo video it takes a little bit of time on this video to see the before and after to see the effect but its well worth the wait.\r\n\r\nhttps://streamable.com/g9d3s\r\n\r\nOur up lighting is subject to availability.', '2024-07-30 07:38:05', '2024-07-30 08:03:07');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_14_140047_create_companies_table', 1),
(5, '2024_06_14_153551_create_event_types_table', 1),
(6, '2024_06_14_154343_create_data_table', 1),
(7, '2024_06_24_102623_create_company_categories_table', 1),
(8, '2024_07_14_184126_create_welcome_mails_table', 1),
(9, '2024_07_14_184135_create_quote_mails_table', 1),
(10, '2024_07_14_184148_create_follow_up_mails_table', 1),
(11, '2024_07_14_184317_create_mail_campaigns_table', 1),
(12, '2024_07_14_194123_create_mail_templates_table', 1),
(13, '2024_07_26_001616_add_subject_to_mail_templates_table', 2),
(14, '2024_07_29_174508_add_event_type_in_follow_up_mails', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote_mails`
--

DROP TABLE IF EXISTS `quote_mails`;
CREATE TABLE IF NOT EXISTS `quote_mails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_template_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quote_mails`
--

INSERT INTO `quote_mails` (`id`, `company_id`, `event_type_id`, `mail_template_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2', '17', '5', NULL, '2024-07-25 23:18:28', '2024-07-25 23:18:49'),
(2, '2', '7', '3', NULL, '2024-07-25 23:18:54', '2024-07-25 23:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DOFr7oYqvk8X6ZmTGZvR8r2daTv8OOU0RnGUnQn0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV01lWEZPc3NpZGJ4Z0s0elZtSkp6aElQTE1JOFNOUHZWMVJXNWZmVSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2ZvbGxvd3VwbWFpbC9hZGQiO319', 1722348364);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$GEyF/MuM7pRVG38IykTPx.YyEPdVYKWccBzkfG.OaUi2plJW8hKZi', 'uQSUvdRtq4MNWtSAmyQl07KM7bxrYKfQxLYdQjCvx16DgO68wj0QsU1IPbk4', '2024-06-09 04:58:01', '2024-06-09 04:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_mails`
--

DROP TABLE IF EXISTS `welcome_mails`;
CREATE TABLE IF NOT EXISTS `welcome_mails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_template_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_mails`
--

INSERT INTO `welcome_mails` (`id`, `company_id`, `event_type_id`, `mail_template_id`, `user_id`, `created_at`, `updated_at`) VALUES
(20, '2', '11', '1', NULL, '2024-07-25 23:18:15', '2024-07-25 23:18:15'),
(19, '2', '10', '1', NULL, '2024-07-25 23:18:11', '2024-07-25 23:18:11'),
(18, '2', '9', '1', NULL, '2024-07-25 23:18:08', '2024-07-25 23:18:08'),
(17, '2', '8', '1', NULL, '2024-07-25 23:18:05', '2024-07-25 23:18:05'),
(16, '2', '6', '1', NULL, '2024-07-25 23:18:00', '2024-07-25 23:18:00'),
(15, '2', '5', '1', NULL, '2024-07-25 23:17:57', '2024-07-25 23:17:57'),
(14, '2', '17', '1', NULL, '2024-07-25 23:09:12', '2024-07-25 23:17:54'),
(13, '2', '7', '1', NULL, '2024-07-25 23:05:18', '2024-07-25 23:18:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

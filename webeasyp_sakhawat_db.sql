-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2021 at 03:08 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webeasyp_sakhawat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_purchases`
--

CREATE TABLE `account_purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `payable` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `paid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_purchases`
--

INSERT INTO `account_purchases` (`id`, `customer_id`, `total`, `payable`, `paid`, `credit`, `debit`, `balance`, `created_at`, `updated_at`) VALUES
(3, 3, '0', '0', '0', '0', '0', '0', '2021-12-14 12:49:10', '2021-12-14 12:49:10'),
(2, 2, '0', '0', '0', '0', '0', '0', '2021-12-14 12:46:43', '2021-12-14 12:46:43'),
(4, 4, '0', '0', '0', '0', '0', '0', '2021-12-14 12:50:05', '2021-12-14 12:50:05'),
(5, 5, '0', '0', '0', '0', '0', '0', '2021-12-14 12:50:51', '2021-12-14 12:50:51'),
(6, 6, '0', '0', '0', '0', '0', '0', '2021-12-14 12:51:51', '2021-12-14 12:51:51'),
(7, 7, '0', '0', '0', '0', '0', '0', '2021-12-14 12:53:16', '2021-12-14 12:53:16'),
(8, 8, '0', '0', '0', '0', '0', '0', '2021-12-14 12:53:44', '2021-12-14 12:53:44'),
(9, 4, '0', '-50000', '50000', '0', '0', '-50000', '2021-12-14 12:56:51', '2021-12-14 12:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `account_sales`
--

CREATE TABLE `account_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `received` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `receivable` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sale Payment',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_sales`
--

INSERT INTO `account_sales` (`id`, `customer_id`, `invoice`, `total`, `received`, `receivable`, `credit`, `debit`, `balance`, `description`, `created_at`, `updated_at`) VALUES
(7, 5, NULL, '0', '0', '0', '0', '0', '0', 'Sale Payment', '2021-12-14 12:50:51', '2021-12-14 12:50:51'),
(6, 4, NULL, '0', '0', '0', '0', '0', '0', 'Sale Payment', '2021-12-14 12:50:05', '2021-12-14 12:50:05'),
(5, 3, NULL, '0', '0', '-198040', '0', '0', '-117000', 'Sale Payment', '2021-12-14 12:49:10', '2021-12-14 13:56:58'),
(4, 2, NULL, '0', '0', '0', '0', '0', '0', 'Sale Payment', '2021-12-14 12:46:43', '2021-12-14 12:46:43'),
(8, 6, NULL, '0', '0', '0', '0', '0', '0', 'Sale Payment', '2021-12-14 12:51:51', '2021-12-14 12:51:51'),
(9, 7, NULL, '0', '0', '0', '0', '0', '0', 'Sale Payment', '2021-12-14 12:53:16', '2021-12-14 12:53:16'),
(10, 8, NULL, '0', '0', '0', '0', '0', '0', 'Sale Payment', '2021-12-14 12:53:44', '2021-12-14 12:53:44'),
(11, 3, '5', '0', '0', '-198040', '0', '0', '-117000', 'Sale Payment', '2021-12-14 13:54:02', '2021-12-14 13:56:58'),
(12, 3, NULL, '0', '0', '-198040', '0', '0', '-117000', 'cash', '2021-12-14 13:54:34', '2021-12-14 13:56:58'),
(13, 3, '6', '0', '0', '-198040', '0', '0', '-117000', 'Sale Payment', '2021-12-14 13:55:41', '2021-12-14 13:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `account_transfers`
--

CREATE TABLE `account_transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_transfers`
--

INSERT INTO `account_transfers` (`id`, `customer_id`, `balance`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2021-12-13 02:33:10', '2021-12-13 02:33:10'),
(2, 2, NULL, '2021-12-14 12:46:43', '2021-12-14 12:46:43'),
(3, 3, NULL, '2021-12-14 12:49:10', '2021-12-14 12:49:10'),
(4, 4, NULL, '2021-12-14 12:50:05', '2021-12-14 12:50:05'),
(5, 5, NULL, '2021-12-14 12:50:51', '2021-12-14 12:50:51'),
(6, 6, NULL, '2021-12-14 12:51:51', '2021-12-14 12:51:51'),
(7, 7, NULL, '2021-12-14 12:53:16', '2021-12-14 12:53:16'),
(8, 8, NULL, '2021-12-14 12:53:44', '2021-12-14 12:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `balance` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_sales`
--

CREATE TABLE `bank_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction` bigint(20) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'RIBBON LABEL', '2021-12-13 02:34:06', '2021-12-13 02:34:06'),
(2, 'COTTON LABELS', '2021-12-14 12:16:36', '2021-12-14 12:16:36'),
(3, 'STICKERS', '2021-12-14 12:16:40', '2021-12-14 12:16:40'),
(4, 'REGISTERS', '2021-12-14 12:17:12', '2021-12-14 12:17:12'),
(5, 'FILES', '2021-12-14 12:17:17', '2021-12-14 12:17:17'),
(6, 'PAPERS', '2021-12-14 12:17:25', '2021-12-14 12:17:25'),
(7, 'RIBBON ROLLS', '2021-12-14 12:18:18', '2021-12-14 12:18:38'),
(8, 'CLOTH SHEETS', '2021-12-14 12:18:54', '2021-12-14 12:18:54'),
(9, 'HANG TAGS', '2021-12-14 12:19:25', '2021-12-14 12:19:25'),
(10, 'SAMPLES', '2021-12-14 12:45:27', '2021-12-14 12:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntn_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_tax_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `type`, `ntn_no`, `sales_tax_no`, `created_at`, `updated_at`) VALUES
(1, 'FORWARD GEAR (PVT.) LTD.', 'WAZIRABAD ROAD SIALKOT', '+92-523571996', 'Customer', NULL, NULL, '2021-12-13 02:33:10', '2021-12-14 12:48:02'),
(2, 'FORWARD SPORTS (PVT.) LTD.', 'ADDAH SAHOWALA WAZIRABAD ROAD SIALKOT', '+92-52-3571800', 'Customer', NULL, NULL, '2021-12-14 12:46:43', '2021-12-14 12:46:43'),
(3, 'MANSHA & BROTHERS (PVT.) LTD.', 'WAZIRABAD ROAD UGGOKI SIALKOT', '+92-334-8084250', 'Customer', NULL, NULL, '2021-12-14 12:49:10', '2021-12-14 12:49:10'),
(4, 'MAKKA PAPER', 'SIALKOT', '+92-52-4601847', 'Vendor', NULL, NULL, '2021-12-14 12:50:05', '2021-12-14 12:50:05'),
(5, 'HUZHOU HENXGINE LABEL MANUFACTURER', 'HUZHOU - CHINA', '+86 572 3773 115', 'Vendor', NULL, NULL, '2021-12-14 12:50:51', '2021-12-14 12:50:51'),
(6, 'KING LABEL FABRIC SOLUTION', 'Changxing, Zhejiang, China', '+86 180 5726 9260', 'Vendor', NULL, NULL, '2021-12-14 12:51:51', '2021-12-14 12:51:51'),
(7, 'STAR SOURCING', 'LAKSHAMI CHOWK LAHORE', '+92-321-4091144', 'Vendor', NULL, NULL, '2021-12-14 12:53:16', '2021-12-14 12:53:16'),
(8, 'S.K ENTERPRISES', 'KARACHI', '+92 321 2999008', 'Vendor', NULL, NULL, '2021-12-14 12:53:44', '2021-12-14 12:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `daily_sales`
--

CREATE TABLE `daily_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `current_date` date DEFAULT NULL,
  `sale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_sales`
--

INSERT INTO `daily_sales` (`id`, `current_date`, `sale`, `created_at`, `updated_at`) VALUES
(1, '2021-12-14', '0', '2021-12-14 01:29:42', '2021-12-14 13:55:41'),
(2, '2021-12-15', '0', '2021-12-15 06:02:52', '2021-12-15 06:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` double NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_categories`
--

CREATE TABLE `front_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_items`
--

CREATE TABLE `front_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holds`
--

CREATE TABLE `holds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `walking_customer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `current_date` date DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hold_items`
--

CREATE TABLE `hold_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hold_id` bigint(20) UNSIGNED DEFAULT NULL,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `new_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reorder_value` int(11) DEFAULT NULL,
  `required` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `unit` text COLLATE utf8mb4_unicode_ci,
  `sku` text COLLATE utf8mb4_unicode_ci,
  `barcode` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ok',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category_id`, `price`, `old_price`, `sale_rate`, `purchase_rate`, `reorder_value`, `required`, `image`, `stock`, `description`, `unit`, `sku`, `barcode`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TSSA LABELS', 1, '3', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'Choose Unit', NULL, NULL, 'ok', '2021-12-14 01:29:31', '2021-12-14 12:16:00'),
(2, 'HANG TAG # 07020051', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:19:40', '2021-12-14 12:19:40'),
(3, 'HANG TAG # 62741454', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:19:58', '2021-12-14 12:19:58'),
(4, 'HANG TAG # 62771987', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:20:12', '2021-12-14 12:20:12'),
(5, 'HANG TAG # 62771810', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:20:33', '2021-12-14 12:20:33'),
(6, 'HANG TAG # 62771809', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:20:49', '2021-12-14 12:20:49'),
(7, 'HANG TAG # 62771683', 9, '1.25', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:21:05', '2021-12-14 12:21:05'),
(8, 'HANG TAG # 62768441', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:21:33', '2021-12-14 12:21:33'),
(9, 'HANG TAG # 62773328', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:21:47', '2021-12-14 12:21:47'),
(10, 'HANG TAG # 62773310', 9, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:22:01', '2021-12-14 12:22:01'),
(11, 'S22-C-STRETCBB-MrLrP1-1KG', 7, '1.9', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:22:21', '2021-12-14 12:22:21'),
(12, 'S22E-WB-MrLr1 – 1 KG', 9, '1.9', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:22:47', '2021-12-14 12:22:47'),
(13, 'S22OE-MrLrP6-6KGS', 7, '1.9', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:23:37', '2021-12-14 12:23:37'),
(14, 'S22-STREET CAMP BP-E-MRPLR6-6KG', 7, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:25:16', '2021-12-14 12:25:16'),
(15, 'S22SPGE-TiroBP-MrLrP8-8KGS', 9, '3.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:25:35', '2021-12-14 12:25:35'),
(16, 'S22SPGE-DUM-MrTpePLr8-8KGS', 7, '3.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:26:26', '2021-12-14 12:26:26'),
(17, 'S22-TIROGS-MrLr2KG-2KGS', 7, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:26:56', '2021-12-14 12:26:56'),
(18, 'SS22-ORG-M-MrLrP1-1KG', 7, '3.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:28:21', '2021-12-14 12:28:21'),
(19, 'ASIA CL BP BOXY (HB1338)-6KG', 9, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:28:37', '2021-12-14 12:28:37'),
(20, 'ASIA CLSC SATCHEL (HC7233)- 1KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:28:57', '2021-12-14 12:28:57'),
(21, 'ASIA TINY DUFFEL (HC7223)', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:30:05', '2021-12-14 12:30:05'),
(22, 'ASIA TINY DUFFEL (HC7223)ASIA ADICOLOR WAISTB (HD7167)-1KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:30:24', '2021-12-14 12:30:24'),
(23, 'ASIA ADICOLOR WAISTB (HD7169)-1KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:30:43', '2021-12-14 12:30:43'),
(24, 'S21-TiroBP-Mochila-MrLrP8-8KGS', 9, '3.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:31:05', '2021-12-14 12:31:05'),
(25, 'S21-BSR-Dus-6KGS', 7, '3.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:31:55', '2021-12-14 12:31:55'),
(26, 'SS22-TINY-MnTPeLr- RIBBON', 7, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:32:34', '2021-12-14 12:32:34'),
(27, 'S22-INFBPG-E-MrLrP4-4KGS', 7, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:33:33', '2021-12-14 12:33:33'),
(28, 'S22SPE-MMr2KG-2KGS', 9, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:34:07', '2021-12-14 12:34:07'),
(29, 'ASIA ORGANIZER M (HB1337)-1KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:35:09', '2021-12-14 12:35:09'),
(30, 'ASIA AC CLASSIC BP (GQ4178)-6KGS', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:35:22', '2021-12-14 12:35:22'),
(31, 'ASIA STREET CCB (HC7196)-1KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:35:36', '2021-12-14 12:35:36'),
(32, 'ASIA STREET CAMP BP (HC4778)-6KGS', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:35:53', '2021-12-14 12:35:53'),
(33, 'ASIA GYMSACK SP(DT2596) 2KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:36:17', '2021-12-14 12:36:17'),
(38, 'S21-BSR-DUM-8KGS', 7, '3.20', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:40:28', '2021-12-14 12:40:28'),
(39, 'S21-BSR-DUM-8KGS-', 3, '1.9350', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:40:46', '2021-12-14 12:40:46'),
(36, 'FW21O-MrLrP4-Mochila-4KG', 7, '3.20', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:39:29', '2021-12-14 12:39:29'),
(37, 'FW21O-MrLrP4-Mochila-4KG-', 3, '1.9350', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:39:49', '2021-12-14 12:39:49'),
(40, 'S21Gulf-MrLrp1- Sticker 1KG', 3, '1.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:41:03', '2021-12-14 12:41:03'),
(41, 'ASIA TIRO DU M(DQ1071) 8KG', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:41:20', '2021-12-14 12:41:20'),
(42, 'SS22-O-ADICLR BP-MrLrP1 – 1 KG', 7, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:41:41', '2021-12-14 12:41:41'),
(43, 'S22O-E-Sling-MrLrP2 – 2 KGS', 7, '2.8', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:41:57', '2021-12-14 12:41:57'),
(44, 'S22Core-E-MMr2 – 2 KGS', 7, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:42:15', '2021-12-14 12:42:15'),
(45, 'S22-E-SHPR-CO-4K – 4 KGS', 7, '1.4', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:42:28', '2021-12-14 12:42:28'),
(46, 'SS22-SP-TiroSB-MrTpe-1 – 1 KG', 2, '1.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:42:46', '2021-12-14 12:42:46'),
(47, 'SS22-Porta Zapatos-MrTPE-1 KG', 7, '3.2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:43:02', '2021-12-14 12:43:02'),
(48, 'FW21O-MrLrP1-Mochila-1 KG', 2, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:43:22', '2021-12-14 12:43:22'),
(49, 'FW21O-MrLrP1-Mochila-1 KG-', 3, '1.9350', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:44:12', '2021-12-14 12:44:12'),
(50, 'F19-SHPR-CO-E-Gulf 4 KGS', 3, '1.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:44:29', '2021-12-14 12:44:29'),
(51, 'S21Gulf-MrLrP2-  2 KGS', 3, '1.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:44:47', '2021-12-14 12:44:47'),
(52, 'GREECE TAGS', 9, '2', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:45:07', '2021-12-14 12:45:07'),
(53, 'INNER GLOVES 500 XS/S', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:58:32', '2021-12-14 12:58:32'),
(54, 'INNER GLOVES 500 M/L', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:58:51', '2021-12-14 12:58:51'),
(55, 'INNER GLOVES 500 XL/2XL', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:59:10', '2021-12-14 12:59:10'),
(56, 'BG 120 CARE LABEL 8-OZ', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:59:28', '2021-12-14 12:59:28'),
(57, 'BG 120 CARE LABEL 10-OZ', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 12:59:40', '2021-12-14 12:59:40'),
(58, 'BG 120 CARE LABEL 12-OZ', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:00:08', '2021-12-14 13:00:08'),
(59, 'BG 120 CARE LABEL 14-OZ', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:00:32', '2021-12-14 13:00:32'),
(60, 'BB 100 CARE LABEL - S', 2, '3.82', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:00:56', '2021-12-14 13:00:56'),
(61, 'BB 100 CARE LABEL - M', 2, '3.82', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:01:23', '2021-12-14 13:01:23'),
(62, 'BB 100 CARE LABEL - L', 2, '3.82', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:01:42', '2021-12-14 13:01:42'),
(63, 'BB 100 CARE LABEL - XL', 2, '3.82', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:02:02', '2021-12-14 13:02:02'),
(64, 'BB 100 CARE LABEL - 2XL', 2, '3.82', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:02:46', '2021-12-14 13:02:46'),
(65, 'BB 100 CARE LABEL - 3XL', 2, '3.82', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:03:05', '2021-12-14 13:03:05'),
(66, 'BODY BUILDING GLOVES GRIP TURQUIR-XS', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:04:11', '2021-12-14 13:04:11'),
(67, 'BODY BUILDING GLOVES GRIP TURQUIR-S', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:04:36', '2021-12-14 13:04:36'),
(68, 'BODY BUILDING GLOVES GRIP TURQUIR-M', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:04:53', '2021-12-14 13:04:53'),
(69, 'BODY BUILDING GLOVES GRIP TURQUIR-L', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:05:07', '2021-12-14 13:05:07'),
(70, 'ST-100 KIDS 300 - 8 ans', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:05:26', '2021-12-14 13:05:26'),
(71, 'ST-100 KIDS 300 - 10 ans', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:05:56', '2021-12-14 13:05:56'),
(72, 'ST-100 KIDS 300 - 12 ans', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:06:25', '2021-12-14 13:06:25'),
(73, 'BG 100 KIDS - 4 OZ', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:06:40', '2021-12-14 13:06:40'),
(74, 'BG 100 KIDS - 6 OZ', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:06:53', '2021-12-14 13:06:53'),
(75, 'RUN GLOVES TOUCH SCREEN BLACK - XS', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:07:49', '2021-12-14 13:07:49'),
(76, 'RUN GLOVES TOUCH SCREEN BLACK - S', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:08:08', '2021-12-14 13:08:08'),
(77, 'RUN GLOVES TOUCH SCREEN BLACK - M', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:08:25', '2021-12-14 13:08:25'),
(78, 'RUN GLOVES TOUCH SCREEN BLACK - L', 8, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:08:43', '2021-12-14 13:08:43'),
(79, 'RUN GLOVES TOUCH SCREEN BLACK - XL', 2, '2.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:09:00', '2021-12-14 13:09:00'),
(80, 'WRAPE 520 BLACK/GOLD', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:09:29', '2021-12-14 13:09:29'),
(84, 'WRAPE 500 SS 20 (NEW RED PETROL)', 2, '1.75', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:13:05', '2021-12-14 13:13:05'),
(82, 'HAND GRIP 500 LABEL-1', 2, '3.20', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:10:52', '2021-12-16 02:27:56'),
(83, 'HAND GRIP 500 LABEL-2', 2, '3.20', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:12:29', '2021-12-14 13:12:29'),
(86, 'SHNGAURD CS900- S', 2, '2.15', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:14:02', '2021-12-14 13:14:02'),
(87, 'SHNGAURD CS900- M', 2, '2.15', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:14:26', '2021-12-14 13:14:26'),
(88, 'SHNGAURD CS900- L', 2, '2.15', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:14:45', '2021-12-14 13:14:45'),
(89, 'SHNGAURD CS900- XL', 2, '2.15', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:15:01', '2021-12-14 13:15:01'),
(90, 'MGRIPPAD -S/M', 2, '2.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:15:24', '2021-12-14 13:15:24'),
(91, 'MGRIPPAD -M/L', 2, '2.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:15:50', '2021-12-14 13:15:50'),
(92, 'MGRIPPAD -L/XL', 2, '2.5', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:16:05', '2021-12-14 13:16:05'),
(93, 'LETTER HEAD VRG 80 GSM', 6, '6', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:16:51', '2021-12-14 13:16:51'),
(94, 'FH 100 BLACK -2XS', 2, '2.4', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:17:13', '2021-12-14 13:56:58'),
(95, 'RED ROUND STICKERS', 3, '1', NULL, NULL, NULL, NULL, NULL, 'default_image.jpg', 0, NULL, 'piece', NULL, NULL, 'ok', '2021-12-14 13:17:42', '2021-12-16 02:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(227, '2014_10_12_000000_create_users_table', 1),
(228, '2014_10_12_100000_create_password_resets_table', 1),
(229, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(230, '2019_08_19_000000_create_failed_jobs_table', 1),
(231, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(232, '2020_06_20_060150_create_categories_table', 1),
(233, '2020_06_21_092806_create_brands_table', 1),
(234, '2020_07_23_074135_create_subcategories_table', 1),
(235, '2020_07_24_060220_create_manufactures_table', 1),
(236, '2020_07_25_055831_create_items_table', 1),
(237, '2020_08_10_181315_create_customers_table', 1),
(238, '2020_08_11_183848_create_receipts_table', 1),
(239, '2020_09_26_074807_create_purchases_table', 1),
(240, '2020_09_26_090748_create_sales_table', 1),
(241, '2020_10_07_044634_create_sessions_table', 1),
(242, '2020_10_07_162739_create_front_items_table', 1),
(243, '2020_10_08_010909_create_front_categories_table', 1),
(244, '2020_10_25_095538_create_sliders_table', 1),
(245, '2020_10_29_075816_create_banks_table', 1),
(246, '2020_11_25_102702_create_bank_sales_table', 1),
(247, '2020_11_28_074219_create_account_purchases_table', 1),
(248, '2020_11_30_175453_create_contacts_table', 1),
(249, '2020_12_05_115133_create_purchase_items_table', 1),
(250, '2020_12_16_063636_create_sale_items_table', 1),
(251, '2021_01_13_113420_create_account_sales_table', 1),
(252, '2021_02_01_043120_create_daily_sales_table', 1),
(253, '2021_02_02_055047_create_account_transfers_table', 1),
(254, '2021_03_25_043750_create_holds_table', 1),
(255, '2021_03_25_054751_create_sale_carts_table', 1),
(256, '2021_03_25_062317_create_purchase_carts_table', 1),
(257, '2021_04_01_115812_create_hold_items_table', 1),
(258, '2021_04_14_205217_create_transfer_sale_histories_table', 1),
(259, '2021_04_18_102807_create_sale_returns_table', 1),
(260, '2021_04_18_103514_create_sale_return_items_table', 1),
(261, '2021_10_14_080343_create_expense_categories_table', 1),
(262, '2021_10_15_075824_create_expenses_table', 1),
(263, '2021_10_29_092142_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `current_date` date DEFAULT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_previous_due` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_bill` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payable` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_man` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_carts`
--

CREATE TABLE `purchase_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `e_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bill` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_items` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `less_perc` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `less_net` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivable` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_due` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total_bill` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gd_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `walking_customer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `current_date` date DEFAULT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_due` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivable` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_tax_price` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_carts`
--

CREATE TABLE `sale_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `new_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_carts`
--

INSERT INTO `sale_carts` (`id`, `item_id`, `user_id`, `name`, `price`, `discount`, `new_price`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(9, 94, 1, 'FH 100 BLACK -2XS', '2.4', '0', NULL, '1', '2.4', '2021-12-16 04:33:17', '2021-12-16 04:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE `sale_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `new_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_returns`
--

CREATE TABLE `sale_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `walking_customer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `current_date` date DEFAULT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_due` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivable` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_return_items`
--

CREATE TABLE `sale_return_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_return_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `new_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_sale_histories`
--

CREATE TABLE `transfer_sale_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `password2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `logo`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `password2`, `address`, `phone`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sakhawat Ali', NULL, 'sakhawat@gmail.com', NULL, '$2y$10$V8U8brYqQUEZKXP9viPdlumgI5sz/KTMJzu7KljfgI16H1oofSWse', NULL, NULL, 'password', 'Lahore', '03321773514', 'Admin', NULL, NULL, NULL),
(2, 'Atta ur Rehman Bhatti', NULL, 'engr.atta30@gmail.com', NULL, '$2y$10$SS11gQThwY2ks.wXY.SPmux8KJWPn6eAMzoFjany7MKzaI5ph90lu', NULL, NULL, '12345', NULL, NULL, 'saleman', NULL, '2021-12-14 12:55:22', '2021-12-14 12:55:22'),
(3, 'JAMIL HUSSAIN', NULL, 'barshgaal@gmail.com', NULL, '$2y$10$U557PO0GyXExNNpO3A11s.79YZ.UKGJVbxLFxMoRZ29TcZGr8ilMG', NULL, NULL, 'jamil', NULL, NULL, 'saleman', NULL, '2021-12-14 12:56:07', '2021-12-14 12:56:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_purchases`
--
ALTER TABLE `account_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_purchases_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `account_sales`
--
ALTER TABLE `account_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_sales_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `account_transfers`
--
ALTER TABLE `account_transfers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_transfers_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_sales`
--
ALTER TABLE `bank_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_sales_bank_id_foreign` (`bank_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_sales`
--
ALTER TABLE `daily_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_expense_category_id_foreign` (`expense_category_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_categories`
--
ALTER TABLE `front_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `front_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `front_items`
--
ALTER TABLE `front_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `front_items_item_id_foreign` (`item_id`);

--
-- Indexes for table `holds`
--
ALTER TABLE `holds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `holds_customer_id_foreign` (`customer_id`),
  ADD KEY `holds_user_id_foreign` (`user_id`);

--
-- Indexes for table `hold_items`
--
ALTER TABLE `hold_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hold_items_hold_id_foreign` (`hold_id`),
  ADD KEY `hold_items_item_id_foreign` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `purchase_carts`
--
ALTER TABLE `purchase_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_carts_item_id_foreign` (`item_id`),
  ADD KEY `purchase_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_items_purchase_id_foreign` (`purchase_id`),
  ADD KEY `purchase_items_category_id_foreign` (`category_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receipts_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_customer_id_foreign` (`customer_id`),
  ADD KEY `sales_user_id_foreign` (`user_id`);

--
-- Indexes for table `sale_carts`
--
ALTER TABLE `sale_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_carts_item_id_foreign` (`item_id`),
  ADD KEY `sale_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_items_sale_id_foreign` (`sale_id`),
  ADD KEY `sale_items_category_id_foreign` (`category_id`);

--
-- Indexes for table `sale_returns`
--
ALTER TABLE `sale_returns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_returns_customer_id_foreign` (`customer_id`),
  ADD KEY `sale_returns_user_id_foreign` (`user_id`);

--
-- Indexes for table `sale_return_items`
--
ALTER TABLE `sale_return_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_return_items_sale_return_id_foreign` (`sale_return_id`),
  ADD KEY `sale_return_items_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `transfer_sale_histories`
--
ALTER TABLE `transfer_sale_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_purchases`
--
ALTER TABLE `account_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `account_sales`
--
ALTER TABLE `account_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `account_transfers`
--
ALTER TABLE `account_transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_sales`
--
ALTER TABLE `bank_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daily_sales`
--
ALTER TABLE `daily_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_categories`
--
ALTER TABLE `front_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_items`
--
ALTER TABLE `front_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holds`
--
ALTER TABLE `holds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hold_items`
--
ALTER TABLE `hold_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_carts`
--
ALTER TABLE `purchase_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sale_carts`
--
ALTER TABLE `sale_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sale_returns`
--
ALTER TABLE `sale_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_return_items`
--
ALTER TABLE `sale_return_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_sale_histories`
--
ALTER TABLE `transfer_sale_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

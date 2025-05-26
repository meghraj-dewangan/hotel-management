-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2025 at 11:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `guests` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_name`, `user_id`, `name`, `email`, `phone`, `guests`, `checkin`, `checkout`, `room_type`, `room_number`, `created_at`, `updated_at`) VALUES
(8, 'suresh', 19, 'aman', 'aman@gmai.com', '3245858574', 2, '2025-05-06', '2025-05-07', 'Superior Room', '102s', '2025-05-26 03:05:34', '2025-05-26 03:05:34'),
(9, 'dheeraj', 20, 'dheeraj sharma', 'dheeraj@gmail.com', '5475859645', 4, '2025-05-08', '2025-05-10', 'Delux Room', '202d', '2025-05-26 03:08:12', '2025-05-26 03:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5, ' Front Office / Reception', 'Handles guest check-in/check-out.', '2025-05-18 07:16:38', '2025-05-18 07:16:38'),
(6, 'Reservation & Booking', 'Manages room bookings.', '2025-05-18 07:16:38', '2025-05-18 07:16:38'),
(7, 'Food & Beverage', 'Covers restaurant and room service.', '2025-05-18 07:16:38', '2025-05-18 07:16:38'),
(8, 'Accounts / Billing', 'Handles payment and invoicing.', '2025-05-18 07:16:38', '2025-05-18 07:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2025_03_18_171311_create_room_type_table', 1),
(5, '2025_03_18_172219_create_room_table', 2),
(38, '0001_01_01_000000_create_users_table', 3),
(39, '0001_01_01_000001_create_cache_table', 3),
(40, '0001_01_01_000002_create_jobs_table', 3),
(41, '2025_03_18_173320_create_room_types_table', 3),
(42, '2025_03_18_173550_create_rooms_table', 3),
(43, '2025_03_28_145424_create_personal_access_tokens_table', 3),
(44, '2025_05_18_062544_create_departments_table', 4),
(45, '2025_05_18_170319_create_staff_table', 5),
(46, '2025_05_21_070451_create_services_table', 6),
(50, '2025_05_22_102311_create_bookings_table', 7),
(51, '2025_05_24_105509_create_contacts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'myapp', 'aa70819c9a3afd296858d0f7224f80b055ea15fa5cf3052862d0bfa467790b98', '[\"*\"]', NULL, NULL, '2025-03-31 07:50:22', '2025-03-31 07:50:22'),
(2, 'App\\Models\\User', 2, 'myapp', 'f7d5f708fe0e875e1965e5ee381e7dd9f7b8af3f0b2d779f852f51dacc9e7e39', '[\"*\"]', NULL, NULL, '2025-03-31 07:55:55', '2025-03-31 07:55:55'),
(3, 'App\\Models\\User', 3, 'myapp', 'e582326ab52171d9076b1df82650d09fa27c149a6da0ab70cc9fcf9340154666', '[\"*\"]', NULL, NULL, '2025-03-31 09:41:12', '2025-03-31 09:41:12'),
(4, 'App\\Models\\User', 4, 'myapp', 'f5053801eafa59a65044948bb7496b0c95e6f700be38aade35eb1e41517a9a79', '[\"*\"]', NULL, NULL, '2025-03-31 11:27:27', '2025-03-31 11:27:27'),
(5, 'App\\Models\\User', 4, 'myapp', 'cd70912dce3a9b47f24d52a67a8a7c8dee0ca30dc867b68ad770f61c2dec5a5f', '[\"*\"]', NULL, NULL, '2025-03-31 11:30:01', '2025-03-31 11:30:01'),
(6, 'App\\Models\\User', 4, 'myapp', '32b5a56708eb011feaa9e36b6e636546ca576356103cd98591d6ee61ca2b9967', '[\"*\"]', NULL, NULL, '2025-03-31 11:30:35', '2025-03-31 11:30:35'),
(7, 'App\\Models\\User', 4, 'myapp', 'fa8bcd19eb997a05f6a19dcc043a57106c1b97f12bf48917f9443f92cfe0cd46', '[\"*\"]', NULL, NULL, '2025-03-31 11:32:49', '2025-03-31 11:32:49'),
(8, 'App\\Models\\User', 4, 'myapp', 'f32c8208862e5382185917c8ccd7c7869b7bae7e2a39d0c39c96cb2e97cad919', '[\"*\"]', NULL, NULL, '2025-03-31 11:33:33', '2025-03-31 11:33:33'),
(9, 'App\\Models\\User', 4, 'myapp', '5fda9c4a54cef015d0ee781cfe0fff5822d9416bab2f3c9f1a9e04039b174d21', '[\"*\"]', NULL, NULL, '2025-03-31 11:33:57', '2025-03-31 11:33:57'),
(10, 'App\\Models\\User', 4, 'myapp', '0e23bf2115b07ae8505415e13f80603f91ff3f2bf1b64bbf074d2f30b4ead56c', '[\"*\"]', NULL, NULL, '2025-03-31 11:40:39', '2025-03-31 11:40:39'),
(11, 'App\\Models\\User', 5, 'myapp', 'bea7a29347ac8c53b9a9597f1c524d0a7daeb0b8c42101e057e3a1b2483fca46', '[\"*\"]', NULL, NULL, '2025-03-31 11:47:59', '2025-03-31 11:47:59'),
(12, 'App\\Models\\User', 5, 'myapp', '6e3ac40c0839a858f4ab65a142333a5328e6ac34a987dc505ebfd662a8bc839c', '[\"*\"]', NULL, NULL, '2025-03-31 11:48:25', '2025-03-31 11:48:25'),
(13, 'App\\Models\\User', 4, 'myapp', 'fe0cef75915b739a47cebbe9c4bb70be3f68e896a2851e056e12d25b7b89f725', '[\"*\"]', NULL, NULL, '2025-03-31 12:53:36', '2025-03-31 12:53:36'),
(14, 'App\\Models\\User', 4, 'myapp', 'b319ec9679c19591ab5433f0639ce7e9bf785e9d7d500660f18a712eed3c22d0', '[\"*\"]', NULL, NULL, '2025-04-01 00:47:57', '2025-04-01 00:47:57'),
(15, 'App\\Models\\User', 6, 'myapp', '0827fa10cd58d09b3e1f0b16fd9f14d92aaec992996a97c944c23078fcecf101', '[\"*\"]', NULL, NULL, '2025-04-01 01:30:19', '2025-04-01 01:30:19'),
(16, 'App\\Models\\User', 6, 'myapp', 'f650bfe54fc8ec87023442268cc8c0ee553250eb0c5cca408c844b3f8443542e', '[\"*\"]', NULL, NULL, '2025-04-01 01:30:28', '2025-04-01 01:30:28'),
(17, 'App\\Models\\User', 7, 'myapp', '1a2a09a4d7ae0e7f443faf0e4db071c04650035c4d2d6064953b9fa1e4c1f4c8', '[\"*\"]', NULL, NULL, '2025-04-01 01:35:49', '2025-04-01 01:35:49'),
(18, 'App\\Models\\User', 7, 'myapp', 'd1760dba259797a08f0866cefdb5ea80c262fef80f9fb12c9da52dc2e7f849ea', '[\"*\"]', NULL, NULL, '2025-04-01 01:35:59', '2025-04-01 01:35:59'),
(19, 'App\\Models\\User', 8, 'myapp', '81f27a452a5928c969e087d399177148d8a46f6178686e2999eb3ac479e50bf3', '[\"*\"]', NULL, NULL, '2025-04-01 01:42:28', '2025-04-01 01:42:28'),
(20, 'App\\Models\\User', 8, 'myapp', '84de1bbf264934d093eea16ffa967fc543a36542fc8bffe1e607f516021b955b', '[\"*\"]', NULL, NULL, '2025-04-01 01:42:37', '2025-04-01 01:42:37'),
(21, 'App\\Models\\User', 8, 'myapp', '0572b66fc6df0a7dcc1810c3a864a9adb7c5277fd841026399179f4ab27f7755', '[\"*\"]', NULL, NULL, '2025-04-01 01:42:47', '2025-04-01 01:42:47'),
(22, 'App\\Models\\User', 9, 'myapp', 'f7a38e22ed52dff0657412761fd03fd958460f6cc4fd5e0f01820f76aeb1eeb5', '[\"*\"]', NULL, NULL, '2025-04-01 01:43:33', '2025-04-01 01:43:33'),
(23, 'App\\Models\\User', 9, 'myapp', 'f4ad4a29bcdfd0ae9caac1ecd3b897dfd4ec44cd027cca3fb7c43f4ddf094af3', '[\"*\"]', NULL, NULL, '2025-04-01 01:43:59', '2025-04-01 01:43:59'),
(24, 'App\\Models\\User', 10, 'myapp', 'f66ffdad7f6ccb8458d27d61df97cd4a2aabe7477e71ec20214758523785d1ca', '[\"*\"]', NULL, NULL, '2025-04-01 01:44:33', '2025-04-01 01:44:33'),
(25, 'App\\Models\\User', 11, 'myapp', 'a1992e859d295e6da6a70de2568dda295fa1d447b3e99112793a5ed085965772', '[\"*\"]', NULL, NULL, '2025-04-01 01:45:14', '2025-04-01 01:45:14'),
(26, 'App\\Models\\User', 12, 'myapp', 'ba796cf15e6fbb612fc23bcfa7ca29eb8af46e9cd1d81c1433abed13d58a7356', '[\"*\"]', NULL, NULL, '2025-04-01 01:55:48', '2025-04-01 01:55:48'),
(27, 'App\\Models\\User', 12, 'myapp', '8fce75181645f5c53e4d34a9a27db9e3a986654df8f83c9a6bd42b2e23fcb3b1', '[\"*\"]', NULL, NULL, '2025-04-01 01:56:03', '2025-04-01 01:56:03'),
(28, 'App\\Models\\User', 12, 'myapp', '1e511cba0d6125392aee63c3108c6775f714e079a32e5f5d9d3e453ca0899b44', '[\"*\"]', NULL, NULL, '2025-04-01 02:00:39', '2025-04-01 02:00:39'),
(29, 'App\\Models\\User', 12, 'myapp', 'ee1ea804e728c37498899ceadf8c11f66d7a958be97a3c5f5e2b5fc662083d74', '[\"*\"]', NULL, NULL, '2025-04-01 02:16:20', '2025-04-01 02:16:20'),
(30, 'App\\Models\\User', 12, 'myapp', '46e706f63f1107043d9e3c0234f5e8f332790e8757e91294127078fabb518037', '[\"*\"]', NULL, NULL, '2025-04-01 02:17:26', '2025-04-01 02:17:26'),
(31, 'App\\Models\\User', 12, 'myapp', '926c049408b4205a5a66960493ba2480b03c6d87a0e16d8ac54765c8a3183bce', '[\"*\"]', NULL, NULL, '2025-04-01 02:18:10', '2025-04-01 02:18:10'),
(32, 'App\\Models\\User', 13, 'myapp', '562cbf9017d11d8b41f5b35c8ff5310a1240990249edecbf1faf7a23a99af820', '[\"*\"]', NULL, NULL, '2025-04-01 03:26:12', '2025-04-01 03:26:12'),
(33, 'App\\Models\\User', 13, 'myapp', '2557a8717a3a843c0944d41431defd99813b7bdc7e5fa7521f205b3452e0a44a', '[\"*\"]', NULL, NULL, '2025-04-01 03:27:57', '2025-04-01 03:27:57'),
(34, 'App\\Models\\User', 13, 'myapp', 'fa318896f83799ba2776d6343bdfe4a08cf02b9f0dd846476f0b6696b34c1d1f', '[\"*\"]', NULL, NULL, '2025-04-01 03:31:58', '2025-04-01 03:31:58'),
(35, 'App\\Models\\User', 13, 'myapp', '5336054aa39ef9287fd9c766370c47dbe9a5115720bda22361c363ebe375a191', '[\"*\"]', NULL, NULL, '2025-04-01 03:33:33', '2025-04-01 03:33:33'),
(36, 'App\\Models\\User', 13, 'myapp', '030f0838f2112030555b2390ef5e3a2c5d797c5bf54ebd7f3a306276feeadc47', '[\"*\"]', NULL, NULL, '2025-04-01 03:34:45', '2025-04-01 03:34:45'),
(37, 'App\\Models\\User', 13, 'myapp', '6e02269ff5d0345d97baa761c0a5c7fe37c6b7d379b269a9513e2617c3ef01aa', '[\"*\"]', NULL, NULL, '2025-04-01 03:35:15', '2025-04-01 03:35:15'),
(38, 'App\\Models\\User', 13, 'myapp', '2f087c511c423fe354dce9f0bd4349a628653fde57fc39224530cf08318e2f97', '[\"*\"]', NULL, NULL, '2025-04-01 03:36:18', '2025-04-01 03:36:18'),
(39, 'App\\Models\\User', 14, 'myapp', '3c7717eb5c9da42eb028e606fae4185158a43bae464b22664f2303098e233efa', '[\"*\"]', NULL, NULL, '2025-04-01 03:37:21', '2025-04-01 03:37:21'),
(40, 'App\\Models\\User', 14, 'myapp', '3f05b5720b48e2c4260e912e18654a4e2c92480888d4cad87db3ded5c7b3a47f', '[\"*\"]', NULL, NULL, '2025-04-01 03:37:30', '2025-04-01 03:37:30'),
(41, 'App\\Models\\User', 13, 'myapp', '160d0eac53f0e0f6bd71150190930bb90d458cc2961d28b868b9f2545a80f114', '[\"*\"]', NULL, NULL, '2025-04-01 03:37:47', '2025-04-01 03:37:47'),
(42, 'App\\Models\\User', 13, 'myapp', '250b9ae85b13cbec73a957438b6b7c9e809248e7509080f96c2243f2eb22da66', '[\"*\"]', NULL, NULL, '2025-04-01 09:56:47', '2025-04-01 09:56:47'),
(43, 'App\\Models\\User', 12, 'myapp', '944a557c630a754330ba5857ec6305bb7fbcfbc8436830e270a21d87ce441974', '[\"*\"]', NULL, NULL, '2025-04-01 09:59:52', '2025-04-01 09:59:52'),
(44, 'App\\Models\\User', 13, 'myapp', '9f2fa157b87c562bfb5d3d99bd3488e4f2c7c71d612ecaf1917050f4dc935b8c', '[\"*\"]', NULL, NULL, '2025-04-01 10:00:27', '2025-04-01 10:00:27'),
(45, 'App\\Models\\User', 13, 'myapp', '5edb62c68c7990f1eae6157f2fce8c666c6f4811a400b619919d86e02b63e142', '[\"*\"]', NULL, NULL, '2025-04-01 10:09:36', '2025-04-01 10:09:36'),
(46, 'App\\Models\\User', 13, 'myapp', '7a0bf9ad90a564eb81627010de34b5c6e6a2c68f00333e30e64161ff54178478', '[\"*\"]', NULL, NULL, '2025-04-01 10:40:16', '2025-04-01 10:40:16'),
(47, 'App\\Models\\User', 13, 'myapp', 'eed22a9e888a2ffbf6afb63e18cf89d3a07083cb60e396dd8a3b27cee308320b', '[\"*\"]', NULL, NULL, '2025-04-01 10:41:06', '2025-04-01 10:41:06'),
(48, 'App\\Models\\User', 13, 'myapp', 'afc9926c2e756902300d7ea66a22eec9cf9ae13d3eefed9efd0b2e8a4a1b357b', '[\"*\"]', NULL, NULL, '2025-04-01 10:41:35', '2025-04-01 10:41:35'),
(49, 'App\\Models\\User', 12, 'myapp', '0b7ba78776f164348b2255de69f07bf295e456403cdcd5c212f6e89a555c1099', '[\"*\"]', NULL, NULL, '2025-04-01 10:42:11', '2025-04-01 10:42:11'),
(50, 'App\\Models\\User', 13, 'myapp', '65ea84e801292058a96ecbf0dde6d489dfadbf0c46a4750cd63793e81c55fe01', '[\"*\"]', NULL, NULL, '2025-04-01 10:42:38', '2025-04-01 10:42:38'),
(51, 'App\\Models\\User', 13, 'myapp', 'f04a617d9e632aa524ab1b72627069f8c7c75da964693dbb8ec863fe9f4ef229', '[\"*\"]', NULL, NULL, '2025-04-01 10:43:19', '2025-04-01 10:43:19'),
(52, 'App\\Models\\User', 15, 'myapp', 'b1d6b39f7cbd31b753f8d04b9df3a8c8a6dcd8e4e1402c964da457b7ca8d2c8d', '[\"*\"]', NULL, NULL, '2025-04-01 10:45:10', '2025-04-01 10:45:10'),
(53, 'App\\Models\\User', 15, 'myapp', '49521494b75d4d0f5875b3ebc7dd24a5e1785793bd63d3767197cee2715a15c4', '[\"*\"]', NULL, NULL, '2025-04-01 10:46:07', '2025-04-01 10:46:07'),
(54, 'App\\Models\\User', 16, 'myapp', '0dce037fbab2e9d6a0cd10d7a1f475c7c2836603b01e6785fd0905ce9958d4d6', '[\"*\"]', NULL, NULL, '2025-04-01 10:46:34', '2025-04-01 10:46:34'),
(55, 'App\\Models\\User', 16, 'myapp', '8f361a9a7d12800fd9ac73ebfa1cc55b70d9d0e8a1c854d54ce79e9dbf6b7761', '[\"*\"]', NULL, NULL, '2025-04-01 10:46:45', '2025-04-01 10:46:45'),
(56, 'App\\Models\\User', 13, 'myapp', '5161557803f339e81a995b23928868efbf489a36e21afc61161c4dc9883acf59', '[\"*\"]', NULL, NULL, '2025-04-01 10:49:39', '2025-04-01 10:49:39'),
(57, 'App\\Models\\User', 12, 'myapp', '3881a5b1eb220750696d12d7324ae6a5a75c8f4bcb7c303d0ad8422c08572ac4', '[\"*\"]', NULL, NULL, '2025-04-03 11:29:02', '2025-04-03 11:29:02'),
(58, 'App\\Models\\User', 13, 'myapp', 'e91c5eb29da74956af94255d3efc0c70859f9a14364cad651fe3d1cb00687fe2', '[\"*\"]', NULL, NULL, '2025-04-03 11:34:14', '2025-04-03 11:34:14'),
(59, 'App\\Models\\User', 13, 'myapp', '6ffff89092afc82448d7959e3d8b01966b1aef8ee5cbf6362f2229cc9462db10', '[\"*\"]', NULL, NULL, '2025-04-03 12:49:07', '2025-04-03 12:49:07'),
(60, 'App\\Models\\User', 13, 'myapp', '31fd9a944df9c88ba0478e3aaa23a0467d3fba6f142f838f171723463981a65d', '[\"*\"]', NULL, NULL, '2025-04-09 08:50:55', '2025-04-09 08:50:55'),
(61, 'App\\Models\\User', 13, 'myapp', 'f1443103e100e6eac7c974f13feeda41818187e2dad1ef984b834b2fb29e5ccf', '[\"*\"]', NULL, NULL, '2025-05-13 12:00:06', '2025-05-13 12:00:06'),
(62, 'App\\Models\\User', 13, 'myapp', 'acaf186001c0e326c5e298e0c1362d3a2ea9b8a2f99f2a9f6e4189b06551c3ff', '[\"*\"]', NULL, NULL, '2025-05-14 08:49:46', '2025-05-14 08:49:46'),
(63, 'App\\Models\\User', 13, 'myapp', '6ec0a1ab0b4218c53a8dbbbf51203d658cb5900d3055bcb3b4475fee3a8d3764', '[\"*\"]', NULL, NULL, '2025-05-15 02:08:22', '2025-05-15 02:08:22'),
(64, 'App\\Models\\User', 13, 'myapp', '189e43bcceb1ed2e74619dd71856d29fc86442bfd936302409d2a648154e9278', '[\"*\"]', NULL, NULL, '2025-05-15 08:02:40', '2025-05-15 08:02:40'),
(65, 'App\\Models\\User', 13, 'myapp', 'e1e65a0b9fe5d8a20d4f9d6830e64348e4063d83f45db9a7a67d5dbd1b9c1811', '[\"*\"]', NULL, NULL, '2025-05-15 09:24:31', '2025-05-15 09:24:31'),
(66, 'App\\Models\\User', 13, 'myapp', 'ea2b4a7dae3d9ab7a1a12b056beccd5e665cdcded346b5b8bf6505c9dbc57a15', '[\"*\"]', NULL, NULL, '2025-05-17 04:40:44', '2025-05-17 04:40:44'),
(67, 'App\\Models\\User', 13, 'myapp', '41465a9fcfdaba030dcbca484ca2a01c7e27c376b8b693cc38e27f1bef551de0', '[\"*\"]', NULL, NULL, '2025-05-17 07:15:56', '2025-05-17 07:15:56'),
(68, 'App\\Models\\User', 13, 'myapp', '1d0229fd2dc6f1c4f34918670e0ccfddc1611a084507bbcb56acfe93713bc0d6', '[\"*\"]', NULL, NULL, '2025-05-17 08:31:41', '2025-05-17 08:31:41'),
(69, 'App\\Models\\User', 13, 'myapp', '54114dc3908fd5e4544fc5628a5db5449bf43adc624ad0566c4837d19efd4bf0', '[\"*\"]', NULL, NULL, '2025-05-18 00:53:56', '2025-05-18 00:53:56'),
(70, 'App\\Models\\User', 13, 'myapp', '07a3b3c56d24448b85810374b7b53c16be189028a9d1b9de427bf5860e45353a', '[\"*\"]', NULL, NULL, '2025-05-18 07:06:12', '2025-05-18 07:06:12'),
(71, 'App\\Models\\User', 13, 'myapp', 'ec85b196de0cc369a41b89919600fe95ce9610bfb26da4f2ff748dd34f42f28f', '[\"*\"]', NULL, NULL, '2025-05-18 11:08:32', '2025-05-18 11:08:32'),
(72, 'App\\Models\\User', 13, 'myapp', 'ce6dcf20a73fc8949e195334c4d864371b61fd6fdf2b49bf4a8301096d92528f', '[\"*\"]', NULL, NULL, '2025-05-19 03:34:51', '2025-05-19 03:34:51'),
(73, 'App\\Models\\User', 13, 'myapp', 'd1d98bd98d31e74bb92cef34f977b14723784f87c342b62963bede7518d73be2', '[\"*\"]', NULL, NULL, '2025-05-19 09:41:15', '2025-05-19 09:41:15'),
(74, 'App\\Models\\User', 13, 'myapp', '1530e444783275db16ec686f54090b9d4303d21d15d29a7e71b5841e7549b45a', '[\"*\"]', NULL, NULL, '2025-05-19 12:23:33', '2025-05-19 12:23:33'),
(75, 'App\\Models\\User', 13, 'myapp', 'c6b6e7bb794b36c3238df2a29668752562c15c50bd9184c4f6430ec336bde98c', '[\"*\"]', NULL, NULL, '2025-05-20 01:19:57', '2025-05-20 01:19:57'),
(76, 'App\\Models\\User', 13, 'myapp', '7280a8c092a4befbce44842b205643dfd23a1f3efadf79a210dcbd212487d9dd', '[\"*\"]', NULL, NULL, '2025-05-20 04:13:24', '2025-05-20 04:13:24'),
(77, 'App\\Models\\User', 13, 'myapp', '5cf24659e70097471ce5ed51a03cfee8e9e10676c3ec47cc141126bda84a76a0', '[\"*\"]', NULL, NULL, '2025-05-20 09:51:58', '2025-05-20 09:51:58'),
(78, 'App\\Models\\User', 13, 'myapp', 'b662ddfc83b688349a85163b7671c87536e4cfc556fcb6e7c4caabfece25adee', '[\"*\"]', NULL, NULL, '2025-05-21 01:24:05', '2025-05-21 01:24:05'),
(79, 'App\\Models\\User', 13, 'myapp', 'e244971e8790bf7fe9c65677796f181c929b29dc91f054ae1d501556b2d85534', '[\"*\"]', NULL, NULL, '2025-05-21 08:03:24', '2025-05-21 08:03:24'),
(80, 'App\\Models\\User', 13, 'myapp', '0579a6927da34d0db0beb6d3986ebdfb8c7486dea019fcd005dc4420b486a2f0', '[\"*\"]', NULL, NULL, '2025-05-22 03:48:26', '2025-05-22 03:48:26'),
(81, 'App\\Models\\User', 13, 'myapp', 'adc54bdfcfcc6789246628c1a410639fa1650121f416910f50151119112ea2b3', '[\"*\"]', NULL, NULL, '2025-05-22 09:22:23', '2025-05-22 09:22:23'),
(82, 'App\\Models\\User', 13, 'myapp', '1303b566e91d2bae5c3144d55d42cd73e2aacdd7fe265b8ff479011e8c454b92', '[\"*\"]', NULL, NULL, '2025-05-23 02:19:09', '2025-05-23 02:19:09'),
(83, 'App\\Models\\User', 17, 'myapp', '3fb5d85233ce46e45771340f5fc1c2f66059d495834812e468e8e1ac749dc417', '[\"*\"]', NULL, NULL, '2025-05-23 02:42:50', '2025-05-23 02:42:50'),
(84, 'App\\Models\\User', 17, 'myapp', '651d023fcf03f522d3011b1f83a543d1ac2247e360bde3b205397edcce5b1f46', '[\"*\"]', NULL, NULL, '2025-05-23 02:43:04', '2025-05-23 02:43:04'),
(85, 'App\\Models\\User', 17, 'myapp', '4fcfc0ee8078260f4a33dd531febf15a194b6529f93b4915c77cdbe3086ac581', '[\"*\"]', NULL, NULL, '2025-05-23 08:12:10', '2025-05-23 08:12:10'),
(86, 'App\\Models\\User', 17, 'myapp', 'a1d29ce3b9d30e0a2bb8211c9587e2e40bdd34e22799aaee3b2b41a106bd2680', '[\"*\"]', NULL, NULL, '2025-05-23 09:15:23', '2025-05-23 09:15:23'),
(87, 'App\\Models\\User', 18, 'myapp', '50fbc0fd4074105be5cc9e93d4ca39da05f9767e6f55139e23c1f646ea074eb1', '[\"*\"]', NULL, NULL, '2025-05-23 09:15:56', '2025-05-23 09:15:56'),
(88, 'App\\Models\\User', 18, 'myapp', '1efab888a7e4bb47ccca2b6b5d67e484fbfdc58936a2b12456a93b37212bfc96', '[\"*\"]', NULL, NULL, '2025-05-23 09:16:08', '2025-05-23 09:16:08'),
(89, 'App\\Models\\User', 17, 'myapp', '62cc88ef22f656acbfbd034c3652df5b8f98c6b2c4aaa5362d972f1009b64894', '[\"*\"]', NULL, NULL, '2025-05-23 09:23:00', '2025-05-23 09:23:00'),
(90, 'App\\Models\\User', 17, 'myapp', 'c7e8d6ccebd74e5aa99fe55f442cd5f8e01749926563da29f54691905cd940a4', '[\"*\"]', NULL, NULL, '2025-05-23 10:43:31', '2025-05-23 10:43:31'),
(91, 'App\\Models\\User', 18, 'myapp', 'e7e3154837d02a5694aad90fbf8802c3a6ea65cd266e62e0c603691e1ddd988b', '[\"*\"]', NULL, NULL, '2025-05-23 10:44:13', '2025-05-23 10:44:13'),
(92, 'App\\Models\\User', 17, 'myapp', '042f9a49a89b323394a75fae311b2d463be08a834051744c3bdb538a9fff2d3b', '[\"*\"]', NULL, NULL, '2025-05-23 10:45:31', '2025-05-23 10:45:31'),
(93, 'App\\Models\\User', 18, 'myapp', '5abc0ae5728bac4d37fa3260500299fd987087f4e4ba34aff3e1181cab3d82ee', '[\"*\"]', NULL, NULL, '2025-05-23 10:49:31', '2025-05-23 10:49:31'),
(94, 'App\\Models\\User', 17, 'myapp', '0f41cff7e1bab6da629f7ac6ff8d323b548fad6c6dd0c8107734e283d36ceeea', '[\"*\"]', NULL, NULL, '2025-05-23 11:03:49', '2025-05-23 11:03:49'),
(95, 'App\\Models\\User', 17, 'myapp', 'bfe48ed53c79870d533593c7b2b1c09a526b7be6f0cdcdfbee1def46b96980cc', '[\"*\"]', NULL, NULL, '2025-05-24 02:49:45', '2025-05-24 02:49:45'),
(96, 'App\\Models\\User', 18, 'myapp', '1e2c7434af9b43012d78ad6b4646a0778c27ac6a94329abc837fda354a5707b1', '[\"*\"]', NULL, NULL, '2025-05-24 02:51:46', '2025-05-24 02:51:46'),
(97, 'App\\Models\\User', 18, 'myapp', 'dc0dc0b746ad2ee36baf6db8e82267ca76126dba747dfba02de26cf66d83814b', '[\"*\"]', NULL, NULL, '2025-05-24 02:54:52', '2025-05-24 02:54:52'),
(98, 'App\\Models\\User', 17, 'myapp', 'e7e89846a2cbdd4f66fee42b266222a034e12de1d36ff1b4af9e6983a701d8f4', '[\"*\"]', NULL, NULL, '2025-05-24 02:55:40', '2025-05-24 02:55:40'),
(99, 'App\\Models\\User', 13, 'myapp', '5e0fb196feb8adaacec962298fc64579b795ea37fd716096d9a9817b8d6adea1', '[\"*\"]', NULL, NULL, '2025-05-24 02:56:26', '2025-05-24 02:56:26'),
(100, 'App\\Models\\User', 18, 'myapp', '3d0659e2c067477447a127b575b5168f070a2932b9bcd7f651fad44d8280859d', '[\"*\"]', NULL, NULL, '2025-05-24 04:13:02', '2025-05-24 04:13:02'),
(101, 'App\\Models\\User', 17, 'myapp', 'f963c84919d6d56443fce38bb8df6ce86f110289bb5f419f3a5038123f6e7985', '[\"*\"]', NULL, NULL, '2025-05-24 04:14:41', '2025-05-24 04:14:41'),
(102, 'App\\Models\\User', 13, 'myapp', '1dfa935a71cd431b0bca2b483d0d5199594caa5f193a1f33d6e3f4433306f9fb', '[\"*\"]', NULL, NULL, '2025-05-24 04:15:24', '2025-05-24 04:15:24'),
(103, 'App\\Models\\User', 17, 'myapp', 'ffdf4eee4d45d4f32c8eea7a872316d6a93d4d50737ce206d402679e946d73be', '[\"*\"]', NULL, NULL, '2025-05-24 04:52:28', '2025-05-24 04:52:28'),
(104, 'App\\Models\\User', 13, 'myapp', '49c1d9dfd83eb90a550ec653db51ef0c771b4c75e8905dcf99abf2964f33ec4b', '[\"*\"]', NULL, NULL, '2025-05-24 04:53:05', '2025-05-24 04:53:05'),
(105, 'App\\Models\\User', 17, 'myapp', '1289fda2a5c8e58f0b207c3f9678c8dd317e3fbe0c608d7be9b147e45c0bde69', '[\"*\"]', NULL, NULL, '2025-05-24 04:53:44', '2025-05-24 04:53:44'),
(106, 'App\\Models\\User', 18, 'myapp', '2e839a2087a9b293cb0f3e4289fcd2aedee93d5aae0e26199bad34277016f995', '[\"*\"]', NULL, NULL, '2025-05-24 04:54:55', '2025-05-24 04:54:55'),
(107, 'App\\Models\\User', 13, 'myapp', 'f84a65543558fc5b77c00b7de30f9e679c295d95444b0be639d079fbd0d30277', '[\"*\"]', NULL, NULL, '2025-05-24 04:57:40', '2025-05-24 04:57:40'),
(108, 'App\\Models\\User', 18, 'myapp', 'c4fd44270d33c37f1c5c5d0408759210139d35ddbecb0934f528968ce7b2a5e1', '[\"*\"]', NULL, NULL, '2025-05-24 06:05:49', '2025-05-24 06:05:49'),
(109, 'App\\Models\\User', 13, 'myapp', '52b1e295afe80b5619130968fb3fa61ae6e0e5f1556972bbf5d33b880776131d', '[\"*\"]', NULL, NULL, '2025-05-24 06:06:16', '2025-05-24 06:06:16'),
(110, 'App\\Models\\User', 18, 'myapp', '9e4ff46649cec1657bc10a429fea4720cf9b003c64b4df816292f2ee9d64d098', '[\"*\"]', NULL, NULL, '2025-05-24 09:07:54', '2025-05-24 09:07:54'),
(111, 'App\\Models\\User', 18, 'myapp', 'f3c7ac307eb86b63291b3564f0986e0ce96df8e735f64b84035fdffb55ab4759', '[\"*\"]', NULL, NULL, '2025-05-24 09:33:59', '2025-05-24 09:33:59'),
(112, 'App\\Models\\User', 13, 'myapp', 'c39c156fb2d8c1e3d55711ffabdf5ee4a56b39488b354706ff83a3c81e81e82a', '[\"*\"]', NULL, NULL, '2025-05-24 09:46:27', '2025-05-24 09:46:27'),
(113, 'App\\Models\\User', 17, 'myapp', 'ab92c34ea88815a29e019626f6021a7b4935747eddbf6af806c24cb1ed8da1c5', '[\"*\"]', NULL, NULL, '2025-05-24 10:06:56', '2025-05-24 10:06:56'),
(114, 'App\\Models\\User', 13, 'myapp', 'dc82c30cd8f75829304e3bf60129257baa86a367f118eb24886382f8f5bd6434', '[\"*\"]', NULL, NULL, '2025-05-24 10:08:51', '2025-05-24 10:08:51'),
(115, 'App\\Models\\User', 13, 'myapp', 'fc6266b815619e111559857ce80019440ccab18a3cc099fd2cfe0338dfbc1a8f', '[\"*\"]', NULL, NULL, '2025-05-24 11:56:43', '2025-05-24 11:56:43'),
(116, 'App\\Models\\User', 19, 'myapp', 'a248cb282858b26e4375b7b6e8c63e3aee0330c851a4a9dcf874cad56f95abb3', '[\"*\"]', NULL, NULL, '2025-05-26 03:03:56', '2025-05-26 03:03:56'),
(117, 'App\\Models\\User', 19, 'myapp', 'a59c2343a4c13d2c438030ed11d6c0eae0df276b87e6dd246c29ffdc98bb37cb', '[\"*\"]', NULL, NULL, '2025-05-26 03:04:11', '2025-05-26 03:04:11'),
(118, 'App\\Models\\User', 20, 'myapp', '4dcf22f7a2ec69350b06dccefcef9853cd7e7668dcc3c701cde0944c088d1047', '[\"*\"]', NULL, NULL, '2025-05-26 03:07:19', '2025-05-26 03:07:19'),
(119, 'App\\Models\\User', 20, 'myapp', 'c7511897c42a503980b8552baf6743f98a75849312d58656713c1b5f44a27c93', '[\"*\"]', NULL, NULL, '2025-05-26 03:07:31', '2025-05-26 03:07:31'),
(120, 'App\\Models\\User', 13, 'myapp', '22c721909c60cce5ff0cdaefb03950df6c2f258c8c9a2a673abbb2c5b34d7933', '[\"*\"]', NULL, NULL, '2025-05-26 03:08:37', '2025-05-26 03:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `room_type_id`, `created_at`, `updated_at`) VALUES
(13, '102s', 1, '2025-05-22 10:23:43', '2025-05-22 10:23:43'),
(14, '104s', 1, '2025-05-22 10:23:57', '2025-05-22 10:23:57'),
(15, '103s', 1, '2025-05-22 10:24:06', '2025-05-22 10:24:06'),
(16, '201d', 3, '2025-05-22 10:24:23', '2025-05-22 10:24:23'),
(17, '202d', 3, '2025-05-22 10:24:36', '2025-05-22 10:24:36'),
(18, '203d', 3, '2025-05-22 10:24:44', '2025-05-22 10:24:44'),
(19, '301s', 4, '2025-05-22 10:24:59', '2025-05-22 10:24:59'),
(20, '302s', 4, '2025-05-22 10:25:08', '2025-05-22 10:25:08'),
(21, '401e', 5, '2025-05-22 10:25:18', '2025-05-22 10:25:18'),
(22, '402e', 5, '2025-05-22 10:25:26', '2025-05-22 10:25:26'),
(23, '403e', 5, '2025-05-22 10:25:33', '2025-05-22 10:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `category_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `title`, `detail`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Superior Room', 'Larger size, premium toiletries, minibar . Suitable for couples or business travelers.', '[\"eobtNdni23AM3GhioA02W2LD1l19iVoYPwCS4Ewq.jpg\",\"VP4pu7sCCwkJt3Bz1gx77IS8uJPli4kRhx0sUaM4.jpg\",\"OgzRnJlB7XbqBfJYjMuYLUjfDqlE51imEqOcXYTT.jpg\"]', '2025-05-15 02:54:44', '2025-05-21 09:45:32'),
(3, 'Delux Room', 'Enhanced amenities (sofa, minibar, premium toiletries). Often offers better views.', '[\"wUWpEwibbhMO51jW9uRmDiMwo3ajJGezkKLGsRWH.jpg\",\"lsX0DaQrnq7HTBBn5B2Pa06WVjcr67hjfqUwUAnE.jpg\"]', '2025-05-21 09:59:19', '2025-05-21 10:32:36'),
(4, 'Standard Room', 'Basic amenities (bed, table, chair, TV, wardrobe). Suitable for solo travelers or couples.', '[\"b0JoyHIBSl8dJoy8l7iSDR1Binzsd1q3C5pulYtI.jpg\",\"uNMf9fo2qeA8j7gnLBvNqG4atI8Ecrzldij8peb3.jpg\"]', '2025-05-21 10:00:23', '2025-05-21 10:00:23'),
(5, 'Economy Room', 'Smaller size, basic amenities, limited view. Suitable for budget travelers.', '[\"0fUa9H7GzlxFV7apcULgxhspKIHp3YTmyJLauTEW.webp\",\"yznnQqUOxhPolLnoLoNdMqIPoq18KsI56y9k6fJC.jpg\"]', '2025-05-21 10:01:14', '2025-05-21 10:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `service_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `detail`, `service_image`, `created_at`, `updated_at`) VALUES
(6, 'Parking', 'We offer convenient and secure parking facilities to ensure a hassle-free experience for our guests. Our spacious parking area is monitored 24/7 with CCTV surveillance and security personnel, providing peace of mind.Enjoy free parking for hotel guests and affordable rates for visitors. We also provide designated parking spots for differently-abled guests to ensure accessibility and comfort. 🚗🅿️', 'R0lUoN1RRGhFbJxGEnpT85e8St3hppoZl4hmJyEk.webp', '2025-05-21 05:20:04', '2025-05-21 10:33:00'),
(7, 'Rooms', 'We offer elegantly designed rooms with modern amenities for a relaxing stay. 🛋️✨ Enjoy high-speed Wi-Fi 📶, flat-screen TVs 📺, air conditioning ❄️, and cozy bedding 🛏️. Benefit from 24/7 room service, daily housekeeping 🧹, and complimentary toiletries 🧴. For added comfort, we provide in-room dining 🍽️ with delicious options. Whether for business or leisure, our spacious rooms guarantee a memorable experience. 🌟🏨', 'NXltJnDnmqgGvd6kyDhFyLtspKJQm5My1fZz6ZMQ.avif', '2025-05-21 08:22:53', '2025-05-21 08:22:53'),
(8, 'Cafe', 'Relax and unwind at our cozy cafe. ☕✨ Enjoy freshly brewed coffee ☕, a variety of teas 🍵, and delicious pastries 🥐. Our diverse menu offers light snacks 🥪, refreshing beverages 🥤, and decadent desserts 🍰. Stay connected with free Wi-Fi 📶 and enjoy the comfort of our inviting seating 🛋️. Whether catching up with friends or enjoying a quiet moment, our cafe guarantees a delightful experience. 🌟🍽️', 'oVLAMLTV6LZHWGo8K0or1rqShBwes8flY54cIVOp.jpg', '2025-05-21 08:23:19', '2025-05-21 08:23:19'),
(10, 'Swimming Pool', 'Relax and rejuvenate at our luxurious swimming pool. 🌊✨ Enjoy a refreshing dip in the crystal-clear waters , perfect for both leisure and fitness. Unwind on comfortable sunbeds 🛋️ or lounge under shaded cabanas 🌴. Savor poolside service 🍹 with refreshing drinks and light snacks 🥗. Whether you\'re swimming laps, splashing with loved ones, or simply enjoying the serene ambiance, our pool guarantees a perfect escape for relaxation and fun. 🌟🏖️', 'E0Td38iAh6fA2NRfc9VFRtsSF31y7zG3VKBPFALW.jpg', '2025-05-21 08:31:36', '2025-05-21 08:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c6zrKAy0Y2IT2xIWOtz5xPq1sVW1rRrehI7f5OT5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0czaE50VGswRXhZRUNLbVJMeFhUR21rQU9BZjBkSEozSHBQYVlUViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748111598),
('Ty9G0FMJOZVUZxJKWxuW47AYYhHfhcuk8NMFJLLA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlJOTmx3SWlhWktkMTIzRG5GRDlHTG1KbWFpZkIzQW5hNndQRFBZUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748252705);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `phone`, `designation`, `department_id`, `created_at`, `updated_at`) VALUES
(4, 'meghraj', 'meghraj@gmail.com', '654654654', 'md', 5, NULL, NULL),
(7, 'babu', 'babu2@gmail.com', '975545', 'director', 6, NULL, '2025-05-19 10:03:00'),
(10, 'anugya', 'anugya@gmail.com', '8109912840', 'md', 7, NULL, '2025-05-19 10:03:14'),
(11, 'amar', 'amar@gmail.com', '81099', 'Finance Manager', 5, '2025-05-20 06:33:35', '2025-05-20 06:33:35'),
(12, 'papa', 'papa@gmail.com', '454545', 'Bartender', 8, '2025-05-20 06:37:27', '2025-05-20 06:37:27'),
(13, 'mama', 'mama@gmail.com', '8848484', 'Accountant', 8, '2025-05-20 10:53:45', '2025-05-20 10:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `city`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Meghadmin', 'Admin City', 'adminmeghraj@gmail.com', NULL, '$2y$12$451nRNJ12V5A.hyebdk5QuF59mLbb.dNXIN.T4Hl8f9NrwFAqsGJi', 'admin', NULL, '2025-04-01 03:24:00', '2025-04-01 03:24:00'),
(19, 'suresh', 'raipur', 'suresh@gmail.com', NULL, '$2y$12$y2j9hnuqcb.Der9KAK0eze6OxzwWueLL8ZxpKifROSy64cjdAj5t2', 'user', NULL, '2025-05-26 03:03:56', '2025-05-26 03:03:56'),
(20, 'dheeraj', 'dhamtari', 'dheeraj@gmail.com', NULL, '$2y$12$MCyMB.eVb.byIMvUUgIF/ONxTZ6fHqaCL7M6dmu1.YTcVy5yc68d6', 'user', NULL, '2025-05-26 03:07:19', '2025-05-26 03:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2020 at 07:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ခင်ခင်ထူး', NULL, '2020-09-03 03:16:01', '2020-09-03 03:16:01'),
(2, 'Jue', NULL, '2020-09-03 03:16:23', '2020-09-03 03:16:23'),
(3, 'ခင်နှင်းကြည်သာ', NULL, '2020-09-03 03:16:46', '2020-09-03 03:16:46'),
(4, 'လယ်တွင်းသား စောချစ်', NULL, '2020-09-03 03:17:12', '2020-09-03 03:17:12'),
(5, 'ဦးဘုန်း(ဓာတု)', NULL, '2020-09-03 03:17:51', '2020-09-03 03:17:51'),
(6, 'ဖေမြင့်', NULL, '2020-09-03 03:18:16', '2020-09-03 03:18:16'),
(7, 'Mya Than Thint', NULL, '2020-09-03 03:18:39', '2020-09-03 03:18:39'),
(8, 'ညီပုလေး', NULL, '2020-09-03 03:19:18', '2020-09-03 03:19:18'),
(9, 'မိုးမိုး (အင်းလျား)', NULL, '2020-09-03 03:19:41', '2020-09-03 03:19:41'),
(10, 'ပုညခင်', NULL, '2020-09-03 03:19:57', '2020-09-03 03:19:57'),
(11, 'မင်းလူ', NULL, '2020-09-03 03:20:17', '2020-09-03 03:20:17'),
(12, 'ကိုဖေသိန်း', NULL, '2020-09-03 03:20:39', '2020-09-03 03:20:39'),
(13, 'ဒေါက်တာ သန်းထွန်း', NULL, '2020-09-03 03:20:59', '2020-09-03 03:20:59'),
(14, 'ကာတွန်း (မင်းဇော်)', NULL, '2020-09-03 03:21:22', '2020-09-03 03:21:22'),
(15, 'ဆွေမင်း (ဓနုဖြူ)', NULL, '2020-09-03 03:21:54', '2020-09-03 03:21:54'),
(16, 'Joshua Bloch', NULL, '2020-09-03 03:22:20', '2020-09-03 03:22:20'),
(17, 'Krishna Rungta', NULL, '2020-09-03 03:22:36', '2020-09-03 03:22:36'),
(18, 'Dr Uday Kamath', NULL, '2020-09-03 03:22:54', '2020-09-03 03:22:54'),
(19, 'Krishna Chappella', NULL, '2020-09-03 03:23:14', '2020-09-03 03:23:14'),
(20, 'Md Rezaul Karim', NULL, '2020-09-03 03:23:34', '2020-09-03 03:23:34'),
(21, 'Cay S.Horstmann', NULL, '2020-09-03 03:23:51', '2020-09-03 03:23:51'),
(22, 'Herbert Schildt', NULL, '2020-09-03 03:24:22', '2020-09-03 03:24:22'),
(23, 'Robert Bruce', NULL, '2020-09-03 03:39:35', '2020-09-03 03:39:35'),
(24, 'Matt Stauffer', NULL, '2020-09-03 03:39:51', '2020-09-03 03:39:51'),
(25, 'Anthany Gore', NULL, '2020-09-03 03:40:02', '2020-09-03 03:40:02'),
(26, 'Sheikh Heera', NULL, '2020-09-03 03:40:16', '2020-09-03 03:40:16'),
(27, 'Jesse Griffin', NULL, '2020-09-03 03:40:31', '2020-09-03 03:40:31'),
(28, 'Linus Torvalds', NULL, '2020-09-03 03:40:51', '2020-09-03 03:40:51'),
(29, 'Ben Frain', NULL, '2020-09-03 03:41:03', '2020-09-03 03:41:03'),
(30, 'Roxane Anquetil', NULL, '2020-09-03 03:41:18', '2020-09-03 03:41:18'),
(31, 'Alex Libby', NULL, '2020-09-03 03:41:34', '2020-09-03 03:41:34'),
(32, 'Mark H Webster', NULL, '2020-09-03 03:41:57', '2020-09-03 03:41:57'),
(33, 'Patrick M Carey', NULL, '2020-09-03 03:42:17', '2020-09-03 03:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `subcategory_id`, `author_id`, `name`, `pdf`, `price`, `publisher`, `photo`, `isbn`, `edition`, `review`, `status`, `publish_date`, `discount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'မအိမ်ကံ', '/pdf/pdf', '3000', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991324541.jpeg\",\"images\\/book\\/15991324542.jpeg\"]', '90-675-34', '0', 'ချောမောလှပသော သူကြီးသမီး ဇောင်းချမ်းကုန်သူလေးမအိမ်ကံ ငယ်ငယ်ကတည်းက ဖက်စိမ်းကွမ်းတောင်ကိုင် ဖြစ်ဖို့ အိမ်မက်အကြီးကြီးမက်ခဲ့တဲ့ မအိမ်ကံ.....', 0, '1985-07-11', '0', NULL, '2020-09-03 04:57:34', '2020-09-03 09:44:50'),
(2, 3, 1, 'ပန်းစီးကြိုး', '', '2500', 'ပန်းကံ့ကော် စာပေ', '[\"images\\/book\\/15991327261.jpeg\",\"images\\/book\\/15991327262.jpeg\"]', '76-123-54', '0', 'အလွန်ကောင်းသော စာအုပ် ဖြစ်သည်။', 0, '1961-07-03', '0', NULL, '2020-09-03 05:02:06', '2020-09-03 09:05:18'),
(3, 4, 1, 'မဂ်လာလှည်း', '', '3500', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991329021.jpeg\",\"images\\/book\\/15991329022.jpeg\"]', '12-459-23', 'တတိယအကြိမ်', 'အလွန်ကောင်းသော စာအုပ်ဖြစ်သည်။', 0, '1988-08-03', '3000', NULL, '2020-09-03 05:05:02', '2020-09-03 05:05:02'),
(4, 15, 15, 'ရွာကျောင်းက ခေါင်းလောင်းသံ', '', '1200', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991332561.jpeg\",\"images\\/book\\/15991332562.jpeg\"]', '90-87956', 'ပထမအကြိမ်', 'ဤစာအုပ်သည် ပျော်ရွင်မှုကို&nbsp; ပေးသော စာအုပ်တစ်အုပ်ဖြစ်သည်။', 0, '1990-06-03', '800', NULL, '2020-09-03 05:10:56', '2020-09-03 05:10:56'),
(5, 15, 15, 'မာယာပင်လယ်', '', '2000', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991333991.jpeg\",\"images\\/book\\/15991333992.jpeg\"]', '34-12-590', 'တတိယအကြိမ်', 'ဤစာအုပ်သည် ကလေးများအတွက် ဖတ်သင့်သော စာအုပ်တစ်အုပ်ဖြစ်သည်။', 0, '1997-10-14', '0', NULL, '2020-09-03 05:13:19', '2020-09-03 05:13:19'),
(6, 15, 15, 'နတ်သမီးစံအိမ်', '', '800', 'ပန်းကံ့ကော် စာပေ', '[\"images\\/book\\/15991335531.jpeg\",\"images\\/book\\/15991335532.jpeg\"]', '12-58-095', 'ဒုတိယအကြိမ်', 'ဤစာအုပ်သည် နတ်သမီးလေးအကြောင်းရေးဖွဲ့ထားသော စာအုပ်တစ်အုပ် ဖြစ်သည်။', 0, '1998-02-03', '0', NULL, '2020-09-03 05:15:53', '2020-09-03 05:15:53'),
(7, 5, 14, 'အချစ်တစ်ခုတည်း', '', '1200', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991336761.jpeg\",\"images\\/book\\/15991336762.jpeg\"]', '78-680-23', 'ပထမအကြိမ်', 'ဤစာအုပ်သည် အချစ်အကြောင်းရေးဖွဲ့ထားသော စာအုပ်ဖြစ်သည်။', 0, '1991-05-05', '0', NULL, '2020-09-03 05:17:56', '2020-09-03 05:17:56'),
(8, 5, 14, 'အလုပ်', '', '1200', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991338151.jpeg\",\"images\\/book\\/15991338152.jpeg\"]', '98-678-23', 'ဒုတိယအကြိမ်', 'ဤစာအုပ်သည် ပျော်ရွင်မှုပေးနိုင်သော စာအုပ်ဖြစ်သည်။', 0, '2003-11-03', '0', NULL, '2020-09-03 05:20:15', '2020-09-03 05:20:15'),
(9, 5, 14, 'လူပျိုဘိုဘို', '', '800', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991348071.jpeg\",\"images\\/book\\/15991348072.jpeg\"]', '23-346-90', 'ပထမအကြိမ်', 'ဤစာအုပ်သည် ကလေးများအတွက် ဖတ်သင်.သော စာအုပ်ဖြစ်သည်။', 0, '1988-02-02', '0', NULL, '2020-09-03 05:36:47', '2020-09-03 05:36:47'),
(10, 7, 13, 'ပျူတွေဘယ်ပျေက်သွားတာလဲ', '', '3000', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991351541.png\",\"images\\/book\\/15991351542.jpeg\"]', '23-987-13', '0', 'ဤစာအုပ် သည် ပျူ', 0, '1996-03-03', '0', NULL, '2020-09-03 05:42:34', '2020-09-03 05:43:45'),
(11, 1, 3, 'ချစ်တဲ့သူကိုသတိရတဲ့အခါ', '', '2500', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991355261.jpeg\"]', '08-78-5789', 'ပထမအကြိမ်', 'sfghjfghj./nb,nmhfk', 0, '1988-05-03', '0', NULL, '2020-09-03 05:48:46', '2020-09-03 05:48:46'),
(12, 2, 11, 'ထက်မြက်တဲ့ဓားသွားပေါ်ကချိုမြမြပျားရည်စက်များ', '', '3500', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991358371.jpeg\"]', '90-78-456', 'ဒုတိယအကြိမ်', 'ိ်ါ့ြုးူ\'းုြုြ့\'ူုူု့ြု်', 0, '1993-02-03', '0', NULL, '2020-09-03 05:53:57', '2020-09-03 05:53:57'),
(13, 4, 8, 'လမင်းရဲ့ချိုသာတဲ့လက်ခုပ်သံ', '', '3000', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991364651.jpeg\"]', '98-56-456', 'တတိယအကြိမ်', 'ျ်ါ့ြုူးုသးင့ြ,ါ့ိုူစ\'ငသြညုဘ့ြို့', 0, '1987-03-03', '0', NULL, '2020-09-03 06:04:25', '2020-09-03 06:04:25'),
(14, 2, 8, 'လူအအိမ်မက်', '', '3000', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991366941.jpeg\"]', '32-45-765', 'ဒုတိယအကြိမ်', 'ghjkl;kjjgjkguikfgkh', 0, '1990-11-03', '0', NULL, '2020-09-03 06:08:14', '2020-09-03 06:08:14'),
(15, 3, 8, 'မြေးသူကြီး', '', '3500', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991369701.jpeg\"]', '23-122-23', 'တတိယအကြိမ်', '<p>ဖ်ိါ့ြုူးါ့ြုူး</p><p>\'းူုြ့ြြု</p>', 0, '1989-03-03', '0', NULL, '2020-09-03 06:12:50', '2020-09-03 06:12:50'),
(16, 4, 5, 'အနောက်တောင်အရပ်မှာလာခဲ့သူ', '', '3000', 'ပန်းကံ့ကော် စာပေ', '[\"images\\/book\\/15991372131.jpeg\"]', '09-7643-00', 'ပထမအကြိမ်', 'fghjkl;', 0, '1986-03-03', '0', NULL, '2020-09-03 06:16:53', '2020-09-03 06:16:53'),
(17, 4, 10, 'ချစ်ချင်းတရား၏အလိုတော်အတိုင်း', '', '3500', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991378821.jpeg\"]', '89-456-56', 'တတိယအကြိမ်', 'ghgjkl;\';lk;jhhgmhkl;\'j', 0, '1993-11-03', '0', NULL, '2020-09-03 06:28:02', '2020-09-03 06:28:02'),
(18, 4, 10, 'မဂ်လာပါဆရာမ', '', '3500', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991383501.jpeg\"]', '90-675-889', 'ဆဌမအကြိမ်', '်ါဘု.ြုြုါြ့ြနကအြ,/ုသသင', 0, '1996-12-03', '0', NULL, '2020-09-03 06:35:50', '2020-09-03 06:35:50'),
(19, 4, 10, 'လက်ကျန်လရောင်', '', '4000', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991386191.jpeg\"]', '90-675-34', 'ဆဌမအကြိမ်', 'sdfghjkl;\'kjmj,k.l', 0, '1990-09-03', '0', NULL, '2020-09-03 06:40:19', '2020-09-03 06:40:19'),
(20, 2, 5, 'သော့', '', '3500', 'အတွေးရနံ့ စာပေ', '[\"images\\/book\\/15991388211.jpeg\"]', '88-77-09', 'ဒုတိယအကြိမ်', 'asdfghjkl', 0, '1988-07-03', '0', NULL, '2020-09-03 06:43:41', '2020-09-03 06:43:41'),
(21, 2, 5, 'ဖူးသစ်နွယ်', '', '3500', 'ကျွဲဆည်ကန်', '[\"images\\/book\\/15991391131.jpeg\"]', '09-99-88', 'တတိယအကြိမ်', 'sdfghjkjl', 0, '1995-07-03', '0', NULL, '2020-09-03 06:48:33', '2020-09-03 06:48:33'),
(22, 3, 2, 'fghjk', '', '12345', 'စိတ်ကူးချိုချို စာပေ', '[\"images\\/book\\/15991511431.jpeg\"]', '456789', 'ပထမအကြိမ်', 'ghtjhk', 0, '2020-09-30', '0', NULL, '2020-09-03 10:09:03', '2020-09-03 10:09:03'),
(23, 11, 14, 'ehnm;.;', '', '2345678', 'fghhjlml', '[\"images\\/book\\/15991512711.jpeg\"]', '123456', 'hjh;', 'ghjkl', 0, '2020-09-15', '0', NULL, '2020-09-03 10:11:11', '2020-09-03 10:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Literature', 'images/category/1599127099.jpeg', NULL, '2020-09-03 03:28:19', '2020-09-03 03:28:19'),
(2, 'Novel', 'images/category/1599127244.png', NULL, '2020-09-03 03:30:44', '2020-09-03 03:30:44'),
(3, 'cartoons', 'images/category/1599127356.jpeg', NULL, '2020-09-03 03:32:36', '2020-09-03 03:32:36'),
(4, 'History', 'images/category/1599127456.jpeg', NULL, '2020-09-03 03:34:16', '2020-09-03 03:34:16'),
(5, 'IT Language', 'images/category/1599127642.jpeg', NULL, '2020-09-03 03:37:22', '2020-09-03 03:37:22'),
(6, 'Essay', 'images/category/1599127696.jpeg', NULL, '2020-09-03 03:38:16', '2020-09-03 03:38:16');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instocks`
--

CREATE TABLE `instocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(26, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(27, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(28, '2016_06_01_000004_create_oauth_clients_table', 1),
(29, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2020_08_30_184735_create_categories_table', 1),
(32, '2020_08_30_184745_create_subcategories_table', 1),
(33, '2020_08_30_184758_create_authors_table', 1),
(34, '2020_08_30_184812_create_books_table', 1),
(35, '2020_08_30_184824_create_instocks_table', 1),
(36, '2020_08_30_184836_create_orders_table', 1),
(37, '2020_08_30_184844_create_orderdetails_table', 1),
(38, '2020_08_30_190453_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucherno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderdate` date NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-08-31 02:40:48', '2020-08-31 02:40:48'),
(2, 'customer', 'web', '2020-08-31 02:40:48', '2020-08-31 02:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Asesthetic Literature', 1, 'images/subcategory/1599128171.jpeg', NULL, '2020-09-03 03:46:11', '2020-09-03 03:46:11'),
(2, 'Knowledge literature', 1, 'images/subcategory/1599128239.jpeg', NULL, '2020-09-03 03:47:19', '2020-09-03 03:47:19'),
(3, 'Short Stories', 2, 'images/subcategory/1599128325.jpeg', NULL, '2020-09-03 03:48:45', '2020-09-03 03:48:45'),
(4, 'Long Stories', 2, 'images/subcategory/1599128487.png', NULL, '2020-09-03 03:51:27', '2020-09-03 03:51:27'),
(5, 'ဘိုဘို (မင်းဇော်)', 3, 'images/subcategory/1599128614.jpeg', NULL, '2020-09-03 03:53:34', '2020-09-03 03:53:34'),
(6, 'ကမ္ဘာ.သမိုင်း', 4, 'images/subcategory/1599128783.jpeg', NULL, '2020-09-03 03:56:23', '2020-09-03 03:56:23'),
(7, 'မြန်မာ.သမိုင်း', 4, 'images/subcategory/1599128949.jpeg', NULL, '2020-09-03 03:59:09', '2020-09-03 03:59:09'),
(8, 'Java', 5, 'images/subcategory/1599129072.jpeg', NULL, '2020-09-03 03:59:34', '2020-09-03 04:01:12'),
(9, 'Laravel', 5, 'images/subcategory/1599129120.jpeg', NULL, '2020-09-03 04:02:00', '2020-09-03 04:02:00'),
(10, 'PHP', 5, 'images/subcategory/1599129218.jpeg', NULL, '2020-09-03 04:03:38', '2020-09-03 04:03:38'),
(11, 'HTML', 5, 'images/subcategory/1599129315.png', NULL, '2020-09-03 04:05:15', '2020-09-03 04:05:15'),
(12, 'Primary School Essay', 6, 'images/subcategory/1599129880.png', NULL, '2020-09-03 04:14:40', '2020-09-03 04:14:40'),
(13, 'Middle School Essay', 6, 'images/subcategory/1599129964.png', NULL, '2020-09-03 04:16:04', '2020-09-03 04:16:04'),
(14, 'High School Essay', 6, 'images/subcategory/1599130153.jpeg', NULL, '2020-09-03 04:19:13', '2020-09-03 04:19:13'),
(15, 'မြိုင်ရာဇာ တွတ်ပီ', 3, 'images/subcategory/1599133023.jpeg', NULL, '2020-09-03 05:07:03', '2020-09-03 05:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `township` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile`, `township`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ko Ko', 'images/user/admin.png', 'Botahtaung', '09981204437', 'admin@gmail.com', NULL, '$2y$10$uGPER01yO5LwSE./pnotWO0UfcohezOIZssGY4rpQ0IVWt2eHZjxC', NULL, '2020-08-31 02:41:26', '2020-08-31 02:41:26'),
(2, 'Snow', 'images/user/customer.png', 'Hlaing', '09981204437', 'snow@gmail.com', NULL, '$2y$10$aXDpD583ckQJDSBKCHFBR.JVWjhZDmo8kx83Q1bg25jqUInwFoe4.', NULL, '2020-08-31 02:41:27', '2020-08-31 02:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instocks`
--
ALTER TABLE `instocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instocks_book_id_foreign` (`book_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails_book_id_foreign` (`book_id`),
  ADD KEY `orderdetails_order_id_foreign` (`order_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instocks`
--
ALTER TABLE `instocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instocks`
--
ALTER TABLE `instocks`
  ADD CONSTRAINT `instocks_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

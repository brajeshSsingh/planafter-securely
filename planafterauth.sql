-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 12:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planafterauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`) VALUES
(23, '2014_10_12_000000_create_users_table'),
(24, '2014_10_12_100000_create_password_resets_table'),
(25, '2016_01_15_105324_create_roles_table'),
(26, '2016_01_15_114412_create_role_user_table'),
(27, '2016_01_26_115212_create_permissions_table'),
(28, '2016_01_26_115523_create_permission_role_table'),
(29, '2016_02_09_132439_create_permission_user_table'),
(30, '2017_03_09_082449_create_social_logins_table'),
(31, '2017_03_09_082526_create_activations_table'),
(32, '2017_03_20_213554_create_themes_table'),
(33, '2017_03_21_042918_create_profiles_table');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `zipcode` int(15) DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `gender`, `date_of_birth`, `zipcode`, `token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aman', 'Kumar', 'Singh', 'jhon123@mailinator.com', '$2y$10$4YoO/AS2ZUoTvr2OPPM2nuqOwaeQ5q.RuVQ.6MANaKhUG2ayFfW5W', 'male', '2017-09-07', NULL, NULL, '2017-09-07 06:00:48', '2017-09-07 06:02:23', NULL),
(2, 'fdsfff', NULL, 'fsssss', NULL, NULL, 'female', '2017-09-07', NULL, NULL, '2017-09-07 06:03:23', '2017-09-07 06:03:23', NULL),
(3, 'fdfgfg', 'gfgfgf', 'gfgfg', NULL, NULL, 'male', '2017-09-07', NULL, NULL, '2017-09-07 06:13:30', '2017-09-07 06:13:30', NULL),
(4, 'india', 'india', 'india', NULL, NULL, 'male', '2017-09-08', NULL, NULL, '2017-09-07 07:31:56', '2017-09-07 07:31:56', NULL),
(5, 'gfggf', 'gfgfg', 'gfgf', NULL, NULL, 'male', '2017-09-20', NULL, NULL, '2017-09-07 07:42:42', '2017-09-07 07:44:14', NULL),
(6, 'gfggf', 'tertrt', 'trtr', NULL, NULL, 'female', '2017-09-07', NULL, NULL, '2017-09-07 07:52:55', '2017-09-07 07:52:55', NULL),
(7, 'lklklkl', 'lklkl', 'jhkjk', NULL, NULL, 'female', '2017-09-07', NULL, NULL, '2017-09-07 07:56:15', '2017-09-07 07:58:11', NULL),
(8, 'wewwrer', 'rererer', 'rerer', NULL, NULL, 'female', '2017-09-07', NULL, NULL, '2017-09-07 08:00:29', '2017-09-07 08:00:29', NULL),
(9, 'fdfdf', 'hghg', 'cccc', NULL, NULL, 'female', '2017-09-08', NULL, NULL, '2017-09-08 00:53:31', '2017-09-08 05:04:52', NULL),
(10, 'rerrr', 'rererr', 'rere', NULL, NULL, 'male', '2017-09-07', NULL, NULL, '2017-09-08 05:12:05', '2017-09-08 05:12:05', NULL),
(11, 'fdfd', 'fdd', 'gfdg', NULL, NULL, 'female', '2017-09-06', NULL, NULL, '2017-09-08 05:15:46', '2017-09-08 05:15:46', NULL),
(12, 'ccccc', 'ccccc', 'ccccccc', NULL, NULL, 'female', '2017-09-04', NULL, NULL, '2017-09-08 05:18:44', '2017-09-08 05:18:44', NULL),
(13, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 05:53:11', '2017-09-08 05:53:11', NULL),
(14, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 05:55:19', '2017-09-08 05:55:19', NULL),
(15, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:02:21', '2017-09-08 06:02:21', NULL),
(16, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:06:00', '2017-09-08 06:06:00', NULL),
(17, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:08:12', '2017-09-08 06:08:12', NULL),
(18, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:09:59', '2017-09-08 06:09:59', NULL),
(19, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:11:26', '2017-09-08 06:11:26', NULL),
(20, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:12:34', '2017-09-08 06:12:34', NULL),
(21, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:13:01', '2017-09-08 06:13:01', NULL),
(22, '', '', '', NULL, NULL, '', '0000-00-00', NULL, NULL, '2017-09-08 06:15:43', '2017-09-08 06:15:43', NULL),
(23, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:16:53', '2017-09-08 06:16:53', NULL),
(24, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:20:58', '2017-09-08 06:20:58', NULL),
(25, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:23:04', '2017-09-08 06:23:04', NULL),
(26, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:03', '2017-09-08 06:27:03', NULL),
(27, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:39', '2017-09-08 06:27:39', NULL),
(28, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:47', '2017-09-08 06:27:47', NULL),
(29, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:59', '2017-09-08 06:27:59', NULL),
(30, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:28:40', '2017-09-08 06:28:40', NULL),
(31, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:28:59', '2017-09-08 06:28:59', NULL),
(32, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:30:04', '2017-09-08 06:30:04', NULL),
(33, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:30:11', '2017-09-08 06:30:11', NULL),
(34, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:31:17', '2017-09-08 06:31:17', NULL),
(35, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:35:20', '2017-09-08 06:35:20', NULL),
(36, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:40:05', '2017-09-08 06:40:05', NULL),
(37, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:41:44', '2017-09-08 06:41:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_card_details`
--

CREATE TABLE `user_card_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `security_code` varchar(100) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer` varchar(50) NOT NULL,
  `insurance_planning` varchar(15) DEFAULT NULL,
  `health_care_planning` varchar(255) NOT NULL,
  `financial_planning` varchar(255) NOT NULL,
  `legal_planning` varchar(15) DEFAULT NULL,
  `future_planning` varchar(15) DEFAULT NULL,
  `funeral_wishes` varchar(255) NOT NULL,
  `life_partner` varchar(255) NOT NULL,
  `children` varchar(50) NOT NULL,
  `children_years_old1` varchar(50) NOT NULL,
  `children_years_old2` int(15) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `personal_message` text NOT NULL,
  `sharing_information` varchar(20) DEFAULT NULL,
  `information_first_name` varchar(100) DEFAULT NULL,
  `information_last_name` varchar(100) DEFAULT NULL,
  `financial_accounts` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `estate_planning` varchar(255) DEFAULT NULL,
  `assets` varchar(255) DEFAULT NULL,
  `digital_life` varchar(255) DEFAULT NULL,
  `legacy_plan` varchar(255) DEFAULT NULL,
  `loans` varchar(255) DEFAULT NULL,
  `dependents` varchar(255) DEFAULT NULL,
  `eldercare` varchar(50) DEFAULT NULL,
  `taxes_credit` varchar(255) DEFAULT NULL,
  `charity_giving` varchar(50) DEFAULT NULL,
  `personal` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `answer`, `insurance_planning`, `health_care_planning`, `financial_planning`, `legal_planning`, `future_planning`, `funeral_wishes`, `life_partner`, `children`, `children_years_old1`, `children_years_old2`, `email_address`, `personal_message`, `sharing_information`, `information_first_name`, `information_last_name`, `financial_accounts`, `insurance`, `estate_planning`, `assets`, `digital_life`, `legacy_plan`, `loans`, `dependents`, `eldercare`, `taxes_credit`, `charity_giving`, `personal`, `token`, `created_at`, `updated_at`) VALUES
(1, 3, '3', '1,2', '2', '2', '3,4', '2', '2', '2', '4', '2', 1, 'jhon123@mailinator.com', 'Hello..........', 'spouse', 'Aman', 'Singh', 'Bank Accounts,Credit Cards,Other', 'Life Insurance,Disability Insurance,Long-Term Care', 'Will,Trust,Power of Attorney', 'Vehicles,Artwork & Collectables,Real Estate,Jewelry & Purses,Other', 'Instagram,Twitter,Other', 'Funeral Wishes,Letters to Family & Friends', 'Mortgage Loans,Business Loans', 'Children,Other', 'Eldercare plan', 'Credit Reports', 'Current Giving', 'Marriage License,Other', NULL, '2017-09-07 06:14:31', '2017-09-07 06:15:48'),
(2, 4, '3', '1,2,4', '1,2', '1,2', '1', '1', '1', '1', '7', '1', 1, 'asdasdasdasda', 'india', 'child', '', '', 'Bank Accounts,Credit Cards,Investment Accounts,Other', 'Life Insurance,Disability Insurance,Long-Term Care,Health Insurance', 'Trust,Power of Attorney,Advance Directive', 'Vehicles,Artwork & Collectables,Real Estate,Jewelry & Purses,Other', 'Instagram,Twitter,Facebook,Other', 'Funeral Wishes,Letters to Family & Friends', 'Mortgage Loans,Personal Loans,Business Loans', 'Children,Pets,Other', 'Eldercare plan', 'Tax Returns,Credit Reports', 'Current Giving', 'Birth Certificates,Marriage License,Other', NULL, '2017-09-07 07:32:06', '2017-09-07 07:34:38'),
(3, 5, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'rfetetet@gfgfg.hhh', 'trtrtrt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-07 07:46:33', '2017-09-07 07:46:33'),
(4, 6, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'ggfg@fff.jjj', 'gfgfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-07 07:53:19', '2017-09-07 07:53:19'),
(5, 7, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'cccc@vfgg.jjj', 'jhjhj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-07 07:58:28', '2017-09-07 07:58:28'),
(6, 8, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'cccc@vfgg.jjj', 'xsdsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-07 08:00:43', '2017-09-07 08:03:27'),
(7, 9, '1', '2', '2', '1,2', '1,2', '2,3', '2', '2', '1', '2', 3, 'sadsds@fdfd.dd', 'dsdsd', 'someone', '', '', 'Investment Accounts', 'Health Insurance', 'Trust', 'Other', 'Twitter', 'Funeral Wishes', 'Business Loans', 'Other', 'Eldercare plan', 'Tax Returns', 'Current Giving', 'Other', NULL, '2017-09-08 01:05:01', '2017-09-08 05:11:28'),
(8, 10, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'brajessn@mailinator.com', 'dsdsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 05:12:29', '2017-09-08 05:12:29'),
(9, 11, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'fdfdfdfdf@fgfg.hhh', 'dfdfdfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 05:16:03', '2017-09-08 05:16:03'),
(10, 12, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'gfgf@h.hh', 'gfgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 05:19:04', '2017-09-08 05:19:04'),
(11, 13, '', NULL, '', '', NULL, NULL, '', '', '1', '2', 2, 'ghj@ggg.jj', 'jhjh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 05:54:17', '2017-09-08 06:15:28'),
(12, 17, '3', NULL, '', '', NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:15:04', '2017-09-08 06:15:04'),
(13, 22, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gmail.com', 'ghg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:16:32', '2017-09-08 06:16:32'),
(14, 23, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'asdasdasdasda@gg.jj', 'cdsfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:20:50', '2017-09-08 06:20:50'),
(15, 24, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'cccc@vfgg.jjj', 'hhg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:22:53', '2017-09-08 06:22:53'),
(16, 25, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'fdfdfdfdf@fgfg.hhh', 'fdfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:23:35', '2017-09-08 06:23:35'),
(17, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'cccc@vfgg.jjj', 'gfgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:25:27', '2017-09-08 06:25:27'),
(18, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'cccc@vfgg.jjj', 'gfgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:25:34', '2017-09-08 06:25:34'),
(19, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gmail.com', 'jhj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:39', '2017-09-08 06:27:39'),
(20, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gmail.com', 'jhjhj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:47', '2017-09-08 06:27:47'),
(21, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gmail.com', 'jhjhj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:27:59', '2017-09-08 06:27:59'),
(22, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'fdfdfdfdf@fgfg.hhh', 'fdfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:28:40', '2017-09-08 06:28:40'),
(23, 0, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gmail.com', 'dsfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:28:59', '2017-09-08 06:28:59'),
(24, 32, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'cccc@vfgg.jjj', 'fdfdfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:30:04', '2017-09-08 06:30:04'),
(25, 33, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'asdasdasdasda@gg.jj', 'xcxc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:30:11', '2017-09-08 06:30:11'),
(26, 34, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'asdasdasdasda@gg.jj', 'cxcx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:35:12', '2017-09-08 06:35:12'),
(27, 35, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'fdfdfdfdf@fgfg.hhh', 'dfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:39:58', '2017-09-08 06:39:58'),
(28, 36, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gxzxmail.com', 'zx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:41:35', '2017-09-08 06:41:35'),
(29, NULL, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 'aman@gmgfail.com', 'dfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-08 06:41:44', '2017-09-08 06:41:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_card_details`
--
ALTER TABLE `user_card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user_card_details`
--
ALTER TABLE `user_card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 11:51 AM
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
(3, 'fdfgfg', 'gfgfgf', 'gfgfg', NULL, NULL, 'male', '2017-09-07', NULL, NULL, '2017-09-07 06:13:30', '2017-09-07 06:13:30', NULL);

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
  `user_id` int(11) NOT NULL,
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
(1, 3, '3', '1,2', '2', '2', '3,4', '2', '2', '2', '4', '2', 1, 'jhon123@mailinator.com', 'Hello..........', 'spouse', 'Aman', 'Singh', 'Bank Accounts,Credit Cards,Other', 'Life Insurance,Disability Insurance,Long-Term Care', 'Will,Trust,Power of Attorney', 'Vehicles,Artwork & Collectables,Real Estate,Jewelry & Purses,Other', 'Instagram,Twitter,Other', 'Funeral Wishes,Letters to Family & Friends', 'Mortgage Loans,Business Loans', 'Children,Other', 'Eldercare plan', 'Credit Reports', 'Current Giving', 'Marriage License,Other', NULL, '2017-09-07 06:14:31', '2017-09-07 06:15:48');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_card_details`
--
ALTER TABLE `user_card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

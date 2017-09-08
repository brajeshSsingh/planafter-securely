-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 11:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `planafterauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activations_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2016_01_15_105324_create_roles_table', 1),
(26, '2016_01_15_114412_create_role_user_table', 1),
(27, '2016_01_26_115212_create_permissions_table', 1),
(28, '2016_01_26_115523_create_permission_role_table', 1),
(29, '2016_02_09_132439_create_permission_user_table', 1),
(30, '2017_03_09_082449_create_social_logins_table', 1),
(31, '2017_03_09_082526_create_activations_table', 1),
(32, '2017_03_20_213554_create_themes_table', 1),
(33, '2017_03_21_042918_create_profiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `model`, `created_at`, `updated_at`) VALUES
(1, 'Can View Users', 'view.users', 'Can view users', 'Permission', '2017-07-06 03:42:00', '2017-07-06 03:42:00'),
(2, 'Can Create Users', 'create.users', 'Can create new users', 'Permission', '2017-07-06 03:42:00', '2017-07-06 03:42:00'),
(3, 'Can Edit Users', 'edit.users', 'Can edit users', 'Permission', '2017-07-06 03:42:00', '2017-07-06 03:42:00'),
(4, 'Can Delete Users', 'delete.users', 'Can delete users', 'Permission', '2017-07-06 03:42:00', '2017-07-06 03:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-07-06 03:42:01', '2017-07-06 03:42:01'),
(2, 2, 1, '2017-07-06 03:42:01', '2017-07-06 03:42:01'),
(3, 3, 1, '2017-07-06 03:42:01', '2017-07-06 03:42:01'),
(4, 4, 1, '2017-07-06 03:42:01', '2017-07-06 03:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `theme_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `twitter_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_theme_id_foreign` (`theme_id`),
  KEY `profiles_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `theme_id`, `location`, `bio`, `twitter_username`, `github_username`, `avatar`, `avatar_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, '2017-07-06 03:42:07', '2017-07-06 03:42:07'),
(2, 2, 1, NULL, NULL, NULL, NULL, NULL, 0, '2017-07-06 03:42:07', '2017-07-06 03:42:07'),
(3, 3, 1, NULL, NULL, NULL, NULL, '/images/profile/3/avatar/avatar.jpg', 1, '2017-07-05 18:30:00', '2017-07-06 04:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'Admin Role', 5, '2017-07-06 03:42:00', '2017-07-06 03:42:00'),
(2, 'User', 'user', 'User Role', 1, '2017-07-06 03:42:01', '2017-07-06 03:42:01'),
(3, 'Unverified', 'unverified', 'Unverified Role', 0, '2017-07-06 03:42:01', '2017-07-06 03:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-07-06 03:42:07', '2017-07-06 03:42:07'),
(2, 2, 2, '2017-07-06 03:42:07', '2017-07-06 03:42:07'),
(3, 3, 3, '2017-07-06 03:44:31', '2017-07-06 03:44:31'),
(32, 3, 32, '2017-07-22 06:11:03', '2017-07-22 06:11:03'),
(33, 3, 33, '2017-07-24 00:23:28', '2017-07-24 00:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE IF NOT EXISTS `social_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_logins_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `taggable_id` int(10) unsigned NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `themes_name_unique` (`name`),
  UNIQUE KEY `themes_link_unique` (`link`),
  KEY `themes_taggable_id_taggable_type_index` (`taggable_id`,`taggable_type`),
  KEY `themes_id_index` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `link`, `notes`, `status`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Default', 'null', NULL, 1, 1, 'theme', '2017-07-06 03:42:01', '2017-07-06 03:42:04', NULL),
(2, 'Darkly', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css', NULL, 0, 2, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:06:25', NULL),
(3, 'Cyborg', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css', NULL, 0, 3, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:06:11', NULL),
(4, 'Cosmo', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css', NULL, 0, 4, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:05:56', NULL),
(5, 'Cerulean', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css', NULL, 0, 5, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:05:38', NULL),
(6, 'Flatly', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css', NULL, 0, 6, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:06:48', NULL),
(7, 'Journal', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css', NULL, 0, 7, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:09:37', NULL),
(8, 'Lumen', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css', NULL, 0, 8, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:10:36', NULL),
(9, 'Paper', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css', NULL, 0, 9, 'theme', '2017-07-06 03:42:01', '2017-07-21 01:13:08', NULL),
(10, 'Readable', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css', NULL, 0, 10, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:13:39', NULL),
(11, 'Sandstone', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css', NULL, 0, 11, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:13:24', NULL),
(12, 'Simplex', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css', NULL, 0, 12, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:12:52', NULL),
(13, 'Slate', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css', NULL, 0, 13, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:12:37', NULL),
(14, 'Spacelab', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css', NULL, 0, 14, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:11:40', NULL),
(15, 'Superhero', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css', NULL, 0, 15, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:11:09', NULL),
(16, 'United', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css', NULL, 0, 16, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:10:54', NULL),
(17, 'Yeti', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css', NULL, 0, 17, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:10:18', NULL),
(18, 'Bootstrap 4.0.0 Alpha', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', NULL, 0, 18, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:02:58', NULL),
(19, 'Materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css', NULL, 0, 19, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:12:04', NULL),
(20, 'Bootstrap Material Design 0.3.0', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css', NULL, 0, 20, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:03:19', NULL),
(21, 'Bootstrap Material Design 0.5.10', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css', NULL, 0, 21, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:04:58', NULL),
(22, 'Bootstrap Material Design 4.0.0', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.0/bootstrap-material-design.min.css', NULL, 0, 22, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:05:12', NULL),
(23, 'Bootstrap Material Design 4.0.2', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.min.css', NULL, 0, 23, 'theme', '2017-07-06 03:42:02', '2017-07-21 01:05:25', NULL),
(24, 'mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.min.css', NULL, 0, 24, 'theme', '2017-07-06 03:42:03', '2017-07-21 01:12:20', NULL),
(25, 'bootflat', 'https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css', NULL, 0, 25, 'theme', '2017-07-06 03:42:03', '2017-07-21 01:02:18', NULL),
(26, 'flat-ui', 'https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css', NULL, 0, 26, 'theme', '2017-07-06 03:42:03', '2017-07-21 01:08:40', NULL),
(27, 'm8tro-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/m8tro-bootstrap/3.3.7/m8tro.min.css', NULL, 0, 27, 'theme', '2017-07-06 03:42:04', '2017-07-21 01:11:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `zipcode` int(15) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_confirmation_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_sm_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `gender`, `date_of_birth`, `zipcode`, `remember_token`, `activated`, `token`, `signup_ip_address`, `signup_confirmation_ip_address`, `signup_sm_ip_address`, `admin_ip_address`, `updated_ip_address`, `deleted_ip_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jaida.damore', 'Filomena', 'Satterfield', 'admin@admin.com', '$2y$10$cYhcaLkBoxUt10OnM/tuH.y2iQJaSZ9EiIo9msBulvaEYF8oWZ6.e', '', '0000-00-00', 0, 'meAJqxSJifgWRLeFpFbRweZE8Ov68cfdRWBd2CeTOnQmHapIx5206kvu9dZ6', 1, 'JZ6pElS4HbPjjMaPG06x46I9HOwaPOb7beN4OLK2bn4rmThnYVvq4aDuZeYtFLqg', NULL, '63.24.47.228', NULL, '133.193.252.156', NULL, NULL, '2017-07-06 03:42:07', '2017-07-06 03:42:07', NULL),
(2, 'mae46', 'Lucie', 'Keeling', 'user@user.com', '$2y$10$bXVqGo.lqRqb/cMwqmcuCexpVusjh3aoYo/x1GxP2KNOAc.Zh8gXK', '', '0000-00-00', 0, NULL, 1, 'cQ0zAllCJZqOpLEd3bANCfs9Stuwso7Qh0OKDbbFdfKTvr87wBavFdStDY9E63Rm', '205.245.61.230', '141.242.253.22', NULL, NULL, NULL, NULL, '2017-07-06 03:42:07', '2017-07-06 03:42:07', NULL),
(3, 'Super_Developer', 'Supar', 'User', 'john123@mailinator.com', '$2y$10$il1imG5xSZbYtSyrOk4Bi.EFWfrMcQP4u3YRe.5G13fasUZLoj6Yu', 'female', '2017-07-18', 123445, 'JgpLe4hnvdpCgLR3WjWXb1VlmldPSpDDV8omKyFqYKc2ZWbtFMedre4Bb8Ft', 1, 'y7TgbYIKLCrd7dHXueQoHZ08RVTnKqUxVRb0YYuDBGqC6xLfj5LpDs0tPTgPdBAi', '0.0.0.0', NULL, NULL, NULL, '0.0.0.0', NULL, '2017-07-06 03:44:30', '2017-07-24 00:22:08', NULL),
(32, '$2y$10$8990KglMdlg/839ylRz8Xe2CNxocDNKGHsRnW9bxE0GuLQ1uMyCNO', 'User', 'Demo', 'userdemo@mailinator.com', '$2y$10$VfpEc35SUtSMuwRo9KxXHORUgs.tv0nIsCqFlxSTg3N40a8XMmgLi', 'male', '2017-07-18', 123445, NULL, 1, 'i4fOMoDoNtHFlgoih7b81efMKjV5Vt05mPu6ntUnaaCBMASVZftJgkSHXseNTZZf', '0.0.0.0', NULL, NULL, NULL, NULL, NULL, '2017-07-22 06:11:03', '2017-07-22 07:27:27', NULL),
(33, '$2y$10$YtRDJqRLk7IR0LiyTkIi3ePCgzp0ALrLlND6TsUp/sAhlqguej6p6', 'Super', 'Demo', 'john12345@mailinator.com', '$2y$10$NA9SeeoiRpfd8FkNlzcLR.nfs/OHv0dsFD9eafWSnImB36xqqTo9G', 'female', '2017-07-12', 123445, 'KS8QsBn7ScnkDmmT1dbx2O37KV0nCfPCRtdtgF2avWfPHid6DF2kktmcDsbW', 1, 'TsmJa8rRe2KammSdJal7Dv6QgteDtuI13EtwsTGhW2KXxU3Q8WciU7Xe9C4xlsPQ', '0.0.0.0', NULL, NULL, NULL, NULL, NULL, '2017-07-24 00:23:28', '2017-07-24 03:36:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_card_details`
--

CREATE TABLE IF NOT EXISTS `user_card_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `security_code` varchar(100) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_card_details`
--

INSERT INTO `user_card_details` (`id`, `user_id`, `payment_type`, `card_number`, `security_code`, `expiration_date`, `postal_code`, `country`, `token`, `created_at`, `updated_at`) VALUES
(2, 32, 'paypal', '55555555', '55555555', '2017-08-02', '55555', '2', 'LePNA45zonlWtcbAyblWLhb8Tld72mXMwLKzfqlqr9IunawOOCfhygBILQZms1IB', '2017-07-22 06:11:03', '2017-07-22 07:27:52'),
(3, 33, 'paypal', '55555555', '55555555', '2017-07-27', '55555', '2', 'K4uXcqLKQTC7aKJeATImIzFLX3NS6CoVsp5iVPTYDWzYMYesidJcBrNl0YwNhy96', '2017-07-24 00:23:29', '2017-07-24 03:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `home_owners` varchar(200) NOT NULL,
  `health_care_planning` varchar(255) NOT NULL,
  `financial_planning` varchar(255) NOT NULL,
  `legal_planning` varchar(255) NOT NULL,
  `eldercare_planning` varchar(255) NOT NULL,
  `funeral_wishes` varchar(255) NOT NULL,
  `life_partner` varchar(255) NOT NULL,
  `children` varchar(50) NOT NULL,
  `years_old` varchar(50) NOT NULL,
  `lindsey` varchar(100) NOT NULL,
  `wayne` varchar(100) NOT NULL,
  `my_child` varchar(20) NOT NULL,
  `someone` varchar(20) NOT NULL,
  `myself` varchar(20) DEFAULT NULL,
  `real_estate` varchar(20) NOT NULL,
  `something` varchar(20) NOT NULL,
  `use_my_dos` varchar(50) NOT NULL,
  `important_info` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `personalize` text NOT NULL,
  `company_important_info` varchar(100) NOT NULL,
  `company_email_address` varchar(100) NOT NULL,
  `company_personalize` text NOT NULL,
  `eldercare` varchar(255) NOT NULL,
  `health_and_medical` varchar(255) NOT NULL,
  `after_gone` varchar(255) NOT NULL,
  `financial` varchar(255) NOT NULL,
  `legal` varchar(255) NOT NULL,
  `my_life` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `answer`, `home_owners`, `health_care_planning`, `financial_planning`, `legal_planning`, `eldercare_planning`, `funeral_wishes`, `life_partner`, `children`, `years_old`, `lindsey`, `wayne`, `my_child`, `someone`, `myself`, `real_estate`, `something`, `use_my_dos`, `important_info`, `email_address`, `personalize`, `company_important_info`, `company_email_address`, `company_personalize`, `eldercare`, `health_and_medical`, `after_gone`, `financial`, `legal`, `my_life`, `token`, `created_at`, `updated_at`) VALUES
(1, 3, '4', 'Life insurance,Long-term,Disability', 'Health Insurance,Medi Care', 'Disability Insurance,Credit Card Debt', 'Created Will,Power Attorney', 'Long Term,Eldercare Support', 'Buried', 'Im single', 'children5', 'yearsOld5', '', '', '', 'vvcvv', NULL, '', '', '6', 'fgfg', 'gfgfgfg@jjj.ggg', 'cfdfgg', 'gfggf', 'ffgfgfgfg@jjj.jj', 'fdfdf', 'Eldercare Wishes,Eldercare', 'Health Doctors,Health Info', 'Gone Burial,Gone Legacy', 'Financial Life,Financial Accounts', 'Legal Will,Legal Power', 'Life Family,Life Emergency,Life Vehicles', NULL, '2017-07-11 01:37:38', '2017-07-19 06:19:03'),
(15, 33, '10', 'Long-term', 'Advance Directive,Health Insurance,Medi Care', 'Life Insurance,Collect Benefits,Disability Insurance,Credit Card Debt,Overwhelming', 'Any Legal Planning,More Trusts,Created Will,Power Attorney,Have Health Care', 'Eldercare Living,Long Term,Eldercare Support,Will Likely Need', 'Type Funeral,Buried', 'Im single', 'children7', 'yearsOld13', '', '', '', '', 'My Self', '', '', '6', 'dfdffd', 'fdfdfff@fffff.jjj', 'fdffd', 'fdfdf', 'sassss@ggg.jjj', 'hhgjhjh', 'Eldercare Wishes', 'Health Medical Insurance', 'Gone Legacy', 'Financial Accounts', 'Legal Power', 'Life Emergency', '935F1BS6T2apmAuni1CgyXuNcfYXdi1CDZr5e8OlITaVsQa7rXOuQuEojTmcuZ65', '2017-07-24 00:23:29', '2017-07-24 02:36:29'),
(14, 32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-07-22 06:11:03', '2017-07-22 06:11:03');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activations`
--
ALTER TABLE `activations`
  ADD CONSTRAINT `activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`),
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

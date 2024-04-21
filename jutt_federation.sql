-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2024 at 05:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jutt_federation`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `heading`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 'NEW_USER_MAIL', 'Email Verify', 'Email Verify Mail', '<p><b>Hello </b><span style=\"font-size: 0.875rem;\">! [name]<br></span><br></p><p>This email is to inform you that has signed up in your network. Please click the link below to verify the profile</p><p><br></p><p align=\"center\"><span style=\"font-size: 15px; font-weight: 400;\">[verify-token-button]</span></p><p align=\"center\"><span style=\"font-size: 15px; font-weight: 400;\"><br></span></p><p><span style=\"font-size: 15px; font-weight: 400;\">[verify-token]</span></p>', NULL, '2024-03-21 10:28:24'),
(5, 'PASSWORD_RESET_MAIL', 'Reset password', 'Reset password request', '<p>Hi,&nbsp; [name]</p><p><br></p><p>MADIPLUS has received a request to reset the password for your account. If you did not request to reset your password, please ignore this email.</p><p><br></p><p align=\"center\">[reset-password-button]<br></p><p align=\"center\"><br></p><p align=\"left\">or copy the link to your browser: [reset-token]<br><b><br>Sincerely yours,<br>MADIPLUS Team</b><br></p>', NULL, '2024-03-21 10:33:26'),
(6, 'NEW_DOCTOR_MAIL', 'New Doctor Added Mail !', 'New Doctor Added Mail !', '<h3>Welcome to Our MEDIPLUS!</h3>\r\n    <p>Hello [name],</p>\r\n    <br>\r\n    <p>We are excited to have you on board as a new doctor in our medical practice.</p>\r\n<br>\r\n    <p>Your account has been successfully created.</p>\r\n<br>\r\n    <p>You can access your dashboard using the following link:</p>\r\n<br>\r\n    [redirect-dashboard-button]\r\n<br>\r\n    <p>Thank you and welcome aboard!</p>\r\n<br>', '2024-03-26 16:39:39', '2024-03-26 11:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2023-12-20 10:16:02', '2023-12-20 10:16:02'),
(2, 'Client', 'client', '2023-12-20 10:16:03', '2023-12-20 10:16:03'),
(3, 'User', 'user', '2023-12-20 10:16:03', '2023-12-20 10:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = Active, 2 = Pending, 3 = Cancel',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `verify_code`, `avatar`, `phone`, `country`, `city`, `state`, `zip_code`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'Admin', 'admin@gmail.com', '2023-12-20 16:17:19', '$2y$12$WCOT8t1hYuLboqyPl2hEJ.6Eo8z2IffQrojipAvXHkP5Ubv4GbTZW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2023-12-20 10:16:03', '2023-12-20 10:16:03'),
(2, 2, 'Client', 'Client', 'client@gmail.com', '2023-12-07 17:34:31', '$2y$12$3nyb4H9Azm9UScJsmNom4umMZfy764VVm0vCgApntQg.VEGZm3AMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2023-12-20 10:16:03', '2023-12-20 10:16:03'),
(3, 3, 'User', 'User', 'user@gmail.com', '2023-12-06 18:00:00', '$2y$12$BwK0UXDc1sJRkxj6n2/qsO.o8XTT/W.Ak/0fcbJECffN72j1kkHX.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2023-12-20 10:16:03', '2024-03-26 10:18:44'),
(34, 3, 'Dorian', 'Stark', 'hojayi2532@acname.com', '2024-04-20 06:05:09', '$2y$12$WCOT8t1hYuLboqyPl2hEJ.6Eo8z2IffQrojipAvXHkP5Ubv4GbTZW', 'uJHGaqgkUN9YdTk2gJXCEt6Noown99TUUJs6Rq1SytNlw9LwE0vxm3Hrd8RDLamv', NULL, '+1 (877) 413-3179', NULL, NULL, NULL, NULL, '1', NULL, '2024-04-20 06:02:54', '2024-04-20 06:05:09'),
(35, 3, 'Scarlet', 'Ware', 'lejel11479@agaseo.com', '2024-04-20 06:22:16', '$2y$12$rdtSv561gJOD2FJCSZBMyOPREADRl.8c2YEknSmvYKNfscysKeQk.', 'HxZtwTW2M0VkPexXeAHbug6e5zTXKXMeYoetlFbXayiRNfTaZ4J65lXuf0tbQ6sx', NULL, '+1 (119) 625-5834', NULL, NULL, NULL, NULL, '1', '2yxhxosszxgjUasNfWv42MWpgdH5wvmBWT8zGRBVqGRKzgV3t8D9rPz2uAdt', '2024-04-20 06:21:53', '2024-04-20 06:22:16'),
(36, 3, 'Dennis', 'Cherry', 'royec25251@acname.com', NULL, '$2y$12$AaSi4An1lhJ5NCDx/HpCr.JMyxYcB4o3QOJ4xIfCzRWKTq/DsTJ9.', 'hGnGn9nbblVg0UrPV5eqrMfu0RyMLbUqx5P7iDj57jdERx2isxgYMCQpLfbncroM', NULL, '+1 (332) 296-5679', NULL, NULL, NULL, NULL, '1', 'uZkjq4HGDW3Ny8fZ26T23iEbb8chrVKtCA1DBX5ylIXIJkbJ5QuogB55RYdP', '2024-04-20 06:25:42', '2024-04-20 06:25:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

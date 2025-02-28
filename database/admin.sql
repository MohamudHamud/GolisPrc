-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 03:45 PM
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
-- Database: `admin`
--

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_26_074843_create_project_tables', 2),
(5, '2025_02_27_154209_create_requests_table', 3);

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
-- Table structure for table `premissions`
--

CREATE TABLE `premissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `groupby` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premissions`
--

INSERT INTO `premissions` (`id`, `name`, `slug`, `groupby`, `created_at`, `update_at`) VALUES
(1, 'Dashboard', 'Dashboard', 1, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(2, 'User', 'user', 6, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(3, 'Add User', 'add user', 6, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(4, 'Edit User', 'edit user', 6, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(5, 'Update User', 'update user', 6, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(6, 'Delete User', 'delete user', 6, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(7, 'Roles', 'Roles', 7, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(8, 'Add Roles', 'Add Roles', 7, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(9, 'Edit Roles', 'Edit Roles', 7, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(10, 'Update Roles', 'Update Roles', 7, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(11, 'Delete Roles', 'Delete Roles', 7, '2025-02-25 11:14:17', '2025-02-25 11:14:17'),
(12, 'projects', 'projects', 8, '2025-02-26 11:43:19', '2025-02-26 11:43:19'),
(13, 'Add Projects', 'add project', 8, '2025-02-26 11:43:19', '2025-02-26 11:43:19'),
(14, 'Edit Project', 'edit project', 8, '2025-02-26 11:43:19', '2025-02-26 11:43:19'),
(15, 'Update Project', 'Update project', 8, '2025-02-26 11:43:19', '2025-02-26 11:43:19'),
(16, 'Delete Project', 'delete project', 8, '2025-02-26 11:43:19', '2025-02-26 11:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `premissions_role`
--

CREATE TABLE `premissions_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premissions_role`
--

INSERT INTO `premissions_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(44, 2, 1, '2025-02-26 04:25:33', '2025-02-26 04:25:33'),
(45, 3, 1, '2025-02-26 04:26:07', '2025-02-26 04:26:07'),
(83, 4, 1, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(84, 4, 2, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(85, 4, 3, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(86, 4, 4, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(87, 4, 5, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(88, 4, 6, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(89, 4, 7, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(90, 4, 8, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(91, 4, 9, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(92, 4, 10, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(93, 4, 11, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(94, 4, 12, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(95, 4, 13, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(96, 4, 14, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(97, 4, 15, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(98, 4, 16, '2025-02-28 05:04:52', '2025-02-28 05:04:52'),
(99, 1, 1, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(100, 1, 2, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(101, 1, 3, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(102, 1, 4, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(103, 1, 5, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(104, 1, 6, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(105, 1, 7, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(106, 1, 12, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(107, 1, 13, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(108, 1, 14, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(109, 1, 15, '2025-02-28 05:05:06', '2025-02-28 05:05:06'),
(110, 1, 16, '2025-02-28 05:05:06', '2025-02-28 05:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `project_tables`
--

CREATE TABLE `project_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `no_users` int(11) NOT NULL,
  `status` enum('available','not available') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_tables`
--

INSERT INTO `project_tables` (`id`, `name`, `description`, `no_users`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Restaurant Management System', 'A Restaurant Management System (RMS) is a type of software designed to help restaurant owners and managers streamline their operations, enhance customer service, and increase efficiency. The key features of an RMS typically include:ll business performance. This data is crucial for making informed business decisions.', 5000, 'available', '2025-02-27 13:45:46', '2025-02-27 15:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `request_forms`
--

CREATE TABLE `request_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_forms`
--

INSERT INTO `request_forms` (`id`, `name`, `email`, `phone`, `city`, `institution`, `project`, `message`, `created_at`, `updated_at`) VALUES
(2, 'mohamud', 'mohamed@gmail.com', '0987654', 'Bosaso', 'qabaal', 'web', 'jamaa', '2025-02-27 13:21:58', '2025-02-27 13:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2025-02-25 08:09:31', '2025-02-26 04:25:10'),
(2, 'Developers', '2025-02-26 04:25:33', '2025-02-26 04:25:33'),
(3, 'Adverticers', '2025-02-26 04:26:07', '2025-02-26 04:26:07'),
(4, 'Dev', '2025-02-28 05:04:52', '2025-02-28 05:04:52');

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
('qeYzCYXfxhIir2p5AVAERBi3RCQx3qBfINbEZRCv', NULL, '192.168.100.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVJVZFhaY3lBcDRDdXNKZ1lWWVJyYlkyc3FDbFVMaUNDbFN3YktZTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjEwMC4zODo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1740748870),
('ql3vQI3Le91QCxqMHSg7QA1yopjYW86pOyNuzlAt', NULL, '192.168.100.30', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_0_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/133.0.6943.120 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNk1Hb1pKV25mRXFzVTRCaEdZUFI4SjJxbDFObDNoRGhEVFhxRXZPNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjEwMC4zODo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1740746231),
('UidmhESQw0sQ3IwuPkPDhmMTvwrjqYdOkIuQtstI', 3, '192.168.100.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicnNCRThVcmRBc2d3cHNIUFNUMTlSYWhaQmF6V25nTjRnczFTMmlJSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjEwMC4zODo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1740747791),
('Utopti9dAWHZ36ljFosXChcCazV8AxYGH3VwDCDo', NULL, '192.168.100.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVBNTHlBNHZRTmQwd2MwRW5VNXYwaXVUblZ6QVZGVTExZXNFTlI3NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjEwMC4zODo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1740746036);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Qabaalsoftware@gmail.com', NULL, '$2y$12$My1blUtPXAvFM.GhU1Gkl.rQkTHFV.Ix6SYGMdcstav9IgLSMHWhm', NULL, 1, '2025-02-25 11:47:00', '2025-02-27 13:51:23'),
(3, 'Ali', 'a@gmail.com', NULL, '$2y$12$nmckxF2ePlKjFZB4fcJ93OGhWndZgpcXeHgBSsFhZEpd6Q9zpTB5W', NULL, 4, '2025-02-28 05:09:05', '2025-02-28 05:09:05');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `premissions`
--
ALTER TABLE `premissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premissions_role`
--
ALTER TABLE `premissions_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tables`
--
ALTER TABLE `project_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_forms`
--
ALTER TABLE `request_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `premissions`
--
ALTER TABLE `premissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `premissions_role`
--
ALTER TABLE `premissions_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `project_tables`
--
ALTER TABLE `project_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request_forms`
--
ALTER TABLE `request_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

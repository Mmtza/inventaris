-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 02:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'mmtzatzyyy@gmail.com', 2, '2023-05-10 12:25:28', 1),
(2, '::1', 'admin', NULL, '2023-05-10 15:26:11', 0),
(3, '::1', 'admin', NULL, '2023-05-10 15:26:48', 0),
(4, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-10 15:33:52', 1),
(5, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-10 15:55:16', 1),
(6, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-10 15:57:04', 1),
(7, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-11 03:05:43', 1),
(8, '::1', 'admin1234', NULL, '2023-05-11 06:07:21', 0),
(9, '::1', 'admin1234', NULL, '2023-05-11 06:08:27', 0),
(10, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-11 06:08:42', 1),
(11, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-11 11:48:08', 1),
(12, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-11 12:01:26', 1),
(13, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-11 12:52:40', 1),
(14, '::1', 'admin', 1, '2023-05-11 12:52:49', 0),
(15, '::1', 'admin123', NULL, '2023-05-11 12:52:56', 0),
(16, '::1', 'admin123', NULL, '2023-05-11 12:53:05', 0),
(17, '::1', 'mmtzatzyyyyy@gmail.com', 4, '2023-05-11 13:46:31', 1),
(18, '::1', 'admin', 1, '2023-05-24 15:51:02', 0),
(19, '::1', 'admin123', NULL, '2023-05-24 15:52:04', 0),
(20, '::1', 'admin123', NULL, '2023-05-24 15:52:56', 0),
(21, '::1', 'admin123', NULL, '2023-05-24 15:53:08', 0),
(22, '::1', 'bagus', NULL, '2023-05-24 15:54:11', 0),
(23, '::1', 'bagus', NULL, '2023-05-24 15:54:26', 0),
(24, '::1', 'Bagus', NULL, '2023-05-24 15:56:55', 0),
(25, '::1', 'bagus@gmail.com', 6, '2023-05-24 15:57:13', 1),
(26, '::1', 'bagus@gmail.com', 6, '2023-05-25 00:53:16', 1),
(27, '::1', 'bagus@gmail.com', 6, '2023-05-25 14:18:19', 1),
(28, '::1', 'bagus@gmail.com', 6, '2023-05-26 01:23:44', 1),
(29, '::1', 'bagus@gmail.com', 6, '2023-05-26 02:55:39', 1),
(30, '::1', 'bagus@gmail.com', 6, '2023-05-26 06:53:08', 1),
(31, '::1', 'bagus@gmail.com', 6, '2023-05-26 11:59:56', 1),
(32, '::1', 'bagus@gmail.com', 6, '2023-05-26 12:03:49', 1),
(33, '::1', 'bagus@gmail.com', 6, '2023-05-26 12:47:04', 1),
(34, '::1', 'admin@gmail.com', 7, '2023-06-30 08:40:48', 1),
(35, '::1', 'admin@gmail.com', 7, '2023-06-30 08:43:26', 1),
(36, '::1', 'mmtzatzyy@gmail.com', NULL, '2023-07-03 07:44:06', 0),
(37, '::1', 'sinkaiytb@gmail.com', NULL, '2023-07-03 07:44:28', 0),
(38, '::1', 'mmtza', NULL, '2023-07-03 07:44:40', 0),
(39, '::1', 'admin', NULL, '2023-07-03 07:44:48', 0),
(40, '::1', 'admin123@gmail.com', 8, '2023-07-03 07:49:35', 1),
(41, '::1', 'admin123@gmail.com', 8, '2023-07-03 07:51:05', 1),
(42, '::1', 'admin123@gmail.com', 8, '2023-07-03 11:51:36', 1),
(43, '::1', 'admin123@gmail.com', 8, '2023-07-03 11:51:54', 1),
(44, '::1', 'admin123@gmail.com', 8, '2023-07-03 12:03:01', 1),
(45, '::1', 'Mmtza', NULL, '2023-07-05 10:42:10', 0),
(46, '::1', 'admin', NULL, '2023-07-05 10:42:21', 0),
(47, '::1', 'admininvent@gmail.com', 9, '2023-07-05 10:43:29', 1),
(48, '::1', 'admininvent', NULL, '2023-07-05 15:50:49', 0),
(49, '::1', 'admininvent@gmail.com', 9, '2023-07-05 15:51:40', 1),
(50, '::1', 'admininvent@gmail.com', 9, '2023-07-05 20:48:45', 1),
(51, '::1', 'admininvent@gmail.com', 9, '2023-07-06 12:06:56', 1),
(52, '::1', 'admininvent@gmail.com', 9, '2023-07-13 12:58:22', 1),
(53, '::1', 'Admin Kita', NULL, '2023-07-27 04:47:08', 0),
(54, '::1', 'Admin Kita', NULL, '2023-07-27 04:47:15', 0),
(55, '::1', 'admininvent@gmail.com', 9, '2023-07-27 04:47:31', 1),
(56, '::1', 'admininvent@gmail.com', 9, '2023-07-28 08:31:45', 1),
(57, '::1', 'admininvent', NULL, '2023-07-28 08:44:34', 0),
(58, '::1', 'admininvent@gmail.com', 9, '2023-07-28 08:44:42', 1),
(59, '::1', 'admininvent@gmail.com', 9, '2023-07-28 08:54:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah`, `harga`, `id_supplier`, `id_kategori`, `foto`) VALUES
(4, 'Batik Swastika', 120, 500000, 2, 1, 'D5_Wanita.jpg'),
(6, 'Batik Arum Padma', 290, 90000, 2, 1, '3-3-600x600.jpg'),
(7, 'Batik Canting', 99, 100000, 2, 1, 'download.jpeg'),
(8, 'Batik Kawung', 50, 50000, 5, 4, 'Screenshot 2023-07-28 155841_1.png'),
(9, 'Batik Pekalongan', 50, 50000, 5, 4, 'Screenshot 2023-07-27 205259.png');

--
-- Triggers `barang`
--
DELIMITER $$
CREATE TRIGGER `before_barang_update` BEFORE UPDATE ON `barang` FOR EACH ROW INSERT INTO log_stok_barang
SET id_barang = OLD.id_barang,
nama_barang = NEW.nama_barang,
jumlah_baru = NEW.jumlah,
jumlah_lama = OLD.jumlah,
waktu_perubahan = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis`) VALUES
(1, 'Hem'),
(2, 'Celana Panjang'),
(3, 'Jaket'),
(4, 'Baju Batik');

-- --------------------------------------------------------

--
-- Table structure for table `log_stok_barang`
--

CREATE TABLE `log_stok_barang` (
  `id_log_stok` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah_baru` int(11) NOT NULL,
  `jumlah_lama` int(11) NOT NULL,
  `waktu_perubahan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_stok_barang`
--

INSERT INTO `log_stok_barang` (`id_log_stok`, `id_barang`, `nama_barang`, `jumlah_baru`, `jumlah_lama`, `waktu_perubahan`) VALUES
(2, 2, 'Batik Sogan', 100, 100, '2023-05-25 23:22:44'),
(3, 4, 'Batik Swastika', 120, 100, '2023-05-25 23:44:09'),
(4, 4, 'Batik Swastika', 120, 120, '2023-05-26 08:28:19'),
(5, 4, 'Batik Swastika', 120, 120, '2023-05-26 15:34:01'),
(6, 4, 'Batik Swastika', 120, 120, '2023-05-26 15:40:02'),
(7, 4, 'Batik Swastika', 120, 120, '2023-05-26 15:44:14'),
(8, 4, 'Batik Swastika', 120, 120, '2023-05-26 16:37:14'),
(9, 6, 'Batik Arum Padma', 290, 90, '2023-05-26 16:43:38'),
(10, 7, 'Batik Canting', 99, 99, '2023-07-03 19:07:51'),
(11, 6, 'Batik Arum Padma', 290, 290, '2023-07-06 00:56:41'),
(12, 6, 'Batik Arum Padma', 290, 290, '2023-07-06 01:06:01'),
(13, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:18:22'),
(14, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:19:04'),
(15, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:28:31'),
(16, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:28:40'),
(17, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:29:14'),
(18, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:29:40'),
(19, 4, 'Batik Swastika', 120, 120, '2023-07-06 01:31:13'),
(20, 4, 'Batik Swastika', 120, 120, '2023-07-06 03:56:06'),
(21, 4, 'Batik Swastika', 120, 120, '2023-07-06 03:56:20'),
(22, 4, 'Batik Swastika', 120, 120, '2023-07-06 03:56:24'),
(23, 4, 'Batik Swastika', 120, 120, '2023-07-06 03:57:58'),
(24, 4, 'Batik Swastika', 120, 120, '2023-07-06 03:58:01'),
(25, 4, 'Batik Swastika', 120, 120, '2023-07-06 03:59:53'),
(26, 4, 'Batik Swastika', 120, 120, '2023-07-06 04:00:27'),
(27, 4, 'Batik Swastika', 120, 120, '2023-07-06 04:00:34'),
(28, 6, 'Batik Arum Padma', 290, 290, '2023-07-06 04:00:37'),
(29, 4, 'Batik Swastika', 120, 120, '2023-07-28 15:51:32'),
(30, 6, 'Batik Arum Padma', 290, 290, '2023-07-28 15:52:53'),
(31, 7, 'Batik Canting', 99, 99, '2023-07-28 15:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1683720070, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`) VALUES
(2, 'Yani Home', 'Planet Pluto'),
(5, 'Yadi Official', 'Sambo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mmtzatzyy@gmail.com', 'admin', '$2y$10$EjoppSyK7OiDxndhaIDG8.5uhsdpuuxwluLEgtbqEI9p7Dh5COZIy', NULL, NULL, NULL, 'cb09da01885a0ccca177b60f9c932a59', NULL, NULL, 0, 0, '2023-05-10 12:24:23', '2023-05-10 12:24:23', NULL),
(2, 'mmtzatzyyy@gmail.com', 'adminn', '1d6ee70e76037c664d3786efadd0becd', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-10 12:25:14', '2023-05-10 12:25:14', NULL),
(3, 'mmtzatzyyyy@gmail.com', 'admin123', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '814be757b8631c57fd619d6e9af14bde', NULL, NULL, 0, 0, '2023-05-10 15:27:20', '2023-05-10 15:27:20', NULL),
(4, 'mmtzatzyyyyy@gmail.com', 'admin1234', '$2y$10$poqQqj8OmSoeIrNO.05FtOyJBezDxEklr7GvBkmcqUx1Zr5r5mB7S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-10 15:33:25', '2023-05-10 15:33:25', NULL),
(5, 'bagusgantenk@gmail.com', 'bagus', '6eea9b7ef19179a06954edd0f6c05ceb', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(6, 'bagus@gmail.com', 'Baguss', '$2y$10$wtUWlqh1Jjj1V9DEITh7lurWuZMWt9QJzka1QBPRqZoXRARUbc8pe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 15:56:43', '2023-05-24 15:56:43', NULL),
(7, 'admin@gmail.com', 'admin akuntansi', '$2y$10$Jbyj4bIO9wANDCw3OXe9ueocy8/FpyVYE3d.TnZ.jahPAQcZC/ap6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-30 08:40:35', '2023-06-30 08:40:35', NULL),
(8, 'admin123@gmail.com', 'Admin Kita', '$2y$10$CXZ7cWbXYpz0wI.YZdyziu4ceZTmaE/Xf8VUeU7/VbUibILI5FtgS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-03 07:49:23', '2023-07-03 07:49:23', NULL),
(9, 'admininvent@gmail.com', 'admininvent', '$2y$10$3ANisVGq6OMMf5fQ2e4k5uMwFj7DUNoayuafJGZ9kpoRhTt50V3pO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-05 10:43:14', '2023-07-05 10:43:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `log_stok_barang`
--
ALTER TABLE `log_stok_barang`
  ADD PRIMARY KEY (`id_log_stok`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_stok_barang`
--
ALTER TABLE `log_stok_barang`
  MODIFY `id_log_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2024 pada 13.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sebutan` varchar(5) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `sebutan`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Muhtar', 'Pak', '08781927103', 'Tanah merah', '2024-06-08 04:58:55', '2024-06-08 06:54:10'),
(2, 'Davis Nur Iqbal', 'Pak', '08721930488', 'Griya utama', '2024-06-08 04:58:55', '2024-06-08 06:54:10'),
(3, 'Finalia Meriana', 'Bu', '08249109887', 'Bangkalan', '2024-06-08 05:28:11', '2024-06-08 07:27:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`, `semester`, `guru_id`, `created_at`, `updated_at`) VALUES
(1, 'B-001', 'Bhs Indonesia', 'ganjil', 1, '2024-06-06 13:46:10', '2024-06-06 15:44:29'),
(2, 'B-002', 'Bhs Inggris', 'ganjil', 3, '2024-06-06 13:46:10', '2024-06-06 15:44:29'),
(3, 'K-001', 'Kejuruan', 'ganjil', 2, '2024-06-07 15:13:27', '2024-06-07 17:13:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel_siswa`
--

INSERT INTO `mapel_siswa` (`id`, `siswa_id`, `mapel_id`, `nilai`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 78, '2024-06-06 13:46:57', '2024-06-06 15:46:34'),
(3, 2, 2, 80, '2024-06-06 13:52:29', '2024-06-06 15:52:13'),
(5, 17, 2, 90, '2024-06-07 07:26:07', '2024-06-07 14:26:07'),
(6, 17, 1, 80, '2024-06-07 07:26:21', '2024-06-07 14:26:21'),
(7, 5, 1, 80, '2024-06-07 07:38:26', '2024-06-07 14:38:26'),
(8, 5, 2, 75, '2024-06-07 07:41:47', '2024-06-08 06:11:26'),
(9, 5, 3, 80, '2024-06-07 08:13:54', '2024-06-08 06:11:21'),
(11, 4, 1, 80, '2024-06-07 22:06:03', '2024-06-08 05:06:03'),
(12, 4, 3, 90, '2024-06-07 22:08:27', '2024-06-08 05:08:27'),
(13, 3, 1, 80, '2024-06-07 22:28:44', '2024-06-08 05:28:44'),
(14, 3, 3, 80, '2024-06-07 22:28:52', '2024-06-08 05:28:52'),
(15, 2, 3, 85, '2024-06-07 22:59:47', '2024-06-08 05:59:47'),
(16, 2, 1, 87, '2024-06-07 22:59:56', '2024-06-08 06:09:54'),
(17, 6, 1, 80, '2024-06-07 23:04:30', '2024-06-08 06:04:30'),
(18, 6, 2, 85, '2024-06-07 23:04:35', '2024-06-08 06:10:59'),
(20, 19, 1, 85, '2024-06-07 23:04:54', '2024-06-08 06:04:54'),
(21, 19, 2, 80, '2024-06-07 23:04:59', '2024-06-08 06:11:41'),
(22, 19, 3, 80, '2024-06-07 23:05:06', '2024-06-08 06:11:46'),
(23, 4, 2, 80, '2024-06-07 23:10:27', '2024-06-08 06:10:27'),
(24, 26, 1, 85, '2024-06-07 23:40:57', '2024-06-08 06:40:57'),
(25, 26, 2, 90, '2024-06-07 23:41:03', '2024-06-08 06:41:03'),
(26, 26, 3, 95, '2024-06-07 23:41:11', '2024-06-08 06:41:11'),
(27, 6, 3, 90, '2024-06-09 18:01:45', '2024-06-10 01:01:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_04_093807_create_siswa_table', 1),
(5, '2024_06_07_154803_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1YSWnXU6j1DcJdYsK2VWEBat0IGd1FeXTv1I0sNs', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVE1YmpnQ281b2FvSGM3bTFaMGxFdVNvVEpuNHMySFJ6am5VNVp3YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1717989939);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `user_id`, `nama`, `jenis_kelamin`, `agama`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 0, 'Aulia Azzahra', 'P', 'Islam', 'Burneh', 'Rara.jpg', NULL, '2024-06-06 08:02:09'),
(3, 0, 'Imroatul Mufida', 'P', 'Islam', 'Tanah Merah', NULL, NULL, NULL),
(4, 0, 'Karimah', 'P', 'Islam', 'Jaddih', NULL, NULL, NULL),
(5, 0, 'Aisom Zamzami', 'L', 'Islam', 'Derpah', NULL, NULL, NULL),
(6, 0, 'Ibaneza Fendera', 'L', 'Islam', 'Pejagan', 'img-20221116-wa0021-1.jpg', NULL, '2024-06-08 01:08:21'),
(17, 0, 'Achmad Dandy', 'L', 'Islam', 'Pejagan', 'Nak senja bgt.jpg', '2024-06-05 20:18:56', '2024-06-06 03:34:05'),
(19, 2, 'Lutfi', 'L', 'Islam', 'Burneh', 'Lutfi.jpg', '2024-06-06 04:18:49', '2024-06-08 01:58:19'),
(26, 9, 'Rifki Adi', 'L', 'Islam', 'Pangeranan', 'Ici.jpg', '2024-06-07 23:40:47', '2024-06-08 01:08:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Achmad Dandy', 'achdandycr01@gmail.com', NULL, '$2y$12$j8KpIUxSNfuL/RUffkY8Gu5Y2fazpF4Zc20pmvO/QGlq2CYaJD5ua', 'btfIjzwSzj9TCNuKvRirngBghs08SqRF0oGoFMxyRkWDBhuUpIHUZhLQQhEP', '2024-06-05 03:54:26', '2024-06-05 03:54:26'),
(2, 'siswa', 'Lutfi', 'lutfi@gmail.com', NULL, '$2y$12$egN7Swjra737lyJ.RPj8U.cbDaYPP5a5rvaqBU0udZmXoC3zr0Wx2', 'NkbGyKVio8HELm3p0lE5li74JFOTS9tPQ8mGa0izhdnpnsqQ8DWgzk4Fo3vN', '2024-06-06 04:18:49', '2024-06-06 04:18:49'),
(9, 'siswa', 'Rifki Adi', 'rifkiadi348@gmail.com', NULL, '$2y$12$n/.v5HXCD./oH.BoOsiNhOrp1EDY9d9AT6uSysSpWd3XNEiOiWA.C', 'ioulQv6Il7XL22qUt5Kf4GY2h5yidWtHVYmaPJk42XZ8qgnfwRKlBpammWTK', '2024-06-07 23:40:47', '2024-06-07 23:40:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2023 pada 17.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_konsul`
--

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
-- Struktur dari tabel `konsultasis`
--

CREATE TABLE `konsultasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `komentar_pasien` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'belum',
  `komentar_konsultan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konsultasis`
--

INSERT INTO `konsultasis` (`id`, `judul`, `komentar_pasien`, `user_id`, `status`, `komentar_konsultan`, `created_at`, `updated_at`) VALUES
(10, '<p>test1</p>', NULL, 3, 'belum', NULL, '2023-06-12 20:25:20', '2023-06-12 20:25:20'),
(11, '<p>test2</p>', 'Testing Komentar Pasien', 3, 'selesai', 'Testing Komentar Konsultan', '2023-06-12 20:25:27', '2023-06-12 20:25:27'),
(12, '<p>test3</p>', NULL, 3, 'konsultasi', '<p>dvdvdv</p>', '2023-06-12 20:25:38', '2023-06-13 09:22:26'),
(13, '<p>test4</p>', 'Testing Komentar Pasien', 3, 'selesai', 'Testing Komentar Konsultan', '2023-06-12 20:25:49', '2023-06-12 20:25:49'),
(16, '<p>Testing 6</p>', '<p>konsultan/list-konsultasi/konsultan/list-konsultasi/konsultan/list-konsultasi/konsultan/list-konsultasi/konsultan/list-konsultasi/</p>', 3, 'selesai', '<p>oke kita ketemu offline</p>', '2023-06-12 20:33:23', '2023-06-13 09:20:27');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_09_165020_create_konsultasis_table', 1),
(6, '2023_06_09_165235_create_pertemuans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Struktur dari tabel `pertemuans`
--

CREATE TABLE `pertemuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `komentar_pasien` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'belum',
  `komentar_konsultan` varchar(255) DEFAULT NULL,
  `waktu_awal` varchar(255) NOT NULL,
  `waktu_akhir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertemuans`
--

INSERT INTO `pertemuans` (`id`, `name`, `komentar_pasien`, `user_id`, `status`, `komentar_konsultan`, `waktu_awal`, `waktu_akhir`, `created_at`, `updated_at`) VALUES
(1, 'test1', NULL, 3, 'terima', '<p>ddfdf</p>', '2023-06-12T10:07', '2023-06-12T10:07', '2023-06-12 20:07:58', '2023-06-13 10:08:38'),
(2, 'test2', NULL, 3, 'terima', NULL, '2023-06-12T10:08', '2023-06-12T10:08', '2023-06-12 20:08:16', '2023-06-12 20:08:16'),
(6, 'test 3', NULL, 3, 'ulang', NULL, '2023-06-14T10:20', '2023-06-15T11:20', '2023-06-12 20:20:09', '2023-06-13 10:09:19'),
(7, 'test 4', '<p>okre</p>', 3, 'terima', '<p>sip deh</p>', '2023-06-14T10:20', '2023-06-14T13:20', '2023-06-12 20:20:41', '2023-06-13 10:07:48'),
(8, 'test 6', NULL, 3, 'belum', NULL, '2023-06-16T00:09', '2023-06-16T04:09', '2023-06-13 10:10:05', '2023-06-13 10:10:05'),
(9, 'vdvdvdvdbsfbsf', NULL, 3, 'belum', NULL, '2023-06-16T00:10', '2023-06-16T00:10', '2023-06-13 10:10:33', '2023-06-13 10:10:33'),
(10, 'vdvdvd', NULL, 3, 'terima', '<p>oke..</p>', '2023-06-14T04:33', '2023-06-14T00:39', '2023-06-13 10:33:50', '2023-06-14 08:14:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farhan Rizky Ramadhan', 'aan', 'admin', 'aananjay5@gmail.com', NULL, '$2y$10$PG8iVH/rSnP.Zr7thWFdb.2zBK1mfoEv6k0WIvVDGVLxt9Sw3Yxki', NULL, '2023-06-10 08:58:21', '2023-06-14 09:36:06'),
(2, 'Farhan Rizky Ramadhan', 'farhan', 'konsultan', 'farhanrizkyramadhan99@gmail.com', NULL, '$2y$10$7g0so1hw3VeFREOn.v.aSeIFP8I1leNp2Kb/wkaiQD.Y5f1zdLNWi', NULL, '2023-06-10 08:59:35', '2023-06-15 08:28:33'),
(3, 'Farhan Rizky Ramadhan', 'farhans', 'pasien', 'farhanrizkyramadhan98@gmail.com', NULL, '$2y$10$KJiU3fRLYIMUQ9ULMNshzeAg.FZIamS7QawvevAz4PVNmeMrRQQum', NULL, '2023-06-10 09:01:02', '2023-06-15 08:40:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `konsultasis`
--
ALTER TABLE `konsultasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pertemuans`
--
ALTER TABLE `pertemuans`
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
-- AUTO_INCREMENT untuk tabel `konsultasis`
--
ALTER TABLE `konsultasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertemuans`
--
ALTER TABLE `pertemuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

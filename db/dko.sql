-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2021 pada 08.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kecelakaan_1`
--

CREATE TABLE `data_kecelakaan_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kecelakaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unsur_penyebab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_kecelakaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unggah_poto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kecelakaan_1`
--

INSERT INTO `data_kecelakaan_1` (`id`, `nama_peserta`, `jk`, `thn_lahir`, `nama_perusahaan`, `wilayah`, `no_tlp`, `tgl_kecelakaan`, `tempat_kejadian`, `unsur_penyebab`, `uraian_kecelakaan`, `skd`, `unggah_poto`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'Mutiara', 'perempuan', '2000', 'PT Kao Indonesia', 'kab bekasi', '12344', '2021-12-12', 'di dalam kantor', 'lain-lain(lalu lintas,tangga,kaleng sampah,benda kerja,dsb)', 'lain-lain', 'rawat inap', 'IMG20200401065700.jpg', 'kao@gmail.com', NULL, '2021-12-12 05:09:21', '2021-12-12 05:09:21'),
(16, 'Haidar', 'laki-laki', '1998', 'PT SHOPEE INDONESIA', 'purwakarta', '12344', '2021-12-06', 'di luar kantor', 'bahan kimia', 'tergelincir', 'rawat jalan', 'FB_IMG_16212032402010262.jpg', 'shopee@gmail.com', NULL, '2021-12-12 05:16:14', '2021-12-12 05:16:14'),
(17, 'Haidar', 'laki-laki', '2000', 'PT Kao Indonesia', 'kab bekasi', '4987', '2021-12-14', 'di luar kantor', 'radiasi dan bahan radioaktif(radium,cobalt,sinar ultra,sinar infra,dsb)', 'tergelincir', 'rawat inap', 'FB_IMG_15855335978924281.jpg', 'mutiaras694@gmail.com', NULL, '2021-12-14 04:03:41', '2021-12-14 04:03:41'),
(18, 'fazriyah', 'perempuan', '1997', 'PT SHOPEE INDONESIA', 'karawang', '4987', '2021-12-15', 'di dalam kantor', 'lain-lain(lalu lintas,tangga,kaleng sampah,benda kerja,dsb)', 'persinggungan dengan benda(terbentur,tergores,tertusuk', 'rawat jalan', 'FB_IMG_15855336239012834.jpg', 'mutiaras694@gmail.com', NULL, '2021-12-14 04:16:07', '2021-12-14 04:16:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kecelakaan_2`
--

CREATE TABLE `data_kecelakaan_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_bpjs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kecelakaan_2`
--

INSERT INTO `data_kecelakaan_2` (`id`, `nama_peserta`, `nama_perusahaan`, `jk`, `skd`, `file_bpjs`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'DIYAH NUR AZIZAH', 'pt.ypmi', 'perempuan', 'sembuh', 'KUESIONER DOMAIN AI COBIT 4.1.pdf', NULL, '2021-12-12 05:16:57', '2021-12-12 05:16:57'),
(12, 'dono', 'pt.ahm', 'laki laki', 'sembuh', 'surat pernyataa.pdf', NULL, '2021-12-12 05:17:17', '2021-12-12 05:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_11_23_102033_data-kecelakaan', 2),
(6, '2021_12_06_070929_tahap2', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mutiara', 'mutiaras694@gmail.com', NULL, '$2y$10$TXRxpvsKvA61O7hA10J3euH3nYQwFhqVdy3HndM7ldltGPgPElfK6', 'admin', NULL, '2021-11-19 23:25:03', '2021-11-19 23:25:03'),
(2, 'PT.NIPRO INDONESIA', 'nipro@gmail.com', NULL, '$2y$10$HNg41b2Tax76DH5WP63.DO1i.SOImjiUHl79YLAX.D.2Mbh92L8HO', 'client', NULL, '2021-11-20 00:54:25', '2021-11-20 00:54:25'),
(3, 'PT.KAO INDONESIA', 'kao@gmail.com', NULL, '$2y$10$JHZ.4GbcpBoMQzXiSEglb.b0jvggIPQkehX6/1jgGQQ0IcRGnivAm', 'client', NULL, '2021-11-20 00:56:04', '2021-11-20 00:56:04'),
(4, 'PT Yamaha Music', 'yamaha@gmail.com', NULL, '$2y$10$BRcxgY8.46gu1LX3pM1XQOSjq61yxw0PszsZBWSetv26zCJCAOzyq', 'client', NULL, '2021-11-20 09:20:23', '2021-11-20 09:20:23'),
(5, 'PT Koito Indonesia', 'koito@gmail.com', NULL, '$2y$10$YzrUNSmYiwzKYhLRvMpHlOC7WdsCMbmJj/z52lQkabXuc2kpcPIce', 'client', NULL, '2021-11-21 23:44:10', '2021-11-21 23:44:10'),
(8, 'PT TOYOTA INDONESIA MFG', 'toyotaindonesia@gmail.com', NULL, '$2y$10$/VBSpoU1G85Rlh3MiHel/emA6gWJ.0mBtT3/BQKbrSer2zab0aakm', 'client', NULL, '2021-11-25 02:15:17', '2021-11-25 02:15:17'),
(10, 'PT Mitsubsi Indonesia', 'mitsubisiindonesia@gmail.com', NULL, '$2y$10$mEtzSQxSwKnDUOuhY7XyjOBrhQUCMNPURLpMlVqFeHycx.t.FMp8i', 'client', NULL, '2021-11-25 02:16:14', '2021-11-25 02:16:14'),
(11, 'PT Kapal APi', 'kapalapi@gmail.com', NULL, '$2y$10$YOna0LExK0A6dx7Dvfu69eZRQIhI1Qoq/khvNc47IJrkttTj1HsTW', 'client', NULL, '2021-11-30 21:43:04', '2021-11-30 21:43:04'),
(12, 'PT.SHOPEE INDONEISA', 'shopee@gmail.com', NULL, '$2y$10$EjNXvni7AwAAKBP8ZZviL.aCaIQ4FlnVmZ3TALReWxGv7H36AmEPi', 'client', NULL, '2021-12-04 00:51:26', '2021-12-04 00:51:26'),
(14, 'PT Santos Jaya Abadi', 'santos@gmail.com', NULL, '$2y$10$OSfsdQwgkhNEXSGVQxdUyOs.LX5X1IE0aZ3N/SPU9O67FayeO2nxi', 'client', NULL, '2021-12-07 05:50:14', '2021-12-07 05:50:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kecelakaan_1`
--
ALTER TABLE `data_kecelakaan_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kecelakaan_2`
--
ALTER TABLE `data_kecelakaan_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `data_kecelakaan_1`
--
ALTER TABLE `data_kecelakaan_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `data_kecelakaan_2`
--
ALTER TABLE `data_kecelakaan_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

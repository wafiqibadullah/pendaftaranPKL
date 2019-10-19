-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2019 pada 08.47
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ussername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `ussername`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '123456', 'x1i3hMm1xwEI0etTNjCAp690mtFh3f3lDONMl3ov6vRemaNAGGSx7NpWKi6W', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_pkls`
--

CREATE TABLE `calon_pkls` (
  `calon_id` int(10) UNSIGNED NOT NULL,
  `daftar_id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `calon_pkls`
--

INSERT INTO `calon_pkls` (`calon_id`, `daftar_id`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, '587597.jpg', 'terkonfirmasi', '2019-02-14 00:14:56', '2019-02-14 00:15:17'),
(7, 5, 'SK DIRGEN ANI.pdf', 'terkonfirmasi', '2019-02-28 06:51:18', '2019-08-22 08:48:03'),
(8, 6, 'aa.jpg', 'terkonfirmasi', '2019-08-28 05:29:32', '2019-08-28 05:34:18'),
(9, 7, '2.png', 'terkonfirmasi', '2019-08-29 04:23:55', '2019-08-29 04:25:46'),
(10, 8, '7.png', 'terkonfirmasi', '2019-08-30 00:23:59', '2019-08-30 00:25:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya_tulis`
--

CREATE TABLE `karya_tulis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pembimbing_karya` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pembimbing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karya_tulis`
--

INSERT INTO `karya_tulis` (`id`, `nip`, `nama_pembimbing_karya`, `jk`, `alamat_pembimbing`, `nope`, `tempat_lahir`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(2, '001213131', 'Kartini', 'L', 'jakarta', '0', 'jakarta', '2019-12-31', '2019-08-28 05:25:49', '2019-08-28 05:26:00'),
(3, '123', 'Kartono', 'L', 'Jambi', '-', 'jambi', '2019-12-31', '2019-08-28 05:26:26', '2019-08-28 05:26:26'),
(4, '-', 'Bambang u', 'L', 'KALIDERES', '08112131', 'cirebon', '2019-12-31', '2019-08-29 04:18:21', '2019-08-29 04:18:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'XI RPL 1', '2019-02-09 11:45:52', '2019-02-09 11:45:52'),
(2, 'XI RPL 2', '2019-02-09 11:46:13', '2019-02-09 11:46:13'),
(3, 'XI TKJ 1', '2019-02-09 11:46:21', '2019-02-09 11:46:21'),
(4, 'XI TKJ 2', '2019-02-09 11:46:32', '2019-02-09 11:46:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_18_001_create_siswas_table', 1),
(2, '2019_01_18_002_create_kelas_table', 1),
(3, '2019_01_18_123423_create_admins_table', 1),
(4, '2019_01_18_123644_create_karya_tulis_table', 1),
(5, '2019_01_18_123716_create_pembimbings_table', 1),
(6, '2019_01_18_123735_create_pendaftarans_table', 1),
(7, '2019_01_18_123736_create_calon_pkls_table', 1),
(8, '2019_01_18_123753_create_siswa_pkls_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbings`
--

CREATE TABLE `pembimbings` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pembimbing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pembimbing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembimbings`
--

INSERT INTO `pembimbings` (`id`, `nip`, `nama_pembimbing`, `jk`, `alamat_pembimbing`, `nope`, `tempat_lahir`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(2, '88823', 'hasyim u', 'L', 'asdas', '1231231', 'asdsa', '2019-12-31', '2019-02-10 05:09:57', '2019-08-29 04:17:25'),
(4, '9a', 'asdas', 'L', 'asd', 'asd', 'asd', '2019-12-31', '2019-02-10 05:10:28', '2019-02-10 05:10:28'),
(5, '12123', 'Hartanti', 'P', 'cibaru', '-', 'cibaru', '2019-12-31', '2019-08-28 05:22:37', '2019-08-28 05:22:37'),
(6, '-', 'Dadang', 'L', 'as', '1', '1', '2019-12-31', '2019-08-29 04:16:29', '2019-08-29 04:17:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `siswa_id` int(10) UNSIGNED NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `siswa_id`, `kelas_id`, `nama_perusahaan`, `alamat_perusahaan`, `created_at`, `updated_at`) VALUES
(3, 6, 2, 'PT KIN', 'as', '2019-02-14 00:14:29', '2019-02-14 00:14:29'),
(5, 8, 2, 'PT mansyur', 'Jalan', '2019-02-28 06:28:32', '2019-02-28 06:28:32'),
(6, 10, 2, 'PT Suryajati', 'Jalan kejuden', '2019-08-28 05:28:54', '2019-08-28 05:28:54'),
(7, 9, 1, 'PT jarum', 'kakaka', '2019-08-29 04:22:21', '2019-08-29 04:22:21'),
(8, 12, 1, 'PT Jarum super', 'cikarang', '2019-08-30 00:23:16', '2019-08-30 00:23:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `password`, `nama_siswa`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nope`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, '11623558', 'welcome', 'Juwi', 'P', 'sima', '2019-12-31', 'Jambi', '0852343221', 'duBWtSfDfPye4S9ZsEWH7zsUSl9HXTYoptDZSj3D2SEDxsPU2pnQ7kha6hNL', '2019-02-10 04:55:45', '2019-02-10 04:55:45'),
(8, '11623560', 'welcome', 'Fiqdor', 'L', 'sda', '2019-12-31', 'asd', '0812321', 'umoLVpTBzISQmN0dukNHqC3RJujqLIJlWUho0P1BZMW6sVK0CEgu4R1625ID', '2019-02-28 06:28:02', '2019-02-28 06:28:02'),
(9, '11623561', 'welcome', 'fiqi', 'L', '-', '2019-12-31', 'jalan', '-', 'xSO6GjH9SpuKoKKRVWHDfwrU0WUbBJTvtPq6np9Jd5mmdB2PQWPcbHS5w9PF', '2019-08-22 17:16:25', '2019-08-22 17:16:25'),
(10, '11623559', 'welcome', 'Jumaidilakhir dan awal', 'L', 'cibinong', '2018-01-31', 'cibinong', '-', 'HPswUAxGgIiIti8FcUnE7OBQBH6ouxpmXdYn2fd3HSKT5zuFEoMMNxqoaW07', '2019-08-28 05:21:17', '2019-08-30 00:19:56'),
(11, '11623561', 'welcome', 'Jukri', 'L', 'q', '2019-12-31', 'Cibogo', '-', 'L', '2019-08-29 04:12:23', '2019-08-29 04:21:39'),
(12, '11623562', 'welcome', 'Bambang', 'L', 'Cibinong', '2019-01-01', 'Jakarta', '-', 'OjPdJ4lipXNcsFkqPWOfgiFkqi8KVm4uF6RVE2kis7jCfc8KgtN0rak3f87W', '2019-08-30 00:19:02', '2019-08-30 00:19:02'),
(13, '11623563', 'awaw', 'aaa', 'P', 'ss', '2019-12-31', 'as', '-', 'P', '2019-08-30 00:36:45', '2019-08-30 00:36:45'),
(14, '116235622', 'sad', 'asdas', 'L', 'a', '2019-12-31', 'asd', 'asda', 'L', '2019-08-30 00:45:04', '2019-08-30 00:45:04'),
(15, '999', 'welcome', 'wafiq', 'L', 'Cirebon', '2019-12-01', 'jalan anu', '0812222822', 'L', '2019-10-09 03:02:35', '2019-10-09 03:02:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_pkls`
--

CREATE TABLE `siswa_pkls` (
  `id` int(10) UNSIGNED NOT NULL,
  `calon_id` int(10) UNSIGNED NOT NULL,
  `tulis_id` int(10) UNSIGNED NOT NULL,
  `pembimbing_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa_pkls`
--

INSERT INTO `siswa_pkls` (`id`, `calon_id`, `tulis_id`, `pembimbing_id`, `created_at`, `updated_at`) VALUES
(3, 8, 3, 5, '2019-08-28 05:35:02', '2019-08-28 05:35:02'),
(4, 9, 3, 5, '2019-08-29 04:26:14', '2019-08-29 04:26:14'),
(5, 10, 4, 5, '2019-08-30 00:25:52', '2019-08-30 00:25:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_pkls`
--
ALTER TABLE `calon_pkls`
  ADD PRIMARY KEY (`calon_id`),
  ADD KEY `calon_pkls_daftar_id_foreign` (`daftar_id`);

--
-- Indexes for table `karya_tulis`
--
ALTER TABLE `karya_tulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembimbings`
--
ALTER TABLE `pembimbings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_siswa_id_foreign` (`siswa_id`),
  ADD KEY `pendaftarans_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_pkls`
--
ALTER TABLE `siswa_pkls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_pkls_calon_id_foreign` (`calon_id`),
  ADD KEY `siswa_pkls_tulis_id_foreign` (`tulis_id`),
  ADD KEY `siswa_pkls_pembimbing_id_foreign` (`pembimbing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calon_pkls`
--
ALTER TABLE `calon_pkls`
  MODIFY `calon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `karya_tulis`
--
ALTER TABLE `karya_tulis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pembimbings`
--
ALTER TABLE `pembimbings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `siswa_pkls`
--
ALTER TABLE `siswa_pkls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `calon_pkls`
--
ALTER TABLE `calon_pkls`
  ADD CONSTRAINT `calon_pkls_daftar_id_foreign` FOREIGN KEY (`daftar_id`) REFERENCES `pendaftarans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftarans_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa_pkls`
--
ALTER TABLE `siswa_pkls`
  ADD CONSTRAINT `siswa_pkls_calon_id_foreign` FOREIGN KEY (`calon_id`) REFERENCES `calon_pkls` (`calon_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_pkls_pembimbing_id_foreign` FOREIGN KEY (`pembimbing_id`) REFERENCES `pembimbings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_pkls_tulis_id_foreign` FOREIGN KEY (`tulis_id`) REFERENCES `karya_tulis` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

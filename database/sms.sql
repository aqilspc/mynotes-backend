-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2021 at 10:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bd_kehadiran_siswa`
--

CREATE TABLE `bd_kehadiran_siswa` (
  `id_kehadiran` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `jam` char(6) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_kehadiran_siswa`
--

INSERT INTO `bd_kehadiran_siswa` (`id_kehadiran`, `id_siswa`, `tanggal`, `status`, `jam`, `created_at`) VALUES
(1, 1, '2021-10-08', 'Izin', '13:08', '2021-10-08 07:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `bd_pelanggaran_siswa`
--

CREATE TABLE `bd_pelanggaran_siswa` (
  `id_pelanggaran` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `pelanggaran` longtext NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'berat \r\nringan',
  `tanggal` date NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_pelanggaran_siswa`
--

INSERT INTO `bd_pelanggaran_siswa` (`id_pelanggaran`, `id_siswa`, `pelanggaran`, `status`, `tanggal`, `created_at`) VALUES
(1, 1, '<p>gak gae sabuk</p><p>gak gae topi</p><p>gak gae baret<br></p>', 'Ringan', '2021-10-08', '2021-10-08 08:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `bd_siswa`
--

CREATE TABLE `bd_siswa` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_user_wali` bigint(20) NOT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `kode_unik` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_siswa`
--

INSERT INTO `bd_siswa` (`id_siswa`, `id_user_wali`, `nis`, `nama_siswa`, `no_telepon`, `kode_unik`, `created_at`) VALUES
(1, 2, '111112345', 'aqil', '0099876', '901F3', '2021-10-08 06:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `bd_tagihan_siswa`
--

CREATE TABLE `bd_tagihan_siswa` (
  `id_tagihan` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_tagihan_siswa`
--

INSERT INTO `bd_tagihan_siswa` (`id_tagihan`, `id_siswa`, `jenis`, `jumlah`, `status`, `created_at`) VALUES
(1, 1, 'SPP OKTOBER 2021', 220000, 'Belum_Lunas', '2021-10-08 08:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `md_kebijakan`
--

CREATE TABLE `md_kebijakan` (
  `id_kebijakan` bigint(20) UNSIGNED NOT NULL,
  `nama_kebijakan` varchar(100) NOT NULL,
  `file_kebijakan` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_kebijakan`
--

INSERT INTO `md_kebijakan` (`id_kebijakan`, `nama_kebijakan`, `file_kebijakan`, `created_at`) VALUES
(1, 'Tata Tertib Berseragamssss', 'http://localhost/kuliah/sms/public/admin/file/kebijakan/1416295824-file_kebijakan.pdf', '2021-10-08 05:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `md_kegiatan`
--

CREATE TABLE `md_kegiatan` (
  `id_kegiatan` bigint(20) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_kegiatan`
--

INSERT INTO `md_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal`, `gambar`, `keterangan`, `created_at`) VALUES
(1, 'hut rissssw', '2021-10-08', 'http://localhost/kuliah/sms/public/admin/images/kegiatan/979309420-gambar.png', '<p><s>okokkokokok</s><br></p>', '2021-10-08 06:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `md_sistem`
--

CREATE TABLE `md_sistem` (
  `id_sistem` int(11) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_sistem`
--

INSERT INTO `md_sistem` (`id_sistem`, `visi`, `misi`, `created_at`) VALUES
(1, 'Visi SMK Negeri 1 Pasuruan<br>\r\nTerwujudnya insan yang berakhlak mulia, kreatif, inovatif, mandiri, dan peduli lingkungan.<br><br>', ' Misi SMK Negeri 1 Pasuruan <br>\r\n1. Meningkatkan Nilai Keimanan dan Ketaqwaan kepada Tuhan Yang Maha Esa<br>\r\n2. Menumbuhkembangkan Jiwa Nasionalisme<br>\r\n3. Meningkatkan Prestasi dalam Ilmu Pengetahuan, Teknologi, Seni Budaya dan Olahraga<br>\r\n4. Menumbuhkembangkan Kreatifitas, Inovatif dan Produktifitas dalam Peningkatan Mutu Pendidikan<br>\r\n5. Menumbuhkembangkan Kemandirian<br>\r\n6. Menanamkan sikap pelestarian Lingkungan, Pencegahan Terjadinya  Pencemaran dan  Kerusakan Lingkungan', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@sms.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, NULL, NULL),
(2, 'wali', 'abd muchdyidin', 'abd_muchdyidin@smss.my.id', NULL, '$2y$10$hSd9AKLXX2e9thRrD4KNRO/BaKx3wsgYZurO6rlqz7Ci/dXQTr0ui', NULL, '2021-10-07 23:43:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd_kehadiran_siswa`
--
ALTER TABLE `bd_kehadiran_siswa`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `bd_pelanggaran_siswa`
--
ALTER TABLE `bd_pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `bd_siswa`
--
ALTER TABLE `bd_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `bd_tagihan_siswa`
--
ALTER TABLE `bd_tagihan_siswa`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `md_kebijakan`
--
ALTER TABLE `md_kebijakan`
  ADD PRIMARY KEY (`id_kebijakan`);

--
-- Indexes for table `md_kegiatan`
--
ALTER TABLE `md_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `md_sistem`
--
ALTER TABLE `md_sistem`
  ADD PRIMARY KEY (`id_sistem`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bd_kehadiran_siswa`
--
ALTER TABLE `bd_kehadiran_siswa`
  MODIFY `id_kehadiran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_pelanggaran_siswa`
--
ALTER TABLE `bd_pelanggaran_siswa`
  MODIFY `id_pelanggaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_siswa`
--
ALTER TABLE `bd_siswa`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_tagihan_siswa`
--
ALTER TABLE `bd_tagihan_siswa`
  MODIFY `id_tagihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `md_kebijakan`
--
ALTER TABLE `md_kebijakan`
  MODIFY `id_kebijakan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_kegiatan`
--
ALTER TABLE `md_kegiatan`
  MODIFY `id_kegiatan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_sistem`
--
ALTER TABLE `md_sistem`
  MODIFY `id_sistem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

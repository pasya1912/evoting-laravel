-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 07:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_pilketos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '{"ketua":{"nama":"DEFAULT","kelas":"default"},"wakil":{"nama":"DEFAULT","kelas":"default"}}',
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahsuara` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama`, `data`, `visi`, `misi`, `foto`, `type`, `periode`, `jumlahsuara`, `created_at`, `updated_at`) VALUES
(4, 'Ramzy -  Kanaya', '{\"ketua\":{\"nama\":\"Ramzy Roshan Faridzy\",\"kelas\":\"11\"},\"wakil\":{\"nama\":\"Kanaya Zahwa\",\"kelas\":\"11\"}}', 'Menjadikan OSIS SMAN 36 Jakarta menjadi OSIS yang kolaboratif serta pendorong bakat siswa yang kreatif, efektif dan terpercaya.', '1. Pembukaan koneksi dan relasi yang seluas-luasnya untuk mewujudkan OSIS SMAN 36 Jakarta yang kreatif, inovatif, dan inspiratif.\r\n2. Menjadikan OSIS sebagai organisasi yang memotivasi siswa dalam hal pengembangan minat dan bakat serta bertujuan menciptakan siswa siswa yang berintelektual dalam bidang akademik maupun nonakademik\r\n3. Memfasilitasi siswa dengan program kerja yang inovatif dan terpercaya', 'osis1.jpg', 'osis', '1', 0, NULL, '2021-10-10 11:41:51'),
(5, 'Dicho  - Amanda', '{\"ketua\":{\"nama\":\"Dicho Dermawan\",\"kelas\":\"11\"},\"wakil\":{\"nama\":\"Purie Amanda\",\"kelas\":\"11\"}}', 'Menciptakan OSIS sebagai wadah untuk meningkatkan potensi peserta didik sehingga terbentuk SDM yang kreatif inovatif dan unggul.', '1. Menanamkan jiwa Pancasila dalam berorganisasi.\r\n2. Membentuk karakter pengurus OSIS yang bertanggung jawab.\r\n3.Memaksimalkan fungsi dan peranan OSIS SMAN 36 JAKARTA.\r\n4.Mengoptimalkan kinerja dalam melaksanakan program kerja.\r\n5. Memaksimalkan kualitas ekstrakurikuler sebagai wadah untuk menarik minat siswa serta dapat mengukir prestasi dengan maksimal.', 'osis2.png', 'osis', '1', 0, NULL, '2021-10-08 21:40:05'),
(6, 'Fatimah - Clara', '{\"ketua\":{\"nama\":\"Fatimah Azzahra Ichsan\",\"kelas\":\"11\"},\"wakil\":{\"nama\":\"Clara Aurelia Setiady\",\"kelas\":\"11\"}}', 'Mengembangkan OSIS SMAN 36 Jakarta sebagai wadah untuk mengoptimalkan potensi diri Siswa/I SMAN 36 Jakarta serta mampu beradaptasi dengan teknologi.', '1. Membuat program kerja yang dapat meningkatkan potensi Siswa/I SMAN 36 Jakarta dalam bidang akademik maupun non akademik.\r\n2. Terus berinovasi dan terbuka pada ide-ide baru untuk meningkatkan kualitas proker.\r\n3. Membangun hubungan koordinasi dan sinkronisasi informasi antara guru, OSIS, MPK dan murid\r\n4. Mengaktifkan fungsi media sosial sebagai sarana informasi yang dapat memberikan manfaat', 'osis3.png', 'osis', '1', 0, NULL, NULL),
(8, 'Tifanny - Atara', '{\"ketua\":{\"nama\":\"Tifanny Shabrina Alayya\",\"kelas\":\"11\"},\"wakil\":{\"nama\":\"Atara Callista Giselly\",\"kelas\":\"11\"}}', 'Mewujudkan MPK sebagai organisasi yang bersifat responsif dan kekeluargaan serta mengoptimalkan kinerja MPK sebagai sarana aspirasi siswa/i dengan menerapkan prioritas loyalitas dan totalitas.', '1. Memaksimalkan hubungan persaudaraan sesama siswa/i dan ekskul agar bisa bersama membanggakan sekolah.\r\n2. Mengoptimalkan pengawasan terhadap OSIS guna meningkatkan kualitas kinerja.\r\n3. Menyukseskan setiap program kerja.\r\n4. Mengembangkan media untuk para siswa/i dalam menyampaikan aspirasi.\r\n5. Melaksanakan peran MPK sebagai perwakilan kelas dengan penuh tanggung jawab.', 'mpk2.png', 'mpk', '1', 0, NULL, '2021-10-08 21:39:16');

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
(3, '2019_05_13_043230_create_admin_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2021_07_08_192612_create_jobs_table', 3);

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
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_osis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `status_mpk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `value`) VALUES
(1, 'startdate', '1633543200'),
(2, 'enddate', '1633878000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$P7wn0aKvbiM5mDj6bvOgMefXtOmQk00bKGlqtyvd1lZ1NI6pkUtWK', NULL, '2021-08-25 00:01:33', '2021-08-25 00:01:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

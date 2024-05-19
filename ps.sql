-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 03:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_poli` int(11) NOT NULL,
  `antrian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `id_poli`, `antrian`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(2, 2, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(3, 3, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(4, 4, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(5, 5, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(6, 6, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(7, 7, 1, '2023-02-12 00:14:47', '2023-02-12 00:14:47');

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
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `goldar` enum('A','B','AB','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Kepercayaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('Kawin','Tidak Kawin','Cerai Mati','Cerai Hidup') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` enum('BPJS','Reguler') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama`, `nohp`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `goldar`, `agama`, `status_perkawinan`, `alamat`, `layanan`, `created_at`, `updated_at`) VALUES
(1, 'Animi dolor laborio', '90', 'Vel tempore rem non', '2017-05-03', 'L', 'A', 'Hindu', 'Kawin', 'Dolore et cupidatat', 'BPJS', '2023-02-12 00:21:45', '2023-02-12 00:21:45'),
(2, 'Assumenda quos est u', '13', 'Qui aute sit aliqui', '2002-02-18', 'L', 'B', 'Hindu', 'Kawin', 'Et ut nesciunt accu', 'BPJS', '2023-02-12 00:33:34', '2023-02-12 00:33:34'),
(3, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:11:21', '2023-02-12 02:11:21'),
(4, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:11:47', '2023-02-12 02:11:47'),
(5, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:12:16', '2023-02-12 02:12:16'),
(6, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:12:34', '2023-02-12 02:12:34'),
(7, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:12:59', '2023-02-12 02:12:59'),
(8, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:13:20', '2023-02-12 02:13:20'),
(9, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:19:40', '2023-02-12 02:19:40'),
(10, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:20:07', '2023-02-12 02:20:07'),
(11, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:20:23', '2023-02-12 02:20:23'),
(12, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:21:08', '2023-02-12 02:21:08'),
(13, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:21:26', '2023-02-12 02:21:26'),
(14, 'Molestias laborum qu', '97', 'Consequatur odit eo', '1983-07-21', 'P', 'O', 'Kepercayaan', 'Cerai Mati', 'Dignissimos voluptas', 'BPJS', '2023-02-12 02:23:02', '2023-02-12 02:23:02'),
(15, 'Ipsum voluptatem v', '93', 'Id quod officiis eos', '2016-09-18', 'P', 'A', 'Hindu', 'Kawin', 'Dolorem est qui et i', 'BPJS', '2023-02-12 02:32:46', '2023-02-12 02:32:46'),
(16, 'Ipsum voluptatem v', '93', 'Id quod officiis eos', '2016-09-18', 'P', 'A', 'Hindu', 'Kawin', 'Dolorem est qui et i', 'BPJS', '2023-02-12 02:33:00', '2023-02-12 02:33:00'),
(17, 'Ipsum voluptatem v', '93', 'Id quod officiis eos', '2016-09-18', 'P', 'A', 'Hindu', 'Kawin', 'Dolorem est qui et i', 'BPJS', '2023-02-12 02:33:20', '2023-02-12 02:33:20'),
(18, 'Ipsum voluptatem v', '93', 'Id quod officiis eos', '2016-09-18', 'P', 'A', 'Hindu', 'Kawin', 'Dolorem est qui et i', 'BPJS', '2023-02-12 02:33:35', '2023-02-12 02:33:35'),
(19, 'Ea qui mollit nisi e', '60', 'Reprehenderit vel s', '2007-12-04', 'L', 'B', 'Budha', 'Tidak Kawin', 'Sed tempor elit sus', 'BPJS', '2023-02-12 02:35:30', '2023-02-12 02:35:30'),
(20, 'Praesentium suscipit', '42', 'Id praesentium asper', '2016-06-10', 'L', 'A', 'Hindu', 'Tidak Kawin', 'Amet ad dolor velit', 'BPJS', '2023-02-12 02:36:18', '2023-02-12 02:36:18'),
(21, 'Placeat non tempora', '42', 'Illo at quia in comm', '1975-09-18', 'L', 'O', 'Kristen', 'Cerai Mati', 'Cupiditate eum earum', 'BPJS', '2023-02-12 02:44:41', '2023-02-12 02:44:41'),
(22, 'Rem voluptas consequ', '34', 'Officia quod mollit', '2020-05-19', 'P', 'B', 'Budha', 'Kawin', 'Quia minima magni ni', 'BPJS', '2023-02-12 02:46:12', '2023-02-12 02:46:12'),
(23, 'Qui earum aliquam au', '44', 'Voluptatem Tempor e', '1989-04-11', 'L', 'A', 'Budha', 'Kawin', 'Aliquid hic hic ipsa', 'BPJS', '2023-02-12 02:48:55', '2023-02-12 02:48:55'),
(24, 'Itaque voluptate in', '88', 'Quibusdam aut sint n', '2001-11-12', 'P', 'B', 'Kepercayaan', 'Kawin', 'Minus ducimus conse', 'BPJS', '2023-02-12 02:50:17', '2023-02-12 02:50:17'),
(25, 'Voluptas amet id n', '16', 'Nesciunt enim repre', '2001-07-02', 'L', 'AB', 'Kristen', 'Cerai Mati', 'Iusto cum hic cupidi', 'BPJS', '2023-02-12 02:51:25', '2023-02-12 02:51:25'),
(26, 'Odio non eius labori', '94', 'Tenetur excepteur im', '2009-06-16', 'P', 'A', 'Islam', 'Kawin', 'Aspernatur ea molest', 'BPJS', '2023-02-12 03:20:19', '2023-02-12 03:20:19'),
(27, 'Dolorum illum solut', '89', 'Sed qui quis commodi', '1983-07-13', 'L', 'B', 'Budha', 'Cerai Hidup', 'Atque maiores repreh', 'BPJS', '2023-02-12 03:21:02', '2023-02-12 03:21:02'),
(28, 'Est omnis lorem eum', '68', 'Aperiam ut dignissim', '2009-04-25', 'L', 'O', 'Kristen', 'Cerai Mati', 'Ut doloremque reicie', 'BPJS', '2023-02-12 03:23:05', '2023-02-12 03:23:05'),
(29, 'Aut quam beatae quid', '94', 'Non possimus nisi i', '1975-09-28', 'L', 'AB', 'Kristen', 'Tidak Kawin', 'Esse ullamco conseq', 'BPJS', '2023-02-12 03:33:25', '2023-02-12 03:33:25'),
(30, 'Natus eligendi saepe', '39', 'Cum vero animi non', '2013-09-13', 'P', 'O', 'Islam', 'Cerai Mati', 'Provident natus sed', 'BPJS', '2023-02-12 04:27:23', '2023-02-12 04:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(10) UNSIGNED NOT NULL,
  `id_identitas` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `status_pasien` enum('lama','baru') COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` enum('bpjs','umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` double NOT NULL,
  `kondisi_kesehatan` enum('sehat','sakit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi_kunjungan` enum('online','offline') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_identitas`, `id_poli`, `no_antrian`, `status_pasien`, `layanan`, `biaya`, `kondisi_kesehatan`, `opsi_kunjungan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 00:21:45', '2023-02-12 00:21:45'),
(2, 2, 3, 1, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 00:33:34', '2023-02-12 00:33:34'),
(3, 3, 6, 1, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:11:21', '2023-02-12 02:11:21'),
(4, 4, 6, 2, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:11:47', '2023-02-12 02:11:47'),
(5, 5, 6, 3, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:12:16', '2023-02-12 02:12:16'),
(6, 6, 6, 4, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:12:34', '2023-02-12 02:12:34'),
(7, 7, 6, 5, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:12:59', '2023-02-12 02:12:59'),
(8, 8, 6, 6, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:13:20', '2023-02-12 02:13:20'),
(9, 9, 6, 7, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:19:40', '2023-02-12 02:19:40'),
(10, 10, 6, 8, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:20:07', '2023-02-12 02:20:07'),
(11, 11, 6, 9, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:20:23', '2023-02-12 02:20:23'),
(12, 12, 6, 10, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:21:08', '2023-02-12 02:21:08'),
(13, 13, 6, 11, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:21:26', '2023-02-12 02:21:26'),
(14, 14, 6, 12, 'baru', 'umum', 15000, 'sakit', 'offline', '2023-02-12 02:23:02', '2023-02-12 02:23:02'),
(15, 15, 1, 1, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 02:32:47', '2023-02-12 02:32:47'),
(16, 16, 1, 2, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 02:33:00', '2023-02-12 02:33:00'),
(17, 17, 1, 3, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 02:33:20', '2023-02-12 02:33:20'),
(18, 18, 1, 4, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 02:33:35', '2023-02-12 02:33:35'),
(19, 19, 3, 2, 'baru', 'bpjs', 0, 'sehat', 'offline', '2023-02-12 02:35:30', '2023-02-12 02:35:30'),
(20, 20, 3, 3, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 02:36:18', '2023-02-12 02:36:18'),
(21, 21, 6, 13, 'baru', 'bpjs', 0, 'sakit', 'offline', '2023-02-12 02:44:41', '2023-02-12 02:44:41'),
(22, 22, 7, 1, 'baru', 'bpjs', 0, 'sehat', 'offline', '2023-02-12 02:46:12', '2023-02-12 02:46:12'),
(23, 23, 7, 2, 'baru', 'umum', 15000, 'sehat', 'offline', '2023-02-12 02:48:55', '2023-02-12 02:48:55'),
(24, 24, 7, 3, 'baru', 'bpjs', 0, 'sehat', 'online', '2023-02-12 02:50:17', '2023-02-12 02:50:17'),
(25, 25, 7, 4, 'baru', 'bpjs', 0, 'sakit', 'online', '2023-02-12 02:51:25', '2023-02-12 02:51:25'),
(26, 26, 6, 14, 'baru', 'umum', 15000, 'sehat', 'online', '2023-02-12 03:20:19', '2023-02-12 03:20:19'),
(27, 27, 1, 5, 'baru', 'umum', 15000, 'sakit', 'online', '2023-02-12 03:21:02', '2023-02-12 03:21:02'),
(28, 23, 5, 1, 'lama', 'bpjs', 0, 'sakit', 'online', '2023-02-12 03:21:20', '2023-02-12 03:21:20'),
(29, 28, 3, 4, 'baru', 'umum', 15000, 'sehat', 'online', '2023-02-12 03:23:05', '2023-02-12 03:23:05'),
(30, 29, 1, 6, 'baru', 'umum', 15000, 'sakit', 'online', '2023-02-12 03:33:25', '2023-02-12 03:33:25'),
(31, 30, 5, 2, 'baru', 'umum', 15000, 'sehat', 'online', '2023-02-12 04:27:23', '2023-02-12 04:27:23');

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
(44, '2014_10_12_000000_create_users_table', 1),
(45, '2014_10_12_100000_create_password_resets_table', 1),
(46, '2019_08_19_000000_create_failed_jobs_table', 1),
(47, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(48, '2023_01_17_074341_tbl_identitas', 1),
(49, '2023_01_17_081619_tbl_kunjungan', 1),
(50, '2023_01_26_110913_tbl_poli', 1),
(51, '2023_02_02_134842_table_antrian', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `kode`, `nama_poli`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Poli Umum', '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(2, 'B', 'Poli Gigi', '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(3, 'C', 'Poli KIA (Kesehatan Ibu dan Anak)', '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(4, 'D', 'Poli Kusta', '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(5, 'E', 'Poli TB Paru', '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(6, 'F', 'Poli Anak', '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(7, 'G', 'Poli Konsultasi', '2023-02-12 00:14:47', '2023-02-12 00:14:47');

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
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$4c3c8j2L8/CUt4GWzK85GurhI8Xv8lZMYwWePJTwCkRPfnltBUSBu', NULL, '2023-02-12 00:14:47', '2023-02-12 00:14:47'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Ojet7cr0ZMhgkNqbIrreLe2e8ElCsPq1lw2ga3cbPn4NrIJF.h1I6', NULL, '2023-02-12 00:14:47', '2023-02-12 00:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

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
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

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
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

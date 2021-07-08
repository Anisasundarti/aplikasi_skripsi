-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Jun 2021 pada 01.40
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkejahatan`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `nama`, `path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'data2020', 'data2020/data2020.json', '2021-06-20 23:40:43', '2021-06-20 23:40:43', NULL),
(11, 'data2019', 'data2019/data2019.json', '2021-06-20 23:50:01', '2021-06-20 23:50:01', NULL),
(15, 'ada_lampu_tdk_nyala1', 'ada_lampu_tdk_nyala1/ada_lampu_tdk_nyala1.json', '2021-06-21 17:34:25', '2021-06-21 17:34:25', NULL),
(16, 'ada_lampu_tdk_nyala2', 'ada_lampu_tdk_nyala2/ada_lampu_tdk_nyala2.json', '2021-06-21 17:37:06', '2021-06-21 17:37:06', NULL),
(17, 'ada_lampu_tdk_nyala3', 'ada_lampu_tdk_nyala3/ada_lampu_tdk_nyala3.json', '2021-06-21 17:38:31', '2021-06-21 17:38:31', NULL),
(18, 'ada_penerangan_ada_pemukiman1', 'ada_penerangan_ada_pemukiman1/ada_penerangan_ada_pemukiman1.json', '2021-06-21 17:40:14', '2021-06-21 17:40:14', NULL),
(19, 'ada_penerangan_ada_pemukiman2', 'ada_penerangan_ada_pemukiman2/ada_penerangan_ada_pemukiman2.json', '2021-06-21 17:41:38', '2021-06-21 17:41:38', NULL),
(20, 'ada_penerangan_ada_pemukiman3', 'ada_penerangan_ada_pemukiman3/ada_penerangan_ada_pemukiman3.json', '2021-06-21 17:59:35', '2021-06-21 17:59:35', NULL),
(21, 'ada_penerangan_jrg_pemukiman1', 'ada_penerangan_jrg_pemukiman1/ada_penerangan_jrg_pemukiman1.json', '2021-06-21 18:01:13', '2021-06-21 18:01:13', NULL),
(22, 'ada_penerangan_jrg_pemukiman2', 'ada_penerangan_jrg_pemukiman2/ada_penerangan_jrg_pemukiman2.json', '2021-06-21 18:01:30', '2021-06-21 18:01:30', NULL),
(23, 'ada_penerangan_jrg_pemukiman3', 'ada_penerangan_jrg_pemukiman3/ada_penerangan_jrg_pemukiman3.json', '2021-06-21 18:01:45', '2021-06-21 18:01:45', NULL),
(24, 'ada_penerangan_jrg_pemukiman4', 'ada_penerangan_jrg_pemukiman4/ada_penerangan_jrg_pemukiman4.json', '2021-06-21 18:02:00', '2021-06-21 18:02:00', NULL),
(25, 'ada_penerangan_jrg_pemukiman5', 'ada_penerangan_jrg_pemukiman5/ada_penerangan_jrg_pemukiman5.json', '2021-06-21 18:02:14', '2021-06-21 18:02:14', NULL),
(26, 'ada_penerangan_jrg_pemukiman6', 'ada_penerangan_jrg_pemukiman6/ada_penerangan_jrg_pemukiman6.json', '2021-06-21 18:02:30', '2021-06-21 18:02:30', NULL),
(27, 'ada_penerangan_jrg_pemukiman7', 'ada_penerangan_jrg_pemukiman7/ada_penerangan_jrg_pemukiman7.json', '2021-06-21 18:02:45', '2021-06-21 18:02:45', NULL),
(28, 'batas_wil_smd_seberang', 'batas_wil_smd_seberang/batas_wil_smd_seberang.json', '2021-06-21 18:03:07', '2021-06-21 18:03:07', NULL),
(29, 'tdk_nyala_jrg_pemukiman1', 'tdk_nyala_jrg_pemukiman1/tdk_nyala_jrg_pemukiman1.json', '2021-06-21 18:03:36', '2021-06-21 18:03:36', NULL),
(30, 'tdk_nyala_jrg_pemukiman2', 'tdk_nyala_jrg_pemukiman2/tdk_nyala_jrg_pemukiman2.json', '2021-06-21 18:03:54', '2021-06-21 18:03:54', NULL),
(31, 'tdk_nyala_jrg_pemukiman3', 'tdk_nyala_jrg_pemukiman3/tdk_nyala_jrg_pemukiman3.json', '2021-06-21 18:04:13', '2021-06-21 18:04:13', NULL),
(32, 'tdk_penerangan_jrg_pemukiman1', 'tdk_penerangan_jrg_pemukiman1/tdk_penerangan_jrg_pemukiman1.json', '2021-06-21 18:05:21', '2021-06-21 18:05:21', NULL),
(33, 'tdk_penerangan_jrg_pemukiman2', 'tdk_penerangan_jrg_pemukiman2/tdk_penerangan_jrg_pemukiman2.json', '2021-06-21 18:05:41', '2021-06-21 18:05:41', NULL),
(34, 'tdkada_penerangan_ada_pemukiman1', 'tdkada_penerangan_ada_pemukiman1/tdkada_penerangan_ada_pemukiman1.json', '2021-06-21 18:06:08', '2021-06-21 18:06:08', NULL),
(35, 'tdkada_penerangan_ada_pemukiman2', 'tdkada_penerangan_ada_pemukiman2/tdkada_penerangan_ada_pemukiman2.json', '2021-06-21 18:06:25', '2021-06-21 18:06:25', NULL),
(36, 'tdkada_penerangan_ada_pemukiman3', 'tdkada_penerangan_ada_pemukiman3/tdkada_penerangan_ada_pemukiman3.json', '2021-06-21 18:06:41', '2021-06-21 18:06:41', NULL),
(37, 'tdkada_penerangan_ada_pemukiman4', 'tdkada_penerangan_ada_pemukiman4/tdkada_penerangan_ada_pemukiman4.json', '2021-06-21 18:06:59', '2021-06-21 18:06:59', NULL),
(38, 'tdkada_penerangan_ada_pemukiman5', 'tdkada_penerangan_ada_pemukiman5/tdkada_penerangan_ada_pemukiman5.json', '2021-06-21 18:07:18', '2021-06-21 18:07:18', NULL),
(39, 'tdkada_penerangan_ada_pemukiman6', 'tdkada_penerangan_ada_pemukiman6/tdkada_penerangan_ada_pemukiman6.json', '2021-06-21 18:07:44', '2021-06-21 18:07:44', NULL),
(40, 'tdkada_penerangan_ada_pemukiman7', 'tdkada_penerangan_ada_pemukiman7/tdkada_penerangan_ada_pemukiman7.json', '2021-06-21 18:08:04', '2021-06-21 18:08:04', NULL),
(41, 'tdkada_penerangan_tdkada_pemukiman1', 'tdkada_penerangan_tdkada_pemukiman1/tdkada_penerangan_tdkada_pemukiman1.json', '2021-06-21 18:09:05', '2021-06-21 18:09:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kejahatan`
--

CREATE TABLE `jenis_kejahatan` (
  `id` int(12) UNSIGNED NOT NULL,
  `jenis_kejahatan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kejahatan`
--

INSERT INTO `jenis_kejahatan` (`id`, `jenis_kejahatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(101, 'CUBIS', '2021-03-07 02:23:26', '2021-06-03 08:16:14', NULL),
(102, 'CURANMOR', '2021-03-07 02:24:03', '2021-06-03 08:16:31', NULL),
(103, 'CURAT', '2021-03-07 02:24:15', '2021-06-03 08:16:42', NULL),
(104, 'CURAS', '2021-03-18 17:00:00', '2021-06-03 08:16:54', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `kecamatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Loa Janan Ilir', '2021-06-03 03:05:18', '2021-06-03 03:05:18', NULL),
(2, 'Samarinda Seberang', '2021-06-03 03:05:25', '2021-06-03 03:05:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelurahans`
--

INSERT INTO `kelurahans` (`id`, `kelurahan`, `kecamatan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Baqa', 2, '2021-06-03 03:06:24', '2021-06-03 03:06:24', NULL),
(2, 'Sungai Keledang', 2, '2021-06-03 03:06:37', '2021-06-03 03:06:37', NULL),
(3, 'Tenun', 2, '2021-06-03 03:06:50', '2021-06-03 03:06:50', NULL),
(4, 'Mangkupalas', 2, '2021-06-03 03:07:02', '2021-06-03 03:07:02', NULL),
(5, 'Mesjid', 2, '2021-06-03 03:07:12', '2021-06-03 03:07:12', NULL),
(6, 'Gunung Panjang', 2, '2021-06-03 03:07:26', '2021-06-03 03:07:26', NULL),
(7, 'Harapan Baru', 1, '2021-06-03 03:07:36', '2021-06-03 03:07:36', NULL),
(8, 'Sengkotek', 1, '2021-06-03 03:07:47', '2021-06-03 03:07:47', NULL),
(9, 'Simpang Tiga', 1, '2021-06-03 03:07:55', '2021-06-03 03:07:55', NULL),
(10, 'Rapak Dalam', 1, '2021-06-03 03:08:03', '2021-06-03 03:08:03', NULL),
(11, 'Tani Aman', 1, '2021-06-03 03:08:11', '2021-06-03 03:08:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_kejahatans`
--

CREATE TABLE `lokasi_kejahatans` (
  `id` int(12) UNSIGNED NOT NULL,
  `id_jenis_kejahatan` int(12) UNSIGNED NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `tahun_id` int(10) UNSIGNED DEFAULT NULL,
  `kelurahan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lokasi_kejahatans`
--

INSERT INTO `lokasi_kejahatans` (`id`, `id_jenis_kejahatan`, `alamat`, `deskripsi`, `tahun_id`, `kelurahan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 103, 'Jl.KH. Harun Nafsi Rt. 25 tepatnya dimushola Al Amin', 'Telah terjadi PENCURIAN pada hari Senin 24 Desember 2018 sekitar pukul 19.38 wita pelaku dijerat dengan pasal 363', 1, 10, '2021-06-03 07:18:30', '2021-06-03 07:18:30', NULL),
(22, 102, 'Jl. KH. Harun Nafsi Rt. 12', 'Telah terjadi CURANMOR pada hari Jumat 11 januari 2019 sekitar pukul 05.15 wita pelaku dijerat dengan pasal 363', 1, 10, '2021-06-03 07:19:35', '2021-06-03 07:19:35', NULL),
(23, 102, 'Jl. KH. Harun Nafsi Rt. 25 tepatnya diparkiran Mushola Al Amin', 'Telah terjadi CURANMOR pada hari Kamis 29 November 2018 sekitar pukul 19.30 wita pelaku dijerat dengan pasal 363', 1, 10, '2021-06-03 07:20:45', '2021-06-03 07:20:45', NULL),
(24, 103, 'Jl. Bung Tomo RT. 09 No. 18', 'Telah terjadi PENCURIAN  pada hari rabu 13 Februari 2019  sekitar pukul 10.30 wita pelaku dijerat dengan pasal 363', 1, 2, '2021-06-03 07:21:29', '2021-06-03 07:21:29', NULL),
(25, 102, 'Jl. Rukun I Rt. 13 Tepatnya di depan futsal sahabat', 'Telah terjadi CURANMOR pada hari jumat 05 April 2019 sekitar pukul 22.00 wita pelaku dijerat dengan pasal 363', 1, 10, '2021-06-03 07:22:13', '2021-06-03 07:22:13', NULL),
(26, 102, 'Jl. Hos Cokro Aminoto Rt. 15 tepatnya di halaman parkir Mesjid Al Firdaus', 'Telah terjadi CURANMOR pada hari sabtu 23 Maret 2019 sekitar pukul 05.00 wita pelaku dijerat dengan pasal 363', 1, 1, '2021-06-03 07:23:04', '2021-06-03 07:23:04', NULL),
(27, 102, 'Jl. Pattimura Tepatnya di halaman Majis Al Badar', 'Telah terjadi CURANMOR pada hari jumat 05 April 2019 sekitar pukul 05.15 wita pelaku dijerat dengan pasal 363', 1, 4, '2021-06-03 07:23:45', '2021-06-03 07:23:45', NULL),
(28, 103, 'Jl. Mas Penghulu Gg. 1 Rt.08', 'Telah terjadi PENCURIAN pada hari selasa 16 April 2019 sekitar pukul 15.30 wita', 1, 5, '2021-06-03 07:24:25', '2021-06-03 07:24:25', NULL),
(29, 103, 'Jl. Mas Penghulu Gg. 1 Rt.08 tepatnya di PT. Trinity Auto', 'Telah terjadi PENCURIAN pada hari senin 29 April 2019 sekitar pukul 03.00 wita', 1, 5, '2021-06-03 07:24:55', '2021-06-03 07:24:55', NULL),
(30, 102, 'Jl. H.A.M Rifaddin Rt. 13 Samping SPBU', 'Telah terjadi CURANMOR pada hari kamis 25 April 2019 sekitar pukul 04.00 wita', 1, 11, '2021-06-03 07:25:31', '2021-06-03 07:25:31', NULL),
(32, 103, 'Jl. APT Pranoto Perum Kompri 2 Kapling 11', 'Telah terjadi PENCURIAN pada hari sabtu 25 Mei 2019 sekitar pukul 01.00 wita', 1, 6, '2021-06-03 07:26:34', '2021-06-03 07:26:34', NULL),
(33, 103, 'Jl. KH. Harun Nafsi Gg. Amalia Rt.10', 'Telah terjadi PENCURIAN pada hari minggu 09 Juni 2019 sekitar pukul 05.30 wita', 1, 10, '2021-06-03 07:27:07', '2021-06-03 07:27:07', NULL),
(34, 103, 'Jl. Cipto Mangunkusumo tepatnya di komplek pasar wisma toko Jakarta computer', 'Telah terjadi PENCURIAN pada hari jumat 19 Juli 2019 sekitar pukul 06.00 wita', 1, 8, '2021-06-03 07:27:42', '2021-06-03 07:27:42', NULL),
(35, 103, 'Jl. Bung Tomo Gg. Nuruddin Rt. 05', 'Telah terjadi PENCURIAN pada hari sabtu 01 Juni 2019 sekitar pukul 13.00 wita', 1, 2, '2021-06-03 07:28:07', '2021-06-03 07:28:07', NULL),
(36, 103, 'Jl. Pattimura Rt. 01 No. 86', 'Telah terjadi PENCURIAN pada hari kamis 18 Juli 2019 sekitar pukul 04.47 wita', 1, 4, '2021-06-03 07:28:40', '2021-06-03 07:28:40', NULL),
(37, 103, 'Jl. Cipto Mangunkusumo Gg. 7', 'Telah terjadi PENCURIAN pada hari jumat 02 Agustus 2019 sekitar pukul 11.00  wita', 1, 7, '2021-06-03 07:29:12', '2021-06-03 07:29:12', NULL),
(39, 102, 'Jl. Cipto Mangunkusumo Rt.10', 'Telah terjadi CURANMOR  pada hari selasa 06 Agustus 2019 sekitar pukul 13.00  wita', 1, 9, '2021-06-03 07:30:20', '2021-06-03 07:30:20', NULL),
(40, 101, 'Jl. KH. Harun Nafsi Gg. Bersama Rt. 18 No. 55 / B', 'Telah terjadi PENCURIAN pada hari selasa 13 Agustus 2019 sekitar pukul 08.00  wita', 1, 10, '2021-06-03 07:30:49', '2021-06-03 07:30:49', NULL),
(41, 102, 'Jl. Cipto Mangunkusumo Rt.018', 'Telah terjadi CURANMOR  pada hari sabtu 01 Juni 2019 sekitar pukul 05.50  wita', 1, 8, '2021-06-03 07:31:21', '2021-06-03 07:31:21', NULL),
(42, 103, 'Jl. Abdul Rasyid Rt. 01 No. 77', 'Telah terjadi PENCURIAN pada hari selasa 30 Juli 2019 sekitar pukul 15.00  wita', 1, 5, '2021-06-03 07:31:47', '2021-06-03 07:31:47', NULL),
(43, 102, 'Jl. Bung Tomo Rt. 33 No. 44', 'Telah terjadi CURANMOR  pada hari rabu 03 Juli 2019 sekitar pukul 08.30  wita', 1, 2, '2021-06-03 07:32:17', '2021-06-03 07:32:17', NULL),
(44, 103, 'Jl. Kurnia Makmur Gg. At-Taqwa Rt. 19', 'Telah terjadi PENCURIAN pada hari senin 16 September 2019  sekitar pukul 03.00  wita', 1, 7, '2021-06-03 07:32:48', '2021-06-03 07:32:48', NULL),
(46, 103, 'Jl. Pattimura Rt.26 No.01', 'Telah terjadi PENCURIAN pada hari sabtu 14 September 2019  sekitar pukul 04.00  wita', 1, 4, '2021-06-03 07:33:45', '2021-06-03 07:33:45', NULL),
(47, 103, 'Jl. Bung Tomo Rt.13 No.66', 'Telah terjadi PENCURIAN pada hari rabu 30 Oktober 2019 sekitar pukul 05.00 wita', 1, 1, '2021-06-03 07:34:18', '2021-06-03 07:34:18', NULL),
(48, 103, 'Jl. Bung Tomo Rt.16', 'Telah terjadi PENCURIAN pada hari minggu 10 November 2019 sekitar pukul 01.30 wita', 1, 2, '2021-06-03 07:34:47', '2021-06-03 07:34:47', NULL),
(49, 103, 'Jl. Cipto mangunkusumo rt. 04 no. 77', 'Telah terjadi PENCURIAN pada hari sabtu 23 November 2019 sekitar pukul 21.30 wita', 1, 6, '2021-06-03 07:35:15', '2021-06-03 07:35:15', NULL),
(50, 102, 'Jl. Soekarno Hatta Km. 1 Rt.17', 'Telah terjadi CURANMOR pada hari minggu 10 November 2019  sekitar pukul 04.30 wita', 1, 9, '2021-06-03 07:35:54', '2021-06-03 07:35:54', NULL),
(51, 102, 'Jl. Cipto Mangunkusumo', 'Telah terjadi CURANMOR pada hari selasa 24 November 2019  sekitar pukul 02.00 wita', 1, 7, '2021-06-03 07:36:20', '2021-06-03 07:36:20', NULL),
(52, 103, 'Jl. KH.Harun Nafsi Rt.20 tepatnya dikos Putri Pink', 'Telah terjadi PENCURIAN pada hari kamis 05 Desember  2019  sekitar pukul 03.00 wita', 1, 10, '2021-06-03 07:36:53', '2021-06-03 07:36:53', NULL),
(53, 102, 'Jl. Sutera Murni Rt. 17', 'Telah terjadi CURANMOR  pada hari jumat 15 Desember  sekitar pukul 17.30  wita', 1, 1, '2021-06-03 07:37:21', '2021-06-03 07:37:21', NULL),
(54, 102, 'Jl. H.M. Rifaddin Rt. 30', 'Telah terjadi CURANMOR R2  pada hari kamis 02 januari 2020 sekitar pukul 04.30 wita', 2, 11, '2021-06-03 07:38:34', '2021-06-03 07:38:34', NULL),
(55, 103, 'Jl. Soekarno Hatta perum H. Saleh Blok OO No.20 Rt. 01', 'Telah terjadi PENCURIAN pada hari senin 13 januari 2020 sekitar pukul 14.00 wita', 2, 11, '2021-06-03 07:39:12', '2021-06-03 07:39:12', NULL),
(56, 103, 'Jl. KH. Harun Nafsi Gang H. Manaf', 'Telah terjadi PENCURIAN pada hari rabu 22 januari 2020 sekitar pukul 04.30 wita', 2, 10, '2021-06-03 07:39:40', '2021-06-03 07:39:40', NULL),
(57, 103, 'Jl. KH. Harun Nafsi Gang Sekumpul Rt. 19', 'Telah terjadi PENCURIAN pada hari sabtu 25 januari 2020 sekitar pukul 06.30 wita ', 2, 10, NULL, NULL, NULL),
(58, 103, 'Jl. Air Terjun Rt. 18 No. -', 'Telah terjadi PENCURIAN pada hari Selasa 07 januari 2020 sekitar pukul 07.00 wita', 2, 4, '2021-06-03 07:40:50', '2021-06-03 07:40:50', NULL),
(59, 103, 'Jl. Teluk Bayur Blok K/ 8 Rt. 13', 'Telah terjadi PENCURIAN pada hari sabtu 25 januari 2020 sekitar pukul 03.00 wita', 2, 5, '2021-06-03 07:41:20', '2021-06-03 07:41:20', NULL),
(62, 102, 'Jl. Mas Penghulu Gang 1 Rt. 08', 'Telah terjadi CURANMOR  pada hari kamis 12 MARET 2020 sekitar pukul 04.30 wita', 2, 5, '2021-06-03 07:42:48', '2021-06-03 07:42:48', NULL),
(63, 102, 'Jl. Mangkupalas Gg. Swadaya Rt. 10', 'Telah terjadi CURANMOR  pada hari sabtu 29 Februari 2020 sekitar pukul 18.00 wita', 2, 5, '2021-06-03 07:43:18', '2021-06-03 07:43:18', NULL),
(64, 103, 'Jl. Rukun Rt.24', 'Telah terjadi PENCURIAN pada hari sabtu 18 april 2020 sekitar pukul 03.30 wita', 2, 10, '2021-06-03 07:43:49', '2021-06-03 07:43:49', NULL),
(65, 102, 'Jl. Cipto Mangunkusumo Rt. -', 'Telah terjadi CURANMOR R4  pada hari senin 20 April 2020 sekitar pukul 14.30 wita', 2, 6, '2021-06-03 07:44:19', '2021-06-03 07:44:19', NULL),
(66, 104, 'Jl. APT. Pranoto Rt. -', 'Telah terjadi CURAS pada hari jumat 29 Mei 2020 sekitar pukul 05.30 wita', 2, 6, '2021-06-03 07:44:47', '2021-06-03 07:44:47', NULL),
(67, 103, 'Jl. Datu Umar Gg. Plamboyan Rt. 04', 'Telah terjadi CURAT pada hari kamis 04 Juni 2020 sekitar pukul 03.00 wita', 2, 2, '2021-06-03 07:45:22', '2021-06-03 07:45:22', NULL),
(68, 103, 'Jl. Sultan hasanuddin Rt.17', 'Telah terjadi PENCURIAN pada hari minggu 14 Juni 2020 sekitar pukul 01.12 wita', 2, 1, '2021-06-03 07:45:51', '2021-06-03 07:45:51', NULL),
(69, 103, 'Jl. Pattimura tepatnya diparkiran Indomart', 'Telah terjadi CURAT pada hari rabu 11 Juli 2020 sekitar pukul 11.30 wita', 2, 10, '2021-06-03 07:46:19', '2021-06-03 07:46:19', NULL),
(70, 102, 'Jl. Bung Tomo', 'Telah terjadi CURANMOR R2  pada hari senin 13 Juli 2020 sekitar pukul 02.00 wita', 2, 2, '2021-06-03 07:46:54', '2021-06-03 07:46:54', NULL),
(71, 103, 'Jl. Rukun RT. -', 'Telah terjadi CURAT pada hari senin 17 Agustus 2020 sekitar pukul 04.00 wita', 2, 10, '2021-06-03 07:47:21', '2021-06-03 07:47:21', NULL),
(72, 103, 'Jl. Cipto Mangunkusumo RT. 07', 'Telah terjadi CURAT pada hari kamis 06 Agustus 2020 sekitar pukul 16.00 wita', 2, 6, '2021-06-03 07:47:52', '2021-06-03 07:47:52', NULL),
(73, 103, 'Jl. Pattimura', 'Telah terjadi CURAT pada hari sabtu 22 Agustus 2020 sekitar pukul 13.30 wita', 2, 4, '2021-06-03 07:48:26', '2021-06-03 07:48:26', NULL),
(74, 103, 'Jl. APT. Pranoto RT. 02', 'Telah terjadi CURAT pada hari selasa 08 September 2020 sekitar pukul 10.00 wita', 2, 6, '2021-06-03 07:48:51', '2021-06-03 07:48:51', NULL),
(75, 103, 'Jl. H.M. Rifaddin RT. 33', 'Telah terjadi CURAT pada hari kamis 10 September 2020 sekitar pukul 03.00 wita', 2, 7, '2021-06-03 07:49:21', '2021-06-03 07:49:21', NULL),
(76, 102, 'JL. Cipto Mangunkusumo Rt. 02', 'Telah terjadi CURANMOR pada hari Jumat 02 Oktober 2020 sekitar pukul 04.00 wita', 2, 8, '2021-06-03 07:49:51', '2021-06-03 07:49:51', NULL),
(77, 102, 'JL. KH. Harun Nafsi Gg. Sammi Ridwan Nafsi Rt. 21', 'Telah terjadi CURANMOR R2 pada hari senin 28 September 2020 sekitar pukul 05.00 wita', 2, 10, '2021-06-03 07:50:16', '2021-06-03 07:50:16', NULL),
(78, 103, 'Jl. Cipto Mangunkusumo RT.40 No.-', 'Telah terjadi PENCURIAN pada hari kamis 01 Oktober 2020 sekitar pukul 20.00 wita', 2, 7, '2021-06-03 07:50:51', '2021-06-03 07:50:51', NULL),
(79, 103, 'Jl. Selat kalimata RT. 18', 'Telah terjadi PENCURIAN pada hari senin 05 Oktober 2020 sekitar pukul 12.30 wita', 2, 4, '2021-06-03 07:51:20', '2021-06-03 07:51:20', NULL),
(80, 103, 'Jl. APT. Pranoto', 'Telah terjadi PENCURIAN pada hari Sabtu 07 November 2020 sekitar pukul 04.00 wita', 2, 10, '2021-06-03 07:51:49', '2021-06-03 07:51:49', NULL),
(81, 103, 'Jl. Rukun Rt. 05', 'Telah terjadi PENCURIAN pada hari rabu 02 Desember 2020 sekitar pukul 02.30 wita', 2, 10, '2021-06-03 07:52:25', '2021-06-03 07:52:25', NULL),
(82, 102, 'Jl. Rukun Rt. 11', 'Telah terjadi CURANMOR R4 pada harisabtu 05 Desember 2020 sekitar pukul 03.00 wita', 2, 10, '2021-06-03 07:52:55', '2021-06-03 07:52:55', NULL),
(83, 103, 'Jl. Bung tomo Rt. 05 No.113', 'Telah terjadi PENCURIAN pada hari rabu 02 Desember 2020 sekitar pukul 03.00 wita', 2, 2, '2021-06-03 07:53:22', '2021-06-03 07:53:22', NULL),
(86, 103, 'Jl. Manunggal Rt. 32', 'Telah terjadi PENCURIAN pada hari minggu 27 September 2020 sekitar pukul 02.00 wita', 2, 4, '2021-06-03 07:54:50', '2021-06-03 07:54:50', NULL);

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
(4, '2021_02_24_105702_create_lokasi_kejahatans_table', 2),
(5, '2021_05_28_085618_create_peta_kejahatan', 3),
(6, '2021_05_28_113103_create_tentang', 3),
(7, '2021_05_28_113239_create_keterangan', 3),
(8, '2021_05_31_010428_create_penggunaan', 4),
(9, '2021_05_31_073614_create_peta_data', 5),
(10, '2021_05_31_092753_create_tambah_data_peta', 6),
(11, '2021_06_03_093922_create_tahuns_table', 7),
(13, '2021_06_03_094233_create_kecamatans_table', 8),
(14, '2021_06_03_095516_create_kelurahans_table', 9),
(15, '2021_06_17_134011_create_files_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anisasun26@gmail.com', '$2y$10$V6EuSI.5WM.4lTZy3Mlp3eWnvUJaiJnMKFtZDX/KGEC9tbqErVlOO', '2021-03-07 21:51:27'),
('anisasundarti56@gmail.com', '$2y$10$Jdau7IreRsAiTWQujjSjFeN2bxqzsawtNzZT3Hgw.AK8MYMTpM6iu', '2021-03-07 21:52:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan`
--

CREATE TABLE `penggunaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta_data`
--

CREATE TABLE `peta_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peta_data`
--

INSERT INTO `peta_data` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, '2019', 'http://localhost:8081/geoserver/data2019/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=data2019%3Adata2019&maxFeatures=50&outputFormat=application%2Fjson', NULL, '2021-06-04 00:53:30'),
(2, '2020', 'http://localhost:8081/geoserver/data2020/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=data2020%3Adata2020&maxFeatures=50&outputFormat=application%2Fjson', NULL, '2021-06-02 07:00:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahuns`
--

CREATE TABLE `tahuns` (
  `id` int(10) UNSIGNED NOT NULL,
  `tahun_kejadian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahuns`
--

INSERT INTO `tahuns` (`id`, `tahun_kejadian`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2019, '2021-06-03 03:08:21', '2021-06-03 03:08:21', NULL),
(2, 2020, '2021-06-03 03:08:31', '2021-06-03 03:08:31', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `telepon`, `remember_token`, `is_admin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'sundy', 'sundy@gmail.com', NULL, '$2y$10$DdmjZ1wRNQFNK7VVPqZJTuapIvyHJ/7Z1sTZzl7WBR1B87UBuL/Fi', 'samboja', 987654321, 'dUGL1uFK9MhxEk5DHuJFJqw7nQ0sVEUwd6COcgbmdQNqFiudFbAFRJnjh2Ej', 1, '2021-05-30 23:50:26', '2021-05-30 23:50:26', NULL),
(16, 'hgh', 'h@gmail.com', NULL, '$2y$10$y7D4d3PEH0tcA2xXg/TFMun0.EQ4IKUp1aR8DQS.HibuBl1QfvtUm', 'hjh', 987654321, NULL, NULL, '2021-06-05 09:12:33', '2021-06-05 09:12:33', NULL);

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
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahans_kecamatan_id_index` (`kecamatan_id`);

--
-- Indeks untuk tabel `lokasi_kejahatans`
--
ALTER TABLE `lokasi_kejahatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_lokasi_kejahatan_jenis_kejahatan` (`id_jenis_kejahatan`),
  ADD KEY `FK_lokasi_kejahatan_tahun` (`tahun_id`),
  ADD KEY `FK_lokasi_kejahatan_kelurahans` (`kelurahan_id`);

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
-- Indeks untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peta_data`
--
ALTER TABLE `peta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
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
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `lokasi_kejahatans`
--
ALTER TABLE `lokasi_kejahatans`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peta_data`
--
ALTER TABLE `peta_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD CONSTRAINT `kelurahans_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatans` (`id`);

--
-- Ketidakleluasaan untuk tabel `lokasi_kejahatans`
--
ALTER TABLE `lokasi_kejahatans`
  ADD CONSTRAINT `FK_lokasi_kejahatan_jenis_kejahatan` FOREIGN KEY (`id_jenis_kejahatan`) REFERENCES `jenis_kejahatan` (`id`),
  ADD CONSTRAINT `FK_lokasi_kejahatan_kelurahans` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahans` (`id`),
  ADD CONSTRAINT `FK_lokasi_kejahatan_tahun` FOREIGN KEY (`tahun_id`) REFERENCES `tahuns` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

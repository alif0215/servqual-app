-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2024 pada 13.32
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekyessa`
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_harapans`
--

CREATE TABLE `hasil_harapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stp` int(11) NOT NULL,
  `tp` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `sp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil_harapans`
--

INSERT INTO `hasil_harapans` (`id`, `kode_pertanyaan`, `stp`, `tp`, `cp`, `p`, `sp`, `created_at`, `updated_at`) VALUES
(1, 'TAN001', 0, 1, 12, 58, 29, NULL, NULL),
(2, 'TAN002', 1, 0, 9, 53, 37, NULL, NULL),
(3, 'TAN003', 1, 0, 9, 55, 35, NULL, NULL),
(4, 'REA001', 1, 0, 10, 53, 36, NULL, NULL),
(5, 'REA002', 1, 0, 11, 54, 34, NULL, NULL),
(6, 'RES001', 1, 0, 9, 48, 42, NULL, NULL),
(7, 'RES002', 1, 0, 9, 53, 37, NULL, NULL),
(8, 'AS001', 1, 0, 7, 49, 43, NULL, NULL),
(9, 'AS002', 1, 1, 6, 52, 40, NULL, NULL),
(10, 'AS003', 1, 1, 8, 51, 39, NULL, NULL),
(11, 'EMP001', 1, 1, 10, 55, 33, NULL, NULL),
(12, 'EMP002', 1, 0, 7, 53, 39, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_persepsis`
--

CREATE TABLE `hasil_persepsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stp` int(11) NOT NULL,
  `tp` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `sp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil_persepsis`
--

INSERT INTO `hasil_persepsis` (`id`, `kode_pertanyaan`, `stp`, `tp`, `cp`, `p`, `sp`, `created_at`, `updated_at`) VALUES
(1, 'TAN001', 0, 2, 15, 42, 41, NULL, NULL),
(2, 'TAN002', 0, 0, 21, 44, 35, NULL, NULL),
(3, 'TAN003', 0, 0, 23, 48, 29, NULL, NULL),
(4, 'REA001', 0, 0, 18, 50, 32, NULL, NULL),
(5, 'REA002', 1, 0, 20, 48, 31, NULL, NULL),
(6, 'RES001', 0, 2, 15, 50, 33, NULL, NULL),
(7, 'RES002', 0, 0, 21, 52, 27, NULL, NULL),
(8, 'AS001', 1, 2, 24, 53, 20, NULL, NULL),
(9, 'AS002', 1, 1, 21, 44, 33, NULL, NULL),
(10, 'AS003', 1, 1, 18, 45, 35, NULL, NULL),
(11, 'EMP001', 0, 1, 16, 49, 34, NULL, NULL),
(12, 'EMP002', 0, 2, 19, 49, 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_harapans`
--

CREATE TABLE `jawaban_harapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jawabanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` int(11) NOT NULL,
  `h2` int(11) NOT NULL,
  `h3` int(11) NOT NULL,
  `h4` int(11) NOT NULL,
  `h5` int(11) NOT NULL,
  `h6` int(11) NOT NULL,
  `h7` int(11) NOT NULL,
  `h8` int(11) NOT NULL,
  `h9` int(11) NOT NULL,
  `h10` int(11) NOT NULL,
  `h11` int(11) NOT NULL,
  `h12` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban_harapans`
--

INSERT INTO `jawaban_harapans` (`id`, `kode_jawabanh`, `nama`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`, `jumlah`, `created_at`, `updated_at`) VALUES
(128, 'JH001', 'Safrudin ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(129, 'JH002', 'Suci Ayu Pritami ', 4, 4, 3, 3, 4, 4, 5, 4, 4, 5, 5, 5, 50, NULL, NULL),
(130, 'JH003', 'Ovi Nur Afifa', 4, 4, 4, 4, 5, 5, 5, 4, 5, 4, 4, 5, 53, NULL, NULL),
(131, 'JH004', 'Meti ', 3, 4, 4, 4, 4, 5, 3, 4, 4, 4, 5, 5, 49, NULL, NULL),
(132, 'JH005', 'Ari Fatzri ', 4, 5, 4, 5, 4, 4, 4, 5, 5, 4, 4, 4, 52, NULL, NULL),
(133, 'JH006', 'Selsa Bela Hutabarat ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(134, 'JH007', 'Eka', 4, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 58, NULL, NULL),
(135, 'JH008', 'Andrian Fakhrizal', 3, 3, 3, 3, 4, 3, 4, 3, 3, 4, 4, 4, 41, NULL, NULL),
(136, 'JH009', 'Listiyanto ', 3, 3, 5, 5, 3, 3, 5, 5, 3, 3, 5, 3, 46, NULL, NULL),
(137, 'JH010', 'Erik Putra', 4, 5, 4, 4, 4, 5, 4, 4, 4, 4, 4, 4, 50, NULL, NULL),
(138, 'JH011', 'Hasbi', 4, 4, 4, 4, 4, 5, 4, 5, 4, 5, 4, 4, 51, NULL, NULL),
(139, 'JH012', 'Budi Prasetyo ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(140, 'JH013', 'Sury fathiya', 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 58, NULL, NULL),
(141, 'JH014', 'Habibi', 3, 3, 3, 4, 4, 4, 3, 3, 4, 5, 5, 5, 46, NULL, NULL),
(142, 'JH015', 'Hilda Febrianti', 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 59, NULL, NULL),
(143, 'JH016', 'Dian', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(144, 'JH017', 'Aditiya ', 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 59, NULL, NULL),
(145, 'JH018', 'Andika Putra', 4, 4, 4, 4, 4, 3, 4, 5, 5, 4, 5, 4, 50, NULL, NULL),
(146, 'JH019', 'Ednas', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 47, NULL, NULL),
(147, 'JH020', 'Sri sudarsih', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(148, 'JH021', 'Suvi', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(149, 'JH022', 'Chandra Wijaya ', 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 57, NULL, NULL),
(150, 'JH023', 'Restu Avrielia Putri', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(151, 'JH024', 'Mutia ', 4, 4, 4, 4, 4, 4, 5, 4, 4, 5, 4, 5, 51, NULL, NULL),
(152, 'JH025', 'Lailatul Fadila', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(153, 'JH026', 'Hasan', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(154, 'JH027', 'Andrian', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(155, 'JH028', 'Rizza Nurul Hidayat ', 4, 4, 5, 3, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(156, 'JH029', 'Nuria ', 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 4, 57, NULL, NULL),
(157, 'JH030', 'Meki', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 13, NULL, NULL),
(158, 'JH031', 'Andini', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(159, 'JH032', 'artanti f', 5, 5, 4, 4, 5, 5, 4, 5, 5, 5, 4, 5, 56, NULL, NULL),
(160, 'JH033', 'Putri Wulan Agustini ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(161, 'JH034', 'Bagus Affandi', 4, 3, 5, 5, 4, 4, 4, 5, 5, 3, 3, 4, 49, NULL, NULL),
(162, 'JH035', 'Kristan Dandi', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(163, 'JH036', 'Rizky Gimnastiar', 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 53, NULL, NULL),
(164, 'JH037', 'Titan', 4, 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 4, 50, NULL, NULL),
(165, 'JH038', 'Hizbullah Sulthan ', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(166, 'JH039', 'Puput Kurniawati', 4, 4, 4, 4, 5, 5, 4, 5, 5, 5, 4, 5, 54, NULL, NULL),
(167, 'JH040', 'Mukhlis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(168, 'JH041', 'Habibi', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(169, 'JH042', 'Erni', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(170, 'JH043', 'Ade bayu', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(171, 'JH044', 'Aditiya', 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 4, 5, 58, NULL, NULL),
(172, 'JH045', 'Irsanto', 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 50, NULL, NULL),
(173, 'JH046', 'Ovi Nur Afifa', 5, 4, 5, 4, 4, 4, 4, 5, 5, 4, 5, 5, 54, NULL, NULL),
(174, 'JH047', 'Muhammad Arinal Haq', 4, 4, 4, 4, 4, 4, 4, 5, 4, 4, 4, 4, 49, NULL, NULL),
(175, 'JH048', 'Muhamad Zaki indriyansyah ', 5, 5, 5, 5, 5, 5, 4, 4, 4, 4, 4, 4, 54, NULL, NULL),
(176, 'JH049', 'Habibi', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(177, 'JH050', 'Agus Kurniawan', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(178, 'JH051', 'Afaf ', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 58, NULL, NULL),
(179, 'JH052', 'Fanny Amanda Ariestia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(180, 'JH053', 'Qiera Kamilah', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(181, 'JH054', 'Muhamad Farid Fahrizal ', 4, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 49, NULL, NULL),
(182, 'JH055', 'Saiful Malik As Saleh', 4, 4, 4, 4, 3, 5, 5, 3, 4, 3, 4, 3, 46, NULL, NULL),
(183, 'JH056', 'azdi febbryansyah', 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 4, 5, 54, NULL, NULL),
(184, 'JH057', 'Niko', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(185, 'JH058', 'Ade chandra', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(186, 'JH059', 'Anugra', 5, 4, 3, 5, 3, 3, 5, 5, 5, 5, 5, 5, 53, NULL, NULL),
(187, 'JH060', 'Insan', 4, 4, 4, 3, 5, 5, 5, 5, 4, 5, 4, 4, 52, NULL, NULL),
(188, 'JH061', 'Ega', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(189, 'JH062', 'Indra Ashura', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(190, 'JH063', 'Dimas R.', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(191, 'JH064', 'Satrio Adiwira P', 3, 5, 4, 3, 4, 4, 4, 5, 3, 4, 3, 5, 47, NULL, NULL),
(192, 'JH065', 'Sri', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(193, 'JH066', 'Maria Kristina Gego', 5, 5, 5, 5, 3, 5, 5, 4, 4, 5, 5, 5, 56, NULL, NULL),
(194, 'JH067', 'Agustina laurensia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(195, 'JH068', 'safarudin', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(196, 'JH069', 'Andri Abdul Aziz ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(197, 'JH070', 'Fahrezi', 3, 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 4, 45, NULL, NULL),
(198, 'JH071', 'Muhammad sopyan', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(199, 'JH072', 'Adilla Siska Afifah ', 3, 3, 4, 4, 4, 3, 3, 3, 4, 4, 3, 4, 42, NULL, NULL),
(200, 'JH073', 'idramus', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(201, 'JH074', 'Indri putri', 4, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 4, 57, NULL, NULL),
(202, 'JH075', 'Muhamad Latief', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(203, 'JH076', 'Ayes', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(204, 'JH077', 'Wahid Aldi Nugroho ', 5, 5, 3, 4, 3, 5, 4, 4, 2, 2, 2, 3, 42, NULL, NULL),
(205, 'JH078', 'Mohammad Fierdi Afriano ', 4, 4, 5, 4, 5, 4, 3, 5, 5, 4, 4, 4, 51, NULL, NULL),
(206, 'JH079', 'dolla rofiansyah ', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 46, NULL, NULL),
(207, 'JH080', 'Okto Maniani', 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 46, NULL, NULL),
(208, 'JH081', 'Adit Ganteng Psikopat', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(209, 'JH082', 'Yohannes Halim T', 5, 5, 5, 5, 4, 4, 4, 5, 5, 5, 5, 5, 57, NULL, NULL),
(210, 'JH083', 'Putri Wulan Agustini ', 3, 3, 3, 3, 3, 3, 3, 4, 4, 3, 3, 3, 38, NULL, NULL),
(211, 'JH084', 'Febri', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(212, 'JH085', 'Rijal', 4, 4, 5, 5, 4, 5, 4, 4, 4, 4, 3, 3, 49, NULL, NULL),
(213, 'JH086', 'Chika', 3, 4, 3, 5, 3, 5, 4, 3, 4, 4, 3, 4, 45, NULL, NULL),
(214, 'JH087', 'Zailis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(215, 'JH088', 'Ahdiyat Halim', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(216, 'JH089', 'Ikbal Firdaus Kartajasa', 4, 4, 4, 4, 3, 3, 3, 4, 4, 4, 4, 4, 45, NULL, NULL),
(217, 'JH090', 'Fani Amanatul Khaliq', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 47, NULL, NULL),
(218, 'JH091', 'Fauzi Dwi Pintarto', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(219, 'JH092', 'Ratih', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(220, 'JH093', 'Yaspin Andika', 5, 5, 4, 3, 5, 5, 5, 5, 5, 5, 5, 5, 57, NULL, NULL),
(221, 'JH094', 'Hari Guritno ', 4, 4, 4, 4, 4, 5, 4, 4, 4, 5, 4, 4, 50, NULL, NULL),
(222, 'JH095', 'Azmi Muhammad Faisal', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(223, 'JH096', 'Ade bustomi ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(224, 'JH097', 'Maulidya', 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 46, NULL, NULL),
(225, 'JH098', 'Putri Haifa', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(226, 'JH099', 'Refa Novelli', 5, 5, 4, 4, 5, 4, 5, 5, 5, 5, 4, 5, 56, NULL, NULL),
(227, 'JH100', 'Rio Adi Saputra', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_persepsis`
--

CREATE TABLE `jawaban_persepsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jawabanp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `p9` int(11) NOT NULL,
  `p10` int(11) NOT NULL,
  `p11` int(11) NOT NULL,
  `p12` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban_persepsis`
--

INSERT INTO `jawaban_persepsis` (`id`, `kode_jawabanp`, `nama`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `jumlah`, `created_at`, `updated_at`) VALUES
(301, 'JP001', 'Safrudin ', 3, 4, 4, 3, 4, 4, 4, 3, 3, 3, 4, 3, 42, NULL, NULL),
(302, 'JP002', 'Suci Ayu Pritami ', 5, 5, 4, 4, 4, 4, 3, 4, 5, 5, 4, 3, 50, NULL, NULL),
(303, 'JP003', 'Ovi Nur Afifa', 5, 5, 5, 4, 4, 5, 4, 5, 4, 4, 4, 5, 54, NULL, NULL),
(304, 'JP004', 'Meti ', 5, 5, 5, 5, 5, 5, 4, 3, 3, 4, 4, 4, 52, NULL, NULL),
(305, 'JP005', 'Ari Fatzri ', 5, 5, 5, 4, 4, 4, 4, 3, 5, 5, 5, 5, 54, NULL, NULL),
(306, 'JP006', 'Selsa Bela Hutabarat ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(307, 'JP007', 'Eka', 5, 5, 5, 5, 4, 5, 5, 5, 5, 5, 5, 4, 58, NULL, NULL),
(308, 'JP008', 'Andrian Fakhrizal', 4, 4, 4, 5, 5, 4, 4, 5, 4, 5, 3, 3, 50, NULL, NULL),
(309, 'JP009', 'Listiyanto ', 2, 4, 3, 3, 3, 4, 3, 4, 3, 2, 3, 3, 37, NULL, NULL),
(310, 'JP010', 'Erik Putra', 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 47, NULL, NULL),
(311, 'JP011', 'Hasbi', 5, 5, 5, 3, 4, 4, 4, 4, 5, 4, 5, 4, 52, NULL, NULL),
(312, 'JP012', 'Budi Prasetyo ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(313, 'JP013', 'Sury fathiya', 5, 4, 3, 5, 5, 5, 5, 5, 4, 4, 5, 4, 54, NULL, NULL),
(314, 'JP014', 'Habibi', 2, 3, 3, 3, 3, 3, 3, 1, 1, 3, 2, 2, 29, NULL, NULL),
(315, 'JP015', 'Hilda Febrianti', 5, 5, 5, 5, 4, 4, 4, 4, 5, 4, 5, 4, 54, NULL, NULL),
(316, 'JP016', 'Dian', 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 45, NULL, NULL),
(317, 'JP017', 'Aditiya ', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(318, 'JP018', 'Andika Putra', 4, 5, 4, 4, 4, 5, 5, 4, 4, 4, 4, 4, 51, NULL, NULL),
(319, 'JP019', 'Ednas', 4, 3, 3, 3, 3, 4, 4, 3, 3, 4, 3, 3, 40, NULL, NULL),
(320, 'JP020', 'Sri sudarsih', 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 47, NULL, NULL),
(321, 'JP021', 'Suvi', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(322, 'JP022', 'Chandra Wijaya ', 5, 5, 4, 5, 5, 5, 4, 4, 5, 4, 4, 5, 55, NULL, NULL),
(323, 'JP023', 'Restu Avrielia Putri', 5, 5, 5, 5, 4, 4, 4, 4, 5, 5, 4, 5, 55, NULL, NULL),
(324, 'JP024', 'Mutia ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(325, 'JP025', 'Lailatul Fadila', 4, 4, 4, 5, 5, 5, 4, 4, 4, 4, 4, 4, 51, NULL, NULL),
(326, 'JP026', 'Hasan', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(327, 'JP027', 'Andrian', 5, 4, 4, 4, 4, 4, 3, 3, 4, 5, 4, 4, 48, NULL, NULL),
(328, 'JP028', 'Rizza Nurul Hidayat ', 4, 4, 4, 4, 4, 4, 5, 4, 4, 3, 4, 5, 49, NULL, NULL),
(329, 'JP029', 'Nuria ', 4, 4, 4, 4, 5, 5, 5, 4, 4, 4, 4, 5, 52, NULL, NULL),
(330, 'JP030', 'Meki', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(331, 'JP031', 'Andini', 4, 5, 5, 5, 4, 4, 4, 4, 5, 5, 5, 5, 55, NULL, NULL),
(332, 'JP032', 'artanti f', 5, 3, 4, 4, 4, 4, 4, 4, 5, 5, 4, 4, 50, NULL, NULL),
(333, 'JP033', 'Putri Wulan Agustini ', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(334, 'JP034', 'Bagus Affandi', 4, 3, 4, 4, 4, 5, 4, 4, 5, 3, 5, 4, 49, NULL, NULL),
(335, 'JP035', 'Kristan Dandi', 4, 4, 4, 4, 4, 5, 4, 4, 4, 4, 4, 4, 49, NULL, NULL),
(336, 'JP036', 'Rizky Gimnastiar', 5, 5, 5, 5, 5, 5, 5, 3, 5, 5, 5, 5, 58, NULL, NULL),
(337, 'JP037', 'Titan', 4, 4, 4, 4, 5, 5, 5, 4, 5, 3, 4, 4, 51, NULL, NULL),
(338, 'JP038', 'Hizbullah Sulthan ', 5, 4, 4, 4, 1, 4, 3, 3, 4, 1, 3, 3, 39, NULL, NULL),
(339, 'JP039', 'Puput Kurniawati', 5, 5, 5, 5, 4, 5, 4, 4, 5, 5, 5, 5, 57, NULL, NULL),
(340, 'JP040', 'Mukhlis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(341, 'JP041', 'Habibi', 3, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 3, 35, NULL, NULL),
(342, 'JP042', 'Erni', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(343, 'JP043', 'Ade bayu', 4, 4, 3, 4, 4, 4, 4, 3, 3, 4, 4, 4, 45, NULL, NULL),
(344, 'JP044', 'Aditiya', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(345, 'JP045', 'Irsanto', 4, 4, 4, 4, 5, 4, 4, 4, 4, 4, 4, 4, 49, NULL, NULL),
(346, 'JP046', 'Ovi Nur Afifa', 5, 5, 4, 4, 5, 4, 5, 4, 5, 5, 5, 5, 56, NULL, NULL),
(347, 'JP047', 'Muhammad Arinal Haq', 4, 4, 4, 5, 5, 5, 4, 4, 5, 4, 4, 4, 52, NULL, NULL),
(348, 'JP048', 'Muhamad Zaki indriyansyah ', 4, 5, 4, 5, 5, 5, 4, 3, 4, 5, 4, 4, 52, NULL, NULL),
(349, 'JP049', 'Habibi', 3, 3, 3, 3, 3, 2, 3, 3, 2, 3, 3, 2, 33, NULL, NULL),
(350, 'JP050', 'Agus Kurniawan', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(351, 'JP051', 'Afaf ', 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 59, NULL, NULL),
(352, 'JP052', 'Fanny Amanda Ariestia', 5, 5, 4, 5, 5, 5, 4, 4, 5, 5, 5, 5, 57, NULL, NULL),
(353, 'JP053', 'Qiera Kamilah', 4, 4, 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 50, NULL, NULL),
(354, 'JP054', 'Muhamad Farid Fahrizal ', 4, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 49, NULL, NULL),
(355, 'JP055', 'Saiful Malik As Saleh', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(356, 'JP056', 'azdi febbryansyah', 5, 4, 4, 4, 4, 5, 5, 4, 5, 5, 5, 5, 55, NULL, NULL),
(357, 'JP057', 'Niko', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(358, 'JP058', 'Ade chandra', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(359, 'JP059', 'Anugra', 5, 3, 5, 3, 3, 3, 3, 3, 3, 5, 4, 4, 44, NULL, NULL),
(360, 'JP060', 'Insan', 5, 4, 4, 4, 4, 4, 4, 3, 4, 5, 5, 4, 50, NULL, NULL),
(361, 'JP061', 'Ega', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(362, 'JP062', 'Indra Ashura', 4, 4, 3, 3, 4, 3, 3, 3, 4, 4, 4, 4, 43, NULL, NULL),
(363, 'JP063', 'Dimas R.', 5, 4, 4, 4, 4, 5, 4, 5, 4, 5, 5, 4, 53, NULL, NULL),
(364, 'JP064', 'Satrio Adiwira P', 5, 3, 4, 4, 4, 5, 4, 4, 4, 5, 5, 4, 51, NULL, NULL),
(365, 'JP065', 'Sri', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 46, NULL, NULL),
(366, 'JP066', 'Maria Kristina Gego', 5, 4, 4, 4, 4, 4, 5, 4, 5, 4, 4, 5, 52, NULL, NULL),
(367, 'JP067', 'Agustina laurensia', 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 46, NULL, NULL),
(368, 'JP068', 'safarudin', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 47, NULL, NULL),
(369, 'JP069', 'Andri Abdul Aziz ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(370, 'JP070', 'Fahrezi', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(371, 'JP071', 'Muhammad sopyan', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(372, 'JP072', 'Adilla Siska Afifah ', 4, 4, 3, 4, 3, 3, 3, 3, 3, 3, 4, 3, 40, NULL, NULL),
(373, 'JP073', 'idramus', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(374, 'JP074', 'Indri putri', 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 5, 5, 52, NULL, NULL),
(375, 'JP075', 'Muhamad Latief', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(376, 'JP076', 'Ayes', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(377, 'JP077', 'Wahid Aldi Nugroho ', 3, 4, 3, 4, 3, 4, 5, 2, 3, 3, 4, 4, 42, NULL, NULL),
(378, 'JP078', 'Mohammad Fierdi Afriano ', 4, 4, 4, 4, 5, 4, 4, 4, 4, 4, 4, 5, 50, NULL, NULL),
(379, 'JP079', 'dolla rofiansyah ', 3, 3, 3, 3, 4, 4, 4, 4, 4, 3, 4, 3, 42, NULL, NULL),
(380, 'JP080', 'Okto Maniani', 5, 4, 3, 4, 3, 4, 3, 3, 3, 4, 4, 3, 43, NULL, NULL),
(381, 'JP081', 'Adit Ganteng Psikopat', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(382, 'JP082', 'Yohannes Halim T', 5, 5, 5, 4, 4, 4, 5, 3, 4, 4, 5, 5, 53, NULL, NULL),
(383, 'JP083', 'Putri Wulan Agustini ', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(384, 'JP084', 'Febri', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(385, 'JP085', 'Rijal', 4, 3, 3, 4, 4, 3, 3, 4, 4, 4, 3, 3, 42, NULL, NULL),
(386, 'JP086', 'Chika', 3, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3, 3, 37, NULL, NULL),
(387, 'JP087', 'Zailis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(388, 'JP088', 'Ahdiyat Halim', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(389, 'JP089', 'Ikbal Firdaus Kartajasa', 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 4, 4, 37, NULL, NULL),
(390, 'JP090', 'Fani Amanatul Khaliq', 4, 3, 3, 4, 3, 3, 4, 4, 3, 4, 4, 4, 43, NULL, NULL),
(391, 'JP091', 'Fauzi Dwi Pintarto', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 36, NULL, NULL),
(392, 'JP092', 'Ratih', 4, 4, 4, 5, 4, 4, 4, 4, 5, 5, 4, 4, 51, NULL, NULL),
(393, 'JP093', 'Yaspin Andika', 4, 4, 4, 5, 5, 4, 4, 4, 5, 5, 5, 4, 53, NULL, NULL),
(394, 'JP094', 'Hari Guritno ', 5, 5, 5, 4, 4, 4, 5, 4, 4, 4, 5, 4, 53, NULL, NULL),
(395, 'JP095', 'Azmi Muhammad Faisal', 4, 4, 3, 4, 3, 3, 4, 3, 4, 4, 4, 4, 44, NULL, NULL),
(396, 'JP096', 'Ade bustomi ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 48, NULL, NULL),
(397, 'JP097', 'Maulidya', 4, 4, 4, 5, 5, 4, 4, 5, 4, 4, 4, 4, 51, NULL, NULL),
(398, 'JP098', 'Putri Haifa', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 60, NULL, NULL),
(399, 'JP099', 'Refa Novelli', 5, 5, 5, 5, 5, 4, 4, 4, 3, 5, 5, 4, 54, NULL, NULL),
(400, 'JP100', 'Rio Adi Saputra', 5, 5, 5, 4, 4, 5, 5, 5, 5, 5, 5, 5, 58, NULL, NULL);

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
(5, '2024_01_06_065754_create_respondens_table', 2),
(6, '2024_01_25_032920_create_pertanyaans_table', 3),
(7, '2024_01_25_041013_create_jawaban_persepsis_table', 4),
(12, '2024_01_25_044611_create_jawaban_harapans_table', 5),
(13, '2024_04_27_103315_create_hasil_persepsis_table', 5),
(14, '2024_04_27_104411_create_hasil_harapans_table', 6);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `kode_pertanyaan`, `pertanyaan`, `dimensi`, `created_at`, `updated_at`) VALUES
(1, 'TAN001', 'Kebersihan fasilitas di area apotek', 'Tangible(Bukti Fisik)', NULL, NULL),
(2, 'TAN002', 'Apotek memiliki ketersediaan fasilitas penunjang (Ruang tunggu, Tempat Parkir)', 'Tangible(Bukti Fisik)', NULL, NULL),
(3, 'TAN003', 'Kerapihan dan Kebersihan yang dimiliki karyawan', 'Tangible(Bukti Fisik)', NULL, NULL),
(4, 'REA001', 'Apotek memberikan proses pelayanan pembelian dengan mudah', 'Reability(Kehandalan)', NULL, NULL),
(5, 'REA002', 'Apotek menyediakan produk dengan kualitas terbaik', 'Reability(Kehandalan)', NULL, NULL),
(6, 'RES001', 'Karyawan dapat membantu pelanggan ketika dibutuhkan', 'Responsiveness(Daya Tanggap)', NULL, NULL),
(7, 'RES002', 'Karyawan bersedia untuk mendampingi pelanggan dalam pemilihan obat', 'Responsiveness(Daya Tanggap)', NULL, NULL),
(8, 'AS001', 'Apotek memiliki persediaan obat dan alat kesehatan yang dijual', 'Assurance(Jaminan)', NULL, NULL),
(9, 'AS002', 'Karyawan dapat menguasai informasi tentang produk', 'Assurance(Jaminan)', NULL, NULL),
(10, 'AS003', 'Kebersihan tempat produk yang disediakan', 'Assurance(Jaminan)', NULL, NULL),
(11, 'EMP001', 'Sopan santun karyawan terhadap pelanggan', 'Empathy(Perhatian)', NULL, NULL),
(12, 'EMP002', 'Karyawan bersedia mendengarkan dan menerima keluhan dari pelanggan', 'Empathy(Perhatian)', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `respondens`
--

CREATE TABLE `respondens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_responden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `respondens`
--

INSERT INTO `respondens` (`id`, `id_responden`, `nama`, `jenis_kelamin`, `umur`, `pekerjaan`, `email`, `created_at`, `updated_at`) VALUES
(4, 'R001', 'Safrudin ', 'Laki-laki', '31', 'Guru', 'safruddin314@gmail.com', NULL, NULL),
(5, 'R002', 'Suci Ayu Pritami ', 'Perempuan', '20', 'Karyawan', 'suciapritami@gmail.com', NULL, NULL),
(6, 'R003', 'Ovi Nur Afifa', 'Perempuan', '23', 'Mahasiswi', 'afifaovi579@gmail.com', NULL, NULL),
(7, 'R004', 'Meti ', 'Perempuan', '19', 'Wirausaha ', 'matimartianingsih13@gmail.com', NULL, NULL),
(8, 'R005', 'Ari Fatzri ', 'Laki-laki', '23', 'Wirausaha ', 'arifatzri24@gmail.com', NULL, NULL),
(9, 'R006', 'Selsa Bela Hutabarat ', 'Perempuan', '22', 'Direct Sales', 'selsabella56@gmail.com', NULL, NULL),
(10, 'R007', 'Eka', 'Laki-laki', '22', 'Mahasiswa', 'ekafakhrikelvian@gmail.com', NULL, NULL),
(11, 'R008', 'Andrian Fakhrizal', 'Laki-laki', '23', 'Staff IT', 'rianaja194@gmail.com', NULL, NULL),
(12, 'R009', 'Listiyanto ', 'Laki-laki', '25', 'wiraswasta', 'listiyanto.sahabat18@gmail.com', NULL, NULL),
(13, 'R010', 'Erik Putra', 'Laki-laki', '24', 'Petani ', 'erikadesaputra69@gmail.com', NULL, NULL),
(14, 'R011', 'Hasbi', 'Laki-laki', '23', 'Ojek Online dan Mahasiswa', 'hasbiparker@gmail.com', NULL, NULL),
(15, 'R012', 'Budi Prasetyo ', 'Laki-laki', '23', 'Editor', 'budipras2022@gmail.com', NULL, NULL),
(16, 'R013', 'Sury fathiya', 'Perempuan', '22', 'Admin', 'hanifafathiya66@gmail.com', NULL, NULL),
(17, 'R014', 'Habibi', 'Laki-laki', '22', 'Mahasiswa', 'ahabibi207@gmail.com ', NULL, NULL),
(18, 'R015', 'Hilda Febrianti', 'Perempuan', '21', 'mahasiswa', 'hildafebb123@gmail.com', NULL, NULL),
(19, 'R016', 'Dian', 'Laki-laki', '25', 'Mahasiswa', 'diannurdiana1807@gmail.com', NULL, NULL),
(20, 'R017', 'Aditiya ', 'Laki-laki', '23', 'Karyawan Swasta ', 'aditiyaadity00@gmail.com', NULL, NULL),
(21, 'R018', 'Andika Putra', 'Laki-laki', '26', 'Wiraswasta', 'akira.saburo@gmail.com', NULL, NULL),
(22, 'R019', 'Ednas', 'Laki-laki', '30', 'Nganggur', 'trexsejahtera@gmail.com', NULL, NULL),
(23, 'R020', 'Sri sudarsih', 'Perempuan', '43', 'Ibu Rumah Tangga', 'sudarsih1080@gmail.com', NULL, NULL),
(24, 'R021', 'Suvi', 'Laki-laki', '27', 'Swasta', 'Mariefsuvi@gmail.com', NULL, NULL),
(25, 'R022', 'Chandra Wijaya ', 'Laki-laki', '22', 'Pegawai swasta ', 'chandwijay11@gmail.com', NULL, NULL),
(26, 'R023', 'Restu Avrielia Putri', 'Perempuan', '19', 'Karyawan swasta', 'restuputri260@gmail.com', NULL, NULL),
(27, 'R024', 'Mutia ', 'Perempuan', '19', 'pengangguran ', 'hooniep20@gmail.com', NULL, NULL),
(28, 'R025', 'Lailatul Fadila', 'Perempuan', '19', 'Pegawai apotek', 'lailatulfadila241204@gmail.com', NULL, NULL),
(29, 'R026', 'Hasan', 'Laki-laki', '26', 'Wiraswasta ', 'hasan.fitri31@gmail.com', NULL, NULL),
(30, 'R027', 'Andrian', 'Laki-laki', '27', 'Freelance', 'Andryanaim@gmail.com', NULL, NULL),
(31, 'R028', 'Rizza Nurul Hidayat ', 'Laki-laki', '24', 'IT Support ', 'rizzanurul13@gmail.com', NULL, NULL),
(32, 'R029', 'Nuria ', 'Perempuan', '19', 'Admin Sosial Media', 'nurpt16@gmail.com', NULL, NULL),
(33, 'R030', 'Meki', 'Perempuan', '24', 'Netral', 'Bbbgfdd@gmail.com', NULL, NULL),
(34, 'R031', 'Andini', 'Perempuan', '23', 'Belum bekerja', 'andiniafaf7@gmail.com', NULL, NULL),
(35, 'R032', 'artanti f', 'Perempuan', '18', 'barista', 'artantifeliasas047@gmail.com', NULL, NULL),
(36, 'R033', 'Putri Wulan Agustini ', 'Perempuan', '17', 'Karyawan swasta ', 'pw17022002@gmail.com', NULL, NULL),
(37, 'R034', 'Bagus Affandi', 'Laki-laki', '22', 'Mahasiswa', 'baghostaffandi@gmail.com', NULL, NULL),
(38, 'R035', 'Kristan Dandi', 'Laki-laki', '28', 'Karyawan Swasta', 'jenengah@gmail.com', NULL, NULL),
(39, 'R036', 'Rizky Gimnastiar', 'Laki-laki', '21', 'Karyawan', 'rizkygimnastiar552@gmail.com', NULL, NULL),
(40, 'R037', 'Titan', 'Laki-laki', '24', 'Wiraswasta', 'titaniw47@gmail.com', NULL, NULL),
(41, 'R038', 'Hizbullah Sulthan ', 'Laki-laki', '22', 'Mahasiswa ', 'hizbullahsulthana@gmail.com', NULL, NULL),
(42, 'R039', 'Puput Kurniawati', 'Perempuan', '26', 'Wiraswasta', 'Kurniawatipuput852@gmail.com', NULL, NULL),
(43, 'R040', 'Mukhlis', 'Laki-laki', '28', 'Nganggur', 'mukhlismochamad@gmail.com', NULL, NULL),
(44, 'R041', 'Habibi', 'Laki-laki', '21', 'Mahasiswa', 'ahabibi207@gmail.com ', NULL, NULL),
(45, 'R042', 'Erni', 'Perempuan', '23', 'Karyawan ', 'ernirohyatiputri11@gmail.com', NULL, NULL),
(46, 'R043', 'Ade bayu', 'Laki-laki', '46', 'Driver', 'Adebayu260@gmail.com', NULL, NULL),
(47, 'R044', 'Aditiya', 'Laki-laki', '23', 'Karyawan Swasta ', 'aditiyaadity00@gmail.com', NULL, NULL),
(48, 'R045', 'Irsanto', 'Laki-laki', '22', 'Mahasiswa ', 'irsankece05@gmail.com', NULL, NULL),
(49, 'R046', 'Ovi Nur Afifa', 'Perempuan', '24', 'Staff Administrasi', 'afifaovi579@gmail.com', NULL, NULL),
(50, 'R047', 'Muhammad Arinal Haq', 'Laki-laki', '22', 'Retail', 'Arinalhaq212@gmail.com', NULL, NULL),
(51, 'R048', 'Muhamad Zaki indriyansyah ', 'Laki-laki', '24', 'Wirausaha ', 'zakiindriansyah55@gmail.com', NULL, NULL),
(52, 'R049', 'Habibi', 'Laki-laki', '22', 'Mahasiswa', 'ahabibi12@gmail.com', NULL, NULL),
(53, 'R050', 'Agus Kurniawan', 'Laki-laki', '31', 'pedagang', 'agusekurnia@gmail.com', NULL, NULL),
(54, 'R051', 'Afaf ', 'Perempuan', '22', 'Mahasiswa', 'afafiaf8@gmail.com', NULL, NULL),
(55, 'R052', 'Fanny Amanda Ariestia', 'Perempuan', '23', 'Karyawan swasta', 'fannyamanda0410@gmail.com', NULL, NULL),
(56, 'R053', 'Qiera Kamilah', 'Perempuan', '22', 'Admin', 'qierakamilah@gmail.com', NULL, NULL),
(57, 'R054', 'Muhamad Farid Fahrizal ', 'Laki-laki', '25', 'Lapangan ', 'faridfahrizal95@gmail.com ', NULL, NULL),
(58, 'R055', 'Saiful Malik As Saleh', 'Laki-laki', '23', 'Pegawai Honorer', 'saifulmalik214@gmail.com', NULL, NULL),
(59, 'R056', 'azdi febbryansyah', 'Laki-laki', '27', 'asisten apoteker', 'dhenbuyunk6297@gmail.com', NULL, NULL),
(60, 'R057', 'Niko', 'Laki-laki', '26', 'Administrasi ', 'nikoyusuf25@gmail.com', NULL, NULL),
(61, 'R058', 'Ade chandra', 'Laki-laki', '27', 'Wirausaha', 'Chandraa992@gmail.com', NULL, NULL),
(62, 'R059', 'Anugra', 'Laki-laki', '24', 'Nganggur', 'anugrapratama21@gmail.com', NULL, NULL),
(63, 'R060', 'Insan', 'Laki-laki', '20', 'Mahasiswa', 'sanhonkai09780@gmail.com', NULL, NULL),
(64, 'R061', 'Ega', 'Laki-laki', '23', 'Mahasiswa', 'pradanaega12@gmail.com', NULL, NULL),
(65, 'R062', 'Indra Ashura', 'Laki-laki', '25', 'Content creator ', 'indrashura999@gmail.com', NULL, NULL),
(66, 'R063', 'Dimas R.', 'Laki-laki', '23', 'Wiraswasta ', 'dimasriezkypratama@gmail.com', NULL, NULL),
(67, 'R064', 'Satrio Adiwira P', 'Laki-laki', '26', 'Spv Admin', 'satrioadiwira696@gmail.com', NULL, NULL),
(68, 'R065', 'Sri', 'Perempuan', '40', 'Ibu rumah tangga', 'srisudarsih1080@gmail.com', NULL, NULL),
(69, 'R066', 'Maria Kristina Gego', 'Perempuan', '23', 'Mahasiswa ', 'kristinamaria770@gmail.com', NULL, NULL),
(70, 'R067', 'Agustina laurensia', 'Perempuan', '44', 'Karyawan swasta', 'Agustinalaurensia48@g mail.com', NULL, NULL),
(71, 'R068', 'safarudin', 'Laki-laki', '36', 'Karyawan', 'safarudin.asg@gmail.com', NULL, NULL),
(72, 'R069', 'Andri Abdul Aziz ', 'Laki-laki', '25', 'Satpam ', 'Azizabdulandri27@gmail.com', NULL, NULL),
(73, 'R070', 'Fahrezi', 'Laki-laki', '22', 'technical engineer ', 'bintangfahrezi15876@gmail.com', NULL, NULL),
(74, 'R071', 'Muhammad sopyan', 'Laki-laki', '22', 'Mahasiswa', 'giksbonjol@gmail.com', NULL, NULL),
(75, 'R072', 'Adilla Siska Afifah ', 'Perempuan', '23', 'Karyawan', 'adillasiska0@gmail.com', NULL, NULL),
(76, 'R073', 'idramus', 'Laki-laki', '23', 'karyawan', 'idramusgagarin15@gmail.com', NULL, NULL),
(77, 'R074', 'Indri putri', 'Perempuan', '23', 'Karyawan swasta', 'Idrptr01@gmail.com', NULL, NULL),
(78, 'R075', 'Muhamad Latief', 'Laki-laki', '28', 'Kitchen', 'muhlatief96@gmail.com', NULL, NULL),
(79, 'R076', 'Ayes', 'Laki-laki', '25', 'Karyawan swasta', 'Ayesaduritz08@gmail.com', NULL, NULL),
(80, 'R077', 'Wahid Aldi Nugroho ', 'Laki-laki', '24', 'Konsultasi Edukasi', 'wahidaldi41@gmail.com', NULL, NULL),
(81, 'R078', 'Mohammad Fierdi Afriano ', 'Laki-laki', '23', 'Karyawan swasta', 'fierdiafriano@gmail.com', NULL, NULL),
(82, 'R079', 'dolla rofiansyah ', 'Laki-laki', '26', 'karyawan', 'drofiansyaah@gmail.com', NULL, NULL),
(83, 'R080', 'Okto Maniani', 'Laki-laki', '23', 'Freelancer', 'gylchawa@gmail.com', NULL, NULL),
(84, 'R081', 'Adit Ganteng Psikopat', 'Laki-laki', '24', 'Wirausaha', 'yudhiadhitia84@gmail.com', NULL, NULL),
(85, 'R082', 'Yohannes Halim T', 'Laki-laki', '22', 'Mahasiswa', 'hyohannes25@gmail.com', NULL, NULL),
(86, 'R083', 'Putri Wulan Agustini ', 'Perempuan', '22', 'Karyawan swasta ', 'pw17022002@gmail.com', NULL, NULL),
(87, 'R084', 'Febri', 'Laki-laki', '25', 'Programmer ', 'mfebri.nugroho1299@gmail.com', NULL, NULL),
(88, 'R085', 'Rijal', 'Laki-laki', '24', 'Desainer ', 'rjlsixv@gmail.com', NULL, NULL),
(89, 'R086', 'Chika', 'Perempuan', '24', 'Wirausaha', 'mikopin3@gmail.com', NULL, NULL),
(90, 'R087', 'Zailis', 'Laki-laki', '24', 'Swasta', 'akunttft@gmail.com', NULL, NULL),
(91, 'R088', 'Ahdiyat Halim', 'Laki-laki', '32', 'Radiografer', 'ahdiyat.halim91@gmail.com', NULL, NULL),
(92, 'R089', 'Ikbal Firdaus Kartajasa', 'Laki-laki', '23', 'Mahasiswa', 'ikbalfirdaus200@gmail.com', NULL, NULL),
(93, 'R090', 'Fani Amanatul Khaliq', 'Laki-laki', '25', 'Karyawan Swasta', 'faniamanatul@gmail.com', NULL, NULL),
(94, 'R091', 'Fauzi Dwi Pintarto', 'Laki-laki', '27', 'Serabutan', 'fauzi.pintarto@gmail.com', NULL, NULL),
(95, 'R092', 'Ratih', 'Perempuan', '26', 'Karyawan Swasta', 'ratihftw@gmail.com', NULL, NULL),
(96, 'R093', 'Yaspin Andika', 'Laki-laki', '21', 'Mahasiswa', 'andikayaspin@gmail.com', NULL, NULL),
(97, 'R094', 'Hari Guritno ', 'Laki-laki', '39', 'Karyawan ', 'Harry.guritno@gmail.com', NULL, NULL),
(98, 'R095', 'Azmi Muhammad Faisal', 'Laki-laki', '24', 'Guru', 'azmifaisal462@gmail.com', NULL, NULL),
(99, 'R096', 'Ade bustomi ', 'Laki-laki', '24', 'Karyawan swasta ', 'subaru.tom007@gmail.com', NULL, NULL),
(100, 'R097', 'Maulidya', 'Perempuan', '22', 'Content creator', 'maulidya13oke@gmail.com', NULL, NULL),
(101, 'R098', 'Putri Haifa', 'Perempuan', '23', 'Wiraswasta ', 'Putrihwd@gmail.com', NULL, NULL),
(102, 'R099', 'Refa Novelli', 'Laki-laki', '18', 'Pelajar', 'refamizuhara@gmail.com', NULL, NULL),
(103, 'R100', 'Rio Adi Saputra', 'Laki-laki', '25', 'Toko', '3g.rio3@gmail.com', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alif', 'admin@gmail.com', NULL, '$2y$10$QH/FnYkwyfKJdaP0zuS6YOL.C31qXmYmdCgxwIh3ue.DVbBF19nAG', NULL, '2024-01-05 21:47:45', '2024-01-05 21:47:45');

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
-- Indeks untuk tabel `hasil_harapans`
--
ALTER TABLE `hasil_harapans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_persepsis`
--
ALTER TABLE `hasil_persepsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawaban_harapans`
--
ALTER TABLE `jawaban_harapans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawaban_persepsis`
--
ALTER TABLE `jawaban_persepsis`
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
-- Indeks untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `respondens`
--
ALTER TABLE `respondens`
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
-- AUTO_INCREMENT untuk tabel `hasil_harapans`
--
ALTER TABLE `hasil_harapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `hasil_persepsis`
--
ALTER TABLE `hasil_persepsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `jawaban_harapans`
--
ALTER TABLE `jawaban_harapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT untuk tabel `jawaban_persepsis`
--
ALTER TABLE `jawaban_persepsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

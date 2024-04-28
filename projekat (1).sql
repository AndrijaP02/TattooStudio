-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:22 AM
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
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_prezime` varchar(255) NOT NULL,
  `artist_ime` varchar(255) NOT NULL,
  `artist_email` varchar(255) NOT NULL,
  `artist_kategorija` enum('Black&Gray','Color','Realism','Fineline','Fantasy') NOT NULL,
  `artist_opis` varchar(255) NOT NULL,
  `artist_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_prezime`, `artist_ime`, `artist_email`, `artist_kategorija`, `artist_opis`, `artist_image`, `created_at`, `updated_at`) VALUES
(3, 'Petar', 'Petrović', 'ppetrovic@gmail.com', 'Color', 'Petar je talentovani tattoo umetnik poznat po svojim izuzetnim veštinama colora i jedinstvenom stilu. Sa dugogodišnjim iskustvom u industriji, Petar se etablirao kao veoma tražen umetnik, svojim radom pridobio je brojne klijente.', '1692136605.jpg', '2023-08-15 16:56:54', '2023-08-15 19:56:45'),
(4, 'Maja', 'Radić', 'majar@gmail.com', 'Black&Gray', 'Maja je bila aktivan student na fakultetu umetnosti. Učestvovala je na raznim takmičenjima u crtanju i na mnogima od njih pobedila. Istraživala je o tetovažama i ovom umetničkom stilu, oprobala se i postala jedan od najboljih tattoo artista.\r\n', '1692126276.jpg', '2023-08-15 17:04:36', '2023-08-15 17:04:36'),
(5, 'Aleksandar', 'Minić', 'minica8@gmail.com', 'Fineline', 'Aleksandar je jedan od naših najboljih tattoo umetnika. On ima stručnost u umetničkom žanru Fine Tattoo-Fineline. Veruje u povezivanje sa ljudima, prenoseći svoju umetnost i kreativnost na njihovoj koži. Svojim radom osvojio je mnoga srca!', '1692126381.jpg', '2023-08-15 17:06:21', '2023-08-15 17:06:21'),
(13, 'Ivanović', 'Jana', 'jana77@gmail.com', 'Fantasy', 'Jana je jedna od naših najmlađih i najtalentovanijih tattoo artista. Sa devet godina inspisana je crtanjem i od tada strastveno prakticira i kreira dizajne koji su izuzetni. Danas je sa svojom nenadmašnom strašću nezaustavljiva.', '1694124823.jpg', '2023-08-15 18:52:17', '2023-09-07 20:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `konsultacije`
--

CREATE TABLE `konsultacije` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `brojtelefona` varchar(255) NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `potvrdjeno` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultacije`
--

INSERT INTO `konsultacije` (`id`, `datum`, `vreme`, `ime`, `prezime`, `email`, `brojtelefona`, `artist_id`, `created_at`, `updated_at`, `potvrdjeno`) VALUES
(1, '2023-10-13', '12:40:00', 'Anastasija', 'Petković', 'anastasija123@gmail.com', '064/105-8756', 3, '2023-10-13 20:02:59', '2023-10-20 18:55:14', 1),
(11, '2023-10-26', '20:00:00', 'Andrija Petkovic', 'Simić', 'anastasija123@gmail.com', '064/105-8756', 4, '2023-10-20 18:59:09', '2023-10-20 18:59:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_08_12_180448_azuriraj_users_tabelu', 1),
(13, '2023_08_14_230649_create_students_table', 1),
(14, '2023_08_14_231016_create_artist_table', 2),
(15, '2023_08_16_170043_create_slike_table', 3),
(17, '2023_08_20_140230_create_posts_table', 5),
(18, '2023_08_21_133252_add_slug_to_posts', 6),
(19, '2023_08_24_150435_add_role_to_users_table', 7),
(20, '2023_10_12_141952_add_potvrdjeno_to_konsultacije', 8),
(21, '2023_10_13_212624_add_unread_consultations_to_users_table', 9),
(22, '2023_08_17_211009_create_konsultacije_table', 10),
(23, '2023_10_14_232240_add_potvrdjeno_to_konsultacije', 11),
(25, '2023_10_15_175907_create_notifications_table', 12),
(26, '2023_10_16_160356_add_status_to_posts_table', 13),
(27, '2023_10_19_195213_create_ocene_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL DEFAULT uuid(),
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0c86676f-6e88-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"post_id\":7,\"user_id\":4,\"post_naslov\":\"Pametne ideje za prekrivanje starih tetova\\u017ea\",\"message\":\"Post je odobren. Mo\\u017eete napisati \\u010dlanak!\"}', '2023-10-19 12:05:07', '2023-10-19 12:01:52', '2023-10-19 12:05:07'),
('13dca420-703e-11ee-897f-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 3, '{\"post_id\":21,\"user_id\":3,\"message\":\"Kreiran je novi post na blogu. Potrebna je potvrda!\"}', '2023-11-17 15:39:42', '2023-10-21 16:17:24', '2023-11-17 15:39:42'),
('25b790bf-6c31-11ee-b845-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"konsultacija_id\":8,\"user_id\":4,\"message\":\"Nova konsultacija za potvrdu!\"}', '2023-10-16 12:36:29', '2023-10-16 12:34:41', '2023-10-16 12:36:29'),
('26c9dc4b-6f8a-11ee-aa7f-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"konsultacija_id\":9,\"user_id\":4,\"message\":\"Nova konsultacija za potvrdu!\"}', '2023-10-20 18:51:21', '2023-10-20 18:49:24', '2023-10-20 18:51:21'),
('39ced4fc-6e8a-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 3, '{\"post_id\":19,\"user_id\":3,\"message\":\"Kreiran je novi post na blogu. Potrebna je potvrda!\"}', '2023-10-19 12:25:45', '2023-10-19 12:17:27', '2023-10-19 12:25:45'),
('45ed7ec6-8402-11ee-b661-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"konsultacija_id\":13,\"user_id\":4,\"message\":\"Nova konsultacija za potvrdu!\"}', '2023-11-17 12:43:18', '2023-11-15 20:59:32', '2023-11-17 12:43:18'),
('470df26a-6e89-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"post_id\":8,\"user_id\":4,\"post_naslov\":\"Tetova\\u017ea nakon vakcinacije protiv korona virusa?\",\"message\":\"Post je odobren. Mo\\u017eete napisati \\u010dlanak!\"}', '2023-10-19 12:11:09', '2023-10-19 12:10:40', '2023-10-19 12:11:09'),
('4cbfe95f-6e89-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"post_id\":17,\"user_id\":4,\"post_naslov\":\"mlokk\",\"message\":\"Post je odbijen i obrisan!\"}', '2023-10-19 12:11:09', '2023-10-19 12:10:49', '2023-10-19 12:11:09'),
('584dc2a4-6f8a-11ee-aa7f-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"konsultacija_id\":10,\"user_id\":4,\"message\":\"Nova konsultacija za potvrdu!\"}', '2023-10-20 18:51:21', '2023-10-20 18:50:47', '2023-10-20 18:51:21'),
('6857f624-6c52-11ee-b845-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 3, '{\"post_id\":17,\"user_id\":3,\"message\":\"Kreiran je novi post na blogu. Potrebna je potvrda!\"}', '2023-10-16 16:33:07', '2023-10-16 16:32:46', '2023-10-16 16:33:07'),
('691483f0-6e8b-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"post_id\":19,\"user_id\":4,\"post_naslov\":\"gdfdgsgsdfg\",\"message\":\"Post je odbijen i obrisan!\"}', '2023-10-19 12:26:22', '2023-10-19 12:25:56', '2023-10-19 12:26:22'),
('6e57d8b6-6e8b-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"post_id\":12,\"user_id\":4,\"post_naslov\":\"Odr\\u017eavanje - Nega tetova\\u017ea\",\"message\":\"Post je odobren. Mo\\u017eete napisati \\u010dlanak!\"}', '2023-10-19 12:26:22', '2023-10-19 12:26:05', '2023-10-19 12:26:22'),
('83e822df-6f8b-11ee-aa7f-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"konsultacija_id\":11,\"user_id\":4,\"message\":\"Nova konsultacija za potvrdu!\"}', '2023-10-20 19:02:36', '2023-10-20 18:59:09', '2023-10-20 19:02:36'),
('ac0e213e-6e89-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 3, '{\"post_id\":18,\"user_id\":3,\"message\":\"Kreiran je novi post na blogu. Potrebna je potvrda!\"}', '2023-10-19 12:13:47', '2023-10-19 12:13:29', '2023-10-19 12:13:47'),
('c855b7a4-6e89-11ee-82b4-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 4, '{\"post_id\":18,\"user_id\":4,\"post_naslov\":\"ggdgsgr\",\"message\":\"Post je odbijen i obrisan!\"}', '2023-10-19 12:14:42', '2023-10-19 12:14:17', '2023-10-19 12:14:42'),
('d6e08e2a-703b-11ee-897f-00ffdf0f048b', 'custom_type', 'App\\Models\\User', 3, '{\"post_id\":20,\"user_id\":3,\"message\":\"Kreiran je novi post na blogu. Potrebna je potvrda!\"}', '2023-11-17 15:39:42', '2023-10-21 16:01:22', '2023-11-17 15:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `ocena` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `user_id`, `artist_id`, `ocena`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 5, '2023-10-20 10:35:32', '2023-10-20 10:35:32'),
(2, 2, 5, 4, '2023-10-20 10:36:01', '2023-10-20 10:36:01'),
(5, 2, 13, 5, NULL, NULL),
(6, 2, 4, 5, NULL, NULL),
(7, 2, 4, 5, NULL, NULL),
(8, 2, 3, 4, NULL, NULL),
(9, 2, 3, 5, NULL, NULL),
(10, 2, 13, 5, NULL, NULL),
(11, 2, 5, 4, '2023-10-20 18:26:46', '2023-10-20 18:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datum` date NOT NULL,
  `autor` varchar(255) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `kratak_opis` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `datum`, `autor`, `naslov`, `kratak_opis`, `post_image`, `created_at`, `updated_at`, `slug`, `status`) VALUES
(6, '2023-08-19', 'Iva Smiljić', '12 saveta da pripremite sebe za prvu tetovažu', 'Neki ljudi požele da imaju tetovažu i jednostavno dođu kod tattoo majstora i ispune svoju želju. Dok drugima ipak nije to tako jednostavno, njihove ideje za tetovaže stoje dugo na listi želja.', '1692650051.jpg', '2023-08-21 11:53:51', '2023-10-16 19:15:55', '12-saveta-da-pripremite-sebe-za-prvu-tetovazu', 'approved'),
(7, '2023-08-17', 'Iva Smiljić', 'Pametne ideje za prekrivanje starih tetovaža', 'Odavno postoje laseri za uklanjanje tetovaža ali takvi tretmani znaju biti bolni i na kraju umesto tetovaže, ostane beli ožiljak, kao od opekotine. Ovo treba da znate pre uklanjanja.', '1692650479.jpg', '2023-08-21 15:04:48', '2023-10-19 12:01:52', 'pametne-ideje-za-prekrivanje-starih-tetovaza', 'approved'),
(8, '2023-08-20', 'Luka Staletović', 'Tetovaža nakon vakcinacije protiv korona virusa?', 'Uvođenje vakcine protiv COVID-19 je napravilo veliku pometnju među ljudima širom sveta. Pitanje se postavlja da li su te vakcine štetne po ljudsko zdravlje, šta ubacuju u naš organizam?', '1692649780.jpg', '2023-08-21 15:27:18', '2023-10-19 12:10:40', 'tetovaza-nakon-vakcinacije-protiv-korona-virusa', 'approved'),
(12, '2023-08-23', 'Studio 1ust one', 'Održavanje - Nega tetovaža', 'Nakon tetoviranja, koža se tretira kao opekotina i može se zaštititi na sledeća dva načina: zaštitnom folijom ili gazom. Ukoliko koristite zaštitnu foliju, ona se ne sme držati preko tetovaže duže od dva sata zato što onemogućava disanje kože.', '1692902774.jpg', '2023-08-24 16:46:14', '2023-10-19 12:26:05', 'odrzavanje-nega-tetovaza', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `artist_id`, `slika`, `created_at`, `updated_at`) VALUES
(1, 3, '1692224928.jpg', '2023-08-16 20:28:48', '2023-08-16 20:28:48'),
(2, 3, '1692225403.jpg', '2023-08-16 20:36:43', '2023-08-16 20:36:43'),
(3, 3, '1692745519.jpg', '2023-08-22 21:05:19', '2023-08-22 21:05:19'),
(4, 3, '1692746653.jpg', '2023-08-22 21:24:14', '2023-08-22 21:24:14'),
(5, 3, '1692746742.jpg', '2023-08-22 21:25:42', '2023-08-22 21:25:42'),
(6, 4, '1692748450.jpg', '2023-08-22 21:54:10', '2023-08-22 21:54:10'),
(7, 4, '1692748492.jpg', '2023-08-22 21:54:52', '2023-08-22 21:54:52'),
(8, 4, '1692748511.jpg', '2023-08-22 21:55:11', '2023-08-22 21:55:11'),
(9, 4, '1692748531.jpg', '2023-08-22 21:55:31', '2023-08-22 21:55:31'),
(11, 4, '1692748567.jpg', '2023-08-22 21:56:07', '2023-08-22 21:56:07'),
(12, 5, '1692748645.jpg', '2023-08-22 21:57:25', '2023-08-22 21:57:25'),
(13, 5, '1692748665.jpg', '2023-08-22 21:57:45', '2023-08-22 21:57:45'),
(14, 5, '1692748689.jpg', '2023-08-22 21:58:09', '2023-08-22 21:58:09'),
(15, 5, '1692748707.jpg', '2023-08-22 21:58:27', '2023-08-22 21:58:27'),
(17, 13, '1692748787.jpg', '2023-08-22 21:59:47', '2023-08-22 21:59:47'),
(18, 13, '1692748807.jpg', '2023-08-22 22:00:07', '2023-08-22 22:00:07'),
(19, 13, '1692748875.jpg', '2023-08-22 22:01:15', '2023-08-22 22:01:15'),
(20, 13, '1692748892.jpg', '2023-08-22 22:01:32', '2023-08-22 22:01:32'),
(21, 13, '1692748904.jpg', '2023-08-22 22:01:44', '2023-08-22 22:01:44'),
(24, 5, '1697735624.jpg', '2023-10-19 15:13:44', '2023-10-19 15:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prezime` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `unread_consultations` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `prezime`, `role`, `unread_consultations`) VALUES
(2, 'Anastasija', 'anastasija123@gmail.com', NULL, '$2y$10$gY1IUUTSwmdBaMUmDBgTv.4x2rvKV9dd1a0cc9pp/t/xKnuBjIaNy', NULL, '2023-08-24 13:12:07', '2023-11-15 21:04:46', 'Petković', 'user', 0),
(3, 'Andrija', 'andrija456@gmail.com', NULL, '$2y$10$e9aA2slEz4kXTLG2R71fpOuM2JX3uSKxqpzmC/wjxvCySJm24cE3C', NULL, '2023-08-24 14:20:13', '2023-08-24 14:20:13', 'Petković', 'admin', 0),
(4, 'Ivan', 'ivan11@gmail.com', NULL, '$2y$10$HWnIM71pqNcTJsRO.9z7v.41mO/x/xYocsbSsFPOC0g1aaarDZ5Ai', NULL, '2023-10-12 13:12:45', '2023-10-12 13:12:45', 'Ivanović', 'manager', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `konsultacije`
--
ALTER TABLE `konsultacije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsultacije_artist_id_foreign` (`artist_id`),
  ADD KEY `konsultacije_email_foreign` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ocene_user_id_foreign` (`user_id`),
  ADD KEY `ocene_artist_id_foreign` (`artist_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slike_artist_id_foreign` (`artist_id`);

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
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultacije`
--
ALTER TABLE `konsultacije`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultacije`
--
ALTER TABLE `konsultacije`
  ADD CONSTRAINT `konsultacije_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `konsultacije_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `ocene_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `slike`
--
ALTER TABLE `slike`
  ADD CONSTRAINT `slike_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

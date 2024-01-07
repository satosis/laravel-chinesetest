-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 07:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `sbd` varchar(255) NOT NULL,
  `certificate_no` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `speaking_point` varchar(255) NOT NULL,
  `listening_point` varchar(255) NOT NULL,
  `reading_point` varchar(255) NOT NULL,
  `writting_point` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `sex`, `sbd`, `certificate_no`, `level`, `date`, `speaking_point`, `listening_point`, `reading_point`, `writting_point`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PHẠM MINH HOÀNG', '/image/PHẠM%20MINH%20HOÀNG%20HSK4HSKK.jpg', '男', 'H41819850020000845 H82225455300014845', 'H41819800561', 'HSK四级', 'Aug 20, 2023', '65', '60', '75', '82', NULL, NULL, NULL),
(2, 'NGUYỄN TRÍ DŨNG', '/image/NGUYỄN%20TRÍ%20DŨNG%20HSK4HSKK.jpg', '男', 'H41819960020000048 H82000454000099645', 'H41819600442', 'HSK四级', 'Aug 20, 2023', '62', '70', '75', '85', NULL, NULL, NULL),
(3, 'NGUYỄN TRÍ DŨNG', '/image/NGUYỄN%20TRÍ%20DŨNG%20HSK4HSKK.jpg', '男', 'H41819960020000048 H82000454000099645', 'H41819600442', 'HSK四级', 'Aug 20, 2023', '62', '70', '75', '85', NULL, NULL, NULL),
(4, 'PHAN THỊ MỸ HÒA', '/image/PHAN%20THỊ%20MỸ%20HÒA%20HSK4.jpg', '女', 'H42010850070000032 H82004006445210087', 'H42009037222', 'HSK四级', 'Aug 20, 2023', '0', '60', '75', '82', NULL, NULL, NULL),
(5, 'VÕ NHƯ QUỲNH', '/image/VÕ%20NHƯ%20QUỲNH%20HSK4.jpg', '女', 'H42010060080000189 H82100460711602318', 'H42011047203', 'HSK四级', 'Aug 20, 2023', '0', '70', '75', '85', NULL, NULL, NULL),
(6, 'HỨA THÀNH THÂN', '/image/HỨA%20THÀNH%20THÂN%20HSK4.jpg', '男', 'H46200070009200100 H82640047712356601', 'H46200045210', 'HSK四级', 'Sep 16, 2023', '0', '50', '70', '85', NULL, NULL, NULL),
(7, 'NGUYỄN ĐĂNG HẢI', '/image/NGUYỄN%20ĐĂNG%20HẢI%20HSK3.jpg', '男', 'H31819850020000845 H82000453000081645', 'H31812069024', 'HSK三级', 'Nov 26, 2023', '0', '40', '70', '65', NULL, NULL, NULL),
(8, 'BÙI HUY THANH', '/image/BÙI%20HUY%20THANH%20HSK3.jpg', '男', 'H35500112007000441 H80012245998000141', 'H31810077025', 'HSK三级', 'Nov 26, 2023', '0', '45', '75', '80', NULL, NULL, NULL),
(9, 'NGUYỄN LƯƠNG QUÝ HÀO', '/image/NGUYỄN%20LƯƠNG%20QUÝ%20HÀO%20HSK3.jpg', '男', 'H35500451008001135 H82004110775679996', 'H31810184501', 'HSK三级', 'Nov 26, 2023', '0', '57', '62', '60', NULL, NULL, NULL),
(10, 'NGUYỄN HÙNG VĨ', '/image/NGUYỄN%20HÙNG%20VĨ%20HSK4.jpg', '男', 'H41819450001500045 H82000177105600199', 'H41879800132', 'HSK四级', 'Nov 26, 2023', '0', '60', '75', '71', NULL, NULL, NULL),
(11, 'HuỲNH THỊ THANH PHƯỢNG', '/image/HUỲNH%20THỊ%20THANH%20PHƯỢNG%20HSK4.jpg', '女', 'H41810045771000236 H82014181075811061', 'H41800450334', 'HSK四级', 'Nov 26, 2023', '0', '60', '67', '82', NULL, NULL, NULL),
(12, 'LÂM VĂN VŨ', '/image/LÂM%20VĂN%20VŨ%20HSK3.jpg', '男', 'H35500425110110002 H82640040083636001', 'H35500425000', 'HSK三级', 'Nov 26, 2023', '0', '60', '60', '55', NULL, NULL, NULL),
(13, 'TRỊNH THỊ PHƯƠNG UYÊN', '/image/TRỊNH%20THỊ%20PHƯƠNG%20UYÊN%20HSK3.jpg', '女', 'H35500400188911665 H82001450063301120', 'H35541108124', 'HSK三级', 'Nov 26, 2023', '0', '40', '68', '75', NULL, NULL, NULL),
(14, 'LÊ MINH CHÍ', '/image/LÊ%20MINH%20CHÍ%20HSK3.jpg', '男', 'H35507887100036651 H82641100008711200', 'H36001578941', 'HSK三级', 'Nov 26, 2023', '0', '80', '45', '75', NULL, NULL, NULL),
(15, 'LÊ MINH HẢI', '/image/LÊ%20MINH%20HẢI%20HSK2.jpg', '男', 'H20510000542100153', 'H26120007871', 'HSK二级', 'Nov 26, 2023', '0', '80', '70', '70', NULL, NULL, NULL),
(16, 'PHAN DƯƠNG BÍCH TUYỀN', '/image/PHAN%20DƯƠNG%20BÍCH%20TUYỀN%20HSK2.jpg', '女', 'H25401000871004501', 'H26170158000', 'HSK二级', 'Nov 26, 2023', '0', '65', '80', '0', NULL, NULL, NULL),
(17, 'ĐẶNG QUYẾT ĐẠT', '/image/ĐẶNG%20QUYẾT%20ĐẠT%20HSK4%20HSKK.jpg', '男', 'H41256500000150044 H82300246500001554', 'H41819985454', 'HSK四级', 'Nov 26, 2023', '68', '60', '75', '0', NULL, NULL, NULL),
(18, 'VƯƠNG KIM THOA', '/image/VƯƠNG%20KIM%20THOA%20HSK3.jpg', '女', 'H33500512100054011 H82120004650001441', 'H36001540015', 'HSK三级', 'Nov 26, 2023', '0', '40', '70', '80', NULL, NULL, NULL),
(19, 'NGUYỄN THỊ NGỌC ANH', '/image/NGUYỄN%20THỊ%20NGỌC%20ANH%20HSK4.jpg', '女', 'H41819450001650004 H82002000417710002', 'H48522001441', 'HSK四级', 'Nov 26, 2023', '0', '70', '75', '85', NULL, NULL, NULL),
(20, 'TĂNG MINH NHẬT', '/image/TĂNG%20MINH%20NHẬT%20HSK4.jpg', '男', 'H41981210000125222 H82632100011100251', 'H45451001540', 'HSK四级', 'Nov 26, 2023', '0', '80', '75', '45', NULL, NULL, NULL),
(21, 'NGUYỄN ĐỨC HÀ THÁI', '/image/NGUYỄN%20ĐỨC%20HÀ%20THÁI%20HSK4.jpg', '男', 'H41900010000651002 H82640012000700041', 'H45400200780', 'HSK四级', 'Nov 26, 2023', '0', '74', '59', '63', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

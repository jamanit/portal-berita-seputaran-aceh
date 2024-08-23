-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 10:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sptrnaceh`
--

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kiviwd.it97@gmail.com', '$2y$10$oQ.3jMSiJ851Ihd4cU1GGeSHGbShOZs9mTIAyp5.EdM/CmZiz60qO', '2023-08-15 08:16:19'),
('kiki@mail.com', '$2y$10$z2CFKFAK12PamfvCPt8tQug3rMiCAfUjKWJ8lWSvP0/GJcIniJZoW', '2023-08-26 22:33:07');

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
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `idp_about` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`idp_about`, `logo`, `about`, `created_at`, `updated_at`) VALUES
(1, '1-LG322.png', 'we32131423', NULL, '2023-09-06 13:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `idp_category` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `order` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`idp_category`, `category_name`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Politik', 'Z', '2023-08-30 07:48:19', '2023-09-09 12:13:56'),
(2, 'Olahraga', 'Z', '2023-08-30 07:48:27', '2023-09-09 12:14:01'),
(8, 'Hiburan', 'Z', '2023-09-02 14:04:54', '2023-09-09 12:13:44'),
(15, 'Pendidikan', 'Z', '2023-09-02 16:44:26', '2023-09-09 12:13:25'),
(21, 'Nanggroe', '1', '2023-09-08 13:34:18', '2023-09-09 12:10:23'),
(22, 'Nasional', '3', '2023-09-08 13:37:25', '2023-09-09 12:13:19'),
(23, 'Dunia', 'Z', '2023-09-08 13:38:11', '2023-09-09 12:13:10'),
(25, 'Hukum', '2', '2023-09-08 13:39:11', '2023-09-09 12:13:02'),
(26, 'Kesehatan', 'Z', '2023-09-08 13:40:03', '2023-09-09 12:12:56'),
(27, 'Wisata', 'Z', '2023-09-08 13:40:15', '2023-09-09 12:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medsos`
--

CREATE TABLE `tb_medsos` (
  `idp_medsos` int(11) NOT NULL,
  `medsos_name` varchar(20) NOT NULL,
  `medsos_address` varchar(50) NOT NULL,
  `medsos_link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medsos`
--

INSERT INTO `tb_medsos` (`idp_medsos`, `medsos_name`, `medsos_address`, `medsos_link`, `created_at`, `updated_at`) VALUES
(1, 'No Telepon', '+6254xxxxxxxxx', '082313123123', '2023-09-04 12:13:47', '2023-09-04 13:27:10'),
(2, 'Email', 'admin@gmail.com', 'https://www.youtube.com/watch?v=U2-2ztK8rz0', '2023-09-04 12:13:56', '2023-09-04 12:25:14'),
(3, 'WhatsApp', '0823xxxxxxxx', '432', '2023-09-04 12:19:39', '2023-09-04 13:01:38'),
(4, 'Facebook', '432', '432', '2023-09-04 13:01:49', '2023-09-04 13:01:49'),
(5, 'Instagram', '321', 'https://www.youtube.com/watch?v=U2-2ztK8rz0', '2023-09-04 13:02:06', '2023-09-04 13:02:06'),
(6, 'Youtube', '432', 'https://www.youtube.com/watch?v=U2-2ztK8rz0', '2023-09-04 13:05:42', '2023-09-04 13:06:03'),
(8, 'Twitter', '4324', '432', '2023-09-05 11:26:27', '2023-09-05 11:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `idp_news` int(32) NOT NULL,
  `idf_category` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`idp_news`, `idf_category`, `photo`, `title`, `content`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(28, 2, '2-NWS244.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID', 'KIVID IT', '2023-08-31 17:12:29', '2023-09-02 13:09:02'),
(29, 2, '2-NWS531621.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 13:01:26', '2023-09-01 15:37:59'),
(30, 2, '1-NWS991.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:16:37', '2023-09-02 13:08:51'),
(31, 2, '2-NWS606.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:16:50', '2023-09-02 12:59:01'),
(32, 2, '2-NWS591.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:27:02', '2023-09-02 12:58:52'),
(33, 2, '2-NWS176.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:27:15', '2023-09-02 12:58:42'),
(34, 2, '2-NWS546.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:27:35', '2023-09-02 12:58:29'),
(35, 2, '1-NWS988.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:27:53', '2023-09-02 12:58:19'),
(36, 2, '1-NWS447.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:28:08', '2023-09-02 12:58:06'),
(37, 2, '2-NWS738.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:28:25', '2023-09-02 12:57:53'),
(38, 2, '2-NWS810652.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', NULL, '2023-09-01 17:28:38', '2023-09-01 17:28:38'),
(39, 2, '2-NWS973.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:46:28', '2023-09-02 12:57:36'),
(40, 2, '2-NWS964804.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-01 17:46:41', '2023-09-02 13:06:26'),
(41, 1, '12-NWS586654.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><a href=\"https://www.dumetschool.com/blog/membuat-multiple-input-data-di-textarea-menggunakan-php\" target=\"_blank\">https://www.dumetschool.com/blog/membuat-multiple-input-data-di-textarea-menggunakan-php</a><br></p>', 'KIVID IT', NULL, '2023-09-02 15:00:13', '2023-09-02 15:00:13'),
(42, 1, '1-NWS266843.jpg', '3Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p>321</p>', 'KIVID IT', 'KIVID IT', '2023-09-02 16:30:33', '2023-09-05 10:24:33'),
(43, 2, '2-NWS314903.jpg', '2Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p>', 'KIVID IT', 'KIVID IT', '2023-09-02 16:39:03', '2023-09-05 10:24:25'),
(44, 8, '8-NWS531033.jpg', '1Lorem ipsum dolor sit amet consectetur adipisicing elit.', '<p><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid saepe ullam nam quisquam eaque maiores, qui recusandae ipsa fugiat veritatis aperiam deleniti in quidem! Ut consequuntur beatae modi iste, quo omnis, distinctio quidem maiores mollitia veritatis doloribus, vitae harum enim deleniti quae molestias esse. Quam tenetur laudantium consequatur doloribus in est minima maxime asperiores quae at alias inventore quos iure adipisci eum accusamus atque hic ut possimus, praesentium cupiditate libero earum commodi deserunt! Nobis sunt harum totam obcaecati, rerum quae minus consequatur velit dignissimos omnis! Autem est numquam, hic quas rerum nemo, quia cum doloribus nostrum delectus, eos voluptatum?</font></p><p><font color=\"#000000\"><br></font></p><p><font color=\"#000000\">Link Sumber :&nbsp;</font><a href=\"http://127.0.0.1:8000/news/edit/44\" target=\"_blank\">http://127.0.0.1:8000/news/edit/44</a></p><div><br></div>', 'KIVID IT', 'KIVID IT', '2023-09-03 05:34:00', '2023-09-06 15:32:19'),
(48, 21, '15-NWS444711495905.jpg', 'Sudah Tiga Kapal Karam, Nelayan Keluhkan Pendangkalan Kuala Krueng Aceh', '<p>BANDA ACEH - (SA) - Panglima Laot Lhok Krueng Aceh, Sofyan Anzib mengeluhkan terkait kuala sungai Krueng Aceh kian mengalami pendangkalan.&nbsp;</p><p>Akibat pendangkalan tersebut, total sudah tiga kapal tenggelam atau karam di kuala tersebut.</p><p>Ia mengatakan, dampak dari pendangkalan kuala Krueng Aceh sedikitnya telah menyebabkan tiga kapal tenggelam.&nbsp;</p><p>Dari tiga kapal tersebut, dua diantaranya kapal nelayan dan satu kapal kayu niaga antar pulau.</p><p>Dikatakan Sofyan, kelompok nelayan di sana juga pernah melakukan upaya pengerukan sedimen pasir laut secara swadaya.&nbsp;</p><p>Namun hal ini tidak dilanjutkan, karena ada peringatan pihak penegak hukum terkait izin pelaksanaan pengerukan.</p><p>\"Kondisi ini menjadi dilematis dan membuat kelompok nelayan kecewa, toh mereka harus tetap melaut dengan merencanakan risiko yang dihadapi,\" kata Sofyan, Jumat (8/9/2023).</p><p><br></p><p>Saat ini sendiri lanjut, para nelayan sudah sangat khawatir dalam mengakses Kuala Krueng Aceh tersebut.&nbsp;</p><p>Pasalnya, kuala itu merupakan satu-satunya akses nelayan di sana untuk pergi melaut.</p><p>\"Dari catatan kami, sedikitnya ada tiga kapal yang tenggelam di bibir kuala Krueng Aceh,\" sebutnya.</p><p>Hal tersebut juga menjadi momok menakutkan bagi para nelayan.</p><p>Ia berharap, perlu ada tindakan dari pihak yang berwenang dalam upaya yang masif menanggapi situasi ini.</p><p><br></p><p>Untuk itu, kelompok nelayan telah melayangkan surat kepada Balai Wilayah Sungai Sumatera-Wilayah I.</p><p>Kondisi pada umumnya setiap kuala sungai kurang lebih relatif sama, tentu ada pendangkalan dari sedimentasi.&nbsp;</p><p>Namun jika dikaji lebih jauh, kondisi terbentuknya sedimentasi di bibir Kuala Krueng Aceh juga dipengaruhi dari proyek pembangunan jetty Pangkalan Pendaratan Ikan (PPI) Lampulo.</p><p><br></p><p>Pasalnya, dampak dari pembangunan break water (tembok laut)&nbsp; PPI Pulo Aceh yang memanjang tersebut mengakibatkan menumpuknya sedimen pasir laut di sisi breakwater pada saat musim timur.&nbsp;</p><p>Pada saat musim barat, sedimen tersebut dibawa masuk sedikit ke dalam kuala, sehingga menyebabkan pendangkalan parah hingga mencapai separuh dari lebar sungai.</p><p>Sebagaimana diketahui Kawasan krueng aceh merupakan kewenangan Balai Wilayah Sungai Sumatera – I.&nbsp;</p><p>Diantara tugasnya antara lain pengelolaan sumber daya air di wilayah sungai dari perencanaan, pelaksanaan konstruksi, operasi dan pemeliharaan dalam rangka konservasi dan pendayagunaan sumber daya air dan pengendalian daya rusak air pada sungai hingga pantai.</p><p>\"Selain kegiatan nelayan, di sepanjang bantaran kuala sungai wilayah Krueng Aceh terdapat juga kepentingan instansi terkait lainnya seperti Pol Air Polda Aceh, PSDKP, Pos TNI AL Lampulo dan juga Makodam Iskandar Muda,\" pungkasnya.</p><p>Sementara itu, Koordinator Jaringan Koalisi untuk Advokasi Laut Aceh (Jaringan KuALA), Gemal Bakri menanggapi hal ini perlu mendapatkan penanganan yang komprehensif.&nbsp;</p><p>Pengelolaan wilayah pesisir dapat dilakukan penyesuaian dalam rencana tata ruang yang ada.</p><p>Beberapa kegiatan telah diupayakan seperti pembersihan sampah dan pengerukan sedimentasi.</p><p>Namun, hal ini dianggap sebagai solusi jangka pendek.</p><p>\"Nelayan mengharapkan ada solusi yang masih dalam mengatasi persoalan ini, sehingga tidak lagi menjadi ancaman setiap tahunnya,\" tutupnya.(*)</p><p><br></p><p>Sumber : serambi<br><a href=\"https://aceh.tribunnews.com/2023/09/08/sudah-tiga-kapal-karam-nelayan-keluhkan-pendangkalan-kuala-krueng-aceh\" target=\"_blank\">https://aceh.tribunnews.com/2023/09/08/sudah-tiga-kapal-karam-nelayan-keluhkan-pendangkalan-kuala-krueng-aceh</a><br></p><p><br></p><p><br></p>', 'KIVID IT', 'KIVID IT', '2023-09-08 13:32:31', '2023-09-08 13:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `idp_visitor` int(32) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `visit` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_visitor`
--

INSERT INTO `tb_visitor` (`idp_visitor`, `ip_address`, `user_agent`, `visit`, `created_at`, `updated_at`) VALUES
(146, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '3', '2023-09-10 08:03:21', '2023-09-10 08:48:48');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$W8VIJbdKELPOVmE.nZvjk.pdpTH.4bqLxgy1l9WBbu13Fnh4eWHyS', 'Ep40DdMExhfd14Ae0JL4ZCKLiO7xRqXd92uEZFCUsp85vMwaA2hIEO31TFzK', '2023-08-05 12:42:16', '2023-09-01 12:58:13'),
(8, 'KIVID IT', 'kivid.it97@gmail.com', NULL, '$2y$10$2.Sb/EXzAHK/y5oHAbAMbOwauolDvQ4C.QpwYa/2s1a18xvK3DExK', NULL, '2023-08-20 00:06:08', '2023-09-01 12:58:49');

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
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`idp_about`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`idp_category`);

--
-- Indexes for table `tb_medsos`
--
ALTER TABLE `tb_medsos`
  ADD PRIMARY KEY (`idp_medsos`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`idp_news`);

--
-- Indexes for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`idp_visitor`);

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
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `idp_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `idp_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_medsos`
--
ALTER TABLE `tb_medsos`
  MODIFY `idp_medsos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `idp_news` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `idp_visitor` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

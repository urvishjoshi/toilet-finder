-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 06:54 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toilet_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapkey` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `name`, `mobileno`, `mapkey`, `created_at`, `updated_at`) VALUES
(1, 'a@b.c', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Urvish Joshi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `country_id`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Vidalborough', 2, 2, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(2, 'Kochmouth', 2, 20, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(3, 'South Nettie', 9, 14, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(4, 'Lake Murielfort', 8, 18, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(5, 'Lake Emanuel', 4, 4, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(6, 'East Rita', 2, 20, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(7, 'Joyceside', 8, 18, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(8, 'South Reuben', 7, 1, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(9, 'South Craig', 7, 1, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(10, 'Lake Napoleon', 6, 15, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(11, 'O\'Haraborough', 2, 2, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(12, 'East Mya', 8, 18, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(13, 'North Loraine', 6, 15, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(14, 'New Myrl', 7, 1, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(15, 'Curtland', 6, 15, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(16, 'Schulistmouth', 7, 9, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(17, 'North Koryhaven', 9, 3, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(18, 'South Anabel', 10, 19, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(19, 'South Zoilaview', 2, 20, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(20, 'Dionfort', 7, 1, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(21, 'Marianeview', 8, 18, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(22, 'Ianside', 1, 12, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(23, 'Lake Bonnieside', 1, 12, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(24, 'Estefaniaport', 5, 17, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(25, 'West Erica', 6, 15, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(26, 'Port Arnulfo', 4, 8, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(27, 'Javonview', 7, 5, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(28, 'Jessieburgh', 5, 17, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(29, 'New Chauncey', 3, 7, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(30, 'South Florianburgh', 6, 15, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(31, 'Tremblayberg', 9, 14, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(32, 'West Cecile', 6, 15, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(33, 'Greenfeldershire', 7, 1, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(34, 'McKenzieborough', 2, 2, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(35, 'Klockobury', 9, 3, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(36, 'Cartwrighthaven', 3, 7, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(37, 'Idellton', 2, 2, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(38, 'Abelardoport', 1, 12, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(39, 'New Leda', 6, 15, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(40, 'West Reynold', 6, 15, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(41, 'Lake Verona', 3, 16, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(42, 'New Logan', 9, 3, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(43, 'Eduardoport', 2, 2, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(44, 'New Floymouth', 3, 16, '2020-05-09 15:01:53', '2020-05-09 15:01:53'),
(45, 'South Garnet', 9, 3, '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(46, 'Hayleetown', 2, 20, '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(47, 'Kyleeport', 2, 2, '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(48, 'New Carlotta', 6, 15, '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(49, 'East Godfrey', 6, 15, '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(50, 'Beerberg', 3, 16, '2020-05-09 15:01:54', '2020-05-09 15:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Jamaica', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(2, 'New Caledonia', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(3, 'Cote d\'Ivoire', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(4, 'French Southern Territories', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(5, 'Togo', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(6, 'New Caledonia', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(7, 'Mexico', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(8, 'United States Minor Outlying Islands', '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(9, 'Bangladesh', '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(10, 'Bosnia and Herzegovina', '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(11, 'Hungary', '2020-05-13 02:58:14', '2020-05-13 02:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feedbacker_id` bigint(20) UNSIGNED NOT NULL COMMENT 'id of owner/user',
  `feedbacker_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1-Owner,2-User',
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedbacker_id`, `feedbacker_type`, `subject`, `desc`, `created_at`, `updated_at`) VALUES
(1, 10, '2', 'Doloremque libero quia suscipit porro nostrum officiis sequi.', 'Sed sint aspernatur aut animi eos. Sint fugit ut eligendi pariatur sed. Animi ut quia illo error.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(2, 1, '1', 'Sed vel iste tempore delectus eaque.', 'Accusantium et asperiores non natus. Neque aut veniam reprehenderit deleniti molestiae ut. At consequuntur quia maiores voluptatibus sint voluptate iusto quia.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(3, 10, '1', 'Dignissimos est reiciendis modi totam enim nisi ut.', 'Dolore sequi necessitatibus sapiente in eveniet aliquid molestiae. Voluptate optio autem maxime. Qui alias repellat consequuntur ducimus.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(4, 6, '1', 'Nobis rerum consequatur quia numquam est.', 'Pariatur quibusdam maxime veritatis ipsam dolor a. Nisi beatae reiciendis ea placeat et.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(5, 6, '2', 'Architecto qui voluptate odio sit ducimus velit.', 'Voluptatem labore optio quae impedit enim ut. Labore officia ratione quidem dolor enim enim. Fuga earum eligendi quia est libero aliquid.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(6, 4, '2', 'Sunt beatae omnis rem id sint.', 'Voluptatem quia est tempora earum magnam. Vel ducimus aliquam beatae qui qui a sequi. Numquam voluptas quam dolores eum amet rerum nulla. Qui officia odio ad molestias commodi deleniti quia.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(7, 6, '1', 'Sed eius ut necessitatibus doloremque dignissimos illo voluptas.', 'Voluptas molestias quia exercitationem assumenda similique qui cumque. Deserunt nihil praesentium pariatur non.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(8, 15, '2', 'Ut voluptatibus velit ea provident.', 'Est est est vel quia. Quisquam sed iure deserunt qui id est ut. Iusto ut aperiam et placeat quia qui. Necessitatibus ut tempora eum.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(9, 7, '2', 'Voluptatem quo perspiciatis reprehenderit officiis alias.', 'Dolores eos exercitationem doloremque placeat omnis. Officiis incidunt neque dolores voluptas mollitia minus dolor nulla. Nam earum perspiciatis quae doloribus possimus sit.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(10, 6, '1', 'Assumenda non nihil in et iure provident provident.', 'Id est consequatur voluptatum vel iure tempore culpa maxime. Omnis velit laudantium earum tenetur. Quam sunt qui et nam voluptas. Vel vel sequi aut quod beatae impedit ipsam.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(11, 10, '1', 'Voluptate qui cumque quod nam quasi quibusdam veniam.', 'Enim ut voluptas voluptate consectetur et. Eligendi deserunt hic rem provident eum veniam. Et enim dolore asperiores. Consequatur ipsum quas voluptate pariatur unde fugiat.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(12, 3, '1', 'Mollitia perferendis eum eos quisquam voluptatem at eligendi quia.', 'Quibusdam qui qui quod. Est ut ut temporibus voluptatem explicabo voluptatum et. Minus unde voluptatem est dolorem esse. Veritatis rerum ipsum ut dicta.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(13, 9, '1', 'Ipsa dolor et laboriosam dolorum veritatis tenetur est.', 'Iusto modi et doloribus ipsa suscipit quia. Et molestias eos ipsum. Dolorem atque optio nihil quo facilis. Libero consequuntur nostrum voluptatibus earum blanditiis.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(14, 10, '2', 'Odio dolore eum harum.', 'Illo maiores rerum perferendis totam nisi. Fugiat quidem doloribus ut eos odit. Doloremque suscipit voluptatem suscipit et autem.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(15, 7, '1', 'Asperiores ullam quis voluptas impedit.', 'In et expedita itaque voluptates minus id. Aut dolore eos impedit cumque nulla. Debitis omnis rerum iste magnam commodi non. Magnam ullam tempora sunt enim aut ut.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(16, 8, '1', 'Molestiae ipsum sint atque consequuntur optio quis nihil.', 'Suscipit et odio pariatur dolores. Tempora atque deleniti quaerat voluptatum deserunt. Aut fugit blanditiis voluptatem beatae aut consequatur.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(17, 9, '2', 'Et autem et perferendis veniam odit fugiat accusamus.', 'Culpa et in eligendi sit qui. Exercitationem nostrum ullam repudiandae consectetur veritatis. Odit aut dolorem numquam cum.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(18, 8, '2', 'Maxime id id qui qui rem in atque quo.', 'Natus autem voluptatum dolorum et. Quis iure distinctio accusamus deserunt neque. Quos pariatur earum accusantium et. Corporis omnis quis doloremque beatae voluptate eveniet.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(19, 9, '1', 'Ipsa natus dolor quae consequatur asperiores eius reprehenderit vel.', 'Iusto corrupti maxime quisquam harum enim ex. Ipsa deserunt nulla quis distinctio. Assumenda laborum deleniti illo consequuntur.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(20, 6, '2', 'Ratione fugit maxime non pariatur similique.', 'Provident laborum recusandae debitis dolorem. Tempora nostrum qui itaque omnis magnam quos. Nobis omnis hic omnis ut placeat itaque. Fuga reprehenderit qui modi ipsam eius vero.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(21, 10, '2', 'Eum qui minima necessitatibus non sapiente aut delectus.', 'Nulla officiis quod quis provident delectus. Laboriosam nobis est nobis aut qui saepe qui.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(22, 5, '1', 'Saepe facere deleniti non voluptatum.', 'Sit nihil est quis excepturi ut. Non nulla consectetur vero distinctio. Similique esse laboriosam totam labore velit. Molestiae expedita tenetur eveniet quas nihil.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(23, 2, '2', 'Animi ut enim explicabo cupiditate consequuntur distinctio dicta nihil.', 'Ratione nam laudantium qui. Sit enim nemo tempore aut. Laboriosam rerum quaerat reprehenderit quo commodi. In amet voluptatum iure architecto aut similique corrupti qui.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(24, 20, '2', 'Libero ipsum inventore ut illum consectetur maxime.', 'Velit labore repellat amet ullam. Praesentium dolorem illum repellendus rerum impedit velit. Quibusdam omnis repellendus reiciendis et. Assumenda fuga nihil impedit quos ex.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(25, 1, '1', 'Aut vitae qui accusamus corporis earum consequuntur rem.', 'Porro vel placeat est. Ab et numquam veniam ipsum. Odit est officia consequuntur nam.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(26, 13, '2', 'Aut quia nihil impedit dolore temporibus numquam facilis.', 'Debitis commodi neque enim veniam qui occaecati. Rem necessitatibus numquam perferendis qui perferendis maxime non. Maxime repellendus ea eum accusantium.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(27, 3, '2', 'Consectetur totam fuga quas laborum.', 'Ducimus illum laudantium numquam omnis distinctio. Culpa iure quo sunt quis id consectetur non sapiente. Libero cum autem numquam qui quo atque.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(28, 2, '2', 'Nesciunt sequi odio quo et.', 'Et autem consequatur veritatis. Quia accusantium velit non dolor optio non. Et molestiae ipsum delectus libero et autem aut.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(29, 3, '1', 'Aspernatur dolorum culpa enim occaecati non ipsa perferendis.', 'Ipsam a rerum vel quidem ducimus. Sint sit nisi aut. Consequatur consequatur ipsa reiciendis dolores non. Doloremque velit quod ipsam non.', '2020-05-09 15:02:01', '2020-05-09 15:02:01'),
(31, 8, '2', 'Aut aliquid voluptate eos incidunt velit.', 'Sed maiores praesentium qui omnis consequatur qui. Molestiae quos molestiae est ullam deleniti. Cupiditate rerum rerum non molestiae autem earum. Nisi omnis maxime fugiat occaecati.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(32, 4, '1', 'Nihil eaque sit tempora aut hic optio qui.', 'Nobis ad fuga in. Omnis perferendis et eius et explicabo sunt ut. Ab at reiciendis perferendis.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(33, 15, '1', 'Iste et dolorum id veritatis repellendus voluptatum itaque.', 'Sint rem id mollitia aut est minima fugiat. Nesciunt voluptatem sed inventore. Quis ut consequuntur delectus suscipit.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(34, 14, '2', 'Ea voluptas et alias nulla.', 'Expedita ipsum delectus autem autem autem. Cumque numquam sed amet magni eveniet.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(35, 6, '2', 'Rerum iste perspiciatis aperiam sit voluptates placeat rerum.', 'Quasi officia eos dolores deserunt quas. Veniam commodi alias quia sed natus sed. Accusantium a voluptates ut magnam ut. Rerum repudiandae similique quae dolorum. Nihil exercitationem et et ab et.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(36, 3, '2', 'Numquam sunt voluptatem tempora.', 'Illo ut nam molestiae non aut. Ipsum provident rerum facere odit labore expedita non. Repellendus velit recusandae tempora mollitia sed. Sit dolores qui aut dolor.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(37, 11, '1', 'Cum rerum possimus recusandae iure eum.', 'Saepe ratione inventore ducimus rerum. Temporibus quia et occaecati repudiandae ratione praesentium magni. Est id quo repellendus ullam hic quia sed. Perferendis nihil eaque eligendi incidunt.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(39, 12, '1', 'Quidem illum porro animi sunt porro nihil dolorem.', 'Consequatur maxime sunt error qui non. Occaecati est architecto quia. Aliquam qui totam est reprehenderit perspiciatis excepturi ut.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(40, 1, '1', 'Adipisci et omnis facilis autem qui similique eos.', 'Nemo libero tempora quos velit molestiae molestiae. Ratione corporis expedita nisi dolores voluptatum culpa adipisci saepe.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(41, 8, '2', 'Et labore sint aliquam.', 'Deleniti labore aut odio numquam ullam. Mollitia veritatis non blanditiis ut libero. Ipsa voluptatem eligendi quisquam consectetur reprehenderit reiciendis.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(42, 5, '2', 'Dolore consequatur in velit officia.', 'Id eum velit et. Aut ut a illo delectus voluptatem est. Et qui voluptatibus quia quo sapiente. Non dicta rerum asperiores beatae explicabo quos.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(43, 8, '1', 'Molestiae ut voluptatibus necessitatibus assumenda non quos harum.', 'Voluptatem nostrum tempora dolore et consequatur. Et ipsa voluptatem totam amet. Architecto praesentium dolor aut unde molestias maxime.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(44, 5, '2', 'Eaque culpa maxime blanditiis fuga.', 'Occaecati quam optio occaecati animi. Pariatur voluptate quaerat temporibus sint et est. Est molestiae corporis unde quo. Doloremque dolore velit et.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(45, 8, '1', 'Ut qui eaque eum autem reprehenderit sequi totam.', 'Sed doloribus temporibus blanditiis rerum. Sed iure iste rerum ab et asperiores numquam voluptatem. Illo non qui aliquid eos delectus rerum. Illum nam et ex rem perspiciatis quaerat.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(46, 10, '2', 'Repudiandae alias amet nostrum.', 'Qui qui quibusdam ut tempora excepturi. Consequatur aut aspernatur non et reprehenderit vitae illo. Odit modi fugit qui. Non sit esse rerum eos aliquam reiciendis. Assumenda reiciendis ipsam est.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(47, 6, '1', 'Voluptatem perferendis rerum rerum unde.', 'Earum reprehenderit dolorum a sunt nostrum dolorum. Ea minima aspernatur quae ut. Quis recusandae et omnis eveniet error esse odio.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(48, 13, '2', 'Dolore aliquam doloribus eum in voluptatem enim.', 'Praesentium in libero mollitia et deleniti quam. Ea consequatur illo quo. Aperiam adipisci nam nostrum amet est repellendus. Quia qui amet enim illo illum ea.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(49, 8, '2', 'Ipsam magnam ut quae qui nesciunt magnam blanditiis.', 'Consequatur ullam corporis sint officiis vitae laborum neque. Et qui saepe similique voluptates quaerat. Est cum ea est quas cum tempore. Nihil ad ut consequuntur exercitationem.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(50, 3, '1', 'Dolores sed quidem debitis perferendis repudiandae provident.', 'Perspiciatis rerum vitae mollitia sit et qui modi. Voluptatibus rem voluptates quaerat repudiandae. Voluptates odit harum odit nihil provident ut. Aspernatur qui corrupti molestias et laudantium.', '2020-05-09 15:02:02', '2020-05-09 15:02:02'),
(51, 14, '1', 'ha mojj haa', 'hohohohohouppppp', '2020-05-09 18:24:47', '2020-05-09 18:24:47'),
(52, 14, '1', 'qwerh', 'hello this is my feedback', '2020-05-09 18:32:46', '2020-05-09 18:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(15, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(16, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(17, '2016_06_01_000004_create_oauth_clients_table', 1),
(18, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(19, '2020_04_16_175942_create_toilet_owners_table', 1),
(20, '2020_04_16_180009_create_admins_table', 1),
(21, '2020_04_25_130804_create_countries_table', 1),
(22, '2020_04_25_130827_create_states_table', 1),
(23, '2020_04_25_130844_create_cities_table', 1),
(24, '2020_04_25_140136_create_toilet_infos_table', 1),
(25, '2020_04_25_140849_create_toilet_usage_infos_table', 1),
(26, '2020_04_25_141635_create_ratings_table', 1),
(27, '2020_04_30_074530_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `toilet_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `owner_id`, `toilet_id`, `user_id`, `rating`, `desc`, `created_at`, `updated_at`) VALUES
(2, 8, 6, 13, '3', 'Dolorem aut perspiciatis aut nihil nihil. Mollitia sit reiciendis distinctio debitis velit optio. Earum exercitationem dignissimos voluptas culpa magni ut. Voluptas nemo sit dolorem architecto quis.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(3, 5, 18, 6, '5', 'Aperiam veniam eum est quia. Aut impedit alias dolor praesentium nihil reprehenderit. Sit voluptatem libero animi voluptas itaque rem.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(4, 1, 20, 3, '4', 'Distinctio dignissimos est enim dolor itaque quis corporis fugiat. Necessitatibus id facere minima facere. Unde totam ipsum excepturi praesentium aut qui.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(5, 6, 14, 13, '2', 'Beatae a quo consequuntur sint. Maxime eligendi quis praesentium eum non aliquam.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(6, 4, 11, 4, '5', 'Laudantium quia aliquid quis sit quis. Sint perspiciatis praesentium non exercitationem. Ut temporibus rem vero repellat. Doloremque nihil voluptatibus fugiat illo. Sint recusandae ullam dolorem magnam magnam.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(8, 2, 11, 1, '5', 'Enim alias totam tempora ut fugit molestias dicta non. Sed optio ipsam est consequatur aut. Porro facere iusto porro rerum quis.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(9, 6, 2, 3, '5', 'Dolorem distinctio provident aliquid ut soluta at quaerat. Cumque soluta mollitia aspernatur distinctio qui. Voluptate provident sunt odio enim asperiores provident. Voluptatem ad facilis dolores repellendus quo eos. Ab vero sit distinctio odio atque.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(10, 5, 4, 17, '5', 'At alias totam sequi voluptas eos qui sed. Aliquam dolor ea optio perspiciatis ducimus velit accusantium. Ullam quia voluptas debitis ratione autem minus.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(13, 5, 13, 19, '4', 'Tenetur explicabo molestias in laboriosam. Rerum officia eos iste quidem officia. Sapiente optio itaque nihil sed harum non perferendis.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(14, 4, 2, 10, '1', 'Veritatis iusto qui laborum dolores cumque quibusdam repellat. Autem qui doloremque laudantium quia. Quis quisquam fugit nulla ab. Deserunt voluptas fuga id ut accusantium.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(16, 4, 1, 3, '2', 'Odio qui omnis amet numquam iusto provident. Quisquam ipsum accusantium tenetur pariatur accusantium magnam officiis. Doloribus consequatur soluta velit animi.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(17, 7, 6, 9, '5', 'Quo et possimus aut nisi provident temporibus quia. Id aliquid ducimus quia excepturi esse illum. Dignissimos ullam voluptatum sit corrupti.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(18, 8, 19, 8, '1', 'Molestiae ipsam quam et nihil. Et ipsum neque rerum culpa animi et ut. Maiores accusamus accusantium voluptatum omnis. Rerum tenetur sequi animi repudiandae corrupti nihil dicta.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(20, 8, 7, 7, '4', 'Molestias labore ratione aliquam. Cumque similique ad quidem qui aut non. Officiis veniam voluptatum rem adipisci esse qui quis aliquam.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(21, 3, 13, 4, '2', 'Dolores distinctio reiciendis quis iure sunt. Mollitia veritatis et architecto et voluptatem est. Ullam vero id et officia esse est reprehenderit. Sed deserunt accusamus dolor sequi nostrum libero. Dolorem alias tenetur sed quo quidem consequatur quod.', '2020-05-09 15:01:58', '2020-05-09 15:01:58'),
(22, 1, 16, 13, '1', 'Dolorem nostrum temporibus autem explicabo. Consequatur totam enim ut aliquid totam rerum facilis nemo. Cum non et fuga quaerat sed omnis.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(23, 5, 13, 2, '4', 'Enim quasi mollitia hic et maiores eum iste sed. Quisquam dolores laboriosam ducimus eum dignissimos est dolorum. Quia similique voluptatem unde maxime veritatis. Enim recusandae sit reprehenderit id sint eos architecto.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(24, 5, 15, 13, '2', 'Sed et nihil reprehenderit officia accusantium vero eum culpa. Dolorem tempore aut hic consequuntur. Repudiandae ab est alias voluptas velit.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(25, 2, 6, 4, '5', 'A illum est maxime debitis qui reiciendis. Vel ipsa et harum consectetur tempora. Et omnis nemo similique minus nostrum.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(26, 5, 2, 2, '2', 'Odit amet ea vel animi omnis in. Maxime autem ipsum officia. Est deleniti incidunt provident explicabo quia porro ut sapiente. Magnam dolor consequatur quod nostrum qui unde aut rerum.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(28, 3, 2, 19, '4', 'Illum ipsa sit omnis eos ducimus voluptatum officia. Possimus saepe vel magnam in porro similique et eos. Quia ea consequatur rem consequatur suscipit fugiat. Eum provident consequatur unde fugit illo vel quam.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(29, 8, 9, 6, '3', 'Delectus molestiae quas voluptates iusto. Veritatis molestiae tenetur qui vel soluta cupiditate ullam et. Repudiandae fugit suscipit quaerat. Quaerat enim ea molestiae aut ut magni. Sint vel quaerat quo.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(30, 9, 6, 8, '2', 'Ut rem doloremque occaecati sint facilis. Aperiam quisquam placeat vel voluptate dolorem dignissimos.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(31, 1, 12, 11, '1', 'Harum sed et reiciendis repellendus non aut. Pariatur cumque beatae qui est. Perspiciatis occaecati explicabo quia sapiente.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(32, 4, 4, 10, '1', 'Nisi rem tempore et vitae harum et. Quidem recusandae repellendus pariatur aut et sit. Nihil sunt necessitatibus eveniet deleniti quasi quia cupiditate. Asperiores fuga culpa quaerat laborum omnis.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(34, 6, 9, 15, '1', 'Ut sequi voluptatum pariatur molestiae quo dolor non. Blanditiis doloribus nostrum harum aut. Dolorum exercitationem nihil et in.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(35, 5, 20, 1, '3', 'Quia ut at minus voluptates et modi. Quis nemo et sunt nihil in. Dicta nulla sed at quis. Omnis ut non dolor sint adipisci nam quia.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(36, 2, 11, 17, '1', 'Odio sed unde itaque aliquam rerum in. Natus qui doloribus velit aut. Quo magnam sapiente officia illum magni eius.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(37, 8, 12, 17, '5', 'Quos et maiores itaque. Ea qui saepe quidem nemo sint est. Quae consectetur soluta vitae. Velit perspiciatis exercitationem molestiae voluptates officia et commodi.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(39, 2, 5, 7, '3', 'Optio quaerat numquam beatae. Iusto omnis odio et non. Nobis ex et veritatis nam voluptatem nostrum nulla voluptatibus.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(40, 1, 4, 17, '4', 'Nihil autem quod tenetur. Iste dolorem explicabo recusandae sed mollitia. Vero illo aliquam et quibusdam ut illum.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(41, 4, 12, 17, '4', 'Et voluptatum similique nulla rerum facilis nulla. Voluptate occaecati temporibus consequatur delectus occaecati aliquid voluptatum.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(42, 9, 19, 14, '4', 'Fuga non quaerat delectus omnis. Esse quis dolorem natus nobis sed repellendus perspiciatis. Quis sint est ea qui.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(43, 5, 17, 3, '4', 'Sunt accusantium laboriosam laudantium modi. Recusandae optio asperiores laudantium et. Sint iure rem quo quis quia id quae voluptates. Voluptas excepturi aspernatur sint quia.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(45, 9, 9, 5, '1', 'Dolores ut fugit voluptatem voluptatum tenetur corporis. Quidem fugit et ex autem. Est officia quia ad totam facilis sed aut. Distinctio rem omnis saepe architecto illo dolores deserunt.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(46, 7, 19, 1, '3', 'Et saepe similique aut vel sit porro tempore. Enim ut quia vel eius iste. Molestiae repudiandae commodi temporibus sequi necessitatibus. Labore natus maiores voluptate eum sapiente rerum delectus.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(47, 2, 14, 16, '4', 'Aut nobis ab quos dolorem fuga. Id vel voluptatem non debitis nobis qui at. Quaerat accusamus incidunt deleniti sed saepe.', '2020-05-09 15:01:59', '2020-05-09 15:01:59'),
(48, 5, 1, 14, '3', 'Provident fugiat ea non quo sequi quia. Quod corporis sit qui reprehenderit neque. Eveniet distinctio dolorem earum. Omnis nihil temporibus officia dolor. Dicta a ipsum quo et magni repellendus et.', '2020-05-09 15:02:00', '2020-05-09 15:02:00'),
(49, 3, 1, 12, '5', 'Nobis neque molestiae consectetur quaerat fugiat mollitia. Amet veniam voluptas autem id repudiandae magnam. Recusandae molestiae error sunt nihil vel eum.', '2020-05-09 15:02:00', '2020-05-09 15:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Tennessee', 7, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(2, 'Colorado', 2, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(3, 'Nevada', 9, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(4, 'Virginia', 4, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(5, 'Texas', 7, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(6, 'South Dakota', 4, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(7, 'Kentucky', 3, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(8, 'Vermont', 4, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(9, 'Missouri', 7, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(10, 'Georgia', 4, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(11, 'Utah', 10, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(12, 'Tennessee', 1, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(13, 'California', 10, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(14, 'New Hampshire', 9, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(15, 'District of Columbia', 6, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(16, 'Maryland', 3, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(17, 'Nebraska', 5, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(18, 'Pennsylvania', 8, '2020-05-09 15:01:51', '2020-05-09 15:01:51'),
(19, 'Oklahoma', 10, '2020-05-09 15:01:52', '2020-05-09 15:01:52'),
(20, 'Indiana', 2, '2020-05-09 15:01:52', '2020-05-09 15:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `toilet_infos`
--

CREATE TABLE `toilet_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `toilet_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `complex_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `toilet_lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet_lng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT '0-Female,1-Male,2-Both',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-Not Active,1-Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toilet_infos`
--

INSERT INTO `toilet_infos` (`id`, `owner_id`, `toilet_name`, `price`, `complex_name`, `address`, `city_id`, `state_id`, `country_id`, `toilet_lat`, `toilet_lng`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'molestiae', 2, 'eius', '87651 Kling Estate Apt. 618', 8, 5, 7, '6', '56', '2', '0', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(2, 9, 'soluta', 0, 'id', '22416 Samson Plaza', 36, 16, 8, '36', '41', '0', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(4, 2, 'nostrum', 0, 'doloribus', '625 Nedra Inlet Apt. 646', 35, 14, 3, '2', '25', '2', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(5, 9, 'non', 2, 'repudiandae', '7471 Hirthe Haven', 5, 19, 1, '71', '66', '0', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(6, 9, 'ea', 8, 'quaerat', '137 Hermann Row', 48, 13, 8, '55', '9', '1', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(7, 5, 'hic', 3, 'ab', '6708 Price Row', 27, 17, 4, '74', '25', '1', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(9, 6, 'accusamus', 8, 'quia', '32484 Arch Wall', 2, 14, 6, '78', '38', '1', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(10, 6, 'sunt', 5, 'ut', '79878 Natalia Route Apt. 965', 32, 17, 1, '56', '64', '0', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(11, 3, 'doloribus', 0, 'aut', '2811 Roy Camp Suite 585', 32, 5, 1, '26', '31', '1', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(12, 5, 'magni', 2, 'ipsum', '20720 Swift Forge Suite 672', 12, 12, 1, '18', '79', '0', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(13, 7, 'ullam', 8, 'aut', '72502 Leonie Meadow', 18, 10, 7, '47', '13', '1', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(14, 9, 'eius', 5, 'ut', '672 Jerde Isle', 15, 9, 8, '13', '8', '1', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(15, 4, 'officiis', 5, 'deleniti', '3215 Kasandra Manors', 11, 8, 9, '39', '56', '1', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(16, 2, 'quia', 2, 'est', '8745 Dulce Mountains', 38, 7, 7, '55', '52', '1', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(17, 9, 'laudantium', 6, 'quo', '617 Hammes Loaf Apt. 252', 26, 10, 2, '24', '28', '1', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(18, 5, 'voluptatibus', 8, 'eaque', '3998 Sigrid Villages', 44, 14, 4, '43', '70', '0', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(19, 4, 'eaque', 1, 'sit', '6777 Nolan Gateway', 33, 1, 1, '13', '98', '0', '1', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(20, 3, 'voluptas', 0, 'autem', '74458 Wilber Streets Apt. 412', 10, 14, 3, '2', '36', '2', '0', '2020-05-09 15:01:55', '2020-05-09 15:01:55'),
(21, 2, 'New toilet', 5, 'qwefgnm', 'wd', 16, 9, 7, NULL, NULL, '2', '1', '2020-05-09 15:04:29', '2020-05-09 15:04:29'),
(22, 11, 'wqedfbn', 2, 'wedn', 'sdfb', 40, 15, 6, '48.78907674130463', '2.457052219022655', '2', '1', '2020-05-10 13:59:23', '2020-05-10 14:11:40'),
(23, 11, 'WADGXFCG', 1, 'szdxvcbvnm', 'qszdfc', 24, 17, 5, NULL, NULL, '2', '1', '2020-05-13 04:17:00', '2020-05-13 04:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `toilet_owners`
--

CREATE TABLE `toilet_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','-1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-Not Active,1-Active',
  `auto_allocate` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0-Off,1-On',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toilet_owners`
--

INSERT INTO `toilet_owners` (`id`, `email`, `password`, `name`, `mobileno`, `rating`, `status`, `auto_allocate`, `created_at`, `updated_at`) VALUES
(1, 'leonard.mckenzie@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Prof. Muhammad Bednar', '9854304031', '4', '1', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(2, 'ischimmel@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Dr. Nora Altenwerth', '7721813555', '4', '1', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(3, 'corkery.alexandria@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Jodie Stiedemann', '7212369467', '5', '1', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(4, 'frami.tierra@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Sabryna Ruecker', '9905835294', '2', '-1', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(5, 'dspencer@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Giovanni Buckridge', '8416270995', '0', '1', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(6, 'darian93@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Nels Walsh', '8817797520', '2', '1', '0', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(7, 'predovic.dax@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Evelyn Jerde', '9884542695', '2', '-1', '0', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(8, 'isaac80@example.org', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Akeem Lakin', '8535489631', '5', '-1', '1', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(9, 'lesch.alexis@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Raleigh Trantow', '9568322124', '5', '0', '0', '2020-05-09 15:01:54', '2020-05-09 15:01:54'),
(11, 'a@b.c', '$2y$10$kLpvFjjzg9OA0cmkxkC2TuNYeoz5/.Zx2Qr4qgGXF2IImCpS6W23K', 'abc', '9999999999', NULL, '1', '0', '2020-05-09 17:54:18', '2020-05-18 17:33:16'),
(12, 'a@b.d', '$2y$10$6aHrlrMbupaeBu00vg/MsuwkiKimuYtuwB1dy/vctCjJsRwaMofUO', 'abc', '8888888888', NULL, '0', '1', '2020-05-09 18:05:17', '2020-05-09 18:05:17'),
(13, 'keyur@yopmail.com', '$2y$10$BRpMhb1un2NnnHcCN/GpVeYrCmelQRPSS5GLSiiyiHYBLDQbq1x22', 'abc', '5555555555', NULL, '0', '1', '2020-05-09 18:13:57', '2020-05-09 18:13:57'),
(14, 'ashfakjh@gmail.com', '$2y$10$TrfB1rnFY/pZMC.TjG/GZOt8erTLJf7qJ8p.LKnh8kkbH0YJ7kBw6', 'abc', '8888888889', NULL, '0', '1', '2020-05-09 18:15:32', '2020-05-09 18:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `toilet_usage_infos`
--

CREATE TABLE `toilet_usage_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `toilet_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('0','1','-1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-Pending,1-Done,-1:Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toilet_usage_infos`
--

INSERT INTO `toilet_usage_infos` (`id`, `transaction_id`, `owner_id`, `user_id`, `toilet_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '104939', 2, 1, 18, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(3, '535831', 1, 12, 18, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(4, '314678', 9, 7, 16, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(5, '643125', 8, 1, 17, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(6, '181416', 6, 11, 2, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(7, '918078', 8, 15, 1, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(8, '929095', 5, 6, 7, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(9, '11297', 4, 17, 14, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(10, '453475', 8, 16, 17, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(11, '581529', 2, 19, 12, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(12, '299937', 4, 6, 12, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(13, '113965', 9, 8, 4, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(14, '427474', 3, 3, 10, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(15, '848288', 7, 10, 13, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(16, '157195', 1, 15, 6, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(18, '263217', 3, 17, 9, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(22, '597923', 9, 20, 11, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(23, '277781', 6, 17, 5, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(24, '443685', 9, 8, 16, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(25, '947466', 8, 3, 5, '0', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(26, '851283', 9, 2, 9, '1', '2020-05-09 15:01:56', '2020-05-09 15:01:56'),
(27, '772107', 9, 4, 14, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(28, '480746', 8, 8, 6, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(31, '613999', 6, 17, 11, '1', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(32, '561477', 9, 6, 20, '1', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(35, '822618', 6, 9, 19, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(36, '290157', 9, 2, 5, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(38, '759447', 6, 17, 5, '1', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(39, '983676', 5, 15, 12, '1', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(40, '232557', 8, 3, 10, '1', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(43, '19016', 4, 17, 10, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(46, '533153', 1, 12, 4, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(48, '838769', 1, 20, 19, '0', '2020-05-09 15:01:57', '2020-05-09 15:01:57'),
(49, '272368', 9, 3, 12, '1', '2020-05-09 15:01:57', '2020-05-09 15:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `mobileno`, `gender`, `age`, `created_at`, `updated_at`) VALUES
(1, 'herman.hubert@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Dr. Barton Gulgowski III', '7402034970', '0', '57', '2020-05-09 15:01:49', '2020-05-09 15:01:49'),
(2, 'vella.pacocha@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Dagmar Ebert Sr.', '7074012284', '0', '38', '2020-05-09 15:01:49', '2020-05-09 15:01:49'),
(3, 'sibyl.fadel@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Eladio Konopelski', '7794256249', '0', '59', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(4, 'harvey.tyra@example.org', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Damion Dickinson', '8889262320', '1', '28', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(5, 'smitham.heaven@example.org', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Kaylin Ziemann', '9240776428', '1', '23', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(6, 'nparisian@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Shaina Johnston', '9792791984', '1', '78', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(7, 'broderick.lubowitz@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Tod Cassin', '9160215864', '0', '46', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(8, 'zhickle@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Pearl Hansen', '7895351946', '1', '65', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(9, 'marcos70@example.org', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Chadd Windler', '8528585253', '1', '35', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(10, 'pcremin@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Dr. Jo Auer', '6951849001', '1', '25', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(11, 'bhills@example.org', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Lionel Schroeder', '9993032389', '1', '68', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(12, 'hand.annamarie@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Prof. Wilfrid Wolff II', '9258975868', '0', '42', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(13, 'rbogisich@example.org', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Douglas Sauer II', '7792454559', '1', '46', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(14, 'alec.waelchi@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Sallie Mayer', '8906368553', '1', '80', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(15, 'zwhite@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Ms. Alva Schneider', '8513709969', '1', '68', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(16, 'kuhlman.elaina@example.com', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Marie Haag', '9448371055', '1', '47', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(17, 'elizabeth85@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Cary McKenzie PhD', '8455707624', '0', '39', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(19, 'jennyfer.farrell@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Jo Gerhold', '9148592649', '0', '67', '2020-05-09 15:01:50', '2020-05-09 15:01:50'),
(20, 'bconn@example.net', '$2y$10$mZR9Jo7H9mEqCP1Jq8OJlu8k.3nQa3LT8I545Kda5Qp43rGYEtrZC', 'Daisha Monahan', '8497794785', '0', '56', '2020-05-09 15:01:50', '2020-05-09 15:01:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_mobileno_unique` (`mobileno`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_owner_id_foreign` (`owner_id`),
  ADD KEY `ratings_toilet_id_foreign` (`toilet_id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `toilet_infos`
--
ALTER TABLE `toilet_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `toilet_infos_owner_id_foreign` (`owner_id`),
  ADD KEY `toilet_infos_city_id_foreign` (`city_id`),
  ADD KEY `toilet_infos_state_id_foreign` (`state_id`),
  ADD KEY `toilet_infos_country_id_foreign` (`country_id`),
  ADD KEY `toilet_infos_price_index` (`price`);

--
-- Indexes for table `toilet_owners`
--
ALTER TABLE `toilet_owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `toilet_owners_email_unique` (`email`),
  ADD UNIQUE KEY `toilet_owners_mobileno_unique` (`mobileno`);

--
-- Indexes for table `toilet_usage_infos`
--
ALTER TABLE `toilet_usage_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `toilet_usage_infos_transaction_id_unique` (`transaction_id`),
  ADD KEY `toilet_usage_infos_owner_id_foreign` (`owner_id`),
  ADD KEY `toilet_usage_infos_user_id_foreign` (`user_id`),
  ADD KEY `toilet_usage_infos_toilet_id_foreign` (`toilet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobileno_unique` (`mobileno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `toilet_infos`
--
ALTER TABLE `toilet_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `toilet_owners`
--
ALTER TABLE `toilet_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `toilet_usage_infos`
--
ALTER TABLE `toilet_usage_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `toilet_owners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_toilet_id_foreign` FOREIGN KEY (`toilet_id`) REFERENCES `toilet_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `toilet_infos`
--
ALTER TABLE `toilet_infos`
  ADD CONSTRAINT `toilet_infos_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `toilet_infos_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `toilet_infos_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `toilet_owners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `toilet_infos_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `toilet_usage_infos`
--
ALTER TABLE `toilet_usage_infos`
  ADD CONSTRAINT `toilet_usage_infos_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `toilet_owners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `toilet_usage_infos_toilet_id_foreign` FOREIGN KEY (`toilet_id`) REFERENCES `toilet_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `toilet_usage_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

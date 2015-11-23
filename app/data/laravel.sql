-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-11-23 21:03:53
-- 服务器版本: 5.5.46-0ubuntu0.14.04.2
-- PHP 版本: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `laravel`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Dr.', 'Quis saepe quod voluptatem dolorem id dolores non. Quam eius nihil nihil quia. Dicta maiores dolor neque illum.', '1988-02-14 03:27:40', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(2, 'Ms.', 'Illum incidunt qui praesentium consequatur autem cumque. Sed sit dolores dolores suscipit. Aut est eligendi sint impedit. Reprehenderit a et nemo voluptates iusto dicta architecto.', '2009-07-02 03:42:53', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(3, 'Mr.', 'Quia eum ducimus et non occaecati et perspiciatis. Quia quo explicabo omnis qui. Minima dolor eaque vel aliquid animi voluptatum.\nUt a omnis sed sunt harum quam. Ut ut necessitatibus est expedita.', '2002-01-05 05:41:10', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(4, 'Prof.', 'Doloremque deserunt qui at numquam quis quo. In et doloribus placeat autem ducimus veniam. Quaerat consequatur et consequatur numquam. Nostrum et quasi et sequi error nam.', '2010-09-01 05:16:10', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(5, 'Mr.', 'Et repellendus harum consequuntur ipsam qui iste quos. Voluptatem dolorum incidunt ab assumenda. Dolore voluptas aperiam aliquid voluptas eveniet earum quo.', '1994-09-28 00:56:06', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(6, 'Prof.', 'Occaecati deleniti at enim corrupti. Saepe dolor inventore error doloremque accusantium perspiciatis quos. Sequi cumque praesentium est omnis. Fugit voluptatem ut eius a.', '1989-03-06 00:28:20', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(7, 'Ms.', 'Aut pariatur reiciendis error et. Est asperiores beatae atque culpa animi magni. Voluptas vel quasi dignissimos deleniti.', '1998-10-12 11:28:20', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(8, 'Dr.', 'Perferendis itaque totam eaque sint aut enim ad. Voluptatibus rerum magni est sunt eum qui.', '1999-03-03 13:08:09', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(9, 'Dr.', 'Est eaque asperiores quas sapiente voluptatem quidem corrupti. Eveniet voluptatem est ipsam aspernatur. Ut quae unde harum et sed voluptates et rerum.', '2003-01-04 23:46:49', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(10, 'Mr.', 'Tempore autem omnis ratione voluptas et voluptatem. Nostrum voluptatem pariatur voluptatum laborum. Est cum velit ipsam exercitationem id dolorum.', '1990-05-17 01:41:40', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(11, 'Prof.', 'Ex porro dicta libero fugit aliquam. Voluptas soluta voluptas sit. Fuga architecto rerum quia iure et et similique dicta.', '1996-03-25 02:09:52', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(12, 'Dr.', 'Voluptates et cupiditate qui atque. Aut et sed accusamus. Officiis ea eveniet architecto aliquam aliquam et deleniti suscipit. Sit perspiciatis impedit labore rerum vitae.', '2001-03-11 10:02:35', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(13, 'Mrs.', 'Cum tenetur quia voluptatem qui ipsam repudiandae. Qui maiores eos rerum tempore vero. Cumque qui quia est.', '2015-06-11 17:25:46', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(14, 'Dr.', 'Sunt quod sapiente sint perferendis quibusdam. Non excepturi corporis illum voluptatem perspiciatis est. Veniam minima est a sed autem. Voluptas earum facilis vero sit.', '2003-04-25 15:27:42', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(15, 'Dr.', 'Laudantium velit quas nihil ipsam magni. Assumenda nobis veritatis harum rem porro possimus saepe rem. Illum fugit soluta sequi corporis ut perspiciatis.', '2015-01-17 19:41:54', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(16, 'Ms.', 'Cupiditate molestiae eaque quos consequatur beatae. Doloremque quod earum explicabo ducimus. Aut facilis cum necessitatibus et ipsa.', '1998-02-19 20:49:30', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(17, 'Prof.', 'Ut temporibus voluptas tenetur doloremque non eum sunt. Autem rerum distinctio non corporis nobis reiciendis quisquam. Ut illo aspernatur sunt voluptatum et sed voluptas tempore.', '2006-10-30 15:22:12', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(18, 'Dr.', 'Aut vel quod ut. Quibusdam neque non totam delectus nesciunt. Voluptatum labore optio non. Accusamus deserunt impedit enim ipsam repudiandae aut exercitationem.', '1988-01-04 13:41:12', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(19, 'Prof.', 'Tempora earum molestiae esse quod quod. Pariatur magnam eveniet reprehenderit quod blanditiis. Quam debitis consequuntur nostrum dolor ut velit. Quam non et omnis reiciendis est odit deserunt.', '1992-03-10 04:44:22', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(20, 'Prof.', 'Enim maxime nobis odio est perspiciatis et. Quaerat at consectetur consequuntur et nostrum sequi. Odit excepturi magni qui eveniet aspernatur est impedit.', '2013-10-11 14:30:37', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(21, 'Dr.', 'Itaque facere id rerum rem quia delectus necessitatibus. Perspiciatis voluptatem temporibus nobis suscipit. Veniam eius ut nisi. Repellat omnis eligendi atque repellendus.', '2002-09-16 23:01:44', '2015-11-23 13:02:56', '2015-11-23 13:02:56'),
(22, 'Prof.', 'Voluptas repellat suscipit aut ea. Mollitia excepturi error nulla commodi accusantium hic. Dolorem sint alias incidunt sint aliquam.', '1998-12-04 02:31:08', '2015-11-23 13:02:56', '2015-11-23 13:02:56');

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_22_062901_create_article_table', 1);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ellis Krajcik DDS', 'Jacobi.Antonio@Bradtke.com', '$2y$10$.zFLvqjzDaPTiEJlrzy4tuRn69YFlcKHBdKJ6OuMTzZPhf66njv4G', 'sOhsyG1H2M', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(2, 'Prof. Hellen Feest II', 'Dagmar.Turner@McGlynn.com', '$2y$10$1MyrbDkjZSYeUSD7cAHQ.O//BhUBwMB2USXIpyvfExxZQsLi5Jmbm', 'dyL66cVPZP', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(3, 'Prof. Ramiro Carter', 'Keely35@gmail.com', '$2y$10$tSgQzMA7Ib6v8DinbZwBtOZ049wInKKexhciQHP1RvVuOTnz5s0Ee', 'wG73V8Yb56', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(4, 'Bud Abernathy MD', 'mLesch@Schmidt.com', '$2y$10$.1E9QuJSwXTcDhfrzDvc.OmH5Ya/U5KjawJ/89I0Ok1S28qZ/t7je', 'IzW8Fi5rAC', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(5, 'Rodrigo Auer', 'Daphne09@Bernier.com', '$2y$10$IqXXXKGUktTYNeaBZL0nOOZwqMckFdyDuPv2/m8Vs4urFbMh3FBUm', 'wNqwBgVSN4', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(6, 'Mr. Lexus Zulauf II', 'Bill.King@Konopelski.biz', '$2y$10$ApHQrICgzs7aAU0FZAm8SOyng7v6gZZ/sISK0V9Jo5xiMeE6GIQOG', 'B72dP1fOOn', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(7, 'Aliya White PhD', 'Elbert13@gmail.com', '$2y$10$yDCHAkweizTrRkXsOPswTeXNQuqzjkEi6UtITMVfv7GuC6A6Cwyla', 'Jo9b9MoQBv', '2015-11-23 13:03:35', '2015-11-23 13:03:35'),
(8, 'Jayde Ritchie', 'Leffler.Giuseppe@Jenkins.net', '$2y$10$PMzny5tAn2.yIdJ6K8mZ5ucbDqwYCo3RONXy1o6lyhYkje2chXJ92', 'Sguy4mgkT3', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(9, 'Prof. Carley Yost', 'bSchinner@King.net', '$2y$10$gBfLGvbtUrTMwG.7cS040ORWF1v.kvpGc1tDdVRd0sv3qsBVrRxHS', 'LlvqA34wnu', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(10, 'Samir Maggio', 'Mertz.Jaydon@gmail.com', '$2y$10$xlHEKO06Mhwa4Dc94fdkdOrTBWVIEL15PXPFHktzL5uRczMn1ia6W', 'wuItsLSRXe', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(11, 'Jackie Auer', 'Fannie95@hotmail.com', '$2y$10$8k8i8NpQk3UwgUHr7MhB9.agP.0W7nH7RKKvgw0B4BQtIgJpls9A6', 'QOnQPDsLpy', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(12, 'Sydney Schmidt II', 'McDermott.Napoleon@Bahringer.com', '$2y$10$zMgfDJCbFR4UgRWPtQEB8.rwqcdQWRiR7ZBhyG4p2TXxijGezHUXm', 'i1tjUpYz14', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(13, 'Jarret Mraz', 'sKulas@gmail.com', '$2y$10$SKjC36Z5MZNGTKDTRb0mkOfsDzNPVBDdTVqsH17wBXltDXiO.Mi.W', 'u1qrl5dd3U', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(14, 'Tracey Friesen IV', 'Johnnie25@yahoo.com', '$2y$10$5bjI3kXKihWsVoqn7I57XuhOoLVP9iSnYj/YaA2nA2ypLuli.PHCm', 'LrCHCmBFxr', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(15, 'Gavin Herman', 'Alaina.Lubowitz@Gerlach.org', '$2y$10$A/.Z0PV.jVKvs3Fuv7TvK.RknCRzzJNcshtYK3dCmhbhWxod7Xmku', 'UzeaEpT3nd', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(16, 'Prof. Quinten Kilback Sr.', 'Elvie76@hotmail.com', '$2y$10$oO0zlsbATdOXllkl.SS3NeNbWeXpDGqx6NLZOohzhBsaWXSfebTcK', '3SySkdgxjQ', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(17, 'Myrtie Gerlach', 'Koepp.Laney@yahoo.com', '$2y$10$s.XbmkUj/GD0hJVFWFLOMePW.OXP2QnAfLOFmErTYxsgqiu.C174S', '2DDyKhkp3R', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(18, 'Alivia Hane', 'kSpencer@yahoo.com', '$2y$10$RqoryrtoJOT.4iIsR4zWrOtS6CLukCMDufqrSAFYpCh60yd52Rfli', '5HnvgGPDw6', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(19, 'Gwendolyn Mills', 'Efren.Krajcik@gmail.com', '$2y$10$Fh2EH/sB36eS1M/08kj0meudTCKDj7B4OIUlvHA1RvXi3yuN56SHi', 'osgbMGGGem', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(20, 'Prof. Fritz Flatley IV', 'Lehner.Emilia@Breitenberg.info', '$2y$10$3osI1OxoAEAUsAikbadNJuZ71EPO8E8pQUXD12Ya/.D18W0wCowoi', '3K4XIcxfwm', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(21, 'Hugh Blanda', 'hReichert@hotmail.com', '$2y$10$nXjkgsDiwJSNUWWOh9tk3OV7HP4kUm46bMLpePLN43vacbAt08un.', '9GbjfnbX3R', '2015-11-23 13:03:36', '2015-11-23 13:03:36'),
(22, 'Rickey Rutherford III', 'Daniel.Joelle@gmail.com', '$2y$10$PD.9dU.hN8DQbwBqCkJhYOmW.nEvOuv5i97Qu51tHpkDrbcFcejFu', 'FFFuMIBSaE', '2015-11-23 13:03:36', '2015-11-23 13:03:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 14:16:38
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsanjuanbautista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biographies`
--

CREATE TABLE `biographies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` smallint(6) NOT NULL,
  `birth_date` date NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studies` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `biographies`
--

INSERT INTO `biographies` (`id`, `user_id`, `first_name`, `last_name`, `genre`, `birth_date`, `phone`, `address`, `city`, `studies`, `degree`, `file_cv`, `created_at`, `updated_at`) VALUES
(1, 12, 'Narciso', 'Ibañez Menta', 1, '1990-04-07', 'Bibiloni 2928', '1212121212', 'Ricardo Rojas', 'secundaria', 'et', '9d86133ef6a47ef7a9f35363a8f7ee34.jpg', '2019-11-27 16:46:07', '2019-12-13 15:33:38'),
(2, 7, 'Reilly', 'Little', 1, '1996-09-20', NULL, '21873 McClure Plains Apt. 674', 'North Manuelabury', 'facere', 'excepturi', '2226491e40048a4b51e8cc2c0428aed2.jpg', '2019-11-27 16:46:07', '2019-11-27 16:46:07'),
(3, 1, 'Linda', 'Larson', 0, '1979-08-22', NULL, '327 Brannon Way', 'West Rosa', 'quia', 'rem', '645b50ae38520c992ed8470156600e73.jpg', '2019-11-27 16:46:07', '2019-11-27 16:46:07'),
(4, 3, 'Gabriel', 'Bailey', 1, '1982-05-07', NULL, '44001 Jennings Dale Suite 422', 'South Murl', 'dignissimos', 'aut', '51ec772392ccf59a84a141c9b836f070.jpg', '2019-11-27 16:46:07', '2019-11-27 16:46:07'),
(6, 2, 'Alessandra', 'Littel', 0, '2004-12-13', NULL, '25359 Pfannerstill Haven', 'New Meda', 'qui', 'velit', 'a90ae53ceff3e088d02e94f626a4c48f.jpg', '2019-11-27 16:46:07', '2019-11-27 16:46:07'),
(8, 10, 'Birdie', 'Abernathy', 1, '1973-10-14', NULL, '2986 Anderson Stravenue Suite 773', 'New Chayafort', 'ea', 'aut', 'b9d867251a5be8466522952a6b9beec0.jpg', '2019-11-27 16:46:07', '2019-11-27 16:46:07'),
(9, 4, 'Shea', 'Lesch', 0, '2003-05-18', NULL, '51994 Gleichner Cape', 'Schuppestad', 'veniam', 'omnis', '4bc91e1ab6d271ef0b07aa2a774455d5.jpg', '2019-11-27 16:46:07', '2019-11-27 16:46:07'),
(11, 16, 'Mateo', 'S', 1, '2000-12-06', '222222299', 'chilavert 456', 'Benavidez', 'secundarios', 'bachiller', 'J36jObQla1rRdpWPs0PVv09exUC9QmP84Od2OYvE.pdf', '2019-12-13 06:13:48', '2019-12-13 06:14:29'),
(12, 11, 'Ale', 'VV', 2, '1970-12-25', '555555555555', '2928 Juan B. Bibiloni', 'RR', 'sec', 'bach', '', '2019-12-13 15:13:19', '2019-12-13 15:34:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_11_20_144138_create_biographies_table', 1),
(10, '2019_11_20_144257_create_posts_table', 1),
(11, '2019_11_20_144628_create_likes_table', 1),
(12, '2019_11_23_095043_add_avatar_to_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` smallint(6) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `link`, `image`, `type_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Non sunt quam et.', 'Et vitae quasi nisi excepturi corrupti totam explicabo non. Omnis vero ut et. Dolore rerum et iusto magni unde minus aspernatur. Magni quis aliquid dolore qui architecto tempore eligendi. Adipisci quo id sit nulla sint nihil vero est.', 'Sunt sed culpa consequatur dolores consequatur omnis quas. Nobis est ducimus ut tempore expedita et. Necessitatibus et accusantium officiis libero voluptatem.', '2f1330cdec48d28dcb13f498e038e401.jpg', 6, 9, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(2, 'Quae exercitationem aliquam aliquam voluptatem.', 'Repellat ex iusto quidem quo. Est deleniti illo ratione enim autem ea dolorem. Excepturi recusandae nihil molestias et veniam.', 'Recusandae aliquam incidunt nihil quis earum voluptate. Blanditiis accusamus aliquid rerum rerum qui neque distinctio. Quis ipsa qui dolor porro. Sed incidunt magni autem.', 'f0b0d58ce19f246083398b8579186e7e.jpg', 5, 5, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(3, 'Rerum ut provident est eligendi.', 'Dolorem magnam consequuntur magni enim placeat officiis. Explicabo laboriosam quam animi. Iste quia ipsam aut ut qui fuga. Voluptatem ratione fuga enim molestiae qui fugit illum illum.', 'Praesentium vel dolores nisi provident dolorem sunt. Reiciendis eum sapiente impedit. Quia recusandae et commodi et inventore magnam. Non placeat dolor ut quia sed repudiandae saepe sit.', '0943821fe711c86cffa9fab837720702.jpg', 2, 3, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(4, 'Unde eum architecto qui.', 'Rem in sit non quia dolor quas minus. Temporibus recusandae architecto dicta quos animi.', 'Vel eum aut aut facere aperiam ab. Quos ut nobis quis aperiam est. Consequuntur quidem eveniet est rerum sit.', '793f1f6d9642ff0f878c07f5858ade2d.jpg', 4, 2, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(5, 'Et praesentium debitis.', 'Ipsam et rerum et non culpa exercitationem. Quis dolorum mollitia enim ab quas rerum. Ut consequatur aut veniam consequatur fugit. Exercitationem quia at quibusdam rem. Quibusdam itaque sequi accusamus in.', 'Reprehenderit sint voluptatem totam. Nobis quo enim sint accusamus mollitia voluptas. Dolor aut quis veniam est.', 'e338a175db55fc78782e86164d6b7216.jpg', 2, 5, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(6, 'Repellendus sit maiores rerum et.', 'Magni velit veritatis libero magnam. Eum voluptates fuga repudiandae et autem atque placeat. Quos molestiae error ex est dolorem est adipisci. Voluptatem repudiandae cumque est et.', 'Illo facere numquam commodi. Sed doloribus magnam quibusdam pariatur voluptatem. Labore consequatur neque rerum non.', '660eeade7fa4f5e22d9271a550e5c732.jpg', 10, 4, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(7, 'Ut ut ab.', 'Aut voluptatem consequatur maxime laborum iure. Dolor beatae ducimus recusandae enim temporibus ullam. Error alias qui culpa occaecati. Consequuntur officiis dolorem dignissimos. Tempora ut quia officiis et vel similique.', 'Quia voluptatem ad ut adipisci. Optio id inventore quam dolores. Vel eius nobis quaerat dolorem. Beatae inventore ut est laborum.', '1bf0e16863aad95494c5b08733a0b119.jpg', 4, 6, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(8, 'Perspiciatis aut iste fugit.', 'Quia laborum aut occaecati id incidunt. At vel sunt eveniet et. Id iure tempora aliquid.', 'Dolor accusantium temporibus voluptas soluta autem dolorem aliquid. Ut amet vel non architecto. Harum quia architecto iusto veritatis aut eius. Sequi facilis non corporis accusantium molestiae in. Eum optio totam exercitationem perspiciatis.', 'f9687aa4d334fe55d4403f327da8957d.jpg', 5, 10, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(9, 'Dolores velit ea.', 'Aut cupiditate placeat quisquam necessitatibus quas inventore cumque. Ex ullam qui tempore incidunt. Aut accusantium quidem amet placeat nihil repellendus fugit. Magni consequatur unde reprehenderit voluptates natus.', 'Aliquid velit quis molestias ipsum deserunt fugit. Architecto officia qui distinctio est repudiandae. Ad libero quis voluptatibus ab eum.', '1162834f59a6ec2781015772e956d594.jpg', 8, 1, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(10, 'Consequatur ea nesciunt.', 'Nam consectetur voluptas ut ad quas est iure. Repellendus repellendus aut nihil. Quasi possimus excepturi nesciunt quisquam et sit quia. Similique sint nemo eveniet. Fuga dolorem dolores consequuntur sit adipisci soluta vitae.', 'Ut sed deleniti nisi fugit aut vitae excepturi. Ut eligendi reiciendis dolor et qui unde. Aspernatur aliquam sit sequi velit commodi. Magni ut sapiente temporibus vel qui delectus.', '3a9c3631a578ccb2939b233b3b26d867.jpg', 10, 3, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(11, 'Eos dolorem quis.', 'Sapiente voluptatem quia doloribus iusto dolor. Animi eius quibusdam nobis aut delectus omnis cupiditate sunt.', 'Unde cumque unde esse praesentium ea porro. Aut laborum assumenda fugiat ullam sint. Modi magni quo in aut aut nulla.', '97704d3b27376467180011303bc10406.jpg', 5, 10, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(12, 'Quia id culpa.', 'Dolor aut architecto expedita. Ut et assumenda nulla ut eveniet. Officia sint iure labore qui.', 'Ullam esse eos dolores. Excepturi consequatur voluptas quia ea commodi et. Dolor delectus sed officiis iure. Earum id facere accusamus totam tempore expedita.', '308a688110f95b3bc8ace76aaf7ce336.jpg', 10, 3, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(13, 'Sed optio minima.', 'Enim aliquam dolores ex. Assumenda optio fugit voluptates sint at. Ducimus et veritatis doloribus nulla.', 'Enim eligendi placeat laboriosam quo voluptate. Non eius eveniet debitis. Voluptatem cupiditate unde quia at quae.', '721fb53ed3efef87d05ad7a0b22ff0a5.jpg', 6, 10, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(14, 'Illum suscipit ipsam.', 'Qui asperiores repellendus libero soluta libero et hic. Rem harum eum id temporibus. Rerum nisi eos voluptas excepturi. Error fugit magnam aliquam impedit consequatur molestiae. Rerum ut in expedita nostrum dolorem dolorum quidem.', 'Ipsam sint aliquam nihil numquam omnis. Eligendi expedita iusto placeat. Dignissimos perferendis accusamus a. Molestiae mollitia ducimus ea autem ad.', '9d4a1a8a080f79960faf4ca893b0824f.jpg', 7, 3, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(15, 'Facere deserunt asperiores minima.', 'Eos ipsam sint consequatur et dolorem. Consequatur accusamus et nulla odio commodi laboriosam. Ut amet facilis dolor voluptas.', 'Pariatur eum et voluptatem vel labore saepe minima et. Ut consequatur doloribus esse cupiditate iste sint. Accusantium est ut iste dolor. In enim at laboriosam est iure aut consequatur. Nostrum non et corrupti qui quos voluptatem ut.', 'e1e39d45bcb91e16d2ba92cd4d5aa97e.jpg', 9, 5, '2019-11-27 16:45:52', '2019-11-27 16:45:52'),
(16, 'Primer emprendimiento', 'Emprendimiento de Mateo para prueba', 'www.sanpedroclaver.org', 'r8IAS541NY3d7BkuF6AT7NtDfUdJ9wNXzlzcfnV4.jpeg', 3, 16, '2019-12-13 03:29:25', '2019-12-13 03:29:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` smallint(6) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ebba Yost', 'lourdes.kris@example.net', '2019-11-27 16:45:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e2569cbcc439c0fcf8beb25fc8849742.jpg', 0, 'sWlYxGoZFP', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(2, 'Margarette Rodriguez', 'marvin.jodie@example.com', '2019-11-27 16:45:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3cf52e2e57be44e4484de5901838674e.jpg', 0, 'afV4cWETUx', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(3, 'Clementine Robel', 'iparisian@example.net', '2019-11-27 16:45:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b2d26aea72a059a9fb68e23479d47fe9.jpg', 0, 'OVYHQkTluV', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(4, 'Miss Juliet Pfannerstill Sr.', 'vicente86@example.net', '2019-11-27 16:45:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ec6c6fcd533de2df4cb302cd62e9276e.jpg', 0, 'ydsGJ5Lg6l', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(5, 'Michel Towne', 'maxime75@example.org', '2019-11-27 16:45:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd77d9c37788ff3302863d4f64d0a8ea6.jpg', 0, 'ZwTjGQz7Hj', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(6, 'Krystal Nitzsche', 'whauck@example.com', '2019-11-27 16:45:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5625b248a26269a3f37973e97352663a.jpg', 0, 'kDsjNRddSF', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(7, 'Miss Christy Braun', 'jbotsford@example.org', '2019-11-27 16:45:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6d7403a890ced89c9042bc78be9f2a3f.jpg', 0, 'D2jZImS9LZ', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(8, 'Dr. Glennie Bogisich', 'uhilpert@example.org', '2019-11-27 16:45:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '94cc6a00b588d3f031c6937e76cebc3b.jpg', 0, 'Prhpre4zOe', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(9, 'Prof. Emmy Purdy V', 'mertz.alec@example.net', '2019-11-27 16:45:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '51cd99d185f9f5035d6cef259724576b.jpg', 0, 'Gx3CXN5gCa', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(10, 'Wade Barrows', 'bailey64@example.net', '2019-11-27 16:45:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ee407339944f720d3a353bd609f281ab.jpg', 0, 'ejGvzCoBEG', '2019-11-27 16:45:31', '2019-11-27 16:45:31'),
(11, 'Ale', 'ale@dh.com', NULL, '$2y$10$.Po/iCdGfjO4l9kniie8DOzpL72v7lMV6KrqePWv6T76x4j/veGx6', 'yznL3sv6e05T2EpSscF5CIop6mGPMXNJ0kbWIM7l.jpeg', 0, NULL, '2019-12-04 18:20:37', '2019-12-04 18:20:37'),
(12, 'vale', 'vm@gmail.com', NULL, '$2y$10$GjQaOWxT0rA6001h5MXVY.GxpdlIJdfk0hnFh5svkco2KwvdCvlUC', 'aqjlSVcmziGc6FYtDqMypsVQvwX5MncecVfSttyU.jpeg', 0, NULL, '2019-12-05 05:01:59', '2019-12-05 05:01:59'),
(13, 'pepe', 'pepe@gmail.com', NULL, '$2y$10$31UkWQO0sWH1spyFRltMceFZFpTY21wf4GhIjaSBor8Kvm/mBkndy', '45YEnFtVVkBhaffnLZl1SyVdNFOlJlSt2CPF5MY3.jpeg', 0, NULL, '2019-12-05 06:43:30', '2019-12-05 06:43:30'),
(14, 'Valentina Mammolino', 'vmammolino@gmail.com', NULL, '$2y$10$BjlM0FNpR6OYapxQQu/nZePaQ6aaIUlZxhCaEeBwWiv0gStIVTkyK', 'JDmv9OdSCrYTvrMwJ9rMLWclPK5CGlGcHBGsSCHz.png', 0, NULL, '2019-12-11 06:37:42', '2019-12-11 06:37:42'),
(15, 'Valen M', 'vsimone@fibertel.com.ar', NULL, '$2y$10$BZHynJ3yg32HfR/S5ekUcuA8qSRbWj3QRT2KWkDDIqS33gUwxJGF6', '2Sn7oHgGXfxHYupB1nmBjxWD9vSnoAsHoYBKCch0.jpeg', 0, NULL, '2019-12-11 16:37:57', '2019-12-11 16:37:57'),
(16, 'mateo', 'tatusimone@gmail.com', NULL, '$2y$10$P9c2ZgbJzKB2wBE30qQ5uuaJG2fTt4j86l6ld4t/KOMRATqcAkTfK', 'zHgiJDMGZW2ukGx2wmKXhdIRbjpbsoJ1m1SCs5OG.jpeg', 0, NULL, '2019-12-13 03:27:04', '2019-12-13 03:27:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biographies`
--
ALTER TABLE `biographies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biographies_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `biographies`
--
ALTER TABLE `biographies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `biographies`
--
ALTER TABLE `biographies`
  ADD CONSTRAINT `biographies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

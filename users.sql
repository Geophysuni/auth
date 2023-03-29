-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2023 г., 19:27
-- Версия сервера: 5.6.51-log
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `token`, `created`, `role`) VALUES
('', 'qw', 'qw@qw.com', '$argon2id$v=19$m=65536,t=4,p=1$RTVEY0tFQWZYY0VQLm5ndQ$4foV+drgQ4rBfA0nQ8RFu+Fn8mbZUTC1GQi/Dtw1RsI', '$argon2id$v=19$m=65536,t=4,p=1$Ui9DWUhFQzVyLi5tNUZFLg$2kpARG4siA+mWYbJIdsaoSNB/FbvEIAsiE6yjdqgNGc', '2023-03-29 00:00:00', ''),
('', 'we', 'we@we.we', '$argon2id$v=19$m=65536,t=4,p=1$Q2NGQWdDODlpVklNVWVCZA$UUV3xEwvdrsQYs5ZrjIigUS1RYJ0GBwz2XgXvIDjD5o', '$argon2id$v=19$m=65536,t=4,p=1$OUUuOVlGM05sN2VSOU8wVA$lyLmqX0U1m/X+AKA7vvBZckFWXR7ZuhtpYpr88kJLCM', '2023-03-29 00:00:00', ''),
('', 'as', 'as@as.as', '$argon2id$v=19$m=65536,t=4,p=1$WnhOaFdTTDguS3BGN0xpWg$CO7nOmpc2m1cErWLnCF5sY2vSZwloDzvSBO3ngW4NPM', '$argon2id$v=19$m=65536,t=4,p=1$Z0hhRXBtQkEyQlMwT2VYcA$RKNbmXqZcnzWhCGZZdoc6bke1kl4G07a5zKUPlVYi7w', '2023-03-29 15:04:37', ''),
('', 'qq', 'qq@qq.qq', '$argon2id$v=19$m=65536,t=4,p=1$RS9kd2dmV292d3cxTlYwSA$4hKEi2G5QxQJKbRNL1SMmp1D69R+qy1C9jWZx/oitgg', '$argon2id$v=19$m=65536,t=4,p=1$S00yMVpWT3hOc1JFQTJBVw$42lWa+ik/QQeK5YnbP1q64QRhCpGmySUjLBYigpZMg4', '2023-03-29 15:09:38', ''),
('', 'qq', 'qq@qq.qq', '$argon2id$v=19$m=65536,t=4,p=1$ZEMvckw2bHBzRHlXWW9veA$7za72MaRwfdtkZWKEzyb0+Sst252RWhAV3A62odS6xI', '$argon2id$v=19$m=65536,t=4,p=1$REs0REZkQ2xsWVVhanNlUQ$/nij0Lfsl14NUpu6klif3NvNY8orCp2jv7c59UMdq/c', '2023-03-29 15:13:58', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

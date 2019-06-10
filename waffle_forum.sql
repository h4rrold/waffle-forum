-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 09 2019 р., 13:57
-- Версія сервера: 5.7.24
-- Версія PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `waffle_forum`
--

-- --------------------------------------------------------

--
-- Структура таблиці `directories`
--

DROP TABLE IF EXISTS `directories`;
CREATE TABLE IF NOT EXISTS `directories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `amount_of_posts` int(11) DEFAULT NULL,
  `amount_of_topics` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `directories`
--

INSERT INTO `directories` (`id`, `name`, `parent_id`, `amount_of_posts`, `amount_of_topics`) VALUES
(1, 'Використання Waffle forum', 5, 99900, 165),
(2, 'Кут розробника', 1, 55, 2),
(3, 'Працевлаштування та оголошення про вакансії', 2, 421, 10),
(4, 'Досвід клієнтів Waffle', 1, 222, 22),
(5, 'Сповіщення про несправності', 1, 23, 21),
(6, 'Ваші пропозиції', 1, 55, 15);

-- --------------------------------------------------------

--
-- Структура таблиці `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `style` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `groups`
--

INSERT INTO `groups` (`id`, `name`, `style`) VALUES
(7, 'admin', 'color: red'),
(8, 'user', 'color: white'),
(9, 'guest', 'color: grey'),
(10, '11112222', '1111');

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `datetime` timestamp NOT NULL,
  `change_time` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `text`, `datetime`, `change_time`) VALUES
(3, 4, 1, 'giughiuehguiesrhgierghikerjgneruigheuiopargeriogeruilghefughefugherigheruiogeruigeruigeruigerfuigherujighergjheguihfhgfhbdfhguiefhgeruih', '2019-06-10 14:18:22', '2019-06-06 21:00:00'),
(4, 5, 2, 'uhgieushgieorgherihjtvdvgnerhvghgduihgeshgsbgsohgiuosbtgsghbshjrsiopghrsinbrsgsgjrskl;grtgjnergnersighrdokgjnrtdjhgnjugnrskgnerk;jgn', '2019-06-15 14:18:22', '2019-06-06 21:00:00'),
(5, 6, 3, 'jkguiohgeuihteirhgierujherusjguierjeiojeruiohjg', '2019-06-19 14:18:22', '2019-06-06 21:00:00'),
(6, 7, 4, 'uyguihgioerhuieruguierioehuioerjfguieyioehtoeuhfgoeurheruiohgererghhrthrhjrthsrtujsktyhstrhsrtgh', '2019-06-20 14:18:22', '2019-06-06 21:00:00'),
(7, 8, 1, 'djhgroiteroeruuoperyterutiuerjhtuio5ytperuyte89wytoer8sygo87dgyreiityeriohteiheritg', '2019-06-06 14:18:22', '2019-06-06 21:00:00'),
(8, 9, 6, 'djhgroiteroeruuoperyterutiuerjhtuio5ytperuyte89wytoer8sygo87dgyreiityeriohteiheritg', '2019-06-08 14:18:22', '2019-06-06 21:00:00'),
(9, 9, 6, 'djhgroiteroeruuoperyterutiuerjhtuio5ytperuyte89wytoer8sygo87dgyreiityeriohteiheritg', '2019-06-20 14:18:22', '2019-06-06 21:00:00'),
(10, 5, 5, '5555555555555555555555HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH', '2019-06-29 14:18:22', '2019-06-06 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблиці `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `directory_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `last_post_id` int(11) NOT NULL,
  `amount_of_posts` int(11) NOT NULL,
  `is_pinned` tinyint(1) NOT NULL,
  `amount_of_views` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `directory_id` (`directory_id`),
  KEY `post_id` (`post_id`),
  KEY `last_post_id` (`last_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `topics`
--

INSERT INTO `topics` (`id`, `name`, `directory_id`, `title`, `post_id`, `last_post_id`, `amount_of_posts`, `is_pinned`, `amount_of_views`) VALUES
(1, '', 2, '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 3, 6, 1, 0, 5),
(2, '', 4, '222222222222222222222222222222222222222222222222', 4, 6, 1, 0, 526),
(3, '', 1, '3333333333333333333333333333333333333333333333333333333333333333333333', 5, 6, 1, 0, 99),
(4, '', 6, '4444444444444444444444444444444444444444444444444444444444444444444', 6, 6, 1, 0, 88),
(5, '', 3, '555555555555555555555555555', 7, 6, 1, 0, 78),
(6, '', 5, '666666666666666666666666666666666666666666666666666666666666666666666666666', 8, 6, 1, 0, 156),
(7, '', 2, 'Qwertyuiopasdfghjklzxcvbnmqwertyuiop', 9, 6, 3, 0, 44);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `last_ip` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL,
  `registration_date` date NOT NULL,
  `amount_of_messages` int(11) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `pass`, `salt`, `last_login`, `last_ip`, `avatar`, `group_id`, `is_online`, `registration_date`, `amount_of_messages`, `bio`) VALUES
(4, 'vfrmn', 'vfrmn@gmail.com', '$2y$10$4GjHQV68EZU/NcDfPMEgzONm85GxT02siiFGIxj4M9L8XyWMIBeOu', 're3yghtsrht5t', '06/06/2019', '127.0.0.1', 'http://localhost/waffle-forum/uploads/user4/mz_nuLUtrIU.jpg', 7, 1, '2019-06-04', 6, 'Good boy'),
(5, 'vfrmn', 'vfrmn@gmail.com', '$2y$10$4GjHQV68EZU/NcDfPMEgzONm85GxT02siiFGIxj4M9L8XyWMIBeOu', 're3yghtsrht5t', '06/06/2019', '127.0.0.1', 'http://localhost/waffle-forum/uploads/user4/mz_nuLUtrIU.jpg', 7, 1, '2019-06-04', 6, 'Good boy'),
(6, 'vfrmn', 'vfrmn@gmail.com', '$2y$10$4GjHQV68EZU/NcDfPMEgzONm85GxT02siiFGIxj4M9L8XyWMIBeOu', 're3yghtsrht5t', '06/06/2019', '127.0.0.1', 'http://localhost/waffle-forum/uploads/user4/mz_nuLUtrIU.jpg', 7, 1, '2019-06-04', 6, 'Good boy'),
(7, 'vfrmn', 'vfrmn@gmail.com', '$2y$10$4GjHQV68EZU/NcDfPMEgzONm85GxT02siiFGIxj4M9L8XyWMIBeOu', 're3yghtsrht5t', '06/06/2019', '127.0.0.1', 'http://localhost/waffle-forum/uploads/user4/mz_nuLUtrIU.jpg', 7, 1, '2019-06-04', 6, 'Good boy'),
(8, 'vfrmn', 'vfrmn@gmail.com', '$2y$10$4GjHQV68EZU/NcDfPMEgzONm85GxT02siiFGIxj4M9L8XyWMIBeOu', 're3yghtsrht5t', '06/06/2019', '127.0.0.1', 'http://localhost/waffle-forum/uploads/user4/mz_nuLUtrIU.jpg', 7, 1, '2019-06-04', 6, 'Good boy'),
(9, 'vfrmn', 'vfrmn@gmail.com', '$2y$10$4GjHQV68EZU/NcDfPMEgzONm85GxT02siiFGIxj4M9L8XyWMIBeOu', 're3yghtsrht5t', '06/06/2019', '127.0.0.1', 'http://localhost/waffle-forum/uploads/user4/mz_nuLUtrIU.jpg', 7, 1, '2019-06-04', 6, 'Good boy');

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`directory_id`) REFERENCES `directories` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

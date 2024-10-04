-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 04 2024 г., 14:35
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testovoye_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `num` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`, `num`) VALUES
(1, '5', '5', '5', 0),
(2, '6', '6', '6', 0),
(3, '7', '7', '7', 0),
(4, 'kira', '123123', '3964802', 0),
(6, '23', '23', '23', 23),
(7, '24', '24', '24', 24),
(8, '25', '25', '25', 25),
(9, 'varvara', '12345', 'varvara@gmail.com', 3963361),
(10, 'mama', '1234', 'mama@.ru', 494996),
(12, 'daddy', '12345', 'dad.ru', 8862410),
(13, 'aleksandr', '12345', 'sanya', 3494996),
(14, '15', '15', '15', 15),
(15, '16', '16', '16', 16),
(16, '17', '17', '17', 17),
(17, '18', '18', '18', 18),
(18, '19', '19', '19', 19),
(19, '20', '20', '20', 20),
(20, '21', '21', '21', 21),
(21, '22', '22', '22', 22),
(22, 'DevochkaW', '12345', 'girl@gmail.ru', 98530),
(23, 'nessy', '12345', 'pavlikovan2000@gmail.com', 90650),
(24, '10', '12345', '10@gmail.com', 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

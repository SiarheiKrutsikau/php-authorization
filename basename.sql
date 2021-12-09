-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2021 г., 13:14
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basename`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basen`
--

CREATE TABLE `basen` (
  `id` int(15) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `login` text COLLATE utf8mb4_unicode_ci,
  `password` text COLLATE utf8mb4_unicode_ci,
  `namemd5` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `basen`
--

INSERT INTO `basen` (`id`, `name`, `email`, `login`, `password`, `namemd5`) VALUES
(51, 'Крутиков Сергей Александрович', '1', '1', '827ccb0eea8a706c4c34a16891f84e7b', 'c4ca4238a0b923820dcc509a6f75849b'),
(53, '5', '55', '55', 'e4da3b7fbbce2345d7772b0674a318d5', 'b53b3a3d6ab90ce0268229151c9bde11'),
(54, '44', '44', '44', 'a87ff679a2f3e71d9181a67b7542122c', 'f7177163c833dff4b38fc8d2872f1ec6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basen`
--
ALTER TABLE `basen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basen`
--
ALTER TABLE `basen`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

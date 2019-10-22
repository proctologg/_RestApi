-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2019 г., 12:29
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `baserobots`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `year` year(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `type`, `year`, `description`) VALUES
(1, 'Робот1', 'C3Po', 1999, 'Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem '),
(2, 'Робот1', 'C3Po', 1999, 'Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem Робот lorem '),
(3, 'Робот2', 'JKL3O', 1980, 'Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, '),
(4, 'Робот2', 'JKL3O', 1980, 'Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, Lorem Robo, ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

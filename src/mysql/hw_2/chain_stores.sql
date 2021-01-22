-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2021 г., 14:29
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chain_stores`
--
CREATE DATABASE IF NOT EXISTS `chain_stores` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `chain_stores`;

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'АР Крым'),
(2, 'Винницкая обл'),
(3, 'Волынская обл'),
(4, 'Донецкая обл'),
(5, 'Житомирская обл'),
(6, 'Закарпатская обл'),
(7, 'Запорожская обл'),
(8, 'Ивано-франковская область'),
(9, 'Киев'),
(10, 'Киевская обл'),
(11, 'Кировоградская обл'),
(12, 'Луганская обл'),
(13, 'Львовская обл'),
(14, 'Николавевская обл'),
(15, 'Одесская обл'),
(16, 'Полтавская обл'),
(17, 'Ровненская обл'),
(18, 'Севастополь'),
(19, 'Сумская обл'),
(20, 'Тернопольская обл'),
(21, 'Харьковская обл'),
(22, 'Херсонская обл'),
(23, 'Хмельницкая обл'),
(24, 'Хмельницкая обл'),
(25, 'Черкасская обл'),
(26, 'Черниговская обл'),
(27, 'Черновецкая обл');

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

DROP TABLE IF EXISTS `shops`;
CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `region_id` tinyint(2) NOT NULL,
  `manager` varchar(150) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `creation_date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `address`, `region_id`, `manager`, `phone`, `creation_date`, `type`) VALUES
(1, 'г. Винница ул. Липовая, 45', 2, 'Петрушин Иван Сергеевич', '+380990000000', '2011-01-04', 'супермаркет'),
(2, 'г. Киев ул. Черновола 98', 9, 'Пичкур Наталья Ивановна', '+380670000000', '2020-01-05', 'гастроном'),
(3, 'г. Ирпень, ул. Стуса, 5', 10, 'Конопко Галина Ивановна', '0670000001', '2020-09-18', 'продуктовый магазин'),
(4, 'г. Одесса, б-р Приморский', 15, 'Никитенко Иван Иванович', '+30630000000', '2015-05-14', 'супермаркет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

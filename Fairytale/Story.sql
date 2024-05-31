-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2024 г., 17:22
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Story`
--

-- --------------------------------------------------------

--
-- Структура таблицы `location`
--

CREATE TABLE `location` (
  `id` int(2) NOT NULL,
  `loc_name` varchar(20) NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  `id_w` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `location`
--

INSERT INTO `location` (`id`, `loc_name`, `img_loc`, `id_w`) VALUES
(1, 'лес', '\"../img/forest.png\"', 1),
(2, 'Изумрудный город', '\"../img/city.webp\"', 2),
(3, 'маковое поле', '\"../img/field.jpg\"', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `Person`
--

CREATE TABLE `Person` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Person`
--

INSERT INTO `Person` (`id`, `name`) VALUES
(1, 'Тотошка'),
(2, 'Эллиsss'),
(3, 'Страшила'),
(4, 'Железный дровосек'),
(5, 'Лев');

-- --------------------------------------------------------

--
-- Структура таблицы `PesrQuest`
--

CREATE TABLE `PesrQuest` (
  `id` int(2) NOT NULL,
  `text` varchar(20) NOT NULL,
  `id_pers` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `PesrQuest`
--

INSERT INTO `PesrQuest` (`id`, `text`, `id_pers`) VALUES
(1, 'мозги', 3),
(2, 'сердце', 4),
(3, 'смелость', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `relationship`
--

CREATE TABLE `relationship` (
  `id` int(2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `pers1` int(2) NOT NULL,
  `pers2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `relationship`
--

INSERT INTO `relationship` (`id`, `description`, `pers1`, `pers2`) VALUES
(1, 'находят общий язык', 3, 4),
(2, 'и её верный друг', 1, 2),
(3, 'испытывает благодарность', 2, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `Weather`
--

CREATE TABLE `Weather` (
  `id` int(2) NOT NULL,
  `name_W` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Weather`
--

INSERT INTO `Weather` (`id`, `name_W`) VALUES
(1, 'во время дождя'),
(2, 'где всегда небо голубое'),
(3, 'поднимается ветер');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_w` (`id_w`);

--
-- Индексы таблицы `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `PesrQuest`
--
ALTER TABLE `PesrQuest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pers` (`id_pers`);

--
-- Индексы таблицы `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pers1` (`pers1`),
  ADD KEY `pers2` (`pers2`);

--
-- Индексы таблицы `Weather`
--
ALTER TABLE `Weather`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `location`
--
ALTER TABLE `location`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Person`
--
ALTER TABLE `Person`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `PesrQuest`
--
ALTER TABLE `PesrQuest`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `relationship`
--
ALTER TABLE `relationship`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Weather`
--
ALTER TABLE `Weather`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`id_w`) REFERENCES `Weather` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `PesrQuest`
--
ALTER TABLE `PesrQuest`
  ADD CONSTRAINT `pesrquest_ibfk_1` FOREIGN KEY (`id_pers`) REFERENCES `Person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `relationship`
--
ALTER TABLE `relationship`
  ADD CONSTRAINT `relationship_ibfk_1` FOREIGN KEY (`pers1`) REFERENCES `Person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relationship_ibfk_2` FOREIGN KEY (`pers2`) REFERENCES `Person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

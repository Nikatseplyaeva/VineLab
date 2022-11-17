-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2022 г., 21:31
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `viewed` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `content`, `date`, `image`, `viewed`, `status`) VALUES
(1, 'Алкоголизм - симптомы и лечение', 'Что такое алкоголизм? Причины возникновения, диагностику и методы лечения разберем в статье доктора Шулькина Марка Залмановича, нарколога со стажем в 45 лет.', 'Определение болезни. Причины заболевания\r\nАлкоголизм — это психическая и физическая зависимость человека от приёма напитков, содержащих этанол. Они становятся необходимыми, так как помогают снимать психическое напряжение или улучшать физическое состояние, которое ухудшилось как раз из-за отмены или долгого неупотребления алкоголя.\r\n', '2022-11-16', 'd6c7c2278dab074f3e53f2017597c3f0.jpg', 1, 1),
(2, 'Какое бывает вино?', 'Прежде всего, следует отделить виноградное вино от всех остальных – фруктовых, ягодных, медовых и всякой сумасшедшей экзотики вроде конопляных. Все они – предмет других статей.\r\n', 'Букет вина, а также его цена являются производными от этого набора переменных. При этом, могочисленные термины вроде столового вина, ординарного, сухого, выдержанного, гран крю и прочих могут иметь очень разное наполнение в разных странах и даже в пределах одной страны. Поэтому здесь мы рассмотрим именно базовые характеристики, на которых так или иначе строятся все официальные системы винных классификаций.', '2022-11-16', '0cd4bb1341aa233fa9e3d5c9a887c76b.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `rating` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `sweet` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `after_taste` varchar(255) NOT NULL,
  `snack` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `rating`, `color`, `sweet`, `country`, `type`, `degree`, `after_taste`, `snack`, `price`, `image`) VALUES
(1, 'Вино Гранджо', '', '', '', '', '', '', '', '', '', ''),
(3, 'белое', '', '', '', '', '', '', '', '', '', 'white.jpg'),
(4, 'красное', '', '', '', '', '', '', '', '', '', 'red.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `text` text NOT NULL,
  `user_id` int NOT NULL,
  `article_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `admin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `email`, `date_of_birth`, `admin`) VALUES
(1, 'nika', 'nika', 'nika', 'nika@', '2022-04-20', 0),
(2, 'kriss', 'kriss', 'kriss', 'kriss@', '2031-07-20', 0),
(4, 'krisskk', 'gi;yg', 'nika', 'oiu', NULL, 0),
(5, 'qwer', 'qwer', 'qwer', 'qwer@', NULL, 0),
(11, 'admin', 'admin', 'admin', 'admin@admin', NULL, 1),
(12, 'sff', 'dfvsfdefcs', 'nika', 'antn@mail.ru', '2022-11-11', 0),
(13, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wine`
--

CREATE TABLE `wine` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `sweet` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `after_taste` varchar(255) DEFAULT NULL,
  `snack` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `wine`
--

INSERT INTO `wine` (`id`, `title`, `rating`, `color`, `sweet`, `country`, `type`, `degree`, `after_taste`, `snack`, `price`, `image`, `category_id`) VALUES
(6, 'Helios', '5', 'Белое', 'Сухое', 'Франция', 'Совиньон Блан', '12.5 %', 'Белых цветов', 'Сыр', '1990', '411d71b2d549e52515e6e25311cc0207.jpg', NULL),
(7, 'Trebbiano Toscano', '5', 'Белое', 'Сухое', 'Италия', 'Треббьяно', '12 %', 'Зеленое яблоко', 'Морепродукты', '1490', 'c95a11894b3f8351d71c6820e5f8034a.jpg', NULL),
(8, 'Fetzer', '4', 'Красное', 'Сухое', 'Соединенные Штаты Америки', 'Пино-нуар', '13 %', 'Аромат трюфелей', 'Баранина', '1390', '77051b90f1fec04e57cd9fb34e966bcf.jpg', NULL),
(9, 'Bovin', '4', 'Красное', 'Сухое', 'Македония', 'Мерло', '13,5 %', 'Аромат вишни', 'Овощи', '1090', 'd5e53dbe161b9de4894362bbe9b4225f.jpg', NULL),
(10, 'Catena', '3', 'Белое', 'Сухое', 'Аргентина', 'Шардоне', '13,5 %', 'Душистая груша', 'Блюда из птицы', '3100', '8541d44c79d289024c8ed91cfb3582d3.jpg', NULL),
(11, 'Catena', '3', 'Красное', 'Полусухое', 'Франция', 'Шираз', '14 %', 'Черная смородина', 'Грибы', '2890', '33d1acbad88347cd88ab426e78ec0453.jpg', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wine`
--
ALTER TABLE `wine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `wine`
--
ALTER TABLE `wine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

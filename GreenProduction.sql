-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2017 г., 23:23
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `GreenProduction`
--

-- --------------------------------------------------------

--
-- Структура таблицы `meta_setting`
--

CREATE TABLE IF NOT EXISTS `meta_setting` (
  `id` int(11) NOT NULL,
  `meta_title_ru` varchar(255) NOT NULL,
  `meta_title_eng` varchar(255) NOT NULL,
  `meta_description_ru` varchar(255) NOT NULL,
  `meta_description_eng` varchar(255) NOT NULL,
  `meta_key_words_ru` varchar(255) NOT NULL,
  `meta_key_words_eng` varchar(255) NOT NULL,
  `name_ru` varchar(25) NOT NULL,
  `name_eng` varchar(25) NOT NULL,
  `page` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `meta_setting`
--

INSERT INTO `meta_setting` (`id`, `meta_title_ru`, `meta_title_eng`, `meta_description_ru`, `meta_description_eng`, `meta_key_words_ru`, `meta_key_words_eng`, `name_ru`, `name_eng`, `page`) VALUES
(1, 'meta_title_ru', 'meta_title_eng', '', '', '', '', 'Главная', 'Main', 'index'),
(2, '', '', '', '', '', '', 'О нас', 'About us', 'about-us'),
(3, '', '', '', '', '', '', 'Услуги', 'Services', 'services'),
(4, '', '', '', '', '', '', 'Заказать', 'Order', 'order'),
(5, '', '', '', '', '', '', 'Контакты', 'Contacts', 'contact_us');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `number`, `message`, `status`) VALUES
(1, 'Pasha', 'pasharudenko@ukr.net', '+380990978263', 'need site', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `meta_setting`
--
ALTER TABLE `meta_setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `meta_setting`
--
ALTER TABLE `meta_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

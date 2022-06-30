-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 30 2022 г., 08:51
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_quemin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `ID_Category` varchar(18) NOT NULL,
  `name_category` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `ID_Client` varchar(18) NOT NULL,
  `name_client` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(18) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `ID_Client` int(20) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `Date` date NOT NULL,
  `Number` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`ID_Client`, `Name`, `Date`, `Number`, `Email`) VALUES
(59, 'Александр Иванович Колтуновrr', '2022-06-30', '+79101710517', 'isip_a.i.koltunov@mpt.ru'),
(60, 'Александр Иванович Колтунов', '2022-06-10', '+79101710515', 'isip_a.i.koltunov@mpt.ru'),
(64, 'Колтунов Александр Иванович', '2022-06-04', '+79101710515', 'koltunov-02@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `ID_portfolio_category` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `portfolio_category`
--

INSERT INTO `portfolio_category` (`ID_portfolio_category`, `image`) VALUES
(1, 'category_reklam1_1.png'),
(2, 'category_reklam2_1.png'),
(3, 'category_reklam3_1.png'),
(11, 'category_reklam1_1.png'),
(17, '62bc0c891e7b4image 18 (1).png'),
(18, '62bc0da0ef167category_reklam1 1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `ID_Service` varchar(18) NOT NULL,
  `name_service` varchar(20) DEFAULT NULL,
  `price_service` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `ID_Category` varchar(18) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `ID_Staff` varchar(18) NOT NULL,
  `name_staff` varchar(20) DEFAULT NULL,
  `surname_staff` varchar(20) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `role`) VALUES
(1, '1', '1', 1),
(10, '12345', '12345', 0),
(8, '123', '123', 0),
(11, '100', '100', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_Client`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_Client`);

--
-- Индексы таблицы `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`ID_portfolio_category`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID_Service`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_Staff`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `ID_Client` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `ID_portfolio_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

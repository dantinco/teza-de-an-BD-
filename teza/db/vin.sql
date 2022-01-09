-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 09 2022 г., 13:07
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(50) NOT NULL,
  `denumire_vin` varchar(255) NOT NULL,
  `id_culoare` int(50) NOT NULL,
  `id_clasificare` int(50) NOT NULL,
  `pret` int(10) NOT NULL,
  `id_producator` int(255) NOT NULL,
  `an` int(5) NOT NULL,
  `volum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `denumire_vin`, `id_culoare`, `id_clasificare`, `pret`, `id_producator`, `an`, `volum`) VALUES
(1, 'Naughty Brothers', 2, 3, 1300, 1, 2018, '0.75'),
(2, 'Shiraz', 2, 2, 184, 10, 2019, '0.75'),
(3, 'PINOT NOIR', 2, 4, 215, 9, 2018, '0.75'),
(4, 'Sauvignon Blanc', 1, 3, 233, 1, 2020, '0.75'),
(5, 'Novak Alb de Onitcani / Floricica', 2, 1, 175, 7, 2020, '0.75'),
(6, 'Feteasca Neagra', 3, 3, 155, 3, 2019, '0.75'),
(7, 'Cricova Vin ', 1, 2, 50, 3, 2019, '0.375'),
(8, 'Cricova vin spumant ', 3, 5, 56, 3, 2018, '0.375'),
(9, 'Ottonel Late Harvest', 3, 1, 325, 4, 2019, '0.375'),
(10, 'Rose Brut', 3, 5, 233, 1, 2020, '0.75'),
(11, 'Feteasca Neagra', 2, 4, 199, 10, 2020, '0.75'),
(12, 'Vinia Traian Rose', 3, 3, 159, 6, 2020, '0.75'),
(13, 'CASTEL MIMI Cucoanele', 1, 1, 127, 8, 2020, '0.75'),
(14, 'CASTEL MIMI Frati', 2, 1, 184, 8, 2018, '0.75'),
(15, 'Chateau Vartely Tribut Saperavi', 2, 4, 759, 5, 2017, '0.75');

-- --------------------------------------------------------

--
-- Структура таблицы `clasificarea vinului`
--

CREATE TABLE `clasificarea vinului` (
  `id_clasificare` int(255) NOT NULL,
  `clasificarea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `clasificarea vinului`
--

INSERT INTO `clasificarea vinului` (`id_clasificare`, `clasificarea`) VALUES
(1, 'Vinul sec'),
(2, 'Vinul demisec'),
(3, 'Vinul dulce'),
(4, 'Vinul aromatizat'),
(5, 'Vinul spumos'),
(6, 'Vin natural');

-- --------------------------------------------------------

--
-- Структура таблицы `culoarea vinului`
--

CREATE TABLE `culoarea vinului` (
  `id_culoare` int(255) NOT NULL,
  `culoarea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `culoarea vinului`
--

INSERT INTO `culoarea vinului` (`id_culoare`, `culoarea`) VALUES
(1, 'alb'),
(2, 'rosu'),
(3, 'rose');

-- --------------------------------------------------------

--
-- Структура таблицы `producator`
--

CREATE TABLE `producator` (
  `id_producator` int(25) NOT NULL,
  `producator` varchar(50) NOT NULL,
  `localitatea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `producator`
--

INSERT INTO `producator` (`id_producator`, `producator`, `localitatea`) VALUES
(1, 'ET CETERA', 'Căplani'),
(2, 'Crama Mircești', 'Mircești'),
(3, 'Cricova', 'Cricova'),
(4, 'GOGU WINERY', 'Căușeni'),
(5, 'Chateau Vartely', 'Orhei'),
(6, 'Vinia Traian', 'Găvănoasa'),
(7, 'Novak', 'Tartaul'),
(8, 'Castel Mimi', 'Bulboaca'),
(9, 'Pelican Negru', 'Chisinau'),
(10, 'Purcari', 'Purcari');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`),
  ADD KEY `id_culoare` (`id_culoare`),
  ADD KEY `id_clasificare` (`id_clasificare`,`id_producator`),
  ADD KEY `id_producator` (`id_producator`),
  ADD KEY `id_culoare_2` (`id_culoare`,`id_clasificare`,`id_producator`);

--
-- Индексы таблицы `clasificarea vinului`
--
ALTER TABLE `clasificarea vinului`
  ADD PRIMARY KEY (`id_clasificare`);

--
-- Индексы таблицы `culoarea vinului`
--
ALTER TABLE `culoarea vinului`
  ADD PRIMARY KEY (`id_culoare`);

--
-- Индексы таблицы `producator`
--
ALTER TABLE `producator`
  ADD PRIMARY KEY (`id_producator`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `clasificarea vinului`
--
ALTER TABLE `clasificarea vinului`
  MODIFY `id_clasificare` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `culoarea vinului`
--
ALTER TABLE `culoarea vinului`
  MODIFY `id_culoare` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `producator`
--
ALTER TABLE `producator`
  MODIFY `id_producator` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`id_clasificare`) REFERENCES `clasificarea vinului` (`id_clasificare`),
  ADD CONSTRAINT `catalog_ibfk_2` FOREIGN KEY (`id_producator`) REFERENCES `producator` (`id_producator`),
  ADD CONSTRAINT `catalog_ibfk_3` FOREIGN KEY (`id_culoare`) REFERENCES `culoarea vinului` (`id_culoare`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

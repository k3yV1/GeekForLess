-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2019 г., 23:20
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
-- База данных: `BookCatalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table_authors`
--

CREATE TABLE `table_authors` (
  `IdAuthor` int(11) NOT NULL,
  `AuthorName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_authors`
--

INSERT INTO `table_authors` (`IdAuthor`, `AuthorName`) VALUES
(1, 'Author_Book_1'),
(2, 'Author_Book_2'),
(3, 'Author_Book_3'),
(4, 'Author_Book_4'),
(5, 'Author_Book_5'),
(6, ' '),
(7, ' ');

-- --------------------------------------------------------

--
-- Структура таблицы `table_authorsOfBook`
--

CREATE TABLE `table_authorsOfBook` (
  `IdBook` int(11) NOT NULL,
  `IdAuthor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_authorsOfBook`
--

INSERT INTO `table_authorsOfBook` (`IdBook`, `IdAuthor`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(1, 5),
(2, 4),
(3, 2),
(4, 1),
(5, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `table_book`
--

CREATE TABLE `table_book` (
  `IdBook` int(11) NOT NULL,
  `BookName` text NOT NULL,
  `Description` text NOT NULL,
  `Price` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_book`
--

INSERT INTO `table_book` (`IdBook`, `BookName`, `Description`, `Price`) VALUES
(1, 'Book_1', 'It is Book_1', '10'),
(2, 'Book_2', 'It is Book_2', '11'),
(3, 'Book_3', 'It is Book_3', '12'),
(4, 'Book_4', 'It is Book_4', '13'),
(5, 'Book_5', 'It is Book_5', '14'),
(6, 'Book_6 ', 'It is Book_6 ', '15 '),
(7, 'Book_7 ', 'It is Book_7 ', '16 ');

-- --------------------------------------------------------

--
-- Структура таблицы `table_genre`
--

CREATE TABLE `table_genre` (
  `idGenre` int(11) NOT NULL,
  `Genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_genre`
--

INSERT INTO `table_genre` (`idGenre`, `Genre`) VALUES
(6, 'Genre_6 '),
(7, 'Genre_7 ');

-- --------------------------------------------------------

--
-- Структура таблицы `table_genreOfBook`
--

CREATE TABLE `table_genreOfBook` (
  `idGenre` int(11) NOT NULL,
  `idBook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_genreOfBook`
--

INSERT INTO `table_genreOfBook` (`idGenre`, `idBook`) VALUES
(6, 6),
(7, 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table_authors`
--
ALTER TABLE `table_authors`
  ADD PRIMARY KEY (`IdAuthor`);

--
-- Индексы таблицы `table_authorsOfBook`
--
ALTER TABLE `table_authorsOfBook`
  ADD KEY `IdBook` (`IdBook`),
  ADD KEY `IdAuthor` (`IdAuthor`);

--
-- Индексы таблицы `table_book`
--
ALTER TABLE `table_book`
  ADD PRIMARY KEY (`IdBook`);

--
-- Индексы таблицы `table_genre`
--
ALTER TABLE `table_genre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Индексы таблицы `table_genreOfBook`
--
ALTER TABLE `table_genreOfBook`
  ADD KEY `idGenre` (`idGenre`),
  ADD KEY `idBook` (`idBook`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table_authors`
--
ALTER TABLE `table_authors`
  MODIFY `IdAuthor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `table_book`
--
ALTER TABLE `table_book`
  MODIFY `IdBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `table_genre`
--
ALTER TABLE `table_genre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `table_authorsOfBook`
--
ALTER TABLE `table_authorsOfBook`
  ADD CONSTRAINT `table_authorsofbook_ibfk_1` FOREIGN KEY (`IdBook`) REFERENCES `table_book` (`IdBook`),
  ADD CONSTRAINT `table_authorsofbook_ibfk_2` FOREIGN KEY (`IdAuthor`) REFERENCES `table_authors` (`IdAuthor`);

--
-- Ограничения внешнего ключа таблицы `table_genreOfBook`
--
ALTER TABLE `table_genreOfBook`
  ADD CONSTRAINT `table_genreofbook_ibfk_1` FOREIGN KEY (`idGenre`) REFERENCES `table_genre` (`idGenre`),
  ADD CONSTRAINT `table_genreofbook_ibfk_2` FOREIGN KEY (`idBook`) REFERENCES `table_book` (`IdBook`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

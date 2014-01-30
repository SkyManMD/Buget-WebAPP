-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 19 2014 г., 19:33
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `buget`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buget_cheltuieli`
--

CREATE TABLE IF NOT EXISTS `buget_cheltuieli` (
  `id_buget_cheltuieli` int(11) NOT NULL AUTO_INCREMENT,
  `id_cheltuiala` int(11) DEFAULT NULL,
  `data_inr_cheltuiala` date DEFAULT NULL,
  `valoare_cheltuiala` float DEFAULT NULL,
  `id_localitate` int(11) DEFAULT NULL,
  `id_institutie` int(11) NOT NULL,
  PRIMARY KEY (`id_buget_cheltuieli`),
  KEY `id_cheltuiala` (`id_cheltuiala`),
  KEY `id_localitate` (`id_localitate`),
  KEY `id_institutie` (`id_institutie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Дамп данных таблицы `buget_cheltuieli`
--

INSERT INTO `buget_cheltuieli` (`id_buget_cheltuieli`, `id_cheltuiala`, `data_inr_cheltuiala`, `valoare_cheltuiala`, `id_localitate`, `id_institutie`) VALUES
(1, 21, '2014-01-08', 300, 3, 1),
(2, 8, '2014-01-08', 500, 3, 1),
(3, 15, '2014-01-08', 1200, 6, 1),
(4, 22, '2014-01-08', 350, 7, 1),
(5, 22, '2014-01-09', 560, 5, 1),
(6, 22, '2014-01-09', 900, 7, 1),
(7, 12, '2014-01-10', 400, 6, 1),
(8, 21, '2014-01-10', 400, 1, 2),
(9, 22, '2014-01-10', 900, 7, 2),
(10, 17, '2014-01-10', 3000, 2, 2),
(11, 5, '2014-01-09', 700, 1, 1),
(12, 21, '2014-01-10', 200, 6, 1),
(13, 21, '2014-01-10', 500, 3, 2),
(14, 18, '2014-01-10', 600, 10, 3),
(15, 19, '2014-01-11', 4000, 1, 7),
(16, 8, '2014-01-31', 20000, 3, 5),
(17, 21, '2014-02-06', 1300, 10, 7),
(18, 5, '2014-03-17', 10000, 8, 2),
(19, 19, '2013-12-31', 2000, 6, 6),
(20, 8, '2013-01-04', 10000, 1, 5),
(21, 2, '2013-02-02', 3500, 3, 2),
(22, 9, '2013-03-17', 1700, 11, 3),
(23, 16, '2013-03-17', 2100, 4, 6),
(24, 5, '2013-04-29', 9000, 5, 2),
(25, 15, '2013-05-09', 1300, 4, 1),
(26, 13, '2013-06-07', 300, 2, 5),
(27, 1, '2013-07-08', 8000, 1, 7),
(28, 19, '2013-06-22', 3500, 1, 6),
(29, 9, '2013-07-30', 2000, 9, 3),
(30, 11, '2013-08-15', 950, 8, 1),
(31, 10, '2013-09-09', 2000, 10, 5),
(32, 3, '2013-10-12', 3400, 6, 3),
(34, 20, '2013-11-20', 4000, 4, 3),
(35, 12, '2013-11-10', 10000, 1, 7),
(36, 3, '2014-02-27', 3000, 5, 1),
(37, 22, '2014-02-12', 4000, 1, 6),
(38, 18, '2013-02-02', 400, 10, 5),
(39, 17, '2013-09-13', 4000, 8, 6),
(40, 1, '2013-04-09', 2500, 2, 2),
(41, 21, '2013-08-12', 700, 4, 6),
(42, 5, '2013-11-14', 1000, 7, 3),
(43, 15, '2013-05-24', 700, 1, 7),
(44, 6, '2013-06-19', 1400, 2, 3),
(45, 12, '2013-09-20', 9000, 9, 5),
(46, 8, '2014-02-11', 2100, 2, 7),
(47, 9, '2013-09-09', 1000, 3, 1),
(48, 6, '2013-05-22', 2000, 11, 5),
(49, 17, '2013-09-01', 2000, 3, 3),
(50, 5, '2013-08-20', 4000, 11, 3),
(51, 17, '2013-02-23', 4000, 11, 3),
(52, 17, '2013-02-09', 4000, 9, 6),
(53, 15, '2013-10-07', 2500, 4, 3),
(54, 8, '2013-05-05', 1250, 8, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `buget_venit`
--

CREATE TABLE IF NOT EXISTS `buget_venit` (
  `id_buget_venit` int(11) NOT NULL AUTO_INCREMENT,
  `id_venit` int(11) DEFAULT NULL,
  `data_inr_venit` date DEFAULT NULL,
  `valoare_venit` float DEFAULT NULL,
  `id_localitate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_buget_venit`),
  KEY `id_venit` (`id_venit`),
  KEY `id_localitate` (`id_localitate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Дамп данных таблицы `buget_venit`
--

INSERT INTO `buget_venit` (`id_buget_venit`, `id_venit`, `data_inr_venit`, `valoare_venit`, `id_localitate`) VALUES
(1, 1, '2013-12-15', 2000, 1),
(2, 1, '2013-12-15', 1500, 1),
(3, 1, '2013-12-16', 1000, 1),
(4, 1, '2013-12-17', 3000, 1),
(5, 1, '2013-12-17', 900, 1),
(6, 2, '2013-12-10', 2500, 1),
(7, 2, '2013-12-18', 4000, 1),
(8, 3, '2014-01-01', 6500, 2),
(9, 3, '2014-01-02', 3000, 2),
(10, 3, '2014-01-02', 3000, 1),
(11, 4, '2014-01-02', 5000, 1),
(12, 3, '2014-01-01', 100, 1),
(13, 3, '2014-01-01', 200, 1),
(14, 1, '2014-01-02', 200, 3),
(15, 1, '2014-01-02', 100, 3),
(16, 1, '2014-01-03', 400, 3),
(17, 2, '2014-01-02', 50, 3),
(18, 2, '2014-01-02', 100, 3),
(19, 2, '2014-01-03', 100, 3),
(20, 3, '2013-12-31', 650, 3),
(21, 3, '2014-01-01', 500, 3),
(22, 4, '2014-01-01', 500, 3),
(23, 4, '2014-02-01', 250, 3),
(24, 3, '2014-01-11', 800, 3),
(25, 3, '2013-10-29', 400, 3),
(26, 5, '2014-02-28', 900, 3),
(27, 5, '2014-01-12', 800, 3),
(28, 5, '2014-01-16', 700, 3),
(29, 5, '2013-09-05', 470, 3),
(30, 5, '2013-08-09', 890, 3),
(31, 6, '2014-01-05', 700, 3),
(32, 7, '2014-01-19', 800, 3),
(33, 7, '2014-01-18', 450, 3),
(34, 6, '2014-01-02', 700, 3),
(35, 7, '2014-02-28', 400, 3),
(36, 7, '2014-01-29', 250, 3),
(37, 8, '2014-03-17', 1000, 3),
(38, 8, '2014-03-19', 1200, 3),
(39, 8, '2014-02-19', 950, 3),
(40, 8, '2014-02-18', 1500, 3),
(41, 4, '2014-01-04', 2000, 1),
(42, 5, '2014-01-04', 700, 1),
(43, 5, '2014-01-05', 500, 1),
(44, 6, '2014-01-05', 750, 1),
(45, 22, '2014-01-06', 850, 10),
(46, 12, '2014-01-05', 200, 10),
(47, 13, '2014-01-05', 950, 9),
(48, 12, '2014-01-07', 800, 3),
(49, 12, '2014-01-07', 700, 3),
(50, 13, '2014-01-07', 900, 3),
(51, 15, '2014-01-07', 200, 11),
(52, 19, '2014-01-07', 400, 1),
(53, 12, '2014-01-02', 500, 1),
(54, 12, '2013-12-01', 900, 10),
(55, 12, '2013-01-02', 100, 11),
(56, 14, '2013-02-28', 250, 10),
(57, 5, '2014-02-01', 700, 3),
(58, 15, '2014-03-17', 1200, 3),
(59, 2, '2013-03-22', 10000, 5),
(60, 12, '2013-04-23', 7000, 7),
(61, 13, '2013-05-01', 3000, 9),
(62, 22, '2013-06-06', 20000, 11),
(63, 13, '2013-06-20', 3700, 11),
(64, 21, '2013-07-08', 2000, 6),
(65, 14, '2013-09-11', 2000, 6),
(66, 15, '2013-11-13', 3500, 4),
(67, 16, '2014-01-15', 800, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `categorii_cheltuieli`
--

CREATE TABLE IF NOT EXISTS `categorii_cheltuieli` (
  `id_cat_cheltuieli` int(11) NOT NULL AUTO_INCREMENT,
  `nume_categ` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cat_cheltuieli`),
  UNIQUE KEY `nume_categ` (`nume_categ`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `categorii_cheltuieli`
--

INSERT INTO `categorii_cheltuieli` (`id_cat_cheltuieli`, `nume_categ`) VALUES
(3, 'Deplasările în interes de serviciu'),
(2, 'Piața mărfurilor și serviciilor'),
(4, 'Primele de asigurare obligatorie de asistența medicală'),
(1, 'Retribuirea muncii');

-- --------------------------------------------------------

--
-- Структура таблицы `categorii_venituri`
--

CREATE TABLE IF NOT EXISTS `categorii_venituri` (
  `id_cat_venit` int(11) NOT NULL AUTO_INCREMENT,
  `nume_categ` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cat_venit`),
  UNIQUE KEY `nume_categ` (`nume_categ`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `categorii_venituri`
--

INSERT INTO `categorii_venituri` (`id_cat_venit`, `nume_categ`) VALUES
(6, 'Alte venituri din activitatea de intreprinzator'),
(4, 'Impozitele interne pe marfuri si servicii'),
(3, 'Impozitele pe proprietate'),
(2, 'Impozitele pe venit'),
(5, 'Incasarile nefiscale'),
(8, 'Mijloace speciale ale instituțiilor publice'),
(7, 'Taxele și plățile administrative'),
(9, 'Transferurile');

-- --------------------------------------------------------

--
-- Структура таблицы `cheltuieli`
--

CREATE TABLE IF NOT EXISTS `cheltuieli` (
  `id_cheltuiala` int(11) NOT NULL AUTO_INCREMENT,
  `nume_cheltuiala` varchar(100) DEFAULT NULL,
  `id_cat_cheltuieli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cheltuiala`),
  UNIQUE KEY `nume_cheltuiala` (`nume_cheltuiala`),
  KEY `id_cat_cheltuieli` (`id_cat_cheltuieli`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `cheltuieli`
--

INSERT INTO `cheltuieli` (`id_cheltuiala`, `nume_cheltuiala`, `id_cat_cheltuieli`) VALUES
(1, 'Salariul funcției', 1),
(2, 'Sporurile la salariul functiei', 1),
(3, 'Retribuirea complementară la salariul funcției', 1),
(5, 'Ajutorul material', 1),
(6, 'Premierile', 1),
(7, 'Alte plăți bănești', 1),
(8, 'Energia electrică', 2),
(9, 'Rechizitele de birou, materiale și obiectele de uz', 2),
(10, 'Manuale, materiale didactice, practica de producție', 2),
(11, 'Cărțile și edițiile perioadice', 2),
(12, 'Alimentația', 2),
(13, 'Medicamente și materiale pentru pansamente', 2),
(14, 'Serviciile de telecomunicație și de poștă', 2),
(15, 'Arendarea mijloacelor de tranport și întreținerea', 2),
(16, 'Reparațiile curente ale clădirilor și încăperilor', 2),
(17, 'Formarea profesională', 2),
(18, 'Combustibilul', 2),
(19, 'Apa și canalizația', 2),
(20, 'Marfurile și serviciile neatribuite altor alineate', 2),
(21, 'Deplasările în interiorul țării', 3),
(22, 'Primele de asigurare obligatorie de asist. medicală', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `institutie_chelt`
--

CREATE TABLE IF NOT EXISTS `institutie_chelt` (
  `id_institutie` int(11) NOT NULL AUTO_INCREMENT,
  `nume_institutie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_institutie`),
  UNIQUE KEY `nume_institutie` (`nume_institutie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `institutie_chelt`
--

INSERT INTO `institutie_chelt` (`id_institutie`, `nume_institutie`) VALUES
(1, 'Autorități executive'),
(3, 'Autorități executive ale admin. pub locale'),
(6, 'Gimnaziul'),
(5, 'Grădinița'),
(7, 'Liceul'),
(2, 'Servicii de stat cu destinație generală');

-- --------------------------------------------------------

--
-- Структура таблицы `localitate`
--

CREATE TABLE IF NOT EXISTS `localitate` (
  `id_localitate` int(11) NOT NULL AUTO_INCREMENT,
  `nume_localitate` varchar(25) DEFAULT NULL,
  `id_raion` int(11) NOT NULL,
  PRIMARY KEY (`id_localitate`),
  UNIQUE KEY `nume_localitate` (`nume_localitate`),
  KEY `id_raion` (`id_raion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `localitate`
--

INSERT INTO `localitate` (`id_localitate`, `nume_localitate`, `id_raion`) VALUES
(1, 'Peresecina', 2),
(2, 'Miclești', 2),
(3, 'Magdacești', 1),
(4, 'Stăuceni', 1),
(5, 'Văduleni', 1),
(6, 'Tătăreşti', 4),
(7, 'Văleni', 4),
(8, 'Cosăuţi', 3),
(9, 'Jevreni', 6),
(10, 'Alexăndreni', 5),
(11, 'Căpriana', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `raion`
--

CREATE TABLE IF NOT EXISTS `raion` (
  `id_raion` int(11) NOT NULL AUTO_INCREMENT,
  `nume_raion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_raion`),
  UNIQUE KEY `nume_raion` (`nume_raion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `raion`
--

INSERT INTO `raion` (`id_raion`, `nume_raion`) VALUES
(4, 'Cahul'),
(1, 'Chișinău'),
(6, 'Criuleni'),
(5, 'Edineț'),
(2, 'Orhei'),
(3, 'Soroca'),
(7, 'Strășeni');

-- --------------------------------------------------------

--
-- Структура таблицы `venituri`
--

CREATE TABLE IF NOT EXISTS `venituri` (
  `id_venit` int(11) NOT NULL AUTO_INCREMENT,
  `nume_venit` varchar(100) DEFAULT NULL,
  `id_cat_venit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_venit`),
  KEY `id_cat_venit` (`id_cat_venit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `venituri`
--

INSERT INTO `venituri` (`id_venit`, `nume_venit`, `id_cat_venit`) VALUES
(1, 'Impozitul pe venitul din salariu', 2),
(2, 'Impozitul pe venitul din activitatea de intreprinzator', 2),
(3, 'Impozitul funciar pe terenurile cu destinație agricola', 3),
(4, 'Impozitul funciar pe terenurile cu o altă destinație ', 3),
(5, 'Impozitul funciar încasat de la persoanele fizice', 3),
(6, 'Impozitul pe terenurile imobiliare a persoanelor fizice', 3),
(7, 'Impozitul pe terenurile imobiliare a persoanelor juridice', 3),
(8, 'Impozitul funciar pe pașuni și fînețe', 3),
(9, 'Taxa de licență pentru practicarea unui anumit gen de activitate', 4),
(10, 'Taxa de organizare a licitațiilor și loteriilor', 4),
(11, 'Venit încasări nefiscale', 5),
(12, 'Dobînzile aferente mijloacelor bănești', 6),
(13, 'Plata pentru arenda pentru terenurile cu destinație agricolă', 6),
(14, 'Plata pentru arenda pentru terenurile cu o altă destinație', 6),
(15, 'Taxa pentru patenta de întreprinzător', 6),
(16, 'Taxa de piață', 7),
(17, 'Taxa pentru amenajarea teritoriului', 7),
(18, 'Taxa pentru unitățile comerciale și/sau de prestări servicii', 7),
(19, 'Alte încasări', 7),
(20, 'Mijloace speciale', 8),
(21, 'Transferurile pentru cheltuielile curente primite de la bugetari', 9),
(22, 'Transferurile curente de la bugeturile raionale', 9);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `buget_cheltuieli`
--
ALTER TABLE `buget_cheltuieli`
  ADD CONSTRAINT `buget_cheltuieli_ibfk_2` FOREIGN KEY (`id_cheltuiala`) REFERENCES `cheltuieli` (`id_cheltuiala`),
  ADD CONSTRAINT `buget_cheltuieli_ibfk_3` FOREIGN KEY (`id_localitate`) REFERENCES `localitate` (`id_localitate`),
  ADD CONSTRAINT `buget_cheltuieli_ibfk_4` FOREIGN KEY (`id_institutie`) REFERENCES `institutie_chelt` (`id_institutie`);

--
-- Ограничения внешнего ключа таблицы `buget_venit`
--
ALTER TABLE `buget_venit`
  ADD CONSTRAINT `buget_venit_ibfk_2` FOREIGN KEY (`id_venit`) REFERENCES `venituri` (`id_venit`),
  ADD CONSTRAINT `buget_venit_ibfk_3` FOREIGN KEY (`id_localitate`) REFERENCES `localitate` (`id_localitate`);

--
-- Ограничения внешнего ключа таблицы `cheltuieli`
--
ALTER TABLE `cheltuieli`
  ADD CONSTRAINT `cheltuieli_ibfk_1` FOREIGN KEY (`id_cat_cheltuieli`) REFERENCES `categorii_cheltuieli` (`id_cat_cheltuieli`);

--
-- Ограничения внешнего ключа таблицы `localitate`
--
ALTER TABLE `localitate`
  ADD CONSTRAINT `localitate_ibfk_1` FOREIGN KEY (`id_raion`) REFERENCES `raion` (`id_raion`);

--
-- Ограничения внешнего ключа таблицы `venituri`
--
ALTER TABLE `venituri`
  ADD CONSTRAINT `venituri_ibfk_1` FOREIGN KEY (`id_cat_venit`) REFERENCES `categorii_venituri` (`id_cat_venit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

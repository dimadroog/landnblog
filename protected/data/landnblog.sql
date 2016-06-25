-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 24 2016 г., 16:44
-- Версия сервера: 5.5.49-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `landnblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `preview` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `preview`, `content`, `date`, `publish`) VALUES
(1, 'lightSlider', '<p>assa</p>\r\n', '<p>asassa</p>\r\n', '1407441600', 1),
(3, 'How to disable time in Bootstrap DateTimePicker?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1469394000', 1),
(5, 'Sets the picker default date/time. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1471986000', 0),
(10, 'fg', '', '', '1466715600', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `article_category`
--

CREATE TABLE IF NOT EXISTS `article_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `category_id`) VALUES
(21, 6, 23),
(22, 6, 24),
(23, 6, 22),
(24, 3, 3),
(25, 2, 27),
(26, 2, 28),
(28, 5, 3),
(29, 5, 23),
(30, 5, 24),
(31, 4, 3),
(33, 1, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publish` int(11) NOT NULL,
  `publish_menu` int(11) NOT NULL,
  `background` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `bg_style` varchar(255) NOT NULL,
  `animate` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `block`
--

INSERT INTO `block` (`id`, `alias`, `name`, `content`, `publish`, `publish_menu`, `background`, `bg_color`, `bg_style`, `animate`, `weight`) VALUES
(1, 'footer', 'Футер', '', 1, 0, '', '', 'background-repeat: no-repeat; background-size: 100%;', '', 3),
(2, 'slider', 'Слайдер 100%', '<h2 style="text-align: center;">Это&nbsp;слайдер!</h2>\r\n\r\n<h4>Это текст перед слайдером</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="http://localhost/landnblog/static/wysiwyg/responsive_filemanager/source/slid4.png?1466596758032" style="width: 150px; height: 60px;" /></p>\r\n\r\n<p><img alt="" src="http://localhost/landnblog/static/wysiwyg/responsive_filemanager/source/slid3.jpg?1466596776513" style="width: 150px; height: 60px;" /></p>\r\n\r\n<p><img alt="" src="http://localhost/landnblog/static/wysiwyg/responsive_filemanager/source/slid2.jpg?1466596783509" style="width: 150px; height: 60px;" /></p>\r\n\r\n<p><img alt="" src="http://localhost/landnblog/static/wysiwyg/responsive_filemanager/source/slid1.jpg?1466596794384" style="width: 150px; height: 60px;" /></p>\r\n', 1, 0, '', '', 'background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: top center;', '', 1),
(3, 'contact', 'Контакты', '<h1 style="text-align: center;">Связаться с нами</h1>\r\n\r\n<h3>Вы можете написать нам заполнив форму ниже.</h3>\r\n', 1, 1, '', '', 'background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: top center;', '', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'php'),
(3, 1, 'классы'),
(5, 0, 'css'),
(6, 5, 'overflow'),
(22, 1, 'функции'),
(23, 3, 'абстрактные'),
(24, 3, 'статические'),
(25, 3, 'область видимости'),
(26, 22, 'наследование'),
(27, 22, 'пользовательские'),
(28, 22, 'встроенные');

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` text NOT NULL,
  `seo_keywords` text NOT NULL,
  `bootstrap_theme` varchar(255) NOT NULL,
  `navbar_position` varchar(255) NOT NULL,
  `navbar_theme` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `super_password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `articles` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `sitename`, `seo_title`, `seo_description`, `seo_keywords`, `bootstrap_theme`, `navbar_position`, `navbar_theme`, `password`, `super_password`, `email`, `articles`) VALUES
(1, 'My Landing Page', 'Мой одностраничный сайт', 'Описание сайта', 'Ключевые слова', 'bootstrap_standstone', 'navbar-fixed-top', 'navbar-default', '66b65567cedbc743bda3417fb813b9ba', '1acd9c7e06f217cd759345b99d372d31', 'mail@mail', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

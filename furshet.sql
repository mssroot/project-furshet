-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 22 2016 г., 16:48
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `furshet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `your_name` varchar(125) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `subject` varchar(125) DEFAULT NULL,
  `message` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`contact_id`, `your_name`, `email`, `subject`, `message`) VALUES
(1, 'test two', 'test@two.com', 'test two subject', 'test two');

-- --------------------------------------------------------

--
-- Структура таблицы `galary`
--

CREATE TABLE `galary` (
  `galary_id` int(11) NOT NULL,
  `food_big` varchar(125) DEFAULT NULL,
  `food_big_size` int(11) NOT NULL,
  `food_small` varchar(125) DEFAULT NULL,
  `food_small_size` int(11) NOT NULL,
  `drink_big` varchar(125) DEFAULT NULL,
  `drink_big_size` int(11) NOT NULL,
  `drink_small` varchar(125) DEFAULT NULL,
  `drink_small_size` int(11) NOT NULL,
  `restaurant_big` varchar(125) DEFAULT NULL,
  `restaurant_big_size` int(11) NOT NULL,
  `restaurant_small` varchar(125) DEFAULT NULL,
  `restaurant_small_size` int(11) NOT NULL,
  `dinner_big` varchar(125) DEFAULT NULL,
  `dinner_big_size` int(11) NOT NULL,
  `dinner_small` varchar(125) DEFAULT NULL,
  `dinner_small_size` int(11) NOT NULL,
  `dessert_big` varchar(125) DEFAULT NULL,
  `dessert_big_size` int(11) NOT NULL,
  `dessert_small` varchar(125) DEFAULT NULL,
  `dessert_small_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `galary`
--

INSERT INTO `galary` (`galary_id`, `food_big`, `food_big_size`, `food_small`, `food_small_size`, `drink_big`, `drink_big_size`, `drink_small`, `drink_small_size`, `restaurant_big`, `restaurant_big_size`, `restaurant_small`, `restaurant_small_size`, `dinner_big`, `dinner_big_size`, `dinner_small`, `dinner_small_size`, `dessert_big`, `dessert_big_size`, `dessert_small`, `dessert_small_size`) VALUES
(1, NULL, 0, '63812-android-phone.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(2, NULL, 0, '32506-wrist-watch.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(3, NULL, 0, '44497-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(4, NULL, 0, '82920-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(5, NULL, 0, '85053-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(6, NULL, 0, '40205-tree.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(7, NULL, 0, NULL, 0, NULL, 0, '95072-lcd-tv.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(8, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '71569-external-hard-disk.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '39145-external-hard-disk.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(10, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '5749-android-phone.jpg', 0, NULL, 0, NULL, 0),
(11, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '40166-external-hard-disk.jpg', 0),
(12, NULL, 0, '66149-wrist-watch.jpg', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(13, NULL, 0, '26473-android-phone.jpg', 3, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(14, NULL, 0, '26539-external-hard-disk.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(15, NULL, 0, '98400-external-hard-disk.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(16, NULL, 0, '89401-lcd-tv.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(17, NULL, 0, NULL, 0, NULL, 0, '7000-tree.jpg', 100, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(18, NULL, 0, NULL, 0, NULL, 0, '64208-wrist-watch.jpg', 4, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(19, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '30236-wrist-watch.jpg', 4, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(20, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '20288-external-hard-disk.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(21, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '13366-lcd-tv.jpg', 2, NULL, 0, NULL, 0),
(22, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '67034-android-phone.jpg', 3, NULL, 0, NULL, 0),
(23, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '37170-lcd-tv.jpg', 2),
(24, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '66260-lcd-tv.jpg', 2),
(25, NULL, 0, '44830-external-hard-disk.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(26, '1499-external-hard-disk.jpg', 2, '89866-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(27, '9425-wrist-watch.jpg', 4, '38945-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(28, '45176-tree.jpg', 100, '77375-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(29, NULL, 0, NULL, 0, '40123-lcd-tv.jpg', 2, '67513-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(30, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '92420-external-hard-disk.jpg', 2, '65860-', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(31, '94967-lcd-tv.jpg', 2, '98676-lcd-tv.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(32, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '71167-android-phone.jpg', 3, '39711-android-phone.jpg', 3, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(33, '83338-wrist-watch.jpg', 4, '73371-wrist-watch.jpg', 4, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(34, '98965-android-phone.jpg', 3, '3927-android-phone.jpg', 3, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(35, NULL, 0, NULL, 0, '87929-tree.jpg', 100, '19778-tree.jpg', 100, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(36, NULL, 0, NULL, 0, '61760-lcd-tv.jpg', 2, '12597-lcd-tv.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(37, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '46422-android-phone.jpg', 3, '31641-android-phone.jpg', 3, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(38, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '61170-external-hard-disk.jpg', 2, '19608-external-hard-disk.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(39, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '82724-wrist-watch.jpg', 4, '45442-wrist-watch.jpg', 4, NULL, 0, NULL, 0),
(40, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '72325-tree.jpg', 100, '33264-tree.jpg', 100, NULL, 0, NULL, 0),
(41, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '35919-android-phone.jpg', 3, '14349-android-phone.jpg', 3),
(42, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '43388-external-hard-disk.jpg', 2, '45427-external-hard-disk.jpg', 2),
(43, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '59724-', 0, '26920-android-phone.jpg', 3),
(44, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '56438-android-phone.jpg', 3, '74507-android-phone.jpg', 3),
(45, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '10224-android-phone.jpg', 3, '69416-android-phone.jpg', 3, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(46, '89927-lcd-tv.jpg', 2, '54427-lcd-tv.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(47, NULL, 0, NULL, 0, '3803-tree.jpg', 100, '97825-tree.jpg', 100, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(48, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '38959-android-phone.jpg', 3, '64034-android-phone.jpg', 3),
(49, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '88370-external-hard-disk.jpg', 2, '32554-external-hard-disk.jpg', 2),
(50, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '44016-android-phone.jpg', 3, '5043-android-phone.jpg', 3, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(51, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '4369-external-hard-disk.jpg', 2, '25469-external-hard-disk.jpg', 2, NULL, 0, NULL, 0, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(125) DEFAULT NULL,
  `login_password` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `reservetion`
--

CREATE TABLE `reservetion` (
  `reservetion_id` int(11) NOT NULL,
  `full_name` varchar(125) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `phone_number` varchar(125) DEFAULT NULL,
  `how_many` varchar(125) DEFAULT NULL,
  `reservetion_date` varchar(125) DEFAULT NULL,
  `phone_no` varchar(125) DEFAULT NULL,
  `message` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `reservetion`
--

INSERT INTO `reservetion` (`reservetion_id`, `full_name`, `email`, `phone_number`, `how_many`, `reservetion_date`, `phone_no`, `message`) VALUES
(1, 'test one', 'test@one.com', '123', '2 People', '06/16/2016', '123', 'test one message');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `file` varchar(125) DEFAULT NULL,
  `file_size` varchar(125) DEFAULT NULL,
  `brand` varchar(125) DEFAULT NULL,
  `title` varchar(125) DEFAULT NULL,
  `paragraph` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`slider_id`, `file`, `file_size`, `brand`, `title`, `paragraph`) VALUES
(1, '69129-android-phone.jpg', '2.7890625', 'test one ', 'test one title', 'test one paragraph'),
(2, '53173-tree.jpg', '99.55078125', 'brand', 'title', 'paragraph'),
(3, '58090-lcd-tv.jpg', '1.7353515625', 'test three', 'test three', 'test three');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Индексы таблицы `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`galary_id`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Индексы таблицы `reservetion`
--
ALTER TABLE `reservetion`
  ADD PRIMARY KEY (`reservetion_id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `galary`
--
ALTER TABLE `galary`
  MODIFY `galary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `reservetion`
--
ALTER TABLE `reservetion`
  MODIFY `reservetion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

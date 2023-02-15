-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2022 г., 12:53
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `babushkin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `discription`, `image`) VALUES
(1, 'Mad Catz R.A.T. 1 White', 2390, 'Серия R.A.T. отличается высокой прочностью, а все потому, что при создании мыши использовались только качественные материалы и компоненты. Основа философии R.A.T. 1+ White — это сверхлегкий надежный каркас и идеально сбалансированное положение сенсора, что позволяет оптимизировать процесс перемещения датчика по коврику', 'img/products/product-1.jpg'),
(2, 'HyperX Pulsefire Haste', 3940, 'Медовые соты и как следствие — очень скромный вес, хорошая функциональность и надежные переключатели TTC Golden, которые прекрасно защищены от попадания пыли. Плюс к этому гибкий кабель HyperFlex USB и тефлоновые ножки, сделанные из чистого материала PTFE. С ней вы сможете двигаться быстрее, стрелять точнее и побеждать еще чаще!', 'img/products/product-2.jpg'),
(3, 'Red Square Model C', 790, 'Если вы ищите современную игровую мышь, выполненную в стильном дизайне, с яркой подсветкой, небольшим весом и симметричной формой, то Model C от компании Red Square отлично вам подойдет! Вдобавок ко всему прочему, мышка оборудована тефлоновыми ножками, которые находятся на обратной поверхности устройства и в существенной степени улучшают скольжение. Вы сможете перемещать мышку по коврику настолько быстро, насколько вы этого захотите!', 'img/products/product-3.jpg'),
(4, 'Corsair Katar PRO', 2190, 'Corsair Katar PRO Wireless — это легкая беспроводная мышка, которая весит всего 96 грамм. В ней используется два варианта подключения: Slipstream (2,4 ГГц) и Bluetooth с минимальной задержкой, благодаря чему вы всегда сможете выбрать оптимальный. А за счет своей симметричной формы и небольших размеров девайс вполне подойдет для обхвата ладонью или пальцами. И тут есть вариативность!', 'img/products/product-4.jpg'),
(5, 'Razer Naga Trinity', 5190, 'Naga Trinity - это современная высококлассная игровая мышь от компании Razer, призванная обеспечить максимум контроля в любой игре. Она создает наилучшие условия для наиболее эффективного внутриигрового управления в играх жанра ММО или МОВА благодаря своим широким возможностям для настройки различных параметров работы девайса. Речь идет о множестве различных команд, таких как выбор того или иного оружия, использование различных умений персонажа и прочее. Выходит, что вы сможете мгновенно выполнять огромное количество действий при помощи всего лишь одного устройства. Действительно здорово, не правда ли?', 'img/products/product-5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fio` varchar(355) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(11) DEFAULT '1',
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`, `is_admin`, `phone`) VALUES
(1, 'Бабушкин Константин Вячеславович', 'Ant1dote_7', 'kostyan.babushkin@list.ru', 'f384e72f5050c99724bd77f6f4a183f7', 1, '89502181999'),
(4, 'Зубенко Михаил Петрович', 'Petrovich1', 'platlonist@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 2, '89902001999');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

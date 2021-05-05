-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2021 г., 11:44
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wish_trip`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `trip` varchar(250) NOT NULL,
  `review` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `trip`, `review`) VALUES
(20, 'Nick', 'Индия ', 'Я прекрасно провел отпуск со всей своей семьей, спасибо за отдых и прекрасные воспоминания!!'),
(19, 'Tom', 'Мексика', 'Все супер!'),
(18, 'Piter', 'Индия', 'Все прошло просто супер! Получил от отпуска море впечатлений!!!!!'),
(17, 'Piter', 'Индия', 'Все прошло просто супер! Получил от отпуска море впечатлений!!!!'),
(21, 'Tom', 'Мексика', 'Все было шикарно!'),
(22, 'Nick', 'Мексика', 'Everything was fine');

-- --------------------------------------------------------

--
-- Структура таблицы `trips`
--

CREATE TABLE `trips` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(50) NOT NULL,
  `img_1` varchar(70) NOT NULL,
  `img_2` varchar(70) NOT NULL,
  `img_3` varchar(70) NOT NULL,
  `img_4` varchar(70) NOT NULL,
  `img_bg` varchar(255) NOT NULL,
  `world_part` varchar(255) NOT NULL,
  `country` varchar(70) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` varchar(500) NOT NULL,
  `text` varchar(3000) NOT NULL,
  `time` date NOT NULL,
  `period` int(11) NOT NULL,
  `level` int(5) UNSIGNED NOT NULL,
  `price` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trips`
--

INSERT INTO `trips` (`id`, `img`, `img_1`, `img_2`, `img_3`, `img_4`, `img_bg`, `world_part`, `country`, `title`, `intro`, `text`, `time`, `period`, `level`, `price`) VALUES
(1, 'niagara.jpg', 'niagara_1.jpg', 'niagara_2.jpg', 'niagara_3.jpg', 'niagara_4.jpg', 'niagara_bg.jpg', 'usa', 'США', 'Ниагарский водопад', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-03-24', 1, 1, 1000),
(2, 'la.jpg', 'la_1.jpg', 'la_2.jpg', 'la_3.jpg', 'la_4.jpg', 'la_bg.jpg', 'usa', 'США', 'Лос-Анджелес', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-03-24', 5, 1, 1000),
(3, 'safari.jpg', 'safari_1.jpg', 'safari_2.jpg', 'safari_3.jpg', 'safari_4.jpg', 'safari_bg.jpg', 'africa', 'Танзания', 'Сафари в Танзании', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-03-27', 1, 2, 700),
(4, 'seychelles.jpg', 'seychelles_1.jpg', 'seychelles_2.jpg', 'seychelles_3.jpg', 'seychelles_4.jpg', 'seychelles_bg.jpg', 'africa', 'Сейшеллы', 'Сейшельские острова', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-03-27', 1, 2, 700),
(13, 'norway.jpg', 'norway_1.jpg', 'norway_2.jpg', 'norway_3.jpg', 'norway_4.jpg', 'norway_bg.jpg', 'europe', 'Норвегия', 'Норвегия', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-11', 7, 2, 900),
(12, 'ny.jpg', 'ny_1.jpg', 'ny_2.jpg', 'ny_3.jpg', 'ny_4.jpg', 'ny_bg.png', 'usa', 'США', 'Нью-Йорк', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-04', 5, 1, 700),
(5, 'sidney.jpg', 'sidney_1.jpg', 'sidney_2.jpg', 'sidney_3.jpg', 'sidney_4.jpg', 'sidney_bg.jpg', 'australia', 'Австралия', 'Сидней ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.\r\n', '2021-07-04', 5, 1, 1200),
(6, 'cairns.jpg', 'cairns_1.jpg', 'cairns_2.jpg', 'cairns_3.jpg', 'cairns_4.jpg', 'cairns_bg.jpg', 'australia', 'Австралия', 'Кернс', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-04', 7, 2, 1200),
(7, 'canberra.jpg', 'canberra_1.jpg', 'canberra_2.jpg', 'canberra_3.jpg', 'canberra_4.jpg', 'canberra_bg.jpg', 'australia', 'Австралия', 'Канберра', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-14', 7, 1, 1200),
(8, 'gold-cost.jpg', 'gold-cost_1.jpg', 'gold-cost_2.jpg', 'gold-cost_3.jpg', 'gold-cost_4.jpg', 'gold-cost_bg.jpg', 'australia', 'Австралия', 'Золотой берег Австралии', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-04', 5, 1, 1200),
(9, 'bali.jpg', 'bali_1.jpg', 'bali_2.jpg', 'bali_3.jpg', 'bali_4.jpg', 'bali_bg.jpg', 'ausia', 'о.Бали', 'Бали ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. \r\n\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-18', 10, 1, 1600),
(10, 'maldives.jpg', 'maldives_1.jpg', 'maldives_2.jpg', 'maldives_3.jpg', 'maldives_4.jpg', 'maldives_bg.jpg', 'ausia', 'Мальдивы', 'Мальдивы', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-11', 10, 1, 2000),
(11, 'singapur.jpg', 'singapur_1.jpg', 'singapur_2.jpg', 'singapur_3.jpg', 'singapur_4.jpg', 'singapur_bg.png', 'ausia', 'Сингапур', 'Сингапур ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-05-02', 10, 1, 1000),
(14, 'ischgl.jpg', 'ischgl_1.jpg', 'ischgl_2.jpg', 'ischgl_3.jpg', 'ischgl_4.jpg', 'ischgl_bg.jpeg', 'europe', 'Австраия', 'Ишгль — горнолыжный рай Австрии. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-04-04', 10, 2, 1200),
(15, 'sicilia.jpg', 'sicilia_1.jpg', 'sicila_2.jpg', 'sicilia_3.jpg', 'sicilia_4.jpg', 'sicilia_bg.jpg', 'europe', 'Италия', 'Сицилия', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-06-20', 10, 1, 1400),
(16, 'rio.jpg', 'rio_1.jpg', 'rio_2.jpg', 'rio_3.jpg', 'rio_4.jpg', 'rio_bg.jpg', 'america_latina', 'Бразилия', 'Рио-де-Жанейро', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-03-28', 5, 1, 1000),
(17, 'mexica.jpg', 'mexica_1.jpg', 'mexica_2.jpg', 'mexica_3.jpg', 'mexica_4.jpg', 'mexica_bg.jpg', 'america_latina', 'Мексика', 'Мексика ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-03-20', 10, 1, 1200),
(18, 'toronto.jpg', 'toronto_1.jpg', 'toronto_2.jpg', 'toronto_3.jpg', 'toronto_4.jpg', 'toronto_bg.jpg', 'canada', 'Канада', 'Торонто', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. A tempore vel maiores ab fugit doloribus esse! Aspernatur, temporibus.', '2021-05-23', 7, 1, 800),
(19, 'montreal.jpg', 'montreal_1.jpg', 'montreal_2.jpg', 'montreal_3.jpg', 'montreal_4.jpg', 'montreal_bg.jpg', 'canada', 'Канада', 'Монреаль ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem, modi asperiores, laudantium quisquam placeat molestiae adipisci possimus iure ad temporibus nostrum aspernatur deleniti blanditiis ducimus. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore, voluptate quidem placeat pariatur molestias asperiores ullam iusto nobis iure quo perspiciatis consectetur voluptatibus quaerat enim! Repellendus dolorum facere aliquam quaerat, animi id iste molestias porro atque, possimus delectus, aperiam eaque ab ipsam qui sequi itaque consectetur voluptatum mollitia dignissimos. ', '2021-05-16', 10, 1, 1200);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Tomy', 'tom@gmail.com', '$2y$10$mAwamkoc1eY7FI08hWiNzeLr.33JdVpUwD9ADyYZpp8M4e8GBHutC'),
(2, 'Piter', 'piter@mail.com', '$2y$10$.mP4eHZPnfLmnQXoMUBS4.21OXAYicF7h9EjJTu7wn7ZXRLIc7tBe'),
(3, 'Nick', 'test@mail.com', '$2y$10$XcDTQEObEjgD2ur6V8lGB.FBw5FGLF7ml1JTPXJImJj3ciNuCemNu'),
(4, 'Anastasiia Smieshko', 'anastasiasmeshko22@gmail.com', '$2y$10$N3oWYXRewPFzqXRw/9ShIuh6EAjvmJ8k0MfrnGAUamXnhaTJE4qfG'),
(5, 'Stevy', 'stevy@mail.com', '$2y$10$yjTbjoJmyosWOMCfrMczJuUskCHlNlhbznQYIlJ7Q9q0LI/vRuJba');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trips`
--
ALTER TABLE `trips`
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
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

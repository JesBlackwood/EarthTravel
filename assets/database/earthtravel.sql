-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3305
-- Время создания: Мар 06 2024 г., 15:51
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `earthtravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `product_id`) VALUES
(8, 1, 2),
(10, 1, 6),
(11, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `excursions_date` date NOT NULL,
  `excursions_count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `price_adult` int NOT NULL,
  `price_child` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `time`, `price_adult`, `price_child`) VALUES
(1, 'Золотое кольцо Абхазии (из Адлера)', 'Вас ждет путешествие по \"Золотому Кольцу Абхазии\" на Мерседес Спринтер (20 мест). По маршруту вас будет сопровождать профессиональный гид. Посадка на экскурсию осуществляется с вашего отеля или ближайшей автобусной остановки. Пересечение границы без пересадок. ', 'excursions.png', 12, 1618, 1413),
(2, 'Себу: экскурсия по Хайленду с трансфером из отеля', 'Исследуйте красивое высокогорье Себу с гидом и узнайте больше о его истории. Посетите даосский храм Себу, цветочный сад Сирао, храм Лии и природный парк Маунтин-Вью.', 'top_direction1.png', 5, 4224, 3330),
(3, 'Манила: старый и новый 4-часовой тур по городу', 'Экскурсия по прошлому и настоящему Манилы, включая старый город Манилу, Американское кладбище и мемориал, исторический Интрамурос и форт Сантьяго, а также шумную финансовую столицу Макати.', 'top_direction2.png', 4, 5461, 4500),
(4, 'Природный парк Эдем', 'Город расположен на юге Филиппинских островов, в юго-восточной части острова Минданао. Это высоко урбанизированный город, который служит основным экономическим, финансовым и образовательным центром всего острова. Номинально город попадает под юрисдикцию провинции Давао дель Сюр, на севере город граничит с провинцией Компостелла Вали, на востоке - с заливом Давао, на юге с Давао дель Сюр и на западе - с провинцией северный Котабато.', 'top_direction3.png', 8, 6700, 4200),
(5, 'Эль-Нидо: экскурсия по островам, лагунам и пляжам', 'Откройте для себя залив Бакуит, совершив групповую или частную прогулку на лодке по Эль-Нидо. Остановитесь, чтобы исследовать Тайную лагуну и отдохнуть на песчаных пляжах острова Симидзу и Семи коммандос.', 'cat1.png', 8, 2110, 1950),
(6, 'Тур по сельской местности Багио', 'Откройте для себя яркое культурное наследие города Багио на его шумных рынках, где вы можете поторговаться за уникальные сувениры и отведать местные деликатесы, такие как клубничный тахо и арахисовый биттл.', 'cat2.png', 6, 6589, 6100),
(7, 'Райские и Загадочные Филиппины', 'Мы начинаем наше путешествие в городе, который удивляет - Гонконге. Здесь мы прокатимся на самой длинной канатной дороге в Азии (5,7 км), погуляем по улице ленивых пешеходов, Алее Звёзд и по городскому парку. Посмотрим на город с пика Виктория, с самого высокого здания города. И, конечно же, как обойтись без посещения местных рынков и торговых центров!!!\r\nДалее, нас ждёт потрясающий Макао, куда мы доберемся по самому длинному морскому мосту в мире! Нас ждут современные небоскрёбы и футуристические здания, старинный форт и знаменитые руины собора Святого Павла.', 'cat3.png', 312, 227969, 225550);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin','guest','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `role`) VALUES
(1, 'anna', 'makarova', 'anna.alis.makarova@mail.ru', '123456', 'admin'),
(2, 'Юлия', 'Кузнецова', 'ul@mail.ru', '123456', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

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
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

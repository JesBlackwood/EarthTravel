<?php
    session_start();
    
    require_once ("assets/backend/dbconnect.php");

    $product_id = $_GET['id'];
    
    $products = $my_sql->query("SELECT * FROM `products` WHERE id = '$product_id'");

    $product = $products->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EarthTravel - ваш персональный гид в мире путешествий. Здесь вы можете легко найти и забронировать увлекательные туры и экскурсии. Регистрируйтесь на сайте, создавайте личный кабинет, где вы сможете просматривать свои бронирования и отслеживать избранные путевки. Погрузитесь в мир приключений с EarthTravel!">
    <meta name="keywords" content="туры, экскурсии, бронирование туров, путевки, путешествие, отдых, туристический сайт, путеводитель, приключения">
    <meta name="robots" content="all">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/review.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <title>EarthTravel</title>
</head>
<body>
    <!-- Главный баннер -->
    <div class="banner">
        <!-- Меню -->
        <?php
            require_once ("assets/components/header.php");
        ?>
        <!-- Меню -->
        <div class="info__excursions">
            <h2>Автобусный тур</h2>
            <h1><?= $product['name'] ?></h1>
            <div class="button__excursions">
                <a href="#reservation" class="excursions__btn">Забронировать</a>
                <form class="favorites__form" action="assets/backend/add_favorites.php?id=<?= $product["id"] ?>" method="post">
                    <button type="submit" class="favorites__btn">
                        <img src="assets/img/heart.svg" alt="Favorites" title="Favorites">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Главный баннер -->
    <img class="decore1" src="assets/img/decore1.svg" alt="Декоративный элемент" title="decore">
    <!-- Описание экскурсии -->
    <div class="description__tour">
        <div class="description">
            <h2>Описание экскурсии</h2>
            <p><?= $product['description'] ?></p>
        </div>
        <div class="price__card">
            <div class="price__item">
                <img class="img-money" src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                <p class="price"><?= $product['price_adult'] ?> ₽</p>
                <p class="ticket">Взрослый билет</p>
            </div>
            <div class="price__item">
                <img class="img-money" src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                <p class="price"><?= $product['price_child'] ?> ₽</p>
                <p class="ticket">Детский билет</p>
            </div>
            <div class="price__item">
                <img class="img-time" src="assets/img/time.svg" alt="Иконка времени экскурсии" title="time">
                <p class="time"><?= $product['time'] ?> ч.</p>
            </div>
        </div>
    </div>
    <!-- Описание экскурсии -->
    <!-- Описание маршрута -->
    <div class="description__route">
        <div class="image__route">
            <img src="assets/backend/upload_images/<?= $product['image'] ?>" alt="Excursions" title="Excursions">
        </div>
        <div class="route">
            <h2>Описание маршрута</h2>
            <ul class="list__route">
                <li><span>Город Гагра, Колоннада, ресторан "Гагрипш", Парк принца Ольденбурского;</span></li>
                <li><span>Смотровая площадка "Прощай Родина", "Чабгарский" карниз, Подвесной мост через реку "Бзыбь";</span></li>
                <li><span>Дегустация сыра, меда, вина, чачи (входит в стоимость экскурсии), Голубое Озеро, Юпшарский каньон ("Каменный мешок"), Озеро "Рица", Водопады "Девичьи и мужские слезы";</span></li>
            </ul>
        </div>
    </div>
    <!-- Описание маршрута -->
    <!-- Бронирование -->
    <div class="reservation" id="reservation">
        <img src="assets/img/form.png" alt="картинка для формы" title="form">
        <form class="form__block" action="assets/backend/add_orders.php?id=<?= $product["id"] ?>" method="post">
            <h2 class="form__name">Забронировать тур</h2>
            <label>
                <input id="reservation2" class="excursions__input" type="date" name="excursions_date" placeholder="Желаемая дата" required>                       
            </label>
            <label>
                <input id="reservation3" class="excursions__input" type="number" name="excursions_count" min="1" max="10" placeholder="Количество человек" required>
            </label>
            <button type="submit" class="reservation__btn">Забронировать</button>
        </form>
    </div>
    <!-- Бронирование -->
    <!-- Подвал -->
    <?php
        require_once ("assets/components/footer.php");
    ?>
    <!-- Подвал -->
</body>
</html>
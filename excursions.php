<?php
    session_start();

    require_once ("assets/backend/dbconnect.php");
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
    <link rel="stylesheet" href="assets/css/excursions.css">
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
        <div class="block__excursions">
            <h1>Наши экскурсии</h1>
            <form class="form__excursions" action="excursions.php" method="post">
                <input type="hidden" name="id">
                <label>
                    <input class="excursions__input" id="excursions__input1" type="text" name="excursionsName" placeholder="Куда">
                </label>
                <label>
                    <input class="excursions__input" id="excursions__input2" type="date" name="excursionsDate" placeholder="Желаемая дата">                       
                </label>
                <label>
                    <input class="excursions__input" id="excursions__input3" type="number" name="excursionsСount" min="1" max="10" placeholder="Количество человек">
                </label>
                <button type="submit" class="subscribe__btn">Показать</button>
            </form>
        </div>
    </div>
    <!-- Главный баннер -->
    <img class="decore1" src="assets/img/decore1.svg" alt="Декоративный элемент" title="decore">
    <!-- Список туров -->
    <div class="list__excursions">
        <h4 class="subtitle__sales">Наши туры</h4>
        <?php
            if(isset($_POST['excursionsName'])){

                $excursionsName = $_POST['excursionsName'];
                $excursionsDate = $_POST['excursionsDate'];
                $excursionsСount = $_POST['excursionsСount'];

                $sqlRequest = "SELECT * FROM `products` WHERE name LIKE '%$excursionsName%'";

                $result = $my_sql->query($sqlRequest);
                if (!$result)
                { echo("Какая-то ошибка"); exit();}

                $products = [];
                while ($product = $result->fetch_assoc()) {
                    $products[] = $product;
                }

                foreach ($products as $product) {
        ?>
        <a href="reviewExcursions.php?id=<?= $product["id"] ?>">
        <div class="card">
            <div class="picture__card">
                <img class="card__image" src="assets/backend/upload_images/<?= $product['image'] ?>" alt="Изображение тура" title="excursions">
            </div>
            <div class="information__card">
                <h4 class="subtitle__card">Автобусный тур</h4>
                <h2 class="heading__card"><?= $product['name'] ?></h2>
                <div class="price__card">
                    <div class="price__item">
                        <img src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                        <p class="price"><?= $product['price_adult'] ?> ₽</p>
                        <p class="ticket">Взрослый билет</p>
                    </div>
                    <div class="price__item">
                        <img src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                        <p class="price"><?= $product['price_child'] ?> ₽</p>
                        <p class="ticket">Детский билет</p>
                    </div>
                    <div class="price__item">
                        <img src="assets/img/time.svg" alt="Иконка времени экскурсии" title="time">
                        <p class="time"><?= $product['time'] ?> часа</p>
                    </div>
                </div>
                <div class="specification__card">
                    <div class="line__card"></div>
                    <p class="description__card"><?= $product['description'] ?></p>
                </div>
                <div class="button__card">
                    <a href="reviewExcursions.php?id=<?= $product["id"] ?>" class="excursions__btn">Подробнее</a>
                    <form class="favorites__form" action="assets/backend/add_favorites.php?id=<?= $product["id"] ?>" method="post">
                        <button type="submit" class="favorites__btn">
                            <img src="assets/img/heart.svg" alt="Favorites" title="Favorites">
                        </button>
                    </form>
                    <?php
                        if ($_SESSION['role'] === 'admin') {
                    ?>
                        <a class="delete_link" href="assets/backend/delete.php?id=<?= $product["id"] ?>&action=products"><img src="assets/img/delete.png" alt="Delete" title="Delete"></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        </a>
        <?php
                }
            } else {

                $sqlRequest = "SELECT * FROM `products`";

                $result = $my_sql->query($sqlRequest);
                if (!$result)
                { echo("Какая-то ошибка"); exit();}

                $products = [];
                while ($product = $result->fetch_assoc()) {
                    $products[] = $product;
                }

                foreach ($products as $product) {
        ?>
        <a href="reviewExcursions.php?id=<?= $product["id"] ?>">
        <div class="card">
            <div class="picture__card">
                <img class="card__image" src="assets/backend/upload_images/<?= $product['image'] ?>" alt="Изображение тура" title="excursions">
            </div>
            <div class="information__card">
                <h4 class="subtitle__card">Автобусный тур</h4>
                <h2 class="heading__card"><?= $product['name'] ?></h2>
                <div class="price__card">
                    <div class="price__item">
                        <img src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                        <p class="price"><?= $product['price_adult'] ?> ₽</p>
                        <p class="ticket">Взрослый билет</p>
                    </div>
                    <div class="price__item">
                        <img src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                        <p class="price"><?= $product['price_child'] ?> ₽</p>
                        <p class="ticket">Детский билет</p>
                    </div>
                    <div class="price__item">
                        <img src="assets/img/time.svg" alt="Иконка времени экскурсии" title="time">
                        <p class="time"><?= $product['time'] ?> часа</p>
                    </div>
                </div>
                <div class="specification__card">
                    <div class="line__card"></div>
                    <p class="description__card"><?= $product['description'] ?></p>
                </div>
                <div class="button__card">
                    <a href="reviewExcursions.php?id=<?= $product["id"] ?>" class="excursions__btn">Подробнее</a>
                    <form class="favorites__form" action="assets/backend/add_favorites.php?id=<?= $product["id"] ?>" method="post">
                        <button type="submit" class="favorites__btn">
                            <img src="assets/img/heart.svg" alt="Favorites" title="Favorites">
                        </button>
                    </form>
                    <?php
                        if ($_SESSION['role'] === 'admin') {
                    ?>
                        <a class="delete_link" href="assets/backend/delete.php?id=<?= $product["id"] ?>&action=products"><img src="assets/img/delete.png" alt="Delete" title="Delete"></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        </a>
        <?php
                }
            }
        ?>
    </div>
    <!-- Список туров -->
    <!-- Подвал -->
    <?php
        require_once ("assets/components/footer.php");
    ?>
    <!-- Подвал -->
</body>
</html>
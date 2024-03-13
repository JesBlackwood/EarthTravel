<?php
    session_start();
    $user_id = $_SESSION["user_id"];

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
    <link rel="stylesheet" href="assets/css/personal_account.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <title>EarthTravel</title>
</head>
<body>
<!-- Shared Container -->
<div class="container">
    <!-- Menu -->
    <?php
        require_once ("assets/components/header.php");
    ?>
    <!-- Menu -->
    <div class="content">
        <!-- Sub-Menu -->
        <div class="left-content">
            <div class="main__block">
                <div class="profile__block">
                    <img class="image-profile" src="assets/img/profile.png" alt="Profile" title="Profile">
                    <p class="profile__mail"><?= $_SESSION['email'] ?></p>
                </div>
                <div class="submenu">
                    <div onclick="contents('favorites')" class="submenu__item">
                        <img src="assets/img/favorites.svg" alt="Favorites" title="Favorites">
                        <p>Favorites</p>
                    </div>
                    <div onclick="contents('payments')" class="submenu__item">
                        <img src="assets/img/payments.svg" alt="Orders" title="Orders">
                        <p>Orders</p>
                    </div>
                </div>
            </div>
            <div class="exit__block">
                <a href="assets/backend/exit.php">
                    <div class="exit__item">
                        <img src="assets/img/exit.svg" alt="Exit" title="Exit">
                        <a href="assets/backend/exit.php"><p>Exit</p></a>
                    </div>
                </a>
            </div>
        </div>
        <!-- Sub-Menu -->
        <!-- Main Field -->
        <div class="right-content">
        <!-- profile -->
        <!-- favorites -->
        <div id="favorites" class="value" style="display: none">
            <h1 class="right__title">Избранное</h1>
            <div class="rows__favorites">
                <?php
                    $sqlRequest = "SELECT * FROM `favorites` WHERE user_id='$user_id' ";

                    $result = $my_sql->query($sqlRequest);
                    if (!$result)
                    { echo("Какая-то ошибка"); exit();}

                    $favorites = [];
                    while ($favorite = $result->fetch_assoc()) {
                        $favorites[] = $favorite;
                    }

                    $productsResult = [];
                    
                    foreach($favorites as $favorite) {
                        $product_id = $favorite["product_id"];
                        $request = $my_sql->query("SELECT * FROM `products` WHERE id = '$product_id' ");

                        if($request) {
                            $request = $request->fetch_assoc();
                            $productsResult[] = $request;
                        }
                    }

                    foreach ($productsResult as $favorite) {
                ?>
                <a href="reviewExcursions.php?id=<?= $favorite["id"] ?>">
                <div class="card">
                    <div class="picture__card">
                        <img class="card__image" src="assets/backend/upload_images/<?= $favorite['image'] ?>" alt="Изображение тура" title="excursions">
                    </div>
                    <div class="information__card">
                        <h2 class="heading__card"><?= $favorite['name'] ?></h2>
                        <div class="price__card">
                            <div class="price__item">
                                <img src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                                <p class="price"><?= $favorite['price_adult'] ?> ₽</p>
                                <p class="ticket">Взрослый билет</p>
                            </div>
                            <div class="price__item">
                                <img src="assets/img/money.svg" alt="Иконка стоимости билета" title="price">
                                <p class="price"><?= $favorite['price_child'] ?> ₽</p>
                                <p class="ticket">Детский билет</p>
                            </div>
                            <div class="price__item">
                                <img src="assets/img/time.svg" alt="Иконка времени экскурсии" title="time">
                                <p class="time"><?= $favorite['time'] ?> часа</p>
                            </div>
                        </div>
                        <div class="button__card">
                            <a href="reviewExcursions.php?id=<?= $favorite["id"] ?>" class="excursions__btn">Подробнее</a>
                            <a class="delete_link" href="assets/backend/delete.php?id=<?= $favorite["id"] ?>&action=favorites"><img src="assets/img/delete.png" alt="Delete" title="Delete"></a>
                        </div>
                    </div>
                </div>
                </a>
                <?php
                    }
                ?>
            </div>
        </div>
        <!-- favorites -->
        <!-- payments -->
        <div id="payments" class="value" style="display: none">
            <h1 class="right__title">Заказы</h1>
            <?php
                    $sqlRequest = "SELECT * FROM `orders` WHERE user_id='$user_id' ";

                    $result = $my_sql->query($sqlRequest);
                    if (!$result)
                    { echo("Какая-то ошибка"); exit();}

                    $orders = [];
                    while ($order = $result->fetch_assoc()) {
                        $orders[] = $order;
                    }

                    $productsResult = [];
                    
                    foreach($orders as $order) {
                        $product_id = $order["product_id"];
                        $request = $my_sql->query("SELECT * FROM `products` WHERE id = '$product_id' ");

                        if($request) {
                            $request = $request->fetch_assoc();
                            $productsResult[] = $request;
                        }
                    }

                    foreach ($productsResult as $order) {
                ?>
                <?php
                    }
                ?>
        </div>
        <!-- payments -->
        </div>
        <!-- Main Field -->
    </div>
<!-- Shared Container -->
</div>
<script src="assets/js/personal_account.js"></script>
</body>
</html>
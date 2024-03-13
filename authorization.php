<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EarthTravel - ваш персональный гид в мире путешествий. Здесь вы можете легко найти и забронировать увлекательные туры и экскурсии. Регистрируйтесь на сайте, создавайте личный кабинет, где вы сможете просматривать свои бронирования и отслеживать избранные путевки. Погрузитесь в мир приключений с EarthTravel!">
    <meta name="keywords" content="traveling, туры, экскурсии, бронирование туров, путевки, путешествие, отдых, туристический сайт, путеводитель, приключения">
    <meta name="robots" content="all">
    <link rel="stylesheet" href="assets/css/registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <title>EarthTravel</title>
</head>
<body>
    <h1>Войти в аккаунт</h1>
    <form class="form__authorization" action="assets/backend/test_user.php" method="post">
        <label>
            <input name="email" type="email" placeholder="Email" required>
        </label>
        <label>
            <input name="password" type="password" placeholder="Пароль" required>
        </label>
        <button type="submit" class="form__btn">Войти</button>
        <a class="link" href="registration.php">Еще нет аккаунта? Зарегестрируйтесь</a>
    </form>
</body>
</html>
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
    <link rel="stylesheet" href="assets/css/style.css">
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
        <!-- Популярные экскурсии -->
        <div class="block__excursions">
            <div class="left__excursions">
                <h4>Горы | Равнины | Пляжи</h4>
                <h1>Проведите свой отпуск<br>с нашими мероприятиями</h1>

                <div class="excursions__popular">
                    <h2>НАИБОЛЕЕ ПОПУЛЯРНЫЕ</h2>
                    <div class="excursions__row">
                        <a href="excursions.php" class="excursions__scale">
                            <div class="excursions__item">
                                <img class="excursions__img" src="assets/img/server/cat1.png" alt="Наиболее популярная на данный момент экскурсия" title="Популярная экскурсия">
                                <h3>Поездка в Палаван</h3>
                                <p>
                                    <img class="people" src="assets/img/people.svg" alt="Иконка для количества людей" title="Иконка людей">
                                    31 человек собирается
                                </p>
                            </div>
                        </a>
                        <a href="excursions.php" class="excursions__scale">
                            <div class="excursions__item">
                                <img class="excursions__img" src="assets/img/server/cat2.png" alt="Наиболее популярная на данный момент экскурсия" title="Популярная экскурсия">
                                <h3>Поездка в Багио</h3>
                                <p>
                                    <img class="people" src="assets/img/people.svg" alt="Иконка для количества людей" title="Иконка людей">
                                    31 человек собирается
                                </p>
                            </div>
                        </a>
                        <a href="excursions.php" class="excursions__scale">
                            <div class="excursions__item">
                                <img class="excursions__img" src="assets/img/server/cat3.png" alt="Наиболее популярная на данный момент экскурсия" title="Популярная экскурсия">
                                <h3>Поездка на Боракай</h3>
                                <p>
                                    <img class="people" src="assets/img/people.svg" alt="Иконка для количества людей" title="Иконка людей">
                                    31 человек собирается
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <button onclick="window.open('excursions.php');" target="_parent" class="btn">
                    К экскурсиям
                    <img src="assets/img/arrow.svg" alt="Стрелка для перехода к экскурсиям" title="arrow">
                </button>
            </div>
            <!-- Социальные сети -->
            <div class="right__excursions">
                <div class="header__socialNetwork">
                    <a href="https://vk.com" target="_blank">
                        <img class="socialNetwork" src="assets/img/vk.svg" alt="Иконка социальной сети - vk" title="vk">
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <img class="socialNetwork" src="assets/img/inst.svg" alt="Иконка социальной сети - instagram" title="instagram">
                    </a>
                    <a href="https://facebook.com" target="_blank">
                        <img class="socialNetwork" src="assets/img/facebook.svg" alt="Иконка социальной сети - facebook" title="facebook">
                    </a>
                </div>
            </div>
            <!-- Социальные сети -->
        </div>
        <!-- Популярные экскурсии -->
    </div>
    <!-- Главный баннер -->
    <img class="decore1" src="assets/img/decore1.svg" alt="Декоративный элемент" title="decore">
    <!-- Галерея -->
    <div class="block__gallery">
        <div class="title__gallery">
            <h1>Галерея</h1>
            <a href="excursions.php">
                <p>Смотреть все</p>
            </a>
        </div>
        <div class="gallery">
            <div class="gallery__item">
                <a href="excursions.php" class="gallery__scale" id="gallery__item-one">
                    <img src="assets/img/server/gallery1.png" alt="Галерея экскурсий" title="gallery">
                </a>
                <a href="excursions.php" class="gallery__scale" id="gallery__item-two">
                    <img src="assets/img/server/gallery5.png" alt="Галерея экскурсий" title="gallery">
                </a>
                <a href="excursions.php" class="gallery__scale" id="gallery__item-three">
                    <img src="assets/img/server/gallery6.png" alt="Галерея экскурсий" title="gallery">
                </a>
                <a href="excursions.php" class="gallery__scale" id="gallery__item-four">
                    <img src="assets/img/server/gallery7.png" alt="Галерея экскурсий" title="gallery">
                </a>
            </div>
            <div class="gallery__item">
                <a href="excursions.php" class="gallery__scale">
                    <img src="assets/img/server/gallery2.png" alt="Галерея экскурсий" title="gallery">
                </a>
            </div>
            <div class="gallery__item">
                <a href="excursions.php" class="gallery__scale" id="gallery__item-five">
                    <img src="assets/img/server/gallery4.png" alt="Галерея экскурсий" title="gallery">          
                </a>
                <a href="excursions.php" class="gallery__scale" id="gallery__item-six">
                    <img src="assets/img/server/gallery3.png" alt="Галерея экскурсий" title="gallery">
                </a>
                <a href="excursions.php" class="gallery__scale" id="gallery__item-seven">
                    <img src="assets/img/server/gallery8.png" alt="Галерея экскурсий" title="gallery"> 
                </a>
            </div>
        </div>
    </div>
    <!-- Галерея -->
    <!-- Услуги -->
    <div class="block__services">
        <h4 class="subtitle__services">Услуги</h4>
        <h1 class="heading__services">Мы предлагаем лучшие услуги</h1>
        <div class="rows__services">
            <div class="services__item services__scale">
                <img src="assets/img/categories1.png" alt="Картинка предоставляемой услуги" title="services">
                <h2>Погода</h2>
                <p>Рассчитываем <br> комфортные погодные <br> условия специально <br> для вашего тура</p>
            </div>
            <div class="services__item services__scale">
                <img src="assets/img/categories2.png" alt="Картинка предоставляемой услуги" title="services">
                <h2>Лучшие полеты</h2>
                <p>Находите лучшие <br> варианты для перелета <br> между любыми точками <br> мира и бронируйте <br> авиабилеты без комиссий</p>
            </div>
            <div class="services__item services__scale">
                <img src="assets/img/categories3.png" alt="Картинка предоставляемой услуги" title="services">
                <h2>Мероприятия</h2>
                <p>Бронирование билетов на <br> интересующие мероприятия, <br> будь то концерт Мадонны в <br> Париже или Олимпиада</p>
            </div>
        </div>
    </div>
    <img class="decore3" src="assets/img/decore3.svg" alt="Декоративный элемент" title="decore">
    <!-- Услуги -->
    <!-- Топ продаж -->
    <div class="block__sales">
        <h4 class="subtitle__sales">Топ продаж</h4>
        <h1 class="heading__sales">Популярные направления</h1>
        <div class="rows__sales">
            <a href="excursions.php" class="sales__item sales__scale">
                <img class="sales__img" src="assets/img/server/top_direction1.png" alt="Популярное направление в этом месяце" title="top sales">
                <div class="rows__item">
                    <h2>Cebu,Philippines</h2>
                    <h3>$1.2k</h3>
                </div>
                <div class="rows__item">
                    <img src="assets/img/tour.svg" alt="Иконка для тура" title="tour">
                    <p>10-ти дневный тур</p>
                </div>
            </a>
            <a href="excursions.php" class="sales__item sales__scale">
                <img class="sales__img" src="assets/img/server/top_direction2.png" alt="Популярное направление в этом месяце" title="top sales">
                <div class="rows__item">
                    <h2>Manila,Philippines</h2>
                    <h3>$2.2k</h3>
                </div>
                <div class="rows__item">
                    <img src="assets/img/tour.svg" alt="Иконка для тура" title="tour">
                    <p>12-ти дневный тур</p>
                </div>
            </a>
            <a href="excursions.php" class="sales__item sales__scale">
                <img class="sales__img" src="assets/img/server/top_direction3.png" alt="Популярное направление в этом месяце" title="top sales">
                <div class="rows__item">
                    <h2>Davao,Philippines</h2>
                    <h3>$3.6k</h3>
                </div>
                <div class="rows__item">
                    <img src="assets/img/tour.svg" alt="Иконка для тура" title="tour">
                    <p>28-ми дневный тур</p>
                </div>
            </a>
        </div>
    </div>
    <img class="decore2" src="assets/img/decore2.svg" alt="Декоративный элемент" title="decore">
    <!-- Топ продаж -->
    <!-- Бронь поездки -->
    <div class="block__trip">
        <div class="block__trip-left">
            <h4 class="subtitle__trip">Легко и просто</h4>
            <h1 class="heading__trip">Забронируйте поездку в три <br> простых шага</h1>
            <div class="trip__item">
                <img src="assets/img/step1.svg" alt="Иконка для брони шага" title="step">
                <div class="trip__text">
                    <h2>Выберите пункт назначения</h2>
                    <p>Вы можете купить тур прямо на нашем сайте, в офисе продаж EarthTravel в Москве или же воспользоваться услугами туроператоров</p>
                </div>
            </div>
            <div class="trip__item">
                <img src="assets/img/step2.svg" alt="Иконка для брони шага" title="step">
                <div class="trip__text">
                    <h2>Оплатите ваш тур</h2>
                    <p>Забронируйте круиз без предоплаты — бронь будет активна 3 дня, затем аннулируется, если не поступит оплата</p>
                </div>
            </div>
            <div class="trip__item">
                <img src="assets/img/step3.svg" alt="Иконка для брони шага" title="step">
                <div class="trip__text">
                    <h2>Доберитесь до аэропорта в выбранную дату</h2>
                    <p>Чтобы оформить бронирование самостоятельно, перейдите в систему бронирования. Правильно рассчитайте дату, время и вашу возможность добраться до места во время</p>
                </div>
            </div>
            <button class="btn">
                К экскурсиям
                <img src="assets/img/arrow.svg" alt="Стрелка для перехода к экскурсиям" title="arrow">
            </button>
        </div>
        <div class="block__trip-right"></div>
    </div>
    <!-- Бронь поездки -->
    <!-- Подвал -->
    <?php
        require_once ("assets/components/footer.php");
    ?>
    <!-- Подвал -->
</body>
</html>
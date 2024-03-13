<!-- Подписка на рассылку -->
<div class="block__subscribe">
    <h1 class="heading__subscribe">Подпишитесь, чтобы получать информацию, последние новости и другие <br> интересные предложения о EarthTravel</h1>
    <form class="form__subscribe">
        <label>
            <input class="subscribe__input" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="30" required placeholder="Email">
        </label>
        <button class="subscribe__btn">Подписаться</button>
    </form>
</div>
<!-- Подписка на рассылку -->
<!-- Подвал -->
<footer>
    <div class="block__footer">
        <div class="footer__item">
            <img src="assets/img/logo_inversion.svg" alt="Логотип компании EarthTravel" title="logo">
            <p>Забронируйте поездку за минуту!</p>
        </div>
        <div class="footer__item">
            <ul>
                <li><a href="index.php" class="li__footer">Главная</a></li>
                <li><a href="excursions.php" class="li__footer">Экскурсии</a></li>
                <?php
                    if (($_SESSION['role'] == 'admin') or ($_SESSION['role'] == 'user')) {
                ?>
                    <li><a href="personal_account.php?id=<?= $_SESSION['user_id'] ?>" class="li__footer">Личный кабинет</a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="footer__item">
            <ul>
                <li>
                    <img src="assets/img/wh.svg" alt="Иконка социальной сети - WhatsApp" title="WhatsApp">
                    +7 964 944 18 74
                </li>
                <li>
                    <img src="assets/img/tg.svg" alt="Иконка социальной сети - telegram" title="telegram">
                    +7 918 919 98 28
                </li>
                <li>
                    <img src="assets/img/tg.svg" alt="Иконка социальной сети - telegram" title="telegram">
                    Телеграм-бот PeroTravel
                </li>
            </ul>
        </div>
        <div class="footer__item">
            <ul>
                <li>
                    <img src="assets/img/mail.svg" alt="Иконка почты - mail.ru" title="mail">
                    office@perotravel.ru
                </li>
                <li>
                    <a href="https://vk.com" target="_blank">
                        <img class="footer__socialNetwork" src="assets/img/footer__vk.svg" alt="Иконка социальной сети - vk" title="vk">
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <img class="footer__socialNetwork" src="assets/img/footer__inst.svg" alt="Иконка социальной сети - instagram" title="instagram">
                    </a>
                    <a href="https://facebook.com" target="_blank">
                        <img class="footer__socialNetwork" src="assets/img/footer__facebook.svg" alt="Иконка социальной сети - facebook" title="facebook">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- Подвал -->
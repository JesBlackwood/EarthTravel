<header class="header">
    <img src="assets/img/logo.svg" alt="Логотип компании EarthTravel" title="logo">
    <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
        <ul class="ul__header">
            <?php
                if (($_SESSION['role'] == 'admin')) {
            ?>
                <li><a href="admin.php" class="li__header">Админка</a></li>
            <?php
                }
            ?>
            <li><a href="index.php" class="li__header">Главная</a></li>
            <li><a href="excursions.php" class="li__header">Экскурсии</a></li>
            <?php
                if (($_SESSION['role'] == 'admin') or ($_SESSION['role'] == 'user')) {
            ?>
            <li>
                <a href="personal_account.php?id=<?= $_SESSION['user_id'] ?>" class="li__header">
                    <img class="account" src="assets/img/personal_account.svg" alt="Рядом с личным кабинетом его графическое представление" title="account">
                    Личный кабинет   
                </a>
            </li>
            <?php
                }
            ?>
            <?php
                if (($_SESSION['role'] == 'admin') or ($_SESSION['role'] == 'user')) {
            ?>
                <li><a href="assets/backend/exit.php" class="li__header">Выход</a></li>
            <?php
                }
                else {
            ?>
                <li><a href="authorization.php" class="li__header">Войти</a></li>
            <?php
                }
            ?>
        </ul>
    <?php
        }
    ?>
</header>
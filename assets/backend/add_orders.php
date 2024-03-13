<?php
    require_once("dbconnect.php");
    session_start();

    if (!($_SERVER["REQUEST_METHOD"] == "POST")) {
        exit("Неверый метод запроса");
    }
    
    $excursions_date = $_POST["excursions_date"];
    $excursions_count = $_POST["excursions_count"];

    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['id'];

    $result = $my_sql->query("INSERT INTO `orders` (user_id, product_id, excursions_date, excursions_count) VALUES ('$user_id', '$product_id', '$excursions_date', '$excursions_count')");

    $referer = $_SERVER['HTTP_REFERER'];

    header("Location: $referer");
    exit;
?>

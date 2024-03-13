<?php
    // Изменение продуктов
    require_once("dbconnect.php");

    $id = $_POST['id'];

    $name = $_POST["name"];
    $description = $_POST["description"];
    $time = $_POST["time"];
    $price_adult = $_POST["price_adult"];
    $price_child = $_POST["price_child"];

    $my_sql->query("UPDATE `products` SET name = '$name', description = '$description', time = '$time', price_adult = '$price_adult', price_child = '$price_child' WHERE `products`.`id` = '$id'");

    header('Location: http://localhost/EarthTravel/adminProducts.php');
?>
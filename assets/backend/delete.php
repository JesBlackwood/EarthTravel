<?php
    session_start();
    include("dbconnect.php");

    $id = $_GET['id'];
    $user_id = $_SESSION["user_id"];
    $backPage = $_SERVER["HTTP_REFERER"] ?? "/index.php";

    if ($_GET['action'] == 'products'){
        $my_sql->query("DELETE FROM `products` WHERE `products`.`id` = '$id'");
    }

    if ($_GET['action'] == 'favorites'){
        $my_sql->query("DELETE FROM `favorites` WHERE user_id = '$user_id' AND product_id='$id'");
    }

    header("Location: $backPage");

?>
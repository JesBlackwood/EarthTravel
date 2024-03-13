<?php
    require_once("dbconnect.php");
    session_start();

    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['id'];

    if(!$product_id) {
        die("error product");
    }

    $result = $my_sql->query("INSERT INTO `favorites` (user_id, product_id) VALUES ('$user_id', '$product_id')");
    
    if(!$result) {
        die(gettype($user_id));
    }

    $referer = $_SERVER['HTTP_REFERER'];

    header("Location: $referer");
    exit;
?>

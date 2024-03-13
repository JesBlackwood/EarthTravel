<?php

    require_once("dbconnect.php");

    if (!($_SERVER["REQUEST_METHOD"] == "POST")) {
        exit("Неверый метод запроса");
    }

    $name = $_POST["name"];
    $description = $_POST["description"];
    $time = $_POST["time"];
    $price_adult = $_POST["price_adult"];
    $price_child = $_POST["price_child"];
    
    if (!($_FILES && $_FILES['image']['error'] == UPLOAD_ERR_OK)) {
        echo($_FILES['image']['error']);
        exit("Ошибка загрузки файла");
    }

    $fileName = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"], "./upload_images/" . $fileName);

    $sql = "INSERT INTO products (name, description, image, time, price_adult, price_child) VALUES ('$name', '$description', '$fileName', '$time', '$price_adult', '$price_child')";
    $result = $my_sql->query($sql);
    if (!$result) {
        printf("Error: %s", $my_sql->error);
        exit();
    }
    
    $backPage = $_SERVER["HTTP_REFERER"] ?? "/products.php";
    header("Location: $backPage");

?>

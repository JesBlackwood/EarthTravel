<?php
    session_start();
    
    include("dbconnect.php");

    // Валидация входных данных
    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if ($name == "") {
            unset($name);
        }
    }

    if (isset($_POST['surname'])) {
        $surname = trim($_POST['surname']);
        if ($surname == "") {
            unset($surname);
        }
    }
    
    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
        if ($email == "") {
            unset($email);
        }
    }

    if (isset($_POST['password'])) {
        $password = trim($_POST['password']);
        if ($password == "") {
            unset($password);
        }
    }

    if (empty($name) or empty($surname) or empty($email) or empty($password)) {
        exit("Не все поля заполнены");
    }

    if (strlen($password) < 6) {
        exit("Пароль должен быть больше 6-ти символов");
    }

    $dbResult = $my_sql->query("SELECT 'id' FROM users WHERE email='$email'");

    $user = $dbResult->fetch_assoc();

    if (!empty($user['id'])) {
        exit("Такая почта уже занята");
    }

    $insertResult = $my_sql->query("INSERT INTO users (name, surname, email, password) VALUE ('$name', '$surname', '$email', '$password')");

    // Записываю id в Сессию
    if (!$insertResult)
    {
        echo("Какая-то ошибка");
        exit();
    }
        
    $insertResult = $insertResult->fetch_assoc();

    $_SESSION['user_id'] = $insertResult["id"];
    $_SESSION['email'] = $insertResult["email"];
    $_SESSION['role'] = $insertResult["role"];
    // Записываю id в Сессию
    
    header("Location: http://localhost/EarthTravel/");

?>
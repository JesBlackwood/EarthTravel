<?php
    session_start();

// Валидация входных данных
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

    if (empty($email) or empty($password)){
        exit("Не все поля заполнены");
    }

    include("dbconnect.php");

    $dbResult = $my_sql->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if(!$dbResult) {
        exit($my_sql->error);
    }

    $user = $dbResult->fetch_assoc();

    if (empty($user['email'])){
        exit ("Неверная почта или пароль");
    }

    $_SESSION["user_id"] = $user["id"];
    $_SESSION['email']=$user['email'];
    $_SESSION['role']=$user['role'];

    header("Location: http://localhost/EarthTravel/");

    
?>
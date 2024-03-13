<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <title>EarthTravel</title>
</head>
<body>
<!-- Menu -->
<?php
    require_once ("assets/components/header.php");
?>
<!-- Menu -->
<!-- Main Content -->
<div class="wrapper-content">
    <a href="adminProducts.php">
        <div class="card-body">
            <h2>Тур/Экскурсия</h2>
        </div>
    </a>
</div>
<!-- Main Content -->
</body>
</html>
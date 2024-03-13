<?php
    session_start();
    require_once ("assets/backend/dbconnect.php");

    $product_id = $_GET['id'];
    
    $products = $my_sql->query("SELECT * FROM `products` WHERE id = '$product_id'");

    $product = $products->fetch_assoc();

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
<div class="container">
<!-- Menu -->
    <?php
        require_once ("assets/components/header.php");
    ?>
<!-- Menu -->
<!-- Main Content -->
    <div class="wrapper-form">
        <div class="form-add">
            <h2 class="form-add__title">Изменение данных о туре</h2>
            <hr class="form-add__line">
            <form class="form-horizontal" action="assets/backend/update_product.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">

                <input class="form-control" type="text" name="name" placeholder="Название фильма" value="<?= $product['name'] ?>" required>
                
                <textarea class="form-control" name="description" placeholder="Описание фильма" required><?= $product['description'] ?></textarea>
                
                <label class="form-control">
                    <input type="file" name="image" value="<?= $product['image'] ?>">
                </label>

                <input class="form-control" type="number" name="time" placeholder="Время проведения тура" value="<?= $product['time'] ?>" required>

                <input class="form-control" type="number" name="price_adult" placeholder="Цена для взрослого билета" value="<?= $product['price_adult'] ?>" required>

                <input class="form-control" type="number" name="price_child" placeholder="Цена для детского билета" value="<?= $product['price_child'] ?>" required>

                <button class="btn" type="submit">Сохранить изменения</button>

            </form>
        </div>
        </div>
        
        <div class="wrapper_table">
            <div class="table-responsive">
                <table class="table" id="output-categories">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Time</th>
                            <th>Price_adult</th>
                            <th>Price_child</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        require_once ("assets/backend/dbconnect.php");

                        $result = $my_sql->query("SELECT * FROM products");
                        if (!$result)
                        {
                            echo("Какая-то ошибка");
                            exit();
                        }

                        $products = [];
                        while ($product = $result->fetch_assoc())
                        {
                            $products[] = $product;
                        }

                        foreach ($products as $product)
                        {
                    ?>
                    <tr>
                        <th><?= $product['id'] ?></th>
                        <th><?= $product['name'] ?></th>
                        <th><?= $product['description'] ?></th>
                        <th><?= $product['image'] ?></th>
                        <th><?= $product['time'] ?></th>
                        <th><?= $product['price_adult'] ?></th>
                        <th><?= $product['price_child'] ?></th>
                        <th><a href="adminEditProducts.php?id=<?= $product["id"] ?>"><button class="table-btn__update">Изменить<br>данные</button></a></th>
                        <th><a href="assets/backend/delete.php?id=<?= $product["id"] ?>&action=products"><button class="table-btn__delete">Удалить<br>данные</button></a></th>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<!-- Main Content -->

</body>
</html>
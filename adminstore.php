<?php
require_once("connect.php");
session_start();


if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $query = $dbh->query("SELECT COUNT(*) FROM products where name = '" . $name . "'");
    $count = $query->fetchColumn();

    if ($count > 0) {
        $_SESSION['msg'] = "Product already exists.";
    } else {

        //insert to db
        if ($_FILES["img"]) {
            $image = basename($_FILES["img"]["name"]);
            $targetFilePath = "assets/products/" . $image;
            move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);
        }
        $insert = $dbh->query("INSERT INTO products (name,image,price) VALUES('" . $name . "','" . $image . "','" . $price . "')");
        $_SESSION['msg'] = "Product added!";
    }
}


$query = $dbh->query("SELECT * FROM products");
$products = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store | Admin</title>
    <link rel="stylesheet" href="./stylereg.css" />
    <script type="text/javascript">
    <?php

        if ($_SESSION['msg']) {
            echo "alert('" . $_SESSION['msg'] . "')";
            unset($_SESSION['msg']);
        } ?>
    </script>

</head>

<body>
    <?php include('sections/adminheader.php') ?>
    <div class="addProduct-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Add New Product</h3>
            <input type="text" name="name" class="box" placeholder="Enter product name" required>
            <input type="number" min="0" name="price" class="box" placeholder="Enter product price" required>
            <input type="file" name="img" accept="image/jpg, image/jpeg, image/png" class="box" required>
            <input type="submit" value="add product" name="addProduct" class="btn">
        </form>
    </div>

    <section class="store">
        <div class="products">
            <?php foreach ($products as $product): ?>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/<?php echo $product['image']; ?>" alt=""></div>
                <div class="product_name">
                    <?php echo $product['name']; ?>
                </div>
                <div class="box">
                    <div class="price">
                        <?php echo $product['price']; ?> PHP
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>
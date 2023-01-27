<?php
require_once("connect.php");
session_start();

if (!$_SESSION['user']) {
    $_SESSION['msg'] = "You need to login first.";
    header("location: login.php");
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
    <title>Store</title>
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
    <?php include('sections/header.php') ?>
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
                    <a href="checkout.php?id=<?php echo $product['id']; ?>" class="btnstore">Buy Now</a>
                </div>
            </div>

            <?php endforeach; ?>

            <!-- <div class="product-container">
                <div class="product_img"><img src="./assets/products/product1.png" alt=""></div>
                <div class="product_name">The News Crewneck</div>
                <div class="box">
                    <div class="price">100.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product2.png" alt=""></div>
                <div class="product_name">Bauhaus Beanie C</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product3.png" alt=""></div>
                <div class="product_name">The News Crewneck</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product4.png" alt=""></div>
                <div class="product_name">This Is Why Poster</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product5.png" alt=""></div>
                <div class="product_name">RIOT! Edition Crewneck</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product6.png" alt=""></div>
                <div class="product_name">Hard Times Gradient Shapes Kids T-shirt</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product1.png" alt=""></div>
                <div class="product_name">The News Crewneck</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product2.png" alt=""></div>
                <div class="product_name">The News Crewneck</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product3.png" alt=""></div>
                <div class="product_name">The News Crewneck</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product_img"><img src="./assets/products/product1.png" alt=""></div>
                <div class="product_name">The News Crewneck</div>
                <div class="box">
                    <div class="price">70.00 PHP</div>
                    <button class="btnstore">Buy Now</button>
                </div>
            </div> -->
        </div>
    </section>

</body>

</html>
<?php
require_once("connect.php");
session_start();

if (!$_SESSION['user']) {
    $_SESSION['msg'] = "You need to login first.";
    header("location: login.php");
}


$productId = $_GET['id'];
$query = $dbh->query("SELECT * FROM products WHERE id = '$productId'");
$product = $query->fetch();

if ($_POST) {
    $qty = $_POST['qty'];
    $total = $qty * $product['price'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $zip = $_POST['zip'];
    $address = $street . " " . $city . " " . $province . " " . $zip;
    $cardNum = $_POST['cardNum'];
    $expire = $_POST['expire'];
    $ccv = $_POST['ccv'];
    $dateCreated = date("Y-m-d H:i:s");

    $insert = $dbh->query("INSERT INTO orders (productId,qty,address,dateCreated,total,ccNum,ccExp,ccv) VALUES('" . $productId . "','" . $qty . "','" . $address . "','" . $dateCreated . "','" . $total . "','" . $cardNum . "','" . $expire . "','" . $ccv . "')");
    $_SESSION['msg'] = "Successfully ordered " . $qty . " " . $product['name'];
    header("Location: store.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout
        <?php echo $product['name']; ?>
    </title>
    <link rel="stylesheet" href="./stylereg.css" />
</head>


<body>
    <?php include('sections/header.php') ?>

    <div class="checkout-container">
        <form method="POST">
            <h1>
                <i class="checkout"></i>
                Shipping Details
            </h1>
            <div class="checkout_imgContainer">
                <img src="./assets/products/<?php echo $product['image']; ?>" alt="" class="checkout_img" />
            </div>
            <div class="checkout_textContainer">
                <h2>
                    <p>
                        <?php echo $product['name']; ?>
                    </p>
                    <label for="qty">Quantity</label>
                    <input type="number" name="qty" class="qty" value="1" min="0">
                </h2>
                <h3>PRICE:
                    <?php echo $product['price']; ?> PHP
                </h3>
                <h3 class="total">TOTAL:
                    <?php echo $product['price']; ?> php
                </h3>
            </div>
            <div class="name">
                <div>
                    <label for="firstName">First Name</label>
                    <input type="text" required name="firstName">
                </div>
                <div>
                    <label for="lastName">Last Name</label>
                    <input type="text" required name="lastName">
                </div>
            </div>
            <div class="street">
                <label for="name">Street Name, Building, House No.</label>
                <input type="text" required name="street">
            </div>
            <div class="address-info">
                <div>
                    <label for="city">City</label>
                    <input type="text" required name="city">
                </div>
                <div>
                    <label for="province">Province, Region</label>
                    <input type="text" required name="province">
                </div>
                <div>
                    <label for="zip">ZIP</label>
                    <input type="text" required name="zip">
                </div>
            </div>
            <h2>
                <i class="payment"></i> Payment Information
            </h2>
            <div class="cc-num">
                <label for="cardNum">Credit Card No.</label>
                <input type="text" required name="cardNum">
            </div>
            <div class="cc-info">
                <div>
                    <label for="expire">Exp</label>
                    <input type="text" required name="expire">
                </div>
                <div>
                    <label for="ccv">CCV</label>
                    <input type="number" min="0" required name="ccv">
                </div>
            </div>
            <div class="btncheckout">
                <div class="btnpurchase">
                    <button type="submit">Purchase</button>
                </div>
                <div class="btnback">
                    <button onclick="./paramore/store.php">
                        Back to Store
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
    var price = <?php echo $product['price']; ?>;

    var qtyElement = document.querySelector('.qty');
    qtyElement.addEventListener('change', (event) => {
        var totalAmount = event.target.value * price;
        var total = document.querySelector('.total');
        total.textContent = "TOTAL: " + totalAmount + "PHP";
    });
    </script>
</body>

</html>
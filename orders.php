<?php
require_once("connect.php");
session_start();


if ($_GET) {
    $id = $_GET['id'];
    $query = $dbh->query("SELECT COUNT(*) FROM orders where id = '" . $id . "'");
    $count = $query->fetchColumn();

    if ($count > 0) {
        $deleted = $dbh->exec("DELETE FROM orders WHERE id = '$id'");

        if ($deleted > 0) {
            $_SESSION['msg'] = "Deleted order number $id";
            header("Location: orders.php");
            exit();
        }

    } else {
        $_SESSION['msg'] = "Order not found.";
    }

}


$query = $dbh->query("SELECT * FROM orders");
$orders = $query->fetchAll();

$query = $dbh->query("SELECT * FROM products");
$products = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orders | Admin</title>
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
    <section class="accounts">
        <div class="users">
            <?php foreach ($orders as $order): ?>
                <div class="user-container">
                    <p>Order ID:
                        <?php echo $order['id']; ?>
                    </p>

                    <img src="./assets/products/<?php echo $products[$order['productId']]['image']; ?>" alt=""
                        class="checkout_img" />
                    <p>Order time:</p>
                    <?php echo $order['dateCreated']; ?>
                    <p>Quantity:</p>
                    <?php echo $order['qty']; ?>
                    <p>Name:</p>
                    <?php echo $order['name']; ?>
                    <p>Address:</p>
                    <?php echo $order['address']; ?>

                    <a href="orders.php?id=<?php echo $order['id']; ?>" class="btnstore">Remove</a>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</body>

</html>
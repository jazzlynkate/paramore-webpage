<?php
require_once("connect.php");
session_start();


if ($_GET) {
    $id = $_GET['id'];
    $query = $dbh->query("SELECT COUNT(*) FROM users where id = '" . $id . "'");
    $count = $query->fetchColumn();

    if ($count > 0) {
        $deleted = $dbh->exec("DELETE FROM users WHERE id = '$id'");

        if ($deleted > 0) {
            $_SESSION['msg'] = "Deleted user number $id";
            header("Location: accounts.php");
            exit();
        }

    } else {
        $_SESSION['msg'] = "User not found.";
    }

}


$query = $dbh->query("SELECT * FROM users");
$users = $query->fetchAll();

$query = $dbh->query("SELECT * FROM products");
$products = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounts | Admin</title>
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
            <?php foreach ($users as $user): ?>
                <div class="user-container">
                    <p>Username:</p>
                    <?php echo $user['username']; ?>
                    <p>Email Address:</p>
                    <?php echo $user['emailAddress']; ?>

                    <a href="accounts.php?id=<?php echo $user['id']; ?>" class="btnstore">Remove</a>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</body>

</html>
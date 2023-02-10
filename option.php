<?php require_once('connect.php'); ?>
<?php session_start();

if ($_POST) {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="./stylereg.css" />
</head>

<script type="text/javascript">
<?php

    if ($_SESSION['msg']) {
        echo "alert('" . $_SESSION['msg'] . "')";
        unset($_SESSION['msg']);
    } ?>
</script>

<body>
    <?php include('sections/header.php') ?>
    <div class="container center">
        <h1 style="font-size:40px">Hello!</h1>
        <form name="f1" method="POST">
            <div class="form">
                <p style="text-align: center; margin-top: 10px; font-size:19px">🡳 Please click or tap your destination.
                </p>
                <div class="loginuser">
                    <button type="submit" class="button button-block">
                        <a href="http://localhost/paramore/login.php">User</a>
                    </button>
                </div>
                <div class="loginadmin">
                    <button type="submit" class="button button-block">
                        <a href="http://localhost/paramore/loginadmin.php">Admin</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
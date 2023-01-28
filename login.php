<?php require_once('connect.php'); ?>
<?php session_start();

if ($_POST) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = $dbh->query("SELECT * FROM users where username = '$username' and password='$password'");
    $user = $query->fetch();

    if (!$user) {
        $_SESSION['msg'] = "User not found.";
    } else {
        $_SESSION['user'] = $user;
        header("location: store.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
        <h1>Login</h1>
        <form name="f1" method="POST">
            <div class="form">

                <div class="field-wrap">
                    <input type="text" placeholder="Username" required autocomplete="off" name="username" />
                </div>

                <div class="field-wrap">
                    <input type="password" placeholder="Password" required autocomplete="off" name="password"
                        minlength="6" />
                </div>


                <button type="submit" class="button button-block">
                    Login now
                </button>
                <p style="text-align: center; margin-top: 24px;">Not yet registered huh? <a href="register.php">Create
                        an account</a></p>
            </div>
        </form>
    </div>
</body>

</html>
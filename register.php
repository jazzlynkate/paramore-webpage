<?php
require_once("connect.php");
session_start();

if ($_POST) {

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $emailAddress = $_POST['emailAddress'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $dateCreated = date('Y-m-d H:i:s');

  $query = $dbh->query("SELECT COUNT(*) FROM users where username = '" . $username . "'");
  $count = $query->fetchColumn();

  if ($count > 0) {
    $message = "User already exists.";
  } else {
    //insert to db
    $insert = $dbh->query("INSERT INTO users (username,password,firstName,lastName,emailAddress,dateCreated) VALUES('" . $username . "','" . $password . "','" . $firstName . "','" . $lastName . "','" . $emailAddress . "','" . $dateCreated . "')");
    $_SESSION['msg'] = "Account successfully created. You can login now.";
    header("location: login.php");
  }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="./stylereg.css" />
</head>

<script type="text/javascript">
function matchPass() {
    var firstpassword = document.f1.password.value;
    var secondpassword = document.f1.password2.value;

    if (firstpassword == secondpassword) {
        return true;
    } else {
        alert("Password must be same!");
        document.f1.password2.className = "error";
        return false;
    }
}
<?php
if ($_SESSION['msg']) {
  echo "alert('" . $_SESSION['msg'] . "')";
  unset($_SESSION['msg']);
} ?>
</script>

<body>
    <?php include('sections/header.php') ?>
    <div class="container center">
        <h1>Registration</h1>
        <form name="f1" onsubmit="return matchPass()" method="POST">
            <div class="form">
                <div class="field-wrap">
                    <input type="text" placeholder="First Name" name="firstName" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <input type="text" placeholder="Last Name" name="lastName" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <input type="email" placeholder="Email Address" name="emailAddress" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <input type="text" placeholder="Username" name="username" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <input type="password" placeholder="Password" required autocomplete="off" name="password"
                        minlength="6" />
                </div>

                <div class="field-wrap">
                    <input type="password" placeholder="Re-enter Password" required autocomplete="off" name="password2"
                        minlength="6" />
                </div>

                <button type="submit" class="button button-block">
                    Register Now
                </button>
            </div>
        </form>
    </div>
</body>

</html>
<?php

try {
    $dbh = new PDO("mysql:host=localhost;dbname=paramore", "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "Unable to Connect to Server";
}

?>
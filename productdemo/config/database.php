<?php
// used to connect to the database
$username = "root";
$password = "admin";
$dsn = 'mysql:dbname=product;host=localhost;port=3307';

try {
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>

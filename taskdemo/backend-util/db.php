<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'admin';
$DB_NAME = 'task';
$DB_PORT = 3307;
//mysqli_connect(host,username,password,dbname,port,socket);
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
?>

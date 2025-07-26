<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "Electric_meter";

$connect = new mysqli($host, $user, $pass, $db);

if ($connect->connect_error) {
    error_log("Database connection failed: " . $connect->connect_error);

    die("Sorry, we're experiencing technical difficulties.");
}
?>

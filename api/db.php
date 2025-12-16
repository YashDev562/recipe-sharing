<?php
$host = "localhost";
$user = "root";
$pass = "";          // empty in XAMPP
$db   = "recipe-sharing";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

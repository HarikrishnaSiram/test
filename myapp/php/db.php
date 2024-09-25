<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "myapp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Lab9";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$sql = "CREATE DATABASE lab9";

//$conn->query($sql);
//$conn->close();
?>
<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "myapp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully using MySQLi (Object-oriented)";
$conn->close();
?>
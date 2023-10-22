<?php
$expression = $_POST["expression"];
$result = $_POST["result"];

// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Insert the expression and result into the database
$sql = "INSERT INTO history (expression, result) VALUES ('$expression', '$result')";
$conn->query($sql);

$conn->close();
?>

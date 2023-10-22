<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve the last 10 history records from the database
$sql = "SELECT * FROM history ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$history = array();
while ($row = $result->fetch_assoc()) {
    $history[] = $row;
}

echo json_encode($history);

$conn->close();
?>

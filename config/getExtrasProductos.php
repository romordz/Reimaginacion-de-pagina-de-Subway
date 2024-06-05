<?php

header('Content-Type: application/json');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abc123";
$dbname = "login";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE Tipo = 'Extra'";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();
?>

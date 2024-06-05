<?php
session_start();

// Checar si usuario esta en sesion
if (isset($_SESSION['id']) && isset($_SESSION['Nombre'])) {
    // Usuario esta en sesion
    $id =  $_SESSION['id'];

    header('Content-Type: application/json');

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "abc123";
    $dbname = "login";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `credit-cards` WHERE id_user = '$id'";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    echo json_encode($data);

    $conn->close();
} else {
    // Usuario no esta en sesion
    header('Content-Type: application/json');
    echo json_encode(array('success' => false, 'message' => 'User not logged in.'));
}
?>

<?php
include('db.php');
header('Content-Type: application/json');
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Nombre'])) {
    $id =  $_SESSION['id'];
    $sql = "SELECT * FROM `credit-cards` WHERE id_user = '$id'";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo json_encode($data);
} else {
    header('Content-Type: application/json');
    echo json_encode(array('success' => false, 'message' => 'User not logged in.'));
}
?>

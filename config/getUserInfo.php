<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Nombre'])) {
    $user_info = array(
        'id' => $_SESSION['id'],
        'Nombre' => $_SESSION['Nombre'],
        'Contra' => $_SESSION['Contra'],
        'Correo' => $_SESSION['Correo'],
        'Starter' => $_SESSION['Starter']
    );
    header('Content-Type: application/json');
    echo json_encode(array('success' => true, 'user_info' => $user_info));
} else {
    header('Content-Type: application/json');
    echo json_encode(array('success' => false, 'message' => 'User not logged in.'));
}
?>

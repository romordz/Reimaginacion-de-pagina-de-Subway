<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Nombre'])) {
    //Usuario si esta en sesión, conseguir sus datos
    $user_info = array(
        'id' => $_SESSION['id'],
        'Nombre' => $_SESSION['Nombre'],
        'Contra' => $_SESSION['Contra'],
        'Correo' => $_SESSION['Correo'],
        'Starter' => $_SESSION['Starter']
    );

    // Enviar por JSON
    header('Content-Type: application/json');
    echo json_encode(array('success' => true, 'user_info' => $user_info));
} else {
    // Si no, enviar error por JSON tambien
    header('Content-Type: application/json');
    echo json_encode(array('success' => false, 'message' => 'User not logged in.'));
}
?>

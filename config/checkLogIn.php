<?php
session_start();

// Ver si estas variables estan dentro de la sesion
if (isset($_SESSION['id']) && isset($_SESSION['Nombre'])) {
    // Usuario esta ensesion
    $logged_in = true;
} else {
    // Usuario no esta en sesion
    $logged_in = false;
}

// Enviar JSON como respuesta
header('Content-Type: application/json');
echo json_encode(array('logged_in' => $logged_in));
?>

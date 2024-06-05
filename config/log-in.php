<?php
include('db.php');

// Checar si se recibio el form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['Nombre'];
    $contraseña = $_POST['Contra'];

    $query = "SELECT * FROM users WHERE Nombre='$usuario'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user_data = $result->fetch_assoc();
        if ($contraseña === $user_data['Contra']) {
            session_start();

            $_SESSION['id'] = $user_data['id'];
            $_SESSION['Nombre'] = $user_data['Nombre'];
            $_SESSION['Contra'] = $user_data['Contra'];
            $_SESSION['Correo'] = $user_data['Correo'];
            $_SESSION['Starter'] = $user_data['Starter'];

            $response = array(
                'success' => true,
                'message' => 'Login successful!'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Nombre de usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.'
            );
        }
    } else {
        $response = array(
            'success' => false,
            'message' => 'Nombre de usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

<?php 
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['Nombre']) && isset($_POST['Numero']) && isset($_POST['FechaExpiracion']) && isset($_POST['CVV'])) {
        if (!empty($_POST['Nombre']) && !empty($_POST['Numero']) && !empty($_POST['FechaExpiracion']) && isset($_POST['CVV'])) {
            $nombre = $_POST['Nombre'];
            $numero = $_POST['Numero'];
            $fechaExp = $_POST['FechaExpiracion'];
            $CVV = $_POST['CVV'];
            $id_usuario = $_POST['id'];
              $query = "INSERT INTO `credit-cards` (id_user, Nombre, Numero, FechaExpiracion, CVV) VALUES ('$id_usuario', '$nombre', '$numero', '$fechaExp', '$CVV')";

              // Ejecutar la consulta
              if (mysqli_query($conn, $query)) {
                  $response = array('message' => '', 'success' => true);
              } else {
                $Error = "Error al registrar el usuario: " . mysqli_error($conn);
                $response = array('message' => $Error, 'success' => false);
              }
        } else {
            $response = array('message' => 'Por favor, complete todos los campos del formulario.', 'success' => false);
        }
    } else {
        $response = array('message' => 'Algo salió mal al procesar el formulario. Por favor, inténtalo de nuevo.', 'success' => false);
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
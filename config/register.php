<?php 
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Nombre']) && isset($_POST['Contra']) && isset($_POST['Correo']) && isset($_POST['ContraCheck'])) {
        if (!empty($_POST['Nombre']) && !empty($_POST['Contra']) && !empty($_POST['Correo']) && !empty($_POST['ContraCheck'])) {
            $nombre = $_POST['Nombre'];
            $contraseña = $_POST['Contra'];
            $confirmar = $_POST['ContraCheck'];
            $correo = $_POST['Correo'];
            $valido = true;

            if ($contraseña !== $confirmar){
              $response = array('message' => 'La contraseña no fue confirmada correctamente. Por favor, escribela de nuevo.', 'success' => false);
              $valido = false;
            }
            if($valido){
              $query = "INSERT INTO users (Nombre, Contra, Correo) VALUES ('$nombre', '$contraseña', '$correo')";

              // Ejecutar la consulta
              if (mysqli_query($conn, $query)) {
                  $response = array('message' => '', 'success' => true);
              } else {
                $Error = "Error al registrar el usuario: " . mysqli_error($conn);
                $response = array('message' => $Error, 'success' => false);
              }
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
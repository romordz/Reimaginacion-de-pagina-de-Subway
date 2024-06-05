<?php 
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ProductoInfo = json_decode($_POST['ProductoInfo'], true);

    if ($ProductoInfo !== null) {
        $OrderID = $ProductoInfo['OrderID'];
        $ProductID = $ProductoInfo['id_product'];
        $Cantidad = $ProductoInfo['Cantidad'];
        if (isset($OrderID) && isset($ProductID) && isset($Cantidad)) {
            if (!empty($OrderID) && !empty($ProductID) && $Cantidad > 0) {
                
                $query = "INSERT INTO `productlist` (id_order, id_product, Cantidad) VALUES ('$OrderID', '$ProductID', '$Cantidad')";
    
                  // Ejecutar la consulta
                  if (mysqli_query($conn, $query)) {
                      $response = array('message' => '', 'success' => true);
                  } else {
                    $Error = "Error al registrar el usuario: " . mysqli_error($conn);
                    $response = array('message' => $Error, 'success' => false);
                  }
            } else {
                $response = array('success' => false);
            }
        } else {
            $response = array('message' => 'Algo salió mal al procesar el formulario. Por favor, inténtalo de nuevo.', 'success' => false);
        }
    }   else {
        $response = array('message' => 'Algo salió mal al procesar el formulario. Por favor, inténtalo de nuevo.', 'success' => false);
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
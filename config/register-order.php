<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abc123";
$dbname = "login";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $OrderData = json_decode($_POST['OrderData'], true);

    if ($OrderData !== null) {
        $LocalID = $OrderData['LocalID'];
        $CardID = $OrderData['CardID'];
        $PrecioTotal = $OrderData['PrecioTotal'];

        if (isset($LocalID) && isset($CardID) && isset($PrecioTotal) && isset($_SESSION['id'])) {
            if (!empty($LocalID) && !empty($CardID) && $PrecioTotal > 0) {
                $UserID = $_SESSION['id'];
    
                $query = "INSERT INTO `orders` (id_user, id_card, id_local, PrecioTotal) VALUES ('$UserID', '$CardID', '$LocalID', '$PrecioTotal')";
    
                if (mysqli_query($conn, $query)) {
                    $idOrden = mysqli_insert_id($conn);
                    $response = array('success' => true, 'OrderID' => $idOrden);
                } else {
                  $Error = "Error al registrar el usuario: " . mysqli_error($conn);
                  $response = array('message' => $Error, 'success' => false);
                }
            } else {
                $response = array('success' => false);
            }
        } else {
            $response = array('success' => false);
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
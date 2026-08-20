<?php
include('db.php');
header('Content-Type: application/json');

$tiposValidos = ['Sandwich', 'Ensalada', 'Bebida', 'Extra'];
$tipo = $_GET['tipo'] ?? '';

if (!in_array($tipo, $tiposValidos)) {
    http_response_code(400);
    echo json_encode(['error' => 'Tipo inválido']);
    exit;
}

$sql = "SELECT * FROM products WHERE Tipo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tipo);
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
$stmt->close();
?>
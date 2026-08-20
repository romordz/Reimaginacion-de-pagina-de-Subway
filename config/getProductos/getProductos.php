<?php
include('db.php');
header('Content-Type: application/json');
$sql = "SELECT * FROM products WHERE Tipo = ?";
$result = $conn->prepare($sql);
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
?>

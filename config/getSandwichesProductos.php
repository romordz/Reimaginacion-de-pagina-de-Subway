<?php
include('db.php');
header('Content-Type: application/json');
$sql = "SELECT * FROM products WHERE Tipo = 'Sandwich'";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>

<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];
        $StarterValue = $_POST['Starter'];

        $_SESSION['Starter'] = $StarterValue;

        $stmt = $conn->prepare("UPDATE users SET Starter = ? WHERE id = ?");
        $stmt->bind_param("ii", $StarterValue, $userId);

        if ($stmt->execute()) {
            echo json_encode(array('success' => true, 'message' => 'Starter variable updated successfully.'));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Failed to update starter variable in database.'));
        }

        $stmt->close();
    } else {
        echo json_encode(array('success' => false, 'message' => 'User not logged in.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

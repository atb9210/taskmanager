<?php
$servername = "localhost"; // Modifica se necessario
$username = "taskmanager"; // Tuo username MySQL
$password = "medi9810"; // Tua password MySQL
$dbname = "taskmanager"; // Nome del database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task_id = $_POST['task_id'];
    
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $task_id);
    $stmt->execute();
    
    $stmt->close();
}
$conn->close();
?>

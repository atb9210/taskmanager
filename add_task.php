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
    $task_name = $_POST['task_name'];
    
    $stmt = $conn->prepare("INSERT INTO tasks (task_name) VALUES (?)");
    $stmt->bind_param("s", $task_name);
    $stmt->execute();
    
    $stmt->close();
}
$conn->close();
?>

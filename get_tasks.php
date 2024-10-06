<?php
$servername = "localhost"; // Modifica se necessario
$username = "taskmanager"; // Tuo username MySQL
$password = "medi9810"; // Tua password MySQL
$dbname = "taskmanager"; // Nome del database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);

$tasks = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
}

echo json_encode($tasks);

$conn->close();
?>

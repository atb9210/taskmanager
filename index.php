<?php
include 'includes/header.php';
?>

<h2>Task Manager</h2>
<form id="taskForm">
    <div class="form-group">
        <input type="text" id="taskInput" class="form-control" placeholder="Aggiungi una nuova task" required>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi Task</button>
</form>

<ul id="taskList" class="list-group mt-4"></ul>

<?php
include 'includes/footer.php';
?>

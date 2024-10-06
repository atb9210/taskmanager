<?php
include 'includes/header.php';
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1 class="text-center">Task Manager</h1>
      <form id="taskForm" class="form-control">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="taskInput" placeholder="Inserisci una task">
          <button class="btn btn-primary" type="submit">Aggiungi Task</button>
        </div>
      </form>
      <ul id="taskList" class="list-group"></ul>
    </div>
  </div>
</div>


<?php
include 'includes/footer.php';
?>

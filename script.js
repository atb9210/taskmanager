document.getElementById('taskForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const taskInput = document.getElementById('taskInput');
    const taskName = taskInput.value;

    fetch('add_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'task_name=' + encodeURIComponent(taskName)
    })
    .then(() => {
        taskInput.value = ''; // Pulisci il campo di input
        loadTasks(); // Ricarica le task
    });
});

function loadTasks() {
    fetch('get_tasks.php')
        .then(response => response.json())
        .then(tasks => {
            const taskList = document.getElementById('taskList');
            taskList.innerHTML = ''; // Pulisci la lista esistente

            tasks.forEach(task => {
                const li = document.createElement('li');
                li.className = 'list-group-item d-flex justify-content-between align-items-center';
                li.textContent = task.task_name;

                const button = document.createElement('button');
                button.className = 'btn btn-danger btn-sm';
                button.textContent = 'Elimina';
                button.onclick = function() {
                    deleteTask(task.id);
                };

                li.appendChild(button);
                taskList.appendChild(li);
            });
        });
}

function deleteTask(taskId) {
    fetch('delete_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'task_id=' + encodeURIComponent(taskId)
    })
    .then(() => loadTasks()); // Ricarica la lista dopo l'eliminazione
}

// Carica le task al caricamento della pagina
window.onload = loadTasks;

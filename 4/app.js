// Register Service Worker
if ('serviceWorker' in navigator) {
    navigator.serviceWorker
        .register('service-worker.js')
        .then(function () {
            console.log('Service Worker Registered');
        });
}

// DOM elements
const todoForm = document.getElementById('todo-form');
const todoInput = document.getElementById('todo-input');
const todoList = document.getElementById('todo-list');

// Store tasks in an array
let tasks = [];

// Render tasks in the list
function renderTasks() {
    todoList.innerHTML = '';

    tasks.forEach(function (task) {
        const li = document.createElement('li');
        li.textContent = task.title;

        if (task.completed) {
            li.classList.add('completed');
        }

        li.addEventListener('click', function () {
            task.completed = !task.completed;
            renderTasks();
        });

        todoList.appendChild(li);
    });
}

// Handle form submission
todoForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const taskTitle = todoInput.value.trim();

    if (taskTitle !== '') {
        const task = {

            title: taskTitle,
            completed: false
        };

        tasks.push(task);

        renderTasks();

        todoInput.value = '';
    }
});
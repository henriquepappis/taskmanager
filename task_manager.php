<?php
include 'database.php';

// Função para adicionar uma nova tarefa
function addTask($title, $description)
{
    $conn = getDatabaseConnection();
    $stmt = $conn->prepare("INSERT INTO tasks (title, description, status) VALUES (?, ?, 'pending')");
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Função para listar todas as tarefas
function getAllTasks()
{
    $conn = getDatabaseConnection();
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    $tasks = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }

    $conn->close();
    return $tasks;
}

// Função para atualizar o status da tarefa
function updateTaskStatus($id, $status)
{
    $conn = getDatabaseConnection();
    $stmt = $conn->prepare("UPDATE tasks SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Função para excluir uma tarefa
function deleteTask($id)
{
    $conn = getDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

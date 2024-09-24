# Gerenciador de Tarefas (Versão Sem Padrões de Projeto)

Este é um sistema básico de gerenciamento de tarefas desenvolvido em PHP. O projeto não utiliza padrões de projeto, o que serve como um exemplo para comparar com uma versão que segue boas práticas e padrões de design.

## Funcionalidades

- Adicionar uma nova tarefa
- Listar todas as tarefas
- Atualizar o status de uma tarefa (Concluída/Pendente)
- Excluir tarefas

## Requisitos

- PHP 7.4+
- MySQL 8.0+
- Servidor Apache

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/usuario/taskmanager.git

2. Navegue até o diretório do projeto:

    ```
    cd taskmanager

3. Importe o banco de dados MySQL:

    ```
    CREATE DATABASE task_manager;
    USE task_manager;

    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        status ENUM('pending', 'completed') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

4. Configure o arquivo database.php com as credenciais do banco de dados:

    ```
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "task_manager";

5. Abra o projeto no navegador:

    ```
    http://localhost/taskmanager

## Uso
Acesse o sistema através do navegador.
Adicione, atualize e exclua tarefas diretamente na interface.

## Licença
Este projeto é de código aberto.
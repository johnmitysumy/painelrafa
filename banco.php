<?php
// Configurações do banco de dados
$hostname = "localhost"; // Nome do servidor (geralmente "localhost" se o banco de dados estiver no mesmo servidor que o script PHP)
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$database = "rafael"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);


// Configuração do charset para UTF-8 (opcional, dependendo do seu caso)
$conn->set_charset("utf8");

// Agora você pode usar a variável $conn para executar consultas SQL
?>

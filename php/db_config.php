<?php
// Dados da conexão
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "excel"; //nome do banco

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Definição de charset (opcional, mas recomendado para evitar problemas com caracteres especiais)
$conn->set_charset("utf8");
?>

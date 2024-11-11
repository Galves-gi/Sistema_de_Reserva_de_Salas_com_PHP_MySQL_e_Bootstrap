<?php 
include 'db_config.php';

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];
$sivetas = ['/assets/deafault0.svg', '/assets/deafault1.svg', '/assets/deafault2.svg'];
$foto = $sivetas[array_rand($sivetas)];

// Inserir dados no banco de dados
$sql = "INSERT INTO cliente (user_name, user_email, user_password, user_photo) 
VALUES ('$nome', '$email', '$senha', '$foto')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();
?>

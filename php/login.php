<?php
session_start();
include 'db_config.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos email e senha estão definidos
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar a consulta
        $sql = "SELECT * FROM cliente WHERE user_email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar se o usuário foi encontrado
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($senha == $row['user_password']) {
                // Login bem-sucedido
                $_SESSION['email'] = $email;
                $_SESSION['user_image'] = $row['user_photo'];
                $_SESSION['nome'] = $row['user_name'];
                header("Location: ../conversor.php");
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}

// Fechar a conexão
$conn->close();

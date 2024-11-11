<?php
session_start();

// Verificar se a imagem do usuário está definida
if (isset($_SESSION['user_image'])) {
    // Supondo que 'user_image' seja o caminho da imagem do perfil do usuário
    $imagem = $_SESSION['user_image'];
    
    // Extrair a extensão do arquivo
    $extensao = pathinfo($imagem, PATHINFO_EXTENSION);

    // Verificar se a extensão é .svg
    if ($extensao === 'svg') {
        echo '<img src="' . $imagem . '" alt="Imagem do Usuário" class="character"/>';
    } else {
        echo '<img src="' . $imagem . '" alt="Imagem do Usuário" class="foto"/>';
    }

    // Verifica se o nome do usuário está definido
    if (isset($_SESSION['nome'])) {
        echo '<p style="margin-left: 50px; position: absolute; top: 40px; color: #fff;">Olá</p>';
        echo '<a style="position: absolute; top: 40px; margin-left: 45px;" href="" role="button" aria-expanded="false" id="user_name">' . $_SESSION['nome'] . '</a>';
    }
} else {
    // Mensagem caso a imagem do usuário não esteja disponível
    echo '<img src="../assets/characters/unknown.png" alt="Imagem do Usuário" style="width: 40px; border-radius: 100%"/>';
    echo '<p style="margin-left: 50px; position: absolute; top: 40px; color: #fff;">Olá</p>';
    echo '<a style="position: absolute; top: 40px; margin-left: 45px;" href="..//pages/login.html" role="button" aria-expanded="false" id="user_name">Entrar</a>';
}
?>
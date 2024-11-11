<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="roboto.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <title>login - JS</title>
</head>

<body class="roboto-regular">

    <div class="container">
        <div class="container__box">
            <form action="php/registro.php" method="post">
                <input type="text" name="nome" placeholder="Nome">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">
                <input type="text" name="nivel" placeholder="Nível de acesso: 1, 2, 3">
                <input type="submit">
            </form>

        </div>
    </div>

</body>

</html>
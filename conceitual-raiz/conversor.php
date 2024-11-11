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
    <title>Teste - JS</title>
</head>

<body class="roboto-regular">
    <nav class="menu">
        <a href="registro.php">registro</a>
        <a href="login.html">login</a>
        <a href="#">logoff</a>
    </nav>

    <div class="container">
        <div class="container__box">
            <label>Envie seu documento CSV: </label>
            <input type="file" id="csvFile" accept=".csv">
            <button onclick="baixarJSON()">Baixar JSON</button>
        </div>
    </div>

    <script src="conversor.js"></script>
</body>

</html>
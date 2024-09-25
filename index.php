<?php
session_start();
if (isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user 
        WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli -> query($sql);
    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="title-section">
                <h2 class="title">Resetar Senha</h2>
                <p class="paragrafo">Entre com seu user e verifique sua caixa de email logo após a senha nova.</p>
            </div>
            <form action="" class="form">
                <div class="input-group">
                    <label for="" class="label-title">Insira seu email</label>
                    <input type="email" name="email" placeholder="email">
                    <span class="icon">&#9993;</span>
                </div>
                <div class="input-group">
                    <button class="submit-btn" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
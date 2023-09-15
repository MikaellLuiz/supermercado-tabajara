<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="">
    </header>
    <section>
        <h1>Cadastro</h1>
        <form class="form" action="php/autenticacao.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" required>
            <label for="username">E-mail:</label>
            <input type="text" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Cadastrar">
            <input type="hidden" name="page" value="2">
            <?php

            ?>
        </form>
        <a href="login.php">Login</a>
    </section>
    <?php 
        if(isset($_GET["erro"]) && $_GET["erro"]==1){
            ?> 
            <div class="erro">
                <p>A senha é menor que 8 dígitos</p>
            </div>
            <?php
        }
        if(isset($_GET["erro"]) && $_GET["erro"]==2){
            ?> 
            <div class="erro">
                <p>O email fornecido não é válido!</p>
            </div>
            <?php
        }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMERCADO TABAJARA | LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="">
    </header>
    <section>
        <h1>Login</h1>
        <form class="form" action="php/autenticacao.php" method="post">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Entrar">
            <input type="hidden" name="page" value="1">
        </form>
        <a href="cadastro.php">Cadastre-se</a>
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
                <p>O usuário deve ser um email!</p>
            </div>
            <?php
        }
        if(isset($_GET["alert"]) && $_GET["alert"]==1){
            ?> 
            <div class="erro">
                <p>Cadastro efetuado com sucesso!</p>
            </div>
            <?php
        }
    ?>
</body>
</html>


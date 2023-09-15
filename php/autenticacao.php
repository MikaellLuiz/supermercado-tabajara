<?php
//autenticacao login
$page = $_POST["page"];
if($page==1){
    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    if(filter_var($usuario, FILTER_VALIDATE_EMAIL)){
        if(strlen($senha) < 8){
            header("Location: ../login.php?erro=1");
        }else{
            header("Location: ../gerenciadorUsuarios.php");
        }
    }else{
        header("Location: ../login.php?erro=2");
    }
  
}
if($page==2){
    $nome = $_POST["name"];
    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    if(filter_var($usuario, FILTER_VALIDATE_EMAIL)){
        if(strlen($senha) < 8){
            header("Location: ../cadastro.php?erro=1");
        }else{
            header("Location: ../login.php?alert=1");
        }
    }else{
        header("Location: ../cadastro.php?erro=2");
    }


}

?>
<?php

$login=$_POST["usuario"];
$senha=$_POST["senha"];

include("../banco/usuario.php");
$teste=login($login, $senha);
if($teste==0){
    echo "Login feito com sucesso!";
    session_start();
    $_SESSION["usuario"]=$login;
    $redirect = "../inicio.php";
    header("location:$redirect");
}else if($teste==1){
    echo "Usuario não existe";
}else{
    echo "Senha incorreta"; 
}
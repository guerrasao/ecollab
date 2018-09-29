<?php

$login=$_POST["usuario"];
$senha=$_POST["senha"];

include("../banco/usuario.php");
$teste=login($login, $senha);
if($teste==0){
    echo "Login feito com sucesso!";
    session_start();
    $_SESSION["usuario"]=$login;
}else if($teste==1){
    echo "Senha errada";
}else{
    echo "Usuario não existe"; 
}
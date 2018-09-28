<?php
session_start();
$usuario=$_SESSION["usuario"];
$dados=buscaCadastro($usuario);
if($dados!=NULL){
    //Tem informações
}else{
    //Erro
}
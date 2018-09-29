<?php

include("../banco/usuario.php");

session_start();
$usuario=$_SESSION["usuario"];
$ids= buscaPorInteresseAprender($usuario);
for($i=0;$i<count($ids);$i++){
    $informacoes=buscaInfoInteresseAprender($ids[i]); 
    
}
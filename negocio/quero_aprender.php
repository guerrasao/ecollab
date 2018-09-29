<?php
include("../banco/usuario.php");
session_start();
$usuario=$_SESSION["usuario"];
$ids=buscaPorInteresseAprender($usuario);
if($ids!=NULL){
    for($i=0;$i<count($tam);$i++){
        $dados=buscaInfoInteresseAprender($ids[$i]);  
    }
}else{
    echo "nenhum";
    //Nenhum elemento similar;
}

<?php
include("../banco/usuario.php");
session_start();
$usuario=$_SESSION["usuario"];
$ids=buscaPorInteresseAprender($usuario);
print_r($ids);
echo "<br>";
if($ids!=NULL){
    for($i=0;$i<count($ids);$i++){
        $dados=buscaInfoInteresseAprender($ids[$i]);
        echo $dados['nome'];
    }
}else{
    echo "nenhum";
    //Nenhum elemento similar;
}

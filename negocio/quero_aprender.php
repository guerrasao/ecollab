<?php
include("../banco/usuario.php");
session_start();
$usuario=$_SESSION["usuario"];
$ids=buscaPorInteresseAprender($usuario);

if($ids!=NULL){
    for($i=0;$i<count($ids);$i++){
        $dados= buscaInfoUsuario($ids[$i]);
        $ensinar= buscaQuerEnsinar($dados["id"]);
        //html - nome;
        foreach ($ensinar as $ensinar['nome'] => $value) {
            echo "$value <br>";
            //html - conteudo;
        }
    }
}else{
    echo "nenhum";
    //Nenhum elemento similar;
}

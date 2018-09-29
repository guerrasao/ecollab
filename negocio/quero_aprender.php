<?php
include("../banco/usuario.php");
session_start();
$usuario=$_SESSION["usuario"];
$ids=buscaPorInteresseAprender($usuario);

if($ids!=NULL){
    for($i=0;$i<count($ids);$i++){
        $dados= buscaInfoUsuario($ids[$i]);
        echo "-----------".$dados['nome']."---------";
        $ensinar= buscaQuerEnsinar($dados["id"]);

        foreach ($ensinar as $ensinar['nome'] => $value) {
            echo "$value <br>";
        }
        echo "<br> <br>";

    }
}else{
    echo "nenhum";
    //Nenhum elemento similar;
}

<?php
include("../banco/usuario.php");
session_start();
$usuario=$_SESSION["usuario"];
$ids=buscaPorInteresseAprender($usuario);

if($ids!=NULL){
    for($i=0;$i<count($ids);$i++){
        $dados= buscaInfoUsuario($ids[$i]);
        $ensinar= buscaQuerEnsinar($dados["id"]);
        $aprender= buscaQuerAprender($dados["id"]);
        //html - nome;
        foreach ($ensinar as $ensinar['nome'] => $value) {
            echo "$value <br>";
            //html - conteudo que quer ensinar;
        }
        foreach($aprender as $aprender['nome'] => $value) {
            echo "$value <br>";
            //html - conteudo que quer aprender;
        }
    }
}else{
    echo "nenhum";
    //Nenhum elemento similar;
}

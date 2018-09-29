<?php
    include("../banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $contatos= buscaContatos($usuario);
    if($contatos!=NULL){
        while($dados= mysqli_fetch_array($contatos)){
            $idContato=$dados["id"];
            $perfil= buscaInfoUsuario($idContato);
            $ensinar= buscaQuerEnsinar($idContato);
            $aprender= buscaQuerAprender($idContato);
            //html - nome;
            if($ensinar!=NULL){
                foreach ($ensinar as $ensinar['nome'] => $value) {
                    echo "$value <br>";
                    //html - conteudo que quer ensinar;
                }
            }else{
                "Não quer ensinar nada.";
            }

            if($aprender!=NULL){
                foreach($aprender as $aprender['nome'] => $value) {
                    echo "$value <br>";
                    //html - conteudo que quer aprender;
                }
            }else{
                echo "não quer aprender nada.";
            }
        }
    }else{
        echo "Você não possui contatos.";
    }
    

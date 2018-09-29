<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file); 
    
    include_once '../banco/usuario.php';
    $idUsuario = retornaId($usuario);
    $conteudos = $_POST["conteudos"];
    $erro = 0;
    $sucesso = 0;
    foreach ($conteudos as $key => $value) {
        if(cadastraInteresse(0, 1, $value, $idUsuario)){
            $sucesso++;
        }else{
            $erro++;
        }
    }

    if($erro > 0){
        echo '<div class="container"><div class="alert alert-danger" role="alert">
                    Ocorreu um erro ao cadastrar os conteudos!
                  </div></div>';
    }else{
        echo '<div class="container"><div class="alert alert-sucess" role="alert">
                    Ocorreu um erro ao cadastrar os conteudos!
                  </div></div>';
    }

    $file = $path . 'rodape.php';
    include_once ($file);
?>
<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file); 
    session_start();
    $usuario = $_SESSION["usuario"];
    include_once 'banco/usuario.php';
    $idUsuario = retornaId($usuario);
    $conteudos = $_POST["conteudos"];
  
    foreach ($conteudos as $key => $value) {
        cadastraInteresse(0, 1, $value, $idUsuario);
    }

        echo '<div class="container"><div class="alert alert-sucess" role="alert">
                    Counteudos cadastrados com sucesso!
                  </div></div>';


    $file = $path . 'rodape.php';
    include_once ($file);
?>
<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);  
    header ('Content-type: text/html; charset=UTF-8');
    
?>
<form class="container col-md-8" method="post" action="">
    <h1 class="p-3 mb-4">Quais áreas você tem interesse em aprender?</h1>
<?php
    include_once 'banco/usuario.php';
    $categorias = $_POST["areas"];
    foreach ($categorias as $key => $value) {
        //nome categoria
        $nomeCategoria = buscaInfoCategoria($value);
        $nomeCategoria = mb_convert_encoding($nomeCategoria, "UTF-8", "ISO-8859-1");
        echo '<div class="container"><h4 class="mt-3">'.$nomeCategoria.'</h4>';
        echo '<select multiple="multiple" id="conteudos" name="conteudos[]">';
        
        $conteudo = buscaConteudos($value);
        while($dados= mysqli_fetch_array($conteudo)){
            $id=$dados['id'];
            $nome=$dados['nome'];
            echo '<option value="'.$id.'">'.mb_convert_encoding($nome, "UTF-8", "ISO-8859-1").'</option>';
        }
        echo '</select></div>';
        echo "<script type='text/javascript'>";
        echo '$(\'#conteudos\').multiSelect();
            </script> 
        ';
    }
    
?>
<div class="d-flex justify-content-end mt-4 mb-4">
    <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4">Prosseguir</button>
</div>
</form>
<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
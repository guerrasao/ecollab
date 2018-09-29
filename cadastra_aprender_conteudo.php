<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);  
    header ('Content-type: text/html; charset=ISO-8859-1');
    
?>
<form class="container col-md-9">
    <h1 class="p-3 mb-4">Quais áreas você tem interesse em aprender?</h1>
<?php
    include_once 'banco/usuario.php';
    $categorias = $_POST["areas"];
    foreach ($categorias as $key => $value) {
        //nome categoria
        $nomeCategoria = buscaInfoCategoria($value);
        echo '<h4 class="mt-3">'.$nomeCategoria.'</h4>';
        echo '<select multiple="multiple" id="conteudos_categoria_'.$value.'" name="conteudos_categoria_'.$value.'[]">';
        
        $conteudo = buscaConteudos($value);
        while($dados= mysqli_fetch_array($conteudo)){
            $id=$dados['id'];
            $nome=$dados['nome'];
            echo '<option value="'.$id.'">'.$nome.'</option>';
        }
        echo '</select>';
        echo "<script type='text/javascript'>";
        echo '$(\'#conteudos_categoria_'.$value.'\').multiSelect();
            </script> 
        ';
        
    }
    
?>

</form>
<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
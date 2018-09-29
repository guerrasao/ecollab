<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
    session_start();
    $foto=$_POST["foto"];
  
?>

<section class="container">
    <h1 class="mb-4 ml-3">Chat</h1>
    <div class="d-flex">
        <div class="col-md-2 ">
            <img class="" height="150px" src="<?php echo $foto;?>">
            <h5 class="mt-2"><?php echo $_POST["nome"];?></h5>
        </div>
        <div class="col-md-10 ">
            <textarea class="col-md-12 form-control" rows="15" placeholder="Mensagens"></textarea>
            <div class="d-flex mt-3 mb-4">
                <input type="text" class="form-control " id="menagem" name="mensagem" placeholder="Mensagem">
                <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4 ml-3">Enviar</button>
            </div>
        </div>
    </div>
</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>

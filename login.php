<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho.php';
    include_once($file);
?>
<section class="container p-3">
    <form post="negocio/valida_login">
        <div class="form-group">
        <label for="usuario">Login</label>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o usuário">
        </div>
        <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</section>
<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>

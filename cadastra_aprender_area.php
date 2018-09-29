<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>

<form class="container col-md-9" method="post" action="negocio/cadastro_aprender_area.php">
    <h1 class="p-3 mb-4">Quais áreas você tem interesse em aprender?</h1>
    <div class="display-flex m-1">
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
    </div>
    <div class="display-flex m-1">
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
    </div>
    <div class="display-flex m-1">
        <div class="card box">
            <div class="card-body d-flex flex-column">
                <input type="checkbox" class="m-1" name="area[]" value="1">
                <img class="img-thumbnail m-1" src="img/logotransparente.png" alt="Card image cap">
                <h5 class="card-title m-1">Função de 1º grau</h5>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-4 mb-4">
        <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4">Prosseguir</button>
    </div>
</form>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>

<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho.php';
    include_once($file);
?>

<section class="container p-3 col-md-6">
    <h1 class="p-3">Cadastro de Usuário</h1>
    <form class="container " method="post" action="negocio/valida_usuario.php" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <select id="grau_de_instrucao" name="grau_de_instrucao" class="form-control">
                    <option value="Grau de Ensino" selected>Grau de Instrução</option>
                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                    <option value="Ensino Medio">Ensino Médio</option>
                    <option value="Superior">Superior</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <label for="data_de_nascimento" class="col-sm-6 col-form-label">Data de Nascimento:</label>
            <label for="genero" class="col-sm-6 col-form-label">Gênero:</label> 
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="date" class="form-control" id="data" name="data_de_nascimento">
            </div>
            <div class="form-group col-md-6">
                <select id="grau_de_instrucao" name="grau_de_instrucao" class="form-control">
                    <option value="Masculino" selected>Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group ">
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <button type="submit" name="enviar" class="btn btn-primary pr-4 pl-4">Cadastrar</button>
                <button type="reset" name="reset" class="btn btn-primary pr-5 pl-5">Limpar</button>
            </div>
            <div class="form-group col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" value="teste">
                    <label class="custom-file-label" for="validatedCustomFile">Carregar foto do perfil</label>
                </div>
            </div>
        </div>
    </form>
</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
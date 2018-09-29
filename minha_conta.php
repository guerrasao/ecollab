<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>

<?php
include("banco/usuario.php");
session_start();
$usuario=$_SESSION["usuario"];
$dados=buscaCadastro($usuario);
if($dados!=NULL){
    echo "aqui";
?>
<section class="container p-3 col-md-6">
    <h1 class="p-3">Minha Conta</h1>
    <form class="container " method="post" action="negocio/valida_cadastro.php" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nome" value="<?php echo $dados["nome"] ?>" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="sobrenome" value="<?php echo $dados["sobrenome"] ?>" name="sobrenome" placeholder="Sobrenome">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" value="<?php echo $dados["email"] ?>" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <select id="grau_de_instrucao" name="grau_de_instrucao" class="form-control">
                    <option value="Grau de Ensino">Grau de Instrução</option>
                    <option value="Ensino Fundamental" <?php if($dados["grauInstrucao"]==="Ensino Fundamental"){ echo "selected";}?>>Ensino Fundamental</option>
                    <option value="Ensino Medio" <?php if($dados["grauInstrucao"]==="Ensino Medio"){ echo "selected";}?>>Ensino Médio</option>
                    <option value="Superior" <?php if($dados["grauInstrucao"]==="Superior"){ echo "selected";}?>>Superior</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <label for="data_de_nascimento" class="col-sm-6 col-form-label">Data de Nascimento:</label>
            <label for="genero" class="col-sm-6 col-form-label">Gênero:</label> 
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="date" class="form-control" id="data" name="dtNasc" value="<?php echo $dados["dtNasc"] ?>">
            </div>
            <div class="form-group col-md-6">
                <select id="genero" name="genero" class="form-control">
                    <option value="Masculino" <?php if($dados["genero"]==="Masculino"){ echo "selected";}?>>Masculino</option>
                    <option value="Feminino" <?php if($dados["genero"]==="Feminino"){ echo "selected";}?>>Feminino</option>
                    <option value="Outro" <?php if($dados["genero"]==="Outro"){ echo "selected";}?>>Outro</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group ">
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $dados["cidade"] ?>" placeholder="Cidade">
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control" id="usuario" value="<?php echo $dados["usuario"] ?>" name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control" id="senha" value="<?php echo $dados["senha"] ?>" name="senha" placeholder="Senha">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4">Alterar</button>
                <button type="reset" name="reset" class="btn btn-primary pr-5 pl-5">Limpar</button>
            </div>
            <div class="form-group col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto" >
                    <label class="custom-file-label" for="validatedCustomFile">Carregar foto do perfil</label>
                </div>
            </div>
        </div>
    </form>
</section>

<?php
        //Tem informações
     }else{
         //Erro
     }
    $file = $path . 'rodape.php';
    include_once ($file);
?>

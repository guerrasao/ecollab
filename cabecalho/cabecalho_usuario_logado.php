<!doctype html>
<html lang="pt">
  <head>
    <title>Exemplo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS próprio -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!-- Bibliotecas JavaScript -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <!--<script src="../js/popper.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--  Biblioteca lou multi select -->
    <script src="lou_multi_select/js/jquery.multi-select.js"></script>
    <link rel="stylesheet" media="screen" type="text/css" href="lou_multi_select/css/multi-select.css">
</head>
<body>
    <header>
        <nav id="menu" class="navbar navbar-expand-md bg-dark navbar-dark">
          <div class="container">
            <!--Logo -->
            <a href="#" class="navbar-brand">
                <img src="img/logoLado.png" width="150px" height="auto">
            </a>
            <!-- Botão mostrar menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Itens do menu -->
            <div id="links" class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="inicio.php" class="nav-link" data-scroll> Início </a>
                </li>
                <li class="nav-item">
                  <a href="minha_conta.php" class="nav-link"  data-scroll> Minha conta </a>
                </li>
                <li class="nav-item">
                  <a href="quero_aprender.php" class="nav-link"  data-scroll> Quero aprender </a>
                </li>
                <li class="nav-item">
                  <a href="quero_ensinar.php" class="nav-link"  data-scroll> Quero ensinar </a>
                </li>
                <li class="nav-item">
                  <a href="grupos.php" class="nav-link"  data-scroll> Grupos </a>
                </li>
                <li class="nav-item">
                  <a href="notificacoes.php" class="nav-link"  data-scroll> Notificações </a>
                </li>
                <li class="nav-item">
                  <a href="meus_contatos.php" class="nav-link"  data-scroll> Meus contatos </a>
                </li>
                <li class="nav-item">
                    <a href="negocio/sair.php" class="nav-link"  data-scroll> Sair </a>
                </li>
              </ul>
            </div>      
          </div>
        </nav>
    </header>
    
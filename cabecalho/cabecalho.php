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
</head>
<body>
    <header>
        <nav id="menu" class="navbar navbar-expand-md bg-dark navbar-dark">
          <div class="container">
            <!--Logo -->
            <a href="#" class="navbar-brand">
              <img src="img/logo-info.png">
            </a>
            <!-- Botão mostrar menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Itens do menu -->
            <div id="links" class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#menu" class="nav-link" data-scroll> Home </a>
                </li>
                <li class="nav-item">
                  <a href="#empresa" class="nav-link"  data-scroll> Empresa </a>
                </li>
                <li class="nav-item">
                  <a href="#servicos" class="nav-link"  data-scroll> Serviços </a>
                </li>
                <li class="nav-item">
                  <a href="#contato" class="nav-link"  data-scroll> Contato </a>
                </li>
              </ul>
            </div>      
          </div>
        </nav>
    </header>
<?php
  require_once "funcoes.php";
?>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>TurbCar</title>
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
      <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
      <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
      <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- NAVBAR -->
      <div class="fixed-top">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container">
               <!-- HOME PAGE LINK -->
               <a href="/trabalhoPhp/index.php" class="navbar-brand d-flex align-items-center" >
                  <img src="assets/img/carro.png" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                  <circle cx="12" cy="13" r="4"></circle>
                  </img>
                  <strong>TurbCar</strong>
               </a>
               <!-- MAIN LIST -->
               <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="/trabalhoPhp/contato.php">Entre em Contato Conosco</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Parcerias</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Serviços Prestados</a>
                     </li>
                  </ul>
               </div>
               <!-- DROPDOWN LIST -->
               <ul class="navbar-nav ml-md-auto d-none d-md-flex">
                  <li class="nav-item dropdown active">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/trabalhoPhp/addCarro.php">Adicionar um Carro</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/trabalhoPhp/listaCarros.php">Listar Carros</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/trabalhoPhp/listarContatos.php">Lista de Contatos</a>
                     </div>
                  </li>
               </ul>

            </div>

         </nav>
      </div>
   </body>
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
   <script src="assets/js/stylish-portfolio.js"></script>
   <script src="assets/js/Dynamic-Table.js"></script>
   <script src="assets/js/Material-Style-Ripple-Button.js"></script>
</html>
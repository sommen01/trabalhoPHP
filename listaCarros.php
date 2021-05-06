<?php
require_once 'funcoes.php';
include_once "menu.php";
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Lista Carros</title>
   </head>
   <body>
      <div class="jumbotron">
         <h1 class="display-4">TurbCar</h1>
         <p class="lead">O melhor lugar para achar seu carro novo</p>
         <br>
         <p class="lead">Lista de Carros</p>
         <hr class="my-4">
         <div class="card mb-3">
            <img class="card-img-top" src="assets/img/mustanggt.jpg" alt="Card image cap">
            <div class="card-body">
               <h3 class="card-title">Mustang GT</h3>
               <div class="container">
                    <p class="card-text" >Cor: <h5 style="background-color:red; border: 2px solid black" >  <br>     </h5></p>
                    <p class="card-text">Lugares: 2</p>
                    <p class="card-text">Kilometragem: 100.000 Km</p>
                    <p class="card-text">Preco: R$:500.000,00</p>
                    <p class="card-text">Telefone: 91444-7884</p>
                    <p class="card-text">Email: Zezinho@gmail.com</p>
                    <p class="card-text">Ano: 2020-06-14</p>
                    <p class="card-text">Numero de Portas: 4</p>
                    <p class="card-text">Espaco Porta-malas: 500 L</p>

                    <p class="card-text"><small class="text-muted">Atualizado  <?php echo "<strong>" . date('d/m/Y H:i') ." </strong>"; ?></small></p>
                </div>
            </div>
         </div>
         <div class="card mb-3">
            <img class="card-img-top" src="assets/img/camaro.jpg" alt="Card image cap">
            <div class="card-body">
               <h3 class="card-title">Camaro ZLT</h3>
               <div class="container">
                    <p class="card-text" >Cor: <h5 style="background-color:orange; border: 2px solid black"> <br>    </h5></p>
                    <p class="card-text">Lugares: 4</p>
                    <p class="card-text">Kilometragem: 150.000 Km</p>
                    <p class="card-text">Preco: R$:350.000,00</p>
                    <p class="card-text">Telefone: 98744-7884</p>
                    <p class="card-text">Email: Laodinho@gmail.com</p>
                    <p class="card-text">Ano: 2018-02-19</p>
                    <p class="card-text">Numero de Portas: 4</p>
                    <p class="card-text">Espaco Porta-malas: 600 L</p>

                    <p class="card-text"><small class="text-muted">Atualizado  <?php echo "<strong>" . date('d/m/Y H:i') ." </strong>"; ?></small></p>
                </div>
            </div>
         </div>
         <?php 
                lista();
         
          ?>      
      
   </body>
</html>
 
  



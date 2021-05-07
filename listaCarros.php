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
      <!-- JUMBOTRON -->
      <div class="jumbotron bg-dark text-light m-0" style="background: linear-gradient(#000028, #280000);">
         <div class="container text-center">
            <h1 class="display-4 font-weight-bold">CATÁLOGO DE CARROS</h1>
            <p class="lead">Nossa missão é a satisafação do cliente, oferecendo serviço de qualidade com preço baixo.</p>
            <a class="btn btn-secondary btn-lg" href="/trabalhoPhp/addCarro.php">ADICIONAR UM CARRO</a>
         </div>
      </div>

      <!-- CAR CARDS -->
      <div class="container">

         <div class="row">
         
            <div class="col-12">

               <div class="row p-3 my-3">
               
                  <div class="col-4">

                     <div class="card mb-3">
                        <img class="card-img-top " src="assets/img/mustanggt.jpg" alt="Card image cap">
                        <div class="card-body">
                           <h2 class="card-title font-weight-bold text-center">Mustang GT</h2>
                           <div class="container-fluid">
                              <table class="table table-striped card-text">
                                 <tr>
                                       <th scope="col">Atributo</th>
                                       <th scope="col">Caracteristica</th>
                                 </tr>
                                 <tr>
                                    <td>Cor</td>
                                    <td><h5 style="background-color:red; border: 2px solid black" > <br> </h5></td>
                                 </tr>
                                 <tr>
                                    <td>Lugares</td>
                                    <td>2</td>
                                 </tr>
                                 <tr>
                                    <td>Kilometragem</td>
                                    <td>100.000 Km</td>
                                 </tr>
                                 <tr>
                                    <td>Preco</td>
                                    <td>R$:500.000,00</td>
                                 </tr>
                                 <tr>
                                    <td>Telefone</td>
                                    <td>91444-7884</td>
                                 </tr>
                                 <tr>
                                    <td>Email</td>
                                    <td>Zezinho@gmail.com</td>
                                 </tr>
                                 <tr>
                                    <td>Ano</td>
                                    <td>2020-06-14</td>
                                 </tr>
                                 <tr>
                                    <td>Numero de Portas</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>Espaco Porta-malas</td>
                                    <td>500 L</td>
                                 </tr>
                              </table>

                              <p class="card-text"><small class="text-muted">Atualizado  <?php echo "<strong>" . date('d/m/Y H:i') ." </strong>"; ?></small></p>
                           </div>
                        </div>
                     </div>

                  </div>

                  <div class="col-4">
                     <div class="card mb-3">
                        <img class="card-img-top" src="assets/img/camaro.jpg" alt="Card image cap">
                        <div class="card-body">
                           <h2 class="card-title font-weight-bold text-center">Camaro ZLT</h2>
                           <div class="container-fluid">
                           <table class="table table-striped card-text">
                                 <tr>
                                       <th scope="col">Atributo</th>
                                       <th scope="col">Caracteristica</th>
                                 </tr>
                                 <tr>
                                    <td>Cor</td>
                                    <td><h5 style="background-color:orange; border: 2px solid black"> <br> </h5></td>
                                 </tr>
                                 <tr>
                                    <td>Lugares</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>Kilometragem</td>
                                    <td>150.000 Km</td>
                                 </tr>
                                 <tr>
                                    <td>Preco</td>
                                    <td>R$:350.000,00</td>
                                 </tr>
                                 <tr>
                                    <td>Telefone</td>
                                    <td>98744-7884</td>
                                 </tr>
                                 <tr>
                                    <td>Email</td>
                                    <td>Laodinho@gmail.com</td>
                                 </tr>
                                 <tr>
                                    <td>Ano</td>
                                    <td>2018-02-19</td>
                                 </tr>
                                 <tr>
                                    <td>Numero de Portas</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>Espaco Porta-malas</td>
                                    <td>600 L</td>
                                 </tr>
                              </table>                           
                              
                              <p class="card-text"><small class="text-muted">Atualizado  <?php echo "<strong>" . date('d/m/Y H:i') ." </strong>"; ?></small></p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-4">
                     <div class="card mb-3">
                        <img class="card-img-top" src="assets/img/camaro.jpg" alt="Card image cap">
                        <div class="card-body">
                           <h2 class="card-title font-weight-bold text-center">Camaro ZLT</h2>
                           <div class="container-fluid">
                           <table class="table table-striped card-text">
                                 <tr>
                                       <th scope="col">Atributo</th>
                                       <th scope="col">Caracteristica</th>
                                 </tr>
                                 <tr>
                                    <td>Cor</td>
                                    <td><h5 style="background-color:orange; border: 2px solid black"> <br> </h5></td>
                                 </tr>
                                 <tr>
                                    <td>Lugares</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>Kilometragem</td>
                                    <td>150.000 Km</td>
                                 </tr>
                                 <tr>
                                    <td>Preco</td>
                                    <td>R$:350.000,00</td>
                                 </tr>
                                 <tr>
                                    <td>Telefone</td>
                                    <td>98744-7884</td>
                                 </tr>
                                 <tr>
                                    <td>Email</td>
                                    <td>Laodinho@gmail.com</td>
                                 </tr>
                                 <tr>
                                    <td>Ano</td>
                                    <td>2018-02-19</td>
                                 </tr>
                                 <tr>
                                    <td>Numero de Portas</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>Espaco Porta-malas</td>
                                    <td>600 L</td>
                                 </tr>
                              </table>                           
                              
                              <p class="card-text"><small class="text-muted">Atualizado  <?php echo "<strong>" . date('d/m/Y H:i') ." </strong>"; ?></small></p>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            
            </div>

         </div>

      </div>

      <?php lista(); ?>

   </body>
</html>
 
  



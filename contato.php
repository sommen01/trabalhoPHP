<?php
require_once 'funcoes.php';
include_once "menu.php";
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio</title>

    <style rel="stylesheet" type="text/css">
    .file {
        visibility: hidden;
        position: absolute;
    }
    </style>
</head>

<body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <h2 class="text-center">Entre em Contato</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
                    <form action="executaFormContato.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contate-nos</h3>
                                    <p class="m-0">Estamos a disposição</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Escreva seu nome" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-address-book text-info"></i></div>
                                        </div>
                                        <div class="container p-3 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="erros" name="categoria" value="Erros" style="margin-top: .3rem; margin-left: -1.25rem;" required>
                                                <label class="form-check-label pl-2" for="erros">Erros e Problemas</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="sugestao" name="categoria" value="Sugestões" style="margin-top: .3rem; margin-left: -1.25rem" required>
                                                <label for="sugestao" class="form-check-label pl-2">Sugestões</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="reclamacao" name="categoria" value="Reclamações" style="margin-top: .3rem; margin-left: -1.25rem" required>
                                                <label for="reclamacao" class="form-check-label pl-2">Reclamações sobre o Serviço</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Escreva sua mensagem" name = "texto" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <?php 
                                        if(isset($_SESSION["error"])){
                                            echo $_SESSION["error"];
                                            unset($_SESSION["error"]);
                                        }
                                    ?>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Enviar" name="enviar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
               


                </div>
	</div>
</div>
</body>


</html>


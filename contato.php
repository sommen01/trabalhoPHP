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

<!-- JUMBOTRON -->
<div class="jumbotron bg-dark text-light m-0" style="background: linear-gradient(#000028, #280000);">
    <div class="container text-center">
    <h1 class="display-4 font-weight-bold">CONVERSE COM A NOSSA EQUIPE</h1>
    <p class="lead">Nós ajudaremos você a escolher os produtos e preços certos para a sua necessidade.</p>
    </div>
</div>

<div class="container">

    <div class="row px-3 py-3 mx-3 my-3">
        <!-- PAGE TEXT -->
        <div class="col align-self-center">
            
            <div class="row d-flex justify-content-center text-center text-uppercase ">
                <h1 class="display-3 font-weight-bold">ENTRE EM CONTATO</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <p class="h3">Nossa Central de Ajuda está sempre atualizada e pronta para receber você. Se você não encontrar a resposta que procura, estaremos aqui para ajudar.</p>
            </div>

        </div>
        
        <div class="col bg-light border px-0 py-0 mx-0 my-0">
            <!-- title form -->
            <h1 class="display-3 p-3 my-0 bg-dark text-white text-center">
                <p class="p-3 fa fa-envelope"></p>
                Contate-nos
                <p class="h4 m-0 p-0">Estamos a disposição</p>
            </h1>
            <!-- CONTACT FORM -->
            <div class="p-3">
            
                <form action="executaFormContato.php" method="post">
                
                    <div class="row">
                        <!-- form items -->
                        <div class="col">

                            <div class="form-group">

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Escreva seu nome" required>
                                </div>

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" required>
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-address-book text-info"></i></div>
                                    </div>
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

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" placeholder="Escreva sua mensagem" name = "texto" required></textarea>
                                </div>

                                <div class="input-group mb-2"> 
                                    <?php 
                                    if (isset($_SESSION["error"])) {
                                        echo $_SESSION["error"];
                                        unset($_SESSION["error"]);
                                    }
                                    ?>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" name="enviar" class="btn btn-primary btn-block">
                                </div>

                            </div>
                        
                        </div>
                    
                    </div>

                </form>

            </div>
        
        </div>
    
    </div>

</div>
<?php include_once 'footer.php'; ?>
</body>


</html>


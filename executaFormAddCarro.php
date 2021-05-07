<?php
 require_once "funcoes.php";
if (isset($_POST["enviar"])) {

    if(!preg_match('/\b[0-9]{2}[9]{1}/', $_POST["telefone"])){
        $_SESSION["error"] = "<b style=\"color: red;\">Campo de telefone invalido.</b>";
        header("Location: addCarro.php");
    } else if(!preg_match('/.com\b/', $_POST["email"])){
        $_SESSION["error"] = "<b style=\"color: red;\">Campo de email invalido.</b>";
        header("Location: addCarro.php");
    } else {
        $nome = htmlentities($_POST["nome"]);
        $color = htmlentities($_POST["color"]);
        $lugares = htmlentities($_POST["lugares"]);
        $km = htmlentities($_POST["km"]);
        $valor = htmlentities($_POST["valor"]);
        $telefone = htmlentities($_POST["telefone"]);
        $email = htmlentities($_POST["email"]);
        $data = htmlentities($_POST["data"]);
        $portas = htmlentities($_POST["portas"]);
        $portaMala = htmlentities($_POST["portaMalas"]);
        $ext = strtolower(substr($_FILES['img']['name'],-4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $dir = './assets/img/'; //Diretório para uploads 
        move_uploaded_file($_FILES['img']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        echo("Imagen enviada com sucesso!");
        arrayGlobal($nome, $color, $lugares,$km, $valor, $telefone, $email, $data, $portas, $portaMala, $new_name);
    }
}


?>
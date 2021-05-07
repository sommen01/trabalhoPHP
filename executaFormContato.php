<?php
 require_once "funcoes.php";
if (isset($_POST["enviar"])) {
    
    if(!preg_match('/.com\b/', $_POST["email"])){
        $_SESSION["error"] = "<b style=\"color: red;\">Campo de email invalido.</b>";
        header("Location: contato.php");
    } else {
        $nome = htmlentities($_POST["nome"]);
        $email = htmlentities($_POST["email"]);
        $categoria = htmlentities($_POST["categoria"]);
        $texto = htmlentities($_POST["texto"]);

        arrayContato($nome,$email,$categoria,$texto);
    }  
}


?>
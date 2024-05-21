<?php

    require("connector.php");

    if(isset($_POST)) {

        $nome = $_POST['email'];
        $pontuacao = $_POST['pontuacao'];
        $mensagem = $_POST['mensagem'];

        $query = "INSERT INTO contatos (email, pontuacao, mensagem) VALUES ('$nome', '$pontuacao', '$mensagem')";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
    
    }

?>

<!--Carlos Agusto e Artur essa parte-->

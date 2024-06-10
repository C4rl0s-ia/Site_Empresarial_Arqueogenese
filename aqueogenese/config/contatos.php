<?php

    require("connector.php");

    if(isset($_POST)) {

        $nome = $_POST['email'];
        $pontuacao = $_POST['pontuacao'];
        $mensagem = $_POST['mensagem'];

        $query = "INSERT INTO contatos (email, pontuacao, mensagem) VALUES ('$nome', '$pontuacao', '$mensagem')";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
    
        header("location: /myhost-exemple/aqueogenese/contacts.php?criado=sucesso");
    }

?>

<!--Carlos Agusto e Artur essa parte-->

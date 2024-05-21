<?php

    $hostname = "localhost";
    $usuario = ";root";
    $senha = "";
    $bancodedados = "banco de dados - formulários";


    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

    //if($conexao->connect_errno)
    //{
    //    echo "Echo";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

?>
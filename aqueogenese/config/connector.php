<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$dbname = "contatos";

try {

    $pdo = new PDO ("mysql:host=$host; 
    dbname=contatos", $usuario, $senha);

}catch(PDOException $e){
    echo $e->getMessage();
}

?>

<!--Carlos Agusto e Artur essa parte-->

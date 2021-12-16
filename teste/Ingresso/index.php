<?php

// CONFIGURAÇÃO COM O BANCO DE DADOS
$endereco='localhost';
$banco='CineControl';
$usuario='postgres';
$senha='1234';


try{

    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    //echo "Conectando no banco de dados !!! <br>";
}
    catch(PDOException $e){
        echo 'falha na conexão com o banco de dados';
        die($e->getMessage());
}

//INSTRUÇÕES SQL(QUERYS)

// salas
$ingressos =$pdo->query("SELECT count(*) FROM ingresso where vendido='true'");


//var_dump($ingressos->fetchAll());

require 'salas.php';


?>
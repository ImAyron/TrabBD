<?php

// CONFIGURAÇÃO COM O BANCO DE DADOS
$endereco='localhost';
$banco='TesteDB';
$usuario='postgres';
$senha='1234';


try{

    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo "Conectando no banco de dados !!! <br>";
}
    catch(PDOException $e){
        echo 'falha';
        die($e->getMessage());
}
//INSTRUÇÕES SQL


$estudante =$pdo->query("SELECT * FROM estudante");
$maiorIdade=$pdo->query("SELECT * FROM estudante where idade>18");

//var_dump($ingressos->fetchAll());

require 'reservas.php';

?>
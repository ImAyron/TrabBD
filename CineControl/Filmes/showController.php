<?php

require_once 'index.php';

$nome_original=$_POST['nome_original'];



$tabela= $pdo->query("SELECT * FROM FILME where nome_original = '$nome_original' ");

$c=$tabela->fetch();
var_dump($c['classificacao_etaria']);

require_once 'show.php';
exit();



?>
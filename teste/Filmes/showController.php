<?php

require 'index.php';


$nome_original=$_POST['nome_original'];

$stmt->bindParam(':nome_original',$nome_original);

$tabela2= $pdo->query("SELECT * FROM FILME where :nome_original = nome_original");

var_dump($tabela2);


$stmt->execute();

header('location:index.php');
exit();

?>
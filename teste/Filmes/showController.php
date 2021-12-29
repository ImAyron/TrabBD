<?php

require 'index.php';

$nome_original=$_GET['nome_original'];



$tabela= $pdo->query("SELECT * FROM FILME where nome_original = '$nome_original' ");


header('location:show.php');
exit();

?>
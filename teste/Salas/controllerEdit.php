<?php

require 'index.php';



$numero=$_POST['numero'];
$num_assentos=$_POST['num_assentos'];
$tipo=$_POST['tipo'];


$stmt= $pdo->prepare("UPDATE sala SET  num_assentos=:num_assentos,tipo=:tipo where numero=:numero;");

$stmt->bindParam(':numero',$numero);
$stmt->bindParam(':num_assentos',$num_assentos);
$stmt->bindParam(':tipo',$tipo);

$stmt->execute();

header('location:index.php');
exit();

?>
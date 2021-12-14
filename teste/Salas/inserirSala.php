<?php

require 'conexão.php';

$numero=$_POST['numero'];
$num_assentos=$_POST['num_assentos'];
$tipo=$_POST['tipo'];

$stmt= $pdo->prepare("INSERT INTO SALA(Numero,Num_assentos,Tipo, Eid) VALUES (:numero,:num_assentos,:tipo,'B1D48DDT1V')");

$stmt->bindParam(':numero',$numero);
$stmt->bindParam(':num_assentos',$num_assentos);
$stmt->bindParam(':tipo',$tipo);

$stmt->execute();

header('location:conexão.php');
exit();

?>
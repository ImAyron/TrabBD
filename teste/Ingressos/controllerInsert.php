<?php

require 'index.php';

$id=$_POST['id'];
$sid=$_POST['sid'];
$tipo=$_POST['tipo'];

$stmt= $pdo->prepare("INSERT INTO SALA(Numero,Num_assentos,Tipo, Eid) VALUES (:numero,:num_assentos,:tipo,'B1D48DDT1V')");

$stmt->bindParam(':id',$id);
$stmt->bindParam(':sid',$sid);
$stmt->bindParam(':tipo',$tipo);

$stmt->execute();

header('location:index.php');
exit();

?>
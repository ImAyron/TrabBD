<?php

require 'index.php';


$numero=$_GET['numero'];
echo $numero;

$stmt= $pdo->prepare("DELETE FROM sala  where numero=:numero;");

$stmt->bindParam(':numero',$numero);

$stmt->execute();

header('location:index.php');
exit();

?>
<?php

require_once 'index.php';

$cep=$_POST['cep'];
$end_num=$_POST['end_num'];
$num_salas=$_POST['num_salas'];
$telefone=$_POST['telefone'];

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("INSERT INTO ESTABELECIMENTO ( cep, end_num, num_salas, telefone) 
    VALUES (:cep, :end_num, :num_salas, :telefone)");

    $stmt->bindParam(":cep", $cep);
   
    $stmt->bindParam(":end_num", $end_num);
    $stmt->bindParam(":num_salas", $num_salas);
    $stmt->bindParam(":telefone", $telefone);

    $stmt->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro na inserção! " . $error->getMessage());
}

header('location:view.php');
exit();

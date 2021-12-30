<?php

require_once 'index.php';


$id=$_POST['id'];
$cep=$_POST['cep'];
$end_num=$_POST['end_num'];
$num_salas=$_POST['num_salas'];
$telefone=$_POST['telefone'];

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("UPDATE ESTABELECIMENTO SET cep=:cep, end_num=:end_num, num_salas=:num_salas, telefone=:telefone WHERE id=:id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":cep", $cep);
    $stmt->bindParam(":end_num", $end_num);
    $stmt->bindParam(":num_salas", $num_salas);
    $stmt->bindParam(":telefone", $telefone);

    $stmt->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro! " . $error->getMessage());
}

header('location:index.php');
exit();

?>
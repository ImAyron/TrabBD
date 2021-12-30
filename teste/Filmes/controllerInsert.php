<?php

require_once 'index.php';

$nome_original = $_POST['nome_original'];
$diretor = $_POST['diretor'];
$nome_exibido = $_POST['nome_exibido'];
$sinopse = $_POST['sinopse'];
$classificacao_etaria = $_POST['classificacao_etaria'];
$categorias = $_POST['categorias'];
$astros = $_POST['astros'];
$data_estreia = $_POST['data_estreia'];
$duracao = $_POST['duracao'];

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("INSERT INTO FILME (nome_original, diretor, nome_exibido, sinopse, classificacao_etaria, categorias, astros, data_estreia, duracao)
     VALUES (:nome_original, :diretor, :nome_exibido, :sinopse, :classificacao_etaria, :categorias, :astros, :data_estreia, :duracao)");

    $stmt->bindParam(":nome_original", $nome_original);
    $stmt->bindParam(":diretor", $diretor);
    $stmt->bindParam(":nome_exibido", $nome_exibido);
    $stmt->bindParam(":sinopse", $sinopse);
    $stmt->bindParam(":classificacao_etaria", $classificacao_etaria);
    $stmt->bindParam(":categorias", $categorias);
    $stmt->bindParam(":astros", $astros);
    $stmt->bindParam(":data_estreia", $data_estreia);
    $stmt->bindParam(":duracao", $duracao);


    $stmt->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro na inserção! " . $error->getMessage());
}

header('location:index.php');
exit();
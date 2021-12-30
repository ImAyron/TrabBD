<?php

require 'index.php';

$nome_original = $_POST['nome_original'];
$diretor = $_POST['diretor'];
$nome_exibido = $_POST['nome_exibido'];
$sinopse = $_POST['sinopse'];
$classificação_etaria = $_POST['classificação_etaria'];
$categorias = $_POST['categorias'];
$astros = $_POST['astros'];
$data_estreia = $_POST['data_estreia'];
$duracao = $_POST['duracao'];

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("UPDATE FILME SET nome_exibido=:nome_exibido,sinopse=:sinopse,classificação_etaria=:classificação_etaria,categorias=:categorias,astros=:astros,data_estreia=:data_estreia,duracao=:duracao, numero=:numero WHERE nome_original=:nome_original AND diretor=:diretor");

    $stmt->bindParam(":nome_original", $nome_original);
    $stmt->bindParam(":diretor", $diretor);
    $stmt->bindParam(":nome_exibido", $nome_exibido);
    $stmt->bindParam(":sinopse", $sinopse);
    $stmt->bindParam(":classificação_etaria", $classificação_etaria);
    $stmt->bindParam(":categorias", $categorias);
    $stmt->bindParam(":astros", $astros);
    $stmt->bindParam(":data_estreia", $data_estreia);
    $stmt->bindParam(":duracao", $duracao);

    $stmt->execute();
    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro! " . $error->getMessage());
}

header('location:index.php');
exit();

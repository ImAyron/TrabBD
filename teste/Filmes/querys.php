<?php

function filtroTodasAsFilmes()
{
    require '../dbc/index.php';

    $stmt = $pdo->query("SELECT * FROM FILME ORDER BY nome_exibido");

    return $stmt->fetchAll();
}

function inserirFilmes($nome_original, $diretor, $nomeExibido, $sinopse, $faixaEtaria, $categorias, $astros, $dataEstreia, $duracao)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO FILME ( nome_original, diretor, nome_exibido, sinopse, faixa_etaria, categorias, astros, dataEstreia, duracao) 
        VALUES (:nome_original, :diretor, :nomeExibido, :sinopse, :faixa_etaria, :categorias, :astros, :data_estreia, :duracao)");

        $stmt->bindParam(":nome_original", $nome_original);
        $stmt->bindParam(":diretor", $diretor);
        $stmt->bindParam(":nome_exibido", $nomeExibido);
        $stmt->bindParam(":sinopse", $sinopse);
        $stmt->bindParam(":faixa_etaria", $faixaEtaria);
        $stmt->bindParam(":categorias", $categorias);
        $stmt->bindParam(":astros", $astros);
        $stmt->bindParam(":dataEstreia", $dataEstreia);
        $stmt->bindParam(":duracao", $duracao);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro na inserção! " . $error->getMessage());
    }
}

function editarFilme($nome_original, $diretor, $nomeExibido, $sinopse, $faixaEtaria, $categorias, $astros, $dataEstreia, $duracao)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("UPDATE FILME SET nome_exibido=:nome_exibido, sinopse=:sinopse, faixa_etaria=:faixa_etaria, categorias=:categorias, astros=:astros, dataEstreia=:dataEstreia, duracao=:duracao 
        WHERE nome_original=:nome_original AND diretor=:diretor");

        $stmt->bindParam(":nome_original", $nome_original);
        $stmt->bindParam(":diretor", $diretor);
        $stmt->bindParam(":nomeExibido", $nomeExibido);
        $stmt->bindParam(":sinopse", $sinopse);
        $stmt->bindParam(":faixa_etaria", $faixaEtaria);
        $stmt->bindParam(":categorias", $categorias);
        $stmt->bindParam(":astros", $astros);
        $stmt->bindParam(":data_estreia", $dataEstreia);
        $stmt->bindParam(":duracao", $duracao);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarFilme($nome_original, $diretor)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("DELETE FROM FILME WHERE nome_original=:nome_original AND diretor=:diretor");

        $stmt->bindParam(":nome_original", $nome_original);
        $stmt->bindParam(":diretor", $diretor);  
        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}

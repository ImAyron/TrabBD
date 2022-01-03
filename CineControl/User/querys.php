<?php

function filtroTodasAsUsuarios()
{
    require_once '../dbc/index.php';

    $stmt = $pdo->query("SELECT * FROM USUARIOS ORDER BY email");

    return $stmt->fetchAll();
}

function inserirUsuarios($email, $cargo)
{
    require_once '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO USUARIOS (email, cargo) VALUES (:email, :cargo)");

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":cargo", $cargo);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro na inserção! " . $error->getMessage());
    }
}

function editarUsuario($email, $cargo)
{
    require_once '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("UPDATE USUARIOS SET cargo=:cargo WHERE email=:email");
        
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":cargo", $cargo);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarUsuario($email)
{
    require_once '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("DELETE FROM USUARIOS WHERE email=:email");

        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}

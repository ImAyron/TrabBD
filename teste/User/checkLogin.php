<?php

require '../dbc/index.php';

$user = null;

$email = $_POST["email"];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT * FROM USUARIOS WHERE email=:email AND senha=:senha");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

$stmt = $stmt->fetch();

if (empty($stmt)) {
  echo "erro";
  die();
} else {

  session_start();
  $_SESSION['email'] = $stmt['email'];
  $_SESSION['cargo'] = $stmt['cargo'];

  header('location:../Salas/index.php');
}


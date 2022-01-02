<?php

require_once '../dbc/index.php';

$user = null;

$email = $_POST["email"];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email AND senha=:senha");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

$stmt = $stmt->fetch();

if (empty($stmt)) {
  echo "<script>alert('Login ou senha incorretos!'); location.replace('../index.php');</script>";
  die();
} else {

  session_start();
  $_SESSION['email'] = $stmt['email'];
  $_SESSION['cargo'] = $stmt['cargo'];

  header('location:../Filmes/view.php');
}


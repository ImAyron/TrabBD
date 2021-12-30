<?php

require_once '../dbc/index.php';

//INSTRUÇÕES SQL(QUERYS)

// salas
$usuarios = $pdo->query("SELECT * FROM USUARIOS ORDER BY cargo,email ASC");

//var_dump($ingressos->fetchAll());


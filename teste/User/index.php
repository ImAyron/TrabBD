<?php

require '../dbc/index.php';

//INSTRUÇÕES SQL(QUERYS)

// salas
$usuarios = $pdo->query("SELECT * FROM USUARIOS ORDER BY cargo ASC");

//var_dump($ingressos->fetchAll());


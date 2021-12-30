<?php

require '../dbc/index.php';



$estabelecimento = $pdo->query("SELECT * FROM ESTABELECIMENTO ORDER BY cep");

require '../Salas/insert.php';


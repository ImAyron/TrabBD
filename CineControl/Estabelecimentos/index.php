<?php

require_once '../dbc/index.php';



$estabelecimento = $pdo->query("SELECT * FROM ESTABELECIMENTO ORDER BY cep");



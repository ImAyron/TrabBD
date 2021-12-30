<?php

require_once '../dbc/index.php';



$filmes = $pdo->query("SELECT * FROM FILME ORDER BY nome_original ASC");


require_once 'view.php';
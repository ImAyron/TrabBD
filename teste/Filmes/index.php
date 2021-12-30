<?php

require '../dbc/index.php';



$filmes = $pdo->query("SELECT * FROM FILME ORDER BY nome_original ASC");


require 'view.php';
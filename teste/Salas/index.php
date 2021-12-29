<?php

require '../dbc/index.php';


$tabela = $pdo->query("SELECT * FROM SALA ORDER BY eid,numero ASC");


require 'view.php';

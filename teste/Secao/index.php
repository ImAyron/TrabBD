<?php

require '../dbc/index.php';



$tabela = $pdo->query("SELECT * FROM SECAO ORDER BY data,horario ASC");


require 'view.php';
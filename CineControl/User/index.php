<?php

require_once '../dbc/index.php';


$usuarios = $pdo->query("SELECT * FROM USUARIOS ORDER BY cargo,email ASC");



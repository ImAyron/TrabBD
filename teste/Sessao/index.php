<?php

require_once '../dbc/index.php';



$sessoes = $pdo->query("SELECT id,data,horario,idioma,legendado,duracao,fnome,fdiretor,slnum FROM SESSAO INNER JOIN OCORRE_EM ON SESSAO.id = OCORRE_EM.scid ORDER BY slnum,data,horario ASC");


require_once 'view.php';
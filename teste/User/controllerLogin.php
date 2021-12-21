<?php

function booleanIsLogged()
{
    if (!isset($_SESSION['cargo']) || empty($_SESSION['cargo'])) {
        return false;
    }
    return true;
}

function isLoggedIn()
{
    session_start();
    if (!isset($_SESSION['cargo']) || empty($_SESSION['cargo'])) {
        echo "<br><a>Voce precrisa estar </a> <a href='../index.php'>logado</a>!</a><br>";
        exit();
    }
}

function hasCargo($cargo)
{
    if ($_SESSION['cargo'] != $cargo) {
        echo "<br><a>Você não tem permissão para fazer esta ação! </a> <a href='index.php'>Voltar</a></a><br>";
        exit();
    }
}



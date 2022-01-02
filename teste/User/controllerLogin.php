<?php

function booleanIsLogged()
{
    if (session_id() == '') {
        session_start();
    }
    if (!isset($_SESSION['cargo']) || empty($_SESSION['cargo'])) {
        return false;
    }
    return true;
}

function isLoggedIn()
{
    if (session_id() == '') {
        session_start();
    }
    if (!isset($_SESSION['cargo']) || empty($_SESSION['cargo'])) {
        echo "<script>alert('Você precisa estar logado para realizar esta ação!'); location.replace('../index.php');</script>";
        exit();
    }
}

function hasCargo($cargo)
{
    if (session_id() == '') {
        session_start();
    }
    print_r($_SESSION);
    if ($_SESSION['cargo'] != $cargo) {
        echo "<script>alert('Você não possui a permissão necessária para realizar esta ação!'); location.replace('../index.php');</script>";
        exit();
    }
}

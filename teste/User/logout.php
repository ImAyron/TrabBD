<?php 
    if(session_id() == '') {
        session_start();
    }

    session_unset();         
    session_destroy();
    unset($_SESSION['cargo']);
    unset($_SESSION['email']);

   echo "<script>alert('Deslogado!!!'); location.replace('../index.php');</script>";


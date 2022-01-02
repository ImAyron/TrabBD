<?php 
    if(session_id() == '') {
        session_start();
    }

    unset($_SESSION['cargo']);
    unset($_SESSION['email']);
    
    session_unset();         
    session_destroy();

   echo "<script>alert('Deslogado!!!'); location.replace('../index.php');</script>";


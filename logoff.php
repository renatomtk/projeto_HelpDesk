<?php

    session_start();

    /*
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    //unset($_SESSION['x']); //remove o indíce apenas se existir
    session_destroy(); //forçar redirecionamento

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    //remover indíces do array de sessão
    //unset()

    //destruir a variável de sessão
    //session_destroy()
    */

    session_destroy();
    header('Location: index.php');

?>
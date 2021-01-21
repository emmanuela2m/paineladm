<?php

function verificalogin() {
    //no futuro as informaçãoes são
    //trazidos no banco de dados
    $usuario = 'manu';
    $senha = '123456';

    //verificar se as informações 
    //passadas pelo usuario é igual a que estão no banco.
    if ($_POST['usuario'] == $usuario &&
            $_POST['senha'] == $senha) {
        //criar dados na session
        $_SESSION['usuario'] = $usuario;
        return TRUE;
    } else {
        return false;
    }
}

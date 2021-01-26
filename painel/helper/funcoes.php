<?php

function verificaLogin() {
    //No futuro as informações são 
    //trazidos do banco de dados

    $usuario = 'manu';
    $senha = '12345678';

    //Verificar se as informações passadados 
    //pelo usuário é igual a que estão no banco de dados.

    if ($_POST) {
        if ($_POST ['usuario'] == $usuario &&
                $_POST ['senha'] == $senha) {

            //Cria dados na SESSION
            $_SESSION ['usuario'] = $usuario;
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        if (isset($_SESSION['usario'] )) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
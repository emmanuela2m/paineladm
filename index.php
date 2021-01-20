<?php

$pg = isset($_GET['pg']);



if ($pg) {
    //existe

    switch ($_GET['pg']) {
        case 'login':

            include_once './painel/paginas/acesso/login.php';
            break;
        
        case 'dashboard':
            include_once './painel/paginas/dashboard.php';    


        default:
            include_once './painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once './painel/paginas/dashboard.php';
}


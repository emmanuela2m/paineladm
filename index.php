<?php
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);



if ($pg) {
    //existe

    switch ($_GET['pg']) {
        case 'inicio':

            include_once 'site/inicio.php';
            break;
        case 'login':

            include_once './painel/paginas/acesso/login.php';
            break;
        
        case 'dashboard':
            //pagina inicial do painel adm
            if (verificalogin()) {
                include_once 'painel/paginas/dashboard.php';
                
            } else {
                echo 'Login ou senha inálidos';    
            }
            break;


        default:
            include_once './painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once './painel/paginas/dashboard.php';
}


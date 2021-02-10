<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);
if (!$pg){
    $pg = 'painel';
}

if ($pg) {
    //existe
    switch ($pg){
        case '':
            
            break;
        default :
            break;
    }
}
} else {
    //não existe
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/navegacao.php';
    include_once 'site/paginas/inicio.php';
    include_once 'site/paginas/includes/footer.php';
}
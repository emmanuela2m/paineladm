<?php

include_once 'painel/bd/conecxao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe
    switch ($_GET['pg']) {

        case 'inicio':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos':
            //Fazer uma consulta no banco e disponibilizar os resultados

            $resultDados = new conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtositem':

            $id = $_GET['id'];

            $resultDados = new conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtositem.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-editar':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do usuário
                //Função para atualização do usuário
                $nome = $_POST ['id'];
                $nome = $_POST ['nome'];
                $tipo_ = $_POST ['tipo'];
                $valor = $_POST ['valor'];

                $paramentros = array(
                    'id' => $id,
                    'nome' => $nome,
                    'tipo' => $tipo,
                    'valor' => $valor,);
                header('Location: ?pg-produtos');



                //fazendo a atualização do banco
                $atualizarProdutos = new Conecxao();

                $atualizarProduto->intervencaoNoBanco(''
                        . 'UPDATE produtos SET'
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor,'
                        . 'WHERE id = :id', $paramentros);
                header('Location: ' .)
                        
            } else {

                //mostrar os dados do produto
                $idProdutosEditar = isset($_GET['id']);



                if ($idProdutosEditar) {

                    $resultDados = new conecxao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE id = ' . $_GET['id']);
                    include_once 'painel/paginas/produtos-editar.php';
                } else {
                    echo 'variável não definida';
                }
            }
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'servicos':

            $resultDados = new conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-vizualizar':

            $id = $_GET['id'];

            $resultDados = new conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-vizualizar.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato':

            $resultDados = new conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-vizualizar':

            $id = $_GET['id'];

            $resultDados = new conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-vizualizar.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard':
            //Página inicial do Painel Adm           
            if (verificaLogin()) {

                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                echo 'Login ou senha inválidos.';
            }
            break;

        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once 'painel / paginas / dashboard . php';
}



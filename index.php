<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe
    switch ($_GET['pg']) {

        //************site*************


        case 'inicio-site':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/navegacao.php';
            include_once 'site/paginas/inicio.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'contato-site':


            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/navegacao.php';
            include_once 'site/paginas/contato.php';
            include_once 'site/paginas/includes/footer.php';
            break;



            include_once 'site/paginas/includes/footer.php';
            break;

        case 'produtos-site':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/navegacao.php';
            include_once 'site/paginas/produtos.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'servicos-site':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/navegacao.php';
            include_once 'site/paginas/servicos.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'contato-site':


            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/navegacao.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //FAça o que está aqui dentro 
                //pegando os dados via post
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $mensagem = $_POST['mensagem'];
                //tradar os dados via post
                $parametros = array(
                    'nome' => $nome,
                    'email' => $email,
                    'mensagem' => $mensagem
                );

                //inserção no banco de dados 
                $resultDados = new Conexao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'contato (nome, email, mensagem) '
                        . 'VALUES (:nome, :email, :mensagem )', $parametros);

                include_once 'site/paginas/contato.php';
            } else {
                //faça o que está aqui
                include_once 'site/paginas/contato.php';
            }
            include_once 'site/paginas/includes/footer.php';
            break;

        

        case 'sobre-site':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/sobre.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'navegacao':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/navegacao.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        //**********parte do painel***********************

        case 'inicio':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'navegacao':
            include_once 'site/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'produtos':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;



        case 'produtos-inserir':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Pegando as variáveis via POST
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];

                //Tratar os dados enviados via POST
                $parametros = array(''
                    . ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );

                $resultDados = new Conexao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'produtos (nome, tipo, valor) '
                        . 'VALUES (:nome, :tipo, :valor)', $parametros);

                include_once 'painel/paginas/produtos.php';
            } else {
                include_once 'painel/paginas/produtos-inserir.php';
            }

            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-item':

            $id = $_GET['id'];

            $resultDados = new Conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos-item.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-inserir':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Pegando as variáveis via POST
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];

                //Tratar os dados enviados via POST
                $parametros = array(''
                    . ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );

                $resultDados = new Conexao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'servicos (nome, tipo, valor) '
                        . 'VALUES (:nome, :tipo, :valor)', $parametros);

                include_once 'painel/paginas/servicos.php';
            } else {
                include_once 'painel/paginas/servicos-inserir.php';
            }

            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'produtos-editar':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do Produto
                //Pegando as variáveis via POST

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];

                //Tratando os dados enviados
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );

                //Fazendo a atualização no banco
                $atualizarProduto = new Conexao();

                $atualizarProduto->intervencaoNoBanco(''
                        . 'UPDATE produtos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);

                include_once 'painel/paginas/produtos.php';
            } else {
                //mostrar os dados do produto
                $idProdutoEditar = isset($_GET['id']);

                if ($idProdutoEditar) {

                    $resultDados = new Conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM '
                            . 'produtos WHERE id = ' . $_GET['id']);

                    include_once 'painel/paginas/produtos-editar.php';
                } else {
                    echo 'variável não definida';
                }
            }

            include_once 'painel/paginas/includes/footer.php';
            break;

        case'produtos-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDados = new Conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM produtos WHERE id = :id', $parametros);
            header('Location: ?pg=produtos');
            break;

        case 'servicos':

            $resultDados = new Conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;



        case 'servicos-item':

            $id = $_GET['id'];

            $resultDados = new Conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos-item.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-editar':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do Produto
                //Pegando as variáveis via POST

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];

                //Tratando os dados enviados
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );

                //Fazendo a atualização no banco
                $atualizarServico = new Conexao();

                $atualizarServico->intervencaoNoBanco(''
                        . 'UPDATE produtos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);

                include_once 'painel/paginas/servicos.php';
            } else {
                //mostrar os dados do produto
                $idServicosEditar = isset($_GET['id']);

                if ($idServicosEditar) {

                    $resultDados = new Conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM '
                            . 'servicos WHERE id = ' . $_GET['id']);

                    include_once 'painel/paginas/servicos-editar.php';
                } else {
                    echo 'variável não definida';
                }
            }

            include_once 'painel/paginas/includes/footer.php';
            break;

        case'servicos-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDados = new Conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM servicos WHERE id = :id', $parametros);
            header('Location: ?pg=servicos');
            break;


        case 'contato':

            $resultDados = new Conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato');


            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;



        case 'contato-visualizar':

            $id = $_GET['id'];

            $resultDados = new Conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-visualizar.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case'contato-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDados = new Conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM contato WHERE id = :id', $parametros);
            header('Location: ?pg=contato');
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
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/navegacao.php';
    include_once 'site/paginas/inicio.php';
    include_once 'site/paginas/includes/footer.php';
}



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
            $resultDados = new conecxao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos');


            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtositem':

            $id = $_GET['id'];
            $resultDados = new conecxao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE id = ' . $id);


            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtositem.php';
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'produtositem':

            $id = $_GET['id'];

            $resultDados = new Conexao();
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
                $atualizarProduto = new Conecxao;

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

                    $resultDados = new Conecxao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM '
                            . 'produtos WHERE id = ' . $_GET['id']);

                    include_once 'painel/paginas/produtos-editar.php';
                } else {
                    echo 'variável não definida';
                }
            }

            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDados = new Conecxao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM produtos WHERE id = :id', $parametros);
            header('Location: ?pg=produtos');

            break;
        
        case 'produtos-inserir':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {             
                
               $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];   
                
                $parametros = array ('' 
                    . ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                    );
                $resultDados = new Conecxao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'produtos (nome, tipo, valor) '
                        . 'VALUES (:nome, :tipo, :valor)', $parametros);
                
                include_once 'painel/paginas/produtos.php';
           } else {
               
               
           }
           
            include 'painel/paginas/produtos-inserir.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        

        case 'servicos':

            $resultDados = new conecxao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicositem':

            $id = $_GET['id'];

            $resultDados = new Conecxao();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicositem.php';
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'servicos-editar':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do servicos
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
                $atualizarServicos = new Conecxao;

                $atualizarServicos->intervencaoNoBanco(''
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

                    $resultDados = new Conecxao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM '
                            . 'servicos WHERE id = ' . $_GET['id']);

                    include_once 'painel/paginas/servicos-editar.php';
                } else {
                    echo 'variável não definida';
                }
            }

            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDados = new Conecxao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM servicos WHERE id = :id', $parametros);
            header('Location: ?pg=servicos');

            break;

        case 'contato':

            $resultDados = new conecxao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato');


            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-visualizar':

            $id = $_GET ['id'];
            $resultDados = new conecxao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato WHERE id = ' . $id);


            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-visualizar.php';
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'contato-editar':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do servicos
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
                $atualizarContato = new Conecxao;

                $atualizarContato->intervencaoNoBanco(''
                        . 'UPDATE produtos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);

                include_once 'painel/paginas/contato.php';
            } else {
                //mostrar os dados do produto
                $idContatoEditar = isset($_GET['id']);

                if ($idContatoEditar) {

                    $resultDados = new Conecxao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM '
                            . 'contato WHERE id = ' . $_GET['id']);

                    include_once 'painel/paginas/contato-editar.php';
                } else {
                    echo 'variável não definida';
                }
            }

            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDados = new Conecxao();
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
    include_once 'painel/paginas/dashboard.php';
}
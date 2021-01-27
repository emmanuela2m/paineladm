<?php

class Conexao {

    private $db_server = 'localhost';
    private $db_name = 'paineladm2';
    private $db_charset = 'utf8';
    private $db_username = 'root';
    private $db_password = '';

    public function selecionarDados($consulta, $parametros = null, $debug = true, $close_connerction = true) {
        $result = null;
        $connection = new PDO(
                );        
    }

}

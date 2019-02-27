<?php

namespace ModelPro\Core\Database;

use \PDO;
use \PDOException;

/**
* Cria conexões com o Banco de Dados, dependendo da configuração.
*/
class ConnectionFactory {
    private static $dbname;

    public static function getConnection() {
        $db_options = array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            return new PDO(
                'mysql:host=localhost:3306;dbname=modelpro', 'root', '', $db_options);
        } catch (PDOException $exception) {
            echo 'Connection failed: ' . $exception->getMessage();
        }
    }
}

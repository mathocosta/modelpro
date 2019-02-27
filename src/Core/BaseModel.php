<?php

namespace ModelPro\Core;

abstract class BaseModel {

    protected static $table;
    protected static $className;
    protected static $db_connection;

    public function __construct($db_connection) {
        self::$db_connection = $db_connection;
    }

    public static function all() {
        $sql = 'SELECT * FROM ' . self::$table;

        $stmt = self::$db_connection->query($sql);
        $results = $stmt->fetchAll();

        return $results;
    }

    public static function get($id) {
        $sql = 'SELECT * FROM ' . self::$table . ' WHERE id = ' . $id;
        $stmt = self::$db_connection->query($sql);
        $result = $stmt->fetch();

        return $result;
    }

}

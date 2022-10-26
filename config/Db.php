<?php


class Db {

    static $pdo;


    public static function getPDO() {
        if (empty(self::$pdo)) {
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $dsn = "mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=utf8";
            $pdo = new PDO($dsn, $config['user'], $config['pass'], $opt);
            self::$pdo = $pdo;
        }
        return self::$pdo;


    }
}

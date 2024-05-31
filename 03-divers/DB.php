<?php

class DB
{
    private static ?PDO $db = null;
    private static string $dbName = 'poo';

    /**
     * Permet de changer la connexion à la base de données
     */
    public static function config(string $dbName)
    {
        if ($dbName !== self::$dbName) {
            self::$db = null;
            self::$dbName = $dbName;
        }

        return new DB();
    }

    public static function getInstance(): PDO
    {
        if (self::$db === null) {
            self::$db = new PDO('mysql:host=localhost;dbname='.self::$dbName.';charset=UTF8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }

        return self::$db;
    }

    public static function select(string $sql, array $bindings = [])
    {
        $db = self::getInstance();

        $query = $db->prepare($sql);
        $query->execute($bindings);

        return $query->rowCount() > 1 ? $query->fetchAll() : $query->fetch();
    }

    public static function insert(string $sql, array $bindings = [])
    {
        $db = self::getInstance();

        $query = $db->prepare($sql);
        $query->execute($bindings);
    }
}

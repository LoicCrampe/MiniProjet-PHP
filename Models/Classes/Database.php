<?php

class Database
{

    /* local database */
    const DB_HOST = "localhost";
    const DB_NAME = "notesb3";
    const DB_USER = "root";
    const DB_PASS = "";

    public static function getPDO()
    {
        return new \PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . '', self::DB_USER, self::DB_PASS, array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }

    public static function db_query($_query, $option = null)
    {
        if ($option === null) {
            $query = self::getPDO()->query($_query);
            $results = $query->fetchAll(\PDO::FETCH_OBJ);
        } elseif ($option === "send") {
            $query = self::getPDO()->prepare($_query);
            $results = $query->execute();
        } else {
            $query = self::getPDO()->query($_query);
            $query->setFetchMode(\PDO::FETCH_OBJ);
            $results = $query->fetch();
        }
        return $results;
    }
}

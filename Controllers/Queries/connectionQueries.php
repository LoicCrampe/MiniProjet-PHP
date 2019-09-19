<?php

class connectionQueries
{

    public static function isExist($identifiant)
    {
        return "SELECT login, passwd, role FROM users WHERE login = '{$identifiant}'";
    }

    public static function user($identifiant)
    {
        return "SELECT * FROM users WHERE login = '{$identifiant}'";
    }
}

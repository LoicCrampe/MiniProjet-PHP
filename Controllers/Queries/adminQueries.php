<?php

class adminQueries
{
    public static function createUser($login, $pass, $lastname, $firstname, $section, $role)
    {
        return "INSERT INTO users (login, passwd, lastname, firstname, section, role) VALUES ('{$login}', '{$pass}', '{$lastname}', '{$firstname}', '{$section}', '{$role}')";
    }

    public static function updateUser($idUser, $login, $passwd, $lastname, $firstname, $section, $role)
    {
        return "UPDATE users SET login = '{$login}', passwd = '{$passwd}', lastname = '{$lastname}', firstname = '{$firstname}', section = '{$section}', role = '{$role}' WHERE id = '{$idUser}'";
    }
}

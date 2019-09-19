<?php

class detailUserQueries
{
    public static function ifCompteExist($login, $pass)
    {
        return "SELECT login, passwd, id 
                FROM users 
                WHERE login = '{$login}' AND passwd = '{$pass}'";
    }

    public static function changePasseword($idUser, $pass)
    {
        return "UPDATE users 
                SET passwd = '{$pass}' 
                WHERE id = '{$idUser}'";
    }

    public static function displayAllNotes()
    {
        return "SELECT users.firstname, users.lastname ,subject, result 
                FROM data
                INNER JOIN users
                ON users.id = data.id_user";
    }

    public static function displayStudentNotes($idUser)
    {
        return "SELECT users.firstname, users.lastname ,subject, result 
                FROM data
                INNER JOIN users
                ON users.id = data.id_user
                WHERE data.id_user = '{$idUser}'";
    }

    public static function displaySectionNotes($idSection)
    {
        return "SELECT users.firstname, users.lastname ,subject, result 
                FROM data
                INNER JOIN users
                ON users.id = data.id_user
                WHERE users.section = '{$idSection}'";
    }

    public static function displayAllStudent()
    {
        return "SELECT id, firstname, lastname, section, role 
                FROM users
                WHERE role ='0'";
    }

    public static function displayStudent($idUser)
    {
        return "SELECT id, login, passwd, firstname, lastname, section, role 
                FROM users
                WHERE id = '{$idUser}'";
    }

    public static function displayALLSection()
    {
        return "SELECT id, section
                FROM classes";
    }
}

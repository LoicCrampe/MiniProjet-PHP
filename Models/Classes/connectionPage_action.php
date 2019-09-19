<?php

require "Database.php";
require "../../Controllers/Queries/connectionQueries.php";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST["connexion"])) {

    $identifiant    = $_POST["identifiant"];
    $password       = $_POST["password"];

    $isExist = Database::db_query(connectionQueries::isExist($identifiant), 1);

    if ($isExist) {
        $passwordCompte = $isExist->passwd;

        $role = $isExist->role;

        if (sha1($password) == $passwordCompte) {
            unset($_SESSION["message"]);
            unset($_SESSION["connectedProf"]);
            unset($_SESSION["connectedEleve"]);
            if ($role == "1") {
                $_SESSION["connectedProf"] = '1';
            } else if ($role == "0") {
                $_SESSION["connectedEleve"] = '1';
            }
            $_SESSION["user"] = Database::db_query(connectionQueries::user($identifiant), 1);
            $_SESSION["idUser"] = $_SESSION["user"]->id;
            header('location: ../../Vue/index.php');
        } else {
            $_SESSION["message"] = "<p class='red col-4'>Identifiant ou mot de passe incorrect.</p>";
            header('location: ../../Vue/index.php');
        }
    } else {
        $_SESSION["message"] = "<p class='red col-4'>Identifiant ou mot de passe incorrect.</p>";
        header('location: ../../Vue/index.php');
    }
}

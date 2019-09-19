<?php

session_start();

require "Database.php";
require "../../Controllers/Queries/adminQueries.php";

if (isset($_POST["annuler"])) {
    unset($_SESSION["messageNewUser"]);
    header('location: ../../Vue/index.php');
}

if (isset($_POST["valider"])) {
    if (isset($_POST["identifiant"]) && isset($_POST["password"]) && isset($_POST["passwordConfirm"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["section"]) && isset($_POST["role"])) {
        $identifiant        = $_POST["identifiant"];
        $passwd             = sha1($_POST["password"]);
        $passwordConfirm    = sha1($_POST["passwordConfirm"]);
        $firstname          = $_POST["firstname"];
        $lastname           = $_POST["lastname"];
        $role               = $_POST["role"];

        if ($role == "1") {
            $section        = "0";
        } else {
            $section        = $_POST["section"];
        }

        if ($passwd === $passwordConfirm) {
            Database::db_query(adminQueries::createUser($identifiant, $passwd, $lastname, $firstname, $section, $role), "send");
            unset($_SESSION["messageNewUser"]);
            $_SESSION["messageNewUser"] = "<p class='green'>L'utilisateur a été créé.</p>";
            header("location: ../../Vue/Pages/addUser.php");
        } else {
            unset($_SESSION["messageNewUser"]);
            $_SESSION["messageNewUser"] = "<p class='red'>La confirmation du mot de passe est incorrect.</p>";
            header("location: ../../Vue/Pages/addUser.php");
        }
    } else {
        unset($_SESSION["messageNewUser"]);
        $_SESSION["messageNewUser"] = "<p class='red'>Veuillez remplir tous les champs.</p>";
        header("location: ../../Vue/Pages/addUser.php");
    }
}

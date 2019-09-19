<?php

session_start();

require "Database.php";
require "../../Controllers/Queries/detailUserQueries.php";
require "../../Controllers/Queries/adminQueries.php";

if (isset($_POST["filtre"])) {
    $idUser = $_POST["etudiant"];
    var_dump($idUser);
    $_SESSION["utilisateur"] = Database::db_query(detailUserQueries::displayStudent($idUser), 1);
    var_dump($_SESSION["utilisateur"]);
    header("location: ../../Vue/Pages/updateUser.php");
}

if (isset($_POST["annuler"])) {
    unset($_SESSION["messageUpdateUser"]);
    header('location: ../../Vue/index.php');
}

if (isset($_POST["valider"])) {
    if (isset($_POST["identifiant"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["section"]) && isset($_POST["role"])) {
        var_dump($_SESSION["utilisateur"]);
        var_dump($_POST);
        $identifiant        = $_POST["identifiant"];
        var_dump($identifiant);
        $firstname          = $_POST["firstname"];
        var_dump($firstname);
        $lastname           = $_POST["lastname"];
        var_dump($lastname);
        $role               = $_POST["role"];
        var_dump($role);
        $idUser             = $_SESSION["utilisateur"]->id;
        var_dump($idUser);
        $passwdCompte       = $_SESSION["utilisateur"]->passwd;

        if ($role == "1") {
            $section        = "0";
        } else {
            $section        = $_POST["section"];
        }
        var_dump($section);

        Database::db_query(adminQueries::updateUser($idUser, $identifiant, $passwdCompte, $lastname, $firstname, $section, $role), "send");
        var_dump(adminQueries::updateUser($idUser, $identifiant, $passwdCompte, $lastname, $firstname, $section, $role));
        unset($_SESSION["messageUpdateUser"]);
        $_SESSION["messageUpdateUser"] = "<p class='green'>L'utilisateur a été modifié.</p>";
        header("location: ../../Vue/Pages/updateUser.php");
    } else {
        unset($_SESSION["messageUpdateUser"]);
        $_SESSION["messageUpdateUser"] = "<p class='red'>Veuillez remplir tous les champs.</p>";
        header("location: ../../Vue/Pages/updateUser.php");
    }
}

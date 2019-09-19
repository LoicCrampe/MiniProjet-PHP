<?php

session_start();

require "Database.php";
require "../../Controllers/Queries/detailUserQueries.php";

if (isset($_POST["annuler"])) {
    header('location: ../../Vue/index.php');
}

if (isset($_POST["valider"])) {
    $identifiant        = $_POST["identifiant"];
    $passwdActuel       = sha1($_POST["passwordActuel"]);
    $passwordNew        = sha1($_POST["passwordNew"]);
    $passwordNewConfirm = sha1($_POST["passwordNewConfirm"]);

    $isExist = Database::db_query(detailUserQueries::ifCompteExist($identifiant, $passwdActuel), 1);

    if ($isExist) {
        $idUser = $isExist->id;
        if ($passwordNew == $passwordNewConfirm) {
            Database::db_query(detailUserQueries::changePasseword($idUser, $passwordNew), "send");
            unset($_SESSION["messageChangePass"]);
            $_SESSION["messageChangePass"] = "<p class='green'>Le mot de passe a été changé.</p>";
            header("location: ../../Vue/Pages/changePassword.php");
        } else {
            unset($_SESSION["messageChangePass"]);
            $_SESSION["messageChangePass"] = "<p class='red'>La confirmation du mot de passe est incorrect.</p>";
            header("location: ../../Vue/Pages/changePassword.php");
        }
    } else {
        unset($_SESSION["messageChangePass"]);
        $_SESSION["messageChangePass"] = "<p class='red'>Identifiant ou mot de passe incorrect.</p>";
        header("location: ../../Vue/Pages/changePassword.php");
    }
}

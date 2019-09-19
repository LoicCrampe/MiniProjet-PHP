<?php

session_start();

require "Database.php";
require "../../Controllers/Queries/detailUserQueries.php";

if (isset($_POST["valider"])) {
    if ($_POST["choix"] == "section") {
        unset($_SESSION["filtreEtudiant"]);
        unset($_SESSION["filtreSection"]);
        $idSection = $_POST["section"];
        $_SESSION["filtreSection"] = Database::db_query(detailUserQueries::displaySectionNotes($idSection));
        header('location: ../../Vue/index.php');
    } elseif ($_POST["choix"] == "etudiant") {
        unset($_SESSION["filtreSection"]);
        unset($_SESSION["filtreEtudiant"]);
        $idEtudiant = $_POST["etudiant"];
        $_SESSION["filtreEtudiant"] = Database::db_query(detailUserQueries::displayStudentNotes($idEtudiant));
        header('location: ../../Vue/index.php');
    } else {
        unset($_SESSION["filtreEtudiant"]);
        unset($_SESSION["filtreSection"]);
        header('location: ../../Vue/index.php');
    }
}

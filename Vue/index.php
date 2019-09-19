<?php

$defaultPage        = "Pages/defaultPage.php";
$connectionPage     = "Pages/connectionPage.php";
$accueilEleve       = "Pages/accueilEleve.php";
$accueilProf        = "Pages/accueilProf.php";


if (!isset($_SESSION)) {
    session_start();
    $_SESSION["MainPage"] = $connectionPage;
}

if (isset($_SESSION["connectedEleve"])) {
    $_SESSION["MainPage"] = $accueilEleve;
}

if (isset($_SESSION["connectedProf"])) {
    $_SESSION["MainPage"] = $accueilProf;
}

require $defaultPage;

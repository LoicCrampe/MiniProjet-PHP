<?php

require "Database.php";
require "../Controllers/Queries/detailUserQueries.php";

$notes = Database::db_query(detailUserQueries::displayStudentNotes($_SESSION["idUser"]));

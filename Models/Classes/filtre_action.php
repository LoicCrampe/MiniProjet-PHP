<?php

require "Database.php";
require "../Controllers/Queries/detailUserQueries.php";

$sections = Database::db_query(detailUserQueries::displayAllSection());
$etudiants = Database::db_query(detailUserQueries::displayAllStudent());

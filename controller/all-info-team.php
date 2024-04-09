<?php

require_once "../controller/connection-to-database.php";
require_once "../model/queries.php";
$db = new Database;
$team = getAllEmploees($db);

foreach ($team as $emploee) {
    require "../resources/views/layouts/person-template.php";
} 
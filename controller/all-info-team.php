<?php
$table = "Team";
$team = getFromTable($db, $table);

foreach ($team as $emploee) {
    require ("./resources/views/layouts/person-template.php");
}

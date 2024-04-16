<?php
$table = "Team";
$team = getFromTable($db, $table);

function printEmploees($template)
{
    global $team;
    foreach ($team as $emploee) {
        require($template);
    }
}
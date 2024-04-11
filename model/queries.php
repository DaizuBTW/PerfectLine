<?php

function getAllEmploees(&$db) {
    $result = $db->query("SELECT * FROM Team");
    return $result;
}


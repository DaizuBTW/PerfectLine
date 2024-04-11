<?php

// function getAllEmploees(&$db) {
//     $result = $db->query("SELECT * FROM Team");
//     return $result;
// }

// function getCompanyInfo(&$db) {
//     $result = $db->query("SELECT * FROM InfoCompany");
//     return $result;
// }

function getFromTable(&$db, $table) {
    $result = $db->query("SELECT * FROM $table");
    return $result;
}


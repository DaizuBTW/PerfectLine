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

function insertIntoTeam(&$db, $person) {
    $name = $person->getName();
    $position = $person->getPosition();
    $info = $person->getInfo();
    $linkInstagram = $person->getLinkInstagram();
    $linkFacebook = $person->getLinkFacebook();
    $linkEmail = $person->getLinkEmail();
    $image = $person->getImage();

    $result = $db->execute("INSERT INTO Team (Name, Position, Info, LinkInstagram, LinkFacebook, LinkEmail, Image) 
    VALUES ('$name', '$position', '$info', '$linkInstagram', '$linkFacebook', '$linkEmail', '$image')");
}


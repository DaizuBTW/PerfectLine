<?php

function getFromTable(&$db, $table)
{
    $result = $db->query("SELECT * FROM $table");
    return $result;
}

function insertIntoTeam(&$db, $person)
{
    $name = $person->getName();
    $position = $person->getPosition();
    $info = $person->getInfo();
    $linkInstagram = $person->getLinkInstagram();
    $linkFacebook = $person->getLinkFacebook();
    $linkEmail = $person->getLinkEmail();
    $image = $person->getImage();

    $result = $db->execute("INSERT INTO Team (Name, Position, Info, LinkInstagram, LinkFacebook, LinkEmail, Image) 
    VALUES ('$name', '$position', '$info', '$linkInstagram', '$linkFacebook', '$linkEmail', '$image')");

    return $result;
}

function deleteFromTeam(&$db, $id)
{
    $result = $db->execute("DELETE FROM Team WHERE id = '$id'");

    return $result;
}

function getImageById(&$db, $id)
{
    $result = $db->query("SELECT Image FROM Team WHERE id = '$id'");

    return $result[0]['Image'];
}

function getEmploeeFromTeam(&$db, $id)
{
    $result = $db->query("SELECT * FROM Team WHERE id = '$id'");

    return $result;
}

function updateEmploeeFromTeam(&$db, $person)
{
    $id = $person->getID();
    $name = $person->getName();
    $position = $person->getPosition();
    $info = $person->getInfo();
    $linkInstagram = $person->getLinkInstagram();
    $linkFacebook = $person->getLinkFacebook();
    $linkEmail = $person->getLinkEmail();
    $image = $person->getImage();

    if ($image != NULL) {
        $result = $db->execute("UPDATE Team SET Name = '$name', Position = '$position', Info = '$info', LinkInstagram = '$linkInstagram', LinkFacebook = '$linkFacebook', LinkEmail = '$linkEmail', Image = '$image' WHERE id = '$id'");
    } else {
        $result = $db->execute("UPDATE Team SET Name = '$name', Position = '$position', Info = '$info', LinkInstagram = '$linkInstagram', LinkFacebook = '$linkFacebook', LinkEmail = '$linkEmail' WHERE id = '$id'");
    }
    return $result;
}

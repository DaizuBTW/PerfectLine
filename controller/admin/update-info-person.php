<?php
session_start();

if(!$_SESSION['admin'] && !$_SESSION['pass']) {
    header('Location: /controller/check-auth.php');
    exit;
}

$root = $_SERVER['DOCUMENT_ROOT'];
require "$root/controller/connection-to-database.php";
require "$root/model/class-person.php";
require "$root/model/upload-image.php";
require "$root/model/queries.php";

$imageName = uploadImage();
$db = new Database;
$person = new Person($_POST['name'], $_POST['position'], $_POST['description'], $_POST['instagram'], $_POST['facebook'], $_POST['mail'], $imageName);
$person->setId($_POST['id']);

updateEmploeeFromTeam($db, $person);

header('Location: /resources/views/admin/admin-panel.php');
exit;

<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require "$root/controller/connection-to-database.php";
require "$root/model/class-person.php";
require "$root/model/upload-image.php";
require "$root/model/queries.php";

$imageName = uploadImage();
$db = new Database;
$person = new Person($_POST['name'], $_POST['position'], $_POST['description'], $_POST['instagram'], $_POST['facebook'], $_POST['mail'], $imageName);

insertIntoTeam($db, $person);

header('Location: /resources/views/admin/admin-panel.php');
exit;

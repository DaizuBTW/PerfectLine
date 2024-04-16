<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$imagePath = "$root/resources/images/main/small-team/";
require "$root/controller/connection-to-database.php";
require "$root/model/queries.php";
$db = new Database;

$personId = $_GET['id'];
$image = getImageById($db, $personId);

unlink($imagePath . $image);
deleteFromTeam($db, $personId);

header('Location: /resources/views/admin/admin-panel.php');
exit;



<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require "$root/controller/connection-to-database.php";
require "$root/model/queries.php";
$db = new Database;

$personId = $_GET['id'];

deleteFromTeam($db, $personId);

header('Location: /resources/views/admin/admin-panel.php');
exit;



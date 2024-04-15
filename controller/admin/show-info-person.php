<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require "$root/controller/connection-to-database.php";
require "$root/model/queries.php";
$db = new Database;

$personId = $_GET['id'];
$emploee = getEmploeeFromTeam($db, $personId)[0];

require "$root/resources/views/admin/forms/edit-person-form.php";


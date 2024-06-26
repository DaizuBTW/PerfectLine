<?php
session_start();

if(!$_SESSION['admin'] && !$_SESSION['pass']) {
    header('Location: /controller/check-auth.php');
    exit;
}

$root = $_SERVER['DOCUMENT_ROOT'];
require "$root/controller/connection-to-database.php";
require "$root/model/queries.php";
$db = new Database;

$personId = $_GET['id'];
$emploee = getEmploeeFromTeam($db, $personId)[0];

require "$root/resources/views/admin/forms/edit-person-form.php";


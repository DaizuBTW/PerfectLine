<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require "$root/controller/connection-to-database.php";
require "$root/model/queries.php";
$db = new Database;
$table = "Admin";

session_start();
require_once "$root/model/auth.php";

if ($_POST['submit']) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $admins = getFromTable($db, $table);

    checkAuth($username, $password);
}

require_once "$root/resources/views/admin/forms/auth-form.php";

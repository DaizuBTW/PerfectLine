<?php

function checkAuth($username, $password)
{
    global $admins;
    foreach ($admins as $admin) {
        if ($admin['Name'] === $username and $admin['Password'] === $password) {
            $_POST['wrongInput'] = null;
            $_SESSION['admin'] = $username;
            $_SESSION['pass'] = $password;
            header('Location: /resources/views/admin/admin-panel.php');
            exit;
        }
    }

    $_POST['wrongInput'] = true;
}

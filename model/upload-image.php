<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$path = "$root/resources/images/main/small-team/";

function uploadImage()
{
    if ($_FILES['photo']['size'] != 0) {
        $tmp_name = $_FILES['photo']['tmp_name'];
        $image = $_FILES['photo']['name'];
        global $path;

        if ($_POST['oldImage']) {
            unlink($path . $_POST['oldImage']);
        }

        $name = uniqid() . "." . pathinfo($image)['extension'];
        move_uploaded_file($tmp_name, $path . $name);

        return $name;
    } else {
        return NULL;
    }
}

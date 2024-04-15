<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$path = "$root/resources/images/main/small-team/";

function uploadImage()
{
    if ($_FILES['photo']['size'] != 0) {
        $tmp_name = $_FILES['photo']['tmp_name'];
        $image = $_FILES['photo']['name'];
        global $path;

        $name = uniqid(pathinfo($image)['filename']) . "." . pathinfo($image)['extension'];
        move_uploaded_file($tmp_name, $path . $name);

        return $name;
    } else {
        return NULL;
    }
}

function updateImage($oldImage)
{
    if ($_FILES['photo']['size'] != 0) {
        global $path;

        unlink($path . $oldImage);

        return uploadImage();
    } else {
        return $oldImage;
    }
}

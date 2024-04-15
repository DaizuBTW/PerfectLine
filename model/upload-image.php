<?php

function uploadImage()
{
    $root = $_SERVER['DOCUMENT_ROOT'];
    if ($_FILES['photo']) {
        $tmp_name = $_FILES['photo']['tmp_name'];
        $image = $_FILES['photo']['name'];
        $path = "$root/resources/images/main/small-team/";

        $name = uniqid(pathinfo($image)['filename']) . "." . pathinfo($image)['extension'];
        move_uploaded_file($tmp_name, $path . $name);

        return $name;
    } else {
        return NULL;
    }
}

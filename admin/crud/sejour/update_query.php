<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getSejour($id);

$title = $_POST['title'];
$description = $_POST['description'];

$tag_ids = isset($_POST['tag_ids']) ? $_POST['tag_ids'] : [];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../sejour/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejour($id, $title, $filename, $description,  $tag_ids);

header('Location: index.php');

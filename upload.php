<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    echo 'Sorry, file already exists.';
    $uploadOk = 0;
}
// Check file size
if ($_FILES['fileToUpload']['size'] > 500000) {
    echo 'Sorry, your file is too large.';
    $uploadOk

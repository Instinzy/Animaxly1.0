<?php
// Start session
session_start();

// Define upload directory
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the file is a actual video
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["video"]["tmp_name"]);
    if($check !== false) {
        echo "File is a video - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not a video.";
        $uploadOk = 0;
    }
}

// Allow certain file formats
if($fileType != "mp4" && $fileType != "m4v" && $fileType != "mov") {
    echo "Sorry, only MP4, M4V & MOV files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetFile)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["video"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
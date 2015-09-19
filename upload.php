<?php
$target_dir = "photo/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$path = "pata\Folder\Account\photo" . $_FILES["fileToUpload"]["name"];
$move = move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$path);
?>
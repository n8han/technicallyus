<?php

$uploaddir = $_SERVER["PATH_TRANSLATED"].'files/';
$uploadfile = $uploaddir . 'upload.' . basename($_FILES['userfile']['name']) . '.bin';

while(file_exists($uploadfile))
  $uploadfile = $uploadfile . '+';

if (@move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    header('HTTP/1.1 201 Created');
} else {
    header('HTTP/1.1 500 Internal Server Error');
}

?>
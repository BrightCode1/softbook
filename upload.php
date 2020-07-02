<?php

    $msg = '';

    if(isset($_POST['upload'])) {
        $target_location = "./files/handbook/".basename($_FILES['file']['name']);
        $file = $_FILES['file']['name'];

        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_location)) {
            $msg = "File Uploaded Successfully";
        }
        else{
            $msg = "There Was A Problem Uploading File";
        }
     }
?>

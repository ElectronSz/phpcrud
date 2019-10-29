<?php
require_once('config.php');

//target directory where files will be stored
$target_dir = "uploads/";

//target file path [dir+filename]
$target_file = $target_dir . basename($_FILES["proof"]["name"]);

//file name
$file_name  = $_FILES["proof"]["tmp_name"];

//checking file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (move_uploaded_file($file_name, $target_file)) {

        //insert file to database
      $sql = "INSERT INTO `uploads` (`file_name`,`date`) VALUES('".$target_file."', NOW())";
    
            //execute query
            if(mysqli_query($link, $sql)){
                echo "Upoaded to database";
            }
            else {
                echo "Error uploading ".mysqli_error($link);
            }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    

    
    
}


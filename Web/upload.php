<?php

include 'lib/session.php';



if(isset($_FILES['uFile'])){
    
    $file_name = $_FILES['uFile']['name'];
    $file_tmp  = $_FILES['uFile']['tmp_name'];

    move_uploaded_file($file_tmp,"uploads/".$file_name);

    header('Location: /files.php');
    die();

} else{

    header('Location: /files.php');

}


?>
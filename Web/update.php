<?php

include 'lib/session.php';



$username = isset($_POST['username']) ? $_POST['username'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$surname = isset($_POST['surname']) ? $_POST['surname'] : null;




if ( (!$username) ){
    header('Location: /profile.php');
    die();
}




    $_SESSION['UserName'] = $username;
    $_SESSION['Name'] = $name;
    $_SESSION['SurName'] = $surname;

    header('Location: /profile.php');


?>
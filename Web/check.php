<?php

include 'lib/lib.php';

session_start();

$SESSION = isset($_SESSION) ? $_SESSION : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;



if ( (!$SESSION) || (!$username) || (!$password)){
    header('Location: /login.php');
    die();
}

if ($_SESSION['LOGIN'] === 0){
   
    session_unset();
    session_reset();
    session_regenerate_id();

    $_SESSION['SessionID'] = session_id();
    $_SESSION['UserName'] = $username;
    $_SESSION['LOGIN'] = 1;

    header('Location: /index.php');

    die();

} else {
    header('Location: /index.php');
}



?>
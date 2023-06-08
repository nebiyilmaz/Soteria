<?php

include 'lib/lib.php';

session_start();

$SESSION = isset($_SESSION) ? $_SESSION : null;

if (! $SESSION){
    header('Location: /login.php');
    die();
}

if ($_SESSION['LOGIN'] === 0){
    header('Location: /login.php');
    die();
}

$time = $_SERVER['REQUEST_TIME'];
$timeout_duration = 600;


if (isset($_SESSION['LAST_ACTIVITY'])    &&   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {

    session_regenerate_id();
    session_reset();
    session_unset();
    session_destroy();
    $_SESSION['LOGIN'] = 0;
    header('Location: /login.php');
    die();
}

$_SESSION['LAST_ACTIVITY'] = $time;



?>
<?php
include 'lib/lib.php';

session_start();
session_regenerate_id();
session_reset();
session_unset();
session_destroy();
$_SESSION['LOGIN'] = 0;

header('Location: /login.php');
die();

?>
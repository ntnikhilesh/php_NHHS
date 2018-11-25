<?php

$server = [
    'Current Page' => $_SERVER['PHP_SELF'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];

$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR']
];

?>
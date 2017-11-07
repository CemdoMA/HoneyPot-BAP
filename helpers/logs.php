<?php

function server_log($user, $event, $data)
{
    $date       = date("Y-m-d");
    $logname    = "logs/" . $date . ".log";
    $ip         = $_SERVER['REMOTE_ADDR'];
    $time       = date("H:i:s");

    $log = $user . " -|- " . $ip . " -|- " . $time . " -|- " . $event . " -|- " . $data . PHP_EOL;

    file_put_contents($logname, $log, FILE_APPEND);
}
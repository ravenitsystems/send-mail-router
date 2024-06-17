<?php

require(__DIR__ . '/vendor/autoload.php');

$log_directory = '/var/log/mail-router';
if (!file_exists($log_directory)) {
    @mkdir($log_directory);
}
if (!file_exists($log_directory) || !is_dir($log_directory)) {
    throw new Exception("Could not create log directory $log_directory");
}



$stdin = file_get_contents('php://stdin');

file_put_contents($log_directory . '/' . time() . '.msg', $stdin, FILE_APPEND);


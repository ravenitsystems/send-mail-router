<?php

$stdin = file_get_contents('php://stdin');

file_put_contents('outlog.txt', $stdin, FILE_APPEND);


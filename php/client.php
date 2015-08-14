<?php
$host = "127.0.0.1";
$port = 5353;
// No Timeout
set_time_limit(0);
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");

socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");

$result = socket_read($socket, 1024) or die("Could not read server response\n");

socket_close($socket);
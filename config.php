<?php

$host = '127.0.0.1';
$dbname = 'cs4753';
$user = 'root';
$password = '';


$db = new mysqli('localhost', $user, $password, $dbname);

if ($db->connect_error):
    die ("Could not connect to db " . $db->connect_error);
endif;
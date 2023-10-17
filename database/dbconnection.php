<?php

declare(strict_types=1);

$host = 'localhost';
$username = 'h5g8w9v3_PLPUser';
$password = '8nYKLisOmIM';
$database = 'h5g8w9v3_PLPDB';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
    
}

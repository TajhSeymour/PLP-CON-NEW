<?php

declare(strict_types=1);

$host = 'localhost';
$username = 'db_PLPUser';
$password = '8nYKLisOmIM';
$database = 'plp_convention';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
    
}

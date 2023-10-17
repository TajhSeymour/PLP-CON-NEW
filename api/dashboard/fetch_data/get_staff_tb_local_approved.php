<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!$results = $connection->query('CALL GET_ALL_LOCAL_STAFF_APPROVED();')) {
        http_response_code(500);
        die(json_encode([
            'success' => false,
            'message' => 'An error occurred while trying to retrieve approved local staff.'
        ]));
    }

    $local_staff_approved = $results->fetch_all(MYSQLI_ASSOC);

    http_response_code(200);
    die(json_encode([
        'draw' => 1,
        'recordsTotal' => count($local_staff_approved),
        'recordsFiltered' => count($local_staff_approved),
        'data' => $local_staff_approved
    ]));
}

http_response_code(405);
die(json_encode([
    'success' => false,
    'message' => 'Method Not Allowed. Allowed Methods: GET',
]));
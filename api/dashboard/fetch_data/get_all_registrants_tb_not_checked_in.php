<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!$results = $connection->query('CALL GET_ALL_DELEGATE_REGISTRANTS_NOT_CHECKED_IN();')) {
        http_response_code(500);
        die(json_encode([
            'success' => false,
            'message' => 'An error occurred while trying to retrieve local staff pending approval.'
        ]));
    }

    if ($results->num_rows === 0) {
        http_response_code(200);
        die(json_encode([
            'draw' => 1,
            'recordsTotal' => 0,
            'recordsFiltered' => 0,
            'data' => []
        ]));
    }

    $local_staff_pending_approval = $results->fetch_all(MYSQLI_ASSOC);

    http_response_code(200);
    die(json_encode([
        'draw' => 1,
        'recordsTotal' => count($local_staff_pending_approval),
        'recordsFiltered' => count($local_staff_pending_approval),
        'data' => $local_staff_pending_approval
    ]));
}

http_response_code(405);
die(json_encode([
    'success' => false,
    'message' => 'Method Not Allowed. Allowed Methods: GET',
]));
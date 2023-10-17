<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!$result = $connection->query("CALL GET_ALL_TOURIST_TRAVEL_INFO()")) {
        http_response_code(500);
        die(json_encode([
            'success' => false,
            'message' => 'An error occurred while trying to query the database.'
        ]));
    }

    if ($result->num_rows === 0) {
        http_response_code(404);
        die(json_encode([
            'success' => false,
            'message' => 'No travel information found.'
        ]));
    }

    $tourism_registrant_info = $result->fetch_all(MYSQLI_ASSOC);
    $connection->close();

    http_response_code(200);
    die(json_encode([
        'draw' => 1,
        'recordsTotal' => count($tourism_registrant_info),
        'recordsFiltered' => count($tourism_registrant_info),
        'data' => $tourism_registrant_info
    ]));

} else {
    http_response_code(405);
    die(json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Allowed Methods: GET',
    ]));
}
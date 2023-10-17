<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!$result = $connection->query('CALL GET_ALL_DELEGATE_LETTERS();')) {
        http_response_code(500);
        die(json_encode(
            [
                'success' => false,
                'message' => 'An error occurred while trying to query the database.'
            ]
        ));
    }

    if ($result->num_rows === 0) {
        http_response_code(404);
        die(json_encode(
            [
                'success' => false,
                'message' => 'No tourist special needs found.'
            ]
        ));
    }

    $delegate_invite_letter = $result->fetch_all(MYSQLI_ASSOC);
    $connection->close();

    http_response_code(200);
    die(json_encode(
        [
            'draw' => 1,
            'recordsTotal' => count($delegate_invite_letter),
            'recordsFiltered' => count($delegate_invite_letter),
            'data' => $delegate_invite_letter
        ]
    ));

} else {
    http_response_code(405);
    die(json_encode([
        'success' => false,
        'message' => 'Method not allowed.'
    ]));
}
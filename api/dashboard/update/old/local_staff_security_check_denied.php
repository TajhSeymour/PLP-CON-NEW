<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_data = json_decode(file_get_contents('php://input'), true);
    if (empty($request_data)) {
        http_response_code(400);
        die(json_encode([
            'success' => false,
            'message' => 'No data provided'
        ]));
    }

    if (!$user_id = filter_var($request_data['user_id'], FILTER_SANITIZE_NUMBER_INT)) {
        http_response_code(400);
        die(json_encode([
            'success' => false,
            'message' => 'id must be an integer'
        ]));
    }

    $stmt = $connection->prepare('CALL UPDATE_LOCAL_STAFF_QUEUE_SECURITY_DENIED(?);');
    $stmt->bind_param('i', $user_id);
    if (!$stmt->execute()) {
        $stmt->close();
        $connection->close();
        http_response_code(500);
        die(json_encode([
            'success' => false,
            'message' => 'Failed to update staff security denial status.'
        ]));
    }

    $stmt->close();
    $connection->close();
    http_response_code(200);
    die(json_encode([
        'success' => true,
        'message' => 'Staff security denial status updated.'
    ]));

}

http_response_code(405);
die(json_encode([
    'success' => false,
    'message' => 'Method Not Allowed. Allowed Methods: POST'
]));
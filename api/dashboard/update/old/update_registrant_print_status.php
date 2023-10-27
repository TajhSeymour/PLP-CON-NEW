<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode([
        'error' => true,
        'message' => 'Method not allowed'
    ]));
}

if (!array_key_exists('id', $_POST) || empty($_POST['id'])) {
    http_response_code(400);
    die(json_encode([
        'error' => true,
        'message' => 'id is required'
    ]));
}

if (!$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT)) {
    http_response_code(400);
    die(json_encode([
        'error' => true,
        'message' => 'id type needs to be an integer'
    ]));
}

$stmt = $connection->prepare('UPDATE system_queues SET printer_queue = 0, printed = 1 WHERE id = ?');
$stmt->bind_param('i', $id);
if (!$stmt->execute()) {
    http_response_code(500);
    die(json_encode([
        'error' => true,
        'message' => 'An error ocurred while processing'
    ]));
}

http_response_code(200);
die(json_encode([
    'error' => false,
    'message' =>'printer status updated'
]));
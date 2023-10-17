<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/database/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    die(json_encode([
        'error' => true,
        'message' => 'Method not allowed'
    ]));
}

$result = $connection->query('SELECT department, badge_upload FROM ministry_access_code;');
if ($result->num_rows === 0) {
    http_response_code(404);
    die(json_encode([
        'error' => true,
        'message' => 'No data found'
    ]));
}

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[$row['department']] = $row['badge_upload'];
}

echo json_encode($data);

$connection->close();

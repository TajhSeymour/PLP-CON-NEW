<?php

declare(strict_types=1);

require dirname(__DIR__, 3) . '/helpers/upload_helper.php';
require dirname(__DIR__, 3) . '/database/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode([
        'error' => true,
        'message' => 'Method Not Allowed'
    ]));
}

if (!array_key_exists('id', $_POST) || empty($_POST['id'])) {
    http_response_code(400);
    die(json_encode([
        'error' => true,
        'message' => 'id is required'
    ]));
}

if (!$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT)) {
    http_response_code(400);
    die(json_encode([
        'error' => true,
        'message' => 'id must be an integer'
    ]));
}

if (!array_key_exists('image', $_FILES) || $_FILES['image']['tmp_name'] === '') {
    http_response_code(400);
    die(json_encode([
        'error' => true,
        'message' => 'image is required'
    ]));
}

$badge_photo_result = upload_photo(dirname(__DIR__, 3) . '/uploads/delegate-photos', strval($id), $_FILES['image']);
if ($badge_photo_result['error']) {
    http_response_code(500);
    die(json_encode([
        'error' => true,
        'message' => 'Failed to upload badge photo. ' . $badge_photo_result['msg']
    ]));
}
$badge_photo_path = str_replace(dirname(__DIR__, 3) . '/uploads/delegate-photos', '', $badge_photo_result['data']['file_path']);

$stmt = $connection->prepare('UPDATE registrant_personal_details SET badge_photo = ? WHERE id = ?');
$stmt->bind_param('si', $badge_photo_path, $id);
$stmt->execute();

http_response_code(200);
die(json_encode([
    'error' => false,
    'message' => 'Badge photo updated'
]));
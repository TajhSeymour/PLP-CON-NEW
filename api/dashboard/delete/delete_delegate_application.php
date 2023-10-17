<?php
declare(strict_types=1);

require dirname(dirname(__FILE__, 3)) . '/vendor/autoload.php';

Dotenv\Dotenv::createImmutable(dirname(__DIR__, 3))->load();

$delete = json_decode(file_get_contents('php://input'), true);

if (empty($delete || is_null($delete) || !isset($delete['id']))) {
    http_response_code(400);
    die([
        'error' => true,
        'message' => 'Bad Request'
    ]);
}

$id = intval($delete['id']);

// Retrieving badge photo and gov_id file path
$db_host = $_ENV['DBHOST'];
$db_user = $_ENV['DBADMINUSER'];
$db_pass = $_ENV['DBADMINPASS'];
$db_name = $_ENV['DBNAME'];

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$stmt = $mysqli->prepare('SELECT badge_photo, gov_id FROM registrants WHERE id = ?;');
$stmt->bind_param('i', $id);
if (!$stmt->execute()) {
    http_response_code(500);
    die([
        'error' => true,
        'message' => 'Server Error while selecting registrants'
    ]);
}

$stmt->bind_result($badge_photo, $gov_id);
$stmt->fetch();
$stmt->close();


// Call the DELETE_USER() stored procedure
$stmt = $mysqli->prepare('CALL DELETE_REGISTRANT(?);');
$stmt->bind_param('i', $id);
if (!$stmt->execute()) {
    http_response_code(500);
    die(json_encode([
        'error' => true,
        'message' => 'Server Error while deleting registrant application'
    ]));
}

if ($stmt->affected_rows === 0) {
    http_response_code(404);
    die(json_encode([
        'error' => true, 
        'message' => 'ID Not Found'
    ]));
}

// Removing badge photo and gov_id
unlink('/uploads/photos/' . $badge_photo);
unlink('/uploads/govid/' . $gov_id);

http_response_code(200);
echo json_encode(['message' => 'Registrant application deleted successfully']);
<?php 

declare(strict_types=1);

require dirname(__DIR__, 3) . '/helpers/upload_helper.php';
require dirname(__DIR__, 3). '/database/dbconnection.php';

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    http_response_code(405);
    header('Location: /dashboard/delegates.php?error=' . urlencode('Method Not Allowed'));
    die();
}

if (!array_key_exists('delegate_id', $_POST) && empty($_POST['delegate_id'])) {
    http_response_code(400);
    header('Location: /dashboard/delegates.php?error='. urlencode('Id is required'));
    die();
}

if (!$id = filter_var($_POST['delegate_id'], FILTER_SANITIZE_NUMBER_INT)) {
    http_response_code(400);
    header('Location: /dashboard/delegates.php?error=' . urlencode('Id must be a number'));
    die();
}

$badge_photo_path = null;
$gov_id_path = null;

if (array_key_exists('nBadgePhotoFile', $_FILES) && $_FILES['nBadgePhotoFile']['tmp_name'] !== '') {
    $badge_photo_result = upload_photo(dirname(__DIR__, 3) . '/uploads/photos', strval($id), $_FILES['nBadgePhotoFile']);
    if ($badge_photo_result['error']) {
        http_response_code(500);
        header('Location: /dashboard/delegates.php?error='. urlencode('Failed to upload badge photo. '. $badge_photo_result['msg']));
        die();
    }
    $badge_photo_path = str_replace(dirname(__DIR__, 3) . '/uploads/photos', '', $badge_photo_result['data']['file_path']);
}

if (array_key_exists('nGovIdPhotoFile', $_FILES) && $_FILES['nGovIdPhotoFile']['tmp_name'] !== '') {
    $gov_id_result = upload_photo(dirname(__DIR__, 3) . '/uploads/govid', strval($id), $_FILES['nGovIdPhotoFile']);
    if ($gov_id_result['error']) {
        http_response_code(500);
        header('Location: /dashboard/delegates.php?error='. urlencode('Failed to upload Government ID photo. '. $gov_id_result['msg']));
        die();
    }
    $gov_id_path = str_replace(dirname(__DIR__, 3) . '/uploads/govid', '', $gov_id_result['data']['file_path']);
}

if (!is_null($badge_photo_path) && !is_null($gov_id_path)) {
    $stmt = $connection->prepare('UPDATE registrants 
        SET badge_photo = ?, 
        gov_id = ? 
    WHERE id = ?');
    $stmt->bind_param('ssi', $badge_photo_path, $gov_id_path, $id);
    $stmt->execute();

    http_response_code(200);
    header('Location: /dashboard/printer-queue.php?message=' . urlencode('Badge and Gov ID photos updated successfully'));
    die();

} elseif (!is_null($badge_photo_path) && is_null($gov_id_path)) {
    $stmt = $connection->prepare('UPDATE registrants 
        SET badge_photo = ?
    WHERE id = ?');
    $stmt->bind_param('si', $badge_photo_path, $id);
    $stmt->execute();

    http_response_code(200);
    header('Location: /dashboard/printer-queue.php?message=' . urlencode('Badge photo updated'));
    die();
} elseif (is_null($badge_photo_path) && !is_null($gov_id_path)) {
    $stmt = $connection->prepare('UPDATE registrants 
        SET gov_id = ? 
    WHERE id = ?');
    $stmt->bind_param('si', $gov_id_path, $id);
    $stmt->execute();

    http_response_code(200);
    header('Location: /dashboard/printer-queue.php?message=' . urlencode('Gov ID photo updated successfully'));
    die();
}


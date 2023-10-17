<?php

declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=utf-8');

/* This code block is responsible for handling the login functionality. */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* This code block is responsible for handling the login functionality. It checks if the email and
    password fields are present in the `` array. If they are missing, it returns a JSON
    response with an error message and a status code of 400 (Bad Request). */
    if (!array_key_exists('input_email_address', $_POST) || !array_key_exists('input_password', $_POST)) {
        http_response_code(400);
        header('Location: /index.php?error=Missing email or password');
        die();
    }

    if (!isset($_POST['input_email_address']) || empty($_POST['input_email_address'])) {
        http_response_code(400);
        header('Location: /index.php?error=Email is required');
        die();
    }

    if (!isset($_POST['input_password']) || empty($_POST['input_password'])) {
        http_response_code(400);
        header('Location: /index.php?error=password is required&email=' . $_POST['input_email_address']);
        die();
    }


    $email = $_POST['input_email_address'];
    $password = $_POST['input_password'];

    $stmt = $connection->prepare('CALL GET_SYSTEM_USER(?);');
    $stmt->bind_param('s', $email);
    if (!$stmt->execute()) {
        $stmt->close();
        $connection->close();
        http_response_code(500);
        // die(json_encode(['message' => 'An error occurred']));
        header('Location: /index.php?error=An error occurred');
        die();
    }

    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        $stmt->close();
        $connection->close();
        http_response_code(401);
        // die(json_encode(['message' => 'No match found']));
        header('Location: /index.php?error=No match found');
        die();
    }

    $user_info = $result->fetch_assoc();
    $stmt->close();
    $connection->close();

    if (!password_verify($password, $user_info['password_hash'])) {
        http_response_code(401);
        header('Location: /index.php?error=Invalid password&email=' . $email);
        die();
    }

    session_start();
    session_regenerate_id(true);
    $_SESSION['id'] = $user_info['id'];
    $_SESSION['name'] = "{$user_info['first_name']} {$user_info['last_name']}";
    $_SESSION['email'] = $user_info['email'];
    $_SESSION['super_admin'] = (bool) $user_info['super_admin'];
    $_SESSION['supervisor'] = (bool) $user_info['supervisor'];
    $_SESSION['security_officer'] = (bool) $user_info['sib_user'];
    $_SESSION['print_officer'] = (bool) $user_info['print_officer'];
    $_SESSION['officer'] = (bool) $user_info['officer'];
    $_SESSION['oas_user'] = (bool) $user_info['oas_user'];
    $_SESSION['tourism_user'] = (bool) $user_info['tourism_user'];
    $_SESSION['hotel_user'] = (bool) $user_info['hotel_user'];
    $_SESSION['loggedin'] = true;
    $_SESSION['password_reset'] = (bool) $user_info['password_reset'];

    http_response_code(200);
    header('Location: /dashboard/index.php');
} else {
    header('Location: /index.php');
}
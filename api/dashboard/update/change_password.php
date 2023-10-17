<?php

declare(strict_types=1);

require dirname(__DIR__, 2) . '/database/dbconnection.php';

header('Content-Type: application/json; charset=UTF-8');

/* This code block is handling a POST request to update a user's password. */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* This code block is checking if the "old_password" key exists in the  array and if it is
    not empty. If either of these conditions is not met, it means that the old password was not
    provided in the POST request. In that case, it will return a JSON response with an error status
    and a message indicating that the old password is required. The die() function is used to stop
    the execution of the script and output the JSON response. */
    if (!array_key_exists("old_password", $_POST) || empty($_POST["old_password"])) {
        die(json_encode([
            "status" => "error", 
            "message" => "Old password is required"
        ]));
    }

    /* This code block is checking if the "new_password" key exists in the  array and if it is
    empty. If either of these conditions is not met, it means that the new password was not provided
    in the POST request. In that case, it will return a JSON response with an error status and a
    message indicating that the new password is required. The die() function is used to stop the
    execution of the script and output the JSON response. */
    if (!array_key_exists("new_password", $_POST) || empty($_POST["new_password"])) {
        die(json_encode([
            "status" => "error", 
            "message" => "New password is required"
        ]));
    }

    /* This code block is checking if the "confirm_password" key exists in the  array and if it
    is empty. If either of these conditions is not met, it means that the confirm password was not
    provided in the POST request. In that case, it will return a JSON response with an error status
    and a message indicating that the confirm password is required. The die() function is used to
    stop the execution of the script and output the JSON response. */
    if (!array_key_exists("confirm_password", $_POST) || empty($_POST["confirm_password"])) {
        die(json_encode([
            "status" => "error", 
            "message" => "Confirm password is required"]
        ));
    }

    /* The code block `if (["new_password"] !== ["confirm_password"])` is checking if the
    value of the "new_password" field in the POST request is not equal to the value of the
    "confirm_password" field. */
    if ($_POST["new_password"] !== $_POST["confirm_password"]) {
        die(json_encode([
            "status" => "error", 
            "message" => "Passwords do not match"
        ]));
    }

    /* The code block you mentioned is retrieving the necessary information from the session and the
    POST request to update a user's password. */
    $id = $_SESSION["id"];
    $email = $_SESSION["email"];
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];

    if (!$stmt = $connection->prepare('CALL GET_SYSTEM_USER(?);')) {
        die(json_encode([
            "status" => "error", 
            "message" => "An error occurred while connecting to the database"
        ]));
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user_info = $result->fetch_assoc();
    $stmt->close();

    if (count($user_info) === 0) {
        die(json_encode([
            "status" => "error", 
            "message" => "User not found"
        ]));
    }

    if (!password_verify($old_password, $user_info["password_hash"])) {
        die(json_encode([
            "status" => "error", 
            "message" => "Old password is incorrect"
        ]));
    }

    if ($stmt = $connection->prepare('CALL UPDATE_USR_CHANGE_PASSWORD(?, ?, ?);')) {
        die(json_encode([
            "status" => "error", 
            "message" => "An error occurred while updating password"
        ]));
    }

    $stmt->bind_param("iss", $id, $email, $new_password);
    if ($stmt->execute()) {
        die(json_encode([
            "status" => "error", 
            "message" => "Password update failed"
        ]));
    }

    $stmt->close();
    $connection->close();

    http_response_code(200);
    header('Location: index.php');
} else {
    /* If the request method is not POST, the user will be redirected to the index page. */
    header('Location: index.php');
}
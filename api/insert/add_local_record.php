<?php

require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 2) . '/helpers/upload_helper.php');

function generate_random_id()
{
    $timestampComponent = substr(time(), -5);
    $maxRandom = 99999;
    $maxTotalLength = 7;
    $maxRandom = min($maxRandom, pow(10, $maxTotalLength - strlen($timestampComponent)) - 1);
    $randomComponent = str_pad(mt_rand(0, $maxRandom), $maxTotalLength - strlen($timestampComponent), '0', STR_PAD_LEFT);

    return $timestampComponent . $randomComponent;
}

function validate_input($data)
{
    return trim(htmlspecialchars(stripslashes($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $random_id = generate_random_id();
    $first_name = validate_input($_POST["input_local_first_name"]);
    $middle_name = validate_input($_POST["input_local_middle_name"]);
    $last_name = validate_input($_POST["input_local_last_name"]);
    $gender = validate_input($_POST["input_local_gender"]);
    $dob = validate_input($_POST["input_local_dob"]);
 $nib = validate_input($_POST["input_local_nib"]);
     $department = validate_input($_POST["input_local_department"]);
    $assignment = validate_input($_POST["input_local_assignment"]);
    $job_title = validate_input($_POST["input_local_job_title"]);



    // Upload badge photo using the helper function
    $local_badge_photo_result = upload_photo(dirname(__DIR__, 2) . '/uploads/local-photos', $random_id, $_FILES["input_local_badge_photo"]);
    if ($local_badge_photo_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload badge photo. ' . $local_badge_photo_result['msg']]);
        exit();
    }
    $local_badge_photo_path = str_replace(dirname(__DIR__, 2) . '/uploads/local-photos', '', $local_badge_photo_result['data']['file_path']);

    // Upload letters using the helper function
    $local_govid_photo_result = upload_photo(dirname(__DIR__, 2) . '/uploads/local-govid', $random_id, $_FILES["input_local_govid_photo"]);
    if ($local_govid_photo_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload gov id. ' . $local_govid_photo_result['msg']]);
        exit();
    }
    $input_local_govid_path = str_replace(dirname(__DIR__, 2) . '/uploads/local-govid', '', $local_govid_photo_result['data']['file_path']);

    //10 CALLS PER LINE
    $stmt = $connection->prepare("CALL INSERT_LOCAL_REGISTRANT_PROFILE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "sssssssssss",
        $random_id,
        $first_name,
        $middle_name,
        $last_name,
        $gender,
        $dob,
        $nib,
        $assignment,
        $job_title,
        $local_badge_photo_path,
        $input_local_govid_path,

    );

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Record added successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add record to the database: ' . mysqli_error($connection)]);
    }

    $stmt->close();
    $connection->close();

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

?>
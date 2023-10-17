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
//16 Entires

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $random_id = generate_random_id();
    $first_name = validate_input($_POST["input_media_first_name"]);
    $middle_name = validate_input($_POST["input_media_middle_name"]);
    $last_name = validate_input($_POST["input_media_last_name"]);
    $emergency_name = validate_input($_POST["input_media_emergency_name"]);
    $emergency_phone = validate_input($_POST["input_media_emergency_phone"]);
    $gender = validate_input($_POST["input_media_gender"]);
    $dob = validate_input($_POST["input_media_dob"]);
    $country = validate_input($_POST["input_media_country"]);
    $nationality = validate_input($_POST["input_media_nationality"]);
    $email = validate_input($_POST["input_media_email"]);
    $mobile = validate_input($_POST["input_media_mobile_phone"]);
    $organization_name = validate_input($_POST["input_media_organization"]);
    $job_title = validate_input($_POST["input_media_position"]);
    $equipment_list = validate_input($_POST["input_media_equipment_list"]);


    // Upload badge photo using the helper function
    $media_badge_photo_result = upload_photo(dirname(__DIR__, 2) . '/uploads/press-badgeid', $random_id, $_FILES["input_media_press_id_photo"]);
    if ($media_badge_photo_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload badge photo. ' . $media_badge_photo_result['msg']]);
        exit();
    }
    $media_badgeid_path = str_replace(dirname(__DIR__, 2) . '/uploads/press-badgeid', '', $media_badge_photo_result['data']['file_path']);


    // Upload badge photo using the helper function
    $media_badge_photo_result = upload_photo(dirname(__DIR__, 2) . '/uploads/press-photoid', $random_id, $_FILES["input_media_badge_photo"]);
    if ($media_badge_photo_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload badge photo. ' . $media_badge_photo_result['msg']]);
        exit();
    }
    $media_badge_photo_path = str_replace(dirname(__DIR__, 2) . '/uploads/press-photoid', '', $media_badge_photo_result['data']['file_path']);


    // Upload govid using the helper function
    $media_govid_photo_result = upload_photo(dirname(__DIR__, 2) . '/uploads/press-govid', $random_id, $_FILES["input_media_gov_id_photo"]);
    if ($media_govid_photo_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload gov id. ' . $media_govid_photo_result['msg']]);
        exit();
    }
    $media_govid_path = str_replace(dirname(__DIR__, 2) . '/uploads/press-govid', '', $media_govid_photo_result['data']['file_path']);

    //10 CALLS PER LINE
    $stmt = $connection->prepare("CALL INSERT_PRESS_STAFF(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param(
        "ssssssssssssssssss",
        $random_id,
        $first_name,
        $middle_name,
        $last_name,
        $emergency_name,
        $emergency_phone,
        $gender,
        $dob,
        $country,
        $nationality,
        $email,
        $mobile,
        $organization_name,
        $job_title,
        $equipment_list,
        $media_badgeid_path,
        $media_badge_photo_path,
        $media_govid_path
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
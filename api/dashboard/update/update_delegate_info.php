<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

// Check if the form was submitted

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $user_id = $_POST["input_userid"];
    $priority = isset($_POST['oc_priority']) ? strtoupper($_POST['oc_priority']) : null;
    $badge = isset($_POST['oc_new_badge']) ? strtoupper($_POST['oc_new_badge']) : null;
    $first_name = isset($_POST['oc_first_name']) ? strtoupper($_POST['oc_first_name']) : null;
    $middle_name = isset($_POST['oc_middle_name']) ? strtoupper($_POST['oc_middle_name']) : null;
    $last_name = isset($_POST['oc_last_name']) ? strtoupper($_POST['oc_last_name']) : null;
    $gender = isset($_POST['oc_gender']) ? strtoupper($_POST['oc_gender']) : null;
    $dob = isset($_POST['oc_dob']) ? strtoupper($_POST['oc_dob']) : null;
    $nib_number = isset($_POST['oc_nib_number']) ? strtoupper($_POST['oc_nib_number']) : null;
    $membership_type = isset($_POST['oc_membership_type']) ? strtoupper($_POST['oc_membership_type']) : null;
    $constituency = isset($_POST['oc_constituency']) ? strtoupper($_POST['oc_constituency']) : null;
    $house_number = isset($_POST['oc_house_number']) ? strtoupper($_POST['oc_house_number']) : null;
    $street_address = isset($_POST['oc_street_address']) ? strtoupper($_POST['oc_street_address']) : null;
    $affiliated_branch = isset($_POST['oc_affiliated_branch']) ? strtoupper($_POST['oc_affiliated_branch']) : null;
    $email_address = isset($_POST['oc_email_address']) ? strtoupper($_POST['oc_email_address']) : null;
    $mobile_number = isset($_POST['oc_mobile_number']) ? strtoupper($_POST['oc_mobile_number']) : null;
    $telephone_number = isset($_POST['oc_telephone_number']) ? strtoupper($_POST['oc_telephone_number']) : null;
    $emergency_contact_name = isset($_POST['oc_emergency_contact_name']) ? strtoupper($_POST['oc_emergency_contact_name']) : null;
    $emergency_contact_relationship = isset($_POST['oc_emergency_contact_relationship']) ? strtoupper($_POST['oc_emergency_contact_relationship']) : null;
    $emergency_contact_telephone_number = isset($_POST['oc_emergency_contact_telephone_number']) ? strtoupper($_POST['oc_emergency_contact_telephone_number']) : null;
    

    // Prepare and execute the stored procedure
    $query = "CALL UPDATE_SYSTEM_USER(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "isssssssssssssssssss", 
    $user_id,
    $priority,
    $badge,
    $first_name,
    $middle_name,
    $last_name,
    $gender,
    $dob,
    $nib_number,
    $membership_type,
    $constituency, 
    $house_number,
    $street_address,
    $affiliated_branch,
    $email_address,
    $mobile_number,
    $telephone_number,
    $emergency_contact_name,
    $emergency_contact_relationship,
    $emergency_contact_telephone_number
    
    
    );

    if (mysqli_stmt_execute($stmt)) {
        // User information updated successfully
        $response = array("status" => "success", "message" => "User information updated successfully.");
    } else {
        // Error occurred while updating user information
        $response = array("status" => "error", "message" => "Error: " . mysqli_error($connection));
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Send JSON response
    header("Content-Type: application/json");
    echo json_encode($response);

    // Stop further execution of the script
    exit();
}

// Close the database connection
mysqli_close($connection);
?>
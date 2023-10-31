<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 3) . '/helpers/upload_helper.php');
// Check if the form was submitted

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $user_id = $_POST["input_userid"];
    $priority = isset($_POST['oc_priority']) ? strtoupper($_POST['oc_priority']) : null;
    $badge = $_POST["oc_new_badge"];
    //$first_name = isset($_POST['oc_first_name']) ? strtoupper($_POST['oc_first_name']) : null;
    //$middle_name = isset($_POST['oc_middle_name']) ? strtoupper($_POST['oc_middle_name']) : null;
    //$last_name = isset($_POST['oc_last_name']) ? strtoupper($_POST['oc_last_name']) : null;
    $gender = isset($_POST['oc_gender']) ? strtoupper($_POST['oc_gender']) : null;
    $dob = isset($_POST['oc_dob']) ? strtoupper($_POST['oc_dob']) : null;
    $nib_number = isset($_POST['oc_nib_number']) ? strtoupper($_POST['oc_nib_number']) : null;
    $membership_type = isset($_POST['oc_membership_type']) ? strtoupper($_POST['oc_membership_type']) : null;
    
    
    
    //$house_number = isset($_POST['oc_house_number']) ? strtoupper($_POST['oc_house_number']) : null;
   // $street_address = isset($_POST['oc_street_address']) ? strtoupper($_POST['oc_street_address']) : null;
   //$membership_type = isset($_POST['oc_membership_type']) ? strtoupper($_POST['oc_membership_type']) : null;
   $delegate_type = $_POST['oc_delegate_type'] ?? null;
   $affiliated_branch = isset($_POST['oc_affiliated_branch']) ? strtoupper($_POST['oc_affiliated_branch']) : null;
    
    
    
    //$email_address = isset($_POST['oc_email_address']) ? strtoupper($_POST['oc_email_address']) : null;
   // $mobile_number = isset($_POST['oc_mobile_number']) ? strtoupper($_POST['oc_mobile_number']) : null;
    //$telephone_number = isset($_POST['oc_telephone_number']) ? strtoupper($_POST['oc_telephone_number']) : null;
   // $emergency_contact_name = isset($_POST['oc_emergency_contact_name']) ? strtoupper($_POST['oc_emergency_contact_name']) : null;
 //  $emergency_contact_relationship = isset($_POST['oc_emergency_contact_relationship']) ? strtoupper($_POST['oc_emergency_contact_relationship']) : null;
  //  $emergency_contact_telephone_number = isset($_POST['oc_emergency_contact_telephone_number']) ? strtoupper($_POST['oc_emergency_contact_telephone_number']) : null;
    
  $receipt_number = isset($_POST['oc_receipt_number']) ? strtoupper($_POST['oc_receipt_number']) : null;
  $notes = $_POST["oc_notes"];
  
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validate "input_vote_del_badge_question" value
        //$badge = "1"; // Sanitize the input

        if ($badge === "1") {
            if (isset($_FILES['oc_badge_photo']) && is_uploaded_file($_FILES['oc_badge_photo']['tmp_name'])) {
                
                // Use $user_id directly for the badge file name
                $badgeFileName = $user_id;
        
                // Perform upload
                $badge_photo_result = upload_photo(dirname($_SERVER['DOCUMENT_ROOT']) . '/httpdocs/idbadge', $badgeFileName, $_FILES["oc_badge_photo"]);
        
                if (!$badge_photo_result['error']) {
                    // Rename the file to ensure it has a .jpg extension
                    $uploadedExtension = pathinfo($_FILES['oc_badge_photo']['name'], PATHINFO_EXTENSION);
                    $originalPath = dirname($_SERVER['DOCUMENT_ROOT']) . '/httpdocs/idbadge/' . $badgeFileName . '.' . $uploadedExtension;
        
                    if (file_exists($originalPath) && strtolower($uploadedExtension) !== 'jpg') {
                        rename($originalPath, dirname($_SERVER['DOCUMENT_ROOT']) . '/httpdocs/idbadge/' . $badgeFileName . '.jpg');
                    }
                } else {
                    // Set Content-Type to application/json
                    header('Content-Type: application/json');
        
                    // Return error response
                    echo json_encode(['status' => 'error', 'message' => 'Failed to upload badge photo. ' . $badge_photo_result['msg']]);
                    exit();
                }
            } else {
                header('Content-Type: application/json');
                echo json_encode(['status' => 'error', 'message' => 'No valid file provided']);
                exit();
            }
        }
        
        
    }    



    // Prepare and execute the stored procedure
    $query = "CALL UPDATE_PROFILE_CONFIRM_PAYMENT_RECORD(?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "issssssssss", 
   
    $user_id,
    $priority,
    $badge,
    $gender,
    $dob,
    $nib_number,
    $membership_type,
    $delegate_type,
    $affiliated_branch,
  $receipt_number,
  $notes
    
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
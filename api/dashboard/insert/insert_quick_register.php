<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 3) . '/helpers/upload_helper.php');

// Function to generate a 10-digit random ID number

function generate_random_id()
{
    $offset = mt_rand(10000, 90000); // Random offset between 10000 and 90000
    $timestampComponent = substr(time() + $offset, -5); // Ensuring at least 5 digits
    $maxTotalLength = 7;
    $maxRandom = min(99999, pow(10, $maxTotalLength - strlen($timestampComponent)) - 1);
    $randomComponent = str_pad(mt_rand(1, $maxRandom), $maxTotalLength - strlen($timestampComponent), '1', STR_PAD_LEFT);

    return $timestampComponent . $randomComponent;
}

// Function to validate and sanitize input data
function validate_input($data)
{
    return trim(htmlspecialchars(stripslashes($data)));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name =  isset($_POST['input_new_del_first_name']) ? strtoupper($_POST['input_new_del_first_name']) : null;
    $middle_name = isset($_POST['input_new_del_middle_name']) ? strtoupper($_POST['input_new_del_middle_name']) : null;
    $last_name = isset($_POST['input_new_del_last_name']) ? strtoupper($_POST['input_new_del_last_name']) : null;
    $gender = isset($_POST['input_new_del_gender']) ? strtoupper($_POST['input_new_del_gender']) : null; 
    $dob = validate_input($_POST["input_new_del_dob"]);
    $nib_number = isset($_POST['input_new_del_nib_number']) ? strtoupper($_POST['input_new_del_nib_number']) : null; 
    $membership_type = isset($_POST['input_membership_type']) ? strtoupper($_POST['input_membership_type']) : null; 
    $constituency = isset($_POST['input_new_del_constituency']) ? strtoupper($_POST['input_new_del_constituency']) : null;  
    $affiliated_branch = isset($_POST['input_new_del_affiliated_branch']) ? strtoupper($_POST['input_new_del_affiliated_branch']) : null; 
    $email_address = validate_input($_POST["input_new_del_email"]);
    $mobile_number = isset($_POST['input_new_del_mobile']) ? strtoupper($_POST['input_new_del_mobile']) : null;  
    $telephone_number = isset($_POST['input_new_del_telephone']) ? strtoupper($_POST['input_new_del_telephone']) : null;  
    $emergency_name = isset($_POST['input_new_del_emergency_name']) ? strtoupper($_POST['input_new_del_emergency_name']) : null;  
    $emergency_relationship = isset($_POST['input_new_del_emergency_relationship']) ? strtoupper($_POST['input_new_del_emergency_relationship']) : null; 
    $emergency_telephone = isset($_POST['input_new_del_emergency_telephone']) ? strtoupper($_POST['input_new_del_emergency_telephone']) : null; 
    $house_number = isset($_POST['input_new_del_house_number']) ? strtoupper($_POST['input_new_del_house_number']) : null;  
    $street_name = isset($_POST['input_new_del_street_address']) ? strtoupper($_POST['input_new_del_street_address']) : null;
    $priority =  isset($_POST['input_priority']) ? strtoupper($_POST['input_priority']) : null;
    // Generate a 10-digit random ID number
    $random_id = generate_random_id();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validate "input_vote_del_badge_question" value
        $badge_reprint = "1"; // Sanitize the input

        if ($badge_reprint === "1") {
            if (isset($_FILES['input_new_del_badge_photo']) && is_uploaded_file($_FILES['input_new_del_badge_photo']['tmp_name'])) {
                
                // Use $user_id directly for the badge file name
                $badgeFileName = $user_id;
        
                // Perform upload
                $badge_photo_result = upload_photo(dirname($_SERVER['DOCUMENT_ROOT']) . '/httpdocs/idbadge', $badgeFileName, $_FILES["input_new_del_badge_photo"]);
        
                if (!$badge_photo_result['error']) {
                    // Rename the file to ensure it has a .jpg extension
                    $uploadedExtension = pathinfo($_FILES['input_new_del_badge_photo']['name'], PATHINFO_EXTENSION);
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

    // Call the stored procedure to insert data
    $stmt = $connection->prepare("CALL INSERT_MEMBER_PROFILE(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssssssssssss",
    $random_id, 
    $priority,
    $first_name, 
    $middle_name, 
    $last_name, 
    $gender,
    $nib_number,
    $membership_type, 
    $dob,
    $constituency, 
    $affiliated_branch,
    $email_address,
    $mobile_number,
    $telephone_number,
    $emergency_name,
    $emergency_relationship,
    $emergency_telephone,
    $house_number,
    $street_name

);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Record added successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add record to the database.'. mysqli_error($connection)]);
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $connection->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.'. mysqli_error($connection)]);
}
?>

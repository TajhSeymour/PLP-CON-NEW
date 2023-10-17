<?php

require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 2) . '/helpers/upload_helper.php');

//if input_del_id_question = "Yes"
//then 
//random_id = input_id_number 
//Then Update the record using Stored Procedures 


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



// Now you have the values of these fields in the respective variables,
// and you can use them in your PHP script as needed.



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_del_id_question = isset($_POST['input_del_id_question']) ? $_POST['input_del_id_question'] : null;

    if ($input_del_id_question === "YES") {
        $random_id = validate_input($_POST["input_id_number"]);
  
  
  
  
  
    } else {
        $random_id = generate_random_id(); // Need to adjust if we are accepting new registrations online
    }

    //STEP 3: GENERAL INFORMATION
    $input_del_first_name = isset($_POST['input_del_first_name']) ? $_POST['input_del_first_name'] : null;
    $input_del_middle_name = isset($_POST['input_del_middle_name']) ? $_POST['input_del_middle_name'] : null;
    $input_del_last_name = isset($_POST['input_del_last_name']) ? $_POST['input_del_last_name'] : null;
    $gender = isset($_POST['input_del_gender']) ? $_POST['input_del_gender'] : null;
    $membership_type = isset($_POST['input_del_membership_type']) ? $_POST['input_del_membership_type'] : null;
    $dob = validate_input($_POST["input_del_dob"]);
    $nib_number = validate_input($_POST["input_del_nib"]);
    $consituency = validate_input($_POST["input_del_constituency"]);
    $affiliated_branch = validate_input($_POST["input_del_affiliated_branch"]);

    //STEP 4: CONTACT INFORMATION

    $email = validate_input($_POST["input_del_email"]);
    $mobile = validate_input($_POST["input_del_mobile"]);
    $telephone = validate_input($_POST["input_del_telephone"]);
    $emergency_contact_name = validate_input($_POST["input_del_emergency_name"]);
    $emergency_contact_relationship = validate_input($_POST["input_del_emergency_relationship"]);
    $emergency_contact_number = validate_input($_POST["input_del_emergency_telephone"]);

    //STEP 5A: CONVENTION REGISTRATION
    if ($_POST["input_vote_del_question"] === "Yes") {
        $input_vote_del_nomination_question = isset($_POST['input_vote_del_nomination_question']) ? $_POST['input_vote_del_nomination_question'] : null;
        $vote_delegate_question = "Yes";
    } else {
        $branch_of_delegate = NULL;
        $vote_delegate_question = "No";
    }



    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validate "input_vote_del_badge_question" value
        $badge_reprint = strip_tags($_POST["input_vote_del_badge_question"]); // Sanitize the input
    
        if ($badge_reprint === "1") {
            if (isset($_FILES['input_badge_photo']) && is_uploaded_file($_FILES['input_badge_photo']['tmp_name'])) {
                // Generate a unique badge file name using $random_id
                $badgeFileName = $random_id;
    
                // Perform upload
                $badge_photo_result = upload_photo(dirname($_SERVER['DOCUMENT_ROOT']) . '/nextgenplp.com/idbadge', $badgeFileName, $_FILES["input_badge_photo"]);
    
                if ($badge_photo_result['error']) {
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
    

    $ground_transportation_request = validate_input($_POST["input_ground_transportation_question"]);

    //STEP 5 B: TENTATIVE ARRIVAL, HOTEL & DEPARTURE INFORMATION
    if ($_POST["input_travel_question"] === "No") {
        $arrival_date_time = NULL;
        $arrival_airline_name = NULL;
        $arrival_airline_flight_number = NULL;
        $departure_airline_name = NULL;
        $departure_airline_flight_number = NULL;
        $departure_date_time = NULL;
        $hotel_name = NULL;

    } else {
        $arrival_date_time = validate_input($_POST["input_arrival_date_time"]);
        $arrival_airline_name = isset($_POST["input_arrival_airline"]) ? validate_input($_POST["input_arrival_airline"]) : NULL;
        $arrival_airline_flight_number = isset($_POST["input_arrival_flight_number"]) ? validate_input($_POST["input_arrival_flight_number"]) : NULL;
        $departure_airline_name = isset($_POST["input_departure_airline"]) ? validate_input($_POST["input_departure_airline"]) : NULL;
        $departure_airline_flight_number = isset($_POST["input_departure_flight_number"]) ? validate_input($_POST["input_departure_flight_number"]) : NULL;
        $departure_date_time = validate_input($_POST["input_departure_date_time"]);
        $hotel_name = isset($_POST["input_hotel"]) ? validate_input($_POST["input_hotel"]) : NULL;

    }

    //STEP 6: CONVENTION PAYMENT INSTRUCTIONS

    $pay_method = validate_input($_POST["input_pay_method_question"]);
    $total_cost = isset($_POST['input_total_cost']) ? $_POST['input_total_cost'] : null;



    //10 CALLS PER LINE
    $stmt = $connection->prepare("CALL UPDATE_MEMBER_PROFILE_V2(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param(
        "ssssssssssssssssssssssssssssss",

        $random_id,
        $del_id_question,
        $first_name,
        $middle_name,
        $last_name,
        $gender,
        $dob,
        $nib_number,
        $consituency,
        $affiliated_branch,
        $membership_type,
        $email,
        $mobile,
        $telephone,
        $emergency_contact_name,
        $emergency_contact_relationship,
        $emergency_contact_number,
        $branch_of_delegate,
        $vote_delegate_question,
        $badge_replacement,
        $ground_transportation_request,
        $arrival_date_time,
        $arrival_airline_name,
        $arrival_airline_flight_number,
        $departure_date_time,
        $departure_airline_name,
        $departure_airline_flight_number,
        $hotel_name,
        $pay_method,
        $total_cost

    );

    if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'You have successfully registered for the Conference!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add record to the database.', 'sql_error' => mysqli_error($connection)]);
    }

    $stmt->close();
    $connection->close();

} else {

    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.', 'sql_error' => mysqli_error($connection)]);
}

?>

} elseif ($input_del_id_question === "NOB") {
        $random_id = generate_random_ob_id(); // Need to adjust if we are accepting new registrations online
        $ob_first_name = isset($_POST['input_ob_first_name']) ? $_POST['input_ob_first_name'] : null;
        $ob_middle_name = isset($_POST['input_ob_middle_name']) ? $_POST['input_ob_middle_name'] : null;
        $ob_last_name = isset($_POST['input_ob_last_name']) ? $_POST['input_ob_last_name'] : null;
        $ob_gender = isset($_POST['input_ob_gender']) ? $_POST['input_ob_gender'] : null;
        $ob_dob = validate_input($_POST["input_ob_dob"]);
        $ob_country = isset($_POST['input_ob_country']) ? $_POST['input_ob_country'] : null;
      $ob_nationality = isset($_POST['input_ob_nationality']) ? $_POST['input_ob_nationality'] : null;
        $ob_consituency = isset($_POST['input_ob_constituency']) ? $_POST['input_ob_constituency'] : null;

        $ob_email = isset($_POST['input_ob_email']) ? $_POST['input_ob_email'] : null;
        $ob_mobile = isset($_POST['input_ob_email']) ? $_POST['input_ob_email'] : null;
        $ob_telephone = isset($_POST['input_ob_telephone']) ? $_POST['input_ob_telephone'] : null;
        $ob_emergency_contact_name = isset($_POST['input_ob_emergency_name']) ? $_POST['input_ob_emergency_name'] : null;
        $ob_emergency_contact_relationship = isset($_POST['input_ob_emergency_relationship']) ? $_POST['input_ob_emergency_relationship'] : null;
        $ob_emergency_contact_number =isset($_POST['input_ob_emergency_telephone']) ? $_POST['input_ob_emergency_telephone'] : null;
        
        $ob_pay_method = validate_input($_POST["input_pay_method_question"]);
   $ob_total_cost = isset($_POST['input_total_cost']) ? $_POST['input_total_cost'] : null;
   
    }
//10 CALLS PER LINE
$stmt = $connection->prepare("CALL INSERT_OBSERVER_DELEGATE(?,?,?,?,?,?,?,?,?,?,
                                                            ?,?,?,?,?,?,?)");
$stmt->bind_param(
    "sssssssssssssssss",

    $random_id,
    $ob_first_name,
    $ob_middle_name,
    $ob_last_name,
    $ob_gender,
    $ob_dob, 
    $ob_country,
    $ob_nationality,
    $ob_consituency,
    $ob_email,
    $ob_mobile,
    $ob_telephone,
    $ob_emergency_contact_name,
    $ob_emergency_contact_relationship,
    $ob_emergency_contact_number,
    $ob_pay_method,
    $ob_total_cost
    

);

if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'You have successfully registered for the Conference!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to add record to the database.', 'sql_error' => mysqli_error($connection)]);
}

$stmt->close();
$connection->close();
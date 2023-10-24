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
    $maxTotalLength = 7;
    $maxRandom = str_pad('99999', $maxTotalLength - strlen($timestampComponent), '9', STR_PAD_LEFT);
    
    do {
        $randomComponent = mt_rand(1, (int)$maxRandom);
    } while ($randomComponent < pow(10, $maxTotalLength - strlen($timestampComponent) - 1));

    return $timestampComponent . str_pad($randomComponent, $maxTotalLength - strlen($timestampComponent), '0', STR_PAD_LEFT);
}


function generate_random_ob_id()
{
    $timestampComponent = substr(time(), -6); // Extracting last 6 characters for more variability
    $maxTotalLength = 9;
    $maxRandom = 999999; // Two characters longer than before
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

    $input_del_id_question = isset($_POST['input_new_del_id_question']) ? $_POST['input_new_del_id_question'] : null;

    if ($input_del_id_question === "YES") {
        $random_id = generate_random_id();
        //STEP 3: GENERAL INFORMATION
        $input_del_first_name = isset($_POST['input_new_del_first_name']) ? strtoupper($_POST['input_new_del_first_name']) : null;
        $input_del_middle_name = isset($_POST['input_new_del_middle_name']) ? strtoupper($_POST['input_new_del_middle_name']) : null;
        $input_del_last_name = isset($_POST['input_new_del_last_name']) ? strtoupper($_POST['input_new_del_last_name']) : null;        
        $gender = isset($_POST['input_new_del_gender']) ? $_POST['input_new_del_gender'] : null;
        $membership_type = isset($_POST['input_new_del_membership_type']) ? $_POST['input_new_del_membership_type'] : null;
        $dob = validate_input($_POST["input_new_del_dob"]);
        $nib_number = validate_input($_POST["input_new_del_nib"]);
        $constituency = isset($_POST['input_new_del_constituency']) ? htmlspecialchars_decode($_POST['input_new_del_constituency']) : null;
        $affiliated_branch = isset($_POST['input_new_del_affiliated_branch']) ? htmlspecialchars_decode($_POST['input_new_del_affiliated_branch']) : null;
       

        //STEP 4: ADDRESS & CONTACT INFORMATION

        $email = validate_input($_POST["input_new_del_email"]);
        $mobile = validate_input($_POST["input_new_del_mobile"]);
        $telephone = validate_input($_POST["input_new_del_telephone"]);
        $emergency_contact_name = validate_input($_POST["input_new_del_emergency_name"]);
        $emergency_contact_relationship = validate_input($_POST["input_new_del_emergency_relationship"]);
        $emergency_contact_number = validate_input($_POST["input_new_del_emergency_telephone"]);
        $house_number = validate_input($_POST["input_new_del_house_number"]); 
        $street_address = validate_input($_POST["input_new_del_street_address"]); 

        //STEP 5A: CONVENTION REGISTRATION
        if ($_POST["input_vote_new_del_question"] === "1") {
            $branch_of_delegate = isset($_POST['input_vote_new_del_nomination_question']) ? $_POST['input_vote_new_del_nomination_question'] : null;
            $vote_delegate_question = "1";
        } else {
            $branch_of_delegate = isset($_POST['input_vote_new_del_nomination_question']) ? $_POST['input_vote_new_del_nomination_question'] : null;
            //$branch_of_delegate = NULL;
            $vote_delegate_question = "0";
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Validate "input_vote_del_badge_question" value
            $badge_reprint = strip_tags($_POST["input_vote_new_del_badge_question"]); // Sanitize the input

            if ($badge_reprint === "1") {
                if (isset($_FILES['input_new_del_badge_photo']) && is_uploaded_file($_FILES['input_new_del_badge_photo']['tmp_name'])) {
                    // Generate a unique badge file name using $random_id
                    $badgeFileName = $random_id;

                    // Perform upload
                    $badge_photo_result = upload_photo(dirname($_SERVER['DOCUMENT_ROOT']) . '/httpdocs/idbadge', $badgeFileName, $_FILES["input_new_del_badge_photo"]);

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


        $ground_transportation_request = validate_input($_POST["input_new_del_ground_transportation_question"]);

        //STEP 5 B: TENTATIVE ARRIVAL, HOTEL & DEPARTURE INFORMATION
        if ($_POST["input_new_del_travel_question"] === "No") {
            $arrival_date_time = NULL;
            $arrival_airline_name = NULL;
            $arrival_airline_flight_number = NULL;
            $departure_airline_name = NULL;
            $departure_airline_flight_number = NULL;
            $departure_date_time = NULL;
            $hotel_name = NULL;
            $travelling = "0";

        } else {
            $arrival_date_time = validate_input($_POST["input_new_del_arrival_date_time"]);
            $arrival_airline_name = isset($_POST["input_new_del_arrival_airline"]) ? validate_input($_POST["input_new_del_arrival_airline"]) : NULL;
            $arrival_airline_flight_number = isset($_POST["input_new_del_arrival_flight_number"]) ? validate_input($_POST["input_new_del_arrival_flight_number"]) : NULL;
            $departure_airline_name = isset($_POST["input_new_del_departure_airline"]) ? validate_input($_POST["input_new_del_departure_airline"]) : NULL;
            $departure_airline_flight_number = isset($_POST["input_new_del_departure_flight_number"]) ? validate_input($_POST["input_new_del_departure_flight_number"]) : NULL;
            $departure_date_time = validate_input($_POST["input_new_del_departure_date_time"]);
            $hotel_name = isset($_POST['input_new_del_hotel']) ? htmlspecialchars_decode($_POST['input_new_del_hotel']) : null;
            $travelling = "1";
        }

        //STEP 6: CONVENTION SURVEY QUESTION
       // $input_survey_question_1 = validate_input($_POST["input_survey_question_1"]);
       // $input_survey_question_2 = validate_input($_POST["input_survey_question_2"]);
       // $input_survey_question_3 = validate_input($_POST["input_survey_question_3"]);
       //$input_survey_question_4 = validate_input($_POST["input_survey_question_4"]);
       // $input_survey_question_5 = validate_input($_POST["input_survey_question_5"]);


        //STEP 7: CONVENTION PAYMENT INSTRUCTIONS

        $pay_method = validate_input($_POST["input_new_del_pay_method_question"]);
        $total_cost = isset($_POST['input_new_del_total_cost']) ? $_POST['input_new_del_total_cost'] : null;


        //10 CALLS PER LINE
        $stmt = $connection->prepare("CALL INSERT_MEMBER_PROFILE_V2(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "sssssssssssssssssssssssssssssssss",

            $random_id,
            $del_id_question,
            $input_del_first_name,
            $input_del_middle_name,
            $input_del_last_name,
            $gender,
            $dob,
            $nib_number,
            $constituency,
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
            $badge_reprint,
            $travelling,
            $ground_transportation_request,
            $arrival_date_time,
            $arrival_airline_name,
            $arrival_airline_flight_number,
            $departure_date_time,
            $departure_airline_name,
            $departure_airline_flight_number,
            $hotel_name,
            $pay_method,
            $total_cost,
            $house_number,
            $street_address
           // $input_survey_question_1,
           // $input_survey_question_2,
           // $input_survey_question_3,
           // $input_survey_question_4,
           // $input_survey_question_5

        );

        if ($stmt->execute()) {

            /* This code block is preparing the necessary data to send an email to the delegate applicant. */
            //  $full_name = $first_name . ' ' . $last_name;
            // $registrant_email = $email;
            //    $registrant_id = $random_id;

            //    global $registrant_name;
            // global $registrant_email;
            //   global $registrant_id;

            //   $registrant_name = trim($full_name);
            //  $registrant_email = trim($registrant_email);
            //   $registrant_id = trim($registrant_id);

            //  ob_start(); // Start buffering here: this will prevent sending the output to the browser which causes the headers to be sent prematurely
            //require 'send_delegate_applicant_email.php';
            //  require 'sendmail.php';
            // ob_end_clean(); // End buffering here

            echo json_encode(['status' => 'success', 'message' => 'You have successfully registered for the Conference!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add record to the database.']);
        }

        $stmt->close();
        $connection->close();

    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.'. mysqli_error($connection)]);
    }
}

?>
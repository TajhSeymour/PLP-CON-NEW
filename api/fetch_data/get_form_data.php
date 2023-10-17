<?php
require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 2) . '/database/apiheaders.php');

// Call the stored procedure for consituency
$query_consituency = 'CALL GET_CONSITUENCY()';
$result_consituency = mysqli_query($connection, $query_consituency);

// Handle if the query fails
if (!$result_consituency) {
    die('Failed to fetch consituency data: ' . mysqli_error($connection));
}

$consituency = array();
while ($row = mysqli_fetch_assoc($result_consituency)) {
    $consituency[] = $row['name'];
}



// Make sure all result sets are fetched
while (mysqli_more_results($connection) && mysqli_next_result($connection)) {
    // Fetch rows from the result set, if any
    if ($result = mysqli_store_result($connection)) {
        mysqli_free_result($result);
    }
}

// Call another stored procedure for nationality
$query_nationality = 'CALL GET_NATIONALITY()';
$result_nationality = mysqli_query($connection, $query_nationality);

if (!$result_nationality) {
    die('Failed to fetch nationality data: ' . mysqli_error($connection));
}

$nationality = array();
while ($row = mysqli_fetch_assoc($result_nationality)) {
    $nationality[] = $row['country_enNationality'];
}

// Make sure all result sets are fetched
while (mysqli_more_results($connection) && mysqli_next_result($connection)) {
    // Fetch rows from the result set, if any
    if ($result = mysqli_store_result($connection)) {
        mysqli_free_result($result);
    }
}

// Call  Airline List
$query_arrivalAirline = 'CALL GET_AIRLINES()';

$result_arrivalAirline = mysqli_query($connection, $query_arrivalAirline);

if (!$result_arrivalAirline) {
    die('Failed to fetch airlines data: ' . mysqli_error($connection));
}

$arrivalAirline = array();
while ($row = mysqli_fetch_assoc($result_arrivalAirline)) {
    $arrivalAirline[] = $row['airline_name'];
}

// Make sure all result sets are fetched
while (mysqli_more_results($connection) && mysqli_next_result($connection)) {
    // Fetch rows from the result set, if any
    if ($result = mysqli_store_result($connection)) {
        mysqli_free_result($result);
    }
}

// Call  Airline List
$query_hotelNames = 'CALL GET_HOTEL_NAMES()';

$result_hotelNames = mysqli_query($connection, $query_hotelNames);

if (!$result_hotelNames) {
    die('Failed to fetch hotel name data: ' . mysqli_error($connection));
}

$hotelNames= array();
while ($row = mysqli_fetch_assoc($result_hotelNames)) {
    $hotelNames[] = $row['hotel_name'];
}

// Make sure all result sets are fetched
while (mysqli_more_results($connection) && mysqli_next_result($connection)) {
    // Fetch rows from the result set, if any
    if ($result = mysqli_store_result($connection)) {
        mysqli_free_result($result);
    }
}





// Free up the results and close the connection
mysqli_free_result($result_consituency);

mysqli_free_result($result_nationality);
mysqli_free_result($result_arrivalAirline);
mysqli_free_result($result_hotelNames);




mysqli_close($connection);

// Set the response content type to JSON and return data
header('Content-Type: application/json');
echo json_encode(['consituency' => $consituency, 'nationality' => $nationality, 'arrivalAirline' => $arrivalAirline,
'hotelNames' => $hotelNames


]);
exit();
?>

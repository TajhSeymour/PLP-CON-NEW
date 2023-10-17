<?php

declare(strict_types=1);

require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');
$registrant_results = $connection->query('CALL GET_ALL_REGISTRANTS_PENDING_SECURITY();');

$registrants = [];

while ($registrant = $registrant_results->fetch_assoc()) {
    $registrant_name = empty($registrant['middle_name']) 
        ? $registrant['first_name'] . ' ' . $registrant['last_name'] 
        : $registrant['first_name'] . ' ' . $registrant['middle_name'] . ' ' . $registrant['last_name'];

    $registrants[] = [
        'registrant_id' => $registrant['id'], 
        'registrant_email' => $registrant['email'], 
        'registrant_name' => $registrant_name
    ];
}
$connection->close();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $result = $connection->query('CALL UPDATE_REGISTRANT_STATUS_SECURITY_APPROVE_ALL();');
    if ($result->num_rows ===  0) {
        http_response_code(404);
        die(json_encode([
            "success" => false,
            "message" => "No registrants were approved."
        ]));
    }

    $connection->close();

    foreach ($registrants as $registrant) {
        extract($registrant, EXTR_OVERWRITE);
        require dirname(__DIR__) . '/insert/send_delegate_applicant_email.php';
    }

    http_response_code(200);
    die(json_encode([
        "success" => true,
        "message" => "All registrants awaiting approval were approved."
    ]));
}

http_response_code(405);
die(json_encode([
    "success" => false,
    "message" => "Method not allowed."
]));
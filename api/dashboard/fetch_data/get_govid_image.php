<?php
// Database configuration

require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');
// Read the userID from the POST parameters
$userID = $_POST['userID'];

// Prepare and bind
$stmt = $connection->prepare("SELECT gov_id FROM registrant_personal_details WHERE id = ?");
$stmt->bind_param("s", $userID);

// Execute the statement
$stmt->execute();

// Bind the result to a variable
$stmt->bind_result($imageUrl);

// Fetch the data
$stmt->fetch();

// Close the statement and the connectionection
$stmt->close();
$connection->close();

if (empty($imageUrl)) {
    $imageUrl = "/uploads/govid/gov_id.png";
} else {
    // Concatenate 'https://weblink.com' in front of the imageUrl
    $imageUrl = '/uploads/govid' . $imageUrl;
}

// Return the image as an HTML img tag
echo "<img src='{$imageUrl}' alt='User image'>";

?>

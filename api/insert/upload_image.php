<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // FTP server details
        $ftpServer = 'ftp://plpconvention.org/';
        $username = 'idbadge@plpconvention.org';
        $password = 'E7N_z$S^OHU(';

        // Get the file content from the POST request
        $fileData = file_get_contents($_FILES['file']['tmp_name']);

        // Check if the file data is valid
        if ($fileData === false) {
            throw new Exception('Failed to read file data.');
        }

        // Construct the FTP URL
        $filename = $_POST['filename'] . '.jpg';
        $ftpUrl = $ftpServer . $filename;

        // Initialize an FTP connection
        $ftpConn = ftp_connect($ftpServer);
        if (!$ftpConn) {
            throw new Exception('Failed to connect to FTP server.');
        }

        // Login to the FTP server
        if (!ftp_login($ftpConn, $username, $password)) {
            throw new Exception('FTP login failed.');
        }

        // Upload the file
        if (!ftp_put($ftpConn, $filename, $fileData, FTP_BINARY)) {
            throw new Exception('Failed to upload file to FTP server.');
        }

        // Close the FTP connection
        ftp_close($ftpConn);

        // Return a success response
        echo json_encode(['message' => 'File uploaded successfully.']);
    } catch (Exception $ex) {
        // Handle exceptions and return an error response
        http_response_code(500);
        echo json_encode(['error' => $ex->getMessage()]);
    }
} else {
    // Return an error for unsupported request methods
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
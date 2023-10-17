<?php

/**
 * Verifies the file MIME type, file size, and file error
 * 
 * @param string $file_ext
 * @param int $file_size
 * @param int $file_error
 * 
 * @return array
 */
function verify_file(string $file_ext, int $file_size, int $file_error): array
{
    $max_upload_file_size = 25 * 1024 * 1024 * 2; // 50 MB

    $result = [
        'msg' => '',
        'error' => false
    ];

    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'heic', 'pdf'];

    if (!in_array($file_ext, $allowed_ext)) {
        $result['msg'] = 'Forbidden file extension. Please upload a valid photo image or PDF file.';
        $result['error'] = true;
    } else if ($file_error != 0) {
        $result['msg'] = 'An error occurred while uploading the file. Error code: ' . $file_error;
        $result['error'] = true;
    } else if ($file_size > $max_upload_file_size) {
        $result['msg'] = 'The uploaded file exceeds the maximum allowed size of ' . ($max_upload_file_size / (1024 * 1024)) . ' MB.';
        $result['error'] = true;
    }

    return $result;
}

/**
 * Upload an image to the specified directory and set the name of the file based on the passport number and file extension.
 * 
 * @param string $upload_dir
 * @param string $upload_file_name
 * @param array $file
 * 
 * @return array
 */
function upload_photo($upload_dir, $random_id, $file): array
{
    $result = [];

    if (!is_null($file)) {
        $file_name = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));

        $verification_result = verify_file($file_ext, $file_size, $file_error);

        if ($verification_result['error']) {
            $result = $verification_result;
        } else {
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $file_new_name = $random_id;
            $file_path = $upload_dir . '/' . $file_new_name . '.' . $file_ext;

            // Overwrite existing file if it exists
            if (move_uploaded_file($file_tmp_name, $file_path)) {
                $result['error'] = false;
                $result['data']['file_path'] = $file_path;
            } else {
                $result['error'] = true;
                $result['msg'] = 'File upload failed.';
            }
        }
    }

    return $result;
}

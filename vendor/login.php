<?php
require_once 'auxiliaries.php';

// $_SERVER['REQUEST_METHOD'] === 'GET';
// $_POST = $_GET;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Call the loginUser function
    $result = loginUser($email, $password);

    if (!$result['errors']) {
            // Login successful
            echo json_encode([
                'message' => $result['message'],
                'user_id' => $result['user_id']
            ]);
    } else {
            // Login failed
            echo json_encode([
                'message' => $result['message']
            ]);
    }
}
?>

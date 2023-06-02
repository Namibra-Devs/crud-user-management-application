<?php
require_once 'auxiliaries.php';

// $_SERVER['REQUEST_METHOD'] === 'GET';
// $_POST = $_GET;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Call the getAllUsers function
    $users = getAllUsers();

    // Check if user exists
    if (!$users['errors']) {
            // Users found
            
            echo json_encode([
                'message' => $users['message']
            ]);
    } else {
        // No User Found
                 echo json_encode([
                    'message' => $users['message']
                ]);
    }
}

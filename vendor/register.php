<?php
require_once 'auxiliaries.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if required form fields are present
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['is_admin'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $is_admin = $_POST['is_admin'];

        // Call the createUser function
        $result = createUser($name, $email, $password, $is_admin);

        if (!$result['errors']) {
            // Registration successful
            echo json_encode([
                'message' => $result['message'],
                'user_id' => $result['user_id']
            ]);
        } else {
            // Registration failed
            echo json_encode([
                'message' => $result['message']
            ]);
        }
    } else {
        // Required form fields are missing
        echo json_encode([
            'message' => $result['message']
        ]);
    }
}

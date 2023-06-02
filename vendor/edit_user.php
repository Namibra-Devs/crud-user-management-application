<?php
require_once 'auxiliaries.php';

// Check if the user is logged in
if (!checkUserLoggedIn()) {
    echo "Please login to edit user!";
    exit();

}

// Check if the user is an admin 
if (!isAdmin()) {
    echo "Access denied.";
    exit();
}

// Get the user ID from the query string
$userId = $_GET['user_id'];

// Retrieve user information
$user = getUserById($userId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Update the user information
    $result = updateUser($userId, $name, $email);

    if ($result) {
        // User information updated successfully

        echo json_encode([
            'message' => "User information updated successfully!"
        ]);
        
    } else {
        // User information update failed
        echo json_encode([
            'message' => "Error updating user information!"
        ]);
    
    }
}

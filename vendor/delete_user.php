<?php
require_once 'auxiliaries.php';

// Check if the user is logged in
if (!checkUserLoggedIn()) {
    echo "Please login to delete user!";
    exit();
}

// Check if the user is an admin 
if (!isAdmin()) {
    echo "Access denied.";
    exit();
}

// Get the user ID from the query string
$userId = $_GET['user_id'];

// Delete the user
$result = deleteUser($userId);

if ($result) {
    // User deleted successfully
    echo json_encode([
        'message' => "User deleted successfully!"
    ]);
} else {
    // Error deleting user
    echo json_encode([
        'message' => "Error deleting user!"
    ]);
}

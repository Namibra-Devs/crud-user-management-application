<?php
require_once 'auxiliaries.php';

echo implode(', ', $_SESSION);
// Check if the user is logged in
if (!checkUserLoggedIn()) {
    echo "Please login to edit password!";
}

// Get the user ID from the session
$user_id = $_SESSION['user_id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

    // Retrieve user information
    $user = getUserById($user_id);

    // Check if the current password matches
    if (password_verify($currentPassword, $user['password'])) {
        // Update the password
        $result = updatePassword($userId, $newPassword);

        if ($result) {
            // Password updated successfully
            echo json_encode([
                'message' => "Password changed successfully!"
            ]);
        } else {
            // Password update failed
            echo json_encode([
                'message' => "Error changing password!"
            ]);
        }
    } else {
        // Current password is incorrect
        echo json_encode([
            'message' => "Current password is incorrect!"
        ]);
        
    }
}
?>


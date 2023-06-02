<?php
session_start();

// Destroy all session data
session_destroy();

echo json_encode([
    'message' => "Logout Successful!"
]);
// exit();
?>

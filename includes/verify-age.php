<?php
// Age Verification Handler
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (isset($input['verified']) && $input['verified'] === true) {
        $_SESSION['age_verified'] = true;
        $_SESSION['age_verified_time'] = time();
        
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Age verified']);
    } else {
        http_response_code(403);
        echo json_encode(['status' => 'error', 'message' => 'Age verification failed']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
?>

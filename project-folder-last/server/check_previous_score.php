<?php
// Database configuration
$host = "srv504.hstgr.io";
$dbname = "u307889669_alnoor";
$user = "u307889669_alnoor";
$pass = "Alnoor123@456";

// Connect to database
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
    echo "Database connection failed.";
    exit();
}

// Get email from POST
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
if (empty($email)) {
    http_response_code(400);
    echo "Missing email.";
    exit();
}

// Query the latest score by ID DESC
$stmt = $conn->prepare("SELECT score FROM quiz_results WHERE email = ? ");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($score);

if ($stmt->fetch()) {
    echo "score:" . $score;  
} else {
    echo "no_score";
}

$stmt->close();
$conn->close();
?>

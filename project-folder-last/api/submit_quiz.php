<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "srv504.hstgr.io";
$db = "u307889669_alnoor";
$user = "u307889669_alnoor";
$pass = "Alnoor123@456";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "Connection failed";
    exit;
}

$email = trim($_POST['email'] ?? '');
$score = intval($_POST['score'] ?? 0);

if (!$email || $score < 0) {
    echo "Invalid input.";
    exit;
}

$stmt = $conn->prepare("INSERT INTO quiz_results (email, score) VALUES (?, ?)");
$stmt->bind_param("si", $email, $score);

if ($stmt->execute()) {
    echo "Quiz score saved successfully.";
} else {
    echo "Failed to save score.";
}

$stmt->close();
$conn->close();
exit;

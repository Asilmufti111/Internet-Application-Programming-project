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

// Check if a record with the email already exists
$check = $conn->prepare("SELECT id FROM quiz_results WHERE email = ? ");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    // Record exists, update it
    $check->bind_result($existing_id);
    $check->fetch();
    $check->close();

    $stmt = $conn->prepare("UPDATE quiz_results SET score = ? WHERE id = ?");
    $stmt->bind_param("ii", $score, $existing_id);
} else {
    // No previous score, insert new
    $check->close();
    $stmt = $conn->prepare("INSERT INTO quiz_results (email, score) VALUES (?, ?)");
    $stmt->bind_param("si", $email, $score);
}


if ($stmt->execute()) {
    echo "Quiz score saved successfully.";
} else {
    echo "Failed to save score.";
}

$stmt->close();
$conn->close();
exit;

<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB credentials
// Database connection settings
$host = "srv504.hstgr.io";
$dbname = "u307889669_alnoor";
$user = "u307889669_alnoor";
$pass = "Alnoor123@456";

// Connect
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

// Validate
if (empty($email) || empty($subject) || empty($message)) {
  die("All fields are required.");
}

// Insert into DB
$stmt = $conn->prepare("INSERT INTO contact_us (email, subject, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $subject, $message);

if ($stmt->execute()) {
  echo "<script>alert('Message sent successfully!'); window.location.href = '../pages/contact.html';</script>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

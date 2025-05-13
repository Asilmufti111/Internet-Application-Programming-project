<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Validate required fields
if (empty($email) || empty($subject) || empty($message)) {
  die("All fields are required.");
}

// Check if email exists in feedback table (form)
$check = $conn->prepare("SELECT id FROM form WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows === 0) {
  // No feedback found, redirect to feedback page
  echo "<script>
    alert('Please provide feedback first so we can better understand your needs.');
    window.location.href = '../pages/feedback.html';
  </script>";
  $check->close();
  $conn->close();
  exit();
}
$check->close();

// Insert into contact_us table
$stmt = $conn->prepare("INSERT INTO contact_us (email, subject, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $subject, $message);

if ($stmt->execute()) {
  echo "<script>
    alert('Message sent successfully!');
    window.location.href = '../pages/contact.html';
  </script>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


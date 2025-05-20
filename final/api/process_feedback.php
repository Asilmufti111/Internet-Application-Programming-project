<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-Type: application/json"); // Always return JSON

// Set RESTful API headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");

// Detect if the request is a JSON API call
$isApi = false;
if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
    header("Content-Type: application/json");
    $isApi = true;
}

// Database connection settings
$host = "srv504.hstgr.io";
$dbname = "u307889669_alnoor";
$user = "u307889669_alnoor";
$pass = "Alnoor123@456";

// Create connection to MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Handle connection error
if ($conn->connect_error) {
    $error = "Connection failed: " . $conn->connect_error;
    echo $isApi ? json_encode(["error" => $error]) : die($error);
    exit();
}

// Handle GET requests to return all feedback in JSON
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT id, name, email, rating, services_used, preferred_service, comments, submitted_at 
            FROM form ORDER BY submitted_at DESC";

    $result = $conn->query($sql);
    $feedback = [];

    while ($row = $result->fetch_assoc()) {
        $feedback[] = $row;
    }

    echo json_encode($feedback);
    $conn->close();
    exit();
}

// Handle POST requests: Accept feedback data from form or JSON
if ($isApi) {
    // Handle JSON input
    $data = json_decode(file_get_contents("php://input"), true);
    $name = trim($data['name'] ?? '');
    $email = trim($data['email'] ?? '');
    $comments = trim($data['feedback'] ?? '');
    $rating = $data['rating'] ?? 'N/A';
    $services_used = isset($data['services_used']) && is_array($data['services_used']) 
    ? implode(", ", $data['services_used']) 
    : 'N/A';

    $preferred_service = $data['preferred_service'] ?? 'N/A';
} else {
    // Handle HTML form input
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $rating = isset($_POST['rating']) ? $_POST['rating'] : 'N/A';
    $services_used = isset($_POST['services']) ? implode(", ", $_POST['services']) : 'N/A';
    $preferred_service = trim($_POST['preferences']);
    $comments = trim($_POST['message']);
}

// Validate required fields
if (empty($name) || empty($email) || empty($comments)) {
    $msg = "Please fill in all required fields.";
    echo $isApi ? json_encode(["error" => $msg]) : die($msg);
    exit();
}

// Check for duplicate email before inserting
$check_query = $conn->prepare("SELECT id FROM form WHERE email = ?");
$check_query->bind_param("s", $email);
$check_query->execute();
$check_query->store_result();

if ($check_query->num_rows > 0) {
    // Email has already submitted feedback
    $msg = "This email has already submitted feedback. Only one entry is allowed.";
    echo $isApi
        ? json_encode(["error" => $msg])
        : "<script>alert('$msg'); window.location.href = '../pages/feedback.html';</script>";
    $check_query->close();
    $conn->close();
    exit();
}
$check_query->close();

// Insert new feedback into the database
$stmt = $conn->prepare("INSERT INTO form (name, email, rating, services_used, preferred_service, comments) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $rating, $services_used, $preferred_service, $comments);

// Execute insertion and return appropriate response
if ($stmt->execute()) {
    $success = "Thank you for your feedback!";
    echo $isApi
        ? json_encode(["message" => $success])
        : "<script>alert('$success'); window.location.href = '../pages/feedback.html';</script>";
          exit();
} else {
    $error = "Error: " . $stmt->error;
    echo $isApi ? json_encode(["error" => $error]) : die($error);
      exit();
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>

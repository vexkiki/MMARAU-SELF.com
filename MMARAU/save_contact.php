<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['contact_data'])) {
    header("Location: contact.html");
    exit();
}

$name = $_SESSION['contact_data']['name'];
$contact_details = $_SESSION['contact_data']['contact_details'];
$email = $_SESSION['contact_data']['email'];
$message = $_SESSION['contact_data']['message'];

$sql = "INSERT INTO contacts (name, contact_details, email, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $contact_details, $email, $message);

if ($stmt->execute()) {
    echo "<p>Message sent successfully!</p>";
    unset($_SESSION['contact_data']);
} else {
    echo "<p>Error: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
<a href="dashboard.html">Return to Dashboard</a>

<?php
session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password']; 

    
    if (empty($username) || empty($email) || empty($password)) {
        die("Error: Missing form data");
    }

    
    $checkEmail = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();
    if ($result->num_rows > 0) {
        die("Error: Email already registered");
    }
    $checkEmail->close();

    
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            echo "Registration successful! Redirecting...";
            header("Refresh:2; url=login.html"); 
        } else {
            die("Error executing statement: " . $stmt->error);
        }
        $stmt->close();
    } else {
        die("Error preparing statement: " . $conn->error);
    }
}

$conn->close();
?>

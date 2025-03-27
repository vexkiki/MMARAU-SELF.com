<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['contact_data'] = $_POST;
}


if (!isset($_SESSION['contact_data'])) 
{
    header("Location: contact.html");
    exit();
}


$name = isset($_SESSION['contact_data']['name']) ? htmlspecialchars($_SESSION['contact_data']['name']) : "";
$contact_details = isset($_SESSION['contact_data']['contact_details']) ? htmlspecialchars($_SESSION['contact_data']['contact_details']) : "";
$email = isset($_SESSION['contact_data']['email']) ? htmlspecialchars($_SESSION['contact_data']['email']) : "";
$message = isset($_SESSION['contact_data']['message']) ? htmlspecialchars($_SESSION['contact_data']['message']) : "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Contact Form</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="departments.html">Departments</a></li>
            <li><a href="services.html">Services</a></li>
        </ul>
    </nav>

    <div class="wrapper">
        <h1>Review Your Submission</h1>
        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Contact Details:</strong> <?= $contact_details ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Message:</strong> <?= nl2br($message) ?></p>
        
        <div class="review-section">
         <form action="save_contact.php" method="POST">
            <button type="submit" class="btn">Confirm & Submit</button>
         </form>

         <form action="contact.html" method="GET">
            <button type="submit" class="btn">Edit Details</button>
         </form>
        </div>
    </div>
</body>
</html>

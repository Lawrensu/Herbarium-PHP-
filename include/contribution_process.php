<?php
include 'connection.php';

// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header("Location: ../login.php");
    exit();
}

// Get the user ID from the session
$userID = $_SESSION['user_id'];

// Database connection
$conn = new mysqli("localhost", "root", "", "Leafly_DB");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Input validation
    // Used htmlspecialchars to prevent XSS attacks
    // XSS is a type of injection where malicious scripts are injected into web pages
    $plantName = htmlspecialchars($_POST['plant-name']);
    $plantFamily = htmlspecialchars($_POST['plant-family']);
    $plantGenus = htmlspecialchars($_POST['plant-genus']);
    $plantSpecies = htmlspecialchars($_POST['plant-species']);
    
    // File uploads
    $freshLeaf = $_FILES["fresh-leaf"];
    $herbarium = $_FILES["herbarium"];
    
    // Allowed types
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    // Check types of uploaded files
    if (!in_array($freshLeaf["type"], $allowedTypes) || !in_array($herbarium["type"], $allowedTypes)) {
        die("Invalid file type. Only JPG, PNG, and GIF files are allowed.");
    }

    // Ensure the upload directory exists
    $uploadDir = "../uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Define unique file paths
    $freshLeafPath = $uploadDir . uniqid() . "_" . basename($freshLeaf["name"]);
    $herbariumPath = $uploadDir . uniqid() . "_" . basename($herbarium["name"]);

    // Move files to the upload directory
    if (move_uploaded_file($freshLeaf["tmp_name"], $freshLeafPath) &&
        move_uploaded_file($herbarium["tmp_name"], $herbariumPath)) {

        // Combine paths into a single string for storage
        $picturePath = $freshLeafPath . ";" . $herbariumPath;

        // Insert into database using prepared statements
        $sql = $conn->prepare("INSERT INTO userContribution (userID, plantName, plantFamily, plantGenus, plantSpecies, picturePath)
                               VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("isssss", $userID, $plantName, $plantFamily, $plantGenus, $plantSpecies, $picturePath);

        if ($sql->execute()) {
            echo "Contribution successfully saved!";
        } else {
            echo "Error: " . $sql->error;
        }

        $sql->close();
    } else {
        echo "Failed to upload files.";
    }
}

$conn->close();
?>
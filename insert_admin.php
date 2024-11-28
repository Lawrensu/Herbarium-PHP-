<?php
include 'connection.php';
include 'database.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = 'admin';
$password = password_hash('admin', PASSWORD_DEFAULT); // Hash the password

$sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Admin user created successfully.";
} else {
    echo "Error creating admin user.";
}

$stmt->close();
$conn->close();
?>
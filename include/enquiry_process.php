<?php
include 'connection.php';
session_start();

// Retrieve form data from the session
$form_data = $_SESSION['form_data'];

// Extract form data
$fname = $form_data['fname'];
$lname = $form_data['lname'];
$email = $form_data['email'];
$contact = $form_data['contact'];
$street = $form_data['street'];
$city = $form_data['city'];
$state = $form_data['state'];
$postcode = $form_data['postcode'];
$category = $form_data['category'];

// Insert data into the database using prepared statements to prevent SQL injection
$sql = "INSERT INTO userEnquiry (fname, lname, email, contact, street, city, state, postcode, category) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("sssssssss", $fname, $lname, $email, $contact, $street, $city, $state, $postcode, $category);
    
    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Your enquiry has been submitted successfully. We will get back to you soon.';
        $_SESSION['submitted_data'] = $form_data; // Store the submitted data in the session
    } else {
        $_SESSION['error'] = 'Error: ' . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
} else {
    $_SESSION['error'] = 'Error: ' . $conn->error;
}

header("Location: ../enquiry_confirmation.php");
exit();
?>
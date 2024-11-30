<?php
include '../connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $category = $_POST['category'];

    // Insert data into the database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO userEnquiry (fname, lname, email, contact, street, city, state, postcode, category) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssss", $fname, $lname, $email, $contact, $street, $city, $state, $postcode, $category);
        
        // Execute the statement
        if ($stmt->execute()) {
            $success = 'Your enquiry has been submitted successfully. We will get back to you soon.';
        } else {
            $error = 'Error: ' . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        $error = 'Error: ' . $conn->error;
    }

    // Redirect to the confirmation page with success or error message
    header("Location: ../enquiry_confirmation.php?success=" . urlencode($success) . "&error=" . urlencode($error));
    exit();
} else {
    // Redirect to the enquiry form if the request method is not POST
    header("Location: ../enquiry.php");
    exit();
}
?>
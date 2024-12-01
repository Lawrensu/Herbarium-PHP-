<?php
include 'connection.php';
include 'database.php';

if (isset($_POST['userID'])) {
    $userID = intval($_POST['userID']);

    // Prepare and execute the delete statement
    $query = "DELETE FROM registeredUsers WHERE userID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userID);

    if ($stmt->execute()) {
        // Redirect back to the view users page with a success message
        header("Location: view_users.php?message=User deleted successfully");
    } else {
        // Redirect back to the view users page with an error message
        header("Location: view_users.php?message=Error deleting user");
    }

    $stmt->close();
}

$conn->close();
?>
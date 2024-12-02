<?php
session_start();
include '../connection.php';

$password = $_POST['password'];
$user_id = $_SESSION['user_id'];

$query = "SELECT password FROM registeredUsers WHERE userID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($password !== $user['password']) {
    $_SESSION['error'] = "Password is incorrect.";
    header("Location: ../delete_account.php");
    exit();
}

// Delete the user's contributions first
$query = "DELETE FROM userContribution WHERE userID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();

// Then delete the user
$query = "DELETE FROM registeredUsers WHERE userID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);

if ($stmt->execute()) {
    session_destroy();
    header("Location: ../delete_account_confirmation.php");
    exit();
} else {
    $_SESSION['error'] = "Error deleting account.";
    header("Location: ../delete_account.php");
    exit();
}
?>
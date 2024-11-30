<?php
session_start();
include '../connection.php';

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

if ($new_password !== $confirm_password) {
    $_SESSION['error'] = "New passwords do not match.";
    header("Location: ../change_password.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT password FROM registeredUsers WHERE userID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($current_password !== $user['password']) {
    $_SESSION['error'] = "Current password is incorrect.";
    header("Location: ../change_password.php");
    exit();
}

$query = "UPDATE registeredUsers SET password = ? WHERE userID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $new_password, $user_id);

if ($stmt->execute()) {
    $_SESSION['success'] = "Password changed successfully.";
    header("Location: ../change_password_confirmation.php");
    exit();
} else {
    $_SESSION['error'] = "Error changing password.";
    header("Location: ../change_password.php");
    exit();
}
?>
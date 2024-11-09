<?php 
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Leafly_DB";

    // create connection
    $conn = mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Tables creation

    // Registration/Registered User table
    $sql = "CREATE TABLE IF NOT EXISTS registeredUsers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(25) NOT NULL,
        email VARCHAR(25) NOT NULL,
        password VARCHAR(25) NOT NULL,
        reg_date TIMESTAMP
    )";


    // Enquiry table
    $sql =  ;


    // Contribution table
    $sql = "CREATE TABLE IF NOT EXISTS usersContribution ()";


    

    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
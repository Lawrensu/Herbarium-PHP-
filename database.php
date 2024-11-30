<?php 
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Leafly_DB";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Tables creation
    //Table of admin
    $sql = "CREATE TABLE IF NOT EXISTS admin(
        adminID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(25) NOT NULL,
        password VARCHAR(255) NOT NULL 
    )";

    mysqli_query($conn, $sql);


    // Registration/Registered User table
    $sql = "CREATE TABLE IF NOT EXISTS registeredUsers (
        userID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(25) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(25) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    mysqli_query($conn, $sql);

    // Enquiry table
    $sql =  "CREATE TABLE IF NOT EXISTS userEnquiry (
        enquiryID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(25) NOT NULL,
        lname VARCHAR(25) NOT NULL,
        email VARCHAR(50) NOT NULL,
        contact INT(10) NOT NULL,
        street VARCHAR(40) NOT NULL,
        city VARCHAR(20) NOT NULL,
        state TEXT,
        postcode INT(5) NOT NULL,
        category TEXT
    )";

    mysqli_query($conn, $sql);


    // Contribution table
    $sql = "CREATE TABLE IF NOT EXISTS userContribution (
        contributionID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        userID INT(6) UNSIGNED NOT NULL,
        plantName VARCHAR(25) NOT NULL,
        plantFamily TEXT,
        plantGenus TEXT,
        plantSpecies TEXT,
        picturePath VARCHAR(255), 
        contribution_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (userID) REFERENCES registeredUsers(userID)
    )";

    mysqli_query($conn, $sql);


    mysqli_close($conn);
?>
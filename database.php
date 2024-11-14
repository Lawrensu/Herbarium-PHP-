<?php 
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Leafly_DB";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Tables creation

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
        phonenumber INT(10) NOT NULL,
        category TEXT
    )";

    mysqli_query($conn, $sql);


    // Contribution table
    $sql = "CREATE TALBE IF NOT EXISTS userContribution (
        contributionID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        plantName VARCHAR(25) NOT NULL,
        plantFamily TEXT,
        plantGenus TEXT,
        plantSpecies TEXT,
        picturePath VARCHAR(255),  // Column to store the file path of the uploaded picture
        contribution_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (userID) REFERENCES registeredUsers(userID)
    )";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>
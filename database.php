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
    $sql = "CREATE TABLE IF NOT EXISTS registeredUsers ()";


    // Enquiry table
    $sql =  ;


    // Contribution table
    $sql = ;


    

    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
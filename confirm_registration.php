<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration Confirmation</title>
    <meta charset = "utf-8"/>
    <meta name = "description" content = "Leafly Registration Form" />
    <meta name = "keywords"    content = " " />
</head>

<body class = "regconfirm">
    <?php include ('connection.php');?>
<h1 id = "confirm_title">Registration Confirmation</h1>
<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $upassword = $_POST['upassword'];
?>

<form id = "register">
    <fieldset class = "reg_fieldset">
        <legend class = "confirm_clegend">Registration Details</legend>
        <p class = "form">Name: <?php echo $_POST['firstname'] . " " . $_POST['lastname'] ?></p>
        <p class = "form">Username: <?php echo $_POST['user'] ?></p>
        <p class = "form">Email: <?php echo $_POST['email'] ?></p>
        <p class = "form">Password: <?php echo $_POST['upassword'] ?></p>
    </fieldset>
        
    <p>Thank you for registering with us!</p>
    
    <?php
        $servername = "localhost";
        $username ="root";
        $password = "";
        $dbname = "Leafly_DB";
        
        // Create connection
        $conn = mysqli_connect ($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['user']) || empty($_POST['email']) || empty($_POST['upassword'])) {
            require 'error_registration.php';
            exit();
        }
        
        $sql = "INSERT INTO LA_REGISTRATION (firstname, lastname, user, email, upassword)
        VALUES ('$firstname', '$lastname', '$user', '$email', '$upassword')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Registered successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    ?>
</form>

<?php include_once 'include/footer.php';?>
</body>
</html>
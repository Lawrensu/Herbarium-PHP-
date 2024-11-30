//error checking 
<?php
    //include database connection 
    include 'database.php';
    //initialize variables to store error messages
    $fnameError = $lnameError = $emailError = $passwordError = "";
    $fname = $lname = $email = $password = "";
    //check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $valid = true;

        if (empty($_POST["fname"])){
            $fnameError = "First name is required";
            $valid = false;
        }else{
            $fname = test_input($_POST["fname"]);
        }

        if (empty($_POST["lname"])){
            $lnameError = "Last name is required";
            $valid = false;
        }else{
            $lname = test_input($_POST["lname"]);
        }

        if (empty($_POST["email"])){
            $emailError = "Email is required";
            $valid = false;
        }else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $emailError = "Invalid email format";
            $valid = false;
        }else{
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["password"])){
            $passwordError = "Password is required";
            $valid = false;
        }else{
            $password = test_input($_POST["password"]);
        }

        if ($valid){
            $sql = "INSERT INTO registeredUsers (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
            if (mysqli_query($conn, $sql)){
                echo "Registration successful!";
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            exit();
        }
    }
//function to clean up data
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="author" content="Mei Yee LAI">
    <meta name="keywords" content="Register for a Leafly account to access exclusive herbarium services and plant preservation resources. Join our community of plant enthusiasts today.">
    <meta name="description" content="registration, Leafly, create account, sign up, herbarium services, plant preservation, join community, plant enthusiasts">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Registration - Leafly</title>
</head>

<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <!-- Connect/Create the database -->
    <?php include 'connection.php'; ?>
    <?php include 'database.php'; ?>

    <main class="registration__wrapper container">
        <div class="registration__container">
            <h1>Registration</h1>
            
            <form action="#" method="post" class="registration__form">

                <fieldset>
                    <legend>Welcome to Leafly</legend>
                    <div class="registration__input-box">
                        <label for="fname">First Name</label>
                        <input type="text" placeholder="Enter your first name" id="fname" name="fname" maxlength="25" minlength="1" required="required" pattern="[a-zA-Z]">
                    </div>
                    
                    <div class="registration__input-box">
                        <label for="lname">Last Name</label>
                        <input type="text" placeholder="Enter your last name" id="lname" name="lname" maxlength="25" minlength="1" required="required" pattern="[a-zA-Z]">
                    </div>
        
                    <div class="registration__input-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" id="email" name="email" required>
                    </div>
        
                    <div class="registration__input-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" id="password" name="password" maxlength="25" minlength="1" required="required">
                    </div>
                </fieldset>
    
                <input class="submit__btn btn" type="submit" value="Register">

                <p>Already have an account? <a class="login__link" href="login.php">Login Here</a></p>
            </form>
        </div>
    </main>

    <!-- Footer Part -->
    <footer>
       <!-- Include footer part -->
         <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
          <section class="acknowledgement-section">
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=moIHTT2XK9g">Registration Form</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
          </section>
      </div>
  
        <a class="enhancement__btn btn" href="enhancement.html">Enhancement</a>
     </footer>

     <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
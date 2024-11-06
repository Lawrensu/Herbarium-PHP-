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

    <!-- The database -->
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

                <p>Already have an account? <a class="login__link" href="login.html">Login Here</a></p>
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
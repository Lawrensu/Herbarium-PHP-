<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Get in touch with us for any inquiries about our herbarium services, plant preservation, and more. We're here to help with all your questions and needs.">
    <meta name="keywords" content="enquiry, herbarium, plant preservation, contact us, plant services, herbarium inquiries, plant care questions">
    <meta name="author" content="Edward">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Enquiry - Leafly</title>
</head>

<body>
   <!-- Including header part -->
   <?php include 'include/header.php'; ?>

   <main class="enquiry__wrapper container">
     <article class="enquiry">
        <form class="enquiry__form" action="include/enquiry_process.php" method="post">
            <div class="enquiry__contact-box">
                <h1>Enquiry Form</h1>

                <?php
                $errors = [];

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Example validation
                    if (empty($_POST['fname'])) {
                        $errors[] = 'First Name is required.';
                    }

                    if (empty($_POST['lname'])) {
                        $errors[] = 'Last Name is required.';
                    }

                    if (empty($_POST['email'])) {
                        $errors[] = 'Email is required.';
                    }

                    if (empty($_POST['contact'])) {
                        $errors[] = 'Contact Number is required.';
                    }

                    if (empty($_POST['street'])) {
                        $errors[] = 'Street Address is required.';
                    }

                    if (empty($_POST['city'])) {
                        $errors[] = 'City/Town is required.';
                    }

                    if (empty($_POST['state'])) {
                        $errors[] = 'State is required.';
                    }

                    if (empty($_POST['postcode'])) {
                        $errors[] = 'Postcode is required.';
                    }

                    if (empty($_POST['category'])) {
                        $errors[] = 'Category is required.';
                    }

                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $errors[] = 'Invalid email address.';
                    }

                    if (!preg_match('/^[A-Za-z]{1,25}$/', $_POST['fname'])) {
                        $errors[] = 'First name should contain only alphabetical characters and be up to 25 characters long.';
                    }

                    if (!preg_match('/^[A-Za-z]{1,25}$/', $_POST['lname'])) {
                        $errors[] = 'Last name should contain only alphabetical characters and be up to 25 characters long.';
                    }

                    if (!preg_match('/^\d{10}$/', $_POST['contact'])) {
                        $errors[] = 'Invalid contact number. It should be 10 digits long.';
                    }

                    if (!preg_match('/^[A-Za-z0-9\s,.-]{1,100}$/', $_POST['street'])) {
                        $errors[] = 'Invalid street address.';
                    }

                    if (!preg_match('/^[A-Za-z\s]{1,50}$/', $_POST['city'])) {
                        $errors[] = 'City/Town should contain only alphabetical characters and spaces.';
                    }

                    if (!preg_match('/^[A-Za-z\s]{1,50}$/', $_POST['state'])) {
                        $errors[] = 'State should contain only alphabetical characters and spaces.';
                    }

                    if (!preg_match('/^\d{5}$/', $_POST['postcode'])) {
                        $errors[] = 'Postcode should be exactly 5 digits long.';
                    }

                    if (empty($errors)) {
                        // Redirect to the process page
                        header("Location: include/enquiry_process.php");
                        exit();
                    }
                }

                if (!empty($errors)) {
                    echo '<div class="error-messages">';
                    foreach ($errors as $error) {
                        echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>';
                    }
                    echo '</div>';
                }
                ?>
        
                <fieldset>
                    <legend>Demographic Information</legend>
                    <div class="enquiry__text-box">
                        <label for="fname">First name</label>
                        <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" required="required" pattern="[A-Za-z]{1,25}" title="First name should contain only alphabetical characters and be up to 25 characters long.">      
                    </div>
    
                    <div class="enquiry__text-box">
                        <label for="lname">Last name</label>
                        <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" required="required" pattern="[A-Za-z]{1,25}" title="Last name should contain only alphabetical characters and be up to 25 characters long.">      
                    </div>
    
                    <div class="enquiry__text-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Your Email Address (JohnDoe@hotmail.com)" required="required">  
                    </div>
    
                    <div class="enquiry__text-box">
                        <label for="contact">Contact Number</label>
                        <input type="tel" name="contact" id="contact" placeholder="Enter Your Contact Number (+60123456789)" required="required" pattern="\d{10}" title="Contact number should be exactly 10 digits.">  
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Home Address</legend>

                    <div class="enquiry__text-box">
                        <label for="street">Street address</label>
                        <input type="text" name="street" id="street" placeholder="Enter Your Street Address" required="required" maxlength="40" title="Street address should be up to 40 characters long.">      
                    </div>

                    <div class="enquiry__text-box">
                        <label for="city">City/town</label>
                        <input type="text" name="city" id="city" placeholder="Enter Your City/Town" required="required" maxlength="20" title="City/town should be up to 20 characters long.">      
                    </div>

                    <div class="enquiry__text-box">
                        <label for="state">State</label>
                        <select name="state" id="state" required="required">
                            <option value="">Select State</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Labuan">Labuan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Putrajaya">Putrajaya</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                        </select>
                    </div>

                    <div class="enquiry__text-box">
                        <label for="postcode">Postcode</label>
                        <input type="text" name="postcode" id="postcode" placeholder="Enter Your Postcode" required="required" pattern="\d{5}" title="Postcode should be exactly 5 digits.">      
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Category</legend>
                    <div class="enquiry__text-box">
                        <label for="category">Category</label>
                        <select name="category" id="category" required="required">
                            <option value="">Select Category</option>
                            <option value="Tutorial">Tutorial</option>
                            <option value="Tools Used">Tools Used</option>
                            <option value="Aftercare">Aftercare</option>
                        </select>
                    </div>
                </fieldset>
        
                <input class="submit__btn btn" type="submit" value="Submit">
            </div>
        </form>
     </article>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=dMVLxU7PmB4">Transparent Inquiry Form</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=zh1xus05Kl8&t=40s">Button Style</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
     </footer>

     <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
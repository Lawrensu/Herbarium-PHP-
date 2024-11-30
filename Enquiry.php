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

   <!-- Connect/Create the database -->
   <?php include 'connection.php'; ?>

   <!--Check if the form is submitted -->
   <?php if ($_SERVER["REQUEST_METHOD"] == "POST")  {
        //Retrieve form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postcode = $_POST['postcode'];
        $category = $_POST['category'];

        // Validate form data
        if (empty($fname) || empty($lname) || empty($email) || empty($contact) || empty($street) || empty($city) || empty($state) || empty($postcode) || empty($category)) {
            echo "<script>alert('Please fill in all the fields.')</script>";
        } else {
            // Insert data into the database using prepared statements to prevent SQL injection
            $sql = "INSERT INTO userEnquiry (fname, lname, email, contact, street, city, state, postcode, category) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("sssssssss", $fname, $lname, $email, $contact, $street, $city, $state, $postcode, $category);
                
                // Execute the statement
                if ($stmt->execute()) {
                    echo "<script>alert('Your enquiry has been submitted successfully. We will get back to you soon.')</script>";
                } else {
                    echo "<script>alert('Error: " . $stmt->error . "')</script>";
                }
                
                // Close the statement
                $stmt->close();
            } else {
                echo "<script>alert('Error: " . $conn->error . "')</script>";
            }
        }
    }
    ?>

    <main class="enquiry__wrapper container">
     <article class="enquiry">
        <form class="enquiry__form" action="#" method="post">
            <div class="enquiry__contact-box">
                <h1>Enquiry Form</h1>
        
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
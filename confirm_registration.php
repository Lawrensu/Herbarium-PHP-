<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Leafly Registration Confirmation">
    <meta name="keywords" content="registration, confirmation, Leafly, herbarium, plant preservation">
    <meta name="author" content="Leafly Team">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Registration Confirmation - Leafly</title>
</head>

<body class="regconfirm">
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="registration__wrapper container">
        <div class="registration__container">
            <h1 id="confirm_title">Registration Confirmation</h1>
            <?php
                $firstname = $_POST['fname'];
                $lastname = $_POST['lname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Insert data into the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Leafly_DB";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
                    require 'error_registration.php';
                    exit();
                }

                $sql = "INSERT INTO registeredUsers (fname, lname, email, password) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

                if ($stmt->execute()) {
                    echo "<p>Registered successfully</p>";
                } else {
                    echo "<p>Error: " . $stmt->error . "</p>";
                }

                $stmt->close();
                $conn->close();
            ?>

            <form id="register">
                <fieldset class="reg_fieldset">
                    <legend class="confirm_clegend">Registration Details</legend>
                    <p class="form">Name: <?php echo htmlspecialchars($firstname) . " " . htmlspecialchars($lastname); ?></p>
                    <p class="form">Email: <?php echo htmlspecialchars($email); ?></p>
                    <p class="form">Password: <?php echo htmlspecialchars($password); ?></p>
                </fieldset>
                
                <p>Thank you for registering with us!</p>
            </form>
        </div>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=moIHTT2XK9g">Registration Form</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
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
                $username = htmlspecialchars($_GET['username']);
                $email = htmlspecialchars($_GET['email']);
            ?>

            <form id="register">
                <fieldset class="reg_fieldset">
                    <legend class="confirm_clegend">Registration Details</legend>
                    <p class="form">Username: <?php echo $username; ?></p>
                    <p class="form">Email: <?php echo $email; ?></p>
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
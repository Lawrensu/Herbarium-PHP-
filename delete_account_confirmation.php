<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="author" content="Leafly Team">
    <meta name="description" content="Account deletion confirmation.">
    <meta name="keywords" content="account deletion, confirmation">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Account Deletion Confirmation - Leafly</title>
</head>
<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="confirmation__main-content container">
        <div class="confirmation__container">
            <h1>Account Deletion Confirmation</h1>
            <p>Your account has been deleted successfully.</p>
            <p><a href="index.php" class="btn">Back to Home</a></p>
        </div>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
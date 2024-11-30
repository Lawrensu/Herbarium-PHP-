<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, display a message and provide a link to the login page
    $message = "You must be logged in to submit a contribution.";
    $loginLink = "login.php";
} else {
    // User is logged in, proceed with the form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Include the contribution process script
        include 'include/contribution_process.php';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Learn how you can contribute to our herbarium project. Get involved, support, or donate to help us preserve plant specimens and advance botanical research.">
    <meta name="keywords" content="contribute, herbarium, plant preservation, support, donate, get involved, botanical research, plant specimens">
    <meta name="author" content="Lawrence Lian">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Contribute - Please Log In</title>
</head>
<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="contribution__container container">
        <article class="contribution">
            <section class="contribution__wrapper">
                <h1>Contribute Plant Data</h1>
                <?php if (isset($message)): ?>
                    <p><?php echo $message; ?></p>
                    <p><a href="<?php echo $loginLink; ?>" class="btn">Click here to log in</a></p>
                <?php endif; ?>
            </section>
        </article>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <section class="acknowledgement-section">
                <a class="footer__acknowledgement-link" target="_blank" href="https://www.youtube.com/watch?v=iAxUpo0aJSk&pp=ygUXdXBsb2FkIGltYWdlIGZvcm0gaHRtbCA%3D">Form Tutorial</a>
                <a class="footer__acknowledgement-link" target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file">Form Upload Image</a>
                <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
            </section>
        </div>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
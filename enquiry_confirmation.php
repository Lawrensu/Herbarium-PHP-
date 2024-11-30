<?php
session_start();

// Retrieve the submitted data from the session
$submitted_data = isset($_SESSION['submitted_data']) ? $_SESSION['submitted_data'] : null;

// Clear the submitted data from the session
unset($_SESSION['submitted_data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Enquiry submission confirmation.">
    <meta name="keywords" content="enquiry, confirmation, herbarium, plant preservation">
    <meta name="author" content="Edward">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Enquiry Confirmation - Leafly</title>
</head>

<body>
   <!-- Including header part -->
   <?php include 'include/header.php'; ?>

   <main class="enquiry__wrapper container">
     <article class="enquiry">
        <div class="enquiry__contact-box">
            <h1>Enquiry Submitted</h1>

            <?php if (isset($_SESSION['success'])): ?>
                <p style="color: green;"><?php echo htmlspecialchars($_SESSION['success']); ?></p>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <?php if ($submitted_data): ?>
                <h2>Your Submitted Details</h2>
                <ul>
                    <li><strong>First Name:</strong> <?php echo htmlspecialchars($submitted_data['fname']); ?></li>
                    <li><strong>Last Name:</strong> <?php echo htmlspecialchars($submitted_data['lname']); ?></li>
                    <li><strong>Email:</strong> <?php echo htmlspecialchars($submitted_data['email']); ?></li>
                    <li><strong>Contact Number:</strong> <?php echo htmlspecialchars($submitted_data['contact']); ?></li>
                    <li><strong>Street Address:</strong> <?php echo htmlspecialchars($submitted_data['street']); ?></li>
                    <li><strong>City/Town:</strong> <?php echo htmlspecialchars($submitted_data['city']); ?></li>
                    <li><strong>State:</strong> <?php echo htmlspecialchars($submitted_data['state']); ?></li>
                    <li><strong>Postcode:</strong> <?php echo htmlspecialchars($submitted_data['postcode']); ?></li>
                    <li><strong>Category:</strong> <?php echo htmlspecialchars($submitted_data['category']); ?></li>
                </ul>
            <?php endif; ?>

            <a href="enquiry.php" class="btn">Submit Another Enquiry</a>
        </div>
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
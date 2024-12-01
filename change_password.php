<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="author" content="Leafly Team">
    <meta name="description" content="Change your password.">
    <meta name="keywords" content="change password, account settings">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Change Password - Leafly</title>
</head>
<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="change-password__main-content container">
        <div class="change-password__container">
            <h1>Change Password</h1>
            <form action="include/change_password_process.php" method="post" class="change-password__form">
                <fieldset>
                    <legend>Change Your Password</legend>
                    <div class="change-password__input-box">
                        <label for="current_password">Current Password</label>
                        <input type="password" id="current_password" name="current_password" required>
                    </div>
                    <div class="change-password__input-box">
                        <label for="new_password">New Password</label>
                        <input type="password" id="new_password" name="new_password" required>
                    </div>
                    <div class="change-password__input-box">
                        <label for="confirm_password">Confirm New Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                </fieldset>
                <input class="btn" type="submit" value="Change Password">
            </form>
        </div>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=moIHTT2XK9g">Change Password Tutorial</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="author" content="Leafly Team">
    <meta name="description" content="User Dashboard for managing contributions and account settings.">
    <meta name="keywords" content="user dashboard, contributions, account settings, change password, delete account">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>User Dashboard - Leafly</title>
</head>
<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="dashboard__wrapper container">
        <div class="dashboard__container">
            <h1>User Dashboard</h1>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <p>Here you can manage your account settings.</p>
            
            <ul class="dashboard__links">
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="delete_account.php">Delete Account</a></li>
            </ul>
            
            <p><a href="logout.php" class="btn">Logout</a></p>
        </div>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=moIHTT2XK9g">User Dashboard Tutorial</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
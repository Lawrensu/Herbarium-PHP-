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

    <main class="user-dashboard__main-content">
        <h1>User Dashboard</h1>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <p>Here you can manage your account settings.</p>

        <div class="user-dashboard__sections">
            <!-- Change Password -->
            <section>
                <h2>Change Password</h2>
                <p>Update your account password.</p>
                <a href="change_password.php" class="btn">Change Password</a>
            </section>

            <!-- Delete Account -->
            <section>
                <h2>Delete Account</h2>
                <p>Remove your account from our system.</p>
                <a href="delete_account.php" class="btn">Delete Account</a>
            </section>

            <!-- Logout -->
            <section>
                <h2>Logout</h2>
                <p>Log out securely.</p>
                <a href="logout.php" class="btn">Logout</a>
            </section>
        </div>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>

    </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
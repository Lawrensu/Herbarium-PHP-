<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="author" content="Leafly Team">
    <meta name="description" content="Delete your account.">
    <meta name="keywords" content="delete account, account settings">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Delete Account - Leafly</title>
</head>
<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="delete-account__main-content container">
        <div class="delete-account__container">
            <h1>Delete Account</h1>
            <form action="include/delete_account_process.php" method="post" class="delete-account__form">
                <fieldset>
                    <legend>Delete Your Account</legend>
                    <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                    <div class="delete-account__input-box">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                </fieldset>
                <input class="btn" type="submit" value="Delete Account">
            </form>
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
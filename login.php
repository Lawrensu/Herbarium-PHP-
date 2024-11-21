<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="author" content="Edward">
    <meta name="keywords" content="Access your Leafly account by logging in. Securely manage your plant preservation activities and explore our herbarium services.">
    <meta name="description" content="login, Leafly, account access, user login, secure login, herbarium services, plant preservation">

    <title>Login - Leafly</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <!-- Include header Part -->
    <?php include 'include/header.php'; ?>

    <!-- Login Session Part -->
    <?php
        session_start();
        include 'connection.php';
        include 'database.php';

        /// Reconnect to the database for further operations
        $conn = new mysqli($servername, $username, $password, 'Leafly_DB');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $error = '';
        $success = '';

        // Check if the user is already logged in
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Check if the user is an admin
            $query = "SELECT * FROM admin WHERE username = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                $admin = $result->fetch_assoc();
                if ($password === $admin['password']) {
                    $_SESSION['admin_username'] = $admin['username'];
                    header("Location: view_admin.php");
                    exit();
                } else {
                    $error = "Invalid password.";
                }
            } else {

                // Check if the user is a registered user
                $query = "SELECT * FROM registeredUsers WHERE email = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
    
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    if ($password === $user['password']) {
                        $_SESSION['user_id'] = $user['userID'];
                        $_SESSION['user_email'] = $user['email'];
                        $success = "You are now logged in.";
                    } else {
                        $error = "Invalid password.";
                    }
                } else {
                    $error = "No user found with this email.";
                }
            }
    
            $stmt->close();
        }
    
        // Ensure the connection is only closed once
        if ($conn) {
            $conn->close();
        }
    ?>

    <main class="login__wrapper container">
        <article class="login__container">
            <h1>Login</h1>

            <?php if (!empty($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <p class="success"><?php echo $success; ?></p>
                <p><a href="change_password.php">Change Password</a> | <a href="delete_account.php">Delete Account</a></p>
            <?php else: ?>

            <form action="#" class="login__form" method="post">
                <fieldset>
                    <legend>Welcome back to Leafly</legend>
                    <div class="login__input-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" id="email" name="email" required="required">
                    </div>

                    <div class="login__input-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" id="password" name="password" maxlength="25" minlength="1" required="required">
                    </div>
                </fieldset>     

                <input class="submit__btn btn" type="submit" value="Login">

                <p>Don't have an account? <a class="register__link" href="registration.php">Register Here</a></p>
            </form>
            <?php endif; ?>
        </article>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer part -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <a target="_blank" class="footer__acknowledgement-link" href="https://youtu.be/hlwlM4a5rxg?si=U6d04DrWrHZOTRda">Login Form Tutorial</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=zh1xus05Kl8&t=40sgit">Button Style</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
        </div>
     </footer>

    <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
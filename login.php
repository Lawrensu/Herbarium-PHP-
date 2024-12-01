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
    <!-- Include Header -->
    <?php include 'include/header.php'; ?>

    <!-- Login Session -->
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include 'connection.php';
    include 'database.php';

    // Reconnect to the database for further operations
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error);
        die("Connection failed: " . $conn->connect_error);
    }

    $error = '';
    $success = '';

    // Handle login submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $identifier = trim($_POST['identifier'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($identifier) || empty($password)) {
            $error = "Please fill in all fields.";
        } else {
            // Admin login
            if ($identifier === 'admin' && $password === 'admin') {
                $_SESSION['username'] = 'admin';
                session_regenerate_id();
                header("Location: view_admin.php");
                exit();
            } else {
                // User login
                $query = "SELECT * FROM registeredUsers WHERE email = ?";
                $stmt = $conn->prepare($query);

                if ($stmt) {
                    $stmt->bind_param("s", $identifier);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $user = $result->fetch_assoc();
                        if (password_verify($password, $user['password'])) {
                            $_SESSION['user_id'] = $user['userID'];
                            $_SESSION['user_email'] = $user['email'];
                            session_regenerate_id();
                            header("Location: user_dashboard.php");
                            exit();
                        } else {
                            $error = "Invalid password.";
                        }
                    } else {
                        $error = "No account found with that email.";
                    }
                    $stmt->close();
                } else {
                    $error = "Database error: Unable to process your request.";
                }
            }
        }
    }

    $conn->close();
    ?>

    <!-- Login Form -->
    <main class="login__wrapper container">
        <article class="login__container">
            <h1>Login</h1>

            <?php if (!empty($error)): ?>
                <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <p class="success"><?php echo htmlspecialchars($success); ?></p>
            <?php else: ?>
                <form action="#" class="login__form" method="post">
                    <fieldset>
                        <legend>Welcome back to Leafly</legend>
                        <div class="login__input-box">
                            <label for="identifier">Username or Email</label>
                            <input type="text" placeholder="Enter your username or email" id="identifier" name="identifier" required>
                        </div>
                        <div class="login__input-box">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Enter your password" id="password" name="password" maxlength="25" minlength="1" required>
                        </div>
                    </fieldset>
                    <input class="submit__btn btn" type="submit" value="Login">
                    <p>Don't have an account? <a class="register__link" href="registration.php">Register Here</a></p>
                    <p><a class="forgot__link" href="change_password.php">Forgot Password?</a></p>
                </form>
            <?php endif; ?>
        </article>
    </main>

    <!-- Footer -->
    <footer>
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
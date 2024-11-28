<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Admin View</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
     <!-- Header Part -->
<header id="top" class="header container">
    <!-- Navigation -->
    <nav class="nav__wrapper-logo">
        <a href="index.php">
            <img class="logo__img" src="images/constant/logo.png" alt="Leafly">
        </a>
    </nav>

    <nav class="nav__wrapper-links">
        <input type="checkbox" id="nav-toggle" class="nav__toggle-checkbox">
        <label for="nav-toggle" class="nav__toggle-label">
            <span></span>
            <span></span>
            <span></span>
        </label>
            
        <ul class="nav__menu">
            <li><a class="nav__link" href="view_enquiry.php">Manage Enquiries</a></li>
            <li><a class="nav__link" href="user_dashboard.php">Manage Users</a></li>
            <li><a class="nav__link" href="view_contribution.php">Manage Contributions</a></li>
        </ul>
    </nav>

    <nav class="nav__wrapper-login">
        <a class="nav__login-link" href="#" onclick="toggleAdminDetails()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
            </svg>
        </a>
        <div id="admin-details" class="index__dropdown-login" style="display: none;">
            <a href="logout.php">Logout</a>
        </div>
    </nav>
</header>

    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="view_enquiry.php">Manage Enquiries</a></li>
        <li><a href="user_dashboard.php">Manage Users</a></li>
        <li><a href="view_contribution.php">Manage Herbarium Contributions</a></li>
    </ul>


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

    <script>
        function toggleAdminDetails() {
            var details = document.getElementById('admin-details');
            if (details.style.display === 'none') {
                details.style.display = 'block';
            } else {
                details.style.display = 'none';
            }
        }
    </script>
</body>
</html>
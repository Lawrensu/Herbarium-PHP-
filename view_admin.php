<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Gibson">
    <meta name="description" content="admin dashboard">
    <meta name="keywords" content="admin,view">

    <title>Admin View</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
     <!-- Header Part -->
    <?php include 'include/header.php'; ?>

    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar-admin">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="user_dashboard.php">Users</a></li>
            <li><a href="view_enquiry.php">Enquires</a></li>
            <li><a href="view_contribution.php">Contribution</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Admin View</h1>
            <p>Welcome Admin</p>
            <p>Here you can view the listing users,enquiries and contributions</p>
            <ul>
                <li><a href="user_dashboard.php">View Users</a></li>
                <li><a href="view_enquiry.php">View Enquiries</a></li>
                <li><a href="view_contribute.php">View Contributions</a></li>
            </ul>
        </div>

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